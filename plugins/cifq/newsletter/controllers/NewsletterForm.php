<?php

namespace Cifq\Newsletter\Controllers;

use System\Models\File;
use Cms\Classes\CmsController;
use Illuminate\Support\Facades\Input;
use Cifq\Newsletter\Models\Newsletter as Model;

use Validator;

class NewsletterForm extends CmsController {

    public function __construct() {
        parent::__construct();
    }

    public function submit()
    {
      $newsletter = new Model(Input::all());
      $result = [
        'success' => true,
        'errors' => []
      ];

      // Model validation
      $validator = Validator::make(Input::all(), $newsletter->rules());

      if ($validator->fails()) {
        $result = [
          'success' => false,
          'errors' => $validator->errors()
        ];

        return response()->json($result);
      }

      // Save photo
      $photo = new File;
      $photo->data = Input::file('photo');
      $photo->is_public = true;
      $photo->save();
      $newsletter->photo()->add($photo);

      // Save model
      $newsletter->save();

      return response()->json($result);

    }

}
