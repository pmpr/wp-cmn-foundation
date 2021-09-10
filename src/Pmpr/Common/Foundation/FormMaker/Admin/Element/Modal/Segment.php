<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        goto qesmouyqgeigoyay;
        ysuwseamckigmoge:
        $this->name = strtolower(self::ugwmakayykcmcmqa());
        goto cawcqogqmaaiaeim;
        qesmouyqgeigoyay:
        if ($this->aakmagwggmkoiiyu()) {
            goto imksqaayamqiwwuw;
        }
        goto ysuwseamckigmoge;
        cawcqogqmaaiaeim:
        imksqaayamqiwwuw:
        goto ckiesggkeyocyoia;
        ckiesggkeyocyoia:
        parent::__construct();
        goto qiiyiqwyoomsueuq;
        qiiyiqwyoomsueuq:
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
        goto wiuoyosaiuqqmiss;
        weqqwqaoyugaiaqs:
        return $this;
        goto oqecugiicgkgisyi;
        wiuoyosaiuqqmiss:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto yawsiksqqgmeeiws;
            wgguesgmyqgyescc:
            aqocckgoumwuoyco:
            goto sockicoiuuuygkyo;
            sockicoiuuuygkyo:
            huuswamyiwgiymou:
            goto komeykuoomsymayc;
            yawsiksqqgmeeiws:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto aqocckgoumwuoyco;
            }
            goto iiauuwmeoiiqeigi;
            iiauuwmeoiiqeigi:
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            goto wgguesgmyqgyescc;
            komeykuoomsymayc:
        }
        goto iqacckgckyoioccs;
        iqacckgckyoioccs:
        squwouwckwiwquyu:
        goto weqqwqaoyugaiaqs;
        oqecugiicgkgisyi:
    }
    
    public function equiyaoamqmaeckc() : array
    {
        return $this->tabs;
    }
    
    public function aucimgwswmgaocae(?Tab $cciauwuwuqaywgce = null) : self
    {
        goto gaykosyqceuygmiq;
        gaykosyqceuygmiq:
        if (!$cciauwuwuqaywgce) {
            goto usweuqkmumcwckoo;
        }
        goto gmeksiaumseqkqug;
        mmiwmgwcsgqoemws:
        return $this;
        goto qomimwecwqaeyqwu;
        eiuugowioueiceoc:
        usweuqkmumcwckoo:
        goto mmiwmgwcsgqoemws;
        gmeksiaumseqkqug:
        $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce;
        goto eiuugowioueiceoc;
        qomimwecwqaeyqwu:
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
        goto cwcqmsuqqsauemuw;
        cwcqmsuqqsauemuw:
        $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\x6c\141\163\163", "\x62\165\164\x74\157\156\40\x62\165\x74\x74\157\156\55\154\x61\162\x67\145");
        goto aysoywgeacaeuyao;
        aysoywgeacaeuyao:
        $this->buttons[] = ["\x6d\x65\161\x6f\143\x77\x73\145\143\x73\x79\x77\x69\151\161\163" => $meqocwsecsywiiqs, "\167\167\147\165\143\163\x73\x61\x65\143\x71\145\x6b\165\x65\x6b" => $wwgucssaecqekuek];
        goto oeyoocigmyyssieq;
        oeyoocigmyyssieq:
        return $this;
        goto uggiuigwgwokwgiq;
        uggiuigwgwokwgiq:
    }
    
    public function ugmceccgwaaaigiy() : array
    {
        goto zwyeiuiuwmomyaui;
        egceiosgoikqmksy:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            goto cmeuiweeoykyskow;
            iuqayqiqyyyiaeuk:
            weowiucswssseeoi:
            goto uieuqmawsakguqua;
            joguwmwqyuewsyiq:
            gmuwcugusceigoky:
            goto yywiqsiicysqcogw;
            yywiqsiicysqcogw:
            oskkwqymsyucwaow:
            goto iuqayqiqyyyiaeuk;
            ogukuswqqqwgaeui:
            foreach ($cciauwuwuqaywgce->ugmceccgwaaaigiy() as $uusmaiomayssaecw => $aiowsaccomcoikus) {
                goto awcgwaasyugkmkqy;
                ciwysskisqauwcug:
                aaimmucyosywoass:
                goto acmaoiqemyycsaka;
                awcgwaasyugkmkqy:
                if (!$aiowsaccomcoikus instanceof Field) {
                    goto geiamswcamageuyw;
                }
                goto wwgucckkqkmogugq;
                kgkyaciicuyywmge:
                $ikgwqyuyckaewsow[$uusmaiomayssaecw] = $aiowsaccomcoikus;
                goto koagmgoqguqqksmy;
                wwgucckkqkmogugq:
                $aiowsaccomcoikus->ggiaseqygioygumq("{$this->cisyiemkeykgkomc()}\137{$aiowsaccomcoikus->mwikyscisascoeea()}")->yoimakcqmoqokkcu()->usoqcyyugsuyiewc("\160\164\x2d\x33");
                goto kgkyaciicuyywmge;
                koagmgoqguqqksmy:
                geiamswcamageuyw:
                goto ciwysskisqauwcug;
                acmaoiqemyycsaka:
            }
            goto joguwmwqyuewsyiq;
            cmeuiweeoykyskow:
            if (!$cciauwuwuqaywgce instanceof Tab) {
                goto oskkwqymsyucwaow;
            }
            goto ogukuswqqqwgaeui;
            uieuqmawsakguqua:
        }
        goto ekucagwgcssmgqiu;
        oggaskekyaokouua:
        kwwuwmyeqcqsikws:
        goto ygqymamcoygaeaio;
        siuogwuegkksagas:
        $ikgwqyuyckaewsow = $this->fields;
        goto sigokuuaiuwmqmuw;
        sigokuuaiuwmqmuw:
        if (!$ywoucyskcquysiwc) {
            goto kwwuwmyeqcqsikws;
        }
        goto egceiosgoikqmksy;
        zwyeiuiuwmomyaui:
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        goto siuogwuegkksagas;
        ekucagwgcssmgqiu:
        sgocsssuiwqiauaq:
        goto oggaskekyaokouua;
        ygqymamcoygaeaio:
        return $ikgwqyuyckaewsow;
        goto mkkyuwckaeosicay;
        mkkyuwckaeosicay:
    }
    
    public function ygqycmmkoiuocoia() : ?string
    {
        return $this->parent;
    }
    public function render()
    {
        goto gyeemskiioowowag;
        gyucwgwoiumceyks:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto qgiesqckowcksacg;
        qgiesqckowcksacg:
        if (!$ikgwqyuyckaewsow) {
            goto qceciyagaeieoous;
        }
        goto aokmwkymqcqmyiym;
        gyeemskiioowowag:
        $this->ecwgiiuacoaokqkw();
        goto gyucwgwoiumceyks;
        kqkicmysyusskuua:
        qceciyagaeieoous:
        goto yssakamqiieugqyk;
        qmykwwkysceaysea:
        $uiewakwqscemywuo["\x74\x61\x62\163"] = $this->equiyaoamqmaeckc();
        goto iuiymememwkaqcuk;
        aigumokaoqemqcyc:
        if (!$this->equiyaoamqmaeckc()) {
            goto qoeqoyciommaewgo;
        }
        goto qmykwwkysceaysea;
        iuiymememwkaqcuk:
        qoeqoyciommaewgo:
        goto uomaegayqaycamwq;
        aokmwkymqcqmyiym:
        $uiewakwqscemywuo = ["\x69\144" => $this->cisyiemkeykgkomc(), "\x65\x63\150\x6f" => true, "\150\x6f\x6f\153\x75\160" => false];
        goto aigumokaoqemqcyc;
        uomaegayqaycamwq:
        self::iuaucuookgoqiiio($ikgwqyuyckaewsow, $uiewakwqscemywuo);
        goto kqkicmysyusskuua;
        yssakamqiieugqyk:
    }
}
