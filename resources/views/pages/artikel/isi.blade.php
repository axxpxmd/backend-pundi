<div class="container col-md-12">
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
                    @if ($artikel->status == 0)
                    <form action="{{ route('master-artikel.isi.publishArtikel', 'artikel_id='.$artikel->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <button class="btn btn-primary mr-3">Publish</button>
                        <button class="btn btn-success mr-4" type="button">
                            <a class="text-decoration-none text-white" href="{{ Route('master-artikel.editArtikel','artikel_id='. $artikel->id ) }}">Edit</a>
                        </button>
                        <button class="btn btn-secondary mr-4" type="button" onclick="history.back();">Back</button>
                    </form>
                    @else
                    <button class="btn btn-danger mr-3" data-toggle="modal" data-target="#confirmation">Unpublish</button>
                    <button class="btn btn-success mr-4" type="button">
                        <a class="text-decoration-none text-white" href="{{ Route('master-artikel.editArtikel','artikel_id='. $artikel->id ) }}">Edit</a>
                    </button>
                    <button class="btn btn-secondary mr-4" type="button" onclick="history.back();">Back</button>
                    @endif
                    <div class="modal fade" id="confirmation" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="exampleModalLabel">
                                        Yakin ingin menarik artikel ini ?
                                    </h6>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-footer border-0">
                                    <button type="button" class="btn btn-dark" data-dismiss="modal">
                                        <i class="fa fa-times mr-2"></i><span class="fs-14">Cancel</span>
                                    </button>
                                    <form action="{{ route('master-artikel.isi.UnpublishArtikel', 'artikel_id='.$artikel->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}
                                        <button class="btn btn-danger mr-3" ><i class="fa fa-undo mr-2"></i>Unpublish</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
