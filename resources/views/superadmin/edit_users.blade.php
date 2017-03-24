@extends('layouts1.app')

@section('main-content')
	
			<h2> Edit User </h2>

	<section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">

              <!-- /. tools -->
           
            <!-- /.box-header -->
           
          <!-- /.box -->

          <div class="box">
            
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form action="{{ url('update_users', $tampiledit->id) }}" method="post">
                			    {!! csrf_field() !!}

                <div class="form-group has-feedback">
                    <input type="text" class="form-control"  name="name" value="{{ $tampiledit->name }}"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" name="email" value="{{ $tampiledit->email }}"/>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.password') }}" name="password"/>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.retrypepassword') }}" name="password_confirmation"/>
                   <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
				
				 <div class="form-group has-feedback">
                  <select class="form-control" name="id_group">
                    <option value="1">Super Admin</option>
                    <option value="2">Admin</option>
                    <option value="0">User</option>
                  </select>
                </div>
                        <button type="submit" class="btn btn-block btn-primary">Save</button>    <br />            
                       <a href="#" onclick="history.back();"> <button type="submit" class="btn btn-block btn-primary">Back</button></a>   
            </form>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
@endsection
