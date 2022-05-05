<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Blog Table</h2>

<table>
  <tr>
    <th>Id</th>
    <th>Title</th>
    <th>Description</th>
    <th>Start date</th>
    <th>End Date</th>
    <th>Is Active</th>
    <th>Image</th>
    <th>Action</th>
    
  </tr>
  
  @foreach($var as $v)
  <tr>
     
  @if ($date < $v->end_date)
    <td>{{$v->id}}</td>
    <td>{{$v->title}}</td>
    <td>{{$v->description}}</td>
    <td>{{$v->start_date}}</td>
    <td>{{$v->end_date}}</td>
    <td>{{$v->is_active}}</td>
    <td>{{$v->image}}</td>
    <td>
        
    <form action ="{{route('data.destroy',$v->id)}}">
    <a type="button" href="{{route('data.edit',$v->id)}}">Edit</a>
        @csrf
        @method('DELETE')<a type="button" href="">delete</a></td>
 @endif
    
    
  </tr>
  @endforeach
  
  
</table>

</body>
</html>
