<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        aeesioaqmuoeyoga:
        $qeqooyuoiasweuck = $mksyucucyswaukig::mywwyegkuymookeg();
        goto ikseiooeakoewqqu;
        kayygiukegykiwas:
        oismsssqukkqkyai:
        goto uqqwyiemackamkca;
        mmkssgccamceekkq:
        qesewiceagyggaia:
        goto kayygiukegykiwas;
        yuiowkeqksugiksa:
        if ($this->allSettings) {
            goto oismsssqukkqkyai;
        }
        goto ugasccoeokgqkses;
        ugasccoeokgqkses:
        $mksyucucyswaukig = $this->kmuweyayaqoeqiyw();
        goto mmkooaugaqyqgyww;
        mmkooaugaqyqgyww:
        if (!$mksyucucyswaukig) {
            goto qesewiceagyggaia;
        }
        goto aeesioaqmuoeyoga;
        geaucesekwmkgusc:
        eucqcsogwusgkuim:
        goto mmkssgccamceekkq;
        ikseiooeakoewqqu:
        if (!is_array($qeqooyuoiasweuck)) {
            goto eucqcsogwusgkuim;
        }
        goto uqqqaqwamieuwuky;
        uqqqaqwamieuwuky:
        $this->allSettings = $qeqooyuoiasweuck;
        goto geaucesekwmkgusc;
        uqqwyiemackamkca:
        return $this->allSettings;
        goto miumuoummqkyeeom;
        miumuoummqkyeeom:
    }
    
    public final function weysguygiseoukqw(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null)
    {
        goto mcoqyaoecgqswook;
        aokygwoioiokcaoc:
        return $amakmumgguksgmum;
        goto mwyiogaoucouuymy;
        cqssqgewmeeiyqss:
        $amakmumgguksgmum = $mksyucucyswaukig::eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee);
        goto yuuqgqawgsycgggg;
        yuuqgqawgsycgggg:
        umisqysaiumusiew:
        goto kmsoucccawegguwq;
        mummysomwguemsmw:
        $amakmumgguksgmum = ManipulateArray::get($qeqooyuoiasweuck, $uusmaiomayssaecw, $ggauoeuaesiymgee);
        goto qwcgeuyaymqioiue;
        qwcgeuyaymqioiue:
        goto yauaumyywgiiweue;
        goto ikwqycaoqgesokkm;
        agqoooycekqkcygs:
        if (!$qeqooyuoiasweuck) {
            goto ogsasqwsmasgymkq;
        }
        goto mummysomwguemsmw;
        ckkceskqiksqckms:
        if (!$mksyucucyswaukig) {
            goto umisqysaiumusiew;
        }
        goto cqssqgewmeeiyqss;
        kmsoucccawegguwq:
        yauaumyywgiiweue:
        goto aokygwoioiokcaoc;
        iqyocsmgummccuso:
        $mksyucucyswaukig = $this->kmuweyayaqoeqiyw();
        goto ckkceskqiksqckms;
        mcoqyaoecgqswook:
        $qeqooyuoiasweuck = $this->aoqykkmokwseeeie();
        goto agqoooycekqkcygs;
        eauwuykuucsasmyi:
        $amakmumgguksgmum = $ggauoeuaesiymgee;
        goto iqyocsmgummccuso;
        ikwqycaoqgesokkm:
        ogsasqwsmasgymkq:
        goto eauwuykuucsasmyi;
        mwyiogaoucouuymy:
    }
}
