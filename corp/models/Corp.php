<?php namespace Alex\Corp\Models;

use Model;

/**
 * Model
 */
class Corp extends Model
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
    public $table = 'alex_corp_';
    protected $jsonable = ['links'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
