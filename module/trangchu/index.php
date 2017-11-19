<?php
  $j=5; 
  $data_theloai = $theloai->getAll();
  $data_loaitin = $loaitin->getAll();
  $data_baiviet = $baiviet->getAll(); 
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
                  <div class="x-related-item x-intro-game">
                    <div class="x-related-content"><img src="https://static.gamespot.com/uploads/screen_kubrick/1556/15568848/3226985-1041069493-22820.jpg">
                      <div class="news-share"><i class="fa fa-facebook-f"></i><i class="fa fa-twitter"></i><i class="fa fa-google-plus"></i></div>
                    </div><a class="x-related-caption" href="http://localhost:3000/news-single.html">
                      <h4>Mega Man 7, 8, 9, 10 Collection Leaked (Possibly)</h4><span><i class="fa fa-user"> </i>Mr.D</span><span><i class="fa fa-calendar"> </i>3/2/2018</span>
                      <p class="descript">Mega Man Legacy Collection 2 listed by Korean Ratings Board.</p></a>
                  </div>
                  <div class="x-related-item">
                    <div class="x-related-content"><img src="https://i.ytimg.com/vi/MNOmxAw2Qag/hq720.jpg">
                      <div class="news-share"><i class="fa fa-facebook-f"></i><i class="fa fa-twitter"></i><i class="fa fa-google-plus"></i></div>
                    </div><a class="x-related-caption" href="http://localhost:3000/news-single.html"> 
                      <h4>Top 10 UK Sales Chart: Mario Kart 8 Deluxe Is Nintendo's First No.1 For Six Years</h4><span><i class="fa fa-user"> </i>Mr.D</span><span><i class="fa fa-calendar"> </i>3/2/2018</span>
                      <p class="descript">The Nintendo Switch port is the first Mario title to reach the top since 2008's Mario Kart Wii.</p></a>
                  </div>
                  <div class="x-related-item">
                    <div class="x-related-content"><img src="https://static.gamespot.com/uploads/screen_kubrick/1534/15343359/3220758-swbfii_reveal_screenshot_5_sp.jpg">
                      <div class="news-share"><i class="fa fa-facebook-f"></i><i class="fa fa-twitter"></i><i class="fa fa-google-plus"></i></div>
                    </div><a class="x-related-caption" href="http://localhost:3000/news-single.html"> 
                      <h4>Star Wars Battlefront 2 Deluxe Edition And Pre-order Bonuses</h4><span><i class="fa fa-user"> </i>Mr.D</span><span><i class="fa fa-calendar"> </i>3/2/2018</span>
                      <p class="descript">Along with a new trailer and story details, we also learned what you get if you pre-order the next Star Wars Battlefront.</p></a>
                  </div>
                  <div class="x-related-item">
                    <div class="x-related-content"><img src="http://cdn.mos.cms.futurecdn.net/Hd3PU7xsBmubn6fyWMHbB9-650-80.jpg">
                      <div class="news-share"><i class="fa fa-facebook-f"></i><i class="fa fa-twitter"></i><i class="fa fa-google-plus"></i></div>
                    </div><a class="x-related-caption" href="http://localhost:3000/news-single.html"> 
                      <h4>Serious Metal Detecting is like DayZ, only with metal detecting</h4><span><i class="fa fa-user"> </i>Mr.D</span><span><i class="fa fa-calendar"> </i>3/2/2018</span>
                      <p class="descript">Detect metal seriously with a serious metal detector, in Serious Metal Detecting. Seriously.</p></a>
                  </div>
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
                  <div class="x-related-item">
                    <div class="x-related-content"><img src="https://static.gamespot.com/uploads/screen_kubrick/1534/15343359/3220758-swbfii_reveal_screenshot_5_sp.jpg">
                      <div class="news-share"><i class="fa fa-facebook-f"></i><i class="fa fa-twitter"></i><i class="fa fa-google-plus"></i></div>
                    </div><a href="http://localhost:3000/news-single.html">
                      <div class="x-related-caption"> 
                        <h4>Star Wars Battlefront 2 Deluxe Edition And Pre-order Bonuses</h4><span><i class="fa fa-user"> </i>Mr.D</span><span><i class="fa fa-calendar"> </i>3/2/2018</span>
                        <p class="descript">Along with a new trailer and story details, we also learned what you get if you pre-order the next Star Wars Battlefront.</p>
                      </div></a>
                  </div>
                  <div class="x-related-item">
                    <div class="x-related-content"><img src="https://static.gamespot.com/uploads/screen_kubrick/1534/15343359/3220758-swbfii_reveal_screenshot_5_sp.jpg">
                      <div class="news-share"><i class="fa fa-facebook-f"></i><i class="fa fa-twitter"></i><i class="fa fa-google-plus"></i></div>
                    </div><a href="http://localhost:3000/news-single.html">
                      <div class="x-related-caption"> 
                        <h4>Star Wars Battlefront 2 Deluxe Edition And Pre-order Bonuses</h4><span><i class="fa fa-user"> </i>Mr.D</span><span><i class="fa fa-calendar"> </i>3/2/2018</span>
                        <p class="descript">Along with a new trailer and story details, we also learned what you get if you pre-order the next Star Wars Battlefront.</p>
                      </div></a>
                  </div>
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
        <div class="x-widget-primary x-top-news"><a class="x-video-item" href="#">
            <div class="vi-thumb"><img src="https://cdn.eblnews.com/sites/default/files/styles/img_684x385/public/cover/2017-06/772one8fgzM.jpg?itok=5qPQQTVC"></div>
            <div class="vi-caption">
              <p>New Releases: Crash Bandicoot N.</p>
            </div></a><a class="x-video-item" href="#">
            <div class="vi-thumb"><img src="https://cdn.eblnews.com/sites/default/files/styles/img_684x385/public/cover/2017-06/772one8fgzM.jpg?itok=5qPQQTVC"></div>
            <div class="vi-caption">
              <p>New Releases: Crash Bandicoot N. Sane Trilogy, Danganronpa Another Episode, Breath Of The Wild DLC</p>
            </div></a><a class="x-video-item" href="#">
            <div class="vi-thumb"><img src="https://i.ytimg.com/vi/aDPWDkdNLEc/maxresdefault.jpg"></div>
            <div class="vi-caption">
              <p>E3 2017: Marvel's Spider-Man - PS4 Gameplay Impressions</p>
            </div></a><a class="x-video-item" href="#">
            <div class="vi-thumb"><img src="https://i.ytimg.com/vi/aDPWDkdNLEc/maxresdefault.jpg"></div>
            <div class="vi-caption">
              <p>E3 2017: Marvel's Spider-Man - PS4 Gameplay Impressions</p>
            </div></a><a class="x-video-item" href="#">
            <div class="vi-thumb"><img src="https://i.ytimg.com/vi/aDPWDkdNLEc/maxresdefault.jpg"></div>
            <div class="vi-caption">
              <p>E3 2017: Marvel's Spider-Man - PS4 Gameplay Impressions</p>
            </div></a></div>
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
        <div class="vi-widget-primary-lastest"><a class="x-video-item" href="#">
            <div class="vi-thumb"><img src="https://i.ytimg.com/vi/aDPWDkdNLEc/maxresdefault.jpg"></div>
            <div class="vi-caption">
              <p>E3 2017: Marvel's Spider-Man - PS4 Gameplay Impressions</p>
            </div></a><a class="x-video-item" href="#">
            <div class="vi-thumb"><img src="https://cdn.eblnews.com/sites/default/files/styles/img_684x385/public/cover/2017-06/772one8fgzM.jpg?itok=5qPQQTVC"></div>
            <div class="vi-caption">
              <p>New Releases: Crash Bandicoot N. Sane Trilogy, Danganronpa Another Episode, Breath Of The Wild DLC</p>
            </div></a><a class="x-video-item" href="#">
            <div class="vi-thumb"><img src="https://i.ytimg.com/vi/aDPWDkdNLEc/maxresdefault.jpg"></div>
            <div class="vi-caption">
              <p>E3 2017: Marvel's Spider-Man - PS4 Gameplay Impressions</p>
            </div></a><a class="x-video-item" href="#">
            <div class="vi-thumb"><img src="https://i.ytimg.com/vi/aDPWDkdNLEc/maxresdefault.jpg"></div>
            <div class="vi-caption">
              <p>E3 2017: Marvel's Spider-Man - PS4 Gameplay Impressions</p>
            </div></a><a class="x-video-item" href="#">
            <div class="vi-thumb"><img src="https://i.ytimg.com/vi/aDPWDkdNLEc/maxresdefault.jpg"></div>
            <div class="vi-caption">
              <p>E3 2017: Marvel's Spider-Man - PS4 Gameplay Impressions</p>
            </div></a><a class="x-video-item" href="#">
            <div class="vi-thumb"><img src="https://i.ytimg.com/vi/aDPWDkdNLEc/maxresdefault.jpg"></div>
            <div class="vi-caption">
              <p>E3 2017: Marvel's Spider-Man - PS4 Gameplay Impressions   </p>
            </div></a></div>
      </div>
      <div class="sidebar-primary-content x-google-ads">
        <div class="x-widget-primary"><a class="x-widget-item" href="#">
            <div class="x-widget-content"><img src="http://planetshine.net/demo/goodgame/wp-content/themes/planetshine-goodgame/theme/assets/images/banner-300x300.jpg"></div></a><a class="x-widget-item" href="#">
            <div class="x-widget-content"><img src="http://planetshine.net/demo/goodgame/wp-content/themes/planetshine-goodgame/theme/assets/images/banner-300x300.jpg"></div></a></div>
      </div>
    </section>
  </section>
</section>