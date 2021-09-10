<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        parent::__construct("\x73\x65\x6c\145\143\164", "\x73\x65\154\145\x63\x74", $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
        $this->qigsyyqgewgskemg("\143\x75\x73\164\x6f\155\55\x73\145\154\145\x63\x74");
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
        goto qyegguguqsoeccia;
        oguoauieggcougge:
        $qiouiwasaauyaaue = $this->gkwkqmwweiawigae();
        goto gmossqyimoswkoms;
        qyegguguqsoeccia:
        $ewgwqamkygiqaawc = '';
        goto oguoauieggcougge;
        okuwiumssgqqaggm:
        ygceqcgcqeugqsac:
        goto yiqyicewukgskccu;
        uqsggeawaemaocua:
        $ewgwqamkygiqaawc .= ManipulateHTML::qgsekwygcgawekeq("\x6f\160\164\x69\157\x6e", ["\x64\151\x73\141\142\x6c\145\144" => '', "\x73\x65\154\145\x63\164\x65\x64" => '', self::VALUE => ''], true, $iwiewowoqmoekyqi);
        goto okuwiumssgqqaggm;
        ieckiiqswwmkuiey:
        aygawequkeicqqkc:
        goto ssoaykwaaysysgqi;
        esoqgwkccuqwwiec:
        foreach ($qiouiwasaauyaaue as $eqgoocgaqwqcimie => $omkysikckkcieckq) {
            goto qkmecaguyiccekqq;
            cgkugammwaasskse:
            ikkycqcyiskeyiwc:
            goto uuikuwqgwiqisaka;
            smmoumcqseumumuy:
            goto gkqwqumumsggkisk;
            goto cgkugammwaasskse;
            ekcociwqmcmuagmg:
            $ymqmyyeuycgmigyo = ManipulateArray::get($omkysikckkcieckq, self::NAME);
            goto smmoumcqseumumuy;
            qmuwqwawwwwiaiyq:
            nvaqyysiqoawekeq:
            goto iigikgyaeuikoggm;
            qayqmgmmymcquuag:
            gkqwqumumsggkisk:
            goto cwuseuekgwsccecg;
            eaigiqugoyomawia:
            $wwgucssaecqekuek["\163\x65\x6c\x65\x63\x74\145\144"] = '';
            goto qmuwqwawwwwiaiyq;
            qkmecaguyiccekqq:
            if (is_string($omkysikckkcieckq)) {
                goto ikkycqcyiskeyiwc;
            }
            goto ekcociwqmcmuagmg;
            cwuseuekgwsccecg:
            $wwgucssaecqekuek = ManipulateArray::get($omkysikckkcieckq, self::ATTRS, []);
            goto uewyaeqgisiqwyus;
            iigikgyaeuikoggm:
            $ewgwqamkygiqaawc .= ManipulateHTML::qgsekwygcgawekeq("\x6f\160\164\x69\x6f\156", $wwgucssaecqekuek, true, $ymqmyyeuycgmigyo);
            goto soqqkwceaykieigm;
            uewyaeqgisiqwyus:
            $wwgucssaecqekuek = ManipulateFormat::omaawkkwwyesqwcc([self::VALUE => $eqgoocgaqwqcimie, "\x63\x79\x71\167\x6b\x69\167\x71\145\163\163\143\147\x75\147\141" => $ymqmyyeuycgmigyo], $wwgucssaecqekuek);
            goto miqweqaaowcigwek;
            uuikuwqgwiqisaka:
            $ymqmyyeuycgmigyo = $omkysikckkcieckq;
            goto qayqmgmmymcquuag;
            miqweqaaowcigwek:
            if (!($eqgoocgaqwqcimie == $this->qooeaookuemoqecm())) {
                goto nvaqyysiqoawekeq;
            }
            goto eaigiqugoyomawia;
            soqqkwceaykieigm:
            raaikgmaamoasmka:
            goto sccsewaywmwqoikg;
            sccsewaywmwqoikg:
        }
        goto iwqyaqqqwsooywwu;
        auqwakoacamemaaw:
        if (!$iwiewowoqmoekyqi) {
            goto ygceqcgcqeugqsac;
        }
        goto uqsggeawaemaocua;
        ssoaykwaaysysgqi:
        return $ewgwqamkygiqaawc;
        goto ismoyieeoqseaqss;
        gmossqyimoswkoms:
        $iwiewowoqmoekyqi = $this->sqquuscwqowicoqm();
        goto auqwakoacamemaaw;
        yiqyicewukgskccu:
        if (!(is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue)) {
            goto aygawequkeicqqkc;
        }
        goto esoqgwkccuqwwiec;
        iwqyaqqqwsooywwu:
        wkewwcyckywegkgu:
        goto ieckiiqswwmkuiey;
        ismoyieeoqseaqss:
    }
    
    public function kyiucygqsgequoys(string $iwiewowoqmoekyqi) : self
    {
        $this->placeholder = $iwiewowoqmoekyqi;
        return $this;
    }
    
    public function mswqgegakmgmewwq() : self
    {
        $this->qigsyyqgewgskemg("\143\165\163\164\x6f\155\55\163\x65\x6c\x65\143\164\55\x73\x6d")->qigsyyqgewgskemg("\154\x68\x2d\x31");
        return $this;
    }
}
