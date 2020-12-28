<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ligue extends Model
{
    /**
     * @var string
     */
    protected $table = "ligue";

    /**
     * @var array
     */
    protected $fillable = [
      'id', 'motDePasse', 'login', 'libelle', 'nbEmployes', 'nbMembres', 'activation', 'token'
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'motDePasse'
    ];

    /**
     * @var bool
     */
    public $incrementing = true;
    public $timestamps = false;

    /**
     * @return mixed|string
     */
    public function generate_api_token() {
        $this->token = Utils::random_string();
        $this->save();
        return $this->token;
    }
}
