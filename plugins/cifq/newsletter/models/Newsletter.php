<?php namespace Cifq\Newsletter\Models;


use System\Models\File;
use Model;

class Newsletter extends Model
{

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
    private $subscribed;


    protected $fillable = [
      'lastname',
      'firstname',
      'organisation',
      'job',
      'testimonials',
      'email',
      'subscribed',
      'photo'
    ];

    public $attachOne = [
        'photo' => 'System\Models\File'
    ];

    // Validation rule
    public function rules()
    {
      return [
          'lastname' => 'required',
          'firstname' => 'required',
          'organisation' => 'required',
          'job' => 'required',
          'email' => 'required|email'
      ];
    }
}
