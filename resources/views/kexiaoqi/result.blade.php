@extends('layouts.kexiaoqiDefault')
@section('content')
  <h3>他想对你说 ：晚安，笨蛋<h3>
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