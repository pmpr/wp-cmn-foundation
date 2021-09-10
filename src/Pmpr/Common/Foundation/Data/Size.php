<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        goto wqwmkcisgiyyoyam;
        makeckokeoicueia:
        $this->isCrop = $megcasiyeqqowmmi;
        goto kkckckioiqcwoukw;
        wmaqigaciaqiikcy:
        $this->width = $qeswwaqqsyymqawg;
        goto gosgumwgamwesssq;
        gosgumwgamwesssq:
        $this->height = $cswemwoyesycwkuq;
        goto makeckokeoicueia;
        wqwmkcisgiyyoyam:
        $this->name = $ymqmyyeuycgmigyo;
        goto wmaqigaciaqiikcy;
        kkckckioiqcwoukw:
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
    
    public function get($gkiuoymeukweiaaw = "\x77\x69\x64\x74\150") : ?int
    {
        goto wmigqcwwousgyuqc;
        cyeauauawcaoqwsi:
        return $qcgkuqesqqymcuui;
        goto egkiiogswgakiack;
        eqgwseukuesiwuuq:
        zocygeecusggsqgy:
        goto cyeauauawcaoqwsi;
        kaycsosiqusqeiio:
        oewkyegysuioqeuy:
        goto eqgwseukuesiwuuq;
        wmigqcwwousgyuqc:
        switch ($gkiuoymeukweiaaw) {
            case "\x68\x65\x69\147\x68\164":
                $qcgkuqesqqymcuui = $this->miskeyiwqsgcqwwo();
                goto zocygeecusggsqgy;
            default:
                $qcgkuqesqqymcuui = $this->qoqouugaaimaiqmi();
                goto zocygeecusggsqgy;
        }
        goto kaycsosiqusqeiio;
        egkiiogswgakiack:
    }
}
