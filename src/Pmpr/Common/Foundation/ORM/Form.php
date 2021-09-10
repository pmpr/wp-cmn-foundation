<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        $this->qcsmikeggeemccuu("\x61\144\x6d\151\156\x5f\151\x6e\x69\164", [$this, "\171\145\171\x69\147\x75\171\x65\147\x6d\x6d\x79\x75\x73\145\141"], 0)->qcsmikeggeemccuu("\x61\144\144\x5f\155\x65\164\141\x5f\142\157\x78\x65\x73", [$this, "\x6d\x75\147\143\x63\145\x69\167\157\163\171\143\x69\167\157\163"], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\163\141\166\145\x5f\x6f\x62\152\x65\x63\x74", Model::class), [$this, "\x67\163\x65\x67\163\151\x6f\143\161\x6d\163\x6f\x61\x79\x69\x69"], 10, 2);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\143\155\x62\x32\x5f\157\166\x65\162\x72\x69\144\x65\x5f\x6d\145\x74\x61\137\x76\141\x6c\165\x65", [$this, "\x61\147\165\x63\x79\x69\163\151\153\x63\163\x6d\x65\145\x75\x67"], 10, 4);
        parent::kgquecmsgcouyaya();
    }
    public function yeyiguyegmmyusea()
    {
        goto camiekmccsgqswwo;
        uiuseyqqmuguyckm:
        wckuumkmmocsciqo:
        goto wkgawikcioiuyqme;
        usoomsyiqkwkgeyi:
        $suaemuyiacqyugsm = ManipulateArray::get($_GET, "\x70\x61\147\x65");
        goto geeosccccmmucqce;
        sggkkgmeigoqaoky:
        
        if (!($pagenow === "\x61\144\155\x69\x6e\x2e\x70\150\x70")) {
            goto wckuumkmmocsciqo;
        }
        goto usoomsyiqkwkgeyi;
        emeaagoguiuyieui:
        if (!($suaemuyiacqyugsm === $qqomumygoacsmsie->aqcogscycyycgkuq())) {
            goto eqskkyagygyigacm;
        }
        goto yecueayusueayyoc;
        qqcwksosioimeaqq:
        oymoieyokuscmgok:
        goto uiuseyqqmuguyckm;
        camiekmccsgqswwo:
        global $cmb2Override, $pagenow;
        goto iokskucgaqiqycmm;
        iokskucgaqiqycmm:
        
        $cmb2Override = false;
        goto sggkkgmeigoqaoky;
        geeosccccmmucqce:
        if (!($suaemuyiacqyugsm && ($qqomumygoacsmsie = $this->mgogaykgkoogasim()->cgswceaawqgeskua("\145\144\151\x74")))) {
            goto oymoieyokuscmgok;
        }
        goto emeaagoguiuyieui;
        mkckgwkgugmguwkm:
        eqskkyagygyigacm:
        goto qqcwksosioimeaqq;
        yecueayusueayyoc:
        $cmb2Override = true;
        goto mkckgwkgugmguwkm;
        wkgawikcioiuyqme:
    }
    
    public function gsegsiocqmsoayii($kqokimuosyuyyucg, $mksyucucyswaukig)
    {
        goto auywcaygigcsqoek;
        yaskeauwgsusisom:
        if (!DecoratorUser::scmcyesmmikkucie("\x65\144\x69\164\x5f\151\164\145\155", $kqokimuosyuyyucg)) {
            goto gwoqkkyaeieummsw;
        }
        goto guoeosgiowqqmswg;
        kgumycouuweoycwe:
        gwoqkkyaeieummsw:
        goto omkwqeiacwosgskq;
        emuyygwqumgmmqei:
        coeqgweisigocqim:
        goto kgumycouuweoycwe;
        auywcaygigcsqoek:
        global $cmb2Override;
        goto oogqmueeykigemom;
        gyqiqmsmeisgcyys:
        foreach (CMB2_Boxes::get_all() as $scegeeyqweaksmki) {
            goto akuowkgaiuksqwgc;
            akuowkgaiuksqwgc:
            if (!in_array($this->mgogaykgkoogasim()->miwqiiqeegeqcwis(), $scegeeyqweaksmki->meta_box["\157\x62\152\x65\143\x74\x5f\164\x79\160\145\x73"])) {
                goto esaioouuwmeaqiim;
            }
            goto koioogicyyqwawsy;
            uyoscwugeomiciwq:
            esaioouuwmeaqiim:
            goto eaeokigkusweawki;
            eaeokigkusweawki:
            gkiwcciigiaeamyi:
            goto ywowkgmqwokusske;
            koioogicyyqwawsy:
            $scegeeyqweaksmki->save_fields($kqokimuosyuyyucg, "\160\x6f\x73\164", $_POST);
            goto uyoscwugeomiciwq;
            ywowkgmqwokusske:
        }
        goto emuyygwqumgmmqei;
        oogqmueeykigemom:
        
        if (!class_exists("\103\115\102\62")) {
            goto yosikwkgwwawmmeu;
        }
        goto yaskeauwgsusisom;
        guoeosgiowqqmswg:
        $cmb2Override = true;
        goto gyqiqmsmeisgcyys;
        omkwqeiacwosgskq:
        yosikwkgwwawmmeu:
        goto kimusawigieceeai;
        kimusawigieceeai:
    }
    
    public function mugcceiwosyciwos($syeseoiyagmgumcy, $mksyucucyswaukig)
    {
        goto oegoygwicucyeses;
        mayckwaigqsiwmem:
        
        
        goto iaywwiisqiumgcma;
        iaywwiisqiumgcma:
        ccgoagogukekkeks:
        goto cekkcogkuwsqqyes;
        scwsaugwsiimogui:
        
        $_REQUEST["\x70\157\x73\x74"] = $mksyucucyswaukig->{$ceiwsaacewygcsqg};
        goto cyeqsmcuiukikium;
        mmyiieeusyagswii:
        $ceiwsaacewygcsqg = $this->mgogaykgkoogasim()->kumuygiiqswoyasy();
        goto scwsaugwsiimogui;
        gswyigyemukicika:
        if (!$mksyucucyswaukig) {
            goto ccgoagogukekkeks;
        }
        goto mmyiieeusyagswii;
        cyeqsmcuiukikium:
        
        $cmb2Override = true;
        goto mayckwaigqsiwmem;
        oegoygwicucyeses:
        global $cmb2Override;
        goto gswyigyemukicika;
        cekkcogkuwsqqyes:
    }
    
    public function agucyisikcsmeeug($eqgoocgaqwqcimie, $aokagokqyuysuksm, $ywmkwiwkosakssii, $aiowsaccomcoikus)
    {
        goto mgcimqiiwsciocoy;
        mgkikasuaseesumm:
        if (!$aiowsaccomcoikus->group) {
            goto gcwuuuasqqocoics;
        }
        goto uossiqykiaouimca;
        awkgycqimgayoaiy:
        if (!ManipulateArray::get($mksyucucyswaukig, $ywmkwiwkosakssii["\146\x69\x65\x6c\x64\x5f\151\144"])) {
            goto uqcuqaucosyymciy;
        }
        goto ogeeaauygcocqgee;
        skiykgkiekmkcmwe:
        uqcuqaucosyymciy:
        goto owisiqaowqeemuws;
        uossiqykiaouimca:
        $mksyucucyswaukig = $this->mgogaykgkoogasim()->cyyiiykmaeuqqgok($aokagokqyuysuksm);
        goto awkgycqimgayoaiy;
        mgcimqiiwsciocoy:
        global $cmb2Override;
        goto eowgoimkqygwiock;
        eowgoimkqygwiock:
        if (!($cmb2Override !== true)) {
            goto yoyeqyywuskoamic;
        }
        goto agemwyemooogsiyc;
        iwuyueygqsceyguc:
        eieikkycsmsqumuu:
        goto mgskawmqsikcgaoo;
        eecukukickgoweyc:
        if (!$eqgoocgaqwqcimie instanceof Collection) {
            goto esumwomoiqskweoc;
        }
        goto eagucokgqqgkukew;
        agemwyemooogsiyc:
        return $eqgoocgaqwqcimie;
        goto assaqeukweemagcm;
        wcsiyammsoaoeska:
        foreach ($eqgoocgaqwqcimie as $meywaqqsugaoeyys) {
            goto cggukoegykqeekww;
            cggukoegykqeekww:
            $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
            goto agewumsacuussmoc;
            cymiwscoawuyaugi:
            akuwuwcyqewysmym:
            goto goiacugaoueamwyk;
            agewumsacuussmoc:
            
            $uomewyckeuqoqocu[] = (array) $meywaqqsugaoeyys->gqaysymikgeawkqa()->ksiyqouuaoymsycg($meywaqqsugaoeyys->{$ceiwsaacewygcsqg});
            goto cymiwscoawuyaugi;
            goiacugaoueamwyk:
        }
        goto iwuyueygqsceyguc;
        eagucokgqqgkukew:
        $uomewyckeuqoqocu = [];
        goto wcsiyammsoaoeska;
        qegqgskaeckoqaiq:
        esumwomoiqskweoc:
        goto skiykgkiekmkcmwe;
        ogeeaauygcocqgee:
        $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $ywmkwiwkosakssii["\x66\x69\145\154\144\x5f\x69\144"]);
        goto eecukukickgoweyc;
        owisiqaowqeemuws:
        gcwuuuasqqocoics:
        goto eueowawgacsksksk;
        eueowawgacsksksk:
        return $eqgoocgaqwqcimie;
        goto meqygagoeowmwyek;
        mgskawmqsikcgaoo:
        $eqgoocgaqwqcimie = $uomewyckeuqoqocu;
        goto qegqgskaeckoqaiq;
        assaqeukweemagcm:
        yoyeqyywuskoamic:
        goto mgkikasuaseesumm;
        meqygagoeowmwyek:
    }
}
