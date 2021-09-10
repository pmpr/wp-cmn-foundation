<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class File extends OptionAwareField
{
    
    protected $previewSize;
    
    protected array $queryArgs = [];
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null)
    {
        parent::__construct("\x66\x69\x6c\145", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        
        $this->qigsyyqgewgskemg("\x63\x6d\x62\x32\55\165\160\154\157\x61\x64\55\146\x69\x6c\145")->wyqeckayigciacse("\164\150\x75\155\x62\x6e\141\151\154")->kesomeowemmyygey("\x75\162\154", false);
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
        goto magkmscoqweasoea;
        magkmscoqweasoea:
        foreach ($seauiwyeoycowegg as $uusmaiomayssaecw => $awacioyscseiomkc) {
            $this->oieccmgqekecomks($uusmaiomayssaecw, $awacioyscseiomkc);
            oegsgowaacesqmia:
        }
        goto wiwcuiguaogckaiq;
        asigmmeaiqugsqkc:
        return $this;
        goto yaciickwyewwoisc;
        wiwcuiguaogckaiq:
        ukyguyoqagmmemek:
        goto asigmmeaiqugsqkc;
        yaciickwyewwoisc:
    }
    
    public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array
    {
        $kkeqqkkkqwkocsyu["\164\145\170\164"]["\x61\x64\x64\x5f\x75\160\x6c\x6f\x61\144\x5f\146\151\x6c\x65\137\x74\145\x78\x74"] = __("\101\x64\x64\40\157\x72\40\x55\x70\x6c\157\x61\144\x20\106\151\154\x65", PR__CMN__FOUNDATION);
        return parent::uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii);
    }
}
