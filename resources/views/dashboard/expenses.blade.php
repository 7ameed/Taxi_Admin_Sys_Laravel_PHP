<div class="container-fluid">
<br>
  <div class="container">
    <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">@lang('dash.expenses')</a></li>
  <li><a data-toggle="tab" href="#menu1">@lang('dash.add') @lang('dash.expenses')</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <h3>@lang('dash.expenses')</h3>
    <p>Some content.</p>
    <div id="no-more-tables">
            <table class="col-xs-12 table-bordered table-striped table-condensed cf">
            <thead class="cf">
              <tr>
                <th>@lang('dash.expense_name')</th>
                <th >@lang('dash.expense_detail')</th>
                <th >@lang('dash.date')</th>
                <th >@lang('dash.cash')</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-title="@lang('dash.expense_name')"></td>
                <td data-title="@lang('dash.expense_detail')"></td>
                <td data-title="@lang('dash.date')"> <span class="small"></span></td>
                <td data-title="@lang('dash.cash')"></td>
              </tr>
              
            </tbody>
          </table>
        </div>
        
  </div>
  <div id="menu1" class="tab-pane fade">
    <h3>@lang('dash.add') @lang('dash.expenses')</h3>
    <p>Some content.</p>


<div class="panel panel-white " id="addCar">
        <div class="panel-heading">
            <h4></h4></div>
        <div class="panel-body">
            <div class="col-sm-8  col-md-6 signUp">

<form class="form-horizontal" id="form" name="form" method="post"  action="{{url('') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                <div class="form-group{{ $errors->has('expense_name') ? ' has-error' : '' }}">
                    <input class="form-control" type="text" name="expense_name" id="expense_name" value="{{old('expense_name')}}" placeholder="@lang('dash.expense_name')">
                    @if ($errors->has('expense_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('expense_name') }}</strong>
                                        </span>
                     @endif
                </div>
                <div class="form-group{{ $errors->has('expense_detail') ? ' has-error' : '' }}">
                    <input class="form-control" type="text" name="expense_detail" id="expense_detail" value="{{old('expense_detail')}}" placeholder="@lang('dash.expense_detail')">
                    @if ($errors->has('expense_detail'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('expense_detail') }}</strong>
                                        </span>
                     @endif
                </div>
                <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                    <div class="row">
                      <label for="date" class="col-sm-2 darktext">@lang('dash.date')</label>
                      <div class="col-sm-10">
                        
                    <input class="form-control" type="date" name="date" id="date" value="{{old('date')}}">
                    @if ($errors->has('date'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('date') }}</strong>
                                        </span>
                     @endif
                      </div>
                    </div>
                </div>
                <div class="form-group{{ $errors->has('cash') ? ' has-error' : '' }}">
                    <input class="form-control" type="text" name="cash" id="cash" value="{{old('cash')}}" placeholder="@lang('dash.cash')">
                    @if ($errors->has('cash'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('cash') }}</strong>
                                        </span>
                     @endif
                </div>



                <button type="submit" class=" signbuttons btn btn-primary">@lang('dash.add')</button>

            </form>
            </div>
            </div>
            </div>


  </div>
</div>
  </div>
  <br>
</div>
<br>