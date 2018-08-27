<?php namespace Cifq\Quiz\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCifqQuizResults extends Migration
{
    public function up()
    {
        Schema::create('cifq_quiz_results', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 255);
            $table->string('result', 500);
            $table->string('score', 12);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cifq_quiz_results');
    }
}
