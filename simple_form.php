<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Song Database Simple Form </title>
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
    <script src="js/simple.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>
<div id="container">

<h1>Song Database</h1>

<div id="songs">

<form id="songform" method="post" action="simple_form.php" autocomplete="off">
    <label for="title">Title </label>
	<input type="text" name="title" id="title" maxlength="50" required>

    <label for="artist">Artist </label>
    <input type="text" name="artist" id="artist" maxlength="50" required>

    <label for="genre">Genre </label>
	<input type="text" name="genre" id="genre" maxlength="20" required>

    <label for="mood">Mood </label>
	<input type="text" name="mood" id="mood" max="20" required>


	<input type="submit" id="submit" value="Submit">


</form>

</div>

</div> <!-- close container -->
</body>
</html>
