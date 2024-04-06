<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="./css/style.css" rel="stylesheet">
<title>ABC Lab</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-image: url('./images/newbg.jpeg'); /* You'll need to replace this with the actual path to your background image */
    background-size: cover;
    
    /* overflow:hidden; */
  }

  .navbar {
    position: absolute;
    top: 0;
    width: 100%;
    display: flex;
    justify-content: space-between;
    padding: 35px 0px;
    background:#d9fdff;
    justify-content: space-between;
    align-items: center; 
  }

  /* .navbar a {
    text-decoration: none;
    color: #000;
    margin: 0 5px;
  } */

  .header-cust {
    text-align: center;
    color: #000;
  }

  .header h1 {
    font-size: 3em;
  }

  .button-group {
    margin-top: 20px;
  }

  .button {
    padding: 10px 40px;
    margin: 0px;
    border: none;
    color: white;
    background-color: #007bff;
    cursor: pointer;
    transition: background-color 0.3s ease;
    border-radius:3px;

  }

  .button:hover {
    background-color: #0056b3;
  }

  .appointment-button {
    position: absolute;
    top: 10px;
    right: 50px;
    padding: 10px 10px;
    background-color: #28a745;
    color: white;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
    border-radius:5px;
  }

  .appointment-button:hover {
    background-color: #218838;
  }
  .alert-warning {
      color: #8a6d3b;
      background-color: #fcf8e3;
      border-color: #faebcc;
  }
  .alert {
      padding: 15px;
      margin-bottom: 20px;
      border: 1px solid transparent;
      border-radius: 4px;
  }
  .alert-success {
      padding: 15px;
      color: #155724;
      background-color: #d4edda;
      border-color: #c3e6cb;
      border-radius: 4px;
      margin-bottom: 20px;
      border: 1px solid transparent;
  }
</style>
</head>
<body>

<div class="navbar">
  <div>
    
  </div>
  <a href="tech"><button class="appointment-button">Login as Technician</button></a>
</div>

<div class="header-cust">
<div class="form-group">
  @if(Session::has('success'))
  <div class="alert-success">{{Session::get('success')}}</div>
  @endif
  @if(Session::has('fail'))
  <div class="alert-danger">{{Session::get('fail')}}</div>
  @endif
  <h1>Welcome to ABC Lab</h1>
  <div class="button-group">
    <button class="button"><a href="register">Sign Up</a></button>
    <button class="button"><a href="login">Sign In</a></button>
  </div>
</div>

</body>
</html>