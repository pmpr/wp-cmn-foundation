<?php
 namespace Pmpr\Common\Foundation\FormMaker\Front\Field; class Header extends Html { public function __construct(?string $ploD4, ?string $VsXCZ) { $this->title = $VsXCZ; parent::__construct($ploD4); } protected ?string $title = null; public function getTitle() : ?string { return $this->title; } public function setTitle(?string $VsXCZ) : self { $this->title = $VsXCZ; return $this; } }
