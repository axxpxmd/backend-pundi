<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Penulis</th>
            <th>Tanggal</th>
            <th>status</th>
            <th class="text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 0;?>
        @foreach ($artikels as $i)
        <?php $no++ ;?>
        <tr>
            <td>{{ $no }}</td>
            <td>
                <a class="text-decoration-none" href="{{ route('master-artikel.isi', 'post='.$i->id) }}">{{ $i->judul }}</a>
            </td>
            <td>{{ $i->kategori->n_kategori }}</td>
            <td>{{ $i->user->name }}</td>
            <td>{{ substr($i->created_at,0,10) }}</td>
            @if ($i->status == 0)
                <td>belum terverfikasi</td> 
            @else
                <td>sudah terverfikasi</td>
            @endif
            <td class="text-center">
                {{-- <a href="{{ route('master-user.edit', 'user='.$i->id) }}"><i class="fa fa-edit mr-2"></i></a> --}}
                <a href="" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Yakin ingin menghapus data ini ?
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">
                    <a class="text-white text-decoration-none" href="{{ route('master-artikel.delete', 'artikel='.$i->id) }}">Hapus</a>
                </button>
            </div>
        </div>
    </div>
</div>
