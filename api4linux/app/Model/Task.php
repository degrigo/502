<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use SoftDeletes;

    protected $fillable = [
    	'id', 'status', 'descricao', 'usuario_id'
    ];

    public function user()
    {
    	return $this->belongsTo('App\Model\User');
    }

}
