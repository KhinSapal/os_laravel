@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		
	<h1 class="h3 mb-0 text-gray-800">Category List</h1><br>
	<a href="{{route('categories.create')}}" class="btn btn-success">Add New</a>
	</div>
	<div class="row">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Photo</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				 @php $i=1;@endphp
				@foreach($categories as $category)
				<tr>
					<th>{{$i++}}</th>
					<td>{{$category->name}}</td>
					<td>
						<img src="{{ asset($category->photo) }}" class="img-fluid w-25">
					</td>
					<td>
						<form action="{{route('categories.destroy',$category->id)}}" method="post" onsubmit="return confirm('Are you Sure Want to Delete!')" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
						<a href="{{route('categories.edit',$category->id)}}" class="btn btn-warning">Edit</a>
						<a href="#" class="btn btn-info">Detail</a>
					</td>
				</tr>

				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection