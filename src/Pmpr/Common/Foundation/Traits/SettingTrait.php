<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        mmkooaugaqyqgyww:
        if (!$mksyucucyswaukig) {
            goto qesewiceagyggaia;
        }
        goto aeesioaqmuoeyoga;
        kayygiukegykiwas:
        oismsssqukkqkyai:
        goto uqqwyiemackamkca;
        uqqqaqwamieuwuky:
        $this->allSettings = $qeqooyuoiasweuck;
        goto geaucesekwmkgusc;
        aeesioaqmuoeyoga:
        $qeqooyuoiasweuck = $mksyucucyswaukig::mywwyegkuymookeg();
        goto ikseiooeakoewqqu;
        uqqwyiemackamkca:
        return $this->allSettings;
        goto miumuoummqkyeeom;
        ugasccoeokgqkses:
        $mksyucucyswaukig = $this->kmuweyayaqoeqiyw();
        goto mmkooaugaqyqgyww;
        geaucesekwmkgusc:
        eucqcsogwusgkuim:
        goto mmkssgccamceekkq;
        mmkssgccamceekkq:
        qesewiceagyggaia:
        goto kayygiukegykiwas;
        ikseiooeakoewqqu:
        if (!is_array($qeqooyuoiasweuck)) {
            goto eucqcsogwusgkuim;
        }
        goto uqqqaqwamieuwuky;
        miumuoummqkyeeom:
    }
    
    public final function weysguygiseoukqw(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null)
    {
        goto mcoqyaoecgqswook;
        cqssqgewmeeiyqss:
        $amakmumgguksgmum = $mksyucucyswaukig::eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee);
        goto yuuqgqawgsycgggg;
        qwcgeuyaymqioiue:
        goto yauaumyywgiiweue;
        goto ikwqycaoqgesokkm;
        yuuqgqawgsycgggg:
        umisqysaiumusiew:
        goto kmsoucccawegguwq;
        mummysomwguemsmw:
        $amakmumgguksgmum = ManipulateArray::get($qeqooyuoiasweuck, $uusmaiomayssaecw, $ggauoeuaesiymgee);
        goto qwcgeuyaymqioiue;
        ckkceskqiksqckms:
        if (!$mksyucucyswaukig) {
            goto umisqysaiumusiew;
        }
        goto cqssqgewmeeiyqss;
        eauwuykuucsasmyi:
        $amakmumgguksgmum = $ggauoeuaesiymgee;
        goto iqyocsmgummccuso;
        iqyocsmgummccuso:
        $mksyucucyswaukig = $this->kmuweyayaqoeqiyw();
        goto ckkceskqiksqckms;
        agqoooycekqkcygs:
        if (!$qeqooyuoiasweuck) {
            goto ogsasqwsmasgymkq;
        }
        goto mummysomwguemsmw;
        ikwqycaoqgesokkm:
        ogsasqwsmasgymkq:
        goto eauwuykuucsasmyi;
        mcoqyaoecgqswook:
        $qeqooyuoiasweuck = $this->aoqykkmokwseeeie();
        goto agqoooycekqkcygs;
        kmsoucccawegguwq:
        yauaumyywgiiweue:
        goto aokygwoioiokcaoc;
        aokygwoioiokcaoc:
        return $amakmumgguksgmum;
        goto mwyiogaoucouuymy;
        mwyiogaoucouuymy:
    }
}
