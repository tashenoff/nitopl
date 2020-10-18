<?php namespace Alex\Osms\Models;

use Model;

/**
 * Model
 */
class Osms extends Model
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
    public $table = 'alex_osms_';
    public $attachOne = [
        'photo' => 'System\Models\File'

    ];
    protected $jsonable = ['links'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
