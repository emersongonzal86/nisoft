@extends('layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('validation.attributes.change_password')</div>
                    <div class="panel-body">

                        <form class="form-horizontal" role="form" method="POST" action="{{url('account/password')}}">

                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label class="col-md-4 control-label">@lang('validation.attributes.current_password')</label>
                                <div class="col-md-4">
                                    <input type="text" name="current_password">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">@lang('validation.attributes.password')</label>
                                <div class="col-md-4">
                                    <input type="text" name="password">
                                </div>
                            </div>

                            <div class="form-group">
                             <label class="col-md-4 control-label" for="passwordinput">@lang('validation.attributes.password_confirmation')</label>
                                <div class="col-md-4">
                                <input type="text" name="password_confirmation">
                                </div>
                        </div>

                            <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">

                                <button type="submit" class="btn btn-primary" style="margin-right: 15px;"> Change password</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection