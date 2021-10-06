<?php
$a = $_POST['a'] ?? "";
$b = $_POST['b'] ?? "";
$c = $_POST['c'] ?? "";
$d = $_POST['d'] ?? "";
$conn = new mysqli('localhost','root','','adithya');
if($conn->connect_error){
echo "$conn->connect_error";
die("Connection Failed : ". $conn->connect_error);
} else {
$stmt = $conn->prepare("insert into contact(a,b,c,d) values(?,?,?,?)");
$stmt->bind_param("ssss", $a, $b, $c, $d);
$execval = $stmt->execute();
echo '<script type ="text/JavaScript">';  
echo 'alert("Successfully submitted ")';  
echo '</script>';
$stmt->close();
$conn->close();
}
?>