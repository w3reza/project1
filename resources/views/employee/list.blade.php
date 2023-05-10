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
        <div class="h4 text-white">Simple Laravel 9</div>
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
                    @if ($employees->isNotEmpty())
                    @foreach ( $employees as $employee )
                    <tr valign="middle">
                        <td>{{$employee->id}}</td>
                        <td>
                            @if ($employee->photo != '' && file_exists(public_path().'/uploads/employees/'.$employee->photo))
                            <img src="{{url('uploads/employees/'.$employee->photo)}}" alt="" width="50" height="50" class="rounded-circle">

                            @else
                            <img src="{{url('assets/images/no-image.png')}}" alt="" width="50" height="50" class="rounded-circle">

                            @endif
                        </td>
                        <td>{{$employee->name}}</td>
                        <td>{{$employee->email}}</td>
                        <td>{{$employee->address}}</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm">edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach

                    @else
                    <tr>
                        <td colspan="6"> No Records</td>
                    </tr>
                    @endif

                </table>
                <div>
                    {{$employees->links()}}
                </div>
            </div>
        </div>

    </div>


</body>
</html>
