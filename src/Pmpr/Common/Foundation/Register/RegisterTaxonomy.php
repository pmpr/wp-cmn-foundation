<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        goto cuiumaykueaccekc;
        cuiumaykueaccekc:
        $this->hierarchical = true;
        goto acqukmwaqqocyway;
        acqukmwaqqocyway:
        $this->ckwgqocyuaysggma("\x68\151\x65\x72\x61\x72\x63\150\x69\143\141\154", false);
        goto gqksqioaokkkeicw;
        gqksqioaokkkeicw:
        $this->ykuiociqyewiqyog("\x5f\x75\160\144\x61\x74\145\x5f\160\157\163\164\x5f\164\145\162\x6d\x5f\x63\x6f\165\156\x74");
        goto imeuaeoyequyquyc;
        imeuaeoyequyquyc:
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
        goto ymmgouuewwaieawy;
        ymmgouuewwaieawy:
        $kcumookcwskcyqak = $this->qeeuwmmksmqiuywg();
        goto kwecemikiouwuiwi;
        kwecemikiouwuiwi:
        $sisssumicskyceeg = $this->giiayuqckuiecosm();
        goto mqeacwmeqkoqmqko;
        mqeacwmeqkoqmqko:
        $this->labels = ["\x6e\x61\155\x65" => _x($kcumookcwskcyqak, "\164\141\x78\x6f\x6e\x6f\155\x79\x20\147\x65\x6e\x65\162\141\x6c\40\156\x61\x6d\145", PR__CMN__FOUNDATION), "\155\x65\x6e\165\x5f\x6e\141\x6d\145" => $kcumookcwskcyqak, "\x65\144\x69\x74\137\151\164\145\x6d" => sprintf(__("\x45\x64\151\164\x20\45\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x61\154\154\x5f\151\164\145\155\163" => sprintf(__("\101\x6c\x6c\40\x25\x73", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x6e\x6f\164\x5f\146\157\x75\x6e\x64" => sprintf(__("\116\x6f\40\x25\163\x20\x66\157\x75\x6e\144\56", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x75\160\144\x61\164\145\137\151\x74\145\x6d" => sprintf(__("\x55\160\144\141\x74\145\x20\45\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x70\141\162\145\156\164\x5f\x69\164\x65\x6d" => sprintf(__("\120\x61\162\x65\x6e\164\40\x25\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x73\x65\141\x72\143\x68\137\151\x74\x65\x6d\x73" => sprintf(__("\123\145\x61\162\143\150\40\x25\x73", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\141\144\x64\x5f\156\x65\167\x5f\151\164\145\155" => sprintf(__("\101\x64\144\x20\x4e\x65\x77\x20\45\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x73\x69\x6e\x67\165\154\x61\x72\x5f\x6e\x61\155\145" => _x($sisssumicskyceeg, "\164\x61\x78\x6f\x6e\x6f\155\171\x20\163\151\156\147\165\x6c\141\162\40\156\x61\155\145", PR__CMN__FOUNDATION), "\x6e\145\167\137\151\164\x65\155\137\x6e\x61\x6d\145" => sprintf(__("\116\x65\x77\x20\x25\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\160\x6f\x70\x75\x6c\x61\x72\x5f\x69\164\x65\155\x73" => sprintf(__("\x50\157\x70\x75\154\141\x72\x20\x25\163", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\160\x61\162\x65\156\x74\x5f\x69\164\x65\155\137\x63\157\x6c\157\156" => sprintf(__("\120\x61\162\x65\x6e\164\40\45\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\141\x64\x64\x5f\157\162\137\162\145\155\x6f\166\x65\x5f\x69\x74\x65\155\163" => sprintf(__("\101\x64\144\x20\157\162\x20\x72\145\155\157\166\145\x20\x25\x73", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\143\150\157\157\163\x65\137\146\x72\157\x6d\x5f\155\x6f\x73\164\137\165\x73\x65\144" => sprintf(__("\103\150\157\x6f\163\x65\40\146\162\157\155\40\x74\150\145\x20\x6d\157\163\x74\40\x75\x73\x65\x64\x20\x25\163", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x73\145\160\x61\x72\141\164\x65\137\151\x74\x65\155\163\137\x77\151\164\x68\137\x63\x6f\155\155\141\163" => sprintf(__("\x53\145\160\x61\x72\141\x74\145\x20\x25\x73\40\x77\151\164\x68\40\x63\157\155\155\x61\x73", PR__CMN__FOUNDATION), $kcumookcwskcyqak)];
        goto tkeoceysmquieskw;
        tkeoceysmquieskw:
        return $this;
        goto gecymmgumgauakae;
        gecymmgumgauakae:
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
        goto qaikucmemsqmosyg;
        semmqugkwwqweawm:
        $this->iqoguoscqueomqsk(["\x6d\141\156\141\x67\x65\137\x74\x65\162\155\x73" => "\x6d\141\x6e\x61\x67\145\137\143\x61\x74\145\x67\157\162\x69\x65\163", "\x65\144\x69\x74\137\x74\x65\162\155\163" => "\155\x61\x6e\141\147\x65\137\x63\141\x74\145\x67\x6f\x72\x69\x65\x73", "\144\x65\x6c\x65\x74\x65\x5f\164\145\x72\x6d\x73" => "\x6d\141\156\141\147\145\137\143\141\164\x65\147\x6f\162\x69\x65\x73", "\141\163\x73\151\147\x6e\x5f\164\145\162\x6d\x73" => "\145\x64\x69\164\137\x70\157\163\x74\163"]);
        goto kaucouscgsawawys;
        ucsssaiqcemkkmkc:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto yuoiuagyeoygsycm;
        qaikucmemsqmosyg:
        if ($this->ggqekkkocygywmoy()) {
            goto ykoogomowmiquuem;
        }
        goto semmqugkwwqweawm;
        kaucouscgsawawys:
        ykoogomowmiquuem:
        goto ucsssaiqcemkkmkc;
        yuoiuagyeoygsycm:
    }
}
