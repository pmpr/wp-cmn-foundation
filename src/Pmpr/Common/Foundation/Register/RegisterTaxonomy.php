<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        goto gcaogkcqsowqcsyq;
        gcaogkcqsowqcsyq:
        $this->hierarchical = true;
        goto uqaecqicccqqumwy;
        sismwqkmciouwouu:
        $this->ykuiociqyewiqyog("\x5f\x75\160\144\x61\164\x65\137\x70\x6f\x73\x74\137\x74\145\x72\x6d\x5f\143\x6f\165\156\164");
        goto auuyasucycskyioi;
        uqaecqicccqqumwy:
        $this->ckwgqocyuaysggma("\150\x69\145\x72\x61\x72\143\150\151\143\141\154", false);
        goto sismwqkmciouwouu;
        auuyasucycskyioi:
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
        goto aioagqmkwceiceiw;
        iiqiimkaogaewoqw:
        $sisssumicskyceeg = $this->giiayuqckuiecosm();
        goto cymswwcigouecgiu;
        kisggwimqwaugmea:
        return $this;
        goto kogkaecyioiyommy;
        cymswwcigouecgiu:
        $this->labels = ["\156\141\155\145" => _x($kcumookcwskcyqak, "\164\141\170\157\156\x6f\x6d\x79\40\x67\x65\x6e\145\162\141\154\x20\156\x61\x6d\145", PR__CMN__FOUNDATION), "\155\145\x6e\165\137\156\x61\x6d\x65" => $kcumookcwskcyqak, "\145\144\x69\x74\137\151\164\x65\x6d" => sprintf(__("\x45\144\151\x74\40\x25\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x61\x6c\154\137\151\164\145\155\x73" => sprintf(__("\101\154\x6c\40\45\163", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x6e\x6f\164\x5f\x66\x6f\165\x6e\144" => sprintf(__("\116\x6f\x20\45\x73\x20\146\157\165\156\144\56", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x75\160\144\141\164\x65\137\x69\164\x65\x6d" => sprintf(__("\125\x70\144\141\x74\145\40\x25\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\160\x61\162\x65\156\164\137\151\x74\145\x6d" => sprintf(__("\120\141\x72\x65\156\164\40\x25\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x73\145\x61\x72\143\x68\137\x69\x74\145\155\x73" => sprintf(__("\x53\145\141\162\x63\x68\40\45\163", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\141\144\x64\x5f\x6e\145\167\137\151\164\x65\155" => sprintf(__("\101\x64\144\40\116\145\167\x20\45\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x73\x69\156\x67\165\154\141\x72\x5f\156\x61\155\x65" => _x($sisssumicskyceeg, "\164\141\170\157\156\157\x6d\171\40\x73\151\x6e\147\x75\154\x61\162\40\x6e\x61\155\x65", PR__CMN__FOUNDATION), "\156\x65\x77\x5f\151\164\x65\x6d\137\x6e\x61\x6d\x65" => sprintf(__("\x4e\x65\167\x20\45\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x70\x6f\x70\x75\154\x61\x72\x5f\151\x74\x65\155\x73" => sprintf(__("\120\157\160\165\154\x61\162\40\45\x73", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\160\141\x72\x65\156\x74\137\151\x74\x65\x6d\137\x63\x6f\154\x6f\156" => sprintf(__("\120\x61\162\145\x6e\164\40\45\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x61\144\x64\x5f\157\162\x5f\162\x65\155\157\166\145\137\x69\x74\145\155\163" => sprintf(__("\x41\144\144\x20\157\162\x20\x72\x65\x6d\x6f\166\x65\40\x25\163", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\143\x68\157\157\163\x65\137\x66\x72\x6f\155\137\155\x6f\x73\x74\x5f\x75\x73\x65\144" => sprintf(__("\103\150\157\157\163\145\40\x66\x72\157\x6d\40\164\x68\145\40\x6d\157\x73\x74\x20\x75\163\x65\x64\x20\x25\x73", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\163\145\160\x61\x72\x61\164\x65\x5f\x69\164\145\155\x73\x5f\x77\151\x74\x68\137\143\157\x6d\155\x61\163" => sprintf(__("\123\145\x70\141\162\141\164\145\40\45\163\40\x77\x69\x74\150\40\x63\157\155\x6d\x61\163", PR__CMN__FOUNDATION), $kcumookcwskcyqak)];
        goto kisggwimqwaugmea;
        aioagqmkwceiceiw:
        $kcumookcwskcyqak = $this->qeeuwmmksmqiuywg();
        goto iiqiimkaogaewoqw;
        kogkaecyioiyommy:
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
        goto aweouaymmsogsyka;
        payaciyikimkoquw:
        $this->iqoguoscqueomqsk(["\155\141\156\x61\x67\x65\x5f\164\145\x72\x6d\163" => "\155\141\156\141\x67\145\137\x63\141\164\145\x67\157\x72\151\145\x73", "\145\x64\x69\164\137\x74\145\162\x6d\163" => "\x6d\141\x6e\x61\x67\145\137\143\x61\164\x65\147\157\162\151\145\x73", "\x64\145\154\x65\164\145\137\164\145\x72\155\x73" => "\155\141\156\141\x67\x65\137\143\141\x74\145\x67\157\x72\x69\x65\163", "\x61\163\x73\x69\x67\156\137\164\x65\162\155\163" => "\145\x64\x69\164\x5f\x70\x6f\163\x74\163"]);
        goto gqcisycmsgeaaeam;
        gqcisycmsgeaaeam:
        iuuweasisoieisec:
        goto kqcumuakekmayyaa;
        kqcumuakekmayyaa:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto ieuwcgqoyyguiqcy;
        aweouaymmsogsyka:
        if ($this->ggqekkkocygywmoy()) {
            goto iuuweasisoieisec;
        }
        goto payaciyikimkoquw;
        ieuwcgqoyyguiqcy:
    }
}
