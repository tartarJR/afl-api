@if(Session::has('successMessage'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ Session::get('successMessage') }}
    </div>
@endif