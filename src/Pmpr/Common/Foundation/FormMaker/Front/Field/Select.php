<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        parent::__construct("\x73\x65\x6c\145\143\x74", "\x73\145\x6c\x65\x63\164", $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
        $this->qigsyyqgewgskemg("\143\165\163\164\x6f\x6d\x2d\163\145\154\145\143\x74");
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
        goto sccsewaywmwqoikg;
        okuwiumssgqqaggm:
        foreach ($qiouiwasaauyaaue as $eqgoocgaqwqcimie => $omkysikckkcieckq) {
            goto gkqwqumumsggkisk;
            uuikuwqgwiqisaka:
            $wwgucssaecqekuek = ManipulateArray::get($omkysikckkcieckq, self::ATTRS, []);
            goto qayqmgmmymcquuag;
            smmoumcqseumumuy:
            $ymqmyyeuycgmigyo = $omkysikckkcieckq;
            goto cgkugammwaasskse;
            qmuwqwawwwwiaiyq:
            ygceqcgcqeugqsac:
            goto iigikgyaeuikoggm;
            uewyaeqgisiqwyus:
            $wwgucssaecqekuek["\x73\x65\x6c\x65\x63\164\145\x64"] = '';
            goto miqweqaaowcigwek;
            cgkugammwaasskse:
            raaikgmaamoasmka:
            goto uuikuwqgwiqisaka;
            miqweqaaowcigwek:
            ikkycqcyiskeyiwc:
            goto eaigiqugoyomawia;
            gkqwqumumsggkisk:
            if (is_string($omkysikckkcieckq)) {
                goto wkewwcyckywegkgu;
            }
            goto nvaqyysiqoawekeq;
            nvaqyysiqoawekeq:
            $ymqmyyeuycgmigyo = ManipulateArray::get($omkysikckkcieckq, self::NAME);
            goto qkmecaguyiccekqq;
            ekcociwqmcmuagmg:
            wkewwcyckywegkgu:
            goto smmoumcqseumumuy;
            cwuseuekgwsccecg:
            if (!($eqgoocgaqwqcimie == $this->qooeaookuemoqecm())) {
                goto ikkycqcyiskeyiwc;
            }
            goto uewyaeqgisiqwyus;
            qkmecaguyiccekqq:
            goto raaikgmaamoasmka;
            goto ekcociwqmcmuagmg;
            eaigiqugoyomawia:
            $ewgwqamkygiqaawc .= ManipulateHTML::qgsekwygcgawekeq("\x6f\160\164\151\x6f\x6e", $wwgucssaecqekuek, true, $ymqmyyeuycgmigyo);
            goto qmuwqwawwwwiaiyq;
            qayqmgmmymcquuag:
            $wwgucssaecqekuek = ManipulateFormat::omaawkkwwyesqwcc([self::VALUE => $eqgoocgaqwqcimie, "\x64\141\x74\x61\x2d\x6e\141\x6d\x65" => $ymqmyyeuycgmigyo], $wwgucssaecqekuek);
            goto cwuseuekgwsccecg;
            iigikgyaeuikoggm:
        }
        goto yiqyicewukgskccu;
        uqsggeawaemaocua:
        if (!(is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue)) {
            goto soqqkwceaykieigm;
        }
        goto okuwiumssgqqaggm;
        aygawequkeicqqkc:
        $qiouiwasaauyaaue = $this->gkwkqmwweiawigae();
        goto qyegguguqsoeccia;
        esoqgwkccuqwwiec:
        soqqkwceaykieigm:
        goto iwqyaqqqwsooywwu;
        gmossqyimoswkoms:
        $ewgwqamkygiqaawc .= ManipulateHTML::qgsekwygcgawekeq("\157\x70\x74\151\157\156", ["\144\151\x73\x61\142\x6c\x65\x64" => '', "\x73\145\154\145\143\164\145\x64" => '', self::VALUE => ''], true, $iwiewowoqmoekyqi);
        goto auqwakoacamemaaw;
        yiqyicewukgskccu:
        ayumqmewoimoeiwi:
        goto esoqgwkccuqwwiec;
        qyegguguqsoeccia:
        $iwiewowoqmoekyqi = $this->sqquuscwqowicoqm();
        goto oguoauieggcougge;
        sccsewaywmwqoikg:
        $ewgwqamkygiqaawc = '';
        goto aygawequkeicqqkc;
        oguoauieggcougge:
        if (!$iwiewowoqmoekyqi) {
            goto kgcygucmaeeaeoqw;
        }
        goto gmossqyimoswkoms;
        iwqyaqqqwsooywwu:
        return $ewgwqamkygiqaawc;
        goto ieckiiqswwmkuiey;
        auqwakoacamemaaw:
        kgcygucmaeeaeoqw:
        goto uqsggeawaemaocua;
        ieckiiqswwmkuiey:
    }
    
    public function kyiucygqsgequoys(string $iwiewowoqmoekyqi) : self
    {
        $this->placeholder = $iwiewowoqmoekyqi;
        return $this;
    }
    
    public function mswqgegakmgmewwq() : self
    {
        $this->qigsyyqgewgskemg("\x63\x75\x73\164\x6f\155\x2d\163\x65\154\x65\143\164\x2d\163\x6d")->qigsyyqgewgskemg("\x6c\x68\55\61");
        return $this;
    }
}
