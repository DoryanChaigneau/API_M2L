<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * @var string
     *
     */
    protected $table = 'role';

    /**
     * @var array
     */
    protected $fillable = [
        'id', 'libelle'
    ];

    /**
     * @var bool
     */
    public $incrementing = true;
    public $timestamps = false;
}
