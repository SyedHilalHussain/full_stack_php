<?php
include './adminpanel/superadmin/config.php';
extract($_POST);


	$userEmail = $_POST['email'];
	$userPassword = $_POST['password'];
	$login_q = mysqli_query($conn,"select * from tbl_user where email = '$userEmail' and password = '$userPassword'");

	$login_d = mysqli_fetch_assoc($login_q);
	session_start();
	$_SESSION['id'] = $login_d['id'];
	$_SESSION['name'] = $login_d['first_name'];
	$_SESSION['user_type'] = $login_d['user_type'];
	
	if(mysqli_num_rows($login_q)>0){
	if($_SESSION['user_type'] == 'SuperUser')
	{
		$userid = $_SESSION['id'];
        $username=$_SESSION['name'];
        $usertype=$_SESSION['user_type'];
        $resp['status'] = 'Success';
        $resp['user_type'] = $_SESSION['user_type'];
        echo json_encode($resp);
		
	}
	elseif ($_SESSION['user_type'] == 'Organizer')
	{
		$userid = $_SESSION['id'];
        
        $username=$_SESSION['name'];
        $usertype=$_SESSION['user_type'];
        $resp['status'] = 'Success';
        $resp['user_type'] = $_SESSION['user_type'];
        echo json_encode($resp);
		//echo ($_SESSION['user_type']);
	
		
	}
	elseif ($_SESSION['user_type'] == 'Judge')
	{

		$userid = $_SESSION['id'];
        
        $username=$_SESSION['name'];
        $usertype=$_SESSION['user_type'];
        $resp['status'] = 'Success';
        $resp['user_type'] = $_SESSION['user_type'];
        echo json_encode($resp);
		
		
	
		
	}
	elseif ($_SESSION['user_type'] == 'Mentor')
	{
        $resp['status'] = 'Success';
        $username=$_SESSION['name'];
        $usertype=$_SESSION['user_type'];
		$userid = $_SESSION['id'];
        $resp['user_type'] = $_SESSION['user_type'];
        echo json_encode($resp);
		
		#echo "<script>alert('Submissions were closed on Feb 22nd. 2020. Independent Inventors can email their submission to svivek@emich.edu by the 5:00PM Feb 24, 2020')</script>";
		
	}
	elseif ($_SESSION['user_type'] == 'General User')
	{
        $resp['status'] = 'Success';
        $username=$_SESSION['name'];
        $usertype=$_SESSION['user_type'];
		$userid = $_SESSION['id'];
        $resp['user_type'] = $_SESSION['user_type'];
        echo json_encode($resp);
		
		#echo "<script>alert('Submissions were closed on Feb 22nd. 2020. Independent Inventors can email their submission to svivek@emich.edu by the 5:00PM Feb 24, 2020')</script>";
		
	}
	else
	{
        $resp['status'] = 'Failed';
        $resp['msg'] = 'Invalid Login';
        echo json_encode($resp);
	}
}else{
    $resp['status'] = 'Failed';
    $resp['msg'] = 'Invalid Login';
    echo json_encode($resp);
}





?>