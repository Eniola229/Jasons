<?php
session_start();
include "classes/view_outreaches_co_admin.classes.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>View OutReachs</title>
  <link rel="stylesheet" type="text/css" href="css/view_outreaches.css">
</head>
<body>

  <section class="cards">
<div class="main">
  <h1>OutReaches</h1>
  <ul class="cards">
 <?php foreach ($outreaches as $outreache): ?>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="http://localhost/json/post_image_uploads/<?php echo $outreache['imgvid_part'] ?>"></div>
        <div class="card_content">
          <h2 class="card_title"><?php echo $outreache['title'] ?></h2>
          <p class="card_text"><?php echo $outreache['about'] ?></p>
          <div style="display: flex;">
         
           <a style="text-decoration:none;" href="includes/delete_outreach.inc.php?outreach_id=<?php echo $outreache['outreach_id']; ?>"> <button style="background: red; color:white; border: none;" class="btn card_btn">Delete</button>
          </div>
        </div>
      </div>
    </li>
     <?php endforeach; ?>
  
  </ul>
</div>
  
  </section>

</body>
</html>