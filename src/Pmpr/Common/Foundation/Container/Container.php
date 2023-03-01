<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ff9b2c1034e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Container; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Notice\Traits\NoticeTrait; use Pmpr\Common\Foundation\Traits\AjaxTrait; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\ErrorTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Common\Foundation\Traits\SettingTrait; use Pmpr\Common\Foundation\Traits\TranslateTrait; use Pmpr\Common\Foundation\Helper\Traits\HelperTrait; use Pmpr\Common\Foundation\Wrapper\Traits\WrapperTrait; class Container implements ConstantInterface { use SingletonTrait, TranslateTrait, ComponentTrait, SettingTrait, WrapperTrait, HelperTrait, NoticeTrait, ErrorTrait, HookTrait, AjaxTrait, LogTrait; }
