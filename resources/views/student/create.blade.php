<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple | Student Data</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="bg-dark py-3">
        <div class="container">
        <div class="h4 text-white">Add Student Data</div>
        </div>
    </div>
    <div class="container">
        <div class="d-flex justify-content-between  py-3">
            <div class="h4">Students</div>
            <div><a href="{{ route('students.index') }}" class="btn btn-primary">Back</a></div>
        </div>
        <form action="{{ route('students.store') }}" method="post" enctype="multipart/form-data">
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
                    <label for="Regno" class="form-label">Reg NO</label>
                    <input type="text" name="regno" id="regno" placeholder="Enter Reg NO" class="form-control  @error('regno') is-invalid @enderror" value="{{ old('regno') }}">
                    @error('regno')
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
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" id="phone" placeholder="Enter phone" class="form-control  @error('phone') is-invalid @enderror" value="{{ old('phone') }}">
                    @error('phone')
                    <p class="invalid-feedback">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="fname" class="form-label">Father Name</label>
                    <input type="text" name="fname" id="fname" placeholder="Enter father name" class="form-control  @error('fname') is-invalid @enderror" value="{{ old('fname') }}">
                    @error('fname')
                    <p class="invalid-feedback">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="fname" class="form-label">Mother Name</label>
                    <input type="text" name="mname" id="mname" placeholder="Enter Mother name" class="form-control  @error('mname') is-invalid @enderror" value="{{ old('mname') }}">
                    @error('fname')
                    <p class="invalid-feedback">{{$message}}</p>
                    @enderror
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
