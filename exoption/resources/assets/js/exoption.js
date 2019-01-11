/**
 * Created by apple on 2018/12/18.
 */
var exoption_item = '<div class="form-group exoption-item "> <label for="options_text" class="col-sm-2  control-label">{letter}</label> <div class="col-sm-8"> <div class="input-group"> <span class="input-group-addon"><input type="checkbox" class="iskey" name="iskey[]"></span><input class="form-control text"  name="options[text][{letter}]" id="options_text_{letter}" placeholder="输入 选项内容"> </div></div></div>';
$("#add-ex-option").click(function () {
    var lastIndex = $(".exoption-item").last().index();
    var label = String.fromCharCode(65+lastIndex+1);
    $("#exoption-group").append(exoption_item.replace(new RegExp('{letter}', 'g'), label));
})
$("#del-ex-option").click(function () {
    $(".exoption-item").last().remove();
})