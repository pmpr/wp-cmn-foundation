<?php
 namespace Pmpr\Common\Foundation\FormMaker\Front\Field; class Header extends Html { public function __construct(?string $ojlPB, ?string $aeybl) { $this->title = $aeybl; parent::__construct($ojlPB); } protected ?string $title = null; public function getTitle() : ?string { return $this->title; } public function setTitle(?string $aeybl) : self { $this->title = $aeybl; return $this; } }
