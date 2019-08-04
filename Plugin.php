<?php namespace Shohabbos\ScriptShop;

use System\Classes\PluginBase;
use RainLab\User\Models\User;

class Plugin extends PluginBase
{

	public $require = [
        'Rainlab.User'
    ];

    public function boot() {
    	
    	User::extend(function() {
    		$model->hasOne['profile'] = ['Shohabbos\ScriptShop\Models\Order'];
    	});


    }

}
