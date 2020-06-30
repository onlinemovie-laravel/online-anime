@extends('cpadmin.master')
@section('title','edit')
@section('content')
<form action="{{route('admin.anime.update',['id' => $item->id])}}" method="post">
    @csrf
    <table id="example1" class="table table-bordered table-striped">
        <tbody>   
            <tr><td>ID</td><td>{{$item->id}}</td></tr>
            <tr><td>NAME: </td><td><input type="text" class="form-control" name="name" value="{{$item->name}}"></td></tr>
            <tr><td>STATUS: </td><td><input type="text" class="form-control" name="status" value="{{$item->status}}"></td></tr>
            <tr><td>TYPE: </td><td><input type="text" class="form-control" name="type" value="{{$item->type}}"></td></tr>
            <tr><td>SEASON: </td><td><input type="text" class="form-control" name="season" value="{{$item->season}}"></td></tr>
            <tr><td>IMAGE: </td><td><input type="text" class="form-control" name="image" value="{{$item->image}}"></td></tr>
            <tr><td>DESCRIPTION: </td><td><input type="text" class="form-control" name="description" value="{{$item->description}}"></td></tr>          
            <tr><td>CREATED_AT</td><td>{{date("d/m/Y-h:i:s",strtotime($item->created_at))}}</td></tr>
            <tr>
                 <td></td>
                 <td><button type="submit"  onclick="return checkdelete('Are You Sure for this changed ?')" class="btn btn-primary ">Confirm Update</button></td>
             </tr>          
        </tbody>
     </table>
</form>
@endsection