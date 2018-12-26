@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-item-center">
                            <h2> Edit Questions</h2> 
                        <div class="ml-auto">
                        <a href="{{route('questions.index', $question->id)}}" class="btn btn-outline-secondary">Back to all question</a>    
                        </div>    
                    </div>
                    
                </div>

                <div class="card-body">
                        <form action= "{{route('questions.update', $question->id)}}" method="POST">
                                {{ method_field('PUT') }}
                                @include('questions.form', ['buttonText' => 'Update the question'])
                                
                      </form>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection







