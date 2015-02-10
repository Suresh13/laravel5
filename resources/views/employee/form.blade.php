<div class="form-group {!! ($errors->has('name')) ? 'has-error' : '' !!}">
    {!! Form::label('name', 'Name', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Type employee full name']) !!}
        <p class="help-block">{!! ($errors->has('name') ? $errors->first('name') : '') !!}</p>
    </div>
</div>
<div class="form-group {!! ($errors->has('phone')) ? 'has-error' : '' !!}">
    {!! Form::label('phone', 'Phone', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Phone number']) !!}
        <p class="help-block">{!! ($errors->has('phone') ? $errors->first('phone') : '') !!}</p>
    </div>
</div>