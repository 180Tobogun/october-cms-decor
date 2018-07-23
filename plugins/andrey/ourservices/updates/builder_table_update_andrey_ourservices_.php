<?php namespace Andrey\Ourservices\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndreyOurservices extends Migration
{
    public function up()
    {
        Schema::table('andrey_ourservices_', function($table)
        {
            $table->integer('pos')->nullable();
            $table->string('name')->change();
        });
    }
    
    public function down()
    {
        Schema::table('andrey_ourservices_', function($table)
        {
            $table->dropColumn('pos');
            $table->string('name', 191)->change();
        });
    }
}
