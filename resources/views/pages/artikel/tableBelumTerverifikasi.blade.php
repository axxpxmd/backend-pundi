<div class="table-responsive fs-14">
    <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th width="10" class="btb-n">No</th>
                <th class="btb-n">Judul</th>
                <th class="btb-n">Kategori</th>
                <th class="btb-n">Penulis</th>
                <th width="100" class="btb-n">Tanggal</th>
                <th class="btb-n">status</th>
                <th width="20" class="text-center btb-n">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 0;?>
            @foreach ($artikelBelumTerverifikasi as $i)
            <?php $no++ ;?>
            <tr>
                <td class="text-center">{{ $no }}</td>
                <td>
                    <a class="text-decoration-none" href="{{ route('master-artikel.isi', 'artikel_id='.$i->id) }}">{{ $i->judul }}</a>
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
                    <a href="" data-toggle="modal" data-target="#confirmation"><i class="fa fa-trash text-danger"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@include('pages.artikel.alert-delete')
