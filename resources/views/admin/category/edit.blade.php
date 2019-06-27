@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

						<form method="POST" action="{{route('categories.update',$cat->id)}}" enctype="multipart/form-data">
							{{csrf_field()}}
						<input type="hidden" name="_method" value="PUT">
						@include('admin.category.form')
						</form>
					</div>
			</div>
		</div>
	</div>
</div>

@endsection