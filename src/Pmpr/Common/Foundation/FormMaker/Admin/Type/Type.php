<?php
 namespace Pmpr\Common\Foundation\FormMaker\Admin\Type; class Type extends Common { public function __construct() { $this->loadRequirement(); parent::__construct(); } public function loadRequirement() { Size::getInstance(); Html::getInstance(); Button::getInstance(); Select2::getInstance(); Display::getInstance(); BSSelect::getInstance(); MultiButton::getInstance(); } }
