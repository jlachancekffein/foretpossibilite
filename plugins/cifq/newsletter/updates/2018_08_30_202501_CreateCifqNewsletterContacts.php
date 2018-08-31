<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCifqNewsletterContacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('cifq_newsletter_contacts', function($table)
      {
          $table->engine = 'InnoDB';
          $table->increments('id');
          $table->string('lastname', 255);
          $table->string('firstname', 255);
          $table->string('organisation', 255);
          $table->string('job', 255);
          $table->text('testimonials');
          $table->string('email', 255);
          $table->timestamp('created_at')->nullable();
          $table->timestamp('updated_at')->nullable();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cifq_newsletter_contacts');
    }
}
