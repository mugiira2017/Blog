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
            <form role="form"    action="{{route('category.store')}}" method="post">
            	{{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputname">Name</label>
                  <input type="text" class="form-control" id="exampleInputname"  name="name"placeholder="Enter name">
                </div>
                <div class="form-group">
                  <label for="exampleInputslug">Slug</label>
                  <input type="text" class="form-control" id="exampleInputSlug"  name="slug"placeholder="Enter category name">
                </div>
                
            
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              
              
                <a href="{{route('category.index')}}" class="btn btn-primary pull-right">Back</a>
              </div>
            </form>
          </div>

          
       

@endsection