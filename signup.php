<?php

// $id = $_GET['id'];

// $q = mysqli_query($conn, "select * from tbl_user where id = $id");
// $r = mysqli_fetch_assoc($q);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="./adminpanel/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="./adminpanel/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./adminpanel/assets/css/style2.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="./adminpanel/assets/images/favicon.ico" />

    <style>
           .success-message{
            color:green
        }
        .error-message{
            color:red;
        }
        @media(max-width:400px) {
            
        
        .form-control ,.form-select{
    display: block;
    width: 100%;
    padding: 0.3rem .5rem!important;
    font-size: .7rem!important;
    font-weight: 400;
    line-height: 1;
 
   
   }
   .form-select option {
  
    width: 50%!important;
    padding: 0.3rem .5rem!important;
    font-size: xx-small;
    font-weight: 400;
    line-height: 1;
    background-color: yellow;
 
   
   }

}
    </style>
   
</head>

<body>
    <div class="container-scroller " >

        <!-- partial -->
        <div class="main-panel" style="width:100%!important; padding:0;">
            <div class="content-wrapper updated ">
                <div class="page-header">
                    <h2>Login</h2>

                </div>

               
                <div class="my-3 mt-5" style="
                 
                 display: flex;
                 align-items: center;
                 justify-content: center;
                 background-color: #f4f7ff;
                 overflow: hidden;">
                 <div class="toast1 mt-5 ">

                     <div class="toast1-content">
                         <i class="mdi mdi-alert-circle-outline check"></i>

                         <div class="message1">
                             <span class="text text-1"></span>
                             <span class="text text-2"></span>
                         </div>
                     </div>
                     <i id="popup-close-btn" class="mdi mdi-close close" ></i>

                     <!-- Remove 'active' class, this is just to show in Codepen thumbnail -->
                     <div id="progress1" class="progress1 "></div>
                 </div>

               
                 
             </div>
              

                <div class="row justify-content-center">
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Profile</h4>
                                <p class="card-description"> Basic Information</p>
                                <form class="forms-sample" id="registration">
                                    
                                    <div class="form-group ">
                                        <label for="studentType">Type</label>
                                        <select class="form-select" id="SelectDepartment" name="category" onchange="func_reg(this.value)" required>
                                            <option selected value="" disabled>Select type</option>

                                            <option value="Mentor">Teacher Or Mentor(parents/teachers participating in d2d)</option>
                                            <option value="General User">General User</option>
                                           
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">First Name</label>
                                        <input type="text" class="form-control" id="exampleInputfname" name="fname" placeholder="First Name" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputUsername2">Last Name</label>
                                        <input type="text" class="form-control" id="exampleInputlname" name="lname" placeholder="Last Name" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" id="exampleInputemail" name="email" placeholder="Email" value="" required >
                                    </div>
                                  
                                    <div class="form-group" id="phone">
                                        <label for="exampleInputConfirmPassword1">Phone No</label>
                                        <input type="text" class="form-control"  placeholder="Contact" name="contact" value="" required>
                                    </div>
                                    <div class="form-group" id="address">
                                        <label for="exampleInputUsername2">Address</label>
                                        <input type="text" class="form-control"  name="address" placeholder="Last Name" value="" required> 
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputConfirmPassword1">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="" required>
                                        <i class="mdi mdi-eye-slash" id="togglePassword"></i>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputConfirmPassword1">Confirm Password</label>
                                        <input type="password" class="form-control" id="confirmpassword" name="password" placeholder="Password" value="" required>
                                        <span class="form-text confirm-message"></span>
                                    </div>
                                  
                               

                                    <button type="submit" name="submit" class="btn btn-gradient-success me-2">Submit</button>

                                </form>
                            </div>
                        </div>
                    </div>






                </div>






                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <!-- <?php include '../adminpanel/footer.php'; ?> -->
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <script src="./adminpanel/assets/vendors/js/vendor.bundle.base.js"></script>
    <script>
function func_reg(Selectedvalue)
{
	//alert(Selectedvalue);
	var a = Selectedvalue; 
    var b = 'General User'; 
    var ans = a.localeCompare(b); 
	if(ans == 0)
	{
		document.getElementById('phone').style.display = 'none';
		document.getElementById('address').style.display = 'none';
		document.getElementById("phone").required = false;
		document.getElementById("address").required = false;
		
		
	}
	else 
	{
		document.getElementById('phone').style.display = 'block';
		document.getElementById('address').style.display = 'block';
		document.getElementById("phone").required = true;
		document.getElementById("address").required = true;
	}
	

	
	
	//location.reload();
}

        $('#password, #confirmpassword').on('keyup', function(){

$('.confirm-message').removeClass('success-message').removeClass('error-message');

let password=$('#password').val();
let confirm_password=$('#confirmpassword').val();

if(password===""){
    $('.confirm-message').text("Password Field cannot be empty").addClass('error-message');
}
else if(confirm_password===""){
    $('.confirm-message').text("Confirm Password Field cannot be empty").addClass('error-message');
}
else if(confirm_password===password)
{
    $('.confirm-message').text('Password Match!').addClass('success-message');
}
else{
    $('.confirm-message').text("Password Doesn't Match!").addClass('error-message');
}

});
           const togglePassword = document
            .querySelector('#togglePassword');
        const password = document.querySelector('#password');
        togglePassword.addEventListener('click', () => {
            // Toggle the type attribute using
            // getAttribure() method
            const type = password
                .getAttribute('type') === 'password' ?
                'text' : 'password';
            password.setAttribute('type', type);
            // Toggle the eye and bi-eye icon
            this.classList.toggle('mdi-eye');
        });
    </script>
    <!-- container-scroller -->
    <!-- plugins:js -->
  
    <!-- <script src="./adminpanel/./adminpanel/assets/js/main.js"></script> -->
    <!-- endinject -->
    <!-- Plugin js for this page -->

    <script src="./adminpanel/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="./adminpanel/assets/js/off-canvas.js"></script>
    <script src="./adminpanel/assets/js/hoverable-collapse.js"></script>
    <script src="./adminpanel/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="./adminpanel/assets/js/dashboard.js"></script>
    <script src="./adminpanel/assets/js/todolist.js"></script>
    <!-- <script src="./adminpanel/assets/js/ajaxscript.js" type = "text/javascript"></script> -->
    <script src="./assets/js/ajax.js" type = "text/javascript"></script>
    <!-- End custom js for this page -->
</body>

</html>