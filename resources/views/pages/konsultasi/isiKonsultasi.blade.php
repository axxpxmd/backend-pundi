<div class="container col-md-12">
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="text-center mt-3 primary-color">
                    <h6>Konsultasi Dari</h6>
                    <hr width="150">
                </div>
                <div class="ml-3">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <label class="form-control-plaintext -ml-50">:&nbsp; {{ $isiKonsultasi->nama }}</label>
                        </div>
                    </div>
                    <div class="form-group row -mt-20">
                        <label class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <label class="form-control-plaintext -ml-50">:&nbsp; {{ $isiKonsultasi->email }}</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="text-center mt-3 primary-color">
                    <h6>Dibaca Oleh</h6>
                    <hr width="150">
                </div>
                <div class="ml-3">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <label class="form-control-plaintext -ml-50">:&nbsp; {{ $isiKonsultasi->confirm_by->name }}</label>
                        </div>
                    </div>
                    <div class="form-group row -mt-20">
                        <label class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <label class="form-control-plaintext -ml-50">:&nbsp; {{ $isiKonsultasi->confirm_by->email }}</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="card">
                <div class="text-center mt-3 primary-color">
                    <h6>Konsultasi</h6>
                    <hr width="150">
                </div>
                <div class="ml-3">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Konsultasi &nbsp;:</label>
                        <div class="col-sm-9">
                            <label class="col-form-label" style="margin-left: -24%">{{ $isiKonsultasi->konsultasi }}</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
