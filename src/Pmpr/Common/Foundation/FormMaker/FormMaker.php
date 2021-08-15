<?php
 namespace Pmpr\Common\Foundation\FormMaker; use Pmpr\Common\Foundation\FormMaker\Admin\Admin; class FormMaker extends Common { public function __construct() { $this->loadRequirement(); parent::__construct(); } public function loadRequirement() { goto UjYvi; PiJkR: xTqWV: goto B7avi; UjYvi: if (!is_admin()) { goto xTqWV; } goto Gu6UY; Gu6UY: Admin::getInstance(); goto PiJkR; B7avi: } }
