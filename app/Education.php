<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'educations';
    protected $fillable = [
        'tahun', 'tingkat', 'nama_sekolah'
    ];
}
