<?php

include 'header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Create Players</title>
</head>
<body>
<div class="form_container">	
<form action="insert.php" method="post">
    <p>
        <label for="firstName">First Name:</label>
        <input type="text" name="first_name" id="firstName" placeholder="First Name">
    </p>
    <p>
        <label for="lastName">Last Name:</label>
        <input type="text" name="last_name" id="lastName" placeholder="Last Name">
    </p>
    <p>
        <label for="goals">Goals:</label>
        <input type="text" name="goals" id="goals" placeholder="Goals">
    </p>
    <p>
        <label for="assists">Assists:</label>
        <input type="text" name="assists" id="assists" placeholder="Assists">
    </p>
    <p>
        <label for="season">Season:</label>
        <input type="text" name="season" id="season" placeholder="Season">
    </p>
    <input type="submit" value="Submit">
</form>
</div>
</body>
</html>