<div class="card">
    <div class="card-body">
        <form action="{{ route('master-kategori.update', 'sub_kategori_id='.$sub_kategori_id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group row">
                <label for="sub_kateogri" class="col-sm-1 col-form-label">Sub Kategori</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="n_sub_kategori" id="sub_kateogri" value="{{ $sub_kategori->n_sub_kategori }}">
                    <button type="submit" class="btn btn-success mt-3">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>