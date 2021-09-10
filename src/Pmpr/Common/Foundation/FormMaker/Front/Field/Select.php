<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        parent::__construct("\x73\145\x6c\x65\143\164", "\163\x65\x6c\145\143\x74", $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
        $this->qigsyyqgewgskemg("\143\x75\163\164\157\155\55\163\145\154\145\x63\x74");
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
        yiqyicewukgskccu:
        foreach ($qiouiwasaauyaaue as $eqgoocgaqwqcimie => $omkysikckkcieckq) {
            goto nvaqyysiqoawekeq;
            qkmecaguyiccekqq:
            $ymqmyyeuycgmigyo = ManipulateArray::get($omkysikckkcieckq, self::NAME);
            goto ekcociwqmcmuagmg;
            eaigiqugoyomawia:
            gkqwqumumsggkisk:
            goto qmuwqwawwwwiaiyq;
            qmuwqwawwwwiaiyq:
            $ewgwqamkygiqaawc .= ManipulateHTML::qgsekwygcgawekeq("\157\x70\x74\x69\x6f\x6e", $wwgucssaecqekuek, true, $ymqmyyeuycgmigyo);
            goto iigikgyaeuikoggm;
            cgkugammwaasskse:
            $ymqmyyeuycgmigyo = $omkysikckkcieckq;
            goto uuikuwqgwiqisaka;
            iigikgyaeuikoggm:
            wkewwcyckywegkgu:
            goto soqqkwceaykieigm;
            miqweqaaowcigwek:
            $wwgucssaecqekuek["\163\145\x6c\145\143\164\145\144"] = '';
            goto eaigiqugoyomawia;
            cwuseuekgwsccecg:
            $wwgucssaecqekuek = ManipulateFormat::omaawkkwwyesqwcc([self::VALUE => $eqgoocgaqwqcimie, "\x63\171\x71\x77\153\x69\167\x71\x65\x73\x73\x63\x67\x75\147\x61" => $ymqmyyeuycgmigyo], $wwgucssaecqekuek);
            goto uewyaeqgisiqwyus;
            smmoumcqseumumuy:
            raaikgmaamoasmka:
            goto cgkugammwaasskse;
            uuikuwqgwiqisaka:
            ikkycqcyiskeyiwc:
            goto qayqmgmmymcquuag;
            uewyaeqgisiqwyus:
            if (!($eqgoocgaqwqcimie == $this->qooeaookuemoqecm())) {
                goto gkqwqumumsggkisk;
            }
            goto miqweqaaowcigwek;
            nvaqyysiqoawekeq:
            if (is_string($omkysikckkcieckq)) {
                goto raaikgmaamoasmka;
            }
            goto qkmecaguyiccekqq;
            ekcociwqmcmuagmg:
            goto ikkycqcyiskeyiwc;
            goto smmoumcqseumumuy;
            qayqmgmmymcquuag:
            $wwgucssaecqekuek = ManipulateArray::get($omkysikckkcieckq, self::ATTRS, []);
            goto cwuseuekgwsccecg;
            soqqkwceaykieigm:
        }
        goto esoqgwkccuqwwiec;
        qyegguguqsoeccia:
        $qiouiwasaauyaaue = $this->gkwkqmwweiawigae();
        goto oguoauieggcougge;
        oguoauieggcougge:
        $iwiewowoqmoekyqi = $this->sqquuscwqowicoqm();
        goto gmossqyimoswkoms;
        gmossqyimoswkoms:
        if (!$iwiewowoqmoekyqi) {
            goto ayumqmewoimoeiwi;
        }
        goto auqwakoacamemaaw;
        okuwiumssgqqaggm:
        if (!(is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue)) {
            goto sccsewaywmwqoikg;
        }
        goto yiqyicewukgskccu;
        iwqyaqqqwsooywwu:
        sccsewaywmwqoikg:
        goto ieckiiqswwmkuiey;
        ieckiiqswwmkuiey:
        return $ewgwqamkygiqaawc;
        goto ssoaykwaaysysgqi;
        auqwakoacamemaaw:
        $ewgwqamkygiqaawc .= ManipulateHTML::qgsekwygcgawekeq("\157\160\164\x69\x6f\156", ["\144\x69\163\141\x62\154\145\144" => '', "\163\145\154\x65\x63\164\145\144" => '', self::VALUE => ''], true, $iwiewowoqmoekyqi);
        goto uqsggeawaemaocua;
        aygawequkeicqqkc:
        $ewgwqamkygiqaawc = '';
        goto qyegguguqsoeccia;
        uqsggeawaemaocua:
        ayumqmewoimoeiwi:
        goto okuwiumssgqqaggm;
        esoqgwkccuqwwiec:
        ygceqcgcqeugqsac:
        goto iwqyaqqqwsooywwu;
        ssoaykwaaysysgqi:
    }
    
    public function kyiucygqsgequoys(string $iwiewowoqmoekyqi) : self
    {
        $this->placeholder = $iwiewowoqmoekyqi;
        return $this;
    }
    
    public function mswqgegakmgmewwq() : self
    {
        $this->qigsyyqgewgskemg("\143\x75\x73\164\157\x6d\55\163\x65\154\145\143\164\55\x73\155")->qigsyyqgewgskemg("\x6c\x68\55\61");
        return $this;
    }
}
