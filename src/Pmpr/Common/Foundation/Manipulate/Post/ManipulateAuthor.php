<?php
 namespace Pmpr\Common\Foundation\Manipulate\Post; use Pmpr\Common\Foundation\Decorator\Post\DecoratorAuthor; class ManipulateAuthor extends Common { public static function getId($pbR1v = null) { return DecoratorAuthor::getMeta("\111\104", $pbR1v); } public function getNickname($pbR1v = null) { return DecoratorAuthor::getMeta("\156\151\x63\153\x6e\141\x6d\145", $pbR1v); } }
