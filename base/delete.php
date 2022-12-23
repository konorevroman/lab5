
<?php
//unit of work
//repository

//data access layer
//java + spring , C# +asp.net core
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $getId = $_GET['id'];
        
        $servername = "localhost";
        $username = "admin";
        $password = "<e[nbR25642789";
        $databasename = "beauty-market";


        $conn = new mysqli($servername, $username, $password, $databasename);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "DELETE FROM catalog WHERE id='$getId'";
        $result = mysqli_query($conn, $sql);

        $conn->close();
    }


?>