<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link href="login.css" rel="stylesheet" type="text/css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
<div class="wrapper">
  <form action="">
    <h1>Login</h1>
    <div class="input-box">
      <input type="text" placeholder="Username" required>
      <i class="fa-solid fa-user">
    </div>  
    <div class="input-box">
      <input type="password" placeholder="Password" required>
      <i class=fa-solid fa-lock></i>  
    </div>  

    <div class="remember-forgot">
      <label for="">
        <input type="checkbox">Remember me</label>  
      <a href="#">Forgot Password?</a> 
    </div>  

    <button type="submit" class="btn">Login</button>

    <div class="register-link">
      <p>Dont Have an account? <a href="#">Register</a></p>
    </div>  
  </form>  
</body>

</html>