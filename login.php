<div id="login_box_container" onclick="login_close_out()">
  <div id="login_box">
    <img alt="login_deco" id="login_deco" src=../img/login_deco.png>
    <img alt="close" class="close icon" src=../img/close.png onclick="login_close()">
    <form name="login" method="post" action="login.php">
      <div></div>
      <div></div>
      <span class="login_title">Login

      </span>
      <fieldset class="textbox">
        <label>
          <span><img class="input_icon icon" alt="user" src=../img/user.png></span>
          <input
            id="username"
            name="username"
            value=""
            type="text"
            autocomplete="on"
            placeholder="Username"
            onfocus="this.placeholder = ''"
            onblur="this.placeholder = 'Username'"
          >
        </label>
        <label>
          <span><img class="input_icon icon" alt="password" src=../img/password.png></span>
          <input
            id="password"
            name="password"
            value=""
            type="password"
            placeholder="Password"
            onfocus="this.placeholder = ''"
            onblur="this.placeholder = 'Password'"
          >
        </label>

        <input type=submit value="Log in">
        <a href=""><span class="login_box_text_1">Forgot password?</span></a>
        <a href=""><span class="login_box_text_2">Register</span></a>
      </fieldset>
    </form>
  </div>
</div>