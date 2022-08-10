<?php
//koneksi database
$conn = mysqli_connect("localhost", "root", "", "dbportofolio");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }

    return $rows;
}
function index($data) {
    global $conn;
    $nama = htmlspecialchars ($data["nama"]);
    $email = htmlspecialchars ($data["email"]);
    $pesan = htmlspecialchars ($data["pesan"]);
    $query = "INSERT INTO tbpesan   
                VALUES 
    ('', '$nama', '$email', '$pesan')
    "; 
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
