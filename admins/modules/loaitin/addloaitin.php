<form id="validationForm" action="index.php?mod=loaitin&ac=saveAdd" method="post">
  <div class="pmd-card pmd-z-depth">
    
    <div class="pmd-card-body">
      <h2><?php echo $info; ?></h2>
      <div class="group-fields clearfix row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="form-group pmd-textfield pmd-textfield-floating-label">
            <label for="regular1" class="control-label">
              Tên loại tin*
            </label>
            <input type="text" id="regular1" class="form-control" name="name_loaitin" required autofocus>
          </div>
        </div>
      </div>
      <div class="group-fields clearfix row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group pmd-textfield pmd-textfield-floating-label">       
              <label>Thuộc thể loại*</label>
              <select class="select-simple form-control pmd-select2" name="id_theloai">
                <option></option>
                <?php
                foreach ($getAll as $r) {
                  ?> <option value="<?php echo $r["id_theloai"]?>"><?php echo $r["name_theloai"] ?></option> <?php
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
    
      <?php  
        if($err != "") {
          ?>
            <div class="pmd-card-body">
              <div class="alert alert-danger">      
                <?php echo $err; ?>
              </div>
            </div>
          <?php
        }
      ?>
    
  </div> <!-- section content end -->  
</form>
     