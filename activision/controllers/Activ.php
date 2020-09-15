<?php namespace Alex\Activision\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Activ extends Controller
{
    public $implement = [    ];
    
    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Alex.Activision', 'main-menu-item');
    }
}
