

    <div class="subnav" data-spy="affix" data-offset-top="197">
        <ul class="subnav-list">
            <li class="subnav-item">
                <a scroll-target="carsAna" class="subnav-item scrollto" data-toggle="tooltip" title="@lang('dash.analytics') @lang('dash.'.$dep)" data-placement="bottom">
                    <i class="fa fa-pie-chart fa-2x"></i>
                </a>
            </li>
            
            <li class="subnav-item">
                <a scroll-target="cars" class="subnav-item scrollto" data-toggle="tooltip" title=" @lang('dash.'.$dep)" data-placement="bottom">
                    <i class="fa fa-users fa-2x"></i>
                </a>
            </li>



            <li class="subnav-item">
                <a href="{{url('dashboard/employers/register')}}" class="subnav-item scrollto" data-toggle="tooltip" title="@lang('dash.add') @lang('dash.employers')" data-placement="bottom">
                    <i class="fa fa-plus fa-2x"></i>
                </a>
            </li>


            <li class="subnav-item">
                <a scroll-target="search" class="subnav-item scrollto" data-toggle="tooltip" title="@lang('dash.search')" data-placement="bottom">
                    <i class="fa fa-search fa-2x"></i>
                </a>
            </li>
        </ul>
    </div>



<!-- 
    <div class="panel panel-white " id="carsAna">
        <div class="panel-heading">
            <h4>{{__('dash.analytics') .' '.  __('dash.'.$dep)}}</h4></div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-users fa-4x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <div class="huge">26</div>
                                    <div>@lang('dash.all')</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-user fa-4x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <div class="huge">12</div>
                                    <div>@lang('dash.on_his_job')</div>
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
                                    <i class="fa fa-hand-stop-o  fa-4x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <div class="huge">124</div>
                                    <div>@lang('dash.stopped')</div>
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
                                    <i class="fa fa-ban  fa-4x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <div class="huge">124</div>
                                    <div>@lang('dash.banned')</div>
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
                                    <i class="fa fa-flag fa-4x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <div class="huge">13</div>
                                    <div>@lang('dash.holiday')</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 -->


<div class="container-fluid " style="background-color: white;padding: 10px 0;" id="cars">

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
                        <div class="col col-sm-6 text-right">
                            <div class="pull-right">
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default btn-filter active" data-target="completed">
                                        <input type="radio" name="options" id="option1" autocomplete="off" checked>
                                        @lang('dash.all')
                                        <span class="badge">5</span>
                                    </label>
                                    <label class="btn btn-default btn-filter" data-target="pending">
                                        <input type="radio" name="options" id="option2" autocomplete="off"> @lang('dash.on_his_job')
                                        <span class="badge">5</span>
                                    </label>
                                    <label class="btn btn-default btn-filter" data-target="all">
                                        <input type="radio" name="options" id="option3" autocomplete="off"> @lang('dash.stopped')
                                        <span class="badge">5</span>
                                    </label>
                                    <label class="btn btn-default btn-filter" data-target="all">
                                        <input type="radio" name="options" id="option3" autocomplete="off"> @lang('dash.banned')
                                        <span class="badge">5</span>
                                    </label>
                                    <label class="btn btn-default btn-filter" data-target="all">
                                        <input type="radio" name="options" id="option3" autocomplete="off"> @lang('dash.holiday')
                                        <span class="badge">5</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="container">
                <div class="col-xs-8 col-xs-offset-2 col-sm-offset-0 col-sm-4 col-md-3">

                    <div class="card">
                        <a href="{{url('dashboard/employers/1')}}">
                            <img src="{{asset('images/samples/eer.png')}}" onerror="this.src=getImg();" alt="Avatar" class="img-responsive" style=" width: 100%;display: block;">
                            <div class="container">
                                <h4><b>إسماعيل عبد الله</b></h4> 
                                <p>@lang('dash.on_his_job') <i class="fa fa-circle text-on_his_job"  aria-hidden="true"></i></p>
                            </div>
                        </a>
                    </div>

                </div>

                    

                </div>
                    <div class="row">
                        <div class="col col-sm-offset-3 col-sm-6">
                            <nav aria-label="Page navigation" class="text-center">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">«</span>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">»</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
            </div>
<hr>

