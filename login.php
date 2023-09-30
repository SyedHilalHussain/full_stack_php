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
                                <form class="forms-sample" id="logIn">
                                    
                                  
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" id="exampleInputemail" name="email" placeholder="Email" value="" required >
                                    </div>
                                  
                                   
                                    <div class="form-group">
                                        <label for="exampleInputConfirmPassword1">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="" required>
                                        <i class="mdi mdi-eye-slash" id="togglePassword"></i>
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
    <>

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
    <script src="./assets/js/ajax.js" type = "text/javascript"></script>
    <!-- End custom js for this page -->
</body>

</html>