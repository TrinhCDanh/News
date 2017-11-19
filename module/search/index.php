<?php  
  $keyword = getIndex("search");
  $data_search = $baiviet->searchBaiviet($keyword);
?>

<div class="jumbotron text-center" style="background-color: #1a2940">
  <div class="header-page">
    <span class="clip-text">SEARCH</span>
    <p>Từ khóa tìm kiếm: <?php echo $keyword; ?></p>
  </div>
</div>
<section class="main-content">
  <section class="news-container news-show-container container home-reviews">
    <section class="news-primary news-show-primary col-xs-12 col-sm-12 col-md-8 col-lg-8">
    
      <div class="related-primary intro-review"> 
        <div class="x-title-bar"> 
          <ul>
            <li class="pa">Kết quả tìm được</li>
          </ul>
        </div>
        <div class="x-related-primary">
          <?php 
            foreach ($data_search as $row) {
              ?>
                <div class="x-related-item">
                  <div class="x-related-content"><img src="assets/images/<?php echo $row["anh_baiviet"]; ?>">
                    <div class="news-share"><i class="fa fa-facebook-f"></i><i class="fa fa-twitter"></i><i class="fa fa-google-plus"></i></div>
                  </div><a class="x-related-caption" href="index.php?mod=baiviet&id_baiviet=<?php echo $row["id_baiviet"]; ?>">
                    <h4><?php echo $row["name_baiviet"]; ?></h4><span><i class="fa fa-user"> </i>Mr.D</span><span><i class="fa fa-calendar"> </i><?php echo $row["ngay_tao"]; ?></span>
                    <p class="descript"><?php echo $row["tomtat_baiviet"]; ?></p></a>
                </div>
              <?php
            }
          ?>
        </div>
        <!--include includes/pagination.pug -->
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