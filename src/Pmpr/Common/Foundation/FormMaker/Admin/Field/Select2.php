<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Select2 extends Select
{
    
    protected ?array $items = [];
    
    protected bool $isCustom = false;
    
    protected ?string $target = null;
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null)
    {
        parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc, "\163\145\154\x65\143\x74\62");
        $this->igmaewykumgwoaoy("\144\x61\x74\x61\55\x61\144\x64\141\142\x6c\145", "\x66\x61\x6c\x73\x65");
    }
    
    public function wasgwsogmuquqeaa() : ?array
    {
        return $this->items;
    }
    
    public function icsmsougoccqosgc(?array $oammesyieqmwuwyi) : self
    {
        $this->items = $oammesyieqmwuwyi;
        return $this;
    }
    
    public function oeewiaacscgyamai($igqsaukqcqscimok) : self
    {
        $this->items[] = $igqsaukqcqscimok;
        return $this;
    }
    
    public function wiweskwucmkcukcm($oammesyieqmwuwyi = []) : self
    {
        goto sskgisessswoogay;
        cmcokscaskcamuuq:
        foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) {
            $this->oeewiaacscgyamai($igqsaukqcqscimok);
            kgkckaeqcuaceuec:
        }
        goto eyqykmseeukuwiqy;
        sskgisessswoogay:
        if (!(is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi)) {
            goto isouaycmsuwaguek;
        }
        goto cmcokscaskcamuuq;
        kaaemgwqywywyaic:
        return $this;
        goto yioiswceaiqqiiwi;
        eyqykmseeukuwiqy:
        owqcgayymwauiqaa:
        goto wemoskgcoyswcqcw;
        wemoskgcoyswcqcw:
        isouaycmsuwaguek:
        goto kaaemgwqywywyaic;
        yioiswceaiqqiiwi:
    }
    
    public function ikgocaywoggomiak($giqggecqqikcysgq = null) : self
    {
        goto ommcykyccgwugoqm;
        aquqwcumywwyyaca:
        return $this;
        goto ysowyesceeamcimi;
        ommcykyccgwugoqm:
        if (!$giqggecqqikcysgq) {
            goto mmqwyegygkueycwc;
        }
        goto iqmsuqsowuugeqkk;
        qyeqgykkuoikusue:
        mmqwyegygkueycwc:
        goto aquqwcumywwyyaca;
        iqmsuqsowuugeqkk:
        $this->igmaewykumgwoaoy("\x64\x61\x74\141\x2d\x6d\141\170\151\x6d\165\x6d\x2d\x73\x65\154\145\x63\x74\x69\x6f\x6e\x2d\154\x65\x6e\147\x74\150", (string) $giqggecqqikcysgq);
        goto qyeqgykkuoikusue;
        ysowyesceeamcimi:
    }
    
    public function soyqkauogoaqekos() : self
    {
        $this->oockkiieqcwiocga("\x75\x73\x65\162\163");
        return $this;
    }
    
    public function yyayequseyasoyks() : self
    {
        $this->oockkiieqcwiocga("\x74\145\162\155\163");
        return $this;
    }
    
    public function smmismmuuccmscya() : self
    {
        $this->oockkiieqcwiocga("\160\157\163\164\163");
        return $this;
    }
    
    public function squsacgomqgkakaw() : ?string
    {
        return $this->target;
    }
    
    public function imwouwmsiukakwqi() : self
    {
        $this->oockkiieqcwiocga("\x63\157\x6d\155\145\x6e\x74\163");
        return $this;
    }
    
    public function oockkiieqcwiocga(?string $ccamueccusigaaio) : self
    {
        $this->target = $ccamueccusigaaio;
        return $this;
    }
    
    public function eukmukacucooequu(array $ywmkwiwkosakssii = []) : self
    {
        $this->igmaewykumgwoaoy("\144\141\x74\x61\55\141\x72\147\163", json_encode($ywmkwiwkosakssii));
        return $this;
    }
    
    public function osmkwgikieoyykwg() : self
    {
        $this->oikgogcweiiaocka()->usoqcyyugsuyiewc("\163\157\162\x74\141\x62\154\145\x2d\163\x65\154\145\143\x74\x32")->qigsyyqgewgskemg("\x73\157\x72\164\x61\142\154\x65\55\x73\145\x6c\145\x63\x74\62");
        return $this;
    }
    
    public function somyygqqawwswkyk() : ?bool
    {
        return $this->isCustom;
    }
    
    public function yogkakywcccsikkg(bool $somyygqqawwswkyk) : self
    {
        $this->isCustom = $somyygqqawwswkyk;
        return $this;
    }
    
    public function oikgogcweiiaocka() : self
    {
        return $this->aseocggwwegcmqes("\x6d\x75\x6c\x74\x69{$this->gueasuouwqysmomu()}");
    }
    
    public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi = null) : self
    {
        return $this->igmaewykumgwoaoy("\x64\x61\x74\141\55\160\x6c\141\143\x65\150\157\154\144\x65\162", $iwiewowoqmoekyqi);
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto akeaemmagkkwsamy;
        aaqeqiaquomiwywg:
        kqqscwcakcekcsyc:
        goto gewikeykcysagaki;
        gkmgcqsicokksosc:
        $this->igmaewykumgwoaoy("\143\154\x61\x73\163", "\143\x75\x73\164\x6f\155\55\x73\x65\154\x65\143\164\x32\x2d\x73\x65\x6c\x65\143\164\x6f\162");
        goto igqagwwkgcgkweay;
        igqagwwkgcgkweay:
        ksqksagegqimoksg:
        goto easiiuiosaweasya;
        gewikeykcysagaki:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto wguqeameioywkcum;
        easiiuiosaweasya:
        $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa();
        goto cswacsayomisqwsc;
        ouicgucmgawgyais:
        goto ksqksagegqimoksg;
        goto igkewuickceykeoc;
        sckmgcowqceaoicu:
        $this->igmaewykumgwoaoy("\144\141\x74\141\55\151\164\x65\155\x73", json_encode($oammesyieqmwuwyi));
        goto aaqeqiaquomiwywg;
        eqiqamsciuamsqoq:
        $this->igmaewykumgwoaoy("\144\141\164\x61\55\x74\141\x72\x67\x65\164", $this->squsacgomqgkakaw());
        goto qesamoswoqgcuyae;
        akeaemmagkkwsamy:
        if ($this->somyygqqawwswkyk()) {
            goto qqiyociaumgusckw;
        }
        goto cgykugsckguoykyi;
        qesamoswoqgcuyae:
        kwmqeaimowikmkyy:
        goto sckmgcowqceaoicu;
        igkewuickceykeoc:
        qqiyociaumgusckw:
        goto gkmgcqsicokksosc;
        cgykugsckguoykyi:
        $this->igmaewykumgwoaoy("\x63\x6c\141\163\163", "\x73\x65\x6c\x65\143\x74\x32\55\x73\x65\x6c\x65\143\164\x6f\x72");
        goto ouicgucmgawgyais;
        cswacsayomisqwsc:
        if (!is_array($oammesyieqmwuwyi)) {
            goto kqqscwcakcekcsyc;
        }
        goto kigugswqqcsmeuey;
        kigugswqqcsmeuey:
        if (!$this->squsacgomqgkakaw()) {
            goto kwmqeaimowikmkyy;
        }
        goto eqiqamsciuamsqoq;
        wguqeameioywkcum:
    }
}
