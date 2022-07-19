<!DOCTYPE html>
<html>
<head>
	<title>Day #3 - Drag and Drop Image</title>
	<!-- include bootstrap -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- include css -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
<form class="subform" method="post" action="{{ route('image.upload')}}" enctype="multipart/form-data">
{{ csrf_field() }}        
<div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <div class="uploadOuter">
                        <label for="uploadFile" class="btn btn-primary">
                            Upload Image
                        </label>
                        <strong>OR</strong>
                    
                    <span class="dragBox">
                        Drag and Drop Image here
                        <input type="file" onChange="dragNdrop(event)"
                        ondragover="drag()"
                        ondrop="drop()" 
                        id="uploadFile" name="images"
                        >
                    </span>
                    <input type="submit" name="insert" value="insert">
                    </div>
                    <div id="preview"></div>

                </div>
            </div>

        </div>


        </form>
<script type="text/javascript" src="{{ asset('js/UPLOAD.js') }}"></script>

</body>
</html>