<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        $this->qcsmikeggeemccuu("\x69\156\x69\x74", [$this, "\162\145\147\x69\x73\164\x65\x72"])->qcsmikeggeemccuu("\164\150\x65\137\x63\157\156\164\145\156\164", [$this, "\x77\165\x6d\145\x65\x69\x77\x67\171\165\155\155\x6d\171\x79\143"], 0)->qcsmikeggeemccuu("\155\x65\144\x69\x61\137\x62\165\164\x74\x6f\156\x73", [$this, "\163\145\167\161\x73\x77\x65\147\x63\167\x79\167\x61\x6d\x75\x77"], 20);
        parent::wigskegsqequoeks();
    }
    
    public function wumeeiwgyummmyyc($ewgwqamkygiqaawc)
    {
        goto cqwsyoowkeoomees;
        cqwsyoowkeoomees:
        $ucccueqywigcukcc = get_shortcode_regex();
        goto uyaweouuukcayyki;
        rskioecskoesimmm:
        return preg_replace($ucccueqywigcukcc, "\x5b\x24\x31\x24\62\x24\x33\44\64\x24\65\x24\66\44\67\x24\70\135", $ewgwqamkygiqaawc);
        goto sgyqosasmwkkaicm;
        uyaweouuukcayyki:
        $ucccueqywigcukcc = sprintf("\x2f\x3c\160\133\136\76\x5d\x2a\x3f\76\x25\x73\x3c\134\57\x70\76\x2f", $ucccueqywigcukcc);
        goto rskioecskoesimmm;
        sgyqosasmwkkaicm:
    }
    
    public function gsesiocqciggmauo() : array
    {
        goto yomwykwgomcossok;
        imyyqsmeukmygqea:
        sooiqioysqysuqmc:
        goto ucqcosmcaeqoqiik;
        sasqcgyokocouous:
        foreach ($wsqkgswwooewwekw as $oceoauekaygmuoko) {
            goto uiwekeeeswqescmu;
            uiwekeeeswqescmu:
            if (!$oceoauekaygmuoko instanceof Segment) {
                goto gyyquueyoigmqqgi;
            }
            goto yaoqsoaicwocoeum;
            yaoqsoaicwocoeum:
            $ccamueccusigaaio = $oceoauekaygmuoko->squsacgomqgkakaw();
            goto osmgkacsseggaeok;
            kmwewkusymggygku:
            ieuoqekamagwewua:
            goto wyecwskuasocyssk;
            aaseiuggiycwiqaa:
            gyyquueyoigmqqgi:
            goto kmwewkusymggygku;
            osmgkacsseggaeok:
            if (!($ccamueccusigaaio === self::ALL || is_array($ccamueccusigaaio) && self::uqwgsuysegkweago($ccamueccusigaaio))) {
                goto ayackygkmucicasi;
            }
            goto soaqqkyyqkggaqiq;
            meoyawcgmeswowic:
            $oammesyieqmwuwyi[$oceoauekaygmuoko->aakmagwggmkoiiyu()] = $oceoauekaygmuoko;
            goto yqkkowqgkkoagyau;
            yqkkowqgkkoagyau:
            ayackygkmucicasi:
            goto aaseiuggiycwiqaa;
            soaqqkyyqkggaqiq:
            $oceoauekaygmuoko->igmamuiesywmkgeu(__("\x49\156\x73\145\162\164\x20\x53\x68\x6f\162\164\x63\x6f\x64\145", PR__CMN__FOUNDATION), ["\143\154\x61\x73\x73" => "\163\150\157\162\x74\x63\x6f\x64\145\55\x62\165\164\x74\x6f\x6e\55\x69\x6e\x73\x65\x72\164"]);
            goto meoyawcgmeswowic;
            wyecwskuasocyssk:
        }
        goto imyyqsmeukmygqea;
        ucqcosmcaeqoqiik:
        return $oammesyieqmwuwyi;
        goto yqgkaaakeeguqsoa;
        wsyqiqqugeikswyw:
        $wsqkgswwooewwekw = parent::gsesiocqciggmauo();
        goto sasqcgyokocouous;
        yomwykwgomcossok:
        $oammesyieqmwuwyi = [];
        goto wsyqiqqugeikswyw;
        yqgkaaakeeguqsoa:
    }
    
    public function sewqswegcwywamuw($igwkwmgowquoucyk)
    {
        goto ueqckqsoacegcogq;
        ywescecsocscqiek:
        echo $this->cyeuiyggkcqmoecc();
        goto gouewaoykimcgakg;
        makcqoyaqeuqegso:
        esgwmaommcoqgaqq:
        goto qkoiyqmiyqgggewm;
        gouewaoykimcgakg:
        $this->ywmaqqqoiueymkyu(true);
        goto makcqoyaqeuqegso;
        ueqckqsoacegcogq:
        if (!($igwkwmgowquoucyk == "\143\157\156\x74\145\156\164" && $this->uqwgsuysegkweago() && !$this->gakuqssqwcuekqqi() && $this->skgwcckoyoqsascq())) {
            goto esgwmaommcoqgaqq;
        }
        goto ywescecsocscqiek;
        qkoiyqmiyqgggewm:
    }
    
    public function cyeuiyggkcqmoecc() : string
    {
        return $this->iuygowkemiiwqmiw("\142\165\164\164\x6f\156", ["\x74\151\164\154\145" => $this->qcgakseyaikigqco(), "\156\x61\x6d\x65" => $this->cisyiemkeykgkomc()], ["\143\x6c\141\163\163" => self::class]);
    }
    
    public function uqwgsuysegkweago($ccamueccusigaaio = []) : bool
    {
        goto suceoykiqcawgyee;
        cekgegesyoewqcis:
        augqyewgugakswko:
        goto uocqwqamsmykosmy;
        qwsikwwqgimcyuim:
        $ccamueccusigaaio = ManipulatePost::mwoyqeeigwqoamiw();
        goto cekgegesyoewqcis;
        suceoykiqcawgyee:
        if ($ccamueccusigaaio) {
            goto augqyewgugakswko;
        }
        goto qwsikwwqgimcyuim;
        uocqwqamsmykosmy:
        return ManipulatePost::uqwgsuysegkweago($ccamueccusigaaio);
        goto meyykqkewoegmugo;
        meyykqkewoegmugo:
    }
    public function enqueue()
    {
        goto asuksoocskiwciqc;
        aukeeueesqyksqwu:
        $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x73\150\x6f\162\x74\143\157\144\x65", $eygsasmqycagyayw->get("\163\x68\x6f\162\x74\143\157\144\x65\56\152\163"))->ayuciigykaswwqeo($eygsasmqycagyayw->yomasssaasmawcso("\x67\154\157\x62\141\x6c"))->ayuciigykaswwqeo("\x77\160\x2d\164\x69\x6e\171\x6d\143\x65")->ayuciigykaswwqeo("\x6a\x71\165\x65\162\171"));
        goto skcmyumokskqcckq;
        vmikeaymiccuswas:
        $eygsasmqycagyayw->ikqyiskqaaymscgw("\x73\x68\157\x72\164\143\157\x64\x65", ["\156\x61\155\145\x73" => array_keys($shortcode_tags)]);
        goto qyykcmssmowcqqmu;
        skcmyumokskqcckq:
        global $shortcode_tags;
        goto vmikeaymiccuswas;
        qyykcmssmowcqqmu:
        parent::enqueue();
        goto wigkkwoicoeusyui;
        asuksoocskiwciqc:
        $eygsasmqycagyayw = FormMaker::symcgieuakksimmu()->miocmcoykayoyyau();
        goto aukeeueesqyksqwu;
        wigkkwoicoeusyui:
    }
    
    public function register($makuywykoiqicmym = [])
    {
        $this->segments = $this->sscegwueamckwmcy("{$this->aakmagwggmkoiiyu()}\x5f\162\145\147\151\163\x74\x65\x72\137\x73\150\157\162\x74\143\x6f\144\x65\163", $makuywykoiqicmym);
    }
    
    public function cisyiemkeykgkomc() : ?string
    {
        return parent::cisyiemkeykgkomc() . "\x5f\163\150\x6f\162\x74\143\x6f\144\x65";
    }
    
    public function qoqyomiqwooaeoiy() : bool
    {
        return parent::qoqyomiqwooaeoiy() && $this->uqwgsuysegkweago();
    }
}
