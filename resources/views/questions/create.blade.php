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
                        <a href="{{route('questions.index')}}" class="btn btn-outline-secondary">Back to all question</a>    
                        </div>    
                    </div>
                    
                </div>

                <div class="card-body">
                
                    <form action= "{{route('questions.store')}}" method="POST">
                                @include('questions.form', ['buttonText' => 'Ask the question'])
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection