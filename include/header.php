<header class="header-view">
    <nav class="navbar navbar-inverse nav-sign-in">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <i class="fa fa-bars" aria-hidden="true"></i>                      
          </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <?php  
              if(!isset($_SESSION["user_login"])) {
                ?>
                  <li><a href="index.php?mod=register"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a></li>
                  <li><a href="user/index.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
                <?php
              }
              else {
                ?>
                  <li><a href="user/index.php?mod=account"><i class="fa fa-user-plus" aria-hidden="true"></i> <?php echo $_SESSION["user_data"]["name_user"] ?></a></li>
                  <li><a href="index.php?mod=logout"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a></li>
                <?php
              }
            ?>
          </ul>
        </div>
      </div>
    </nav>
    <div class="jumbotron text-center" style="background-color: #1a2940">
      <div class="header-page">
        <span class="clip-text">VNNEWS</span>
        <p>Trang báo điện tử Việt Nam</p>
      </div>
    </div>
  </header>