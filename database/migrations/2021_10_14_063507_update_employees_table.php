<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employees', function (Blueprint $t) {
            //adding new column
            $t->string('designation')->nullable()->after('email');

            //change an existing column
            $t->integer('family_member')->nullable()->change();

            //renaming column
            $t->renameColumn('name', 'username');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employees', function (Blueprint $t) {
            //dropping new column
            $t->dropColumn('designation');

            //redo an existing column
            $t->string('family_member')->nullable(false)->change();

            //redo renaming column
            $t->renameColumn('username', 'name');
        });
    }
}
