@extends('layouts.main')

@section('page_title', 'Home')

@section('main-content')
    {{-- Comics Section --}}
    @include('includes.sections.comics_section', compact('comics'))

    {{-- CTA Section --}}
    @include('includes.sections.cta_section', compact('cta_cards'))
@endsection
