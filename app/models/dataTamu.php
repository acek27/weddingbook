<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class dataTamu extends Model
{
    protected $table = 'tb_tamu';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['nama_tamu', 'alamat', 'uang', 'beras', 'gula', 'lain', 'id_ket', 'id_user'];

    public function keterangan()
    {
        return $this->belongsTo('App\models\keterangan', 'id_ket', 'id_ket');
    }

    public function user()
    {
        return $this->belongsTo('App\user', 'id_user', 'id');
    }

}
