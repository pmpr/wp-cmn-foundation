<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        $this->ykuiociqyewiqyog("\x5f\x75\160\144\x61\x74\145\137\160\157\x73\x74\137\164\145\x72\155\137\x63\157\x75\x6e\x74");
        goto oumqmgawoewueoio;
        mcwswowewmqqckqw:
        $this->hierarchical = true;
        goto uggeicmsysmmaqqc;
        uggeicmsysmmaqqc:
        $this->ckwgqocyuaysggma("\x68\151\x65\x72\x61\x72\x63\150\151\143\x61\154", false);
        goto qawueqwiyeiyecce;
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
        kcgykyaakyymmgca:
        return $this;
        goto agokgacocekqqaaw;
        msouaocmygwukeos:
        $kcumookcwskcyqak = $this->qeeuwmmksmqiuywg();
        goto euyiicoiumuescuk;
        gyauoqayaysycwwa:
        $this->labels = ["\156\x61\x6d\x65" => _x($kcumookcwskcyqak, "\164\x61\x78\157\156\x6f\x6d\171\x20\147\x65\x6e\145\x72\141\154\40\156\x61\155\145", PR__CMN__FOUNDATION), "\x6d\145\x6e\165\137\x6e\x61\155\x65" => $kcumookcwskcyqak, "\145\144\x69\164\137\x69\164\145\x6d" => sprintf(__("\105\x64\151\164\40\x25\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x61\154\154\137\151\164\x65\155\x73" => sprintf(__("\x41\154\x6c\40\x25\163", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\156\157\164\x5f\146\x6f\x75\x6e\144" => sprintf(__("\116\157\40\x25\x73\40\146\157\165\156\x64\x2e", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x75\160\144\141\164\145\x5f\151\x74\x65\155" => sprintf(__("\125\160\x64\x61\164\145\40\x25\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x70\x61\x72\x65\x6e\164\137\151\164\x65\x6d" => sprintf(__("\x50\x61\x72\x65\156\164\x20\x25\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x73\x65\141\162\x63\150\137\151\x74\x65\155\x73" => sprintf(__("\x53\145\141\x72\x63\150\40\x25\163", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x61\144\x64\x5f\x6e\145\167\x5f\151\x74\x65\x6d" => sprintf(__("\101\x64\144\x20\116\145\x77\x20\45\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x73\x69\156\147\x75\x6c\x61\x72\x5f\156\x61\155\145" => _x($sisssumicskyceeg, "\x74\x61\170\x6f\x6e\157\155\171\40\163\151\x6e\x67\x75\x6c\x61\x72\40\x6e\141\x6d\145", PR__CMN__FOUNDATION), "\156\145\167\137\151\164\x65\x6d\137\x6e\141\x6d\145" => sprintf(__("\x4e\145\x77\x20\45\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\160\157\x70\x75\154\141\x72\x5f\151\x74\x65\x6d\163" => sprintf(__("\120\157\160\165\x6c\x61\x72\x20\x25\x73", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x70\141\162\x65\156\164\x5f\151\x74\x65\155\x5f\x63\x6f\x6c\x6f\156" => sprintf(__("\x50\141\162\145\x6e\164\40\45\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\141\x64\x64\x5f\157\162\137\162\145\x6d\157\x76\145\137\151\164\145\x6d\163" => sprintf(__("\101\144\x64\x20\x6f\x72\x20\x72\145\x6d\157\x76\145\x20\x25\163", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\143\150\x6f\x6f\163\145\x5f\x66\x72\x6f\155\137\x6d\157\163\x74\x5f\165\x73\145\x64" => sprintf(__("\103\150\x6f\157\163\145\40\146\x72\157\x6d\40\164\150\145\x20\155\x6f\163\x74\40\165\163\145\x64\40\x25\x73", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x73\x65\x70\x61\162\x61\164\x65\137\151\x74\145\x6d\x73\x5f\x77\x69\164\x68\x5f\143\x6f\x6d\x6d\141\x73" => sprintf(__("\123\145\x70\x61\x72\x61\164\x65\40\x25\163\x20\167\x69\x74\150\40\x63\x6f\155\155\x61\x73", PR__CMN__FOUNDATION), $kcumookcwskcyqak)];
        goto kcgykyaakyymmgca;
        euyiicoiumuescuk:
        $sisssumicskyceeg = $this->giiayuqckuiecosm();
        goto gyauoqayaysycwwa;
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
        ouggemmeccgmecei:
        if ($this->ggqekkkocygywmoy()) {
            goto ugkwawscyiogikmg;
        }
        goto sagesqcycossmmcy;
        sagesqcycossmmcy:
        $this->iqoguoscqueomqsk(["\x6d\x61\x6e\x61\x67\x65\x5f\164\x65\x72\155\163" => "\x6d\x61\x6e\141\147\x65\x5f\143\x61\x74\145\147\157\x72\151\x65\x73", "\145\x64\x69\164\x5f\x74\145\x72\155\163" => "\155\141\x6e\x61\147\x65\x5f\x63\141\x74\145\x67\x6f\x72\151\x65\163", "\x64\x65\154\145\x74\x65\137\164\x65\162\155\x73" => "\x6d\x61\x6e\141\147\x65\137\143\x61\x74\145\147\157\x72\x69\145\163", "\x61\x73\163\x69\x67\x6e\137\x74\x65\x72\x6d\x73" => "\x65\x64\151\x74\137\x70\157\163\x74\x73"]);
        goto kwkumyugkkscqsqa;
        kwkumyugkkscqsqa:
        ugkwawscyiogikmg:
        goto gyeoaqyauigkuyuw;
        gyeoaqyauigkuyuw:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto ygyasaouaeomcook;
        ygyasaouaeomcook:
    }
}
