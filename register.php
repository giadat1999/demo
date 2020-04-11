<?php
$error=array(
    'error'=>0
);

$username=isset($_POST['username']) ? trim($_POST['username']): '';
$password=isset($_POST['password']) ? trim($_POST['password']): '';
$email=isset($_POST['email']) ? trim($_POST['email']): '';
$fullname=isset($_POST['fullname']) ? trim($_POST['fullname']): '';

if(empty($username))
{
    $error['username']='Please enter username';
}
if(empty($password))
{
    $error['password']='Please enter password';
}
if(empty($email))
{
    $error['email']='Please enter email address';
}
if(empty($fullname))
{
    $error['fullname']='Please enter fullname';
}

if(count($error)>1)
{
    $error['error']=1;
    die(json_encode($error));
}

$conn=mysqli_connect('localhost','root','','demo');
if(!$conn)
{
    $error['connect_db']='Cannot connect to database';
}
$username=addslashes($username);
$email=addslashes($email);
$sql="SELECT * FROM users WHERE username='$username' OR email='$email'";
$result=mysqli_query($conn,$sql);
if(!$result)
{
    $error['sql_db']="Query error";
}
if(mysqli_num_rows($result)>0)
{
    $row=mysqli_fetch_assoc($result);
    if($row['username']==$username)
    {
        $error['username']="The account is already existed";
    }
    if($row['email']==$email)
    {
        $error['email']='The email address is already existed';
    }
}
if(count($error)>1)
{
    $error['error']=1;
    die(json_encode($error));
}
$sql="INSERT INTO users(username, password, email, fullname) VALUES ('$username','$password','$email','$fullname')";
if(!mysqli_query($conn,$sql))
{
    $error['error']=1;
    $error['sql_db']='Query error';
}
die(json_encode($error));
?>