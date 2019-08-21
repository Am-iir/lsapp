@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <br>
                    <a href="/posts/create" class="btn btn-primary"> Create Post </a>
                    <br>
                    @if (count($posts)>0)             
                        
                    
                        <table class="table table-striped">
                            <tr>
                                <th> Title </th>
                                <th></th>
                                <th></th>
                                @foreach ($posts as $post)
                                <tr>
                                    <td >{{$post->title}} </td>
                                    <td> <a href="/posts/{{$post->id}}/edit" class="btn btn-warning"> Edit</a></td>
                                    <td>
                                            {!! Form::open([ 'action' => ['PostsController@destroy',$post->id] , 'method' => 'POST','class'=>'float-right' ])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Delete',['class'=> 'btn btn-danger'])}}
                                        {!! Form::close()!!}
                                        
                                    </td>
                                </tr> 
                                @endforeach
                            </tr>
                        </table>
                        
                    @else 

                        <h3> You  dont have posts </h3>
                    @endif

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
