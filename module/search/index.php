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
            if(empty($data_search)) echo "Không tìm thấy kết kết quả nào!"; 
            for ($i=0; $i < count($data_search); $i++) { 
              ?>
                <div class="x-related-item <?php if($i>9) echo "foo"; ?>">
                  <div class="x-related-content"><img src="public/assets/images/<?php echo $data_search[$i]["anh_baiviet"]; ?>">
                    <div class="news-share"><i class="fa fa-facebook-f"></i><i class="fa fa-twitter"></i><i class="fa fa-google-plus"></i></div>
                  </div><a class="x-related-caption" href="index.php?mod=baiviet&id_baiviet=<?php echo $data_search[$i]["id_baiviet"]; ?>">
                    <h4><?php echo $data_search[$i]["name_baiviet"]; ?></h4><span><i class="fa fa-user"> </i><?php echo $data_search[$i]["name_tacgia"] ?></span><span><i class="fa fa-calendar"> </i><?php echo $data_search[$i]["ngay_capnhat"]; ?></span>
                    <p class="descript"><?php echo $data_search[$i]["tomtat_baiviet"]; ?></p></a>
                </div>
              <?php
            }
          ?>
        </div>
        <!--include includes/pagination.pug -->
      </div>
     
    </section>
    <?php include ROOT."/module/sidebar/getAll.php"; ?>
  </section>
</section>