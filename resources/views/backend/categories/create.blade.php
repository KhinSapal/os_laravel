@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">

		<form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<h1 class="h3 mb-0 text-gray-800">Category Create Form</h1><br>

			
			
			<div class="form-group row">
				<label  class="col-sm-2 col-form-label">Name</label>
				<div class="col-sm-10">
					<input type="name" class="form-control" name="name" id="inputname">
					<span class="text-danger">{{$errors->first('name')}}</span>
				</div>
			</div>

			<div class="form-group row">
				<label  class="col-sm-2 col-form-label">Photo</label>
				<div class="col-sm-10">
					<input type="file" class="form-control" name="photo" id="inputphoto">
					<span class="text-danger">{{$errors->first('photo')}}</span>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary">Create</button>
				</div>
			</div>

			{{-- <div class="form-group row">
				<label  class="col-sm-2 col-form-label">Price</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" name="price">
				</div>
			</div> --}}

			{{-- <div class="form-group row">
				<label  class="col-sm-2 col-form-label">Discount</label>
				<div class="col-sm-10">
					<input type="name" class="form-control" name="discount" value="0">
				</div>
			</div> --}}

			{{-- <div class="form-group row">
				<label  class="col-sm-2 col-form-label">Description</label>
				<div class="col-sm-10">
					<textarea type="text" class="form-control" name="description"></textarea> 
				</div>
				
			</div> --}}

			{{-- <div class="form-group row">
				<select class="form-control" id="inputBrand" name="brand">
					<optgroup label="Choose Brand">
						@foreach($brands as $brand)
							<option value="{{$brand->id}}">
							{{$brand->name}}
							</option>
						@endforeach
					</optgroup>
				</select>
			</div> --}}

			{{-- <div class="form-group row">
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
 --}}
			
		</form>
	</div>
</div>

@endsection