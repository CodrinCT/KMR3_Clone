@extends('layouts.admin_master')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Category</th>
        <th scope="col">Parent ID</th>
        <th scope="col">Stock</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($equipments as $equipment)
        <tr>
            <th scope="row">1</th>
            <td>{{ $equipment->name }}</td>
            <td>{{ $equipment->category }}</td>
            <td>{{ $equipment->parent_id }}</td>
            <td>{{ $equipment->stock }}</td>
          </tr>
        @endforeach
    </tbody>
  </table>

@endsection