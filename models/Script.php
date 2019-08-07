<?php namespace Shohabbos\ScriptShop\Models;

use Model;
use OFFLINE\MicroCart\Models\CartItem;

/**
 * Model
 */
class Script extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    protected $jsonable = ['details'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'shohabbos_scriptshop_scripts';

    public $attachOne = [
        'poster' => 'System\Models\File',
        'file' => 'System\Models\File'
    ];

    public $attachMany = [
        'screenshots' => 'System\Models\File'
    ];

    public $hasMany = [
        'orders' => Order::class
    ];

    public $belongsTo = [
        'cartitem' => CartItem::class
    ];
    
}
