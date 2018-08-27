<?php namespace Cifq\Faq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCifqFaqQuestion extends Migration
{
    public function up()
    {
        Schema::create('cifq_faq_question', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('firstname', 100);
            $table->string('lastname', 100);
            $table->string('email', 200);
            $table->string('city', 100);
            $table->text('question');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cifq_faq_question');
    }
}
