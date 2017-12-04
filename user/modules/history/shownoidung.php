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
<form id="validationForm" action="index.php?mod=baiviet&ac=saveEdit&id=<?php echo $data_baiviet["id_baiviet"]; ?>" method="post"  enctype="multipart/form-data">
  <div class="col-md-9">
    <div class="pmd-card pmd-z-depth">
      
      <div class="pmd-card-body">
        <h2><?php echo $info; ?></h2>
        <div class="group-fields clearfix row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group pmd-textfield pmd-textfield-floating-label">
              <label for="regular1" class="control-label">
                Tiêu đề bài viết*
              </label>
              <input type="text" id="regular1" class="form-control" name="name_baiviet" required value="<?php if(isset($_POST["submit"])) echo $name_baiviet; else  echo $data_baiviet["name_baiviet"]; ?>">
            </div>
          </div>
        </div>
        
        <div class="group-fields clearfix row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group pmd-textfield">
              <label class="control-label">Tóm tắt</label>
              <textarea required class="form-control" name="tomtat_baiviet"><?php if(isset($_POST["submit"])) echo $tomtat_baiviet; else echo $data_baiviet["tomtat_baiviet"]; ?></textarea>
            </div>
          </div>
        </div>

        <div class="group-fields clearfix row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <textarea name="noidung_baiviet" id="ckeditor">
              <?php if(isset($_POST["submit"])) echo $noidung_baiviet; else echo $data_baiviet["noidung_baiviet"]; ?>
            </textarea>
            <script type="text/javascript">CKEDITOR.replace( 'ckeditor'); </script>
          </div>
        </div>
      </div>    
      
    </div>
  </div>
   <!-- section content end --> 
  <div class="col-md-3">
  
    <div class="pmd-card pmd-z-depth">
      <div class="pmd-card-body">
        <div class="group-fields clearfix row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group pmd-textfield">       
            <label>Thuộc loại tin*</label>
            <select class="select-simple form-control pmd-select2" name="id_loaitin">
              <?php 
                for($i = 0; $i<count($getAll); $i++) {
                  if($getAll[$i]["id_loaitin"] == $data_baiviet["id_loaitin"]) {
                    ?><option value="<?php echo $getAll[$i]["id_loaitin"]?>" selected><?php echo $getAll[$i]["name_loaitin"] ?></option><?php
                  } 
                  else {
                    ?><option value="<?php echo $getAll[$i]["id_loaitin"]?>"><?php echo $getAll[$i]["name_loaitin"] ?></option><?php
                  }
                } ?>
            </select>
          </div>
          </div>
        </div>
      </div>
    </div>

    <div class="pmd-card pmd-z-depth">
      <div class="pmd-card-body">
        <div class="group-fields clearfix row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h2>Ảnh đại diện</h2>
            <div class="file-upload">
                <input type='file' id="imgInp" style="width: 100%" name="anh_baiviet"/>
                <button class="btn pmd-ripple-effect btn-primary btn-image"><img id="blah" src="<?php echo "../assets/images/" . $data_baiviet["anh_baiviet"]; ?>" alt="your image" style="width: 100%" /></button>
            </div>
            
          </div>
        </div>
      </div>
      
    </div>
  </div> 
</form>

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
            <img id="blah" src="<?php echo "../assets/images/" . $data_baiviet["anh_baiviet"]; ?>" alt="your image" style="width: 100%" />
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