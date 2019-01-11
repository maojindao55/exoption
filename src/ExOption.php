<?php
/**
 * Created by PhpStorm.
 * User: hongbin9@staff.weibo.com
 * Date: 2018/12/18
 * Time: 3:13 PM
 */

namespace Hobby\ExOption;


use App\Option;
use Encore\Admin\Form\Field;
use Encore\Admin\Form\Field\PlainInput;

class ExOption extends Field
{
    use PlainInput;

    protected $view = 'exoption::body';
    protected static $css = [];
    protected static $js = [];

    public function render()
    {
        $subId = request('list', 0);
        $exoptions = [];
        $defaultValue = ['text' => '', 'is_key' => ''];
        $options = Option::where('sub_id', $subId)->where('status', 1)->get();
        foreach($options as $option) {
            $exoptions[$option->letter_sort] = ['text' => $option->text, 'is_key' => $option->is_key];
        }
        $this->prepend('<i class="fa fa-pencil fa-fw"></i>')
            ->defaultAttribute('type', 'text')
            ->defaultAttribute('class', 'form-control '.$this->getElementClassString())
            ->defaultAttribute('placeholder', $this->getPlaceholder());
        $oldExoptions = old('options', []);
        $oldIsKey = old('iskey', []);
        if(!empty($oldExoptions)) {
            foreach ($oldExoptions['text'] as $k => $v) {
                $tpm[$k]['text'] = $v;
                $tpm[$k]['is_key'] = isset($oldIsKey[$k]) ? 1 : 0 ;
            }
            $exoptions = $tpm;
        }
        $this->addVariables([
            'prepend' => $this->prepend,
            'append'  => $this->append,
            'exoptions' => empty($exoptions) ? ['A' => $defaultValue, 'B'=> $defaultValue, 'C' => $defaultValue, 'D'=> $defaultValue] : $exoptions,
        ]);
        $this->script = <<<EOT
(function(){
    var exoption_item = $(".exoption-item-default").prop("outerHTML");
    console.log(exoption_item);
    $(".exoption-item-default").remove();
    $("#add-ex-option").click(function () {
        var lastIndex = $(".exoption-item").last().index();
        var label = String.fromCharCode(65+lastIndex+1);
        $("#exoption-group").append(exoption_item.replace(new RegExp('{letter}', 'g'), label));
    })
    $("#del-ex-option").click(function () {
        if($(".exoption-item").length < 5) {
            alert('不能再删除了');
            return false;
        }
        var id = $(".exoption-item").last().attr("status-index");
        if(id) {
            $("#"+id).val(0);
            $(".exoption-item").last().hide();
        } else {
            $(".exoption-item").last().remove();
        }

    })
    $(".iskey").click(function(){
        var type = $("select[name=type] option:selected").val();
         var checkedNum =  $(".iskey:checked").length;
         if(type == 1 && checkedNum > 1) { alert('单选题只能选1项'); return false;}
    })
    $(":submit").click(function(){
         var type = $("select[name=type] option:selected").val();
         var checkedNum =  $(".iskey:checked").length;
        if(type == 1 && checkedNum != 1) {
                alert('单选题至少并且仅能选1项');
                return false;
        } else if ( type == 2 && checkedNum < 2) {
                alert('多选题至少选2项');
                return false;
        }
    })
})()
EOT;
        return parent::render();
    }
}