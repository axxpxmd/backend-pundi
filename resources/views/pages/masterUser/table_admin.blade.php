<div class="table-responsive fs-14">
    <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th width="10" class="btb-n" width="30">No</th>
                <th class="btb-n">Nama</th>
                <th class="btb-n">Email</th>
                <th class="btb-n">Role</th>
                <th class="btb-n">Nomor HP</th>
                <th width="40" class="text-center btb-n">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 0;?>
            @foreach ($admins as $i)
            <?php $no++ ;?>
            <tr>
                <td class="text-center">{{ $no }}</td>
                <td>{{ $i->name }}</td>
                <td>{{ $i->email }}</td>
                <td>{{ $i->roles->role }}</td>
                <td>{{ $i->nomor_hp }}</td>
                <td class="text-center">
                    <a href="{{ route('master-user.edit', 'user='.$i->id) }}"><i class="fa fa-edit mr-2"></i></a>
                    <a href="#" data-toggle="modal" data-target="#confirmation"><i class="fa fa-trash text-danger"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <button class="btn btn-success mt-2">
        <a href="{{ route('master-user.tambah') }}" class="text-white text-decoration-none fs-14">
            <i class="fa fa-plus-square mr-2"></i>Tambah 
        </a>
    </button>
</div>
<div class="modal fade moda" id="confirmation" tabindex="-1" role="dialog">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">
                    Yakin ingin menghapus data ini ?
                </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-dark" data-dismiss="modal">
                    <i class="fa fa-times mr-2"></i><span class="fs-14">Cancel</span>
                </button>
                <button type="button" class="btn btn-danger">
                    <a class="text-white text-decoration-none fs-14" href="{{ route('master-user.delete', 'user='.$i->id) }}">
                        <i class="fa fa-trash mr-2"></i>Hapus
                    </a>
                </button>
            </div>
        </div>
    </div>
</div>
