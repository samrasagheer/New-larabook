@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Get Sessions') }}</div>

                <div class="card-body">
                 @if(session()->has('product'))
                 <h1>{{session()->get('product')['name']}}</h1>
                 <p>{{session()->get('product')['price']}}</p>
                 @else
               {{--   nosession --}}
                 @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
