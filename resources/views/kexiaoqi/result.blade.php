@extends('layouts.kexiaoqiDefault')
@section('content')
  <h3>他想对你说 ：我想我是是太无聊了 ，玩的开心猪 ，想 ， 可以在这留言给我<h3>
  <h4>你想对他说什么 ：</h4>
  		@include('kexiaoqi._error')
        <form method="POST" action="{{ route('kexiaoqiEcho') }}">
		{{ csrf_field() }}
        <div class="form-group">
          <input type="text" name="name" class="form-control" value="{{ old('name') }}">
        </div>
        <button type="submit" class="btn btn-primary">提交</button>
    	</form>
@stop