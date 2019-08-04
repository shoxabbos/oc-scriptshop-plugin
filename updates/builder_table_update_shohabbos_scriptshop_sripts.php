<?php namespace Shohabbos\ScriptShop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShohabbosScriptshopSripts extends Migration
{
    public function up()
    {
        Schema::rename('shohabbos_scriptshop_store_items', 'shohabbos_scriptshop_sripts');
    }
    
    public function down()
    {
        Schema::rename('shohabbos_scriptshop_sripts', 'shohabbos_scriptshop_store_items');
    }
}
