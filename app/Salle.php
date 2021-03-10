<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    /**
     * @var string
     */
    protected $table = "salle";

    /**
     * @var array
     */
    protected $fillable = [
        'id', 'libelle', 'nbPlaces', 'digicode', 'dimension', 'description', 'adresse', 'photo_id'
    ];

    /**
     * @var bool
     */
    public $incrementing = true;
    public $timestamps = false;

    /**
     * @return Model|\Illuminate\Database\Eloquent\Relations\BelongsTo|object|null
     */
    public function photo()
    {
        return $this->belongsTo(Photo::class,'photo_id')->first();
    }
}
