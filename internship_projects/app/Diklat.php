<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diklat extends Model
{
    //
    protected $fillable = ['Nama_Diklat','Jenis','Penyelenggara','Jumlah_Peserta','Tanggal_Mulai','Tanggal_Berakhir','Durasi','Tempat'];
    public $table = "diklat";
}
