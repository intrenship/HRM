@section('js')
<script type="text/javascript">

      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#showgambar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inputgambar").change(function () {
        readURL(this);
    });

</script>

@stop

@extends('layouts1.app')

@section('main-content')
	<style type="text/css">

.textarea-none-resize{
 width: 1000px;
 height: 180px;
 resize: none;
}
</style>
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
              <form action="{{ url('store') }}" method="POST"  enctype="multipart/form-data">
			    {!! csrf_field() !!}

		<div class="box-body">
                <div class="form-group" align>
                  <label for="exampleInputEmail1">Headline</label>
                  <p align="center"><input type="text" class="form-control" id="judul" name="judul" placeholder="Enter Headline"></p>
                </div>
                <!--<div class="form-group">
                  <label for="exampleInputFile"></label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
				-->
				<div class="row">
        <div class="col s6">
            <img src="http://placehold.it/100x100" id="showgambar" style="max-width:200px;max-height:200px;float:left;" />
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
          <input type="file" id="inputgambar" name="gambar" class="validate"/ >
        </div>
      </div>
              </div>
			  <div class="form-group">
                  <label>Content</label>
              </div>
				<p align="center"><textarea class="form-control" cols="200" rows="10" placeholder="Place enter content" name="berita"></textarea></p>
             <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
			 </form>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
@endsection
