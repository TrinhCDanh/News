<form id="validationForm" action="index.php?mod=loaitin&ac=saveEdit&id=<?php echo $row["id_loaitin"];?>" method="post">
  <div class="pmd-card pmd-z-depth">
    
    <div class="pmd-card-body">
      <h2><?php echo $info; ?></h2>
      <div class="group-fields clearfix row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="form-group pmd-textfield pmd-textfield-floating-label">
            <label for="regular1" class="control-label">
              Tên loại tin*
            </label>
            <input type="text" id="regular1" class="form-control" name="name_loaitin" required value="<?php echo $row["name_loaitin"];?>">
          </div>
        </div>
      </div>
      <div class="group-fields clearfix row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group pmd-textfield">       
              <label>Thuộc thể loại*</label>
              <select class="select-simple form-control pmd-select2" name="id_theloai">
                <option></option>
                <?php 
                for($i = 0; $i<count($getAll); $i++) {
                  if($getAll[$i]["id_theloai"] == $row["id_theloai"]) {
                    ?><option value="<?php echo $getAll[$i]["id_theloai"]?>" selected><?php echo $getAll[$i]["name_theloai"] ?></option><?php
                  } 
                  else {
                    ?><option value="<?php echo $getAll[$i]["id_theloai"]?>"><?php echo $getAll[$i]["name_theloai"] ?></option><?php
                  }
                } ?>
              </select>
            </div>
          </div>  
      </div>
    </div>    
    <div class="pmd-card-actions">
      <button class="btn btn-primary next" type="submit" name="submit">Submit</button>
      <button class="btn btn-default" type="reset">Cancel</button>
    </div>
    <div class="pmd-card-body">
      <?php  
        if($err != "") {
          ?>
            <div class="alert alert-danger">      
              <?php echo $err; ?>
            </div>
          <?php
        }
      ?>
    </div>
  </div> <!-- section content end -->  
</form>
     