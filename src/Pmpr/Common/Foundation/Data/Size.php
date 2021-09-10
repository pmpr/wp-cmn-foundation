<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        gosgumwgamwesssq:
        $this->height = $cswemwoyesycwkuq;
        goto makeckokeoicueia;
        wmaqigaciaqiikcy:
        $this->width = $qeswwaqqsyymqawg;
        goto gosgumwgamwesssq;
        makeckokeoicueia:
        $this->isCrop = $megcasiyeqqowmmi;
        goto kkckckioiqcwoukw;
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
    
    public function get($gkiuoymeukweiaaw = "\167\x69\144\x74\x68") : ?int
    {
        goto wmigqcwwousgyuqc;
        cyeauauawcaoqwsi:
        return $qcgkuqesqqymcuui;
        goto egkiiogswgakiack;
        kaycsosiqusqeiio:
        oewkyegysuioqeuy:
        goto eqgwseukuesiwuuq;
        eqgwseukuesiwuuq:
        zocygeecusggsqgy:
        goto cyeauauawcaoqwsi;
        wmigqcwwousgyuqc:
        switch ($gkiuoymeukweiaaw) {
            case "\150\145\151\x67\x68\x74":
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
