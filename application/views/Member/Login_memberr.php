

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Member</title>
  
  
  
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/login/css/style.css">

  
</head>

<body>

  <form role="form" method="post" action="">
    <header>Login Member</header>
    <label>Nama </label>
    <input type="nama" class="form-control" name="nama"  placeholder="Nama">

    <div class="help"></div>
    <label>Password </label>
    <input type="password" class="form-control" name="pass"  placeholder="Password">

    <div class="help"></div><br/>
    <center>  <a href="<?php echo base_url()."Welcome";?>">Login</a></center><br/>

    <center> <a href="<?php echo base_url()."Welcome/register";?>">Register</a></center>
  </form>
</body>
</html>
