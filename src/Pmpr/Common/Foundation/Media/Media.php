<?php
 namespace Pmpr\Common\Foundation\Media; use Pmpr\Common\Foundation\Media\Icon\Icon; class Media extends Common { public function __construct() { $this->loadRequirement(); parent::__construct(); } public function loadRequirement() { Svg::getInstance(); Icon::getInstance(); } }
