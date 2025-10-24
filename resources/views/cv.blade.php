@extends('layouts.main')

@section('title', 'CV - muhammad Hikamudin')

@section('content')

   @component('components.experience') @endcomponent
    @component('components.education') @endcomponent
    @component('components.skills') @endcomponent
   @component('components.courses') @endcomponent


@endsection
