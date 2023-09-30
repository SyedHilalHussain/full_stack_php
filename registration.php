<?php

include './adminpanel/superadmin/config.php';


    extract($_POST);

    if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email'])  && isset($_POST['password']) && isset($_POST['category'])) {

        $first_name = $_POST['fname'];
        $last_name = $_POST['lname'];
        $phone = $_POST['contact'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user_type = $_POST['category'];
        // $pass= password_hash($_POST['password'],PASSWORD_BCRYPT);



        $l_q = mysqli_query($conn,"select * from tbl_user where email = '$email'");
        $num_rows_1 = $l_q->num_rows;;
        if ($num_rows_1 < 1) {
            $name = $_POST['fname'];
            $to=$_POST['email'];
            $subject = "EMUiNVENT Sign Up Confirmation";

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

            $query = "insert into tbl_user (first_name,last_name,phone,email,password,user_type,address) values ('$first_name','$last_name','$phone','$email','$password','$user_type','$address')";

            // $id = mysqli_insert_id($con);
            // $_SESSION['email'] = $_POST['email'];
            // $_SESSION['id'] = $id;


            //   $to = $_SESSION['email'];
            //   $username = $row['email'];
            //$password = $row['password'];

            // if (mail($to, $subject, $message, $headers)) {

            #echo 'Your mail has been sent successfully.';

            //echo '<script>alert("Registration Successfull, we will review your registration and let you know shortly");</script>';
            // echo '<script type="text/javascript">'; 
            // echo 'alert("Sign up confirmation has been sent to your email address!");'; 
            // echo 'window.location.href = "index.php";';
            // echo '</script>';

            //$message ="Dear $name,
            //We are excited to welcome your team(s) for participation in the EMUiNVENT competition. Please login using  :Username: $username, Password: $password @ http://grading.emuem.org/login.php to provide all details of the participating teams. Closer to the video submission deadline, you will receive another email with details of submission.EMUiNVENT 2021 will be entirely online. So please make sure you visit the submission system and provide all the information and materials in a timely manner.After the submission of videos is completed, a panel of professionals will judge all student projects. We will announce awards and winners in a broadcasted awards ceremony on March 12. You will receive more details about the ceremony and how to access it in the coming weeks.For more information and all deadlines, visit the https://emich.edu/emuinvent website. If you have questions, please email emu_invent@emich.edu.
            //EMUiNVENT Team";
            //      } else {
            //    echo 'Unable to send email. Please try again.';
            //      }



            // }
            // else 
            // {
            //     #echo "user already exists";
            //     echo '<script>alert("User account with this email ID already exists, please click on Login or forgot password")</script>';
            // }




            if (mysqli_query($conn,$query) && mail($to, $subject, $message, $headers)) {
                
                $resp['status'] = 'Success';
                $resp['msg'] = 'Sign up confirmation has been sent to your email address!';
                
            } else {
                $resp['status'] = 'Failed';
                $resp['msg'] = 'Process Failed';
            }
        } else {
            $resp['status'] = 'Failed';
            $resp['msg'] = 'User account with this email ID already exists, please click on Login or forgot password!';
          
        }
    } else {
        $resp['status'] = 'Required';
        $resp['msg'] = 'All Field are Required!';
       
    }
    
    echo json_encode($resp);





?>





