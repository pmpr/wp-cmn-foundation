<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        parent::__construct("\163\x65\154\x65\x63\x74", "\x73\145\x6c\145\143\x74", $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
        $this->qigsyyqgewgskemg("\x63\x75\163\164\x6f\x6d\x2d\163\145\x6c\x65\143\x74");
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
        goto qmuwqwawwwwiaiyq;
        okuwiumssgqqaggm:
        return $ewgwqamkygiqaawc;
        goto yiqyicewukgskccu;
        oguoauieggcougge:
        if (!(is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue)) {
            goto eaigiqugoyomawia;
        }
        goto gmossqyimoswkoms;
        qyegguguqsoeccia:
        qkcawoouacuyaiiw:
        goto oguoauieggcougge;
        uqsggeawaemaocua:
        eaigiqugoyomawia:
        goto okuwiumssgqqaggm;
        auqwakoacamemaaw:
        zkqawssceymsouka:
        goto uqsggeawaemaocua;
        gmossqyimoswkoms:
        foreach ($qiouiwasaauyaaue as $eqgoocgaqwqcimie => $omkysikckkcieckq) {
            goto wkewwcyckywegkgu;
            gkqwqumumsggkisk:
            kgcygucmaeeaeoqw:
            goto nvaqyysiqoawekeq;
            uewyaeqgisiqwyus:
            wgmoucsgmmgsoeks:
            goto miqweqaaowcigwek;
            qayqmgmmymcquuag:
            ygceqcgcqeugqsac:
            goto cwuseuekgwsccecg;
            smmoumcqseumumuy:
            $wwgucssaecqekuek = ManipulateFormat::omaawkkwwyesqwcc([self::VALUE => $eqgoocgaqwqcimie, "\x64\141\164\141\55\156\x61\x6d\145" => $ymqmyyeuycgmigyo], $wwgucssaecqekuek);
            goto cgkugammwaasskse;
            cwuseuekgwsccecg:
            $ewgwqamkygiqaawc .= ManipulateHTML::qgsekwygcgawekeq("\x6f\160\164\x69\157\156", $wwgucssaecqekuek, true, $ymqmyyeuycgmigyo);
            goto uewyaeqgisiqwyus;
            qkmecaguyiccekqq:
            ayumqmewoimoeiwi:
            goto ekcociwqmcmuagmg;
            raaikgmaamoasmka:
            $ymqmyyeuycgmigyo = ManipulateArray::get($omkysikckkcieckq, self::NAME);
            goto ikkycqcyiskeyiwc;
            ekcociwqmcmuagmg:
            $wwgucssaecqekuek = ManipulateArray::get($omkysikckkcieckq, self::ATTRS, []);
            goto smmoumcqseumumuy;
            cgkugammwaasskse:
            if (!($eqgoocgaqwqcimie == $this->qooeaookuemoqecm())) {
                goto ygceqcgcqeugqsac;
            }
            goto uuikuwqgwiqisaka;
            ikkycqcyiskeyiwc:
            goto ayumqmewoimoeiwi;
            goto gkqwqumumsggkisk;
            wkewwcyckywegkgu:
            if (is_string($omkysikckkcieckq)) {
                goto kgcygucmaeeaeoqw;
            }
            goto raaikgmaamoasmka;
            uuikuwqgwiqisaka:
            $wwgucssaecqekuek["\x73\145\154\x65\143\164\145\x64"] = '';
            goto qayqmgmmymcquuag;
            nvaqyysiqoawekeq:
            $ymqmyyeuycgmigyo = $omkysikckkcieckq;
            goto qkmecaguyiccekqq;
            miqweqaaowcigwek:
        }
        goto auqwakoacamemaaw;
        sccsewaywmwqoikg:
        if (!$iwiewowoqmoekyqi) {
            goto qkcawoouacuyaiiw;
        }
        goto aygawequkeicqqkc;
        qmuwqwawwwwiaiyq:
        $ewgwqamkygiqaawc = '';
        goto iigikgyaeuikoggm;
        soqqkwceaykieigm:
        $iwiewowoqmoekyqi = $this->sqquuscwqowicoqm();
        goto sccsewaywmwqoikg;
        iigikgyaeuikoggm:
        $qiouiwasaauyaaue = $this->gkwkqmwweiawigae();
        goto soqqkwceaykieigm;
        aygawequkeicqqkc:
        $ewgwqamkygiqaawc .= ManipulateHTML::qgsekwygcgawekeq("\x6f\x70\164\x69\x6f\156", ["\x64\x69\163\141\x62\x6c\x65\144" => '', "\x73\145\154\x65\x63\x74\145\144" => '', self::VALUE => ''], true, $iwiewowoqmoekyqi);
        goto qyegguguqsoeccia;
        yiqyicewukgskccu:
    }
    
    public function kyiucygqsgequoys(string $iwiewowoqmoekyqi) : self
    {
        $this->placeholder = $iwiewowoqmoekyqi;
        return $this;
    }
    
    public function mswqgegakmgmewwq() : self
    {
        $this->qigsyyqgewgskemg("\x63\x75\163\x74\x6f\x6d\55\x73\x65\x6c\145\143\164\55\x73\155")->qigsyyqgewgskemg("\154\x68\x2d\x31");
        return $this;
    }
}
