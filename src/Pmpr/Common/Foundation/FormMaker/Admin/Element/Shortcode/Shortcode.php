<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        $this->qcsmikeggeemccuu("\x69\156\151\x74", [$this, "\162\x65\x67\151\x73\x74\x65\x72"])->qcsmikeggeemccuu("\164\150\x65\x5f\143\x6f\156\164\x65\156\x74", [$this, "\x77\165\155\145\x65\151\167\x67\x79\x75\x6d\x6d\155\171\x79\x63"], 0)->qcsmikeggeemccuu("\155\145\x64\x69\x61\137\x62\165\164\x74\157\x6e\x73", [$this, "\x73\145\167\x71\163\x77\145\x67\143\x77\x79\167\141\x6d\x75\x77"], 20);
        parent::wigskegsqequoeks();
    }
    
    public function wumeeiwgyummmyyc($ewgwqamkygiqaawc)
    {
        goto uyaweouuukcayyki;
        rskioecskoesimmm:
        $ucccueqywigcukcc = sprintf("\57\74\x70\133\x5e\76\x5d\x2a\x3f\x3e\45\163\74\134\57\x70\x3e\x2f", $ucccueqywigcukcc);
        goto sgyqosasmwkkaicm;
        uyaweouuukcayyki:
        $ucccueqywigcukcc = get_shortcode_regex();
        goto rskioecskoesimmm;
        sgyqosasmwkkaicm:
        return preg_replace($ucccueqywigcukcc, "\133\x24\x31\44\x32\44\x33\44\x34\44\65\x24\x36\x24\67\x24\x38\135", $ewgwqamkygiqaawc);
        goto sooiqioysqysuqmc;
        sooiqioysqysuqmc:
    }
    
    public function gsesiocqciggmauo() : array
    {
        goto wsyqiqqugeikswyw;
        ucqcosmcaeqoqiik:
        ieuoqekamagwewua:
        goto yqgkaaakeeguqsoa;
        wsyqiqqugeikswyw:
        $oammesyieqmwuwyi = [];
        goto sasqcgyokocouous;
        sasqcgyokocouous:
        $wsqkgswwooewwekw = parent::gsesiocqciggmauo();
        goto imyyqsmeukmygqea;
        yqgkaaakeeguqsoa:
        return $oammesyieqmwuwyi;
        goto esgwmaommcoqgaqq;
        imyyqsmeukmygqea:
        foreach ($wsqkgswwooewwekw as $oceoauekaygmuoko) {
            goto yaoqsoaicwocoeum;
            meoyawcgmeswowic:
            $oceoauekaygmuoko->igmamuiesywmkgeu(__("\x49\x6e\x73\x65\x72\x74\x20\x53\x68\x6f\162\164\x63\x6f\144\x65", PR__CMN__FOUNDATION), ["\x63\154\141\163\x73" => "\x73\x68\x6f\x72\x74\143\x6f\x64\145\x2d\x62\x75\164\164\157\156\x2d\151\x6e\163\x65\x72\164"]);
            goto yqkkowqgkkoagyau;
            soaqqkyyqkggaqiq:
            if (!($ccamueccusigaaio === self::ALL || is_array($ccamueccusigaaio) && self::uqwgsuysegkweago($ccamueccusigaaio))) {
                goto gyyquueyoigmqqgi;
            }
            goto meoyawcgmeswowic;
            osmgkacsseggaeok:
            $ccamueccusigaaio = $oceoauekaygmuoko->squsacgomqgkakaw();
            goto soaqqkyyqkggaqiq;
            aaseiuggiycwiqaa:
            gyyquueyoigmqqgi:
            goto kmwewkusymggygku;
            yaoqsoaicwocoeum:
            if (!$oceoauekaygmuoko instanceof Segment) {
                goto uiwekeeeswqescmu;
            }
            goto osmgkacsseggaeok;
            yqkkowqgkkoagyau:
            $oammesyieqmwuwyi[$oceoauekaygmuoko->aakmagwggmkoiiyu()] = $oceoauekaygmuoko;
            goto aaseiuggiycwiqaa;
            kmwewkusymggygku:
            uiwekeeeswqescmu:
            goto wyecwskuasocyssk;
            wyecwskuasocyssk:
            ayackygkmucicasi:
            goto yomwykwgomcossok;
            yomwykwgomcossok:
        }
        goto ucqcosmcaeqoqiik;
        esgwmaommcoqgaqq:
    }
    
    public function sewqswegcwywamuw($igwkwmgowquoucyk)
    {
        goto ywescecsocscqiek;
        qkoiyqmiyqgggewm:
        ueqckqsoacegcogq:
        goto augqyewgugakswko;
        gouewaoykimcgakg:
        echo $this->cyeuiyggkcqmoecc();
        goto makcqoyaqeuqegso;
        makcqoyaqeuqegso:
        $this->ywmaqqqoiueymkyu(true);
        goto qkoiyqmiyqgggewm;
        ywescecsocscqiek:
        if (!($igwkwmgowquoucyk == "\143\x6f\x6e\164\145\x6e\x74" && $this->uqwgsuysegkweago() && !$this->gakuqssqwcuekqqi() && $this->skgwcckoyoqsascq())) {
            goto ueqckqsoacegcogq;
        }
        goto gouewaoykimcgakg;
        augqyewgugakswko:
    }
    
    public function cyeuiyggkcqmoecc() : string
    {
        return $this->iuygowkemiiwqmiw("\142\165\x74\164\157\x6e", ["\x74\x69\x74\x6c\x65" => $this->qcgakseyaikigqco(), "\x6e\141\x6d\145" => $this->cisyiemkeykgkomc()], ["\143\154\x61\x73\163" => self::class]);
    }
    
    public function uqwgsuysegkweago($ccamueccusigaaio = []) : bool
    {
        goto qwsikwwqgimcyuim;
        uocqwqamsmykosmy:
        suceoykiqcawgyee:
        goto meyykqkewoegmugo;
        meyykqkewoegmugo:
        return ManipulatePost::uqwgsuysegkweago($ccamueccusigaaio);
        goto asuksoocskiwciqc;
        cekgegesyoewqcis:
        $ccamueccusigaaio = ManipulatePost::mwoyqeeigwqoamiw();
        goto uocqwqamsmykosmy;
        qwsikwwqgimcyuim:
        if ($ccamueccusigaaio) {
            goto suceoykiqcawgyee;
        }
        goto cekgegesyoewqcis;
        asuksoocskiwciqc:
    }
    public function enqueue()
    {
        goto aukeeueesqyksqwu;
        vmikeaymiccuswas:
        global $shortcode_tags;
        goto qyykcmssmowcqqmu;
        qyykcmssmowcqqmu:
        $eygsasmqycagyayw->ikqyiskqaaymscgw("\163\x68\157\162\x74\143\x6f\144\x65", ["\x6e\x61\x6d\145\x73" => array_keys($shortcode_tags)]);
        goto wigkkwoicoeusyui;
        skcmyumokskqcckq:
        $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\163\x68\x6f\162\x74\143\157\x64\145", $eygsasmqycagyayw->get("\x73\150\157\162\164\x63\157\x64\145\56\x6a\x73"))->ayuciigykaswwqeo($eygsasmqycagyayw->yomasssaasmawcso("\147\154\x6f\x62\141\154"))->ayuciigykaswwqeo("\167\160\55\164\151\x6e\171\155\143\145")->ayuciigykaswwqeo("\152\x71\x75\145\x72\x79"));
        goto vmikeaymiccuswas;
        wigkkwoicoeusyui:
        parent::enqueue();
        goto uyiaigymeewauaku;
        aukeeueesqyksqwu:
        $eygsasmqycagyayw = FormMaker::symcgieuakksimmu()->miocmcoykayoyyau();
        goto skcmyumokskqcckq;
        uyiaigymeewauaku:
    }
    
    public function register($makuywykoiqicmym = [])
    {
        $this->segments = $this->sscegwueamckwmcy("{$this->aakmagwggmkoiiyu()}\x5f\x72\145\x67\151\x73\x74\x65\x72\137\x73\x68\157\x72\x74\x63\157\144\x65\x73", $makuywykoiqicmym);
    }
    
    public function cisyiemkeykgkomc() : ?string
    {
        return parent::cisyiemkeykgkomc() . "\x5f\163\150\157\162\x74\143\157\144\x65";
    }
    
    public function qoqyomiqwooaeoiy() : bool
    {
        return parent::qoqyomiqwooaeoiy() && $this->uqwgsuysegkweago();
    }
}
