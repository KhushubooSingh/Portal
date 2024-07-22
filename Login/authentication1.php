<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('index.php'); // Ensure this file sets up the $con connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle login form submission
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $username = $_POST['email'];
        $password = $_POST['password'];

        $username = stripcslashes($username);
        $password = stripcslashes($password);
        $username = mysqli_real_escape_string($con, $username);
        $password = mysqli_real_escape_string($con, $password);

        $sql = "SELECT * FROM login_db WHERE email_address = '$username' AND password = '$password'";
        $result = mysqli_query($con, $sql);

        if ($result) {
            $count = mysqli_num_rows($result);
            if ($count == 1) {
                header("Location: registration.php");
                exit();
            } else {
                echo "<h1>Login failed. Invalid username or password.</h1>";
            }
        } else {
            echo "Error executing query: " . mysqli_error($con);
        }
    } elseif (isset($_POST['register_submit'])) {
        // Handle registration form submission
        $pf_no = mysqli_real_escape_string($con, $_POST['pfno']);
        $id_no = mysqli_real_escape_string($con, $_POST['idno']);
        $fname = mysqli_real_escape_string($con, $_POST['fname']);
        $lname = mysqli_real_escape_string($con, $_POST['lname']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $altremail = mysqli_real_escape_string($con, $_POST['altremail']);
        $dsgn = mysqli_real_escape_string($con, $_POST['dsgn']);
        $pswd = mysqli_real_escape_string($con, $_POST['pswd']);
        $panno = mysqli_real_escape_string($con, $_POST['panno']);
        $aadharno = mysqli_real_escape_string($con, $_POST['aadharno']);
        $mobno = mysqli_real_escape_string($con, $_POST['mobno']);
        $other = mysqli_real_escape_string($con, $_POST['other']);
        $bankname = mysqli_real_escape_string($con, $_POST['bankname']);
        $branchname = mysqli_real_escape_string($con, $_POST['branchname']);
        $ifsccd = mysqli_real_escape_string($con, $_POST['ifsccd']);
        $acntno = mysqli_real_escape_string($con, $_POST['acntno']);
        $joiningdate = mysqli_real_escape_string($con, $_POST['joiningdate']);
        $address = mysqli_real_escape_string($con, $_POST['address']);
        $guardianname = mysqli_real_escape_string($con, $_POST['guardianname']);
        $contact = mysqli_real_escape_string($con, $_POST['contact']);


        $sql = "INSERT INTO registration_tbl (pf_no, id_no, first_nm, last_nm, email, altr_email, designation, password, pan_no, aadhar_no, mobile_no, other, bank_nm, branch_nm, ifsc_cd, account_no, joining_date, address, guardian_nm, guardian_contact) 
                VALUES ('$pf_no', '$id_no', '$fname', '$lname', '$email', '$altremail', 
                        '$dsgn', '$pswd', '$panno', '$aadharno', '$mobno', '$other', 
                         '$bankname', '$branchname', '$ifsccd', '$acntno', '$joiningdate', 
                        '$address', '$guardianname', '$contact');";

        if (mysqli_query($con, $sql)) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
    } else {
        echo "<h1>Form submission not recognized.</h1>";
    }
} else {
    echo "<h1>Invalid request method.</h1>";
}



$sql = "SELECT pf_no FROM registration_tbl";
$result = $con->query($sql);
?>