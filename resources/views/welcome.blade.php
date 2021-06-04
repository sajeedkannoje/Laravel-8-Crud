<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>home</title>
</head>

<body>
    <x-header />




    <div class="container">
        <div class="row">
            <div class="col">

                <h1 class="display-4">Student Record-</h1>
                @if (session()->has('success'))


                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <table class="table table-bordered table-responsive-lg text-center table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($students as $student)

                            <tr>
                                <td>
                                    {{ $student->id }}

                                </td>
                                <td>
                                    {{ $student->name }}

                                </td>
                                <td>
                                    {{ $student->email }}

                                </td>
                                <td>
                                    {{ $student->phone }}

                                </td>
                                <td>
                                    <a href="{{ route('delete.data',$student->id)}}"
                                        class="btn my-1 btn-sm btn-danger">Delete</a>

                                    <a href="{{ route('edit.data',$student->id)}}" class="btn my-1 btn-sm btn-info">Update</a>
                                </td>
                            </tr>

                        @endforeach

                    </tbody>
                </table>


            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
