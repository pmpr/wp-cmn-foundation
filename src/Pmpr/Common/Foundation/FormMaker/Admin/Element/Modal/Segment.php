<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        goto imksqaayamqiwwuw;
        ysuwseamckigmoge:
        cgmociyqmykaqmya:
        goto cawcqogqmaaiaeim;
        imksqaayamqiwwuw:
        if ($this->aakmagwggmkoiiyu()) {
            goto cgmociyqmykaqmya;
        }
        goto qesmouyqgeigoyay;
        cawcqogqmaaiaeim:
        parent::__construct();
        goto ckiesggkeyocyoia;
        qesmouyqgeigoyay:
        $this->name = strtolower(self::ugwmakayykcmcmqa());
        goto ysuwseamckigmoge;
        ckiesggkeyocyoia:
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
        goto komeykuoomsymayc;
        iqacckgckyoioccs:
        return $this;
        goto weqqwqaoyugaiaqs;
        komeykuoomsymayc:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto aqocckgoumwuoyco;
            wgguesgmyqgyescc:
            squwouwckwiwquyu:
            goto sockicoiuuuygkyo;
            iiauuwmeoiiqeigi:
            huuswamyiwgiymou:
            goto wgguesgmyqgyescc;
            aqocckgoumwuoyco:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto huuswamyiwgiymou;
            }
            goto yawsiksqqgmeeiws;
            yawsiksqqgmeeiws:
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            goto iiauuwmeoiiqeigi;
            sockicoiuuuygkyo:
        }
        goto wiuoyosaiuqqmiss;
        wiuoyosaiuqqmiss:
        qiiyiqwyoomsueuq:
        goto iqacckgckyoioccs;
        weqqwqaoyugaiaqs:
    }
    
    public function equiyaoamqmaeckc() : array
    {
        return $this->tabs;
    }
    
    public function aucimgwswmgaocae(?Tab $cciauwuwuqaywgce = null) : self
    {
        goto usweuqkmumcwckoo;
        eiuugowioueiceoc:
        return $this;
        goto mmiwmgwcsgqoemws;
        usweuqkmumcwckoo:
        if (!$cciauwuwuqaywgce) {
            goto oqecugiicgkgisyi;
        }
        goto gaykosyqceuygmiq;
        gmeksiaumseqkqug:
        oqecugiicgkgisyi:
        goto eiuugowioueiceoc;
        gaykosyqceuygmiq:
        $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce;
        goto gmeksiaumseqkqug;
        mmiwmgwcsgqoemws:
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
        goto qomimwecwqaeyqwu;
        aysoywgeacaeuyao:
        return $this;
        goto oeyoocigmyyssieq;
        qomimwecwqaeyqwu:
        $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\x6c\141\163\x73", "\x62\165\164\164\x6f\156\x20\142\x75\164\164\x6f\156\x2d\154\141\x72\x67\145");
        goto cwcqmsuqqsauemuw;
        cwcqmsuqqsauemuw:
        $this->buttons[] = ["\155\x65\x71\157\x63\x77\163\x65\143\x73\x79\167\x69\x69\161\x73" => $meqocwsecsywiiqs, "\x77\167\x67\x75\x63\x73\x73\x61\x65\x63\x71\x65\x6b\x75\x65\x6b" => $wwgucssaecqekuek];
        goto aysoywgeacaeuyao;
        oeyoocigmyyssieq:
    }
    
    public function ugmceccgwaaaigiy() : array
    {
        goto kwwuwmyeqcqsikws;
        zwyeiuiuwmomyaui:
        $ikgwqyuyckaewsow = $this->fields;
        goto siuogwuegkksagas;
        siuogwuegkksagas:
        if (!$ywoucyskcquysiwc) {
            goto uieuqmawsakguqua;
        }
        goto sigokuuaiuwmqmuw;
        ekucagwgcssmgqiu:
        uieuqmawsakguqua:
        goto oggaskekyaokouua;
        kwwuwmyeqcqsikws:
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        goto zwyeiuiuwmomyaui;
        egceiosgoikqmksy:
        uggiuigwgwokwgiq:
        goto ekucagwgcssmgqiu;
        sigokuuaiuwmqmuw:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            goto oskkwqymsyucwaow;
            cmeuiweeoykyskow:
            foreach ($cciauwuwuqaywgce->ugmceccgwaaaigiy() as $uusmaiomayssaecw => $aiowsaccomcoikus) {
                goto geiamswcamageuyw;
                koagmgoqguqqksmy:
                gmuwcugusceigoky:
                goto ciwysskisqauwcug;
                wwgucckkqkmogugq:
                $ikgwqyuyckaewsow[$uusmaiomayssaecw] = $aiowsaccomcoikus;
                goto kgkyaciicuyywmge;
                geiamswcamageuyw:
                if (!$aiowsaccomcoikus instanceof Field) {
                    goto aaimmucyosywoass;
                }
                goto awcgwaasyugkmkqy;
                kgkyaciicuyywmge:
                aaimmucyosywoass:
                goto koagmgoqguqqksmy;
                awcgwaasyugkmkqy:
                $aiowsaccomcoikus->ggiaseqygioygumq("{$this->cisyiemkeykgkomc()}\137{$aiowsaccomcoikus->mwikyscisascoeea()}")->yoimakcqmoqokkcu()->usoqcyyugsuyiewc("\x70\x74\55\63");
                goto wwgucckkqkmogugq;
                ciwysskisqauwcug:
            }
            goto ogukuswqqqwgaeui;
            yywiqsiicysqcogw:
            sgocsssuiwqiauaq:
            goto iuqayqiqyyyiaeuk;
            oskkwqymsyucwaow:
            if (!$cciauwuwuqaywgce instanceof Tab) {
                goto acmaoiqemyycsaka;
            }
            goto cmeuiweeoykyskow;
            ogukuswqqqwgaeui:
            weowiucswssseeoi:
            goto joguwmwqyuewsyiq;
            joguwmwqyuewsyiq:
            acmaoiqemyycsaka:
            goto yywiqsiicysqcogw;
            iuqayqiqyyyiaeuk:
        }
        goto egceiosgoikqmksy;
        oggaskekyaokouua:
        return $ikgwqyuyckaewsow;
        goto ygqymamcoygaeaio;
        ygqymamcoygaeaio:
    }
    
    public function ygqycmmkoiuocoia() : ?string
    {
        return $this->parent;
    }
    public function render()
    {
        goto qceciyagaeieoous;
        aokmwkymqcqmyiym:
        if (!$this->equiyaoamqmaeckc()) {
            goto mkkyuwckaeosicay;
        }
        goto aigumokaoqemqcyc;
        qgiesqckowcksacg:
        $uiewakwqscemywuo = ["\151\144" => $this->cisyiemkeykgkomc(), "\145\143\150\157" => true, "\150\157\x6f\x6b\165\x70" => false];
        goto aokmwkymqcqmyiym;
        iuiymememwkaqcuk:
        self::iuaucuookgoqiiio($ikgwqyuyckaewsow, $uiewakwqscemywuo);
        goto uomaegayqaycamwq;
        gyeemskiioowowag:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto gyucwgwoiumceyks;
        uomaegayqaycamwq:
        qoeqoyciommaewgo:
        goto kqkicmysyusskuua;
        aigumokaoqemqcyc:
        $uiewakwqscemywuo["\x74\x61\x62\163"] = $this->equiyaoamqmaeckc();
        goto qmykwwkysceaysea;
        gyucwgwoiumceyks:
        if (!$ikgwqyuyckaewsow) {
            goto qoeqoyciommaewgo;
        }
        goto qgiesqckowcksacg;
        qceciyagaeieoous:
        $this->ecwgiiuacoaokqkw();
        goto gyeemskiioowowag;
        qmykwwkysceaysea:
        mkkyuwckaeosicay:
        goto iuiymememwkaqcuk;
        kqkicmysyusskuua:
    }
}
