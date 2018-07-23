<?php namespace Andrey\Advantage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndreyAdvantage extends Migration
{
    public function up()
    {
        Schema::table('andrey_advantage_', function($table)
        {
            $table->string('name')->change();
        });
    }
    
    public function down()
    {
        Schema::table('andrey_advantage_', function($table)
        {
            $table->string('name', 191)->change();
        });
    }
}
