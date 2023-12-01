<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Logowanie</title>

</head>
<body>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');

body{
  background: rgb(63,94,251);
  background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(252,70,107,1) 100%);
}


.con{
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 200px;
}


form{
  height: 400px;
  width: 600px;
  background-color: #a0a8cf;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}

input{
border: #000000 solid;
height: 25px;
}

h1{
  font-family: 'Roboto', sans-serif;
  margin-bottom: 50px;
}

label{
  font-family: 'Roboto';
  font-weight: 400;
 color: black;
}



button {
  align-items: center;
  background-color: rgba(240, 240, 240, 0.26);
  border: 1px solid #DFDFDF;
  border-radius: 16px;
  box-sizing: border-box;
  color: #000000;
  cursor: pointer;
  display: flex;
  font-family: Inter, sans-serif;
  font-size: 18px;
  justify-content: center;
  line-height: 28px;
  max-width: 100%;
  padding: 14px 22px;
  text-decoration: none;
  transition: all .2s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}
</style>

<div class="con">
<form method="post">
    <h1>Sign In</h1>
    <label for="username">Login:</label>
    <input type="text" id="username" name="username" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>

    <button type="submit">Sign in</button>
</form>
</div>


<?php    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if($_POST["username"] === "admin" && $_POST["password"] === "test")
        {
            $message = "Login sucessful";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else 
        {
            $message = "Wrong login data";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
?>

</body>
</html>