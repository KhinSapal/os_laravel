@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">

		<form action="{{route('brands.store')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<h1 class="h3 mb-0 text-gray-800">Brand Create Form</h1><br>

			
			
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

			
		</form>
	</div>
</div>

@endsection