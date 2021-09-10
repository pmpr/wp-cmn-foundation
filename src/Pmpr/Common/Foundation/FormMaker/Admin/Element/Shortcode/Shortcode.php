<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        $this->qcsmikeggeemccuu("\151\156\151\x74", [$this, "\x72\145\147\x69\x73\164\145\162"])->qcsmikeggeemccuu("\164\x68\145\x5f\x63\x6f\x6e\x74\x65\156\x74", [$this, "\167\165\155\x65\145\x69\167\147\x79\x75\155\155\155\171\x79\143"], 0)->qcsmikeggeemccuu("\x6d\145\x64\151\141\137\x62\165\164\x74\157\156\x73", [$this, "\163\145\x77\x71\163\167\145\x67\x63\167\171\167\x61\155\x75\167"], 20);
        parent::wigskegsqequoeks();
    }
    
    public function wumeeiwgyummmyyc($ewgwqamkygiqaawc)
    {
        goto cqwsyoowkeoomees;
        cqwsyoowkeoomees:
        $ucccueqywigcukcc = get_shortcode_regex();
        goto uyaweouuukcayyki;
        uyaweouuukcayyki:
        $ucccueqywigcukcc = sprintf("\x2f\74\160\x5b\136\76\x5d\x2a\77\x3e\45\163\x3c\x5c\57\160\x3e\x2f", $ucccueqywigcukcc);
        goto rskioecskoesimmm;
        rskioecskoesimmm:
        return preg_replace($ucccueqywigcukcc, "\133\x24\61\44\x32\x24\x33\44\64\44\65\x24\66\x24\67\44\70\x5d", $ewgwqamkygiqaawc);
        goto sgyqosasmwkkaicm;
        sgyqosasmwkkaicm:
    }
    
    public function gsesiocqciggmauo() : array
    {
        goto yomwykwgomcossok;
        sasqcgyokocouous:
        foreach ($wsqkgswwooewwekw as $oceoauekaygmuoko) {
            goto uiwekeeeswqescmu;
            yaoqsoaicwocoeum:
            $ccamueccusigaaio = $oceoauekaygmuoko->squsacgomqgkakaw();
            goto osmgkacsseggaeok;
            uiwekeeeswqescmu:
            if (!$oceoauekaygmuoko instanceof Segment) {
                goto gyyquueyoigmqqgi;
            }
            goto yaoqsoaicwocoeum;
            aaseiuggiycwiqaa:
            gyyquueyoigmqqgi:
            goto kmwewkusymggygku;
            yqkkowqgkkoagyau:
            ayackygkmucicasi:
            goto aaseiuggiycwiqaa;
            meoyawcgmeswowic:
            $oammesyieqmwuwyi[$oceoauekaygmuoko->aakmagwggmkoiiyu()] = $oceoauekaygmuoko;
            goto yqkkowqgkkoagyau;
            kmwewkusymggygku:
            ieuoqekamagwewua:
            goto wyecwskuasocyssk;
            soaqqkyyqkggaqiq:
            $oceoauekaygmuoko->igmamuiesywmkgeu(__("\111\156\163\x65\x72\x74\x20\x53\x68\x6f\x72\164\143\157\x64\145", PR__CMN__FOUNDATION), ["\143\x6c\x61\163\x73" => "\x73\150\157\x72\x74\x63\157\144\x65\55\x62\x75\164\x74\x6f\x6e\x2d\x69\x6e\163\x65\162\164"]);
            goto meoyawcgmeswowic;
            osmgkacsseggaeok:
            if (!($ccamueccusigaaio === self::ALL || is_array($ccamueccusigaaio) && self::uqwgsuysegkweago($ccamueccusigaaio))) {
                goto ayackygkmucicasi;
            }
            goto soaqqkyyqkggaqiq;
            wyecwskuasocyssk:
        }
        goto imyyqsmeukmygqea;
        ucqcosmcaeqoqiik:
        return $oammesyieqmwuwyi;
        goto yqgkaaakeeguqsoa;
        wsyqiqqugeikswyw:
        $wsqkgswwooewwekw = parent::gsesiocqciggmauo();
        goto sasqcgyokocouous;
        imyyqsmeukmygqea:
        sooiqioysqysuqmc:
        goto ucqcosmcaeqoqiik;
        yomwykwgomcossok:
        $oammesyieqmwuwyi = [];
        goto wsyqiqqugeikswyw;
        yqgkaaakeeguqsoa:
    }
    
    public function sewqswegcwywamuw($igwkwmgowquoucyk)
    {
        goto ueqckqsoacegcogq;
        ueqckqsoacegcogq:
        if (!($igwkwmgowquoucyk == "\143\157\156\x74\145\x6e\x74" && $this->uqwgsuysegkweago() && !$this->gakuqssqwcuekqqi() && $this->skgwcckoyoqsascq())) {
            goto esgwmaommcoqgaqq;
        }
        goto ywescecsocscqiek;
        ywescecsocscqiek:
        echo $this->cyeuiyggkcqmoecc();
        goto gouewaoykimcgakg;
        gouewaoykimcgakg:
        $this->ywmaqqqoiueymkyu(true);
        goto makcqoyaqeuqegso;
        makcqoyaqeuqegso:
        esgwmaommcoqgaqq:
        goto qkoiyqmiyqgggewm;
        qkoiyqmiyqgggewm:
    }
    
    public function cyeuiyggkcqmoecc() : string
    {
        return $this->iuygowkemiiwqmiw("\142\165\x74\164\157\156", ["\164\151\164\x6c\x65" => $this->qcgakseyaikigqco(), "\156\x61\x6d\145" => $this->cisyiemkeykgkomc()], ["\x63\x6c\x61\x73\x73" => self::class]);
    }
    
    public function uqwgsuysegkweago($ccamueccusigaaio = []) : bool
    {
        goto suceoykiqcawgyee;
        uocqwqamsmykosmy:
        return ManipulatePost::uqwgsuysegkweago($ccamueccusigaaio);
        goto meyykqkewoegmugo;
        qwsikwwqgimcyuim:
        $ccamueccusigaaio = ManipulatePost::mwoyqeeigwqoamiw();
        goto cekgegesyoewqcis;
        cekgegesyoewqcis:
        augqyewgugakswko:
        goto uocqwqamsmykosmy;
        suceoykiqcawgyee:
        if ($ccamueccusigaaio) {
            goto augqyewgugakswko;
        }
        goto qwsikwwqgimcyuim;
        meyykqkewoegmugo:
    }
    public function enqueue()
    {
        goto asuksoocskiwciqc;
        skcmyumokskqcckq:
        global $shortcode_tags;
        goto vmikeaymiccuswas;
        asuksoocskiwciqc:
        $eygsasmqycagyayw = FormMaker::symcgieuakksimmu()->miocmcoykayoyyau();
        goto aukeeueesqyksqwu;
        vmikeaymiccuswas:
        $eygsasmqycagyayw->ikqyiskqaaymscgw("\163\x68\157\162\164\143\157\144\x65", ["\x6e\141\x6d\x65\x73" => array_keys($shortcode_tags)]);
        goto qyykcmssmowcqqmu;
        aukeeueesqyksqwu:
        $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\163\150\x6f\x72\164\143\x6f\144\x65", $eygsasmqycagyayw->get("\x73\150\157\x72\164\143\x6f\144\x65\56\152\163"))->ayuciigykaswwqeo($eygsasmqycagyayw->yomasssaasmawcso("\147\154\157\142\x61\154"))->ayuciigykaswwqeo("\167\160\x2d\x74\151\156\x79\x6d\x63\x65")->ayuciigykaswwqeo("\152\x71\x75\x65\x72\171"));
        goto skcmyumokskqcckq;
        qyykcmssmowcqqmu:
        parent::enqueue();
        goto wigkkwoicoeusyui;
        wigkkwoicoeusyui:
    }
    
    public function register($makuywykoiqicmym = [])
    {
        $this->segments = $this->sscegwueamckwmcy("{$this->aakmagwggmkoiiyu()}\137\x72\x65\x67\x69\x73\164\145\162\x5f\x73\x68\157\162\x74\x63\157\144\145\163", $makuywykoiqicmym);
    }
    
    public function cisyiemkeykgkomc() : ?string
    {
        return parent::cisyiemkeykgkomc() . "\x5f\163\x68\157\x72\x74\143\x6f\144\145";
    }
    
    public function qoqyomiqwooaeoiy() : bool
    {
        return parent::qoqyomiqwooaeoiy() && $this->uqwgsuysegkweago();
    }
}
