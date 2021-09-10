<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        $this->qcsmikeggeemccuu("\x61\x64\155\x69\x6e\x5f\151\156\151\164", [$this, "\171\145\x79\x69\x67\x75\x79\145\x67\x6d\x6d\x79\165\163\145\x61"], 0)->qcsmikeggeemccuu("\x61\144\x64\x5f\155\x65\x74\x61\x5f\142\x6f\x78\x65\x73", [$this, "\x6d\165\x67\x63\143\145\151\167\x6f\x73\x79\143\x69\167\x6f\163"], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x73\x61\166\x65\x5f\x6f\x62\x6a\x65\143\164", Model::class), [$this, "\147\163\x65\x67\163\151\157\143\x71\155\163\157\141\171\x69\x69"], 10, 2);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\143\155\142\62\137\x6f\x76\145\162\x72\x69\x64\145\x5f\155\x65\164\x61\x5f\x76\x61\154\165\x65", [$this, "\x61\x67\x75\x63\171\x69\x73\x69\153\x63\163\155\145\145\x75\147"], 10, 4);
        parent::kgquecmsgcouyaya();
    }
    public function yeyiguyegmmyusea()
    {
        goto camiekmccsgqswwo;
        mkckgwkgugmguwkm:
        eqskkyagygyigacm:
        goto qqcwksosioimeaqq;
        geeosccccmmucqce:
        if (!($suaemuyiacqyugsm && ($qqomumygoacsmsie = $this->mgogaykgkoogasim()->cgswceaawqgeskua("\x65\144\151\x74")))) {
            goto oymoieyokuscmgok;
        }
        goto emeaagoguiuyieui;
        usoomsyiqkwkgeyi:
        $suaemuyiacqyugsm = ManipulateArray::get($_GET, "\x70\141\147\x65");
        goto geeosccccmmucqce;
        sggkkgmeigoqaoky:
        
        if (!($pagenow === "\141\144\x6d\151\156\56\x70\150\160")) {
            goto wckuumkmmocsciqo;
        }
        goto usoomsyiqkwkgeyi;
        emeaagoguiuyieui:
        if (!($suaemuyiacqyugsm === $qqomumygoacsmsie->aqcogscycyycgkuq())) {
            goto eqskkyagygyigacm;
        }
        goto yecueayusueayyoc;
        iokskucgaqiqycmm:
        
        $cmb2Override = false;
        goto sggkkgmeigoqaoky;
        yecueayusueayyoc:
        $cmb2Override = true;
        goto mkckgwkgugmguwkm;
        camiekmccsgqswwo:
        global $cmb2Override, $pagenow;
        goto iokskucgaqiqycmm;
        uiuseyqqmuguyckm:
        wckuumkmmocsciqo:
        goto wkgawikcioiuyqme;
        qqcwksosioimeaqq:
        oymoieyokuscmgok:
        goto uiuseyqqmuguyckm;
        wkgawikcioiuyqme:
    }
    
    public function gsegsiocqmsoayii($kqokimuosyuyyucg, $mksyucucyswaukig)
    {
        goto auywcaygigcsqoek;
        auywcaygigcsqoek:
        global $cmb2Override;
        goto oogqmueeykigemom;
        omkwqeiacwosgskq:
        yosikwkgwwawmmeu:
        goto kimusawigieceeai;
        oogqmueeykigemom:
        
        if (!class_exists("\103\x4d\x42\62")) {
            goto yosikwkgwwawmmeu;
        }
        goto yaskeauwgsusisom;
        yaskeauwgsusisom:
        if (!DecoratorUser::scmcyesmmikkucie("\145\x64\151\164\137\151\x74\145\x6d", $kqokimuosyuyyucg)) {
            goto gwoqkkyaeieummsw;
        }
        goto guoeosgiowqqmswg;
        guoeosgiowqqmswg:
        $cmb2Override = true;
        goto gyqiqmsmeisgcyys;
        kgumycouuweoycwe:
        gwoqkkyaeieummsw:
        goto omkwqeiacwosgskq;
        gyqiqmsmeisgcyys:
        foreach (CMB2_Boxes::get_all() as $scegeeyqweaksmki) {
            goto akuowkgaiuksqwgc;
            eaeokigkusweawki:
            gkiwcciigiaeamyi:
            goto ywowkgmqwokusske;
            akuowkgaiuksqwgc:
            if (!in_array($this->mgogaykgkoogasim()->miwqiiqeegeqcwis(), $scegeeyqweaksmki->meta_box["\157\x62\x6a\x65\143\164\x5f\x74\171\160\x65\163"])) {
                goto esaioouuwmeaqiim;
            }
            goto koioogicyyqwawsy;
            koioogicyyqwawsy:
            $scegeeyqweaksmki->save_fields($kqokimuosyuyyucg, "\x70\x6f\163\164", $_POST);
            goto uyoscwugeomiciwq;
            uyoscwugeomiciwq:
            esaioouuwmeaqiim:
            goto eaeokigkusweawki;
            ywowkgmqwokusske:
        }
        goto emuyygwqumgmmqei;
        emuyygwqumgmmqei:
        coeqgweisigocqim:
        goto kgumycouuweoycwe;
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
        iaywwiisqiumgcma:
        ccgoagogukekkeks:
        goto cekkcogkuwsqqyes;
        scwsaugwsiimogui:
        
        $_REQUEST["\x70\157\x73\x74"] = $mksyucucyswaukig->{$ceiwsaacewygcsqg};
        goto cyeqsmcuiukikium;
        mayckwaigqsiwmem:
        
        
        goto iaywwiisqiumgcma;
        mmyiieeusyagswii:
        $ceiwsaacewygcsqg = $this->mgogaykgkoogasim()->kumuygiiqswoyasy();
        goto scwsaugwsiimogui;
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
        mgcimqiiwsciocoy:
        global $cmb2Override;
        goto eowgoimkqygwiock;
        mgkikasuaseesumm:
        if (!$aiowsaccomcoikus->group) {
            goto gcwuuuasqqocoics;
        }
        goto uossiqykiaouimca;
        eueowawgacsksksk:
        return $eqgoocgaqwqcimie;
        goto meqygagoeowmwyek;
        awkgycqimgayoaiy:
        if (!ManipulateArray::get($mksyucucyswaukig, $ywmkwiwkosakssii["\146\x69\145\x6c\x64\137\x69\x64"])) {
            goto uqcuqaucosyymciy;
        }
        goto ogeeaauygcocqgee;
        eecukukickgoweyc:
        if (!$eqgoocgaqwqcimie instanceof Collection) {
            goto esumwomoiqskweoc;
        }
        goto eagucokgqqgkukew;
        uossiqykiaouimca:
        $mksyucucyswaukig = $this->mgogaykgkoogasim()->cyyiiykmaeuqqgok($aokagokqyuysuksm);
        goto awkgycqimgayoaiy;
        ogeeaauygcocqgee:
        $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $ywmkwiwkosakssii["\146\151\145\x6c\144\x5f\151\144"]);
        goto eecukukickgoweyc;
        mgskawmqsikcgaoo:
        $eqgoocgaqwqcimie = $uomewyckeuqoqocu;
        goto qegqgskaeckoqaiq;
        eagucokgqqgkukew:
        $uomewyckeuqoqocu = [];
        goto wcsiyammsoaoeska;
        owisiqaowqeemuws:
        gcwuuuasqqocoics:
        goto eueowawgacsksksk;
        iwuyueygqsceyguc:
        eieikkycsmsqumuu:
        goto mgskawmqsikcgaoo;
        qegqgskaeckoqaiq:
        esumwomoiqskweoc:
        goto skiykgkiekmkcmwe;
        agemwyemooogsiyc:
        return $eqgoocgaqwqcimie;
        goto assaqeukweemagcm;
        assaqeukweemagcm:
        yoyeqyywuskoamic:
        goto mgkikasuaseesumm;
        eowgoimkqygwiock:
        if (!($cmb2Override !== true)) {
            goto yoyeqyywuskoamic;
        }
        goto agemwyemooogsiyc;
        wcsiyammsoaoeska:
        foreach ($eqgoocgaqwqcimie as $meywaqqsugaoeyys) {
            goto cggukoegykqeekww;
            cggukoegykqeekww:
            $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
            goto agewumsacuussmoc;
            agewumsacuussmoc:
            
            $uomewyckeuqoqocu[] = (array) $meywaqqsugaoeyys->gqaysymikgeawkqa()->ksiyqouuaoymsycg($meywaqqsugaoeyys->{$ceiwsaacewygcsqg});
            goto cymiwscoawuyaugi;
            cymiwscoawuyaugi:
            akuwuwcyqewysmym:
            goto goiacugaoueamwyk;
            goiacugaoueamwyk:
        }
        goto iwuyueygqsceyguc;
        meqygagoeowmwyek:
    }
}
