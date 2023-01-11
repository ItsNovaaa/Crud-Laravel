<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <h1 class="text-center mb-5">BELAJAR CRUD</h1>
        <a href="{{ route('crud.index') }}" class="btn btn-primary mb-3">Tampilan data</a>
        <div class="card">
          <div class="card-body">
  
                <form action="{{ route('crud.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                    <label for="nis" class="form-label">NIS</label>
                    <input type="text" class="form-control" name="nis" id="nis">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jabatan</label>
                        <input type="text" class="form-control" name="jurusan" id="jurusan">
                    </div>
                    <div class="mb-3">
                      <label for="departemen" class="form-label">departemen</label>
                      <input type="text" class="form-control" name="departemen" id="departemen">
                    </div>                   
                    <div class="mb-3">
                      <label for="tempat_lahir" class="form-label">tempat_lahir</label>
                      <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir">
                    </div> 
                    <div class="mb-3">
                      <label for="alamat" class="form-label">No.HP</label>
                      <input type="text" class="form-control" name="alamat" id="alamat">
                    </div>                   
                    <div class="mb-3">
                      <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                      <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir">
                    </div>
                    <div class="mb-3">
                      <label for="darah" class="form-label">Gol.darah</label>
                      <select name="darah">
                        <option value="a">A</option>
                        <option value="b">B</option>
                        <option value="c">C</option>
                      </select>
                  </div>
                  <div class="mb-3">
                    <label for="agama" class="form-label">agama</label>
                    <select name="agama">
                      <option value="islam">Islam</option>
                      <option value="nonmus">Non islam</option>
                      <option value="kafir">Tidak Punya</option>
                  </select>
                  </div>
                  <div class="mb-3">
                    <label for="status" class="form-label">status</label>
                    <select name="status">
                      <option value="Nikha">menikah</option>
                      <option value="belum_Nikah">Belum nikah</option>
                      <option value="Single">Single Parents</option>
                  </select>
                  </div>
                  <div class="mb-3">
                    <label for="status" class="form-label">kelamin</label>
                    <select name="kelamin">
                      <option value="pria">Pria</option>
                      <option value="wanita">Wanita</option>
                  </select>
                  </div>

                    <button type="submit" class="btn btn-primary">Tambah data</button>
                </form>
          </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>