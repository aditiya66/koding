@extends('admin.admin_template')
@section('content')
<div class="row">
            <!-- /.box-header -->
            <div class="box-body pad">
              {!! Form::open(array('url'=> 'articles','role'=> 'form' )) !!}
                <div class="form-group">
                  {!!Form::label('title', 'Title', array('class' => 'col-lg-3 control-label'))!!}
                  <div class="col-lg-9">
                    {!! Form::text('title',null,array('class'=>'form-control','autofocus'=>'true')) !!}
                      {{$errors->first('title')}}
                </div>
                <div class="clear"> </div>
                </div>
                <div class="form-group">
                {!! Form::textarea('content',null,array('id'=>'summernote','rows' => '10','cols'=>'80'))!!}
                  {{$errors->first('content')}}
                  <div class="clear"></div>
                  </div>
                <div class="form-group">
                {!! Form::label('author','Author',array('class' => 'col-lg-3 control-label'))!!}
                <div class="col-lg-9">
                    {!! Form::text('author',null,array('class'=>'form-control')) !!}
                      {{$errors->first('author')}}
                </div>
                <div class="clear"></div>
                </div>

                 <div class="form-group">
                <div class="col-lg-3"></div>
    <div class="col-lg-9">
      {!!Form::submit('Save', array('class' => 'btn btn-primary'))!!}
    </div>
    <div class="clear"></div>
  </div>
                {!! Form::close() !!}
            </div>
          
          </div>
          <!-- /.box -->

        

@stop