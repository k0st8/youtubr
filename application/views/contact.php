<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript" src="http://getbootstrap.com/dist/js/bootstrap.js"></script>
<link type="text/css" rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.css"/>

<title>Contacts Form</title>
</head>
<body>
<!-- Start your code here -->
  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-9 col-lg-offset-3">
      <h1>Contact form</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6 col-lg-offset-3">
      <form method="post" action="saveCsv">
        <div class="form-group">
          <label for="inputName">Name</label>
          <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Name">
        </div>
        <div class="form-group">
          <label for="inputEmail">Email address</label>
          <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email">
        </div>

        <div class="form-group">
          <label for="inputSubject">Subject</label>
            <input type="text" class="form-control" name="inputSubject" id="inputSubject" placeholder="Subject"/>
        </div>
        <div class="form-group">
            <label for="inputBody">Body</label>
            <textarea class="form-control" rows="3" name="inputBody" placeholder="Body"></textarea>
        </div>

        <input type="submit" class="btn btn-default" name="submsg" value="Submit Message" />
      </form>
    </div>  <!-- col-lg-6 col-lg-offset-3 -->
  </div> <!-- row -->
  </div> <!-- container-fluid -->
  
</body>
</html>
