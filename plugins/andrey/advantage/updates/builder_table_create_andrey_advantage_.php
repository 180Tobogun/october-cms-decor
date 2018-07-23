<?php namespace Andrey\Advantage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndreyAdvantage extends Migration
{
    public function up()
    {
        Schema::create('andrey_advantage_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andrey_advantage_');
    }
}
