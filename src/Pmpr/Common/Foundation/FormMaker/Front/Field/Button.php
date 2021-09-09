<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        goto cymmqcgksykkmswi;
        auyuwiemukwecqga:
        $this->qigsyyqgewgskemg("\142\x74\156");
        goto ckyeuwkgigokyggq;
        ckyeuwkgigokyggq:
        $this->gysckqgokmciyqcg($pkyyagewkiyckmwy);
        goto qwiiscwsowokciwi;
        cymmqcgksykkmswi:
        parent::__construct("\x62\x75\x74\x74\x6f\x6e", "\142\165\164\164\x6f\156", $aokagokqyuysuksm, $pkyyagewkiyckmwy);
        goto auyuwiemukwecqga;
        qwiiscwsowokciwi:
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
        goto uwueekmwysgmgcqw;
        ewqquasomauogwwm:
        $pkyyagewkiyckmwy = $this->uikgwcuascgeissw();
        goto msqyicumygogaaek;
        wuseoaecmsuismwa:
        $omiygkiiauwgkegg = ManipulateHTML::gmqyuaqwgiayskei('', ["\141\x72\x69\x61\55\x68\151\144\144\x65\x6e" => "\x74\162\165\145", "\x63\x6c\x61\163\x73" => $egkyssmuqcwaciya, "\x72\157\154\x65" => "\163\x74\141\164\x75\163"]);
        goto qqyqkkicysmkywye;
        qqyqkkicysmkywye:
        $omiygkiiauwgkegg .= ManipulateHTML::gmqyuaqwgiayskei($ywmkwiwkosakssii["\154\157\x61\x64\151\156\147"], ["\143\154\141\163\163" => "\163\162\55\157\x6e\x6c\x79"]);
        goto micqqaukcwauyakc;
        micqqaukcwauyakc:
        $pkyyagewkiyckmwy = ManipulateHTML::gmqyuaqwgiayskei($pkyyagewkiyckmwy, ["\x63\154\x61\163\x73" => "\x70\x78\x2d\x32"]);
        goto iugeyykwamwamwic;
        uwueekmwysgmgcqw:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [
            "\x73\151\x7a\x65" => "\163\x6d",
            
            "\x74\171\x70\145" => "\142\157\162\x64\145\162",
            
            "\x68\x69\144\144\x65\x6e" => true,
            "\154\x6f\141\x64\x69\x6e\147" => sprintf("\x25\163\x2e\x2e\x2e", __("\x4c\157\x61\144\151\156\147", PR__CMN__FOUNDATION)),
        ]);
        goto ewqquasomauogwwm;
        iugeyykwamwamwic:
        $this->qigsyyqgewgskemg("\144\x2d\146\x6c\x65\x78");
        goto owicaumkugwyiuem;
        timikyukuimkeasw:
        $egkyssmuqcwaciya .= "\40\163\150\x6f\x77";
        goto gggoqskysukqguga;
        ywwigkiqoouocoes:
        if ($ywmkwiwkosakssii["\x68\151\x64\144\145\x6e"]) {
            goto sggqeakigmwwswyk;
        }
        goto timikyukuimkeasw;
        keqgyeweciagewey:
        $egkyssmuqcwaciya = "\x6d\x79\x2d\x61\x75\x74\157\x20\x70\162\55\x73\x70\x69\x6e\156\x65\162\40\x73\160\x69\156\x6e\x65\x72\55\x68\157\154\x64\x65\162\40\x73\x70\x69\x6e\156\145\x72\55{$sqeykgyoooqysmca}\40\163\160\151\156\x6e\x65\162\55{$sqeykgyoooqysmca}\55{$ywmkwiwkosakssii["\163\x69\x7a\x65"]}";
        goto ywwigkiqoouocoes;
        gggoqskysukqguga:
        sggqeakigmwwswyk:
        goto wuseoaecmsuismwa;
        msqyicumygogaaek:
        $sqeykgyoooqysmca = $ywmkwiwkosakssii["\164\x79\160\145"];
        goto keqgyeweciagewey;
        owicaumkugwyiuem:
        return $this->eqggmusacqoqcwuk($omiygkiiauwgkegg . $pkyyagewkiyckmwy);
        goto gwsiuuywieaokgam;
        gwsiuuywieaokgam:
    }
}
