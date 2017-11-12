<form class="content-form" method="post" action="index.php?mod=account&ac=saveAdd">

  <div class="group">      
    <input class="form-control" type="text" name="name_admin" required autofocus>
    <span class="bar"></span>
    <label class="form-control-placeholder">Name</label>
  </div>
    
  <div class="group">      
    <input class="form-control" type="email" name="email_admin" required>
    <span class="bar"></span>
    <label class="form-control-placeholder">Email</label>
  </div>

  <div class="group">      
    <input class="form-control" type="password" name="pass1_admin" required>
    <span class="bar"></span>
    <label class="form-control-placeholder">Password</label>
  </div>

  <div class="group">      
    <input class="form-control" type="password" name="pass2_admin" required>
    <span class="bar"></span>
    <label class="form-control-placeholder">Confirm Password</label>
  </div>

  <div class="group">
      <button type="reset" class="btn-submit">Clear</button>
      <button type="submit" class="btn-submit" name="submit" >Save</button>  
  </div>

</form>