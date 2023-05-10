<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Laravel 9</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="bg-dark py-3">
        <div class="container">
        <div class="h4 text-white">Simple Teacher List</div>
        </div>
    </div>
    <div class="container">
        <div class="d-flex justify-content-between  py-3">
            <div class="h4">Employees</div>
            <div><a href="{{ route('employees.create') }}" class="btn btn-primary">Create</a></div>
        </div>
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success') }}

        </div>
        @endif
        <div class="card border-0 shadow-lg">
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Image</td>
                        <td>Reza</td>
                        <td>reza@juniv.edu</td>
                        <td>Address Test</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm">edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

    </div>


</body>
</html>
