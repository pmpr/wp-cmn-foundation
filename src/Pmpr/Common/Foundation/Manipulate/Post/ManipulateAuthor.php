<?php
 namespace Pmpr\Common\Foundation\Manipulate\Post; use Pmpr\Common\Foundation\Decorator\Post\DecoratorAuthor; class ManipulateAuthor extends Common { public static function getId($pXMju = null) { return DecoratorAuthor::getMeta("\x49\104", $pXMju); } public function getNickname($pXMju = null) { return DecoratorAuthor::getMeta("\x6e\x69\x63\153\x6e\x61\155\145", $pXMju); } }
