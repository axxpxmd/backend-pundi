<div class="card">
    <h6 class="card-header primary-color">
        <i class="fa fa-file-alt"></i><span class="ml-2">Kategori</span> 
    </h6>
    <div class="card-body">
        <div class="table-responsive fs-14">
            <div class="container">
                <div class="form-group row">
                    <label for="kategori_id" class="col-sm-3 col-form-label text-right">Kategori :</label>
                    <div class="col-sm-4">
                        <select name="kategori_id" id="kategori_id" class="form-control custom-select" onchange="selectOnChange()">
                            @foreach ($kategori as $i)
                            <option value="{{ $i->id }}">{{ $i->n_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>    
            </div>
            <table id="Datatable" class="table table-bordered table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th width="30" class="btb-n">No</th>
                        <th class="btb-n">Sub Kategori</th>
                        <th width="40" class="text-center btb-n">Aksi</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>