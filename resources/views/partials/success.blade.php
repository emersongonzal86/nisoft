@if(Session::has('alert'))

    <div class="pull-right">
    <p class="alert alert-info">
        {{ Session::get('alert') }}
    </p>
    </div>
@endif