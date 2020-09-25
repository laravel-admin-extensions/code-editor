<?php

namespace Encore\Admin\CodeEditor;

use Encore\Admin\Form\Field\Textarea;

class Editor extends Textarea
{
    /**
     * {@inheritdoc}
     */
    protected $view = 'laravel-admin-code-editor::editor';

    /**
     * @var array
     */
    protected $require = [
        'codemirror',
        'css!codemirror/lib/codemirror',
        'codemirror/addon/edit/matchbrackets',
    ];

    /**
     * @var array
     */
    protected $options = [
        'lineNumbers'   => true,
        'matchBrackets' => true,
    ];

    /**
     * @param array $require
     * @return $this
     */
    public function require($require = [])
    {
        array_push($this->require, ...$require);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function render()
    {
        $this->addVariables([
            'require' => $this->require,
            'options' => $this->options,
        ]);

        return parent::render();
    }

    /**
     * @param int $height
     *
     * @return Editor
     */
    public function height($height = 300)
    {
        return $this->addVariables(compact('height'));
    }

    /**
     * @return $this
     */
    public function php()
    {
        return $this->require([
            'codemirror/mode/htmlmixed/htmlmixed',
            'codemirror/mode/xml/xml',
            'codemirror/mode/javascript/javascript',
            'codemirror/mode/css/css',
            'codemirror/mode/clike/clike',
            'codemirror/mode/php/php'
        ])->options([
            'mode'           => 'application/x-httpd-php',
            'indentUnit'     => 4,
            'indentWithTabs' => true,
        ]);
    }

    /**
     * @return $this
     */
    public function sql()
    {
        return $this->require([
            'codemirror/mode/sql/sql',
            'css!codemirror/addon/hint/show-hint',
            'codemirror/addon/hint/show-hint',
            'codemirror/addon/hint/sql-hint',
        ])->options([
            'mode'           => 'text/x-sql',
            'indentWithTabs' => true,
            'smartIndent'    => true,
        ]);
    }

    /**
     * @return $this
     */
    public function javascript()
    {
        return $this->require([
            'codemirror/addon/comment/continuecomment',
            'codemirror/addon/comment/comment',
            'codemirror/mode/javascript/javascript'
        ])->options([
            'continueComments' => 'Enter',
        ]);
    }

    /**
     * @return $this
     */
    public function java()
    {
        return $this->require([
            'codemirror/mode/clike/clike',
        ])->options([
            'mode' => 'text/x-java',
        ]);
    }

    /**
     * @return $this
     */
    public function c()
    {
        return $this->require([
            'codemirror/mode/clike/clike',
        ])->options([
            'mode' => 'text/x-csrc',
        ]);
    }

    /**
     * @return $this
     */
    public function cpp()
    {
        return $this->require([
            'codemirror/mode/clike/clike',
        ])->options([
            'mode' => 'text/x-c++src',
        ]);
    }

    /**
     * @return $this
     */
    public function csharp()
    {
        return $this->require([
            'codemirror/mode/clike/clike',
        ])->options([
            'mode' => 'text/x-csharp',
        ]);
    }

    /**
     * @return $this
     */
    public function objc()
    {
        return $this->require([
            'codemirror/mode/clike/clike',
        ])->options([
            'mode' => 'text/x-objectivec',
        ]);
    }

    /**
     * @return $this
     */
    public function scala()
    {
        return $this->require([
            'codemirror/mode/clike/clike',
        ])->options([
            'mode' => 'text/x-scala',
        ]);
    }

    /**
     * @return $this
     */
    public function kotlin()
    {
        return $this->require([
            'codemirror/mode/clike/clike',
        ])->options([
            'mode' => 'text/x-kotlin',
        ]);
    }

    /**
     * @return $this
     */
    public function ceylon()
    {
        return $this->require([
            'codemirror/mode/clike/clike',
        ])->options([
            'mode' => 'text/x-ceylon',
        ]);
    }

    /**
     * @return $this
     */
    public function python()
    {
        return $this->require([
            'codemirror/mode/python/python',
        ])->options([
            'mode'       => [
                'name'                   => "python",
                'version'                => 3,
                'singleLineStringErrors' => false
            ],
            'indentUnit' => 4,
        ]);
    }

    /**
     * @return $this
     */
    public function ruby()
    {
        return $this->require([
            'codemirror/mode/ruby/ruby',
        ])->options([
            'mode'       => 'text/x-ruby',
            'indentUnit' => 4,
        ]);
    }

    /**
     * @return $this
     */
    public function css()
    {
        return $this->require([
            'css!codemirror/addon/hint/show-hint',
            'codemirror/addon/hint/show-hint',
            'codemirror/mode/css/css',
            'codemirror/addon/hint/css-hint',
        ]);
    }

    /**
     * @return $this
     */
    public function sass()
    {
        return $this->css()->options([
            'mode' => 'text/x-sass',
        ]);
    }

    /**
     * @return $this
     */
    public function less()
    {
        return $this->css()->options([
            'mode' => 'text/x-less',
        ]);
    }

    /**
     * @return $this
     */
    public function xml()
    {
        return $this->require([
            'codemirror/mode/xml/xml',
        ]);
    }

    /**
     * @return $this
     */
    public function html()
    {
        return $this->xml();
    }


    /**
     * @return $this
     */    public function nginx()
    {
        return $this->require([
            'codemirror/mode/nginx/nginx',
        ]);
    }

    /**
     * @return $this
     */
    public function vuejs()
    {
        return $this->require([
            'codemirror/addon/mode/overlay',
            'codemirror/addon/mode/simple',
            'codemirror/addon/selection/selection-pointer',
            'codemirror/mode/xml/xml',
            'codemirror/mode/javascript/javascript',
            'codemirror/mode/css/css',
            'codemirror/mode/coffeescript/coffeescript',
            'codemirror/mode/sass/sass',
            'codemirror/mode/pug/pug',
            'codemirror/mode/handlebars/handlebars',
            'codemirror/mode/htmlmixed/htmlmixed',
            'codemirror/mode/vue/vue',
        ])->options([
            'mode'             => ['name' => 'vue'],
            'selectionPointer' => true,
        ]);
    }

    /**
     * @return $this
     */
    public function lua()
    {
        return $this->require([
            'css!codemirror/theme/neat',
            'codemirror/mode/lua/lua',
        ])->options([
            'theme' => 'neat',
        ]);
    }

    /**
     * @return $this
     */
    public function yaml()
    {
        return $this->require([
            'codemirror/mode/yaml/yaml',
        ])->options([
            'mode' => 'text/x-yaml',
        ]);
    }

    /**
     * @return $this
     */
    public function swift()
    {
        return $this->require([
            'codemirror/mode/swift/swift',
        ])->options([
            'mode' => 'text/x-swift',
        ]);
    }

    /**
     * @return $this
     */
    public function clojure()
    {
        return $this->require([
            'codemirror/addon/edit/closebrackets',
            'codemirror/mode/clojure/clojure',
        ])->options([
            'autoCloseBrackets' => true,
            'mode'              => 'text/x-clojure',
        ]);
    }

    /**
     * @return $this
     */
    public function coffeescript()
    {
        return $this->require([
            'codemirror/mode/coffeescript/coffeescript',
        ])->options([
            'autoCloseBrackets' => true,
            'mode'              => 'text/x-coffeescript',
        ]);
    }

    /**
     * @return $this
     */
    public function protobuf()
    {
        return $this->require([
            'codemirror/mode/protobuf/protobuf',
        ])->options([
            'mode' => 'text/x-protobuf',
        ]);
    }

    /**
     * @return $this
     */
    public function commonlisp()
    {
        return $this->require([
            'codemirror/mode/commonlisp/commonlisp',
        ])->options([
            'mode' => 'text/x-common-lisp',
        ]);
    }

    /**
     * @return $this
     */
    public function dart()
    {
        return $this->require([
            'codemirror/mode/clike/clike',
            'codemirror/mode/dart/dart',
        ])->options([
            'mode' => 'application/dart',
        ]);
    }

    /**
     * @return $this
     */
    public function dockerfile()
    {
        return $this->require([
            'codemirror/addon/mode/simple',
            'codemirror/mode/dockerfile/dockerfile',
        ])->options([
            'mode' => 'text/x-dockerfile',
        ]);
    }

    /**
     * @return $this
     */
    public function diff()
    {
        return $this->require([
            'codemirror/mode/diff/diff',
        ])->options([
            'mode' => 'diff',
        ]);
    }

    /**
     * @return $this
     */
    public function rust()
    {
        return $this->require([
            'codemirror/addon/mode/simple',
            'codemirror/mode/rust/rust',
        ])->options([
            'mode' => 'rust',
        ]);
    }

    /**
     * @return $this
     */
    public function shell()
    {
        return $this->require([
            'codemirror/mode/shell/shell',
        ])->options([
            'mode' => 'shell',
        ]);
    }

    /**
     * @return $this
     */
    public function go()
    {
        return $this->require([
            'codemirror/mode/go/go',
            'css!codemirror/theme/elegant',
        ])->options([
            'theme'          => 'elegant',
            'indentUnit'     => 8,
            'tabSize'        => 8,
            'indentWithTabs' => true,
            'mode'           => 'text/x-go',
        ]);
    }

    /**
     * @return $this
     */
    public function haml()
    {
        return $this->require([
            'codemirror/mode/xml/xml',
            'codemirror/mode/htmlmixed/htmlmixed',
            'codemirror/mode/javascript/javascript',
            'codemirror/mode/ruby/ruby',
            'codemirror/mode/haml/haml',
        ])->options([
            'mode' => 'text/x-haml',
        ]);
    }
}
