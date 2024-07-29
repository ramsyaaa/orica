<div class="form-group{{ $errors->has('asset_name') ? 'has-error' : ''}}">
    {!! Form::label('asset_name', 'Asset Name', ['class' => 'control-label']) !!}
    {!! Form::text('asset_name', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('asset_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('asset_description') ? 'has-error' : ''}}">
    {!! Form::label('asset_description', 'Asset Description', ['class' => 'control-label']) !!}
    {!! Form::textarea('asset_description', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('asset_description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('balance_sheet_account') ? 'has-error' : ''}}">
    {!! Form::label('balance_sheet_account', 'Balance Sheet Account', ['class' => 'control-label']) !!}
    {!! Form::text('balance_sheet_account', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('balance_sheet_account', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('balance_sheet_account_description') ? 'has-error' : ''}}">
    {!! Form::label('balance_sheet_account_description', 'Balance Sheet Account Description', ['class' => 'control-label']) !!}
    {!! Form::text('balance_sheet_account_description', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('balance_sheet_account_description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('asset_number') ? 'has-error' : ''}}">
    {!! Form::label('asset_number', 'Asset Number', ['class' => 'control-label']) !!}
    {!! Form::text('asset_number', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('asset_number', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('asset_subnumber') ? 'has-error' : ''}}">
    {!! Form::label('asset_subnumber', 'Asset Subnumber', ['class' => 'control-label']) !!}
    {!! Form::text('asset_subnumber', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('asset_subnumber', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('asset_class_number') ? 'has-error' : ''}}">
    {!! Form::label('asset_class_number', 'Asset Class Number', ['class' => 'control-label']) !!}
    {!! Form::text('asset_class_number', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('asset_class_number', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('asset_class') ? 'has-error' : ''}}">
    {!! Form::label('asset_class', 'Asset Class', ['class' => 'control-label']) !!}
    {!! Form::text('asset_class', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('asset_class', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('asset_cost_center_number') ? 'has-error' : ''}}">
    {!! Form::label('asset_cost_center_number', 'Asset Cost Center Number', ['class' => 'control-label']) !!}
    {!! Form::text('asset_cost_center_number', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('asset_cost_center_number', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('asset_cost_center') ? 'has-error' : ''}}">
    {!! Form::label('asset_cost_center', 'Asset Cost Center', ['class' => 'control-label']) !!}
    {!! Form::text('asset_cost_center', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('asset_cost_center', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('location_id') ? 'has-error' : ''}}">
    {!! Form::label('location_id', 'Location', ['class' => 'control-label']) !!}
    {!! Form::select('location_id', $location, null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('location_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('first_acquisition_period') ? 'has-error' : ''}}">
    {!! Form::label('first_acquisition_period', 'First Acquisition Period', ['class' => 'control-label']) !!}
    {!! Form::number('first_acquisition_period', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('first_acquisition_period', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('capitalized_on') ? 'has-error' : ''}}">
    {!! Form::label('capitalized_on', 'Capitalized On', ['class' => 'control-label']) !!}
    {!! Form::date('capitalized_on', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('capitalized_on', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('dep_start_date') ? 'has-error' : ''}}">
    {!! Form::label('dep_start_date', 'Dep Start Date', ['class' => 'control-label']) !!}
    {!! Form::date('dep_start_date', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('dep_start_date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('planned_useful_life') ? 'has-error' : ''}}">
    {!! Form::label('planned_useful_life', 'Planned Useful Life', ['class' => 'control-label']) !!}
    {!! Form::number('planned_useful_life', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('planned_useful_life', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('apc_reporting_date_planned') ? 'has-error' : ''}}">
    {!! Form::label('apc_reporting_date_planned', 'Apc Reporting Date Planned', ['class' => 'control-label']) !!}
    {!! Form::number('apc_reporting_date_planned', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('apc_reporting_date_planned', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('ordinary_depreciation_reporting_date_posted') ? 'has-error' : ''}}">
    {!! Form::label('ordinary_depreciation_reporting_date_posted', 'Ordinary Depreciation Reporting Date Posted', ['class' => 'control-label']) !!}
    {!! Form::number('ordinary_depreciation_reporting_date_posted', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('ordinary_depreciation_reporting_date_posted', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('unplanned_depreciation_reporting_date_posted') ? 'has-error' : ''}}">
    {!! Form::label('unplanned_depreciation_reporting_date_posted', 'Unplanned Depreciation Reporting Date Posted', ['class' => 'control-label']) !!}
    {!! Form::number('unplanned_depreciation_reporting_date_posted', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('unplanned_depreciation_reporting_date_posted', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('netbook_value_reporting_date_planned') ? 'has-error' : ''}}">
    {!! Form::label('netbook_value_reporting_date_planned', 'Netbook Value Reporting Date Planned', ['class' => 'control-label']) !!}
    {!! Form::number('netbook_value_reporting_date_planned', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('netbook_value_reporting_date_planned', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('last_verification_date') ? 'has-error' : ''}}">
    {!! Form::label('last_verification_date', 'Last Verification Date', ['class' => 'control-label']) !!}
    {!! Form::date('last_verification_date', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('last_verification_date', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group" align="right">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-success btn-lg']) !!}
    <a href="#" onClick="javascript:history.go(-1)" class="btn btn-danger btn-lg">Cancel and Back</a>
</div>
