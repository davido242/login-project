<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chats</title>
  <?php echo view("piller/header");?>
</head>
<body>
  <?php echo view('piller/notification_header');?>
  <main>
    <?php echo view("piller/menu_nav_bar")?>
    <!-- notification section -->
    <div class="notification-stat-main">
      <div class="notification-stat">
        <i class="fa fa-bell note-bars"></i><a href="#">Chats</a>
      </div>
      <div class="notification-stat notification-stat-items chat-margin">
        <div class="time-caps">
          <div class="time-caps-self">Monday, Feb 10 </div>
          <hr />
        </div>
      <!-- <p><i class="fa fa-bell note-bars"></i><a href="#">Chatss</a> -->
        <div class="row1">
          <div class="rounded"></div>
          <div class="chat-box2">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
          </p>
          </div>
        </div>
        <div class="row2">
          <div class="rounded rounded-response"></div>
          <div class="chat-box2 chat-response">
            <p>Response Lorem ipsum dolor sit amet, coolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
            </p>
          </div>
        </div>
         <div class="time-caps">
          <div class="time-caps-self">Today</div>
          <hr />
        </div>
          <div class="row1">
            <div class="rounded"></div>
            <div class="chat-box2">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
            </p>
            </div>
          </div>
          <div class="row2">
            <div class="rounded rounded-response"></div>
            <div class="chat-box2 chat-response">
              <p>Response Lorem ipsum dolor sit amet, coolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
              </p>
            </div>
          </div>
            <!-- Message section -->
          <form class="form-text-area">
            <textarea placeholder="Enter your message......"></textarea>
            <div class="form-message-btn">
               <a href=""><button>Send<i class="fa fa-paper-plane-o note-bars"></i></button></a>
            </div>
          </form>
        </div>
      </div>  

    <!-- end of notificaiton section -->
  </main>


<!-- footer section -->
<?php echo view("piller/footer");?>
</body>
</html>