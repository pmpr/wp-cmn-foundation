<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        qesmouyqgeigoyay:
        $this->name = strtolower(self::ugwmakayykcmcmqa());
        goto ysuwseamckigmoge;
        imksqaayamqiwwuw:
        if ($this->aakmagwggmkoiiyu()) {
            goto cgmociyqmykaqmya;
        }
        goto qesmouyqgeigoyay;
        ysuwseamckigmoge:
        cgmociyqmykaqmya:
        goto cawcqogqmaaiaeim;
        cawcqogqmaaiaeim:
        parent::__construct();
        goto ckiesggkeyocyoia;
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
        komeykuoomsymayc:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto aqocckgoumwuoyco;
            yawsiksqqgmeeiws:
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            goto iiauuwmeoiiqeigi;
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
            sockicoiuuuygkyo:
        }
        goto wiuoyosaiuqqmiss;
        wiuoyosaiuqqmiss:
        qiiyiqwyoomsueuq:
        goto iqacckgckyoioccs;
        iqacckgckyoioccs:
        return $this;
        goto weqqwqaoyugaiaqs;
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
        gaykosyqceuygmiq:
        $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce;
        goto gmeksiaumseqkqug;
        usweuqkmumcwckoo:
        if (!$cciauwuwuqaywgce) {
            goto oqecugiicgkgisyi;
        }
        goto gaykosyqceuygmiq;
        gmeksiaumseqkqug:
        oqecugiicgkgisyi:
        goto eiuugowioueiceoc;
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
        qomimwecwqaeyqwu:
        $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\141\163\x73", "\142\x75\164\x74\x6f\x6e\40\x62\x75\164\164\157\x6e\55\154\x61\x72\x67\145");
        goto cwcqmsuqqsauemuw;
        cwcqmsuqqsauemuw:
        $this->buttons[] = ["\x74\151\x74\154\x65" => $meqocwsecsywiiqs, "\141\x74\x74\162\163" => $wwgucssaecqekuek];
        goto aysoywgeacaeuyao;
        aysoywgeacaeuyao:
        return $this;
        goto oeyoocigmyyssieq;
        oeyoocigmyyssieq:
    }
    
    public function ugmceccgwaaaigiy() : array
    {
        goto kwwuwmyeqcqsikws;
        kwwuwmyeqcqsikws:
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        goto zwyeiuiuwmomyaui;
        siuogwuegkksagas:
        if (!$ywoucyskcquysiwc) {
            goto uieuqmawsakguqua;
        }
        goto sigokuuaiuwmqmuw;
        egceiosgoikqmksy:
        uggiuigwgwokwgiq:
        goto ekucagwgcssmgqiu;
        sigokuuaiuwmqmuw:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            goto oskkwqymsyucwaow;
            joguwmwqyuewsyiq:
            acmaoiqemyycsaka:
            goto yywiqsiicysqcogw;
            yywiqsiicysqcogw:
            sgocsssuiwqiauaq:
            goto iuqayqiqyyyiaeuk;
            ogukuswqqqwgaeui:
            weowiucswssseeoi:
            goto joguwmwqyuewsyiq;
            oskkwqymsyucwaow:
            if (!$cciauwuwuqaywgce instanceof Tab) {
                goto acmaoiqemyycsaka;
            }
            goto cmeuiweeoykyskow;
            cmeuiweeoykyskow:
            foreach ($cciauwuwuqaywgce->ugmceccgwaaaigiy() as $uusmaiomayssaecw => $aiowsaccomcoikus) {
                goto geiamswcamageuyw;
                awcgwaasyugkmkqy:
                $aiowsaccomcoikus->ggiaseqygioygumq("{$this->cisyiemkeykgkomc()}\x5f{$aiowsaccomcoikus->mwikyscisascoeea()}")->yoimakcqmoqokkcu()->usoqcyyugsuyiewc("\160\164\55\63");
                goto wwgucckkqkmogugq;
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
                ciwysskisqauwcug:
            }
            goto ogukuswqqqwgaeui;
            iuqayqiqyyyiaeuk:
        }
        goto egceiosgoikqmksy;
        oggaskekyaokouua:
        return $ikgwqyuyckaewsow;
        goto ygqymamcoygaeaio;
        ekucagwgcssmgqiu:
        uieuqmawsakguqua:
        goto oggaskekyaokouua;
        zwyeiuiuwmomyaui:
        $ikgwqyuyckaewsow = $this->fields;
        goto siuogwuegkksagas;
        ygqymamcoygaeaio:
    }
    
    public function ygqycmmkoiuocoia() : ?string
    {
        return $this->parent;
    }
    public function render()
    {
        goto qceciyagaeieoous;
        iuiymememwkaqcuk:
        self::iuaucuookgoqiiio($ikgwqyuyckaewsow, $uiewakwqscemywuo);
        goto uomaegayqaycamwq;
        aigumokaoqemqcyc:
        $uiewakwqscemywuo["\164\x61\x62\x73"] = $this->equiyaoamqmaeckc();
        goto qmykwwkysceaysea;
        uomaegayqaycamwq:
        qoeqoyciommaewgo:
        goto kqkicmysyusskuua;
        qgiesqckowcksacg:
        $uiewakwqscemywuo = ["\x69\x64" => $this->cisyiemkeykgkomc(), "\145\143\150\157" => true, "\150\157\x6f\153\165\160" => false];
        goto aokmwkymqcqmyiym;
        qceciyagaeieoous:
        $this->ecwgiiuacoaokqkw();
        goto gyeemskiioowowag;
        qmykwwkysceaysea:
        mkkyuwckaeosicay:
        goto iuiymememwkaqcuk;
        gyucwgwoiumceyks:
        if (!$ikgwqyuyckaewsow) {
            goto qoeqoyciommaewgo;
        }
        goto qgiesqckowcksacg;
        gyeemskiioowowag:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto gyucwgwoiumceyks;
        aokmwkymqcqmyiym:
        if (!$this->equiyaoamqmaeckc()) {
            goto mkkyuwckaeosicay;
        }
        goto aigumokaoqemqcyc;
        kqkicmysyusskuua:
    }
}
