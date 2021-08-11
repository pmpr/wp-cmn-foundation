<?php
 namespace Pmpr\Common\Foundation\Manipulate\Post; use Pmpr\Common\Foundation\Decorator\Post\DecoratorAuthor; class ManipulateAuthor extends Common { public static function getId($DqZ1Z = null) { return DecoratorAuthor::getMeta("\x49\x44", $DqZ1Z); } public function getNickname($DqZ1Z = null) { return DecoratorAuthor::getMeta("\x6e\x69\x63\153\x6e\141\155\x65", $DqZ1Z); } }
