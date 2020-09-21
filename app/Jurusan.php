<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Jurusan extends Model
{
    use SoftDeletes;
    protected $fillable = ['nama_jurusan', 'prodi'];
}
