<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\View;

use Pmpr\Common\Foundation\Decorator\DecoratorAsset;
use Pmpr\Common\Foundation\Decorator\DecoratorUser;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Checkbox;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\File;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Group;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateTemplate;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface;
use Pmpr\Common\Foundation\Notice;
use Illuminate\Database\Eloquent\Collection;

class Edit extends ObjectAware
{
    const COOKIE_STORE = "\x6f\x72\155\x2d\146\x69\145\154\x64\x73\55\163\x74\x6f\x72\145";
    const COOKIE_ERRORS = "\157\x72\x6d\55\146\151\145\154\x64\163\55\145\x72\162\x6f\162\x73";
    
    protected $message = false;
    
    protected bool $editing = false;
    public function amsuqecgqokqqaue()
    {
        goto ekoqieigyoeyauqa;
        qksckewucmosemuo:
        $ueeagokqmgisgauy = ManipulateArray::get($sogksuscggsicmac, "\145\162\162\157\x72\163", []);
        goto kmooekeyemqgucci;
        ookcgumoacskyymy:
        ssagcgqaucssyego:
        goto cuseccewekgcgkyg;
        cuommomwmsackoqc:
        ManipulateArray::unset($aqmwamyiwgeeymqa, "\157\162\x6d\x2d\163\x61\x76\145");
        goto ggeoqeowscwkeumy;
        wswikooyuaaouqgk:
        yksywwikmeksikqc:
        goto awwaiioyywmokwsm;
        sooecucuakgkuyis:
        Notice::kigowwqauiumummw(sprintf($wamcomkuwysqgwgk, $this->oyeskqayoscwciem()->giiayuqckuiecosm()), "\x6f\162\155\55\x6e\157\164\x69\x63\145");
        goto ywqakqkmmcoceqka;
        yqicwmekwuoywyus:
        if ($sogksuscggsicmac[self::SUCCESS]) {
            goto iwkckkeimmeoquyq;
        }
        goto gkoaeuekqockuoiq;
        ekakkiuuquqkccse:
        goto giugwaeuwaomossq;
        goto oqwwacmigasucsoc;
        owisckseoogsugqq:
        exit;
        goto ookcgumoacskyymy;
        wkiymcoqqiigqaaw:
        qwisiamkmkkwucyo:
        goto esqwswmoegiqcckg;
        goaowamiyyamueiw:
        $igscmsiuisqaqwkk = $meywaqqsugaoeyys->comogmawyoiquwis();
        goto iaomqomgiwiegoca;
        yseyyukqaowwouua:
        yiceawuuiusakwiq:
        goto qcgyggiaowuqswuw;
        iaomqomgiwiegoca:
        acgqaeakoyasgkku:
        goto ysweqawmawicakeo;
        ukwoswyyogmsygqg:
        $icwicymcioeyeyek[$aokagokqyuysuksm] = $aokagokqyuysuksm;
        goto jsmisuccwyukksgc;
        uyeyscsaigimsqwq:
        sgocecweikecwwgq:
        goto mwieyyqamgwicgco;
        ysweqawmawicakeo:
        wp_safe_redirect($igscmsiuisqaqwkk);
        goto owisckseoogsugqq;
        gicuuwuuuwumyooa:
        $mksyucucyswaukig = ManipulateArray::get($sogksuscggsicmac, "\157\x62\152\145\143\164");
        goto kakkuyeccaacewyo;
        esqwswmoegiqcckg:
        $eumukgqciqgksuiq = sprintf($wamcomkuwysqgwgk, $this->oyeskqayoscwciem()->giiayuqckuiecosm());
        goto qmokwkocmcyeyesc;
        mwieyyqamgwicgco:
        $wamcomkuwysqgwgk = __("\45\163\40\143\157\165\x6c\144\40\x6e\157\164\x20\x62\x65\40\165\160\144\x61\x74\145\144\x2e", PR__CMN__FOUNDATION);
        goto wkiymcoqqiigqaaw;
        ckwmkquuyyugigom:
        $igscmsiuisqaqwkk = $meywaqqsugaoeyys->yyykkcyiksewsoqy($aokagokqyuysuksm);
        goto cumeycwmuuqawwyu;
        kakkuyeccaacewyo:
        $aokagokqyuysuksm = ManipulateArray::get($mksyucucyswaukig, $meywaqqsugaoeyys->kumuygiiqswoyasy());
        goto cysgqimowcqoqqsc;
        qsokkkyoackoycie:
        qeuyekusasqmcqms:
        goto casgoamcqkekgeeo;
        cuseccewekgcgkyg:
        mqgeseysuwcaqwiy:
        goto kgysyqkoqgwmoscq;
        awwaiioyywmokwsm:
        if ($igscmsiuisqaqwkk) {
            goto yoqsigmoyaaceqky;
        }
        goto ckwmkquuyyugigom;
        kceuusiekagyeoys:
        goto qwisiamkmkkwucyo;
        goto uyeyscsaigimsqwq;
        qmokwkocmcyeyesc:
        Notice::eumukgqciqgksuiq($eumukgqciqgksuiq, "\157\162\x6d\x2d\x6e\157\164\x69\x63\x65");
        goto mosuacsuaasssciu;
        ksckqkmwiqggykke:
        if ($this->oyeskqayoscwciem()->uwaascqoguwkwiaw()) {
            goto sycougcyeqmeiagk;
        }
        goto igwkcikeyoowosoi;
        igwkcikeyoowosoi:
        wp_die(__("\x53\x6f\162\162\171\54\x20\171\157\165\x20\x61\162\145\40\x6e\157\164\40\141\154\x6c\x6f\x77\145\144\x20\x74\157\40\145\144\151\164\40\x69\164\145\155\x73\40\x6f\146\x20\164\x68\x69\163\40\x74\171\160\x65\x2e", PR__CMN__FOUNDATION));
        goto iqsgossweywksoia;
        uqcsksaywyqeumig:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto yggmaskeguaqkusc;
        iqsgossweywksoia:
        goto ssagcgqaucssyego;
        goto awaqksikyomsuaeo;
        qyeswawykmasuqye:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto uwaimsisescsgyqk;
        ekoqieigyoeyauqa:
        setcookie(self::COOKIE_STORE, '');
        goto cuwcsamuuqyuyqsu;
        kwsqgqmwyyeykgum:
        $igscmsiuisqaqwkk = '';
        goto emauuoieewwoeyqq;
        emauuoieewwoeyqq:
        if ($aokagokqyuysuksm) {
            goto suqckoccuyeeymww;
        }
        goto koukiyqaccegmquc;
        cmmusgkieoqyymgs:
        yqcusaeysomccaok:
        goto mkgmaguyswskyioa;
        casgoamcqkekgeeo:
        $wamcomkuwysqgwgk = __("\45\x73\40\165\x70\144\141\164\x65\x64\40\x73\x75\143\x63\x65\x73\163\146\x75\154\x6c\x79\56", PR__CMN__FOUNDATION);
        goto yseyyukqaowwouua;
        cuwcsamuuqyuyqsu:
        setcookie(self::COOKIE_ERRORS, '');
        goto mimacwyuueomgwwy;
        ywqakqkmmcoceqka:
        masakmomqmeocqqg:
        goto kwsqgqmwyyeykgum;
        oqwwacmigasucsoc:
        suqckoccuyeeymww:
        goto egkeqqgakieyimuq;
        ggeoqeowscwkeumy:
        $icwicymcioeyeyek = ManipulateServer::ayueggmoqeeukqmq();
        goto qyeswawykmasuqye;
        ismeikacqqyqcmqe:
        goto yiceawuuiusakwiq;
        goto qsokkkyoackoycie;
        kmooekeyemqgucci:
        if (!$ueeagokqmgisgauy) {
            goto yqcusaeysomccaok;
        }
        goto skuuyysooocugyww;
        gkoaeuekqockuoiq:
        if ($aokagokqyuysuksm) {
            goto sgocecweikecwwgq;
        }
        goto eekaiaeqewiqkkgm;
        mosuacsuaasssciu:
        setcookie(self::COOKIE_STORE, wp_json_encode($icwicymcioeyeyek));
        goto qksckewucmosemuo;
        kwmiwaecqcgiaqye:
        $sogksuscggsicmac = $meywaqqsugaoeyys->gscuuyuyauokoyuo($icwicymcioeyeyek);
        goto yqicwmekwuoywyus;
        cumeycwmuuqawwyu:
        yoqsigmoyaaceqky:
        goto uaicwcqwauosmsqm;
        jsmisuccwyukksgc:
        ousmyagwsiooumos:
        goto kwmiwaecqcgiaqye;
        usyckeewsgwaysam:
        if ($aokagokqyuysuksm) {
            goto qeuyekusasqmcqms;
        }
        goto gicuuwuuuwumyooa;
        cysgqimowcqoqqsc:
        $wamcomkuwysqgwgk = __("\x25\x73\x20\x61\x64\144\x65\x64\x20\163\x75\x63\x63\145\x73\163\x66\x75\154\154\171\x2e", PR__CMN__FOUNDATION);
        goto ismeikacqqyqcmqe;
        yggmaskeguaqkusc:
        if (!($aokagokqyuysuksm = (int) ManipulateServer::get($ceiwsaacewygcsqg))) {
            goto ousmyagwsiooumos;
        }
        goto ukwoswyyogmsygqg;
        awaqksikyomsuaeo:
        sycougcyeqmeiagk:
        goto cuommomwmsackoqc;
        qcgyggiaowuqswuw:
        $iueymcwwscwqkiyq = self::SUCCESS;
        goto sooecucuakgkuyis;
        mkgmaguyswskyioa:
        goto masakmomqmeocqqg;
        goto skwusmoyomgqkimm;
        gsqcoqqsioiyoykq:
        if ($igscmsiuisqaqwkk) {
            goto acgqaeakoyasgkku;
        }
        goto goaowamiyyamueiw;
        uaicwcqwauosmsqm:
        giugwaeuwaomossq:
        goto gsqcoqqsioiyoykq;
        skuuyysooocugyww:
        setcookie(self::COOKIE_ERRORS, wp_json_encode($ueeagokqmgisgauy));
        goto cmmusgkieoqyymgs;
        skwusmoyomgqkimm:
        iwkckkeimmeoquyq:
        goto usyckeewsgwaysam;
        uwaimsisescsgyqk:
        $iueymcwwscwqkiyq = self::FAILED;
        goto uqcsksaywyqeumig;
        eekaiaeqewiqkkgm:
        $wamcomkuwysqgwgk = __("\x25\x73\40\x63\x6f\x75\154\x64\x20\156\x6f\164\40\x62\x65\40\x61\144\144\145\x64\56", PR__CMN__FOUNDATION);
        goto kceuusiekagyeoys;
        cakuguiciaiaeukg:
        $igscmsiuisqaqwkk = $meywaqqsugaoeyys->uesweuocqoywoyms($aokagokqyuysuksm);
        goto wswikooyuaaouqgk;
        egkeqqgakieyimuq:
        if (!($iueymcwwscwqkiyq == self::SUCCESS)) {
            goto yksywwikmeksikqc;
        }
        goto cakuguiciaiaeukg;
        mimacwyuueomgwwy:
        if (!isset($_POST["\157\x72\x6d\55\x73\141\166\x65"])) {
            goto mqgeseysuwcaqwiy;
        }
        goto ksckqkmwiqggykke;
        koukiyqaccegmquc:
        $igscmsiuisqaqwkk = $meywaqqsugaoeyys->acsiseaeysswwqkw();
        goto ekakkiuuquqkccse;
        kgysyqkoqgwmoscq:
    }
    public function render()
    {
        goto acesyuieuuqwgkwm;
        qiaaqkymeuuueoqk:
        $qksucogmsqmawmwi = null;
        goto ugswokwmkumcmigc;
        gwiaimosqoiquwkc:
        $meqocwsecsywiiqs = $this->mmqossqsksemasay("\x61\144\x64\137\156\145\167\137\151\164\x65\x6d");
        goto owgakkqgckqcegoi;
        acesyuieuuqwgkwm:
        parent::render();
        goto asaowisseacciyia;
        kkewoqqowugagwoy:
        oqwcmgwimeisusoe:
        goto wwswmaewcaisauei;
        cigesysuauaiccms:
        makomwwyomweyamm:
        goto qumkwsqqocooyuoq;
        wwswmaewcaisauei:
        echo $this->iuygowkemiiwqmiw("\145\x64\151\x74", ["\151\x64" => $this->mwikyscisascoeea(), "\x74\x69\x74\x6c\x65" => $meqocwsecsywiiqs, "\156\x61\x6d\x65" => $this->oyeskqayoscwciem()->aakmagwggmkoiiyu(), "\157\x62\x6a\x65\143\164" => $this->imgymusqgccqsqqq(), "\143\157\154\165\155\156\x73" => $this->yoqiwysegascakim(), "\141\x64\x64\137\x75\x72\154" => $qksucogmsqmawmwi, "\x6d\145\163\x73\x61\147\x65" => $this->sagusgigmkeysock(), "\x61\x64\x64\137\x75\162\154\x5f\x74\151\x74\x6c\x65" => $this->oyeskqayoscwciem()->uikgwcuascgeissw("\141\x64\144\137\156\145\167\137\x69\164\145\x6d"), "\x70\x72\x69\155\141\x72\x79\x5f\x6b\145\171" => $this->mgogaykgkoogasim()->kumuygiiqswoyasy()]);
        goto wsemeeocquawyauo;
        gcskyqewysqaceeg:
        $qksucogmsqmawmwi = $this->mgogaykgkoogasim()->acsiseaeysswwqkw();
        goto kkewoqqowugagwoy;
        owgakkqgckqcegoi:
        goto oqwcmgwimeisusoe;
        goto cigesysuauaiccms;
        qumkwsqqocooyuoq:
        $meqocwsecsywiiqs = $this->mmqossqsksemasay("\145\x64\x69\x74\x5f\151\x74\145\x6d");
        goto gcskyqewysqaceeg;
        ugswokwmkumcmigc:
        if ($this->oguuceugyqgsqewy()) {
            goto makomwwyomweyamm;
        }
        goto gwiaimosqoiquwkc;
        asaowisseacciyia:
        $this->oemueqoooyaieeum();
        goto qiaaqkymeuuueoqk;
        wsemeeocquawyauo:
    }
    public function oemueqoooyaieeum()
    {
        goto wmaeicoyyciuaiuy;
        magymcqykamwqigw:
        
        ManipulateTemplate::sikqggwmmykuiymy(["\x63\141\154\154\x62\x61\143\153" => [$this, "\151\x75\141\165\143\165\x6f\157\x6b\147\x6f\x71\x69\151\x69\x6f"], "\163\x63\162\x65\145\x6e" => $ymqmyyeuycgmigyo, "\x63\x6f\x6e\x74\145\x78\164" => "\x6e\157\162\x6d\x61\x6c", self::ID => "\155\141\x69\156\137\x66\x69\145\154\144\163", self::ICON => $meywaqqsugaoeyys->oyeskqayoscwciem()->qyyikeaseoskcacm(), self::TITLE => $this->oyeskqayoscwciem()->uikgwcuascgeissw($this->oguuceugyqgsqewy() ? "\145\144\x69\164\x5f\151\164\x65\155" : "\x61\144\x64\x5f\156\145\167\x5f\x69\x74\145\155"), self::PRIORITY => "\x63\x6f\162\x65"]);
        goto ukogwqiuuuakkawy;
        aaogeemgkogagkai:
        ocgkwqqmgasuoies:
        goto qqmmycmsoqegcqqw;
        ooysmgyeqoiesgqm:
        if (!wp_is_mobile()) {
            goto ocgkwqqmgasuoies;
        }
        goto kwoyiysciqumswcy;
        isqwwmikecauwyuc:
        $ymqmyyeuycgmigyo = $meywaqqsugaoeyys->miwqiiqeegeqcwis();
        goto oiiqqgyqmggyiums;
        oiiqqgyqmggyiums:
        
        ManipulateTemplate::sikqggwmmykuiymy(["\143\x61\154\154\x62\x61\x63\153" => [$this, "\x6d\x79\143\163\161\x71\x67\x77\167\x69\147\171\x69\145\x77\x6b"], "\x73\x63\162\x65\145\x6e" => $ymqmyyeuycgmigyo, "\143\157\156\164\x65\170\x74" => "\163\151\x64\x65", self::ID => "\163\165\x62\155\x69\164\x64\x69\166", self::ICON => IconFontawesomeInterface::ICON_FLOPPY_DISK, self::TITLE => __("\123\141\x76\x65\x20\x43\x68\141\156\x67\x65\163", PR__CMN__FOUNDATION), self::PRIORITY => "\x63\x6f\162\x65"]);
        goto magymcqykamwqigw;
        ukogwqiuuuakkawy:
        $this->cqscqicucmeamkyq("\141\144\x64\x5f\155\x65\164\x61\x5f\142\x6f\x78\145\163", $ymqmyyeuycgmigyo, $this->imgymusqgccqsqqq())->cqscqicucmeamkyq("\141\x64\144\x5f\155\145\x74\x61\137\x62\157\x78\x65\x73\x5f{$ymqmyyeuycgmigyo}", $this->imgymusqgccqsqqq())->cqscqicucmeamkyq("\144\x6f\137\155\145\164\141\137\142\157\170\145\163", $ymqmyyeuycgmigyo, "\x6e\x6f\x72\155\x61\x6c", $this->imgymusqgccqsqqq())->cqscqicucmeamkyq("\144\157\137\155\145\164\141\x5f\142\x6f\170\x65\x73", $ymqmyyeuycgmigyo, "\141\144\x76\141\156\x63\x65\144", $this->imgymusqgccqsqqq())->cqscqicucmeamkyq("\144\157\x5f\x6d\x65\164\x61\137\142\157\170\145\x73", $ymqmyyeuycgmigyo, "\163\x69\x64\x65", $this->imgymusqgccqsqqq());
        goto gicmaqmuscawegie;
        qqmmycmsoqegcqqw:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto isqwwmikecauwyuc;
        kwoyiysciqumswcy:
        DecoratorAsset::imsomwwswyoquoqk("\x6a\161\165\145\162\x79\x2d\x74\157\165\x63\x68\x2d\x70\x75\156\143\x68");
        goto aaogeemgkogagkai;
        wmaeicoyyciuaiuy:
        DecoratorAsset::imsomwwswyoquoqk("\x70\157\163\x74");
        goto ooysmgyeqoiesgqm;
        gicmaqmuscawegie:
    }
    
    public function sagusgigmkeysock()
    {
        return $this->message;
    }
    public function mqyuagguukgcoeka()
    {
        goto ucksaiwquekagyqe;
        iyeswoaqkaeggiiy:
        $this->amsuqecgqokqqaue();
        goto asqqqqakiagymemk;
        iquecygaakmiomeg:
        $this->editing = true;
        goto eacysqsegwcqawsa;
        ucksaiwquekagyqe:
        parent::mqyuagguukgcoeka();
        goto iyeswoaqkaeggiiy;
        yimeskeioamqmuwg:
        wp_die(__("\x53\x6f\x72\162\x79\x2c\40\171\157\x75\40\x61\x72\145\x20\x6e\x6f\164\40\x61\x6c\x6c\157\x77\145\x64\x20\x74\x6f\40\145\x64\x69\x74\x20\x74\x68\151\x73\40\x69\x74\x65\155\x2e", PR__CMN__FOUNDATION));
        goto yeemsgmumygmumqw;
        asqqqqakiagymemk:
        if ($this->mwikyscisascoeea()) {
            goto ayamomygygmgwgkg;
        }
        goto jkgouewqysmscmqs;
        jkgouewqysmscmqs:
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        goto sgiuwkisugmewmcs;
        eacysqsegwcqawsa:
        
        if (DecoratorUser::scmcyesmmikkucie("\145\144\x69\x74\137\151\x74\145\155", $this->mwikyscisascoeea())) {
            goto oymyqcoekqyuiguq;
        }
        goto yimeskeioamqmuwg;
        sgiuwkisugmewmcs:
        goto gygqgauaceiuawkq;
        goto kceeuicccqscwgsu;
        yeemsgmumygmumqw:
        oymyqcoekqyuiguq:
        goto wkaoyycsoeoyqcae;
        wkaoyycsoeoyqcae:
        gygqgauaceiuawkq:
        goto cwugokqsmiomgmqg;
        kceeuicccqscwgsu:
        ayamomygygmgwgkg:
        goto iquecygaakmiomeg;
        cwugokqsmiomgmqg:
    }
    public function iuaucuookgoqiiio()
    {
        goto ggqwcqssoauckuic;
        waewaiuiogywqigu:
        $aaeyeciuoqooykka = ManipulateServer::aukgyiaewiccooqw(self::COOKIE_STORE);
        goto yyamycyesguwueuw;
        sugumgeqcwgekcqs:
        if (!$ueeagokqmgisgauy) {
            goto ekoegocuqoycoeyq;
        }
        goto imeaiksowuukikui;
        mmkoqmccusoeaoyi:
        $mksyucucyswaukig = $this->imgymusqgccqsqqq();
        goto waewaiuiogywqigu;
        yyamycyesguwueuw:
        $ueeagokqmgisgauy = ManipulateServer::aukgyiaewiccooqw(self::COOKIE_ERRORS);
        goto aymmymequcisekie;
        kyggwyywiycksgqq:
        uuuceqkseqkqawko:
        goto sugumgeqcwgekcqs;
        aqmiewawgseaqeqk:
        ekoegocuqoycoeyq:
        goto gaceikykesgywssm;
        imeaiksowuukikui:
        $ueeagokqmgisgauy = json_decode(wp_unslash($ueeagokqmgisgauy), true);
        goto aqmiewawgseaqeqk;
        gaceikykesgywssm:
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) {
            goto ocmagamuyawyiyka;
            iuyagqakcieasiua:
            becceuuwokgoaewy:
            goto oasisywuwssumsok;
            ucaoyoamaycsiacq:
            goto wyugqoowakyicyic;
            goto iuyagqakcieasiua;
            ucasigqmoiwaimkk:
            mocaoayiouggauiy:
            goto uugwmywmaqomeksa;
            ggqeakyaggiuegek:
            ggyoywwggggekycs:
            goto usgcoawgqswoeiec;
            mcucegiogmuyogki:
            $eqgoocgaqwqcimie = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}\137\x6d\141\x6e\x61\x67\x65\137\x65\144\x69\164\137{$aiowsaccomcoikus->aakmagwggmkoiiyu()}\137\x76\x61\154\x75\x65"), $eqgoocgaqwqcimie, $aiowsaccomcoikus, $mksyucucyswaukig);
            goto gqaimiooakyykccy;
            measoqewessauqma:
            $eqgoocgaqwqcimie = ManipulateAttachment::mgaeeqsgeoukeokc($eqgoocgaqwqcimie);
            goto auaigccmwqwsqsku;
            woqkgwmkmqsuceuy:
            ugiqiewymimqecsu:
            goto imwiyqcekcykscui;
            uuisaeysawuagysg:
            weouocwmwicayyiy:
            goto ggqeakyaggiuegek;
            omsmaougqkqigogw:
            $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $aiowsaccomcoikus->mwikyscisascoeea());
            goto geasgywiogoeamek;
            geasgywiogoeamek:
            goto qgkiguggkyiycwow;
            goto qweyymyuuqwcmkqg;
            syoeqaqkseguwmgy:
            goto mocaoayiouggauiy;
            goto sgiouaqukyycswqm;
            kieyoaoawqacqamy:
            wyugqoowakyicyic:
            goto qckouamqueqiykqi;
            iwgmywqocewwgoeo:
            $wkkcmkuiigsukyik = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}\x5f\x6d\x61\x6e\x61\147\x65\137\x61\144\144\137\x66\151\x65\154\x64\x5f\163\x68\x6f\x77"), true, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus);
            goto syoeqaqkseguwmgy;
            uugwmywmaqomeksa:
            if ($wkkcmkuiigsukyik) {
                goto gkkwmqoacciwomqs;
            }
            goto wowmysuygugawmmu;
            wiaesksmicgikqcm:
            $eqgoocgaqwqcimie = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}\137\x6d\x61\x6e\x61\147\145\x5f\145\144\x69\164\137\x66\x69\145\x6c\x64\137\x76\141\x6c\x75\x65"), $eqgoocgaqwqcimie, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus, $mksyucucyswaukig);
            goto mcucegiogmuyogki;
            qweyymyuuqwcmkqg:
            wwcwmkowgooocaem:
            goto guqmgiqaaowaauyo;
            iokemmkgmcaksiqu:
            $eqgoocgaqwqcimie = array_fill(0, $eqgoocgaqwqcimie->count(), 0);
            goto okagauksoqkoqygi;
            iquugwoswgkoiieg:
            gkkwmqoacciwomqs:
            goto xogaycsaesgqeqig;
            gwkawguwsamuomuo:
            $wkkcmkuiigsukyik = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}\137\x6d\x61\x6e\141\x67\145\x5f\145\144\151\164\x5f\146\151\x65\x6c\x64\x5f\163\x68\157\x77"), true, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus, $mksyucucyswaukig);
            goto ucasigqmoiwaimkk;
            eciksmgaqikwegwq:
            $aiowsaccomcoikus->mkksewyosgeumwsa(MetaBox::cwiuiiakukcsaakw($meywaqqsugaoeyys->kumuygiiqswoyasy()));
            goto kieyoaoawqacqamy;
            okagauksoqkoqygi:
            ygskksomysgaokek:
            goto eciksmgaqikwegwq;
            ocmagamuyawyiyka:
            if (!$aiowsaccomcoikus) {
                goto oycuaqewsskgkqci;
            }
            goto amqgiisymksuuuss;
            gqaimiooakyykccy:
            iuysqgmmgqiywssm:
            goto agemeseegiuuowgo;
            agemeseegiuuowgo:
            if (!$ueeagokqmgisgauy) {
                goto ggyoywwggggekycs;
            }
            goto goswwiomuackymqi;
            qesqgumuouyymcwa:
            akeoaicoieaiekcw:
            goto csyoimsqgwcmiwki;
            qckouamqueqiykqi:
            if (!($aiowsaccomcoikus instanceof File && is_numeric($eqgoocgaqwqcimie))) {
                goto aeaciamekuqyieys;
            }
            goto measoqewessauqma;
            camawumockccayaq:
            $aiowsaccomcoikus->msqsseeaasqysese($iswcokucwmiosiaq);
            goto uuisaeysawuagysg;
            oasisywuwssumsok:
            $eqgoocgaqwqcimie = $mksyucucyswaukig->{$aiowsaccomcoikus->mwikyscisascoeea()};
            goto iaoyeugekskmewgs;
            umemmgiwimkymaya:
            if ($aiowsaccomcoikus instanceof Checkbox) {
                goto wwcwmkowgooocaem;
            }
            goto omsmaougqkqigogw;
            sgiouaqukyycswqm:
            kskqquqsegiiogek:
            goto gwkawguwsamuomuo;
            gykuaukukosiocoy:
            if (!$iswcokucwmiosiaq) {
                goto weouocwmwicayyiy;
            }
            goto camawumockccayaq;
            xogaycsaesgqeqig:
            if ($this->oguuceugyqgsqewy()) {
                goto ugiqiewymimqecsu;
            }
            goto gsiaskgsukseumig;
            goswwiomuackymqi:
            $iswcokucwmiosiaq = ManipulateArray::get($ueeagokqmgisgauy, $aiowsaccomcoikus->mwikyscisascoeea());
            goto gykuaukukosiocoy;
            guqmgiqaaowaauyo:
            $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $aiowsaccomcoikus->mwikyscisascoeea()) == "\x31";
            goto mccimkgwkkamsime;
            imwiyqcekcykscui:
            if ($aiowsaccomcoikus instanceof Group) {
                goto becceuuwokgoaewy;
            }
            goto umemmgiwimkymaya;
            aqigiwmamkowomiw:
            oycuaqewsskgkqci:
            goto qesqgumuouyymcwa;
            iaoyeugekskmewgs:
            if (!$eqgoocgaqwqcimie instanceof Collection) {
                goto ygskksomysgaokek;
            }
            goto iokemmkgmcaksiqu;
            mmmqqoemusicwgqg:
            goto kucqcgeesiccuuia;
            goto iquugwoswgkoiieg;
            auaigccmwqwsqsku:
            aeaciamekuqyieys:
            goto wiaesksmicgikqcm;
            syiyemqigyugagks:
            goto iuysqgmmgqiywssm;
            goto woqkgwmkmqsuceuy;
            wowmysuygugawmmu:
            ManipulateArray::unset($ikgwqyuyckaewsow, $uusmaiomayssaecw);
            goto mmmqqoemusicwgqg;
            gsiaskgsukseumig:
            $eqgoocgaqwqcimie = ManipulateArray::get($aaeyeciuoqooykka, $aiowsaccomcoikus->mwikyscisascoeea());
            goto syiyemqigyugagks;
            qowcwmsiyscackaa:
            kucqcgeesiccuuia:
            goto aqigiwmamkowomiw;
            usgcoawgqswoeiec:
            $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie);
            goto qowcwmsiyscackaa;
            mccimkgwkkamsime:
            qgkiguggkyiycwow:
            goto ucaoyoamaycsiacq;
            amqgiisymksuuuss:
            if ($this->oguuceugyqgsqewy()) {
                goto kskqquqsegiiogek;
            }
            goto iwgmywqocewwgoeo;
            csyoimsqgwcmiwki:
        }
        goto weggeeowykuqooyg;
        ggqwcqssoauckuic:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto ggwcauaeuagekeyo;
        ggwcauaeuagekeyo:
        $ikgwqyuyckaewsow = $meywaqqsugaoeyys->ugmceccgwaaaigiy();
        goto mmkoqmccusoeaoyi;
        gyeayeuuyiemuwuq:
        $aaeyeciuoqooykka = json_decode(wp_unslash($aaeyeciuoqooykka), true);
        goto kyggwyywiycksgqq;
        aymmymequcisekie:
        if (!$aaeyeciuoqooykka) {
            goto uuuceqkseqkqawko;
        }
        goto gyeayeuuyiemuwuq;
        weggeeowykuqooyg:
        yksamaucqkqsawkk:
        goto cqkuuyouqoqyguus;
        cqkuuyouqoqyguus:
        MetaBox::iuaucuookgoqiiio($ikgwqyuyckaewsow, ["\x65\x63\x68\x6f" => true, "\x63\154\141\x73\163\145\x73" => "\157\x72\x6d\55\145\144\x69\x74\55\146\x6f\x72\x6d"]);
        goto ssmgmiuqoeiuacsa;
        ssmgmiuqoeiuacsa:
    }
    
    public function oguuceugyqgsqewy() : ?bool
    {
        return $this->editing;
    }
    public function mycsqqgwwigyiewk()
    {
        goto ueaiskyiqcquiika;
        ymwyooosikgokiaa:
        $oammesyieqmwuwyi = [];
        goto qaiuogoowcoimwee;
        eqemcocqsyasqycq:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto ucecweoaoyeoyuue;
        osqgywagokmsicqe:
        $cwoayyawiauoeokk = '';
        goto qccmuwiwykuegoga;
        kaiqsuaywyuckuoo:
        $myyqiummwqiokocc = __("\125\160\144\141\x74\x65", PR__CMN__FOUNDATION);
        goto yuoamgkigcwaooqu;
        koemwyegoqwiikom:
        $myyqiummwqiokocc = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\163\143\x72\x65\x65\156\x5f\163\x75\142\x6d\151\x74\x5f\154\141\142\x65\154"), $myyqiummwqiokocc, $mksyucucyswaukig, $meywaqqsugaoeyys, $this->oguuceugyqgsqewy());
        goto qycsooiomiugimqc;
        qccmuwiwykuegoga:
        $mksyucucyswaukig = $this->imgymusqgccqsqqq();
        goto csucwwqcsaymyiuk;
        ucecweoaoyeoyuue:
        $myyqiummwqiokocc = __("\101\x64\x64", PR__CMN__FOUNDATION);
        goto cqugssuesycomqwa;
        uscissuaiyuiukea:
        gwoacimkeyymqccq:
        goto kuyqusuycscumuek;
        cqugssuesycomqwa:
        if (!$this->oguuceugyqgsqewy()) {
            goto wiqigqgiegmacgsw;
        }
        goto kaiqsuaywyuckuoo;
        cycwgukowsksmkyc:
        $cwoayyawiauoeokk = $meywaqqsugaoeyys->rkmkouiquumiecqy($iwywmkygwewiamwm);
        goto siuyaemoiiqyoggo;
        siuyaemoiiqyoggo:
        koggssokukoukkay:
        goto koemwyegoqwiikom;
        iiuuwuwcwamqegey:
        if (!(is_object($mksyucucyswaukig) && property_exists($mksyucucyswaukig, $ceiwsaacewygcsqg))) {
            goto gwoacimkeyymqccq;
        }
        goto qmgueimkwqmsakis;
        ooqmaweuqmcmwsuk:
        $kqokimuosyuyyucg = $mksyucucyswaukig->{$ceiwsaacewygcsqg};
        goto uscissuaiyuiukea;
        qaiuogoowcoimwee:
        $kqokimuosyuyyucg = 0;
        goto osqgywagokmsicqe;
        kuyqusuycscumuek:
        if (!($iwywmkygwewiamwm = $meywaqqsugaoeyys->cgccmsewskigcuig($kqokimuosyuyyucg))) {
            goto koggssokukoukkay;
        }
        goto cycwgukowsksmkyc;
        qmgueimkwqmsakis:
        $oammesyieqmwuwyi = $meywaqqsugaoeyys->eukyqwmmeyakcyoo($mksyucucyswaukig, $meywaqqsugaoeyys->mgeouagciaesieae());
        goto ooqmaweuqmcmwsuk;
        csucwwqcsaymyiuk:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto iiuuwuwcwamqegey;
        yuoamgkigcwaooqu:
        wiqigqgiegmacgsw:
        goto ymwyooosikgokiaa;
        qycsooiomiugimqc:
        echo $this->iuygowkemiiwqmiw("\x73\x75\x62\155\151\x74\137\155\145\164\141\x62\157\170", ["\155\157\x64\145\154" => $meywaqqsugaoeyys, "\151\164\145\155\163" => $oammesyieqmwuwyi, "\x6f\x62\152\145\x63\164" => $mksyucucyswaukig, "\144\x65\x6c\145\164\x69\x6f\x6e" => $cwoayyawiauoeokk, "\163\x75\142\x6d\x69\x74\x5f\154\x61\142\145\x6c" => $myyqiummwqiokocc, "\151\x73\x5f\x65\144\x69\x74\151\156\x67" => $this->oguuceugyqgsqewy(), "\x68\x6f\157\153\137\x70\162\x65\146\x69\170" => $this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\163\x63\x72\x65\145\x6e\137\163\165\142\155\x69\164\x5f\x6d\145\x74\x61\137\x62\157\170")]);
        goto qioswooukgoowsuc;
        ueaiskyiqcquiika:
        $ymqmyyeuycgmigyo = $this->oyeskqayoscwciem()->aakmagwggmkoiiyu();
        goto eqemcocqsyasqycq;
        qioswooukgoowsuc:
    }
}
