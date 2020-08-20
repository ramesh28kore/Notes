@extends('layouts.app')
@section('content')
 <div class="container">
     <div class="row">
          <div class="offset-2 col-md-8">
              <div class="card">
                  <div class="card-header">
                   <h4>
                   {{$note->title}}
                   <a href="{{route('notes.index')}}" class="btn btn-link float-right">Back</a>
                   </h4>
                  </div>
                  <div class="card-body">
                  <h4>Description:<br>{{$note->description}}</h4>
                  </div>
              </div>
          </div>
     </div>     
 </div>   
@endsection