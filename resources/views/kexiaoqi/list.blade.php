@extends('layouts.default')

@section('content')
<div class="offset-md-2 col-md-8">
  <h2 class="mb-4 text-center">所有用户</h2>
  <div class="list-group list-group-flush">
    @foreach ($visites as $user)
      <div class="list-group-item">
        <span>
          {{ $user->path }}
        </span>
         <span>
          {{ $user->ip }}
        </span>
        <span>
          {{ $user->content }}
        </span>
        <span>
          {{ $user->created_at }}
        </span>
      </div>
    @endforeach
  </div>
</div>
@stop