<?php  
  $id_baiviet = Utils::getIndex("id_baiviet");
  $id_binhluan = Utils::getIndex("id_binhluan");
  $data_baiviet = $baiviet->getById($id_baiviet);
  $data_binhluan = $binhluan->getAllwithBaiviet($id_baiviet);
  $baivietbyLoaitin = $baiviet->getBaivietbyLoaitin($data_baiviet["id_loaitin"], 6);

  $ac = Utils::getIndex("ac");
  if (isset($_SESSION["user_login"])) {
    $id_user = $data_user["id_user"];
  }
  $noidung_binhluan = Utils::postIndex("noidung_binhluan");
  $name_binhluan = Utils::postIndex("name_binhluan");
  $email_binhluan = Utils::postIndex("email_binhluan");

  // Đếm số lượt xem
  $module_name = 'baiviet';
  if( !isset($_SESSION[$module_name . '_' . $id_baiviet]) ){
    $_SESSION[$module_name . '_' . $id_baiviet] = 1;
    $baiviet->viewCount($id_baiviet);
  }

  if($ac == "delete") {
    $binhluan->delete($id_binhluan);
    ?>
      <script language="javascript">
          window.location="index.php?mod=baiviet&id_baiviet=<?php echo $id_baiviet; ?>";
      </script>
    <?php
  }
  else if(isset($_POST["submit"])) {
    if($ac == "addBinhluan") {
      $binhluan->addBinhluan($id_baiviet, $name_binhluan, $email_binhluan, $noidung_binhluan);
      ?>
        <script language="javascript">
            window.location="index.php?mod=baiviet&id_baiviet=<?php echo $id_baiviet; ?>";
        </script>
      <?php
    }
  }

?>
<section class="main-content">
  <section class="news-container news-show-container container home-reviews">
    <section class="news-primary single-news-primary col-xs-12 col-sm-12 col-md-8 col-lg-8">
      <div class="news-content">
        <div class="page-header">
          <h1 class="news-title"><?php echo $data_baiviet["name_baiviet"]; ?></h1>
          <div class="news-meta"><span><i class="fa fa-user"> </i><?php echo $data_baiviet["name_tacgia"] ?></span><span><i class="fa fa-calendar"> </i><?php echo $data_baiviet["ngay_tao"]; ?></span><span><i class="fa fa-eye"> </i>1000</span></div>
          <div class="news-share"><i class="fa fa-facebook-f"></i><i class="fa fa-twitter"></i><i class="fa fa-google-plus"></i></div>
        </div>
        <div class="page-content">
          <?php  
            ?><strong><?php echo $data_baiviet["tomtat_baiviet"]; ?></strong><p></p><?php
            echo $data_baiviet["noidung_baiviet"];
          ?>
        </div>
      </div>
      <div class="related-primary">
        <div class="x-title-bar"> 
          <ul>
            <li class="pa">Bài viết liên quan</li>
          </ul>
        </div>
        <div class="x-related-primary">
          <?php 
            foreach ($baivietbyLoaitin as $row_baiviet) {
              ?>
                <div class="x-related-item">
                  <div class="x-related-content"><img src="assets/images/<?php echo $row_baiviet["anh_baiviet"]; ?>">
                    <div class="news-share"><i class="fa fa-facebook-f"></i><i class="fa fa-twitter"></i><i class="fa fa-google-plus"></i></div>
                  </div><a href="index.php?mod=baiviet&id_baiviet=<?php echo $row_baiviet["id_baiviet"]; ?>">
                    <div class="x-related-caption"><?php echo $row_baiviet["name_baiviet"]; ?></div></a>
                </div>
              <?php
            }
          ?>
        </div>
      </div>
      
      <div class="related-primary">
        <div class="x-title-bar"> 
          <ul>
            <li class="pa">Bình luận (<?php echo count($data_binhluan); ?>)</li>
          </ul>
        </div>
        <div class="xx-related-primary" style="width:100%; background-color: #fff;">
          <?php include "addBinhluan.php"; ?>
        </div>
        
        <?php
          foreach ($data_binhluan as $row) {
            ?>
              <div class="x-show-comment" style="width:100%; background-color: #fff; padding:15px; margin-bottom: 5px;">
                <div class="comment_info">
                  <strong><?php echo $row["name_binhluan"]; ?></strong> - <?php echo $row["ngay_tao"]; ?> 
                </div>
                <div class="comment_content">
                  <?php echo $row["noidung_binhluan"];?>
                </div>
              </div>
            <?php
          }
        ?>
      </div>
    </section>
    <?php include ROOT."/module/sidebar/getAll.php"; ?>
  </section>
</section>