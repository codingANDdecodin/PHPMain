<?php
$servername='localhost';
$username='root';
$password='';
$database='myshop';

$connection=new mysqli($servername,$username,$password,$database) or die('connection faild');

$sql= 'SELECT * FROM clients';
$result= mysqli_query($connection,$sql) or die("sql query faild");
$output='';
//here we are using fun to cheak no of reacord found in result
if(mysqli_num_rows($result)>0){
    $output.="
    <tr>
    <td>id</td>
    <td>name</td>
    </tr>
    ";

      while($row=mysqli_fetch_assoc($result)){
        $output .="<tr>
           <td>{$row['id']}</td>
           <td>{$row['name']}</td>
        </tr>";
      }
      mysqli_close($connection);

      echo $output;
}else{
    echo "<h2>no data found</h2>";
}
?>