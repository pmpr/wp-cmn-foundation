<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        goto ssoaykwaaysysgqi;
        ismoyieeoqseaqss:
        $this->qigsyyqgewgskemg("\142\x74\156");
        goto awiugaawigcesouw;
        ssoaykwaaysysgqi:
        parent::__construct("\x62\x75\164\164\157\156", "\x62\165\164\x74\157\156", $aokagokqyuysuksm, $pkyyagewkiyckmwy);
        goto ismoyieeoqseaqss;
        awiugaawigcesouw:
        $this->gysckqgokmciyqcg($pkyyagewkiyckmwy);
        goto oemyakuouygmigom;
        oemyakuouygmigom:
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
        goto sagakqowucycssou;
        awouugqekqkgykwk:
        $omiygkiiauwgkegg .= ManipulateHTML::gmqyuaqwgiayskei($ywmkwiwkosakssii["\154\157\141\x64\x69\156\x67"], ["\143\154\141\x73\163" => "\x73\162\x2d\x6f\156\154\x79"]);
        goto ukqiuqciiqeswqsa;
        icsoyscwuykooeqg:
        return $this->eqggmusacqoqcwuk($omiygkiiauwgkegg . $pkyyagewkiyckmwy);
        goto eiaakmiuaoooskeu;
        sagakqowucycssou:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [
            "\163\x69\x7a\145" => "\163\x6d",
            
            "\x74\171\x70\145" => "\142\157\162\x64\145\162",
            
            "\150\x69\x64\x64\145\156" => true,
            "\x6c\x6f\141\144\x69\x6e\147" => sprintf("\45\163\x2e\x2e\56", __("\114\157\141\x64\x69\x6e\x67", PR__CMN__FOUNDATION)),
        ]);
        goto quyqqkooygwwuegu;
        mokkyeicegusckgs:
        $this->qigsyyqgewgskemg("\144\x2d\x66\x6c\145\x78");
        goto icsoyscwuykooeqg;
        eoocuukcuukigmao:
        $omiygkiiauwgkegg = ManipulateHTML::gmqyuaqwgiayskei('', ["\141\162\x69\141\55\150\x69\144\144\x65\x6e" => "\x74\162\165\145", "\x63\154\x61\x73\163" => $egkyssmuqcwaciya, "\162\x6f\x6c\x65" => "\163\x74\x61\x74\x75\x73"]);
        goto awouugqekqkgykwk;
        ikwwisqmeswymoey:
        cqumuukyscyqawgo:
        goto eoocuukcuukigmao;
        acysusgkysymesmy:
        $egkyssmuqcwaciya = "\155\x79\55\x61\x75\164\157\x20\x70\x72\55\163\160\151\x6e\x6e\145\162\40\163\160\151\x6e\x6e\x65\x72\55\150\157\154\144\x65\162\40\x73\160\x69\x6e\x6e\145\x72\x2d{$sqeykgyoooqysmca}\40\163\x70\x69\x6e\156\x65\x72\55{$sqeykgyoooqysmca}\x2d{$ywmkwiwkosakssii["\x73\x69\172\x65"]}";
        goto youwcokqismwsygq;
        quyqqkooygwwuegu:
        $pkyyagewkiyckmwy = $this->uikgwcuascgeissw();
        goto quygesuesyiwukey;
        quygesuesyiwukey:
        $sqeykgyoooqysmca = $ywmkwiwkosakssii["\x74\x79\x70\x65"];
        goto acysusgkysymesmy;
        kgciwmioyuqquyms:
        $egkyssmuqcwaciya .= "\x20\x73\150\x6f\167";
        goto ikwwisqmeswymoey;
        ukqiuqciiqeswqsa:
        $pkyyagewkiyckmwy = ManipulateHTML::gmqyuaqwgiayskei($pkyyagewkiyckmwy, ["\x63\154\x61\163\163" => "\x70\x78\x2d\x32"]);
        goto mokkyeicegusckgs;
        youwcokqismwsygq:
        if ($ywmkwiwkosakssii["\150\151\x64\144\x65\x6e"]) {
            goto cqumuukyscyqawgo;
        }
        goto kgciwmioyuqquyms;
        eiaakmiuaoooskeu:
    }
}
