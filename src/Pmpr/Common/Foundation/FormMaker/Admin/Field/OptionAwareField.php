<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        gqiqiogyyiyqmeqs:
        if (is_array($ikgwqyuyckaewsow)) {
            goto ioosiucucgmakmce;
        }
        goto uogcysggcyoisegq;
        gugsmkokowuukqsy:
        qceesmmqyuwkcyeu:
        goto qgsascuseaqueomc;
        ywyceqiucseqcakg:
        return $this;
        goto kwaaskgiymsiyoue;
        uogcysggcyoisegq:
        $ikgwqyuyckaewsow = [$ikgwqyuyckaewsow];
        goto sukamomeeqoewoki;
        oocumekqmguuwssy:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [
            "\x76\141\x72\x69\141\164\151\x6f\156\x73" => [],
            
            "\x66\x69\145\154\x64\163" => [],
        ]);
        goto wgqeayikcayiiqww;
        iqwgyiwuwioggcco:
        $ywmkwiwkosakssii["\146\151\x65\154\x64\x73"] = $ikgwqyuyckaewsow;
        goto ouggkyamcckwgueg;
        qkoqqyysqyaksosq:
        eocskckeeaccikom:
        goto ugqwwswmcmgiwoui;
        qgsascuseaqueomc:
        $ikgwqyuyckaewsow[] = $this->mwikyscisascoeea();
        goto iqwgyiwuwioggcco;
        wgqeayikcayiiqww:
        $ikgwqyuyckaewsow = ManipulateArray::get($ywmkwiwkosakssii, "\146\x69\145\x6c\144\x73");
        goto wguwwigkqeqkkwii;
        emcwkykcwsiugweq:
        goto qceesmmqyuwkcyeu;
        goto qkoqqyysqyaksosq;
        ouggkyamcckwgueg:
        $this->extendable = $ywmkwiwkosakssii;
        goto ywyceqiucseqcakg;
        sukamomeeqoewoki:
        ioosiucucgmakmce:
        goto emcwkykcwsiugweq;
        wguwwigkqeqkkwii:
        if (!$ikgwqyuyckaewsow) {
            goto eocskckeeaccikom;
        }
        goto gqiqiogyyiyqmeqs;
        ugqwwswmcmgiwoui:
        $ikgwqyuyckaewsow = [];
        goto gugsmkokowuukqsy;
        kwaaskgiymsiyoue:
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto wiieusyiicqkowoy;
        oucoguycmqycwegy:
        $qiouiwasaauyaaue = $this->gkwkqmwweiawigae();
        goto wwskooaumymgscgo;
        ogeoueuoieueoyig:
        $this->qigsyyqgewgskemg("\x70\x72\55\145\170\x74\145\156\144\x61\142\154\145\55\151\156\160\x75\x74")->igmaewykumgwoaoy("\x64\x61\x74\141\55\145\170\164\x65\x6e\x64\141\x62\154\145", json_encode($mmswksymsquueauk));
        goto wiywcsqiaywacscq;
        wqgoeugeqekuyesm:
        $omkysikckkcieckq = $isksgswsmmqgeqmo = reset($qiouiwasaauyaaue);
        goto qoaekweeqcoeagay;
        wwskooaumymgscgo:
        if (!$qiouiwasaauyaaue) {
            goto umyocumuyaikwsmc;
        }
        goto wqgoeugeqekuyesm;
        mquiiwwouugsuaem:
        umyocumuyaikwsmc:
        goto gqowoywqskqqgygi;
        yoyqwkkyymqsoqog:
        aakgcoqyscuiyqsa:
        goto igaqmmaikmgsswmu;
        wiieusyiicqkowoy:
        $mmswksymsquueauk = $this->asicmoumkgkcmiqq();
        goto qaoeyeikykeaaowq;
        qaoeyeikykeaaowq:
        if (!$mmswksymsquueauk) {
            goto umkauikqwecsaeou;
        }
        goto ogeoueuoieueoyig;
        igaqmmaikmgsswmu:
        cawqyquqwqgkwyyu:
        goto aoqkyowyeusesasm;
        gqowoywqskqqgygi:
        akcmiiomammumqmy:
        goto wgsgyaguoackiwwm;
        qoaekweeqcoeagay:
        if (is_array($isksgswsmmqgeqmo)) {
            goto qocywkiqgmwikmqc;
        }
        goto kusauaeusmwmeamc;
        iyuucuymquckkumo:
        if (!is_array($isksgswsmmqgeqmo["\x6f\160\x74\x69\157\156\163"])) {
            goto aakgcoqyscuiyqsa;
        }
        goto yuwaceimymweacaq;
        maqceywaogiuomsg:
        kammygamykcycsgy:
        goto iyuucuymquckkumo;
        asgwcaiemaywyuua:
        qocywkiqgmwikmqc:
        goto gkaouywisuuowseo;
        mikskiswoomyeeea:
        goto cawqyquqwqgkwyyu;
        goto maqceywaogiuomsg;
        yuwaceimymweacaq:
        $omkysikckkcieckq = array_keys($isksgswsmmqgeqmo["\157\x70\164\151\x6f\x6e\x73"])[0];
        goto yoyqwkkyymqsoqog;
        wgsmkaikymwsokok:
        if (!$this->msmiagueogcsucgc()) {
            goto akcmiiomammumqmy;
        }
        goto oucoguycmqycwegy;
        kusauaeusmwmeamc:
        $omkysikckkcieckq = array_keys($qiouiwasaauyaaue)[0];
        goto yckasoyasmcwguuc;
        ysooogsyukoyyoio:
        $this->eyygsasuqmommkua($omkysikckkcieckq);
        goto mquiiwwouugsuaem;
        skequgsugsuiaisq:
        $omkysikckkcieckq = array_keys($isksgswsmmqgeqmo)[0];
        goto mikskiswoomyeeea;
        aoqkyowyeusesasm:
        wqwumomcwkeskumw:
        goto ysooogsyukoyyoio;
        wiywcsqiaywacscq:
        umkauikqwecsaeou:
        goto wgsmkaikymwsokok;
        yckasoyasmcwguuc:
        goto wqwumomcwkeskumw;
        goto asgwcaiemaywyuua;
        gkaouywisuuowseo:
        if (isset($isksgswsmmqgeqmo["\x6f\x70\164\151\x6f\156\163"])) {
            goto kammygamykcycsgy;
        }
        goto skequgsugsuiaisq;
        wgsgyaguoackiwwm:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto uqoieyqaaegaqiik;
        uqoieyqaaegaqiik:
    }
}
