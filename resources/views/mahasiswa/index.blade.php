@extends('layout.app')
 
@section('content')
<div class="container">
    <h2>Laravel Datatable using Yajra Tutorial Example</h2>
    <table class="table" id="dataTable">
        <thead class="table-dark">
        <tr>
            <th>Id</th>
            <th>Name</th>
        </tr>
        </thead>
    </table>
</div>
@endsection

@section('scripts')
<script>
    $(function() {
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url('fetch') }}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'nama', name: 'name' }
            ]
        });
    });
</script>
@endsection