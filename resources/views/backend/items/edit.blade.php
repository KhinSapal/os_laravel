@extends('backendtemplate')
@section('content')
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">

		<form action="{{route('items.update',$item->id)}}" method="POST" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<h1 class="h3 mb-0 text-gray-800">Item Edit Form</h1><br>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Code No</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="codeno" value="{{$item->codeno}}" readonly="readonly">
				</div>
			</div>
			
			<div class="form-group row">
				<label  class="col-sm-2 col-form-label">Name</label>
				<div class="col-sm-10">
					<input type="name" class="form-control" name="name" value="{{$item->name}}">
				</div>
			</div>

			<div class="form-group row">
				<label  class="col-sm-2 col-form-label">Photo</label>
				<div class="col-sm-10">
					<input type="file" class="form-control" name="photo">
					<img src="{{ asset($item->photo) }}">
					<input type="hidden" name="oldphoto" value="{{$item->photo}}">

				</div>
			</div>

			<div class="form-group row">
				<label  class="col-sm-2 col-form-label">Price</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" name="price" value="{{$item->price}}">
				</div>
			</div>

			<div class="form-group row">
				<label  class="col-sm-2 col-form-label">Discount</label>
				<div class="col-sm-10">
					<input type="name" class="form-control" name="discount" value="{{$item->discount}}">
				</div>
			</div>

			<div class="form-group row">
				<label  class="col-sm-2 col-form-label">Description</label>
				<div class="col-sm-10">
					<textarea type="text" class="form-control" name="description">{{$item->description}}</textarea> 
				</div>
				
			</div>

			<div class="form-group row">
				<select class="form-control" id="inputBrand" name="brand">
					<optgroup label="Choose Brand">
						@foreach($brands as $brand)
							<option value="{{$brand->id}}">
							{{$brand->name}}
							</option>
						@endforeach
					</optgroup>
				</select>
			</div>

			<div class="form-group row">
				<select class="form-control form-control-md" id="inputSubcategory" name="subcategory">
					<optgroup label="Choose Subcategory">
						@foreach($subcategories as $subcategory)
							<option value="{{$subcategory->id}}">
							{{$subcategory->name}}
							</option>
						@endforeach
					</optgroup>
				</select>
			</div>


			<div class="form-group row">
				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary" >Update</button>
				</div>
			</div>
		</form>
	</div>
</div>




@endsection