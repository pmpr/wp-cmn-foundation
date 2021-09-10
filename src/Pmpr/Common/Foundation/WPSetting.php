<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        $this->qcsmikeggeemccuu("\141\144\x6d\151\x6e\137\x69\x6e\151\x74", [$this, "\171\145\x79\x69\x67\x75\x79\145\147\155\x6d\x79\x75\163\x65\141"]);
        parent::wigskegsqequoeks();
    }
    public function yeyiguyegmmyusea()
    {
        goto wakmmggoiykyuamq;
        wakmmggoiykyuamq:
        $qeqooyuoiasweuck = $this->sscegwueamckwmcy("\167\x6f\162\144\160\162\x65\x73\163\137\163\145\x74\164\151\x6e\x67\163\137\146\x69\x65\154\144\163", []);
        goto coqmamquawyaeyae;
        coqmamquawyaeyae:
        foreach ($qeqooyuoiasweuck as $aokagokqyuysuksm => $amakmumgguksgmum) {
            goto acikugwgomwemcmu;
            kamwemiweockugia:
            register_setting($amakmumgguksgmum["\147\162\x6f\165\160"], $aokagokqyuysuksm);
            goto mkggmsugkikwywom;
            acikugwgomwemcmu:
            $amakmumgguksgmum = ManipulateFormat::omaawkkwwyesqwcc($amakmumgguksgmum, ["\163\145\143\x74\x69\157\x6e" => "\x64\x65\146\141\165\154\x74", "\x74\x69\164\x6c\145" => '', "\147\x72\157\165\x70" => "\x67\x65\x6e\145\162\141\x6c", "\141\x72\147\x73" => []]);
            goto kamwemiweockugia;
            mkggmsugkikwywom:
            $amakmumgguksgmum["\x61\x72\x67\x73"]["\x69\x64"] = $aokagokqyuysuksm;
            goto gkiikogcsmysucuc;
            gkiikogcsmysucuc:
            add_settings_field($aokagokqyuysuksm, $amakmumgguksgmum["\x74\x69\164\x6c\x65"], [$this, "\x72\145\x6e\x64\x65\x72"], $amakmumgguksgmum["\147\x72\157\165\160"], $amakmumgguksgmum["\163\x65\143\x74\x69\157\x6e"], $amakmumgguksgmum["\141\162\x67\163"]);
            goto uywoegeimqomwqoa;
            uywoegeimqomwqoa:
            aikaeokwagkiecao:
            goto yeomwmwumiieiywi;
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
        MetaBox::okmsgamiiemyesao(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x65\x63\150\157" => true]));
    }
    
    public static function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = false)
    {
        return DecoratorOption::get($uusmaiomayssaecw, $ggauoeuaesiymgee);
    }
}
