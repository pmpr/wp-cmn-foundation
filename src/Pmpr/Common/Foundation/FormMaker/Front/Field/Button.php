<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        goto awiugaawigcesouw;
        cqumuukyscyqawgo:
        $this->gysckqgokmciyqcg($pkyyagewkiyckmwy);
        goto sagakqowucycssou;
        oemyakuouygmigom:
        $this->qigsyyqgewgskemg("\x62\x74\156");
        goto cqumuukyscyqawgo;
        awiugaawigcesouw:
        parent::__construct("\x62\x75\164\x74\157\x6e", "\142\x75\164\164\x6f\156", $aokagokqyuysuksm, $pkyyagewkiyckmwy);
        goto oemyakuouygmigom;
        sagakqowucycssou:
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
        goto quygesuesyiwukey;
        eoocuukcuukigmao:
        $egkyssmuqcwaciya .= "\x20\x73\150\157\x77";
        goto awouugqekqkgykwk;
        quygesuesyiwukey:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [
            "\x73\x69\172\145" => "\163\x6d",
            
            "\x74\171\x70\x65" => "\142\x6f\162\x64\145\x72",
            
            "\x68\151\x64\x64\x65\x6e" => true,
            "\x6c\157\141\144\151\156\x67" => sprintf("\x25\x73\x2e\x2e\56", __("\114\x6f\141\x64\151\156\x67", PR__CMN__FOUNDATION)),
        ]);
        goto acysusgkysymesmy;
        kgciwmioyuqquyms:
        $egkyssmuqcwaciya = "\155\x79\55\x61\x75\x74\157\x20\160\162\55\163\x70\x69\156\x6e\145\x72\40\163\x70\151\156\x6e\x65\x72\x2d\x68\x6f\154\144\x65\162\x20\163\x70\151\x6e\156\x65\x72\x2d{$sqeykgyoooqysmca}\x20\x73\160\x69\156\156\145\x72\x2d{$sqeykgyoooqysmca}\x2d{$ywmkwiwkosakssii["\163\151\x7a\145"]}";
        goto ikwwisqmeswymoey;
        ikwwisqmeswymoey:
        if ($ywmkwiwkosakssii["\150\151\x64\x64\145\x6e"]) {
            goto quyqqkooygwwuegu;
        }
        goto eoocuukcuukigmao;
        acysusgkysymesmy:
        $pkyyagewkiyckmwy = $this->uikgwcuascgeissw();
        goto youwcokqismwsygq;
        eiaakmiuaoooskeu:
        $this->qigsyyqgewgskemg("\x64\x2d\146\154\145\170");
        goto kogocyykgoassccw;
        kogocyykgoassccw:
        return $this->eqggmusacqoqcwuk($omiygkiiauwgkegg . $pkyyagewkiyckmwy);
        goto ukqyaweoikcegyco;
        mokkyeicegusckgs:
        $omiygkiiauwgkegg .= ManipulateHTML::gmqyuaqwgiayskei($ywmkwiwkosakssii["\154\x6f\x61\144\151\156\147"], ["\143\x6c\x61\x73\x73" => "\163\x72\x2d\x6f\156\x6c\171"]);
        goto icsoyscwuykooeqg;
        ukqiuqciiqeswqsa:
        $omiygkiiauwgkegg = ManipulateHTML::gmqyuaqwgiayskei('', ["\x61\x72\x69\x61\55\150\151\x64\x64\x65\x6e" => "\164\x72\165\145", "\x63\154\x61\x73\x73" => $egkyssmuqcwaciya, "\162\x6f\154\x65" => "\163\164\x61\164\x75\163"]);
        goto mokkyeicegusckgs;
        icsoyscwuykooeqg:
        $pkyyagewkiyckmwy = ManipulateHTML::gmqyuaqwgiayskei($pkyyagewkiyckmwy, ["\x63\x6c\x61\163\x73" => "\x70\170\x2d\62"]);
        goto eiaakmiuaoooskeu;
        awouugqekqkgykwk:
        quyqqkooygwwuegu:
        goto ukqiuqciiqeswqsa;
        youwcokqismwsygq:
        $sqeykgyoooqysmca = $ywmkwiwkosakssii["\164\171\x70\x65"];
        goto kgciwmioyuqquyms;
        ukqyaweoikcegyco:
    }
}
