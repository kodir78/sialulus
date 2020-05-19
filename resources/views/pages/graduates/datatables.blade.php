<div class="card">
    <div class="card-header">
        <a id="add-button" title="Add New" class="btn btn-success" href="{{ route('graduates.create') }}"><i class="fa fa-plus-circle"></i> Add New</a>
        <a href="#mymodal"
        data-remote="#"
        data-toggle="modal"
        data-target="#mymodal"
        data-title="Import Siswa"
        class="btn btn-info">
        Import
    </a>
</div>
<!-- /.card-header -->
<div class="card-body">
    {{-- notifikasi form validasi --}}
    @if ($errors->has('file'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('file') }}</strong>
    </span>
    @endif
    
    @if (session('success'))
        <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        {{ session('success') }}
        </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        {{ session('error') }}
            </div>
        @endif
    <table class="table table-bordered" id="dataTable">
        <thead class="text-center">                  
            <tr>
                <th style="width: 10px">#</th>
                <th>NO UBK</th>
                <th>No Peserta</th>
                <th>NIS</th>
                <th>NISN</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>Status</th>
                <th style="width: 40px">Aksi</th>
            </tr>
        </thead>
    </table>
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->
@push('after-script')
<!-- DataTables -->
<script src="/assets/backend/adminlte30/plugins/datatables/jquery.dataTables.js"></script>
<script src="/assets/backend/adminlte30/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script src="/assets/backend/adminlte30/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
<div class="modal fade" id="mymodal">
    <div class="modal-dialog">
        <form method="post" action="/graduates/import_excel" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                </div>
                <div class="modal-body">
                    <label>Pilih file excel</label>
                    <div class="form-group">
                        <input type="file" name="file" required="required">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Import</button>
                </div>
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<script>
  $(document).ready(function(){
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('graduates.data') }}',
            columns: [
            {data: 'DT_RowIndex', orderable: false, searchable: false}, // Data DataTables nomor urut
            {data: 'nopesubk'},
            {data: 'nopes_skl'},
            {data: 'nis'},
            {data: 'nisn'},
            {data: 'name'},
            {data: 'kls'},
            {data: 'ket'},
            {data: 'action'} // Add column with view
            ]
        });
    });
</script>

@endpush