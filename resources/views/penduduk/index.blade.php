<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/penduduk/home">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/penduduk">Data Penduduk<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/pegawai">Data Pegawai<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    <div class="container-fluid">
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
  </button>
            </div>
        @endif
            <h4>Data Penduduk</h4>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mt-3 mb-3 btn-sm" data-toggle="modal" data-target="#exampleModal">
            Tambah Data
            </button>
            <div class="row">
            <table class="table table-bordered" >
                <tr align="center">
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>RT</th>
                    <th>RW</th>
                    <th>Kel/desa</th>
                    <th>Status</th>
                    <th>Pekerjaan</th>
                    <th>Kewarganegaraan</th>
                    <th>No. KK</th>
                    <th colspan="2">Aksi</th>
                <tr>
                @foreach($data_penduduk as $penduduk)
                <tr>
                    <td>{{$penduduk->nik}}</td>
                    <td>{{$penduduk->nama}}</td>
                    <td>{{$penduduk->tempat}}</td>
                    <td>{{$penduduk->tl}}</td>
                    <td>{{$penduduk->jenis_kelamin}}</td>
                    <td>{{$penduduk->alamat}}</td>
                    <td>{{$penduduk->rt}}</td>
                    <td>{{$penduduk->rw}}</td>
                    <td>{{$penduduk->kel_desa}}</td>
                    <td>{{$penduduk->status}}</td>
                    <td>{{$penduduk->pekerjaan}}</td>
                    <td>{{$penduduk->kewarganegaraan}}</td>
                    <td>{{$penduduk->nkk}}</td>
                    <td><a href="/penduduk/{{$penduduk->id}}/edit" class="btn btn-warning btn-sm">edit</a></td>
                    <td><a href="/penduduk/{{$penduduk->id}}/delete" class="btn btn-danger btn-sm">hapus</a></td>
                <tr>
                @endforeach
            </table>
        </div>
    </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/penduduk/create" method="post" enctype="multipart/form-data" >
        {{csrf_field()}}
        <div class="form-group">
            <label><strong>NIK</strong></label>
            <input type="text" name="nik" class="form-control">
            <label><strong>Nama</strong></label>
            <input type="text" name="nama" class="form-control">
            <label><strong>Tempat Lahir</strong></label>
            <input type="text" name="tempat" class="form-control">
            <label><strong>Tanggal Lahir</strong></label>
            <input type="date" name="tl" class="form-control">
            <label><strong>Jenis Kelamin</strong></label>
            <select class="form-control" name="jenis_kelamin">
                <option>-- Pilih Salah Satu --</option>
                <option>Laki - Laki</option>
                <option>Perempuan</option>
            </select>
            <label><strong>Alamat</strong></label>
            <textarea name="alamat" class="form-control"></textarea>
            <label><strong>RT</strong></label>
            <input type="text" name="rt" class="form-control">
            <label><strong>RW</strong></label>
            <input type="text" name="rw" class="form-control">
            <label><strong>Kel/Desa</strong></label>
            <input type="text" name="kel_desa" class="form-control">
            <label><strong>Status</strong></label>
            <select class="form-control" name="status">
                <option>-- Pilih Salah Satu --</option>
                <option>Kawin</option>
                <option>Belum Kawin</option>
            </select>
            <label><strong>Pekerjaan</strong></label>
            <input type="text" name="pekerjaan" class="form-control">
            <label><strong>Kewarganegaraan</strong></label>
            <select class="form-control" name="kewarganegaraan">
                <option>-- Pilih Salah Satu --</option>
                <option>WNI</option>
                <option>WNA</option>
            </select>
            <label><strong>No. KK</strong></label>
            <input type="text" name="nkk" class="form-control">
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </form>
      </div>
      
      </div>
    </div>
  </div>
</div>
