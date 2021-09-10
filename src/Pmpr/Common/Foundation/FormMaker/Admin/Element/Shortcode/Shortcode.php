<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        $this->qcsmikeggeemccuu("\x69\156\x69\164", [$this, "\x72\145\147\151\x73\164\145\162"])->qcsmikeggeemccuu("\164\150\x65\137\143\157\x6e\164\145\156\x74", [$this, "\x77\x75\155\145\x65\x69\167\x67\x79\165\x6d\x6d\x6d\x79\171\x63"], 0)->qcsmikeggeemccuu("\x6d\145\x64\151\x61\x5f\x62\165\164\164\x6f\x6e\x73", [$this, "\x73\145\167\x71\x73\x77\145\x67\143\x77\171\167\141\155\x75\167"], 20);
        parent::wigskegsqequoeks();
    }
    
    public function wumeeiwgyummmyyc($ewgwqamkygiqaawc)
    {
        goto cqwsyoowkeoomees;
        cqwsyoowkeoomees:
        $ucccueqywigcukcc = get_shortcode_regex();
        goto uyaweouuukcayyki;
        uyaweouuukcayyki:
        $ucccueqywigcukcc = sprintf("\x2f\74\x70\133\x5e\x3e\x5d\x2a\x3f\x3e\45\163\74\134\57\x70\x3e\x2f", $ucccueqywigcukcc);
        goto rskioecskoesimmm;
        rskioecskoesimmm:
        return preg_replace($ucccueqywigcukcc, "\133\44\x31\44\62\x24\63\x24\64\x24\x35\44\66\x24\x37\x24\70\135", $ewgwqamkygiqaawc);
        goto sgyqosasmwkkaicm;
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
            yqkkowqgkkoagyau:
            ayackygkmucicasi:
            goto aaseiuggiycwiqaa;
            kmwewkusymggygku:
            ieuoqekamagwewua:
            goto wyecwskuasocyssk;
            soaqqkyyqkggaqiq:
            $oceoauekaygmuoko->igmamuiesywmkgeu(__("\x49\156\x73\145\162\x74\x20\x53\150\x6f\162\x74\143\157\144\145", PR__CMN__FOUNDATION), ["\143\x6c\x61\163\163" => "\163\x68\157\162\164\x63\157\x64\145\x2d\x62\x75\164\164\x6f\156\55\151\x6e\163\x65\x72\x74"]);
            goto meoyawcgmeswowic;
            meoyawcgmeswowic:
            $oammesyieqmwuwyi[$oceoauekaygmuoko->aakmagwggmkoiiyu()] = $oceoauekaygmuoko;
            goto yqkkowqgkkoagyau;
            yaoqsoaicwocoeum:
            $ccamueccusigaaio = $oceoauekaygmuoko->squsacgomqgkakaw();
            goto osmgkacsseggaeok;
            osmgkacsseggaeok:
            if (!($ccamueccusigaaio === self::ALL || is_array($ccamueccusigaaio) && self::uqwgsuysegkweago($ccamueccusigaaio))) {
                goto ayackygkmucicasi;
            }
            goto soaqqkyyqkggaqiq;
            aaseiuggiycwiqaa:
            gyyquueyoigmqqgi:
            goto kmwewkusymggygku;
            uiwekeeeswqescmu:
            if (!$oceoauekaygmuoko instanceof Segment) {
                goto gyyquueyoigmqqgi;
            }
            goto yaoqsoaicwocoeum;
            wyecwskuasocyssk:
        }
        goto imyyqsmeukmygqea;
        wsyqiqqugeikswyw:
        $wsqkgswwooewwekw = parent::gsesiocqciggmauo();
        goto sasqcgyokocouous;
        yomwykwgomcossok:
        $oammesyieqmwuwyi = [];
        goto wsyqiqqugeikswyw;
        ucqcosmcaeqoqiik:
        return $oammesyieqmwuwyi;
        goto yqgkaaakeeguqsoa;
        yqgkaaakeeguqsoa:
    }
    
    public function sewqswegcwywamuw($igwkwmgowquoucyk)
    {
        goto ueqckqsoacegcogq;
        ywescecsocscqiek:
        echo $this->cyeuiyggkcqmoecc();
        goto gouewaoykimcgakg;
        ueqckqsoacegcogq:
        if (!($igwkwmgowquoucyk == "\x63\157\x6e\x74\x65\x6e\x74" && $this->uqwgsuysegkweago() && !$this->gakuqssqwcuekqqi() && $this->skgwcckoyoqsascq())) {
            goto esgwmaommcoqgaqq;
        }
        goto ywescecsocscqiek;
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
        return $this->iuygowkemiiwqmiw("\x62\x75\164\x74\x6f\x6e", ["\164\151\164\154\145" => $this->qcgakseyaikigqco(), "\156\141\155\x65" => $this->cisyiemkeykgkomc()], ["\x63\154\141\x73\163" => self::class]);
    }
    
    public function uqwgsuysegkweago($ccamueccusigaaio = []) : bool
    {
        goto suceoykiqcawgyee;
        suceoykiqcawgyee:
        if ($ccamueccusigaaio) {
            goto augqyewgugakswko;
        }
        goto qwsikwwqgimcyuim;
        cekgegesyoewqcis:
        augqyewgugakswko:
        goto uocqwqamsmykosmy;
        uocqwqamsmykosmy:
        return ManipulatePost::uqwgsuysegkweago($ccamueccusigaaio);
        goto meyykqkewoegmugo;
        qwsikwwqgimcyuim:
        $ccamueccusigaaio = ManipulatePost::mwoyqeeigwqoamiw();
        goto cekgegesyoewqcis;
        meyykqkewoegmugo:
    }
    public function enqueue()
    {
        goto asuksoocskiwciqc;
        qyykcmssmowcqqmu:
        parent::enqueue();
        goto wigkkwoicoeusyui;
        skcmyumokskqcckq:
        global $shortcode_tags;
        goto vmikeaymiccuswas;
        aukeeueesqyksqwu:
        $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\163\x68\157\162\164\143\x6f\144\145", $eygsasmqycagyayw->get("\163\x68\157\x72\164\x63\157\144\x65\56\152\x73"))->ayuciigykaswwqeo($eygsasmqycagyayw->yomasssaasmawcso("\x67\x6c\x6f\142\141\x6c"))->ayuciigykaswwqeo("\167\x70\55\x74\151\x6e\171\155\x63\145")->ayuciigykaswwqeo("\x6a\x71\x75\x65\162\171"));
        goto skcmyumokskqcckq;
        asuksoocskiwciqc:
        $eygsasmqycagyayw = FormMaker::symcgieuakksimmu()->miocmcoykayoyyau();
        goto aukeeueesqyksqwu;
        vmikeaymiccuswas:
        $eygsasmqycagyayw->ikqyiskqaaymscgw("\x73\150\x6f\162\x74\x63\x6f\x64\145", ["\x6e\141\x6d\x65\163" => array_keys($shortcode_tags)]);
        goto qyykcmssmowcqqmu;
        wigkkwoicoeusyui:
    }
    
    public function register($makuywykoiqicmym = [])
    {
        $this->segments = $this->sscegwueamckwmcy("{$this->aakmagwggmkoiiyu()}\137\x72\x65\147\151\x73\164\145\x72\x5f\163\150\x6f\x72\164\143\157\x64\x65\x73", $makuywykoiqicmym);
    }
    
    public function cisyiemkeykgkomc() : ?string
    {
        return parent::cisyiemkeykgkomc() . "\137\x73\150\x6f\162\x74\x63\x6f\144\145";
    }
    
    public function qoqyomiqwooaeoiy() : bool
    {
        return parent::qoqyomiqwooaeoiy() && $this->uqwgsuysegkweago();
    }
}
