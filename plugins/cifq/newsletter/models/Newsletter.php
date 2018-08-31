<?php namespace Cifq\Newsletter\Models;

use Model;

use System\Models\File;
use October\Rain\Database\Traits\Validation;

class Newsletter extends Model
{
    use Validation;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cifq_newsletter_contacts';

    private $lastname;
    private $firstname;
    private $organisation;
    private $job;
    private $testimonials;
    private $email;

    protected $fillable = [
      'lastname',
      'firstname',
      'organisation',
      'job',
      'testimonials',
      'email'
    ];

    public $attachOne = [
        'photo' => 'System\Models\File'
    ];

    public $rules = [
        'lastname' => 'required',
        'firstname' => 'required',
        'testimonials' => 'required',
        'email' => 'required',
        'photo'   => 'required'
    ];
}
