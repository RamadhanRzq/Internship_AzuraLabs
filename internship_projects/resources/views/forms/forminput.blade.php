@extends('/home')
@section('content')
<a href="{{route ('homebutton')}}" class="nav-link">
    <p>Kembali</p>
  </a>
<form action="#" method="post" enctype="multipart/form-data">
    <form class="form-horizontal">
        <div class="form-group">
          <label for="NamaDiklat" class="col-sm-2 control-label">Nama Diklat</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="NamaDiklat" placeholder="Nama Diklat">
          </div>
        </div>
        <div class="form-group">
          <label for="Jenis" class="col-sm-2 control-label">Jenis</label>
          <div class="col-sm-10">
            <select name="jenis" class="form-control">
                <option value="Internal">Internal</option>
                <option value="Eksternal">Eksternal</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="Penyelenggara" class="col-sm-2 control-label">Penyelenggara</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="Penyelenggara" placeholder="Penyelenggara">
          </div>
        </div><div class="form-group">
          <label for="Jumlah_Peserta" class="col-sm-2 control-label">Jumlah Peserta</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="Jumlah_Peserta" placeholder="Jumlah Peserta">
          </div>
        </div><div class="form-group">
          <label for="Tanggal_Mulai" class="col-sm-2 control-label">Tanggal Mulai</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" id="TM" placeholder="Tanggal Mulai">
          </div>
        </div><div class="form-group">
          <label for="Tanggal_Berakhir" class="col-sm-2 control-label">Tanggal Berakhir</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" id="Tanggal_Berakhir" placeholder="Tanggal Berakhir">
          </div>
        </div><div class="form-group">
          <label for="Durasi" class="col-sm-2 control-label">Durasi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="Durasi" placeholder="Durasi">
          </div>
        </div><div class="form-group">
          <label for="Tempat" class="col-sm-2 control-label">Tempat</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="Tempat" placeholder="Tempat">
          </div>
    </form>

    <div class="col-sm-12">
    <button type="submit" class="btn-primary">Tambah</button>
    </div>
@endsection