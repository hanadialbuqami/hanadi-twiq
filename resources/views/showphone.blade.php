@extends('layouts.app')
@section('content')

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<div class="container">
@foreach($ph as $items)
    <div class="card">
        <div class="card-header">
            <h3>{{$items->Name}}<h3>
         </div>

         <div class="card-body">
            <div class="row">
                <div class="col-3">
                    <img hight="150" width="150">
                 </div>
            </div>

            <div class="col-9">
            <h1 class="text-danger alert alert-success">{{$items->Name}}<h1>
            <p class="text-success">Price:<span class="badge bg-secondary"> {{$items->price}}</p>
            <p class="text-success"> Quantity:<span> {{$items->QTY}} </span></p>
             </div>
         </div>
         
    </div>
    <div class="card-footer">
        <p><i class="fa-solid fa-phone"></i>:866666666</p>
        <a href="{{ route('getlistid',[$items -> id])}}"> buy now</a>
    </div>
    @endforeach 
</div>
            
   
