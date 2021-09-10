<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Slider extends Field
{
    
    protected array $images = [];
    
    protected array $flickity = [];
    
    protected array $imageAttributes = [];
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $somsiuiquigiqsmk, array $ucwamkesemusoeyc = [], ?string $mkqqqewsokcswckc = null)
    {
        goto cykoggeawyosiwuw;
        umguqywougaucwew:
        $this->images = $somsiuiquigiqsmk;
        goto mcekqamqcmywscmu;
        cykoggeawyosiwuw:
        parent::__construct("\163\x6c\x69\x64\x65\162", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        goto umguqywougaucwew;
        mcekqamqcmywscmu:
        $this->imageAttributes = $ucwamkesemusoeyc;
        goto egcywciwasakksyg;
        egcywciwasakksyg:
    }
    
    public function yumisumuwkywyyqk() : ?array
    {
        return $this->images;
    }
    
    public function gusyugwmyiwwsmui($somsiuiquigiqsmk) : self
    {
        $this->images = $somsiuiquigiqsmk;
        return $this;
    }
    
    public function igqaeymkskkcckac() : ?array
    {
        return $this->flickity;
    }
    
    public function quoekiugscwkoeoo($qweosuogcimgomwi) : self
    {
        $this->flickity = $qweosuogcimgomwi;
        return $this;
    }
    
    public function kkyeqssqcoqmoycc() : ?array
    {
        return $this->imageAttributes;
    }
    
    public function omsioukysssesasy($ucwamkesemusoeyc) : self
    {
        $this->imageAttributes = $ucwamkesemusoeyc;
        return $this;
    }
    
    public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array
    {
        $kkeqqkkkqwkocsyu["\151\155\141\147\x65\x2d\141\x74\x74\162"] = $this->kkyeqssqcoqmoycc();
        return parent::uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii);
    }
}
