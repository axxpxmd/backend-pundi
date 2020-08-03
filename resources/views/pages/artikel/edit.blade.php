<div class="container col-md-12">
    <form action="{{ route('master-artikel.editArtikel.update', 'artikel_id='.$artikel->id) }}" method="POST"  enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="row">
            <div class="col-sm-3">
                @include('pages.artikel.info-penulis')
                @include('pages.artikel.info-editor')
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
                            <img class="img-fluid rounded mx-auto d-block mb-3" src="{{ config('app.path_url').'artikel/'.$artikel->gambar }}"  width="250" alt="photo">
                            <div>
                                <div class="alert alert-dismissible" id="message" data-target="#exampleModal" role="alert"></div>
                                <div class="-mt-20 mb-2">
                                    <label for="" class="f-b fs-17">GANTI GAMBAR</label><br>
                                    <input type="file" name="gambar" class="m-l-120 input-file" id="file" onchange="tampilkanPreview(this,'preview')">
                                    <label for="file" class="btn btn-outline-dark js-labelFile">
                                        <i class="icon fa fa-check"></i>
                                        <span class="js-fileName">Change Photo Profil</span>
                                    </label>
                                    <br>
                                    <img width="300" class="rounded img-fluid mx-auto d-block m-t-10" id="preview" alt=""/>
                                </div>
                            </div>
                            <input type="text" class="form-control mb-3 text-black" id="judul" name="judul" value="{{ $artikel->judul }}">
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
