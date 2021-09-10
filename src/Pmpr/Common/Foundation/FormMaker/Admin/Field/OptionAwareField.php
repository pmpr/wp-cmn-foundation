<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;

use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class OptionAwareField extends Field
{
    
    protected array $options = [];
    
    protected array $extendable = [];
    
    public function __construct(?string $sqeykgyoooqysmca, ?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null, array $qiouiwasaauyaaue = [])
    {
        parent::__construct($sqeykgyoooqysmca, $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        $this->options = $qiouiwasaauyaaue;
    }
    
    public function gkwkqmwweiawigae() : ?array
    {
        return $this->options;
    }
    
    public function eksgyasugmuassok(array $qiouiwasaauyaaue) : self
    {
        $this->options = $qiouiwasaauyaaue;
        return $this;
    }
    
    public function kesomeowemmyygey($uusmaiomayssaecw, $omkysikckkcieckq) : self
    {
        $this->options[$uusmaiomayssaecw] = $omkysikckkcieckq;
        return $this;
    }
    
    public function acauweqyyugwisqc(?array $qiouiwasaauyaaue = []) : self
    {
        goto eguawwomyaaeausm;
        eguawwomyaaeausm:
        foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) {
            $this->kesomeowemmyygey($uusmaiomayssaecw, $omkysikckkcieckq);
            quaceaqiyccsewwm:
        }
        goto qeqiyayukmgicguk;
        mkuwaomcwgqaiosi:
        return $this;
        goto ggamwkssakcsyygo;
        qeqiyayukmgicguk:
        scysisyaqygmiege:
        goto mkuwaomcwgqaiosi;
        ggamwkssakcsyygo:
    }
    
    public function asicmoumkgkcmiqq() : array
    {
        return $this->extendable;
    }
    
    public function wmwikuasuocmqycw($ywmkwiwkosakssii = []) : self
    {
        goto oocumekqmguuwssy;
        oocumekqmguuwssy:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [
            "\166\141\x72\151\141\164\x69\157\156\163" => [],
            
            "\146\151\145\154\144\163" => [],
        ]);
        goto wgqeayikcayiiqww;
        sukamomeeqoewoki:
        ioosiucucgmakmce:
        goto emcwkykcwsiugweq;
        ugqwwswmcmgiwoui:
        $ikgwqyuyckaewsow = [];
        goto gugsmkokowuukqsy;
        gqiqiogyyiyqmeqs:
        if (is_array($ikgwqyuyckaewsow)) {
            goto ioosiucucgmakmce;
        }
        goto uogcysggcyoisegq;
        ouggkyamcckwgueg:
        $this->extendable = $ywmkwiwkosakssii;
        goto ywyceqiucseqcakg;
        ywyceqiucseqcakg:
        return $this;
        goto kwaaskgiymsiyoue;
        qkoqqyysqyaksosq:
        eocskckeeaccikom:
        goto ugqwwswmcmgiwoui;
        qgsascuseaqueomc:
        $ikgwqyuyckaewsow[] = $this->mwikyscisascoeea();
        goto iqwgyiwuwioggcco;
        wgqeayikcayiiqww:
        $ikgwqyuyckaewsow = ManipulateArray::get($ywmkwiwkosakssii, "\x66\x69\x65\x6c\144\163");
        goto wguwwigkqeqkkwii;
        gugsmkokowuukqsy:
        qceesmmqyuwkcyeu:
        goto qgsascuseaqueomc;
        uogcysggcyoisegq:
        $ikgwqyuyckaewsow = [$ikgwqyuyckaewsow];
        goto sukamomeeqoewoki;
        emcwkykcwsiugweq:
        goto qceesmmqyuwkcyeu;
        goto qkoqqyysqyaksosq;
        wguwwigkqeqkkwii:
        if (!$ikgwqyuyckaewsow) {
            goto eocskckeeaccikom;
        }
        goto gqiqiogyyiyqmeqs;
        iqwgyiwuwioggcco:
        $ywmkwiwkosakssii["\x66\x69\145\154\x64\163"] = $ikgwqyuyckaewsow;
        goto ouggkyamcckwgueg;
        kwaaskgiymsiyoue:
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto wiieusyiicqkowoy;
        wiywcsqiaywacscq:
        umkauikqwecsaeou:
        goto wgsmkaikymwsokok;
        maqceywaogiuomsg:
        kammygamykcycsgy:
        goto iyuucuymquckkumo;
        mquiiwwouugsuaem:
        umyocumuyaikwsmc:
        goto gqowoywqskqqgygi;
        qaoeyeikykeaaowq:
        if (!$mmswksymsquueauk) {
            goto umkauikqwecsaeou;
        }
        goto ogeoueuoieueoyig;
        yoyqwkkyymqsoqog:
        aakgcoqyscuiyqsa:
        goto igaqmmaikmgsswmu;
        aoqkyowyeusesasm:
        wqwumomcwkeskumw:
        goto ysooogsyukoyyoio;
        kusauaeusmwmeamc:
        $omkysikckkcieckq = array_keys($qiouiwasaauyaaue)[0];
        goto yckasoyasmcwguuc;
        igaqmmaikmgsswmu:
        cawqyquqwqgkwyyu:
        goto aoqkyowyeusesasm;
        mikskiswoomyeeea:
        goto cawqyquqwqgkwyyu;
        goto maqceywaogiuomsg;
        ysooogsyukoyyoio:
        $this->eyygsasuqmommkua($omkysikckkcieckq);
        goto mquiiwwouugsuaem;
        yckasoyasmcwguuc:
        goto wqwumomcwkeskumw;
        goto asgwcaiemaywyuua;
        wgsgyaguoackiwwm:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto uqoieyqaaegaqiik;
        gkaouywisuuowseo:
        if (isset($isksgswsmmqgeqmo["\x6f\x70\164\x69\157\156\163"])) {
            goto kammygamykcycsgy;
        }
        goto skequgsugsuiaisq;
        asgwcaiemaywyuua:
        qocywkiqgmwikmqc:
        goto gkaouywisuuowseo;
        ogeoueuoieueoyig:
        $this->qigsyyqgewgskemg("\x70\x72\x2d\x65\x78\164\x65\x6e\x64\141\142\x6c\145\x2d\x69\156\160\x75\164")->igmaewykumgwoaoy("\x64\141\164\141\55\145\170\164\x65\156\144\x61\142\x6c\x65", json_encode($mmswksymsquueauk));
        goto wiywcsqiaywacscq;
        oucoguycmqycwegy:
        $qiouiwasaauyaaue = $this->gkwkqmwweiawigae();
        goto wwskooaumymgscgo;
        wqgoeugeqekuyesm:
        $omkysikckkcieckq = $isksgswsmmqgeqmo = reset($qiouiwasaauyaaue);
        goto qoaekweeqcoeagay;
        skequgsugsuiaisq:
        $omkysikckkcieckq = array_keys($isksgswsmmqgeqmo)[0];
        goto mikskiswoomyeeea;
        iyuucuymquckkumo:
        if (!is_array($isksgswsmmqgeqmo["\157\x70\164\x69\157\156\163"])) {
            goto aakgcoqyscuiyqsa;
        }
        goto yuwaceimymweacaq;
        wgsmkaikymwsokok:
        if (!$this->msmiagueogcsucgc()) {
            goto akcmiiomammumqmy;
        }
        goto oucoguycmqycwegy;
        yuwaceimymweacaq:
        $omkysikckkcieckq = array_keys($isksgswsmmqgeqmo["\x6f\x70\x74\x69\x6f\x6e\163"])[0];
        goto yoyqwkkyymqsoqog;
        qoaekweeqcoeagay:
        if (is_array($isksgswsmmqgeqmo)) {
            goto qocywkiqgmwikmqc;
        }
        goto kusauaeusmwmeamc;
        wiieusyiicqkowoy:
        $mmswksymsquueauk = $this->asicmoumkgkcmiqq();
        goto qaoeyeikykeaaowq;
        wwskooaumymgscgo:
        if (!$qiouiwasaauyaaue) {
            goto umyocumuyaikwsmc;
        }
        goto wqgoeugeqekuyesm;
        gqowoywqskqqgygi:
        akcmiiomammumqmy:
        goto wgsgyaguoackiwwm;
        uqoieyqaaegaqiik:
    }
}
