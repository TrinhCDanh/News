<?php 
  $title = "Home Page";
  $admin = new Admin();
  $row = $admin->getById($_SESSION["admin_data"]["id_admin"]); 
?>
<div class="row" style="height: 50px; background-color: #fff; transition: 0.25s; min-width: 100%; margin: 0">
  <div class="dropdown user_name">
    <button class="navbar-toggle collapse in show-hide-sidebar" data-toggle="collapse" > 
      <i class="fa fa-bars" aria-hidden="true" id="menu-toggle-2"></i>
      <i class="fa fa-envelope" aria-hidden="true"></i>
      <i class="fa fa-bell" aria-hidden="true"></i>
      <i class="fa fa-globe" aria-hidden="true"></i>
    </button>
   
    <div class="dropdown-toggle user-drop" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
     <i class="fa fa-user"></i><?php echo $row["name_admin"]; ?>
      <span class="caret"></span>
    </div>
    <ul class="dropdown-menu user-drop-menu" data-dropdown-in="fadeInUp" data-dropdown-out="bounceOut">
      <li><a href="index.php?mod=account"><i class="fa fa-suitcase"></i> Edit Profile</a></li>
      <li><a href="index.php?mod=logout"><i class="fa fa-power-off"></i> Log Out</a></li>
    </ul>
  </div>
</div>

<header class="page-content-header">
  <span class="text-header">
    <?php
      $icon = "fa-home";  
      if ($mod == "theloai") {
        $title = "Quản lý thê loại";
        $icon = "fa-table";
      }
      if ($mod == "loaitin") {
        $title = "Quản lý loại tin";
        $icon = "fa-tags";
      }
      if ($mod == "account") {
        $title = "Quản lý tài khoản";
        $icon = "fa-suitcase";
      }
      if ($mod == "baiviet") {
        $title = "Quản lý bài viết";
        $icon = "fa-book";
      }
      echo "<i class='fa $icon'></i> &nbsp; " . $title;
    ?>
  </span>
  <?php  
    if ($mod == "account") {
      ?>
        <span style="float: right; line-height: 30px;">
          <a href="index.php?mod=account&ac=addNew"><i class="fa fa-plus" aria-hidden="true"></i> New</a>&nbsp;&nbsp;
          <a href="index.php?mod=account&ac=delete&id=<?php echo $_SESSION["admin_data"]["id_admin"]; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a> 
        </span>
      <?php
    }
  ?>
  
</header>