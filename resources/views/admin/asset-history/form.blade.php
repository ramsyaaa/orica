<div class="form-group{{ $errors->has('asset_id') ? 'has-error' : ''}}">
    {!! Form::label('asset_id', 'Asset Id', ['class' => 'control-label']) !!}
    {!! Form::number('asset_id', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('asset_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('asset_data') ? 'has-error' : ''}}">
    {!! Form::label('asset_data', 'Asset Data', ['class' => 'control-label']) !!}
    {!! Form::textarea('asset_data', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('asset_data', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group" align="right">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-success btn-lg']) !!}
    <a href="#" onClick="javascript:history.go(-1)" class="btn btn-danger btn-lg">Cancel and Back</a>
</div>
