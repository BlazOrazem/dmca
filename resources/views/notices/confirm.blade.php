@extends('app')

@section('content')
    <h1 class="page-heading">Confirm</h1>

    {!! Form::open(['action' => 'NoticesController@store']) !!}

        <!-- Template Form Textarea -->
        <div class="form-group {{ $errors->has('template') ? 'has-error' : '' }}">
            {!! Form::textarea('template', $template, ['class' => 'form-control']) !!}
            {!! $errors->first('template', '<span class="help-block">:message</span>') !!}
        </div>

        <!-- Deliver Form Submit -->
        <div class="form-group">
            {!! Form::submit('Deliver', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    
    {!! Form::close() !!}
@endsection