@extends('layouts.app')
@section('content')
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        @include('masterPages.top-bar')
        <div class="ml-2 mr-2">
            @include('masterPages.alerts')
            <!-- Content -->
            @if ($section == 'kategori')
            @include('pages.kategori.table')
            @elseif($section == 'edit')
            @include('pages.kategori.edit')
            @endif
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    var table = $('#Datatable').dataTable({
        processing: true,
        serverSide: true,
        pageLength: 10,
        ajax: {
            url: "{{ route('master-kategori.dataTable') }}",
            method: 'POST',
            data: function (data) {
                data.kategori_id = $('#kategori_id').val();
            }
        },
        columns: [
            {data: 'id', name: 'id', orderable: false, searchable: false, align: 'center', className: 'text-center'},
            {data: 'n_sub_kategori', name: 'n_sub_kategori'},
            {data: 'aksi', name: 'aksi', align: 'center', className: 'text-center'},
        ]
    });

    function selectOnChange(){
        table.api().draw();
    }
</script>
@endsection
