<div class="form-group {{ $errors->has('Productid') ? 'has-error' : ''}}">
    <label for="Productid" class="control-label">{{ 'Productid' }}</label>
    <input class="form-control" name="Productid" type="number" id="Productid" value="{{ isset($formtransaction_detail->Productid) ? $formtransaction_detail->Productid : ''}}" >
    {!! $errors->first('Productid', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Transactionnumber') ? 'has-error' : ''}}">
    <label for="Transactionnumber" class="control-label">{{ 'Transactionnumber' }}</label>
    <input class="form-control" name="Transactionnumber" type="text" id="Transactionnumber" value="{{ isset($formtransaction_detail->Transactionnumber) ? $formtransaction_detail->Transactionnumber : ''}}" >
    {!! $errors->first('Transactionnumber', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Qty') ? 'has-error' : ''}}">
    <label for="Qty" class="control-label">{{ 'Qty' }}</label>
    <input class="form-control" name="Qty" type="number" id="Qty" value="{{ isset($formtransaction_detail->Qty) ? $formtransaction_detail->Qty : ''}}" >
    {!! $errors->first('Qty', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Price') ? 'has-error' : ''}}">
    <label for="Price" class="control-label">{{ 'Price' }}</label>
    <input class="form-control" name="Price" type="number" id="Price" value="{{ isset($formtransaction_detail->Price) ? $formtransaction_detail->Price : ''}}" >
    {!! $errors->first('Price', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
