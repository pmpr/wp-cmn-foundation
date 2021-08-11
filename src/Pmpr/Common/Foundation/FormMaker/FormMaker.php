<?php
 namespace Pmpr\Common\Foundation\FormMaker; use Pmpr\Common\Foundation\FormMaker\Admin\Admin; class FormMaker extends Common { public function __construct() { $this->loadRequirement(); parent::__construct(); } public function loadRequirement() { goto xfM8p; W4WK3: Admin::getInstance(); goto YQ27h; xfM8p: if (!is_admin()) { goto VxkA8; } goto W4WK3; YQ27h: VxkA8: goto kX1s3; kX1s3: } }
