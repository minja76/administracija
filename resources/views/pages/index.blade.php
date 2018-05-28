@extends('layouts.app')
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Latest Users</h3>
    </div>
    <div class="panel-body">
      <table class="table table-striped table-hover">
          <tr>
            <th>lbo</th>
            <th>jmbg</th>
            <th>ime</th>
            <th>prezime</th>
          </tr>
          @foreach($radnici as $radnik)
          <tr>
            <td>{{$radnik->lbo}}</td>
            <td>{{$radnik->jmbg}}</td>
            <td>{{$radnik->ime}}</td>
            <td>{{$radnik->prezime}}</td>
          </tr>
          @endforeach 
           
       
        </table>
    </div>
  </div>

@endsection