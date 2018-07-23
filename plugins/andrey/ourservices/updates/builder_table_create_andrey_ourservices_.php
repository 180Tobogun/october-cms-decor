<?php namespace Andrey\Ourservices\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndreyOurservices extends Migration
{
    public function up()
    {
        Schema::create('andrey_ourservices_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andrey_ourservices_');
    }
}
