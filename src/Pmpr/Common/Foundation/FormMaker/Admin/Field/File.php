<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        
        $this->qigsyyqgewgskemg("\x63\x6d\142\x32\x2d\165\160\154\x6f\x61\144\55\146\x69\154\x65")->wyqeckayigciacse("\164\150\x75\x6d\142\156\141\x69\154")->kesomeowemmyygey("\165\162\x6c", false);
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
        yaciickwyewwoisc:
        return $this;
        goto kkqkyaokeyacgwmy;
        asigmmeaiqugsqkc:
        oegsgowaacesqmia:
        goto yaciickwyewwoisc;
        wiwcuiguaogckaiq:
        foreach ($seauiwyeoycowegg as $uusmaiomayssaecw => $awacioyscseiomkc) {
            $this->oieccmgqekecomks($uusmaiomayssaecw, $awacioyscseiomkc);
            magkmscoqweasoea:
        }
        goto asigmmeaiqugsqkc;
        kkqkyaokeyacgwmy:
    }
    
    public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array
    {
        $kkeqqkkkqwkocsyu["\x74\x65\170\164"]["\141\x64\144\137\x75\160\154\x6f\141\x64\x5f\x66\151\x6c\x65\137\164\x65\170\164"] = __("\101\x64\144\40\x6f\162\40\125\160\x6c\x6f\x61\x64\x20\106\151\x6c\x65", PR__CMN__FOUNDATION);
        return parent::uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii);
    }
}
