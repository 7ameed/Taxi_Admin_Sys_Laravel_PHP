





    <div class="panel panel-white" id="search">
        <div class="panel-heading">
            <h4></h4></div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form class="form-horizontal">
                        <div class="form-group col-sm-3">
                            <div class="col-sm-12">
                                <select id="disabledSelect" class="form-control" style="font-size: 13px;">
                                    <option>بحث عن</option>
                                    <option>سيارة</option>
                                    <option>سائق</option>
                                    <option>موظف</option>
                                    <option>تقرير</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-sm-9">
                            <div class="col-sm-12">
                                <input class="form-control" id="focusedInput" type="text" placeholder="ابحث" style="text-align: center;">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        
        <p class="text-center huge">2017 &copy;</p>
    </footer>
    </div>
    </div>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="bootstrap-editable/js/bootstrap-editable.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;
            $('.overlay').on('click',function(){
                overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
        $('#wrapper').toggleClass('toggled');
            });

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});
    </script>
    <script>

    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();

        $(".scrollto").click(function() {
            if($(this).attr('scroll-target') == 'editOil'){
                $('#oilModal').modal('show');
            }
            else if($(this).attr('scroll-target') == 'editCar'){
                $('#myModal').modal('show');
            }
            else if($(this).attr('scroll-target') == 'editExpense'){
                $('#expenseModal').modal('show');
            }
            else{
    $('html,body').animate({
        scrollTop: $('#'+$(this).attr('scroll-target')).offset().top -170},
        'slow');
}
});
    });
    </script>
    @yield('scripts')
</body>

</html>