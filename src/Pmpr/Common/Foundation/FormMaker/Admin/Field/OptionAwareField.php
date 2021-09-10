<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        wguwwigkqeqkkwii:
        $ikgwqyuyckaewsow = ManipulateArray::get($ywmkwiwkosakssii, "\x66\151\145\x6c\x64\163");
        goto gqiqiogyyiyqmeqs;
        wgqeayikcayiiqww:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [
            "\166\141\x72\x69\x61\164\x69\x6f\x6e\x73" => [],
            
            "\x66\151\145\x6c\144\x73" => [],
        ]);
        goto wguwwigkqeqkkwii;
        sukamomeeqoewoki:
        $ikgwqyuyckaewsow = [$ikgwqyuyckaewsow];
        goto emcwkykcwsiugweq;
        emcwkykcwsiugweq:
        eocskckeeaccikom:
        goto qkoqqyysqyaksosq;
        ouggkyamcckwgueg:
        $ywmkwiwkosakssii["\146\x69\145\154\x64\163"] = $ikgwqyuyckaewsow;
        goto ywyceqiucseqcakg;
        iqwgyiwuwioggcco:
        $ikgwqyuyckaewsow[] = $this->mwikyscisascoeea();
        goto ouggkyamcckwgueg;
        ywyceqiucseqcakg:
        $this->extendable = $ywmkwiwkosakssii;
        goto kwaaskgiymsiyoue;
        gqiqiogyyiyqmeqs:
        if (!$ikgwqyuyckaewsow) {
            goto qceesmmqyuwkcyeu;
        }
        goto uogcysggcyoisegq;
        kwaaskgiymsiyoue:
        return $this;
        goto umkauikqwecsaeou;
        uogcysggcyoisegq:
        if (is_array($ikgwqyuyckaewsow)) {
            goto eocskckeeaccikom;
        }
        goto sukamomeeqoewoki;
        qkoqqyysqyaksosq:
        goto oocumekqmguuwssy;
        goto ugqwwswmcmgiwoui;
        gugsmkokowuukqsy:
        $ikgwqyuyckaewsow = [];
        goto qgsascuseaqueomc;
        qgsascuseaqueomc:
        oocumekqmguuwssy:
        goto iqwgyiwuwioggcco;
        ugqwwswmcmgiwoui:
        qceesmmqyuwkcyeu:
        goto gugsmkokowuukqsy;
        umkauikqwecsaeou:
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto qaoeyeikykeaaowq;
        kusauaeusmwmeamc:
        if (is_array($isksgswsmmqgeqmo)) {
            goto wqwumomcwkeskumw;
        }
        goto yckasoyasmcwguuc;
        igaqmmaikmgsswmu:
        kammygamykcycsgy:
        goto aoqkyowyeusesasm;
        oucoguycmqycwegy:
        if (!$this->msmiagueogcsucgc()) {
            goto wiieusyiicqkowoy;
        }
        goto wwskooaumymgscgo;
        wgsgyaguoackiwwm:
        wiieusyiicqkowoy:
        goto uqoieyqaaegaqiik;
        yuwaceimymweacaq:
        if (!is_array($isksgswsmmqgeqmo["\x6f\160\x74\x69\x6f\156\x73"])) {
            goto kammygamykcycsgy;
        }
        goto yoyqwkkyymqsoqog;
        mquiiwwouugsuaem:
        $this->eyygsasuqmommkua($omkysikckkcieckq);
        goto gqowoywqskqqgygi;
        iyuucuymquckkumo:
        cawqyquqwqgkwyyu:
        goto yuwaceimymweacaq;
        yoyqwkkyymqsoqog:
        $omkysikckkcieckq = array_keys($isksgswsmmqgeqmo["\157\160\164\151\x6f\x6e\x73"])[0];
        goto igaqmmaikmgsswmu;
        wwskooaumymgscgo:
        $qiouiwasaauyaaue = $this->gkwkqmwweiawigae();
        goto wqgoeugeqekuyesm;
        maqceywaogiuomsg:
        goto qocywkiqgmwikmqc;
        goto iyuucuymquckkumo;
        skequgsugsuiaisq:
        if (isset($isksgswsmmqgeqmo["\x6f\x70\x74\x69\x6f\156\x73"])) {
            goto cawqyquqwqgkwyyu;
        }
        goto mikskiswoomyeeea;
        yckasoyasmcwguuc:
        $omkysikckkcieckq = array_keys($qiouiwasaauyaaue)[0];
        goto asgwcaiemaywyuua;
        wgsmkaikymwsokok:
        aakgcoqyscuiyqsa:
        goto oucoguycmqycwegy;
        wqgoeugeqekuyesm:
        if (!$qiouiwasaauyaaue) {
            goto akcmiiomammumqmy;
        }
        goto qoaekweeqcoeagay;
        mikskiswoomyeeea:
        $omkysikckkcieckq = array_keys($isksgswsmmqgeqmo)[0];
        goto maqceywaogiuomsg;
        gkaouywisuuowseo:
        wqwumomcwkeskumw:
        goto skequgsugsuiaisq;
        asgwcaiemaywyuua:
        goto umyocumuyaikwsmc;
        goto gkaouywisuuowseo;
        qoaekweeqcoeagay:
        $omkysikckkcieckq = $isksgswsmmqgeqmo = reset($qiouiwasaauyaaue);
        goto kusauaeusmwmeamc;
        wiywcsqiaywacscq:
        $this->qigsyyqgewgskemg("\x70\162\55\145\x78\x74\x65\156\x64\x61\x62\154\x65\55\151\156\160\165\164")->igmaewykumgwoaoy("\x64\x61\x74\141\55\145\x78\164\x65\156\x64\141\x62\x6c\145", json_encode($mmswksymsquueauk));
        goto wgsmkaikymwsokok;
        ogeoueuoieueoyig:
        if (!$mmswksymsquueauk) {
            goto aakgcoqyscuiyqsa;
        }
        goto wiywcsqiaywacscq;
        aoqkyowyeusesasm:
        qocywkiqgmwikmqc:
        goto ysooogsyukoyyoio;
        ysooogsyukoyyoio:
        umyocumuyaikwsmc:
        goto mquiiwwouugsuaem;
        uqoieyqaaegaqiik:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto soacakggqekwwwiu;
        gqowoywqskqqgygi:
        akcmiiomammumqmy:
        goto wgsgyaguoackiwwm;
        qaoeyeikykeaaowq:
        $mmswksymsquueauk = $this->asicmoumkgkcmiqq();
        goto ogeoueuoieueoyig;
        soacakggqekwwwiu:
    }
}
