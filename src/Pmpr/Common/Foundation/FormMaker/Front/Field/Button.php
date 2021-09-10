<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto esoqgwkccuqwwiec;
        iwqyaqqqwsooywwu:
        $this->qigsyyqgewgskemg("\x62\x74\x6e");
        goto ieckiiqswwmkuiey;
        ieckiiqswwmkuiey:
        $this->gysckqgokmciyqcg($pkyyagewkiyckmwy);
        goto ssoaykwaaysysgqi;
        esoqgwkccuqwwiec:
        parent::__construct("\142\x75\x74\164\157\156", "\142\165\164\164\157\x6e", $aokagokqyuysuksm, $pkyyagewkiyckmwy);
        goto iwqyaqqqwsooywwu;
        ssoaykwaaysysgqi:
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
        goto awiugaawigcesouw;
        ikwwisqmeswymoey:
        $pkyyagewkiyckmwy = ManipulateHTML::gmqyuaqwgiayskei($pkyyagewkiyckmwy, ["\143\x6c\141\x73\163" => "\160\170\55\62"]);
        goto eoocuukcuukigmao;
        awiugaawigcesouw:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [
            "\x73\x69\172\145" => "\163\155",
            
            "\x74\171\x70\145" => "\x62\157\x72\144\x65\162",
            
            "\150\151\144\144\145\156" => true,
            "\x6c\157\x61\144\x69\x6e\147" => sprintf("\x25\x73\56\56\56", __("\114\157\x61\144\151\156\147", PR__CMN__FOUNDATION)),
        ]);
        goto oemyakuouygmigom;
        acysusgkysymesmy:
        ismoyieeoqseaqss:
        goto youwcokqismwsygq;
        awouugqekqkgykwk:
        return $this->eqggmusacqoqcwuk($omiygkiiauwgkegg . $pkyyagewkiyckmwy);
        goto ukqiuqciiqeswqsa;
        eoocuukcuukigmao:
        $this->qigsyyqgewgskemg("\x64\x2d\146\154\145\170");
        goto awouugqekqkgykwk;
        youwcokqismwsygq:
        $omiygkiiauwgkegg = ManipulateHTML::gmqyuaqwgiayskei('', ["\141\162\151\141\x2d\150\x69\144\144\x65\x6e" => "\164\x72\x75\145", "\x63\154\x61\x73\x73" => $egkyssmuqcwaciya, "\162\157\x6c\145" => "\x73\x74\141\x74\x75\x73"]);
        goto kgciwmioyuqquyms;
        quyqqkooygwwuegu:
        if ($ywmkwiwkosakssii["\x68\x69\144\x64\x65\x6e"]) {
            goto ismoyieeoqseaqss;
        }
        goto quygesuesyiwukey;
        quygesuesyiwukey:
        $egkyssmuqcwaciya .= "\x20\x73\150\x6f\x77";
        goto acysusgkysymesmy;
        cqumuukyscyqawgo:
        $sqeykgyoooqysmca = $ywmkwiwkosakssii["\x74\x79\160\145"];
        goto sagakqowucycssou;
        sagakqowucycssou:
        $egkyssmuqcwaciya = "\x6d\171\55\141\165\164\157\x20\x70\162\x2d\163\x70\x69\x6e\156\x65\162\x20\163\160\x69\156\x6e\145\162\x2d\x68\x6f\x6c\144\145\162\x20\x73\160\x69\x6e\x6e\145\162\x2d{$sqeykgyoooqysmca}\40\163\160\x69\x6e\156\145\162\x2d{$sqeykgyoooqysmca}\x2d{$ywmkwiwkosakssii["\163\x69\x7a\145"]}";
        goto quyqqkooygwwuegu;
        oemyakuouygmigom:
        $pkyyagewkiyckmwy = $this->uikgwcuascgeissw();
        goto cqumuukyscyqawgo;
        kgciwmioyuqquyms:
        $omiygkiiauwgkegg .= ManipulateHTML::gmqyuaqwgiayskei($ywmkwiwkosakssii["\154\x6f\x61\144\151\156\x67"], ["\x63\x6c\x61\x73\x73" => "\163\x72\x2d\x6f\x6e\x6c\x79"]);
        goto ikwwisqmeswymoey;
        ukqiuqciiqeswqsa:
    }
}
