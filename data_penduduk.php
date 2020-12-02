<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id_penduduk DESC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="add.php">tambahkan penduduk baru</a><br/><br/>

    <h2>Data penduduk</h2>

    <table width='80%' border=1>

    <tr>
        <th>nama</th> <th>tempat lahir</th> <th>tanggal lahir</th> <th>tempat mati</th> <th>tanggal mati</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['tempat lahir']."</td>";
        echo "<td>".$user_data['tanggal lahir']."</td>";    
        echo "<td>".$user_data['tempat mati']."</td>";
        echo "<td>".$user_data['tanggal mati']."</td>";
        echo "<td><a href='edit.php?id_penduduk=$user_data[id_penduduk]'>Edit</a> | <a href='delete.php?id_penduduk=$user_data[id_penduduk]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>
