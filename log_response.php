<?php
$dsn = "odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=C:\Users\TOM OLIVER C PRESADO\OneDrive\Documents\diddyaccess.accdb;";
$conn = new PDO($dsn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $response = $_POST['response'];

    $query = "INSERT INTO CorrectAttempts (Response) VALUES (:response)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':response', $response);

    if ($stmt->execute()) {
        echo "Response logged successfully";
    } else {
        echo "Error logging response";
    }
}
?>