<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        goto amkuiuweeikqwmiy;
        cussqussoggmeosi:
        $this->imageAttributes = $ucwamkesemusoeyc;
        goto isqmsyisayasekmi;
        amkuiuweeikqwmiy:
        parent::__construct("\x73\154\x69\x64\x65\x72", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        goto aqswwkimeemgqqig;
        aqswwkimeemgqqig:
        $this->images = $somsiuiquigiqsmk;
        goto cussqussoggmeosi;
        isqmsyisayasekmi:
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
        $kkeqqkkkqwkocsyu["\x69\155\141\x67\145\x2d\141\164\164\162"] = $this->kkyeqssqcoqmoycc();
        return parent::uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii);
    }
}
