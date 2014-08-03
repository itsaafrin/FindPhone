@if(Session::has('error'))
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    {{ Session::get('error') }}
</div>
@endif

@if($errors->all())
@foreach($errors->all() as $error)
<div class="alert alert-danger">
     <button type="button" class="close" data-dismiss="alert">&times;</button>
     {{ $error }}
</div>
@endforeach
@endif
