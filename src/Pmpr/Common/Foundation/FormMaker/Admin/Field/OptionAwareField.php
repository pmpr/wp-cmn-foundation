<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        goto qeqiyayukmgicguk;
        mkuwaomcwgqaiosi:
        quaceaqiyccsewwm:
        goto ggamwkssakcsyygo;
        ggamwkssakcsyygo:
        return $this;
        goto ioosiucucgmakmce;
        qeqiyayukmgicguk:
        foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) {
            $this->kesomeowemmyygey($uusmaiomayssaecw, $omkysikckkcieckq);
            eguawwomyaaeausm:
        }
        goto mkuwaomcwgqaiosi;
        ioosiucucgmakmce:
    }
    
    public function asicmoumkgkcmiqq() : array
    {
        return $this->extendable;
    }
    
    public function wmwikuasuocmqycw($ywmkwiwkosakssii = []) : self
    {
        goto wgqeayikcayiiqww;
        iqwgyiwuwioggcco:
        $ikgwqyuyckaewsow[] = $this->mwikyscisascoeea();
        goto ouggkyamcckwgueg;
        ywyceqiucseqcakg:
        $this->extendable = $ywmkwiwkosakssii;
        goto kwaaskgiymsiyoue;
        qkoqqyysqyaksosq:
        goto oocumekqmguuwssy;
        goto ugqwwswmcmgiwoui;
        emcwkykcwsiugweq:
        eocskckeeaccikom:
        goto qkoqqyysqyaksosq;
        ouggkyamcckwgueg:
        $ywmkwiwkosakssii["\146\x69\x65\154\x64\x73"] = $ikgwqyuyckaewsow;
        goto ywyceqiucseqcakg;
        qgsascuseaqueomc:
        oocumekqmguuwssy:
        goto iqwgyiwuwioggcco;
        ugqwwswmcmgiwoui:
        qceesmmqyuwkcyeu:
        goto gugsmkokowuukqsy;
        uogcysggcyoisegq:
        if (is_array($ikgwqyuyckaewsow)) {
            goto eocskckeeaccikom;
        }
        goto sukamomeeqoewoki;
        wgqeayikcayiiqww:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [
            "\x76\x61\x72\151\141\x74\151\157\156\x73" => [],
            
            "\146\x69\x65\x6c\144\x73" => [],
        ]);
        goto wguwwigkqeqkkwii;
        kwaaskgiymsiyoue:
        return $this;
        goto umkauikqwecsaeou;
        wguwwigkqeqkkwii:
        $ikgwqyuyckaewsow = ManipulateArray::get($ywmkwiwkosakssii, "\x66\151\145\x6c\144\x73");
        goto gqiqiogyyiyqmeqs;
        gugsmkokowuukqsy:
        $ikgwqyuyckaewsow = [];
        goto qgsascuseaqueomc;
        gqiqiogyyiyqmeqs:
        if (!$ikgwqyuyckaewsow) {
            goto qceesmmqyuwkcyeu;
        }
        goto uogcysggcyoisegq;
        sukamomeeqoewoki:
        $ikgwqyuyckaewsow = [$ikgwqyuyckaewsow];
        goto emcwkykcwsiugweq;
        umkauikqwecsaeou:
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto qaoeyeikykeaaowq;
        wgsmkaikymwsokok:
        aakgcoqyscuiyqsa:
        goto oucoguycmqycwegy;
        aoqkyowyeusesasm:
        qocywkiqgmwikmqc:
        goto ysooogsyukoyyoio;
        mquiiwwouugsuaem:
        $this->eyygsasuqmommkua($omkysikckkcieckq);
        goto gqowoywqskqqgygi;
        ysooogsyukoyyoio:
        umyocumuyaikwsmc:
        goto mquiiwwouugsuaem;
        skequgsugsuiaisq:
        if (isset($isksgswsmmqgeqmo["\x6f\x70\x74\151\x6f\156\163"])) {
            goto cawqyquqwqgkwyyu;
        }
        goto mikskiswoomyeeea;
        mikskiswoomyeeea:
        $omkysikckkcieckq = array_keys($isksgswsmmqgeqmo)[0];
        goto maqceywaogiuomsg;
        qoaekweeqcoeagay:
        $omkysikckkcieckq = $isksgswsmmqgeqmo = reset($qiouiwasaauyaaue);
        goto kusauaeusmwmeamc;
        yuwaceimymweacaq:
        if (!is_array($isksgswsmmqgeqmo["\157\x70\164\x69\x6f\x6e\x73"])) {
            goto kammygamykcycsgy;
        }
        goto yoyqwkkyymqsoqog;
        gqowoywqskqqgygi:
        akcmiiomammumqmy:
        goto wgsgyaguoackiwwm;
        kusauaeusmwmeamc:
        if (is_array($isksgswsmmqgeqmo)) {
            goto wqwumomcwkeskumw;
        }
        goto yckasoyasmcwguuc;
        yoyqwkkyymqsoqog:
        $omkysikckkcieckq = array_keys($isksgswsmmqgeqmo["\x6f\160\x74\x69\157\156\x73"])[0];
        goto igaqmmaikmgsswmu;
        wiywcsqiaywacscq:
        $this->qigsyyqgewgskemg("\x70\x72\x2d\x65\170\164\x65\156\x64\x61\142\154\145\55\x69\x6e\160\165\164")->igmaewykumgwoaoy("\x64\141\x74\141\x2d\145\x78\x74\145\x6e\x64\141\142\154\145", json_encode($mmswksymsquueauk));
        goto wgsmkaikymwsokok;
        iyuucuymquckkumo:
        cawqyquqwqgkwyyu:
        goto yuwaceimymweacaq;
        maqceywaogiuomsg:
        goto qocywkiqgmwikmqc;
        goto iyuucuymquckkumo;
        qaoeyeikykeaaowq:
        $mmswksymsquueauk = $this->asicmoumkgkcmiqq();
        goto ogeoueuoieueoyig;
        yckasoyasmcwguuc:
        $omkysikckkcieckq = array_keys($qiouiwasaauyaaue)[0];
        goto asgwcaiemaywyuua;
        uqoieyqaaegaqiik:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto soacakggqekwwwiu;
        gkaouywisuuowseo:
        wqwumomcwkeskumw:
        goto skequgsugsuiaisq;
        ogeoueuoieueoyig:
        if (!$mmswksymsquueauk) {
            goto aakgcoqyscuiyqsa;
        }
        goto wiywcsqiaywacscq;
        igaqmmaikmgsswmu:
        kammygamykcycsgy:
        goto aoqkyowyeusesasm;
        asgwcaiemaywyuua:
        goto umyocumuyaikwsmc;
        goto gkaouywisuuowseo;
        oucoguycmqycwegy:
        if (!$this->msmiagueogcsucgc()) {
            goto wiieusyiicqkowoy;
        }
        goto wwskooaumymgscgo;
        wwskooaumymgscgo:
        $qiouiwasaauyaaue = $this->gkwkqmwweiawigae();
        goto wqgoeugeqekuyesm;
        wqgoeugeqekuyesm:
        if (!$qiouiwasaauyaaue) {
            goto akcmiiomammumqmy;
        }
        goto qoaekweeqcoeagay;
        wgsgyaguoackiwwm:
        wiieusyiicqkowoy:
        goto uqoieyqaaegaqiik;
        soacakggqekwwwiu:
    }
}
