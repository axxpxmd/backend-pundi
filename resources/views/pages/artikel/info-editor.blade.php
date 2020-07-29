<div class="card mt-2">
    <div class="text-center mt-3 primary-color">
        <h6>Editor</h6>
        <hr width="150">
    </div>
    <div class="ml-3">
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-9">
                <label class="form-control-plaintext -ml-30">:&nbsp; {{ $artikel->editor == null ? '-' : $artikel->editor->name }}</label>
            </div>
        </div>
        <div class="form-group row -mt-20">
            <label class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
                <label class="form-control-plaintext -ml-30">:&nbsp; {{ $artikel->editor == null ? '-' : $artikel->editor->email }}</label>
            </div>
        </div>
    </div>
</div>