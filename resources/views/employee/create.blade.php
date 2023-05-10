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
            <div><a href="{{ route('employees.index') }}" class="btn btn-primary">Back</a></div>
        </div>
        <form action="{{ route('employees.store') }}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="card border-0 shadow-lg">
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter Name" class="form-control  @error('name') is-invalid @enderror" value="{{ old('name') }}">
                    @error('name')
                    <p class="invalid-feedback">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" id="name" placeholder="Enter Email" class="form-control  @error('email') is-invalid @enderror" value="{{ old('email') }}">
                    @error('email')
                    <p class="invalid-feedback">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea name="address"  id="address" placeholder="Enter address"  cols="30" rows="4" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="photo" class="form-label">Image</label>
                    <input type="file" name="photo" id="photo" class="form-control @error('photo') is-invalid @enderror">
                    @error('photo')
                    <p class="invalid-feedback">{{$message}}</p>
                    @enderror
                </div>

            </div>
        </div>
        <button class="btn btn-primary mt-3">Save Data</button>
        </form>

    </div>


</body>
</html>
