<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Date extends Field
{
    
    protected ?string $timezoneMetaKey;
    
    protected ?string $dateFormat;
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null)
    {
        goto iacysqqoouuqasgw;
        iacysqqoouuqasgw:
        parent::__construct("\x74\145\170\164\137\144\x61\164\145", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        goto agicwkeiuocqwcog;
        qiqgkqkyqugyesaq:
        $this->masauymeceuiyceo();
        goto ogseoooqimcomuyi;
        agicwkeiuocqwcog:
        $this->qigsyyqgewgskemg("\x70\162\x2d\144\141\164\x65\x70\x69\x63\x6b\145\162");
        goto qiqgkqkyqugyesaq;
        ogseoooqimcomuyi:
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
