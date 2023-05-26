@extends('layout.app')

@section('content')
    <main>
        <div class="container-fluid px-4">
            @include('components.mainHeader')
            @include('components.mainCard')
            @include('components.mainChart')
            @include('components.mainDataTable')
        </div>

    </main>
    @include('components.footer')
@endsection
