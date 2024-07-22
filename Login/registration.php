<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="registration_style.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="container-fluid">
      <h4 class="text-center pt-4">Registration</h4>
      <form class="mx-auto" action="authentication1.php" method="POST">

      <div class="row pt-2 justify-content-center">
          <div class="col-md-6 col-lg-4 d-flex justify-content-center mb-2">
            <!-- <div>
            <label for="pfno">PF No.</label>
            </div> -->
            <div>
            <?php
          include 'index.php';

          $query = "SELECT pf_no FROM registration_tbl";
          $result = $con->query($query);
          $options = [];

          if ($result->num_rows > 0) {
            $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
          }
          ?>
          <select id="pf-no" name="pfno" class="form-control input-field">
            <option value="">Select PF No.</option>
            <?php foreach ($options as $option): ?>
              <option value="<?php echo htmlspecialchars($option['pf_no']); ?>">
                <?php echo htmlspecialchars($option['pf_no']); ?>
              </option>
            <?php endforeach; ?>
          </select>
            </div>
          </div>
        </div>

      <!-- --------------------------------------- -->
        <div class="row pt-2 justify-content-center">
          <div class="col-md-6 col-lg-4 mb-2 me-lg-3">
            <label for="pfno">PF No.</label>
            <input
              type="text"
              class="form-control input-field"
              placeholder="PF No."
              id="pf-no"
              name="pfno"
            />
          </div>
          <div class="col-md-6 col-lg-4 mb-3 me-lg-3">
            <label for="idno">ID No.</label>
            <input
              type="text"
              class="form-control input-field"
              placeholder="ID No."
              id="id-no"
              name="idno"
            />
          </div>
        </div>

        <!-- fname and lname -->

        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4 mb-2 me-lg-3">
            <label for="fname">First Name</label>
            <input
              type="text"
              class="form-control input-field"
              placeholder="First Name"
              id="first-name"
              name="fname"
            />
          </div>
          <div class="col-md-6 col-lg-4 mb-3 me-lg-3">
            <label for="lname">Last Name</label>
            <input
              type="text"
              class="form-control input-field"
              placeholder="Last Name"
              id="last-name"
              name="lname"
            />
          </div>
        </div>

        <!-- email and altr email -->

        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4 mb-2 me-lg-3">
            <label for="email">Email Id</label>
            <input
              type="email"
              class="form-control input-field"
              placeholder="Email Id"
              id="email-id"
              name="email"
            />
          </div>
          <div class="col-md-6 col-lg-4 mb-3 me-lg-3">
            <label for="altremail">Altr. Email Id</label>
            <input
              type="email"
              class="form-control input-field"
              placeholder="Altr. Email Id"
              id="altr-email"
              name="altremail"
            />
          </div>
        </div>

        <!-- desgination and password -->

        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4 mb-2 me-lg-3">
            <label for="dsgn">Designation</label>
            <input
              type="text"
              class="form-control input-field"
              placeholder="Designation"
              id="designation"
              name="dsgn"
            />
          </div>
          <div class="col-md-6 col-lg-4 mb-3 me-lg-3">
            <label for="password">Password</label>
            <input
              type="pswd"
              class="form-control input-field"
              placeholder="Password"
              id="password"
              name="pswd"
            />
          </div>
        </div>

        <!-- pan and adhar -->

        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4 mb-2 me-lg-3">
            <label for="panno">PAN No.</label>
            <input
              type="text"
              class="form-control input-field"
              placeholder="PAN No."
              id="pan-no"
              name="panno"
            />
          </div>
          <div class="col-md-6 col-lg-4 mb-3 me-lg-3">
            <label for="aadharno">Aadhar No.</label>
            <input
              type="text"
              class="form-control input-field"
              placeholder="Aadhar No."
              id="aadhar-no"
              name="aadharno"
            />
          </div>
        </div>

        <!-- mob no and other -->

        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4 mb-3 me-lg-3">
            <label for="mobno">Mobile No.</label>
            <input
              type="text"
              class="form-control input-field"
              placeholder="Mobile No."
              id="mob-no"
              name="mobno"
            />
          </div>
          <div class="col-md-6 col-lg-4 mb-3 me-lg-3">
            <label for="other">Other</label>
            <input
              type="text"
              class="form-control input-field"
              placeholder="Other"
              id="other"
              name="other"
            />
          </div>
        </div>

        <!-- bank and branch name -->

        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4 mb-3 me-lg-3">
            <label for="bankname">Bank Name</label>
            <input
              type="text"
              class="form-control input-field"
              placeholder="Bank Name"
              id="bank-name"
              name="bankname"
            />
          </div>
          <div class="col-md-6 col-lg-4 mb-3 me-lg-3">
            <label for="branchname">Branch Name</label>
            <input
              type="text"
              class="form-control input-field"
              placeholder="Branch Name"
              id="branch-name"
              name="branchname"
            />
          </div>
        </div>

        <!-- ifsc and account no -->

        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4 mb-3 me-lg-3">
            <label for="ifsccd">IFSC Code</label>
            <input
              type="text"
              class="form-control input-field"
              placeholder="IFSC Code"
              id="ifsc-cd"
              name="ifsccd"
            />
          </div>
          <div class="col-md-6 col-lg-4 mb-3 me-lg-3">
            <label for="acntno">Account No.</label>
            <input
              type="text"
              class="form-control input-field"
              placeholder="Account No."
              id="account-no"
              name="acntno"
            />
          </div>
        </div>

        <!-- date of joining and address -->

        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4 mb-3 me-lg-3">
            <label for="joiningdate">Date of Joining</label>
            <input
              type="date"
              class="form-control input-field"
              placeholder="Date of Joining"
              id="joining-date"
              name="joiningdate"
            />
          </div>
          <div class="col-md-6 col-lg-4 mb-3 me-lg-3">
            <label for="address">Address</label>
            <input
              type="text"
              class="form-control input-field"
              placeholder="Address..."
              id="address"
              name="address"
            />
          </div>
        </div>

        <!-- Guardian name and Guardian contact no. -->

        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4 mb-3 me-lg-3">
            <label for="guardianname">Guardian Name</label>
            <input
              type="text"
              class="form-control input-field"
              placeholder="Guardian Name"
              id="guardian-name"
              name="guardianname"
            />
          </div>
          <div class="col-md-6 col-lg-4 mb-3 me-lg-3">
            <label for="contact">Guardian Contact No.</label>
            <input
              type="text"
              class="form-control input-field"
              placeholder="Guardian Contact No."
              id="Guardian-contact"
              name="contact"
            />
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4 d-flex justify-content-center mb-5">
            <button type="submit" class="btn-submit" name="register_submit">
              Submit
            </button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>

