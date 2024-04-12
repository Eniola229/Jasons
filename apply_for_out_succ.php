<?php
	session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
    <title>Jasons</title>
  </head>
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: black;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 20px;
          margin-bottom: 10px;
        }
        p {
          color: red;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      svg {
        color: red;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
        width: 50%;
      }
    </style>
    <body>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
       <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path stroke-dasharray="64" stroke-dashoffset="64" stroke-width="2" d="M13 3L19 9V21H5V3H13"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s" values="64;0"/></path><path stroke-dasharray="14" stroke-dashoffset="14" d="M12.5 3V8.5H19"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.7s" dur="0.2s" values="14;0"/></path><g stroke-width="2"><path stroke-dasharray="5" stroke-dashoffset="5" d="M9 17V14"><animate fill="freeze" attributeName="stroke-dashoffset" begin="1s" dur="0.2s" values="5;0"/></path><path stroke-dasharray="6" stroke-dashoffset="6" d="M12 17V13"><animate fill="freeze" attributeName="stroke-dashoffset" begin="1.2s" dur="0.2s" values="6;0"/></path><path stroke-dasharray="7" stroke-dashoffset="7" d="M15 17V12"><animate fill="freeze" attributeName="stroke-dashoffset" begin="1.4s" dur="0.2s" values="7;0"/></path></g></g></svg>
      </div>
       <h1>Dear <?php echo $_SESSION['first_name']; ?>!</h1> 
        <h1>Your application for this <span style="color:red;">Outreach</span> has been sent to our Co-Ordinator for Approver.</h1>
        <p>We will notify you once it has been approved</p> 
        <p>This may take up to 24hours!</p>
        <a href="memberhome.php">Home</a>
      </div>
    </body>
</html>