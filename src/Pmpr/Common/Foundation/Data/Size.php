<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto ywqaqwigqqqcsyos;
        eussomccqmmumkoc:
        $this->width = $qeswwaqqsyymqawg;
        goto isiseiywogusquiy;
        isiseiywogusquiy:
        $this->height = $cswemwoyesycwkuq;
        goto uquciwyocygmwaeq;
        uquciwyocygmwaeq:
        $this->isCrop = $megcasiyeqqowmmi;
        goto ukuqoksosmkiycci;
        ywqaqwigqqqcsyos:
        $this->name = $ymqmyyeuycgmigyo;
        goto eussomccqmmumkoc;
        ukuqoksosmkiycci:
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
    
    public function get($gkiuoymeukweiaaw = "\167\x69\x64\x74\x68") : ?int
    {
        goto aiwaekeqciwyimwi;
        wmaqigaciaqiikcy:
        ycoiwiguwggowsug:
        goto gosgumwgamwesssq;
        aiwaekeqciwyimwi:
        switch ($gkiuoymeukweiaaw) {
            case "\150\145\x69\x67\x68\164":
                $qcgkuqesqqymcuui = $this->miskeyiwqsgcqwwo();
                goto ycoiwiguwggowsug;
            default:
                $qcgkuqesqqymcuui = $this->qoqouugaaimaiqmi();
                goto ycoiwiguwggowsug;
        }
        goto wqwmkcisgiyyoyam;
        gosgumwgamwesssq:
        return $qcgkuqesqqymcuui;
        goto makeckokeoicueia;
        wqwmkcisgiyyoyam:
        ykyuusouwcesskqe:
        goto wmaqigaciaqiikcy;
        makeckokeoicueia:
    }
}
