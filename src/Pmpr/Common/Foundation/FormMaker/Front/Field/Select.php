<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        parent::__construct("\x73\145\x6c\x65\x63\164", "\163\145\154\145\x63\x74", $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
        $this->qigsyyqgewgskemg("\x63\x75\x73\164\157\x6d\x2d\163\x65\154\145\143\x74");
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
        uqsggeawaemaocua:
        if (!(is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue)) {
            goto soqqkwceaykieigm;
        }
        goto okuwiumssgqqaggm;
        yiqyicewukgskccu:
        ayumqmewoimoeiwi:
        goto esoqgwkccuqwwiec;
        aygawequkeicqqkc:
        $qiouiwasaauyaaue = $this->gkwkqmwweiawigae();
        goto qyegguguqsoeccia;
        auqwakoacamemaaw:
        kgcygucmaeeaeoqw:
        goto uqsggeawaemaocua;
        gmossqyimoswkoms:
        $ewgwqamkygiqaawc .= ManipulateHTML::qgsekwygcgawekeq("\157\x70\x74\x69\157\156", ["\144\151\x73\141\142\154\x65\x64" => '', "\163\145\x6c\x65\x63\x74\145\144" => '', self::VALUE => ''], true, $iwiewowoqmoekyqi);
        goto auqwakoacamemaaw;
        qyegguguqsoeccia:
        $iwiewowoqmoekyqi = $this->sqquuscwqowicoqm();
        goto oguoauieggcougge;
        oguoauieggcougge:
        if (!$iwiewowoqmoekyqi) {
            goto kgcygucmaeeaeoqw;
        }
        goto gmossqyimoswkoms;
        iwqyaqqqwsooywwu:
        return $ewgwqamkygiqaawc;
        goto ieckiiqswwmkuiey;
        okuwiumssgqqaggm:
        foreach ($qiouiwasaauyaaue as $eqgoocgaqwqcimie => $omkysikckkcieckq) {
            goto gkqwqumumsggkisk;
            gkqwqumumsggkisk:
            if (is_string($omkysikckkcieckq)) {
                goto wkewwcyckywegkgu;
            }
            goto nvaqyysiqoawekeq;
            miqweqaaowcigwek:
            ikkycqcyiskeyiwc:
            goto eaigiqugoyomawia;
            cgkugammwaasskse:
            raaikgmaamoasmka:
            goto uuikuwqgwiqisaka;
            uuikuwqgwiqisaka:
            $wwgucssaecqekuek = ManipulateArray::get($omkysikckkcieckq, self::ATTRS, []);
            goto qayqmgmmymcquuag;
            cwuseuekgwsccecg:
            if (!($eqgoocgaqwqcimie == $this->qooeaookuemoqecm())) {
                goto ikkycqcyiskeyiwc;
            }
            goto uewyaeqgisiqwyus;
            ekcociwqmcmuagmg:
            wkewwcyckywegkgu:
            goto smmoumcqseumumuy;
            nvaqyysiqoawekeq:
            $ymqmyyeuycgmigyo = ManipulateArray::get($omkysikckkcieckq, self::NAME);
            goto qkmecaguyiccekqq;
            qmuwqwawwwwiaiyq:
            ygceqcgcqeugqsac:
            goto iigikgyaeuikoggm;
            eaigiqugoyomawia:
            $ewgwqamkygiqaawc .= ManipulateHTML::qgsekwygcgawekeq("\157\160\164\151\157\156", $wwgucssaecqekuek, true, $ymqmyyeuycgmigyo);
            goto qmuwqwawwwwiaiyq;
            uewyaeqgisiqwyus:
            $wwgucssaecqekuek["\163\x65\x6c\x65\143\164\x65\144"] = '';
            goto miqweqaaowcigwek;
            qayqmgmmymcquuag:
            $wwgucssaecqekuek = ManipulateFormat::omaawkkwwyesqwcc([self::VALUE => $eqgoocgaqwqcimie, "\x64\141\x74\141\55\156\141\155\145" => $ymqmyyeuycgmigyo], $wwgucssaecqekuek);
            goto cwuseuekgwsccecg;
            qkmecaguyiccekqq:
            goto raaikgmaamoasmka;
            goto ekcociwqmcmuagmg;
            smmoumcqseumumuy:
            $ymqmyyeuycgmigyo = $omkysikckkcieckq;
            goto cgkugammwaasskse;
            iigikgyaeuikoggm:
        }
        goto yiqyicewukgskccu;
        sccsewaywmwqoikg:
        $ewgwqamkygiqaawc = '';
        goto aygawequkeicqqkc;
        esoqgwkccuqwwiec:
        soqqkwceaykieigm:
        goto iwqyaqqqwsooywwu;
        ieckiiqswwmkuiey:
    }
    
    public function kyiucygqsgequoys(string $iwiewowoqmoekyqi) : self
    {
        $this->placeholder = $iwiewowoqmoekyqi;
        return $this;
    }
    
    public function mswqgegakmgmewwq() : self
    {
        $this->qigsyyqgewgskemg("\x63\165\x73\x74\157\x6d\x2d\163\x65\x6c\x65\x63\164\55\x73\x6d")->qigsyyqgewgskemg("\154\150\55\61");
        return $this;
    }
}
