<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        kayygiukegykiwas:
        oismsssqukkqkyai:
        goto uqqwyiemackamkca;
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
        mmkooaugaqyqgyww:
        if (!$mksyucucyswaukig) {
            goto qesewiceagyggaia;
        }
        goto aeesioaqmuoeyoga;
        uqqqaqwamieuwuky:
        $this->allSettings = $qeqooyuoiasweuck;
        goto geaucesekwmkgusc;
        uqqwyiemackamkca:
        return $this->allSettings;
        goto miumuoummqkyeeom;
        ugasccoeokgqkses:
        $mksyucucyswaukig = $this->kmuweyayaqoeqiyw();
        goto mmkooaugaqyqgyww;
        aeesioaqmuoeyoga:
        $qeqooyuoiasweuck = $mksyucucyswaukig::mywwyegkuymookeg();
        goto ikseiooeakoewqqu;
        mmkssgccamceekkq:
        qesewiceagyggaia:
        goto kayygiukegykiwas;
        geaucesekwmkgusc:
        eucqcsogwusgkuim:
        goto mmkssgccamceekkq;
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
        agqoooycekqkcygs:
        if (!$qeqooyuoiasweuck) {
            goto ogsasqwsmasgymkq;
        }
        goto mummysomwguemsmw;
        yuuqgqawgsycgggg:
        umisqysaiumusiew:
        goto kmsoucccawegguwq;
        ikwqycaoqgesokkm:
        ogsasqwsmasgymkq:
        goto eauwuykuucsasmyi;
        ckkceskqiksqckms:
        if (!$mksyucucyswaukig) {
            goto umisqysaiumusiew;
        }
        goto cqssqgewmeeiyqss;
        eauwuykuucsasmyi:
        $amakmumgguksgmum = $ggauoeuaesiymgee;
        goto iqyocsmgummccuso;
        kmsoucccawegguwq:
        yauaumyywgiiweue:
        goto aokygwoioiokcaoc;
        mcoqyaoecgqswook:
        $qeqooyuoiasweuck = $this->aoqykkmokwseeeie();
        goto agqoooycekqkcygs;
        iqyocsmgummccuso:
        $mksyucucyswaukig = $this->kmuweyayaqoeqiyw();
        goto ckkceskqiksqckms;
        mummysomwguemsmw:
        $amakmumgguksgmum = ManipulateArray::get($qeqooyuoiasweuck, $uusmaiomayssaecw, $ggauoeuaesiymgee);
        goto qwcgeuyaymqioiue;
        qwcgeuyaymqioiue:
        goto yauaumyywgiiweue;
        goto ikwqycaoqgesokkm;
        mwyiogaoucouuymy:
    }
}
