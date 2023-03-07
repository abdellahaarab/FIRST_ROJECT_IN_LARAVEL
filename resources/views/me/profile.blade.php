@extends('base')

@section('continue')
<div class="container mt-5">
    Welcome back Mr. {{ $session() }}
    {{-- @if($session()->has('user'))
        {{ "ghfkjhf" }}
    @endif --}}
</div>
@endsection
