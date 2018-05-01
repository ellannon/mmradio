@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="form-group">
	{!!Form::label('email', 'Email')!!}
	{!!Form::email('email', '', ['class' => 'form-control', 'required' => 'required'])!!}
</div>
<div class="form-group">
	{!!Form::label('name', 'Nombre y apellidos')!!}
	{!!Form::text('name', '', ['class' => 'form-control', 'required' => 'required'])!!}
</div>
<div class="form-group">
	{!!Form::label('subject', 'Asunto')!!}
	{!!Form::input('subject', '', array('class'=>'form-control'))!!}
</div>
<div class="form-group">
	{!!Form::label('message', 'Mensaje')!!}
	{!!Form::textarea('message', '', ['class' => 'form-control', 'required' => 'required'])!!}
</div>
<button type="submit" class="btn btn-primary">Enviar</button>
