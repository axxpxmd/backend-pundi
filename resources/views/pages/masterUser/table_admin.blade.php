<div class="table-responsive">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Eamil</th>
                <th>Role</th>
                <th>Nomor HP</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admins as $i)
            <tr>
                <td>{{ $i->name }}</td>
                <td>{{ $i->email }}</td>
                <td>{{ $i->roles->role }}</td>
                <td>{{ $i->nomor_hp }}</td>
                <td class="text-center">
                    <a href="{{ route('master-user.edit', 'user='.$i->id) }}"><i class="fa fa-edit mr-2"></i></a>
                    <a href="" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
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
                    <a class="text-white text-decoration-none" href="{{ route('master-user.delete', 'user='.$i->id) }}">Hapus</a>
                </button>
            </div>
        </div>
    </div>
</div>
