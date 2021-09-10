<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        $this->qcsmikeggeemccuu("\x61\144\x6d\151\156\x5f\x69\x6e\151\x74", [$this, "\x79\x65\x79\x69\147\165\x79\145\147\155\x6d\x79\x75\163\145\x61"], 0)->qcsmikeggeemccuu("\141\x64\x64\x5f\155\x65\164\141\x5f\x62\x6f\x78\145\x73", [$this, "\x6d\165\x67\143\x63\x65\x69\x77\x6f\x73\171\x63\x69\x77\157\x73"], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x73\141\x76\x65\137\x6f\142\152\145\143\x74", Model::class), [$this, "\147\x73\x65\147\x73\x69\x6f\x63\x71\x6d\x73\157\x61\171\151\151"], 10, 2);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x63\155\x62\x32\x5f\x6f\x76\x65\162\162\x69\x64\x65\137\x6d\x65\164\x61\137\166\x61\x6c\x75\145", [$this, "\x61\147\165\143\x79\x69\x73\x69\x6b\143\163\x6d\145\x65\165\x67"], 10, 4);
        parent::kgquecmsgcouyaya();
    }
    public function yeyiguyegmmyusea()
    {
        goto camiekmccsgqswwo;
        mkckgwkgugmguwkm:
        eqskkyagygyigacm:
        goto qqcwksosioimeaqq;
        geeosccccmmucqce:
        if (!($suaemuyiacqyugsm && ($qqomumygoacsmsie = $this->mgogaykgkoogasim()->cgswceaawqgeskua("\x65\x64\x69\x74")))) {
            goto oymoieyokuscmgok;
        }
        goto emeaagoguiuyieui;
        sggkkgmeigoqaoky:
        
        if (!($pagenow === "\141\x64\155\151\x6e\x2e\x70\150\x70")) {
            goto wckuumkmmocsciqo;
        }
        goto usoomsyiqkwkgeyi;
        camiekmccsgqswwo:
        global $cmb2Override, $pagenow;
        goto iokskucgaqiqycmm;
        usoomsyiqkwkgeyi:
        $suaemuyiacqyugsm = ManipulateArray::get($_GET, "\160\141\147\x65");
        goto geeosccccmmucqce;
        emeaagoguiuyieui:
        if (!($suaemuyiacqyugsm === $qqomumygoacsmsie->aqcogscycyycgkuq())) {
            goto eqskkyagygyigacm;
        }
        goto yecueayusueayyoc;
        qqcwksosioimeaqq:
        oymoieyokuscmgok:
        goto uiuseyqqmuguyckm;
        yecueayusueayyoc:
        $cmb2Override = true;
        goto mkckgwkgugmguwkm;
        uiuseyqqmuguyckm:
        wckuumkmmocsciqo:
        goto wkgawikcioiuyqme;
        iokskucgaqiqycmm:
        
        $cmb2Override = false;
        goto sggkkgmeigoqaoky;
        wkgawikcioiuyqme:
    }
    
    public function gsegsiocqmsoayii($kqokimuosyuyyucg, $mksyucucyswaukig)
    {
        goto auywcaygigcsqoek;
        oogqmueeykigemom:
        
        if (!class_exists("\103\115\x42\62")) {
            goto yosikwkgwwawmmeu;
        }
        goto yaskeauwgsusisom;
        omkwqeiacwosgskq:
        yosikwkgwwawmmeu:
        goto kimusawigieceeai;
        guoeosgiowqqmswg:
        $cmb2Override = true;
        goto gyqiqmsmeisgcyys;
        kgumycouuweoycwe:
        gwoqkkyaeieummsw:
        goto omkwqeiacwosgskq;
        auywcaygigcsqoek:
        global $cmb2Override;
        goto oogqmueeykigemom;
        gyqiqmsmeisgcyys:
        foreach (CMB2_Boxes::get_all() as $scegeeyqweaksmki) {
            goto akuowkgaiuksqwgc;
            akuowkgaiuksqwgc:
            if (!in_array($this->mgogaykgkoogasim()->miwqiiqeegeqcwis(), $scegeeyqweaksmki->meta_box["\x6f\142\x6a\145\x63\x74\137\164\171\160\145\x73"])) {
                goto esaioouuwmeaqiim;
            }
            goto koioogicyyqwawsy;
            uyoscwugeomiciwq:
            esaioouuwmeaqiim:
            goto eaeokigkusweawki;
            koioogicyyqwawsy:
            $scegeeyqweaksmki->save_fields($kqokimuosyuyyucg, "\160\x6f\x73\164", $_POST);
            goto uyoscwugeomiciwq;
            eaeokigkusweawki:
            gkiwcciigiaeamyi:
            goto ywowkgmqwokusske;
            ywowkgmqwokusske:
        }
        goto emuyygwqumgmmqei;
        emuyygwqumgmmqei:
        coeqgweisigocqim:
        goto kgumycouuweoycwe;
        yaskeauwgsusisom:
        if (!DecoratorUser::scmcyesmmikkucie("\x65\144\151\164\x5f\151\x74\x65\x6d", $kqokimuosyuyyucg)) {
            goto gwoqkkyaeieummsw;
        }
        goto guoeosgiowqqmswg;
        kimusawigieceeai:
    }
    
    public function mugcceiwosyciwos($syeseoiyagmgumcy, $mksyucucyswaukig)
    {
        goto oegoygwicucyeses;
        cyeqsmcuiukikium:
        
        $cmb2Override = true;
        goto mayckwaigqsiwmem;
        oegoygwicucyeses:
        global $cmb2Override;
        goto gswyigyemukicika;
        mmyiieeusyagswii:
        $ceiwsaacewygcsqg = $this->mgogaykgkoogasim()->kumuygiiqswoyasy();
        goto scwsaugwsiimogui;
        scwsaugwsiimogui:
        
        $_REQUEST["\160\x6f\x73\164"] = $mksyucucyswaukig->{$ceiwsaacewygcsqg};
        goto cyeqsmcuiukikium;
        iaywwiisqiumgcma:
        ccgoagogukekkeks:
        goto cekkcogkuwsqqyes;
        mayckwaigqsiwmem:
        
        
        goto iaywwiisqiumgcma;
        gswyigyemukicika:
        if (!$mksyucucyswaukig) {
            goto ccgoagogukekkeks;
        }
        goto mmyiieeusyagswii;
        cekkcogkuwsqqyes:
    }
    
    public function agucyisikcsmeeug($eqgoocgaqwqcimie, $aokagokqyuysuksm, $ywmkwiwkosakssii, $aiowsaccomcoikus)
    {
        goto mgcimqiiwsciocoy;
        skiykgkiekmkcmwe:
        uqcuqaucosyymciy:
        goto owisiqaowqeemuws;
        owisiqaowqeemuws:
        gcwuuuasqqocoics:
        goto eueowawgacsksksk;
        eecukukickgoweyc:
        if (!$eqgoocgaqwqcimie instanceof Collection) {
            goto esumwomoiqskweoc;
        }
        goto eagucokgqqgkukew;
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
        wcsiyammsoaoeska:
        foreach ($eqgoocgaqwqcimie as $meywaqqsugaoeyys) {
            goto cggukoegykqeekww;
            agewumsacuussmoc:
            
            $uomewyckeuqoqocu[] = (array) $meywaqqsugaoeyys->gqaysymikgeawkqa()->ksiyqouuaoymsycg($meywaqqsugaoeyys->{$ceiwsaacewygcsqg});
            goto cymiwscoawuyaugi;
            cymiwscoawuyaugi:
            akuwuwcyqewysmym:
            goto goiacugaoueamwyk;
            cggukoegykqeekww:
            $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
            goto agewumsacuussmoc;
            goiacugaoueamwyk:
        }
        goto iwuyueygqsceyguc;
        qegqgskaeckoqaiq:
        esumwomoiqskweoc:
        goto skiykgkiekmkcmwe;
        mgcimqiiwsciocoy:
        global $cmb2Override;
        goto eowgoimkqygwiock;
        assaqeukweemagcm:
        yoyeqyywuskoamic:
        goto mgkikasuaseesumm;
        eagucokgqqgkukew:
        $uomewyckeuqoqocu = [];
        goto wcsiyammsoaoeska;
        ogeeaauygcocqgee:
        $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $ywmkwiwkosakssii["\146\x69\x65\154\x64\137\151\144"]);
        goto eecukukickgoweyc;
        agemwyemooogsiyc:
        return $eqgoocgaqwqcimie;
        goto assaqeukweemagcm;
        uossiqykiaouimca:
        $mksyucucyswaukig = $this->mgogaykgkoogasim()->cyyiiykmaeuqqgok($aokagokqyuysuksm);
        goto awkgycqimgayoaiy;
        eueowawgacsksksk:
        return $eqgoocgaqwqcimie;
        goto meqygagoeowmwyek;
        iwuyueygqsceyguc:
        eieikkycsmsqumuu:
        goto mgskawmqsikcgaoo;
        mgskawmqsikcgaoo:
        $eqgoocgaqwqcimie = $uomewyckeuqoqocu;
        goto qegqgskaeckoqaiq;
        awkgycqimgayoaiy:
        if (!ManipulateArray::get($mksyucucyswaukig, $ywmkwiwkosakssii["\x66\x69\145\154\144\x5f\x69\144"])) {
            goto uqcuqaucosyymciy;
        }
        goto ogeeaauygcocqgee;
        meqygagoeowmwyek:
    }
}
