<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use SoftDeletes;

    protected $fillable = [
    	'id', 'status', 'descricao', 'usuario_id'
    ];

}
