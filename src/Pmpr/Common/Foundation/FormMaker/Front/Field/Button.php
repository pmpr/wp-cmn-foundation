<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front\Field;

use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;

class Button extends Field
{
    
    protected bool $left = true;
    
    public function __construct(string $aokagokqyuysuksm = null, string $pkyyagewkiyckmwy = null)
    {
        goto ismoyieeoqseaqss;
        awiugaawigcesouw:
        $this->qigsyyqgewgskemg("\142\164\156");
        goto oemyakuouygmigom;
        ismoyieeoqseaqss:
        parent::__construct("\142\165\x74\164\157\156", "\142\165\x74\x74\157\x6e", $aokagokqyuysuksm, $pkyyagewkiyckmwy);
        goto awiugaawigcesouw;
        oemyakuouygmigom:
        $this->gysckqgokmciyqcg($pkyyagewkiyckmwy);
        goto cqumuukyscyqawgo;
        cqumuukyscyqawgo:
    }
    
    public function souwykwwmyygqyqi() : ?string
    {
        return $this->uikgwcuascgeissw();
    }
    
    public function heckyiakawemwsmu() : bool
    {
        return $this->left;
    }
    
    public function kkoaikueoggssssc(bool $iyqeksimguuekuum) : self
    {
        $this->left = $iyqeksimguuekuum;
        return $this;
    }
    
    public function iswqmkousoeksaae($ywmkwiwkosakssii = []) : self
    {
        goto quyqqkooygwwuegu;
        quygesuesyiwukey:
        $pkyyagewkiyckmwy = $this->uikgwcuascgeissw();
        goto acysusgkysymesmy;
        eiaakmiuaoooskeu:
        return $this->eqggmusacqoqcwuk($omiygkiiauwgkegg . $pkyyagewkiyckmwy);
        goto kogocyykgoassccw;
        awouugqekqkgykwk:
        $omiygkiiauwgkegg = ManipulateHTML::gmqyuaqwgiayskei('', ["\141\162\x69\x61\x2d\150\151\144\x64\145\156" => "\164\162\x75\x65", "\x63\x6c\141\163\163" => $egkyssmuqcwaciya, "\162\x6f\154\145" => "\163\164\141\x74\x75\x73"]);
        goto ukqiuqciiqeswqsa;
        acysusgkysymesmy:
        $sqeykgyoooqysmca = $ywmkwiwkosakssii["\x74\171\x70\145"];
        goto youwcokqismwsygq;
        eoocuukcuukigmao:
        sagakqowucycssou:
        goto awouugqekqkgykwk;
        quyqqkooygwwuegu:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [
            "\x73\151\172\x65" => "\163\155",
            
            "\164\x79\160\x65" => "\x62\157\162\144\x65\x72",
            
            "\150\151\144\x64\145\156" => true,
            "\x6c\x6f\141\x64\151\x6e\147" => sprintf("\x25\163\56\56\x2e", __("\x4c\x6f\x61\144\x69\156\147", PR__CMN__FOUNDATION)),
        ]);
        goto quygesuesyiwukey;
        ikwwisqmeswymoey:
        $egkyssmuqcwaciya .= "\40\163\150\x6f\167";
        goto eoocuukcuukigmao;
        ukqiuqciiqeswqsa:
        $omiygkiiauwgkegg .= ManipulateHTML::gmqyuaqwgiayskei($ywmkwiwkosakssii["\154\x6f\x61\144\x69\156\147"], ["\x63\154\141\163\x73" => "\163\x72\55\x6f\156\154\171"]);
        goto mokkyeicegusckgs;
        youwcokqismwsygq:
        $egkyssmuqcwaciya = "\x6d\171\x2d\141\x75\164\157\40\160\x72\x2d\x73\160\151\156\x6e\145\x72\x20\x73\160\151\x6e\156\x65\162\x2d\150\x6f\154\x64\145\x72\x20\163\160\151\x6e\156\145\x72\x2d{$sqeykgyoooqysmca}\40\163\x70\151\x6e\156\145\x72\x2d{$sqeykgyoooqysmca}\x2d{$ywmkwiwkosakssii["\x73\x69\172\x65"]}";
        goto kgciwmioyuqquyms;
        mokkyeicegusckgs:
        $pkyyagewkiyckmwy = ManipulateHTML::gmqyuaqwgiayskei($pkyyagewkiyckmwy, ["\143\154\x61\x73\x73" => "\x70\x78\55\62"]);
        goto icsoyscwuykooeqg;
        icsoyscwuykooeqg:
        $this->qigsyyqgewgskemg("\x64\55\146\154\145\x78");
        goto eiaakmiuaoooskeu;
        kgciwmioyuqquyms:
        if ($ywmkwiwkosakssii["\150\x69\x64\x64\x65\156"]) {
            goto sagakqowucycssou;
        }
        goto ikwwisqmeswymoey;
        kogocyykgoassccw:
    }
}
