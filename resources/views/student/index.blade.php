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

    @php
        // dd($data)    ;
    @endphp

    <div class="container mt-3">
        <h2>Bordered Table123 </h2>
        <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>
        <p>
            <a href="{{ route('students.create') }}" class="btn btn-success">add</a>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                add modal
            </button>
        </p>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="10%">ID</th>
                    <th>NAME</th>
                    <th>MOBILE</th>
                </tr>
            </thead>
            <tbody>
                @php
                    // dd($data)    ;
                @endphp
                @foreach ($data as $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->mobile }}</td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Create Modal Heading</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container mt-3">
                      
                        <form action="{{ route('students.store') }}" method="post">
                            {{-- csrf --}}
                            @csrf

                            <div class="mb-3 mt-3">
                                <label for="name">Name:</label>
                                <input type="name" class="form-control" id="name" placeholder="Enter name"
                                    name="name">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="mobile">Mobile:</label>
                                <input type="mobile" class="form-control" id="mobile" placeholder="Enter mobile"
                                    name="mobile">
                            </div>

                            
                        </form>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

</body>

</html>
