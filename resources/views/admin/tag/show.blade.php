@extends('admin.layout.app')
@section('main-content')
 <div class="content-wrapper">
  <div>
    <div>

      <h2><center>Tag Table</center></h2>
    </div>
    <br>
<center>
<table border="1 solid black" width="300px" height="250px" style="smargin-top: 10px;" align="center">

<tr> 
<th>Name</th>
<th>Slug</th>
<th>Edit</th>
<th>Delete</th>
 </tr>
 
@foreach($tags as $tag)
 <tr>

  <td>{{$tag->name}}</td>
<td>{{$tag->slug}}</td>
<td ><a href="{{route('tag.edit',$tag->id)}}" style="padding:20px;">Edit</a></td>

<form id="delete-form-{{$tag->id}}" action="{{route('tag.destroy',$tag->id)}}" method="post" style="display: none;">
  {{csrf_field()}}
  {{method_field('DELETE')}}
  </form>
<td>
  <a href="#" onclick="if(confirm('Are you sure,you want to delete this?')){

    event.preventDefault();

    document.getElementById('delete-form-{{$tag->id}}').submit();
  }
      else{
        event.preventDefault();
      }"
      
     style="padding:20px;">Delete</a>


</td>


 </tr>
 @endforeach

</table>
</center>
</div>

     
    </div>

          
       

@endsection