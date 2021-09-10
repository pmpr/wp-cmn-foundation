<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class File extends OptionAwareField
{
    
    protected $previewSize;
    
    protected array $queryArgs = [];
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null)
    {
        parent::__construct("\146\x69\154\145", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        
        $this->qigsyyqgewgskemg("\143\x6d\x62\x32\x2d\165\160\x6c\x6f\141\144\x2d\x66\151\154\x65")->wyqeckayigciacse("\x74\x68\x75\x6d\x62\156\141\x69\x6c")->kesomeowemmyygey("\x75\162\154", false);
    }
    
    public function wuwyssaosksokqga()
    {
        return $this->previewSize;
    }
    
    public function wyqeckayigciacse($cosceaceqiwayaag) : self
    {
        $this->previewSize = $cosceaceqiwayaag;
        return $this;
    }
    
    public function qaqaomkkmcmaamwm() : ?array
    {
        return $this->queryArgs;
    }
    public function oieccmgqekecomks($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        $this->queryArgs[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        return $this;
    }
    
    public function qagaugomegkiimwa(array $seauiwyeoycowegg) : self
    {
        goto wiwcuiguaogckaiq;
        wiwcuiguaogckaiq:
        foreach ($seauiwyeoycowegg as $uusmaiomayssaecw => $awacioyscseiomkc) {
            $this->oieccmgqekecomks($uusmaiomayssaecw, $awacioyscseiomkc);
            magkmscoqweasoea:
        }
        goto asigmmeaiqugsqkc;
        asigmmeaiqugsqkc:
        oegsgowaacesqmia:
        goto yaciickwyewwoisc;
        yaciickwyewwoisc:
        return $this;
        goto kkqkyaokeyacgwmy;
        kkqkyaokeyacgwmy:
    }
    
    public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array
    {
        $kkeqqkkkqwkocsyu["\x74\145\x78\x74"]["\x61\144\144\x5f\165\160\x6c\x6f\141\144\x5f\x66\x69\x6c\145\137\164\145\x78\x74"] = __("\101\144\x64\x20\x6f\x72\x20\125\x70\x6c\x6f\x61\x64\40\x46\x69\x6c\x65", PR__CMN__FOUNDATION);
        return parent::uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii);
    }
}
