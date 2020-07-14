<?php
$username = $_POST['username'];
$phone = $_POST['phone'];
$email = $_POST['email'];


// $conn = new mysqli_connect('localhost', 'root', '', 'form');




// if (isset($_POST['submit'])){
//   $username = $_POST['username'];
//   $username = mysqli_real_escape_string($conn, $username);
//   $phone = $_POST['phone'];
//   $phone = mysqli_real_escape_string($conn, $phone);
//   $email = $_POST['email'];
//   $email = mysqli_real_escape_string($conn, $email);

//   $query = "INSERT Into sublist (username, phone, email) VALUES ('$username', '$phone', '$email')" ;
//   $result = mysqli_query($conn, $query);

// }

if(!empty($name) || !empty($phone) || !empty($email)){

  $host = 'localhost';
  $dbUsername = 'root';
  $dbPassword = '';
  $dbname = 'form';
  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

  if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_error().')'. mysqli_connect_error());
  } else{
    $SELECT = "SELECT email From sublist Where email = ? Limit 1";
    $INSERT = "INSERT Into sublist (username, phone, email) values('$username', '$phone', '$email')";
    //prepare statement
    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum = $stmt->num_rows;
    if ($rnum==0){
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssss", $phone, $email);
      $stmt->execute();
      echo include("includes/script.php");
    } else{
      echo 'This email is already in use';
    };
    $stmt->close();
    $conn->close();


  }
} else{
  echo "All field are required";
  die();
}





?>