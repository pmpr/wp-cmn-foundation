<?php
 namespace Pmpr\Common\Foundation\Data; use Pmpr\Common\Foundation\Traits\AttributeTrait; class Metadata extends Meta { use AttributeTrait; protected ?string $link = ''; public function getLink() : ?string { return $this->link; } public function setLink(?string $NAI2V) : self { $this->link = $NAI2V; return $this; } }
