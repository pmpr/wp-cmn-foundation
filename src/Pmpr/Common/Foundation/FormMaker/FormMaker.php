<?php
 namespace Pmpr\Common\Foundation\FormMaker; use Pmpr\Common\Foundation\FormMaker\Admin\Admin; class FormMaker extends Common { public function __construct() { $this->loadRequirement(); parent::__construct(); } public function loadRequirement() { goto TT_8D; XHW6k: Admin::getInstance(); goto HBjLb; TT_8D: if (!is_admin()) { goto qGJxZ; } goto XHW6k; HBjLb: qGJxZ: goto MMP5q; MMP5q: } }
