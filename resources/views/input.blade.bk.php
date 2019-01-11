<div id="exoption-group">
@foreach(range('A', 'D') as $v)
    <div class="{{$viewClass['form-group']}} {!! !$errors->has($errorKey) ? '' : 'has-error' !!} exoption-item">

    <label for="{{$id}}" class="{{$viewClass['label']}} control-label">{{$v}}</label>

<div class="{{$viewClass['field']}}">

    @include('admin::form.error')
    <div class="input-group">
        <span class="input-group-addon"><input type="checkbox" class="after-submit" name="after-save" value="3"></span>
        <input {!! $attributes !!} class="form-control text" id="{!! $id.'_'.$v !!}" />

    </div>
    @include('admin::form.help-block')
</div>
</div>
@endforeach
</div>
<div>
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        <div class="btn-group pull-left">
            <a href="javascript:vod(0)" class="btn btn-sm btn-outline-info" title="新增一项">
                <i class="fa fa-plus"></i><span id="add-ex-option" class="hidden-xs">&nbsp;&nbsp;新增一项</span>
            </a>
        </div>
        <div class="btn-group pull-right">
            <a href="javascript:vod(0)" class="btn btn-sm btn-outline-danger" title="删除一项">
                <i class="fa fa-close"></i><span id="del-ex-option" class="hidden-xs">&nbsp;&nbsp;删除一项</span>
            </a>
        </div>
    </div>
</div>

