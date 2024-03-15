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
</style>
</head>
<body>

<div class="navbar">
  <div>
    
  </div>
  <button class="appointment-button">MAKE AN APPOINTMENT</button>
</div>

<div class="header-cust">
  <h1>Welcome to ABC Lab</h1>
  <div class="button-group">
    <button class="button">SignUp</button>
    <button class="button">SignIn</button>
  </div>
</div>

</body>
</html>