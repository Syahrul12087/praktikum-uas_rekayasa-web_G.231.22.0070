<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makul extends Model
{
    use HasFactory;

    /**
     * Tabel yang direpresentasikan oleh model ini.
     */
    protected $table = 'makuls';

    /**
     * Atribut yang dapat diisi secara massal.
     */
    protected $fillable = ['kode_makul', 'name', 'sks'];

    /**
     * Contoh relasi: Makul diajar oleh banyak dosen.
     */
    public function dosens()
    {
        return $this->belongsToMany(Dosen::class);
    }

    /**
     * Contoh relasi: Makul diikuti oleh banyak mahasiswa.
     */
    public function mahasiswas()
    {
        return $this->belongsToMany(Mahasiswa::class);
    }
}