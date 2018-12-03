@extends ('welcome')

@section ('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif





  <form class="form-horizontal" role="form" method="post" action="{{route('bank.generate.store')}}" >

                @csrf

    <fieldset  >
             
    <div class="form-group">
        <label class="col-sm-3 control-label" for="amount">Amount </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="amount" id="amount" placeholder="Enter the Amount">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="merchant_id">Merchant_id</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="merchant_id" id="merchant_id" placeholder="Enter the Merchant_id">
        </div>
      </div>
        <div class="form-group">
        <label class="col-sm-3 control-label" for="reference">Reference</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="reference" id="reference" placeholder="Enter the Reference">
        </div>
        
      </div>
        <div class=" text-center" >
        

               <button type="submit" class=" btn btn-success">Pay Now</button>
        
            </div>
    </fieldset>
  </form>

  @endsection