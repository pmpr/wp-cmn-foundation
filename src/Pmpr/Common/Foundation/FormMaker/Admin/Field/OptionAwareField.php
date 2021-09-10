<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        qeqiyayukmgicguk:
        foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) {
            $this->kesomeowemmyygey($uusmaiomayssaecw, $omkysikckkcieckq);
            eguawwomyaaeausm:
        }
        goto mkuwaomcwgqaiosi;
        ggamwkssakcsyygo:
        return $this;
        goto ioosiucucgmakmce;
        mkuwaomcwgqaiosi:
        quaceaqiyccsewwm:
        goto ggamwkssakcsyygo;
        ioosiucucgmakmce:
    }
    
    public function asicmoumkgkcmiqq() : array
    {
        return $this->extendable;
    }
    
    public function wmwikuasuocmqycw($ywmkwiwkosakssii = []) : self
    {
        goto wgqeayikcayiiqww;
        qkoqqyysqyaksosq:
        goto oocumekqmguuwssy;
        goto ugqwwswmcmgiwoui;
        ywyceqiucseqcakg:
        $this->extendable = $ywmkwiwkosakssii;
        goto kwaaskgiymsiyoue;
        qgsascuseaqueomc:
        oocumekqmguuwssy:
        goto iqwgyiwuwioggcco;
        wgqeayikcayiiqww:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [
            "\166\141\162\x69\x61\164\x69\x6f\x6e\163" => [],
            
            "\146\x69\145\x6c\x64\x73" => [],
        ]);
        goto wguwwigkqeqkkwii;
        gugsmkokowuukqsy:
        $ikgwqyuyckaewsow = [];
        goto qgsascuseaqueomc;
        wguwwigkqeqkkwii:
        $ikgwqyuyckaewsow = ManipulateArray::get($ywmkwiwkosakssii, "\x66\x69\145\x6c\144\x73");
        goto gqiqiogyyiyqmeqs;
        ugqwwswmcmgiwoui:
        qceesmmqyuwkcyeu:
        goto gugsmkokowuukqsy;
        kwaaskgiymsiyoue:
        return $this;
        goto umkauikqwecsaeou;
        emcwkykcwsiugweq:
        eocskckeeaccikom:
        goto qkoqqyysqyaksosq;
        uogcysggcyoisegq:
        if (is_array($ikgwqyuyckaewsow)) {
            goto eocskckeeaccikom;
        }
        goto sukamomeeqoewoki;
        gqiqiogyyiyqmeqs:
        if (!$ikgwqyuyckaewsow) {
            goto qceesmmqyuwkcyeu;
        }
        goto uogcysggcyoisegq;
        iqwgyiwuwioggcco:
        $ikgwqyuyckaewsow[] = $this->mwikyscisascoeea();
        goto ouggkyamcckwgueg;
        ouggkyamcckwgueg:
        $ywmkwiwkosakssii["\146\151\145\x6c\144\163"] = $ikgwqyuyckaewsow;
        goto ywyceqiucseqcakg;
        sukamomeeqoewoki:
        $ikgwqyuyckaewsow = [$ikgwqyuyckaewsow];
        goto emcwkykcwsiugweq;
        umkauikqwecsaeou:
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto qaoeyeikykeaaowq;
        aoqkyowyeusesasm:
        qocywkiqgmwikmqc:
        goto ysooogsyukoyyoio;
        wgsgyaguoackiwwm:
        wiieusyiicqkowoy:
        goto uqoieyqaaegaqiik;
        ogeoueuoieueoyig:
        if (!$mmswksymsquueauk) {
            goto aakgcoqyscuiyqsa;
        }
        goto wiywcsqiaywacscq;
        wwskooaumymgscgo:
        $qiouiwasaauyaaue = $this->gkwkqmwweiawigae();
        goto wqgoeugeqekuyesm;
        gkaouywisuuowseo:
        wqwumomcwkeskumw:
        goto skequgsugsuiaisq;
        wgsmkaikymwsokok:
        aakgcoqyscuiyqsa:
        goto oucoguycmqycwegy;
        asgwcaiemaywyuua:
        goto umyocumuyaikwsmc;
        goto gkaouywisuuowseo;
        yoyqwkkyymqsoqog:
        $omkysikckkcieckq = array_keys($isksgswsmmqgeqmo["\157\160\x74\x69\x6f\x6e\163"])[0];
        goto igaqmmaikmgsswmu;
        wqgoeugeqekuyesm:
        if (!$qiouiwasaauyaaue) {
            goto akcmiiomammumqmy;
        }
        goto qoaekweeqcoeagay;
        wiywcsqiaywacscq:
        $this->qigsyyqgewgskemg("\x70\x72\55\145\x78\164\x65\x6e\x64\141\142\x6c\145\55\x69\156\x70\x75\x74")->igmaewykumgwoaoy("\x64\141\x74\x61\55\x65\170\x74\145\156\x64\x61\x62\x6c\x65", json_encode($mmswksymsquueauk));
        goto wgsmkaikymwsokok;
        qaoeyeikykeaaowq:
        $mmswksymsquueauk = $this->asicmoumkgkcmiqq();
        goto ogeoueuoieueoyig;
        mikskiswoomyeeea:
        $omkysikckkcieckq = array_keys($isksgswsmmqgeqmo)[0];
        goto maqceywaogiuomsg;
        yckasoyasmcwguuc:
        $omkysikckkcieckq = array_keys($qiouiwasaauyaaue)[0];
        goto asgwcaiemaywyuua;
        yuwaceimymweacaq:
        if (!is_array($isksgswsmmqgeqmo["\x6f\160\164\151\x6f\x6e\163"])) {
            goto kammygamykcycsgy;
        }
        goto yoyqwkkyymqsoqog;
        oucoguycmqycwegy:
        if (!$this->msmiagueogcsucgc()) {
            goto wiieusyiicqkowoy;
        }
        goto wwskooaumymgscgo;
        iyuucuymquckkumo:
        cawqyquqwqgkwyyu:
        goto yuwaceimymweacaq;
        gqowoywqskqqgygi:
        akcmiiomammumqmy:
        goto wgsgyaguoackiwwm;
        skequgsugsuiaisq:
        if (isset($isksgswsmmqgeqmo["\x6f\160\x74\151\157\156\163"])) {
            goto cawqyquqwqgkwyyu;
        }
        goto mikskiswoomyeeea;
        igaqmmaikmgsswmu:
        kammygamykcycsgy:
        goto aoqkyowyeusesasm;
        mquiiwwouugsuaem:
        $this->eyygsasuqmommkua($omkysikckkcieckq);
        goto gqowoywqskqqgygi;
        ysooogsyukoyyoio:
        umyocumuyaikwsmc:
        goto mquiiwwouugsuaem;
        qoaekweeqcoeagay:
        $omkysikckkcieckq = $isksgswsmmqgeqmo = reset($qiouiwasaauyaaue);
        goto kusauaeusmwmeamc;
        maqceywaogiuomsg:
        goto qocywkiqgmwikmqc;
        goto iyuucuymquckkumo;
        kusauaeusmwmeamc:
        if (is_array($isksgswsmmqgeqmo)) {
            goto wqwumomcwkeskumw;
        }
        goto yckasoyasmcwguuc;
        uqoieyqaaegaqiik:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto soacakggqekwwwiu;
        soacakggqekwwwiu:
    }
}
