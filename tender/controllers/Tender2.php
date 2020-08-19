<?php namespace Alex\Tender\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Tender2 extends Controller
{
    public $implement = [    ];
    
    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Alex.Tender', 'main-menu-item');
    }
}
