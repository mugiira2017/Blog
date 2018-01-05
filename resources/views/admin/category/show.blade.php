@extends('admin.layout.app')
@section('main-content')
 <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div>
        <center><h2>Categories Table</h2></center>
        <center><a href="{{route('category.create')}}" class="btn btn-success">Add Category</a></center>
        <br>
      </div>
      <div>
        <center>
      <table  border="1 solid black" >
        
    <tr>
      <th>sn no</th>
       <th>Name</th>
      <th>Slug</th>
      <th>Edit</th>
      <th>Delete</th>

    </tr>
    @foreach($cats as $cat)
    <tr>
      <td></td>
      <td>{{$cat->name}}</td>
      <td>{{$cat->slug}}</td>
      
      <td><a href="{{route('category.edit',$cat->id)}}">edit</a></td>
      
      <form method="post" id="delete-form-{{$cat->id}}" style="display:none;" action="{{route('category.destroy',$cat->id)}}">
        {{csrf_field()}}
        {{method_field('DELETE')}}
      </form>
      <td>
        <a href="" onclick="if(confirm('are you are sure you want delete')){
          event.preventDefault();
          document.getElementById('delete-form-{{$cat->id}}').submit();
        }
          else{
            event.preventDefault();
        }">Delete</a>
        

      </td>


    </tr>
    @endforeach



      </table>
    </center>
   </div>
</div>
@endsection