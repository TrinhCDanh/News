<?php  
$rand_baiviet = $baiviet->RandomBaiviet();
$most_baiviet = $baiviet->MostViewBaiviet();
?>
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