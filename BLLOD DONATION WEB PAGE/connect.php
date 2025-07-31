<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $Age=$_POST['Age'];
    $Gender=$_POST['Gender'];
    $email=$_POST['email'];
    $bloodgroup=$_POST['bloodgroup'];
    $phone=$_POST['phone'];
    $Region=$_POST['Region'];
    $State=$_POST['State'];
    $City=$_POST['City'];

$con=new mysqli('localhost','root','','form');
if($con){
    $sql="INSERT INTO `data`(name,Age,Gender,email,bloodgroup,phone,
    region,State,City)values('$name','$Age','$Gender','$email','$bloodgroup','$phone','$Region','$State','$City')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Data inserted successfully";
    }

}else{
    die(mysqli_error($con));
}
}
?>