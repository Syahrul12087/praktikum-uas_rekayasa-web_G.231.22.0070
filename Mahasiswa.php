<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    /**
     * Tabel yang direpresentasikan oleh model ini.
     */
    protected $table = 'mahasiswas';

    /**
     * Atribut yang dapat diisi secara massal.
     */
    protected $fillable = ['nim', 'nama', 'jurusan'];

    /**
     * Contoh relasi: Mahasiswa memiliki banyak matkul.
     */
    public function makuls()
    {
        return $this->belongsToMany(Makul::class);
    }
}