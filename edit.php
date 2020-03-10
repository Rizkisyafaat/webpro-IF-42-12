<?php 
    session_start();
    include 'database.php';

    function EditProfile($data, $database)
    {
        $userid = $_SESSION["userid"];

        $name         = $data["name"];
        $username     = $data["username"];
        $website      = $data["website"];
        $bio          = $data["bio"];
        $email        = $data["email"];
        $phone_number = $data["phone number"];
        $gender       = $data["gender"];


        $query = "UPDATE profile 
                  SET name = '$name', 
                  username = '$username', 
                  website = '$website', 
                  bio = '$bio', 
                  email = '$email', 
                  phonenumber = '$phone_number',
                  gender = '$gender' 
                  WHERE id = $id ";
        $result = mysqli_query($database, $query);
        return $result;
    }

    if (isset($_POST["submit"])) 
    {
        if (EditProfile($_POST, $database)) 
        {
            header("Location: profile.php");
        } 

        else 
        {
            header("Location: edit-profile.php");
        }
    }
?>
