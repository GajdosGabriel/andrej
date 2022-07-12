@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Zoznam users</div>

                    <div class="card-body">
                        @include('users._table')
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
