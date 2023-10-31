<?php
$servername='localhost';
$username='root';
$passward='';
$database='myshop';

$connection=new mysqli($servername,$username,$passward,$database);

$response=array();

if($connection){
    $sql='SELECT * FROM clients';
    $result=mysqli_query($connection,$sql);

    if($result){
        // header("Content-Type : JSON");
        $x=0;

        while($row=mysqli_fetch_assoc($result)){
            $response[$x]['id']=$row['id'];
            $response[$x]['name']=$row['name'];
            $response[$x]['email']=$row['email'];
            $response[$x]['phone']=$row['phone'];
            $x++;
        }

        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}else{
    echo "database connection faild: ".$connection->error;
}

?>