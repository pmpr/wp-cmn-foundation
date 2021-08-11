<?php
 namespace Pmpr\Common\Foundation\FormMaker; use Pmpr\Common\Foundation\FormMaker\Admin\Admin; class FormMaker extends Common { public function __construct() { $this->loadRequirement(); parent::__construct(); } public function loadRequirement() { goto Vhnpm; dEPKy: l43FL: goto uxb1E; SmHH7: Admin::getInstance(); goto dEPKy; Vhnpm: if (!is_admin()) { goto l43FL; } goto SmHH7; uxb1E: } }
