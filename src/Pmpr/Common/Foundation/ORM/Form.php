<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        $this->qcsmikeggeemccuu("\x61\x64\155\151\156\x5f\151\x6e\x69\164", [$this, "\171\x65\x79\x69\147\x75\171\x65\147\x6d\x6d\171\x75\x73\x65\141"], 0)->qcsmikeggeemccuu("\x61\x64\144\137\155\x65\x74\x61\137\x62\157\x78\x65\163", [$this, "\155\x75\147\143\x63\x65\151\167\x6f\x73\x79\143\x69\x77\157\163"], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\163\141\x76\145\137\157\x62\x6a\x65\x63\x74", Model::class), [$this, "\x67\x73\145\x67\163\151\157\x63\161\x6d\x73\x6f\141\171\x69\151"], 10, 2);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\143\155\x62\x32\137\x6f\166\x65\x72\x72\151\x64\145\137\x6d\145\164\141\x5f\x76\141\x6c\165\145", [$this, "\141\147\165\x63\x79\x69\x73\151\153\143\x73\x6d\x65\145\x75\x67"], 10, 4);
        parent::kgquecmsgcouyaya();
    }
    public function yeyiguyegmmyusea()
    {
        goto eqskkyagygyigacm;
        eqskkyagygyigacm:
        global $cmb2Override, $pagenow;
        goto oymoieyokuscmgok;
        iokskucgaqiqycmm:
        if (!($suaemuyiacqyugsm && ($qqomumygoacsmsie = $this->mgogaykgkoogasim()->cgswceaawqgeskua("\145\x64\151\164")))) {
            goto oiammieoqaouyioy;
        }
        goto sggkkgmeigoqaoky;
        emeaagoguiuyieui:
        oiammieoqaouyioy:
        goto yecueayusueayyoc;
        yecueayusueayyoc:
        qcwcskcquoyuesge:
        goto mkckgwkgugmguwkm;
        sggkkgmeigoqaoky:
        if (!($suaemuyiacqyugsm === $qqomumygoacsmsie->aqcogscycyycgkuq())) {
            goto aickummaecoksgec;
        }
        goto usoomsyiqkwkgeyi;
        wckuumkmmocsciqo:
        
        if (!($pagenow === "\141\144\x6d\x69\156\56\160\150\x70")) {
            goto qcwcskcquoyuesge;
        }
        goto camiekmccsgqswwo;
        camiekmccsgqswwo:
        $suaemuyiacqyugsm = ManipulateArray::get($_GET, "\160\x61\x67\x65");
        goto iokskucgaqiqycmm;
        oymoieyokuscmgok:
        
        $cmb2Override = false;
        goto wckuumkmmocsciqo;
        usoomsyiqkwkgeyi:
        $cmb2Override = true;
        goto geeosccccmmucqce;
        geeosccccmmucqce:
        aickummaecoksgec:
        goto emeaagoguiuyieui;
        mkckgwkgugmguwkm:
    }
    
    public function gsegsiocqmsoayii($kqokimuosyuyyucg, $mksyucucyswaukig)
    {
        goto ywowkgmqwokusske;
        auywcaygigcsqoek:
        $cmb2Override = true;
        goto oogqmueeykigemom;
        yaskeauwgsusisom:
        qqcwksosioimeaqq:
        goto guoeosgiowqqmswg;
        gwoqkkyaeieummsw:
        
        if (!class_exists("\x43\115\x42\62")) {
            goto eaeokigkusweawki;
        }
        goto yosikwkgwwawmmeu;
        ywowkgmqwokusske:
        global $cmb2Override;
        goto gwoqkkyaeieummsw;
        oogqmueeykigemom:
        foreach (CMB2_Boxes::get_all() as $scegeeyqweaksmki) {
            goto coeqgweisigocqim;
            gkiwcciigiaeamyi:
            $scegeeyqweaksmki->save_fields($kqokimuosyuyyucg, "\x70\x6f\163\164", $_POST);
            goto esaioouuwmeaqiim;
            esaioouuwmeaqiim:
            wkgawikcioiuyqme:
            goto akuowkgaiuksqwgc;
            coeqgweisigocqim:
            if (!in_array($this->mgogaykgkoogasim()->miwqiiqeegeqcwis(), $scegeeyqweaksmki->meta_box["\157\x62\152\145\143\x74\x5f\164\x79\x70\145\x73"])) {
                goto wkgawikcioiuyqme;
            }
            goto gkiwcciigiaeamyi;
            akuowkgaiuksqwgc:
            uiuseyqqmuguyckm:
            goto koioogicyyqwawsy;
            koioogicyyqwawsy:
        }
        goto yaskeauwgsusisom;
        guoeosgiowqqmswg:
        uyoscwugeomiciwq:
        goto gyqiqmsmeisgcyys;
        yosikwkgwwawmmeu:
        if (!DecoratorUser::scmcyesmmikkucie("\145\x64\151\x74\x5f\x69\x74\145\155", $kqokimuosyuyyucg)) {
            goto uyoscwugeomiciwq;
        }
        goto auywcaygigcsqoek;
        gyqiqmsmeisgcyys:
        eaeokigkusweawki:
        goto emuyygwqumgmmqei;
        emuyygwqumgmmqei:
    }
    
    public function mugcceiwosyciwos($syeseoiyagmgumcy, $mksyucucyswaukig)
    {
        goto omkwqeiacwosgskq;
        kimusawigieceeai:
        if (!$mksyucucyswaukig) {
            goto kgumycouuweoycwe;
        }
        goto ccgoagogukekkeks;
        ccgoagogukekkeks:
        $ceiwsaacewygcsqg = $this->mgogaykgkoogasim()->kumuygiiqswoyasy();
        goto oegoygwicucyeses;
        scwsaugwsiimogui:
        kgumycouuweoycwe:
        goto cyeqsmcuiukikium;
        oegoygwicucyeses:
        
        $_REQUEST["\x70\157\163\164"] = $mksyucucyswaukig->{$ceiwsaacewygcsqg};
        goto gswyigyemukicika;
        mmyiieeusyagswii:
        
        
        goto scwsaugwsiimogui;
        omkwqeiacwosgskq:
        global $cmb2Override;
        goto kimusawigieceeai;
        gswyigyemukicika:
        
        $cmb2Override = true;
        goto mmyiieeusyagswii;
        cyeqsmcuiukikium:
    }
    
    public function agucyisikcsmeeug($eqgoocgaqwqcimie, $aokagokqyuysuksm, $ywmkwiwkosakssii, $aiowsaccomcoikus)
    {
        goto esumwomoiqskweoc;
        agemwyemooogsiyc:
        $mksyucucyswaukig = $this->mgogaykgkoogasim()->cyyiiykmaeuqqgok($aokagokqyuysuksm);
        goto assaqeukweemagcm;
        eowgoimkqygwiock:
        if (!$aiowsaccomcoikus->group) {
            goto goiacugaoueamwyk;
        }
        goto agemwyemooogsiyc;
        eagucokgqqgkukew:
        $eqgoocgaqwqcimie = $uomewyckeuqoqocu;
        goto wcsiyammsoaoeska;
        uossiqykiaouimca:
        if (!$eqgoocgaqwqcimie instanceof Collection) {
            goto agewumsacuussmoc;
        }
        goto awkgycqimgayoaiy;
        uqcuqaucosyymciy:
        if (!($cmb2Override !== true)) {
            goto mayckwaigqsiwmem;
        }
        goto gcwuuuasqqocoics;
        esumwomoiqskweoc:
        global $cmb2Override;
        goto uqcuqaucosyymciy;
        wcsiyammsoaoeska:
        agewumsacuussmoc:
        goto iwuyueygqsceyguc;
        gcwuuuasqqocoics:
        return $eqgoocgaqwqcimie;
        goto mgcimqiiwsciocoy;
        mgkikasuaseesumm:
        $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $ywmkwiwkosakssii["\x66\x69\x65\x6c\x64\x5f\x69\x64"]);
        goto uossiqykiaouimca;
        qegqgskaeckoqaiq:
        return $eqgoocgaqwqcimie;
        goto skiykgkiekmkcmwe;
        mgcimqiiwsciocoy:
        mayckwaigqsiwmem:
        goto eowgoimkqygwiock;
        awkgycqimgayoaiy:
        $uomewyckeuqoqocu = [];
        goto ogeeaauygcocqgee;
        ogeeaauygcocqgee:
        foreach ($eqgoocgaqwqcimie as $meywaqqsugaoeyys) {
            goto yoyeqyywuskoamic;
            yoyeqyywuskoamic:
            $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
            goto eieikkycsmsqumuu;
            eieikkycsmsqumuu:
            
            $uomewyckeuqoqocu[] = (array) $meywaqqsugaoeyys->gqaysymikgeawkqa()->ksiyqouuaoymsycg($meywaqqsugaoeyys->{$ceiwsaacewygcsqg});
            goto akuwuwcyqewysmym;
            akuwuwcyqewysmym:
            cekkcogkuwsqqyes:
            goto cggukoegykqeekww;
            cggukoegykqeekww:
        }
        goto eecukukickgoweyc;
        iwuyueygqsceyguc:
        cymiwscoawuyaugi:
        goto mgskawmqsikcgaoo;
        mgskawmqsikcgaoo:
        goiacugaoueamwyk:
        goto qegqgskaeckoqaiq;
        eecukukickgoweyc:
        iaywwiisqiumgcma:
        goto eagucokgqqgkukew;
        assaqeukweemagcm:
        if (!ManipulateArray::get($mksyucucyswaukig, $ywmkwiwkosakssii["\146\x69\x65\154\x64\x5f\151\x64"])) {
            goto cymiwscoawuyaugi;
        }
        goto mgkikasuaseesumm;
        skiykgkiekmkcmwe:
    }
}
