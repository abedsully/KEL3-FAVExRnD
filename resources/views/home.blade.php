<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Favebook</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}">

    {{-- Icon Logo --}}
    <link rel="icon" href="/image/login/icon.svg" sizes="any" type="image/svg+xml">
</head>
<body>

        <div class="d-flex m-5 flex-column">
            @foreach ($posts as $post)
            <div class="d-flex justify-content-center m-5">
                    <div class="card" style="width: 30rem;">
                        @if ($post->Image != NULL)
                            <img src="{{asset('/storage/Post/'.$post->Image)}}" class="card-img-top" alt="...">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{$post->Title}}</h5>
                            <p class="card-text">{{$post->Content}}</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
            </div>
            @endforeach
        </div>

</body>
</html>
