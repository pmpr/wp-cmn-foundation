<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        $this->qcsmikeggeemccuu("\x61\x64\155\151\156\137\x66\157\157\164\145\162", [$this, "\157\x71\157\151\143\165\x77\167\x69\163\x79\161\165\x67\x75\151"]);
        parent::wigskegsqequoeks();
    }
    public function yeyiguyegmmyusea()
    {
        goto csaykuwkommwweoy;
        csaykuwkommwweoy:
        if (!$this->qoqyomiqwooaeoiy()) {
            goto mqgqekesggaiiwss;
        }
        goto wgakokiswkmwewqk;
        ioicsseikmoyywio:
        parent::yeyiguyegmmyusea();
        goto auewscgmseoysose;
        wgakokiswkmwewqk:
        $this->enqueue();
        goto iquugosgiekiimqa;
        iquugosgiekiimqa:
        mqgqekesggaiiwss:
        goto ioicsseikmoyywio;
        auewscgmseoysose:
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
        goto iuoccwowyukwyaki;
        siuqeccisecquqke:
        $this->ecwgiiuacoaokqkw();
        goto kasycaqecmiqcocq;
        iuoccwowyukwyaki:
        if (!$this->qoqyomiqwooaeoiy()) {
            goto okoeukggycasqmkw;
        }
        goto siuqeccisecquqke;
        gggwgsymgguycoqq:
        echo $this->iuygowkemiiwqmiw("\x6d\157\x64\141\x6c", $qookweymeqawmcwo, ["\x63\154\x61\163\163" => self::class]);
        goto geugmeammcwkocye;
        kasycaqecmiqcocq:
        $qookweymeqawmcwo = $this->eeisgyksyecuceue();
        goto gggwgsymgguycoqq;
        geugmeammcwkocye:
        okoeukggycasqmkw:
        goto eigkgeiikoeeucmq;
        eigkgeiikoeeucmq:
    }
    
    public function eeisgyksyecuceue() : array
    {
        goto moiaswoiewmmuyqc;
        ikkqemkoagsyccug:
        if ($eyagosskwwmgwmog) {
            goto yomsmyoaskgieieq;
        }
        goto ogoaaymaeukosmao;
        moiaswoiewmmuyqc:
        $wsqkgswwooewwekw = $this->gsesiocqciggmauo();
        goto aukyogiwqccemcwi;
        kkkqikqgoweaqaey:
        yomsmyoaskgieieq:
        goto iuiueyosywyeoqww;
        aukyogiwqccemcwi:
        $eyagosskwwmgwmog = $this->ckqaeiskasoyysmg();
        goto iimwiiwywmmyiico;
        gakiswomawswuuyg:
        ekcmawkwuamiysos:
        goto oekcuiaykkcusgkm;
        iuiueyosywyeoqww:
        foreach ($wsqkgswwooewwekw as $momcykaoccoymeig => $oceoauekaygmuoko) {
            goto ogooogkoigimwaeg;
            uoqcywqgckaaqosy:
            goto uiwukyyegyuyyowy;
            goto gcqiaoykysucqicm;
            ogooogkoigimwaeg:
            $omwmuycmeqcqokom = $oceoauekaygmuoko->ygqycmmkoiuocoia();
            goto meowaymmeecwskcw;
            iuawweaasgimoeca:
            uiwukyyegyuyyowy:
            goto igkymqyweeecaiaa;
            ukggciaukwksceyo:
            $oammesyieqmwuwyi["\x6e\157\137\160\141\162\x65\156\164"][] = $oceoauekaygmuoko;
            goto uoqcywqgckaaqosy;
            meowaymmeecwskcw:
            if ($omwmuycmeqcqokom && isset($eyagosskwwmgwmog[$omwmuycmeqcqokom])) {
                goto wegqugsauikaqqik;
            }
            goto ukggciaukwksceyo;
            igkymqyweeecaiaa:
            scwcoyqkwcyacyqc:
            goto sayckkksqcmgmeas;
            gcqiaoykysucqicm:
            wegqugsauikaqqik:
            goto aiiacmowiewkwisi;
            aiiacmowiewkwisi:
            $oammesyieqmwuwyi["\x68\x61\163\137\x70\x61\x72\x65\156\x74"][$omwmuycmeqcqokom][] = $oceoauekaygmuoko;
            goto iuawweaasgimoeca;
            sayckkksqcmgmeas:
        }
        goto uouaaykomeuwokyc;
        uouaaykomeuwokyc:
        kskikaacakcmicms:
        goto gakiswomawswuuyg;
        iimwiiwywmmyiico:
        $oammesyieqmwuwyi = ["\141\x6c\154" => $wsqkgswwooewwekw, "\x6e\157\137\160\141\162\145\156\x74" => [], "\150\141\163\137\x70\x61\162\145\x6e\x74" => []];
        goto ikkqemkoagsyccug;
        aeyecoywqoueeuom:
        goto ekcmawkwuamiysos;
        goto kkkqikqgoweaqaey;
        oekcuiaykkcusgkm:
        return [self::NAME => $this->cisyiemkeykgkomc(), self::TITLE => $this->qcgakseyaikigqco(), "\x62\165\164\164\x6f\156\163" => $this->imswwiyicyksouus(), "\x70\141\162\145\156\164\x73" => $eyagosskwwmgwmog, "\x73\x65\x67\155\145\x6e\x74\x73" => $oammesyieqmwuwyi, "\143\154\157\163\145\x5f\151\143\x6f\x6e" => IconFontawesomeInterface::ICON_XMARK, "\141\162\162\157\x77\x5f\151\143\157\x6e" => IconFontawesomeInterface::ICON_ANGLE_DOWN, "\x6c\151\x73\x74\x5f\164\x69\x74\x6c\x65" => __("\103\x6f\156\x74\x65\156\164\x73\x20\114\151\163\164", PR__CMN__FOUNDATION), "\143\x6c\x6f\x73\145\137\155\x65\x73\163\141\147\x65" => __("\103\154\157\x73\x65\x20\x4d\157\144\x61\x6c", PR__CMN__FOUNDATION)];
        goto oakygoegqigkcwug;
        ogoaaymaeukosmao:
        $oammesyieqmwuwyi["\156\x6f\x5f\160\x61\x72\x65\156\164"] = $wsqkgswwooewwekw;
        goto aeyecoywqoueeuom;
        oakygoegqigkcwug:
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
        return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\x68\x6f\162\164\x63\x6f\144\x65\x5f\166\141\x6c\151\144\137\160\141\x72\145\x6e\164\x73"), $eyagosskwwmgwmog, $this);
    }
}
