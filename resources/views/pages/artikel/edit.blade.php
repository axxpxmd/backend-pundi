<div class="container col-md-12">
    <form action="{{ route('master-artikel.editArtikel.update', 'artikel_id='.$artikel->id) }}" method="POST"  enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
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
                        <h6>AKSI UNTUK ARTIKEL</h6>
                        <hr width="150">
                    </div>
                    <div class="p-4 -mt-20 mx-auto d-block">
                        <button class="btn btn-success mr-3" >Simpan</button>
                        <button class="btn btn-secondary mr-4" type="button" onclick="history.back();">Back</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="card">
                    <div class="text-center mt-3 primary-color">
                        <h6>ARTIKEL</h6>
                        <hr width="150">
                    </div>
                    <div class="p-4 -mt-20">
                        <div class="text-center">
                            <input type="text" class="form-control mb-3" id="judul" name="judul" value="{{ $artikel->judul }}">
                            <img class="img-fluid rounded mx-auto d-block mb-3" src="http://103.219.112.114/pundi/public/post/{{$artikel->gambar}}" width="250" alt="">
                            <div>
                                <div class="alert alert-dismissible" id="message" data-target="#exampleModal" role="alert"></div>
                                <div class="-mt-20 mb-3">
                                    <label for="" class="f-b fs-17">GANTI GAMBAR</label><br>
                                    <input type="file" name="gambar" class="m-l-120" id="gambar" onchange="tampilkanPreview(this,'preview')">
                                    <label for="file" class="js-labelFile">
                                        <span class="js-fileName"></span>
                                    </label>
                                    <br>
                                    <img width="300" class="rounded img-fluid mx-auto d-block" id="preview" alt="" style="margin-top: 10px"/>
                                </div>
                            </div>
                        </div>
                        @include('masterPages.summernote')
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
    // file name preview
    (function () {
        'use strict';
        $('.input-file').each(function () {
            var $input = $(this),
                $label = $input.next('.js-labelFile'),
                labelVal = $label.html();

            $input.on('change', function (element) {
                var fileName = '';
                if (element.target.value) fileName = element.target.value.split('\\').pop();
                fileName ? $label.addClass('has-file').find('.js-fileName').html(fileName) : $label
                    .removeClass('has-file').html(labelVal);
            });
        });
    })();

    // image preview
    function tampilkanPreview(gambar, idpreview) {
        var gb = gambar.files;
        for (var i = 0; i < gb.length; i++) {
            var gbPreview = gb[i];
            var imageType = /image.*/;
            var preview = document.getElementById(idpreview);
            var reader = new FileReader();
            if (gbPreview.type.match(imageType)) {
                preview.file = gbPreview;
                reader.onload = (function (element) {
                    return function (e) {
                        element.src = e.target.result;
                    };
                })(preview);
                reader.readAsDataURL(gbPreview);
            } else {
                Swal.fire(
                    'Tipe file tidak boleh',
                    'Harus format gambar',
                    'error'
                )
            }
        }
    }
</script>
@endsection
