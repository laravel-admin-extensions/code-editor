<?php

namespace Encore\Admin\CodeEditor;

use Encore\Admin\Extension;

class CodeEditor extends Extension
{
    public $name = 'code-editor';

    public $views = __DIR__ . '/../resource/views';

    public static function show()
    {
        return function ($lang, $height = 300) {
            return $this->noBorder()->unescape()->as(function ($value) use ($lang, $height) {

                $editor = (new Editor())->{$lang}();

                return admin_view('laravel-admin-code-editor::field', [
                    'value'   => $value,
                    'id'      => uniqid('field-'),
                    'height'  => $height,
                    'require' => $editor->getRequires(),
                    'options' => $editor->getOptions(),
                ]);
            });
        };
    }
}
