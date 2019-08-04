<?php namespace Shohabbos\ScriptShop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShohabbosScriptshopOrders extends Migration
{
    public function up()
    {
        Schema::table('shohabbos_scriptshop_orders', function($table)
        {
            $table->smallInteger('is_paid')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('shohabbos_scriptshop_orders', function($table)
        {
            $table->dropColumn('is_paid');
        });
    }
}
