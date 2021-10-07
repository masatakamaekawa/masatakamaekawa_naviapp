<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRecruitomentIdToRecruitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recruits', function (Blueprint $table) {
            $table->integer('recruitoment_id')            
                ->after('recruitoment')                    
                ->unsigned()                          
                ->default(3);                           
            $table->foreign('recruitoment_id')              
                ->references('id')->on('recruitoments')    
                ->onDelete('restrict');                 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recruits', function (Blueprint $table) {
            $table->dropForeign('recruits_recruitoment_id_foreign'); 
            $table->dropColumn('recruitoment_id'); 
        });
    }
}
