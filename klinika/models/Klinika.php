<?php namespace Alex\Klinika\Models;

use Model;

/**
 * Model
 */
class Klinika extends Model
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
    public $table = 'alex_klinika_';
    public $attachOne = [
        'photo' => 'System\Models\file'

    ];
  
    protected $jsonable = ['persona'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
