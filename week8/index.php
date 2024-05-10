<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-color: lightgreen;
}

h1 {
  color: white;
  text-align: center;
}
  h2 {
  color: Green;
  text-align: center;
}

h2 {
  font-family: verdana;
  font-size: 50px;
}
  
</style>
</head>
<body>

<h1>My Personal Profile</h1>
<h2>Robyn Dominique Fruto</h2>

  <?php
echo "My first PHP script!";
?>

 <script>
document.getElementById("demo").innerHTML = "Yipee.";
</script> 
  <button type="button"
onclick="document.getElementById('demo').innerHTML = Date()">
Click me to display Date and Time.</button>

<p id="demo"></p>

<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
</body>
</html>
