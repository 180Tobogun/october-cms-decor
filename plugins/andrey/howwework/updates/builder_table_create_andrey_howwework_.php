<?php namespace Andrey\Howwework\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndreyHowwework extends Migration
{
    public function up()
    {
        Schema::create('andrey_howwework_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('step')->nullable();
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andrey_howwework_');
    }
}
