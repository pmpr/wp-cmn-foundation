<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Date extends Field
{
    
    protected ?string $timezoneMetaKey;
    
    protected ?string $dateFormat;
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null)
    {
        goto gcqqgkkyicouoggc;
        gcqqgkkyicouoggc:
        parent::__construct("\x74\145\170\164\x5f\x64\x61\164\145", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        goto ieaqwmmgymscuiyq;
        scgywcukauccyoao:
        $this->masauymeceuiyceo();
        goto ycsmswoiwkaaqwci;
        ieaqwmmgymscuiyq:
        $this->qigsyyqgewgskemg("\x70\162\55\144\x61\164\x65\x70\x69\143\153\145\162");
        goto scgywcukauccyoao;
        ycsmswoiwkaaqwci:
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
