@extends('layouts.main')

@section('title', 'CV - Wahyu Kurniawan')

@section('content')

   @component('components.experience') @endcomponent
    @component('components.education') @endcomponent
    @component('components.skills') @endcomponent
   @component('components.courses') @endcomponent


@endsection
