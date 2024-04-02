<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    use HasFactory;
    public $table = 'performance';
    protected $fillable = [
    // 'kategori',
    'tahun',
    'bulan',
    'area',
    'foto',
    'target_rkap',
    'target_rkm',
    'ach'
    ];
}
