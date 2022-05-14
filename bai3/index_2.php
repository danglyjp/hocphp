<?php
$userName =  $_POST(['username']);
$pass     =  $_POST(['pass']);

?>
<h2>FORM</h2>
<form action="" method="POST">
  <label>user name</label><br>
  <input type="text" id="username"><br>
  <label >password</label><br>
  <input type="password" id="pass"><br><br>
  <input type="submit" value="Submit">
</form> 