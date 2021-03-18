@extends('layout/main')

@section('title', 'Api | Win Developer')


@section('container')
<div class="container">
  <div class="row">
    <div class="col-10">
      <h1 class="mt-3">Data dari Api</h1>
      <table class="table">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Email</th>
                <th>Nama Depan</th>
                <th>Nama Belakang</th>
                <th>Avatar</th>
            </tr>
        </thead>
        @foreach($data as $value)
        <tbody>
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td> {{$value["email"]}} </td>
                <td> {{$value["first_name"]}} </td>
                <td> {{$value["last_name"]}} </td>
                <td><img src='{{ $value["avatar"] }}' alt='#'></td>
            </tr>
        </tbody>
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection