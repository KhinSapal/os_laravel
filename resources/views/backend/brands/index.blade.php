@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		
	<h1 class="h3 mb-0 text-gray-800">Brand List</h1><br>
	<a href="{{route('brands.create')}}" class="btn btn-success">Add New</a>
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
				@foreach($brands as $brand)
				<tr>
					<th>{{$i++}}</th>
					<td>{{$brand->name}}</td>
					<td>
						<img src="{{ asset($brand->photo) }}" class="img-fluid w-25">
					</td>
					<td>
						<form action="{{route('brands.destroy',$brand->id)}}" method="post" onsubmit="return confirm('Are you Sure want to Delete!')" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
						<a href="{{route('brands.edit',$brand->id)}}" class="btn btn-warning">Edit</a>
						<a href="#" class="btn btn-info">Detail</a>
					</td>
				</tr>

				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection