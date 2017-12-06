<?php  
  if($row["yeucau_baiviet"] != "") {
    ?>
      <div class="col-md-12">
        <div class="alert alert-warning">      
          <?php echo "Thông báo từ Admin: " . $row["yeucau_baiviet"]; ?>
        </div>
      </div>
    <?php
  }
?>
<form id="validationForm" action="index.php?mod=baiviet&ac=saveEdit&id=<?php echo $row["id_baiviet"]; ?>" method="post"  enctype="multipart/form-data">
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
              <input type="text" id="regular1" class="form-control" name="name_baiviet" required value="<?php if(isset($_POST["submit"])) echo $name_baiviet; else  echo $row["name_baiviet"]; ?>">
            </div>
          </div>
        </div>
        
        <div class="group-fields clearfix row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group pmd-textfield">
              <label class="control-label">Tóm tắt</label>
              <textarea required class="form-control" name="tomtat_baiviet"><?php if(isset($_POST["submit"])) echo $tomtat_baiviet; else echo $row["tomtat_baiviet"]; ?></textarea>
            </div>
          </div>
        </div>

        <div class="group-fields clearfix row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <textarea name="noidung_baiviet" id="ckeditor">
              <?php if(isset($_POST["submit"])) echo $noidung_baiviet; else echo $row["noidung_baiviet"]; ?>
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
                <label>Trạng thái</label>
                <select class="select-simple form-control pmd-select2" name="trangthai_baiviet">
                  <option value="0" <?php if($row["trangthai_baiviet"]==0) echo "selected"; ?>>Bài nháp</option>
                  <option value="1" <?php if($row["trangthai_baiviet"]==1) echo "selected"; ?>>Chờ duyệt bài</option>
                </select>
              </div>
              <div class="form-group pmd-textfield">
                <button class="btn pmd-ripple-effect btn-primary" type="submit" name="submit">Submit</button>
                <button class="btn pmd-ripple-effect btn-default" type="reset">Cancel</button> 
              </div>
            </div>
          </div>
        </div>
      </div>

    <div class="pmd-card pmd-z-depth">
      <div class="pmd-card-body">
        <div class="group-fields clearfix row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group pmd-textfield">       
            <label>Thuộc loại tin*</label>
            <select class="select-simple form-control pmd-select2" name="id_loaitin">
              <?php 
                for($i = 0; $i<count($getAll); $i++) {
                  if($getAll[$i]["id_loaitin"] == $row["id_loaitin"]) {
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
                <button class="btn pmd-ripple-effect btn-primary btn-image"><img id="blah" src="<?php echo "../public/assets/images/" . $row["anh_baiviet"]; ?>" alt="your image" style="width: 100%" /></button>
            </div>
            
          </div>
        </div>
      </div>
      
    </div>
  </div> 
</form>



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