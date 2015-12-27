@extends('layouts.main')

@section('content')

  <h1> flyer Admin panel </h1> <hr>
 

 
 <a href="{{url('/flyers/create')}}" class="btn btn-primary"> Create flyer </a>

	
 <hr>

<table class="table table-striped table-bordered table-hover">
   
   <thead>
     <tr class="br-info">
	 <th> Id <hr></th> 
	 <th> Street:<hr></th> 
	  <th> City:<hr></th>
	   <th> zip:<hr></th>
	    <th> Country <hr></th>   
		 <th> State<hr></th>    
		  <th> Price <hr></th>    
		   <th> Home Description <hr></th> 
	 <th colspan="3"> Actions <hr></th>
	 </tr>
   </thead>   

   
   
   <tbody>
     @foreach ($flyers as $flyer)
         <tr>
             <td>{{ $flyer->id  }}  </td>
             <td>{{ $flyer->street }}  </td>
              <td>{{ $flyer->city }}</td>
             <td>{{ $flyer->zip}}</td>
             <td>{{ $flyer->country }}</td>
             <td>{{ $flyer->state }}</td>
             <td>{{ $flyer->price }}</td>
             <td>{{ $flyer->description }}</td>
            
             
            
             <td><a href="{{url('flyers',$flyer->id)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('flyers.edit',$flyer->id)}}" class="btn btn-primary">Update</a></td> 
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['flyers.destroy', $flyer->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach

     </tbody>

 </table>
@endsection
   