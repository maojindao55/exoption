</div>
<div>
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        <div class="btn-group pull-left">
            <a href="javascript:void(0)" class="btn btn-sm btn-outline-info" title="新增一项">
                <i class="fa fa-plus"></i><span id="add-ex-option" class="hidden-xs">&nbsp;&nbsp;新增一项</span>
            </a>
        </div>
        <div class="btn-group pull-right">
            <a href="javascript:void(0)" class="btn btn-sm btn-outline-danger" title="删除一项">
                <i class="fa fa-close"></i><span id="del-ex-option" class="hidden-xs">&nbsp;&nbsp;删除一项</span>
            </a>
        </div>
    </div>
</div>
<div style="display: none" >
    <div class="form-group exoption-item-default exoption-item ">
        <label for="options_text" class="col-sm-2  control-label">{letter}</label>
        <div class="col-sm-8"> <div class="input-group">
                <span class="input-group-addon"><input type="checkbox" class="iskey" name="iskey[{letter}]"></span>
                <input class="form-control text"  name="options[text][{letter}]" id="options_text_{letter}" placeholder="输入 选项内容">
                <input id="status-{letter}" type="hidden" name="options[status][{letter}]" value="1"/>
            </div></div></div></div>
<div style="clear: both; width: 100%; height: 1px"></div>


