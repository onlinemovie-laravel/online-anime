@extends('cpadmin.master')
@section('title','Index')
@section('content')
<section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Danh sách</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
               <thead>
                  <tr>
                     <th>ID</th>
                     <th>Name</th>
                     <th>Status</th>
                     <th>Type</th>
                     <th>Season</th>
                     <th>Image</th>
                     <th>Description</th>
                     <th>created_at</th>
                     <th>EDIT</th>
                     <th>Delete</th>
                  </tr>
               </thead>
               <tbody>
                   @foreach ($anime as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->status}}</td>
                        <td>{{$item->type}}</td>
                        <td>{{$item->season}}</td>
                        <td>{{$item->image}}</td>
                        <td>{{$item->description}}</td>
                        <td> {{date("d/m/Y",strtotime($item->created_at))}}</td>
                        <td><a href="{{Route('admin.anime.edit',['id'=>$item->id])}}">EDIT</a></td>
                        <td><a href="{{Route('admin.anime.destroy',['id'=>$item->id])}}" onclick="return checkdelete('Are You Sure delete this category ?')">DELETE</a></td>
                    </tr>         
                    @endforeach    
               </tbody>
               <tfoot>
                <tr>
                    <th>ID</th>
                     <th>Name</th>
                     <th>Status</th>
                     <th>Type</th>
                     <th>Season</th>
                     <th>Image</th>
                     <th>Description</th>
                     <th>created_at</th>
                     <th>EDIT</th>
                     <th>Delete</th>
                 </tr>
               </tfoot>
            </table>
         </div>
        <!-- /.card-body -->
        <div class="card-footer">
            Footer
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->
</section>
@endsection