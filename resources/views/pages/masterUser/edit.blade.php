<div class="">
    <form action="{{ route('master-user.edit.update', 'user='.$users->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="row p-1 pl-3">
            <div class="col-sm-6">
                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label">Nama<span class="text-danger ml-1">*</span></label>
                    <div class="col-md-8">
                        <input type="text" class="form-control " name="name" value="{{ $users->name }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="username" class="col-md-2 col-form-label">Username<span class="text-danger ml-1">*</span></label>
                    <div class="col-md-8">
                        <input type="text" class="form-control " name="username" value="{{ $users->username }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label">Email<span class="text-danger ml-1">*</span></label>
                    <div class="col-md-8">
                        <input type="email" class="form-control " name="email" value="{{ $users->email }}">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label">Role<span class="text-danger ml-1">*</span></label>
                    <div class="col-md-8">
                        <select class="form-control" name="role_id">
                            @if ($users->role_id == 2)
                                <option value="2">Admin</option>
                                <option value="1">User</option>
                            @else
                                @foreach ($roles as $i)
                                    <option value="{{ $i->id }}">{{ $i->role }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label">Nomor HP <span class="text-danger ml-1">*</span></label>
                    <div class="col-md-8">
                        <input type="text" class="form-control " name="nomor_hp" value="{{ $users->nomor_hp }}">
                        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
