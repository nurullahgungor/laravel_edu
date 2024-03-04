@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h3>Create Blog</h3>
            </div>
            <div class="card-body">

                <form action="{{ route('blog.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Category</label>
                            <select name="category" id="" class="form-control">
                                <option value="">Select</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                @endforeach
                            </select>
                            @error('category')
                                {{ $message }}
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Title</label>
                        <input type="text" class="form-control" id="" name="title">
                        @error('text')
                                {{ $message }}
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Body</label>
                        <textarea id="" rows="10" class="form-control" name="body"></textarea>
                        @error('body')
                                {{ $message }}
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Status</label>
                        <select name="status" id="" class="form-control">
                            <option value="1">Show</option>
                            <option value="0">Hide</option>
                        </select>
                        @error('status')
                                {{ $message }}
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
