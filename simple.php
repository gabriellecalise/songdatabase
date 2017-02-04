<?php include 'database.php'; ?>

<?php
// WARNING! This version does not use prepared statements!

if (isset($_POST['title']) && isset($_POST['artist'])) {

    // sanitizeMySQL() is a custom function, written below
    $title = sanitizeMySQL($conn, $_POST['title']);
    $artist = sanitizeMySQL($conn, $_POST['artist']);
    $genre= sanitizeMySQL($conn, $_POST['genre']);
    $mood = sanitizeMySQL($conn, $_POST['mood']);

    // create a PHP timestamp
    date_default_timezone_set('America/New_York');
    $date = date('m-d-Y', time());

    $query = "INSERT INTO songs (title, artist, genre, mood)
    VALUES ('$title', '$artist', '$genre', '$mood')";

    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    // will be returned to the .ajax success function
    if ($result) {
        echo "You entered: ";
        echo $title . ", ". $artist . ", ". $genre . ", ". $mood;
    } else {
        echo "Something went wrong.";
    }
}

// erase any HTML tags and then escape all quotes
function sanitizeMySQL($conn, $var) {
    $var = strip_tags($var);
    $var = mysqli_real_escape_string($conn, $var);
    return $var;
}

?>
