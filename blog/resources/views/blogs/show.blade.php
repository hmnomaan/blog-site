<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="py-5 d-flex justify-content-end gap-1">
            <a href="{{ url('dashboard') }}" class="btn btn-primary ">Dashboard</a>

            <a href="{{ route('blogs.index') }}" class="btn btn-primary ">List</a>
        </div>
        <div class="py-5 ">
            <h1>
                Title : {{ $blog->title }}
            </h1>
            <div>
                <p>
                    {{ $blog->slug }}
                </p>
            </div>
            <div>
                <p>
                    {{ $blog->description }}
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="mt-5">
            <form action="{{ route('blogs.comments.store', $blog->id) }}" method="post">
                @csrf
                <div class="py-2">
                    <label class="mb-1">Comments </label>
                    <textarea rows="7" type="text" name="comment" class="form-control" placeholder="Descripton">{{ old('comment') }}</textarea>
                </div>

                <div class="py-2">
                    <button type="submit" class="btn btn-primary">Comment</button>
                </div>
            </form>
        </div>
        <div>
            <h1> Recents Comments : </h1>

            @foreach ($blog->comments as $comment)
                <div class="py-3">
                    <h5>{{ $comment->user->name }}</h5>
                    <p>{{ $comment->body }}</p>
                    @if (Auth::user()->id == $comment->user_id)
                        <form action="{{ route('blogs.comments.destroy', [$blog->id, $comment->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    @endif

                </div>
            @endforeach
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>
