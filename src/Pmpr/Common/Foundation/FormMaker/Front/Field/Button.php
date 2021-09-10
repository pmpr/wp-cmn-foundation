<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        $this->qigsyyqgewgskemg("\142\x74\x6e");
        goto oemyakuouygmigom;
        oemyakuouygmigom:
        $this->gysckqgokmciyqcg($pkyyagewkiyckmwy);
        goto cqumuukyscyqawgo;
        ismoyieeoqseaqss:
        parent::__construct("\142\165\164\164\x6f\x6e", "\142\165\164\164\157\x6e", $aokagokqyuysuksm, $pkyyagewkiyckmwy);
        goto awiugaawigcesouw;
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
        acysusgkysymesmy:
        $sqeykgyoooqysmca = $ywmkwiwkosakssii["\x74\x79\x70\145"];
        goto youwcokqismwsygq;
        kgciwmioyuqquyms:
        if ($ywmkwiwkosakssii["\150\151\x64\x64\145\x6e"]) {
            goto sagakqowucycssou;
        }
        goto ikwwisqmeswymoey;
        ukqiuqciiqeswqsa:
        $omiygkiiauwgkegg .= ManipulateHTML::gmqyuaqwgiayskei($ywmkwiwkosakssii["\154\157\141\144\x69\156\x67"], ["\x63\x6c\141\163\x73" => "\163\x72\55\x6f\156\x6c\171"]);
        goto mokkyeicegusckgs;
        mokkyeicegusckgs:
        $pkyyagewkiyckmwy = ManipulateHTML::gmqyuaqwgiayskei($pkyyagewkiyckmwy, ["\143\x6c\141\163\x73" => "\160\170\55\x32"]);
        goto icsoyscwuykooeqg;
        quygesuesyiwukey:
        $pkyyagewkiyckmwy = $this->uikgwcuascgeissw();
        goto acysusgkysymesmy;
        icsoyscwuykooeqg:
        $this->qigsyyqgewgskemg("\x64\x2d\146\x6c\x65\170");
        goto eiaakmiuaoooskeu;
        youwcokqismwsygq:
        $egkyssmuqcwaciya = "\x6d\x79\55\141\165\164\157\40\160\162\55\163\160\151\x6e\x6e\x65\x72\x20\163\x70\151\156\x6e\145\x72\x2d\150\x6f\x6c\144\145\162\x20\x73\160\x69\x6e\x6e\145\x72\x2d{$sqeykgyoooqysmca}\40\163\160\x69\x6e\x6e\145\x72\55{$sqeykgyoooqysmca}\x2d{$ywmkwiwkosakssii["\x73\x69\172\x65"]}";
        goto kgciwmioyuqquyms;
        quyqqkooygwwuegu:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [
            "\163\x69\x7a\x65" => "\163\x6d",
            
            "\164\x79\x70\x65" => "\142\157\x72\144\x65\x72",
            
            "\150\151\x64\144\x65\156" => true,
            "\x6c\157\141\x64\x69\x6e\147" => sprintf("\x25\163\x2e\56\x2e", __("\114\x6f\x61\x64\151\156\x67", PR__CMN__FOUNDATION)),
        ]);
        goto quygesuesyiwukey;
        ikwwisqmeswymoey:
        $egkyssmuqcwaciya .= "\x20\x73\150\157\x77";
        goto eoocuukcuukigmao;
        awouugqekqkgykwk:
        $omiygkiiauwgkegg = ManipulateHTML::gmqyuaqwgiayskei('', ["\141\x72\x69\x61\55\x68\151\x64\144\145\156" => "\x74\162\x75\145", "\143\x6c\x61\x73\x73" => $egkyssmuqcwaciya, "\162\157\x6c\x65" => "\163\164\141\x74\165\163"]);
        goto ukqiuqciiqeswqsa;
        eiaakmiuaoooskeu:
        return $this->eqggmusacqoqcwuk($omiygkiiauwgkegg . $pkyyagewkiyckmwy);
        goto kogocyykgoassccw;
        eoocuukcuukigmao:
        sagakqowucycssou:
        goto awouugqekqkgykwk;
        kogocyykgoassccw:
    }
}
