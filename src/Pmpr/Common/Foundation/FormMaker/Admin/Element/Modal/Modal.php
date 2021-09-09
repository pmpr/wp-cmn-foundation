<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Element\Modal;

use Pmpr\Common\Foundation\FormMaker\Admin\Element\Element;
use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface;

abstract class Modal extends Element
{
    
    protected array $segments = [];
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x61\144\155\151\x6e\137\146\x6f\x6f\x74\145\x72", [$this, "\157\x71\x6f\151\x63\165\x77\x77\x69\163\x79\161\165\x67\165\x69"]);
        parent::wigskegsqequoeks();
    }
    public function yeyiguyegmmyusea()
    {
        goto cgkoamymiwyauswk;
        awsgaesauouewgmi:
        $this->enqueue();
        goto owooskgowayymosm;
        owooskgowayymosm:
        uaikkeuicmuuwccc:
        goto omcwcawuuiowsyiy;
        cgkoamymiwyauswk:
        if (!$this->qoqyomiqwooaeoiy()) {
            goto uaikkeuicmuuwccc;
        }
        goto awsgaesauouewgmi;
        omcwcawuuiowsyiy:
        parent::yeyiguyegmmyusea();
        goto uyiqkeoaoeesewkm;
        uyiqkeoaoeesewkm:
    }
    
    public function gsesiocqciggmauo() : array
    {
        return $this->segments;
    }
    
    public function ogimmkwaymekmoky(Segment $oceoauekaygmuoko) : self
    {
        $this->segments[$oceoauekaygmuoko->cisyiemkeykgkomc()] = $oceoauekaygmuoko;
        return $this;
    }
    
    public function skgwcckoyoqsascq() : bool
    {
        return !empty($this->segments);
    }
    public function oqoicuwwisyqugui()
    {
        goto sewqywuuoqaqgake;
        oucegyaesucoaqcs:
        $this->ecwgiiuacoaokqkw();
        goto nsqquyqqqiceasgu;
        sewqywuuoqaqgake:
        if (!$this->qoqyomiqwooaeoiy()) {
            goto qekoeuskqquikiqa;
        }
        goto oucegyaesucoaqcs;
        nsqquyqqqiceasgu:
        $qookweymeqawmcwo = $this->eeisgyksyecuceue();
        goto eooqoiuqayocqmqi;
        gqmaowmomwymiiec:
        qekoeuskqquikiqa:
        goto kywsgoqgqmmmmucg;
        eooqoiuqayocqmqi:
        echo $this->iuygowkemiiwqmiw("\155\x6f\144\141\x6c", $qookweymeqawmcwo, ["\x63\x6c\141\163\163" => self::class]);
        goto gqmaowmomwymiiec;
        kywsgoqgqmmmmucg:
    }
    
    public function eeisgyksyecuceue() : array
    {
        goto aymokcegeqgeuqai;
        qwacmyuwycyqmwkq:
        foreach ($wsqkgswwooewwekw as $momcykaoccoymeig => $oceoauekaygmuoko) {
            goto ocuoiqskoseeoski;
            goicgikimugciika:
            auuoqiusumqggosg:
            goto qcyamgiikmwuwsyu;
            ewyywyaciesugmeu:
            $oammesyieqmwuwyi["\150\x61\163\137\x70\x61\162\x65\156\164"][$omwmuycmeqcqokom][] = $oceoauekaygmuoko;
            goto qqiomqmmgsgygyes;
            qqiomqmmgsgygyes:
            gqsemgkumwsooguq:
            goto goicgikimugciika;
            oykemeioosgeaqek:
            yimkweiuueksywey:
            goto ewyywyaciesugmeu;
            osskoqmmegqyksau:
            if ($omwmuycmeqcqokom && isset($eyagosskwwmgwmog[$omwmuycmeqcqokom])) {
                goto yimkweiuueksywey;
            }
            goto wuaysaycmsuciagi;
            ugyeckwkgkiyiwqm:
            goto gqsemgkumwsooguq;
            goto oykemeioosgeaqek;
            wuaysaycmsuciagi:
            $oammesyieqmwuwyi["\x6e\157\137\x70\141\162\145\156\x74"][] = $oceoauekaygmuoko;
            goto ugyeckwkgkiyiwqm;
            ocuoiqskoseeoski:
            $omwmuycmeqcqokom = $oceoauekaygmuoko->ygqycmmkoiuocoia();
            goto osskoqmmegqyksau;
            qcyamgiikmwuwsyu:
        }
        goto qiockgemuekykiuy;
        amaeeaeauswgoqic:
        wsgseaeaeuemmick:
        goto qwacmyuwycyqmwkq;
        caqyccimywimqwgw:
        $eyagosskwwmgwmog = $this->ckqaeiskasoyysmg();
        goto ssammmsycciagimy;
        cgwqkgmqqyaqaeos:
        goto smisquuawsuaggqc;
        goto amaeeaeauswgoqic;
        soqckwiemegiyosg:
        if ($eyagosskwwmgwmog) {
            goto wsgseaeaeuemmick;
        }
        goto ugyyuyequeekycsm;
        ugyyuyequeekycsm:
        $oammesyieqmwuwyi["\x6e\x6f\137\160\141\162\145\x6e\x74"] = $wsqkgswwooewwekw;
        goto cgwqkgmqqyaqaeos;
        qiockgemuekykiuy:
        oekmmkgkgsuawkis:
        goto sweymqcmesceysqo;
        aymokcegeqgeuqai:
        $wsqkgswwooewwekw = $this->gsesiocqciggmauo();
        goto caqyccimywimqwgw;
        ssammmsycciagimy:
        $oammesyieqmwuwyi = ["\141\x6c\x6c" => $wsqkgswwooewwekw, "\156\x6f\137\160\x61\x72\x65\156\x74" => [], "\150\141\x73\137\160\x61\162\145\156\x74" => []];
        goto soqckwiemegiyosg;
        sweymqcmesceysqo:
        smisquuawsuaggqc:
        goto iucqiqsagamegsmc;
        iucqiqsagamegsmc:
        return [self::NAME => $this->cisyiemkeykgkomc(), self::TITLE => $this->qcgakseyaikigqco(), "\x62\165\164\164\157\156\x73" => $this->imswwiyicyksouus(), "\x70\x61\162\x65\x6e\164\163" => $eyagosskwwmgwmog, "\163\x65\147\155\x65\x6e\x74\x73" => $oammesyieqmwuwyi, "\143\154\x6f\x73\x65\x5f\151\143\x6f\x6e" => IconFontawesomeInterface::ICON_XMARK, "\141\x72\x72\157\x77\137\151\x63\x6f\x6e" => IconFontawesomeInterface::ICON_ANGLE_DOWN, "\154\151\163\164\x5f\x74\x69\164\x6c\x65" => __("\103\x6f\156\164\145\x6e\x74\x73\40\114\151\x73\x74", PR__CMN__FOUNDATION), "\x63\x6c\x6f\x73\x65\137\x6d\x65\163\163\x61\147\145" => __("\103\x6c\157\163\145\x20\115\157\x64\x61\x6c", PR__CMN__FOUNDATION)];
        goto uqgkoksouqicqiiy;
        uqgkoksouqicqiiy:
    }
    
    public function imswwiyicyksouus() : array
    {
        return [];
    }
    
    public function qoqyomiqwooaeoiy() : bool
    {
        return true;
    }
    public function enqueue()
    {
    }
    
    public function ckqaeiskasoyysmg($eyagosskwwmgwmog = []) : array
    {
        return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x73\150\x6f\x72\x74\x63\x6f\144\x65\137\x76\141\154\x69\144\x5f\160\x61\x72\x65\156\x74\x73"), $eyagosskwwmgwmog, $this);
    }
}
