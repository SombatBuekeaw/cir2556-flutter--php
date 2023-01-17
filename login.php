<?php include_once('dbcon.php') ;?>

<?php
$email = 'Mark@gmail.com';
$password = '12345678';

$queryResult = "SELECT * FROM users WHERE email='$email' AND password = '$password' ";
$result = mysqli_query($connect,$queryResult);
$result2 = array();


while($fetchData = mysqli_fetch_assoc($result) ){
    ($result2[] = $fetchData);
    
}
if($result2){
    print(json_encode($result2));
}else{
    print(json_encode(''));
}

?>