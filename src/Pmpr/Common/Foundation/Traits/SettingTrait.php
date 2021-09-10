<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        goto yuiowkeqksugiksa;
        yuiowkeqksugiksa:
        if ($this->allSettings) {
            goto oismsssqukkqkyai;
        }
        goto ugasccoeokgqkses;
        ikseiooeakoewqqu:
        if (!is_array($qeqooyuoiasweuck)) {
            goto eucqcsogwusgkuim;
        }
        goto uqqqaqwamieuwuky;
        uqqqaqwamieuwuky:
        $this->allSettings = $qeqooyuoiasweuck;
        goto geaucesekwmkgusc;
        kayygiukegykiwas:
        oismsssqukkqkyai:
        goto uqqwyiemackamkca;
        ugasccoeokgqkses:
        $mksyucucyswaukig = $this->kmuweyayaqoeqiyw();
        goto mmkooaugaqyqgyww;
        uqqwyiemackamkca:
        return $this->allSettings;
        goto miumuoummqkyeeom;
        mmkooaugaqyqgyww:
        if (!$mksyucucyswaukig) {
            goto qesewiceagyggaia;
        }
        goto aeesioaqmuoeyoga;
        mmkssgccamceekkq:
        qesewiceagyggaia:
        goto kayygiukegykiwas;
        aeesioaqmuoeyoga:
        $qeqooyuoiasweuck = $mksyucucyswaukig::mywwyegkuymookeg();
        goto ikseiooeakoewqqu;
        geaucesekwmkgusc:
        eucqcsogwusgkuim:
        goto mmkssgccamceekkq;
        miumuoummqkyeeom:
    }
    
    public final function weysguygiseoukqw(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null)
    {
        goto mcoqyaoecgqswook;
        eauwuykuucsasmyi:
        $amakmumgguksgmum = $ggauoeuaesiymgee;
        goto iqyocsmgummccuso;
        cqssqgewmeeiyqss:
        $amakmumgguksgmum = $mksyucucyswaukig::eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee);
        goto yuuqgqawgsycgggg;
        yuuqgqawgsycgggg:
        umisqysaiumusiew:
        goto kmsoucccawegguwq;
        kmsoucccawegguwq:
        yauaumyywgiiweue:
        goto aokygwoioiokcaoc;
        mummysomwguemsmw:
        $amakmumgguksgmum = ManipulateArray::get($qeqooyuoiasweuck, $uusmaiomayssaecw, $ggauoeuaesiymgee);
        goto qwcgeuyaymqioiue;
        agqoooycekqkcygs:
        if (!$qeqooyuoiasweuck) {
            goto ogsasqwsmasgymkq;
        }
        goto mummysomwguemsmw;
        iqyocsmgummccuso:
        $mksyucucyswaukig = $this->kmuweyayaqoeqiyw();
        goto ckkceskqiksqckms;
        aokygwoioiokcaoc:
        return $amakmumgguksgmum;
        goto mwyiogaoucouuymy;
        ckkceskqiksqckms:
        if (!$mksyucucyswaukig) {
            goto umisqysaiumusiew;
        }
        goto cqssqgewmeeiyqss;
        ikwqycaoqgesokkm:
        ogsasqwsmasgymkq:
        goto eauwuykuucsasmyi;
        mcoqyaoecgqswook:
        $qeqooyuoiasweuck = $this->aoqykkmokwseeeie();
        goto agqoooycekqkcygs;
        qwcgeuyaymqioiue:
        goto yauaumyywgiiweue;
        goto ikwqycaoqgesokkm;
        mwyiogaoucouuymy:
    }
}
