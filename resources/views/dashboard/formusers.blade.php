
<div class="panel panel-white " id="addCar">
        <div class="panel-heading">
            <h4></h4></div>
        <div class="panel-body">
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 signUp">
      @if($sec == 'register')
            <h3 class="headerSign">@lang('dash.register') @lang('dash.user')</h3>
      @elseif($sec == 'edit')
            
            <h3 class="headerSign">@lang('dash.edit') @lang('dash.zauser') <span class="text-danger">asda</span></h3>
            
      @endif

<form class="form-horizontal" id="form" name="form" method="post"  action="{{url('') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}


                <div class="form-group{{ $errors->has('branch_name') ? ' has-error' : '' }}">
                <div class="row">
                    <label for="branch_name" class="darktext col-sm-4 col-md-2">@lang('dash.branch_name')</label>
                    <div class=" col-sm-8 col-md-10">
                    <select class="form-control input_select" type="text" name="branch_name" id="branch_name">
                      <option value="">@lang('dash.select')</option>


                      <!-- branches list is here -->
<!--  -->
                      <option @if(old('branch_name')=='thisvalue') selected="selected" @endif value="thisvalue">thisvalue</option>

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
                    <input class="form-control" type="text" name="name" id="name" value="{{old('name')}}" placeholder="@lang('dash.name')">
                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                     @endif
                </div>
                 <div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
                <div class="row">
                    <label for="position" class="darktext col-sm-4 col-md-2">@lang('dash.position')</label>
                    <div class=" col-sm-8 col-md-10">
                    <select class="form-control input_select" type="text" name="position" id="position">
                      <option @if(old('position')=='admin') selected="selected" @endif value="admin">@lang('dash.admin')</option>
                      <option @if(old('position')=='manager') selected="selected" @endif value ="manager">@lang('dash.manager')</option>



                    </select>
                     @if ($errors->has('position'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('position') }}</strong>
                                        </span>
                     @endif
                     </div>
                     </div>
                </div>


                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input class="form-control" type="email" id="email" value="{{old('email')}}" placeholder="@lang('dash.email')">
                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                     @endif
                </div>



                <button type="submit" class=" signbuttons btn btn-primary">@lang('dash.done')</button>

            </form>
            </div>
            </div>
            </div>