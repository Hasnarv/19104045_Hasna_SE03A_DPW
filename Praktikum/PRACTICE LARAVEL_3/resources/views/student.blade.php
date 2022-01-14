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
            <div class="col-lg-12">
                @if (session()->has('pesan'))
                    <div class="alert alert-success">
                        {{ session()->get('pesan') }}
                    </div>
                @endif
                <a href="{{ route('student.create') }}" class="btn btn-primary mb-2">Tambah</a>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tr>
                            <th>#</th>
                            <th>NIM</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Jurusan</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                        @forelse ($student as $mahasiswa)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $mahasiswa->nim }}</td>
                                <td>{{ $mahasiswa->name }}</td>
                                <td>{{ $mahasiswa->gender }}</td>
                                <td>{{ $mahasiswa->departement }}</td>
                                <td>{{ $mahasiswa->address }}</td>
                                <td>
                                    <form action="{{ route('student.destroy',['id' => $mahasiswa->id]) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{ route('student.edit',['id'=> $mahasiswa->id]) }}" class="btn btn-info btn-sm">Edit</a>
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center" colspan="7">Data tidak ada!</td>
                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>
@endsection

