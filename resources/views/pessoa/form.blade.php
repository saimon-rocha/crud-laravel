<div class="row">
    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
        {{ Form::label('nm_pessoa', 'Nome Pessoa', ['class' => 'control-label']) }}
        {{ Form::text('nm_pessoa', null, ['class' => 'form-control', 'required']) }}
    </div>

    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
        {{ Form::label('dt_nascimento', 'Data Nascimento', ['class' => 'control-label']) }}
        {{ Form::date('dt_nascimento', null, ['class' => 'form-control', 'required']) }}
    </div>
</div>

<div class="form-group col-12 col-sm-12 col-md-6 col-lg-6" style="margin-top: 20px;">
        {{ Form::submit('Salvar', ['class' => 'btn btn-success']) }}
</div>