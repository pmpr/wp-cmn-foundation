<?php
 namespace Pmpr\Common\Foundation\FormMaker\Front\Field; class Header extends Html { public function __construct(?string $WWEWt, ?string $B1X2C) { $this->title = $B1X2C; parent::__construct($WWEWt); } protected ?string $title = null; public function getTitle() : ?string { return $this->title; } public function setTitle(?string $B1X2C) : self { $this->title = $B1X2C; return $this; } }
