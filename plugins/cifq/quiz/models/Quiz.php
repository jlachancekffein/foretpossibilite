<?php namespace Cifq\Quiz\Models;

use Model;

/**
 * Model
 */
class Quiz extends Model
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
    public $table = 'cifq_quiz_results';
}