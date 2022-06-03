@extends('frontend.master')

@section('bodycontent')

<section>
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-4">
            <a href="{{ route('create') }}" class="btn btn-info">Create Records</a>
            </div>
        </div>
        <div class="mt-4">
        <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Student Name</th>
      <th scope="col">Course</th>
      <th scope="col">Fee</th>
    </tr>
  </thead>
  <tbody>
  
    @foreach($contacts as $item)
    
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->address }}</td>
            <td>{{ $item->mobile }}</td>
            <td>
            <a href="{{ route('edit/' .$item->id) }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>    
        </td>
        </tr>

    @endforeach
    
  </tbody>
</table>
        </div>
    </div>
</section>

@endsection