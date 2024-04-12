<?php
  session_start();
  include "classes/view_users_app.php";
  include "classes/view_users.php";
  include "classes/view_outreaches.classes.php";
  include "classes/view_outreaches_app.classes.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $_SESSION['first_name']; ?> | Jasons </title>
	<link rel="stylesheet" type="text/css" href="css/cordinator.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="./js/delete_user.js"></script>
</head>

<body>

    <div class="app-container">
  <div class="app-left">
    <button class="close-menu">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
    <div class="app-logo">
      
      <img src="img/logo.png" style="width: 50px; height:50px; border-radius: 50%;">
      <span>Jasons</span>
    </div>
    <ul class="nav-list">
      <li class="nav-list-item">
        <a class="nav-list-link" href="cordinator.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-columns"><path d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18"/></svg>
          Dashboard
        </a>
      </li>
      <li class="nav-list-item">
        <a class="nav-list-link" href="view_outreaches.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
          Outreaches
        </a>
      </li>
        <li class="nav-list-item">
        <a class="nav-list-link" href="add_outreaches.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path stroke-dasharray="64" stroke-dashoffset="64" stroke-width="2" d="M13 3L19 9V21H5V3H13"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s" values="64;0"/></path><path stroke-dasharray="14" stroke-dashoffset="14" d="M12.5 3V8.5H19"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.7s" dur="0.2s" values="14;0"/></path><g stroke-dasharray="8" stroke-dashoffset="8" stroke-width="2"><path d="M9 14H15"><animate fill="freeze" attributeName="stroke-dashoffset" begin="1s" dur="0.2s" values="8;0"/></path><path d="M12 11V17"><animate fill="freeze" attributeName="stroke-dashoffset" begin="1.2s" dur="0.2s" values="8;0"/></path></g></g></svg>
          Add Outreaches
        </a>
      </li>
      <li class="nav-list-item">
        <a class="nav-list-link" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"/><polyline points="13 2 13 9 20 9"/></svg>
          Profile
        </a>
      </li>
      <li class="nav-list-item active">
        <a class="nav-list-link" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          Team
        </a>
      </li>
      <li class="nav-list-item">
        <a class="nav-list-link" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"/><path d="M22 12A10 10 0 0 0 12 2v10z"/></svg>
          Message Co-Ordinator
        </a>
      </li>
      <li class="nav-list-item" style="color:red;">
        <a class="nav-list-link" style="color: red;" href="includes/logout.inc.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2"><path stroke-dasharray="32" stroke-dashoffset="32" d="M12 4H5C4.44772 4 4 4.44772 4 5V19C4 19.5523 4.44772 20 5 20H12"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.4s" values="32;0"/></path><path stroke-dasharray="12" stroke-dashoffset="12" d="M9 12h11.5" opacity="0"><set attributeName="opacity" begin="0.5s" to="1"/><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.5s" dur="0.2s" values="12;0"/></path><path stroke-dasharray="6" stroke-dashoffset="6" d="M20.5 12l-3.5 -3.5M20.5 12l-3.5 3.5" opacity="0"><set attributeName="opacity" begin="0.7s" to="1"/><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.7s" dur="0.2s" values="6;0"/></path></g></svg>
          Logout
        </a>
      </li>
    </ul>
  </div>
  <div class="app-main">
    <div class="main-header-line">
      <h1>Co-Ordinator's Dashboard</h1>
      <div class="action-buttons">
        <button class="open-right-area">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
      </button>
      <button class="menu-button">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
      </button>
      </div>
    </div>
    <!-- <div class="chart-row three">
      <div class="chart-container-wrapper">
        <div class="chart-container">
          <div class="chart-info-wrapper">
            <h2>Applications</h2>
            <span>20.5 K</span>
          </div>
          <div class="chart-svg">
            <svg viewBox="0 0 36 36" class="circular-chart pink">
      <path class="circle-bg" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"></path>
      <path class="circle" stroke-dasharray="30, 100" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"></path>
      <text x="18" y="20.35" class="percentage">30%</text>
    </svg>
          </div>
        </div>
      </div>
      <div class="chart-container-wrapper">
        <div class="chart-container">
          <div class="chart-info-wrapper">
            <h2>Shortlisted</h2>
            <span>5.5 K</span>
          </div>
          <div class="chart-svg">
            <svg viewBox="0 0 36 36" class="circular-chart blue">
      <path class="circle-bg" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"></path>
      <path class="circle" stroke-dasharray="60, 100" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"></path>
      <text x="18" y="20.35" class="percentage">60%</text>
    </svg>
          </div>
        </div>
      </div>
      <div class="chart-container-wrapper">
        <div class="chart-container">
          <div class="chart-info-wrapper">
            <h2>On-hold</h2>
            <span>10.5 K</span>
          </div>
           <div class="chart-svg">
            <svg viewBox="0 0 36 36" class="circular-chart orange">
      <path class="circle-bg" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"></path>
      <path class="circle" stroke-dasharray="90, 100" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"></path>
      <text x="18" y="20.35" class="percentage">90%</text>
    </svg>
          </div>
        </div>
      </div>
    </div> -->
   <!--  <div class="chart-row two">
      <div class="chart-container-wrapper big">
        <div class="chart-container">
          <div class="chart-container-header">
            <h2>New Applications</h2>
          </div>
          <div class="chart-data-details"> -->
            <!------for alert---->
               <?php
        if (isset($_GET['status'])) {
            $errorCode = htmlspecialchars($_GET['status']); // Sanitize input
            switch ($errorCode) {
                case 'stmtfailed':
                    echo '<p style="color: red; text-align: center;">An unexpected error occurred!</p>';
                    break;
                case 'approved':
                    echo '<p style="color: green; text-align: center;">Successful! Member has been Approved</p>';
                    break;
                case 'errora':
                    echo '<p style="color: red; text-align: center;">Error! Could no approved user</p>';
                    break;
                case 'user_deleted':
                    echo '<p style="color: red; text-align: center;">Deleted Succesfully!!!</p>';
                    break;
                default:
                    // Log unrecognized error codes for debugging
                    error_log("Unrecognized error code: $errorCode");
                    echo '<p style="color: red; text-align: center;">An unexpected error occurred! Please try again later.</p>';
                    break;
            }
        } else {
            echo '<p style="color: green; text-align: center;">View All Members!</p>';
        }
        ?>
            <!--------This is the table for users------------>
        
      

         <div class="chart-container-header">
            <h2>ALL Members</h2>
          </div>
         <table>
            <tr>
                <th style="color:white;">ID</th>
                <th style="color:white;">Name</th>
                <th style="color:white;">Email</th>
                <th style="color:white;">Actions</th>
            </tr>
            <?php foreach ($users_all as $user_all): ?>
                <tr>
                    <td style="color:white;"><?php echo $user_all['user_id']; ?></td>
                    <td style="color:white;"><?php echo $user_all['first_name']; ?> <?php echo $user_all['last_name']; ?></td>
                    <td style="color:white;"><?php echo $user_all['email']; ?></td>
                    <td>

                         <a href="includes/delete_user.inc.php?email=<?php echo $user_all['email']; ?>"><button class="btn_delete">Delete</button>
                        <a href="view_info_app.php?id=<?php echo $user_all['user_id']; ?>"><button class="button">View</button></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

          <!-- </div>
        </div>
      </div> -->
      <div class="chart-container-wrapper small">
        
       <!--  <div class="chart-container applicants">
          <div class="chart-container-header">
            <h2>New Applicants</h2>
            <span>Today</span>
          </div>
          <div class="applicant-line">
            <img src="https://images.unsplash.com/photo-1587628604439-3b9a0aa7a163?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjB8fHdvbWFufGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="profile">
            <div class="applicant-info">
              <span>Emma Ray</span>
              <p>Applied for <strong>Product Designer</strong></p>
            </div>
          </div>
          <div class="applicant-line">
            <img src="https://images.unsplash.com/photo-1583195764036-6dc248ac07d9?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2555&q=80" alt="profile">
            <div class="applicant-info">
              <span>Ricky James</span>
              <p>Applied for <strong>IOS Developer</strong></p>
            </div>
          </div>
          <div class="applicant-line">
            <img src="https://images.unsplash.com/photo-1450297350677-623de575f31c?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MzV8fHdvbWFufGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="profile">
            <div class="applicant-info">
              <span>Julia Wilson</span>
              <p>Applied for <strong>UI Developer</strong></p>
            </div>
          </div>
          <div class="applicant-line">
            <img src="https://images.unsplash.com/photo-1596815064285-45ed8a9c0463?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1215&q=80" alt="profile">
            <div class="applicant-info">
              <span>Jess Watson</span>
              <p>Applied for <strong>Design Lead</strong></p>
            </div>
          </div>
          <div class="applicant-line">
            <img src="https://images.unsplash.com/photo-1543965170-4c01a586684e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2232&q=80" alt="profile">
            <div class="applicant-info">
              <span>John Pellegrini</span>
              <p>Applied for <strong>Back-End Developer</strong></p>
            </div>
          </div>
        </div> -->


      </div>
    </div>
  </div>
  <div class="app-right">
    <button class="close-right">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
    <div class="profile-box">
      <div class="profile-photo-wrapper">
        <img src="http://localhost/json//avatar_uploads/<?php echo $_SESSION['avatar_add']; ?>" alt="profile picture">
      </div>
      <p class="profile-text"><?php echo $_SESSION['first_name'] ?> <?php echo $_SESSION['last_name'] ?></p>
       <p class="profile-subtext">Recruiting Manager</p>
    </div>
    <div class="app-right-content">
      <div class="app-right-section">
      <div class="app-right-section-header">
        <h2>Messages</h2>
        <span class="notification-active">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
        </span>
      </div>
      <div class="message-line">
        <img src="https://images.unsplash.com/photo-1562159278-1253a58da141?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MzB8fHBvcnRyYWl0JTIwbWFufGVufDB8MHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="profile">
        <div class="message-text-wrapper">
          <p class="message-text">Eric Clampton</p>
          <p class="message-subtext">Have you planned any deadline for this?</p>
        </div>
      </div>
    </div>
    <div class="app-right-section">
      <div class="app-right-section-header">
        <h2>Outreaches</h2>
        <span class="notification-active">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
        </span>
      </div>

       <?php foreach ($outreaches as $outreache): ?>
      <div class="activity-line">
        <span class="activity-icon draft">
          <img src="http://localhost/json/post_image_uploads/<?php echo $outreache['imgvid_part'] ?>"   width="100%">
        </span>
        <div class="activity-text-wrapper">
          <p class="activity-text"><?php echo $outreache['title'] ?></p>
          <p class="activity-text"><?php echo $outreache['location'] ?></p>
          <p class="activity-text"><?php echo $outreache['date_time'] ?></p>
        </div>
      </div>
       <?php endforeach; ?>


    </div>
    </div>
  </div>
</div>

  <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
  var modeSwitch = document.querySelector('.mode-switch');

  modeSwitch.addEventListener('click', function () {                     document.documentElement.classList.toggle('dark');
    modeSwitch.classList.toggle('active');
  });
  
  var listView = document.querySelector('.list-view');
  var gridView = document.querySelector('.grid-view');
  var projectsList = document.querySelector('.project-boxes');
  
  listView.addEventListener('click', function () {
    gridView.classList.remove('active');
    listView.classList.add('active');
    projectsList.classList.remove('jsGridView');
    projectsList.classList.add('jsListView');
  });
  
  gridView.addEventListener('click', function () {
    gridView.classList.add('active');
    listView.classList.remove('active');
    projectsList.classList.remove('jsListView');
    projectsList.classList.add('jsGridView');
  });
  
  document.querySelector('.messages-btn').addEventListener('click', function () {
    document.querySelector('.messages-section').classList.add('show');
  });
  
  document.querySelector('.messages-close').addEventListener('click', function() {
    document.querySelector('.messages-section').classList.remove('show');
  });
});
  </script>

</body>
</html>