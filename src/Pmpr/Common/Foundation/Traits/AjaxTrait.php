<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Traits;

use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;

trait AjaxTrait
{
    
    public function miueaekaaugaccmg(&$iswcokucwmiosiaq, $aiowsaccomcoikus = self::AJAX_NONCE_KEY) : bool
    {
        $eisqsskqimiigkay = false;
        if (!ManipulateAjax::wqsmsuyggkkyyocc(self::AJAX_NONCE, $aiowsaccomcoikus)) {
            $iswcokucwmiosiaq = __('Request is not valid, please reload page and try again.', PR__CMN__FOUNDATION);
        } else {
            $eisqsskqimiigkay = true;
        }
        return $eisqsskqimiigkay;
    }
    
    public final function uaggqsoeugksgooc($occymigcemkqucuw, $keccaugmemegoimu)
    {
        ManipulateAjax::imkyucqsciqykkee($keccaugmemegoimu, $occymigcemkqucuw);
    }
}
