<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        ssoaykwaaysysgqi:
        parent::__construct("\x62\x75\x74\164\x6f\156", "\x62\x75\x74\164\157\x6e", $aokagokqyuysuksm, $pkyyagewkiyckmwy);
        goto ismoyieeoqseaqss;
        awiugaawigcesouw:
        $this->gysckqgokmciyqcg($pkyyagewkiyckmwy);
        goto oemyakuouygmigom;
        ismoyieeoqseaqss:
        $this->qigsyyqgewgskemg("\142\164\156");
        goto awiugaawigcesouw;
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
        ikwwisqmeswymoey:
        cqumuukyscyqawgo:
        goto eoocuukcuukigmao;
        quyqqkooygwwuegu:
        $pkyyagewkiyckmwy = $this->uikgwcuascgeissw();
        goto quygesuesyiwukey;
        mokkyeicegusckgs:
        $this->qigsyyqgewgskemg("\x64\x2d\x66\x6c\145\x78");
        goto icsoyscwuykooeqg;
        awouugqekqkgykwk:
        $omiygkiiauwgkegg .= ManipulateHTML::gmqyuaqwgiayskei($ywmkwiwkosakssii["\x6c\157\x61\144\151\156\x67"], ["\143\x6c\x61\163\163" => "\163\x72\55\157\156\154\171"]);
        goto ukqiuqciiqeswqsa;
        kgciwmioyuqquyms:
        $egkyssmuqcwaciya .= "\x20\163\x68\x6f\x77";
        goto ikwwisqmeswymoey;
        icsoyscwuykooeqg:
        return $this->eqggmusacqoqcwuk($omiygkiiauwgkegg . $pkyyagewkiyckmwy);
        goto eiaakmiuaoooskeu;
        ukqiuqciiqeswqsa:
        $pkyyagewkiyckmwy = ManipulateHTML::gmqyuaqwgiayskei($pkyyagewkiyckmwy, ["\143\x6c\x61\x73\163" => "\160\170\x2d\62"]);
        goto mokkyeicegusckgs;
        acysusgkysymesmy:
        $egkyssmuqcwaciya = "\155\x79\55\x61\x75\164\x6f\x20\160\162\x2d\x73\160\x69\x6e\x6e\145\x72\x20\163\160\x69\156\x6e\x65\x72\55\x68\157\x6c\x64\145\162\x20\x73\x70\x69\x6e\x6e\145\x72\x2d{$sqeykgyoooqysmca}\x20\x73\160\151\x6e\156\x65\x72\55{$sqeykgyoooqysmca}\55{$ywmkwiwkosakssii["\x73\151\172\145"]}";
        goto youwcokqismwsygq;
        sagakqowucycssou:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [
            "\163\151\172\145" => "\163\155",
            
            "\164\171\x70\145" => "\x62\x6f\162\144\145\162",
            
            "\150\151\x64\x64\x65\156" => true,
            "\154\x6f\141\x64\151\x6e\x67" => sprintf("\x25\x73\x2e\x2e\56", __("\114\157\x61\144\151\x6e\x67", PR__CMN__FOUNDATION)),
        ]);
        goto quyqqkooygwwuegu;
        eoocuukcuukigmao:
        $omiygkiiauwgkegg = ManipulateHTML::gmqyuaqwgiayskei('', ["\x61\x72\x69\141\x2d\x68\x69\x64\x64\x65\x6e" => "\x74\162\x75\x65", "\x63\154\x61\x73\163" => $egkyssmuqcwaciya, "\162\157\x6c\145" => "\163\x74\x61\x74\165\163"]);
        goto awouugqekqkgykwk;
        quygesuesyiwukey:
        $sqeykgyoooqysmca = $ywmkwiwkosakssii["\164\171\160\x65"];
        goto acysusgkysymesmy;
        youwcokqismwsygq:
        if ($ywmkwiwkosakssii["\150\x69\x64\x64\x65\x6e"]) {
            goto cqumuukyscyqawgo;
        }
        goto kgciwmioyuqquyms;
        eiaakmiuaoooskeu:
    }
}
