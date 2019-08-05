<?php namespace Shohabbos\ScriptShop\Models;

use Model;

/**
 * Model
 */
class Order extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'shohabbos_scriptshop_orders';

    public $belongsTo = [
        'user' => 'RainLab\User\Models\User',
        'script' => Script::class,
    ];
    
    protected $guarded = ['id'];
}
