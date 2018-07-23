<?php namespace Andrey\Slider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndreySlider extends Migration
{
    public function up()
    {
        Schema::table('andrey_slider_', function($table)
        {
            $table->string('name');
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::table('andrey_slider_', function($table)
        {
            $table->dropColumn('name');
            $table->dropColumn('description');
        });
    }
}
