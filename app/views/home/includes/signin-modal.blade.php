<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <img src="{{url('assets/img/logo.png')}}" height="30px">
            </div>
            <div class="modal-body">
                {{Form::open(array('route'=>'login','class'=>'form-horizontal'))}}
                <div class="form-group">
                    <div class="col-md-3 text-center text-primary">
                        <br>
                        <i class="fa fa-lock fa-5x"></i><br>
                        User Login
                    </div>
                    <div class="col-md-8">
                        <div class="input-group mb-md">
                            <span class="input-group-addon"><i class="fa fa-user"></i> </span>
                            {{Form::email('email',null,array('placeholder'=>'E.g. username@example.com','class'=>'form-control','required'))}}
                        </div>
                        {{$errors->first("email","<p class='text-danger'>:message</p>")}}

                        <div class="input-group mb-md">
                            <span class="input-group-addon"><i class="fa fa-eye"></i> </span>
                            {{Form::password('password',array('placeholder'=>'E.g. * * * * * *','class'=>'form-control','required'))}}
                        </div>
                        {{$errors->first("password","<p class='text-danger'>:message</p>")}}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-3 col-md-8">
                        <button class="btn btn-3d pull-left" type="reset">Reset</button>
                        <button class="btn btn-primary btn-borders pull-right" type="submit">Sign In</button>
                    </div>
                </div>
                {{Form::close()}}
            </div>

        </div>
    </div>
</div>