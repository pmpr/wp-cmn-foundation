<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation;

use Pmpr\Common\Foundation\Container\Container;
use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;

class WPSetting extends Container
{
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x61\144\x6d\151\156\x5f\x69\x6e\151\x74", [$this, "\x79\145\171\151\x67\165\171\x65\x67\x6d\x6d\x79\x75\x73\145\x61"]);
        parent::wigskegsqequoeks();
    }
    public function yeyiguyegmmyusea()
    {
        goto wakmmggoiykyuamq;
        coqmamquawyaeyae:
        foreach ($qeqooyuoiasweuck as $aokagokqyuysuksm => $amakmumgguksgmum) {
            goto acikugwgomwemcmu;
            mkggmsugkikwywom:
            $amakmumgguksgmum["\x61\x72\147\163"]["\151\144"] = $aokagokqyuysuksm;
            goto gkiikogcsmysucuc;
            kamwemiweockugia:
            register_setting($amakmumgguksgmum["\x67\x72\157\x75\160"], $aokagokqyuysuksm);
            goto mkggmsugkikwywom;
            acikugwgomwemcmu:
            $amakmumgguksgmum = ManipulateFormat::omaawkkwwyesqwcc($amakmumgguksgmum, ["\x73\145\x63\x74\x69\157\x6e" => "\144\145\x66\x61\x75\154\x74", "\164\151\164\x6c\145" => '', "\147\x72\157\x75\x70" => "\147\x65\x6e\145\x72\x61\154", "\x61\x72\x67\x73" => []]);
            goto kamwemiweockugia;
            uywoegeimqomwqoa:
            aikaeokwagkiecao:
            goto yeomwmwumiieiywi;
            gkiikogcsmysucuc:
            add_settings_field($aokagokqyuysuksm, $amakmumgguksgmum["\164\151\x74\154\x65"], [$this, "\x72\x65\156\x64\145\x72"], $amakmumgguksgmum["\147\x72\157\165\160"], $amakmumgguksgmum["\163\x65\143\x74\x69\x6f\x6e"], $amakmumgguksgmum["\141\x72\x67\163"]);
            goto uywoegeimqomwqoa;
            yeomwmwumiieiywi:
        }
        goto ymsiicmasqigsymw;
        ymsiicmasqigsymw:
        qywueemkicmwyoqg:
        goto yiyuuyewoweiaokc;
        wakmmggoiykyuamq:
        $qeqooyuoiasweuck = $this->sscegwueamckwmcy("\167\157\162\x64\160\x72\145\163\163\137\163\145\164\x74\151\x6e\147\163\137\146\x69\x65\154\144\163", []);
        goto coqmamquawyaeyae;
        yiyuuyewoweiaokc:
    }
    
    public function render($ywmkwiwkosakssii)
    {
        MetaBox::okmsgamiiemyesao(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x65\x63\150\157" => true]));
    }
    
    public static function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = false)
    {
        return DecoratorOption::get($uusmaiomayssaecw, $ggauoeuaesiymgee);
    }
}
