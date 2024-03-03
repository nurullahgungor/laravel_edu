@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card mt-5">

            <div class="card-body">
                <form>
                    <div class="mb-3">
                      <label for="" class="form-label">Category</label>
                      <select name="" id="" class="form-control">
                        <option>Tech</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">Title</label>
                      <input type="text" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Body</label>
                        <textarea name="" id="" rows="10" class="form-control"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
