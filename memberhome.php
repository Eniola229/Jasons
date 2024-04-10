<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $_SESSION['first_name']; ?> | Jasons </title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
  
    <body>
    <main>
      <nav class="main-menu">
        <h1>Jasons</h1>
        <!-- <img src="http://localhost/json//avatar_uploads/<?php echo $_SESSION['avatar_add']; ?>" alt="profile pics" /> -->
        <ul>
          <li class="nav-item active">
            <b></b>
            <b></b>
            <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="blue" fill-opacity="0" d="M6 8L12 3L18 8V20H6V8Z"><animate fill="freeze" attributeName="fill-opacity" begin="0.9s" dur="0.5s" values="0;1"/></path><g fill="none" stroke="" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path stroke-dasharray="21" stroke-dashoffset="21" d="M5 21H19"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="21;0"/></path><path stroke-dasharray="15" stroke-dashoffset="15" d="M5 21V8M19 21V8"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.2s" dur="0.2s" values="15;0"/></path><path stroke-dasharray="26" stroke-dashoffset="26" d="M2 10L12 2L22 10"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.5s" dur="0.4s" values="26;0"/></path></g></svg>
              <span class="nav-text">Home</span>
            </a>
          </li>

          <li class="nav-item">
            <b></b>
            <b></b>
            <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-dasharray="20" stroke-dashoffset="20" stroke-linecap="round" stroke-width="2"><path d="M6 19V18C6 15.7909 7.79086 14 10 14H14C16.2091 14 18 15.7909 18 18V19"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.4s" values="20;0"/></path><path d="M12 11C10.3431 11 9 9.65685 9 8C9 6.34315 10.3431 5 12 5C13.6569 5 15 6.34315 15 8C15 9.65685 13.6569 11 12 11Z"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.5s" dur="0.4s" values="20;0"/></path></g></svg>
              <span class="nav-text">Profile</span>
            </a>
          </li>

          <li class="nav-item">
            <b></b>
            <b></b>
            <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><rect width="16" height="16" x="4" y="4" stroke-dasharray="64" stroke-dashoffset="64" rx="1"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.5s" values="64;0"/></rect><path stroke-dasharray="6" stroke-dashoffset="6" d="M7 4V2M17 4V2"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.5s" dur="0.2s" values="6;0"/></path><path stroke-dasharray="12" stroke-dashoffset="12" d="M7 11H17"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.8s" dur="0.2s" values="12;0"/></path><path stroke-dasharray="9" stroke-dashoffset="9" d="M7 15H14"><animate fill="freeze" attributeName="stroke-dashoffset" begin="1s" dur="0.2s" values="9;0"/></path></g><rect width="14" height="0" x="5" y="5" fill="currentColor"><animate fill="freeze" attributeName="height" begin="0.5s" dur="0.2s" values="0;3"/></rect></svg>
              <span class="nav-text">Outreaches</span>
            </a>
          </li>

          <li class="nav-item">
            <b></b>
            <b></b>
            <a href="includes/logout.inc.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><g fill="none" stroke="red" stroke-linecap="round" stroke-width="2"><path stroke-dasharray="32" stroke-dashoffset="32" d="M12 4H5C4.44772 4 4 4.44772 4 5V19C4 19.5523 4.44772 20 5 20H12"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.4s" values="32;0"/></path><path stroke-dasharray="12" stroke-dashoffset="12" d="M9 12h11.5" opacity="0"><set attributeName="opacity" begin="0.5s" to="1"/><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.5s" dur="0.2s" values="12;0"/></path><path stroke-dasharray="6" stroke-dashoffset="6" d="M20.5 12l-3.5 -3.5M20.5 12l-3.5 3.5" opacity="0"><set attributeName="opacity" begin="0.7s" to="1"/><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.7s" dur="0.2s" values="6;0"/></path></g></svg>
              <span class="nav-text">Logout</span>
            </a>
          </li>
        </ul>
      </nav>

      <section class="content">
        <div class="left-content">
          <div class="activities">
            <h1>What We Do</h1>
            <div class="activity-container">
              <div class="image-container img-one">
                <img src="https://th.bing.com/th/id/OIP.eeFbGMnNjam9PfKG2m1AJAHaE8?w=270&h=180&c=7&r=0&o=5&pid=1.7" alt="medicine" />
                <div class="overlay">
                  <h3>Free Medicine</h3>
                </div>
              </div>

              <div class="image-container img-two">
                <img src="https://th.bing.com/th/id/OIP.nUjYS9yMtFclIIm3H-nZuAHaE8?w=279&h=186&c=7&r=0&o=5&pid=1.7" alt="care for old" />
                <div class="overlay">
                  <h3>Free Care for Old</h3>
                </div>
              </div>

              <div class="image-container img-three">
                <img src="https://th.bing.com/th/id/OIP.erDsixiE1FeiwaoELs_iSgHaFL?w=239&h=180&c=7&r=0&o=5&pid=1.7" alt="Free Meidical" />
                <div class="overlay">
                  <h3>Free Medical Outreaches</h3>
                </div>
              </div>

              <div class="image-container img-four">
                <img src="https://www.jasonsinternational.org/assets/images/20151218-180223-2000x1500.jpg" alt="our team" />
                <div class="overlay">
                  <h3></h3>
                </div>
              </div>

              <div class="image-container img-five">
                <img src="https://www.jasonsinternational.org/assets/images/21-1-1584x1188.jpg" alt="" />
                <div class="overlay">
                  <h3></h3>
                </div>
              </div>

              <div class="image-container img-six">
                <img src="https://www.jasonsinternational.org/assets/images/cross-river-nigeria-3-2000x1333-800x533.jpg" alt="swimming" />
                <div class="overlay">
                  <h3></h3>
                </div>
              </div>
            </div>
          </div>

          <div class="left-bottom">
            <div class="weekly-schedule">
              <h1>Next Outreach</h1>
              <div class="calendar">
                <div class="day-and-activity activity-one">
                  <div class="day">
                    <h1>13</h1>
                    <p>mon</p>
                  </div>
                  <div class="activity">
                    <h2>Swimming</h2>
                    <div class="participants">
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/c61daa1c-5881-43f8-a50f-62be3d235daf" style="--i: 1" alt="" />
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/90affa88-8da0-40c8-abe7-f77ea355a9de" style="--i: 2" alt="" />
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/07d4fa6f-6559-4874-b912-3968fdfe4e5e" style="--i: 3" alt="" />
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/e082b965-bb88-4192-bce6-0eb8b0bf8e68" style="--i: 4" alt="" />
                    </div>
                  </div>
                  <button class="btn">Join</button>
                </div>

                <div class="day-and-activity activity-two">
                  <div class="day">
                    <h1>15</h1>
                    <p>wed</p>
                  </div>
                  <div class="activity">
                    <h2>Yoga</h2>
                    <div class="participants">
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/c61daa1c-5881-43f8-a50f-62be3d235daf" style="--i: 1" alt="" />
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/32037044-f076-433a-8a6e-9b80842f29c9" style="--i: 2" alt="" />
                    </div>
                  </div>
                  <button class="btn">Join</button>
                </div>

                <div class="day-and-activity activity-three">
                  <div class="day">
                    <h1>17</h1>
                    <p>fri</p>
                  </div>
                  <div class="activity">
                    <h2>Tennis</h2>
                    <div class="participants">
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/32037044-f076-433a-8a6e-9b80842f29c9" style="--i: 1" alt="" />
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/e082b965-bb88-4192-bce6-0eb8b0bf8e68" style="--i: 2" alt="" />
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/c61daa1c-5881-43f8-a50f-62be3d235daf" style="--i: 3" alt="" />
                    </div>
                  </div>
                  <button class="btn">Join</button>
                </div>

                <div class="day-and-activity activity-four">
                  <div class="day">
                    <h1>18</h1>
                    <p>sat</p>
                  </div>
                  <div class="activity">
                    <h2>Hiking</h2>
                    <div class="participants">
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/07d4fa6f-6559-4874-b912-3968fdfe4e5e" style="--i: 1" alt="" />
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/32037044-f076-433a-8a6e-9b80842f29c9" style="--i: 2" alt="" />
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/07d4fa6f-6559-4874-b912-3968fdfe4e5e" alt="" />
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/c61daa1c-5881-43f8-a50f-62be3d235daf" style="--i: 4" alt="" />
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/90affa88-8da0-40c8-abe7-f77ea355a9de" style="--i: 5" alt="" />
                    </div>
                  </div>
                  <button class="btn">Join</button>
                </div>
              </div>
            </div>

            <div class="personal-bests">
              <h1>About You</h1>
              <div class="personal-bests-container">
                <div class="best-item box-one">
                  <p><?php echo $_SESSION['job_pro'] ?></p>
                  <p style="color:red; font-size: 0.8rem;">Meet Other <?php echo $_SESSION['job_pro'] ?> in our team</p>
                </div>
                <div class="best-item box-two">
                  <p>Outreaches Attended</p>
                  <p>NULL</p>
                </div>
                <div class="best-item box-three">
                  <p>Countries/State Reached</p>
                  <p>NULL</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="right-content">
          <div class="user-info">
            <div class="icon-container">
              <i class="fa fa-bell nav-icon"></i>
              <i class="fa fa-message nav-icon"></i>
            </div>
            <h4><?php echo $_SESSION['first_name']; ?> <?php echo $_SESSION['last_name']; ?></h4>
           <img src="http://localhost/json//avatar_uploads/<?php echo $_SESSION['avatar_add']; ?>" alt="profile pics" />
          </div>

     <!--      <div class="active-calories">
            <h1 style="align-self: flex-start">Day to New Out</h1>
            <div class="active-calories-container">
              <div class="box" style="--i: 85%">
                <div class="circle">
                  <h2>85<small>%</small></h2>
                </div>
              </div>
              <div class="calories-content">
                <p><span>Today:</span> 400</p>
                <p><span>This Week:</span> 3500</p>
                <p><span>This Month:</span> 14000</p>
              </div>
            </div>
          </div> -->

          <div class="mobile-personal-bests">
            <h1>About You</h1>
            <div class="personal-bests-container">
              <div class="best-item box-one">
                  <p><?php echo $_SESSION['job_pro'] ?></p>
                  <p style="color:red; font-size: 0.8rem;">Meet Other <?php echo $_SESSION['job_pro'] ?> in our team</p>
                </div>
                <div class="best-item box-two">
                  <p>Outreaches Attended</p>
                  <p>NULL</p>
                </div>
                <div class="best-item box-three">
                  <p>Countries/State Reached</p>
                  <p>NULL</p>
              </div>
            </div>
          </div>

          <div class="friends-activity">
            <h1>News</h1>
            <div class="card-container">
              <div class="card">
                <div class="card-user-info">
                  <!-- <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/9290037d-a5b2-4f50-aea3-9f3f2b53b441" alt="" /> -->
                  <h2>Canada</h2>
                </div>
                <img class="card-img" src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/bef54506-ea45-4e42-a1b6-23a48f61c5e8" alt="" />
                <p>We completed the 30-Day Running Streak Challenge!🏃‍♀️🎉</p>
              </div>

              <div class="card card-two">
                <div class="card-user-info">
                  <!-- <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/42616ef2-ba96-49c7-80ea-c3cf1e2ecc89" alt="" /> -->
                  <h2>United Kindom</h2>
                </div>
                <img class="card-img" src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/2dcc1b94-06c5-4c62-b886-53b9e433fd44" alt="" />
                <p>I just set a new record in cycling: 30 miles!💪</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </body>

</body>
</html>
<script type="text/javascript" src="js/home.js"></script>