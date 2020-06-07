<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$conn=mysqli_connect("localhost","plantbas_ace_user","p4ssword!","plantbas_ace_multisport_db");
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($conn, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($conn, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
 
// Attempt insert query execution
$sql = "INSERT INTO Contact (firstName, lastName, eMail, questComm, guestOpt)
                    VALUES ('".$_POST["firstName"]."','".$_POST["lastName"]."','".$_POST["eMail"]."','".$_POST["questComm"]."','".$_POST["guestOpt"]."')";

if(mysqli_query($conn, $sql)){
    echo "Question or Comment Sent Successfully!";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
           