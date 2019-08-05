<?php namespace Shohabbos\ScriptShop;

use System\Classes\PluginBase;
use RainLab\User\Models\User;

class Plugin extends PluginBase
{

	public $require = [
        'Rainlab.User'
    ];

    public function boot() {
    	
    	User::extend(function($model) {
    		$model->hasMany['orders'] = ['Shohabbos\ScriptShop\Models\Order'];
    	});


    }

}
