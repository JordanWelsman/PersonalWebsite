<?php
include_once "header.php";
$sitepwd = "jordan";
?>

<h1>Jordan Welsman</h1>
<p>Website Content</p>

<?php
if (!empty($_POST["password"])) { // check if password was submitted
    if ($_POST["password"] == $sitepwd) { // check if password was correct
        // $_SESSION["user"] = true; // set session variable
        echo "Logged in!";
    } else {
        // header("location: index.php?error=incorrectpassword"); // redirect (password incorrect)
        echo "Not logged in; Incorrect password.";
        exit();
    }
} else {
    // header("location: index.php?error=notauthorised"); // redirect (form not submitted)
    echo "Not logged in; Not authorised.";
    exit();
}

?>

<h1>Logged in!</h1>
<a href="/inc/logout.php">Log out</a>

<?php
include_once "footer.php"
?>