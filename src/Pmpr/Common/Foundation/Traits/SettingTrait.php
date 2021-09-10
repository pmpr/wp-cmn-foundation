<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        mmkssgccamceekkq:
        qesewiceagyggaia:
        goto kayygiukegykiwas;
        uqqqaqwamieuwuky:
        $this->allSettings = $qeqooyuoiasweuck;
        goto geaucesekwmkgusc;
        ikseiooeakoewqqu:
        if (!is_array($qeqooyuoiasweuck)) {
            goto eucqcsogwusgkuim;
        }
        goto uqqqaqwamieuwuky;
        yuiowkeqksugiksa:
        if ($this->allSettings) {
            goto oismsssqukkqkyai;
        }
        goto ugasccoeokgqkses;
        kayygiukegykiwas:
        oismsssqukkqkyai:
        goto uqqwyiemackamkca;
        ugasccoeokgqkses:
        $mksyucucyswaukig = $this->kmuweyayaqoeqiyw();
        goto mmkooaugaqyqgyww;
        aeesioaqmuoeyoga:
        $qeqooyuoiasweuck = $mksyucucyswaukig::mywwyegkuymookeg();
        goto ikseiooeakoewqqu;
        uqqwyiemackamkca:
        return $this->allSettings;
        goto miumuoummqkyeeom;
        mmkooaugaqyqgyww:
        if (!$mksyucucyswaukig) {
            goto qesewiceagyggaia;
        }
        goto aeesioaqmuoeyoga;
        geaucesekwmkgusc:
        eucqcsogwusgkuim:
        goto mmkssgccamceekkq;
        miumuoummqkyeeom:
    }
    
    public final function weysguygiseoukqw(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null)
    {
        goto mcoqyaoecgqswook;
        mummysomwguemsmw:
        $amakmumgguksgmum = ManipulateArray::get($qeqooyuoiasweuck, $uusmaiomayssaecw, $ggauoeuaesiymgee);
        goto qwcgeuyaymqioiue;
        mcoqyaoecgqswook:
        $qeqooyuoiasweuck = $this->aoqykkmokwseeeie();
        goto agqoooycekqkcygs;
        eauwuykuucsasmyi:
        $amakmumgguksgmum = $ggauoeuaesiymgee;
        goto iqyocsmgummccuso;
        yuuqgqawgsycgggg:
        umisqysaiumusiew:
        goto kmsoucccawegguwq;
        aokygwoioiokcaoc:
        return $amakmumgguksgmum;
        goto mwyiogaoucouuymy;
        kmsoucccawegguwq:
        yauaumyywgiiweue:
        goto aokygwoioiokcaoc;
        cqssqgewmeeiyqss:
        $amakmumgguksgmum = $mksyucucyswaukig::eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee);
        goto yuuqgqawgsycgggg;
        qwcgeuyaymqioiue:
        goto yauaumyywgiiweue;
        goto ikwqycaoqgesokkm;
        agqoooycekqkcygs:
        if (!$qeqooyuoiasweuck) {
            goto ogsasqwsmasgymkq;
        }
        goto mummysomwguemsmw;
        ikwqycaoqgesokkm:
        ogsasqwsmasgymkq:
        goto eauwuykuucsasmyi;
        ckkceskqiksqckms:
        if (!$mksyucucyswaukig) {
            goto umisqysaiumusiew;
        }
        goto cqssqgewmeeiyqss;
        iqyocsmgummccuso:
        $mksyucucyswaukig = $this->kmuweyayaqoeqiyw();
        goto ckkceskqiksqckms;
        mwyiogaoucouuymy:
    }
}
