
<div class="panel panel-white " id="addCar">
        <div class="panel-heading">
            <h4></h4></div>
        <div class="panel-body">

      @if(isset($sec))
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 signUp">
      @if($sec == 'register')
            
            <h3 class="headerSign">@lang('dash.register') @lang('dash.newcar')</h3>
            
      @elseif($sec == 'edit')
            <h3 class="headerSign">@lang('dash.edit') @lang('dash.car') <span class="text-danger">asda</span></h3>


      @endif
      @endif

            <form class="form-horizontal" id="form" name="form" method="post"  action="{{url('') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}


                <div class="form-group{{ $errors->has('branch_name') ? ' has-error' : '' }}">
                <div class="row">
                    <label for="branch_name" class="darktext col-sm-4 col-md-3">@lang('dash.branch_name')</label>
                    <div class=" col-sm-8 col-md-9">
                    <select class="form-control input_select" type="text" name="branch_name" id=".branch_name">
                      <option value="">@lang('dash.select')</option>


                      <!-- branches list is here -->

                    </select>
                     @if ($errors->has('branch_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('branch_name') }}</strong>
                                        </span>
                     @endif
                     </div>
                     </div>
                </div>

                <div class="form-group{{ $errors->has('car_name') ? ' has-error' : '' }}">
                    <input class="form-control" type="text" name="car_name" id="car_name" placeholder="@lang('dash.car_name')">
                    @if ($errors->has('car_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('car_name') }}</strong>
                                        </span>
                     @endif
                </div>
                <div class="form-group{{ $errors->has('mark') ? ' has-error' : '' }}">
                    <input class="form-control" type="text" name="mark" id="mark" placeholder="@lang('dash.mark')">
                    @if ($errors->has('mark'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('mark') }}</strong>
                                        </span>
                     @endif
                </div>
                <div class="form-group{{ $errors->has('model') ? ' has-error' : '' }}">
                    <input class="form-control" type="text" name="model" id="model" placeholder="@lang('dash.model')">
                    @if ($errors->has('model'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('model') }}</strong>
                                        </span>
                     @endif
                </div>


                <div class="form-group{{ $errors->has('model_year') ? ' has-error' : '' }}">
                <div class="row">
                    <label for="model_year" class="darktext col-sm-4 col-md-2">@lang('dash.model_year')</label>
                    <div class=" col-sm-8 col-md-10">
                    <input class="form-control" type="number" min="1950" max="{{date('Y')}}" name="model_year" id="model_year" value="{{date('Y')}}" placeholder="model_year">
                    @if ($errors->has('model_year'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('model_year') }}</strong>
                                        </span>
                     @endif
                     </div>
                     </div>
                </div>

                <div class="form-group{{ $errors->has('plate_num') ? ' has-error' : '' }}">
                    <input class="form-control" type="text" name="plate_num" id="plate_num" placeholder="@lang('dash.plate_num')">
                    @if ($errors->has('plate_num'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('plate_num') }}</strong>
                                        </span>
                     @endif
                </div>
                <div class="form-group{{ $errors->has('color') ? ' has-error' : '' }}">
                    <input class="form-control" type="text" name="color" id="color" placeholder="@lang('dash.color')">
                    @if ($errors->has('color'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('color') }}</strong>
                                        </span>
                     @endif
                </div>
                <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                    <input class="form-control" type="text" name="price" id="price" placeholder="@lang('dash.price')">
                    @if ($errors->has('price'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('price') }}</strong>
                                        </span>
                     @endif
                </div>


                <div class="form-group{{ $errors->has('licence_exp_date') ? ' has-error' : '' }}">
                    <div class="row">
                    <label for="licence_exp_date" class="darktext col-sm-4 col-md-3">@lang('dash.licence_exp_date')</label>
                    <div class=" col-sm-8 col-md-9">
                    <input class="form-control" type="date"  min="{{date('Y-m-d')}}" max="2040-01-02" name="licence_exp_date" id="licence_exp_date" value="">
                    @if ($errors->has('licence_exp_date'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('licence_exp_date') }}</strong>
                                        </span>
                     @endif
                     </div>
                     </div>
                </div>

                <div class="form-group{{ $errors->has('insurance_exp_date') ? ' has-error' : '' }}">
                    <div class="row">
                    <label for="insurance_exp_date" class="darktext col-sm-4 col-md-3">@lang('dash.insurance_exp_date')</label>
                    <div class=" col-sm-8 col-md-9">
                    <input class="form-control" type="date" min="{{date('Y-m-d')}}" max="2040-01-02" name="insurance_exp_date" id="insurance_exp_date" value="">
                    @if ($errors->has('insurance_exp_date'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('insurance_exp_date') }}</strong>
                                        </span>
                     @endif
                     </div>
                     </div>
                </div>
                <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                    <div class="row">
                    <label for="image" class="darktext col-sm-4 col-md-3">@lang('dash.image')</label>
                    <div class=" col-sm-8 col-md-9">
                    <input class="form-control" type="file" name="image" id="image" value="">
                    @if ($errors->has('image'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                     @endif
                     </div>
                     </div>
                </div>

@if($dep == 'car')
                <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                <div class="row">
                    <label for="status" class="darktext col-sm-4 col-md-2">@lang('dash.status')</label>
                    <div class=" col-sm-8 col-md-10">
                    <select class="form-control input_select" name="status" id="status">
                      <option value="active">@lang('dash.active')</option>
                      <option value="maintenance">@lang('dash.maintenance')</option>
                      <option value="sold">@lang('dash.sold')</option>
                      <option value="deleted">@lang('dash.deleted')</option>

                    </select>
                     @if ($errors->has('status'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('status') }}</strong>
                                        </span>
                     @endif
                     </div>
                     </div>
                </div>
@endif

                <button type="submit" class=" signbuttons btn btn-primary">@lang('dash.done')</button>

            </form>
            </div>
            </div>
            </div>