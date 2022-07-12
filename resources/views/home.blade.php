@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Zoznam úloh</div>
                    <ul class="list-group">
                        <li class="list-group-item">Vytvorenie home page</li>
                        <li class="list-group-item">
                            <a href="{{ route('user.index') }}">
                                Formulár pre registráciu users
                            </a>
                        </li>
                        <li class="list-group-item">A third item</li>
                        <li class="list-group-item">A fourth item</li>
                        <li class="list-group-item">And a fifth one</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
