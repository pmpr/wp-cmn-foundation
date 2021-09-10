<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class File extends OptionAwareField
{
    
    protected $previewSize;
    
    protected array $queryArgs = [];
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null)
    {
        parent::__construct("\x66\x69\154\145", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        
        $this->qigsyyqgewgskemg("\143\155\142\x32\55\x75\160\154\157\141\x64\x2d\146\x69\x6c\x65")->wyqeckayigciacse("\164\150\165\155\142\x6e\x61\x69\x6c")->kesomeowemmyygey("\x75\x72\154", false);
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
        $kkeqqkkkqwkocsyu["\164\145\x78\x74"]["\x61\x64\x64\137\165\x70\x6c\x6f\141\144\x5f\x66\x69\x6c\x65\137\164\145\x78\164"] = __("\101\x64\x64\x20\157\x72\x20\x55\160\x6c\157\x61\144\x20\x46\x69\154\145", PR__CMN__FOUNDATION);
        return parent::uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii);
    }
}
