<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Date extends Field
{
    
    protected ?string $timezoneMetaKey;
    
    protected ?string $dateFormat;
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null)
    {
        goto agicwkeiuocqwcog;
        agicwkeiuocqwcog:
        parent::__construct("\x74\x65\170\x74\x5f\x64\141\164\x65", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        goto qiqgkqkyqugyesaq;
        qiqgkqkyqugyesaq:
        $this->qigsyyqgewgskemg("\x70\x72\55\144\141\164\x65\160\151\x63\153\145\x72");
        goto ogseoooqimcomuyi;
        ogseoooqimcomuyi:
        $this->masauymeceuiyceo();
        goto uakwkocgsmmiqwic;
        uakwkocgsmmiqwic:
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
