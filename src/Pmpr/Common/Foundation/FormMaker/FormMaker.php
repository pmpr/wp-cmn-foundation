<?php
 namespace Pmpr\Common\Foundation\FormMaker; use Pmpr\Common\Foundation\FormMaker\Admin\Admin; class FormMaker extends Common { public function __construct() { $this->loadRequirement(); parent::__construct(); } public function loadRequirement() { goto H0aY1; H0aY1: if (!is_admin()) { goto vFfiy; } goto R8dVl; R8dVl: Admin::getInstance(); goto haEnj; haEnj: vFfiy: goto nwF2I; nwF2I: } }
