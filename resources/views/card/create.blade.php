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




<form  class="form-horizontal" role="form" method="post" action="{{route('card.store')}}" >

                @csrf

    <fieldset >
      
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card_holder_name">Name on Card</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="card_holder_name" id="card_holder_name" placeholder="Card Holder's Name">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card_number">Card Number</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="card_number" id="card_number" placeholder="Debit/Credit Card Number">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="expiry_month">Expiration Date</label>
        <div class="col-sm-9">
          <div class="row">
            <div class="col-xs-3">
              <select class="form-control col-sm-2" name="expiry_month" id="expiry_month">
                <option>Month</option>
                <option value="Jan">Jan (01)</option>
                <option value="Feb">Feb (02)</option>
                <option value="Mar">Mar (03)</option>
                <option value="Apr">Apr (04)</option>
                <option value="May">May (05)</option>
                <option value="June">June (06)</option>
                <option value="July">July (07)</option>
                <option value="Aug">Aug (08)</option>
                <option value="Sep">Sep (09)</option>
                <option value="Oct">Oct (10)</option>
                <option value="Nov">Nov (11)</option>
                <option value="Dec">Dec (12)</option>
              </select>
            </div>
            <div class="col-xs-3">
              <select class="form-control" name="expiry_year">
                
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group" id="security1">
        <label class="col-sm-3 control-label" for="cvv">Card CVV</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" name="cvv" id="cvv" placeholder="Security Code"> 
        </div>
      </div>
      <br>
      <div class=" text-center" >
        
         <button type="submit" class=" btn btn-success">Generate Payment </button>
        
      </div>
      <br>
      <br>
    </fieldset>
    </form>


    @endsection