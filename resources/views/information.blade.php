<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> PROFILE EMPLOYEE </title>
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

  <strong><li><a class="active" href="{{route('home')}}">Basic Information</a></li></strong>
  <strong><li><a href="{{route('imageUpload')}}">Personal Image</a></li></strong>
  <strong><li><a href="#">Additional Information</a></li></strong>
  <strong><li><a href="{{route('store_course')}}">Courses</a></li></strong>
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
<form method="post" action="{{route('save')}}">
	@method('GET')

	<div class="form-row">
		<div class="col-md-3 mb-3">
			<label >Document Type :</label><span class="error"> *</span>
            <select name="documentType" class="form-control">
            	<option selected> Identification </option>
            	<option>Birth Certificate</option>
            	<option>Passport</option>
            </select>
		</div>

		<div class="col-md-3 mb-3">
      <label>Document Number :</label><span class="error"> *</span>
      <input type="text" class="form-control" name="documentNumber" required>
      </div>

      <div class="col-md-3 mb-3">
      <label>Full Name(in arabic) :</label><span class="error"> *</span>
      <input type="text" class="form-control" name="fullName" required>
      </div>
    </div>


      <div class="form-row">
      <div class="col-md-3 mb-3">
      <label>Name(en) :</label><span class="error"> *</span>
      <input type="text" class="form-control" name="name" required>
      </div>

      <div class="col-md-3 mb-3">
      <label>Date Of Birth :</label><span class="error"> *</span>
      <input type="date" class="form-control" name="dataOfBirth" required>
      </div>

      <div class="col-md-3 mb-3">
      <label>Social State :</label><span class="error"> *</span>
      <select name="socialState" class="form-control" required>
      	<option>Married</option>
        <option>Single</option>
        <option>Divorced</option>
        <option>Widow</option>
      </select>
      </div>

      <div class="form-row">
      	<div class="col-md-3 mb-3">
      <label>Gender :</label><span class="error"> *</span>
      <select name="gender" class="form-control" required>
      	<option>Male</option>
        <option>Female</option>
        </select>
      </div>

      <div class="col-md-3 mb-3">
      <label>Phone Number :</label><span class="error"> *</span>
      <input type="tel" name="phoneNumber" class="form-control" required>
      </div>

      <div class="col-md-3 mb-3">
      <label>Watania Mobile :</label>
      <input type="tel" name="wataniaMobile" class="form-control">
      </div>
   </div>

   <div class="form-row">
   	<div class="col-md-3 mb-3">
   		<label> TEL : </label>
   		<input type="tel" name="Tel" class="form-control">
   	</div>

   	<div class="col-md-3 mb-3">
   		<label> Country :</label>
   		<select name="country" class="form-control">
   		<option>Palestine</option>
   		<option>Jordan</option>
   		<option>Eygept</option>
   		<option>Syria</option>
   		<option>Lebnon</option>
   		<option>Turkey</option>
   		<option>Germeny</option>
   		<option>China</option>
   		<option>Tunisia</option>
   		<option>Moroco</option>
   		<option>Spain</option>
   		<option>Qater</option>
   		<option>Kuwait</option>
   		</select>
   	</div>
   	<div class="col-md-3 mb-3">
   		<label>City :</label>
   		<select name="city" class="form-control">
   		<option>Gaza</option>
   		<option>Rafah</option>
   		<option>Yafa</option>
   		<option>AlQuds</option>
   		<option>Hebron</option>
   		<option>Akka</option>
   		<option>Haifa</option>
   		<option>Nablus</option>
   		<option>Ramallah</option>
   		<option>Jenen</option>
   		<option>khanyouns</option>
   		<option>Ariha</option>
   		<option>Safad</option>
   		</select>
   	</div>
</div>

<div class="form-row">
	<div class="col-md-3 mb-3">
		<label>Address :</label>
		<input type="text" name="address" class="form-control">
	</div>
	<div class="col-md-3 mb-3">
		<label>Job Number :</label><span class="error"> *</span>
		<input type="number" name="jobNumber" class="form-control" required>
	</div>
	<div class="col-md-3 mb-3">
		<label>Start Date :</label><span class="error"> *</span>
		<input type="date" class="form-control" name="startDate" required>

	</div>
	<br><br><br><br><br><br><br><br><br>
	<div class="col-md-3 mb-3">
	<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save </button>
</div>

	
</div>
</form>





</body>
</html>