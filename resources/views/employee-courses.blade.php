<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> EMPLOYEE COURSES </title>
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Bubblegum Sans' rel='stylesheet'>
</head>
<body>

	<!-- LINKS OF PAGES -->

	<ul class="topnav">

  <strong><li><a href="{{route('home')}}">Basic Information</a></li></strong>
  <strong><li><a href="{{route('imageUpload')}}">Personal Image</a></li></strong>
  <strong><li><a href="#">Additional Information</a></li></strong>
  <strong><li><a class="active" href="{{route('store_course')}}">Courses</a></li></strong>
  <strong><li><a href="{{route('store_Exper')}}">Experience</a></li></strong>
  <strong><li><a href="{{route('store_quali')}}">Qualification</a></li></strong>
  <strong><li><a href="#">Covenantings</a></li></strong>
  <strong><li><a href="#">Bank Accounts</a></li></strong>
  <strong><li><a href="{{route('store_family_info')}}">Family Data</a></li></strong><br><br><br>
  <strong><li><a href="#">Tax Items</a></li></strong>
  <strong><li><a href="#">Contracts</a></li></strong>
  <strong><li><a href="#">Salaries</a></li></strong>
</ul>
<br><br>

<!-- FORM TO INSERT DATA -->

<form method="post" action="{{route('store_course')}}">
	@method('GET')

	<div class="form-row">
		<div class="col-md-3 mb-3">
      <label>Course Name :</label><span class="error"> *</span>
      <input type="text" class="form-control" name="course_name" required>
      </div>

      <div class="col-md-3 mb-3">
      <label>Place Of Course :</label><span class="error"> *</span>
      <input type="text" class="form-control" name="place" required>
      </div>

      <div class="col-md-3 mb-3">
      <label>Date Of Start :</label><span class="error"> *</span>
      <input type="date" class="form-control" name="StartDate" required>
      </div>

      <div class="col-md-3 mb-3">
      <label>Date Of Finish :</label><span class="error"> *</span>
      <input type="date" class="form-control" name="FinishDate" required>
      </div>

      <div class="col-md-3 mb-3">
      <label>Detailes :</label>
      <textarea name="detailes" rows="5" cols="30">
      	</textarea>
      </div>

      <br><br><br><br><br><br><br><br><br><br>
<div class="col-md-3 mb-3">
	<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save </button>
</div>
      
</div>

</form>

</body>
</html>