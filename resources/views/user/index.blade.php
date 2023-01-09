<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>belajar crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <h1 class="text-center mb-5">BELAJAR CRUD</h1>
      <a href="{{ route('crud.create') }}" class="btn btn-primary mb-3">Tambah</a>
      <div class="card">
        <div class="card-body">
          <table class="table">
            <thead>
              <th>No</th>
              <th>NIS</th>
              <th>Nama</th>
              <th>Jurusan</th>
              <th>Aksi</th>
            </thead>
            <tbody>
              @foreach ($crud as $no => $hasil)
             <tr>     
                <th>{{ $no+1 }}</th>
                <td>{{ $hasil->nis }}</td>
                <td>{{ $hasil->nama }}</td>
                <td>{{ $hasil->jurusan }}</td>
                <td>
                  <form action="{{ route('crud.destroy',$hasil->id) }} " method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route('crud.edit',$hasil->id) }}" class="btn btn-success btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm">Hapus </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>

          </table>
        </div>
      </div>
    </div>
