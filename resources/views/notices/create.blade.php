@extends('app')

@section('content')
    <h1 class="page-heading">Prepare a DMCA Notice</h1>

    {!! Form::open(['method' => 'GET', 'action' => 'NoticesController@confirm']) !!}

        <!-- Provider_id Form Select -->
        <div class="form-group {{ $errors->has('provider_id') ? 'has-error' : '' }}">
            {!! Form::label('provider_id', 'Who are we sending this to?') !!}
            {!! Form::select('provider_id', $providers, null, ['class' => 'form-control']) !!}
            {!! $errors->first('provider_id', '<span class="help-block">:message</span>') !!}
        </div>

        <!-- Infringing_title Form Input -->
        <div class="form-group {{ $errors->has('infringing_title') ? 'has-error' : '' }}">
            {!! Form::label('infringing_title', 'What is the title of the content that is being infringed upon?') !!}
            {!! Form::text('infringing_title', null, ['class' => 'form-control']) !!}
            {!! $errors->first('infringing_title', '<span class="help-block">:message</span>') !!}
        </div>

        <!-- Infringing_link Form Input -->
        <div class="form-group {{ $errors->has('infringing_link') ? 'has-error' : '' }}">
            {!! Form::label('infringing_link', 'What is the link to where this content is located?') !!}
            {!! Form::text('infringing_link', null, ['class' => 'form-control']) !!}
            {!! $errors->first('infringing_link', '<span class="help-block">:message</span>') !!}
        </div>

        <!-- Original_link Form Input -->
        <div class="form-group {{ $errors->has('original_link') ? 'has-error' : '' }}">
            {!! Form::label('original_link', 'To verify that you own the content, we now need the link to the original content on your server:') !!}
            {!! Form::text('original_link', null, ['class' => 'form-control']) !!}
            {!! $errors->first('original_link', '<span class="help-block">:message</span>') !!}
        </div>

        <!-- Original_description Form Input -->
        <div class="form-group {{ $errors->has('original_description') ? 'has-error' : '' }}">
            {!! Form::label('original_description', 'And, finally, it might help to provide some extra information related to this DMCA notice:') !!}
            {!! Form::text('original_description', null, ['class' => 'form-control']) !!}
            {!! $errors->first('original_description', '<span class="help-block">:message</span>') !!}
        </div>

        <!-- Preview Notice Form Submit -->
        <div class="form-group">
            {!! Form::submit('Preview Notice', ['class' => 'btn btn-primary form-control']) !!}
        </div>

    {!! Form::close() !!}

    @include('errors.list')

@endsection