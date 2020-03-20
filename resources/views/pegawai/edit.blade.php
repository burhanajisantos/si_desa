<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
    <div class="container-fluid">
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
            <h4 align="center"> Edit Data Penduduk</h4>
            <br><br>
            <div class="row">
                <div class="col-lg-12">
                    <form action="/pegawai/{{$pegawai->id}}/update" method="post" enctype="multipart/form-data" >
                        {{csrf_field()}}
                        <div class="form-group">
                            <label><strong>NIK</strong></label>
                            <input type="text" name="nip" class="form-control" value="{{$pegawai->nip}}">
                            <label><strong>Nama</strong></label>
                            <input type="text" name="nama" class="form-control" value="{{$pegawai->nama}}">
                            <label><strong>Tempat Lahir</strong></label>
                            <input type="text" name="tempat" class="form-control" value="{{$pegawai->tempat}}">
                            <label><strong>Tanggal Lahir</strong></label>
                            <input type="date" name="tl" class="form-control" value="{{$pegawai->tl}}">
                            <label><strong>Jenis Kelamin</strong></label>
                            <select class="form-control" name="jenis_kelamin">
                                <option value="Laki - Laki" @if($pegawai->jenis_kelamin == 'Laki - Laki') selected @endif>Laki - Laki</option>
                                <option value="Perempuan" @if($pegawai->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                            </select>
                            <label><strong>Alamat</strong></label>
                            <textarea name="alamat" class="form-control">{{$pegawai->alamat}}</textarea>
                            <label><strong>Jabatan</strong></label>
                            <input type="text" name="jabatan" class="form-control" value="{{$pegawai->jabatan}}">
                        </div>
                        <div class="modal-footer">
                        <a href="/pegawai" class="btn btn-danger btn-sm">Back</a>
                        <button type="submit" class="btn btn-success btn-sm">Update</button>
                    </form>
                </div>
            </div>
    </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>