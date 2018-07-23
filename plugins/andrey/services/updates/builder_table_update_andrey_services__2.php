<?php namespace Andrey\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndreyServices2 extends Migration
{
    public function up()
    {
        Schema::table('andrey_services_', function($table)
        {
            $table->integer('pos')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('andrey_services_', function($table)
        {
            $table->dropColumn('pos');
        });
    }
}
