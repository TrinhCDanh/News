<?php  
  $id_baiviet = Utils::getIndex("id_baiviet");
  $id_binhluan = Utils::getIndex("id_binhluan");
  $data_baiviet = $baiviet->getById($id_baiviet);
  $data_binhluan = $binhluan->getAllwithBaiviet($id_baiviet);

  $ac = Utils::getIndex("ac");
  if (isset($_SESSION["user_login"])) {
    $id_user = $data_user["id_user"];
  }
  $noidung_binhluan = Utils::postIndex("noidung_binhluan");

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
      $binhluan->addBinhluan($id_baiviet, $id_user, $noidung_binhluan);
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
        <div class="page-footer">
          <div class="page-content gs-content-game gs-genre-game"><i class="fa fa-tags" style="margin-right: 2px"> </i>Tags: <a class="genre-tag hvr-bounce-to-right" href="#">Action</a><a class="genre-tag hvr-bounce-to-right" href="#">Open World</a><a class="genre-tag hvr-bounce-to-right" href="#">Park Out</a><a class="genre-tag hvr-bounce-to-right" href="#">Comedy</a><a class="genre-tag hvr-bounce-to-right" href="#">Sealth</a></div>
        </div>
      </div>
      <div class="related-primary"> 
        <div class="x-related-title">Related Post</div>
        <div class="x-related-primary">
          <div class="x-related-item">
            <div class="x-related-content"><img src="https://static.gamespot.com/uploads/screen_kubrick/123/1239113/3227217-doom.jpg">
              <div class="news-share"><i class="fa fa-facebook-f"></i><i class="fa fa-twitter"></i><i class="fa fa-google-plus"></i></div>
            </div><a href="http://localhost:3000/news-single.html">
              <div class="x-related-caption">Check Out Bethesda's E3 Showcase Invite, Which May Tease Two Announcements</div></a>
          </div>
          <div class="x-related-item">
            <div class="x-related-content"><img src="https://static.gamespot.com/uploads/screen_kubrick/1556/15568848/3226985-1041069493-22820.jpg">
              <div class="news-share"><i class="fa fa-facebook-f"></i><i class="fa fa-twitter"></i><i class="fa fa-google-plus"></i></div>
            </div><a href="http://localhost:3000/news-single.html">
              <div class="x-related-caption">Mega Man 7, 8, 9, 10 Collection Leaked (Possibly)</div></a>
          </div>
          <div class="x-related-item">
            <div class="x-related-content"><img src="https://i.ytimg.com/vi/MkO6P-WA_vY/maxresdefault.jpg">
              <div class="news-share"><i class="fa fa-facebook-f"></i><i class="fa fa-twitter"></i><i class="fa fa-google-plus"></i></div>
            </div><a href="http://localhost:3000/news-single.html">
              <div class="x-related-caption">Everything we know about Call of Duty: WWII</div></a>
          </div>
          <div class="x-related-item">
            <div class="x-related-content"><img src="https://static.gamespot.com/uploads/screen_kubrick/123/1239113/3227217-doom.jpg">
              <div class="news-share"><i class="fa fa-facebook-f"></i><i class="fa fa-twitter"></i><i class="fa fa-google-plus"></i></div>
            </div><a href="http://localhost:3000/news-single.html">
              <div class="x-related-caption">Check Out Bethesda's E3 Showcase Invite, Which May Tease Two Announcements</div></a>
          </div>
          <div class="x-related-item">
            <div class="x-related-content"><img src="https://static.gamespot.com/uploads/screen_kubrick/1556/15568848/3226985-1041069493-22820.jpg">
              <div class="news-share"><i class="fa fa-facebook-f"></i><i class="fa fa-twitter"></i><i class="fa fa-google-plus"></i></div>
            </div><a href="http://localhost:3000/news-single.html">
              <div class="x-related-caption">Mega Man 7, 8, 9, 10 Collection Leaked (Possibly)</div></a>
          </div>
          <div class="x-related-item">
            <div class="x-related-content"><img src="https://i.ytimg.com/vi/MkO6P-WA_vY/maxresdefault.jpg">
              <div class="news-share"><i class="fa fa-facebook-f"></i><i class="fa fa-twitter"></i><i class="fa fa-google-plus"></i></div>
            </div><a href="http://localhost:3000/news-single.html">
              <div class="x-related-caption">Everything we know about Call of Duty: WWII</div></a>
          </div>
        </div>
      </div>
      <div class="related-primary"> 
        <div class="x-related-title">Bình luận (<?php echo count($data_binhluan); ?>)</div>
        <div class="xx-related-primary" style="width:100%; background-color: #fff;">
          <form method="post" action="index.php?mod=baiviet&id_baiviet=<?php echo $data_baiviet["id_baiviet"]; ?>&ac=addBinhluan">
            <div class="pmd-card-body">
              <div class="group-fields clearfix row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group pmd-textfield pmd-textfield-floating-label">
                    <label class="control-label">Bạn nghĩ gì về điều này?</label>
                    <textarea required class="form-control" name="noidung_binhluan"></textarea>
                  </div>
                  <div class="form-group pmd-textfield text-right">
                    <?php  
                      if (!isset($_SESSION["user_login"])) {
                        ?><a href="user/index.php" class="btn pmd-ripple-effect btn-primary" type="submit" name="submit">Gửi bình luận</a><?php
                      }
                      else {
                        ?><button class="btn pmd-ripple-effect btn-primary" type="submit" name="submit">Gửi bình luận</button><?php
                      }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        
        <?php
          foreach ($data_binhluan as $row) {
            ?>
              <div class="x-show-comment" style="width:100%; background-color: #fff; padding:15px; margin-bottom: 5px;">
                <div class="comment_info">
                  <strong><?php echo $row["name_user"]; ?></strong> - <?php echo $row["ngay_tao"]; ?>
                 
                    <span class="dropdown pmd-dropdown clearfix" style="float: right; margin-right: -10px; margin-top: -10px;">
                      <button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button" id="dropdownMenuBottomRight" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></button>
                      <ul aria-labelledby="dropdownMenuDivider" role="menu" class="dropdown-menu dropdown-menu-right">
                        <?php  
                          if($row["name_user"] == $data_user["name_user"]) {
                            ?>
                              <li role="presentation"><a href="index.php?mod=baiviet&id_baiviet=<?php echo $data_baiviet["id_baiviet"]; ?>&ac=delete&id_binhluan=<?php echo $row["id_binhluan"]; ?>" tabindex="-1" role="menuitem">Xóa</a></li>
                              <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Chỉnh sửa</a></li>
                            <?php
                          }
                          else {
                            ?>
                              <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Báo cáo vi phạm</a></li>
                            <?php
                          }
                        ?>
                        
                      </ul>
                    </span>
                  
                </div>
                <div class="comment_content">
                  <?php echo $row["noidung_binhluan"];?>
                </div>
              </div>
            <?php
          }
        ?>
        

        <div class="x-show-comment" style="width:100%; background-color: #fff; padding:15px; ">
          <div class="comment_info">
            <strong>User Name</strong> - 19/11/2017
          </div>
          <div class="comment_content">
            Hello
          </div>
        </div>

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