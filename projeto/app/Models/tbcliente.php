<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbcliente extends Model
{
    use HasFactory;

    protected $table ='tbcontato';
    protected $fillable = ['codContato','nomeContato','emailContato','numeroContato','escolhaContato','comentarioContato'];
    public $timestamps = false;


}
