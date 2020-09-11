@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<form action="{{route('subcategories.store')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<h1 class="h3 mb-0 text-gray-800">Subcategory Create Form</h1><br>
			<div class="form-group row">
				<label  class="col-sm-2 col-form-label">Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="name" id="inputname">
					<span class="text-danger">{{$errors->first('name')}}</span>
				</div>
			</div>

			{{-- <div class="form-group row">
				<label  class="col-sm-2 col-form-label">Category_id</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" name="category_id">
				</div>
			</div> --}}
			

			<div class="form-group row">
				<select class="form-control" id="inputBrand" name="category_id">
					<optgroup label="Choose category">
						@foreach($categories as $category)
							<option value="{{$category->id}}">
							{{$category->name}}
							</option>
						@endforeach
					</optgroup>
				</select>
			</div>

			<div class="form-group row">
				<div class="col-sm-10">
					<button type="submit" class="btn btn-info">Create</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection