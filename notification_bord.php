<!DOCTYPE html>
<html>
<head>
 <title>Notification bord</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head style="background-color: #ccc">
<body class="bg-info">
 <br /><br />
 <div class="container">
  <nav class="navbar navbar-inverse">
   <div class="container-fluid">
    <div class="navbar-header">
     <a class="navbar-brand" href="#">School notification to parents</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
     <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <span class="label label-pill label-danger count" style="border-radius:10px;"></span>
           <span class="glyphicon glyphicon-bell" style="font-size:18px;"></span></a>
      <ul class="dropdown-menu"></ul>
     </li>
    </ul>
   </div>
  </nav>
  <br />
  <form method="post" id="comment_form">
   <div class="form-group">
    <label>Enter Subject</label>
    <input type="text" name="subject" id="subject" class="form-control">
   </div>
   <div class="form-group">
    <label>Enter Comment</label>
    <textarea name="comment" id="comment" class="form-control" rows="5"></textarea>
   </div>
   <div class="form-group">
    <input type="submit" name="post" id="post" class="btn btn-info" value="Post" />
   </div>
  </form>
 </div>
</body>
</html>