<?php
class PostContr extends Post {
    public function handlePost($title, $about, $country, $date_time, $file, $location, $body) {
        // Validation
        if (empty($title) || empty($about) || empty($country) || empty($date_time) || empty($location) || empty($body) ) {
            // Both body and file are empty
            header("location: ../add_outreaches.php?status=allfieldrequired");
            exit();
        }

        // Process post content
        $this->setPost($title, $about, $country, $date_time, $file, $location, $body);

        // Redirect to success page
        header("location: ../add_outreaches.php?status=postsuccess");
        exit();
    }
}
?>
