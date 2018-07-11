

    <div class="subnav" data-spy="affix" data-offset-top="197">
        <ul class="subnav-list">
            
            <li class="subnav-item">
                <a scroll-target="cars" class="subnav-item scrollto" data-toggle="tooltip" title=" @lang('dash.'.$dep)" data-placement="bottom">
                    <i class="fa fa-users fa-2x"></i>
                </a>
            </li>



            <li class="subnav-item">
                <a href="{{url('dashboard/users/register')}}" class="subnav-item scrollto" data-toggle="tooltip" title="@lang('dash.add') @lang('dash.'.$dep)" data-placement="bottom">
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


<div class="container-fluid " style="background-color: white;padding: 10px 0;" id="cars">

                <div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="text-right">
                @lang('dash.users')
            </h2>
        </div>
        <div id="no-more-tables">
            <table class="col-md-12 table-bordered table-striped table-condensed cf">
            <thead class="cf">
              <tr>
                <th>@lang('dash.branch_name')</th>
                <th>@lang('dash.za_name')</th>
                <th >@lang('dash.position')</th>
                <th >@lang('dash.email')</th>
                <th >@lang('dash.edit')</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-title="@lang('dash.branch_name')">دوسة</td>
                <td data-title="@lang('dash.za_name')">دوامة</td>
                <td data-title="@lang('dash.position')" pos-title="manager">مدير</td>
                <td data-title="@lang('dash.email')">-</td>
                <td data-title="@lang('dash.edit')"><a  href="{{url('dashboard/users/edit/1')}}" class="btn btn-default">@lang('dash.edit')</a></td>
              </tr>
              
            </tbody>
          </table>
        </div>
    </div>
</div>
                  
</div>
<hr>
