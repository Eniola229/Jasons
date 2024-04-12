<?php
class ApplyOutContr extends ApplyOut {
    public function handlePost($name, $email, $country, $outreache_id, $title, $body, $occupation) {
        // Validation
        if (empty($name) || empty($email) || empty($country) || empty($outreache_id) || empty($body)) {
            // All fields are required
            header("location: ../apply_for_out.php?status=allfieldrequired");
            exit();
        }

        // Process form data
        $this->setPost($name, $email, $country, $outreache_id, $title, $body, $occupation);

        // Redirect to success page
        header("location: ../apply_for_out_succ.php?status=appsuccess");
        exit();
    }
}
?>
