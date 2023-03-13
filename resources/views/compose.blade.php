<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Post • Favebook</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- Modified CSS --}}
    <link rel="stylesheet" href="{{ asset('/css/compose.css') }}">

    {{-- Icon Logo --}}
    <link rel="icon" href="/image/login/icon.svg" sizes="any" type="image/svg+xml">
</head>
<body>
    <form action="/store-post" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="positioning">
        <div class="mx-5 d-flex flex-column">
            <h1 class="mb-3 text-center">New Post</h1>
                <div class="mb-3">
                    <input type="text" class="form-control w-100 @error('Title') is-invalid @enderror" id="title" aria-describedby="emailHelp" placeholder="Write your post title here ..." name="Title" value="{{ old('Title') }}">
                    @error('Title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <textarea class="form-control w-100 @error('Content') is-invalid @enderror" id="content" placeholder="What are you thinking about this time" rows="10" name="Content">{{ old('Content') }}</textarea>
                        @error('Content')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="file" class="form-control w-100 @error('Image') is-invalid @enderror" id="image" aria-describedby="emailHelp" name="Image" value="{{ old('Image') }}">
                    @error('Image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>


                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
