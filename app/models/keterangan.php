<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class keterangan extends Model
{
    protected $table = 'tb_keterangan';
    protected $primaryKey = 'id_ket';
    protected $fillable = ['keterangan'];
    public function produk()
    {
        return $this->hasMany(dataTamu::class, 'id_ket', 'id_ket');
    }
}
