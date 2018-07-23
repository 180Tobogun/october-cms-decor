<?php namespace Andrey\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndreyServices extends Migration
{
    public function up()
    {
        Schema::table('andrey_services_', function($table)
        {
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('andrey_services_', function($table)
        {
            $table->dropColumn('name');
            $table->dropColumn('description');
            $table->dropColumn('slug');
        });
    }
}
