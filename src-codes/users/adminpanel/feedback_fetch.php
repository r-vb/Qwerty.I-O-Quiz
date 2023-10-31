<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

// Include the database connection file
include('../conn.php');

// SQL query to fetch data from the table
$sql = "SELECT * FROM feedbacks_tbl";
$result = $conn->query($sql);

if ($result === false) {
    die("Query failed: " . $conn->error);
}

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Id</th><th>Name</th><th>Ratings</th><th>Gains</th><th>Suggestions</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["fb_id"] . "</td>";
        echo "<td>" . $row["student_id"] . "</td>";
        echo "<td>" . $row["fb_student_as"] . "</td>";
        echo "<td>" . $row["fb_ratings"] . "</td>";
        echo "<td>" . $row["fb_mygains"] . "</td>";
        echo "<td>" . $row["fb_feedbacks"] . "</td>";
        echo "<td>" . $row["fb_date"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No data found";
}

// Close the database connection
$conn->close();
?>