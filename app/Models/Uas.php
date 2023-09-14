<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uas extends Model
{
    use HasFactory;
    protected $table = '21312073_riskaoktafia';
    protected $fillable = ['npm', 'nama', 'alamat'];
}