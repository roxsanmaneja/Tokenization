<!-- Fullname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fullname', 'Fullname:') !!}
    {!! Form::text('fullname', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Telephone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Telephone', 'Telephone:') !!}
    {!! Form::number('Telephone', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Email', 'Email:') !!}
    {!! Form::email('Email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Roomtype Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Roomtype', 'Roomtype:') !!}
    {!! Form::text('Roomtype', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>