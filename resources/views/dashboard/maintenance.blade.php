<div class="container-fluid">
<br>
  <div class="container">
    <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">@lang('dash.za_maintenance')</a></li>
  <li><a data-toggle="tab" href="#menu1">@lang('dash.add') @lang('dash.maintenance')</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <h3>@lang('dash.za_maintenance')</h3>
    <p>Some content.</p>
    <div id="no-more-tables">
            <table class="col-xs-12 table-bordered table-striped table-condensed cf">
            <thead class="cf">
              <tr>
                <th>@lang('dash.car')</ >
                <th >@lang('dash.maintenance_place')</th>
                <th >@lang('dash.maintenance_type')</th>
                <th >@lang('dash.date')</th>
                <th >@lang('dash.cash')</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-title="@lang('dash.car')"></td>
                <td data-title="@lang('dash.maintenance_place')"></td>
                <td data-title="@lang('dash.maintenance_type')"> <span class="small"></span></td>
                <td data-title="@lang('dash.date')"></td>
                <td data-title="@lang('dash.cash')"></td>
              </tr>
              
            </tbody>
          </table>
        </div>
        
  </div>
  <div id="menu1" class="tab-pane fade">
    <h3>@lang('dash.add') @lang('dash.maintenance')</h3>
    <p>Some content.</p>


<div class="panel panel-white " id="addCar">
        <div class="panel-heading">
            <h4></h4></div>
        <div class="panel-body">
            <div class="col-sm-8  col-md-6 signUp">

<form class="form-horizontal" id="form" name="form" method="post"  action="{{url('') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                <div class="form-group{{ $errors->has('car_name') ? ' has-error' : '' }}">
                  <div class="row">
                      <label for="car_name" class="col-sm-2 darktext">@lang('dash.car')</label>
                      <div class="col-sm-10">
                    <select class="form-control" type="text" name="car_name" id="car_name">
                    <option value="">@lang('dash.select')</option>
                    <!-- cars list -->
                    </select>


                    @if ($errors->has('car_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('car_name') }}</strong>
                                        </span>
                     @endif
                     </div>
                     </div>
                </div>
                <div class="form-group{{ $errors->has('maintenance_place') ? ' has-error' : '' }}">
                    <input class="form-control" type="text" name="maintenance_place" id="maintenance_place" value="{{old('maintenance_place')}}" placeholder="@lang('dash.maintenance_place')">
                    @if ($errors->has('maintenance_place'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('maintenance_place') }}</strong>
                                        </span>
                     @endif
                </div>
                <div class="form-group{{ $errors->has('maintenance_type') ? ' has-error' : '' }}">
                    <input class="form-control" type="text" name="maintenance_type" id="maintenance_type" value="{{old('maintenance_type')}}" placeholder="@lang('dash.maintenance_type')">
                    @if ($errors->has('maintenance_type'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('maintenance_type') }}</strong>
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
                <div class="form-group{{ $errors->has('cost') ? ' has-error' : '' }}">
                    <input class="form-control" type="text" name="cost" id="cost" value="{{old('cost')}}" placeholder="@lang('dash.cost')">
                    @if ($errors->has('cost'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('cost') }}</strong>
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