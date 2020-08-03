<div class="card">
    <div class="text-center mt-3 primary-color">
        <h6>PENULIS</h6>
        <hr width="150">
    </div>
    <div class="text-center">
        @if ($artikel->user->photo != null)
        <img class="img-fluid rounded mx-auto d-block mb-2"  src="{{ config('app.path_url').'ava/'.$artikel->user->photo}}" width="80" alt="">
        @else
        <img class="img-fluid rounded mx-auto d-block mb-2" src="{{ config('app.path_url').'boy.png'}}" width="80" alt="">
        @endif
        <p>{{ $artikel->user->bio }}</p>
    </div>
    <div class="ml-3">
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-9">
                <label class="form-control-plaintext -ml-30">:&nbsp; {{ $artikel->user->name }}</label>
            </div>
        </div>
        <div class="form-group row -mt-20">
            <label class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
                <label class="form-control-plaintext -ml-30">:&nbsp; {{ $artikel->user->email }}</label>
            </div>
        </div>
        <div class="form-group row -mt-20">
            <label class="col-sm-3 col-form-label">Kontak</label>
            <div class="col-sm-9">
                <label class="form-control-plaintext -ml-30">:&nbsp; {{ $artikel->user->nomor_hp }}</label>
            </div>
        </div>
    </div>
</div>