@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul>
                        <li><a href="/profiles/{{ auth()->user()->id }}">Moje CV</a></li>
                        <li><a href="/pdf/{{ auth()->user()->id }}">Pobierz CV w PDF</a></li>
                        <li><a href="/documents/create">Stwórz nowe CV</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
