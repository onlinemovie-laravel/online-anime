@extends('cpadmin.master')
@section('title','List Flim')
@section('content')
<section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Danh sách</h3>
            <div class="card-tools">
                <a href="{{Route('admin.flim.create')}}" class="btn btn-primary"  title="Create new Category">ADD MORE</a>
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
               <thead>
                  <tr>
                     <th>ID</th>
                     <th>Image</th>
                     <th>Name</th>
                     <th>Description</th>
                     <th>Category</th>
                     <th>Total Chap</th>
                     <th>Year</th>
                     <th>created_at</th>
                     <th>EDIT</th>
                     <th>Delete</th>
                  </tr>
               </thead>
               <tbody>
                   @foreach ($flim as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td><img src="{{$item->image}}" width="180px" height="250px" alt=""> </td>
                        <td>{{ str_replace('-',' ',$item->name)}}</td>
                        <td>{!! $item->description !!}</td>
                        <td>{{$item->category}}</td>
                        <td>{{$item->total_chap}}</td>
                        <td>{{$item->year}}</td>
                        <td> {{date("d/m/Y-h:i:s",strtotime($item->created_at))}}</td>
                        <td><a class="bg-primary rounded-pill p-2 text-center" href="{{Route('admin.flim.edit',['id'=>$item->id])}}">EDIT</a></td>
                        <td><a class="bg-danger rounded-pill p-2 text-center" href="{{Route('admin.flim.destroy',['id'=>$item->id])}}" onclick="return checkdelete('Are You Sure delete this Flim ?')">DELETE</a></td>
                    </tr>         
                    @endforeach    
               </tbody>
               <tfoot>
                <tr>
                    <th>ID</th>
                     <th>Image</th>
                     <th>Name</th>
                     <th>Description</th>
                     <th>Category</th>
                     <th>Total Chap</th>
                     <th>Year</th>
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