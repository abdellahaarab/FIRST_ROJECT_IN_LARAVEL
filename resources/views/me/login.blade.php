@extends('base')

@section('continue')

@if(@isset($message))
    <p>{{ $message }}</p>
@endif

<div class="container mt-5">
<form action="{{ @route('me.profile') }}" method="get">
    @csrf
    <fieldset>
      <legend>Log in</legend>
      <div class="mb-3">
        <label for="TextInput" class="form-label">Name :</label>
        <input type="text" id="TextInput" name="name" class="form-control" placeholder="Name">
      </div>
      <div class="mb-3">
        <label for="TextInput" class="form-label">Password :</label>
        <input type="password" id="TextInput" name="password" class="form-control" placeholder="password">
      </div>
      <button type="submit" class="btn btn-primary">Log in</button>
    </fieldset>
  </form>
</div>
@endsection

