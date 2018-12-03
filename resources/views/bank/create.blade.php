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



  <form class="form-horizontal" role="form" method="post" action="{{route('bank.store')}}" >

                @csrf

    <fieldset  >
             
    <div class="form-group">
        <label class="col-sm-3 control-label" for="name">Name </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="name" id="name" placeholder="Enter your Name">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="account_number">Account Number</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="account_number" id="account_number" placeholder="Enter your Account Number">
        </div>
      </div>
        <div class="form-group">
        <label class="col-sm-3 control-label" for="bank_name">Bank Name</label>
        <div class="col-sm-9">
          <div class="row">
            <div class="col-xs-3">
              <select class="form-control col-sm-2" name="bank_name" id="bank_name">
                <option>Bank Name</option>
                <option value="CIMB">CIMB</option>
                <option value="MyBank">MyBank</option>
                <option value="RHB">RHB</option>
                
              </select>
            </div>

            <br><br>
             
           
          </div>
        </div>
      </div>
        <div class=" text-center" >
        
                <button type="submit" class=" btn btn-success">Generate Payment </button>
        
            </div>
    </fieldset>
  </form>

  @endsection