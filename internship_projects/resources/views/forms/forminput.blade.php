@extends('/home')
@section('content')
<a href="{{route ('homebutton')}}" class="nav-link">
    <p>Kembali</p>
  </a>
  @if (session('message'))
    <div class="alert alert-success" role="alert">
        {{ session('message') }}
     </div>
  @endif
    <form action="{{ route('diklat.store')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                <label for="Nama_Diklat" class="col-sm-2 control-label">Nama Diklat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="Nama_Diklat" placeholder="Nama Diklat" value="{{old ('Nama_Diklat')}}">
                                </div>
                                </div>
                                <div class="form-group">
                                <label for="Jenis" class="col-sm-2 control-label">Jenis</label>
                                <div class="col-sm-10">
                                    <select name="Jenis" class="form-control">
                                        <option value=""></option>
                                        @foreach($Jenis as $jenis)
                                        <option value="{{ $jenis }}" {{ (old ('Jenis') == $jenis ) ? 'selected' : '' }}>{{ $jenis }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                </div>
                                <div class="form-group">
                                <label for="Penyelenggara" class="col-sm-2 control-label">Penyelenggara</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="Penyelenggara" placeholder="Penyelenggara" value="{{old ('Penyelenggara')}}">
                                </div>
                                </div><div class="form-group">
                                <label for="Jumlah_Peserta" class="col-sm-2 control-label">Jumlah Peserta</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="Jumlah_Peserta" placeholder="Jumlah Peserta" value="{{old ('Jumlah_Peserta')}}">
                                </div>
                                </div><div class="form-group">
                                <label for="Tanggal_Mulai" class="col-sm-2 control-label">Tanggal Mulai</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="Tanggal_Mulai" placeholder="Tanggal Mulai" value="{{old ('Tanggal_Mulai')}}">
                                </div>
                                </div><div class="form-group">
                                <label for="Tanggal_Berakhir" class="col-sm-2 control-label">Tanggal Berakhir</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="Tanggal_Berakhir" placeholder="Tanggal Berakhir " value="{{old ('Tanggal_Berakhir')}}">
                                </div>
                                </div><div class="form-group">
                                <label for="Durasi" class="col-sm-2 control-label">Durasi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="Durasi" placeholder="Durasi" value="{{old ('Durasi')}}">
                                </div>
                                </div>
                                <div class="form-group">
                                <label for="Tempat" class="col-sm-2 control-label">Tempat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="Tempat" placeholder="Tempat" value="{{old ('Tempat')}}">
                                </div>
                                </div>
                            <button type="submit" class="btn-primary">Tambah</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection