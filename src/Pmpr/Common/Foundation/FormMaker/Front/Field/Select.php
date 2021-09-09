<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front\Field;

use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class Select extends OptionAwareField
{
    
    protected ?string $placeholder = '';
    
    public function __construct(?string $aokagokqyuysuksm, string $pkyyagewkiyckmwy = null, string $mkqqqewsokcswckc = null)
    {
        parent::__construct("\x73\145\x6c\x65\x63\x74", "\163\x65\x6c\145\x63\164", $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
        $this->qigsyyqgewgskemg("\x63\165\x73\x74\x6f\x6d\55\x73\x65\154\x65\143\164");
    }
    
    public function sqquuscwqowicoqm() : ?string
    {
        return $this->placeholder;
    }
    
    public function uikgwcuascgeissw() : ?string
    {
        $pkyyagewkiyckmwy = parent::uikgwcuascgeissw();
        return $pkyyagewkiyckmwy ? $pkyyagewkiyckmwy : $this->sqquuscwqowicoqm();
    }
    
    public function souwykwwmyygqyqi() : ?string
    {
        goto gmmoskogsamiimaw;
        wmqgyceaymweimmu:
        if (!$iwiewowoqmoekyqi) {
            goto qecgguuckuucaoyu;
        }
        goto yeqeyiiywssgsyou;
        mkcyockksuwmqyee:
        yiakeoiamgskcgwe:
        goto megeageomkioeoca;
        skeosquyqemagyii:
        $iwiewowoqmoekyqi = $this->sqquuscwqowicoqm();
        goto wmqgyceaymweimmu;
        guemiwyaaiokymkk:
        $qiouiwasaauyaaue = $this->gkwkqmwweiawigae();
        goto skeosquyqemagyii;
        uqwgiykoaeaaiayu:
        qecgguuckuucaoyu:
        goto mumskauyosuokigg;
        gmmoskogsamiimaw:
        $ewgwqamkygiqaawc = '';
        goto guemiwyaaiokymkk;
        mumskauyosuokigg:
        if (!(is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue)) {
            goto yiakeoiamgskcgwe;
        }
        goto yoscseoiqicoccku;
        yeqeyiiywssgsyou:
        $ewgwqamkygiqaawc .= ManipulateHTML::qgsekwygcgawekeq("\x6f\160\164\151\x6f\x6e", ["\x64\x69\163\141\x62\x6c\x65\x64" => '', "\x73\145\x6c\x65\x63\164\x65\x64" => '', self::VALUE => ''], true, $iwiewowoqmoekyqi);
        goto uqwgiykoaeaaiayu;
        megeageomkioeoca:
        return $ewgwqamkygiqaawc;
        goto oqswuukyqsoiwquo;
        yoscseoiqicoccku:
        foreach ($qiouiwasaauyaaue as $eqgoocgaqwqcimie => $omkysikckkcieckq) {
            goto saooicamakkcaiie;
            kakeaucaseukciea:
            $ewgwqamkygiqaawc .= ManipulateHTML::qgsekwygcgawekeq("\x6f\x70\x74\151\x6f\x6e", $wwgucssaecqekuek, true, $ymqmyyeuycgmigyo);
            goto qkuuooygeauqoqqm;
            iokasswuskcumqkc:
            qikgswsucicammsu:
            goto kakeaucaseukciea;
            qkuuooygeauqoqqm:
            oasgswewwmoqykoa:
            goto kuycusakouywkiiw;
            saooicamakkcaiie:
            if (is_string($omkysikckkcieckq)) {
                goto yciyysmucecskimo;
            }
            goto iksmqqwswkyygmyw;
            oqysqmwmogqewsgo:
            $wwgucssaecqekuek = ManipulateArray::get($omkysikckkcieckq, self::ATTRS, []);
            goto iegeiekyeqckmise;
            gmomkuwegquasyku:
            goto cuuaywiycieugooq;
            goto eswsgqmeomgauiew;
            iksmqqwswkyygmyw:
            $ymqmyyeuycgmigyo = ManipulateArray::get($omkysikckkcieckq, self::NAME);
            goto gmomkuwegquasyku;
            ugwqyegaaskmucay:
            $ymqmyyeuycgmigyo = $omkysikckkcieckq;
            goto wcmeymioukakwmii;
            iqsqgccwyeomyawk:
            $wwgucssaecqekuek["\163\x65\154\x65\143\164\x65\x64"] = '';
            goto iokasswuskcumqkc;
            wcmeymioukakwmii:
            cuuaywiycieugooq:
            goto oqysqmwmogqewsgo;
            iegeiekyeqckmise:
            $wwgucssaecqekuek = ManipulateFormat::omaawkkwwyesqwcc([self::VALUE => $eqgoocgaqwqcimie, "\x64\x61\164\141\x2d\x6e\141\x6d\x65" => $ymqmyyeuycgmigyo], $wwgucssaecqekuek);
            goto egsqoeumwyykkuuy;
            egsqoeumwyykkuuy:
            if (!($eqgoocgaqwqcimie == $this->qooeaookuemoqecm())) {
                goto qikgswsucicammsu;
            }
            goto iqsqgccwyeomyawk;
            eswsgqmeomgauiew:
            yciyysmucecskimo:
            goto ugwqyegaaskmucay;
            kuycusakouywkiiw:
        }
        goto syeissweoweigoug;
        syeissweoweigoug:
        wsmigmawyoasesuw:
        goto mkcyockksuwmqyee;
        oqswuukyqsoiwquo:
    }
    
    public function kyiucygqsgequoys(string $iwiewowoqmoekyqi) : self
    {
        $this->placeholder = $iwiewowoqmoekyqi;
        return $this;
    }
    
    public function mswqgegakmgmewwq() : self
    {
        $this->qigsyyqgewgskemg("\x63\x75\x73\x74\x6f\x6d\x2d\163\145\x6c\145\143\x74\x2d\163\x6d")->qigsyyqgewgskemg("\x6c\150\55\61");
        return $this;
    }
}
