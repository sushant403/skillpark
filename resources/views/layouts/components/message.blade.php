@if(session()->has('success'))
<div class="alert alert-success alert-dismissible position-fixed w-auto z-index-9999 right-0">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  <h4 style="color: white"><i class="fa fa-check mr-2"></i>Success!</h4>
    <strong>{{session()->get('success')}}</strong>
</div>
@endif

@if(session()->has('error'))
<div class="alert alert-warning alert-dismissible position-fixed w-auto z-index-9999 right-0">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  <h4 style="color: white"><i class="icon fa fa-check"></i> Error!</h4>
    <strong>{{session()->get('error')}}</strong>
</div>
@endif