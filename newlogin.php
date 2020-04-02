<?php include('server2.php'); ?>

<?php
// Turn off all error reporting
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
<style>
  body {
            background-image: url("bg12.jpg");
            background-repeat: no-repeat;
            background-position: center;
            margin: 0px;
            padding: 0px;
            height: 100%;
            width: 100%;
            background-attachment: fixed;
            background-size: cover;
            font-family: Arial, Helvetica, sans-serif;
              }
form {
      text-align: center;
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 45%;
      height: 50%;
    }

input[type=text]{
  width: 40%;
  padding: 12px 20px;
  margin: 20px;
  margin-top: 90px;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  }

  input[type=password] {
  width: 40%;
  padding: 12px 20px;
  margin: 20px;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
h1{
  text-align: center;

}

button {
  text-align: center;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 30px;
  border: none;
  cursor: pointer;
  width: 45%;
}

button:hover {
  opacity: 0.8;
  }

.container {
  background-color: white;
  padding: 0px;
  text-align: center;
  height: 400px;
}
p{
  color: silver;
  font-size: 14px;
}
img{
  cursor: pointer;
}



</style>
</head>
<body>
  <img onclick="goBack()" height="50px" width="50px" src="back.png">

  <script>
function goBack() {
  window.history.back();
}
</script>


<h1>SIGN UP</h1>

<form action="newlogin.php" method="post">

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <br>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter mail id" name="email" required>
    <br>
    <label for="phone"><b>Phone</b></label>
    <input type="number" placeholder="phone" name="phone" required>
    <br>
    <label for="nameofevent"><b>Name of Event</b></label>
    <input type="text" placeholder="phone" name="nameofevent" required>
    <br>
    <button name="confirm" type="submit">confirm</button>

    
 
  </div>

</form>

</body>
</html>
