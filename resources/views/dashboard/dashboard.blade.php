@extends('layouts.master')
@section('styles')

<link rel="stylesheet" type="text/css" href="{{asset('css/cars.css')}}">
<style type="text/css">
    @media print {

th{
  font-weight:normal;
}
#printbtn{
    display: none;
}

}
</style>


<script type="text/javascript">
  
  var getImg = function() {
    return "{{asset('images/samples/'.$dep.'.png')}}";
  }

</script>		
@endsection

@section('content')


@include('dashboard.'.$dep)

@endsection

