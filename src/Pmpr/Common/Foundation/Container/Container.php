<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668707cd96a67             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Container; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Notice\Traits\NoticeTrait; use Pmpr\Common\Foundation\Traits\AjaxTrait; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\ErrorTrait; use Pmpr\Common\Foundation\Traits\SettingTrait; use Pmpr\Common\Foundation\Traits\TranslateTrait; abstract class Container implements ConstantInterface { use SingletonTrait, TranslateTrait, ComponentTrait, SettingTrait, NoticeTrait, ErrorTrait, AjaxTrait, LogTrait; }
