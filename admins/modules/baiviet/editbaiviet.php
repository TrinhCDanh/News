<?php
  $getAll_duyetbai = $chitiet_duyetbai->getAll(); 
  foreach ($getAll_duyetbai as $row_db) {
    if($row_db["id_baiviet"] == Utils::getIndex("id")) {
      ?>
        <div class="col-md-12">
          <div class="alert alert-warning">
            <?php echo "Ngày yêu cầu: " . $row_db["ngay_tao"]; ?><br>      
            <?php echo "Nội dung yêu cầu: " . $row_db["noidung_yeucau"]; ?>
          </div>
        </div>
      <?php
    }
  }
?>



    
      <div class="col-md-9 review-post">
       <?php 
        if($row["name_tacgia"] != $name_tacgia["name_admin"] && $row["duyet_baiviet"]==0) {
        ?> 
            <div class="pmd-card pmd-z-depth">
              <div class="pmd-card-body">
                <h2>Yêu cầu tác giả sửa bài viết (Nếu có)</h2>
                <form action="index.php?mod=baiviet&ac=requestEdit&id=<?php echo $row["id_baiviet"]; ?>" method="post">
                  <div class="group-fields clearfix row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label class="control-label">Nhập yêu cầu của bạn</label>
                        <textarea required class="form-control" name="yeucau_baiviet"></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="group-fields clearfix row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <button class="btn pmd-ripple-effect btn-primary" type="submit" name="request">Gửi yêu cầu</button>
                      <button class="btn pmd-ripple-effect btn-default" type="reset">Cancel</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          <?php
        } 
        ?>

        <div class="pmd-card pmd-z-depth">
          <div class="pmd-card-title">
            <div class="media-left set-svg">
              <span class="service-icon img-circle bg-fill-red text-center">
                <i class="material-icons md-dark pmd-sm" style="color: #fff; line-height: 40px;">supervisor_account</i>
              </span>
            </div>
            <div class="media-body media-middle">
              <h2 class="pmd-card-title-text typo-fill-secondary"><?php echo $info; ?></h2>
            </div>
          </div>
          <div class="pmd-card-body">
            <div class="group-fields clearfix row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                  <h2>Tiêu đề bài viết</h2>
                  <p> <?php echo $row["name_baiviet"]; ?> </p>
                </div>
              </div>
            </div>
            
            <div class="group-fields clearfix row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group pmd-textfield">
                  <h2>Tóm tắt bài viết</h2>
                  <p> <?php echo $row["tomtat_baiviet"]; ?> </p>
                </div>
              </div>
            </div>

            <div class="group-fields clearfix row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2>Nội dung chi tiết</h2>
                <p> <?php echo $row["noidung_baiviet"]; ?> </p>
              </div>
            </div>
          </div>    
          
        </div>
      </div>


<div class="col-md-3">
    
  <div class="pmd-card pmd-z-depth">
    <div class="pmd-card-body">
      <h2>Hiển thị bài viết?</h2>
      <form id="validationForm" action="index.php?mod=baiviet&ac=saveEdit&id=<?php echo $row["id_baiviet"]; ?>" method="post">
        <div class="radio">
          <label class="pmd-radio pmd-radio-ripple-effect">
            <input type="radio" name="duyet_baiviet" id="click" value="1" <?php if($row["duyet_baiviet"] == 1) echo "checked"; ?>>
            <span for="click">Yes</span> </label>
        </div>
        <!-- Radio button checked -->
        <div class="radio">
          <label class="pmd-radio pmd-radio-ripple-effect">
            <input type="radio" name="duyet_baiviet" id="click1" value="0" <?php if($row["duyet_baiviet"] == 0) echo "checked"; ?>>
            <span for="click1">No</span> </label>
        </div>
        <div class="group-fields clearfix row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <button class="btn pmd-ripple-effect btn-primary" type="submit" name="submit">Submit</button>
            <button class="btn pmd-ripple-effect btn-default" type="reset">Cancel</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="pmd-card pmd-z-depth">
    <div class="pmd-card-title">
      <div class="media-left set-svg">
        <span class="service-icon img-circle bg-fill-red text-center">
          <i class="material-icons md-dark pmd-sm" style="color: #fff; line-height: 40px;">supervisor_account</i>
        </span>
      </div>
      <div class="media-body media-middle">
        <h2 class="pmd-card-title-text typo-fill-secondary">Loại tin</h2>
      </div>
    </div>
    <div class="tcd-card-body">
      <p>
        <?php 
        for($i = 0; $i<count($getAll); $i++) {
          if($getAll[$i]["id_loaitin"] == $row["id_loaitin"]) {
            echo $getAll[$i]["name_loaitin"];
          }
        } ?>
      </p>
    </div>
  </div>

  <div class="pmd-card pmd-z-depth">
    <div class="pmd-card-title">
      <div class="media-left set-svg">
        <span class="service-icon img-circle bg-fill-red text-center">
          <i class="material-icons md-dark pmd-sm" style="color: #fff; line-height: 40px;">supervisor_account</i>
        </span>
      </div>
      <div class="media-body media-middle">
        <h2 class="pmd-card-title-text typo-fill-secondary">Ảnh đại diện</h2>
      </div>
    </div>
    <div class="pmd-card-body">
      <div class="group-fields clearfix row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          
          <div class="file-upload">
            <img id="blah" src="<?php echo "../public/assets/images/" . $row["anh_baiviet"]; ?>" alt="your image" style="width: 100%" />
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<style type="text/css">
  .tcd-card-body {
    padding: 16px;
  }
  .review-post img {
    display: block;
    margin: auto;
    width: 50%!important;
    height: auto!important;
  }

  @media only screen and (max-width: 800px) {
    .review-post img {
      width: 100%!important;
    }
  }
</style>




<script type="text/javascript">
  function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
  }

  $("#imgInp").change(function() {
  readURL(this);
  });

</script>