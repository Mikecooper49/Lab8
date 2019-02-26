<?php

include("dbConnect.php");

$sql_query = "SELECT * FROM marvelmovies WHERE yearReleased > '2010'";
$result = $db->query($sql_query);
while ($row = $result->fetch_array()){
    echo "<p>" . $row['marvelMovieID'] .   "  " . $row['title' ] . "  " . $row['yearReleased'] . "  ".
        $row['productionStudio'] . "  " . $row['notes'];

}

$result->close();
// close connection to database
$db->close();

?>