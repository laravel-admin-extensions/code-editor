<textarea id="{{ $id }}">{{ $value }}</textarea>

<style>
    .CodeMirror {
        border: 1px solid #cccccc;
    }
</style>

<script selector="#{{$id}}">
    var textarea = this;
    require(@json($require), function(CodeMirror) {
        var editor = CodeMirror.fromTextArea(textarea, @json($options));
        editor.setSize(null, {{ $height ?? 300 }});
    });
</script>
