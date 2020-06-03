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
        @foreach ($users as $i)
        <tr>
            <td>{{ $i->name }}</td>
            <td>{{ $i->email }}</td>
            <td>{{ $i->role_id }}</td>
            <td>{{ $i->nomor_hp }}</td>
            <td class="text-center">
                <a href="#"><i class="fa fa-edit mr-2"></i></a>
                <a href="#"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
