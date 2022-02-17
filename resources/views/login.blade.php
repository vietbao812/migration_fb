<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <style>

    *{
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    input, button {
      outline: none;
      border: none;
      padding: 10px;
      font-size: 18px;
    }

    .wrapper {
      width: 100vw;
      height: 100vh;
      background: #3b599c;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: space-between;
      padding: 100px 0 50px;
    }
    .wrapper h1 {
      color: #fff;
      font-size: 52px;
    }
    .wrapper form {
      width: 400px;
    }
    .wrapper form input{
      margin-top: 20px;
      display: block;
      width: 100%;
    }
    .wrapper .form-login button{
      background: #577fbd;
      margin-bottom: 30px;
      display: block;
      width: 400px;
      cursor: pointer;
      color: #fff;
    }

    .wrapper div a{
      display: block;
      color: #fff;
      text-decoration: none;
      margin: 5px 0;
      transition: all .2s ease;
    }
    .wrapper div a:hover {
      text-decoration: underline;
    }

  </style>

</head>
<body>
  
    <div class="wrapper">
      <h1>Facebook Login Page</h1>
      <form action="">
        <input type="text" placeholder="Email or Phone Number">
        <input type="password" placeholder="Password">
      </form>
      <form action="" class="form-login">
        <button class="login">Log in</button>
        <button class="login">Log in with Browser</button>
      </form>
      <div>
        <a href="">Sign Up For Facebook</a>
        <a href="">Forgot password</a>
      </div>
    </div>

</body>
</html>