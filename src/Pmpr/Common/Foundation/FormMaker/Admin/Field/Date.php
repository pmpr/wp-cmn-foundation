<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        agicwkeiuocqwcog:
        $this->masauymeceuiyceo();
        goto qiqgkqkyqugyesaq;
        qqamsqiwmckymggm:
        parent::__construct("\164\x65\x78\x74\137\x64\x61\x74\145", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        goto iacysqqoouuqasgw;
        iacysqqoouuqasgw:
        $this->qigsyyqgewgskemg("\x70\x72\55\x64\x61\x74\x65\160\x69\143\x6b\x65\x72");
        goto agicwkeiuocqwcog;
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
