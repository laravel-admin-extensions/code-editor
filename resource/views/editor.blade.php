<div {!! admin_attrs($group_attrs) !!}>
    <label for="{{$id}}" class="{{$viewClass['label']}} control-label">{{$label}}</label>
    <div class="{{$viewClass['field']}}">
        <textarea name="{{$name}}" class="{{$class}}" rows="{{ $rows }}" placeholder="{{ $placeholder }}" {!! $attributes !!} >{{ $value }}</textarea>
        @include('admin::form.error')
        @include('admin::form.help-block')
    </div>
</div>

<style>
    .CodeMirror {
        border: 1px solid #cccccc;
    }
</style>

<script @script>
    var textarea = this;
    require(@json($require), function(CodeMirror) {
        var editor = CodeMirror.fromTextArea(textarea, @json($options));
        editor.setSize(null, {{ $height ?? 300 }});
        editor.on('change', function (cm, change) {
            $(textarea).val(cm.getValue());
        });
    });
</script>
