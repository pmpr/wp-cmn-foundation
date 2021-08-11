<?php
 namespace Pmpr\Common\Foundation\FormMaker\Front\Field; class Header extends Html { public function __construct(?string $ZaJ3f, ?string $aZcKX) { $this->title = $aZcKX; parent::__construct($ZaJ3f); } protected ?string $title = null; public function getTitle() : ?string { return $this->title; } public function setTitle(?string $aZcKX) : self { $this->title = $aZcKX; return $this; } }
