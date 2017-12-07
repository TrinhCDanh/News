<?php  
  $id_loaitin = Utils::getIndex("id_loaitin");
  $data_loaitin = $loaitin->getById($id_loaitin);
  $baivietbyloaitin = $baiviet->getBaivietbyLoaitin($data_loaitin["id_loaitin"], 100);
?>
<section class="main-content">
  <section class="news-container news-show-container container home-reviews">
    <section class="news-primary news-show-primary col-xs-12 col-sm-12 col-md-8 col-lg-8">
      <div class="related-primary"> 
        <div class="xy-related-title"><?php echo $data_loaitin["name_loaitin"]; ?></div>
        <div class="flisk-news-index">
          <?php  
            for($i=0 ; $i<3 ; $i++) {
              if($i==0 && !empty($baivietbyloaitin[$i])) {
                ?>
                  <div class="x-large"><a class="xinner" href="index.php?mod=baiviet&id_baiviet=<?php echo $baivietbyloaitin[$i]["id_baiviet"]; ?>"><img src="public/assets/images/<?php echo $baivietbyloaitin[$i]["anh_baiviet"]; ?>">
                    <div class="x-feature-caption">
                      <div class="x-feature-title"> 
                        <h2 class="light-text"><?php echo $baivietbyloaitin[$i]["name_baiviet"]; ?></h2><span><i class="fa fa-user"> </i><?php echo $baivietbyloaitin[$i]["name_tacgia"]; ?></span><span><i class="fa fa-calendar"> </i><?php echo $baivietbyloaitin[$i]["ngay_capnhat"]; ?></span>
                      </div>
                    </div></a>
                  </div>
                <?php
              }
              else if($i==1 && !empty($baivietbyloaitin[$i])){
                ?>
                  <div class="x-small">
                    <section class="xitem"><a class="xinner xinner-b" href="index.php?mod=baiviet&id_baiviet=<?php echo $baivietbyloaitin[$i]["id_baiviet"]; ?>"><img src="public/assets/images/<?php echo $baivietbyloaitin[$i]["anh_baiviet"]; ?>">
                        <div class="x-feature-caption">
                          <div class="x-feature-title"> 
                            <h3 class="light-text"><?php echo $baivietbyloaitin[$i]["name_baiviet"]; ?></h3><span><i class="fa fa-user"> </i><?php echo $baivietbyloaitin[$i]["name_tacgia"]; ?></span><span><i class="fa fa-calendar"> </i><?php echo $baivietbyloaitin[$i]["ngay_capnhat"]; ?></span>
                          </div>
                        </div></a></section>
                <?php
              }
              else if($i==2 && !empty($baivietbyloaitin[$i])){
                ?>
                  <section class="xitem"><a class="xinner xinner-b" href="index.php?mod=baiviet&id_baiviet=<?php echo $baivietbyloaitin[$i]["id_baiviet"]; ?>"><img src="public/assets/images/<?php echo $baivietbyloaitin[$i]["anh_baiviet"]; ?>">
                        <div class="x-feature-caption">
                          <div class="x-feature-title"> 
                            <h3 class="light-text"><?php echo $baivietbyloaitin[$i]["name_baiviet"]; ?></h3><span><i class="fa fa-user"> </i><?php echo $baivietbyloaitin[$i]["name_tacgia"]; ?></span><span><i class="fa fa-calendar"> </i><?php echo $baivietbyloaitin[$i]["ngay_capnhat"]; ?></span>
                          </div>
                        </div></a></section>
                  </div>
                <?php
              }
            }
          ?>
        </div>
      </div>
      <div class="related-primary"> 
        <div class="x-title-bar"> 
          <ul>
            <li class="pa">Tin mới</li>
          </ul>
        </div>
        <div class="x-related-primary">
          <?php  
            for($i=3; $i<count($baivietbyloaitin); $i++) {
              ?>
                <div class="x-related-item <?php if($i>6) echo "foo"; ?>">
                  <div class="x-related-content"><img src="public/assets/images/<?php echo $baivietbyloaitin[$i]["anh_baiviet"]; ?>">
                    <div class="news-share"><i class="fa fa-facebook-f"></i><i class="fa fa-twitter"></i><i class="fa fa-google-plus"></i></div>
                  </div><a href="index.php?mod=baiviet&id_baiviet=<?php echo $baivietbyloaitin[$i]["id_baiviet"]; ?>">
                    <div class="x-related-caption"> 
                      <h4><?php echo $baivietbyloaitin[$i]["name_baiviet"]; ?></h4><span><i class="fa fa-user"> </i><?php echo $baivietbyloaitin[$i]["name_tacgia"]; ?></span><span><i class="fa fa-calendar"> </i><?php echo $baivietbyloaitin[$i]["ngay_capnhat"]; ?></span>
                      <p class="descript"><?php echo $baivietbyloaitin[$i]["tomtat_baiviet"]; ?></p>
                    </div></a>
                </div>
              <?php
            }
          ?>
        </div>
      </div>
    </section>
    <?php include ROOT."/module/sidebar/getLoaitin.php"; ?>
  </section>
</section>