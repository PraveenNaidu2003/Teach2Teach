<?php
include ("connect.php");

$u_name=$_POST['u_name'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql =  "SELECT * FROM `login` where u_name='$u_name' and email='$email' and  password='$password' ";

$result =  mysqli_query($con, $sql);
if(mysqli_num_rows($result)>0)
{
    $sql="SELECT u_name,email,,id FROM  userdata where password = 'group'";
    $reselutgroup =  mysqli_query($con,$sql);
    if(mysqli_num_rows($resultgroup)>0){
        $groups = mysqli_fetch_all($resultgroup,MYSQLI_ASSOC);
        // $_SESSION['groups'] = $groups;
    }
    $data = mysqli_fetch_array($result);
    $_SESSION['id'] = $data['id'];
    $_SESSION['u_name'] = $data['u_name'];
    $_SESSION['password'] = $password;
    
    echo'<script>
    window.location="dashboard.php";
    </script>';
    }
    else{
        echo'<script>alert("Invalid Credentials");
        window.location = "index.php";
        </script>';

}
?>