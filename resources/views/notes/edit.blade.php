@extends('layouts.app')
@section('content')
 <div class="container">
     <div class="row">
          <div class="offset-2 col-md-8">
              <div class="card">
                  <div class="card-header">
                   <h4>
                       Edit Notes Here
                   <a href="{{route('notes.index')}}" class="btn btn-link float-right">Back</a>
                   </h4>
                  </div>
                  <div class="card-body">
                 
                  @include('notes.form')
            
                  </div>
              </div>
          </div>
     </div>     
 </div>   
@endsection