<form class="content-form" method="post" action="index.php?mod=account&ac=saveEdit&id=<?php echo $_SESSION["user_data"]["id_user"]; ?>">

  <div class="group">      
    <input class="form-control" type="text" name="name_user" value="<?php echo $row["name_user"]; ?>" required>
    <span class="bar"></span>
    <label class="form-control-placeholder">Name</label>
  </div>
    
  <div class="group">      
    <input class="form-control" type="text" name="email_user" value="<?php echo $row["email_user"]; ?>" >
    <span class="bar"></span>
    <label class="form-control-placeholder">Email</label>
  </div>
  
  <div class="group">      
    <div class="checkbox">
      <label>
        <input type="checkbox" id="changePass">
        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
        Password Change
      </label>
    </div> 
  </div>

  <div class="group">      
    <input class="form-control frm-password" type="password" name="pass1_user" disabled required>
    <span class="bar"></span>
    <label class="form-control-placeholder">Password</label>
  </div>

  <div class="group">      
    <input class="form-control frm-password" type="password" name="pass2_user" disabled required="">
    <span class="bar"></span>
    <label class="form-control-placeholder">Confirm Password</label>
  </div>

  <div class="group">
      <button type="reset" class="btn-submit">Clear</button>
      <button type="submit" class="btn-submit" name="submit" >Save</button>  
  </div>

</form>
