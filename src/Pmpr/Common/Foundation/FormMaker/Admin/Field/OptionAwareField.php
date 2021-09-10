<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto isskocqmuyoukaaq;
        isskocqmuyoukaaq:
        foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) {
            $this->kesomeowemmyygey($uusmaiomayssaecw, $omkysikckkcieckq);
            wayeccuwqcsagsku:
        }
        goto scysisyaqygmiege;
        scysisyaqygmiege:
        kaksyamuwcoawuyi:
        goto quaceaqiyccsewwm;
        quaceaqiyccsewwm:
        return $this;
        goto eguawwomyaaeausm;
        eguawwomyaaeausm:
    }
    
    public function asicmoumkgkcmiqq() : array
    {
        return $this->extendable;
    }
    
    public function wmwikuasuocmqycw($ywmkwiwkosakssii = []) : self
    {
        goto ioosiucucgmakmce;
        emcwkykcwsiugweq:
        ggamwkssakcsyygo:
        goto qkoqqyysqyaksosq;
        wguwwigkqeqkkwii:
        qeqiyayukmgicguk:
        goto gqiqiogyyiyqmeqs;
        ioosiucucgmakmce:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [
            "\x76\141\162\x69\x61\x74\151\157\156\163" => [],
            
            "\146\151\145\154\x64\163" => [],
        ]);
        goto eocskckeeaccikom;
        gqiqiogyyiyqmeqs:
        goto ggamwkssakcsyygo;
        goto uogcysggcyoisegq;
        gugsmkokowuukqsy:
        $this->extendable = $ywmkwiwkosakssii;
        goto qgsascuseaqueomc;
        qceesmmqyuwkcyeu:
        if (!$ikgwqyuyckaewsow) {
            goto mkuwaomcwgqaiosi;
        }
        goto oocumekqmguuwssy;
        qgsascuseaqueomc:
        return $this;
        goto iqwgyiwuwioggcco;
        wgqeayikcayiiqww:
        $ikgwqyuyckaewsow = [$ikgwqyuyckaewsow];
        goto wguwwigkqeqkkwii;
        qkoqqyysqyaksosq:
        $ikgwqyuyckaewsow[] = $this->mwikyscisascoeea();
        goto ugqwwswmcmgiwoui;
        ugqwwswmcmgiwoui:
        $ywmkwiwkosakssii["\146\151\x65\154\x64\163"] = $ikgwqyuyckaewsow;
        goto gugsmkokowuukqsy;
        uogcysggcyoisegq:
        mkuwaomcwgqaiosi:
        goto sukamomeeqoewoki;
        sukamomeeqoewoki:
        $ikgwqyuyckaewsow = [];
        goto emcwkykcwsiugweq;
        oocumekqmguuwssy:
        if (is_array($ikgwqyuyckaewsow)) {
            goto qeqiyayukmgicguk;
        }
        goto wgqeayikcayiiqww;
        eocskckeeaccikom:
        $ikgwqyuyckaewsow = ManipulateArray::get($ywmkwiwkosakssii, "\x66\151\x65\154\144\x73");
        goto qceesmmqyuwkcyeu;
        iqwgyiwuwioggcco:
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto wqwumomcwkeskumw;
        qoaekweeqcoeagay:
        aakgcoqyscuiyqsa:
        goto kusauaeusmwmeamc;
        akcmiiomammumqmy:
        $this->qigsyyqgewgskemg("\x70\x72\55\x65\x78\164\145\x6e\144\x61\142\154\x65\x2d\x69\156\160\x75\164")->igmaewykumgwoaoy("\x64\x61\x74\x61\55\x65\170\164\145\x6e\144\x61\x62\x6c\x65", json_encode($mmswksymsquueauk));
        goto wiieusyiicqkowoy;
        asgwcaiemaywyuua:
        goto umkauikqwecsaeou;
        goto gkaouywisuuowseo;
        maqceywaogiuomsg:
        ywyceqiucseqcakg:
        goto iyuucuymquckkumo;
        igaqmmaikmgsswmu:
        cawqyquqwqgkwyyu:
        goto aoqkyowyeusesasm;
        skequgsugsuiaisq:
        if (!is_array($isksgswsmmqgeqmo["\157\160\x74\151\157\x6e\x73"])) {
            goto ywyceqiucseqcakg;
        }
        goto mikskiswoomyeeea;
        kusauaeusmwmeamc:
        if (isset($isksgswsmmqgeqmo["\157\160\164\151\157\156\x73"])) {
            goto kwaaskgiymsiyoue;
        }
        goto yckasoyasmcwguuc;
        wqgoeugeqekuyesm:
        goto kammygamykcycsgy;
        goto qoaekweeqcoeagay;
        wqwumomcwkeskumw:
        $mmswksymsquueauk = $this->asicmoumkgkcmiqq();
        goto umyocumuyaikwsmc;
        wiieusyiicqkowoy:
        ouggkyamcckwgueg:
        goto qaoeyeikykeaaowq;
        wwskooaumymgscgo:
        $omkysikckkcieckq = array_keys($qiouiwasaauyaaue)[0];
        goto wqgoeugeqekuyesm;
        ysooogsyukoyyoio:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto mquiiwwouugsuaem;
        wgsmkaikymwsokok:
        $omkysikckkcieckq = $isksgswsmmqgeqmo = reset($qiouiwasaauyaaue);
        goto oucoguycmqycwegy;
        wiywcsqiaywacscq:
        if (!$qiouiwasaauyaaue) {
            goto cawqyquqwqgkwyyu;
        }
        goto wgsmkaikymwsokok;
        iyuucuymquckkumo:
        umkauikqwecsaeou:
        goto yuwaceimymweacaq;
        mikskiswoomyeeea:
        $omkysikckkcieckq = array_keys($isksgswsmmqgeqmo["\x6f\160\x74\151\x6f\156\163"])[0];
        goto maqceywaogiuomsg;
        oucoguycmqycwegy:
        if (is_array($isksgswsmmqgeqmo)) {
            goto aakgcoqyscuiyqsa;
        }
        goto wwskooaumymgscgo;
        qaoeyeikykeaaowq:
        if (!$this->msmiagueogcsucgc()) {
            goto qocywkiqgmwikmqc;
        }
        goto ogeoueuoieueoyig;
        yoyqwkkyymqsoqog:
        $this->eyygsasuqmommkua($omkysikckkcieckq);
        goto igaqmmaikmgsswmu;
        umyocumuyaikwsmc:
        if (!$mmswksymsquueauk) {
            goto ouggkyamcckwgueg;
        }
        goto akcmiiomammumqmy;
        yckasoyasmcwguuc:
        $omkysikckkcieckq = array_keys($isksgswsmmqgeqmo)[0];
        goto asgwcaiemaywyuua;
        gkaouywisuuowseo:
        kwaaskgiymsiyoue:
        goto skequgsugsuiaisq;
        yuwaceimymweacaq:
        kammygamykcycsgy:
        goto yoyqwkkyymqsoqog;
        aoqkyowyeusesasm:
        qocywkiqgmwikmqc:
        goto ysooogsyukoyyoio;
        ogeoueuoieueoyig:
        $qiouiwasaauyaaue = $this->gkwkqmwweiawigae();
        goto wiywcsqiaywacscq;
        mquiiwwouugsuaem:
    }
}
