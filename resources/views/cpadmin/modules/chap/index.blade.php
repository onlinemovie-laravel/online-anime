@extends('cpadmin.master')
@section('title','List Chap')
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
                    <th>content</th>
                    <th>Name</th>
                    <th>Flim ID</th>
                    <th>views</th>
                    <th>created_at</th>
                    <th>EDIT</th>
                    <th>Delete</th>
                  </tr>
               </thead>
               <tbody>
                   @foreach ($chapter as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td width="250px" height="150px">
                            {{-- <script src="https://cdn.jwplayer.com/players/{{$item->content}}-kGWxh33Q.js"></script></td> --}}
                            <script src="https://cdn.jwplayer.com/players/{{$item->content}}-eFvNO8QX.js"></script> </td>
                        <td>{{ str_replace('-',' ',$item->title)}}</td>
                        <td>{{$item->flim_id}}</td>
                        <td>{{$item->views}}</td>
                        <td> {{date("d/m/Y-h:i:s",strtotime($item->created_at))}}</td>
                        <td><a href="{{Route('admin.chapter.edit',['id'=>$item->id])}}">EDIT</a></td>
                        <td><a href="{{Route('admin.chapter.destroy',['id'=>$item->id])}}" onclick="return checkdelete('Are You Sure delete this Chapter ?')">DELETE</a></td>
                    </tr>         
                    @endforeach    
               </tbody>
               <tfoot>
                <tr>
                    <th>ID</th>
                     <th>content</th>
                     <th>Name</th>
                     <th>Flim ID</th>
                     <th>views</th>
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
