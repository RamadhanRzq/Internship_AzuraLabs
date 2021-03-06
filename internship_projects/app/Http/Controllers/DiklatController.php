<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Redirect;
use Session;
use App\Diklat;
use DB;

class DiklatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data['diklat']= Diklat :: all();
        $data = DB::select('select * from diklat where id = ?', [$id]);
        return view('homebutton',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['diklat']= Diklat :: all();
        $data['Jenis'] = ['Internal','Eksternal'];
        return view('forms/forminput',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nama_Diklat' => 'required',
            'Jenis' => 'required',
            'Penyelenggara' => 'required',
            'Jumlah_Peserta' => 'required',
            'Tanggal_Mulai' => 'required',
            'Tanggal_Berakhir' => 'required',
            'Durasi'=> 'required',
            'Tempat' => 'required',
        ]);

        DB::table('diklat')
                ->insert([
                    'Nama_Diklat' => $request->Nama_Diklat,
                    'Jenis' => $request->Jenis,
                    'Penyelenggara' => $request->Penyelenggara,
                    'Jumlah_Peserta' => $request->Jumlah_Peserta,
                    'Tanggal_Mulai' => $request->Tanggal_Mulai,
                    'Tanggal_Berakhir' => $request->Tanggal_Berakhir,
                    'Durasi'=> $request->Durasi,
                    'Tempat' => $request->Tempat,
                ]);

        return redirect(route('homebutton'))->with('message','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data['Jenis'] = ['Internal','Eksternal'];
        $data['diklat'] = Diklat::find($id);
        return view('homebutton',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'Nama_Diklat' => 'required',
            'Jenis' => 'required',
            'Penyelenggara' => 'required',
            'Jumlah_Peserta' => 'required',
            'Tanggal_Mulai' => 'required',
            'Tanggal_Berakhir' => 'required',
            'Durasi'=> 'required',
            'Tempat' => 'required',
        ]);

        DB::table('diklat')
        ->where('id', $id)
        ->update([
                    'Nama_Diklat' => $request->Nama_Diklat,
                    'Jenis' => $request->Jenis,
                    'Penyelenggara' => $request->Penyelenggara,
                    'Jumlah_Peserta' => $request->Jumlah_Peserta,
                    'Tanggal_Mulai' => $request->Tanggal_Mulai,
                    'Tanggal_Berakhir' => $request->Tanggal_Berakhir,
                    'Durasi'=> $request->Durasi,
                    'Tempat' => $request->Tempat,
                ]);


        return redirect(route('homebutton'))->with('message','Data Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $diklat = Diklat::find($id);
        $diklat->delete();

        return redirect(route('homebutton'))->with('message','Data Berhasil Dihapus');
    }
}
