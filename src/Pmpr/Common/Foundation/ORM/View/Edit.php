<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
    const COOKIE_STORE = "\157\x72\155\55\146\x69\x65\154\x64\163\x2d\x73\164\x6f\162\145";
    const COOKIE_ERRORS = "\157\x72\x6d\55\x66\151\x65\154\144\x73\x2d\x65\162\x72\157\x72\163";
    
    protected $message = false;
    
    protected bool $editing = false;
    public function amsuqecgqokqqaue()
    {
        goto ekoqieigyoeyauqa;
        awaqksikyomsuaeo:
        sycougcyeqmeiagk:
        goto cuommomwmsackoqc;
        uaicwcqwauosmsqm:
        giugwaeuwaomossq:
        goto gsqcoqqsioiyoykq;
        emauuoieewwoeyqq:
        if ($aokagokqyuysuksm) {
            goto suqckoccuyeeymww;
        }
        goto koukiyqaccegmquc;
        cuseccewekgcgkyg:
        mqgeseysuwcaqwiy:
        goto kgysyqkoqgwmoscq;
        kmooekeyemqgucci:
        if (!$ueeagokqmgisgauy) {
            goto yqcusaeysomccaok;
        }
        goto skuuyysooocugyww;
        iqsgossweywksoia:
        goto ssagcgqaucssyego;
        goto awaqksikyomsuaeo;
        mosuacsuaasssciu:
        setcookie(self::COOKIE_STORE, wp_json_encode($icwicymcioeyeyek));
        goto qksckewucmosemuo;
        yseyyukqaowwouua:
        yiceawuuiusakwiq:
        goto qcgyggiaowuqswuw;
        skwusmoyomgqkimm:
        iwkckkeimmeoquyq:
        goto usyckeewsgwaysam;
        qyeswawykmasuqye:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto uwaimsisescsgyqk;
        egkeqqgakieyimuq:
        if (!($iueymcwwscwqkiyq == self::SUCCESS)) {
            goto yksywwikmeksikqc;
        }
        goto cakuguiciaiaeukg;
        yggmaskeguaqkusc:
        if (!($aokagokqyuysuksm = (int) ManipulateServer::get($ceiwsaacewygcsqg))) {
            goto ousmyagwsiooumos;
        }
        goto ukwoswyyogmsygqg;
        cakuguiciaiaeukg:
        $igscmsiuisqaqwkk = $meywaqqsugaoeyys->uesweuocqoywoyms($aokagokqyuysuksm);
        goto wswikooyuaaouqgk;
        mwieyyqamgwicgco:
        $wamcomkuwysqgwgk = __("\45\163\40\143\x6f\x75\154\144\40\x6e\157\x74\x20\142\x65\40\165\160\x64\x61\x74\145\144\56", PR__CMN__FOUNDATION);
        goto wkiymcoqqiigqaaw;
        ksckqkmwiqggykke:
        if ($this->oyeskqayoscwciem()->uwaascqoguwkwiaw()) {
            goto sycougcyeqmeiagk;
        }
        goto igwkcikeyoowosoi;
        usyckeewsgwaysam:
        if ($aokagokqyuysuksm) {
            goto qeuyekusasqmcqms;
        }
        goto gicuuwuuuwumyooa;
        kakkuyeccaacewyo:
        $aokagokqyuysuksm = ManipulateArray::get($mksyucucyswaukig, $meywaqqsugaoeyys->kumuygiiqswoyasy());
        goto cysgqimowcqoqqsc;
        ookcgumoacskyymy:
        ssagcgqaucssyego:
        goto cuseccewekgcgkyg;
        ekakkiuuquqkccse:
        goto giugwaeuwaomossq;
        goto oqwwacmigasucsoc;
        ysweqawmawicakeo:
        wp_safe_redirect($igscmsiuisqaqwkk);
        goto owisckseoogsugqq;
        ywqakqkmmcoceqka:
        masakmomqmeocqqg:
        goto kwsqgqmwyyeykgum;
        cysgqimowcqoqqsc:
        $wamcomkuwysqgwgk = __("\x25\x73\x20\141\x64\144\145\144\x20\x73\x75\x63\143\145\x73\x73\146\x75\x6c\x6c\x79\x2e", PR__CMN__FOUNDATION);
        goto ismeikacqqyqcmqe;
        ggeoqeowscwkeumy:
        $icwicymcioeyeyek = ManipulateServer::ayueggmoqeeukqmq();
        goto qyeswawykmasuqye;
        uyeyscsaigimsqwq:
        sgocecweikecwwgq:
        goto mwieyyqamgwicgco;
        kceuusiekagyeoys:
        goto qwisiamkmkkwucyo;
        goto uyeyscsaigimsqwq;
        gsqcoqqsioiyoykq:
        if ($igscmsiuisqaqwkk) {
            goto acgqaeakoyasgkku;
        }
        goto goaowamiyyamueiw;
        awwaiioyywmokwsm:
        if ($igscmsiuisqaqwkk) {
            goto yoqsigmoyaaceqky;
        }
        goto ckwmkquuyyugigom;
        goaowamiyyamueiw:
        $igscmsiuisqaqwkk = $meywaqqsugaoeyys->comogmawyoiquwis();
        goto iaomqomgiwiegoca;
        oqwwacmigasucsoc:
        suqckoccuyeeymww:
        goto egkeqqgakieyimuq;
        gkoaeuekqockuoiq:
        if ($aokagokqyuysuksm) {
            goto sgocecweikecwwgq;
        }
        goto eekaiaeqewiqkkgm;
        yqicwmekwuoywyus:
        if ($sogksuscggsicmac[self::SUCCESS]) {
            goto iwkckkeimmeoquyq;
        }
        goto gkoaeuekqockuoiq;
        jsmisuccwyukksgc:
        ousmyagwsiooumos:
        goto kwmiwaecqcgiaqye;
        ekoqieigyoeyauqa:
        setcookie(self::COOKIE_STORE, '');
        goto cuwcsamuuqyuyqsu;
        qksckewucmosemuo:
        $ueeagokqmgisgauy = ManipulateArray::get($sogksuscggsicmac, "\x65\162\x72\x6f\162\x73", []);
        goto kmooekeyemqgucci;
        qmokwkocmcyeyesc:
        Notice::eumukgqciqgksuiq($eumukgqciqgksuiq, "\157\162\x6d\55\156\x6f\164\151\143\145");
        goto mosuacsuaasssciu;
        ckwmkquuyyugigom:
        $igscmsiuisqaqwkk = $meywaqqsugaoeyys->yyykkcyiksewsoqy($aokagokqyuysuksm);
        goto cumeycwmuuqawwyu;
        igwkcikeyoowosoi:
        wp_die(__("\x53\x6f\x72\x72\171\x2c\40\171\157\165\40\141\162\145\x20\156\x6f\x74\x20\x61\154\154\157\167\145\144\x20\164\x6f\x20\x65\x64\x69\164\40\x69\x74\x65\155\163\x20\157\146\x20\164\x68\x69\163\x20\x74\x79\160\145\x2e", PR__CMN__FOUNDATION));
        goto iqsgossweywksoia;
        kwmiwaecqcgiaqye:
        $sogksuscggsicmac = $meywaqqsugaoeyys->gscuuyuyauokoyuo($icwicymcioeyeyek);
        goto yqicwmekwuoywyus;
        casgoamcqkekgeeo:
        $wamcomkuwysqgwgk = __("\x25\163\40\x75\160\144\141\x74\145\144\40\x73\x75\143\x63\x65\163\x73\146\x75\154\x6c\x79\56", PR__CMN__FOUNDATION);
        goto yseyyukqaowwouua;
        eekaiaeqewiqkkgm:
        $wamcomkuwysqgwgk = __("\x25\163\x20\x63\157\x75\x6c\144\40\x6e\157\164\x20\142\x65\x20\x61\144\144\145\144\56", PR__CMN__FOUNDATION);
        goto kceuusiekagyeoys;
        qcgyggiaowuqswuw:
        $iueymcwwscwqkiyq = self::SUCCESS;
        goto sooecucuakgkuyis;
        mimacwyuueomgwwy:
        if (!isset($_POST["\x6f\162\x6d\55\163\x61\166\145"])) {
            goto mqgeseysuwcaqwiy;
        }
        goto ksckqkmwiqggykke;
        koukiyqaccegmquc:
        $igscmsiuisqaqwkk = $meywaqqsugaoeyys->acsiseaeysswwqkw();
        goto ekakkiuuquqkccse;
        ukwoswyyogmsygqg:
        $icwicymcioeyeyek[$aokagokqyuysuksm] = $aokagokqyuysuksm;
        goto jsmisuccwyukksgc;
        esqwswmoegiqcckg:
        $eumukgqciqgksuiq = sprintf($wamcomkuwysqgwgk, $this->oyeskqayoscwciem()->giiayuqckuiecosm());
        goto qmokwkocmcyeyesc;
        uqcsksaywyqeumig:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto yggmaskeguaqkusc;
        wswikooyuaaouqgk:
        yksywwikmeksikqc:
        goto awwaiioyywmokwsm;
        uwaimsisescsgyqk:
        $iueymcwwscwqkiyq = self::FAILED;
        goto uqcsksaywyqeumig;
        gicuuwuuuwumyooa:
        $mksyucucyswaukig = ManipulateArray::get($sogksuscggsicmac, "\x6f\142\x6a\x65\143\164");
        goto kakkuyeccaacewyo;
        cuwcsamuuqyuyqsu:
        setcookie(self::COOKIE_ERRORS, '');
        goto mimacwyuueomgwwy;
        mkgmaguyswskyioa:
        goto masakmomqmeocqqg;
        goto skwusmoyomgqkimm;
        kwsqgqmwyyeykgum:
        $igscmsiuisqaqwkk = '';
        goto emauuoieewwoeyqq;
        cuommomwmsackoqc:
        ManipulateArray::unset($aqmwamyiwgeeymqa, "\157\x72\155\55\163\141\x76\145");
        goto ggeoqeowscwkeumy;
        iaomqomgiwiegoca:
        acgqaeakoyasgkku:
        goto ysweqawmawicakeo;
        skuuyysooocugyww:
        setcookie(self::COOKIE_ERRORS, wp_json_encode($ueeagokqmgisgauy));
        goto cmmusgkieoqyymgs;
        owisckseoogsugqq:
        exit;
        goto ookcgumoacskyymy;
        ismeikacqqyqcmqe:
        goto yiceawuuiusakwiq;
        goto qsokkkyoackoycie;
        cumeycwmuuqawwyu:
        yoqsigmoyaaceqky:
        goto uaicwcqwauosmsqm;
        sooecucuakgkuyis:
        Notice::kigowwqauiumummw(sprintf($wamcomkuwysqgwgk, $this->oyeskqayoscwciem()->giiayuqckuiecosm()), "\157\x72\155\x2d\156\157\x74\x69\x63\145");
        goto ywqakqkmmcoceqka;
        qsokkkyoackoycie:
        qeuyekusasqmcqms:
        goto casgoamcqkekgeeo;
        wkiymcoqqiigqaaw:
        qwisiamkmkkwucyo:
        goto esqwswmoegiqcckg;
        cmmusgkieoqyymgs:
        yqcusaeysomccaok:
        goto mkgmaguyswskyioa;
        kgysyqkoqgwmoscq:
    }
    public function render()
    {
        goto acesyuieuuqwgkwm;
        acesyuieuuqwgkwm:
        parent::render();
        goto asaowisseacciyia;
        gwiaimosqoiquwkc:
        $meqocwsecsywiiqs = $this->mmqossqsksemasay("\141\x64\144\137\x6e\x65\167\x5f\151\x74\145\155");
        goto owgakkqgckqcegoi;
        ugswokwmkumcmigc:
        if ($this->oguuceugyqgsqewy()) {
            goto makomwwyomweyamm;
        }
        goto gwiaimosqoiquwkc;
        cigesysuauaiccms:
        makomwwyomweyamm:
        goto qumkwsqqocooyuoq;
        owgakkqgckqcegoi:
        goto oqwcmgwimeisusoe;
        goto cigesysuauaiccms;
        qumkwsqqocooyuoq:
        $meqocwsecsywiiqs = $this->mmqossqsksemasay("\x65\x64\151\164\x5f\151\164\145\155");
        goto gcskyqewysqaceeg;
        asaowisseacciyia:
        $this->oemueqoooyaieeum();
        goto qiaaqkymeuuueoqk;
        qiaaqkymeuuueoqk:
        $qksucogmsqmawmwi = null;
        goto ugswokwmkumcmigc;
        gcskyqewysqaceeg:
        $qksucogmsqmawmwi = $this->mgogaykgkoogasim()->acsiseaeysswwqkw();
        goto kkewoqqowugagwoy;
        wwswmaewcaisauei:
        echo $this->iuygowkemiiwqmiw("\145\144\151\x74", ["\x69\x64" => $this->mwikyscisascoeea(), "\164\x69\x74\154\x65" => $meqocwsecsywiiqs, "\156\141\155\x65" => $this->oyeskqayoscwciem()->aakmagwggmkoiiyu(), "\x6f\142\152\x65\x63\164" => $this->imgymusqgccqsqqq(), "\x63\157\154\165\155\156\163" => $this->yoqiwysegascakim(), "\141\144\x64\137\x75\162\154" => $qksucogmsqmawmwi, "\155\145\163\x73\141\x67\x65" => $this->sagusgigmkeysock(), "\x61\x64\x64\137\165\x72\x6c\x5f\x74\151\x74\154\145" => $this->oyeskqayoscwciem()->uikgwcuascgeissw("\141\x64\144\137\156\x65\x77\137\x69\x74\x65\x6d"), "\160\162\151\x6d\141\x72\x79\137\x6b\x65\171" => $this->mgogaykgkoogasim()->kumuygiiqswoyasy()]);
        goto wsemeeocquawyauo;
        kkewoqqowugagwoy:
        oqwcmgwimeisusoe:
        goto wwswmaewcaisauei;
        wsemeeocquawyauo:
    }
    public function oemueqoooyaieeum()
    {
        goto wmaeicoyyciuaiuy;
        magymcqykamwqigw:
        
        ManipulateTemplate::sikqggwmmykuiymy(["\x63\x61\154\154\x62\x61\x63\x6b" => [$this, "\151\165\x61\x75\143\165\157\x6f\153\147\157\161\x69\x69\x69\157"], "\163\x63\162\x65\145\x6e" => $ymqmyyeuycgmigyo, "\x63\157\156\164\x65\x78\x74" => "\x6e\157\162\155\x61\154", self::ID => "\x6d\x61\151\x6e\137\146\151\145\x6c\x64\x73", self::ICON => $meywaqqsugaoeyys->oyeskqayoscwciem()->qyyikeaseoskcacm(), self::TITLE => $this->oyeskqayoscwciem()->uikgwcuascgeissw($this->oguuceugyqgsqewy() ? "\x65\144\x69\x74\137\151\164\145\155" : "\x61\x64\144\137\x6e\145\x77\137\151\x74\145\x6d"), self::PRIORITY => "\x63\157\x72\145"]);
        goto ukogwqiuuuakkawy;
        wmaeicoyyciuaiuy:
        DecoratorAsset::imsomwwswyoquoqk("\160\157\x73\x74");
        goto ooysmgyeqoiesgqm;
        aaogeemgkogagkai:
        ocgkwqqmgasuoies:
        goto qqmmycmsoqegcqqw;
        isqwwmikecauwyuc:
        $ymqmyyeuycgmigyo = $meywaqqsugaoeyys->miwqiiqeegeqcwis();
        goto oiiqqgyqmggyiums;
        ukogwqiuuuakkawy:
        $this->cqscqicucmeamkyq("\141\x64\144\x5f\x6d\x65\x74\141\x5f\142\157\170\145\163", $ymqmyyeuycgmigyo, $this->imgymusqgccqsqqq())->cqscqicucmeamkyq("\141\144\144\x5f\x6d\x65\x74\141\137\x62\x6f\170\145\163\x5f{$ymqmyyeuycgmigyo}", $this->imgymusqgccqsqqq())->cqscqicucmeamkyq("\x64\x6f\137\x6d\x65\x74\141\x5f\142\x6f\x78\145\x73", $ymqmyyeuycgmigyo, "\x6e\157\x72\155\x61\x6c", $this->imgymusqgccqsqqq())->cqscqicucmeamkyq("\x64\x6f\x5f\x6d\145\x74\141\x5f\142\x6f\170\x65\x73", $ymqmyyeuycgmigyo, "\x61\x64\x76\141\x6e\143\x65\144", $this->imgymusqgccqsqqq())->cqscqicucmeamkyq("\144\x6f\x5f\155\x65\x74\x61\137\x62\x6f\x78\145\x73", $ymqmyyeuycgmigyo, "\x73\x69\x64\x65", $this->imgymusqgccqsqqq());
        goto gicmaqmuscawegie;
        ooysmgyeqoiesgqm:
        if (!wp_is_mobile()) {
            goto ocgkwqqmgasuoies;
        }
        goto kwoyiysciqumswcy;
        qqmmycmsoqegcqqw:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto isqwwmikecauwyuc;
        kwoyiysciqumswcy:
        DecoratorAsset::imsomwwswyoquoqk("\x6a\161\x75\x65\x72\x79\55\x74\157\x75\x63\x68\55\160\165\x6e\x63\x68");
        goto aaogeemgkogagkai;
        oiiqqgyqmggyiums:
        
        ManipulateTemplate::sikqggwmmykuiymy(["\143\141\x6c\154\x62\x61\x63\153" => [$this, "\155\x79\x63\x73\x71\x71\x67\x77\x77\151\147\x79\151\x65\x77\153"], "\163\143\162\x65\145\156" => $ymqmyyeuycgmigyo, "\143\157\156\x74\145\170\164" => "\x73\151\x64\x65", self::ID => "\163\x75\x62\x6d\x69\x74\x64\151\166", self::ICON => IconFontawesomeInterface::ICON_FLOPPY_DISK, self::TITLE => __("\123\141\x76\x65\40\103\150\x61\x6e\147\x65\x73", PR__CMN__FOUNDATION), self::PRIORITY => "\x63\157\162\145"]);
        goto magymcqykamwqigw;
        gicmaqmuscawegie:
    }
    
    public function sagusgigmkeysock()
    {
        return $this->message;
    }
    public function mqyuagguukgcoeka()
    {
        goto ucksaiwquekagyqe;
        eacysqsegwcqawsa:
        
        if (DecoratorUser::scmcyesmmikkucie("\145\144\151\164\137\x69\164\145\x6d", $this->mwikyscisascoeea())) {
            goto oymyqcoekqyuiguq;
        }
        goto yimeskeioamqmuwg;
        iyeswoaqkaeggiiy:
        $this->amsuqecgqokqqaue();
        goto asqqqqakiagymemk;
        sgiuwkisugmewmcs:
        goto gygqgauaceiuawkq;
        goto kceeuicccqscwgsu;
        ucksaiwquekagyqe:
        parent::mqyuagguukgcoeka();
        goto iyeswoaqkaeggiiy;
        iquecygaakmiomeg:
        $this->editing = true;
        goto eacysqsegwcqawsa;
        wkaoyycsoeoyqcae:
        gygqgauaceiuawkq:
        goto cwugokqsmiomgmqg;
        yimeskeioamqmuwg:
        wp_die(__("\x53\x6f\162\x72\171\x2c\40\171\157\x75\x20\x61\x72\x65\x20\156\157\164\40\x61\154\x6c\x6f\167\145\144\40\x74\x6f\40\145\x64\x69\x74\x20\x74\x68\151\163\40\x69\x74\x65\x6d\x2e", PR__CMN__FOUNDATION));
        goto yeemsgmumygmumqw;
        kceeuicccqscwgsu:
        ayamomygygmgwgkg:
        goto iquecygaakmiomeg;
        yeemsgmumygmumqw:
        oymyqcoekqyuiguq:
        goto wkaoyycsoeoyqcae;
        jkgouewqysmscmqs:
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        goto sgiuwkisugmewmcs;
        asqqqqakiagymemk:
        if ($this->mwikyscisascoeea()) {
            goto ayamomygygmgwgkg;
        }
        goto jkgouewqysmscmqs;
        cwugokqsmiomgmqg:
    }
    public function iuaucuookgoqiiio()
    {
        goto ggqwcqssoauckuic;
        gyeayeuuyiemuwuq:
        $aaeyeciuoqooykka = json_decode(wp_unslash($aaeyeciuoqooykka), true);
        goto kyggwyywiycksgqq;
        yyamycyesguwueuw:
        $ueeagokqmgisgauy = ManipulateServer::aukgyiaewiccooqw(self::COOKIE_ERRORS);
        goto aymmymequcisekie;
        aqmiewawgseaqeqk:
        ekoegocuqoycoeyq:
        goto gaceikykesgywssm;
        waewaiuiogywqigu:
        $aaeyeciuoqooykka = ManipulateServer::aukgyiaewiccooqw(self::COOKIE_STORE);
        goto yyamycyesguwueuw;
        sugumgeqcwgekcqs:
        if (!$ueeagokqmgisgauy) {
            goto ekoegocuqoycoeyq;
        }
        goto imeaiksowuukikui;
        weggeeowykuqooyg:
        yksamaucqkqsawkk:
        goto cqkuuyouqoqyguus;
        ggwcauaeuagekeyo:
        $ikgwqyuyckaewsow = $meywaqqsugaoeyys->ugmceccgwaaaigiy();
        goto mmkoqmccusoeaoyi;
        imeaiksowuukikui:
        $ueeagokqmgisgauy = json_decode(wp_unslash($ueeagokqmgisgauy), true);
        goto aqmiewawgseaqeqk;
        ggqwcqssoauckuic:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto ggwcauaeuagekeyo;
        gaceikykesgywssm:
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) {
            goto ocmagamuyawyiyka;
            imwiyqcekcykscui:
            if ($aiowsaccomcoikus instanceof Group) {
                goto becceuuwokgoaewy;
            }
            goto umemmgiwimkymaya;
            mmmqqoemusicwgqg:
            goto kucqcgeesiccuuia;
            goto iquugwoswgkoiieg;
            eciksmgaqikwegwq:
            $aiowsaccomcoikus->mkksewyosgeumwsa(MetaBox::cwiuiiakukcsaakw($meywaqqsugaoeyys->kumuygiiqswoyasy()));
            goto kieyoaoawqacqamy;
            kieyoaoawqacqamy:
            wyugqoowakyicyic:
            goto qckouamqueqiykqi;
            okagauksoqkoqygi:
            ygskksomysgaokek:
            goto eciksmgaqikwegwq;
            mcucegiogmuyogki:
            $eqgoocgaqwqcimie = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}\137\155\141\156\141\x67\x65\137\x65\x64\x69\x74\137{$aiowsaccomcoikus->aakmagwggmkoiiyu()}\137\166\x61\x6c\165\x65"), $eqgoocgaqwqcimie, $aiowsaccomcoikus, $mksyucucyswaukig);
            goto gqaimiooakyykccy;
            amqgiisymksuuuss:
            if ($this->oguuceugyqgsqewy()) {
                goto kskqquqsegiiogek;
            }
            goto iwgmywqocewwgoeo;
            usgcoawgqswoeiec:
            $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie);
            goto qowcwmsiyscackaa;
            uuisaeysawuagysg:
            weouocwmwicayyiy:
            goto ggqeakyaggiuegek;
            syiyemqigyugagks:
            goto iuysqgmmgqiywssm;
            goto woqkgwmkmqsuceuy;
            qesqgumuouyymcwa:
            akeoaicoieaiekcw:
            goto csyoimsqgwcmiwki;
            qckouamqueqiykqi:
            if (!($aiowsaccomcoikus instanceof File && is_numeric($eqgoocgaqwqcimie))) {
                goto aeaciamekuqyieys;
            }
            goto measoqewessauqma;
            oasisywuwssumsok:
            $eqgoocgaqwqcimie = $mksyucucyswaukig->{$aiowsaccomcoikus->mwikyscisascoeea()};
            goto iaoyeugekskmewgs;
            ocmagamuyawyiyka:
            if (!$aiowsaccomcoikus) {
                goto oycuaqewsskgkqci;
            }
            goto amqgiisymksuuuss;
            sgiouaqukyycswqm:
            kskqquqsegiiogek:
            goto gwkawguwsamuomuo;
            iaoyeugekskmewgs:
            if (!$eqgoocgaqwqcimie instanceof Collection) {
                goto ygskksomysgaokek;
            }
            goto iokemmkgmcaksiqu;
            auaigccmwqwsqsku:
            aeaciamekuqyieys:
            goto wiaesksmicgikqcm;
            ucasigqmoiwaimkk:
            mocaoayiouggauiy:
            goto uugwmywmaqomeksa;
            camawumockccayaq:
            $aiowsaccomcoikus->msqsseeaasqysese($iswcokucwmiosiaq);
            goto uuisaeysawuagysg;
            gqaimiooakyykccy:
            iuysqgmmgqiywssm:
            goto agemeseegiuuowgo;
            gwkawguwsamuomuo:
            $wkkcmkuiigsukyik = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}\x5f\155\141\156\x61\147\145\x5f\x65\x64\x69\x74\x5f\146\151\x65\154\144\x5f\x73\x68\157\167"), true, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus, $mksyucucyswaukig);
            goto ucasigqmoiwaimkk;
            goswwiomuackymqi:
            $iswcokucwmiosiaq = ManipulateArray::get($ueeagokqmgisgauy, $aiowsaccomcoikus->mwikyscisascoeea());
            goto gykuaukukosiocoy;
            qweyymyuuqwcmkqg:
            wwcwmkowgooocaem:
            goto guqmgiqaaowaauyo;
            gykuaukukosiocoy:
            if (!$iswcokucwmiosiaq) {
                goto weouocwmwicayyiy;
            }
            goto camawumockccayaq;
            aqigiwmamkowomiw:
            oycuaqewsskgkqci:
            goto qesqgumuouyymcwa;
            geasgywiogoeamek:
            goto qgkiguggkyiycwow;
            goto qweyymyuuqwcmkqg;
            wowmysuygugawmmu:
            ManipulateArray::unset($ikgwqyuyckaewsow, $uusmaiomayssaecw);
            goto mmmqqoemusicwgqg;
            gsiaskgsukseumig:
            $eqgoocgaqwqcimie = ManipulateArray::get($aaeyeciuoqooykka, $aiowsaccomcoikus->mwikyscisascoeea());
            goto syiyemqigyugagks;
            wiaesksmicgikqcm:
            $eqgoocgaqwqcimie = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}\x5f\155\141\156\x61\147\145\137\x65\144\151\164\x5f\146\151\x65\154\144\x5f\x76\x61\x6c\165\145"), $eqgoocgaqwqcimie, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus, $mksyucucyswaukig);
            goto mcucegiogmuyogki;
            ggqeakyaggiuegek:
            ggyoywwggggekycs:
            goto usgcoawgqswoeiec;
            iuyagqakcieasiua:
            becceuuwokgoaewy:
            goto oasisywuwssumsok;
            agemeseegiuuowgo:
            if (!$ueeagokqmgisgauy) {
                goto ggyoywwggggekycs;
            }
            goto goswwiomuackymqi;
            omsmaougqkqigogw:
            $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $aiowsaccomcoikus->mwikyscisascoeea());
            goto geasgywiogoeamek;
            mccimkgwkkamsime:
            qgkiguggkyiycwow:
            goto ucaoyoamaycsiacq;
            iquugwoswgkoiieg:
            gkkwmqoacciwomqs:
            goto xogaycsaesgqeqig;
            xogaycsaesgqeqig:
            if ($this->oguuceugyqgsqewy()) {
                goto ugiqiewymimqecsu;
            }
            goto gsiaskgsukseumig;
            umemmgiwimkymaya:
            if ($aiowsaccomcoikus instanceof Checkbox) {
                goto wwcwmkowgooocaem;
            }
            goto omsmaougqkqigogw;
            uugwmywmaqomeksa:
            if ($wkkcmkuiigsukyik) {
                goto gkkwmqoacciwomqs;
            }
            goto wowmysuygugawmmu;
            syoeqaqkseguwmgy:
            goto mocaoayiouggauiy;
            goto sgiouaqukyycswqm;
            measoqewessauqma:
            $eqgoocgaqwqcimie = ManipulateAttachment::mgaeeqsgeoukeokc($eqgoocgaqwqcimie);
            goto auaigccmwqwsqsku;
            iwgmywqocewwgoeo:
            $wkkcmkuiigsukyik = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}\x5f\155\141\156\141\x67\x65\137\x61\x64\x64\x5f\x66\151\x65\154\144\x5f\x73\150\157\167"), true, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus);
            goto syoeqaqkseguwmgy;
            qowcwmsiyscackaa:
            kucqcgeesiccuuia:
            goto aqigiwmamkowomiw;
            woqkgwmkmqsuceuy:
            ugiqiewymimqecsu:
            goto imwiyqcekcykscui;
            guqmgiqaaowaauyo:
            $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $aiowsaccomcoikus->mwikyscisascoeea()) == "\61";
            goto mccimkgwkkamsime;
            ucaoyoamaycsiacq:
            goto wyugqoowakyicyic;
            goto iuyagqakcieasiua;
            iokemmkgmcaksiqu:
            $eqgoocgaqwqcimie = array_fill(0, $eqgoocgaqwqcimie->count(), 0);
            goto okagauksoqkoqygi;
            csyoimsqgwcmiwki:
        }
        goto weggeeowykuqooyg;
        cqkuuyouqoqyguus:
        MetaBox::iuaucuookgoqiiio($ikgwqyuyckaewsow, ["\x65\x63\x68\x6f" => true, "\143\x6c\x61\x73\x73\x65\163" => "\x6f\x72\155\x2d\x65\144\x69\164\55\x66\157\x72\x6d"]);
        goto ssmgmiuqoeiuacsa;
        aymmymequcisekie:
        if (!$aaeyeciuoqooykka) {
            goto uuuceqkseqkqawko;
        }
        goto gyeayeuuyiemuwuq;
        kyggwyywiycksgqq:
        uuuceqkseqkqawko:
        goto sugumgeqcwgekcqs;
        mmkoqmccusoeaoyi:
        $mksyucucyswaukig = $this->imgymusqgccqsqqq();
        goto waewaiuiogywqigu;
        ssmgmiuqoeiuacsa:
    }
    
    public function oguuceugyqgsqewy() : ?bool
    {
        return $this->editing;
    }
    public function mycsqqgwwigyiewk()
    {
        goto ueaiskyiqcquiika;
        qccmuwiwykuegoga:
        $mksyucucyswaukig = $this->imgymusqgccqsqqq();
        goto csucwwqcsaymyiuk;
        cycwgukowsksmkyc:
        $cwoayyawiauoeokk = $meywaqqsugaoeyys->rkmkouiquumiecqy($iwywmkygwewiamwm);
        goto siuyaemoiiqyoggo;
        ooqmaweuqmcmwsuk:
        $kqokimuosyuyyucg = $mksyucucyswaukig->{$ceiwsaacewygcsqg};
        goto uscissuaiyuiukea;
        qaiuogoowcoimwee:
        $kqokimuosyuyyucg = 0;
        goto osqgywagokmsicqe;
        cqugssuesycomqwa:
        if (!$this->oguuceugyqgsqewy()) {
            goto wiqigqgiegmacgsw;
        }
        goto kaiqsuaywyuckuoo;
        iiuuwuwcwamqegey:
        if (!(is_object($mksyucucyswaukig) && property_exists($mksyucucyswaukig, $ceiwsaacewygcsqg))) {
            goto gwoacimkeyymqccq;
        }
        goto qmgueimkwqmsakis;
        kuyqusuycscumuek:
        if (!($iwywmkygwewiamwm = $meywaqqsugaoeyys->cgccmsewskigcuig($kqokimuosyuyyucg))) {
            goto koggssokukoukkay;
        }
        goto cycwgukowsksmkyc;
        yuoamgkigcwaooqu:
        wiqigqgiegmacgsw:
        goto ymwyooosikgokiaa;
        ucecweoaoyeoyuue:
        $myyqiummwqiokocc = __("\x41\144\144", PR__CMN__FOUNDATION);
        goto cqugssuesycomqwa;
        osqgywagokmsicqe:
        $cwoayyawiauoeokk = '';
        goto qccmuwiwykuegoga;
        koemwyegoqwiikom:
        $myyqiummwqiokocc = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\x73\x63\162\x65\x65\156\x5f\163\x75\x62\x6d\x69\x74\x5f\x6c\x61\x62\x65\154"), $myyqiummwqiokocc, $mksyucucyswaukig, $meywaqqsugaoeyys, $this->oguuceugyqgsqewy());
        goto qycsooiomiugimqc;
        uscissuaiyuiukea:
        gwoacimkeyymqccq:
        goto kuyqusuycscumuek;
        eqemcocqsyasqycq:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto ucecweoaoyeoyuue;
        siuyaemoiiqyoggo:
        koggssokukoukkay:
        goto koemwyegoqwiikom;
        ymwyooosikgokiaa:
        $oammesyieqmwuwyi = [];
        goto qaiuogoowcoimwee;
        kaiqsuaywyuckuoo:
        $myyqiummwqiokocc = __("\125\160\x64\141\164\x65", PR__CMN__FOUNDATION);
        goto yuoamgkigcwaooqu;
        qycsooiomiugimqc:
        echo $this->iuygowkemiiwqmiw("\x73\165\x62\155\151\164\137\155\145\x74\x61\142\157\x78", ["\155\157\x64\x65\154" => $meywaqqsugaoeyys, "\151\x74\x65\x6d\x73" => $oammesyieqmwuwyi, "\x6f\x62\x6a\145\143\164" => $mksyucucyswaukig, "\144\145\x6c\145\164\x69\x6f\156" => $cwoayyawiauoeokk, "\x73\x75\142\155\151\x74\x5f\x6c\x61\x62\x65\154" => $myyqiummwqiokocc, "\151\163\137\x65\144\x69\164\151\156\x67" => $this->oguuceugyqgsqewy(), "\150\x6f\x6f\153\137\160\x72\x65\146\x69\x78" => $this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\163\x63\162\x65\x65\156\137\x73\x75\142\x6d\x69\x74\137\155\145\164\141\137\142\x6f\170")]);
        goto qioswooukgoowsuc;
        ueaiskyiqcquiika:
        $ymqmyyeuycgmigyo = $this->oyeskqayoscwciem()->aakmagwggmkoiiyu();
        goto eqemcocqsyasqycq;
        csucwwqcsaymyiuk:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto iiuuwuwcwamqegey;
        qmgueimkwqmsakis:
        $oammesyieqmwuwyi = $meywaqqsugaoeyys->eukyqwmmeyakcyoo($mksyucucyswaukig, $meywaqqsugaoeyys->mgeouagciaesieae());
        goto ooqmaweuqmcmwsuk;
        qioswooukgoowsuc:
    }
}
