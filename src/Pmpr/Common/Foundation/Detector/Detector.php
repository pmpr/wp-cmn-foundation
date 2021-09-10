<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        goto eugsgogsukuqwyou;
        eugsgogsukuqwyou:
        $this->device = new Mobile_Detect();
        goto yeyskwsagaowouas;
        ueiwqykysgmsogyo:
        parent::__construct();
        goto uqsauksiquqaiiiw;
        yeyskwsagaowouas:
        $this->browser = Browser::symcgieuakksimmu();
        goto ueiwqykysgmsogyo;
        uqsauksiquqaiiiw:
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
        return $this->is("\155\x6f\x62\x69\154\145");
    }
    
    public function uggoocigiyiqkmww() : bool
    {
        return $this->is("\143\157\x6d\160\x75\164\145\162");
    }
    
    public function gsuucswsiuggysyw() : bool
    {
        return $this->is("\x74\x61\142\154\x65\x74");
    }
    
    public function iwuicqgsgkaeikwa() : bool
    {
        return $this->is("\103\150\x72\x6f\x6d\145");
    }
    
    public function yksyugcywqmuqgwo() : bool
    {
        return $this->is("\106\x69\162\x65\x66\157\170");
    }
    
    private function is($eqgoocgaqwqcimie) : bool
    {
        goto acwaqgoyqeucuaog;
        uskmmqwwysiawwwa:
        skecwsguwggckqom:
        goto uiucgkyeaqmqkyqs;
        acwaqgoyqeucuaog:
        $quckouuiqiiowoei = $this->aagmmewiwysmgseq()->aagmmewiwysmgseq();
        goto siykkykaeiswaqmc;
        akkwmeyiiekgcemi:
        switch ($eqgoocgaqwqcimie) {
            case "\x63\157\x6d\x70\x75\164\x65\162":
                return !$syowsmcowosssaos->qawecuimqqcqwgsw();
            case "\x74\x61\x62\x6c\145\x74":
                return $syowsmcowosssaos->gsuucswsiuggysyw();
            case "\155\157\x62\x69\154\x65":
                return $syowsmcowosssaos->qawecuimqqcqwgsw() && !$syowsmcowosssaos->gsuucswsiuggysyw();
            case "\x42\162\x61\166\x65":
                return Browser::BROWSER_BRAVE === $quckouuiqiiowoei;
            case "\103\150\162\x6f\x6d\145":
                return Browser::BROWSER_CHROME === $quckouuiqiiowoei;
            case "\x46\x69\x72\x65\x66\x6f\170":
                return Browser::BROWSER_FIREFOX === $quckouuiqiiowoei;
            case "\x45\x64\147\x65":
                return Browser::BROWSER_EDGE === $quckouuiqiiowoei;
            case "\x49\156\164\x65\162\156\x65\164\x20\x45\x78\160\154\157\x72\x65\162":
                return Browser::BROWSER_IE === $quckouuiqiiowoei;
            case "\117\160\x65\162\141":
                return Browser::BROWSER_OPERA === $quckouuiqiiowoei;
            case "\x53\x61\x66\x61\162\151":
                return Browser::BROWSER_SAFARI === $quckouuiqiiowoei;
            case "\x53\141\x66\141\162\151\x20\x6f\156\x20\x69\120\x68\x6f\156\x65":
                return Browser::BROWSER_IPHONE === $quckouuiqiiowoei;
            default:
                return true;
        }
        goto uskmmqwwysiawwwa;
        uiucgkyeaqmqkyqs:
        iciimkyykgigcesk:
        goto iqgwecwqkqwkmkig;
        siykkykaeiswaqmc:
        $syowsmcowosssaos = $this->gekgcikwymwuuuog();
        goto akkwmeyiiekgcemi;
        iqgwecwqkqwkmkig:
    }
}
