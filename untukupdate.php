<?php
session_start();
include('database.php');
  
// nyimpen ke variabel
$id                 = $_POST['id'];
$name               = $_POST['name'];
$username           = $_POST['username'];
$website            = $_POST['website'];
$bio                = $_POST['bio'];
$email              = $_POST['email'];
$phone_number       = $_POST['phone_number'];
$gender             = $_POST['gender'];
// query di sql buat insert data
$query="UPDATE profile SET 
        id='$id',
        name='$name',
        username='$username',
        website='$website',
        bio='$bio' 
        where id ='$id_mahasiswa'";

mysqli_query($database, $query);

// mengalihkan ke halaman index.php
header("location:profile.php");

// -----------------------------------------------------------------------
    // $profile = mysqli_query($database, "SELECT * from profile");
    // $no=1;
    // foreach ($profile as $row){
    //     echo "<tr>
    //         <td>$no</td>
    //         <td>".$row['id']."</td>
    //         <td>".$row['name']."</td>
    //         <td>".$row['website']."</td>

    //         <td>".$row['id']."</td>
    //           </tr>";
    //     $no++;
    // }


?>