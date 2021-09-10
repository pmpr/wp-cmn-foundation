<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        goto mcwswowewmqqckqw;
        qawueqwiyeiyecce:
        $this->ykuiociqyewiqyog("\x5f\165\x70\x64\141\164\x65\137\x70\x6f\x73\x74\137\164\x65\x72\x6d\137\x63\x6f\165\x6e\164");
        goto oumqmgawoewueoio;
        uggeicmsysmmaqqc:
        $this->ckwgqocyuaysggma("\150\151\x65\162\141\162\x63\x68\x69\143\x61\154", false);
        goto qawueqwiyeiyecce;
        mcwswowewmqqckqw:
        $this->hierarchical = true;
        goto uggeicmsysmmaqqc;
        oumqmgawoewueoio:
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
        goto msouaocmygwukeos;
        msouaocmygwukeos:
        $kcumookcwskcyqak = $this->qeeuwmmksmqiuywg();
        goto euyiicoiumuescuk;
        gyauoqayaysycwwa:
        $this->labels = ["\x6e\x61\155\145" => _x($kcumookcwskcyqak, "\x74\x61\170\x6f\x6e\157\155\x79\40\x67\145\156\145\x72\141\154\x20\156\x61\155\x65", PR__CMN__FOUNDATION), "\x6d\145\156\165\137\x6e\x61\155\x65" => $kcumookcwskcyqak, "\x65\x64\x69\164\x5f\x69\164\145\x6d" => sprintf(__("\105\x64\x69\x74\x20\x25\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\141\x6c\154\137\x69\x74\145\155\x73" => sprintf(__("\101\154\x6c\x20\x25\x73", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x6e\x6f\164\137\x66\x6f\165\x6e\144" => sprintf(__("\116\x6f\x20\x25\163\x20\146\157\x75\x6e\x64\56", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x75\x70\x64\x61\164\145\x5f\x69\x74\x65\155" => sprintf(__("\125\x70\144\141\x74\145\x20\45\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x70\141\162\x65\x6e\x74\137\151\x74\145\x6d" => sprintf(__("\120\x61\x72\x65\x6e\164\x20\45\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x73\x65\x61\x72\143\150\x5f\x69\x74\x65\x6d\163" => sprintf(__("\x53\145\x61\162\143\x68\40\45\x73", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x61\144\x64\x5f\156\145\167\x5f\x69\164\x65\x6d" => sprintf(__("\101\x64\x64\x20\116\145\167\40\x25\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x73\x69\x6e\x67\165\x6c\x61\162\137\x6e\x61\x6d\x65" => _x($sisssumicskyceeg, "\164\141\170\x6f\x6e\157\x6d\171\40\x73\151\156\147\x75\154\x61\x72\x20\x6e\x61\155\145", PR__CMN__FOUNDATION), "\156\x65\167\x5f\x69\x74\145\155\137\x6e\141\x6d\x65" => sprintf(__("\116\x65\x77\40\45\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x70\157\x70\165\x6c\x61\162\x5f\x69\x74\145\x6d\x73" => sprintf(__("\120\x6f\160\165\154\141\x72\40\45\x73", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x70\141\x72\145\x6e\x74\x5f\151\x74\145\x6d\x5f\143\x6f\154\x6f\156" => sprintf(__("\120\x61\x72\x65\156\164\x20\45\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x61\x64\x64\x5f\157\x72\x5f\162\x65\x6d\x6f\166\x65\x5f\x69\164\x65\x6d\163" => sprintf(__("\x41\144\144\40\x6f\x72\x20\x72\145\x6d\157\x76\x65\40\x25\x73", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x63\150\157\157\x73\x65\137\146\162\157\x6d\x5f\x6d\x6f\163\x74\137\165\163\145\144" => sprintf(__("\x43\150\157\157\163\x65\x20\146\x72\x6f\x6d\40\164\x68\145\x20\155\x6f\163\x74\x20\x75\163\x65\144\x20\45\x73", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\163\x65\160\x61\162\141\x74\145\x5f\151\164\145\x6d\163\137\167\x69\164\x68\137\143\x6f\155\x6d\141\x73" => sprintf(__("\x53\x65\160\x61\162\x61\x74\145\x20\x25\x73\x20\x77\x69\x74\150\x20\143\x6f\x6d\155\141\x73", PR__CMN__FOUNDATION), $kcumookcwskcyqak)];
        goto kcgykyaakyymmgca;
        euyiicoiumuescuk:
        $sisssumicskyceeg = $this->giiayuqckuiecosm();
        goto gyauoqayaysycwwa;
        kcgykyaakyymmgca:
        return $this;
        goto agokgacocekqqaaw;
        agokgacocekqqaaw:
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
        goto ouggemmeccgmecei;
        gyeoaqyauigkuyuw:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto ygyasaouaeomcook;
        ouggemmeccgmecei:
        if ($this->ggqekkkocygywmoy()) {
            goto ugkwawscyiogikmg;
        }
        goto sagesqcycossmmcy;
        kwkumyugkkscqsqa:
        ugkwawscyiogikmg:
        goto gyeoaqyauigkuyuw;
        sagesqcycossmmcy:
        $this->iqoguoscqueomqsk(["\x6d\141\156\x61\147\x65\x5f\x74\145\162\155\x73" => "\x6d\141\x6e\141\147\145\x5f\x63\141\x74\x65\147\157\x72\151\145\163", "\x65\x64\x69\x74\137\164\x65\x72\155\163" => "\x6d\x61\x6e\x61\x67\145\x5f\143\141\164\x65\147\x6f\x72\x69\145\163", "\x64\145\x6c\x65\164\x65\137\164\x65\x72\155\x73" => "\155\x61\x6e\x61\x67\145\137\x63\141\164\145\x67\157\x72\x69\x65\163", "\141\x73\x73\151\147\156\137\x74\145\x72\x6d\x73" => "\145\x64\x69\164\x5f\x70\x6f\163\164\x73"]);
        goto kwkumyugkkscqsqa;
        ygyasaouaeomcook:
    }
}
