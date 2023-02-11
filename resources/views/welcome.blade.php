@extends('layouts.app')

@section('content')

<h1 class="text-center p-5">أهلاً بكم في صفحة الرئيسية</h1>
<div class="container" >


<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Type</th>
      <th>Price</th>
      <th>Color</th>
    
    </tr>
  </thead>
  <tbody>

 
   @foreach($p as $items)
   <tr>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="https://img.freepik.com/free-vector/realistic-instagram-photo-frame-smartphone-template_23-2148125909.jpg?w=740&t=st=1674755115~exp=1674755715~hmac=d5cec0de1eadd7c9b218a6228699a281b1d33bd9b2dfd4e0f3181ce2aacb126c"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1">{{$items['Type']}}</p>
           
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">{{$items['Price']}}</p>
       
      </td>
      <td>
        <span class="fw-normal mb-1">{{$items['Color']}}</span>
      </td>
    
     
    </tr> 
   @endforeach
   
  </tbody>
</table>

</div>
@endsection

