<?php

namespace Cifq\Newsletter\Controllers;

use System\Models\File;
use Cms\Classes\CmsController;
use Illuminate\Support\Facades\Input;
use Cifq\Newsletter\Models\Newsletter as Model;

class NewsletterForm extends CmsController {

    public function __construct() {
        parent::__construct();
    }

    public function submit()
    {
      $newsletter = new Model(Input::all());

      $photo = new File;
      $photo->data = Input::file('photo');
      $photo->is_public = true;
      $photo->save();

      $newsletter->photo()->add($photo);
      $newsletter->save();
    }

}
