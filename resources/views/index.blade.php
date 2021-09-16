<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


</head>
<body>

    <div class="container mt-5" style="max-width: 550px">
        <h2 class="mb-5">Laravel Image Resize Example</h2>

        <form action="{{route('resizeImage')}}" method="post" enctype="multipart/form-data">
            @csrf
            @if($message = Session::get('sucess'))
            <div class="alert alert-sucess">
                <strong>{{$message}}</strong>
            </div>

            <div class="col-md-12 mb-3">
                <strong>Grayscale Image: </strong>
                <img src="/uploads/{{Session::get('fileName')}}" width="550px" alt="">
            </div>
            @endif

            @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="custom-file">
                <input type="file" name="file" class="custom-file-input" id="chooseFile">
                <label for="chooseFile" class="custom-file-label">Select file</label>
            </div>

            <button type="subimit" class="btn btn-outline-danger btn-block mt-4">
                Upload
            </button>

        </form>
    </div>


</body>
</html>
