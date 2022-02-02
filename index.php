<?php
include_once "header.php";
?>

<h1>Website Title</h1>
<p>Website Content</p>

<h2>Enter password to access:</h2>
<form action="hidden.php" name="login" method="POST">
    <label for="password">Password:</label>
    <input type="password" name="password">
    <input type="submit" name="login" value="Log in">
</form>

<?php
include_once "footer.php"
?>