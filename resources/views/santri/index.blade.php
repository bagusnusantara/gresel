@extends('layout.main')
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('stisla/assets/modules/datatables/datatables.min.css') }}">
<link rel="stylesheet" href="{{ asset('stisla/assets/modules/datatables/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('stisla/assets/modules/datatables/select.bootstrap4.min.css') }}">
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css"/> -->
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css"/> -->
@endsection
@section('content')
<div class="section-header">
    <h1>Data Santri</h1>
</div>
<div class="section-body">
    <div class="card card-body">
        <div class="table-responsive">
            <table class="table table-responsive d-md-table" id="datatable">
                <thead>
                    <tr class="text-center">
                        <th class="wd-5p">No&nbsp;&nbsp;</th>
                        <th>Nama Lengkap</th>
                        <th>PAC</th>
                        <th>Jenis Kelamin</th>
                        <th>Kelompok</th>
                        <th>Usia</th>
                        <th>HP</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<!-- <script src="{{ asset('stisla/assets/modules/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('stisla/assets/modules/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('stisla/assets/modules/datatables/dataTables.select.min.js') }}"></script> -->
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.js"></script>
<script>
    $(function() {
        $('#datatable').DataTable({
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            },
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ url('santri/datatable') }}"
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'nama',
                    name: 'nama'
                },
                {
                    data: 'nama_pac',
                    name: 'nama_pac'
                },
                {
                    data: 'jeniskelamin',
                    name: 'jeniskelamin'
                },
                {
                    data: 'kelompok',
                    name: 'kelompok'
                },
                {
                    data: 'usia',
                    name: 'usia'
                },
                {
                    data: 'hp',
                    name: 'hp'
                },
                {
                    data: 'action',
                    name: 'action'
                }
            ],
            columnDefs: [{
                    "className": "text-center",
                    "targets": 0
                },
                {
                    "className": "text-center",
                    "targets": 2
                },
                {
                    "className": "text-center",
                    "targets": 3
                },
                {
                    "className": "text-center",
                    "targets": 4
                },
                {
                    "className": "text-center",
                    "targets": 5
                },
                {
                    "className": "text-center",
                    "targets": 6
                },
                {
                    "className": "text-center",
                    "targets": 7
                },
            ],
        });
        //Select 2
        // $('.dataTables_length select').select2({
        //     minimumResultsForSearch: Infinity
        // });
    });
</script>
@endsection