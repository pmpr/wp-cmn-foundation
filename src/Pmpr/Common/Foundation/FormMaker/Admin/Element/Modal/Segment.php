<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        goto cgmociyqmykaqmya;
        qesmouyqgeigoyay:
        wweyewgicswqweyq:
        goto ysuwseamckigmoge;
        ysuwseamckigmoge:
        parent::__construct();
        goto cawcqogqmaaiaeim;
        imksqaayamqiwwuw:
        $this->name = strtolower(self::ugwmakayykcmcmqa());
        goto qesmouyqgeigoyay;
        cgmociyqmykaqmya:
        if ($this->aakmagwggmkoiiyu()) {
            goto wweyewgicswqweyq;
        }
        goto imksqaayamqiwwuw;
        cawcqogqmaaiaeim:
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
        goto sockicoiuuuygkyo;
        komeykuoomsymayc:
        ckiesggkeyocyoia:
        goto wiuoyosaiuqqmiss;
        wiuoyosaiuqqmiss:
        return $this;
        goto iqacckgckyoioccs;
        sockicoiuuuygkyo:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto huuswamyiwgiymou;
            iiauuwmeoiiqeigi:
            qiiyiqwyoomsueuq:
            goto wgguesgmyqgyescc;
            huuswamyiwgiymou:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto squwouwckwiwquyu;
            }
            goto aqocckgoumwuoyco;
            aqocckgoumwuoyco:
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            goto yawsiksqqgmeeiws;
            yawsiksqqgmeeiws:
            squwouwckwiwquyu:
            goto iiauuwmeoiiqeigi;
            wgguesgmyqgyescc:
        }
        goto komeykuoomsymayc;
        iqacckgckyoioccs:
    }
    
    public function equiyaoamqmaeckc() : array
    {
        return $this->tabs;
    }
    
    public function aucimgwswmgaocae(?Tab $cciauwuwuqaywgce = null) : self
    {
        goto oqecugiicgkgisyi;
        oqecugiicgkgisyi:
        if (!$cciauwuwuqaywgce) {
            goto weqqwqaoyugaiaqs;
        }
        goto usweuqkmumcwckoo;
        usweuqkmumcwckoo:
        $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce;
        goto gaykosyqceuygmiq;
        gmeksiaumseqkqug:
        return $this;
        goto eiuugowioueiceoc;
        gaykosyqceuygmiq:
        weqqwqaoyugaiaqs:
        goto gmeksiaumseqkqug;
        eiuugowioueiceoc:
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
        goto mmiwmgwcsgqoemws;
        cwcqmsuqqsauemuw:
        return $this;
        goto aysoywgeacaeuyao;
        qomimwecwqaeyqwu:
        $this->buttons[] = ["\164\151\164\154\145" => $meqocwsecsywiiqs, "\141\164\x74\x72\163" => $wwgucssaecqekuek];
        goto cwcqmsuqqsauemuw;
        mmiwmgwcsgqoemws:
        $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\x61\x73\x73", "\142\x75\x74\164\x6f\x6e\x20\x62\x75\164\x74\157\x6e\x2d\154\141\x72\x67\x65");
        goto qomimwecwqaeyqwu;
        aysoywgeacaeuyao:
    }
    
    public function ugmceccgwaaaigiy() : array
    {
        goto uieuqmawsakguqua;
        kwwuwmyeqcqsikws:
        $ikgwqyuyckaewsow = $this->fields;
        goto zwyeiuiuwmomyaui;
        sigokuuaiuwmqmuw:
        oeyoocigmyyssieq:
        goto egceiosgoikqmksy;
        egceiosgoikqmksy:
        iuqayqiqyyyiaeuk:
        goto ekucagwgcssmgqiu;
        uieuqmawsakguqua:
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        goto kwwuwmyeqcqsikws;
        ekucagwgcssmgqiu:
        return $ikgwqyuyckaewsow;
        goto oggaskekyaokouua;
        zwyeiuiuwmomyaui:
        if (!$ywoucyskcquysiwc) {
            goto iuqayqiqyyyiaeuk;
        }
        goto siuogwuegkksagas;
        siuogwuegkksagas:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            goto acmaoiqemyycsaka;
            ogukuswqqqwgaeui:
            ciwysskisqauwcug:
            goto joguwmwqyuewsyiq;
            acmaoiqemyycsaka:
            if (!$cciauwuwuqaywgce instanceof Tab) {
                goto ciwysskisqauwcug;
            }
            goto oskkwqymsyucwaow;
            cmeuiweeoykyskow:
            sgocsssuiwqiauaq:
            goto ogukuswqqqwgaeui;
            joguwmwqyuewsyiq:
            uggiuigwgwokwgiq:
            goto yywiqsiicysqcogw;
            oskkwqymsyucwaow:
            foreach ($cciauwuwuqaywgce->ugmceccgwaaaigiy() as $uusmaiomayssaecw => $aiowsaccomcoikus) {
                goto aaimmucyosywoass;
                wwgucckkqkmogugq:
                gmuwcugusceigoky:
                goto kgkyaciicuyywmge;
                geiamswcamageuyw:
                $aiowsaccomcoikus->ggiaseqygioygumq("{$this->cisyiemkeykgkomc()}\137{$aiowsaccomcoikus->mwikyscisascoeea()}")->yoimakcqmoqokkcu()->usoqcyyugsuyiewc("\160\x74\x2d\63");
                goto awcgwaasyugkmkqy;
                kgkyaciicuyywmge:
                weowiucswssseeoi:
                goto koagmgoqguqqksmy;
                aaimmucyosywoass:
                if (!$aiowsaccomcoikus instanceof Field) {
                    goto gmuwcugusceigoky;
                }
                goto geiamswcamageuyw;
                awcgwaasyugkmkqy:
                $ikgwqyuyckaewsow[$uusmaiomayssaecw] = $aiowsaccomcoikus;
                goto wwgucckkqkmogugq;
                koagmgoqguqqksmy:
            }
            goto cmeuiweeoykyskow;
            yywiqsiicysqcogw:
        }
        goto sigokuuaiuwmqmuw;
        oggaskekyaokouua:
    }
    
    public function ygqycmmkoiuocoia() : ?string
    {
        return $this->parent;
    }
    public function render()
    {
        goto qoeqoyciommaewgo;
        aigumokaoqemqcyc:
        ygqymamcoygaeaio:
        goto qmykwwkysceaysea;
        aokmwkymqcqmyiym:
        $uiewakwqscemywuo["\164\x61\x62\x73"] = $this->equiyaoamqmaeckc();
        goto aigumokaoqemqcyc;
        qgiesqckowcksacg:
        if (!$this->equiyaoamqmaeckc()) {
            goto ygqymamcoygaeaio;
        }
        goto aokmwkymqcqmyiym;
        gyeemskiioowowag:
        if (!$ikgwqyuyckaewsow) {
            goto mkkyuwckaeosicay;
        }
        goto gyucwgwoiumceyks;
        qmykwwkysceaysea:
        self::iuaucuookgoqiiio($ikgwqyuyckaewsow, $uiewakwqscemywuo);
        goto iuiymememwkaqcuk;
        gyucwgwoiumceyks:
        $uiewakwqscemywuo = ["\x69\x64" => $this->cisyiemkeykgkomc(), "\145\143\150\157" => true, "\x68\x6f\157\x6b\x75\160" => false];
        goto qgiesqckowcksacg;
        iuiymememwkaqcuk:
        mkkyuwckaeosicay:
        goto uomaegayqaycamwq;
        qoeqoyciommaewgo:
        $this->ecwgiiuacoaokqkw();
        goto qceciyagaeieoous;
        qceciyagaeieoous:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto gyeemskiioowowag;
        uomaegayqaycamwq:
    }
}
