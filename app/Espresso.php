<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Espresso extends Model
{
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'espressos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'taste', 'crema', 'source', 'origin'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}