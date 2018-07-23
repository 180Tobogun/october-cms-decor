<?php namespace Andrey\Slider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndreySlider2 extends Migration
{
    public function up()
    {
        Schema::table('andrey_slider_', function($table)
        {
            $table->string('name')->nullable()->change();
            $table->text('description')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('andrey_slider_', function($table)
        {
            $table->string('name', 191)->nullable(false)->change();
            $table->text('description')->nullable(false)->change();
        });
    }
}
