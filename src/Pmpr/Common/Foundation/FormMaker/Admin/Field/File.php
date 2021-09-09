<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class File extends OptionAwareField
{
    
    protected $previewSize;
    
    protected array $queryArgs = [];
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null)
    {
        parent::__construct("\x66\151\154\x65", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        
        $this->qigsyyqgewgskemg("\143\x6d\142\x32\55\x75\x70\154\x6f\x61\144\55\x66\x69\x6c\x65")->wyqeckayigciacse("\x74\150\x75\x6d\x62\156\141\151\154")->kesomeowemmyygey("\x75\162\154", false);
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
        goto oucoguycmqycwegy;
        wqgoeugeqekuyesm:
        return $this;
        goto qoaekweeqcoeagay;
        wwskooaumymgscgo:
        wiywcsqiaywacscq:
        goto wqgoeugeqekuyesm;
        oucoguycmqycwegy:
        foreach ($seauiwyeoycowegg as $uusmaiomayssaecw => $awacioyscseiomkc) {
            $this->oieccmgqekecomks($uusmaiomayssaecw, $awacioyscseiomkc);
            wgsmkaikymwsokok:
        }
        goto wwskooaumymgscgo;
        qoaekweeqcoeagay:
    }
    
    public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array
    {
        $kkeqqkkkqwkocsyu["\x74\x65\x78\164"]["\x61\x64\x64\137\x75\x70\x6c\x6f\141\x64\x5f\x66\151\x6c\145\x5f\164\x65\x78\164"] = __("\x41\x64\x64\40\157\x72\40\125\160\x6c\157\x61\x64\x20\x46\x69\154\145", PR__CMN__FOUNDATION);
        return parent::uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii);
    }
}
