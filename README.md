Code editor extension for laravel-admin 2.x based on CodeMirror

Supports `php`、`sql`、`javascript`、`java`、`c`、`cpp`、`csharp`、`objc`、`scala`、`kotlin`、`ceylon`、`python`、`ruby`、`css`、`sass`、`less`、`xml`、`html`、`nginx`、`vuejs`、`lua`、`yaml`、`swift`、`clojure`、`coffeescript`、`protobuf`、`commonlisp`、`dart`、`dockerfile`、`diff`、`rust`、`shell`、`go`、`haml`

基于CodeMirror的代码编辑器，可用于laravel-admin 2.x

支持`php`、`sql`、`javascript`、`java`、`c`、`cpp`、`csharp`、`objc`、`scala`、
`kotlin`、`ceylon`、`python`、`ruby`、`css`、`sass`、`less`、`xml`、`html`、`nginx`、
`vuejs`、`lua`、`yaml`、`swift`、`clojure`、`coffeescript`、`protobuf`、`commonlisp`、
`dart`、`dockerfile`、`diff`、`rust`、`shell`、`go`、`haml`等语言。

## Installation 

```bash
composer require laravel-admin-ext/code-editor -vvv
```

## Usage 

Use it in the form:
```php
$form->code('code_column')->php();

$form->code('code_column')->dockerfile();

$form->code('code_column')->html();
```

Set height:
```php
$form->php('code')->height(500);
```

## Donate

> Help keeping the project development going, by donating a little. Thanks in advance.

[![PayPal Me](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.me/zousong)

> 如果你觉得这个项目帮助你节约了时间，不妨支持一下，已激励我创造出更多有用的项目

![-1](https://cloud.githubusercontent.com/assets/1479100/23287423/45c68202-fa78-11e6-8125-3e365101a313.jpg)

License
------------
Licensed under [The MIT License (MIT)](LICENSE).
