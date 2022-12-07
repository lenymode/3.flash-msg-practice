@extends('app')
@section('content')
<div class="container">
    <div class="card-header">
        <form action="{{route('store.user')}}" method="POST">
            @csrf
            <div class="input-group mb-3">
                <input name="name" type="text" class="form-control" placeholder="Write here" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append pt-2">
                  <button class="btn btn-success" type="submit">Button</button>
                </div>
              </div>
        </form>
        
    </div>
    <div class="card-body">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Action</th>
           
              </tr>
            </thead>
            <tbody>
                @foreach ($user as $data)
                <tr>
                    <th scope="row">{{$data->id}}</th>
                    <td>{{$data->name}}</td>
                    <td><button type="button" class="btn btn-info">Show</button>
                        <button type="button" class="btn btn-primary">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button></td>
                  </tr>     
                @endforeach    
    </div>
</div>
@endsection