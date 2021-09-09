<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Detector;

use Mobile_Detect;

class Detector extends Common
{
    
    protected ?Browser $browser = null;
    
    protected ?Mobile_Detect $device = null;
    public function __construct()
    {
        goto oaoummcgooyceayi;
        iiyysuksmomyyuye:
        parent::__construct();
        goto cugaeomiskasooic;
        siaweewywmuayyks:
        $this->browser = Browser::symcgieuakksimmu();
        goto iiyysuksmomyyuye;
        oaoummcgooyceayi:
        $this->device = new Mobile_Detect();
        goto siaweewywmuayyks;
        cugaeomiskasooic:
    }
    
    public function cyciimaqkakwcqqy($acsweksygkmmgggk) : bool
    {
        return $acsweksygkmmgggk && !($this->qawecuimqqcqwgsw() || $this->gsuucswsiuggysyw());
    }
    
    public function gekgcikwymwuuuog() : ?Mobile_Detect
    {
        return $this->device;
    }
    
    public function aagmmewiwysmgseq() : ?Browser
    {
        return $this->browser;
    }
    
    public function qawecuimqqcqwgsw() : bool
    {
        return $this->is("\155\157\142\151\x6c\x65");
    }
    
    public function uggoocigiyiqkmww() : bool
    {
        return $this->is("\x63\157\155\x70\165\x74\145\162");
    }
    
    public function gsuucswsiuggysyw() : bool
    {
        return $this->is("\164\141\142\x6c\x65\164");
    }
    
    public function iwuicqgsgkaeikwa() : bool
    {
        return $this->is("\x43\150\162\x6f\155\145");
    }
    
    public function yksyugcywqmuqgwo() : bool
    {
        return $this->is("\x46\151\x72\145\146\157\170");
    }
    
    private function is($eqgoocgaqwqcimie) : bool
    {
        goto yukieguwkeesieiy;
        yukieguwkeesieiy:
        $quckouuiqiiowoei = $this->aagmmewiwysmgseq()->aagmmewiwysmgseq();
        goto cwceosugiiyyauqi;
        eayyeuwawewcqcom:
        yeeicocmyyaeksys:
        goto esscoiyogsoqoquc;
        ciwyuyksieuuqiee:
        imwweegoasykooim:
        goto eayyeuwawewcqcom;
        ogugiciyicewkyue:
        switch ($eqgoocgaqwqcimie) {
            case "\143\157\x6d\160\x75\164\145\162":
                return !$syowsmcowosssaos->qawecuimqqcqwgsw();
            case "\x74\141\142\x6c\145\164":
                return $syowsmcowosssaos->gsuucswsiuggysyw();
            case "\x6d\157\142\x69\154\x65":
                return $syowsmcowosssaos->qawecuimqqcqwgsw() && !$syowsmcowosssaos->gsuucswsiuggysyw();
            case "\x42\162\141\x76\x65":
                return Browser::BROWSER_BRAVE === $quckouuiqiiowoei;
            case "\103\150\x72\157\155\145":
                return Browser::BROWSER_CHROME === $quckouuiqiiowoei;
            case "\106\x69\x72\x65\x66\x6f\x78":
                return Browser::BROWSER_FIREFOX === $quckouuiqiiowoei;
            case "\x45\x64\147\145":
                return Browser::BROWSER_EDGE === $quckouuiqiiowoei;
            case "\x49\156\164\145\162\156\x65\164\40\105\x78\160\154\x6f\162\x65\x72":
                return Browser::BROWSER_IE === $quckouuiqiiowoei;
            case "\x4f\x70\145\162\x61":
                return Browser::BROWSER_OPERA === $quckouuiqiiowoei;
            case "\x53\x61\146\x61\x72\x69":
                return Browser::BROWSER_SAFARI === $quckouuiqiiowoei;
            case "\x53\141\x66\141\162\x69\x20\x6f\156\40\151\x50\150\157\156\x65":
                return Browser::BROWSER_IPHONE === $quckouuiqiiowoei;
            default:
                return true;
        }
        goto ciwyuyksieuuqiee;
        cwceosugiiyyauqi:
        $syowsmcowosssaos = $this->gekgcikwymwuuuog();
        goto ogugiciyicewkyue;
        esscoiyogsoqoquc:
    }
}
