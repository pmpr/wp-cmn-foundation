<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        ismoyieeoqseaqss:
        parent::__construct("\142\165\x74\x74\157\x6e", "\142\x75\x74\164\157\x6e", $aokagokqyuysuksm, $pkyyagewkiyckmwy);
        goto awiugaawigcesouw;
        oemyakuouygmigom:
        $this->gysckqgokmciyqcg($pkyyagewkiyckmwy);
        goto cqumuukyscyqawgo;
        awiugaawigcesouw:
        $this->qigsyyqgewgskemg("\x62\164\156");
        goto oemyakuouygmigom;
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
        eiaakmiuaoooskeu:
        return $this->eqggmusacqoqcwuk($omiygkiiauwgkegg . $pkyyagewkiyckmwy);
        goto kogocyykgoassccw;
        ikwwisqmeswymoey:
        $egkyssmuqcwaciya .= "\40\x73\150\x6f\167";
        goto eoocuukcuukigmao;
        kgciwmioyuqquyms:
        if ($ywmkwiwkosakssii["\x68\x69\x64\x64\145\156"]) {
            goto sagakqowucycssou;
        }
        goto ikwwisqmeswymoey;
        ukqiuqciiqeswqsa:
        $omiygkiiauwgkegg .= ManipulateHTML::gmqyuaqwgiayskei($ywmkwiwkosakssii["\x6c\157\141\x64\x69\156\x67"], ["\x63\154\141\x73\x73" => "\163\x72\55\157\156\x6c\171"]);
        goto mokkyeicegusckgs;
        awouugqekqkgykwk:
        $omiygkiiauwgkegg = ManipulateHTML::gmqyuaqwgiayskei('', ["\141\x72\151\141\x2d\x68\151\144\144\145\156" => "\164\162\x75\x65", "\143\x6c\x61\163\163" => $egkyssmuqcwaciya, "\162\x6f\x6c\x65" => "\x73\164\x61\164\165\x73"]);
        goto ukqiuqciiqeswqsa;
        mokkyeicegusckgs:
        $pkyyagewkiyckmwy = ManipulateHTML::gmqyuaqwgiayskei($pkyyagewkiyckmwy, ["\143\x6c\x61\163\x73" => "\x70\x78\x2d\62"]);
        goto icsoyscwuykooeqg;
        acysusgkysymesmy:
        $sqeykgyoooqysmca = $ywmkwiwkosakssii["\x74\171\160\145"];
        goto youwcokqismwsygq;
        youwcokqismwsygq:
        $egkyssmuqcwaciya = "\x6d\171\x2d\x61\165\164\x6f\x20\160\162\55\x73\x70\151\x6e\x6e\x65\x72\40\x73\160\151\x6e\156\x65\x72\55\150\x6f\x6c\x64\x65\162\40\163\160\x69\x6e\x6e\145\162\55{$sqeykgyoooqysmca}\40\163\x70\x69\156\156\x65\x72\55{$sqeykgyoooqysmca}\55{$ywmkwiwkosakssii["\x73\151\x7a\x65"]}";
        goto kgciwmioyuqquyms;
        quyqqkooygwwuegu:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [
            "\x73\x69\x7a\x65" => "\163\x6d",
            
            "\164\171\x70\145" => "\142\x6f\x72\144\145\162",
            
            "\x68\151\144\144\145\156" => true,
            "\x6c\x6f\x61\144\x69\x6e\147" => sprintf("\45\x73\x2e\56\x2e", __("\x4c\x6f\141\x64\151\156\147", PR__CMN__FOUNDATION)),
        ]);
        goto quygesuesyiwukey;
        icsoyscwuykooeqg:
        $this->qigsyyqgewgskemg("\144\x2d\146\154\x65\x78");
        goto eiaakmiuaoooskeu;
        quygesuesyiwukey:
        $pkyyagewkiyckmwy = $this->uikgwcuascgeissw();
        goto acysusgkysymesmy;
        eoocuukcuukigmao:
        sagakqowucycssou:
        goto awouugqekqkgykwk;
        kogocyykgoassccw:
    }
}
