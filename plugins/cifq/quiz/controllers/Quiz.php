<?php namespace Cifq\Quiz\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Quiz extends Controller
{
    public $implement = ['Backend\Behaviors\ListController'];
    
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Cifq.Quiz', 'main-menu-item');
    }
}