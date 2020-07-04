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
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" readonly value="{{$data_pertanyaan['judul']}}">
                    </div>
                    <div class="form-group">
                        <label>Isi</label>
                        <textarea class="form-control" rows="5" readonly >{{$data_pertanyaan['isi']}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Created Date</label>
                        <input type="text" class="form-control" readonly value="{{$data_pertanyaan['created_date']}}">
                    </div>
                    <div class="form-group">
                        <label>Modified Date</label>
                        <input type="text" class="form-control" readonly value="{{$data_pertanyaan['modified_date']}}">
                    </div>
                </div>
            </div>
          </div>
      </div>

      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Jawaban</h3>

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
                <table class="table table-hover table-bordered table-striped">
                    <thead>
                        <th style="text-align: center">No</th>
                        <th style="text-align: center">Jawaban</th>
                        <th style="text-align: center">Crated Date</th>
                    </thead>
                    <tbody>
                      @foreach ($data as $item => $row)
                      <tr>
                        <td style="text-align: right">{{ $item+1 }}</td>
                        <td>{{$row->jawaban_isi}}</td>
                        <td>{{$row->jawaban_date}}</td>
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
