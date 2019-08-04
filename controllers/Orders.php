<?php namespace Shohabbos\ScriptShop\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Orders extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController'    ];
    
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Shohabbos.ScriptShop', 'itmkaer-menu-main', 'scriptshop-menu-orders');
    }
}
