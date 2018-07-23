<?php namespace Andrey\Advantage\Models;

use Model;

/**
 * Model
 */
class Advantage extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'andrey_advantage_';



    public $attachOne = [

        'image' => 'System\Models\File'
    ];

    public $attachMany = [

        'gallery_one' => 'System\Models\File'
    ];
}
