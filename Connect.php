<?
$name = $_POST['Name'];
$age = $_POST['Age'];
$phone = $_POST['Phone'];
$gender = $_POST['Gender'];
$email = $_POST['Email'];
$password = $_POST['Password'];

$conn = new mysqli('localhost','root','','Information');
if($conn->connect_error)
{
    die('Connection Failed :'.$conn->connect_error);
}
else
{
    $stmt =  $conn->prepare("insert into registration(name, age, phone, gender, email, password
    values(?,?,?,?,?,?)");
    $stmt->bind_param("siisss",$name, $age, $phone, $gender, $email, $password);
    $stmt->execute();
    echo"You registration is Successful!...";
    $stmt->close();
    $conn->close();
}
?>