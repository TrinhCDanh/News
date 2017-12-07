<form id="validationForm" action="index.php?mod=theloai&ac=saveEdit&id=<?php echo $row["id_theloai"]; ?>" method="post">
  <div class="pmd-card pmd-z-depth">

    <div class="pmd-card-body">
      <h2><?php echo $info; ?></h2>
      <div class="group-fields clearfix row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="form-group pmd-textfield pmd-textfield-floating-label">
            <label for="regular1" class="control-label">
              Name*
            </label>
            <input type="text" id="regular1" class="form-control" name="name_theloai" value="<?php echo $row["name_theloai"] ?>">
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
      
  </div> 
</form>
      