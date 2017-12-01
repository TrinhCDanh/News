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
                  <div class="x-large"><a class="xinner" href="index.php?mod=baiviet&id_baiviet=<?php echo $baivietbyloaitin[$i]["id_baiviet"]; ?>"><img src="assets/images/<?php echo $baivietbyloaitin[$i]["anh_baiviet"]; ?>">
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
                    <section class="xitem"><a class="xinner xinner-b" href="index.php?mod=baiviet&id_baiviet=<?php echo $baivietbyloaitin[$i]["id_baiviet"]; ?>"><img src="assets/images/<?php echo $baivietbyloaitin[$i]["anh_baiviet"]; ?>">
                        <div class="x-feature-caption">
                          <div class="x-feature-title"> 
                            <h3 class="light-text"><?php echo $baivietbyloaitin[$i]["name_baiviet"]; ?></h3><span><i class="fa fa-user"> </i><?php echo $baivietbyloaitin[$i]["name_tacgia"]; ?></span><span><i class="fa fa-calendar"> </i><?php echo $baivietbyloaitin[$i]["ngay_capnhat"]; ?></span>
                          </div>
                        </div></a></section>
                <?php
              }
              else if($i==2 && !empty($baivietbyloaitin[$i])){
                ?>
                  <section class="xitem"><a class="xinner xinner-b" href="index.php?mod=baiviet&id_baiviet=<?php echo $baivietbyloaitin[$i]["id_baiviet"]; ?>"><img src="assets/images/<?php echo $baivietbyloaitin[$i]["anh_baiviet"]; ?>">
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
            <li class="pa">What's New</li>
          </ul>
        </div>
        <div class="x-related-primary">
          <?php  
            for($i=3; $i<count($baivietbyloaitin); $i++) {
              ?>
                <div class="x-related-item">
                  <div class="x-related-content"><img src="assets/images/<?php echo $baivietbyloaitin[$i]["anh_baiviet"]; ?>">
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
        <section class="z-pagination"> 
          <ul class="text-center"><a href="#">
              <li>❮</li></a><a href="#">
              <li>1</li></a><a href="#">
              <li>2</li></a><a href="#">
              <li>3</li></a><a href="#">
              <li>4</li></a><a href="#">
              <li>5</li></a><a href="#">
              <li>❯</li></a></ul>
        </section>
      </div>
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