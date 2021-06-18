@extends('/home')
@section('content')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"></h3>
                <div class="card-tools">
                 <a href="{{route ('input')}}" class="btn btn-tool">
                     <i class="fa fa-plus"></i>
                     &nbsp; Tambahkan Data
                 </a>
             </div>
         </div>
         <div class="card-body">
            @if (Session::has('message'))
            <div id="alert-msg" class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ Session::get('message') }}
            </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama Diklat</th>
                                <th>Jenis</th>
                                <th>Penyelenggara</th>
                                <th>Jumlah Peserta</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Berakhir</th>
                                <th>Durasi</th>
                                <th>Tempat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($diklat as $diklats)
                            <tr>
                                <td>{{ $diklats['id'] }}</td>
                                <td>{{ $diklats['Nama_Diklat'] }}</td>
                                <td>{{ $diklats['Jenis'] }}</td>
                                <td>{{ $diklats['Penyelenggara'] }}</td>
                                <td>{{ $diklats['Jumlah_Peserta'] }}</td>
                                <td>{{ $diklats['Tanggal_Mulai'] }}</td>
                                <td>{{ $diklats['Tanggal_Berakhir'] }}</td>
                                <td>{{ $diklats['Durasi'] }}</td>
                                <td>{{ $diklats['Tempat'] }}</td>
                                <td class="text-center">
                                    <form method="#" action="#">
                                        @method('delete')
                                        @csrf
                                        <div class="btn-group">
                                            <a class="btn btn-success" href="#">Edit</a>
                                            <button type="#" class="btn btn-danger">Delete</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
  @endsection