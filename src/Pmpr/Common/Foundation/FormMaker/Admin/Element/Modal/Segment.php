<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        qesmouyqgeigoyay:
        $this->name = strtolower(self::ugwmakayykcmcmqa());
        goto ysuwseamckigmoge;
        cawcqogqmaaiaeim:
        parent::__construct();
        goto ckiesggkeyocyoia;
        imksqaayamqiwwuw:
        if ($this->aakmagwggmkoiiyu()) {
            goto cgmociyqmykaqmya;
        }
        goto qesmouyqgeigoyay;
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
            iiauuwmeoiiqeigi:
            huuswamyiwgiymou:
            goto wgguesgmyqgyescc;
            yawsiksqqgmeeiws:
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            goto iiauuwmeoiiqeigi;
            aqocckgoumwuoyco:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto huuswamyiwgiymou;
            }
            goto yawsiksqqgmeeiws;
            wgguesgmyqgyescc:
            squwouwckwiwquyu:
            goto sockicoiuuuygkyo;
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
        aysoywgeacaeuyao:
        return $this;
        goto oeyoocigmyyssieq;
        qomimwecwqaeyqwu:
        $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\x6c\x61\163\163", "\x62\165\x74\x74\x6f\156\40\142\165\x74\x74\157\156\x2d\154\141\x72\x67\145");
        goto cwcqmsuqqsauemuw;
        cwcqmsuqqsauemuw:
        $this->buttons[] = ["\164\x69\x74\154\145" => $meqocwsecsywiiqs, "\x61\x74\x74\x72\163" => $wwgucssaecqekuek];
        goto aysoywgeacaeuyao;
        oeyoocigmyyssieq:
    }
    
    public function ugmceccgwaaaigiy() : array
    {
        goto kwwuwmyeqcqsikws;
        oggaskekyaokouua:
        return $ikgwqyuyckaewsow;
        goto ygqymamcoygaeaio;
        egceiosgoikqmksy:
        uggiuigwgwokwgiq:
        goto ekucagwgcssmgqiu;
        zwyeiuiuwmomyaui:
        $ikgwqyuyckaewsow = $this->fields;
        goto siuogwuegkksagas;
        ekucagwgcssmgqiu:
        uieuqmawsakguqua:
        goto oggaskekyaokouua;
        kwwuwmyeqcqsikws:
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        goto zwyeiuiuwmomyaui;
        siuogwuegkksagas:
        if (!$ywoucyskcquysiwc) {
            goto uieuqmawsakguqua;
        }
        goto sigokuuaiuwmqmuw;
        sigokuuaiuwmqmuw:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            goto oskkwqymsyucwaow;
            cmeuiweeoykyskow:
            foreach ($cciauwuwuqaywgce->ugmceccgwaaaigiy() as $uusmaiomayssaecw => $aiowsaccomcoikus) {
                goto geiamswcamageuyw;
                wwgucckkqkmogugq:
                $ikgwqyuyckaewsow[$uusmaiomayssaecw] = $aiowsaccomcoikus;
                goto kgkyaciicuyywmge;
                koagmgoqguqqksmy:
                gmuwcugusceigoky:
                goto ciwysskisqauwcug;
                awcgwaasyugkmkqy:
                $aiowsaccomcoikus->ggiaseqygioygumq("{$this->cisyiemkeykgkomc()}\137{$aiowsaccomcoikus->mwikyscisascoeea()}")->yoimakcqmoqokkcu()->usoqcyyugsuyiewc("\160\164\x2d\x33");
                goto wwgucckkqkmogugq;
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
            oskkwqymsyucwaow:
            if (!$cciauwuwuqaywgce instanceof Tab) {
                goto acmaoiqemyycsaka;
            }
            goto cmeuiweeoykyskow;
            ogukuswqqqwgaeui:
            weowiucswssseeoi:
            goto joguwmwqyuewsyiq;
            yywiqsiicysqcogw:
            sgocsssuiwqiauaq:
            goto iuqayqiqyyyiaeuk;
            joguwmwqyuewsyiq:
            acmaoiqemyycsaka:
            goto yywiqsiicysqcogw;
            iuqayqiqyyyiaeuk:
        }
        goto egceiosgoikqmksy;
        ygqymamcoygaeaio:
    }
    
    public function ygqycmmkoiuocoia() : ?string
    {
        return $this->parent;
    }
    public function render()
    {
        goto qceciyagaeieoous;
        qmykwwkysceaysea:
        mkkyuwckaeosicay:
        goto iuiymememwkaqcuk;
        iuiymememwkaqcuk:
        self::iuaucuookgoqiiio($ikgwqyuyckaewsow, $uiewakwqscemywuo);
        goto uomaegayqaycamwq;
        qceciyagaeieoous:
        $this->ecwgiiuacoaokqkw();
        goto gyeemskiioowowag;
        gyucwgwoiumceyks:
        if (!$ikgwqyuyckaewsow) {
            goto qoeqoyciommaewgo;
        }
        goto qgiesqckowcksacg;
        aigumokaoqemqcyc:
        $uiewakwqscemywuo["\x74\141\x62\163"] = $this->equiyaoamqmaeckc();
        goto qmykwwkysceaysea;
        gyeemskiioowowag:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto gyucwgwoiumceyks;
        aokmwkymqcqmyiym:
        if (!$this->equiyaoamqmaeckc()) {
            goto mkkyuwckaeosicay;
        }
        goto aigumokaoqemqcyc;
        qgiesqckowcksacg:
        $uiewakwqscemywuo = ["\151\x64" => $this->cisyiemkeykgkomc(), "\x65\x63\150\157" => true, "\150\x6f\157\153\165\160" => false];
        goto aokmwkymqcqmyiym;
        uomaegayqaycamwq:
        qoeqoyciommaewgo:
        goto kqkicmysyusskuua;
        kqkicmysyusskuua:
    }
}
