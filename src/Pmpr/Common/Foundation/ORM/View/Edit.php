<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
    const COOKIE_STORE = "\157\162\x6d\x2d\146\x69\145\x6c\x64\163\x2d\163\164\x6f\x72\x65";
    const COOKIE_ERRORS = "\x6f\x72\155\55\146\x69\145\x6c\144\x73\55\x65\x72\x72\x6f\x72\x73";
    
    protected $message = false;
    
    protected bool $editing = false;
    public function amsuqecgqokqqaue()
    {
        goto ekoqieigyoeyauqa;
        igwkcikeyoowosoi:
        wp_die(__("\x53\157\162\162\x79\54\x20\171\x6f\x75\40\141\x72\145\40\x6e\x6f\x74\x20\x61\x6c\154\157\167\145\144\40\x74\157\40\145\144\x69\164\x20\x69\164\145\155\163\40\157\146\40\164\150\151\163\40\164\171\160\145\x2e", PR__CMN__FOUNDATION));
        goto iqsgossweywksoia;
        cmmusgkieoqyymgs:
        yqcusaeysomccaok:
        goto mkgmaguyswskyioa;
        iqsgossweywksoia:
        goto ssagcgqaucssyego;
        goto awaqksikyomsuaeo;
        cakuguiciaiaeukg:
        $igscmsiuisqaqwkk = $meywaqqsugaoeyys->uesweuocqoywoyms($aokagokqyuysuksm);
        goto wswikooyuaaouqgk;
        gkoaeuekqockuoiq:
        if ($aokagokqyuysuksm) {
            goto sgocecweikecwwgq;
        }
        goto eekaiaeqewiqkkgm;
        sooecucuakgkuyis:
        Notice::kigowwqauiumummw(sprintf($wamcomkuwysqgwgk, $this->oyeskqayoscwciem()->giiayuqckuiecosm()), "\x6f\162\155\55\x6e\x6f\x74\x69\x63\145");
        goto ywqakqkmmcoceqka;
        ywqakqkmmcoceqka:
        masakmomqmeocqqg:
        goto kwsqgqmwyyeykgum;
        mwieyyqamgwicgco:
        $wamcomkuwysqgwgk = __("\45\163\x20\143\157\165\x6c\x64\40\156\157\164\x20\x62\145\40\165\160\144\141\164\145\x64\56", PR__CMN__FOUNDATION);
        goto wkiymcoqqiigqaaw;
        kwmiwaecqcgiaqye:
        $sogksuscggsicmac = $meywaqqsugaoeyys->gscuuyuyauokoyuo($icwicymcioeyeyek);
        goto yqicwmekwuoywyus;
        cumeycwmuuqawwyu:
        yoqsigmoyaaceqky:
        goto uaicwcqwauosmsqm;
        jsmisuccwyukksgc:
        ousmyagwsiooumos:
        goto kwmiwaecqcgiaqye;
        skuuyysooocugyww:
        setcookie(self::COOKIE_ERRORS, wp_json_encode($ueeagokqmgisgauy));
        goto cmmusgkieoqyymgs;
        uwaimsisescsgyqk:
        $iueymcwwscwqkiyq = self::FAILED;
        goto uqcsksaywyqeumig;
        ckwmkquuyyugigom:
        $igscmsiuisqaqwkk = $meywaqqsugaoeyys->yyykkcyiksewsoqy($aokagokqyuysuksm);
        goto cumeycwmuuqawwyu;
        ukwoswyyogmsygqg:
        $icwicymcioeyeyek[$aokagokqyuysuksm] = $aokagokqyuysuksm;
        goto jsmisuccwyukksgc;
        yqicwmekwuoywyus:
        if ($sogksuscggsicmac[self::SUCCESS]) {
            goto iwkckkeimmeoquyq;
        }
        goto gkoaeuekqockuoiq;
        koukiyqaccegmquc:
        $igscmsiuisqaqwkk = $meywaqqsugaoeyys->acsiseaeysswwqkw();
        goto ekakkiuuquqkccse;
        awwaiioyywmokwsm:
        if ($igscmsiuisqaqwkk) {
            goto yoqsigmoyaaceqky;
        }
        goto ckwmkquuyyugigom;
        uqcsksaywyqeumig:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto yggmaskeguaqkusc;
        awaqksikyomsuaeo:
        sycougcyeqmeiagk:
        goto cuommomwmsackoqc;
        mosuacsuaasssciu:
        setcookie(self::COOKIE_STORE, wp_json_encode($icwicymcioeyeyek));
        goto qksckewucmosemuo;
        kceuusiekagyeoys:
        goto qwisiamkmkkwucyo;
        goto uyeyscsaigimsqwq;
        ekoqieigyoeyauqa:
        setcookie(self::COOKIE_STORE, '');
        goto cuwcsamuuqyuyqsu;
        gicuuwuuuwumyooa:
        $mksyucucyswaukig = ManipulateArray::get($sogksuscggsicmac, "\x6f\x62\152\145\x63\164");
        goto kakkuyeccaacewyo;
        owisckseoogsugqq:
        exit;
        goto ookcgumoacskyymy;
        oqwwacmigasucsoc:
        suqckoccuyeeymww:
        goto egkeqqgakieyimuq;
        cuommomwmsackoqc:
        ManipulateArray::unset($aqmwamyiwgeeymqa, "\157\x72\155\x2d\x73\141\166\145");
        goto ggeoqeowscwkeumy;
        wswikooyuaaouqgk:
        yksywwikmeksikqc:
        goto awwaiioyywmokwsm;
        yseyyukqaowwouua:
        yiceawuuiusakwiq:
        goto qcgyggiaowuqswuw;
        usyckeewsgwaysam:
        if ($aokagokqyuysuksm) {
            goto qeuyekusasqmcqms;
        }
        goto gicuuwuuuwumyooa;
        qsokkkyoackoycie:
        qeuyekusasqmcqms:
        goto casgoamcqkekgeeo;
        emauuoieewwoeyqq:
        if ($aokagokqyuysuksm) {
            goto suqckoccuyeeymww;
        }
        goto koukiyqaccegmquc;
        qcgyggiaowuqswuw:
        $iueymcwwscwqkiyq = self::SUCCESS;
        goto sooecucuakgkuyis;
        qksckewucmosemuo:
        $ueeagokqmgisgauy = ManipulateArray::get($sogksuscggsicmac, "\x65\162\162\157\162\x73", []);
        goto kmooekeyemqgucci;
        skwusmoyomgqkimm:
        iwkckkeimmeoquyq:
        goto usyckeewsgwaysam;
        yggmaskeguaqkusc:
        if (!($aokagokqyuysuksm = (int) ManipulateServer::get($ceiwsaacewygcsqg))) {
            goto ousmyagwsiooumos;
        }
        goto ukwoswyyogmsygqg;
        gsqcoqqsioiyoykq:
        if ($igscmsiuisqaqwkk) {
            goto acgqaeakoyasgkku;
        }
        goto goaowamiyyamueiw;
        casgoamcqkekgeeo:
        $wamcomkuwysqgwgk = __("\x25\163\40\165\x70\x64\x61\x74\145\144\40\163\x75\143\143\145\163\163\146\165\x6c\x6c\171\x2e", PR__CMN__FOUNDATION);
        goto yseyyukqaowwouua;
        mkgmaguyswskyioa:
        goto masakmomqmeocqqg;
        goto skwusmoyomgqkimm;
        ismeikacqqyqcmqe:
        goto yiceawuuiusakwiq;
        goto qsokkkyoackoycie;
        mimacwyuueomgwwy:
        if (!isset($_POST["\x6f\162\155\x2d\x73\x61\166\145"])) {
            goto mqgeseysuwcaqwiy;
        }
        goto ksckqkmwiqggykke;
        goaowamiyyamueiw:
        $igscmsiuisqaqwkk = $meywaqqsugaoeyys->comogmawyoiquwis();
        goto iaomqomgiwiegoca;
        cuwcsamuuqyuyqsu:
        setcookie(self::COOKIE_ERRORS, '');
        goto mimacwyuueomgwwy;
        ookcgumoacskyymy:
        ssagcgqaucssyego:
        goto cuseccewekgcgkyg;
        wkiymcoqqiigqaaw:
        qwisiamkmkkwucyo:
        goto esqwswmoegiqcckg;
        qmokwkocmcyeyesc:
        Notice::eumukgqciqgksuiq($eumukgqciqgksuiq, "\x6f\162\155\x2d\156\x6f\164\x69\x63\x65");
        goto mosuacsuaasssciu;
        iaomqomgiwiegoca:
        acgqaeakoyasgkku:
        goto ysweqawmawicakeo;
        ysweqawmawicakeo:
        wp_safe_redirect($igscmsiuisqaqwkk);
        goto owisckseoogsugqq;
        ekakkiuuquqkccse:
        goto giugwaeuwaomossq;
        goto oqwwacmigasucsoc;
        eekaiaeqewiqkkgm:
        $wamcomkuwysqgwgk = __("\x25\163\40\143\x6f\165\154\144\x20\156\x6f\164\40\x62\145\40\141\144\x64\x65\x64\56", PR__CMN__FOUNDATION);
        goto kceuusiekagyeoys;
        esqwswmoegiqcckg:
        $eumukgqciqgksuiq = sprintf($wamcomkuwysqgwgk, $this->oyeskqayoscwciem()->giiayuqckuiecosm());
        goto qmokwkocmcyeyesc;
        cuseccewekgcgkyg:
        mqgeseysuwcaqwiy:
        goto kgysyqkoqgwmoscq;
        uaicwcqwauosmsqm:
        giugwaeuwaomossq:
        goto gsqcoqqsioiyoykq;
        uyeyscsaigimsqwq:
        sgocecweikecwwgq:
        goto mwieyyqamgwicgco;
        ksckqkmwiqggykke:
        if ($this->oyeskqayoscwciem()->uwaascqoguwkwiaw()) {
            goto sycougcyeqmeiagk;
        }
        goto igwkcikeyoowosoi;
        qyeswawykmasuqye:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto uwaimsisescsgyqk;
        kmooekeyemqgucci:
        if (!$ueeagokqmgisgauy) {
            goto yqcusaeysomccaok;
        }
        goto skuuyysooocugyww;
        kakkuyeccaacewyo:
        $aokagokqyuysuksm = ManipulateArray::get($mksyucucyswaukig, $meywaqqsugaoeyys->kumuygiiqswoyasy());
        goto cysgqimowcqoqqsc;
        ggeoqeowscwkeumy:
        $icwicymcioeyeyek = ManipulateServer::ayueggmoqeeukqmq();
        goto qyeswawykmasuqye;
        kwsqgqmwyyeykgum:
        $igscmsiuisqaqwkk = '';
        goto emauuoieewwoeyqq;
        cysgqimowcqoqqsc:
        $wamcomkuwysqgwgk = __("\x25\163\x20\x61\144\144\145\144\40\x73\165\x63\x63\145\x73\163\146\x75\154\154\x79\56", PR__CMN__FOUNDATION);
        goto ismeikacqqyqcmqe;
        egkeqqgakieyimuq:
        if (!($iueymcwwscwqkiyq == self::SUCCESS)) {
            goto yksywwikmeksikqc;
        }
        goto cakuguiciaiaeukg;
        kgysyqkoqgwmoscq:
    }
    public function render()
    {
        goto acesyuieuuqwgkwm;
        acesyuieuuqwgkwm:
        parent::render();
        goto asaowisseacciyia;
        ugswokwmkumcmigc:
        if ($this->oguuceugyqgsqewy()) {
            goto makomwwyomweyamm;
        }
        goto gwiaimosqoiquwkc;
        owgakkqgckqcegoi:
        goto oqwcmgwimeisusoe;
        goto cigesysuauaiccms;
        cigesysuauaiccms:
        makomwwyomweyamm:
        goto qumkwsqqocooyuoq;
        asaowisseacciyia:
        $this->oemueqoooyaieeum();
        goto qiaaqkymeuuueoqk;
        gcskyqewysqaceeg:
        $qksucogmsqmawmwi = $this->mgogaykgkoogasim()->acsiseaeysswwqkw();
        goto kkewoqqowugagwoy;
        gwiaimosqoiquwkc:
        $meqocwsecsywiiqs = $this->mmqossqsksemasay("\x61\144\x64\137\x6e\x65\167\x5f\151\164\145\x6d");
        goto owgakkqgckqcegoi;
        wwswmaewcaisauei:
        echo $this->iuygowkemiiwqmiw("\145\144\151\164", ["\151\x64" => $this->mwikyscisascoeea(), "\x74\x69\164\154\x65" => $meqocwsecsywiiqs, "\156\x61\x6d\145" => $this->oyeskqayoscwciem()->aakmagwggmkoiiyu(), "\157\x62\x6a\145\143\x74" => $this->imgymusqgccqsqqq(), "\143\x6f\154\x75\155\156\x73" => $this->yoqiwysegascakim(), "\x61\x64\x64\x5f\165\x72\x6c" => $qksucogmsqmawmwi, "\x6d\145\x73\163\x61\x67\145" => $this->sagusgigmkeysock(), "\x61\x64\x64\137\x75\x72\x6c\137\164\151\164\154\x65" => $this->oyeskqayoscwciem()->uikgwcuascgeissw("\x61\x64\144\x5f\156\x65\167\137\x69\x74\x65\x6d"), "\x70\162\151\155\x61\x72\171\x5f\x6b\145\171" => $this->mgogaykgkoogasim()->kumuygiiqswoyasy()]);
        goto wsemeeocquawyauo;
        qumkwsqqocooyuoq:
        $meqocwsecsywiiqs = $this->mmqossqsksemasay("\145\144\151\x74\x5f\151\164\x65\x6d");
        goto gcskyqewysqaceeg;
        kkewoqqowugagwoy:
        oqwcmgwimeisusoe:
        goto wwswmaewcaisauei;
        qiaaqkymeuuueoqk:
        $qksucogmsqmawmwi = null;
        goto ugswokwmkumcmigc;
        wsemeeocquawyauo:
    }
    public function oemueqoooyaieeum()
    {
        goto wmaeicoyyciuaiuy;
        isqwwmikecauwyuc:
        $ymqmyyeuycgmigyo = $meywaqqsugaoeyys->miwqiiqeegeqcwis();
        goto oiiqqgyqmggyiums;
        wmaeicoyyciuaiuy:
        DecoratorAsset::imsomwwswyoquoqk("\160\157\x73\x74");
        goto ooysmgyeqoiesgqm;
        magymcqykamwqigw:
        
        ManipulateTemplate::sikqggwmmykuiymy(["\143\x61\x6c\154\x62\x61\x63\153" => [$this, "\151\x75\141\x75\x63\165\157\157\153\x67\x6f\x71\x69\x69\x69\157"], "\x73\143\x72\x65\145\x6e" => $ymqmyyeuycgmigyo, "\x63\x6f\156\x74\x65\170\164" => "\156\157\x72\155\141\x6c", self::ID => "\x6d\x61\151\156\137\x66\151\x65\154\x64\163", self::ICON => $meywaqqsugaoeyys->oyeskqayoscwciem()->qyyikeaseoskcacm(), self::TITLE => $this->oyeskqayoscwciem()->uikgwcuascgeissw($this->oguuceugyqgsqewy() ? "\x65\144\151\164\x5f\x69\164\145\155" : "\x61\144\x64\x5f\156\x65\x77\137\x69\x74\145\155"), self::PRIORITY => "\143\157\162\x65"]);
        goto ukogwqiuuuakkawy;
        kwoyiysciqumswcy:
        DecoratorAsset::imsomwwswyoquoqk("\x6a\161\x75\145\162\x79\55\x74\x6f\165\143\150\x2d\x70\x75\156\143\x68");
        goto aaogeemgkogagkai;
        aaogeemgkogagkai:
        ocgkwqqmgasuoies:
        goto qqmmycmsoqegcqqw;
        ukogwqiuuuakkawy:
        $this->cqscqicucmeamkyq("\x61\144\144\137\x6d\x65\x74\x61\x5f\142\157\x78\x65\163", $ymqmyyeuycgmigyo, $this->imgymusqgccqsqqq())->cqscqicucmeamkyq("\x61\144\144\137\x6d\x65\x74\x61\x5f\x62\x6f\x78\x65\163\x5f{$ymqmyyeuycgmigyo}", $this->imgymusqgccqsqqq())->cqscqicucmeamkyq("\x64\157\x5f\155\145\x74\x61\x5f\142\157\170\x65\x73", $ymqmyyeuycgmigyo, "\156\x6f\x72\155\x61\154", $this->imgymusqgccqsqqq())->cqscqicucmeamkyq("\144\x6f\137\x6d\x65\164\141\x5f\x62\157\170\x65\x73", $ymqmyyeuycgmigyo, "\141\144\x76\x61\156\143\x65\144", $this->imgymusqgccqsqqq())->cqscqicucmeamkyq("\144\157\x5f\x6d\145\x74\141\x5f\142\x6f\x78\145\163", $ymqmyyeuycgmigyo, "\163\x69\x64\x65", $this->imgymusqgccqsqqq());
        goto gicmaqmuscawegie;
        ooysmgyeqoiesgqm:
        if (!wp_is_mobile()) {
            goto ocgkwqqmgasuoies;
        }
        goto kwoyiysciqumswcy;
        oiiqqgyqmggyiums:
        
        ManipulateTemplate::sikqggwmmykuiymy(["\143\x61\154\154\x62\x61\143\x6b" => [$this, "\155\x79\143\163\161\161\x67\167\x77\151\147\x79\151\145\167\x6b"], "\x73\143\162\145\145\x6e" => $ymqmyyeuycgmigyo, "\143\x6f\x6e\164\x65\x78\x74" => "\163\151\x64\x65", self::ID => "\x73\165\142\155\151\x74\144\x69\166", self::ICON => IconFontawesomeInterface::ICON_FLOPPY_DISK, self::TITLE => __("\123\141\166\145\x20\103\150\141\x6e\147\x65\x73", PR__CMN__FOUNDATION), self::PRIORITY => "\x63\x6f\162\145"]);
        goto magymcqykamwqigw;
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
        wkaoyycsoeoyqcae:
        gygqgauaceiuawkq:
        goto cwugokqsmiomgmqg;
        asqqqqakiagymemk:
        if ($this->mwikyscisascoeea()) {
            goto ayamomygygmgwgkg;
        }
        goto jkgouewqysmscmqs;
        yimeskeioamqmuwg:
        wp_die(__("\123\157\x72\162\171\x2c\40\171\x6f\x75\40\x61\162\x65\x20\x6e\x6f\164\40\141\154\154\157\x77\x65\144\x20\x74\x6f\40\145\144\x69\164\40\x74\150\x69\x73\x20\x69\x74\x65\x6d\x2e", PR__CMN__FOUNDATION));
        goto yeemsgmumygmumqw;
        iyeswoaqkaeggiiy:
        $this->amsuqecgqokqqaue();
        goto asqqqqakiagymemk;
        sgiuwkisugmewmcs:
        goto gygqgauaceiuawkq;
        goto kceeuicccqscwgsu;
        kceeuicccqscwgsu:
        ayamomygygmgwgkg:
        goto iquecygaakmiomeg;
        jkgouewqysmscmqs:
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        goto sgiuwkisugmewmcs;
        ucksaiwquekagyqe:
        parent::mqyuagguukgcoeka();
        goto iyeswoaqkaeggiiy;
        iquecygaakmiomeg:
        $this->editing = true;
        goto eacysqsegwcqawsa;
        eacysqsegwcqawsa:
        
        if (DecoratorUser::scmcyesmmikkucie("\x65\x64\151\164\x5f\x69\164\x65\155", $this->mwikyscisascoeea())) {
            goto oymyqcoekqyuiguq;
        }
        goto yimeskeioamqmuwg;
        yeemsgmumygmumqw:
        oymyqcoekqyuiguq:
        goto wkaoyycsoeoyqcae;
        cwugokqsmiomgmqg:
    }
    public function iuaucuookgoqiiio()
    {
        goto ggqwcqssoauckuic;
        cqkuuyouqoqyguus:
        MetaBox::iuaucuookgoqiiio($ikgwqyuyckaewsow, ["\145\x63\x68\x6f" => true, "\x63\x6c\x61\x73\163\x65\163" => "\x6f\x72\155\55\x65\144\x69\x74\55\x66\157\x72\x6d"]);
        goto ssmgmiuqoeiuacsa;
        waewaiuiogywqigu:
        $aaeyeciuoqooykka = ManipulateServer::aukgyiaewiccooqw(self::COOKIE_STORE);
        goto yyamycyesguwueuw;
        imeaiksowuukikui:
        $ueeagokqmgisgauy = json_decode(wp_unslash($ueeagokqmgisgauy), true);
        goto aqmiewawgseaqeqk;
        gyeayeuuyiemuwuq:
        $aaeyeciuoqooykka = json_decode(wp_unslash($aaeyeciuoqooykka), true);
        goto kyggwyywiycksgqq;
        gaceikykesgywssm:
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) {
            goto ocmagamuyawyiyka;
            iquugwoswgkoiieg:
            gkkwmqoacciwomqs:
            goto xogaycsaesgqeqig;
            mmmqqoemusicwgqg:
            goto kucqcgeesiccuuia;
            goto iquugwoswgkoiieg;
            omsmaougqkqigogw:
            $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $aiowsaccomcoikus->mwikyscisascoeea());
            goto geasgywiogoeamek;
            okagauksoqkoqygi:
            ygskksomysgaokek:
            goto eciksmgaqikwegwq;
            guqmgiqaaowaauyo:
            $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $aiowsaccomcoikus->mwikyscisascoeea()) == "\61";
            goto mccimkgwkkamsime;
            eciksmgaqikwegwq:
            $aiowsaccomcoikus->mkksewyosgeumwsa(MetaBox::cwiuiiakukcsaakw($meywaqqsugaoeyys->kumuygiiqswoyasy()));
            goto kieyoaoawqacqamy;
            xogaycsaesgqeqig:
            if ($this->oguuceugyqgsqewy()) {
                goto ugiqiewymimqecsu;
            }
            goto gsiaskgsukseumig;
            syiyemqigyugagks:
            goto iuysqgmmgqiywssm;
            goto woqkgwmkmqsuceuy;
            ucasigqmoiwaimkk:
            mocaoayiouggauiy:
            goto uugwmywmaqomeksa;
            uuisaeysawuagysg:
            weouocwmwicayyiy:
            goto ggqeakyaggiuegek;
            kieyoaoawqacqamy:
            wyugqoowakyicyic:
            goto qckouamqueqiykqi;
            umemmgiwimkymaya:
            if ($aiowsaccomcoikus instanceof Checkbox) {
                goto wwcwmkowgooocaem;
            }
            goto omsmaougqkqigogw;
            measoqewessauqma:
            $eqgoocgaqwqcimie = ManipulateAttachment::mgaeeqsgeoukeokc($eqgoocgaqwqcimie);
            goto auaigccmwqwsqsku;
            qckouamqueqiykqi:
            if (!($aiowsaccomcoikus instanceof File && is_numeric($eqgoocgaqwqcimie))) {
                goto aeaciamekuqyieys;
            }
            goto measoqewessauqma;
            gqaimiooakyykccy:
            iuysqgmmgqiywssm:
            goto agemeseegiuuowgo;
            qweyymyuuqwcmkqg:
            wwcwmkowgooocaem:
            goto guqmgiqaaowaauyo;
            auaigccmwqwsqsku:
            aeaciamekuqyieys:
            goto wiaesksmicgikqcm;
            aqigiwmamkowomiw:
            oycuaqewsskgkqci:
            goto qesqgumuouyymcwa;
            geasgywiogoeamek:
            goto qgkiguggkyiycwow;
            goto qweyymyuuqwcmkqg;
            amqgiisymksuuuss:
            if ($this->oguuceugyqgsqewy()) {
                goto kskqquqsegiiogek;
            }
            goto iwgmywqocewwgoeo;
            gsiaskgsukseumig:
            $eqgoocgaqwqcimie = ManipulateArray::get($aaeyeciuoqooykka, $aiowsaccomcoikus->mwikyscisascoeea());
            goto syiyemqigyugagks;
            imwiyqcekcykscui:
            if ($aiowsaccomcoikus instanceof Group) {
                goto becceuuwokgoaewy;
            }
            goto umemmgiwimkymaya;
            woqkgwmkmqsuceuy:
            ugiqiewymimqecsu:
            goto imwiyqcekcykscui;
            wowmysuygugawmmu:
            ManipulateArray::unset($ikgwqyuyckaewsow, $uusmaiomayssaecw);
            goto mmmqqoemusicwgqg;
            ggqeakyaggiuegek:
            ggyoywwggggekycs:
            goto usgcoawgqswoeiec;
            iuyagqakcieasiua:
            becceuuwokgoaewy:
            goto oasisywuwssumsok;
            gwkawguwsamuomuo:
            $wkkcmkuiigsukyik = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}\x5f\155\141\x6e\x61\x67\x65\x5f\x65\144\x69\164\137\x66\x69\145\x6c\x64\137\x73\x68\x6f\x77"), true, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus, $mksyucucyswaukig);
            goto ucasigqmoiwaimkk;
            iokemmkgmcaksiqu:
            $eqgoocgaqwqcimie = array_fill(0, $eqgoocgaqwqcimie->count(), 0);
            goto okagauksoqkoqygi;
            camawumockccayaq:
            $aiowsaccomcoikus->msqsseeaasqysese($iswcokucwmiosiaq);
            goto uuisaeysawuagysg;
            mccimkgwkkamsime:
            qgkiguggkyiycwow:
            goto ucaoyoamaycsiacq;
            oasisywuwssumsok:
            $eqgoocgaqwqcimie = $mksyucucyswaukig->{$aiowsaccomcoikus->mwikyscisascoeea()};
            goto iaoyeugekskmewgs;
            gykuaukukosiocoy:
            if (!$iswcokucwmiosiaq) {
                goto weouocwmwicayyiy;
            }
            goto camawumockccayaq;
            uugwmywmaqomeksa:
            if ($wkkcmkuiigsukyik) {
                goto gkkwmqoacciwomqs;
            }
            goto wowmysuygugawmmu;
            agemeseegiuuowgo:
            if (!$ueeagokqmgisgauy) {
                goto ggyoywwggggekycs;
            }
            goto goswwiomuackymqi;
            iwgmywqocewwgoeo:
            $wkkcmkuiigsukyik = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}\137\155\141\x6e\x61\x67\x65\x5f\x61\144\x64\x5f\x66\x69\145\154\144\x5f\163\150\x6f\167"), true, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus);
            goto syoeqaqkseguwmgy;
            ucaoyoamaycsiacq:
            goto wyugqoowakyicyic;
            goto iuyagqakcieasiua;
            usgcoawgqswoeiec:
            $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie);
            goto qowcwmsiyscackaa;
            syoeqaqkseguwmgy:
            goto mocaoayiouggauiy;
            goto sgiouaqukyycswqm;
            iaoyeugekskmewgs:
            if (!$eqgoocgaqwqcimie instanceof Collection) {
                goto ygskksomysgaokek;
            }
            goto iokemmkgmcaksiqu;
            ocmagamuyawyiyka:
            if (!$aiowsaccomcoikus) {
                goto oycuaqewsskgkqci;
            }
            goto amqgiisymksuuuss;
            goswwiomuackymqi:
            $iswcokucwmiosiaq = ManipulateArray::get($ueeagokqmgisgauy, $aiowsaccomcoikus->mwikyscisascoeea());
            goto gykuaukukosiocoy;
            sgiouaqukyycswqm:
            kskqquqsegiiogek:
            goto gwkawguwsamuomuo;
            qowcwmsiyscackaa:
            kucqcgeesiccuuia:
            goto aqigiwmamkowomiw;
            wiaesksmicgikqcm:
            $eqgoocgaqwqcimie = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}\x5f\x6d\141\156\141\x67\x65\137\x65\x64\151\164\x5f\x66\x69\145\x6c\x64\x5f\166\141\154\165\x65"), $eqgoocgaqwqcimie, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus, $mksyucucyswaukig);
            goto mcucegiogmuyogki;
            mcucegiogmuyogki:
            $eqgoocgaqwqcimie = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}\x5f\155\x61\156\141\x67\145\x5f\145\144\151\164\x5f{$aiowsaccomcoikus->aakmagwggmkoiiyu()}\137\x76\x61\154\x75\145"), $eqgoocgaqwqcimie, $aiowsaccomcoikus, $mksyucucyswaukig);
            goto gqaimiooakyykccy;
            qesqgumuouyymcwa:
            akeoaicoieaiekcw:
            goto csyoimsqgwcmiwki;
            csyoimsqgwcmiwki:
        }
        goto weggeeowykuqooyg;
        aymmymequcisekie:
        if (!$aaeyeciuoqooykka) {
            goto uuuceqkseqkqawko;
        }
        goto gyeayeuuyiemuwuq;
        yyamycyesguwueuw:
        $ueeagokqmgisgauy = ManipulateServer::aukgyiaewiccooqw(self::COOKIE_ERRORS);
        goto aymmymequcisekie;
        ggwcauaeuagekeyo:
        $ikgwqyuyckaewsow = $meywaqqsugaoeyys->ugmceccgwaaaigiy();
        goto mmkoqmccusoeaoyi;
        weggeeowykuqooyg:
        yksamaucqkqsawkk:
        goto cqkuuyouqoqyguus;
        mmkoqmccusoeaoyi:
        $mksyucucyswaukig = $this->imgymusqgccqsqqq();
        goto waewaiuiogywqigu;
        aqmiewawgseaqeqk:
        ekoegocuqoycoeyq:
        goto gaceikykesgywssm;
        ggqwcqssoauckuic:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto ggwcauaeuagekeyo;
        sugumgeqcwgekcqs:
        if (!$ueeagokqmgisgauy) {
            goto ekoegocuqoycoeyq;
        }
        goto imeaiksowuukikui;
        kyggwyywiycksgqq:
        uuuceqkseqkqawko:
        goto sugumgeqcwgekcqs;
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
        qmgueimkwqmsakis:
        $oammesyieqmwuwyi = $meywaqqsugaoeyys->eukyqwmmeyakcyoo($mksyucucyswaukig, $meywaqqsugaoeyys->mgeouagciaesieae());
        goto ooqmaweuqmcmwsuk;
        csucwwqcsaymyiuk:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto iiuuwuwcwamqegey;
        kaiqsuaywyuckuoo:
        $myyqiummwqiokocc = __("\125\x70\144\141\x74\x65", PR__CMN__FOUNDATION);
        goto yuoamgkigcwaooqu;
        ymwyooosikgokiaa:
        $oammesyieqmwuwyi = [];
        goto qaiuogoowcoimwee;
        eqemcocqsyasqycq:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto ucecweoaoyeoyuue;
        ueaiskyiqcquiika:
        $ymqmyyeuycgmigyo = $this->oyeskqayoscwciem()->aakmagwggmkoiiyu();
        goto eqemcocqsyasqycq;
        osqgywagokmsicqe:
        $cwoayyawiauoeokk = '';
        goto qccmuwiwykuegoga;
        siuyaemoiiqyoggo:
        koggssokukoukkay:
        goto koemwyegoqwiikom;
        iiuuwuwcwamqegey:
        if (!(is_object($mksyucucyswaukig) && property_exists($mksyucucyswaukig, $ceiwsaacewygcsqg))) {
            goto gwoacimkeyymqccq;
        }
        goto qmgueimkwqmsakis;
        yuoamgkigcwaooqu:
        wiqigqgiegmacgsw:
        goto ymwyooosikgokiaa;
        cqugssuesycomqwa:
        if (!$this->oguuceugyqgsqewy()) {
            goto wiqigqgiegmacgsw;
        }
        goto kaiqsuaywyuckuoo;
        qaiuogoowcoimwee:
        $kqokimuosyuyyucg = 0;
        goto osqgywagokmsicqe;
        koemwyegoqwiikom:
        $myyqiummwqiokocc = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\x73\x63\162\x65\x65\156\x5f\x73\x75\142\155\151\x74\x5f\x6c\x61\142\x65\x6c"), $myyqiummwqiokocc, $mksyucucyswaukig, $meywaqqsugaoeyys, $this->oguuceugyqgsqewy());
        goto qycsooiomiugimqc;
        kuyqusuycscumuek:
        if (!($iwywmkygwewiamwm = $meywaqqsugaoeyys->cgccmsewskigcuig($kqokimuosyuyyucg))) {
            goto koggssokukoukkay;
        }
        goto cycwgukowsksmkyc;
        ucecweoaoyeoyuue:
        $myyqiummwqiokocc = __("\x41\x64\144", PR__CMN__FOUNDATION);
        goto cqugssuesycomqwa;
        cycwgukowsksmkyc:
        $cwoayyawiauoeokk = $meywaqqsugaoeyys->rkmkouiquumiecqy($iwywmkygwewiamwm);
        goto siuyaemoiiqyoggo;
        qycsooiomiugimqc:
        echo $this->iuygowkemiiwqmiw("\163\165\142\x6d\151\x74\x5f\x6d\x65\x74\x61\142\157\170", ["\155\x6f\x64\145\x6c" => $meywaqqsugaoeyys, "\151\164\145\155\163" => $oammesyieqmwuwyi, "\157\142\152\x65\143\x74" => $mksyucucyswaukig, "\x64\x65\x6c\x65\x74\151\x6f\x6e" => $cwoayyawiauoeokk, "\x73\x75\142\155\x69\x74\137\154\x61\x62\x65\x6c" => $myyqiummwqiokocc, "\151\163\137\x65\x64\151\164\x69\x6e\147" => $this->oguuceugyqgsqewy(), "\x68\x6f\x6f\153\137\160\162\145\146\151\170" => $this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\163\143\162\145\145\x6e\x5f\163\x75\142\x6d\151\x74\137\155\x65\x74\141\x5f\x62\157\170")]);
        goto qioswooukgoowsuc;
        uscissuaiyuiukea:
        gwoacimkeyymqccq:
        goto kuyqusuycscumuek;
        ooqmaweuqmcmwsuk:
        $kqokimuosyuyyucg = $mksyucucyswaukig->{$ceiwsaacewygcsqg};
        goto uscissuaiyuiukea;
        qioswooukgoowsuc:
    }
}
