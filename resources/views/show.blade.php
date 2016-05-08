@extends('layouts.main')

@section('title', 'Show')

@section('content')
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">{{$classified->title}}</h3>
      </div>
      <div class="panel-body">
        <div class="row">
            <div class="col-md-4">
                <img src="/images/{{$classified->main_image}}">
            </div>
            <div class="col-md-8">
                <h3>Item Description</h3>
                <p>{{$classified->description}}</p>
                <h3>Item Description</h3>
                <p>{{$classified->description}}</p>
                <h3>item Details</h3>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Price:</sgron> {{$classified->price}} </li>
                    <li class="list-group-item"><strong>Condition:</sgron> {{$classified->condition}} </li>
                </ul>
                <h3>Seller Details</h3>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Location:</sgron> {{$classified->location}} </li>
                    <li class="list-group-item"><strong>Contact Email:</sgron> {{$classified->email}} </li>
                    <li class="list-group-item"><strong>Contact Phone:</sgron> {{$classified->phone}} </li>
                </ul>
            </div>
        </div>
      </div>
    </div>
@stop    
