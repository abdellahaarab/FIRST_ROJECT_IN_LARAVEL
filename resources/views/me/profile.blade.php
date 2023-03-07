@extends('base')

@section('continue')
<div class="container mt-5">
    Welcome back Mr.
    @isset($user )
        {{ $user }}
    @endisset
</div>
@endsection
