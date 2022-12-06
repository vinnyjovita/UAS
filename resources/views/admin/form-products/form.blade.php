<div class="form-group {{ $errors->has('Kategori') ? 'has-error' : ''}}">
    <label for="Kategori" class="control-label">{{ 'Kategori' }}</label>
    <input class="form-control" name="Kategori" type="text" id="Kategori" value="{{ isset($formproduct->Kategori) ? $formproduct->Kategori : ''}}" >
    {!! $errors->first('Kategori', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Berat') ? 'has-error' : ''}}">
    <label for="Berat" class="control-label">{{ 'Berat' }}</label>
    <input class="form-control" name="Berat" type="text" id="Berat" value="{{ isset($formproduct->Berat) ? $formproduct->Berat : ''}}" >
    {!! $errors->first('Berat', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Deskripsi') ? 'has-error' : ''}}">
    <label for="Deskripsi" class="control-label">{{ 'Deskripsi' }}</label>
    <input class="form-control" name="Deskripsi" type="text" id="Deskripsi" value="{{ isset($formproduct->Deskripsi) ? $formproduct->Deskripsi : ''}}" >
    {!! $errors->first('Deskripsi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Nama') ? 'has-error' : ''}}">
    <label for="Nama" class="control-label">{{ 'Nama' }}</label>
    <input class="form-control" name="Nama" type="text" id="Nama" value="{{ isset($formproduct->Nama) ? $formproduct->Nama : ''}}" >
    {!! $errors->first('Nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Foto') ? 'has-error' : ''}}">
    <label for="Foto" class="control-label">{{ 'Foto' }}</label>
    <input class="form-control" name="Foto" type="text" id="Foto" value="{{ isset($formproduct->Foto) ? $formproduct->Foto : ''}}" >
    {!! $errors->first('Foto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Created_by') ? 'has-error' : ''}}">
    <label for="Created_by" class="control-label">{{ 'Created By' }}</label>
    <input class="form-control" name="Created_by" type="text" id="Created_by" value="{{ isset($formproduct->Created_by) ? $formproduct->Created_by : ''}}" >
    {!! $errors->first('Created_by', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Stock') ? 'has-error' : ''}}">
    <label for="Stock" class="control-label">{{ 'Stock' }}</label>
    <input class="form-control" name="Stock" type="number" id="Stock" value="{{ isset($formproduct->Stock) ? $formproduct->Stock : ''}}" >
    {!! $errors->first('Stock', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Harga') ? 'has-error' : ''}}">
    <label for="Harga" class="control-label">{{ 'Harga' }}</label>
    <input class="form-control" name="Harga" type="number" id="Harga" value="{{ isset($formproduct->Harga) ? $formproduct->Harga : ''}}" >
    {!! $errors->first('Harga', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
