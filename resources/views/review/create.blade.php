@extends('pages\base')

@section('content')


    <h1>Add New Reviewer</h1>
  <div class="row">
     <div class="col-md-5">
        {!! Form::open(['url'=>'/review', 'method' =>'post'])  !!}

        <div class="form-group float-center">
           
            {{Form::label('Reviewer Name', 'Reviewer Name')}}
            {{Form::text('Reviewer Name', null, ['class'=>'form-control'])}}
    
        </div>

        <div class="form-group float-center">
           
            {{Form::label('Email', 'Email')}}
            {{Form::text('Email', null, ['class'=>'form-control'])}}
    
        </div>

        <div class="form-group float-center">
           
            {{Form::label('Message')}}
            {{Form::text('Message', null, ['class'=>'form-control'])}}
    
        </div>

        <div class="form-group float-center">
           
            {{Form::label('Rating')}}
            {{Form::number('Rating', null, ['class'=>'form-control'])}}     
        </div> 
            <button class="btn btn-dark float-left">
                   Reviewers Account

            </button> 
        </div>
    
        {!! Form::close()  !!}
     </div>
<div class="col-md-6">
    @if (count($errors)>0)

    <div class="card">
<div class = "card-body bg-danger text-warning">
    All Fields Required!
<ul>
    @foreach ($errors->all() as $err)
    <li>{{$err}}</li>      
    @endforeach
</ul>
</div>

    </div>
        
    @endif
</div>
  </div>

@endsection