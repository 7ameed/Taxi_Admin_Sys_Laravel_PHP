


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
                @include('dashboard.forms')
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




  <div class="subnav">
        <ul class="subnav-list">

            <li class="subnav-item">
                <a scroll-target="carDetails" class="subnav-item scrollto" data-toggle="tooltip" title="@lang('dash.'.$dep)" data-placement="bottom">
                    <i class="fa fa-user fa-2x"></i>
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




<!-- <div class="panel panel-white " id="carAna">
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
                                    <div>الدخل</div>
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
                                    <div>الصيانة</div>
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
                                    <div>صافى الدخل</div>
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
                                    <div>سعر البيع</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 -->



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
    <a  class="list-group-item col-md-6">
      <h5 class="list-group-item-heading">@lang('dash.branch_name')</h5>
      <p class="list-group-item-text"></p>
    </a>
    <a  class="list-group-item col-md-6" >
      <h5 class="list-group-item-heading">@lang('dash.emp_name')</h5>
      <p class="list-group-item-text"></p>
    </a>
    </div>
    <div class="row">
    <a  class="list-group-item col-md-6">
      <h5 class="list-group-item-heading">@lang('dash.emp_id')</h5>
      <p class="list-group-item-text"></p>
    </a>
    <a  class="list-group-item col-md-6">
      <h5 class="list-group-item-heading">@lang('dash.birthdate')</h5>
      <p class="list-group-item-text"></p>
    </a>
    </div>
    <div class="row">
    <a  class="list-group-item col-md-6">
      <h5 class="list-group-item-heading">@lang('dash.address')</h5>
      <p class="list-group-item-text"></p>
    </a>
    <a  class="list-group-item col-md-6">
      <h5 class="list-group-item-heading">@lang('dash.phone_num')</h5>
      <p class="list-group-item-text"></p>
    </a>
    </div>
    <div class="row">
    <a  class="list-group-item col-md-6">
      <h5 class="list-group-item-heading">@lang('dash.edu_qual')</h5>
      <p class="list-group-item-text"></p>
    </a>
    <a  class="list-group-item col-md-6">
      <h5 class="list-group-item-heading">@lang('dash.join_date')</h5>
      <p class="list-group-item-text"></p>
    </a>
    </div>
    <div class="row">
    <a  class="list-group-item col-md-6">
      <h5 class="list-group-item-heading">@lang('dash.emp_id_image')</h5>
      <p class="list-group-item-text btn label label-danger">@lang('dash.attachment')</p>
    </a>
    <a  class="list-group-item col-md-6">
      <h5 class="list-group-item-heading">@lang('dash.car')</h5>
      <p class="list-group-item-text"></p>
      <p class="list-group-item-text btn label label-info">@lang('dash.details')</p>
    </a>
    </div>
    <div class="row">
    <a  class="list-group-item col-md-6">
      <h5 class="list-group-item-heading">@lang('dash.status')</h5>
      <p class="list-group-item-text"></p>
    </a>
    </div>
  </div>

      </div>
    </div>
</div>
</div>


<br>
<br>
<br>
<br>