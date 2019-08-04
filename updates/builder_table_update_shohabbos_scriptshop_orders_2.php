<?php namespace Shohabbos\ScriptShop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShohabbosScriptshopOrders2 extends Migration
{
    public function up()
    {
        Schema::table('shohabbos_scriptshop_orders', function($table)
        {
            $table->integer('user_id');
        });
    }
    
    public function down()
    {
        Schema::table('shohabbos_scriptshop_orders', function($table)
        {
            $table->dropColumn('user_id');
        });
    }
}
