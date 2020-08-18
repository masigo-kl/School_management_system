<!DOCTYPE html>
<html lang="en">
<head>
  <title>Wep page</title>

  <link rel="icon" href="favicon.ico" type="image/icon" sizes="16x16">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body class="bg-info">
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
      <a href="index.php" class="navbar navbar-brand">
        <h3>School Notification System</h3>
      </a>  
       <ul class=" navbar navbar-nav mr-auto">
        <li class="nav-item">
          <a href="index.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="feeback.php" class="nav-link">FeedBack</a>
        </li>
        <li class="nav-item">
          <a href="contact_Us.php" class="nav-link">Contact</a>
        </li>
      </ul>
      <a href="login.php">
        <button class="btn btn-danger mr-2">Login</button>
      </a>
      <a href="register.php">
        <button class= "btn btn-success">Register now</button></a>
      </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card bg-light mt-2 py-1">
          <h3 class="text-center">This page is where your can contact us or put your feedback </h3>
        </div>
      </div>
    </div>
  </div>
<br>
<div class="container">
      <div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>
    <div class="row">
      <div class="col-lg-6 m-auto">
        <div class="card bg-dark mt-5 py-2">
          <div class="card-title  bg-primary text-white">
            <h3 class="text-center mt-2">Feedback Form</h3>
            <hr>
          </div>
          <div class="card-body" >
            <form action="//submit.form" id="ContactUs100" method="post" onsubmit="return ValidateForm(this);">
          <script type="text/javascript">
            function ValidateForm(frm) {
              if (frm.Name.value == "") { alert('Name is required.'); frm.Name.focus(); return false; }
                  if (frm.FromEmailAddress.value == "") { alert('Email address is required.'); frm.FromEmailAddress.focus(); return false; }
                      if (frm.FromEmailAddress.value.indexOf("@") < 1 || frm.FromEmailAddress.value.indexOf(".") < 1) 
                        { alert('Please enter a valid email address.'); frm.FromEmailAddress.focus(); return false; }
                          if (frm.Comments.value == "") { alert('Please enter comments or questions.'); frm.Comments.focus(); return false; }
                              return true;
                               }
          </script>
          <table style="max-width:550px;border:0;" cellpadding="8" cellspacing="0">
          <tr> <td>
            <label class="text-white" for="Name">Name*:</label>
              </td> <td>
                <input name="Name" type="text" maxlength="60" placeholder="Enter your name" class="form-control py-2 mb-2 style="max-width:250px;" />
                    </td> </tr> <tr> <td>
                        <label class="text-white" for="PhoneNumber">Phone number:</label>
                    </td> <td>
                    <input name="PhoneNumber" type="text" placeholder="Enter your Phone number" class="form-control py-2 mb-2 maxlength="43" style="max-width:250px;" />
                    </td> </tr> <tr> <td>
                    <label class="text-white" for="FromEmailAddress">Email address*:</label>
                    </td> <td>
                    <input name="FromEmailAddress" type="text" placeholder="Enter Your Email"class="form-control py-2 mb-2 maxlength="90" style="max-width:250px; " />
                    </td> </tr> <tr> <td>
                    <label class="text-white" for="Comments">Comments*:</label>
                  </td> <td>
                  <textarea class="text-white" name="Comments" rows="7" cols="40" placeholder="Enter your comment here........" class="form-control py-2 mb-2 style="max-width:350px;"></textarea>
                   * - required fields
                  </td> </tr> <tr> <td>
                 
                  </td> <td>
                  <div style="float:right"><a href="https://www.google.com" id="lnk100" title="form to email">form to email</a></div>
                      <input name="skip_Submit" type="submit" value="Submit" />
                <script src="https://www.100forms.com/js/FORMKEY:LAMF9K5T7DXU/SEND:my@email.com" type="text/javascript"></script>
                </td> </tr>
           </table>
          </form>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>
