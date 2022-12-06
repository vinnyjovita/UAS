<div class="form-group {{ $errors->has('Userid') ? 'has-error' : ''}}">
    <label for="Userid" class="control-label">{{ 'Userid' }}</label>
    <input class="form-control" name="Userid" type="number" id="Userid" value="{{ isset($formkategori->Userid) ? $formkategori->Userid : ''}}" >
    {!! $errors->first('Userid', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Kategori') ? 'has-error' : ''}}">
    <label for="Kategori" class="control-label">{{ 'Kategori' }}</label>
    <input class="form-control" name="Kategori" type="text" id="Kategori" value="{{ isset($formkategori->Kategori) ? $formkategori->Kategori : ''}}" >
    {!! $errors->first('Kategori', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Isi') ? 'has-error' : ''}}">
    <label for="Isi" class="control-label">{{ 'Isi' }}</label>
    <input class="form-control" name="Isi" type="text" id="Isi" value="{{ isset($formkategori->Isi) ? $formkategori->Isi : ''}}" >
    {!! $errors->first('Isi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Ukuran') ? 'has-error' : ''}}">
    <label for="Ukuran" class="control-label">{{ 'Ukuran' }}</label>
    <input class="form-control" name="Ukuran" type="text" id="Ukuran" value="{{ isset($formkategori->Ukuran) ? $formkategori->Ukuran : ''}}" >
    {!! $errors->first('Ukuran', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Expired') ? 'has-error' : ''}}">
    <label for="Expired" class="control-label">{{ 'Expired' }}</label>
    <input class="form-control" name="Expired" type="text" id="Expired" value="{{ isset($formkategori->Expired) ? $formkategori->Expired : ''}}" >
    {!! $errors->first('Expired', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Berat') ? 'has-error' : ''}}">
    <label for="Berat" class="control-label">{{ 'Berat' }}</label>
    <input class="form-control" name="Berat" type="number" id="Berat" value="{{ isset($formkategori->Berat) ? $formkategori->Berat : ''}}" >
    {!! $errors->first('Berat', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Deskripsi') ? 'has-error' : ''}}">
    <label for="Deskripsi" class="control-label">{{ 'Deskripsi' }}</label>
    <input class="form-control" name="Deskripsi" type="text" id="Deskripsi" value="{{ isset($formkategori->Deskripsi) ? $formkategori->Deskripsi : ''}}" >
    {!! $errors->first('Deskripsi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('File') ? 'has-error' : ''}}">
    <label for="File" class="control-label">{{ 'File' }}</label>
    <input class="form-control" name="File" type="text" id="File" value="{{ isset($formkategori->File) ? $formkategori->File : ''}}" >
    {!! $errors->first('File', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Created_at') ? 'has-error' : ''}}">
    <label for="Created_at" class="control-label">{{ 'Created At' }}</label>
    <input class="form-control" name="Created_at" type="datetime-local" id="Created_at" value="{{ isset($formkategori->Created_at) ? $formkategori->Created_at : ''}}" >
    {!! $errors->first('Created_at', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Created_by') ? 'has-error' : ''}}">
    <label for="Created_by" class="control-label">{{ 'Created By' }}</label>
    <input class="form-control" name="Created_by" type="text" id="Created_by" value="{{ isset($formkategori->Created_by) ? $formkategori->Created_by : ''}}" >
    {!! $errors->first('Created_by', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Stock') ? 'has-error' : ''}}">
    <label for="Stock" class="control-label">{{ 'Stock' }}</label>
    <input class="form-control" name="Stock" type="number" id="Stock" value="{{ isset($formkategori->Stock) ? $formkategori->Stock : ''}}" >
    {!! $errors->first('Stock', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Harga') ? 'has-error' : ''}}">
    <label for="Harga" class="control-label">{{ 'Harga' }}</label>
    <input class="form-control" name="Harga" type="number" id="Harga" value="{{ isset($formkategori->Harga) ? $formkategori->Harga : ''}}" >
    {!! $errors->first('Harga', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
