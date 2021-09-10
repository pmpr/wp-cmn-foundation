<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM;

use CMB2_Boxes;
use Pmpr\Common\Foundation\Decorator\DecoratorUser;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\ORM\DB\Model;
use Illuminate\Database\Eloquent\Collection;

class Form extends Common
{
    
    protected ?Model $model = null;
    
    public function mgogaykgkoogasim() : ?Model
    {
        return $this->model;
    }
    
    public function asumqyigwsqmyeoc(Model $meywaqqsugaoeyys) : self
    {
        $this->model = $meywaqqsugaoeyys;
        return $this;
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x61\144\x6d\151\x6e\137\151\x6e\151\164", [$this, "\x79\x65\171\151\x67\165\171\x65\147\x6d\155\x79\x75\x73\x65\x61"], 0)->qcsmikeggeemccuu("\x61\x64\144\137\x6d\145\164\141\137\x62\157\x78\x65\x73", [$this, "\155\165\147\x63\x63\145\x69\x77\157\x73\x79\143\151\x77\157\x73"], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\163\141\x76\x65\137\x6f\x62\x6a\x65\143\164", Model::class), [$this, "\147\x73\x65\147\163\x69\x6f\x63\x71\x6d\163\x6f\141\x79\x69\151"], 10, 2);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\143\x6d\142\x32\x5f\x6f\166\145\x72\x72\151\x64\x65\x5f\155\x65\x74\141\x5f\166\141\154\x75\x65", [$this, "\141\147\165\143\171\151\163\151\153\143\x73\x6d\145\x65\165\147"], 10, 4);
        parent::kgquecmsgcouyaya();
    }
    public function yeyiguyegmmyusea()
    {
        goto camiekmccsgqswwo;
        yecueayusueayyoc:
        $cmb2Override = true;
        goto mkckgwkgugmguwkm;
        mkckgwkgugmguwkm:
        eqskkyagygyigacm:
        goto qqcwksosioimeaqq;
        usoomsyiqkwkgeyi:
        $suaemuyiacqyugsm = ManipulateArray::get($_GET, "\x70\141\x67\x65");
        goto geeosccccmmucqce;
        uiuseyqqmuguyckm:
        wckuumkmmocsciqo:
        goto wkgawikcioiuyqme;
        emeaagoguiuyieui:
        if (!($suaemuyiacqyugsm === $qqomumygoacsmsie->aqcogscycyycgkuq())) {
            goto eqskkyagygyigacm;
        }
        goto yecueayusueayyoc;
        camiekmccsgqswwo:
        global $cmb2Override, $pagenow;
        goto iokskucgaqiqycmm;
        qqcwksosioimeaqq:
        oymoieyokuscmgok:
        goto uiuseyqqmuguyckm;
        iokskucgaqiqycmm:
        
        $cmb2Override = false;
        goto sggkkgmeigoqaoky;
        geeosccccmmucqce:
        if (!($suaemuyiacqyugsm && ($qqomumygoacsmsie = $this->mgogaykgkoogasim()->cgswceaawqgeskua("\x65\144\151\164")))) {
            goto oymoieyokuscmgok;
        }
        goto emeaagoguiuyieui;
        sggkkgmeigoqaoky:
        
        if (!($pagenow === "\x61\144\x6d\x69\156\56\x70\150\x70")) {
            goto wckuumkmmocsciqo;
        }
        goto usoomsyiqkwkgeyi;
        wkgawikcioiuyqme:
    }
    
    public function gsegsiocqmsoayii($kqokimuosyuyyucg, $mksyucucyswaukig)
    {
        goto auywcaygigcsqoek;
        emuyygwqumgmmqei:
        coeqgweisigocqim:
        goto kgumycouuweoycwe;
        oogqmueeykigemom:
        
        if (!class_exists("\x43\115\102\x32")) {
            goto yosikwkgwwawmmeu;
        }
        goto yaskeauwgsusisom;
        omkwqeiacwosgskq:
        yosikwkgwwawmmeu:
        goto kimusawigieceeai;
        yaskeauwgsusisom:
        if (!DecoratorUser::scmcyesmmikkucie("\145\x64\x69\164\x5f\x69\164\x65\x6d", $kqokimuosyuyyucg)) {
            goto gwoqkkyaeieummsw;
        }
        goto guoeosgiowqqmswg;
        guoeosgiowqqmswg:
        $cmb2Override = true;
        goto gyqiqmsmeisgcyys;
        auywcaygigcsqoek:
        global $cmb2Override;
        goto oogqmueeykigemom;
        gyqiqmsmeisgcyys:
        foreach (CMB2_Boxes::get_all() as $scegeeyqweaksmki) {
            goto akuowkgaiuksqwgc;
            koioogicyyqwawsy:
            $scegeeyqweaksmki->save_fields($kqokimuosyuyyucg, "\160\x6f\163\164", $_POST);
            goto uyoscwugeomiciwq;
            uyoscwugeomiciwq:
            esaioouuwmeaqiim:
            goto eaeokigkusweawki;
            akuowkgaiuksqwgc:
            if (!in_array($this->mgogaykgkoogasim()->miwqiiqeegeqcwis(), $scegeeyqweaksmki->meta_box["\x6f\x62\x6a\x65\143\164\x5f\x74\x79\160\x65\x73"])) {
                goto esaioouuwmeaqiim;
            }
            goto koioogicyyqwawsy;
            eaeokigkusweawki:
            gkiwcciigiaeamyi:
            goto ywowkgmqwokusske;
            ywowkgmqwokusske:
        }
        goto emuyygwqumgmmqei;
        kgumycouuweoycwe:
        gwoqkkyaeieummsw:
        goto omkwqeiacwosgskq;
        kimusawigieceeai:
    }
    
    public function mugcceiwosyciwos($syeseoiyagmgumcy, $mksyucucyswaukig)
    {
        goto oegoygwicucyeses;
        iaywwiisqiumgcma:
        ccgoagogukekkeks:
        goto cekkcogkuwsqqyes;
        cyeqsmcuiukikium:
        
        $cmb2Override = true;
        goto mayckwaigqsiwmem;
        oegoygwicucyeses:
        global $cmb2Override;
        goto gswyigyemukicika;
        gswyigyemukicika:
        if (!$mksyucucyswaukig) {
            goto ccgoagogukekkeks;
        }
        goto mmyiieeusyagswii;
        mmyiieeusyagswii:
        $ceiwsaacewygcsqg = $this->mgogaykgkoogasim()->kumuygiiqswoyasy();
        goto scwsaugwsiimogui;
        scwsaugwsiimogui:
        
        $_REQUEST["\x70\157\x73\164"] = $mksyucucyswaukig->{$ceiwsaacewygcsqg};
        goto cyeqsmcuiukikium;
        mayckwaigqsiwmem:
        
        
        goto iaywwiisqiumgcma;
        cekkcogkuwsqqyes:
    }
    
    public function agucyisikcsmeeug($eqgoocgaqwqcimie, $aokagokqyuysuksm, $ywmkwiwkosakssii, $aiowsaccomcoikus)
    {
        goto mgcimqiiwsciocoy;
        qegqgskaeckoqaiq:
        esumwomoiqskweoc:
        goto skiykgkiekmkcmwe;
        mgcimqiiwsciocoy:
        global $cmb2Override;
        goto eowgoimkqygwiock;
        uossiqykiaouimca:
        $mksyucucyswaukig = $this->mgogaykgkoogasim()->cyyiiykmaeuqqgok($aokagokqyuysuksm);
        goto awkgycqimgayoaiy;
        awkgycqimgayoaiy:
        if (!ManipulateArray::get($mksyucucyswaukig, $ywmkwiwkosakssii["\146\x69\145\x6c\x64\x5f\151\144"])) {
            goto uqcuqaucosyymciy;
        }
        goto ogeeaauygcocqgee;
        agemwyemooogsiyc:
        return $eqgoocgaqwqcimie;
        goto assaqeukweemagcm;
        wcsiyammsoaoeska:
        foreach ($eqgoocgaqwqcimie as $meywaqqsugaoeyys) {
            goto cggukoegykqeekww;
            cymiwscoawuyaugi:
            akuwuwcyqewysmym:
            goto goiacugaoueamwyk;
            agewumsacuussmoc:
            
            $uomewyckeuqoqocu[] = (array) $meywaqqsugaoeyys->gqaysymikgeawkqa()->ksiyqouuaoymsycg($meywaqqsugaoeyys->{$ceiwsaacewygcsqg});
            goto cymiwscoawuyaugi;
            cggukoegykqeekww:
            $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
            goto agewumsacuussmoc;
            goiacugaoueamwyk:
        }
        goto iwuyueygqsceyguc;
        eueowawgacsksksk:
        return $eqgoocgaqwqcimie;
        goto meqygagoeowmwyek;
        iwuyueygqsceyguc:
        eieikkycsmsqumuu:
        goto mgskawmqsikcgaoo;
        skiykgkiekmkcmwe:
        uqcuqaucosyymciy:
        goto owisiqaowqeemuws;
        mgkikasuaseesumm:
        if (!$aiowsaccomcoikus->group) {
            goto gcwuuuasqqocoics;
        }
        goto uossiqykiaouimca;
        eowgoimkqygwiock:
        if (!($cmb2Override !== true)) {
            goto yoyeqyywuskoamic;
        }
        goto agemwyemooogsiyc;
        assaqeukweemagcm:
        yoyeqyywuskoamic:
        goto mgkikasuaseesumm;
        eecukukickgoweyc:
        if (!$eqgoocgaqwqcimie instanceof Collection) {
            goto esumwomoiqskweoc;
        }
        goto eagucokgqqgkukew;
        ogeeaauygcocqgee:
        $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $ywmkwiwkosakssii["\146\x69\x65\x6c\144\x5f\151\x64"]);
        goto eecukukickgoweyc;
        owisiqaowqeemuws:
        gcwuuuasqqocoics:
        goto eueowawgacsksksk;
        eagucokgqqgkukew:
        $uomewyckeuqoqocu = [];
        goto wcsiyammsoaoeska;
        mgskawmqsikcgaoo:
        $eqgoocgaqwqcimie = $uomewyckeuqoqocu;
        goto qegqgskaeckoqaiq;
        meqygagoeowmwyek:
    }
}
