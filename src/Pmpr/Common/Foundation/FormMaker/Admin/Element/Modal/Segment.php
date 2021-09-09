<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Element\Modal;

use Pmpr\Common\Foundation\FormMaker\Admin\Element\Element;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\Tab;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;

abstract class Segment extends Element
{
    
    protected array $tabs = [];
    
    protected array $fields = [];
    
    protected array $buttons = [];
    
    protected ?string $icon = null;
    
    protected ?string $parent = null;
    
    public function __construct()
    {
        goto cwcsikiqeagwcocm;
        umcgmioomggsuigo:
        $this->name = strtolower(self::ugwmakayykcmcmqa());
        goto secykwwqaoeuywim;
        cwcsikiqeagwcocm:
        if ($this->aakmagwggmkoiiyu()) {
            goto esyaossmykieskyg;
        }
        goto umcgmioomggsuigo;
        secykwwqaoeuywim:
        esyaossmykieskyg:
        goto emoiiiemgaasikyg;
        emoiiiemgaasikyg:
        parent::__construct();
        goto kqkmsuoqweqqoiiq;
        kqkmsuoqweqqoiiq:
    }
    
    public function eyamqkqiykagecsw() : ?string
    {
        return $this->icon;
    }
    
    public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : void
    {
        $this->icon = $wkaqekwwgqsqwcoi;
    }
    
    public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self
    {
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        return $this;
    }
    
    public function ewweaossowcqywaw(array $ikgwqyuyckaewsow) : self
    {
        goto ayqcwceyiiosgcka;
        iyekaawoaqcqsssa:
        return $this;
        goto wywkeewykggksckc;
        ayqcwceyiiosgcka:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto eeimuiikicqykmwa;
            ackussqqoyomekeg:
            yguaqcewwsageswq:
            goto cmmckyaaioecwuse;
            ogooawuumwuweeos:
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            goto gkmimeqyqisqsosw;
            gkmimeqyqisqsosw:
            igwsysyakwoosysi:
            goto ackussqqoyomekeg;
            eeimuiikicqykmwa:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto igwsysyakwoosysi;
            }
            goto ogooawuumwuweeos;
            cmmckyaaioecwuse:
        }
        goto oeuquoqswksgymuw;
        oeuquoqswksgymuw:
        uimggymiocacgyky:
        goto iyekaawoaqcqsssa;
        wywkeewykggksckc:
    }
    
    public function equiyaoamqmaeckc() : array
    {
        return $this->tabs;
    }
    
    public function aucimgwswmgaocae(?Tab $cciauwuwuqaywgce = null) : self
    {
        goto wekseqwmumkkcsoc;
        gykiuseauawoywsy:
        return $this;
        goto gaagiucqcsoauoye;
        cscoykmeocmcwkkc:
        $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce;
        goto cwigquaouceygaas;
        cwigquaouceygaas:
        yiksaemwukcmqoks:
        goto gykiuseauawoywsy;
        wekseqwmumkkcsoc:
        if (!$cciauwuwuqaywgce) {
            goto yiksaemwukcmqoks;
        }
        goto cscoykmeocmcwkkc;
        gaagiucqcsoauoye:
    }
    
    public function imswwiyicyksouus() : array
    {
        return $this->buttons;
    }
    
    public function ycewecmqyuksugoi() : bool
    {
        return !empty($this->imswwiyicyksouus());
    }
    
    public function igmamuiesywmkgeu($meqocwsecsywiiqs, $wwgucssaecqekuek) : self
    {
        goto cmcmwummuiemewaw;
        meqocakwgoyugmso:
        $this->buttons[] = ["\x74\151\164\154\145" => $meqocwsecsywiiqs, "\x61\164\164\x72\x73" => $wwgucssaecqekuek];
        goto coysugskuiuggwke;
        coysugskuiuggwke:
        return $this;
        goto cmqiucseesyaamww;
        cmcmwummuiemewaw:
        $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\x61\163\x73", "\142\165\x74\164\x6f\x6e\40\142\165\x74\x74\x6f\x6e\55\154\141\162\147\145");
        goto meqocakwgoyugmso;
        cmqiucseesyaamww:
    }
    
    public function ugmceccgwaaaigiy() : array
    {
        goto meowaymmeecwskcw;
        gcqiaoykysucqicm:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            goto geugmeammcwkocye;
            wegqugsauikaqqik:
            mqgqekesggaiiwss:
            goto uiwukyyegyuyyowy;
            scwcoyqkwcyacyqc:
            gggwgsymgguycoqq:
            goto wegqugsauikaqqik;
            kskikaacakcmicms:
            csaykuwkommwweoy:
            goto scwcoyqkwcyacyqc;
            geugmeammcwkocye:
            if (!$cciauwuwuqaywgce instanceof Tab) {
                goto gggwgsymgguycoqq;
            }
            goto eigkgeiikoeeucmq;
            eigkgeiikoeeucmq:
            foreach ($cciauwuwuqaywgce->ugmceccgwaaaigiy() as $uusmaiomayssaecw => $aiowsaccomcoikus) {
                goto ioicsseikmoyywio;
                siuqeccisecquqke:
                wgakokiswkmwewqk:
                goto kasycaqecmiqcocq;
                okoeukggycasqmkw:
                $ikgwqyuyckaewsow[$uusmaiomayssaecw] = $aiowsaccomcoikus;
                goto iuoccwowyukwyaki;
                auewscgmseoysose:
                $aiowsaccomcoikus->ggiaseqygioygumq("{$this->cisyiemkeykgkomc()}\137{$aiowsaccomcoikus->mwikyscisascoeea()}")->yoimakcqmoqokkcu()->usoqcyyugsuyiewc("\160\164\55\63");
                goto okoeukggycasqmkw;
                iuoccwowyukwyaki:
                iquugosgiekiimqa:
                goto siuqeccisecquqke;
                ioicsseikmoyywio:
                if (!$aiowsaccomcoikus instanceof Field) {
                    goto iquugosgiekiimqa;
                }
                goto auewscgmseoysose;
                kasycaqecmiqcocq:
            }
            goto kskikaacakcmicms;
            uiwukyyegyuyyowy:
        }
        goto aiiacmowiewkwisi;
        iuawweaasgimoeca:
        ogooogkoigimwaeg:
        goto igkymqyweeecaiaa;
        uoqcywqgckaaqosy:
        if (!$ywoucyskcquysiwc) {
            goto ogooogkoigimwaeg;
        }
        goto gcqiaoykysucqicm;
        igkymqyweeecaiaa:
        return $ikgwqyuyckaewsow;
        goto sayckkksqcmgmeas;
        aiiacmowiewkwisi:
        oacssuuogqgskmgc:
        goto iuawweaasgimoeca;
        meowaymmeecwskcw:
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        goto ukggciaukwksceyo;
        ukggciaukwksceyo:
        $ikgwqyuyckaewsow = $this->fields;
        goto uoqcywqgckaaqosy;
        sayckkksqcmgmeas:
    }
    
    public function ygqycmmkoiuocoia() : ?string
    {
        return $this->parent;
    }
    public function render()
    {
        goto moiaswoiewmmuyqc;
        aukyogiwqccemcwi:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto iimwiiwywmmyiico;
        iuiueyosywyeoqww:
        self::iuaucuookgoqiiio($ikgwqyuyckaewsow, $uiewakwqscemywuo);
        goto uouaaykomeuwokyc;
        ogoaaymaeukosmao:
        if (!$this->equiyaoamqmaeckc()) {
            goto yomsmyoaskgieieq;
        }
        goto aeyecoywqoueeuom;
        uouaaykomeuwokyc:
        ekcmawkwuamiysos:
        goto gakiswomawswuuyg;
        kkkqikqgoweaqaey:
        yomsmyoaskgieieq:
        goto iuiueyosywyeoqww;
        moiaswoiewmmuyqc:
        $this->ecwgiiuacoaokqkw();
        goto aukyogiwqccemcwi;
        iimwiiwywmmyiico:
        if (!$ikgwqyuyckaewsow) {
            goto ekcmawkwuamiysos;
        }
        goto ikkqemkoagsyccug;
        ikkqemkoagsyccug:
        $uiewakwqscemywuo = ["\x69\x64" => $this->cisyiemkeykgkomc(), "\x65\143\x68\x6f" => true, "\150\157\x6f\153\x75\160" => false];
        goto ogoaaymaeukosmao;
        aeyecoywqoueeuom:
        $uiewakwqscemywuo["\164\141\142\x73"] = $this->equiyaoamqmaeckc();
        goto kkkqikqgoweaqaey;
        gakiswomawswuuyg:
    }
}
