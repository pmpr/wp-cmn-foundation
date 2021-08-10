<?php
 namespace Pmpr\Common\Foundation\Manipulate\Post; use Pmpr\Common\Foundation\Decorator\Post\DecoratorAuthor; class ManipulateAuthor extends Common { public static function getId($aaUQY = null) { return DecoratorAuthor::getMeta("\x49\104", $aaUQY); } public function getNickname($aaUQY = null) { return DecoratorAuthor::getMeta("\156\151\143\153\156\x61\x6d\145", $aaUQY); } }
