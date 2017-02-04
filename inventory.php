<?php include 'database.php'; ?>
<?php
	$query = "SELECT * FROM songs ORDER BY title";
	$songs = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Song database </title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/table.css">
		<link rel="stylesheet" href="css/bootstrap.css">

</head>

<body>
<div id="container">

<h1>Song Database</h1>

<p class="middle">Check out the song database and find a new favorite song. Or <a href="enter_new_record.php">add one of your favorites</a>.</p>



<table  class="table">
    <tr>
        <th>Title</th>
        <th>Artist</th>
        <th>Genre</th>
        <th>Mood</th>

    </tr>
<!-- begin PHP while-loop to display database query results
     with each row enclosed in LI tags -->
<?php while($row = mysqli_fetch_assoc($songs)) :  ?>

<tr>
    <td><?php echo $row['title']; ?></td>
    <td><?php echo $row['artist']; ?></td>
    <td><?php echo $row['genre']; ?></td>
    <td><?php echo $row['mood']; ?></td>

</tr>

<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->

</table>

<p class="middle">Go back to the home page by clicking <a href="index.html">here</a>.</p>


</div> <!-- close container -->
</body>
</html>
