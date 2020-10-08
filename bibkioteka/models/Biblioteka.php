<?php namespace Alex\Bibkioteka\Models;

use Model;

/**
 * Model
 */
class Biblioteka extends Model
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
    public $table = 'alex_bibkioteka_';
    protected $jsonable = ['links'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
