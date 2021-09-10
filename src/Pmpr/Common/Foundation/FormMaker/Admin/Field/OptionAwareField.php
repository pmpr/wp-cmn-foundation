<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        goto mkuwaomcwgqaiosi;
        ioosiucucgmakmce:
        return $this;
        goto eocskckeeaccikom;
        ggamwkssakcsyygo:
        eguawwomyaaeausm:
        goto ioosiucucgmakmce;
        mkuwaomcwgqaiosi:
        foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) {
            $this->kesomeowemmyygey($uusmaiomayssaecw, $omkysikckkcieckq);
            qeqiyayukmgicguk:
        }
        goto ggamwkssakcsyygo;
        eocskckeeaccikom:
    }
    
    public function asicmoumkgkcmiqq() : array
    {
        return $this->extendable;
    }
    
    public function wmwikuasuocmqycw($ywmkwiwkosakssii = []) : self
    {
        goto wguwwigkqeqkkwii;
        qgsascuseaqueomc:
        $ikgwqyuyckaewsow = [];
        goto iqwgyiwuwioggcco;
        ywyceqiucseqcakg:
        $ywmkwiwkosakssii["\146\151\x65\x6c\x64\x73"] = $ikgwqyuyckaewsow;
        goto kwaaskgiymsiyoue;
        uogcysggcyoisegq:
        if (!$ikgwqyuyckaewsow) {
            goto oocumekqmguuwssy;
        }
        goto sukamomeeqoewoki;
        kwaaskgiymsiyoue:
        $this->extendable = $ywmkwiwkosakssii;
        goto umkauikqwecsaeou;
        sukamomeeqoewoki:
        if (is_array($ikgwqyuyckaewsow)) {
            goto qceesmmqyuwkcyeu;
        }
        goto emcwkykcwsiugweq;
        qkoqqyysqyaksosq:
        qceesmmqyuwkcyeu:
        goto ugqwwswmcmgiwoui;
        umkauikqwecsaeou:
        return $this;
        goto aakgcoqyscuiyqsa;
        iqwgyiwuwioggcco:
        wgqeayikcayiiqww:
        goto ouggkyamcckwgueg;
        gqiqiogyyiyqmeqs:
        $ikgwqyuyckaewsow = ManipulateArray::get($ywmkwiwkosakssii, "\146\151\145\154\x64\x73");
        goto uogcysggcyoisegq;
        ugqwwswmcmgiwoui:
        goto wgqeayikcayiiqww;
        goto gugsmkokowuukqsy;
        emcwkykcwsiugweq:
        $ikgwqyuyckaewsow = [$ikgwqyuyckaewsow];
        goto qkoqqyysqyaksosq;
        ouggkyamcckwgueg:
        $ikgwqyuyckaewsow[] = $this->mwikyscisascoeea();
        goto ywyceqiucseqcakg;
        wguwwigkqeqkkwii:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [
            "\x76\141\x72\151\x61\164\151\157\x6e\x73" => [],
            
            "\146\x69\x65\154\x64\x73" => [],
        ]);
        goto gqiqiogyyiyqmeqs;
        gugsmkokowuukqsy:
        oocumekqmguuwssy:
        goto qgsascuseaqueomc;
        aakgcoqyscuiyqsa:
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto ogeoueuoieueoyig;
        iyuucuymquckkumo:
        goto wqwumomcwkeskumw;
        goto yuwaceimymweacaq;
        mikskiswoomyeeea:
        if (isset($isksgswsmmqgeqmo["\x6f\x70\164\151\x6f\156\x73"])) {
            goto qocywkiqgmwikmqc;
        }
        goto maqceywaogiuomsg;
        wqgoeugeqekuyesm:
        $qiouiwasaauyaaue = $this->gkwkqmwweiawigae();
        goto qoaekweeqcoeagay;
        gqowoywqskqqgygi:
        $this->eyygsasuqmommkua($omkysikckkcieckq);
        goto wgsgyaguoackiwwm;
        skequgsugsuiaisq:
        umyocumuyaikwsmc:
        goto mikskiswoomyeeea;
        yckasoyasmcwguuc:
        if (is_array($isksgswsmmqgeqmo)) {
            goto umyocumuyaikwsmc;
        }
        goto asgwcaiemaywyuua;
        aoqkyowyeusesasm:
        cawqyquqwqgkwyyu:
        goto ysooogsyukoyyoio;
        maqceywaogiuomsg:
        $omkysikckkcieckq = array_keys($isksgswsmmqgeqmo)[0];
        goto iyuucuymquckkumo;
        mquiiwwouugsuaem:
        akcmiiomammumqmy:
        goto gqowoywqskqqgygi;
        igaqmmaikmgsswmu:
        $omkysikckkcieckq = array_keys($isksgswsmmqgeqmo["\x6f\x70\x74\x69\157\156\x73"])[0];
        goto aoqkyowyeusesasm;
        wgsgyaguoackiwwm:
        wiieusyiicqkowoy:
        goto uqoieyqaaegaqiik;
        wgsmkaikymwsokok:
        $this->qigsyyqgewgskemg("\160\162\x2d\x65\x78\164\x65\x6e\144\141\x62\154\145\55\151\x6e\160\165\x74")->igmaewykumgwoaoy("\144\141\x74\141\55\x65\170\164\145\x6e\144\141\142\x6c\145", json_encode($mmswksymsquueauk));
        goto oucoguycmqycwegy;
        wwskooaumymgscgo:
        if (!$this->msmiagueogcsucgc()) {
            goto qaoeyeikykeaaowq;
        }
        goto wqgoeugeqekuyesm;
        uqoieyqaaegaqiik:
        qaoeyeikykeaaowq:
        goto soacakggqekwwwiu;
        yuwaceimymweacaq:
        qocywkiqgmwikmqc:
        goto yoyqwkkyymqsoqog;
        soacakggqekwwwiu:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto cykoggeawyosiwuw;
        ogeoueuoieueoyig:
        $mmswksymsquueauk = $this->asicmoumkgkcmiqq();
        goto wiywcsqiaywacscq;
        qoaekweeqcoeagay:
        if (!$qiouiwasaauyaaue) {
            goto wiieusyiicqkowoy;
        }
        goto kusauaeusmwmeamc;
        gkaouywisuuowseo:
        goto akcmiiomammumqmy;
        goto skequgsugsuiaisq;
        kusauaeusmwmeamc:
        $omkysikckkcieckq = $isksgswsmmqgeqmo = reset($qiouiwasaauyaaue);
        goto yckasoyasmcwguuc;
        oucoguycmqycwegy:
        kammygamykcycsgy:
        goto wwskooaumymgscgo;
        wiywcsqiaywacscq:
        if (!$mmswksymsquueauk) {
            goto kammygamykcycsgy;
        }
        goto wgsmkaikymwsokok;
        ysooogsyukoyyoio:
        wqwumomcwkeskumw:
        goto mquiiwwouugsuaem;
        yoyqwkkyymqsoqog:
        if (!is_array($isksgswsmmqgeqmo["\x6f\x70\x74\151\x6f\x6e\163"])) {
            goto cawqyquqwqgkwyyu;
        }
        goto igaqmmaikmgsswmu;
        asgwcaiemaywyuua:
        $omkysikckkcieckq = array_keys($qiouiwasaauyaaue)[0];
        goto gkaouywisuuowseo;
        cykoggeawyosiwuw:
    }
}
