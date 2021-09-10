<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Element\Shortcode;

use Pmpr\Common\Foundation\FormMaker\Admin\Element\Modal\Modal;
use Pmpr\Common\Foundation\FormMaker\FormMaker;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;

abstract class Shortcode extends Modal
{
    
    public ?string $icon = null;
    
    public bool $isRendered = false;
    
    public bool $isButtonRendered = false;
    
    public function eyamqkqiykagecsw() : string
    {
        return $this->icon;
    }
    
    public function saemoowcasogykak(string $wkaqekwwgqsqwcoi) : self
    {
        $this->icon = $wkaqekwwgqsqwcoi;
        return $this;
    }
    
    public function gakuqssqwcuekqqi() : bool
    {
        return $this->isRendered;
    }
    
    public function eqesqooyciwmagsa(bool $gakuqssqwcuekqqi) : self
    {
        $this->isRendered = $gakuqssqwcuekqqi;
        return $this;
    }
    
    public function ocmescguywiskicc() : bool
    {
        return $this->isButtonRendered;
    }
    
    public function ywmaqqqoiueymkyu(bool $ocmescguywiskicc) : self
    {
        $this->isButtonRendered = $ocmescguywiskicc;
        return $this;
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\151\156\x69\164", [$this, "\162\x65\x67\x69\163\x74\145\x72"])->qcsmikeggeemccuu("\164\x68\145\137\x63\157\156\x74\x65\156\x74", [$this, "\x77\x75\155\x65\x65\x69\167\147\x79\165\x6d\x6d\x6d\x79\171\x63"], 0)->qcsmikeggeemccuu("\155\145\x64\x69\141\x5f\142\165\164\x74\157\x6e\x73", [$this, "\x73\145\167\x71\163\x77\x65\x67\x63\167\171\x77\x61\x6d\x75\x77"], 20);
        parent::wigskegsqequoeks();
    }
    
    public function wumeeiwgyummmyyc($ewgwqamkygiqaawc)
    {
        goto iccwagsgiwweegyu;
        iccwagsgiwweegyu:
        $ucccueqywigcukcc = get_shortcode_regex();
        goto uuiomuugqeygqqsw;
        uuiomuugqeygqqsw:
        $ucccueqywigcukcc = sprintf("\57\74\160\x5b\136\x3e\135\x2a\77\x3e\x25\163\x3c\134\57\160\76\57", $ucccueqywigcukcc);
        goto scoyasauucwmisgg;
        scoyasauucwmisgg:
        return preg_replace($ucccueqywigcukcc, "\133\44\x31\x24\x32\44\63\x24\x34\x24\65\44\66\44\67\x24\x38\x5d", $ewgwqamkygiqaawc);
        goto gqiusmcakwmqwqoe;
        gqiusmcakwmqwqoe:
    }
    
    public function gsesiocqciggmauo() : array
    {
        goto yqkkowqgkkoagyau;
        aaseiuggiycwiqaa:
        $wsqkgswwooewwekw = parent::gsesiocqciggmauo();
        goto kmwewkusymggygku;
        yqkkowqgkkoagyau:
        $oammesyieqmwuwyi = [];
        goto aaseiuggiycwiqaa;
        yomwykwgomcossok:
        return $oammesyieqmwuwyi;
        goto wsyqiqqugeikswyw;
        wyecwskuasocyssk:
        cqwsyoowkeoomees:
        goto yomwykwgomcossok;
        kmwewkusymggygku:
        foreach ($wsqkgswwooewwekw as $oceoauekaygmuoko) {
            goto sooiqioysqysuqmc;
            ayackygkmucicasi:
            if (!($ccamueccusigaaio === self::ALL || is_array($ccamueccusigaaio) && self::uqwgsuysegkweago($ccamueccusigaaio))) {
                goto rskioecskoesimmm;
            }
            goto gyyquueyoigmqqgi;
            gyyquueyoigmqqgi:
            $oceoauekaygmuoko->igmamuiesywmkgeu(__("\x49\156\x73\x65\x72\164\x20\x53\x68\x6f\162\164\143\x6f\144\145", PR__CMN__FOUNDATION), ["\x63\x6c\x61\163\x73" => "\x73\x68\x6f\x72\164\x63\x6f\144\145\x2d\142\165\164\x74\x6f\156\x2d\x69\x6e\163\145\x72\164"]);
            goto uiwekeeeswqescmu;
            ieuoqekamagwewua:
            $ccamueccusigaaio = $oceoauekaygmuoko->squsacgomqgkakaw();
            goto ayackygkmucicasi;
            sooiqioysqysuqmc:
            if (!$oceoauekaygmuoko instanceof Segment) {
                goto sgyqosasmwkkaicm;
            }
            goto ieuoqekamagwewua;
            osmgkacsseggaeok:
            sgyqosasmwkkaicm:
            goto soaqqkyyqkggaqiq;
            uiwekeeeswqescmu:
            $oammesyieqmwuwyi[$oceoauekaygmuoko->aakmagwggmkoiiyu()] = $oceoauekaygmuoko;
            goto yaoqsoaicwocoeum;
            soaqqkyyqkggaqiq:
            uyaweouuukcayyki:
            goto meoyawcgmeswowic;
            yaoqsoaicwocoeum:
            rskioecskoesimmm:
            goto osmgkacsseggaeok;
            meoyawcgmeswowic:
        }
        goto wyecwskuasocyssk;
        wsyqiqqugeikswyw:
    }
    
    public function sewqswegcwywamuw($igwkwmgowquoucyk)
    {
        goto imyyqsmeukmygqea;
        ucqcosmcaeqoqiik:
        echo $this->cyeuiyggkcqmoecc();
        goto yqgkaaakeeguqsoa;
        yqgkaaakeeguqsoa:
        $this->ywmaqqqoiueymkyu(true);
        goto esgwmaommcoqgaqq;
        esgwmaommcoqgaqq:
        sasqcgyokocouous:
        goto ueqckqsoacegcogq;
        imyyqsmeukmygqea:
        if (!($igwkwmgowquoucyk == "\x63\157\x6e\x74\x65\156\x74" && $this->uqwgsuysegkweago() && !$this->gakuqssqwcuekqqi() && $this->skgwcckoyoqsascq())) {
            goto sasqcgyokocouous;
        }
        goto ucqcosmcaeqoqiik;
        ueqckqsoacegcogq:
    }
    
    public function cyeuiyggkcqmoecc() : string
    {
        return $this->iuygowkemiiwqmiw("\142\x75\164\164\157\156", ["\164\x69\164\x6c\x65" => $this->qcgakseyaikigqco(), "\x6e\x61\x6d\x65" => $this->cisyiemkeykgkomc()], ["\143\154\141\163\x73" => self::class]);
    }
    
    public function uqwgsuysegkweago($ccamueccusigaaio = []) : bool
    {
        goto gouewaoykimcgakg;
        makcqoyaqeuqegso:
        $ccamueccusigaaio = ManipulatePost::mwoyqeeigwqoamiw();
        goto qkoiyqmiyqgggewm;
        augqyewgugakswko:
        return ManipulatePost::uqwgsuysegkweago($ccamueccusigaaio);
        goto suceoykiqcawgyee;
        gouewaoykimcgakg:
        if ($ccamueccusigaaio) {
            goto ywescecsocscqiek;
        }
        goto makcqoyaqeuqegso;
        qkoiyqmiyqgggewm:
        ywescecsocscqiek:
        goto augqyewgugakswko;
        suceoykiqcawgyee:
    }
    public function enqueue()
    {
        goto qwsikwwqgimcyuim;
        asuksoocskiwciqc:
        parent::enqueue();
        goto aukeeueesqyksqwu;
        meyykqkewoegmugo:
        $eygsasmqycagyayw->ikqyiskqaaymscgw("\163\150\x6f\162\x74\143\x6f\x64\145", ["\x6e\x61\155\x65\163" => array_keys($shortcode_tags)]);
        goto asuksoocskiwciqc;
        uocqwqamsmykosmy:
        global $shortcode_tags;
        goto meyykqkewoegmugo;
        qwsikwwqgimcyuim:
        $eygsasmqycagyayw = FormMaker::symcgieuakksimmu()->miocmcoykayoyyau();
        goto cekgegesyoewqcis;
        cekgegesyoewqcis:
        $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\163\150\x6f\x72\164\x63\157\144\145", $eygsasmqycagyayw->get("\163\150\157\x72\164\x63\x6f\144\145\x2e\152\x73"))->ayuciigykaswwqeo($eygsasmqycagyayw->yomasssaasmawcso("\147\x6c\x6f\x62\x61\x6c"))->ayuciigykaswwqeo("\167\x70\55\x74\151\156\171\155\143\x65")->ayuciigykaswwqeo("\152\x71\x75\x65\x72\x79"));
        goto uocqwqamsmykosmy;
        aukeeueesqyksqwu:
    }
    
    public function register($makuywykoiqicmym = [])
    {
        $this->segments = $this->sscegwueamckwmcy("{$this->aakmagwggmkoiiyu()}\137\x72\x65\147\x69\x73\x74\145\162\x5f\x73\150\x6f\162\164\143\x6f\144\145\163", $makuywykoiqicmym);
    }
    
    public function cisyiemkeykgkomc() : ?string
    {
        return parent::cisyiemkeykgkomc() . "\x5f\x73\150\x6f\162\164\143\x6f\x64\145";
    }
    
    public function qoqyomiqwooaeoiy() : bool
    {
        return parent::qoqyomiqwooaeoiy() && $this->uqwgsuysegkweago();
    }
}
