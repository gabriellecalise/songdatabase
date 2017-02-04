<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Song Database - Enter </title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
    <script src="js/enter.js"></script>


</head>

<body>
<div id="container">

<h1>Song Database: Enter A New Song</h1>

<p class="middle"><a href="inventory.php">View full song list</a></p>

<div id="songs">

<form id="songform" method="post" autocomplete="off">
<!-- autocomplete="off" ensures form will be empty if user clicks
     the browser's Back button -->


<div class="form-group">
  <label for="title">Title </label>
	 <input type="text" name="title" id="title" placeholder="ex: Pink Bullets" maxlength="50" required>
</div>


<div class="form-group">
  <label for="artist">Artist </label>
<input type="text" name="artist" id="artist" placeholder="ex. The Shins" maxlength="50" required>
</div>


<div class="form-group">
    <label for="genre">Genre </label>
  <input type="text" name="genre" id="genre" placeholder="ex. indie rock" maxlength="50" required>
</div>

<div class="form-group">
    <label for="mood">Mood </label>
	<input type="text" name="mood" id="mood" max="50" placeholder="ex. relaxing" required>
</div>


	<input type="submit" id="submit" class="btn" value="Submit">
</form>

</div>

<div id="response">
    <p class="announce">Thanks for submitting your song!</p>
    <p class="middle"><a href="enter_new_record.php">Return to the form</a></p>
</div>

</div> <!-- close container -->
</body>
</html>
