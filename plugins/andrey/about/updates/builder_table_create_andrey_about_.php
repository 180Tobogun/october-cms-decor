<?php namespace Andrey\About\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndreyAbout extends Migration
{
    public function up()
    {
        Schema::create('andrey_about_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('pos')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andrey_about_');
    }
}
