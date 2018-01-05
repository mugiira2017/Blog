@extends('admin.layout.app')
@section('main-content')
 <div class="content-wrapper">
      <!-- Content Header (Page header) -->
    
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border" style="background: black">
              <h2 class="box-title" >Edit Categories</h2>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form"    action="{{route('category.update',$cat->id)}}" method="post">
            	{{csrf_field()}}
              {{method_field('PUT')}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputname">Name</label>
                  <input type="text" class="form-control" id="exampleInputname"  name="name"placeholder="Enter name" value="{{$cat->name}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputslug">Slug</label>
                  <input type="text" class="form-control" id="exampleInputSlug"  name="slug"placeholder="Enter category name" value="{{$cat->slug}}">
                </div>
                
                
            
               
              
                

              
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

          
       

@endsection