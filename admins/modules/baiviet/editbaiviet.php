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
        <h2>Hiển thị bài viết?</h2>
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
                <button class="btn pmd-ripple-effect btn-primary btn-image"><img id="blah" src="<?php echo "../assets/images/" . $row["anh_baiviet"]; ?>" alt="your image" style="width: 100%" /></button>
            </div>
            
          </div>
        </div>
      </div>
      
    </div>
  </div> 
</form>

<?php 
if($row["name_tacgia"] != $name_tacgia["name_admin"]) {
  ?>
    <form action="index.php?mod=baiviet&ac=requestEdit&id=<?php echo $row["id_baiviet"]; ?>" method="post">
      <div class="col-md-9">
        <div class="pmd-card pmd-z-depth">
          <div class="pmd-card-body">
            <h2>Yêu cầu tác giả sửa bài viết (Nếu có)</h2>

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

          </div>
        </div>
      </div>
    </form>
  <?php
} 
?>


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