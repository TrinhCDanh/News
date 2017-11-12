<div class="col-xs-12 col-lg-6">
  <?php  
    if($err != "") {
      ?>
        <div class="alert alert-danger">      
          <?php echo $err; ?>
        </div>
      <?php
    }
  ?>
  <form class="content-form" action="index.php?mod=baiviet&ac=saveAdd" method="post">
    
    <div class="group">      
      <input class="form-control" type="text" name="name_baiviet" required autofocus>
      <span class="bar"></span>
      <label class="form-control-placeholder">Tiêu đề bài viết</label>
    </div>
    
    <div class="group text-right">
        <button type="reset" class="btn-submit">Clear</button>
        <button type="submit" class="btn-submit" name="submit" >Save</button>  
    </div>
  </form>
</div>