<html>
<head>
    <title>tambahkan penduduk baru</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <h2>data penduduk</h2>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>tempat lahir</td>
                <td><input type="text" name="tempat lahir"></td>
            </tr>
            <tr> 
                <td>tanggal lahir</td>
                <td><input type="text" name="tanggal lahir"></td>
            </tr>
            <tr> 
                <td>tempat mati</td>
                <td><input type="text" name="tempat mati" value="Add"></td>
            </tr>
            <tr> 
                <td>tanggal mati</td>
                <td><input type="text" name="tanggal mati" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['text'])) {
        $nama = $_POST['nama'];
        $tempat lahir = $_POST['tempat lahir'];
        $tanggal lahir = $_POST['tanggal lahir'];
        $tempat mati = $_POST['tempat mati'];
        $tanggal mati = $_POST['tanggal mati'];
        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(nama,tempat lahir,tanggal lahir,tempat mati,tanggal mati) VALUES('$nama','$tempat lahir','$tanggal lahir','$tempat mati','$tanggal mati')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>
