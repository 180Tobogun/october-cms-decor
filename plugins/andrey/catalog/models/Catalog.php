<?php namespace Andrey\Catalog\Models;

use Model;

/**
 * Model
 */
class Catalog extends Model
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
    public $table = 'andrey_catalog_';


    /*
     * Relations
     */
    public $belongsToMany = [

        'categorys' => [
            'andrey\catalog\models\category',
            'table' => 'andrey_catalog_catalog_categorys',
            'order' => 'category_name'

        ]

    ];


    public $attachOne = [

        'poster' => 'System\Models\File'
    ];

    public $attachMany = [

        'gallery_one' => 'System\Models\File'
    ];
}
