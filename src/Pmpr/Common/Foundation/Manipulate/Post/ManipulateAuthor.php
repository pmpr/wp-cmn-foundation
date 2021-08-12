<?php
 namespace Pmpr\Common\Foundation\Manipulate\Post; use Pmpr\Common\Foundation\Decorator\Post\DecoratorAuthor; class ManipulateAuthor extends Common { public static function getId($flCsN = null) { return DecoratorAuthor::getMeta("\111\x44", $flCsN); } public function getNickname($flCsN = null) { return DecoratorAuthor::getMeta("\x6e\x69\143\x6b\x6e\141\x6d\145", $flCsN); } }
