@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h3>Create Blog</h3>
            </div>
            <div class="card-body">
                @if ($errors -> any())
                    @foreach ($errors->all() as $error )
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif
                @if (session()->has('success'))
                    <div class="alert alert-success " role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Category</label>
                        <select name="category" id="" class="form-control">
                            <option value="">Select</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"> {{ $category->name }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control">

                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Title</label>
                        <input type="text" class="form-control" id="" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Body</label>
                        <textarea id="" rows="10" class="form-control" name="body"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Status</label>
                        <select name="status" id="" class="form-control">
                            <option value="1">Show</option>
                            <option value="0">Hide</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
