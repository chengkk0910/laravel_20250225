<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Create form</h2>
        <form action="{{ route('students.store') }}" method="post">
            {{-- csrf --}}
            @csrf

            <div class="mb-3 mt-3">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
            <div class="mb-3 mt-3">
                <label for="mobile">Mobile:</label>
                <input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile">
            </div>
            <div class="mb-3 mt-3">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone">
            </div>
            <div class="mb-3 mt-3">
                <label for="phone">Hobbies: ex(php,laravel,html,css)</label>
                <input type="text" class="form-control" id="hobbies" placeholder="Enter hobbies" name="hobbies">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>
