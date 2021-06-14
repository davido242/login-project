<!DOCTYPE html>
<html lang="en">
<head>
  <title>Notifications</title>
  <?php echo view("piller/header");?>
</head>
<body>
  <?php echo view('piller/notification_header');?>
  <main>
    <?php echo view("piller/menu_nav_bar")?>
    <!-- notification section -->
    <div class="notification-stat-main">
      <div class="notification-stat finish">
        <i class="fa fa-bell note-bars"></i><a href="#">Notifications</a>
      </div>
      <div class="notification-stat notification-stat-items">
        <p><i class="fa fa-bell note-bars"></i><a href="#">Notification</a>
            <span> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
            </span>
        </p>
        <p><i class="fa fa-bell note-bars"></i><a href="#">Notification</a>
            <span> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
            </span>
        </p>
        <p><i class="fa fa-bell note-bars"></i><a href="#">Notification</a>
            <span> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
            </span>
        </p>
      </div>  
    </div>

    <!-- end of notificaiton section -->
  </main>


<!-- footer section -->
<?php echo view("piller/footer");?>
</body>
</html>