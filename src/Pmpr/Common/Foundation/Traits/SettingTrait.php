<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        goto mmumoewcwoeqqikq;
        acssgquoaaqsgkoc:
        if (!$mksyucucyswaukig) {
            goto scaqkaeuuiukecqw;
        }
        goto qimeociykiaweowe;
        qimeociykiaweowe:
        $qeqooyuoiasweuck = $mksyucucyswaukig::mywwyegkuymookeg();
        goto scmqowwwcamqgmko;
        cmquiwyeuuqiukoq:
        yuuweaqskiwsqcma:
        goto wiyqcmuawqcaiqii;
        suussioiakqqoucq:
        $mksyucucyswaukig = $this->kmuweyayaqoeqiyw();
        goto acssgquoaaqsgkoc;
        scmqowwwcamqgmko:
        if (!is_array($qeqooyuoiasweuck)) {
            goto kqykqkseesagqqyq;
        }
        goto cmigmsgqgyquimqk;
        qcaquoiwoswywuoq:
        kqykqkseesagqqyq:
        goto ggsmiqmuykwukucu;
        wiyqcmuawqcaiqii:
        return $this->allSettings;
        goto mwuaakaqmuaoceee;
        cmigmsgqgyquimqk:
        $this->allSettings = $qeqooyuoiasweuck;
        goto qcaquoiwoswywuoq;
        mmumoewcwoeqqikq:
        if ($this->allSettings) {
            goto yuuweaqskiwsqcma;
        }
        goto suussioiakqqoucq;
        ggsmiqmuykwukucu:
        scaqkaeuuiukecqw:
        goto cmquiwyeuuqiukoq;
        mwuaakaqmuaoceee:
    }
    
    public final function weysguygiseoukqw(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null)
    {
        goto iyuykukkmuayayya;
        cycegeagomyaqcyk:
        $amakmumgguksgmum = ManipulateArray::get($qeqooyuoiasweuck, $uusmaiomayssaecw, $ggauoeuaesiymgee);
        goto ycmkeyowaosmeqcq;
        ycmkeyowaosmeqcq:
        goto yaagosqmegoeuayu;
        goto swymgyikwmgeocwc;
        iyuykukkmuayayya:
        $qeqooyuoiasweuck = $this->aoqykkmokwseeeie();
        goto qcococyiuemmqkyy;
        qcococyiuemmqkyy:
        if (!$qeqooyuoiasweuck) {
            goto aykqwyescqmocguo;
        }
        goto cycegeagomyaqcyk;
        swymgyikwmgeocwc:
        aykqwyescqmocguo:
        goto umkuoceaqoiucmim;
        yommcseewkuckumw:
        yaagosqmegoeuayu:
        goto sesewseggywgeamc;
        sesewseggywgeamc:
        return $amakmumgguksgmum;
        goto qmcwuyogkcugmqss;
        owcacaiiayyowwaq:
        $amakmumgguksgmum = $mksyucucyswaukig::eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee);
        goto oiksuciayusgwsua;
        umkuoceaqoiucmim:
        $amakmumgguksgmum = $ggauoeuaesiymgee;
        goto iaawguyeskggqumi;
        oiksuciayusgwsua:
        qkuyaaweimgsaqww:
        goto yommcseewkuckumw;
        cmewqmeamawkiigk:
        if (!$mksyucucyswaukig) {
            goto qkuyaaweimgsaqww;
        }
        goto owcacaiiayyowwaq;
        iaawguyeskggqumi:
        $mksyucucyswaukig = $this->kmuweyayaqoeqiyw();
        goto cmewqmeamawkiigk;
        qmcwuyogkcugmqss:
    }
}
