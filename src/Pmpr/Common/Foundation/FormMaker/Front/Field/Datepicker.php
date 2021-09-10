<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front\Field;

use Pmpr\Common\Foundation\Decorator\DecoratorHook;

class Datepicker extends Text
{
    
    public function __construct(?string $aokagokqyuysuksm, string $pkyyagewkiyckmwy = null, string $mkqqqewsokcswckc = null)
    {
        parent::__construct($aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc, 'date');
        $this->qigsyyqgewgskemg('datepicker pr-datepicker');
        self::enqueue();
    }
    
    public function qqoqoqmusaueoyca($ocogsiouoiuuguym = null) : self
    {
        return $this->igmaewykumgwoaoy('data-min-date', $ocogsiouoiuuguym ?: time());
    }
    
    public function ieuoqksqweaemaaa($ocogsiouoiuuguym = null) : self
    {
        return $this->igmaewykumgwoaoy('data-max-date', $ocogsiouoiuuguym ?: time());
    }
    public static function enqueue()
    {
        DecoratorHook::cqscqicucmeamkyq('enqueue_datepicker_assets', 'front');
    }
}
