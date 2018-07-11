
<div class="panel panel-white " id="addCar">
        <div class="panel-heading">
            <h4></h4></div>
        <div class="panel-body">

      @if(isset($sec))
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 signUp">
      @if($sec == 'register')
            
            <h3 class="headerSign">@lang('dash.register') @lang('dash.newdriver')</h3>
            
      @elseif($sec == 'edit')
            <h3 class="headerSign">@lang('dash.edit') @lang('dash.driver') <span class="text-danger">asda</span></h3>


      @endif
      @endif

<form class="form-horizontal" id="form" name="form" method="post"  action="{{url('') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}


                <div class="form-group{{ $errors->has('branch_name') ? ' has-error' : '' }}">
                <div class="row">
                    <label for="branch_name" class="darktext col-sm-4 col-md-2">@lang('dash.branch_name')</label>
                    <div class=" col-sm-8 col-md-10">
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

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input class="form-control" type="text" name="name" id="name" placeholder="@lang('dash.name')">
                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                     @endif
                </div>

                <div class="form-group{{ $errors->has('nid') ? ' has-error' : '' }}">
                    <input class="form-control" type="text" name="nid" id="nid" placeholder="@lang('dash.nid')">
                    @if ($errors->has('nid'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nid') }}</strong>
                                        </span>
                     @endif
                </div>


                <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                    <input class="form-control" type="date" min="2040-01-02" name="birthday" max="{{date('Y-m-d')}}" id="birthday" placeholder="@lang('dash.birthday')">
                    @if ($errors->has('birthday'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('birthday') }}</strong>
                                        </span>
                     @endif
                </div>
                <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                    <input class="form-control" type="text" name="address" id="address" placeholder="@lang('dash.address')">
                    @if ($errors->has('address'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                     @endif
                </div>

                <div class="form-group{{ $errors->has('phone_num') ? ' has-error' : '' }}">
                    <input class="form-control" type="text" name="phone_num" id="phone_num" placeholder="@lang('dash.phone_num')">
                    @if ($errors->has('phone_num'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phone_num') }}</strong>
                                        </span>
                     @endif
                </div>

                <div class="form-group{{ $errors->has('edu_qual') ? ' has-error' : '' }}">
                    <input class="form-control" type="text" name="edu_qual" id="edu_qual" placeholder="@lang('dash.edu_qual')">
                    @if ($errors->has('edu_qual'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('edu_qual') }}</strong>
                                        </span>
                     @endif
                </div>


                <div class="form-group{{ $errors->has('join_date') ? ' has-error' : '' }}">
                    <div class="row">
                    <label for="join_date" class="darktext col-sm-4 col-md-3">@lang('dash.join_date')</label>
                    <div class=" col-sm-8 col-md-9">
                    <input class="form-control" type="date" min="{{date('Y-m-d')}}" max="2040-01-02" name="join_date" id="join_date" value="">
                    @if ($errors->has('join_date'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('join_date') }}</strong>
                                        </span>
                     @endif
                     </div>
                     </div>
                </div>

                <div class="form-group{{ $errors->has('profile_image') ? ' has-error' : '' }}">
                    <div class="row">
                    <label for="profile_image" class="darktext col-sm-4 col-md-3">@lang('dash.profile_image')</label>
                    <div class=" col-sm-8 col-md-9">
                    <input class="form-control" type="file" name="profile_image" id="profile_image" value="">
                    @if ($errors->has('profile_image'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('profile_image') }}</strong>
                                        </span>
                     @endif
                     </div>
                     </div>
                </div>
                <div class="form-group{{ $errors->has('nid_image') ? ' has-error' : '' }}">
                    <div class="row">
                    <label for="nid_image" class="darktext col-sm-4 col-md-3">@lang('dash.nid_image')</label>
                    <div class=" col-sm-8 col-md-9">
                    <input class="form-control" type="file" name="nid_image" id="nid_image" value="">
                    @if ($errors->has('nid_image'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nid_image') }}</strong>
                                        </span>
                     @endif
                     </div>
                     </div>
                </div>



                <div class="form-group{{ $errors->has('job_title') ? ' has-error' : '' }}">
                    <input class="form-control" type="text" name="job_title" id="job_title" placeholder="@lang('dash.job_title')">
                    @if ($errors->has('job_title'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('job_title') }}</strong>
                                        </span>
                     @endif
                </div>
                <div class="form-group{{ $errors->has('car') ? ' has-error' : '' }}">
                <div class="row">
                    <label for="car" class="darktext col-sm-4 col-md-2">@lang('dash.car')</label>
                    <div class=" col-sm-8 col-md-10">
                    <select class="form-control input_select" name="car" id="car">
                      <option value="on_his_job">@lang('dash.without')</option>
                      <!-- cars without drivers list here -->
                    </select>
                     @if ($errors->has('car'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('car') }}</strong>
                                        </span>
                     @endif
                     </div>
                     </div>
                </div>

@if($dep == 'driver')
                <div class="form-group{{ $errors->has('emp_status') ? ' has-error' : '' }}">
                <div class="row">
                    <label for="emp_status" class="darktext col-sm-4 col-md-2">@lang('dash.status')</label>
                    <div class=" col-sm-8 col-md-10">
                    <select class="form-control input_select" name="emp_status" id="emp_status">
                      <option value="on_his_job">@lang('dash.working')</option>
                      <option value="stopped">@lang('dash.waiting')</option>
                      <option value="banned">@lang('dash.banned')</option>
                      <option value="holiday">@lang('dash.holiday')</option>

                    </select>
                     @if ($errors->has('emp_status'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('emp_status') }}</strong>
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