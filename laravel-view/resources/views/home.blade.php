@extends('welcome')
@section('content')
    <div>
        <h1>Home page</h1>
        @component('alert')
            This is the alert message here.
        @endcomponent
    </div>
@endsection

{{--@for ($i = 0; $i<10; $i++)--}}
{{--    The current value is {{$i}}--}}
{{--    @endfor--}}

