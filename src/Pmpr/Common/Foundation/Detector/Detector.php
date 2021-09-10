<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        return $this->is("\x6d\x6f\142\151\x6c\x65");
    }
    
    public function uggoocigiyiqkmww() : bool
    {
        return $this->is("\x63\157\x6d\x70\x75\164\145\x72");
    }
    
    public function gsuucswsiuggysyw() : bool
    {
        return $this->is("\164\141\142\x6c\x65\164");
    }
    
    public function iwuicqgsgkaeikwa() : bool
    {
        return $this->is("\x43\x68\162\x6f\x6d\x65");
    }
    
    public function yksyugcywqmuqgwo() : bool
    {
        return $this->is("\x46\151\162\145\146\157\170");
    }
    
    private function is($eqgoocgaqwqcimie) : bool
    {
        goto acwaqgoyqeucuaog;
        uskmmqwwysiawwwa:
        skecwsguwggckqom:
        goto uiucgkyeaqmqkyqs;
        akkwmeyiiekgcemi:
        switch ($eqgoocgaqwqcimie) {
            case "\143\x6f\x6d\x70\x75\164\x65\x72":
                return !$syowsmcowosssaos->qawecuimqqcqwgsw();
            case "\164\x61\x62\154\145\164":
                return $syowsmcowosssaos->gsuucswsiuggysyw();
            case "\155\x6f\142\151\154\145":
                return $syowsmcowosssaos->qawecuimqqcqwgsw() && !$syowsmcowosssaos->gsuucswsiuggysyw();
            case "\102\162\x61\166\145":
                return Browser::BROWSER_BRAVE === $quckouuiqiiowoei;
            case "\103\150\162\157\155\x65":
                return Browser::BROWSER_CHROME === $quckouuiqiiowoei;
            case "\106\151\162\145\x66\157\x78":
                return Browser::BROWSER_FIREFOX === $quckouuiqiiowoei;
            case "\x45\x64\147\x65":
                return Browser::BROWSER_EDGE === $quckouuiqiiowoei;
            case "\x49\x6e\x74\145\162\156\x65\x74\40\x45\x78\x70\154\x6f\x72\145\162":
                return Browser::BROWSER_IE === $quckouuiqiiowoei;
            case "\117\160\145\162\141":
                return Browser::BROWSER_OPERA === $quckouuiqiiowoei;
            case "\123\141\146\x61\162\x69":
                return Browser::BROWSER_SAFARI === $quckouuiqiiowoei;
            case "\123\141\146\x61\162\x69\40\157\x6e\x20\151\120\x68\x6f\156\145":
                return Browser::BROWSER_IPHONE === $quckouuiqiiowoei;
            default:
                return true;
        }
        goto uskmmqwwysiawwwa;
        siykkykaeiswaqmc:
        $syowsmcowosssaos = $this->gekgcikwymwuuuog();
        goto akkwmeyiiekgcemi;
        uiucgkyeaqmqkyqs:
        iciimkyykgigcesk:
        goto iqgwecwqkqwkmkig;
        acwaqgoyqeucuaog:
        $quckouuiqiiowoei = $this->aagmmewiwysmgseq()->aagmmewiwysmgseq();
        goto siykkykaeiswaqmc;
        iqgwecwqkqwkmkig:
    }
}
