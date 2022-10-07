<?php
include 'connectdb.php';
$success=false;

$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($connectdb, "SELECT * FROM tbusers WHERE clUrUsername='$username' AND clUrPassword='$password' AND clUrLevel='0';");
while($row = mysqli_fetch_array($result)){
	$success = true;
	$clUrID = $row['clUrID'];
    $clUrUsername = $row['clUrUsername'];
	$clUrFirstname = $row['clUrFirstname'];
}

if($success == true){
	session_start();
	$_SESSION['admin_sid']=session_id();
	$_SESSION['clUrID'] = $clUrID;
    $_SESSION['clUrUsername'] = $clUrUsername;


	header("location: ../webadmin/admin_template.php");
}else{
        $result = mysqli_query($connectdb, "SELECT * FROM tbusers WHERE clUrUsername='$username' AND clUrPassword='$password' AND clUrLevel='1';");
        while($row = mysqli_fetch_array($result))
        {
        $success = true;
        $clUrID = $row['clUrID'];
        $clUrFirstname = $row['clUrFirstname'];
        $clUrLevel= $row['clUrLevel'];
        }
        if($success == true)
        {
            session_start();
            $_SESSION['client_sid']=session_id();
            $_SESSION['clUrID'] = $clUrID;
            $_SESSION['clUrLevel'] = $clUrLevel;		
            header("location: ../webclient/UserProfile.php");
        }
        else
        {  echo "<script>
			alert('Invalid username or password.');  
			window.location = '../login.php';
			</script>"; 
        }
}
?>
