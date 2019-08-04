<?php namespace Shohabbos\ScriptShop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShohabbosScriptshopScripts extends Migration
{
    public function up()
    {
        Schema::rename('shohabbos_scriptshop_sripts', 'shohabbos_scriptshop_scripts');
    }
    
    public function down()
    {
        Schema::rename('shohabbos_scriptshop_scripts', 'shohabbos_scriptshop_sripts');
    }
}
