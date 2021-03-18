@extends('layout/main')

@section('title', 'Tabulator | Win Developer')


@section('container')
<div class="container">
  <div class="row">
    <div class="col-10">
    <h1 class="mt-3">Students Data</h1>
    @if (session('status'))
      <div class="alert alert-info">
        {{ session('status') }}
      </div>
    @endif
    
      <div id="players" class="mt-3"></div>
      <script type="text/javascript">
          var tabledata = {!! $students !!}
      </script>
    </div>
  </div>
</div>
@endsection