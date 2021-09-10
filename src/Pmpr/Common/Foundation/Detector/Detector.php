<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        goto eiguqiumekikicuw;
        wwauaucuwsokocmm:
        $this->browser = Browser::symcgieuakksimmu();
        goto eccymasqomswiwug;
        eiguqiumekikicuw:
        $this->device = new Mobile_Detect();
        goto wwauaucuwsokocmm;
        eccymasqomswiwug:
        parent::__construct();
        goto yaaisamcwuuowiua;
        yaaisamcwuuowiua:
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
        return $this->is("\155\157\x62\151\154\x65");
    }
    
    public function uggoocigiyiqkmww() : bool
    {
        return $this->is("\143\157\x6d\160\165\x74\x65\162");
    }
    
    public function gsuucswsiuggysyw() : bool
    {
        return $this->is("\164\x61\142\x6c\x65\164");
    }
    
    public function iwuicqgsgkaeikwa() : bool
    {
        return $this->is("\x43\x68\162\x6f\x6d\x65");
    }
    
    public function yksyugcywqmuqgwo() : bool
    {
        return $this->is("\106\151\x72\x65\146\x6f\170");
    }
    
    private function is($eqgoocgaqwqcimie) : bool
    {
        goto yeyskwsagaowouas;
        iciimkyykgigcesk:
        eugsgogsukuqwyou:
        goto skecwsguwggckqom;
        skecwsguwggckqom:
        acoqamisuacwkqyo:
        goto acwaqgoyqeucuaog;
        ueiwqykysgmsogyo:
        $syowsmcowosssaos = $this->gekgcikwymwuuuog();
        goto uqsauksiquqaiiiw;
        yeyskwsagaowouas:
        $quckouuiqiiowoei = $this->aagmmewiwysmgseq()->aagmmewiwysmgseq();
        goto ueiwqykysgmsogyo;
        uqsauksiquqaiiiw:
        switch ($eqgoocgaqwqcimie) {
            case "\x63\x6f\x6d\x70\x75\164\x65\162":
                return !$syowsmcowosssaos->qawecuimqqcqwgsw();
            case "\x74\x61\x62\154\x65\x74":
                return $syowsmcowosssaos->gsuucswsiuggysyw();
            case "\x6d\x6f\x62\151\154\x65":
                return $syowsmcowosssaos->qawecuimqqcqwgsw() && !$syowsmcowosssaos->gsuucswsiuggysyw();
            case "\x42\162\x61\166\145":
                return Browser::BROWSER_BRAVE === $quckouuiqiiowoei;
            case "\x43\150\162\x6f\155\x65":
                return Browser::BROWSER_CHROME === $quckouuiqiiowoei;
            case "\106\151\162\145\146\157\170":
                return Browser::BROWSER_FIREFOX === $quckouuiqiiowoei;
            case "\x45\x64\147\x65":
                return Browser::BROWSER_EDGE === $quckouuiqiiowoei;
            case "\111\156\164\x65\x72\156\145\164\40\105\170\160\x6c\157\x72\x65\x72":
                return Browser::BROWSER_IE === $quckouuiqiiowoei;
            case "\x4f\x70\145\x72\141":
                return Browser::BROWSER_OPERA === $quckouuiqiiowoei;
            case "\123\x61\146\141\x72\x69":
                return Browser::BROWSER_SAFARI === $quckouuiqiiowoei;
            case "\123\141\x66\141\162\x69\40\x6f\156\40\x69\120\x68\157\x6e\x65":
                return Browser::BROWSER_IPHONE === $quckouuiqiiowoei;
            default:
                return true;
        }
        goto iciimkyykgigcesk;
        acwaqgoyqeucuaog:
    }
}
