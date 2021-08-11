<?php
 namespace Pmpr\Common\Foundation\Manipulate\Post; use Pmpr\Common\Foundation\Decorator\Post\DecoratorAuthor; class ManipulateAuthor extends Common { public static function getId($BZhQ1 = null) { return DecoratorAuthor::getMeta("\111\104", $BZhQ1); } public function getNickname($BZhQ1 = null) { return DecoratorAuthor::getMeta("\x6e\x69\x63\x6b\x6e\141\x6d\145", $BZhQ1); } }
