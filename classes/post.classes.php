<?php

class Post extends Dbh
{
	
protected function setPost($title, $about, $country, $date_time, $file, $location, $body) {
{   
    // Check if a file was uploaded
    if(isset($_FILES['file'])) {
        $file_name = $_FILES['file']['name'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_type = $_FILES['file']['type'];

        // Array of allowed image and video file types
        $allowed_image_types = array('image/jpeg', 'image/png', 'image/gif');
        $allowed_video_types = array('video/mp4', 'video/mpeg', 'video/quicktime');

        // Check if the uploaded file type is allowed
        if(in_array($file_type, $allowed_image_types)) {
            // File is an image
            $uploadDirectory = '../post_image_uploads/';
        } elseif (in_array($file_type, $allowed_video_types)) {
            // File is a video
            $uploadDirectory = '../post_video_uploads/';
        } else if (in_array() == "") {
            
        }
         else {
            // File type is not allowed
            header("location: ../add_outreaches.php.php?status=invalidfiletype");
            exit();
        }


        // Generate a unique name for the file
        $uniqueFileName = uniqid() . '_' . $file_name;

        // Move the uploaded file to the server
        $uploadPath = $uploadDirectory . $uniqueFileName;
        if(move_uploaded_file($file_tmp, $uploadPath)) {
          

            // Insert the unique filename into the database
           $stmt = $this->connect()->prepare('INSERT INTO outreaches (title, about, country, date_time, imgvid_part, location, body) VALUES (?, ?, ?, ?, ?, ?, ?)');


               if ($stmt->execute(array($title, $about, $country, $date_time, $uniqueFileName, $location, $body))) {   
                // Success: redirect to home page
                header("location: ../add_outreaches.php?status=postsuccess");
                exit();
            } else {
                // Database insertion failed
                header("location: ../add_outreaches.php?status=stmtfailed");
                exit();
            }
        } else {
            // File upload failed
            header("location: ../add_outreaches.php?status=fileuploadfailed");
            exit();
        }
    } else {
        // No file uploaded
        header("location: ../add_outreaches.php?status=nofileuploaded");
        exit();
    }
}
}
}