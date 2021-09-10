<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front\Field;

use Pmpr\Common\Foundation\Decorator\DecoratorHook;

class Datepicker extends Text
{
    
    public function __construct(?string $aokagokqyuysuksm, string $pkyyagewkiyckmwy = null, string $mkqqqewsokcswckc = null)
    {
        goto oiaiuqmgiesgcqyk;
        xoqugcgcausywooc:
        self::enqueue();
        goto yacyygsucqcwygis;
        ioiumiumouowyygc:
        $this->qigsyyqgewgskemg("\x64\x61\x74\x65\x70\x69\143\x6b\145\162\x20\x70\162\55\x64\x61\x74\145\160\x69\143\x6b\145\x72");
        goto xoqugcgcausywooc;
        oiaiuqmgiesgcqyk:
        parent::__construct($aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc, "\144\141\x74\x65");
        goto ioiumiumouowyygc;
        yacyygsucqcwygis:
    }
    
    public function qqoqoqmusaueoyca($ocogsiouoiuuguym = null) : self
    {
        return $this->igmaewykumgwoaoy("\144\x61\164\141\55\155\151\x6e\x2d\x64\x61\x74\145", $ocogsiouoiuuguym ?: time());
    }
    
    public function ieuoqksqweaemaaa($ocogsiouoiuuguym = null) : self
    {
        return $this->igmaewykumgwoaoy("\x64\x61\x74\141\x2d\155\x61\170\x2d\144\x61\164\x65", $ocogsiouoiuuguym ?: time());
    }
    public static function enqueue()
    {
        DecoratorHook::cqscqicucmeamkyq("\x65\x6e\x71\x75\145\x75\145\137\144\141\x74\x65\x70\x69\143\153\145\162\137\x61\x73\163\145\164\x73", "\146\162\x6f\156\x74");
    }
}
