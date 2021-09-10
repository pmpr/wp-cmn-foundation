<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Date extends Field
{
    
    protected ?string $timezoneMetaKey;
    
    protected ?string $dateFormat;
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null)
    {
        goto qqamsqiwmckymggm;
        iacysqqoouuqasgw:
        $this->qigsyyqgewgskemg("\160\x72\x2d\144\141\164\145\160\x69\x63\153\145\x72");
        goto agicwkeiuocqwcog;
        qqamsqiwmckymggm:
        parent::__construct("\x74\145\x78\x74\137\x64\141\x74\x65", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        goto iacysqqoouuqasgw;
        agicwkeiuocqwcog:
        $this->masauymeceuiyceo();
        goto qiqgkqkyqugyesaq;
        qiqgkqkyqugyesaq:
    }
    
    public function meceicoawqkgwmoo() : ?string
    {
        return $this->timezoneMetaKey;
    }
    
    public function cyegqewoikkewamk(?string $kuywwkakmayqquok) : self
    {
        $this->timezoneMetaKey = $kuywwkakmayqquok;
        return $this;
    }
    
    public function uyomwmskouyyqyyq() : ?string
    {
        return $this->dateFormat;
    }
    
    public function migyiqecesmwseuy(?string $qquguecmwwmwomew) : self
    {
        $this->dateFormat = $qquguecmwwmwomew;
        return $this;
    }
}
