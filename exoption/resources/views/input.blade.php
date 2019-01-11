    <div class="{{$viewClass['form-group']}} {!! !$errors->has($errorKey) ? '' : 'has-error' !!} exoption-item" status-index="status-{{$index}}">

    <label for="{{$id}}" class="{{$viewClass['label']}} control-label">{{$index}}</label>

<div class="{{$viewClass['field']}}">

    @include('admin::form.error')
    <div class="input-group">
        <span class="input-group-addon"><input type="checkbox" @if($is_key) checked @endif class="iskey" name="iskey[{{$index}}]"></span>
        <input {!! $attributes !!} name="options[text][{{$index}}]" value="{{$value}}" class="form-control text" id="{!! $id !!}" />
        <input id="status-{{$index}}" type="hidden" name="options[status][{{$index}}]" value="1"/>

    </div>
    @include('admin::form.help-block')
</div>
</div>

