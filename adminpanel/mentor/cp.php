<!-- home mentor  -->

<?php
include('../database/config.php');
include('control.php');

$id = $_SESSION['id'];
$name = $_SESSION['name'];
if (isset($_GET['year'])) {
	$year = $_GET['year'];
} else {
	$year = date("Y");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Team Lists</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<style>
	html,
	body {
		height: 100%;
		width: 100%;
		padding: 0;
		margin: 0;
	}

	table {
		table-layout: fixed;
	}

	th {
		overflow: auto;
		max-width: 100%;
		white-space: nowrap;
	}

	td {
		overflow: auto;
		max-width: 100%;
		white-space: nowrap;
	}

	@media only screen and (max-width: 480px) {

		/* horizontal scrollbar for tables if mobile screen */
		.tablemobile {
			overflow-x: auto;
			display: block;
		}
	}
</style>
<?php include('../header.php'); ?>
<div id="wrapper" style="margin-top:20px;width:100%;">

	<body>



		<nav class="navbar navbar-expand bg-dark navbar-dark" style="margin-top:20px;width:100%;">
			<!-- Links -->
			<ul class="navbar-nav">

				<li class="nav-item" style="font-weight: bold;">
					<a class="nav-link" href="home.php">Home</a>
				</li>

				<li class="nav-item dropdown" style="font-weight: bold;">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						Add
					</a>
					<div class="dropdown-menu" id="mainNavbar">
						<a class="dropdown-item" href="teams.php">Teams</a>

					</div>
				</li>

				<li class="nav-item dropdown" style="font-weight: bold;">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						Previous year
					</a>
					<div class="dropdown-menu" id="mainNavbar">
						<?php
						$current = date("Y");
						$q_y = mysqli_query($con, "select distinct year
				from tbl_team tt, tbl_team_mentor ttm
				where ttm.team_id = tt.id
				and tt.deleted = 0
				and year <> $current");

						while ($q_y_d = mysqli_fetch_assoc($q_y)) {
							$y = $q_y_d['year'];
						?>

							<a class="dropdown-item" href="home.php?year=<?php echo $y; ?>"><?php echo $y; ?></a>
						<?php } ?>
					</div>

				</li>

				<li class="nav-item dropdown" style="font-weight: bold;">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						Last Year Events
					</a>
					<div class="dropdown-menu" id="mainNavbar">
						<?php

						$current = date("Y");
						$q_y = mysqli_query($con, "select distinct year
				from tbl_team tt, tbl_team_mentor ttm
				where ttm.team_id = tt.id
				and tt.deleted = 0
				and year <> $current");

						while ($q_y_d = mysqli_fetch_assoc($q_y)) {
							$y = $q_y_d['year'];
						?>

							<a class="dropdown-item" href="home_previous.php?year=<?php echo $y; ?>"><?php echo $y; ?></a>
						<?php } ?>
					</div>

				</li>


				<li class="nav-item dropdown" style="font-weight: bold;">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						<?php echo $name ?>
					</a>
					<div class="dropdown-menu" id="mainNavbar">
						<a class="dropdown-item" href="mentor.php">Profile</a>
						<a class="dropdown-item" href="logout.php">Logout</a>

					</div>
				</li>

				<!--<li class="nav-item">
					<a class="nav-link" href="addStudent.html">Add Student</a>
				</li>

				<li class="nav-item" id="addAccount">
					<a class="nav-link" href="addUser.html">Add Account</a>
				</li>-->
			</ul>
		</nav>
		<br>
		<div style="width:100%">
			<div class="col-12">
				<table class="table" style="margin-block-start: -20px">
					<thead class="thead-dark" id="table">
						<tr>
							<th>Team Name</th>
							<th>Team Description</th>
							<th>Category</th>
							<th>Team Members</th>
							<th>Video Pitch</th>
							<th>LogBook</th>
							<th>Status</th>
							<?php if (($year) == date("Y")) { ?>
								<th>Actions</th>
							<?php } ?>
						</tr>
					</thead>
					<tbody>

						<?php
						$q_team = mysqli_query($con, "select distinct tt.id as team_id,tt.project_team_name as project_name,tt.project_description,tt.category,tt.video_pitch, tt.log_book
				from tbl_team tt, tbl_team_mentor ttm
				where ttm.user_id = $id 
				and ttm.team_id = tt.id
				and year = '$year'
				and tt.deleted = 0");

						while ($r_team = mysqli_fetch_assoc($q_team)) {
							$team_id = $r_team['team_id'];
							$team_m_q = mysqli_query($con, "select GROUP_CONCAT(student_first_name) as members from tbl_team_member where team_id = $team_id");
							$team_m_r = mysqli_fetch_assoc($team_m_q);




						?>

							<tr>
								<td><a href="viewteams.php?team_id=<?php echo $r_team['team_id'] ?>"><?php echo $r_team['project_name'] ?></a></td>
								<td><a href="viewteams.php?team_id=<?php echo $r_team['team_id'] ?>"><?php echo $r_team['project_description'] ?></a></td>
								<td><a href="viewteams.php?team_id=<?php echo $r_team['team_id'] ?>"><?php echo $r_team['category'] ?></a></td>
								<td><?php echo $team_m_r['members'] ?></td>
								<?php if ($r_team['video_pitch']) { ?>
									<td><a href="<?php echo $r_team['video_pitch'] ?>" target="_blank">Video Pitch</a></td>
								<?php } else { ?>
									<td></td>
								<?php }
								if ($r_team['log_book']) {  ?>
									<td><a href="http://grading.emuem.org/Team/<?php echo $r_team['log_book'] ?>">LogBook</a></td>
								<?php } else { ?>
									<td></td>
								<?php }
								if (isset($r_team['log_book']) && isset($r_team['video_pitch'])) { ?>
									<td><?php echo 'Complete'; ?></td>
								<?php } else {
									if (empty($r_team['log_book'])) {
										$text = 'No LogBook';
									}
									if (empty($r_team['video_pitch'])) {
										$text = $text . ' No Video Pitch';
									}
								?>
									<td title="<?php echo $text; ?>"><?php echo 'Incomplete'; ?></td>
								<?php } ?>
								<?php if (($year) == date("Y")) { ?>
									<td>
										<a href="edit_team.php?team_id=<?php echo $team_id ?>"><button type="button" style="margin:0px;" class="btn-success btn-sm" onclick="edit(this)">Update Details</button></a>
										<a onClick="return confirm('Are you sure you want to delete?')" href="set_delete.php?id=<?php echo $team_id ?>&table=tbl_team&return=home" class="btn mini purple"> Delete</a>
									</td>
								<?php } ?>
								</td>
							</tr>
						<?php } ?>

					</tbody>
				</table>
			</div>

		</div>

		<!-- <div class="container d-flex justify-content-center col-md-8">
        <p class="dbtn">
            <button type="button" id="signout-btn" onclick="signOutUser()" class="btn btn-danger"> SignOut </button>
        </p>
    </div> -->

	</body>
	<div>

</html>


<!-- registeration  -->
<?php
session_start();
include('database/config.php');
#include('control.php'); 
$general = 0;
extract($_POST);
if (isset($_POST['submit'])) {
	$l_q = mysqli_query($con, "select * from tbl_user where email = '$email'");
	$num_rows_1 = mysqli_num_rows($l_q);
	if ($num_rows_1 < 1) {
		$query = "insert into tbl_user (first_name,last_name,phone,email,password,user_type,address) values ('$first_name','$last_name','$phone','$email','$password','$user_type','$address')";
		$result = mysqli_query($con, $query);

		if ($result) {
			$id = mysqli_insert_id($con);
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['id'] = $id;
			//$_SESSION['name'] = $login_d['first_name'];
			//$_SESSION['user_type'] = $login_d['user_type'];
			//echo '<script type="text/javascript">'; 
			//echo 'var email = "'.$_SESSION['email'].'";';
			//echo 'alert("An email will be sent to your email address " +email +" , once the account is been verified!");'; 
			//echo 'window.location.href = "index.php";';
			//echo '</script>';

			$to = $_SESSION['email'];
			$username = $row['email'];
			//$password = $row['password'];
			$name = $_POST['first_name'];

			$subject = "EMUiNVENT Sign Up Confirmation";
			// $body = "Dear $name,
			//We are excited to welcome your team(s) for participation in the EMUiNVENT competition. Please login using  :Username: $username, Password: $password @ http://grading.emuem.org/login.php to provide all details of the participating teams. Closer to the video submission deadline, you will receive another email with details of submission.EMUiNVENT 2021 will be entirely online. So please make sure you visit the submission system and provide all the information and materials in a timely manner.After the submission of videos is completed, a panel of professionals will judge all student projects. We will announce awards and winners in a broadcasted awards ceremony on March 12. You will receive more details about the ceremony and how to access it in the coming weeks.For more information and all deadlines, visit the https://emich.edu/emuinvent website. If you have questions, please email emu_invent@emich.edu.
			//EMUiNVENT Team";
			// To send HTML mail, the Content-type header must be set
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


			// Compose a simple HTML email message
			$message = '<html><body>';
			$message .= '<p style="color:#080;font-size:18px;">Dear ' . $name . ',</p>';
			$message .= '<p style="color:#080;font-size:18px;">Thank you for signing up for EMUiNVENT! The EMUiNVENT team will now review your registration. You will receive an email as soon as the review is complete.  </p>';
			$message .= '<p style="color:#080;font-size:18px;">For more information and all deadlines, visit the <a href="https://emich.edu/emuinvent">EMUiNVENT website</a>. If you have questions, please email emu_invent@emich.edu.</p>';
			$message .= '<br><p style="color:#080;font-size:18px;">EMUiNVENT</p>';
			$message .= '</body></html>';
			if (mail($to, $subject, $message, $headers)) {

				#echo 'Your mail has been sent successfully.';

				//echo '<script>alert("Registration Successfull, we will review your registration and let you know shortly");</script>';
				echo '<script type="text/javascript">';
				echo 'alert("Sign up confirmation has been sent to your email address!");';
				echo 'window.location.href = "index.php";';
				echo '</script>';

				//$message ="Dear $name,
				//We are excited to welcome your team(s) for participation in the EMUiNVENT competition. Please login using  :Username: $username, Password: $password @ http://grading.emuem.org/login.php to provide all details of the participating teams. Closer to the video submission deadline, you will receive another email with details of submission.EMUiNVENT 2021 will be entirely online. So please make sure you visit the submission system and provide all the information and materials in a timely manner.After the submission of videos is completed, a panel of professionals will judge all student projects. We will announce awards and winners in a broadcasted awards ceremony on March 12. You will receive more details about the ceremony and how to access it in the coming weeks.For more information and all deadlines, visit the https://emich.edu/emuinvent website. If you have questions, please email emu_invent@emich.edu.
				//EMUiNVENT Team";
			} else {
				echo 'Unable to send email. Please try again.';
			}
		} else {
			#echo "user already exists";
			echo '<script>alert("User account with this email ID already exists, please click on Login or forgot password")</script>';
		}
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>EMUiNVENT</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<script>
	function func_reg(Selectedvalue) {
		//alert(Selectedvalue);
		var a = Selectedvalue;
		var b = 'General User';
		var ans = a.localeCompare(b);
		if (ans == 0) {
			document.getElementById('phone').style.display = 'none';
			document.getElementById('address').style.display = 'none';
			document.getElementById("phone").required = false;
			document.getElementById("address").required = false;


		} else {
			document.getElementById('phone').style.display = 'block';
			document.getElementById('address').style.display = 'block';
			document.getElementById("phone").required = true;
			document.getElementById("address").required = true;
		}




		//location.reload();
	}
</script>
<style>
	.btn-success {
		color: #fff;
		background-color: #78CC6F;
		border-color: #78CC6F;
	}
</style>

<?php include('header.php'); ?>
<div id="wrapper">

	<body>


		<br>

		<div class="container d-flex justify-content-center col-md-10">
			<div class="col-7">

				<table class="table table-borderless">
					<h3>User SignUp:</h3>


					<form method="post" enctype="multipart/form-data">

						<tr>
							<td colspan="6">
								<div>
									<label for="pwd"><b>User Type *</b></label>
									<div>
										<select class="form-control" name="user_type" onchange="func_reg(this.value)" required>
											<option value="">Select</option>
											<option value="Mentor">Teacher or Mentor (parents/teachers participating in Dare2Design)</option>
											<!--<option value="Judge">Judge</option>-->
											<option value="General User">General User</option>

										</select>
									</div>
								</div>
							</td>
						</tr>

						<tr>
							<td colspan="6">

								<div>
									<label for="pwd"><b>First Name: *</b></label>
									<input type="text" class="form-control" id="studentEmail" name="first_name" placeholder="First Name" required>
								</div>

							</td>
						</tr>


						<tr>
							<td colspan="6">

								<div>
									<label for="pwd"><b>Last Name: *</b></label>
									<input type="text" class="form-control" id="studentEmail" name="last_name" placeholder="Last Name" required>
								</div>

							</td>
						</tr>

						<tr>
							<td colspan="6">

								<div>
									<label for="pwd"><b>Email: *</b></label>
									<input type="email" class="form-control" id="studentEmail" name="email" placeholder="Email" required>
								</div>

							</td>
						</tr>

						<tr id="phone">
							<td colspan="6">

								<div>
									<label for="pwd"><b>Phone: *</b></label>
									<input type="telephone" class="form-control" id="phone1" name="phone" placeholder="Phone Number">
								</div>

							</td>
						</tr>

						<tr id="address">
							<td colspan="6">

								<div>
									<label for="pwd"><b>Address: *</b></label>
									<input type="text" class="form-control" id="studentEmail" name="address" placeholder="Address">
								</div>

							</td>
						</tr>

						<tr>
							<td colspan="6">
								<div>
									<label for="pwd"><b>Password *</b></label>

									<input type="password" class="form-control" name="password" value="" placeholder="Password" id="password" required>

								</div>
							</td>
						</tr>

						<tr>
							<td colspan="6">
								<div>
									<label for="pwd"><b>Password Confirm *</b></label>

									<input type="password" class="form-control" name="confirm" value="" placeholder="Password Confirm" id="confirm_password" required>
									<span id='message'></span>

								</div>
			</div>
			</td>
			</tr>

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
			<script>
				$('#password, #confirm_password').on('change', function() {
					if ($('#password').val() == $('#confirm_password').val()) {
						$('#message').html('Matching').css('color', 'green');
					} else {

						$('#message').html('Not Matching').css('color', 'red');
						document.getElementById("confirm_password").value = "";
					}
				});
			</script>






			<tr align="center">
				<td>
					<div class="form-group">
						<button type="submit" class="btn btn-success" name="submit">Register</button>
					</div>
				</td>
			</tr>




			<!--</td>
				</tr>-->
			</form>
			</table>







		</div>

</div>

<!-- <div class="container d-flex justify-content-center col-md-8">
        <p class="dbtn">
            <button type="button" id="signout-btn" onclick="signOutUser()" class="btn btn-danger"> SignOut </button>
        </p>
    </div> -->
</body>
</div>
<?php include('footer.php'); ?>

</html>


<!-- login  -->
<?php
include("database/config.php");

#$timezone = date_default_timezone_get();
$timezone = date_default_timezone_set('America/New_York');
#echo "The current server timezone is: " . $timezone;

$date = date('Y-m-d H:i:s');
#echo $date;
$today_at_midnight = strtotime('midnight');
#echo $today_at_midnight;

extract($_POST);
if (isset($_POST['submit'])) {
	$userEmail = $_POST['userEmail'];
	$userPassword = $_POST['userPassword'];
	$login_q = mysqli_query($con, "select * from tbl_user where email = '$userEmail' and password = '$userPassword'");
	//print_r($con);die;
	//print_r($login_d);die;
	$login_d = mysqli_fetch_assoc($login_q);
	session_start();
	$_SESSION['id'] = $login_d['id'];
	$_SESSION['name'] = $login_d['first_name'];
	$_SESSION['user_type'] = $login_d['user_type'];

	$num_rows = mysqli_num_rows($login_q);
	if ($_SESSION['user_type'] == 'SuperUser') {
		$userid = $_SESSION['id'];
		header("location:SuperAdmin/home.php");
	} elseif ($_SESSION['user_type'] == 'Organizer') {
		$userid = $_SESSION['id'];
		//echo ($_SESSION['user_type']);
		header("location:admin/admin_home.php");
	} elseif ($_SESSION['user_type'] == 'Judge') {
		$userid = $_SESSION['id'];
		$date_check = '2020-03-03 00:00:00';
		/*if($date >= $date_check)
		{
			#echo $userEmail;
			if($userEmail=='jayasharmajdh@gmail.com')
			{
			#echo 'inside if'.$date; 
				header("location:Judge/home.php");
			#echo "<script>alert('Judging Portal is closed on March 2nd. 2020. at 12:00:00 Mid-night. Judges can email any concerns to svivek@emich.edu by the 5:00PM Feb 24, 2020')</script>";
			}
		else{
		//echo ($_SESSION['user_type']);
		#echo 'outside if';
		#echo "<script>alert('Judging Portal is closed as on March 2nd. 2020. at 12:00:00 Mid-night. Please contact Dr.Ahmed (mahmed6@emich.edu) for any questions. ')</script>";
		}

		}
		else{ */
		//echo ($_SESSION['user_type']);
		#echo 'outside if';
		header("location:Judge/home.php");
		//}

	} elseif ($_SESSION['user_type'] == 'Mentor') {
		$userid = $_SESSION['id'];
		header("location:Team/home.php");
		#echo "<script>alert('Submissions were closed on Feb 22nd. 2020. Independent Inventors can email their submission to svivek@emich.edu by the 5:00PM Feb 24, 2020')</script>";

	} elseif ($_SESSION['user_type'] == 'General User') {
		$userid = $_SESSION['id'];
		header("location:General_User/index.php");
		#echo "<script>alert('Submissions were closed on Feb 22nd. 2020. Independent Inventors can email their submission to svivek@emich.edu by the 5:00PM Feb 24, 2020')</script>";

	} else {
		$q = "select * from tbl_user where email = '$userEmail' and password = '$userPassword'";
		echo "<script>alert('Invalid Login');</script>";
	}
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>EMUiNVENT</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<style>
	.btn-success {
		color: #fff;
		background-color: #78CC6F;
		border-color: #78CC6F;
	}
</style>
<?php include('header.php'); ?>
<div id="wrapper">

	<body>

		<nav class="navbar navbar-expand bg-dark navbar-dark" style="margin-top:-16px;width:100%;">
			<!-- Links -->
			<ul class="navbar-nav">

				<li class="nav-item" style="font-weight: bold;">
					<a class="nav-link" href="index.php">Home</a>
				</li>

				<li class="nav-item" style="font-weight: bold;">
					<a class="nav-link" href="students.php">Students</a>
				</li>

				<li class="nav-item" style="font-weight: bold;">
					<a class="nav-link" href="teachers.php">Teachers/Mentors</a>
				</li>

				<li class="nav-item" style="font-weight: bold;">
					<a class="nav-link" href="sponsor.php">Sponsor</a>
				</li>

				<li class="nav-item" style="font-weight: bold;">
					<a class="nav-link" href="judges.php">Judges</a>
				</li>


				<li class="nav-item" style="font-weight: bold;margin-left:700px">
					<a class="nav-link" href="login.php">Login</a>
				</li>

				<li class="nav-item" style="font-weight: bold;">
					<a class="nav-link" href="register.php">SignUp</a>
				</li>

				<!--<li class="nav-item">
                <a class="nav-link" href="addStudent.html">Add Student</a>
            </li>

            <li class="nav-item" id="addAccount">
				<a class="nav-link" href="addUser.html">Add Account</a>
            </li>-->
			</ul>
		</nav>
		<br>

		<div class="container d-flex justify-content-center col-md-10">
			<div class="col-7">

				<table class="table table-borderless">
					<h3>Login:</h3>


					<form method="post" enctype="multipart/form-data">


						<tr>
							<td colspan="6">

								<div>
									<label for="usr">Email:</label>
									<input type="text" class="form-control" id="userEmail" name="userEmail" required>
								</div>

							</td>
						</tr>


						<tr>
							<td colspan="6">

								<div>
									<label for="pwd">Password:</label>
									<input type="password" class="form-control" id="userPassword" name="userPassword" required>
								</div>

							</td>
						</tr>






						<tr>
							<td>
								<div class="form-group">
									<button type="submit" class="btn btn-success" name="submit">Login</button>
									<a href="forgot_password.php" style="float:right">Forgot Password</a>

								</div>
							</td>
						</tr>




						<!--</td>
				</tr>-->
					</form>
				</table>







			</div>

		</div>

		<!-- <div class="container d-flex justify-content-center col-md-8">
        <p class="dbtn">
            <button type="button" id="signout-btn" onclick="signOutUser()" class="btn btn-danger"> SignOut </button>
        </p>
    </div> -->
	</body>
</div>
<?php include('footer.php'); ?>

</html>

<!-- edit team -->
<?php
include('config.php');
session_start();
// include('control.php'); 

$id = $_SESSION['id'];
$name = $_SESSION['name'];

$team_id = $_GET['team_id'];
$name = $_SESSION['name'];
$q_vt = mysqli_query($conn, "select distinct tt.id as team_id,tt.project_team_name as project_name,tt.project_description,tu.first_name, tu.last_name,tt.video_pitch, tt.log_book,tu.email 
from tbl_team tt, tbl_team_mentor ttm, tbl_user tu
											where tt.id = $team_id
											and tt.id = ttm.team_id
											and ttm.user_id = tu.id");

$d_vt = mysqli_fetch_assoc($q_vt);

$url = $d_vt['video_pitch'];
preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
$youtube_id = $match[1];


extract($_POST);
if (isset($_POST['submit'])) {

	if ($video_pitch_link != '') {
		mysqli_query($conn, "update tbl_team set video_pitch  = '$video_pitch_link' where id = $team_id");
	}
	#echo "<script>alert('out if')</script>";
	if ($_FILES['fileToUpload']['size'] > 0) {
		#echo "<script>alert('inside if')</script>";
		$target_dir = "test_upload/";
		$target_file_video = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$video_path = $_FILES['fileToUpload']['name'];
		mysqli_query($conn, "update tbl_team set video_pitch  = 'test_upload/$video_path' where id = $team_id");
	}
	if ($_FILES['log_book']['size'] > 0) {
		#echo "<script>alert('inside if')</script>";
		$target_dir = "test_upload/";
		$target_file = $target_dir . basename($_FILES["log_book"]["name"]);
		$doc_path = $_FILES['log_book']['name'];
		mysqli_query($conn, "update tbl_team set log_book='test_upload/$doc_path' where id = $team_id");
	}


	if ($_FILES['photo_form']['size'] > 0) {
		#echo "<script>alert('inside if')</script>";
		$target_dir_1 = "test_upload/";
		$target_file_1 = $target_dir_1 . basename($_FILES["photo_form"]["name"]);
		$doc_path_1 = $_FILES['photo_form']['name'];
		mysqli_query($conn, "update tbl_team set photo_consent_form='test_upload/$doc_path_1' where id = $team_id");
	}
	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file_video);
	move_uploaded_file($_FILES["log_book"]["tmp_name"], $target_file);
	move_uploaded_file($_FILES["photo_form"]["tmp_name"], $target_file_1);

	echo "<script type='text/javascript'> document.location = 'home.php'; </script>";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Team Lists</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<script>
	function func(SelectedValue, Id, value) {
		//alert('hi');
		//alert(SelectedValue);
		//alert(Id);
		if (value == 'photo_consent') {
			//alert(value);
			$.ajax({
				type: 'POST',
				url: 'update_consent.php',
				data: 'student_id=' + Id + '&photo_consent=' + SelectedValue,
				success: function(html) {
					console.log(data);
				}
			});
			location.reload();
		}

		if (value == 'photo_consent_form') {
			//alert(value);

			var input = document.getElementById("photo_form");

			//alert('hi');
			file = input.files[0];
			//alert(file)
			//alert('hi');
			formData = new FormData();
			if (!!file.type.match(/pdf.*/)) {
				//alert('inside if');
				formData.append("photo_form", file);
				formData.append("id", Id);
				$.ajax({
					url: "upload.php",
					type: "POST",
					data: formData,
					processData: false,
					contentType: false,
					success: function(data) {
						//alert('success');
					}
				});
			} else {
				//alert('Not a valid image!');
			}
			location.reload();
			//}



		}
	}
</script>
<?php include('../header.php'); ?>
<div id="wrapper">

	<body>

		<div class="container d-flex justify-content-left col-md-10">
			<div class="col-7">
				<table class="table table-borderless" style="margin-left: -110px;">
					<thead class="thead-dark" id="table">
						<tr>
							<!--<th scope="col">Team ID</th>-->
							<th scope="col">Team Name</th>
							<th scope="col">Project Description</th>
							<th scope="col">Team Cateogory</th>
							<th scope="col">Video Pitch</th>
							<th scope="col">LogBook</th>
							<th scope="col">Team Members</th>

						</tr>
					</thead>
					<tbody>

						<?php
						$q_team = mysqli_query($conn, "select distinct tt.id as team_id,tt.project_team_name as project_name,tt.category,tt.project_description,tt.video_pitch, tt.log_book
											from tbl_team tt, tbl_team_mentor ttm, tbl_team_member tm 
											where ttm.user_id = $id 
											and tt.id = $team_id
											and tt.id = ttm.team_id
											

									");

						while ($r_team = mysqli_fetch_assoc($q_team)) {
							$team_id = $r_team['team_id'];


						?>

							<tr>
								<!--<td><?php echo $r_team['team_id'] ?></a></td> -->
								<td><?php echo $r_team['project_name'] ?></a></td>
								<td><?php echo $r_team['project_description'] ?></td>
								<td><?php echo $r_team['category'] ?></td>
								<!--<td><iframe frameborder="0" height="100" width="100" 
														src="https://www.youtube.com/embed/sA9DwvbQ-hI">
													  </iframe></a></td> -->
								<?php if ($r_team['video_pitch']) { ?>
									<td><a href="<?php echo $r_team['video_pitch'] ?>" target="_blank">Video Pitch</a></td>
								<?php } else { ?>
									<td></td>
								<?php }
								if ($r_team['log_book']) {  ?>
									<td><a href="http://grading.emuem.org/Team/<?php echo $r_team['log_book'] ?>">LogBook</a></td>
								<?php } else { ?>
									<td></td>
								<?php }  ?>
								<!--<td><a href="http://grading.emuem.org/Team/<?php echo $r_team['log_book'] ?>" target="_blank">LogBook</a></td>  -->
								<td>

									<?php
									$team_m_q = mysqli_query($conn, "select * from tbl_team_member where team_id = $team_id");
									while ($team_m_r = mysqli_fetch_assoc($team_m_q)) {
									?>


										<?php echo $team_m_r['student_first_name'] . ' ' . $team_m_r['student_last_name']; ?>


									<?php } ?>

								</td>
							</tr>
						<?php } ?>



					</tbody>

				</table>




				<!--<div class="form-group">
                <label for="studentType">Select Account Type:</label>
                <select class="form-control" id="accountType">
                    <option>Select account type</option>
                    <option value="superUser">Super User</option>
                    <option value="administrator">Administrator</option>
                    <option value="student">Student</option>
                </select>
            </div>-
			<table  class="table table-borderless" style="margin-right: 547px;margin-bottom: -52px;margin-right: -474px;">
				<tr>
				<td colspan="-4">
				<div class="form-group">
					<iframe frameborder="0" height="100" width="100" 
														src="https://www.youtube.com/embed/sA9DwvbQ-hI">
													  </iframe>
            </div>
				</td>
				</tr>		
			</table>-->
				<hr style="margin-left: -100px;">
				<table class="table table-borderless" style="margin-left: -110px;">



					<form method="post" enctype="multipart/form-data">
						<h3 style="margin-left:-100px"> Upload Photo Consent Forms:</h3>
						<?php $team_m_q = mysqli_query($conn, "select * from tbl_team_member where team_id = $team_id");
						while ($team_m_r = mysqli_fetch_assoc($team_m_q)) {  ?>


							<tr>

								<td colspan="6">
									<?php echo $team_m_r['student_first_name'] . ' ' . $team_m_r['student_last_name']; ?>
									<div>

										<label for="pwd"><b>Parent has given consent to photograph the student:</b></label>
										<input type="radio" name="photo_consent" value="Yes" onchange="func(this.value,<?php echo $team_m_r['id']; ?>,'photo_consent')" <?php if (($team_m_r['photo_consent']) == 1) {
																																											echo 'Checked';
																																										} ?>>Yes
										<input type="radio" name="photo_consent" value="No" id="fileUpload" onchange="func(this.value,<?php echo $team_m_r['id']; ?>,'photo_consent')" <?php if (($team_m_r['photo_consent']) == 0) {
																																															echo 'Checked';
																																														} ?>>No
									</div>

								</td>

								<td colspan="6">

									<div>
										<label for="pwd"><b>Photo Consent Form for <?php echo $team_m_r['student_first_name'] ?>:</b></label>
										<?php if (($team_m_r['photo_consent_form']) != '') { ?>
											<a href="http://grading.emuem.org/Team/<?php echo $team_m_r['photo_consent_form'] ?>" target="_blank">Consent Form</a>
										<?php } ?>
										<input type="file" class="form-control" name="photo_form" id="photo_form" placeholder="Upload Photo Consent Form" onchange="func(this.value,<?php echo $team_m_r['id']; ?>,'photo_consent_form')">
									</div>

								</td>
							</tr>
						<?php } ?>


						<!--<tr>
				<td>
				<div class="form-group">
				<button type="submit" class="btn btn-success" name="submit">Update</button>
				</div>
				</td>
				</tr> 	-->




						<!--</td>
				</tr>-->
					</form>
				</table>
				<hr style="margin-left: -100px;">

				<table class="table table-borderless" style="margin-left: -110px;">



					<form method="post" enctype="multipart/form-data">
						<h3 style="margin-left:-100px"> Upload Video Pitch , LogBook</h3>
						<p>Youtube link is preferred for the Video Pitch</p>
						<tr>
							<td colspan="6">

								<div>
									<label for="pwd"><b>Upload Video Pitch:</b></label>
									<input type="file" class="form-control" name="fileToUpload" placeholder="Upload video">
									<p>Video Should less than 25MB</p>
								</div>
								<br>
								<p><b>-OR-</b></p>

								<div>
									<label for="pwd"><b>Update Video Pitch Link:</b></label>
									<input type="text" class="form-control" id="studentEmail" name="video_pitch_link" placeholder="Upload video">
								</div>

							</td>
						</tr>

						<br>
						<tr>
							<td colspan="6">

								<div>
									<label for="pwd"><b>LogBook:</b></label>
									<input type="file" class="form-control" id="studentEmail" name="log_book" placeholder="Upload logbook">
								</div>

							</td>
						</tr>




						<tr>
							<td>
								<div class="form-group">
									<button type="submit" class="btn btn-success" name="submit">Update</button>
								</div>
							</td>
						</tr>




						<!--</td>
				</tr>-->
					</form>
				</table>







			</div>
			<div class="col-9">
				<table class="table table-borderless">
					<br>
					<h3> Video Pitch:</h3>
					<br>
					<br>
					<?php if ($youtube_id == '') { ?>
						<div class="form-group">
							<video width="500" height="400" controls>
								<source src="<?php echo $d_vt['video_pitch'] ?>" type="video/mp4">
								<source src="<?php echo $d_vt['video_pitch'] ?>" type="video/ogg">
							</video>
						</div>
					<?php } else { ?>
						<div class="form-group">
							<iframe width="500" height="400" src="https://www.youtube.com/embed/<?php echo $youtube_id ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					<?php } ?>
				</table>
			</div>
		</div>

		<!-- <div class="container d-flex justify-content-center col-md-8">
        <p class="dbtn">
            <button type="button" id="signout-btn" onclick="signOutUser()" class="btn btn-danger"> SignOut </button>
        </p>
    </div> -->
	</body>
</div>

</html>
<?php
include('../database/config.php');
include('control.php');

$id = $_SESSION['id'];
$name = $_SESSION['name'];
if (isset($_GET['year'])) {
	$year = $_GET['year'];
} else {
	$year = date("Y");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Team Lists</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<style>
	html,
	body {
		height: 100%;
		width: 100%;
		padding: 0;
		margin: 0;
	}

	table {
		table-layout: fixed;
	}

	th {
		overflow: auto;
		max-width: 100%;
		white-space: nowrap;
	}

	td {
		overflow: auto;
		max-width: 100%;
		white-space: nowrap;
	}

	@media only screen and (max-width: 480px) {

		/* horizontal scrollbar for tables if mobile screen */
		.tablemobile {
			overflow-x: auto;
			display: block;
		}
	}
</style>
<?php include('../header.php'); ?>
<div id="wrapper" style="margin-top:20px;width:100%;">

	<body>




		<br>
		<div class="container d-flex justify-content-left col-md-12">
			<div class="col-12">
				<input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search for Team names..">
				<br>
				<table class="table" id="myTable" style="margin-block-start: -20px">
					<thead class="thead-dark" id="table">
						<tr>
							<th scope="col">Team Name</th>
							<th scope="col">Team Description</th>
							<th scope="col">Team Members</th>
							<th scope="col">Video Pitch</th>
							<!-- <th> View Details</th>-->
						</tr>
					</thead>
					<tbody>

						<?php
						$q_team = mysqli_query($con, "select distinct tt.id as team_id,tt.project_team_name as project_name,tt.project_description,tt.category,tt.video_pitch, tt.log_book
				from tbl_team tt where tt.year = '$year' and tt.deleted = 0 order by project_team_name");

						while ($r_team = mysqli_fetch_assoc($q_team)) {
							$youtube_id = '';
							$url = $r_team['video_pitch'];
							if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match)) {
								$youtube_id = $match[1];
							}
							$team_id = $r_team['team_id'];
							$team_m_q = mysqli_query($con, "select GROUP_CONCAT(concat(student_first_name,' ',student_last_name)) as members from tbl_team_member where team_id = $team_id");
							$team_m_r = mysqli_fetch_assoc($team_m_q);

						?>

							<tr>
								<td><?php echo $r_team['project_name'] ?></td>
								<td><?php echo $r_team['project_description'] ?></td>
								<td><?php echo $team_m_r['members'] ?></td>
								<?php if ($r_team['video_pitch'] != '') {
									if ($youtube_id != '') { ?>
										<td><a href="<?php echo $r_team['video_pitch'] ?>" target="_blank">Video Pitch</a></td>
									<?php } else { ?>
										<td><a href="http://grading.emuem.org/Team/<?php echo $r_team['video_pitch'] ?>" target="_blank">Video Pitch</a></td>
									<?php } ?>
								<?php } else { ?>
									<td>Video Pitch</td>
								<?php } ?>

								<!--<td><a href="edit_team.php?team_id=<?php echo $team_id ?>"><button type="button" style="margin:0px;"  class="btn-success btn-sm"  onclick="edit(this)">Update Details</button></a></td> -->
							</tr>
						<?php } ?>

					</tbody>
				</table>
			</div>

		</div>

		<!-- <div class="container d-flex justify-content-center col-md-8">
        <p class="dbtn">
            <button type="button" id="signout-btn" onclick="signOutUser()" class="btn btn-danger"> SignOut </button>
        </p>
    </div> -->

	</body>
	<div>

</html>