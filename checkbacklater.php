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
          font-size: 40px;
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
       <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><mask id="lineMdPersonSearchTwotone0"><g fill-opacity="0" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><g fill="#fff" stroke="#fff"><path stroke-dasharray="20" stroke-dashoffset="20" d="M10 5C11.66 5 13 6.34 13 8C13 9.65685 11.6569 11 10 11C8.3431 11 7 9.65685 7 8C7 6.34315 8.3431 5 10 5z"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.4s" values="20;0"/></path><path stroke-dasharray="36" stroke-dashoffset="36" d="M10 15C14 15 17 17 17 18V19H3V18C3 17 6 15 10 15z" opacity="0"><set attributeName="opacity" begin="0.5s" to="1"/><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.5s" dur="0.4s" values="36;0"/></path><animate fill="freeze" attributeName="fill-opacity" begin="0.9s" dur="0.15s" values="0;0.3"/></g><circle cx="16" cy="16" r="6"><animate fill="freeze" attributeName="fill-opacity" begin="1.2s" dur="0.15s" values="0;1"/></circle><path fill="#fff" stroke="#fff" stroke-dasharray="30" stroke-dashoffset="30" d="M16 19C14.34 19 13 17.66 13 16C13 14.34 14.34 13 16 13C 17.66 13 19 14.34 19 16C19 17.66 17.66 19 16 19v4z" transform="rotate(-45 16 16)"><animate fill="freeze" attributeName="stroke-dashoffset" begin="1.2s" dur="0.4s" values="30;0"/><animate fill="freeze" attributeName="fill-opacity" begin="1.6s" dur="0.15s" values="0;0.3"/></path></g></mask><rect width="24" height="24" fill="currentColor" mask="url(#lineMdPersonSearchTwotone0)"/></svg>
      </div>
       <h1>Dear <?php echo $_SESSION['first_name']; ?>!</h1> 
        <h1>You account has not been approved by our Co-Ordinator</h1> 
        <p>This may take up to 24hours!</p>
      </div>
    </body>
</html>