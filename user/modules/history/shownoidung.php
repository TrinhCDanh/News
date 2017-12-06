<?php  
  if($data_baiviet["yeucau_baiviet"] != "") {
    ?>
      <div class="col-md-12">
        <div class="alert alert-warning">      
          <?php echo "Thông báo từ Admin: " . $data_baiviet["yeucau_baiviet"]; ?>
        </div>
      </div>
    <?php
  }
?>

<div class="col-md-9 review-post">

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
            <p> <?php echo $data_baiviet["name_baiviet"]; ?> </p>
          </div>
        </div>
      </div>
      
      <div class="group-fields clearfix row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="form-group pmd-textfield">
            <h2>Tóm tắt bài viết</h2>
            <p> <?php echo $data_baiviet["tomtat_baiviet"]; ?> </p>
          </div>
        </div>
      </div>

      <div class="group-fields clearfix row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h2>Nội dung chi tiết</h2>
          <p> <?php echo $data_baiviet["noidung_baiviet"]; ?> </p>
        </div>
      </div>
    </div>    
    
  </div>
</div>

<div class="col-md-3">
    
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
          if($getAll[$i]["id_loaitin"] == $data_baiviet["id_loaitin"]) {
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
            <img id="blah" src="<?php echo "../public/assets/images/" . $data_baiviet["anh_baiviet"]; ?>" alt="your image" style="width: 100%" />
          </div>
        </div>
      </div>
    </div>
  </div>

</div>



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