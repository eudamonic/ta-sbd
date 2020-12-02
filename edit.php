<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id_penduduk = $_POST['id_penduduk'];

    $nama=$_POST['nama'];
    $tempat lahir=$_POST['tempat lahir'];
    $tanggal lahir=$_POST['tanggal lahir'];
    $tempat mati=$_POST['tempat mati'];
    $tanggal mati=$_POST['tanggal mati'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE users SET nama='$nama',
tempat lahir='$tempat lahir',tanggal lahir='tanggal lahir',tempat mati='tempat mati' ,
tanggal mati='tanggal mati' WHERE id_penduduk=$_penduduk");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id_penduduk
// Getting id_penduduk from url
$id_penduduk = $_GET['id_penduduk'];

// Fetech user data based on id_penduduk
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id_penduduk=$id_penduduk");

while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['nama'];
    $tempat lahir = $user_data['tempat lahir'];
    $tanggal lahir = $user_data['tanggal lahir'];
    $tempat mati = $user_data['tempat mati'];
    $tanggal mati = $user_data['tanggal mati'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <h2>data penduduk</h2>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>nama</td>
                <td><input type="text" nama="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>tempat lahir </td>
                <td><input type="text" name="tempat lahir " value=<?php echo $tempat lahir ;?>></td>
            </tr>
            <tr> 
                <td>tanggal lahir</td>
                <td><input type="text" name="tanggal lahir" value=<?php echo $tanggal lahir;?>></td>
            </tr>
            <tr> 
                <td>tempat mati</td>
                <td><input type="text" name="tempat mati" value=<?php echo $tempat mati;?>></td>
            </tr>
            <tr> 
                <td>tanggal mati</td>
                <td><input type="text" name="tanggal mati" value=<?php echo $tanggal mati;?>></td>
            </tr>
            <tr>
                <td><input type="hiden" name="id_penduduk" value=<?php echo $_GET['id_penduduk'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
