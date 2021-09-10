<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        goto uquciwyocygmwaeq;
        ukuqoksosmkiycci:
        $this->width = $qeswwaqqsyymqawg;
        goto ycoiwiguwggowsug;
        ycoiwiguwggowsug:
        $this->height = $cswemwoyesycwkuq;
        goto ykyuusouwcesskqe;
        ykyuusouwcesskqe:
        $this->isCrop = $megcasiyeqqowmmi;
        goto aiwaekeqciwyimwi;
        uquciwyocygmwaeq:
        $this->name = $ymqmyyeuycgmigyo;
        goto ukuqoksosmkiycci;
        aiwaekeqciwyimwi:
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
    
    public function get($gkiuoymeukweiaaw = "\x77\151\x64\164\x68") : ?int
    {
        goto gosgumwgamwesssq;
        makeckokeoicueia:
        wmaqigaciaqiikcy:
        goto kkckckioiqcwoukw;
        kkckckioiqcwoukw:
        wqwmkcisgiyyoyam:
        goto zocygeecusggsqgy;
        gosgumwgamwesssq:
        switch ($gkiuoymeukweiaaw) {
            case "\x68\145\151\x67\150\x74":
                $qcgkuqesqqymcuui = $this->miskeyiwqsgcqwwo();
                goto wqwmkcisgiyyoyam;
            default:
                $qcgkuqesqqymcuui = $this->qoqouugaaimaiqmi();
                goto wqwmkcisgiyyoyam;
        }
        goto makeckokeoicueia;
        zocygeecusggsqgy:
        return $qcgkuqesqqymcuui;
        goto oewkyegysuioqeuy;
        oewkyegysuioqeuy:
    }
}
