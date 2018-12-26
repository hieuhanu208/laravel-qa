@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-item-center">
                            <h2> All Questions</h2> 
                        <div class="ml-auto">
                        <a href="{{route('questions.create')}}" class="btn btn-outline-secondary">Ask Questions</a>    
                        </div>    
                    </div>
                    
                </div>

                <div class="card-body">
                        @include ('layouts.message')
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @foreach ($questions as $question)
                   
                        <div class="media">
                            
                          <div class="d-flex flex-column counters">
                            <div class="votes">
                                <strong>{{$question->votes}}</strong>
                                {{str_plural('votes',$question->votes)}}
                            </div>
                            
                            <div class="status {{$question->status}}">
                                <strong>{{$question->answers}}</strong>
                                {{str_plural('answers',$question->answers)}}
                            </div>
                            <div class="view">
                                <strong>{{$question->views}}</strong>
                                {{str_plural('views',$question->views)}}
                            </div>
                          </div>
                          <div class="media-body">
                                <div class="d-flex align-items-center">
                                        <h3 class= "mt-0"><a href="{{$question->url}}">{{$question->title}}</a></h3>
                                        <div class="ml-auto">
                                            <a href="{{route('questions.edit',$question->id)}} " class="btn btn-sm btn-outline-info">Edit</a>
                                        </div>
                                    </div>

                       
                            <p class="lead">
                              Asked by <a href="{{$question->user->url}}"> {{$question->user->name}}</a>
                              <small class="text-mute"> at {{$question->created_date}}</small>
                            </p>
                            
                            {{str_limit($question->body),250}}
                          </div>
                        </div>
                        <hr/>
                    @endforeach
                    {{$questions->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
