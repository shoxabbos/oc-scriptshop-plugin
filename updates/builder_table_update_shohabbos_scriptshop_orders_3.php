<?php namespace Shohabbos\ScriptShop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShohabbosScriptshopOrders3 extends Migration
{
    public function up()
    {
        Schema::table('shohabbos_scriptshop_orders', function($table)
        {
            $table->boolean('is_paid')->nullable()->unsigned(false)->default(0)->change();
        });
    }
    
    public function down()
    {
        Schema::table('shohabbos_scriptshop_orders', function($table)
        {
            $table->smallInteger('is_paid')->nullable(false)->unsigned(false)->default(0)->change();
        });
    }
}
