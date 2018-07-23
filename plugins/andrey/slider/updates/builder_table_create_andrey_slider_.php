<?php namespace Andrey\Slider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndreySlider extends Migration
{
    public function up()
    {
        Schema::create('andrey_slider_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andrey_slider_');
    }
}
