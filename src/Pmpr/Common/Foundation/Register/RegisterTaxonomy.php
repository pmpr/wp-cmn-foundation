<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        goto suuaoskwcwmiyyoi;
        gcaogkcqsowqcsyq:
        $this->ckwgqocyuaysggma("\x68\151\145\162\x61\162\143\x68\x69\x63\x61\154", false);
        goto uqaecqicccqqumwy;
        uqaecqicccqqumwy:
        $this->ykuiociqyewiqyog("\137\165\160\x64\141\x74\145\137\x70\x6f\x73\x74\137\x74\x65\162\x6d\137\143\x6f\x75\x6e\164");
        goto sismwqkmciouwouu;
        suuaoskwcwmiyyoi:
        $this->hierarchical = true;
        goto gcaogkcqsowqcsyq;
        sismwqkmciouwouu:
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
        goto auuyasucycskyioi;
        iiqiimkaogaewoqw:
        $this->labels = ["\156\141\155\145" => _x($kcumookcwskcyqak, "\x74\x61\x78\x6f\156\157\x6d\x79\x20\147\145\156\145\162\x61\154\40\156\141\x6d\x65", PR__CMN__FOUNDATION), "\155\x65\x6e\165\x5f\156\x61\x6d\145" => $kcumookcwskcyqak, "\x65\x64\151\x74\x5f\151\164\145\x6d" => sprintf(__("\105\144\151\x74\x20\x25\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\141\x6c\154\x5f\151\164\145\155\163" => sprintf(__("\x41\154\x6c\40\x25\163", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x6e\x6f\x74\x5f\x66\x6f\165\156\144" => sprintf(__("\116\x6f\40\45\163\x20\146\x6f\165\x6e\x64\x2e", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\165\160\x64\141\x74\x65\x5f\x69\164\145\155" => sprintf(__("\x55\160\x64\141\164\145\x20\45\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x70\x61\x72\145\156\x74\137\x69\x74\145\155" => sprintf(__("\x50\141\x72\x65\x6e\164\x20\45\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\163\x65\141\x72\143\x68\x5f\x69\164\x65\155\x73" => sprintf(__("\123\145\141\162\x63\x68\x20\45\163", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x61\x64\144\137\x6e\145\x77\137\x69\x74\x65\x6d" => sprintf(__("\101\x64\144\40\x4e\x65\x77\40\x25\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\163\151\156\147\x75\154\x61\162\137\156\x61\155\x65" => _x($sisssumicskyceeg, "\x74\141\170\157\156\157\x6d\171\x20\x73\151\x6e\147\x75\154\x61\x72\40\156\x61\155\x65", PR__CMN__FOUNDATION), "\156\x65\x77\137\x69\x74\145\155\137\x6e\x61\155\x65" => sprintf(__("\x4e\x65\167\x20\x25\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x70\157\x70\165\154\x61\162\137\x69\x74\145\x6d\163" => sprintf(__("\120\157\160\x75\x6c\x61\162\40\x25\x73", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\160\x61\162\x65\x6e\x74\137\151\164\x65\155\x5f\143\157\x6c\157\x6e" => sprintf(__("\120\141\162\x65\156\164\40\45\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x61\x64\144\x5f\157\162\x5f\162\145\155\x6f\x76\x65\137\x69\x74\145\155\163" => sprintf(__("\101\x64\144\40\157\162\40\x72\145\155\157\166\x65\x20\x25\163", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x63\x68\x6f\x6f\163\x65\137\x66\x72\157\x6d\137\155\157\x73\x74\137\x75\x73\145\144" => sprintf(__("\103\x68\157\157\163\145\40\x66\x72\x6f\155\40\x74\x68\x65\40\155\x6f\x73\164\x20\165\163\x65\x64\x20\45\163", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\163\x65\x70\141\x72\141\164\x65\x5f\151\164\x65\155\x73\x5f\167\x69\164\x68\137\143\x6f\x6d\155\x61\x73" => sprintf(__("\123\145\x70\141\x72\141\164\x65\40\x25\x73\40\x77\x69\164\x68\40\143\x6f\155\155\141\163", PR__CMN__FOUNDATION), $kcumookcwskcyqak)];
        goto cymswwcigouecgiu;
        auuyasucycskyioi:
        $kcumookcwskcyqak = $this->qeeuwmmksmqiuywg();
        goto aioagqmkwceiceiw;
        aioagqmkwceiceiw:
        $sisssumicskyceeg = $this->giiayuqckuiecosm();
        goto iiqiimkaogaewoqw;
        cymswwcigouecgiu:
        return $this;
        goto kisggwimqwaugmea;
        kisggwimqwaugmea:
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
        goto iuuweasisoieisec;
        gqcisycmsgeaaeam:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto kqcumuakekmayyaa;
        payaciyikimkoquw:
        kogkaecyioiyommy:
        goto gqcisycmsgeaaeam;
        aweouaymmsogsyka:
        $this->iqoguoscqueomqsk(["\x6d\141\x6e\x61\147\145\137\x74\x65\162\155\163" => "\x6d\141\x6e\141\x67\145\137\x63\141\x74\145\x67\157\162\x69\145\x73", "\x65\x64\151\164\x5f\x74\x65\x72\155\x73" => "\155\141\x6e\x61\x67\145\137\143\x61\x74\145\x67\157\162\x69\x65\x73", "\144\x65\x6c\x65\x74\x65\137\164\x65\162\x6d\x73" => "\155\x61\156\141\x67\145\x5f\143\141\x74\x65\x67\x6f\162\x69\145\x73", "\141\163\163\x69\147\x6e\x5f\164\x65\x72\x6d\163" => "\145\144\x69\164\x5f\x70\x6f\163\164\x73"]);
        goto payaciyikimkoquw;
        iuuweasisoieisec:
        if ($this->ggqekkkocygywmoy()) {
            goto kogkaecyioiyommy;
        }
        goto aweouaymmsogsyka;
        kqcumuakekmayyaa:
    }
}
