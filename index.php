<?php
$cupcake_type= $_REQUEST['Cake_Type']
$firstname= $_REQUEST['firstname'];
$lastname= $_REQUEST['lastname'];
$address= $_REQUEST['adress'];
$email= $_REQUEST['mail'];
$phone= $_REQUEST['phone_num'];
$check= $_REQUEST['checkbox']


if(isset($_POST['done'])){

$host= "localhost";
$user= "root";
$password= "";
$db= "mysql";


$conn= mysqli_connect($host,$user,$pass,$db);

$insert= "insert into danys_cupcake values('$firstname', '$lastname', '$cupcake_type', '$address', '$email', '$phone', '$cupcake_type', '$check')";

mysqli_query($conn, $insert);


if($conn){
    
    echo("<h2> Your Order Was Placed Successfully </h2>");
}
else{
    echo("<h2> Something Went Wrong </h2>");
}


}





?>