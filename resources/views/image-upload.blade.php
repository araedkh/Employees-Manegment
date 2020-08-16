<!DOCTYPE html>
<html>
<head>
	<title>EMPLOYEE IMAGE</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/
	bootstrap.min.css">
	<link rel="stylesheet" href="/css/style.css">

</head>
<body>
	<ul class="topnav">

  <strong><li><a href="{{route('home')}}">Basic Information</a></li></strong>
  <strong><li><a class="active" href="{{route('imageUpload')}}">Personal Image</a></li></strong>
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

	<div class="container mt-5">
        <h3 class="text-center mb-5">Please Upload Your Personal Image</h3>
        <form action="{{route('imageUpload')}}" method="post" enctype="multipart/form-data">
            @csrf
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="user-image mb-3 text-center">
                <div class="imgPreview"> </div>
            </div>            

            <div class="custom-file">
                <input type="file" name="imageFile[]" class="custom-file-input" id="images" multiple="multiple">
                <label class="custom-file-label" for="images">Choose image</label>
            </div>

            <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                Upload Images
            </button>
        </form>
    </div>
  
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
        $(function() {
        
        var multiImgPreview = function(input, imgPreviewPlaceholder) {

            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#images').on('change', function() {
            multiImgPreview(this, 'div.imgPreview');
        });
        });    
    </script>
</body>
</html>