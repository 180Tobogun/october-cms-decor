<?php namespace Andrey\Advantage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndreyAdvantage2 extends Migration
{
    public function up()
    {
        Schema::table('andrey_advantage_', function($table)
        {
            $table->integer('pos')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('andrey_advantage_', function($table)
        {
            $table->dropColumn('pos');
        });
    }
}
