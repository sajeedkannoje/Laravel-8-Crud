<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="bg-light">
    <x-Header />


    <div class="container">
        <div class="row justify-content-center">



            <form class="col-lg-6 g-3 needs-validation my-3"  action="{{ route('update.data',$student->id)}}" method="POST">
                <input type="hidden" value="{{$student->id}}" name="id"
                        placeholder="enter name">
                         @if (session()->has('success'))
 
             
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @csrf
                
                <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="validationCustom01" value="{{$student->name}}" name="name"
                        placeholder="enter name">
                </div>


                <div class="col-md-12">
                    <label for="validationCustom02" class="form-label">Email</label>
                    <input type="email" class="form-control" id="validationCustom02" value="{{$student->email}}" name="email"
                        placeholder="enter email">

                </div>

                
                <div class="col-md-12">
                    <label for="validationCustom02" class="form-label">phone</label>
                    <input type="text" class="form-control" id="validationCustom02" value="{{$student->phone}}" name="phone"
                        placeholder="enter email">

                </div>

                <div class="col-md-12 my-3">
                    <button class="btn btn-primary" type="submit">Update Data</button>
                </div>

            </form>

        </div>
    </div>
    </div>









    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
