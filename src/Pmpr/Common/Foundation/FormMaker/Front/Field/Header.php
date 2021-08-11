<?php
 namespace Pmpr\Common\Foundation\FormMaker\Front\Field; class Header extends Html { public function __construct(?string $hKWyZ, ?string $hVbJz) { $this->title = $hVbJz; parent::__construct($hKWyZ); } protected ?string $title = null; public function getTitle() : ?string { return $this->title; } public function setTitle(?string $hVbJz) : self { $this->title = $hVbJz; return $this; } }
