<?php
  session_start();
include "classes/dbh.classes.php";

class Posts extends Dbh
{
    private $pdo;

    // Constructor receives an existing PDO instance
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getUserById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM outreaches WHERE outreach_id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }
}
// Establish a database connection
$pdo = new PDO("mysql:host=localhost;dbname=jasons", 'root', '');

// Create an instance of the post class
$viewPost = new Posts($pdo);

// Get the post ID from the URL parameter
$post_id = $_GET['id'];

// Retrieve post details by ID
$post = $viewPost->getUserById($post_id);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>View | Jasons</title>
  <link rel="stylesheet" type="text/css" href="css/read_more_out.css">
</head>
<body>

<div class="slider">
<div class="slider-wrapper flex">
  <div class="slide flex">
    <div class="slide-image slider-link prev">
      <img src="http://localhost/json/post_image_uploads/<?php echo $post['imgvid_part']; ?>" alt="view posts"><div class="overlay"></div></div>
    <div class="slide-content">
      <div class="slide-date"><?php echo $post['date_time']; ?></div>
      <div class="slide-title"><?php echo $post['title']; ?></div>
      <div class="slide-title"><?php echo $post['about']; ?></div>
      <div class="slide-text"><?php echo $post['body']; ?></div>
      <button style="background: red; color:white; border:none; height: 5vh; border-radius:5px;">JOIN OUTREACH</button>
    </div>  
  </div>
 
</div>
<!-- <div class="arrows">
<a href="#" title="Previous" class="arrow slider-link prev"></a>
<a href="#" title="Next" class="arrow slider-link next"></a>
</div> -->
</div>

</body>
</html>
