<?php  
  $user = new User();
  $baiviet = new Post();

  $row = $user->getById($_SESSION["user_data"]["id_user"]);
  $info = "";
  $ac = Utils::getIndex("ac");/*, "Showtheloai");*/ //ac is action

  $name_user = Utils::postIndex("name_user");
  $email_user = Utils::postIndex("email_user");
  $pass1_user = Utils::postIndex("pass1_user");
  $pass2_user = Utils::postIndex("pass2_user");
  $err = "";

  if ($ac == "delete") {
    $n = $user->delete(Utils::getIndex("id"));
    unset($_SESSION["user_login"]);
    unset($_SESSION["user_data"]);
    ?>
      <script language="javascript">
        window.location="../index.php";
      </script>
    <?php
    exit;
  }
  else if(isset($_POST["submit"])) {
    if ($user->checkRegister($name_user, $pass1_user, $pass2_user) != "")
      $err .= $user->checkRegister($name_user, $pass1_user, $pass2_user);
    else if ($ac == "saveEdit") {
      $n = $user->saveEdit(Utils::getIndex("id"));
      $baiviet->updateAuthor($row["name_user"]);
      ?>
        <script language="javascript">
          swal('Thành công!','Click OK để tiếp tục!','success');
          $('.swal2-confirm').click(function(){
            window.location="index.php?mod=account";
          });
        </script>
      <?php
    } 
  }  
?>

<div class="content-block">
  <div class="content-block-header col-xs-12 col-lg-12">
    <p>Cập nhật tài khoản</p>
  </div>
  <div class="col-xs-12 col-lg-6">
    <?php 
      if($err != "") {
        ?>
          <div class="alert alert-danger">      
            <?php echo $err; ?>
          </div>
        <?php
      } 
      include "modules/account/editaccount.php";
    ?>
  </div> 
</div>

