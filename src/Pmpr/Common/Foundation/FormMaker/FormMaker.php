<?php
 namespace Pmpr\Common\Foundation\FormMaker; use Pmpr\Common\Foundation\FormMaker\Admin\Admin; class FormMaker extends Common { public function __construct() { $this->loadRequirement(); parent::__construct(); } public function loadRequirement() { goto VvLb5; q4Tg6: CT_SN: goto kJWkG; y2WYb: Admin::getInstance(); goto q4Tg6; VvLb5: if (!is_admin()) { goto CT_SN; } goto y2WYb; kJWkG: } }
