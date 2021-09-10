<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        $this->qcsmikeggeemccuu("\151\156\x69\x74", [$this, "\x72\x65\x67\x69\163\x74\145\162"])->qcsmikeggeemccuu("\x74\150\x65\x5f\143\157\x6e\x74\145\x6e\164", [$this, "\167\165\155\x65\145\x69\167\147\x79\165\x6d\155\x6d\171\x79\143"], 0)->qcsmikeggeemccuu("\x6d\x65\144\x69\x61\137\142\165\x74\164\157\x6e\x73", [$this, "\163\145\x77\161\x73\x77\145\x67\x63\167\171\167\141\x6d\x75\x77"], 20);
        parent::wigskegsqequoeks();
    }
    
    public function wumeeiwgyummmyyc($ewgwqamkygiqaawc)
    {
        goto gqiusmcakwmqwqoe;
        cqwsyoowkeoomees:
        $ucccueqywigcukcc = sprintf("\57\74\x70\133\136\76\135\x2a\x3f\x3e\x25\x73\x3c\134\x2f\160\76\57", $ucccueqywigcukcc);
        goto uyaweouuukcayyki;
        uyaweouuukcayyki:
        return preg_replace($ucccueqywigcukcc, "\x5b\44\x31\44\x32\x24\x33\44\64\44\x35\44\66\x24\x37\x24\70\135", $ewgwqamkygiqaawc);
        goto rskioecskoesimmm;
        gqiusmcakwmqwqoe:
        $ucccueqywigcukcc = get_shortcode_regex();
        goto cqwsyoowkeoomees;
        rskioecskoesimmm:
    }
    
    public function gsesiocqciggmauo() : array
    {
        goto wyecwskuasocyssk;
        wyecwskuasocyssk:
        $oammesyieqmwuwyi = [];
        goto yomwykwgomcossok;
        sasqcgyokocouous:
        sgyqosasmwkkaicm:
        goto imyyqsmeukmygqea;
        yomwykwgomcossok:
        $wsqkgswwooewwekw = parent::gsesiocqciggmauo();
        goto wsyqiqqugeikswyw;
        wsyqiqqugeikswyw:
        foreach ($wsqkgswwooewwekw as $oceoauekaygmuoko) {
            goto gyyquueyoigmqqgi;
            meoyawcgmeswowic:
            ieuoqekamagwewua:
            goto yqkkowqgkkoagyau;
            soaqqkyyqkggaqiq:
            $oammesyieqmwuwyi[$oceoauekaygmuoko->aakmagwggmkoiiyu()] = $oceoauekaygmuoko;
            goto meoyawcgmeswowic;
            osmgkacsseggaeok:
            $oceoauekaygmuoko->igmamuiesywmkgeu(__("\111\x6e\x73\x65\162\x74\40\x53\150\157\x72\x74\x63\x6f\144\145", PR__CMN__FOUNDATION), ["\x63\154\x61\163\163" => "\163\x68\157\x72\x74\x63\x6f\144\x65\55\x62\x75\164\164\x6f\156\55\151\156\x73\145\x72\164"]);
            goto soaqqkyyqkggaqiq;
            gyyquueyoigmqqgi:
            if (!$oceoauekaygmuoko instanceof Segment) {
                goto ayackygkmucicasi;
            }
            goto uiwekeeeswqescmu;
            yqkkowqgkkoagyau:
            ayackygkmucicasi:
            goto aaseiuggiycwiqaa;
            aaseiuggiycwiqaa:
            sooiqioysqysuqmc:
            goto kmwewkusymggygku;
            yaoqsoaicwocoeum:
            if (!($ccamueccusigaaio === self::ALL || is_array($ccamueccusigaaio) && self::uqwgsuysegkweago($ccamueccusigaaio))) {
                goto ieuoqekamagwewua;
            }
            goto osmgkacsseggaeok;
            uiwekeeeswqescmu:
            $ccamueccusigaaio = $oceoauekaygmuoko->squsacgomqgkakaw();
            goto yaoqsoaicwocoeum;
            kmwewkusymggygku:
        }
        goto sasqcgyokocouous;
        imyyqsmeukmygqea:
        return $oammesyieqmwuwyi;
        goto ucqcosmcaeqoqiik;
        ucqcosmcaeqoqiik:
    }
    
    public function sewqswegcwywamuw($igwkwmgowquoucyk)
    {
        goto esgwmaommcoqgaqq;
        ueqckqsoacegcogq:
        echo $this->cyeuiyggkcqmoecc();
        goto ywescecsocscqiek;
        esgwmaommcoqgaqq:
        if (!($igwkwmgowquoucyk == "\143\x6f\156\x74\145\x6e\164" && $this->uqwgsuysegkweago() && !$this->gakuqssqwcuekqqi() && $this->skgwcckoyoqsascq())) {
            goto yqgkaaakeeguqsoa;
        }
        goto ueqckqsoacegcogq;
        gouewaoykimcgakg:
        yqgkaaakeeguqsoa:
        goto makcqoyaqeuqegso;
        ywescecsocscqiek:
        $this->ywmaqqqoiueymkyu(true);
        goto gouewaoykimcgakg;
        makcqoyaqeuqegso:
    }
    
    public function cyeuiyggkcqmoecc() : string
    {
        return $this->iuygowkemiiwqmiw("\142\x75\x74\x74\x6f\156", ["\x74\x69\x74\154\145" => $this->qcgakseyaikigqco(), "\156\x61\x6d\145" => $this->cisyiemkeykgkomc()], ["\143\x6c\141\163\163" => self::class]);
    }
    
    public function uqwgsuysegkweago($ccamueccusigaaio = []) : bool
    {
        goto augqyewgugakswko;
        cekgegesyoewqcis:
        return ManipulatePost::uqwgsuysegkweago($ccamueccusigaaio);
        goto uocqwqamsmykosmy;
        augqyewgugakswko:
        if ($ccamueccusigaaio) {
            goto qkoiyqmiyqgggewm;
        }
        goto suceoykiqcawgyee;
        suceoykiqcawgyee:
        $ccamueccusigaaio = ManipulatePost::mwoyqeeigwqoamiw();
        goto qwsikwwqgimcyuim;
        qwsikwwqgimcyuim:
        qkoiyqmiyqgggewm:
        goto cekgegesyoewqcis;
        uocqwqamsmykosmy:
    }
    public function enqueue()
    {
        goto meyykqkewoegmugo;
        skcmyumokskqcckq:
        $eygsasmqycagyayw->ikqyiskqaaymscgw("\163\x68\157\162\x74\143\157\x64\145", ["\x6e\141\x6d\145\x73" => array_keys($shortcode_tags)]);
        goto vmikeaymiccuswas;
        asuksoocskiwciqc:
        $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\163\x68\x6f\162\164\143\157\144\145", $eygsasmqycagyayw->get("\163\150\x6f\162\164\143\x6f\144\x65\56\152\x73"))->ayuciigykaswwqeo($eygsasmqycagyayw->yomasssaasmawcso("\x67\154\157\x62\x61\154"))->ayuciigykaswwqeo("\167\x70\x2d\164\151\156\171\155\x63\145")->ayuciigykaswwqeo("\152\x71\x75\145\x72\x79"));
        goto aukeeueesqyksqwu;
        meyykqkewoegmugo:
        $eygsasmqycagyayw = FormMaker::symcgieuakksimmu()->miocmcoykayoyyau();
        goto asuksoocskiwciqc;
        vmikeaymiccuswas:
        parent::enqueue();
        goto qyykcmssmowcqqmu;
        aukeeueesqyksqwu:
        global $shortcode_tags;
        goto skcmyumokskqcckq;
        qyykcmssmowcqqmu:
    }
    
    public function register($makuywykoiqicmym = [])
    {
        $this->segments = $this->sscegwueamckwmcy("{$this->aakmagwggmkoiiyu()}\137\162\x65\x67\x69\x73\x74\x65\x72\x5f\x73\150\x6f\x72\x74\x63\x6f\x64\145\x73", $makuywykoiqicmym);
    }
    
    public function cisyiemkeykgkomc() : ?string
    {
        return parent::cisyiemkeykgkomc() . "\x5f\163\150\157\x72\164\143\157\144\x65";
    }
    
    public function qoqyomiqwooaeoiy() : bool
    {
        return parent::qoqyomiqwooaeoiy() && $this->uqwgsuysegkweago();
    }
}
