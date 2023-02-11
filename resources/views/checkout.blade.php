@extends('layouts.app')
@section('content')


<div class="container">
    
    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
         
        </div>
        <div class="col-md-8 order-md-1">
            <a href="{{  route('getlist')   }}" class="btn btn-primary">BACK</a>
            <h4 class="mb-3">Checkout address</h4>
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <ul class="list-group mb-3 sticky-top">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">ProdoctName</h6>
                        <h6 class="text-muted">{{$ph->Name}}</h6>
                    </div>
                    
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">price</h6>
                        <small class="text-muted">{{$ph->price}}</small>
                    </div>
                    
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Quntity</h6>
                        <small class="text-muted">1</small>
                    </div>
                   
                </li>
                <li class="list-group-item d-flex justify-content-between bg-light">
                    <div class="text-success">
                        <h6 class="my-0">vat</h6>
                        <small>
                            

                        ({{$ph->price*0.15}})
                            
                        </small>
                    </div>

                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (SR)</span>
                    <strong>{{($ph->price)+($ph->price*0.15)}}</strong>
                </li>
            </ul>
            <form method="POST" action="{{route('getinvoice')}}">
  @csrf
  <div class="form-outline mb-4">
    <input type="text" id="form1Example1"  name="name" class="form-control" />
    <label class="form-label" for="form1Example1"> YOUR NAME</label>
  </div>
  <input type="hidden" id="prodcoctname" name="prodcoctname" value="{{$ph->Name}}"> 
  <input type="hidden" id="price" name="price" value="{{$ph->price}}"> 
  <input type="hidden" id="note" name="note" value="send from frotend"> 
 
  <div class="form-outline mb-4">
    <input type="text" id="form1Example2"  name="address" class="form-control" />
    <label class="form-label" for="form1Example2">YOUR ADDRISS</label>
  </div>

  

  <div class="form-outline mb-4">
    <input type="email" id="form1Example2" name="email" class="form-control" />
    <label class="form-label" for="form1Example2">YOUR EMAIL</label>
  </div>






  <!-- 2 column grid layout for inline styling -->
  
  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block">BUY NOW</button>
</form>

</div>
</form>
            </div>

           
                </div>
            </form>
        </div>
    </div>
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">©️ 2017-2019 Company Name</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>

        </div>


    </footer>
</div>





@endsection