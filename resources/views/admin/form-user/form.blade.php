<div class="form-group {{ $errors->has('Username') ? 'has-error' : ''}}">
    <label for="Username" class="control-label">{{ 'Username' }}</label>
    <input class="form-control" name="Username" type="text" id="Username" value="{{ isset($formuser->Username) ? $formuser->Username : ''}}" >
    {!! $errors->first('Username', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Password') ? 'has-error' : ''}}">
    <label for="Password" class="control-label">{{ 'Password' }}</label>
    <input class="form-control" name="Password" type="text" id="Password" value="{{ isset($formuser->Password) ? $formuser->Password : ''}}" >
    {!! $errors->first('Password', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Role') ? 'has-error' : ''}}">
    <label for="Role" class="control-label">{{ 'Role' }}</label>
    <input class="form-control" name="Role" type="text" id="Role" value="{{ isset($formuser->Role) ? $formuser->Role : ''}}" >
    {!! $errors->first('Role', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
