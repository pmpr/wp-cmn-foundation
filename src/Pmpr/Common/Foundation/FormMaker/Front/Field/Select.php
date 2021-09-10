<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        parent::__construct("\163\145\154\145\x63\x74", "\163\145\x6c\145\143\x74", $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
        $this->qigsyyqgewgskemg("\143\165\163\x74\x6f\x6d\x2d\x73\145\154\145\x63\x74");
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
        goto aygawequkeicqqkc;
        iwqyaqqqwsooywwu:
        sccsewaywmwqoikg:
        goto ieckiiqswwmkuiey;
        auqwakoacamemaaw:
        $ewgwqamkygiqaawc .= ManipulateHTML::qgsekwygcgawekeq("\x6f\160\164\x69\x6f\x6e", ["\x64\x69\163\x61\x62\x6c\x65\x64" => '', "\x73\145\154\145\143\164\x65\144" => '', self::VALUE => ''], true, $iwiewowoqmoekyqi);
        goto uqsggeawaemaocua;
        gmossqyimoswkoms:
        if (!$iwiewowoqmoekyqi) {
            goto ayumqmewoimoeiwi;
        }
        goto auqwakoacamemaaw;
        esoqgwkccuqwwiec:
        ygceqcgcqeugqsac:
        goto iwqyaqqqwsooywwu;
        aygawequkeicqqkc:
        $ewgwqamkygiqaawc = '';
        goto qyegguguqsoeccia;
        okuwiumssgqqaggm:
        if (!(is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue)) {
            goto sccsewaywmwqoikg;
        }
        goto yiqyicewukgskccu;
        ieckiiqswwmkuiey:
        return $ewgwqamkygiqaawc;
        goto ssoaykwaaysysgqi;
        qyegguguqsoeccia:
        $qiouiwasaauyaaue = $this->gkwkqmwweiawigae();
        goto oguoauieggcougge;
        oguoauieggcougge:
        $iwiewowoqmoekyqi = $this->sqquuscwqowicoqm();
        goto gmossqyimoswkoms;
        yiqyicewukgskccu:
        foreach ($qiouiwasaauyaaue as $eqgoocgaqwqcimie => $omkysikckkcieckq) {
            goto nvaqyysiqoawekeq;
            nvaqyysiqoawekeq:
            if (is_string($omkysikckkcieckq)) {
                goto raaikgmaamoasmka;
            }
            goto qkmecaguyiccekqq;
            cwuseuekgwsccecg:
            $wwgucssaecqekuek = ManipulateFormat::omaawkkwwyesqwcc([self::VALUE => $eqgoocgaqwqcimie, "\144\x61\164\x61\x2d\x6e\141\x6d\145" => $ymqmyyeuycgmigyo], $wwgucssaecqekuek);
            goto uewyaeqgisiqwyus;
            qmuwqwawwwwiaiyq:
            $ewgwqamkygiqaawc .= ManipulateHTML::qgsekwygcgawekeq("\157\160\x74\151\x6f\156", $wwgucssaecqekuek, true, $ymqmyyeuycgmigyo);
            goto iigikgyaeuikoggm;
            iigikgyaeuikoggm:
            wkewwcyckywegkgu:
            goto soqqkwceaykieigm;
            qkmecaguyiccekqq:
            $ymqmyyeuycgmigyo = ManipulateArray::get($omkysikckkcieckq, self::NAME);
            goto ekcociwqmcmuagmg;
            uuikuwqgwiqisaka:
            ikkycqcyiskeyiwc:
            goto qayqmgmmymcquuag;
            uewyaeqgisiqwyus:
            if (!($eqgoocgaqwqcimie == $this->qooeaookuemoqecm())) {
                goto gkqwqumumsggkisk;
            }
            goto miqweqaaowcigwek;
            smmoumcqseumumuy:
            raaikgmaamoasmka:
            goto cgkugammwaasskse;
            cgkugammwaasskse:
            $ymqmyyeuycgmigyo = $omkysikckkcieckq;
            goto uuikuwqgwiqisaka;
            miqweqaaowcigwek:
            $wwgucssaecqekuek["\163\x65\x6c\x65\143\x74\145\144"] = '';
            goto eaigiqugoyomawia;
            eaigiqugoyomawia:
            gkqwqumumsggkisk:
            goto qmuwqwawwwwiaiyq;
            qayqmgmmymcquuag:
            $wwgucssaecqekuek = ManipulateArray::get($omkysikckkcieckq, self::ATTRS, []);
            goto cwuseuekgwsccecg;
            ekcociwqmcmuagmg:
            goto ikkycqcyiskeyiwc;
            goto smmoumcqseumumuy;
            soqqkwceaykieigm:
        }
        goto esoqgwkccuqwwiec;
        uqsggeawaemaocua:
        ayumqmewoimoeiwi:
        goto okuwiumssgqqaggm;
        ssoaykwaaysysgqi:
    }
    
    public function kyiucygqsgequoys(string $iwiewowoqmoekyqi) : self
    {
        $this->placeholder = $iwiewowoqmoekyqi;
        return $this;
    }
    
    public function mswqgegakmgmewwq() : self
    {
        $this->qigsyyqgewgskemg("\143\165\163\164\157\x6d\x2d\163\x65\x6c\x65\x63\164\55\163\155")->qigsyyqgewgskemg("\154\150\55\x31");
        return $this;
    }
}
