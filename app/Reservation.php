<?php

namespace App;

use App\Http\Controllers\LigueController;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    /**
     * @var string
     */
    protected $table = "reservation";

    /**
     * @var array
     */
    protected $fillable = [
        'id', 'date', 'heureDebut', 'heureFin', 'salle_id', 'ligue_id'
    ];

    /**
     * @var bool
     */
    public $incrementing = true;
    public $timestamps = false;

    public function salle()
    {
        return $this->belongsTo(Salle::class,'salle_id')->first();
    }

    public function ligue()
    {
        return $this->belongsTo(Ligue::class,'ligue_id')->first();
    }
}
