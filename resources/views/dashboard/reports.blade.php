
<div class="container-fluid " style="background-color: white;padding: 10px 0;" id="cars">
    <div class="container">
        
        <form>
            <div class="row col-sm-6">
                
            <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }} col-sm-4">
                    <select class="form-control input_select" type="text" name="type" id="type">
                      <option value="all">@lang('dash.all')</option>
                      <option value="expenses">@lang('dash.expenses')</option>
                      <option value="za_maintenance">@lang('dash.za_maintenance')</option>

                    </select>
                </div>     
            <div class="form-group{{ $errors->has('from') ? ' has-error' : '' }} col-sm-4">
                <div class="row">
                    
                    <label class="col-sm-2">@lang('dash.from')</label>
                    <div class="col-sm-10">
                    <input class="form-control input_select" type="date" name="from" id="from">    
                    </div>
                </div>
             </div>  
             <div class="form-group{{ $errors->has('to') ? ' has-error' : '' }} col-sm-4">
                <div class="row">
                    
                    <label class="col-sm-2">@lang('dash.to')</label>
                    <div class="col-sm-10">
                    <input class="form-control input_select" type="date" name="to" id="to">    
                    </div>
                </div>
             </div>    
             </div>
        </form>
    </div>

    <div class="container-fluid" id="reports">
        <div class="col-sm-12">
            <h2 class="text-right">
                @lang('dash.reports')
            <a class="btn btn-primary" onclick="printPageArea('reports')" id="printbtn">@lang('dash.print')</a>
            </h2>
        </div>
    <div class="row ">
        <div class="col-sm-12">
            <h3 class="text-right">
                @lang('dash.za_maintenance')
            </h3>
        </div>
        <div id="no-more-tables">
            <table class="col-xs-12 table-bordered table-striped table-condensed cf">
            <thead class="cf">
              <tr>
                <th>@lang('dash.branch_name')</th>
                <th>@lang('dash.car')</ >
                <th >@lang('dash.maintenance_place')</th>
                <th >@lang('dash.maintenance_type')</th>
                <th >@lang('dash.date')</th>
                <th >@lang('dash.cash')</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-title="@lang('dash.branch_name')"></td>
                <td data-title="@lang('dash.car')"></td>
                <td data-title="@lang('dash.maintenance_place')"></td>
                <td data-title="@lang('dash.maintenance_type')"> <span class="small"></span></td>
                <td data-title="@lang('dash.date')"></td>
                <td data-title="@lang('dash.cash')"></td>
              </tr>
              
            </tbody>
          </table>
        </div>
        <div class="col-sm-12">
            <h3 class="text-right">
                @lang('dash.expenses')
            </h3>
        </div>
        <div id="no-more-tables">
            <table class="col-xs-12 table-bordered table-striped table-condensed cf">
            <thead class="cf">
              <tr>
                <th>@lang('dash.branch_name')</th>
                <th>@lang('dash.expense_name')</th>
                <th >@lang('dash.expense_detail')</th>
                <th >@lang('dash.date')</th>
                <th >@lang('dash.cash')</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-title="@lang('dash.branch_name')"></td>
                <td data-title="@lang('dash.expense_name')"></td>
                <td data-title="@lang('dash.expense_detail')"></td>
                <td data-title="@lang('dash.date')"> <span class="small"></span></td>
                <td data-title="@lang('dash.cash')"></td>
              </tr>
              
            </tbody>
          </table>
        </div>
        <div class="col-sm-12">
            <h3 class="text-right">
                @lang('dash.cars')
            </h3>
        </div>
        <div id="no-more-tables">
            <table class="col-xs-12 table-bordered table-striped table-condensed cf">
            <thead class="cf">
              <tr>
                <th>@lang('dash.za_name')</th>
                <th>@lang('dash.branch_name')</th>
                <th >@lang('dash.mark')</th>
                <th >@lang('dash.model') <span class="small">@lang('dash.year')</span></th>
                <th >@lang('dash.plate_num')</th>
                <th >@lang('dash.color')</th>
                <th >@lang('dash.price')</th>
                <th >@lang('dash.licence_exp_date')</th>
                <th >@lang('dash.insurance_exp_date')</th>
                <th >@lang('dash.oil_last_date')</th>
                <th >@lang('dash.status')</th>
                <th >@lang('dash.income')</th>
                <th >@lang('dash.pure_income')</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-title="@lang('dash.branch_name')"></td>
                <td data-title="@lang('dash.za_name')"></td>
                <td data-title="@lang('dash.mark')"></td>
                <td data-title="@lang('dash.model')"> <span class="small"></span></td>
                <td data-title="@lang('dash.plate_num')"></td>
                <td data-title="@lang('dash.color')"></td>
                <td data-title="@lang('dash.price')"></td>
                <td data-title="@lang('dash.licence_exp_date')"></td>
                <td data-title="@lang('dash.insurance_exp_date')"></td>
                <td data-title="@lang('dash.oil_last_date')"></td>
                <td data-title="@lang('dash.status')"></td>
                <td data-title="@lang('dash.income')"></td>
                <td data-title="@lang('dash.pure_income')"></td>

              </tr>
              
            </tbody>
          </table>
        </div>
        <div class="col-sm-12">
            <h3 class="text-right">
                @lang('dash.drivers')
            </h3>
        </div>
        <div id="no-more-tables">
            <table class="col-xs-12 table-bordered table-striped table-condensed cf">
            <thead class="cf">
              <tr>
                <th>@lang('dash.za_name')</th>
                <th>@lang('dash.branch_name')</th>
                <th >@lang('dash.mark')</th>
                <th >@lang('dash.model') <span class="small">@lang('dash.year')</span></th>
                <th >@lang('dash.plate_num')</th>
                <th >@lang('dash.color')</th>
                <th >@lang('dash.price')</th>
                <th >@lang('dash.licence_exp_date')</th>
                <th >@lang('dash.insurance_exp_date')</th>
                <th >@lang('dash.oil_last_date')</th>
                <th >@lang('dash.status')</th>
                <th >@lang('dash.income')</th>
                <th >@lang('dash.pure_income')</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-title="@lang('dash.branch_name')"></td>
                <td data-title="@lang('dash.za_name')"></td>
                <td data-title="@lang('dash.mark')"></td>
                <td data-title="@lang('dash.model')"> <span class="small"></span></td>
                <td data-title="@lang('dash.plate_num')"></td>
                <td data-title="@lang('dash.color')"></td>
                <td data-title="@lang('dash.price')"></td>
                <td data-title="@lang('dash.licence_exp_date')"></td>
                <td data-title="@lang('dash.insurance_exp_date')"></td>
                <td data-title="@lang('dash.oil_last_date')"></td>
                <td data-title="@lang('dash.status')"></td>
                <td data-title="@lang('dash.income')"></td>
                <td data-title="@lang('dash.pure_income')"></td>
              </tr>
              
            </tbody>
          </table>
        </div>
        <div class="col-sm-12">
            <h3 class="text-right">
                @lang('dash.employers')
            </h3>
        </div>
        <div id="no-more-tables">
            <table class="col-xs-12 table-bordered table-striped table-condensed cf">
            <thead class="cf">
              <tr>
                <th>@lang('dash.za_name')</th>
                <th>@lang('dash.branch_name')</th>
                <th >@lang('dash.mark')</th>
                <th >@lang('dash.model') <span class="small">@lang('dash.year')</span></th>
                <th >@lang('dash.plate_num')</th>
                <th >@lang('dash.color')</th>
                <th >@lang('dash.price')</th>
                <th >@lang('dash.licence_exp_date')</th>
                <th >@lang('dash.insurance_exp_date')</th>
                <th >@lang('dash.oil_last_date')</th>
                <th >@lang('dash.status')</th>
                <th >@lang('dash.income')</th>
                <th >@lang('dash.pure_income')</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-title="@lang('dash.branch_name')"></td>
                <td data-title="@lang('dash.za_name')"></td>
                <td data-title="@lang('dash.mark')"></td>
                <td data-title="@lang('dash.model')"> <span class="small"></span></td>
                <td data-title="@lang('dash.plate_num')"></td>
                <td data-title="@lang('dash.color')"></td>
                <td data-title="@lang('dash.price')"></td>
                <td data-title="@lang('dash.licence_exp_date')"></td>
                <td data-title="@lang('dash.insurance_exp_date')"></td>
                <td data-title="@lang('dash.oil_last_date')"></td>
                <td data-title="@lang('dash.status')"></td>
                <td data-title="@lang('dash.income')"></td>
                <td data-title="@lang('dash.pure_income')"></td>
              </tr>
              
            </tbody>
          </table>
        </div>
    </div>
</div>
                  
</div>
<hr>
@section('scripts')
<script type="text/javascript">
  
  function printPageArea(areaID){
    console.log(areaID);
    var printContents = document.getElementById(areaID).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
@endsection
