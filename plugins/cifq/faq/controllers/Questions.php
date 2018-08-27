<?php namespace Cifq\Faq\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Questions extends Controller
{
    public $implement = ['Backend\Behaviors\ListController'];

    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Cifq.Faq', 'menu-faq-questions');
    }
}
