<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asset extends Model
{
    use SoftDeletes;
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'assets';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['asset_name', 'asset_description', 'balance_sheet_account', 'balance_sheet_account_description', 'asset_number', 'asset_subnumber', 'asset_class_number', 'asset_class', 'asset_cost_center_number', 'asset_cost_center', 'location_id', 'first_acquisition_period', 'capitalized_on', 'dep_start_date', 'planned_useful_life', 'apc_reporting_date_planned', 'ordinary_depreciation_reporting_date_posted', 'unplanned_depreciation_reporting_date_posted', 'netbook_value_reporting_date_planned', 'last_verification_date','image','remember_token'];

    

    /**
     * Change activity log event description
     *
     * @param string $eventName
     *
     * @return string
     */
    public function getDescriptionForEvent($eventName)
    {
        return __CLASS__ . " model has been {$eventName}";
    }
}
