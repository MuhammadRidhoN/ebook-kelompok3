<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style type="text/css">
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400");
        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
        }

        body{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: url(ops.jpg) no-repeat;
        background-size: cover;
        background-position: center;
        }

        .wrapper{
        width: 420px;
        background: transparent;
        border: 2px solid rgba(255, 255, 255, .2);
        filter:blur(20px);
        box-shadow: 0 0 10px rgba(0, 0, 0, .2);
        color: #fff;
        border-radius: 10px;
        padding: 30px 40px;
        }

        .wrapper h1{
        font-size: 36px;
        text-align: center;
        }

        .wrapper .input-box{
        width: 100%;
        height: 50px;
        margin: 30px 0;
        }

        .input-box input{
        width: 100%;
        height: 100%;
        background: transparent;
        border: none;
        outline: none;
        border: 2px solid rgba(255, 255, 255, 0.2);
        border-radius: 40px;
        color: #fff;
        padding: 20px 45px 20px 20px;
        }

        .input-box input::placeholder{
        color: #fff;
        }

        .inpout-box .i {
        position: absolute;
        right: 20px;
        top:50%;
        transform: translateY(-50%);
        font-size: 20px;
        }

        .wrapper .remember-forgot{
        display: flex;
        justify-content: space-between;
        font-size: 14.5px;
        margin: -15px 0 15px;
        }

        .remember-forgot label input{
        accent-color: #fff;
        margin-right: 3px;
        }

        .remember-forgot a{
        color: #fff;
        text-decoration: none;
        }

        .remember-forgot a:hover{
        text-decoration: underline;
        }

        .wrapper .btn{
        width: 100%;
        height: 45px;
        background: #fff;
        border: none;
        outline: none;
        border-radius: 40px;
        box-shadow: 0 0 10px rgba(0, 0, 0, .1);
        cursor: pointer;
        font-size: 16px;
        color: #333;
        font-weight: 600;
        }

        .wrapper .register-link{
        font-size: 14.5px;
        text-align: center;
        margin: 20px 0 15px ;
        }

        .register-link p a{
        color: #fff;
        text-decoration: none;
        font-weight: 600;
        }
    </style>
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