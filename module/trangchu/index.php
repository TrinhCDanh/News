<?php
  $j=5; 
  $data_theloai = $theloai->getAll();
  $data_loaitin = $loaitin->getAll();
  $data_baiviet = $baiviet->getAll();
  $rand_baiviet = $baiviet->RandomBaiviet();
  $most_baiviet = $baiviet->MostViewBaiviet();

?>
<section class="main-content">
  <div class="gs-series-game home-series-game portfolio">
    <div class="home-owl-carousel owl-carousel owl-theme"><!-- star owl carousel -->
      <?php  
        foreach($data_baiviet as $row) {
          if($row["duyet_baiviet"]==1 && $j>0) {
            ?>
              <div class="item sidebar-item x-item" style="background-image: url(<?php echo "assets/images/" . $row["anh_baiviet"]; ?>)">
                <div class="box-post">
                  <div class="z-thumb"><img class="img-responsive" src="images/bag.png" alt="Item 1"></div>
                  <div class="caption">
                    <div class="page-content gs-content-games gs-genre-game"><a class="genre-tag hvr-bounce-to-right tag-pc" href="#">PC</a><a class="genre-tag hvr-bounce-to-right tag-ps4" href="#">
                      <?php  
                        foreach ($data_loaitin as $loaitin) {
                          if($loaitin["id_loaitin"]==$row["id_loaitin"])
                            echo $loaitin["name_loaitin"];
                        }
                      ?>
                    </a></div>
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
                          <div class="x-related-content"><img src="assets/images/<?php echo $row_baivietbytheloai["anh_baiviet"]; ?>">
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
                          <div class="x-related-content"><img src="assets/images/<?php echo $row_baivietbytheloai["anh_baiviet"]; ?>">
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
    <section class="sidebar-primary col-xs-12 col-sm-12 col-md-4 col-lg-4">
      <div class="sidebar-primary-content"> 
        <div class="x-title-bar"> 
          <ul>
            <li class="pa">Xem nhiều nhất</li>
          </ul>
        </div>
        <div class="x-widget-primary x-top-news">
          <?php  
            foreach ($most_baiviet as $row_mostviewbaiviet) {
              ?>
                <a class="x-video-item" href="index.php?mod=baiviet&id_baiviet=<?php echo $row_mostviewbaiviet["id_baiviet"]; ?>">
                  <div class="vi-thumb"><img src="assets/images/<?php echo $row_mostviewbaiviet["anh_baiviet"]; ?>"></div>
                  <div class="vi-caption">
                    <p><?php echo $row_mostviewbaiviet["name_baiviet"]; ?></p>
                  </div>
                </a>
              <?php
            }
          ?>
        </div>
      </div>
      <div class="sidebar-primary-content"> 
        <div class="x-title-bar"> 
          <ul>
            <li class="pa">Upcoming games</li>
          </ul>
        </div>
        <div class="x-widget-primary x-upcoming-games"><a class="x-widget-item" href="#" style="background-image: url(https://i.ytimg.com/vi/TKLx5rhpS2k/maxresdefault.jpg)">
            <div class="x-widget-content"> 
              <h1>Hello Neighbor</h1>
              <p>Ngày đăng 03/02/2018</p>
              <p>Bởi Mr.D</p>
            </div></a><a class="x-widget-item" href="#" style="background-image: url(https://www.callofduty.com/content/dam/atvi/callofduty/wwii/home/Stronghold_Metadata_Image.jpg)">
            <div class="x-widget-content">
              <h1>Call of Duty: WWII</h1>
              <p>Ngày đăng 03/02/2018</p>
              <p>Bởi Mr.D</p>
            </div></a></div>
      </div>
      <div class="sidebar-primary-content"> 
        <div class="x-title-bar"> 
          <ul>
            <li class="pa">Ngẫu nhiên</li>
          </ul>
        </div>
        <div class="vi-widget-primary-lastest">
          <?php  
            foreach ($rand_baiviet as $row_randbaiviet) {
              if($row_randbaiviet["duyet_baiviet"] == 1) {
                ?>
                  <a class="x-video-item" href="index.php?mod=baiviet&id_baiviet=<?php echo $row_randbaiviet["id_baiviet"]; ?>">
                    <div class="vi-thumb"><img src="assets/images/<?php echo $row_randbaiviet["anh_baiviet"]; ?>"></div>
                    <div class="vi-caption">
                      <p><?php echo $row_randbaiviet["name_baiviet"]; ?></p>
                    </div>
                  </a>
                <?php
              }
            }
          ?>
        </div>
      </div>
      <div class="sidebar-primary-content x-google-ads">
        <div class="x-widget-primary"><a class="x-widget-item" href="#">
            <div class="x-widget-content"><img src="http://planetshine.net/demo/goodgame/wp-content/themes/planetshine-goodgame/theme/assets/images/banner-300x300.jpg"></div></a><a class="x-widget-item" href="#">
            <div class="x-widget-content"><img src="http://planetshine.net/demo/goodgame/wp-content/themes/planetshine-goodgame/theme/assets/images/banner-300x300.jpg"></div></a></div>
      </div>
    </section>
  </section>
</section>