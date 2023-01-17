@extends('template.dreams.dreams')
@section('content')
    {!! \Vdes\Crud\Crudgen::render() !!}
    @once
        @push('js')
            {!! \Vdes\Crud\Crudgen::renderjs() !!}
        @endpush
    @endonce
@endsection
