<?php 
  $data_theloai = $theloai->getAll();
  $data_loaitin = $loaitin->getAll();
?>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container o-nav-menu">
    <div class="menu-toggle" data-toggle="collapse" data-target="#myNavbar"><a style="cursor: pointer"><span class="glyphicon glyphicon-menu-hamburger x-glyphicon"></span></a></div>
    <div class="navbar-brand"><a href="index.php">
        <text style="color: #1d272b; background-color: #4285f4; padding: 5px; border-radius: 0 15px">vn</text>
        <text style="color: #4285f4">news</text></a></div>
    <div class="collapse o-collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <?php  
          foreach ($data_theloai as $row_theloai) {
            ?>
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $row_theloai["name_theloai"]; ?> <span class="glyphicon glyphicon-menu-down"></span></a>
                <ul class="dropdown-menu">
                  <?php  
                    foreach ($data_loaitin as $row_loaitin) {
                      if ($row_loaitin["id_theloai"] == $row_theloai["id_theloai"]) {
                        ?>
                          <li><a href="index.php?mod=loaitin&id_loaitin=<?php echo $row_loaitin["id_loaitin"]; ?>"><?php echo $row_loaitin["name_loaitin"] ?></a></li>
                        <?php
                      }
                    }
                  ?>
                </ul>
              </li>
            <?php
          }
        ?>
        <!--lia(href="http://localhost:3000/faq.html") FAQ
        -->
      </ul>
    </div>
    <div class="menu-search"><a id="open-search"><span class="glyphicon glyphicon-search x-glyphicon"></span></a></div>
    <div class="searchbar" id="searchbar">
      <form class="searchbox" method="get" action="index.php?mod=search">
        <input type="text" name="search" placeholder="Search...">
      </form><a class="close-search" id="close-search"><span class="glyphicon glyphicon-remove x-glyphicon"></span></a>
    </div>
  </div>
</nav>
<div class="navbar-login">
  <div class="login-bar container" >
    <marquee direction="right">Trang báo điện tử luôn cập nhật tin tức hằng ngày</marquee>
    <div class="user-login">
      <ul class="login-or-logout">
        <?php  
          if(!isset($_SESSION["user_login"])) {
            ?>
              <li><a href="index.php?mod=register"><i class="fa fa-user-plus" aria-hidden="true"></i> Đăng ký</a></li>
              <li><a href="user/index.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Đăng nhập</a></li>
            <?php
          }
          else {
            ?>
              <li><a href="user/index.php?mod=account"><i class="fa fa-user-plus" aria-hidden="true"></i> <?php echo $data_user["name_user"] ?></a></li>
              <li><a href="index.php?mod=logout" class="pmd-ripple-effect"><i class="fa fa-sign-in" aria-hidden="true"></i> Đăng xuất</a></li>
            <?php
          }
        ?>
      </ul>
    </div>
  </div>
</div>