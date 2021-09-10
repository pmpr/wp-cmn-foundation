<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Date extends Field
{
    
    protected ?string $timezoneMetaKey;
    
    protected ?string $dateFormat;
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null)
    {
        goto ywigcekyomqoyqqi;
        kkiomqcmqcsoecag:
        $this->qigsyyqgewgskemg("\x70\x72\55\144\x61\x74\145\160\151\x63\153\x65\x72");
        goto gygqsmoiqagyeguk;
        gygqsmoiqagyeguk:
        $this->masauymeceuiyceo();
        goto qqamsqiwmckymggm;
        ywigcekyomqoyqqi:
        parent::__construct("\x74\145\170\x74\137\144\x61\164\x65", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        goto kkiomqcmqcsoecag;
        qqamsqiwmckymggm:
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
