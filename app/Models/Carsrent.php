<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Haruncpi\LaravelIdGenerator\IdGenerator;

// CREATED WITH ❤︎ Reezky
// http://itsreezky.my.id

// Class for connect to table mobil

class Carsrent extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'carsrent';
    protected $primaryKey = 'id';
    protected $fillable = [
        'rent_id',
        'kode_mobil',
        'uuid_penyewa',
        'penyewa',
        'pemilik',
        'tanggal_rent',
        'akhir_rent',
        'lama_sewa',
        'tarif_rent',
        'total_rent',
        'bukti_pembayaran',
        'status',
    ];

    public static function boot()
{
    parent::boot();
    self::creating(function ($model) {
        $model->rent_id = IdGenerator::generate(['table' => 'carsrent', 'field' => 'rent_id', 'length' => 10, 'prefix' => 'RAC-']);
    });
}

}
