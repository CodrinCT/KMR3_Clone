@extends('layouts.admin_master')

@section('content')
<!-- Modal ADD Equipment-->
@include('admin.modals.addEquipmentModal')
{{-- END Modal ADD Equipment --}}

{{-- Modal EDIT Equipment --}}
@include('admin.modals.editEqupmentsModal')
{{-- END Modal EDIT Equipment --}}


{{-- <div class="data-container" style="width:80%"> --}}
  <div class="container" style="margin-right: 12%">
    <button class="btn btn-success" data-toggle="modal" data-target="#addModal" style="margin-top: 30px;margin-bottom: 10px;">ADD</button>
    <table class="table" id="eq-table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Category</th>
          <th scope="col">Parent ID</th>
          <th scope="col">Stock</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
          {{-- @foreach ($equipments as $equipment) --}}
          <tr>
              {{-- <th scope="row">1</th>
              <td>{{ $equipment->name }}</td>
              <td>{{ $equipment->category }}</td>
              <td>{{ $equipment->parent_id }}</td>
              <td>{{ $equipment->stock }}</td> --}}
              

               <th scope="row">1</th>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              {{-- <td><a class="btn btn-danger" style="margin-right: 2px" href="{{ route('equipments.destroy', $equipment->id) }}">DELETE</a><p style="margin-left: 2px; margin-bottom:0; padding:6px, 12px" class="btn btn-primary" data-toggle="modal" data-target="#editModal" id="editBtn">EDIT</p></td> --}}
            </tr>
          {{-- @endforeach --}}
      </tbody>
    </table>

    </div>

  
    
@endsection

@push('scripts')
<script>
  $(function() {
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    })
    var table = $("#eq-table").DataTable({
        serverSide:true,
        processing:true,
        ajax:"{{ route('equipments.index') }}",
            columns:[
                {data:'DT_RowIndex', name:'DT_RowIndex'},
                {data:'name', name:'name'},
                {data:'category', name:'category'},
                {data:'parent_id', name:'parent_id'},
                {data:'stock', name:'stock'},
            ]
    });
  })

</script>
@endpush