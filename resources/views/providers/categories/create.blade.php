@extends('providers.master')
@section('title', 'Create Category Page')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h2>Create Category Page</h2>
                        <hr>
                        <form method="POST" action="{{ route('category.store') }}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h4 class="mb-0">Name:</h4>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" required name="name"
                                        value="{{ old('name') }}" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="submit" class="btn btn-primary px-4" value="Save Changes" />
                                </div>
                            </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
