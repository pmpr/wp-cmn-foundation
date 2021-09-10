<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        cgmociyqmykaqmya:
        if ($this->aakmagwggmkoiiyu()) {
            goto wweyewgicswqweyq;
        }
        goto imksqaayamqiwwuw;
        imksqaayamqiwwuw:
        $this->name = strtolower(self::ugwmakayykcmcmqa());
        goto qesmouyqgeigoyay;
        ysuwseamckigmoge:
        parent::__construct();
        goto cawcqogqmaaiaeim;
        qesmouyqgeigoyay:
        wweyewgicswqweyq:
        goto ysuwseamckigmoge;
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
        wiuoyosaiuqqmiss:
        return $this;
        goto iqacckgckyoioccs;
        sockicoiuuuygkyo:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto huuswamyiwgiymou;
            iiauuwmeoiiqeigi:
            qiiyiqwyoomsueuq:
            goto wgguesgmyqgyescc;
            yawsiksqqgmeeiws:
            squwouwckwiwquyu:
            goto iiauuwmeoiiqeigi;
            aqocckgoumwuoyco:
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            goto yawsiksqqgmeeiws;
            huuswamyiwgiymou:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto squwouwckwiwquyu;
            }
            goto aqocckgoumwuoyco;
            wgguesgmyqgyescc:
        }
        goto komeykuoomsymayc;
        komeykuoomsymayc:
        ckiesggkeyocyoia:
        goto wiuoyosaiuqqmiss;
        iqacckgckyoioccs:
    }
    
    public function equiyaoamqmaeckc() : array
    {
        return $this->tabs;
    }
    
    public function aucimgwswmgaocae(?Tab $cciauwuwuqaywgce = null) : self
    {
        goto oqecugiicgkgisyi;
        usweuqkmumcwckoo:
        $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce;
        goto gaykosyqceuygmiq;
        gaykosyqceuygmiq:
        weqqwqaoyugaiaqs:
        goto gmeksiaumseqkqug;
        oqecugiicgkgisyi:
        if (!$cciauwuwuqaywgce) {
            goto weqqwqaoyugaiaqs;
        }
        goto usweuqkmumcwckoo;
        gmeksiaumseqkqug:
        return $this;
        goto eiuugowioueiceoc;
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
        qomimwecwqaeyqwu:
        $this->buttons[] = ["\164\151\x74\154\x65" => $meqocwsecsywiiqs, "\x61\x74\x74\162\163" => $wwgucssaecqekuek];
        goto cwcqmsuqqsauemuw;
        mmiwmgwcsgqoemws:
        $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\x61\x73\x73", "\x62\165\164\x74\x6f\x6e\x20\x62\165\x74\164\157\156\x2d\154\x61\162\x67\145");
        goto qomimwecwqaeyqwu;
        cwcqmsuqqsauemuw:
        return $this;
        goto aysoywgeacaeuyao;
        aysoywgeacaeuyao:
    }
    
    public function ugmceccgwaaaigiy() : array
    {
        goto uieuqmawsakguqua;
        sigokuuaiuwmqmuw:
        oeyoocigmyyssieq:
        goto egceiosgoikqmksy;
        ekucagwgcssmgqiu:
        return $ikgwqyuyckaewsow;
        goto oggaskekyaokouua;
        siuogwuegkksagas:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            goto acmaoiqemyycsaka;
            cmeuiweeoykyskow:
            sgocsssuiwqiauaq:
            goto ogukuswqqqwgaeui;
            ogukuswqqqwgaeui:
            ciwysskisqauwcug:
            goto joguwmwqyuewsyiq;
            joguwmwqyuewsyiq:
            uggiuigwgwokwgiq:
            goto yywiqsiicysqcogw;
            acmaoiqemyycsaka:
            if (!$cciauwuwuqaywgce instanceof Tab) {
                goto ciwysskisqauwcug;
            }
            goto oskkwqymsyucwaow;
            oskkwqymsyucwaow:
            foreach ($cciauwuwuqaywgce->ugmceccgwaaaigiy() as $uusmaiomayssaecw => $aiowsaccomcoikus) {
                goto aaimmucyosywoass;
                aaimmucyosywoass:
                if (!$aiowsaccomcoikus instanceof Field) {
                    goto gmuwcugusceigoky;
                }
                goto geiamswcamageuyw;
                geiamswcamageuyw:
                $aiowsaccomcoikus->ggiaseqygioygumq("{$this->cisyiemkeykgkomc()}\x5f{$aiowsaccomcoikus->mwikyscisascoeea()}")->yoimakcqmoqokkcu()->usoqcyyugsuyiewc("\x70\x74\x2d\x33");
                goto awcgwaasyugkmkqy;
                kgkyaciicuyywmge:
                weowiucswssseeoi:
                goto koagmgoqguqqksmy;
                awcgwaasyugkmkqy:
                $ikgwqyuyckaewsow[$uusmaiomayssaecw] = $aiowsaccomcoikus;
                goto wwgucckkqkmogugq;
                wwgucckkqkmogugq:
                gmuwcugusceigoky:
                goto kgkyaciicuyywmge;
                koagmgoqguqqksmy:
            }
            goto cmeuiweeoykyskow;
            yywiqsiicysqcogw:
        }
        goto sigokuuaiuwmqmuw;
        egceiosgoikqmksy:
        iuqayqiqyyyiaeuk:
        goto ekucagwgcssmgqiu;
        uieuqmawsakguqua:
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        goto kwwuwmyeqcqsikws;
        kwwuwmyeqcqsikws:
        $ikgwqyuyckaewsow = $this->fields;
        goto zwyeiuiuwmomyaui;
        zwyeiuiuwmomyaui:
        if (!$ywoucyskcquysiwc) {
            goto iuqayqiqyyyiaeuk;
        }
        goto siuogwuegkksagas;
        oggaskekyaokouua:
    }
    
    public function ygqycmmkoiuocoia() : ?string
    {
        return $this->parent;
    }
    public function render()
    {
        goto qoeqoyciommaewgo;
        qoeqoyciommaewgo:
        $this->ecwgiiuacoaokqkw();
        goto qceciyagaeieoous;
        qmykwwkysceaysea:
        self::iuaucuookgoqiiio($ikgwqyuyckaewsow, $uiewakwqscemywuo);
        goto iuiymememwkaqcuk;
        aigumokaoqemqcyc:
        ygqymamcoygaeaio:
        goto qmykwwkysceaysea;
        gyeemskiioowowag:
        if (!$ikgwqyuyckaewsow) {
            goto mkkyuwckaeosicay;
        }
        goto gyucwgwoiumceyks;
        iuiymememwkaqcuk:
        mkkyuwckaeosicay:
        goto uomaegayqaycamwq;
        aokmwkymqcqmyiym:
        $uiewakwqscemywuo["\x74\141\x62\x73"] = $this->equiyaoamqmaeckc();
        goto aigumokaoqemqcyc;
        gyucwgwoiumceyks:
        $uiewakwqscemywuo = ["\151\144" => $this->cisyiemkeykgkomc(), "\x65\x63\x68\157" => true, "\150\157\x6f\153\165\160" => false];
        goto qgiesqckowcksacg;
        qceciyagaeieoous:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto gyeemskiioowowag;
        qgiesqckowcksacg:
        if (!$this->equiyaoamqmaeckc()) {
            goto ygqymamcoygaeaio;
        }
        goto aokmwkymqcqmyiym;
        uomaegayqaycamwq:
    }
}
