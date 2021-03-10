<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    /**
     * @var string
     */
    protected $table = "photo";

    /**
     * @var array
     */
    protected $fillable = [
        'id', 'photoSalle', 'salle_id'
    ];

    /**
     * @var bool
     */
    public $incrementing = true;
    public $timestamps = false;
}
