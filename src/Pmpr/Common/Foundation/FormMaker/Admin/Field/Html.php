<?php
 namespace Pmpr\Common\Foundation\FormMaker\Admin\Field; class Html extends Field { protected $content = null; public function __construct(?string $IuvAA) { parent::__construct("\x68\164\155\x6c", $IuvAA); } public function getContent() { return $this->content; } public function setContent($aFLur) : self { $this->content = $aFLur; return $this; } }
