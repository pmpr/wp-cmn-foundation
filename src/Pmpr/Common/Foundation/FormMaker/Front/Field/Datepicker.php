<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front\Field;

use Pmpr\Common\Foundation\Decorator\DecoratorHook;

class Datepicker extends Text
{
    
    public function __construct(?string $aokagokqyuysuksm, string $pkyyagewkiyckmwy = null, string $mkqqqewsokcswckc = null)
    {
        goto gqimacywyeawgyaa;
        gqimacywyeawgyaa:
        parent::__construct($aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc, "\144\x61\164\145");
        goto oiaiuqmgiesgcqyk;
        oiaiuqmgiesgcqyk:
        $this->qigsyyqgewgskemg("\144\141\x74\x65\160\151\143\x6b\x65\x72\40\x70\x72\55\x64\141\164\x65\x70\151\143\x6b\x65\x72");
        goto ioiumiumouowyygc;
        ioiumiumouowyygc:
        self::enqueue();
        goto xoqugcgcausywooc;
        xoqugcgcausywooc:
    }
    
    public function qqoqoqmusaueoyca($ocogsiouoiuuguym = null) : self
    {
        return $this->igmaewykumgwoaoy("\144\141\164\141\55\x6d\151\156\55\x64\141\164\x65", $ocogsiouoiuuguym ?: time());
    }
    
    public function ieuoqksqweaemaaa($ocogsiouoiuuguym = null) : self
    {
        return $this->igmaewykumgwoaoy("\x64\141\164\141\x2d\155\141\170\55\x64\141\164\145", $ocogsiouoiuuguym ?: time());
    }
    public static function enqueue()
    {
        DecoratorHook::cqscqicucmeamkyq("\x65\156\x71\x75\x65\x75\145\137\144\x61\x74\145\160\x69\143\153\145\x72\x5f\141\163\163\x65\x74\x73", "\x66\x72\157\x6e\x74");
    }
}
