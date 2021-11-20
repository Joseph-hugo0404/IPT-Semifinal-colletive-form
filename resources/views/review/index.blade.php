
@extends('pages\base')

@section('content')


@if($info = Session::get('info'))  

<div class="card">
  <div class="card-body bg-success text-light">
    {{$info}}
  </div>
</div>
    
@endif
<div class="add"> 
<div class="float-right">
  <a href="{{url('/review/create')}}"  class = "btn btn-dark">
    Add New Reviewer
  </a>
</div>
</div>
     <h1>Review</h1>       
        <table class="table table-striped" >
            <thead class ="table table-bordered table-striped table-dark">
                <tr class="bg-dark" >
                    <th>Reviewer Name</th>
                    <th>Email</th>
                    <th>Message </th>
                    <th>Rating </th>
                </tr>
            </thead>
            <tbody class = "table-striped table-dark">
                    <?php foreach ($review as $s): ?> 
                     <tr>
                         
                
                             <td><?= $s->name ?> </td>
                             <td><?= $s->email ?> </td>
                             <td><?= $s->message ?> </td>
                             <td><?= $s->rating ?> </td>                        
                     </tr>               
                    <?php endforeach; ?>                   
            </tbody>
        </table>

    </div>
</body>
@endsection


