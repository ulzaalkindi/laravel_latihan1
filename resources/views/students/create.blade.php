@extends('layout.main')

@section('title', 'Add Student')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Add Student </h1>

            <form method="post" action="/students">
                @csrf
                <div class="form-group">
                    <label for="nama">Full Name</label>
                    <input type="text" class="form-control @error('nama')is-invalid @enderror" id="nama" name="nama" placeholder="Enter Name" value="{{old('nama')}}">
                    @error('nama')<div class="invalid-feedback">{{$message}}</div>@enderror
                    <div class="form-group">
                        <label for="nrp">Nrp</label>
                        <input type="text" class="form-control @error('nrp')is-invalid @enderror" id="nrp" name="nrp" placeholder="Enter NRP" value="{{old('nrp')}}">
                        @error('nrp')<div class="invalid-feedback">{{$message}}</div>@enderror

                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email')is-invalid @enderror" id="email" name="email" placeholder="Enter Email" value="{{old('email')}}">
                        @error('email')<div class="invalid-feedback">{{$message}}</div>@enderror

                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Enter Jurusan" value="{{old('jurusan')}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
            </form>

        </div>
    </div>
</div>
@endsection