<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('asset_name')->nullable();
            $table->text('asset_description')->nullable();
            $table->string('balance_sheet_account')->nullable();
            $table->string('balance_sheet_account_description')->nullable();
            $table->string('asset_number')->nullable();
            $table->string('asset_subnumber')->nullable();
            $table->string('asset_class_number')->nullable();
            $table->string('asset_class')->nullable();
            $table->string('asset_cost_center_number')->nullable();
            $table->string('asset_cost_center')->nullable();
            $table->integer('location_id')->nullable();
            $table->integer('first_acquisition_period')->nullable();
            $table->date('capitalized_on')->nullable();
            $table->date('dep_start_date')->nullable();
            $table->integer('planned_useful_life')->nullable();
            $table->integer('apc_reporting_date_planned')->nullable();
            $table->integer('ordinary_depreciation_reporting_date_posted')->nullable();
            $table->integer('unplanned_depreciation_reporting_date_posted')->nullable();
            $table->integer('netbook_value_reporting_date_planned')->nullable();
            $table->date('last_verification_date')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('assets');
    }
}
