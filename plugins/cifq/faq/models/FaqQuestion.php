<?php namespace Cifq\Faq\Models;

use Model;

/**
 * Model
 */
class FaqQuestion extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'cifq_faq_question';
}