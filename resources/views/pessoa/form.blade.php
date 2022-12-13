<div class="row">

    <label>Dados Pessoais <hr></label>
    <!-- Dados Pessoais -->
    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
        {{ Form::label('nm_pessoa', 'Nome', ['class' => 'control-label']) }}
        {{ Form::text('nm_pessoa', null, ['class' => 'form-control', 'required']) }}
    </div>

    <div class="form-group col-12 col-sm-12 col-md-3 col-lg-3">
        {{ Form::label('dt_nascimento', 'Data Nascimento', ['class' => 'control-label']) }}
        {{ Form::date('dt_nascimento', null, ['class' => 'form-control', 'required']) }}
    </div>

    <div class="form-group col-12 col-sm-12 col-md-3 col-lg-3">
        {{ Form::label('cpf', 'CPF', ['class' => 'control-label']) }}
        {{ Form::text('cpf', null, ['class' => 'form-control', 'required']) }}
    </div>

    <div class="w-100"></div>
    <br><br>
    <label>Endereço <hr></label>

    <!-- Endereço -->
    <div class="form-group col-12 col-sm-12 col-md-3 col-lg-3">
        {{ Form::label('cep', 'CEP', ['class' => 'control-label']) }}
        {{ Form::text('cep', null, ['class' => 'form-control', 'required']) }}
    </div>

    <div class="form-group col-12 col-sm-12 col-md-3 col-lg-3">
        {{ Form::label('bairro', 'Bairro', ['class' => 'control-label']) }}
        {{ Form::text('bairro', null, ['class' => 'form-control', 'required']) }}
    </div>

    <div class="form-group col-12 col-sm-12 col-md-3 col-lg-3">
        {{ Form::label('rua', 'Rua', ['class' => 'control-label']) }}
        {{ Form::text('rua', null, ['class' => 'form-control', 'required']) }}
    </div>

    <div class="form-group col-12 col-sm-12 col-md-2 col-lg-2">
        {{ Form::label('numero', 'N°', ['class' => 'control-label']) }}
        {{ Form::text('numero', null, ['class' => 'form-control', 'required']) }}
    </div>   
</div>

<br>
<div class="form-group col-12 col-sm-12 col-md-6 col-lg-6" style="margin-top: 20px;">
        {{ Form::submit('Salvar', ['class' => 'btn btn-success']) }}
</div>