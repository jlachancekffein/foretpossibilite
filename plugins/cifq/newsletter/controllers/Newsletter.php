<?php

namespace Cifq\Newsletter\Controllers;

use System\Models\File;
use Backend\Classes\Controller;

class Newsletter extends Controller {

    public $implement = [
      'Backend\Behaviors\ListController',
      'Backend\Behaviors\ImportExportController'
    ];
    public $listConfig = 'config_list.yaml';

    public $importExportConfig = 'config_export.yaml';

    public function __construct()
    {
        parent::__construct();
    }

}
