<div class="">
    <form action="{{ route('master-user.tambah.store') }}" method="POST">
        @csrf
        <div class="row fs-14">
            <div class="col-sm-6">
                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label">Nama<span class="text-danger ml-1">*</span></label>
                    <div class="col-md-8">
                        <input type="text" class="form-control " name="name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="username" class="col-md-2 col-form-label">Username<span class="text-danger ml-1">*</span></label>
                    <div class="col-md-8">
                        <input type="text" class="form-control " name="username">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label">Email<span class="text-danger ml-1">*</span></label>
                    <div class="col-md-8">
                        <input type="email" class="form-control " name="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label">Password<span class="text-danger ml-1">*</span></label>
                    <div class="col-md-8">
                        <input type="password" class="form-control " name="password">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label">Role<span class="text-danger ml-1">*</span></label>
                    <div class="col-md-8">
                        <select class="form-control" name="role_id">
                            @foreach ($roles as $i)
                                <option value="{{ $i->id }}">{{ $i->role }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label">Nomor HP<span class="text-danger ml-1">*</span></label>
                    <div class="col-md-8">
                        <input type="text" class="form-control " name="nomor_hp">
                        <button type="submit" class="btn btn-primary mt-3"><span class="fs-14">Simpan</span></button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>