@extends('layouts.app')
@section('content')
 <div class="container">
     <div class="row">
          <div class="offset-2 col-md-8">
              <div class="card">
                  <div class="card-header">
                   <h4>
                       Add Notes Here
                   <a href="{{route('notes.index')}}" class="btn btn-link float-right">Back</a>
                   </h4>
                  </div>
                  <div class="card-body">
                    <form action="{{ route('notes.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" placeholder="Enter Title Here" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', '' ) }} "/>
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" placeholder="Enter Description Here" class="form-control @error('description') is-invalid @enderror">{{ old('desciption', '' ) }}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>                                            

                        <button class="btn btn-primary float-right">Add Notes</button>
                    </form>
                  </div>
              </div>
          </div>
     </div>     
 </div>   
@endsection