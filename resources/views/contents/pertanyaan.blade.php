@extends('master')

@section('content')
   
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Pertanyaan</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="#">Home</a></li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Pertanyaan</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
              <div class="col-md-12">
                <button class="btn btn-info" id="ADD_DATA"><i class="fa fa-plus"></i> Add Data</button>
                <br><br>
                <table class="table table-hover table-bordered table-striped">
                    <thead>
                        <th style="text-align: center">ID</th>
                        <th style="text-align: center">Judul</th>
                        <th style="text-align: center">Isi</th>
                        <th style="text-align: center">Crated Date</th>
                        <th style="text-align: center">Modified Date</th>
                        <th style="text-align: center">Jawaban</th>
                        <th style="text-align: center">Action</th>
                    </thead>
                    <tbody>
                      @foreach ($data as $item => $row)
                      <tr>
                        <td style="text-align: right">{{ $row->id }}</td>
                        <td>{{$row->judul}}</td>
                        <td>{{$row->isi}}</td>
                        <td>{{$row->created_date}}</td>
                        <td>{{$row->modified_date}}</td>
                        <td style="text-align: center">
                          <a href="/jawaban/{{ $row->id }}" class="btn btn-default">Jawaban</a>
                        </td>
                        <td style="text-align: center">
                            <button class="btn btn-warning"><i class="fas fa-edit"></i> Edit</button>
                            <button class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
                        </td>
                      </tr>
                      @endforeach
                        
                    </tbody>
                </table>
              </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

      <div class="modal fade" id="ADD_MODAL">
        <div class="modal-dialog">
          <form action="/pertanyaan" method="post">
            @csrf
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Pertanyaan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>JUDUL</label>
                      <input type="text" class="form-control" name="judul">
                    </div>
                    <div class="form-group">
                      <label>ISI</label>
                      <input type="text" class="form-control" name="isi">
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

    </section>
    <!-- /.content -->
</div>

@endsection
@push('script')
<script>
  $(function () {
    $("#ADD_DATA").click(function(){
      $("#ADD_MODAL").modal('show');
    });
  });
</script>
@endpush
