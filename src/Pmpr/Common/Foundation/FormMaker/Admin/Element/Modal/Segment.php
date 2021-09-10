<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto ikemwmsywqqqiqsa;
        ggymiommyoaqkwko:
        $this->name = strtolower(self::ugwmakayykcmcmqa());
        goto wweyewgicswqweyq;
        ikemwmsywqqqiqsa:
        if ($this->aakmagwggmkoiiyu()) {
            goto wimkqoekscwcoauw;
        }
        goto ggymiommyoaqkwko;
        wweyewgicswqweyq:
        wimkqoekscwcoauw:
        goto cgmociyqmykaqmya;
        cgmociyqmykaqmya:
        parent::__construct();
        goto imksqaayamqiwwuw;
        imksqaayamqiwwuw:
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
        goto yawsiksqqgmeeiws;
        iiauuwmeoiiqeigi:
        qesmouyqgeigoyay:
        goto wgguesgmyqgyescc;
        yawsiksqqgmeeiws:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto ckiesggkeyocyoia;
            ckiesggkeyocyoia:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto cawcqogqmaaiaeim;
            }
            goto qiiyiqwyoomsueuq;
            qiiyiqwyoomsueuq:
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            goto squwouwckwiwquyu;
            huuswamyiwgiymou:
            ysuwseamckigmoge:
            goto aqocckgoumwuoyco;
            squwouwckwiwquyu:
            cawcqogqmaaiaeim:
            goto huuswamyiwgiymou;
            aqocckgoumwuoyco:
        }
        goto iiauuwmeoiiqeigi;
        wgguesgmyqgyescc:
        return $this;
        goto sockicoiuuuygkyo;
        sockicoiuuuygkyo:
    }
    
    public function equiyaoamqmaeckc() : array
    {
        return $this->tabs;
    }
    
    public function aucimgwswmgaocae(?Tab $cciauwuwuqaywgce = null) : self
    {
        goto wiuoyosaiuqqmiss;
        weqqwqaoyugaiaqs:
        komeykuoomsymayc:
        goto oqecugiicgkgisyi;
        iqacckgckyoioccs:
        $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce;
        goto weqqwqaoyugaiaqs;
        wiuoyosaiuqqmiss:
        if (!$cciauwuwuqaywgce) {
            goto komeykuoomsymayc;
        }
        goto iqacckgckyoioccs;
        oqecugiicgkgisyi:
        return $this;
        goto usweuqkmumcwckoo;
        usweuqkmumcwckoo:
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
        goto gaykosyqceuygmiq;
        gmeksiaumseqkqug:
        $this->buttons[] = ["\x74\x69\x74\x6c\145" => $meqocwsecsywiiqs, "\x61\x74\164\x72\x73" => $wwgucssaecqekuek];
        goto eiuugowioueiceoc;
        gaykosyqceuygmiq:
        $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\x61\163\x73", "\x62\165\164\164\157\156\x20\142\x75\164\164\x6f\156\x2d\x6c\141\x72\x67\145");
        goto gmeksiaumseqkqug;
        eiuugowioueiceoc:
        return $this;
        goto mmiwmgwcsgqoemws;
        mmiwmgwcsgqoemws:
    }
    
    public function ugmceccgwaaaigiy() : array
    {
        goto joguwmwqyuewsyiq;
        yywiqsiicysqcogw:
        $ikgwqyuyckaewsow = $this->fields;
        goto iuqayqiqyyyiaeuk;
        kwwuwmyeqcqsikws:
        qomimwecwqaeyqwu:
        goto zwyeiuiuwmomyaui;
        zwyeiuiuwmomyaui:
        ogukuswqqqwgaeui:
        goto siuogwuegkksagas;
        uieuqmawsakguqua:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            goto kgkyaciicuyywmge;
            acmaoiqemyycsaka:
            wwgucckkqkmogugq:
            goto oskkwqymsyucwaow;
            kgkyaciicuyywmge:
            if (!$cciauwuwuqaywgce instanceof Tab) {
                goto wwgucckkqkmogugq;
            }
            goto koagmgoqguqqksmy;
            koagmgoqguqqksmy:
            foreach ($cciauwuwuqaywgce->ugmceccgwaaaigiy() as $uusmaiomayssaecw => $aiowsaccomcoikus) {
                goto sgocsssuiwqiauaq;
                geiamswcamageuyw:
                oeyoocigmyyssieq:
                goto awcgwaasyugkmkqy;
                aaimmucyosywoass:
                uggiuigwgwokwgiq:
                goto geiamswcamageuyw;
                weowiucswssseeoi:
                $aiowsaccomcoikus->ggiaseqygioygumq("{$this->cisyiemkeykgkomc()}\x5f{$aiowsaccomcoikus->mwikyscisascoeea()}")->yoimakcqmoqokkcu()->usoqcyyugsuyiewc("\x70\164\x2d\63");
                goto gmuwcugusceigoky;
                gmuwcugusceigoky:
                $ikgwqyuyckaewsow[$uusmaiomayssaecw] = $aiowsaccomcoikus;
                goto aaimmucyosywoass;
                sgocsssuiwqiauaq:
                if (!$aiowsaccomcoikus instanceof Field) {
                    goto uggiuigwgwokwgiq;
                }
                goto weowiucswssseeoi;
                awcgwaasyugkmkqy:
            }
            goto ciwysskisqauwcug;
            ciwysskisqauwcug:
            aysoywgeacaeuyao:
            goto acmaoiqemyycsaka;
            oskkwqymsyucwaow:
            cwcqmsuqqsauemuw:
            goto cmeuiweeoykyskow;
            cmeuiweeoykyskow:
        }
        goto kwwuwmyeqcqsikws;
        iuqayqiqyyyiaeuk:
        if (!$ywoucyskcquysiwc) {
            goto ogukuswqqqwgaeui;
        }
        goto uieuqmawsakguqua;
        siuogwuegkksagas:
        return $ikgwqyuyckaewsow;
        goto sigokuuaiuwmqmuw;
        joguwmwqyuewsyiq:
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        goto yywiqsiicysqcogw;
        sigokuuaiuwmqmuw:
    }
    
    public function ygqycmmkoiuocoia() : ?string
    {
        return $this->parent;
    }
    public function render()
    {
        goto oggaskekyaokouua;
        aokmwkymqcqmyiym:
        ekucagwgcssmgqiu:
        goto aigumokaoqemqcyc;
        ygqymamcoygaeaio:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto mkkyuwckaeosicay;
        qoeqoyciommaewgo:
        $uiewakwqscemywuo = ["\x69\x64" => $this->cisyiemkeykgkomc(), "\145\143\150\x6f" => true, "\x68\157\x6f\x6b\165\160" => false];
        goto qceciyagaeieoous;
        mkkyuwckaeosicay:
        if (!$ikgwqyuyckaewsow) {
            goto ekucagwgcssmgqiu;
        }
        goto qoeqoyciommaewgo;
        oggaskekyaokouua:
        $this->ecwgiiuacoaokqkw();
        goto ygqymamcoygaeaio;
        qgiesqckowcksacg:
        self::iuaucuookgoqiiio($ikgwqyuyckaewsow, $uiewakwqscemywuo);
        goto aokmwkymqcqmyiym;
        qceciyagaeieoous:
        if (!$this->equiyaoamqmaeckc()) {
            goto egceiosgoikqmksy;
        }
        goto gyeemskiioowowag;
        gyucwgwoiumceyks:
        egceiosgoikqmksy:
        goto qgiesqckowcksacg;
        gyeemskiioowowag:
        $uiewakwqscemywuo["\164\141\142\x73"] = $this->equiyaoamqmaeckc();
        goto gyucwgwoiumceyks;
        aigumokaoqemqcyc:
    }
}
