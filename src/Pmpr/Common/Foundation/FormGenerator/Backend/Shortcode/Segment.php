<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             682fc6d2d6ba5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Shortcode; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Container\Traits\CommonTrait; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\HookTrait; abstract class Segment { use HookTrait, HelperTrait, CommonTrait, WrapperTrait, TemplateTrait, SingletonTrait; protected $showOn = []; protected string $shortcode; }
