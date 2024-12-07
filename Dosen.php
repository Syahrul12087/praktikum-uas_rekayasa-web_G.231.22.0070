<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    /**
     * Tabel yang direpresentasikan oleh model ini.
     */
    protected $table = 'dosens';

    /**
     * Atribut yang dapat diisi secara massal.
     */
    protected $fillable = ['nidn', 'name', 'fakultas'];

    /**
     * Contoh relasi: Dosen memiliki banyak mahasiswa (opsional).
     */
    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class);
    }

    /**
     * Contoh relasi: Dosen mengajar banyak makul.
     */
    public function matkuls()
    {
        return $this->belongsToMany(Makul::class);
    }
}