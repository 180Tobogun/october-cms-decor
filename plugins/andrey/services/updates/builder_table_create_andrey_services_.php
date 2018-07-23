<?php namespace Andrey\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndreyServices extends Migration
{
    public function up()
    {
        Schema::create('andrey_services_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andrey_services_');
    }
}
