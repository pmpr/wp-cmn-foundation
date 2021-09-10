<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Traits;

use Pmpr\Common\Foundation\FormMaker\Admin\Element\Setting;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

trait SettingTrait
{
    
    protected ?Setting $settingObj = null;
    
    protected array $allSettings = [];
    
    public final function kmuweyayaqoeqiyw() : ?Setting
    {
        return $this->settingObj;
    }
    
    public final function aoqykkmokwseeeie() : array
    {
        goto eucqcsogwusgkuim;
        yuiowkeqksugiksa:
        $qeqooyuoiasweuck = $mksyucucyswaukig::mywwyegkuymookeg();
        goto ugasccoeokgqkses;
        eucqcsogwusgkuim:
        if ($this->allSettings) {
            goto miocsiqemcsmkmwe;
        }
        goto qesewiceagyggaia;
        uqqqaqwamieuwuky:
        miocsiqemcsmkmwe:
        goto geaucesekwmkgusc;
        qesewiceagyggaia:
        $mksyucucyswaukig = $this->kmuweyayaqoeqiyw();
        goto oismsssqukkqkyai;
        ugasccoeokgqkses:
        if (!is_array($qeqooyuoiasweuck)) {
            goto ikqmqsquoimqecsy;
        }
        goto mmkooaugaqyqgyww;
        oismsssqukkqkyai:
        if (!$mksyucucyswaukig) {
            goto igasikoyeqekomeq;
        }
        goto yuiowkeqksugiksa;
        ikseiooeakoewqqu:
        igasikoyeqekomeq:
        goto uqqqaqwamieuwuky;
        geaucesekwmkgusc:
        return $this->allSettings;
        goto mmkssgccamceekkq;
        mmkooaugaqyqgyww:
        $this->allSettings = $qeqooyuoiasweuck;
        goto aeesioaqmuoeyoga;
        aeesioaqmuoeyoga:
        ikqmqsquoimqecsy:
        goto ikseiooeakoewqqu;
        mmkssgccamceekkq:
    }
    
    public final function weysguygiseoukqw(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null)
    {
        goto umisqysaiumusiew;
        ckkceskqiksqckms:
        miumuoummqkyeeom:
        goto cqssqgewmeeiyqss;
        qwcgeuyaymqioiue:
        $mksyucucyswaukig = $this->kmuweyayaqoeqiyw();
        goto ikwqycaoqgesokkm;
        ogsasqwsmasgymkq:
        if (!$qeqooyuoiasweuck) {
            goto uqqwyiemackamkca;
        }
        goto yauaumyywgiiweue;
        mcoqyaoecgqswook:
        goto miumuoummqkyeeom;
        goto agqoooycekqkcygs;
        cqssqgewmeeiyqss:
        return $amakmumgguksgmum;
        goto yuuqgqawgsycgggg;
        yauaumyywgiiweue:
        $amakmumgguksgmum = ManipulateArray::get($qeqooyuoiasweuck, $uusmaiomayssaecw, $ggauoeuaesiymgee);
        goto mcoqyaoecgqswook;
        mummysomwguemsmw:
        $amakmumgguksgmum = $ggauoeuaesiymgee;
        goto qwcgeuyaymqioiue;
        iqyocsmgummccuso:
        kayygiukegykiwas:
        goto ckkceskqiksqckms;
        ikwqycaoqgesokkm:
        if (!$mksyucucyswaukig) {
            goto kayygiukegykiwas;
        }
        goto eauwuykuucsasmyi;
        umisqysaiumusiew:
        $qeqooyuoiasweuck = $this->aoqykkmokwseeeie();
        goto ogsasqwsmasgymkq;
        eauwuykuucsasmyi:
        $amakmumgguksgmum = $mksyucucyswaukig::eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee);
        goto iqyocsmgummccuso;
        agqoooycekqkcygs:
        uqqwyiemackamkca:
        goto mummysomwguemsmw;
        yuuqgqawgsycgggg:
    }
}
