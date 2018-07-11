


    <div class="subnav" data-spy="affix" data-offset-top="197">
        <ul class="subnav-list">
            <!-- <li class="subnav-item">
                <a scroll-target="carsAna" class="subnav-item scrollto" data-toggle="tooltip" title="احصايات السيارات" data-placement="bottom">
                    <i class="fa fa-pie-chart fa-2x"></i>
                </a>
            </li> -->
            
            <li class="subnav-item">
                <a scroll-target="cars" class="subnav-item scrollto" data-toggle="tooltip" title="@lang('dash.'.$dep)" data-placement="bottom">
                    <i class="fa fa-taxi fa-2x"></i>
                </a>
            </li>



            <li class="subnav-item">
                <a href="{{url('dashboard/cars/register')}}" class="subnav-item scrollto" data-toggle="tooltip" title="@lang('dash.add') @lang('dash.car')" data-placement="bottom">
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
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-taxi fa-4x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <div class="huge">26</div>
                                    <div>السيارات النشطة</div>
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
                                    <div class="huge">12</div>
                                    <div>السيارات فى الصيانة</div>
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
                                    <div class="huge">124</div>
                                    <div>السيارات المباعة</div>
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
                                    <i class="fa fa-ban fa-4x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <div class="huge">13</div>
                                    <div>السيارات المحذوفة </div>
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
                                        <span class="badge">43</span>
                                    </label>
                                    <label class="btn btn-default btn-filter" data-target="pending">
                                        <input type="radio" name="options" id="option2" autocomplete="off"> @lang('dash.active')
                                        <span class="badge">43</span>
                                    </label>
                                    <label class="btn btn-default btn-filter" data-target="pending">
                                        <input type="radio" name="options" id="option2" autocomplete="off"> @lang('dash.maintenance')
                                        <span class="badge">32</span>
                                    </label>
                                    <label class="btn btn-default btn-filter" data-target="pending">
                                        <input type="radio" name="options" id="option2" autocomplete="off"> @lang('dash.sold')
                                        <span class="badge">12</span>
                                    </label>
                                    <label class="btn btn-default btn-filter" data-target="pending">
                                        <input type="radio" name="options" id="option2" autocomplete="off"> @lang('dash.deleted')
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
                        <a href="{{url('dashboard/cars/1')}}">
                            <img src="{{asset('images/samples/taxi.png')}}" onerror="this.src=getImg()" alt="Avatar" class="img-responsive" style=" width: 100%;display: block;">
                            <div class="container">
                                <h4><b>دودج سوبري</b></h4> 
                                <p>@lang('dash.active') <i class="fa fa-circle text-active"  aria-hidden="true"></i></p>
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


