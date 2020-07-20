<div class="container col-md-12">
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="text-center mt-3 primary-color">
                    <h6>PENULIS</h6>
                    <hr width="150">
                </div>
                <div class="text-center">
                    @if ($artikel->user->photo != null)
                    <img class="img-fluid rounded mx-auto d-block mb-2" src="http://103.219.112.114/pundi/public/ava/{{$artikel->user->photo}}" width="80" alt="">
                    @else
                    <img class="img-fluid rounded mx-auto d-block mb-2" src="{{ asset('images/boy.png') }}" width="80" alt="">
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
            <div class="card mt-2">
                <div class="text-center mt-3 primary-color">
                    <h6>Editor</h6>
                    <hr width="150">
                </div>
                <div class="ml-3">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                          <label class="form-control-plaintext -ml-30">:&nbsp; {{ $artikel->editor->name }}</label>
                        </div>
                    </div>
                    <div class="form-group row -mt-20">
                        <label class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                          <label class="form-control-plaintext -ml-30">:&nbsp; {{ $artikel->editor->email }}</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="text-center mt-3 primary-color">
                    <h6>AKSI UNTUK ARTIKEL</h6>
                    <hr width="150">
                </div>
                <div class="p-4 -mt-20 mx-auto d-block">
                    @if ($artikel->status == 0)
                    <form action="{{ route('master-artikel.isi.publishArtikel', 'artikel_id='.$artikel->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <input type="text" name="user_id" value="{{ Auth::user()->id }}">
                        <button class="btn btn-primary mr-3" >Publish</button>
                        <button class="btn btn-success mr-4" type="button">
                            <a class="text-decoration-none text-white" href="{{ Route('master-artikel.editArtikel','artikel_id='. $artikel->id ) }}">Edit</a>
                        </button>
                        <button class="btn btn-secondary mr-4" type="button" onclick="history.back();">Back</button>
                    </form>
                    @else
                    <form class="mt-3 text-center" action="{{ route('master-artikel.isi.UnpublishArtikel', 'artikel_id='.$artikel->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <input type="text" name="user_id" value="{{ Auth::user()->id }}">
                        <button class="btn btn-danger mr-3" >Unpublish</button>
                        <button class="btn btn-success mr-4" type="button">
                            <a class="text-decoration-none text-white" href="{{ Route('master-artikel.editArtikel','artikel_id='. $artikel->id ) }}">Edit</a>
                        </button>
                        <button class="btn btn-secondary mr-4" type="button" onclick="history.back();">Back</button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="card">
                <div class="text-center mt-3 primary-color">
                    <h6>ARTIKEL</h6>
                    <hr width="150">
                </div>
                <div class="p-4 -mt-10">
                    <h5 class="mb-3 text-center">{{ $artikel->judul }}</h5>
                    <img class="img-fluid rounded mx-auto d-block mb-3" src="http://103.219.112.114/pundi/public/post/{{$artikel->gambar}}" width="250" alt="">
                    <div>
                        {!! $artikel->isi !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
