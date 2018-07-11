


<div id="oilModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title headerSign">@lang('cars.change_oil_last_date')</h4>
      </div>
      <div class="modal-body">




<div class="panel panel-white " id="addCar">
        <div class="panel-heading">
            </div>


        <div class="panel-body">

            <div class="signUp">
            <form class="form-horizontal" id="form" name="form" method="post"  action="{{url('') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

            <div class="form-group{{ $errors->has('change_oil_last_date') ? ' has-error' : '' }}">

                         <div class="row">
                    <label for="oil_last_date" class="darktext col-sm-4 col-md-3">@lang('cars.oil_last_date')</label>
                    <div class=" col-sm-8 col-md-9">
                    <p>//last date</p>
                     </div>
                     </div>
</div>

            <div class="form-group{{ $errors->has('change_oil_last_date') ? ' has-error' : '' }}"> 
                    <div class="row">
                    <label for="change_oil_last_date" class="darktext col-sm-4 col-md-3">@lang('cars.change')</label>
                    <div class=" col-sm-8 col-md-9">
                    <input class="form-control" type="date"  min="{{date('Y-m-d')}}" max="2040-01-02" name="change_oil_last_date" id="change_oil_last_date" value="">
                    @if ($errors->has('change_oil_last_date'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('change_oil_last_date') }}</strong>
                                        </span>
                     @endif
                     </div>
                     </div>
                </div>


                <button type="submit" class="col-sm-offset-4 col-md-offset-3 signbuttons btn btn-primary">@lang('cars.done')</button>

            </form>
        </div>

        </div>
</div>





      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<div id="expenseModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title headerSign">@lang('dash.add') @lang('dash.return') @lang('dash.daily')</h4>
      </div>
      <div class="modal-body">




<div class="panel panel-white " id="addCar">
        <div class="panel-heading">
            </div>


        <div class="panel-body">

            <div class="signUp">
            <form class="form-horizontal" id="form" name="form" method="post"  action="{{url('') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

            <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">

                         <div class="row">
                    <label for="date" class="darktext col-sm-4 col-md-3">@lang('dash.date')</label>
                    <div class=" col-sm-8 col-md-9">
                      <input class="form-control" type="date"  min="{{date('Y-m-d')}}" max="2040-01-02" name="date" id="date" value="">
                    @if ($errors->has('date'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('date') }}</strong>
                                        </span>
                     @endif
                     </div>
                     </div>
            </div>

            <div class="form-group{{ $errors->has('return') ? ' has-error' : '' }}"> 
                    
                    <input class="form-control" type="text" name="return" id="return" placeholder="@lang('dash.return')">
                    @if ($errors->has('return'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('return') }}</strong>
                                        </span>
                     @endif 
                </div>


                <button type="submit" class="col-sm-offset-4 col-md-offset-3 signbuttons btn btn-primary">@lang('dash.add')</button>

            </form>
        </div>

        </div>
</div>





      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title headerSign">@lang('dash.edit') @lang('dash.'.$dep)</h4>
      </div>
      <div class="modal-body">




<div class="panel panel-white " id="addCar">
        <div class="panel-heading">
            </div>


        <div class="panel-body">

            <div class="signUp">
            @include('dashboard.formcars')
        </div>

        </div>
</div>





      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">@lang('dash.close')</button>
      </div>
    </div>

  </div>
</div>






  <div class="subnav" data-spy="affix" data-offset-top="197">
        <ul class="subnav-list">
            <li class="subnav-item">
                <a scroll-target="cars" class="subnav-item scrollto"  data-toggle="tooltip" title="@lang('dash.analytic') @lang('dash.'.$dep)" data-placement="bottom">
                    <i class="fa fa-pie-chart fa-2x"></i>
                </a>
            </li>

            <li class="subnav-item">
                <a scroll-target="carDetails" class="subnav-item scrollto" data-toggle="tooltip" title="@lang('dash.'.$dep)" data-placement="bottom">
                    <i class="fa fa-taxi fa-2x"></i>
                </a>
            </li>


            <li class="subnav-item">
                <a scroll-target="editExpense" class="subnav-item scrollto" data-toggle="tooltip" title="@lang('dash.add') @lang('dash.return') @lang('dash.daily')" data-placement="bottom">
                    <i class="fa fa-money fa-2x"></i>
                </a>
            </li>

            <li class="subnav-item">
                <a scroll-target="editOil" class="subnav-item scrollto" data-toggle="tooltip" title="@lang('dash.oil_last_date')" data-placement="bottom">
                    <i class="fa fa-tint fa-2x"></i>
                </a>
            </li>

            <li class="subnav-item">
                <a scroll-target="editCar" class="subnav-item scrollto" data-toggle="tooltip" title="@lang('dash.edit') @lang('dash.'.$dep)" data-placement="bottom">
                    <i class="fa fa-pencil fa-2x"></i>
                </a>
            </li>


            <li class="subnav-item">
                <a scroll-target="search" class="subnav-item scrollto" data-toggle="tooltip" title="@lang('dash.search')" data-placement="bottom">
                    <i class="fa fa-search fa-2x"></i>
                </a>
            </li>
        </ul>
    </div>




<div class="panel panel-white " id="cars">
        <div class="panel-heading">
            <h4>{{__('dash.analytic') .' '.  __('dash.'.$dep)}}</h4>
            </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-money fa-4x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <div class="large">26</div>
                                    <div>@lang('dash.income')</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-wrench fa-4x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <div class="large">12</div>
                                    <div>@lang('dash.za_maintenance')</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-usd  fa-4x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <div class="large">124</div>
                                    <div>@lang('dash.pure_income')</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-shopping-cart fa-4x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <div class="large">13</div>
                                    <div>@lang('dash.selling_price')</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




<div class="container-fluid" id="carDetails">
    <div class="row" id="main">
        <div class="col-md-4" id="leftPanel">
            <div class="row">
                <div class="col-md-12">
                <div class="col-md-12">
                        <img src="{{asset('ppics/s')}}" onerror="this.src=getImg();"  alt="car" class="img-thumbnail ">
                </div>
                        <h2>@lang('dash.name') @lang('dash.'.$dep)<span class="small"></span></h2>
                            <button id="editBtn" type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
                                @lang('dash.edit')</button>
                </div>
            </div>
        </div>


        <div class="col-md-8" id="rightPanel">
        <div class="panel panel-white">
      <div class="panel-heading darktext large">@lang('dash.details')</div>
      <div class="panel-body">
         <div class="list-group">
         <div class="row">
    <a href="#" class="list-group-item col-md-6">
      <h5 class="list-group-item-heading">@lang('dash.branch_name')</h5>
      <p class="list-group-item-text"></p>
    </a>
    <a href="#" class="list-group-item col-md-6" >
      <h5 class="list-group-item-heading">@lang('dash.car_name')</h5>
      <p class="list-group-item-text"></p>
    </a>
    </div>
    <div class="row">
    <a href="#" class="list-group-item col-md-6">
      <h5 class="list-group-item-heading">@lang('dash.mark')</h5>
      <p class="list-group-item-text"></p>
    </a>
    <a href="#" class="list-group-item col-md-6">
      <h5 class="list-group-item-heading">@lang('dash.plate_num')</h5>
      <p class="list-group-item-text"></p>
    </a>
    </div>
    <div class="row">
    <a href="#" class="list-group-item col-md-6">
      <h5 class="list-group-item-heading">@lang('dash.model')</h5>
      <p class="list-group-item-text"></p>
    </a>
    <a href="#" class="list-group-item col-md-6">
      <h5 class="list-group-item-heading">@lang('dash.model_year')</h5>
      <p class="list-group-item-text"></p>
    </a>
    </div>
    <div class="row">
    <a href="#" class="list-group-item col-md-6">
      <h5 class="list-group-item-heading">@lang('dash.color')</h5>
      <p class="list-group-item-text"></p>
    </a>
    <a href="#" class="list-group-item col-md-6">
      <h5 class="list-group-item-heading">@lang('dash.price')</h5>
      <p class="list-group-item-text"></p>
    </a>
    </div>
    <div class="row">
    <a href="#" class="list-group-item col-md-6">
      <h5 class="list-group-item-heading">@lang('dash.licence_exp_date')</h5>
      <p class="list-group-item-text"></p>
    </a>
    <a href="#" class="list-group-item col-md-6">
      <h5 class="list-group-item-heading">@lang('dash.insurance_exp_date')</h5>
      <p class="list-group-item-text"></p>
    </a>
    </div>
    <div class="row">
    <a href="#" class="list-group-item col-md-6">
      <h5 class="list-group-item-heading">@lang('dash.status')</h5>
      <p class="list-group-item-text"></p>
    </a>
    <a href="#" class="list-group-item col-md-6">
      <h5 class="list-group-item-heading">@lang('dash.oil_last_date')</h5>
      <p class="list-group-item-text"></p>
    </a>
    </div>
  </div>

      </div>
    </div>

</div>

</div>
</div>