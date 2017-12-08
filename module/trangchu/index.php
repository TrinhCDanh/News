<?php
  $j=5; 
  $data_theloai = $theloai->getAll();
  $data_loaitin = $loaitin->getAll();
  $data_baiviet = $baiviet->getAll();
  $data_all = $baiviet->getAllTable();
  //$rand_baiviet = $baiviet->RandomBaiviet();
  //$most_baiviet = $baiviet->MostViewBaiviet();
?>
<section class="main-content">
  <div class="gs-series-game home-series-game portfolio">
    <div class="home-owl-carousel owl-carousel owl-theme"><!-- star owl carousel -->
      <?php  
        foreach($data_all as $row) {
          if($row["duyet_baiviet"]==1 && $j>0) {
            ?>
              <div class="item sidebar-item x-item" style="background-image: url(<?php echo "public/assets/images/" . $row["anh_baiviet"]; ?>)">
                <div class="box-post">
                  <div class="z-thumb"><img class="img-responsive" src="public/assets/images/bag.png" alt="Item 1"></div>
                  <div class="caption">
                    <div class="page-content gs-content-games gs-genre-game"><a class="genre-tag hvr-bounce-to-right tag-pc" href="index.php?mod=theloai&id_theloai=<?php echo $row["id_theloai"] ?>"><?php  echo $row["name_theloai"]; ?></a><a class="genre-tag hvr-bounce-to-right tag-ps4" href="index.php?mod=loaitin&id_loaitin=<?php echo $row["id_loaitin"]; ?>"><?php  echo $row["name_loaitin"]; ?></a></div>
                    <p class="c-title"> <a href="index.php?mod=baiviet&id_baiviet=<?php echo $row["id_baiviet"]; ?>"><?php echo $row["name_baiviet"]; ?></a></p>
                    <p class="c-dec"><?php echo $row["tomtat_baiviet"]; ?></p><a href="index.php?mod=baiviet&id_baiviet=<?php echo $row["id_baiviet"]; ?>"> 
                      <div class="c-read-more text-center pmd-ripple-effect">Read more</div></a>
                  </div>
                </div>
              </div>
            <?php
            $j--;
          }
        } 
      ?>
    </div>
    <!--include includes/sidebar-widget.pug-->
  </div>
  <section class="news-container news-show-container container home-reviews">
    <section class="news-primary news-show-primary col-xs-12 col-sm-12 col-md-8 col-lg-8">
      <?php  
        for($i = 0; $i<count($data_theloai); $i++) {
          if($i == 0) {
            ?>
              <div class="related-primary intro-review"> 
                <div class="x-title-bar"> 
                  <ul>
                    <li class="pa"><?php echo $data_theloai[$i]["name_theloai"] ?></li><a href="index.php?mod=theloai&id_theloai=<?php echo $data_theloai[$i]["id_theloai"] ?>">
                      <li class="pb">View All</li></a>
                  </ul>
                </div>
                <div class="x-related-primary">
                  <?php  
                    $getBaivietbyTheloai = $baiviet->getBaivietbyTheloai($data_theloai[$i]["id_theloai"]);
                    //print_r($getBaivietbyTheloai);
                    foreach ($getBaivietbyTheloai as $row_baivietbytheloai) {
                      if($row_baivietbytheloai["duyet_baiviet"] == 1) {
                      ?>
                        <div class="x-related-item x-intro-game">
                          <div class="x-related-content"><img src="public/assets/images/<?php echo $row_baivietbytheloai["anh_baiviet"]; ?>">
                            <div class="news-share"><i class="fa fa-facebook-f"></i><i class="fa fa-twitter"></i><i class="fa fa-google-plus"></i></div>
                          </div><a class="x-related-caption" href="index.php?mod=baiviet&id_baiviet=<?php echo $row_baivietbytheloai["id_baiviet"]; ?>">
                            <h4><?php echo $row_baivietbytheloai["name_baiviet"]; ?></h4><span><i class="fa fa-user"> </i><?php echo $row_baivietbytheloai["name_tacgia"]; ?></span><span><i class="fa fa-calendar"> </i><?php echo $row_baivietbytheloai["ngay_tao"]; ?></span>
                            <p class="descript"><?php echo $row_baivietbytheloai["tomtat_baiviet"]; ?></p></a>
                        </div>
                      <?php
                      }
                    }
                  ?>
                </div>
                <!--include includes/pagination.pug -->
              </div>
            <?php
          }
          else {
            ?>
              <div class="related-primary"> 
                <div class="x-title-bar"> 
                  <ul>
                    <li class="pa"><?php echo $data_theloai[$i]["name_theloai"] ?></li><a href="index.php?mod=theloai&id_theloai=<?php echo $data_theloai[$i]["id_theloai"] ?>">
                      <li class="pb">View All</li></a>
                  </ul>
                </div>
                <div class="x-related-primary">
                  <?php  
                    $getBaivietbyTheloai = $baiviet->getBaivietbyTheloai($data_theloai[$i]["id_theloai"]);
                    //print_r($getBaivietbyTheloai);
                    foreach ($getBaivietbyTheloai as $row_baivietbytheloai) {
                      if($row_baivietbytheloai["duyet_baiviet"] == 1) {
                      ?>
                        <div class="x-related-item">
                          <div class="x-related-content"><img src="public/assets/images/<?php echo $row_baivietbytheloai["anh_baiviet"]; ?>">
                            <div class="news-share"><i class="fa fa-facebook-f"></i><i class="fa fa-twitter"></i><i class="fa fa-google-plus"></i></div>
                          </div><a href="index.php?mod=baiviet&id_baiviet=<?php echo $row_baivietbytheloai["id_baiviet"]; ?>">
                            <div class="x-related-caption"> 
                              <h4><?php echo $row_baivietbytheloai["name_baiviet"]; ?></h4><span><i class="fa fa-user"> </i><?php echo $row_baivietbytheloai["name_tacgia"]; ?></span><span><i class="fa fa-calendar"> </i><?php echo $row_baivietbytheloai["ngay_tao"]; ?></span>
                              <p class="descript"><?php echo $row_baivietbytheloai["tomtat_baiviet"]; ?></p>
                            </div></a>
                        </div>
                      <?php
                      }
                    }
                  ?>
                </div>
              </div>
            <?php
          }
        }
      ?>
    </section>
    <?php include ROOT."/module/sidebar/getAll.php"; ?>
  </section>
</section>