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
                    <form action="/penduduk/{{$penduduk->id}}/update" method="post" enctype="multipart/form-data" >
                        {{csrf_field()}}
                        <div class="form-group">
                            <label><strong>NIK</strong></label>
                            <input type="text" name="nik" class="form-control" value="{{$penduduk->nik}}">
                            <label><strong>Nama</strong></label>
                            <input type="text" name="nama" class="form-control" value="{{$penduduk->nama}}">
                            <label><strong>Tempat Lahir</strong></label>
                            <input type="text" name="tempat" class="form-control" value="{{$penduduk->tempat}}">
                            <label><strong>Tanggal Lahir</strong></label>
                            <input type="date" name="tl" class="form-control" value="{{$penduduk->tl}}">
                            <label><strong>Jenis Kelamin</strong></label>
                            <select class="form-control" name="jenis_kelamin">
                                <option value="Laki - Laki" @if($penduduk->jenis_kelamin == 'Laki - Laki') selected @endif>Laki - Laki</option>
                                <option value="Perempuan" @if($penduduk->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                            </select>
                            <label><strong>Alamat</strong></label>
                            <textarea name="alamat" class="form-control">{{$penduduk->alamat}}</textarea>
                            <label><strong>RT</strong></label>
                            <input type="text" name="rt" class="form-control" value="{{$penduduk->rt}}">
                            <label><strong>RW</strong></label>
                            <input type="text" name="rw" class="form-control" value="{{$penduduk->rw}}">
                            <label><strong>Kel/Desa</strong></label>
                            <input type="text" name="kel_desa" class="form-control" value="{{$penduduk->kel_desa}}">
                            <label><strong>Status</strong></label>
                            <select class="form-control" name="status">
                                <option value="Kawin" @if($penduduk->status == 'Kawin') selected @endif>Kawin</option>
                                <option value="Belum Kawin" @if($penduduk->status == 'Belum Kawin') selected @endif>Belum Kawin</option>
                            </select>
                            <label><strong>Pekerjaan</strong></label>
                            <input type="text" name="pekerjaan" class="form-control" value="{{$penduduk->pekerjaan}}">
                            <label><strong>Kewarganegaraan</strong></label>
                            <select class="form-control" name="kewarganegaraan">
                                <option value="WNI" @if($penduduk->kewarganegaraan == 'WNI') selected @endif>WNI</option>
                                <option value="WNA" @if($penduduk->kewarganegaraan == 'WNA') selected @endif>WNA</option>
                            </select>
                            <label><strong>No. KK</strong></label>
                            <input type="text" name="nkk" class="form-control" value="{{$penduduk->nkk}}">
                        </div>
                        <div class="modal-footer">
                        <a href="/penduduk" class="btn btn-danger btn-sm">Back</a>
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