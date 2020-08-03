<div class="table-responsive fs-14">
    <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th width="10" class="btb-n" width="30">No</th>
                <th class="btb-n">Nama</th>
                <th class="btb-n">Email</th>
                <th width="700" class="btb-n">Pertanyaan</th>
                <th class="btb-n">Status</th>
                <th width="40" class="text-center btb-n">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 0;?>
            @foreach ($pertanyaan as $i)
            <?php $no++ ;?>
            <tr>
                <td class="text-center">{{ $no }}</td>
                <td>{{ $i->nama }}</td>
                <td>{{ $i->email }}</td>
                <td><a class="text-decoration-none" href="{{ route('konsultasi.isiPertanyaan', 'pertanyaan_id='. $i->id ) }}">{{ substr($i->pertanyaan,0,100) }}...</a></td>
                <td>{{ $i->status == 1 ? 'Sudah dibaca' : 'Belum dibaca' }}</td>
                <td class="text-center">
                    <a href="#" data-toggle="modal" data-target="#confirmation"><i class="fa fa-trash text-danger"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="modal fade" id="confirmation" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">
                    Yakin ingin menghapus data ini ?
                </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer border-0 fs-14">
                <button type="button" class="btn btn-dark" data-dismiss="modal">
                    <i class="fa fa-times mr-2 fs-14"></i><span class="fs-14">Cancel</span>
                </button>
                <button type="button" class="btn btn-danger">
                    <a class="text-white text-decoration-none fs-14" href="{{ route('konsultasi.deletePertanyaan', 'pertanyaan_id='.$i->id) }}">
                        <i class="fa fa-trash mr-2"></i>Hapus
                    </a>
                </button>
            </div>
        </div>
    </div>
</div>
