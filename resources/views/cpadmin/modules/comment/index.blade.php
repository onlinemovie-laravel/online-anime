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
        <div class="form-group row">
            <label for="flim_id" class="col-md-2 col-form-label text-center">FLIM</label>
            <div class="col-md-10">
                <select name="flim_id" class="form-control">
                    <option value="5">Azur Lane</option>
                    <option value="9">BORUTO: NARUTO NEXT GENERATIONS</option>
                    <option value="8">Digimon Adventure (2020)</option>
                    <option value="35">Kamen Rider Build</option>
                    <option value="38">Kamen Rider Decade</option>
                    <option value="32">Kamen Rider Drive</option>
                    <option value="34">Kamen Rider ExAid</option>
                    <option value="29">Kamen Rider Fourze</option>
                    <option value="31">Kamen Rider Gaim</option>
                    <option value="33">Kamen Rider Ghost</option>
                    <option value="18">Kamen Rider Kuuga</option>
                    <option value="30">Kamen Rider Wizard</option>
                    <option value="37">Kamen Rider Zero One</option>
                    <option value="36">Kamen Rider Zi-O</option>
                    <option value="39">MAHOUKA KOUKOU NO RETTOUSEI</option>
                    <option value="12">Maou Gakuin no Futekigousha</option>
                    <option value="10">Mermaid Melody Pichi Pichi Pitch</option>
                    <option value="14">Naruto Shippuuden</option>
                    <option value="13">One Piece</option>
                    <option value="4">Pocket Monsters</option>
                    <option value="11">Shadowverse (TV)</option>
                    <option value="6">Yu☆Gi☆Oh: Sevens</option>
                    <option value="7">Zenonzard: The Animation</option>
                </select>
            </div>
        </div>
        <div class="card-body">
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
         </div>
        <!-- /.card-body -->
        
    </div>
    <!-- /.card -->
</section>
@endsection