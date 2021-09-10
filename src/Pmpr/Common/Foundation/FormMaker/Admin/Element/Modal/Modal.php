<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        $this->qcsmikeggeemccuu("\141\144\155\151\156\137\146\x6f\x6f\x74\x65\x72", [$this, "\157\x71\x6f\151\x63\165\x77\x77\151\163\171\x71\165\x67\x75\151"]);
        parent::wigskegsqequoeks();
    }
    public function yeyiguyegmmyusea()
    {
        goto okoeukggycasqmkw;
        iuoccwowyukwyaki:
        $this->enqueue();
        goto siuqeccisecquqke;
        kasycaqecmiqcocq:
        parent::yeyiguyegmmyusea();
        goto gggwgsymgguycoqq;
        siuqeccisecquqke:
        auewscgmseoysose:
        goto kasycaqecmiqcocq;
        okoeukggycasqmkw:
        if (!$this->qoqyomiqwooaeoiy()) {
            goto auewscgmseoysose;
        }
        goto iuoccwowyukwyaki;
        gggwgsymgguycoqq:
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
        goto eigkgeiikoeeucmq;
        uiwukyyegyuyyowy:
        geugmeammcwkocye:
        goto ogooogkoigimwaeg;
        scwcoyqkwcyacyqc:
        $qookweymeqawmcwo = $this->eeisgyksyecuceue();
        goto wegqugsauikaqqik;
        wegqugsauikaqqik:
        echo $this->iuygowkemiiwqmiw("\x6d\x6f\144\141\154", $qookweymeqawmcwo, ["\x63\154\141\x73\x73" => self::class]);
        goto uiwukyyegyuyyowy;
        eigkgeiikoeeucmq:
        if (!$this->qoqyomiqwooaeoiy()) {
            goto geugmeammcwkocye;
        }
        goto kskikaacakcmicms;
        kskikaacakcmicms:
        $this->ecwgiiuacoaokqkw();
        goto scwcoyqkwcyacyqc;
        ogooogkoigimwaeg:
    }
    
    public function eeisgyksyecuceue() : array
    {
        goto aeyecoywqoueeuom;
        wimkqoekscwcoauw:
        foreach ($wsqkgswwooewwekw as $momcykaoccoymeig => $oceoauekaygmuoko) {
            goto aiiacmowiewkwisi;
            ekcmawkwuamiysos:
            $oammesyieqmwuwyi["\150\141\x73\x5f\x70\141\162\145\x6e\x74"][$omwmuycmeqcqokom][] = $oceoauekaygmuoko;
            goto moiaswoiewmmuyqc;
            aiiacmowiewkwisi:
            $omwmuycmeqcqokom = $oceoauekaygmuoko->ygqycmmkoiuocoia();
            goto iuawweaasgimoeca;
            igkymqyweeecaiaa:
            $oammesyieqmwuwyi["\x6e\x6f\137\160\x61\162\x65\x6e\164"][] = $oceoauekaygmuoko;
            goto sayckkksqcmgmeas;
            iuawweaasgimoeca:
            if ($omwmuycmeqcqokom && isset($eyagosskwwmgwmog[$omwmuycmeqcqokom])) {
                goto uoqcywqgckaaqosy;
            }
            goto igkymqyweeecaiaa;
            aukyogiwqccemcwi:
            ukggciaukwksceyo:
            goto iimwiiwywmmyiico;
            yomsmyoaskgieieq:
            uoqcywqgckaaqosy:
            goto ekcmawkwuamiysos;
            moiaswoiewmmuyqc:
            gcqiaoykysucqicm:
            goto aukyogiwqccemcwi;
            sayckkksqcmgmeas:
            goto gcqiaoykysucqicm;
            goto yomsmyoaskgieieq;
            iimwiiwywmmyiico:
        }
        goto ikemwmsywqqqiqsa;
        ikemwmsywqqqiqsa:
        meowaymmeecwskcw:
        goto ggymiommyoaqkwko;
        gakiswomawswuuyg:
        $oammesyieqmwuwyi["\x6e\157\x5f\160\141\162\x65\x6e\164"] = $wsqkgswwooewwekw;
        goto oekcuiaykkcusgkm;
        iuiueyosywyeoqww:
        $oammesyieqmwuwyi = ["\x61\154\154" => $wsqkgswwooewwekw, "\x6e\157\137\x70\x61\x72\145\x6e\x74" => [], "\x68\141\163\x5f\x70\x61\x72\x65\x6e\164" => []];
        goto uouaaykomeuwokyc;
        kkkqikqgoweaqaey:
        $eyagosskwwmgwmog = $this->ckqaeiskasoyysmg();
        goto iuiueyosywyeoqww;
        wweyewgicswqweyq:
        return [self::NAME => $this->cisyiemkeykgkomc(), self::TITLE => $this->qcgakseyaikigqco(), "\142\165\164\164\x6f\156\163" => $this->imswwiyicyksouus(), "\160\141\x72\x65\x6e\x74\163" => $eyagosskwwmgwmog, "\x73\x65\147\155\x65\x6e\x74\x73" => $oammesyieqmwuwyi, "\x63\154\157\163\x65\137\x69\x63\157\x6e" => IconFontawesomeInterface::ICON_XMARK, "\141\x72\x72\x6f\167\137\x69\143\157\x6e" => IconFontawesomeInterface::ICON_ANGLE_DOWN, "\x6c\151\x73\164\x5f\x74\x69\164\154\x65" => __("\103\157\156\x74\x65\x6e\164\163\40\114\x69\x73\x74", PR__CMN__FOUNDATION), "\143\x6c\x6f\x73\145\137\x6d\145\x73\x73\x61\x67\145" => __("\x43\154\157\163\x65\40\x4d\157\x64\141\x6c", PR__CMN__FOUNDATION)];
        goto cgmociyqmykaqmya;
        oekcuiaykkcusgkm:
        goto ogoaaymaeukosmao;
        goto oakygoegqigkcwug;
        oakygoegqigkcwug:
        ikkqemkoagsyccug:
        goto wimkqoekscwcoauw;
        ggymiommyoaqkwko:
        ogoaaymaeukosmao:
        goto wweyewgicswqweyq;
        uouaaykomeuwokyc:
        if ($eyagosskwwmgwmog) {
            goto ikkqemkoagsyccug;
        }
        goto gakiswomawswuuyg;
        aeyecoywqoueeuom:
        $wsqkgswwooewwekw = $this->gsesiocqciggmauo();
        goto kkkqikqgoweaqaey;
        cgmociyqmykaqmya:
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
        return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\150\157\162\164\143\x6f\144\145\137\166\141\154\x69\144\x5f\160\141\x72\x65\x6e\x74\163"), $eyagosskwwmgwmog, $this);
    }
}
