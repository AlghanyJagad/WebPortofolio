<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $table = 'profils';
    protected $fillable = [
        'nama_lengkap', 'nama', 'lokasi', 'no_hp', 'deskripsi', 'email', 'tgl_lahir'
    ];
}
