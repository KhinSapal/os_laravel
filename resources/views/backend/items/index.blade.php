@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		
	<h1 class="h3 mb-0 text-gray-800">Item List</h1><br>
	<a href="{{route('items.create')}}" class="btn btn-success">Add New</a>
	</div>
	<div class="row">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Codeno</th>
					<th>Name</th>
					<th>Price</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1;@endphp
				@foreach($items as $item)
				<tr>
					<th scope="row">{{$i++}}</th>
					<td>{{$item->codeno}}</td>
					<td>{{$item->name}}</td>
					<td>{{$item->price}} MMK</td>
					<td>
						<form action="{{route('items.destroy',$item->id)}}" method="post" onsubmit="return confirm('Are you Sure Want to Delete!')" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>                    
                        </form>

						<a href="{{route('items.edit',$item->id)}}" class="btn btn-warning">Edit</a>
						<a href="#" class="btn btn-info">Detail</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection