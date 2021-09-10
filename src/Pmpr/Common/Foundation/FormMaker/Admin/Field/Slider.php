<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        goto soacakggqekwwwiu;
        umguqywougaucwew:
        $this->imageAttributes = $ucwamkesemusoeyc;
        goto mcekqamqcmywscmu;
        cykoggeawyosiwuw:
        $this->images = $somsiuiquigiqsmk;
        goto umguqywougaucwew;
        soacakggqekwwwiu:
        parent::__construct("\163\154\151\144\x65\162", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        goto cykoggeawyosiwuw;
        mcekqamqcmywscmu:
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
        $kkeqqkkkqwkocsyu["\x69\x6d\x61\147\x65\55\141\x74\x74\x72"] = $this->kkyeqssqcoqmoycc();
        return parent::uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii);
    }
}
