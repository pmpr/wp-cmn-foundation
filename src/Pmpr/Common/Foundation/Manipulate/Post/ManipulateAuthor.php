<?php
 namespace Pmpr\Common\Foundation\Manipulate\Post; use Pmpr\Common\Foundation\Decorator\Post\DecoratorAuthor; class ManipulateAuthor extends Common { public static function getId($HssRu = null) { return DecoratorAuthor::getMeta("\x49\x44", $HssRu); } public function getNickname($HssRu = null) { return DecoratorAuthor::getMeta("\x6e\151\143\153\156\x61\155\x65", $HssRu); } }
