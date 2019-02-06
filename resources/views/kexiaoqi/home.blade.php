@extends('layouts.kexiaoqiDefault')
@section('content')
  <h4>柯晓齐叫他最喜欢的人什么昵称(两个字)</h4>
  		@include('kexiaoqi._error')
        <form method="POST" action="{{ route('kexiaoqiResult') }}">
		{{ csrf_field() }}
        <div class="form-group">
          <input type="text" name="name" class="form-control" value="{{ old('name') }}">
        </div>
        <button type="submit" class="btn btn-primary">提交答案</button>
    	</form>
@stop