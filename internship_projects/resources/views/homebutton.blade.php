@extends('/home')
@section('content')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"></h3>
                <div class="card-tools">
                 <a href="{{route ('diklat.create')}}" class="btn btn-tool">
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
                                <td class="text-center">{{ $diklats['id'] }}</td>
                                <td class="text-center">{{ $diklats['Nama_Diklat'] }}</td>
                                <td class="text-center">{{ $diklats['Jenis'] }}</td>
                                <td class="text-center">{{ $diklats['Penyelenggara'] }}</td>
                                <td class="text-center">{{ $diklats['Jumlah_Peserta'] }}</td>
                                <td class="text-center">{{ $diklats['Tanggal_Mulai'] }}</td>
                                <td class="text-center">{{ $diklats['Tanggal_Berakhir'] }}</td>
                                <td class="text-center">{{ $diklats['Durasi'] }}</td>
                                <td class="text-center">{{ $diklats['Tempat'] }}</td>
                                <td class="text-center">
                                    <form method="post" action="{{route ('diklat.destroy',['id' => $diklats->id]) }}">
                                        @method('delete')
                                        @csrf
                                        <div class="btn-group">
                                            <a class="btn btn-primary" href="#">Detail</a>
                                            <a class="btn btn-warning" href="{{route ('diklat.edit',['id' => $diklats->id]) }}">Edit</a>
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

@section('script')

<script>
  $('body').on('click','.delete-confirm',function (event) {
    event.preventDefault();
    const url = $(this).attr('href');

    Swal.fire({
      title: 'Apakah Kamu Yakin ? ',
      text: "Hapus Data ini!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Hapus'
    }).then((result) => {
      if (result.value) {
        window.location.href = url;
      }
    })
  });
</script>