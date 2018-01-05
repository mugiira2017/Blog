@extends('admin.layout.app')
@section('main-content')
 <div class="content-wrapper">
      <!-- Content Header (Page header) -->

 @if(count($errors)>0)
     <div class="alert alert-warning">
              
              @foreach($errors->all() as $error)
              {{$error}}
              @endforeach

            </div>
              @endif



<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border" style="background: black">
              <h2 class="box-title" >Add Posts From Here</h2>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form"    action="{{route('tag.store')}}" method="post">
            	{{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputTitle">Title</label>
                  <input type="text" class="form-control" id="exampleInputTitle"  name="title" placeholder="Enter title">
                </div>
                <div class="form-group">
                  <label for="exampleInputSubtitle">Sub-Title</label>
                  <input type="text" class="form-control" id="exampleInputSubtitle"  name="subtitle" placeholder="Enter sub-title">
                </div>
                <div class="form-group">
                  <label for="exampleInputSlug">Slug</label>
                  <input type="text" class="form-control" id="exampleInputSlug"  name="slug"  placeholder="Enter slug">
                </div>
               
                
              </div>
               
                  <div class="box">
            <div class="box-header">
              <h3 class="box-title">Bootstrap WYSIHTML5
                <small>Simple and fast</small>
              </h3>
              <!-- tools box -->
              
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              
                <textarea class="textarea" placeholder="Place some text here" name="body" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              
            </div>
          </div>

                </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

          
       

@endsection


      
    </div>