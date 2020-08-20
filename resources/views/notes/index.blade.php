@extends('layouts.app')
@section('content')
 <div class="container">
     <div class="row">
          <div class="offset-2 col-md-8">
              <div class="card">
                  <div class="card-header">
                   <h4>
                       Notes Details
                   <a href="{{route('notes.create')}}" class="btn btn-link float-right">Add Notes</a>
                   </h4>
                  </div>
                  <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Descrition</th>
                            <th colspan="3">Acrtion</th>
                        </thead>

                        <tbody>
                            @foreach ($notes as $note)                                                          
                            <tr>
                            <td>{{$note->id}}</td>
                            <td>{{$note->title}}</td>
                            <td>{{$note->description}}</td>
                            <td><a href="{{route('notes.show',[$note])}}" class="btn btn-success">Show</a>
                                <a href="{{route('notes.edit',[$note])}}" class="btn btn-primary">Edit</a>

                                <form action=" {{ route('notes.destroy', [$note]) }}" method="POST" style="display:inline-block">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger">Delete</button>
                                </form>

                            
                            
                            </form>                                                       
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$notes->links()}}
                  </div>
              </div>
          </div>
     </div>     
 </div>   
@endsection