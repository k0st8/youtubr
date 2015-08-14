<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript" src="http://getbootstrap.com/dist/js/bootstrap.js"></script>
<link type="text/css" rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.css"/>

<title>Show Contacts</title>
</head>
<body>
<!-- Start your code here -->
  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-9 col-lg-offset-3">
      <h1>Show Contacts</h1>
    </div>
  </div>
<!-- If there are contacts  -->
<?php if(!isset($error)): ?>
  <div class="row">
    <div class="col-lg-6 col-lg-offset-3">

	<table class="table table-striped">
	 <thead>
	   <tr>
        	 <th>#</th>
	         <th>Name</th>
          	 <th>Email</th>
         	 <th>Subject</th>
         	 <th>Body</th>
           </tr>
      	 </thead>

	<tbody>
<!-- Display contacts form database -->
<?php foreach($res as $contact): ?>
        <tr>
          <th scope="row"><?php echo $contact->id; ?></th>
          <td><?php echo $contact->name;?></td>
          <td><?php echo $contact->email;?></td>
          <td><?php echo $contact->subject; ?></td>
          <td><?php echo $contact->body; ?></td>
        </tr>
<?php endforeach; ?>
      </tbody>
     </table>

    </div>
  </div>
<!-- In case there are not contacts -->
<?php else: ?>
<div class="row">
	<div class="col-lg-9 col-lg-offset-3">
		<div class="alert alert-danger" role="alert"> 

			<?php echo $error; ?>
		</div> <!-- alert alert-danger -->
	</div> <!-- col-lg-9 col-lg-offset-3 -->
</div> <!-- row -->  
<?php endif; ?>
  </div> <!-- container-fluid -->
  
</body>
</html>
