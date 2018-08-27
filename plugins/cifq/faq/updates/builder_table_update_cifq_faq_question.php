<?php namespace Cifq\Faq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCifqFaqQuestion extends Migration
{
    public function up()
    {
        Schema::table('cifq_faq_question', function($table)
        {
            $table->increments('id')->change();
        });
    }

    public function down()
    {
        Schema::table('cifq_faq_question', function($table)
        {
            $table->integer('id')->change();
        });
    }
}
