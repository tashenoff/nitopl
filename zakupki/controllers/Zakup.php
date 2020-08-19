<?php namespace Alex\Zakupki\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Zakup extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController'    ];
    
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Alex.Zakupki', 'main-menu-item');
    }
}
