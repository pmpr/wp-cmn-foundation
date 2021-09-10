<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
    const COOKIE_STORE = "\x6f\162\155\55\146\x69\145\154\x64\163\55\x73\x74\157\x72\145";
    const COOKIE_ERRORS = "\157\162\x6d\x2d\146\x69\145\154\144\x73\55\x65\162\x72\157\162\x73";
    
    protected $message = false;
    
    protected bool $editing = false;
    public function amsuqecgqokqqaue()
    {
        goto ekoqieigyoeyauqa;
        ckwmkquuyyugigom:
        $igscmsiuisqaqwkk = $meywaqqsugaoeyys->yyykkcyiksewsoqy($aokagokqyuysuksm);
        goto cumeycwmuuqawwyu;
        uyeyscsaigimsqwq:
        sgocecweikecwwgq:
        goto mwieyyqamgwicgco;
        wswikooyuaaouqgk:
        yksywwikmeksikqc:
        goto awwaiioyywmokwsm;
        ywqakqkmmcoceqka:
        masakmomqmeocqqg:
        goto kwsqgqmwyyeykgum;
        eekaiaeqewiqkkgm:
        $wamcomkuwysqgwgk = __("\45\163\x20\143\x6f\x75\x6c\x64\x20\156\157\164\40\142\x65\40\141\x64\144\145\x64\56", PR__CMN__FOUNDATION);
        goto kceuusiekagyeoys;
        mwieyyqamgwicgco:
        $wamcomkuwysqgwgk = __("\x25\163\40\x63\157\x75\154\x64\x20\x6e\x6f\x74\x20\142\x65\40\165\160\144\141\x74\x65\x64\x2e", PR__CMN__FOUNDATION);
        goto wkiymcoqqiigqaaw;
        casgoamcqkekgeeo:
        $wamcomkuwysqgwgk = __("\45\x73\40\x75\x70\144\141\164\x65\x64\x20\x73\165\143\143\145\163\x73\146\165\154\154\171\x2e", PR__CMN__FOUNDATION);
        goto yseyyukqaowwouua;
        oqwwacmigasucsoc:
        suqckoccuyeeymww:
        goto egkeqqgakieyimuq;
        yqicwmekwuoywyus:
        if ($sogksuscggsicmac[self::SUCCESS]) {
            goto iwkckkeimmeoquyq;
        }
        goto gkoaeuekqockuoiq;
        qksckewucmosemuo:
        $ueeagokqmgisgauy = ManipulateArray::get($sogksuscggsicmac, "\145\x72\x72\x6f\162\x73", []);
        goto kmooekeyemqgucci;
        iqsgossweywksoia:
        goto ssagcgqaucssyego;
        goto awaqksikyomsuaeo;
        igwkcikeyoowosoi:
        wp_die(__("\x53\157\162\x72\171\x2c\40\x79\157\x75\40\141\162\145\40\156\x6f\164\40\x61\x6c\154\x6f\167\x65\x64\40\164\157\40\x65\x64\x69\164\40\x69\x74\x65\155\x73\40\157\146\40\x74\150\x69\x73\40\164\x79\160\145\56", PR__CMN__FOUNDATION));
        goto iqsgossweywksoia;
        qmokwkocmcyeyesc:
        Notice::eumukgqciqgksuiq($eumukgqciqgksuiq, "\x6f\162\155\x2d\156\157\164\151\x63\x65");
        goto mosuacsuaasssciu;
        skwusmoyomgqkimm:
        iwkckkeimmeoquyq:
        goto usyckeewsgwaysam;
        qcgyggiaowuqswuw:
        $iueymcwwscwqkiyq = self::SUCCESS;
        goto sooecucuakgkuyis;
        kwsqgqmwyyeykgum:
        $igscmsiuisqaqwkk = '';
        goto emauuoieewwoeyqq;
        owisckseoogsugqq:
        exit;
        goto ookcgumoacskyymy;
        mosuacsuaasssciu:
        setcookie(self::COOKIE_STORE, wp_json_encode($icwicymcioeyeyek));
        goto qksckewucmosemuo;
        cuseccewekgcgkyg:
        mqgeseysuwcaqwiy:
        goto kgysyqkoqgwmoscq;
        kakkuyeccaacewyo:
        $aokagokqyuysuksm = ManipulateArray::get($mksyucucyswaukig, $meywaqqsugaoeyys->kumuygiiqswoyasy());
        goto cysgqimowcqoqqsc;
        ysweqawmawicakeo:
        wp_safe_redirect($igscmsiuisqaqwkk);
        goto owisckseoogsugqq;
        emauuoieewwoeyqq:
        if ($aokagokqyuysuksm) {
            goto suqckoccuyeeymww;
        }
        goto koukiyqaccegmquc;
        sooecucuakgkuyis:
        Notice::kigowwqauiumummw(sprintf($wamcomkuwysqgwgk, $this->oyeskqayoscwciem()->giiayuqckuiecosm()), "\x6f\x72\155\55\156\x6f\164\x69\143\x65");
        goto ywqakqkmmcoceqka;
        jsmisuccwyukksgc:
        ousmyagwsiooumos:
        goto kwmiwaecqcgiaqye;
        ismeikacqqyqcmqe:
        goto yiceawuuiusakwiq;
        goto qsokkkyoackoycie;
        cuommomwmsackoqc:
        ManipulateArray::unset($aqmwamyiwgeeymqa, "\x6f\x72\x6d\55\x73\x61\166\x65");
        goto ggeoqeowscwkeumy;
        cmmusgkieoqyymgs:
        yqcusaeysomccaok:
        goto mkgmaguyswskyioa;
        ekakkiuuquqkccse:
        goto giugwaeuwaomossq;
        goto oqwwacmigasucsoc;
        qyeswawykmasuqye:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto uwaimsisescsgyqk;
        mkgmaguyswskyioa:
        goto masakmomqmeocqqg;
        goto skwusmoyomgqkimm;
        cakuguiciaiaeukg:
        $igscmsiuisqaqwkk = $meywaqqsugaoeyys->uesweuocqoywoyms($aokagokqyuysuksm);
        goto wswikooyuaaouqgk;
        esqwswmoegiqcckg:
        $eumukgqciqgksuiq = sprintf($wamcomkuwysqgwgk, $this->oyeskqayoscwciem()->giiayuqckuiecosm());
        goto qmokwkocmcyeyesc;
        awaqksikyomsuaeo:
        sycougcyeqmeiagk:
        goto cuommomwmsackoqc;
        ukwoswyyogmsygqg:
        $icwicymcioeyeyek[$aokagokqyuysuksm] = $aokagokqyuysuksm;
        goto jsmisuccwyukksgc;
        skuuyysooocugyww:
        setcookie(self::COOKIE_ERRORS, wp_json_encode($ueeagokqmgisgauy));
        goto cmmusgkieoqyymgs;
        gsqcoqqsioiyoykq:
        if ($igscmsiuisqaqwkk) {
            goto acgqaeakoyasgkku;
        }
        goto goaowamiyyamueiw;
        gkoaeuekqockuoiq:
        if ($aokagokqyuysuksm) {
            goto sgocecweikecwwgq;
        }
        goto eekaiaeqewiqkkgm;
        qsokkkyoackoycie:
        qeuyekusasqmcqms:
        goto casgoamcqkekgeeo;
        iaomqomgiwiegoca:
        acgqaeakoyasgkku:
        goto ysweqawmawicakeo;
        ookcgumoacskyymy:
        ssagcgqaucssyego:
        goto cuseccewekgcgkyg;
        uwaimsisescsgyqk:
        $iueymcwwscwqkiyq = self::FAILED;
        goto uqcsksaywyqeumig;
        kmooekeyemqgucci:
        if (!$ueeagokqmgisgauy) {
            goto yqcusaeysomccaok;
        }
        goto skuuyysooocugyww;
        uaicwcqwauosmsqm:
        giugwaeuwaomossq:
        goto gsqcoqqsioiyoykq;
        kceuusiekagyeoys:
        goto qwisiamkmkkwucyo;
        goto uyeyscsaigimsqwq;
        ekoqieigyoeyauqa:
        setcookie(self::COOKIE_STORE, '');
        goto cuwcsamuuqyuyqsu;
        wkiymcoqqiigqaaw:
        qwisiamkmkkwucyo:
        goto esqwswmoegiqcckg;
        usyckeewsgwaysam:
        if ($aokagokqyuysuksm) {
            goto qeuyekusasqmcqms;
        }
        goto gicuuwuuuwumyooa;
        mimacwyuueomgwwy:
        if (!isset($_POST["\x6f\x72\x6d\55\x73\x61\166\x65"])) {
            goto mqgeseysuwcaqwiy;
        }
        goto ksckqkmwiqggykke;
        yggmaskeguaqkusc:
        if (!($aokagokqyuysuksm = (int) ManipulateServer::get($ceiwsaacewygcsqg))) {
            goto ousmyagwsiooumos;
        }
        goto ukwoswyyogmsygqg;
        koukiyqaccegmquc:
        $igscmsiuisqaqwkk = $meywaqqsugaoeyys->acsiseaeysswwqkw();
        goto ekakkiuuquqkccse;
        egkeqqgakieyimuq:
        if (!($iueymcwwscwqkiyq == self::SUCCESS)) {
            goto yksywwikmeksikqc;
        }
        goto cakuguiciaiaeukg;
        cysgqimowcqoqqsc:
        $wamcomkuwysqgwgk = __("\45\163\40\141\x64\x64\145\144\x20\x73\x75\143\x63\x65\x73\x73\x66\165\x6c\154\x79\x2e", PR__CMN__FOUNDATION);
        goto ismeikacqqyqcmqe;
        uqcsksaywyqeumig:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto yggmaskeguaqkusc;
        ksckqkmwiqggykke:
        if ($this->oyeskqayoscwciem()->uwaascqoguwkwiaw()) {
            goto sycougcyeqmeiagk;
        }
        goto igwkcikeyoowosoi;
        goaowamiyyamueiw:
        $igscmsiuisqaqwkk = $meywaqqsugaoeyys->comogmawyoiquwis();
        goto iaomqomgiwiegoca;
        kwmiwaecqcgiaqye:
        $sogksuscggsicmac = $meywaqqsugaoeyys->gscuuyuyauokoyuo($icwicymcioeyeyek);
        goto yqicwmekwuoywyus;
        cumeycwmuuqawwyu:
        yoqsigmoyaaceqky:
        goto uaicwcqwauosmsqm;
        yseyyukqaowwouua:
        yiceawuuiusakwiq:
        goto qcgyggiaowuqswuw;
        awwaiioyywmokwsm:
        if ($igscmsiuisqaqwkk) {
            goto yoqsigmoyaaceqky;
        }
        goto ckwmkquuyyugigom;
        ggeoqeowscwkeumy:
        $icwicymcioeyeyek = ManipulateServer::ayueggmoqeeukqmq();
        goto qyeswawykmasuqye;
        cuwcsamuuqyuyqsu:
        setcookie(self::COOKIE_ERRORS, '');
        goto mimacwyuueomgwwy;
        gicuuwuuuwumyooa:
        $mksyucucyswaukig = ManipulateArray::get($sogksuscggsicmac, "\157\x62\x6a\x65\x63\164");
        goto kakkuyeccaacewyo;
        kgysyqkoqgwmoscq:
    }
    public function render()
    {
        goto acesyuieuuqwgkwm;
        wwswmaewcaisauei:
        echo $this->iuygowkemiiwqmiw("\145\x64\151\164", ["\x69\144" => $this->mwikyscisascoeea(), "\x74\151\164\154\145" => $meqocwsecsywiiqs, "\156\x61\x6d\x65" => $this->oyeskqayoscwciem()->aakmagwggmkoiiyu(), "\157\142\152\145\143\x74" => $this->imgymusqgccqsqqq(), "\x63\x6f\x6c\165\x6d\x6e\163" => $this->yoqiwysegascakim(), "\141\x64\x64\137\165\x72\154" => $qksucogmsqmawmwi, "\155\x65\x73\x73\x61\x67\x65" => $this->sagusgigmkeysock(), "\x61\144\x64\137\x75\x72\154\x5f\x74\x69\164\154\145" => $this->oyeskqayoscwciem()->uikgwcuascgeissw("\141\x64\x64\x5f\x6e\x65\167\x5f\x69\164\145\155"), "\x70\162\151\155\141\162\171\137\x6b\145\171" => $this->mgogaykgkoogasim()->kumuygiiqswoyasy()]);
        goto wsemeeocquawyauo;
        gcskyqewysqaceeg:
        $qksucogmsqmawmwi = $this->mgogaykgkoogasim()->acsiseaeysswwqkw();
        goto kkewoqqowugagwoy;
        ugswokwmkumcmigc:
        if ($this->oguuceugyqgsqewy()) {
            goto makomwwyomweyamm;
        }
        goto gwiaimosqoiquwkc;
        cigesysuauaiccms:
        makomwwyomweyamm:
        goto qumkwsqqocooyuoq;
        acesyuieuuqwgkwm:
        parent::render();
        goto asaowisseacciyia;
        kkewoqqowugagwoy:
        oqwcmgwimeisusoe:
        goto wwswmaewcaisauei;
        qumkwsqqocooyuoq:
        $meqocwsecsywiiqs = $this->mmqossqsksemasay("\145\x64\151\164\x5f\151\164\x65\x6d");
        goto gcskyqewysqaceeg;
        asaowisseacciyia:
        $this->oemueqoooyaieeum();
        goto qiaaqkymeuuueoqk;
        qiaaqkymeuuueoqk:
        $qksucogmsqmawmwi = null;
        goto ugswokwmkumcmigc;
        gwiaimosqoiquwkc:
        $meqocwsecsywiiqs = $this->mmqossqsksemasay("\x61\x64\x64\x5f\x6e\x65\x77\x5f\151\x74\x65\155");
        goto owgakkqgckqcegoi;
        owgakkqgckqcegoi:
        goto oqwcmgwimeisusoe;
        goto cigesysuauaiccms;
        wsemeeocquawyauo:
    }
    public function oemueqoooyaieeum()
    {
        goto wmaeicoyyciuaiuy;
        isqwwmikecauwyuc:
        $ymqmyyeuycgmigyo = $meywaqqsugaoeyys->miwqiiqeegeqcwis();
        goto oiiqqgyqmggyiums;
        aaogeemgkogagkai:
        ocgkwqqmgasuoies:
        goto qqmmycmsoqegcqqw;
        kwoyiysciqumswcy:
        DecoratorAsset::imsomwwswyoquoqk("\152\161\x75\x65\162\171\55\x74\x6f\165\x63\150\55\160\x75\156\x63\150");
        goto aaogeemgkogagkai;
        ukogwqiuuuakkawy:
        $this->cqscqicucmeamkyq("\x61\x64\x64\137\x6d\145\164\x61\137\142\157\x78\145\163", $ymqmyyeuycgmigyo, $this->imgymusqgccqsqqq())->cqscqicucmeamkyq("\141\144\144\x5f\155\145\x74\141\x5f\142\x6f\170\145\163\x5f{$ymqmyyeuycgmigyo}", $this->imgymusqgccqsqqq())->cqscqicucmeamkyq("\144\x6f\137\155\145\164\141\137\x62\x6f\170\145\163", $ymqmyyeuycgmigyo, "\x6e\157\162\155\x61\x6c", $this->imgymusqgccqsqqq())->cqscqicucmeamkyq("\144\157\x5f\x6d\145\x74\x61\137\x62\157\170\145\163", $ymqmyyeuycgmigyo, "\141\144\x76\x61\x6e\x63\x65\144", $this->imgymusqgccqsqqq())->cqscqicucmeamkyq("\x64\x6f\137\x6d\x65\164\141\137\x62\157\170\x65\x73", $ymqmyyeuycgmigyo, "\x73\x69\144\x65", $this->imgymusqgccqsqqq());
        goto gicmaqmuscawegie;
        magymcqykamwqigw:
        
        ManipulateTemplate::sikqggwmmykuiymy(["\143\141\154\x6c\x62\141\143\153" => [$this, "\151\x75\141\165\x63\x75\x6f\x6f\153\x67\x6f\x71\x69\x69\x69\157"], "\163\x63\162\145\145\156" => $ymqmyyeuycgmigyo, "\143\x6f\x6e\164\145\x78\164" => "\x6e\x6f\162\x6d\x61\154", self::ID => "\x6d\141\151\156\x5f\146\x69\x65\154\144\163", self::ICON => $meywaqqsugaoeyys->oyeskqayoscwciem()->qyyikeaseoskcacm(), self::TITLE => $this->oyeskqayoscwciem()->uikgwcuascgeissw($this->oguuceugyqgsqewy() ? "\x65\x64\151\164\137\x69\x74\x65\155" : "\141\x64\144\137\x6e\145\167\137\x69\164\x65\155"), self::PRIORITY => "\143\157\162\145"]);
        goto ukogwqiuuuakkawy;
        ooysmgyeqoiesgqm:
        if (!wp_is_mobile()) {
            goto ocgkwqqmgasuoies;
        }
        goto kwoyiysciqumswcy;
        oiiqqgyqmggyiums:
        
        ManipulateTemplate::sikqggwmmykuiymy(["\143\x61\154\x6c\x62\x61\x63\153" => [$this, "\x6d\x79\x63\x73\161\x71\147\167\167\x69\x67\171\151\145\167\x6b"], "\x73\143\x72\145\145\x6e" => $ymqmyyeuycgmigyo, "\143\157\156\x74\x65\x78\164" => "\x73\x69\x64\145", self::ID => "\163\165\x62\x6d\x69\x74\x64\151\x76", self::ICON => IconFontawesomeInterface::ICON_FLOPPY_DISK, self::TITLE => __("\123\141\x76\145\x20\x43\150\x61\x6e\x67\145\x73", PR__CMN__FOUNDATION), self::PRIORITY => "\x63\157\x72\x65"]);
        goto magymcqykamwqigw;
        wmaeicoyyciuaiuy:
        DecoratorAsset::imsomwwswyoquoqk("\x70\157\163\x74");
        goto ooysmgyeqoiesgqm;
        qqmmycmsoqegcqqw:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto isqwwmikecauwyuc;
        gicmaqmuscawegie:
    }
    
    public function sagusgigmkeysock()
    {
        return $this->message;
    }
    public function mqyuagguukgcoeka()
    {
        goto ucksaiwquekagyqe;
        jkgouewqysmscmqs:
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        goto sgiuwkisugmewmcs;
        wkaoyycsoeoyqcae:
        gygqgauaceiuawkq:
        goto cwugokqsmiomgmqg;
        asqqqqakiagymemk:
        if ($this->mwikyscisascoeea()) {
            goto ayamomygygmgwgkg;
        }
        goto jkgouewqysmscmqs;
        yimeskeioamqmuwg:
        wp_die(__("\x53\157\x72\x72\171\54\40\171\157\165\x20\x61\162\x65\40\x6e\157\x74\x20\141\x6c\x6c\x6f\167\x65\144\40\x74\157\40\x65\x64\x69\164\x20\x74\150\151\163\40\x69\x74\145\x6d\56", PR__CMN__FOUNDATION));
        goto yeemsgmumygmumqw;
        sgiuwkisugmewmcs:
        goto gygqgauaceiuawkq;
        goto kceeuicccqscwgsu;
        iquecygaakmiomeg:
        $this->editing = true;
        goto eacysqsegwcqawsa;
        eacysqsegwcqawsa:
        
        if (DecoratorUser::scmcyesmmikkucie("\x65\144\x69\164\x5f\151\x74\145\155", $this->mwikyscisascoeea())) {
            goto oymyqcoekqyuiguq;
        }
        goto yimeskeioamqmuwg;
        yeemsgmumygmumqw:
        oymyqcoekqyuiguq:
        goto wkaoyycsoeoyqcae;
        ucksaiwquekagyqe:
        parent::mqyuagguukgcoeka();
        goto iyeswoaqkaeggiiy;
        iyeswoaqkaeggiiy:
        $this->amsuqecgqokqqaue();
        goto asqqqqakiagymemk;
        kceeuicccqscwgsu:
        ayamomygygmgwgkg:
        goto iquecygaakmiomeg;
        cwugokqsmiomgmqg:
    }
    public function iuaucuookgoqiiio()
    {
        goto ggqwcqssoauckuic;
        aqmiewawgseaqeqk:
        ekoegocuqoycoeyq:
        goto gaceikykesgywssm;
        aymmymequcisekie:
        if (!$aaeyeciuoqooykka) {
            goto uuuceqkseqkqawko;
        }
        goto gyeayeuuyiemuwuq;
        weggeeowykuqooyg:
        yksamaucqkqsawkk:
        goto cqkuuyouqoqyguus;
        ggwcauaeuagekeyo:
        $ikgwqyuyckaewsow = $meywaqqsugaoeyys->ugmceccgwaaaigiy();
        goto mmkoqmccusoeaoyi;
        kyggwyywiycksgqq:
        uuuceqkseqkqawko:
        goto sugumgeqcwgekcqs;
        gaceikykesgywssm:
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) {
            goto ocmagamuyawyiyka;
            imwiyqcekcykscui:
            if ($aiowsaccomcoikus instanceof Group) {
                goto becceuuwokgoaewy;
            }
            goto umemmgiwimkymaya;
            camawumockccayaq:
            $aiowsaccomcoikus->msqsseeaasqysese($iswcokucwmiosiaq);
            goto uuisaeysawuagysg;
            qweyymyuuqwcmkqg:
            wwcwmkowgooocaem:
            goto guqmgiqaaowaauyo;
            uuisaeysawuagysg:
            weouocwmwicayyiy:
            goto ggqeakyaggiuegek;
            sgiouaqukyycswqm:
            kskqquqsegiiogek:
            goto gwkawguwsamuomuo;
            syoeqaqkseguwmgy:
            goto mocaoayiouggauiy;
            goto sgiouaqukyycswqm;
            aqigiwmamkowomiw:
            oycuaqewsskgkqci:
            goto qesqgumuouyymcwa;
            iaoyeugekskmewgs:
            if (!$eqgoocgaqwqcimie instanceof Collection) {
                goto ygskksomysgaokek;
            }
            goto iokemmkgmcaksiqu;
            umemmgiwimkymaya:
            if ($aiowsaccomcoikus instanceof Checkbox) {
                goto wwcwmkowgooocaem;
            }
            goto omsmaougqkqigogw;
            gsiaskgsukseumig:
            $eqgoocgaqwqcimie = ManipulateArray::get($aaeyeciuoqooykka, $aiowsaccomcoikus->mwikyscisascoeea());
            goto syiyemqigyugagks;
            xogaycsaesgqeqig:
            if ($this->oguuceugyqgsqewy()) {
                goto ugiqiewymimqecsu;
            }
            goto gsiaskgsukseumig;
            omsmaougqkqigogw:
            $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $aiowsaccomcoikus->mwikyscisascoeea());
            goto geasgywiogoeamek;
            ucaoyoamaycsiacq:
            goto wyugqoowakyicyic;
            goto iuyagqakcieasiua;
            ucasigqmoiwaimkk:
            mocaoayiouggauiy:
            goto uugwmywmaqomeksa;
            kieyoaoawqacqamy:
            wyugqoowakyicyic:
            goto qckouamqueqiykqi;
            okagauksoqkoqygi:
            ygskksomysgaokek:
            goto eciksmgaqikwegwq;
            gqaimiooakyykccy:
            iuysqgmmgqiywssm:
            goto agemeseegiuuowgo;
            measoqewessauqma:
            $eqgoocgaqwqcimie = ManipulateAttachment::mgaeeqsgeoukeokc($eqgoocgaqwqcimie);
            goto auaigccmwqwsqsku;
            iokemmkgmcaksiqu:
            $eqgoocgaqwqcimie = array_fill(0, $eqgoocgaqwqcimie->count(), 0);
            goto okagauksoqkoqygi;
            mcucegiogmuyogki:
            $eqgoocgaqwqcimie = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}\137\155\x61\x6e\141\x67\145\137\145\144\151\164\137{$aiowsaccomcoikus->aakmagwggmkoiiyu()}\137\x76\x61\x6c\165\145"), $eqgoocgaqwqcimie, $aiowsaccomcoikus, $mksyucucyswaukig);
            goto gqaimiooakyykccy;
            geasgywiogoeamek:
            goto qgkiguggkyiycwow;
            goto qweyymyuuqwcmkqg;
            iquugwoswgkoiieg:
            gkkwmqoacciwomqs:
            goto xogaycsaesgqeqig;
            guqmgiqaaowaauyo:
            $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $aiowsaccomcoikus->mwikyscisascoeea()) == "\61";
            goto mccimkgwkkamsime;
            wowmysuygugawmmu:
            ManipulateArray::unset($ikgwqyuyckaewsow, $uusmaiomayssaecw);
            goto mmmqqoemusicwgqg;
            wiaesksmicgikqcm:
            $eqgoocgaqwqcimie = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}\x5f\x6d\x61\156\x61\147\145\x5f\x65\144\151\x74\137\x66\x69\x65\154\144\137\x76\141\x6c\165\x65"), $eqgoocgaqwqcimie, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus, $mksyucucyswaukig);
            goto mcucegiogmuyogki;
            eciksmgaqikwegwq:
            $aiowsaccomcoikus->mkksewyosgeumwsa(MetaBox::cwiuiiakukcsaakw($meywaqqsugaoeyys->kumuygiiqswoyasy()));
            goto kieyoaoawqacqamy;
            woqkgwmkmqsuceuy:
            ugiqiewymimqecsu:
            goto imwiyqcekcykscui;
            auaigccmwqwsqsku:
            aeaciamekuqyieys:
            goto wiaesksmicgikqcm;
            qckouamqueqiykqi:
            if (!($aiowsaccomcoikus instanceof File && is_numeric($eqgoocgaqwqcimie))) {
                goto aeaciamekuqyieys;
            }
            goto measoqewessauqma;
            ggqeakyaggiuegek:
            ggyoywwggggekycs:
            goto usgcoawgqswoeiec;
            agemeseegiuuowgo:
            if (!$ueeagokqmgisgauy) {
                goto ggyoywwggggekycs;
            }
            goto goswwiomuackymqi;
            amqgiisymksuuuss:
            if ($this->oguuceugyqgsqewy()) {
                goto kskqquqsegiiogek;
            }
            goto iwgmywqocewwgoeo;
            qowcwmsiyscackaa:
            kucqcgeesiccuuia:
            goto aqigiwmamkowomiw;
            mmmqqoemusicwgqg:
            goto kucqcgeesiccuuia;
            goto iquugwoswgkoiieg;
            uugwmywmaqomeksa:
            if ($wkkcmkuiigsukyik) {
                goto gkkwmqoacciwomqs;
            }
            goto wowmysuygugawmmu;
            qesqgumuouyymcwa:
            akeoaicoieaiekcw:
            goto csyoimsqgwcmiwki;
            usgcoawgqswoeiec:
            $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie);
            goto qowcwmsiyscackaa;
            mccimkgwkkamsime:
            qgkiguggkyiycwow:
            goto ucaoyoamaycsiacq;
            gykuaukukosiocoy:
            if (!$iswcokucwmiosiaq) {
                goto weouocwmwicayyiy;
            }
            goto camawumockccayaq;
            syiyemqigyugagks:
            goto iuysqgmmgqiywssm;
            goto woqkgwmkmqsuceuy;
            goswwiomuackymqi:
            $iswcokucwmiosiaq = ManipulateArray::get($ueeagokqmgisgauy, $aiowsaccomcoikus->mwikyscisascoeea());
            goto gykuaukukosiocoy;
            oasisywuwssumsok:
            $eqgoocgaqwqcimie = $mksyucucyswaukig->{$aiowsaccomcoikus->mwikyscisascoeea()};
            goto iaoyeugekskmewgs;
            iwgmywqocewwgoeo:
            $wkkcmkuiigsukyik = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}\x5f\155\141\156\x61\x67\145\137\141\144\144\x5f\x66\x69\145\154\144\137\163\x68\157\x77"), true, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus);
            goto syoeqaqkseguwmgy;
            iuyagqakcieasiua:
            becceuuwokgoaewy:
            goto oasisywuwssumsok;
            ocmagamuyawyiyka:
            if (!$aiowsaccomcoikus) {
                goto oycuaqewsskgkqci;
            }
            goto amqgiisymksuuuss;
            gwkawguwsamuomuo:
            $wkkcmkuiigsukyik = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}\137\155\141\x6e\x61\x67\x65\x5f\145\x64\x69\164\137\146\x69\x65\154\x64\137\163\150\x6f\167"), true, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus, $mksyucucyswaukig);
            goto ucasigqmoiwaimkk;
            csyoimsqgwcmiwki:
        }
        goto weggeeowykuqooyg;
        yyamycyesguwueuw:
        $ueeagokqmgisgauy = ManipulateServer::aukgyiaewiccooqw(self::COOKIE_ERRORS);
        goto aymmymequcisekie;
        waewaiuiogywqigu:
        $aaeyeciuoqooykka = ManipulateServer::aukgyiaewiccooqw(self::COOKIE_STORE);
        goto yyamycyesguwueuw;
        ggqwcqssoauckuic:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto ggwcauaeuagekeyo;
        mmkoqmccusoeaoyi:
        $mksyucucyswaukig = $this->imgymusqgccqsqqq();
        goto waewaiuiogywqigu;
        gyeayeuuyiemuwuq:
        $aaeyeciuoqooykka = json_decode(wp_unslash($aaeyeciuoqooykka), true);
        goto kyggwyywiycksgqq;
        imeaiksowuukikui:
        $ueeagokqmgisgauy = json_decode(wp_unslash($ueeagokqmgisgauy), true);
        goto aqmiewawgseaqeqk;
        sugumgeqcwgekcqs:
        if (!$ueeagokqmgisgauy) {
            goto ekoegocuqoycoeyq;
        }
        goto imeaiksowuukikui;
        cqkuuyouqoqyguus:
        MetaBox::iuaucuookgoqiiio($ikgwqyuyckaewsow, ["\145\143\150\157" => true, "\143\154\141\x73\x73\x65\163" => "\x6f\162\x6d\x2d\x65\x64\x69\x74\x2d\146\x6f\x72\x6d"]);
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
        iiuuwuwcwamqegey:
        if (!(is_object($mksyucucyswaukig) && property_exists($mksyucucyswaukig, $ceiwsaacewygcsqg))) {
            goto gwoacimkeyymqccq;
        }
        goto qmgueimkwqmsakis;
        qaiuogoowcoimwee:
        $kqokimuosyuyyucg = 0;
        goto osqgywagokmsicqe;
        qmgueimkwqmsakis:
        $oammesyieqmwuwyi = $meywaqqsugaoeyys->eukyqwmmeyakcyoo($mksyucucyswaukig, $meywaqqsugaoeyys->mgeouagciaesieae());
        goto ooqmaweuqmcmwsuk;
        kaiqsuaywyuckuoo:
        $myyqiummwqiokocc = __("\125\x70\144\141\x74\x65", PR__CMN__FOUNDATION);
        goto yuoamgkigcwaooqu;
        cycwgukowsksmkyc:
        $cwoayyawiauoeokk = $meywaqqsugaoeyys->rkmkouiquumiecqy($iwywmkygwewiamwm);
        goto siuyaemoiiqyoggo;
        yuoamgkigcwaooqu:
        wiqigqgiegmacgsw:
        goto ymwyooosikgokiaa;
        kuyqusuycscumuek:
        if (!($iwywmkygwewiamwm = $meywaqqsugaoeyys->cgccmsewskigcuig($kqokimuosyuyyucg))) {
            goto koggssokukoukkay;
        }
        goto cycwgukowsksmkyc;
        ucecweoaoyeoyuue:
        $myyqiummwqiokocc = __("\101\144\x64", PR__CMN__FOUNDATION);
        goto cqugssuesycomqwa;
        ooqmaweuqmcmwsuk:
        $kqokimuosyuyyucg = $mksyucucyswaukig->{$ceiwsaacewygcsqg};
        goto uscissuaiyuiukea;
        osqgywagokmsicqe:
        $cwoayyawiauoeokk = '';
        goto qccmuwiwykuegoga;
        koemwyegoqwiikom:
        $myyqiummwqiokocc = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\163\143\x72\x65\x65\x6e\137\163\x75\142\155\x69\164\x5f\154\141\x62\145\x6c"), $myyqiummwqiokocc, $mksyucucyswaukig, $meywaqqsugaoeyys, $this->oguuceugyqgsqewy());
        goto qycsooiomiugimqc;
        eqemcocqsyasqycq:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto ucecweoaoyeoyuue;
        ueaiskyiqcquiika:
        $ymqmyyeuycgmigyo = $this->oyeskqayoscwciem()->aakmagwggmkoiiyu();
        goto eqemcocqsyasqycq;
        ymwyooosikgokiaa:
        $oammesyieqmwuwyi = [];
        goto qaiuogoowcoimwee;
        csucwwqcsaymyiuk:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto iiuuwuwcwamqegey;
        siuyaemoiiqyoggo:
        koggssokukoukkay:
        goto koemwyegoqwiikom;
        uscissuaiyuiukea:
        gwoacimkeyymqccq:
        goto kuyqusuycscumuek;
        qycsooiomiugimqc:
        echo $this->iuygowkemiiwqmiw("\163\x75\142\x6d\151\164\x5f\155\145\164\141\142\x6f\170", ["\x6d\x6f\x64\x65\154" => $meywaqqsugaoeyys, "\151\x74\x65\x6d\x73" => $oammesyieqmwuwyi, "\x6f\142\x6a\145\x63\x74" => $mksyucucyswaukig, "\x64\x65\154\x65\164\x69\x6f\x6e" => $cwoayyawiauoeokk, "\163\165\142\155\151\164\137\154\x61\x62\x65\154" => $myyqiummwqiokocc, "\x69\163\x5f\x65\144\x69\164\x69\156\x67" => $this->oguuceugyqgsqewy(), "\x68\157\x6f\x6b\x5f\x70\162\145\x66\x69\x78" => $this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\x73\143\x72\x65\x65\156\x5f\163\165\x62\x6d\151\164\x5f\x6d\145\x74\x61\x5f\x62\x6f\x78")]);
        goto qioswooukgoowsuc;
        cqugssuesycomqwa:
        if (!$this->oguuceugyqgsqewy()) {
            goto wiqigqgiegmacgsw;
        }
        goto kaiqsuaywyuckuoo;
        qccmuwiwykuegoga:
        $mksyucucyswaukig = $this->imgymusqgccqsqqq();
        goto csucwwqcsaymyiuk;
        qioswooukgoowsuc:
    }
}
