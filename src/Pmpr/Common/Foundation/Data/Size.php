<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Data;


class Size extends Data
{
    
    protected ?string $name = '';
    
    protected ?int $width = 0;
    
    protected ?int $height = 0;
    
    protected bool $isCustom = false;
    
    protected bool $isCrop = false;
    public function __construct(string $ymqmyyeuycgmigyo, int $qeswwaqqsyymqawg, int $cswemwoyesycwkuq = 0, bool $megcasiyeqqowmmi = false)
    {
        goto gsyaeawoooqaaeee;
        oyuowamwkcqmgawq:
        $this->height = $cswemwoyesycwkuq;
        goto skqaokokoiksumqq;
        gsyaeawoooqaaeee:
        $this->name = $ymqmyyeuycgmigyo;
        goto oeqeikgwugwquskq;
        skqaokokoiksumqq:
        $this->isCrop = $megcasiyeqqowmmi;
        goto uyaugcksmygwamwo;
        oeqeikgwugwquskq:
        $this->width = $qeswwaqqsyymqawg;
        goto oyuowamwkcqmgawq;
        uyaugcksmygwamwo:
    }
    
    public function aakmagwggmkoiiyu() : ?string
    {
        return $this->name;
    }
    
    public function usuqmwksoeaayaig(?string $ymqmyyeuycgmigyo) : self
    {
        $this->name = $ymqmyyeuycgmigyo;
        return $this;
    }
    
    public function qoqouugaaimaiqmi() : ?int
    {
        return $this->width;
    }
    
    public function esyyaomkkeccysos(?int $qeswwaqqsyymqawg) : self
    {
        $this->width = $qeswwaqqsyymqawg;
        return $this;
    }
    
    public function miskeyiwqsgcqwwo() : ?int
    {
        return $this->height;
    }
    
    public function seiwcgsykwcukmsc(?int $cswemwoyesycwkuq) : self
    {
        $this->height = $cswemwoyesycwkuq;
        return $this;
    }
    
    public function somyygqqawwswkyk() : bool
    {
        return $this->isCustom;
    }
    
    public function yogkakywcccsikkg(bool $somyygqqawwswkyk) : self
    {
        $this->isCustom = $somyygqqawwswkyk;
        return $this;
    }
    
    public function megcasiyeqqowmmi() : bool
    {
        return $this->isCrop;
    }
    
    public function quckcaucawkysaii(bool $megcasiyeqqowmmi) : self
    {
        $this->isCrop = $megcasiyeqqowmmi;
        return $this;
    }
    
    public function get($gkiuoymeukweiaaw = "\x77\x69\x64\x74\x68") : ?int
    {
        goto eewmmuqwyuumymau;
        sagguseommuioaag:
        return $qcgkuqesqqymcuui;
        goto mkiiukgsugssgoea;
        weiqkaaeieoaycas:
        ieescsoooicgswmc:
        goto ysceuaykccoiqqec;
        ysceuaykccoiqqec:
        qkmciokkseyqoiye:
        goto sagguseommuioaag;
        eewmmuqwyuumymau:
        switch ($gkiuoymeukweiaaw) {
            case "\150\145\151\147\x68\x74":
                $qcgkuqesqqymcuui = $this->miskeyiwqsgcqwwo();
                goto qkmciokkseyqoiye;
            default:
                $qcgkuqesqqymcuui = $this->qoqouugaaimaiqmi();
                goto qkmciokkseyqoiye;
        }
        goto weiqkaaeieoaycas;
        mkiiukgsugssgoea:
    }
}
