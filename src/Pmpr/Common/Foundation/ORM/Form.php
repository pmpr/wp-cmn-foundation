<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        $this->qcsmikeggeemccuu("\141\x64\x6d\151\156\137\x69\x6e\151\164", [$this, "\171\145\x79\x69\147\165\171\x65\147\x6d\x6d\x79\165\x73\145\141"], 0)->qcsmikeggeemccuu("\141\x64\144\x5f\x6d\x65\x74\x61\137\x62\157\170\145\163", [$this, "\x6d\x75\x67\x63\x63\x65\x69\x77\x6f\x73\x79\143\x69\x77\157\x73"], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\163\x61\166\145\137\x6f\142\152\145\143\164", Model::class), [$this, "\x67\163\145\x67\x73\x69\x6f\143\161\x6d\x73\x6f\x61\x79\x69\x69"], 10, 2);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x63\x6d\142\x32\137\x6f\166\x65\x72\162\151\144\145\x5f\155\x65\164\141\137\x76\x61\x6c\165\145", [$this, "\x61\147\x75\x63\171\151\163\x69\153\x63\x73\x6d\x65\145\x75\147"], 10, 4);
        parent::kgquecmsgcouyaya();
    }
    public function yeyiguyegmmyusea()
    {
        goto camiekmccsgqswwo;
        uiuseyqqmuguyckm:
        wckuumkmmocsciqo:
        goto wkgawikcioiuyqme;
        usoomsyiqkwkgeyi:
        $suaemuyiacqyugsm = ManipulateArray::get($_GET, "\x70\141\x67\x65");
        goto geeosccccmmucqce;
        sggkkgmeigoqaoky:
        
        if (!($pagenow === "\x61\x64\x6d\151\x6e\x2e\160\x68\160")) {
            goto wckuumkmmocsciqo;
        }
        goto usoomsyiqkwkgeyi;
        iokskucgaqiqycmm:
        
        $cmb2Override = false;
        goto sggkkgmeigoqaoky;
        geeosccccmmucqce:
        if (!($suaemuyiacqyugsm && ($qqomumygoacsmsie = $this->mgogaykgkoogasim()->cgswceaawqgeskua("\x65\144\x69\x74")))) {
            goto oymoieyokuscmgok;
        }
        goto emeaagoguiuyieui;
        emeaagoguiuyieui:
        if (!($suaemuyiacqyugsm === $qqomumygoacsmsie->aqcogscycyycgkuq())) {
            goto eqskkyagygyigacm;
        }
        goto yecueayusueayyoc;
        yecueayusueayyoc:
        $cmb2Override = true;
        goto mkckgwkgugmguwkm;
        qqcwksosioimeaqq:
        oymoieyokuscmgok:
        goto uiuseyqqmuguyckm;
        camiekmccsgqswwo:
        global $cmb2Override, $pagenow;
        goto iokskucgaqiqycmm;
        mkckgwkgugmguwkm:
        eqskkyagygyigacm:
        goto qqcwksosioimeaqq;
        wkgawikcioiuyqme:
    }
    
    public function gsegsiocqmsoayii($kqokimuosyuyyucg, $mksyucucyswaukig)
    {
        goto auywcaygigcsqoek;
        emuyygwqumgmmqei:
        coeqgweisigocqim:
        goto kgumycouuweoycwe;
        gyqiqmsmeisgcyys:
        foreach (CMB2_Boxes::get_all() as $scegeeyqweaksmki) {
            goto akuowkgaiuksqwgc;
            uyoscwugeomiciwq:
            esaioouuwmeaqiim:
            goto eaeokigkusweawki;
            koioogicyyqwawsy:
            $scegeeyqweaksmki->save_fields($kqokimuosyuyyucg, "\160\157\x73\x74", $_POST);
            goto uyoscwugeomiciwq;
            eaeokigkusweawki:
            gkiwcciigiaeamyi:
            goto ywowkgmqwokusske;
            akuowkgaiuksqwgc:
            if (!in_array($this->mgogaykgkoogasim()->miwqiiqeegeqcwis(), $scegeeyqweaksmki->meta_box["\157\x62\x6a\145\x63\x74\137\x74\x79\160\145\x73"])) {
                goto esaioouuwmeaqiim;
            }
            goto koioogicyyqwawsy;
            ywowkgmqwokusske:
        }
        goto emuyygwqumgmmqei;
        auywcaygigcsqoek:
        global $cmb2Override;
        goto oogqmueeykigemom;
        oogqmueeykigemom:
        
        if (!class_exists("\x43\x4d\102\62")) {
            goto yosikwkgwwawmmeu;
        }
        goto yaskeauwgsusisom;
        yaskeauwgsusisom:
        if (!DecoratorUser::scmcyesmmikkucie("\145\144\151\x74\137\x69\x74\145\155", $kqokimuosyuyyucg)) {
            goto gwoqkkyaeieummsw;
        }
        goto guoeosgiowqqmswg;
        guoeosgiowqqmswg:
        $cmb2Override = true;
        goto gyqiqmsmeisgcyys;
        omkwqeiacwosgskq:
        yosikwkgwwawmmeu:
        goto kimusawigieceeai;
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
        mayckwaigqsiwmem:
        
        
        goto iaywwiisqiumgcma;
        oegoygwicucyeses:
        global $cmb2Override;
        goto gswyigyemukicika;
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
        scwsaugwsiimogui:
        
        $_REQUEST["\160\x6f\x73\164"] = $mksyucucyswaukig->{$ceiwsaacewygcsqg};
        goto cyeqsmcuiukikium;
        cekkcogkuwsqqyes:
    }
    
    public function agucyisikcsmeeug($eqgoocgaqwqcimie, $aokagokqyuysuksm, $ywmkwiwkosakssii, $aiowsaccomcoikus)
    {
        goto mgcimqiiwsciocoy;
        eecukukickgoweyc:
        if (!$eqgoocgaqwqcimie instanceof Collection) {
            goto esumwomoiqskweoc;
        }
        goto eagucokgqqgkukew;
        qegqgskaeckoqaiq:
        esumwomoiqskweoc:
        goto skiykgkiekmkcmwe;
        agemwyemooogsiyc:
        return $eqgoocgaqwqcimie;
        goto assaqeukweemagcm;
        mgkikasuaseesumm:
        if (!$aiowsaccomcoikus->group) {
            goto gcwuuuasqqocoics;
        }
        goto uossiqykiaouimca;
        iwuyueygqsceyguc:
        eieikkycsmsqumuu:
        goto mgskawmqsikcgaoo;
        eowgoimkqygwiock:
        if (!($cmb2Override !== true)) {
            goto yoyeqyywuskoamic;
        }
        goto agemwyemooogsiyc;
        uossiqykiaouimca:
        $mksyucucyswaukig = $this->mgogaykgkoogasim()->cyyiiykmaeuqqgok($aokagokqyuysuksm);
        goto awkgycqimgayoaiy;
        ogeeaauygcocqgee:
        $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $ywmkwiwkosakssii["\146\151\145\154\x64\137\x69\144"]);
        goto eecukukickgoweyc;
        mgskawmqsikcgaoo:
        $eqgoocgaqwqcimie = $uomewyckeuqoqocu;
        goto qegqgskaeckoqaiq;
        eueowawgacsksksk:
        return $eqgoocgaqwqcimie;
        goto meqygagoeowmwyek;
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
        awkgycqimgayoaiy:
        if (!ManipulateArray::get($mksyucucyswaukig, $ywmkwiwkosakssii["\146\x69\x65\x6c\144\137\x69\144"])) {
            goto uqcuqaucosyymciy;
        }
        goto ogeeaauygcocqgee;
        mgcimqiiwsciocoy:
        global $cmb2Override;
        goto eowgoimkqygwiock;
        eagucokgqqgkukew:
        $uomewyckeuqoqocu = [];
        goto wcsiyammsoaoeska;
        skiykgkiekmkcmwe:
        uqcuqaucosyymciy:
        goto owisiqaowqeemuws;
        assaqeukweemagcm:
        yoyeqyywuskoamic:
        goto mgkikasuaseesumm;
        owisiqaowqeemuws:
        gcwuuuasqqocoics:
        goto eueowawgacsksksk;
        meqygagoeowmwyek:
    }
}
