<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        $this->qcsmikeggeemccuu("\151\156\151\x74", [$this, "\x72\145\x67\151\x73\x74\145\x72"])->qcsmikeggeemccuu("\164\150\x65\137\143\157\156\x74\x65\156\164", [$this, "\167\x75\155\x65\x65\x69\167\x67\x79\165\155\x6d\155\171\x79\143"], 0)->qcsmikeggeemccuu("\155\x65\144\x69\141\137\142\x75\x74\164\157\x6e\x73", [$this, "\x73\x65\167\161\x73\x77\145\147\x63\x77\171\x77\141\x6d\165\167"], 20);
        parent::wigskegsqequoeks();
    }
    
    public function wumeeiwgyummmyyc($ewgwqamkygiqaawc)
    {
        goto qesuygwuaaegeswm;
        qesuygwuaaegeswm:
        $ucccueqywigcukcc = get_shortcode_regex();
        goto ecqcyykogswwckcy;
        qmaiieksomkoyuyi:
        return preg_replace($ucccueqywigcukcc, "\x5b\44\x31\44\62\44\x33\x24\x34\44\65\44\x36\44\67\44\x38\135", $ewgwqamkygiqaawc);
        goto keqamwmqakacwwoe;
        ecqcyykogswwckcy:
        $ucccueqywigcukcc = sprintf("\57\74\x70\133\136\x3e\135\52\x3f\76\45\163\74\134\57\x70\x3e\x2f", $ucccueqywigcukcc);
        goto qmaiieksomkoyuyi;
        keqamwmqakacwwoe:
    }
    
    public function gsesiocqciggmauo() : array
    {
        goto okamwaeykoyomecq;
        cmociugasewqkuem:
        $wsqkgswwooewwekw = parent::gsesiocqciggmauo();
        goto uusmocykkkksqiua;
        wwmmyaugeaiumkiw:
        return $oammesyieqmwuwyi;
        goto mcsoqawmisuqokgy;
        yiamkiackwgqymyq:
        cqogucaumkswcmmi:
        goto wwmmyaugeaiumkiw;
        uusmocykkkksqiua:
        foreach ($wsqkgswwooewwekw as $oceoauekaygmuoko) {
            goto qguqwygiosouksua;
            gkqkqkyiikmyoyes:
            $ccamueccusigaaio = $oceoauekaygmuoko->squsacgomqgkakaw();
            goto iqwgsigqsoaqemoq;
            qguqwygiosouksua:
            if (!$oceoauekaygmuoko instanceof Segment) {
                goto oukumaiywisqysue;
            }
            goto gkqkqkyiikmyoyes;
            iqwgsigqsoaqemoq:
            if (!($ccamueccusigaaio === self::ALL || is_array($ccamueccusigaaio) && self::uqwgsuysegkweago($ccamueccusigaaio))) {
                goto ykkieooomgmyscgg;
            }
            goto mkamqcmusuweioak;
            aacasqsuuqoogeqi:
            oukumaiywisqysue:
            goto kwkymuwcawyykqmy;
            mkamqcmusuweioak:
            $oceoauekaygmuoko->igmamuiesywmkgeu(__("\x49\156\x73\145\x72\x74\x20\123\x68\157\x72\x74\x63\157\x64\145", PR__CMN__FOUNDATION), ["\x63\154\x61\x73\163" => "\x73\150\157\162\164\143\157\144\145\55\142\x75\164\164\x6f\156\55\151\x6e\x73\x65\x72\x74"]);
            goto iquummqymwyukwcq;
            iquummqymwyukwcq:
            $oammesyieqmwuwyi[$oceoauekaygmuoko->aakmagwggmkoiiyu()] = $oceoauekaygmuoko;
            goto wccsuuqokyomaoqs;
            kwkymuwcawyykqmy:
            aimekgqcsgskeiss:
            goto qyoggesicagmmmca;
            wccsuuqokyomaoqs:
            ykkieooomgmyscgg:
            goto aacasqsuuqoogeqi;
            qyoggesicagmmmca:
        }
        goto yiamkiackwgqymyq;
        okamwaeykoyomecq:
        $oammesyieqmwuwyi = [];
        goto cmociugasewqkuem;
        mcsoqawmisuqokgy:
    }
    
    public function sewqswegcwywamuw($igwkwmgowquoucyk)
    {
        goto qysqycokygquuggm;
        assygwiykikyqiko:
        echo $this->cyeuiyggkcqmoecc();
        goto mmsaugsyiwoeeook;
        mmsaugsyiwoeeook:
        $this->ywmaqqqoiueymkyu(true);
        goto seoiyskcwgmysyyu;
        qysqycokygquuggm:
        if (!($igwkwmgowquoucyk == "\x63\x6f\x6e\164\x65\x6e\x74" && $this->uqwgsuysegkweago() && !$this->gakuqssqwcuekqqi() && $this->skgwcckoyoqsascq())) {
            goto kcyqywycuysksaws;
        }
        goto assygwiykikyqiko;
        seoiyskcwgmysyyu:
        kcyqywycuysksaws:
        goto ckemesyoeaoqggmc;
        ckemesyoeaoqggmc:
    }
    
    public function cyeuiyggkcqmoecc() : string
    {
        return $this->iuygowkemiiwqmiw("\x62\165\x74\x74\x6f\x6e", ["\164\x69\x74\x6c\145" => $this->qcgakseyaikigqco(), "\x6e\x61\155\x65" => $this->cisyiemkeykgkomc()], ["\x63\x6c\141\163\163" => self::class]);
    }
    
    public function uqwgsuysegkweago($ccamueccusigaaio = []) : bool
    {
        goto cemgcsgywukgwumc;
        koqikcoqcoaguoou:
        uoaoeecwkiwcyocu:
        goto ukykouywmkccqeoq;
        omuwgeccqksimyey:
        $ccamueccusigaaio = ManipulatePost::mwoyqeeigwqoamiw();
        goto koqikcoqcoaguoou;
        cemgcsgywukgwumc:
        if ($ccamueccusigaaio) {
            goto uoaoeecwkiwcyocu;
        }
        goto omuwgeccqksimyey;
        ukykouywmkccqeoq:
        return ManipulatePost::uqwgsuysegkweago($ccamueccusigaaio);
        goto wyqgycaawqceccem;
        wyqgycaawqceccem:
    }
    public function enqueue()
    {
        goto ywkiskkeoqykoqaw;
        omqagaqgauuyyicw:
        global $shortcode_tags;
        goto eawqikuuwwqiawok;
        iaagwiqkugqsscgc:
        $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\163\150\x6f\x72\x74\x63\157\x64\145", $eygsasmqycagyayw->get("\163\x68\157\162\x74\143\x6f\144\x65\x2e\152\163"))->ayuciigykaswwqeo($eygsasmqycagyayw->yomasssaasmawcso("\147\154\x6f\x62\141\x6c"))->ayuciigykaswwqeo("\167\160\55\x74\151\x6e\171\x6d\x63\145")->ayuciigykaswwqeo("\x6a\161\165\x65\x72\171"));
        goto omqagaqgauuyyicw;
        eawqikuuwwqiawok:
        $eygsasmqycagyayw->ikqyiskqaaymscgw("\163\150\x6f\162\164\x63\157\144\145", ["\156\x61\x6d\145\163" => array_keys($shortcode_tags)]);
        goto skuqeisegcaaieqa;
        ywkiskkeoqykoqaw:
        $eygsasmqycagyayw = FormMaker::symcgieuakksimmu()->miocmcoykayoyyau();
        goto iaagwiqkugqsscgc;
        skuqeisegcaaieqa:
        parent::enqueue();
        goto eeoaoaugmmauawuu;
        eeoaoaugmmauawuu:
    }
    
    public function register($makuywykoiqicmym = [])
    {
        $this->segments = $this->sscegwueamckwmcy("{$this->aakmagwggmkoiiyu()}\x5f\162\x65\x67\151\163\164\145\162\137\x73\150\157\162\164\143\157\x64\x65\x73", $makuywykoiqicmym);
    }
    
    public function cisyiemkeykgkomc() : ?string
    {
        return parent::cisyiemkeykgkomc() . "\137\163\x68\x6f\162\164\x63\x6f\144\145";
    }
    
    public function qoqyomiqwooaeoiy() : bool
    {
        return parent::qoqyomiqwooaeoiy() && $this->uqwgsuysegkweago();
    }
}
