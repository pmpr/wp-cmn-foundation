<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc, "\x73\145\x6c\x65\x63\x74\x32");
        $this->igmaewykumgwoaoy("\144\x61\x74\141\x2d\x61\x64\x64\141\142\x6c\x65", "\x66\x61\154\163\145");
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
        goto qooqgmcaekwgiqwk;
        wcywiwisuykessuc:
        return $this;
        goto euwcskwkgqiousgk;
        aouqiuqoigamkwkw:
        imeksugkqgiymkue:
        goto iqgyyysiewuckqwg;
        ywomuwkqguqiwgac:
        foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) {
            $this->oeewiaacscgyamai($igqsaukqcqscimok);
            miqwiyoooqksyaoq:
        }
        goto aouqiuqoigamkwkw;
        iqgyyysiewuckqwg:
        cyywwoiwqioiaiwy:
        goto wcywiwisuykessuc;
        qooqgmcaekwgiqwk:
        if (!(is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi)) {
            goto cyywwoiwqioiaiwy;
        }
        goto ywomuwkqguqiwgac;
        euwcskwkgqiousgk:
    }
    
    public function ikgocaywoggomiak($giqggecqqikcysgq = null) : self
    {
        goto qkooyqycsyamoqco;
        qkooyqycsyamoqco:
        if (!$giqggecqqikcysgq) {
            goto iauikwwuewwacuck;
        }
        goto wmiyagiicyqykgyk;
        gkcymqkuaqimgogw:
        return $this;
        goto mmqissyumkkkcymu;
        yiwwsymuckeyaqaq:
        iauikwwuewwacuck:
        goto gkcymqkuaqimgogw;
        wmiyagiicyqykgyk:
        $this->igmaewykumgwoaoy("\x64\141\x74\141\55\155\141\x78\151\155\165\155\55\163\x65\154\145\143\164\x69\157\x6e\55\x6c\145\156\x67\x74\x68", (string) $giqggecqqikcysgq);
        goto yiwwsymuckeyaqaq;
        mmqissyumkkkcymu:
    }
    
    public function soyqkauogoaqekos() : self
    {
        $this->oockkiieqcwiocga("\165\x73\x65\x72\163");
        return $this;
    }
    
    public function yyayequseyasoyks() : self
    {
        $this->oockkiieqcwiocga("\164\145\x72\x6d\163");
        return $this;
    }
    
    public function smmismmuuccmscya() : self
    {
        $this->oockkiieqcwiocga("\160\157\x73\x74\163");
        return $this;
    }
    
    public function squsacgomqgkakaw() : ?string
    {
        return $this->target;
    }
    
    public function imwouwmsiukakwqi() : self
    {
        $this->oockkiieqcwiocga("\143\157\x6d\155\x65\156\164\163");
        return $this;
    }
    
    public function oockkiieqcwiocga(?string $ccamueccusigaaio) : self
    {
        $this->target = $ccamueccusigaaio;
        return $this;
    }
    
    public function eukmukacucooequu(array $ywmkwiwkosakssii = []) : self
    {
        $this->igmaewykumgwoaoy("\x64\141\164\x61\x2d\141\162\x67\163", json_encode($ywmkwiwkosakssii));
        return $this;
    }
    
    public function osmkwgikieoyykwg() : self
    {
        $this->oikgogcweiiaocka()->usoqcyyugsuyiewc("\x73\x6f\x72\x74\x61\x62\154\145\55\163\x65\x6c\145\143\164\62")->qigsyyqgewgskemg("\x73\157\162\164\141\142\x6c\x65\55\x73\145\154\x65\143\x74\x32");
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
        return $this->aseocggwwegcmqes("\155\165\154\x74\x69{$this->gueasuouwqysmomu()}");
    }
    
    public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi = null) : self
    {
        return $this->igmaewykumgwoaoy("\x64\x61\164\141\55\160\x6c\x61\143\x65\x68\x6f\154\x64\x65\x72", $iwiewowoqmoekyqi);
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto awwqsoommoiqeciy;
        occamqsmqmmeeqqq:
        $this->igmaewykumgwoaoy("\143\x6c\x61\x73\x73", "\143\165\x73\x74\157\x6d\55\x73\145\154\145\x63\164\62\x2d\163\145\x6c\145\x63\164\157\x72");
        goto egwwoamyomwcwiua;
        uakwiicomqaccaay:
        goto qkiiyckesqsyyuyu;
        goto siyayucuuoakcueq;
        akcuaggkmmcguucw:
        if (!is_array($oammesyieqmwuwyi)) {
            goto yswwqwicwisywcag;
        }
        goto amyqmkoiiowmmgkw;
        amyqmkoiiowmmgkw:
        if (!$this->squsacgomqgkakaw()) {
            goto msociooiiwqqcwkq;
        }
        goto iiuieoeegigaoqig;
        waesmikkwwggimew:
        msociooiiwqqcwkq:
        goto eiqoqssiommacioa;
        yiuycgyoqoeiqyaw:
        yswwqwicwisywcag:
        goto awquyomcikuqeems;
        egwwoamyomwcwiua:
        qkiiyckesqsyyuyu:
        goto uqusmgkqcwisoomy;
        iiuieoeegigaoqig:
        $this->igmaewykumgwoaoy("\144\141\164\141\55\164\x61\162\147\145\164", $this->squsacgomqgkakaw());
        goto waesmikkwwggimew;
        siyayucuuoakcueq:
        uweeaukswwkcykom:
        goto occamqsmqmmeeqqq;
        eiqoqssiommacioa:
        $this->igmaewykumgwoaoy("\x64\141\164\x61\x2d\x69\164\145\155\x73", json_encode($oammesyieqmwuwyi));
        goto yiuycgyoqoeiqyaw;
        seeamagcyugquuea:
        $this->igmaewykumgwoaoy("\143\x6c\141\x73\163", "\x73\x65\x6c\145\x63\x74\x32\55\x73\x65\x6c\x65\x63\x74\157\162");
        goto uakwiicomqaccaay;
        awwqsoommoiqeciy:
        if ($this->somyygqqawwswkyk()) {
            goto uweeaukswwkcykom;
        }
        goto seeamagcyugquuea;
        uqusmgkqcwisoomy:
        $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa();
        goto akcuaggkmmcguucw;
        awquyomcikuqeems:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto sqgiugsaigagemae;
        sqgiugsaigagemae:
    }
}
