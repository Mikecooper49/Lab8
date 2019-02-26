<?php

include("dbConnect.php");

$sql_query = "SELECT * FROM marvelmovies";
$result = $db->query($sql_query);
while ($row = $result->fetch_array()){
    echo "<p>" . $row['marvelMovieID'] .   "  " . $row['title' ] . "  " . $row['yearReleased'] . "  ".
        $row['productionStudio'] . "  " . $row['notes'];

}

$result->close();
// close connection to database
$db->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>
<body>

</body>
</html>