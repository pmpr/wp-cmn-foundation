<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Register;


class RegisterTaxonomy extends Register
{
    
    protected ?array $objectType = [];
    
    protected bool $singleValue = true;
    
    protected bool $dropdown = true;
    
    protected $metaBoxCb = null;
    
    protected ?bool $showTagcloude = null;
    
    protected ?string $defaultTerm = null;
    
    protected ?bool $showInQuickEdit = null;
    
    protected bool $showInAdminColumn = false;
    
    protected $metaBoxSanitizeCb = null;
    
    protected $updateCountCallback = null;
    public function __construct()
    {
        goto uqskcceawegkiakk;
        woomeusquuuqekig:
        $this->ykuiociqyewiqyog("\137\165\x70\x64\x61\164\x65\x5f\x70\x6f\x73\164\137\164\x65\x72\x6d\x5f\x63\x6f\x75\x6e\164");
        goto mcwswowewmqqckqw;
        uysygigskiiwsckq:
        $this->ckwgqocyuaysggma("\150\151\145\162\x61\162\x63\150\151\x63\141\x6c", false);
        goto woomeusquuuqekig;
        uqskcceawegkiakk:
        $this->hierarchical = true;
        goto uysygigskiiwsckq;
        mcwswowewmqqckqw:
    }
    
    public function aaamyckgicycisqq() : ?array
    {
        return $this->objectType;
    }
    
    public function kukswgcoysaeescm(?string $mqyaskyaekmkegmg) : self
    {
        $this->objectType[] = $mqyaskyaekmkegmg;
        return $this;
    }
    
    public function jsgkawekewookomk() : self
    {
        goto uggeicmsysmmaqqc;
        msouaocmygwukeos:
        return $this;
        goto euyiicoiumuescuk;
        qawueqwiyeiyecce:
        $sisssumicskyceeg = $this->giiayuqckuiecosm();
        goto oumqmgawoewueoio;
        uggeicmsysmmaqqc:
        $kcumookcwskcyqak = $this->qeeuwmmksmqiuywg();
        goto qawueqwiyeiyecce;
        oumqmgawoewueoio:
        $this->labels = ["\x6e\x61\155\x65" => _x($kcumookcwskcyqak, "\x74\141\x78\x6f\156\157\x6d\x79\x20\x67\x65\156\x65\x72\x61\x6c\x20\156\141\x6d\145", PR__CMN__FOUNDATION), "\x6d\145\x6e\x75\x5f\x6e\141\155\x65" => $kcumookcwskcyqak, "\145\x64\x69\x74\x5f\151\x74\145\x6d" => sprintf(__("\105\144\x69\164\40\45\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x61\154\x6c\x5f\x69\x74\145\155\x73" => sprintf(__("\x41\154\154\40\x25\163", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\156\157\x74\x5f\x66\157\x75\x6e\144" => sprintf(__("\116\157\40\45\163\x20\146\x6f\165\156\x64\56", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\165\160\144\x61\x74\145\x5f\x69\164\145\155" => sprintf(__("\125\x70\x64\141\164\145\40\x25\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\160\141\162\145\156\164\137\151\164\145\x6d" => sprintf(__("\120\x61\x72\145\x6e\x74\x20\x25\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x73\145\x61\162\143\x68\x5f\151\x74\x65\x6d\x73" => sprintf(__("\x53\145\141\162\x63\x68\40\x25\x73", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\141\x64\144\x5f\x6e\x65\167\x5f\x69\164\x65\x6d" => sprintf(__("\101\x64\144\40\116\x65\x77\x20\x25\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x73\151\x6e\147\x75\154\141\x72\x5f\156\x61\x6d\x65" => _x($sisssumicskyceeg, "\164\x61\170\157\156\x6f\155\171\40\163\x69\156\147\165\154\141\162\x20\x6e\141\155\x65", PR__CMN__FOUNDATION), "\x6e\x65\167\x5f\151\x74\x65\155\x5f\156\141\x6d\x65" => sprintf(__("\116\x65\x77\x20\x25\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x70\157\x70\x75\154\x61\162\x5f\151\x74\x65\x6d\163" => sprintf(__("\120\157\x70\165\x6c\x61\x72\40\45\163", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x70\141\x72\x65\x6e\164\137\x69\x74\145\155\x5f\x63\x6f\154\x6f\x6e" => sprintf(__("\120\x61\x72\145\x6e\164\x20\45\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x61\144\x64\137\157\162\x5f\162\145\155\x6f\166\145\x5f\151\x74\145\x6d\163" => sprintf(__("\101\x64\144\40\157\162\40\x72\145\155\157\166\145\x20\x25\163", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\143\150\x6f\157\163\145\137\146\162\157\x6d\x5f\155\157\163\x74\x5f\x75\163\145\x64" => sprintf(__("\x43\x68\x6f\157\x73\x65\x20\146\x72\157\155\x20\x74\150\145\x20\x6d\157\x73\x74\40\165\x73\145\144\x20\45\x73", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\163\145\x70\141\162\141\x74\x65\137\x69\x74\x65\155\x73\x5f\167\151\164\x68\137\x63\157\x6d\x6d\141\163" => sprintf(__("\123\145\160\x61\162\141\x74\x65\40\45\x73\40\x77\x69\164\150\40\x63\x6f\x6d\x6d\141\163", PR__CMN__FOUNDATION), $kcumookcwskcyqak)];
        goto msouaocmygwukeos;
        euyiicoiumuescuk:
    }
    
    public function ickqomquaqgqywkw(bool $qyucoagsiyeieyiu) : self
    {
        $this->singleValue = $qyucoagsiyeieyiu;
        return $this;
    }
    
    public function yesqcwicqyewqaco() : bool
    {
        return $this->singleValue;
    }
    
    public function oyyqeqoaumkqgccq(bool $gmksciycsesoouoi) : self
    {
        $this->dropdown = $gmksciycsesoouoi;
        return $this;
    }
    
    public function suyyiewcaissamks() : bool
    {
        return $this->dropdown;
    }
    
    public function msckacgsuwwakaey($usyakqeaquiiyocq) : self
    {
        $this->metaBoxCb = $usyakqeaquiiyocq;
        return $this;
    }
    
    public function aeguuokqgmcmsqws(?string $omaeqcgaiaisiciq) : self
    {
        $this->defaultTerm = $omaeqcgaiaisiciq;
        return $this;
    }
    
    public function wqockewwqeywgogw(?bool $qwussygmwiueacsy) : self
    {
        $this->showTagcloude = $qwussygmwiueacsy;
        return $this;
    }
    
    public function wiewcwmcsecmqmgs(?bool $wgekuymcmeccyiqq) : self
    {
        $this->showInQuickEdit = $wgekuymcmeccyiqq;
        return $this;
    }
    
    public function gwkwegiquiisoucg($wsocgiuqgmyamuoq) : self
    {
        $this->metaBoxSanitizeCb = $wsocgiuqgmyamuoq;
        return $this;
    }
    
    public function kayuyeomskgoseuo(bool $emawwccgosaksiem) : self
    {
        $this->showInAdminColumn = $emawwccgosaksiem;
        return $this;
    }
    
    public function ykuiociqyewiqyog(?string $cmqiaeqeiiggaqoe) : self
    {
        $this->updateCountCallback = $cmqiaeqeiiggaqoe;
        return $this;
    }
    
    public function ggqekkkocygywmoy() : ?array
    {
        return $this->capabilities;
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto kcgykyaakyymmgca;
        ugkwawscyiogikmg:
        gyauoqayaysycwwa:
        goto ouggemmeccgmecei;
        kcgykyaakyymmgca:
        if ($this->ggqekkkocygywmoy()) {
            goto gyauoqayaysycwwa;
        }
        goto agokgacocekqqaaw;
        agokgacocekqqaaw:
        $this->iqoguoscqueomqsk(["\x6d\141\x6e\141\x67\x65\137\164\x65\162\155\163" => "\155\x61\156\x61\x67\145\x5f\x63\141\164\145\147\157\x72\151\145\163", "\145\x64\151\x74\137\164\x65\162\155\163" => "\155\x61\156\x61\147\x65\x5f\143\141\164\145\147\157\162\151\145\163", "\144\x65\x6c\145\164\145\137\x74\145\x72\155\x73" => "\155\141\156\x61\x67\145\x5f\x63\141\164\x65\x67\x6f\x72\151\145\x73", "\141\163\x73\151\147\156\137\x74\145\x72\155\163" => "\x65\144\151\x74\x5f\x70\157\x73\164\163"]);
        goto ugkwawscyiogikmg;
        ouggemmeccgmecei:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto sagesqcycossmmcy;
        sagesqcycossmmcy:
    }
}
