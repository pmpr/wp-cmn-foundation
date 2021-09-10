<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        $this->qcsmikeggeemccuu("\141\x64\155\x69\x6e\137\151\x6e\x69\x74", [$this, "\171\145\171\151\x67\165\171\145\147\155\x6d\171\x75\163\145\141"]);
        parent::wigskegsqequoeks();
    }
    public function yeyiguyegmmyusea()
    {
        goto wakmmggoiykyuamq;
        wakmmggoiykyuamq:
        $qeqooyuoiasweuck = $this->sscegwueamckwmcy("\167\157\x72\x64\160\162\x65\163\x73\137\x73\145\x74\x74\151\156\x67\x73\x5f\146\x69\x65\x6c\144\163", []);
        goto coqmamquawyaeyae;
        coqmamquawyaeyae:
        foreach ($qeqooyuoiasweuck as $aokagokqyuysuksm => $amakmumgguksgmum) {
            goto acikugwgomwemcmu;
            acikugwgomwemcmu:
            $amakmumgguksgmum = ManipulateFormat::omaawkkwwyesqwcc($amakmumgguksgmum, ["\163\145\143\x74\x69\157\x6e" => "\x64\x65\x66\141\x75\x6c\x74", "\164\x69\164\154\x65" => '', "\147\162\x6f\165\160" => "\147\145\156\x65\162\x61\x6c", "\141\162\x67\x73" => []]);
            goto kamwemiweockugia;
            kamwemiweockugia:
            register_setting($amakmumgguksgmum["\147\x72\157\165\160"], $aokagokqyuysuksm);
            goto mkggmsugkikwywom;
            mkggmsugkikwywom:
            $amakmumgguksgmum["\x61\162\147\163"]["\151\144"] = $aokagokqyuysuksm;
            goto gkiikogcsmysucuc;
            uywoegeimqomwqoa:
            aikaeokwagkiecao:
            goto yeomwmwumiieiywi;
            gkiikogcsmysucuc:
            add_settings_field($aokagokqyuysuksm, $amakmumgguksgmum["\164\x69\164\154\145"], [$this, "\162\145\x6e\144\145\162"], $amakmumgguksgmum["\147\162\157\x75\x70"], $amakmumgguksgmum["\163\x65\x63\164\151\157\156"], $amakmumgguksgmum["\141\x72\147\163"]);
            goto uywoegeimqomwqoa;
            yeomwmwumiieiywi:
        }
        goto ymsiicmasqigsymw;
        ymsiicmasqigsymw:
        qywueemkicmwyoqg:
        goto yiyuuyewoweiaokc;
        yiyuuyewoweiaokc:
    }
    
    public function render($ywmkwiwkosakssii)
    {
        MetaBox::okmsgamiiemyesao(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x65\143\x68\x6f" => true]));
    }
    
    public static function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = false)
    {
        return DecoratorOption::get($uusmaiomayssaecw, $ggauoeuaesiymgee);
    }
}
