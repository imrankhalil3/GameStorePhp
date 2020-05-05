<form action="<?php echo base_url();?>user/create" method="post">
<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
  <div class="form-group">
    <label for="firstName">First Name</label>
    <input name="firstName" type="text" class="form-control" id="firstName" placeholder="First Name">
  </div>
  
  <div class="form-group">
    <label for="lastName">Last Name</label>
    <input name="lastName" type="text" class="form-control" required id="lastName" placeholder="Last Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
    <div class="form-group">
    <label for="lastName">User Name</label>
    <input name="userName" type="text" class="form-control" placeholder="User Name">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> I agree term and condition
    </label>
  </div>
  <button type="submit" class="btn btn-default">Register</button>
</form>