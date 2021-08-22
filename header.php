<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="style/style.css" type="text/css" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="./script/main.js"></script>
</head>
<title>Camagru</title>

<body onresize="windowResizeHandler()">
  <!-- Login pop up -->
  <?php include('login.php'); ?>
  <!-- Login pop up -->

  <!-- Logo and login button -->
  <div id="logo_container">
    <a href="">
      <img class="logo" alt="logo" src=../img/logo.png>
    </a>
  </div>
  <!-- Logo and login button -->

  <!-- menu navigation -->
  <div id="nav_container">
    <button id="menu_icon" class="btn" onclick="menuPopUp();">
      <img class="icon" alt="menu" src=../img/menu.png>
    </button>
    <button id="login" class="btn" onclick="loginPopUp()">
      <span class="login_text">log in</span>
      <img class="icon" alt="login" src=../img/login.png>
    </button>
    <a href="">
      <button class="nav btn">
        <span>
          Home
        </span>
      </button>
    </a>
    <a href="">
      <button class="nav btn">
        <span>
          Gallery
        </span>
      </button>
    </a>
    <a href="">
      <button class="nav btn">
        <span>
          Setting
        </span>
      </button>
    </a>
  </div>
  <!-- menu navigation -->