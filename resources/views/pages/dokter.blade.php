@extends('home')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <a href="{{ url('/dokter/export') }}" class="btn btn-success">Export To Excel</a>
            </div>
        </div>
        <div class="row">
            <div class="col px-3 ">
                @include('tabels.dokter')
            </div>
        </div>
    </div>
@endsection
