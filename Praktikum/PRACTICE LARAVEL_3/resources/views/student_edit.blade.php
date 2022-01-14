@extends('template.base')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <section class="h-100 w-100" style="box-sizing: border-box">
        <div class="row">
            <div class="col-lg-6">
                <h1>Edit Data Mahasiswa</h1>
                <form action="{{ route('student.update',['id' => $student->id]) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" name="nim" class="form-control" placeholder="NIM" value="{{ old('nim') }}">
                        @error('nim')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" class="form-control" placeholder="Nama" value="{{ old('name') }}">
                        @error('name')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="gender">Jenis Kelamin</label>
                        <select name="gender" class="form=control">
                            <option value=""></option>
                            @foreach ($gender as $gd)
                                <option value="{{ $gd }}" {{ (old('gender') == $gd) ? 'selected' : '' }}>{{ $gd }}</option>
                            @endforeach
                        </select>
                        @error('gender')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="departement">Jurusan</label>
                        <select name="departement" class="form=control">
                            <option value=""></option>
                            @foreach ($departement as $dp)
                                <option value="{{ $dp }}" {{ (old('departement') == $dp) ? 'selected' : '' }}>{{ $dp }}</option>
                            @endforeach
                        </select>
                        @error('departement')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="address">Alamat</label>
                        <textarea name="address" class="form-control" placeholder="Alamat">{{ old('address') }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>
    </section>
</body>
@endsection

