<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="ayan";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{
     $first_name = $_POST['firstname'];
     $last_name = $_POST['lastname'];
     $phone = $_POST['phone'];
     $address = $_POST['address'];
     $email = $_POST['email'];
     $password = $_POST['pass'];


     $sql_query = "INSERT INTO registration(firstname, lastname, phone, address, mail, password)
     VALUES ('$first_name','$last_name','$phone', '$address', '$email','$password')";

     if (mysqli_query($conn, $sql_query)) 
     {
        echo "New Details Entry inserted successfully !";
     } 
     else
     {
        echo "Error: " . $sql . "" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>