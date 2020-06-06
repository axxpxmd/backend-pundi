<div class="container col-md-11 pt-4">
    <p style="font-weight: bolder; color: black; font-size: 20px">{{ $artikel->judul }}</p>
    <img class="img-fluid mb-4" src="http://103.219.112.114/pundi/public/post/{{$artikel->gambar}}" alt="">
    <div>
        {!! $artikel->isi !!}
    </div>

</div>
