<?php namespace Shohabbos\ScriptShop;

use System\Classes\PluginBase;
use RainLab\User\Models\User;

class Plugin extends PluginBase
{

	public $require = [
        'Rainlab.User',
        'Offline.MicroCart',
    ];

    public function boot() {
    	User::extend(function($model) {
    		$model->hasMany['orders'] = ['Shohabbos\ScriptShop\Models\Order'];
    	});
    }


    public function registerNavigation()
    {
        return [
            'main-menu-item' => [
                'label'        => 'Script Carts', // Your label
                'url'          => \Backend::url('offline/microcart/carts'),
                'iconSvg'      => 'plugins/offline/microcart/assets/icon.svg',
            ],
            'itmkaer-menu-main' => [
                'label'       => 'shohabbos.scriptshop::lang.menu.main_title',
                'url'         => \Backend::url('shohabbos/scriptshop/scripts'),
                'icon'        => 'icon-life-ring',
                'sideMenu' => [
                    'scriptshop-menu-scrips' => [
                        'label'       => 'Scripts',
                        'icon'        => 'icon-github',
                        'url'         => \Backend::url('shohabbos/scriptshop/scripts'),
                    ],
                    'scriptshop-menu-orders' => [
                        'label'       => 'Orders',
                        'icon'        => 'icon-slack',
                        'url'         => \Backend::url('shohabbos/scriptshop/scripts'),
                    ],
                ]
            ]
        ];
    }

    public function registerComponents()
    {
        return [
            \Shohabbos\ScriptShop\Components\Cart::class => 'cart',
        ];
    }

}
