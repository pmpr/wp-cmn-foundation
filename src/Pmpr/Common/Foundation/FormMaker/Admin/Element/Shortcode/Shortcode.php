<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        $this->qcsmikeggeemccuu("\x69\x6e\151\164", [$this, "\162\x65\x67\x69\163\x74\145\x72"])->qcsmikeggeemccuu("\x74\x68\145\137\143\x6f\156\x74\x65\x6e\164", [$this, "\167\165\x6d\x65\x65\x69\167\147\171\165\x6d\x6d\x6d\171\171\143"], 0)->qcsmikeggeemccuu("\x6d\x65\144\151\141\137\x62\x75\164\164\157\156\163", [$this, "\x73\x65\x77\161\163\x77\x65\147\x63\x77\171\x77\141\x6d\165\167"], 20);
        parent::wigskegsqequoeks();
    }
    
    public function wumeeiwgyummmyyc($ewgwqamkygiqaawc)
    {
        goto gqiusmcakwmqwqoe;
        cqwsyoowkeoomees:
        $ucccueqywigcukcc = sprintf("\x2f\x3c\160\x5b\x5e\x3e\135\x2a\77\76\45\x73\x3c\134\57\160\76\57", $ucccueqywigcukcc);
        goto uyaweouuukcayyki;
        gqiusmcakwmqwqoe:
        $ucccueqywigcukcc = get_shortcode_regex();
        goto cqwsyoowkeoomees;
        uyaweouuukcayyki:
        return preg_replace($ucccueqywigcukcc, "\x5b\x24\x31\44\62\x24\63\x24\64\x24\65\x24\x36\44\67\x24\70\x5d", $ewgwqamkygiqaawc);
        goto rskioecskoesimmm;
        rskioecskoesimmm:
    }
    
    public function gsesiocqciggmauo() : array
    {
        goto wyecwskuasocyssk;
        wyecwskuasocyssk:
        $oammesyieqmwuwyi = [];
        goto yomwykwgomcossok;
        imyyqsmeukmygqea:
        return $oammesyieqmwuwyi;
        goto ucqcosmcaeqoqiik;
        wsyqiqqugeikswyw:
        foreach ($wsqkgswwooewwekw as $oceoauekaygmuoko) {
            goto gyyquueyoigmqqgi;
            meoyawcgmeswowic:
            ieuoqekamagwewua:
            goto yqkkowqgkkoagyau;
            yaoqsoaicwocoeum:
            if (!($ccamueccusigaaio === self::ALL || is_array($ccamueccusigaaio) && self::uqwgsuysegkweago($ccamueccusigaaio))) {
                goto ieuoqekamagwewua;
            }
            goto osmgkacsseggaeok;
            osmgkacsseggaeok:
            $oceoauekaygmuoko->igmamuiesywmkgeu(__("\111\x6e\x73\145\x72\164\x20\x53\x68\x6f\x72\x74\x63\x6f\x64\x65", PR__CMN__FOUNDATION), ["\x63\154\x61\x73\x73" => "\x73\x68\x6f\162\164\143\x6f\x64\x65\x2d\x62\x75\x74\x74\157\156\55\x69\156\x73\145\x72\x74"]);
            goto soaqqkyyqkggaqiq;
            aaseiuggiycwiqaa:
            sooiqioysqysuqmc:
            goto kmwewkusymggygku;
            soaqqkyyqkggaqiq:
            $oammesyieqmwuwyi[$oceoauekaygmuoko->aakmagwggmkoiiyu()] = $oceoauekaygmuoko;
            goto meoyawcgmeswowic;
            yqkkowqgkkoagyau:
            ayackygkmucicasi:
            goto aaseiuggiycwiqaa;
            uiwekeeeswqescmu:
            $ccamueccusigaaio = $oceoauekaygmuoko->squsacgomqgkakaw();
            goto yaoqsoaicwocoeum;
            gyyquueyoigmqqgi:
            if (!$oceoauekaygmuoko instanceof Segment) {
                goto ayackygkmucicasi;
            }
            goto uiwekeeeswqescmu;
            kmwewkusymggygku:
        }
        goto sasqcgyokocouous;
        yomwykwgomcossok:
        $wsqkgswwooewwekw = parent::gsesiocqciggmauo();
        goto wsyqiqqugeikswyw;
        sasqcgyokocouous:
        sgyqosasmwkkaicm:
        goto imyyqsmeukmygqea;
        ucqcosmcaeqoqiik:
    }
    
    public function sewqswegcwywamuw($igwkwmgowquoucyk)
    {
        goto esgwmaommcoqgaqq;
        ywescecsocscqiek:
        $this->ywmaqqqoiueymkyu(true);
        goto gouewaoykimcgakg;
        gouewaoykimcgakg:
        yqgkaaakeeguqsoa:
        goto makcqoyaqeuqegso;
        ueqckqsoacegcogq:
        echo $this->cyeuiyggkcqmoecc();
        goto ywescecsocscqiek;
        esgwmaommcoqgaqq:
        if (!($igwkwmgowquoucyk == "\143\157\x6e\x74\x65\156\x74" && $this->uqwgsuysegkweago() && !$this->gakuqssqwcuekqqi() && $this->skgwcckoyoqsascq())) {
            goto yqgkaaakeeguqsoa;
        }
        goto ueqckqsoacegcogq;
        makcqoyaqeuqegso:
    }
    
    public function cyeuiyggkcqmoecc() : string
    {
        return $this->iuygowkemiiwqmiw("\142\165\x74\164\157\x6e", ["\x74\151\164\154\145" => $this->qcgakseyaikigqco(), "\x6e\x61\155\x65" => $this->cisyiemkeykgkomc()], ["\x63\x6c\141\x73\163" => self::class]);
    }
    
    public function uqwgsuysegkweago($ccamueccusigaaio = []) : bool
    {
        goto augqyewgugakswko;
        cekgegesyoewqcis:
        return ManipulatePost::uqwgsuysegkweago($ccamueccusigaaio);
        goto uocqwqamsmykosmy;
        qwsikwwqgimcyuim:
        qkoiyqmiyqgggewm:
        goto cekgegesyoewqcis;
        augqyewgugakswko:
        if ($ccamueccusigaaio) {
            goto qkoiyqmiyqgggewm;
        }
        goto suceoykiqcawgyee;
        suceoykiqcawgyee:
        $ccamueccusigaaio = ManipulatePost::mwoyqeeigwqoamiw();
        goto qwsikwwqgimcyuim;
        uocqwqamsmykosmy:
    }
    public function enqueue()
    {
        goto meyykqkewoegmugo;
        asuksoocskiwciqc:
        $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\163\x68\157\x72\164\143\157\144\x65", $eygsasmqycagyayw->get("\x73\x68\157\162\x74\x63\x6f\x64\145\x2e\152\x73"))->ayuciigykaswwqeo($eygsasmqycagyayw->yomasssaasmawcso("\x67\x6c\157\142\x61\x6c"))->ayuciigykaswwqeo("\x77\x70\55\164\x69\x6e\x79\x6d\x63\x65")->ayuciigykaswwqeo("\152\161\x75\145\x72\x79"));
        goto aukeeueesqyksqwu;
        skcmyumokskqcckq:
        $eygsasmqycagyayw->ikqyiskqaaymscgw("\x73\x68\157\x72\164\x63\x6f\x64\145", ["\156\x61\155\145\163" => array_keys($shortcode_tags)]);
        goto vmikeaymiccuswas;
        vmikeaymiccuswas:
        parent::enqueue();
        goto qyykcmssmowcqqmu;
        aukeeueesqyksqwu:
        global $shortcode_tags;
        goto skcmyumokskqcckq;
        meyykqkewoegmugo:
        $eygsasmqycagyayw = FormMaker::symcgieuakksimmu()->miocmcoykayoyyau();
        goto asuksoocskiwciqc;
        qyykcmssmowcqqmu:
    }
    
    public function register($makuywykoiqicmym = [])
    {
        $this->segments = $this->sscegwueamckwmcy("{$this->aakmagwggmkoiiyu()}\137\162\x65\147\x69\163\164\145\162\x5f\163\x68\x6f\162\164\143\x6f\144\145\163", $makuywykoiqicmym);
    }
    
    public function cisyiemkeykgkomc() : ?string
    {
        return parent::cisyiemkeykgkomc() . "\137\x73\x68\x6f\162\x74\x63\x6f\x64\145";
    }
    
    public function qoqyomiqwooaeoiy() : bool
    {
        return parent::qoqyomiqwooaeoiy() && $this->uqwgsuysegkweago();
    }
}
