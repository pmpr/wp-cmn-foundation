<?php
 namespace Pmpr\Common\Foundation\FormMaker; use Pmpr\Common\Foundation\FormMaker\Admin\Admin; class FormMaker extends Common { public function __construct() { $this->loadRequirement(); parent::__construct(); } public function loadRequirement() { goto Q4jJB; Q4jJB: if (!is_admin()) { goto mUH0X; } goto etVZg; etVZg: Admin::getInstance(); goto oWxLF; oWxLF: mUH0X: goto K1fQo; K1fQo: } }
