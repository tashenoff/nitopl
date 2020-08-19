<?php namespace Alex\Zakupki\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Zakupki extends Controller
{
    public $implement = [    ];
    
    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Alex.Zakupki', 'main-menu-item');
    }
}
