<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        parent::__construct("\163\145\x6c\145\x63\164", "\x73\x65\154\x65\x63\164", $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
        $this->qigsyyqgewgskemg("\x63\x75\163\x74\157\155\55\163\x65\154\x65\143\164");
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
        oguoauieggcougge:
        $iwiewowoqmoekyqi = $this->sqquuscwqowicoqm();
        goto gmossqyimoswkoms;
        aygawequkeicqqkc:
        $ewgwqamkygiqaawc = '';
        goto qyegguguqsoeccia;
        esoqgwkccuqwwiec:
        ygceqcgcqeugqsac:
        goto iwqyaqqqwsooywwu;
        uqsggeawaemaocua:
        ayumqmewoimoeiwi:
        goto okuwiumssgqqaggm;
        ieckiiqswwmkuiey:
        return $ewgwqamkygiqaawc;
        goto ssoaykwaaysysgqi;
        qyegguguqsoeccia:
        $qiouiwasaauyaaue = $this->gkwkqmwweiawigae();
        goto oguoauieggcougge;
        auqwakoacamemaaw:
        $ewgwqamkygiqaawc .= ManipulateHTML::qgsekwygcgawekeq("\157\160\164\151\x6f\x6e", ["\x64\x69\x73\x61\142\154\x65\144" => '', "\x73\x65\154\145\143\164\x65\x64" => '', self::VALUE => ''], true, $iwiewowoqmoekyqi);
        goto uqsggeawaemaocua;
        yiqyicewukgskccu:
        foreach ($qiouiwasaauyaaue as $eqgoocgaqwqcimie => $omkysikckkcieckq) {
            goto nvaqyysiqoawekeq;
            smmoumcqseumumuy:
            raaikgmaamoasmka:
            goto cgkugammwaasskse;
            nvaqyysiqoawekeq:
            if (is_string($omkysikckkcieckq)) {
                goto raaikgmaamoasmka;
            }
            goto qkmecaguyiccekqq;
            qkmecaguyiccekqq:
            $ymqmyyeuycgmigyo = ManipulateArray::get($omkysikckkcieckq, self::NAME);
            goto ekcociwqmcmuagmg;
            eaigiqugoyomawia:
            gkqwqumumsggkisk:
            goto qmuwqwawwwwiaiyq;
            qayqmgmmymcquuag:
            $wwgucssaecqekuek = ManipulateArray::get($omkysikckkcieckq, self::ATTRS, []);
            goto cwuseuekgwsccecg;
            qmuwqwawwwwiaiyq:
            $ewgwqamkygiqaawc .= ManipulateHTML::qgsekwygcgawekeq("\x6f\x70\164\x69\157\156", $wwgucssaecqekuek, true, $ymqmyyeuycgmigyo);
            goto iigikgyaeuikoggm;
            uuikuwqgwiqisaka:
            ikkycqcyiskeyiwc:
            goto qayqmgmmymcquuag;
            uewyaeqgisiqwyus:
            if (!($eqgoocgaqwqcimie == $this->qooeaookuemoqecm())) {
                goto gkqwqumumsggkisk;
            }
            goto miqweqaaowcigwek;
            iigikgyaeuikoggm:
            wkewwcyckywegkgu:
            goto soqqkwceaykieigm;
            ekcociwqmcmuagmg:
            goto ikkycqcyiskeyiwc;
            goto smmoumcqseumumuy;
            cwuseuekgwsccecg:
            $wwgucssaecqekuek = ManipulateFormat::omaawkkwwyesqwcc([self::VALUE => $eqgoocgaqwqcimie, "\x64\141\164\x61\x2d\x6e\x61\x6d\145" => $ymqmyyeuycgmigyo], $wwgucssaecqekuek);
            goto uewyaeqgisiqwyus;
            miqweqaaowcigwek:
            $wwgucssaecqekuek["\x73\x65\154\145\143\164\145\144"] = '';
            goto eaigiqugoyomawia;
            cgkugammwaasskse:
            $ymqmyyeuycgmigyo = $omkysikckkcieckq;
            goto uuikuwqgwiqisaka;
            soqqkwceaykieigm:
        }
        goto esoqgwkccuqwwiec;
        okuwiumssgqqaggm:
        if (!(is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue)) {
            goto sccsewaywmwqoikg;
        }
        goto yiqyicewukgskccu;
        gmossqyimoswkoms:
        if (!$iwiewowoqmoekyqi) {
            goto ayumqmewoimoeiwi;
        }
        goto auqwakoacamemaaw;
        iwqyaqqqwsooywwu:
        sccsewaywmwqoikg:
        goto ieckiiqswwmkuiey;
        ssoaykwaaysysgqi:
    }
    
    public function kyiucygqsgequoys(string $iwiewowoqmoekyqi) : self
    {
        $this->placeholder = $iwiewowoqmoekyqi;
        return $this;
    }
    
    public function mswqgegakmgmewwq() : self
    {
        $this->qigsyyqgewgskemg("\143\165\x73\x74\157\x6d\x2d\x73\x65\154\x65\x63\164\55\x73\x6d")->qigsyyqgewgskemg("\154\150\55\x31");
        return $this;
    }
}
