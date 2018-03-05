<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upload Gambar dengan Laravel 5.2 &raquo; Jaranguda.com</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">


    <style>

    </style>
</head>
<body>
<div class="container">
    <h3>Gallery</h3>
    <ul>
        <li><a href="{{url('/')}}">Home</a></li>
    </ul>
    <hr>

    <form action="{{ route('upload')}}" method="GET" enctype="multipart/form-data">
        <input class="btn btn-primary" type="submit" value="Upload">
    </form>
    {{--<button><a href="{{route('upload')}}">try</a></button>--}}


    <div class="row">
        <div class="col-md-4">
            @if(count($gambar) > 0)

                @foreach ($gambar as $file)
                    <label>{{$file->judul }}</label>
                    <img src="{{ url('uploadgambar') }}/{{ $file->file_gambar }}" class="img-responsive">
                @endforeach

            @endif
        </div>
    </div>

</div>
</body>

</html>
