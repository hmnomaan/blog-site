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
        <h1>Create Blog</h1>
        <form action="{{ route('blogs.store') }}" method="post">
            @csrf
            <div class="py-2">
                <label class="mb-1">Title</label>
                <input type="text" name="title" value="{{ old('title') }}" class="form-control"
                    placeholder="title">
            </div>
            <div class="py-2">
                <label class="mb-1">Slug</label>
                <input type="text" name="slug" value="{{ old('slug') }}" class="form-control"
                    placeholder="slug">
            </div>
            <div class="py-2">
                <label class="mb-1">Description</label>
                <textarea rows="7" type="text" name="description" class="form-control" placeholder="Descripton">
                {{ old('description') }}
              </textarea>
            </div>
            <div class="py-2">
                <button class="btn btn-success">Create</button>
                </textarea>
            </div>


        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>
