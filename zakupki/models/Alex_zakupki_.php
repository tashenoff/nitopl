<?php namespace Alex\Zakupki\Models;

use Model;

/**
 * Model
 */
class Alex_zakupki_ extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'alex_zakupki_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
