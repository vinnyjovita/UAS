<div class="form-group {{ $errors->has('Userid') ? 'has-error' : ''}}">
    <label for="Userid" class="control-label">{{ 'Userid' }}</label>
    <input class="form-control" name="Userid" type="number" id="Userid" value="{{ isset($formtransaction->Userid) ? $formtransaction->Userid : ''}}" >
    {!! $errors->first('Userid', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Transactionnumber') ? 'has-error' : ''}}">
    <label for="Transactionnumber" class="control-label">{{ 'Transactionnumber' }}</label>
    <input class="form-control" name="Transactionnumber" type="text" id="Transactionnumber" value="{{ isset($formtransaction->Transactionnumber) ? $formtransaction->Transactionnumber : ''}}" >
    {!! $errors->first('Transactionnumber', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Total_berat') ? 'has-error' : ''}}">
    <label for="Total_berat" class="control-label">{{ 'Total Berat' }}</label>
    <input class="form-control" name="Total_berat" type="number" id="Total_berat" value="{{ isset($formtransaction->Total_berat) ? $formtransaction->Total_berat : ''}}" >
    {!! $errors->first('Total_berat', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Phone') ? 'has-error' : ''}}">
    <label for="Phone" class="control-label">{{ 'Phone' }}</label>
    <input class="form-control" name="Phone" type="text" id="Phone" value="{{ isset($formtransaction->Phone) ? $formtransaction->Phone : ''}}" >
    {!! $errors->first('Phone', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('No_resi') ? 'has-error' : ''}}">
    <label for="No_resi" class="control-label">{{ 'No Resi' }}</label>
    <input class="form-control" name="No_resi" type="text" id="No_resi" value="{{ isset($formtransaction->No_resi) ? $formtransaction->No_resi : ''}}" >
    {!! $errors->first('No_resi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Kurir') ? 'has-error' : ''}}">
    <label for="Kurir" class="control-label">{{ 'Kurir' }}</label>
    <input class="form-control" name="Kurir" type="text" id="Kurir" value="{{ isset($formtransaction->Kurir) ? $formtransaction->Kurir : ''}}" >
    {!! $errors->first('Kurir', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Kota') ? 'has-error' : ''}}">
    <label for="Kota" class="control-label">{{ 'Kota' }}</label>
    <input class="form-control" name="Kota" type="text" id="Kota" value="{{ isset($formtransaction->Kota) ? $formtransaction->Kota : ''}}" >
    {!! $errors->first('Kota', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Ongkir') ? 'has-error' : ''}}">
    <label for="Ongkir" class="control-label">{{ 'Ongkir' }}</label>
    <input class="form-control" name="Ongkir" type="number" id="Ongkir" value="{{ isset($formtransaction->Ongkir) ? $formtransaction->Ongkir : ''}}" >
    {!! $errors->first('Ongkir', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Total') ? 'has-error' : ''}}">
    <label for="Total" class="control-label">{{ 'Total' }}</label>
    <input class="form-control" name="Total" type="number" id="Total" value="{{ isset($formtransaction->Total) ? $formtransaction->Total : ''}}" >
    {!! $errors->first('Total', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Bukti_transaksi') ? 'has-error' : ''}}">
    <label for="Bukti_transaksi" class="control-label">{{ 'Bukti Transaksi' }}</label>
    <input class="form-control" name="Bukti_transaksi" type="text" id="Bukti_transaksi" value="{{ isset($formtransaction->Bukti_transaksi) ? $formtransaction->Bukti_transaksi : ''}}" >
    {!! $errors->first('Bukti_transaksi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Status') ? 'has-error' : ''}}">
    <label for="Status" class="control-label">{{ 'Status' }}</label>
    <input class="form-control" name="Status" type="text" id="Status" value="{{ isset($formtransaction->Status) ? $formtransaction->Status : ''}}" >
    {!! $errors->first('Status', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Date') ? 'has-error' : ''}}">
    <label for="Date" class="control-label">{{ 'Date' }}</label>
    <input class="form-control" name="Date" type="datetime-local" id="Date" value="{{ isset($formtransaction->Date) ? $formtransaction->Date : ''}}" >
    {!! $errors->first('Date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Address') ? 'has-error' : ''}}">
    <label for="Address" class="control-label">{{ 'Address' }}</label>
    <input class="form-control" name="Address" type="text" id="Address" value="{{ isset($formtransaction->Address) ? $formtransaction->Address : ''}}" >
    {!! $errors->first('Address', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
