<?php 
  $title = "Home Page";
  $user = new User();
  $row = $user->getById($_SESSION["user_data"]["id_user"]); 
?>
<div class="row" style="height: 50px; background-color: #fff; transition: 0.25s; min-width: 100%; margin: 0">
  <div class="dropdown user_name">
    <button class="navbar-toggle collapse in show-hide-sidebar" data-toggle="collapse" id="menu-toggle-2"> <i class="fa fa-bars" aria-hidden="true"></i></button>
    <div class="dropdown-toggle user-drop" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
     <i class="fa fa-user"></i><?php echo $row["name_user"]; ?>
      <span class="caret"></span>
    </div>
    <ul class="dropdown-menu user-drop-menu" data-dropdown-in="bounceIn" data-dropdown-out="bounceOut">
      <li><a href="index.php?mod=account">My account</a></li>
      <li><a href="index.php?mod=logout">Log out</a></li>
    </ul>
  </div>
</div>

<header class="page-content-header">
  <span class="text-header">
    <?php
      if ($mod == "account")
        $title = "Quản lý tài khoản";
      echo $title;
    ?>
  </span>
  <?php  
    if ($mod == "account") {
      ?>
        <span style="float: right; line-height: 30px;">
          <a href="index.php?mod=account&ac=delete&id=<?php echo $_SESSION["user_data"]["id_user"]; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a> 
        </span>
      <?php
    }
  ?>
  
</header>