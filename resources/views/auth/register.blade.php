
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
                            <label for="fname" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control" name="fname" value="{{ old('fname') }}" required autofocus>

                                @if ($errors->has('fname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
                            <label for="lname" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control" name="lname" value="{{ old('lname') }}" required >

                                @if ($errors->has('lname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('contactno') ? ' has-error' : '' }}">
                            <label for="contactno" class="col-md-4 control-label">Contact</label>

                            <div class="col-md-6">
                                <input id="contactno" type="text" class="form-control" name="contactno" value="{{ old('contactno') }}" required >

                                @if ($errors->has('contactno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contactno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('imid') ? ' has-error' : '' }}">
                            <label for="imid" class="col-md-4 control-label">imid</label>

                            <div class="col-md-6">
                                <input id="imid" type="text" class="form-control" name="imid" value="{{ old('imid') }}" required >

                                @if ($errors->has('imid'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('imid') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('imaccount') ? ' has-error' : '' }}">
                            <label for="imaccount" class="col-md-4 control-label">imaccount</label>

                            <div class="col-md-6">
                                <input id="imaccount" type="text" class="form-control" name="imaccount" value="{{ old('imaccount') }}" required >

                                @if ($errors->has('imaccount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('imaccount') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('roles_id') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input id="roles_id" type="hidden" class="form-control" name="roles_id" value="1" required>
                                <input id="admin_id" type="hidden" class="form-control" name="admin_id" value="0" required>

                                @if ($errors->has('roles_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('roles_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
