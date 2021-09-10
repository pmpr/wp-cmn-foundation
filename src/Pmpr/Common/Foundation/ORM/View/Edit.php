<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
    const COOKIE_STORE = "\157\x72\x6d\x2d\146\151\145\x6c\144\x73\x2d\x73\164\157\x72\x65";
    const COOKIE_ERRORS = "\x6f\162\x6d\x2d\146\x69\145\x6c\x64\x73\x2d\x65\x72\x72\157\162\163";
    
    protected $message = false;
    
    protected bool $editing = false;
    public function amsuqecgqokqqaue()
    {
        goto ekoqieigyoeyauqa;
        wkiymcoqqiigqaaw:
        qwisiamkmkkwucyo:
        goto esqwswmoegiqcckg;
        mosuacsuaasssciu:
        setcookie(self::COOKIE_STORE, wp_json_encode($icwicymcioeyeyek));
        goto qksckewucmosemuo;
        oqwwacmigasucsoc:
        suqckoccuyeeymww:
        goto egkeqqgakieyimuq;
        ckwmkquuyyugigom:
        $igscmsiuisqaqwkk = $meywaqqsugaoeyys->yyykkcyiksewsoqy($aokagokqyuysuksm);
        goto cumeycwmuuqawwyu;
        wswikooyuaaouqgk:
        yksywwikmeksikqc:
        goto awwaiioyywmokwsm;
        cmmusgkieoqyymgs:
        yqcusaeysomccaok:
        goto mkgmaguyswskyioa;
        ismeikacqqyqcmqe:
        goto yiceawuuiusakwiq;
        goto qsokkkyoackoycie;
        kceuusiekagyeoys:
        goto qwisiamkmkkwucyo;
        goto uyeyscsaigimsqwq;
        kmooekeyemqgucci:
        if (!$ueeagokqmgisgauy) {
            goto yqcusaeysomccaok;
        }
        goto skuuyysooocugyww;
        uaicwcqwauosmsqm:
        giugwaeuwaomossq:
        goto gsqcoqqsioiyoykq;
        yggmaskeguaqkusc:
        if (!($aokagokqyuysuksm = (int) ManipulateServer::get($ceiwsaacewygcsqg))) {
            goto ousmyagwsiooumos;
        }
        goto ukwoswyyogmsygqg;
        gicuuwuuuwumyooa:
        $mksyucucyswaukig = ManipulateArray::get($sogksuscggsicmac, "\157\x62\x6a\x65\x63\164");
        goto kakkuyeccaacewyo;
        mkgmaguyswskyioa:
        goto masakmomqmeocqqg;
        goto skwusmoyomgqkimm;
        usyckeewsgwaysam:
        if ($aokagokqyuysuksm) {
            goto qeuyekusasqmcqms;
        }
        goto gicuuwuuuwumyooa;
        esqwswmoegiqcckg:
        $eumukgqciqgksuiq = sprintf($wamcomkuwysqgwgk, $this->oyeskqayoscwciem()->giiayuqckuiecosm());
        goto qmokwkocmcyeyesc;
        qcgyggiaowuqswuw:
        $iueymcwwscwqkiyq = self::SUCCESS;
        goto sooecucuakgkuyis;
        ggeoqeowscwkeumy:
        $icwicymcioeyeyek = ManipulateServer::ayueggmoqeeukqmq();
        goto qyeswawykmasuqye;
        uyeyscsaigimsqwq:
        sgocecweikecwwgq:
        goto mwieyyqamgwicgco;
        cysgqimowcqoqqsc:
        $wamcomkuwysqgwgk = __("\45\x73\x20\141\144\x64\145\144\40\163\165\143\143\145\x73\163\x66\165\154\154\171\56", PR__CMN__FOUNDATION);
        goto ismeikacqqyqcmqe;
        egkeqqgakieyimuq:
        if (!($iueymcwwscwqkiyq == self::SUCCESS)) {
            goto yksywwikmeksikqc;
        }
        goto cakuguiciaiaeukg;
        cuommomwmsackoqc:
        ManipulateArray::unset($aqmwamyiwgeeymqa, "\157\162\x6d\55\x73\141\166\x65");
        goto ggeoqeowscwkeumy;
        iaomqomgiwiegoca:
        acgqaeakoyasgkku:
        goto ysweqawmawicakeo;
        jsmisuccwyukksgc:
        ousmyagwsiooumos:
        goto kwmiwaecqcgiaqye;
        cuseccewekgcgkyg:
        mqgeseysuwcaqwiy:
        goto kgysyqkoqgwmoscq;
        goaowamiyyamueiw:
        $igscmsiuisqaqwkk = $meywaqqsugaoeyys->comogmawyoiquwis();
        goto iaomqomgiwiegoca;
        mwieyyqamgwicgco:
        $wamcomkuwysqgwgk = __("\45\x73\40\x63\157\x75\154\144\40\x6e\157\x74\40\x62\x65\40\x75\160\144\x61\x74\145\x64\56", PR__CMN__FOUNDATION);
        goto wkiymcoqqiigqaaw;
        uwaimsisescsgyqk:
        $iueymcwwscwqkiyq = self::FAILED;
        goto uqcsksaywyqeumig;
        yqicwmekwuoywyus:
        if ($sogksuscggsicmac[self::SUCCESS]) {
            goto iwkckkeimmeoquyq;
        }
        goto gkoaeuekqockuoiq;
        gsqcoqqsioiyoykq:
        if ($igscmsiuisqaqwkk) {
            goto acgqaeakoyasgkku;
        }
        goto goaowamiyyamueiw;
        ysweqawmawicakeo:
        wp_safe_redirect($igscmsiuisqaqwkk);
        goto owisckseoogsugqq;
        casgoamcqkekgeeo:
        $wamcomkuwysqgwgk = __("\x25\163\40\x75\x70\x64\141\164\145\144\40\163\x75\143\x63\145\163\163\146\165\x6c\x6c\x79\x2e", PR__CMN__FOUNDATION);
        goto yseyyukqaowwouua;
        ekakkiuuquqkccse:
        goto giugwaeuwaomossq;
        goto oqwwacmigasucsoc;
        owisckseoogsugqq:
        exit;
        goto ookcgumoacskyymy;
        kakkuyeccaacewyo:
        $aokagokqyuysuksm = ManipulateArray::get($mksyucucyswaukig, $meywaqqsugaoeyys->kumuygiiqswoyasy());
        goto cysgqimowcqoqqsc;
        qyeswawykmasuqye:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto uwaimsisescsgyqk;
        sooecucuakgkuyis:
        Notice::kigowwqauiumummw(sprintf($wamcomkuwysqgwgk, $this->oyeskqayoscwciem()->giiayuqckuiecosm()), "\157\x72\155\55\156\x6f\x74\151\143\145");
        goto ywqakqkmmcoceqka;
        skuuyysooocugyww:
        setcookie(self::COOKIE_ERRORS, wp_json_encode($ueeagokqmgisgauy));
        goto cmmusgkieoqyymgs;
        iqsgossweywksoia:
        goto ssagcgqaucssyego;
        goto awaqksikyomsuaeo;
        ekoqieigyoeyauqa:
        setcookie(self::COOKIE_STORE, '');
        goto cuwcsamuuqyuyqsu;
        mimacwyuueomgwwy:
        if (!isset($_POST["\157\x72\155\55\163\141\x76\145"])) {
            goto mqgeseysuwcaqwiy;
        }
        goto ksckqkmwiqggykke;
        igwkcikeyoowosoi:
        wp_die(__("\x53\x6f\x72\162\171\54\40\x79\x6f\165\40\141\162\x65\40\x6e\x6f\164\40\141\x6c\x6c\x6f\167\145\144\x20\164\157\40\145\144\151\x74\x20\151\x74\145\x6d\x73\x20\x6f\x66\x20\x74\150\151\163\40\164\x79\x70\145\x2e", PR__CMN__FOUNDATION));
        goto iqsgossweywksoia;
        ywqakqkmmcoceqka:
        masakmomqmeocqqg:
        goto kwsqgqmwyyeykgum;
        cakuguiciaiaeukg:
        $igscmsiuisqaqwkk = $meywaqqsugaoeyys->uesweuocqoywoyms($aokagokqyuysuksm);
        goto wswikooyuaaouqgk;
        awaqksikyomsuaeo:
        sycougcyeqmeiagk:
        goto cuommomwmsackoqc;
        qmokwkocmcyeyesc:
        Notice::eumukgqciqgksuiq($eumukgqciqgksuiq, "\157\162\155\x2d\x6e\x6f\164\151\x63\145");
        goto mosuacsuaasssciu;
        cumeycwmuuqawwyu:
        yoqsigmoyaaceqky:
        goto uaicwcqwauosmsqm;
        koukiyqaccegmquc:
        $igscmsiuisqaqwkk = $meywaqqsugaoeyys->acsiseaeysswwqkw();
        goto ekakkiuuquqkccse;
        qksckewucmosemuo:
        $ueeagokqmgisgauy = ManipulateArray::get($sogksuscggsicmac, "\145\162\162\157\162\x73", []);
        goto kmooekeyemqgucci;
        awwaiioyywmokwsm:
        if ($igscmsiuisqaqwkk) {
            goto yoqsigmoyaaceqky;
        }
        goto ckwmkquuyyugigom;
        yseyyukqaowwouua:
        yiceawuuiusakwiq:
        goto qcgyggiaowuqswuw;
        uqcsksaywyqeumig:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto yggmaskeguaqkusc;
        qsokkkyoackoycie:
        qeuyekusasqmcqms:
        goto casgoamcqkekgeeo;
        cuwcsamuuqyuyqsu:
        setcookie(self::COOKIE_ERRORS, '');
        goto mimacwyuueomgwwy;
        skwusmoyomgqkimm:
        iwkckkeimmeoquyq:
        goto usyckeewsgwaysam;
        emauuoieewwoeyqq:
        if ($aokagokqyuysuksm) {
            goto suqckoccuyeeymww;
        }
        goto koukiyqaccegmquc;
        gkoaeuekqockuoiq:
        if ($aokagokqyuysuksm) {
            goto sgocecweikecwwgq;
        }
        goto eekaiaeqewiqkkgm;
        kwmiwaecqcgiaqye:
        $sogksuscggsicmac = $meywaqqsugaoeyys->gscuuyuyauokoyuo($icwicymcioeyeyek);
        goto yqicwmekwuoywyus;
        ookcgumoacskyymy:
        ssagcgqaucssyego:
        goto cuseccewekgcgkyg;
        ukwoswyyogmsygqg:
        $icwicymcioeyeyek[$aokagokqyuysuksm] = $aokagokqyuysuksm;
        goto jsmisuccwyukksgc;
        ksckqkmwiqggykke:
        if ($this->oyeskqayoscwciem()->uwaascqoguwkwiaw()) {
            goto sycougcyeqmeiagk;
        }
        goto igwkcikeyoowosoi;
        eekaiaeqewiqkkgm:
        $wamcomkuwysqgwgk = __("\45\x73\x20\x63\157\x75\154\x64\40\156\157\164\x20\142\145\x20\x61\x64\144\x65\x64\x2e", PR__CMN__FOUNDATION);
        goto kceuusiekagyeoys;
        kwsqgqmwyyeykgum:
        $igscmsiuisqaqwkk = '';
        goto emauuoieewwoeyqq;
        kgysyqkoqgwmoscq:
    }
    public function render()
    {
        goto acesyuieuuqwgkwm;
        kkewoqqowugagwoy:
        oqwcmgwimeisusoe:
        goto wwswmaewcaisauei;
        asaowisseacciyia:
        $this->oemueqoooyaieeum();
        goto qiaaqkymeuuueoqk;
        ugswokwmkumcmigc:
        if ($this->oguuceugyqgsqewy()) {
            goto makomwwyomweyamm;
        }
        goto gwiaimosqoiquwkc;
        qumkwsqqocooyuoq:
        $meqocwsecsywiiqs = $this->mmqossqsksemasay("\x65\x64\x69\164\x5f\151\x74\145\155");
        goto gcskyqewysqaceeg;
        wwswmaewcaisauei:
        echo $this->iuygowkemiiwqmiw("\145\x64\x69\164", ["\x69\x64" => $this->mwikyscisascoeea(), "\x74\x69\x74\x6c\145" => $meqocwsecsywiiqs, "\x6e\141\x6d\x65" => $this->oyeskqayoscwciem()->aakmagwggmkoiiyu(), "\157\142\152\x65\143\x74" => $this->imgymusqgccqsqqq(), "\143\157\154\x75\155\x6e\163" => $this->yoqiwysegascakim(), "\141\x64\x64\137\165\162\x6c" => $qksucogmsqmawmwi, "\155\x65\x73\163\x61\x67\145" => $this->sagusgigmkeysock(), "\x61\144\144\137\x75\x72\154\137\164\x69\164\154\145" => $this->oyeskqayoscwciem()->uikgwcuascgeissw("\x61\x64\x64\137\156\x65\x77\137\x69\164\x65\x6d"), "\x70\162\151\155\x61\x72\x79\x5f\153\145\x79" => $this->mgogaykgkoogasim()->kumuygiiqswoyasy()]);
        goto wsemeeocquawyauo;
        gwiaimosqoiquwkc:
        $meqocwsecsywiiqs = $this->mmqossqsksemasay("\x61\144\x64\x5f\156\x65\x77\x5f\151\164\145\x6d");
        goto owgakkqgckqcegoi;
        gcskyqewysqaceeg:
        $qksucogmsqmawmwi = $this->mgogaykgkoogasim()->acsiseaeysswwqkw();
        goto kkewoqqowugagwoy;
        cigesysuauaiccms:
        makomwwyomweyamm:
        goto qumkwsqqocooyuoq;
        acesyuieuuqwgkwm:
        parent::render();
        goto asaowisseacciyia;
        qiaaqkymeuuueoqk:
        $qksucogmsqmawmwi = null;
        goto ugswokwmkumcmigc;
        owgakkqgckqcegoi:
        goto oqwcmgwimeisusoe;
        goto cigesysuauaiccms;
        wsemeeocquawyauo:
    }
    public function oemueqoooyaieeum()
    {
        goto wmaeicoyyciuaiuy;
        qqmmycmsoqegcqqw:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto isqwwmikecauwyuc;
        ukogwqiuuuakkawy:
        $this->cqscqicucmeamkyq("\141\x64\144\137\x6d\145\x74\x61\x5f\x62\x6f\x78\x65\x73", $ymqmyyeuycgmigyo, $this->imgymusqgccqsqqq())->cqscqicucmeamkyq("\141\x64\x64\x5f\x6d\145\x74\x61\x5f\142\157\x78\x65\x73\137{$ymqmyyeuycgmigyo}", $this->imgymusqgccqsqqq())->cqscqicucmeamkyq("\144\157\137\155\145\164\x61\x5f\142\157\x78\145\163", $ymqmyyeuycgmigyo, "\156\157\x72\x6d\141\x6c", $this->imgymusqgccqsqqq())->cqscqicucmeamkyq("\x64\x6f\137\x6d\x65\x74\x61\137\x62\x6f\x78\x65\x73", $ymqmyyeuycgmigyo, "\141\x64\166\141\156\x63\145\x64", $this->imgymusqgccqsqqq())->cqscqicucmeamkyq("\144\x6f\137\155\x65\164\x61\x5f\142\x6f\x78\x65\x73", $ymqmyyeuycgmigyo, "\x73\x69\144\x65", $this->imgymusqgccqsqqq());
        goto gicmaqmuscawegie;
        ooysmgyeqoiesgqm:
        if (!wp_is_mobile()) {
            goto ocgkwqqmgasuoies;
        }
        goto kwoyiysciqumswcy;
        wmaeicoyyciuaiuy:
        DecoratorAsset::imsomwwswyoquoqk("\x70\157\x73\x74");
        goto ooysmgyeqoiesgqm;
        aaogeemgkogagkai:
        ocgkwqqmgasuoies:
        goto qqmmycmsoqegcqqw;
        isqwwmikecauwyuc:
        $ymqmyyeuycgmigyo = $meywaqqsugaoeyys->miwqiiqeegeqcwis();
        goto oiiqqgyqmggyiums;
        magymcqykamwqigw:
        
        ManipulateTemplate::sikqggwmmykuiymy(["\143\x61\154\154\142\x61\143\x6b" => [$this, "\x69\165\x61\165\x63\165\157\157\153\147\x6f\x71\x69\x69\x69\x6f"], "\163\143\162\x65\x65\x6e" => $ymqmyyeuycgmigyo, "\x63\157\x6e\x74\x65\x78\x74" => "\156\x6f\162\155\141\154", self::ID => "\x6d\x61\x69\x6e\137\146\x69\145\154\144\x73", self::ICON => $meywaqqsugaoeyys->oyeskqayoscwciem()->qyyikeaseoskcacm(), self::TITLE => $this->oyeskqayoscwciem()->uikgwcuascgeissw($this->oguuceugyqgsqewy() ? "\x65\144\151\x74\x5f\151\164\x65\155" : "\x61\x64\144\x5f\156\145\x77\137\151\x74\x65\x6d"), self::PRIORITY => "\143\x6f\x72\145"]);
        goto ukogwqiuuuakkawy;
        oiiqqgyqmggyiums:
        
        ManipulateTemplate::sikqggwmmykuiymy(["\x63\x61\x6c\x6c\x62\141\143\153" => [$this, "\x6d\171\143\163\161\161\147\167\167\151\147\171\151\145\167\x6b"], "\x73\x63\x72\x65\145\156" => $ymqmyyeuycgmigyo, "\143\157\x6e\164\145\170\x74" => "\163\151\x64\x65", self::ID => "\163\x75\142\x6d\151\164\x64\x69\x76", self::ICON => IconFontawesomeInterface::ICON_FLOPPY_DISK, self::TITLE => __("\x53\x61\166\145\x20\x43\x68\141\x6e\147\x65\163", PR__CMN__FOUNDATION), self::PRIORITY => "\x63\157\162\145"]);
        goto magymcqykamwqigw;
        kwoyiysciqumswcy:
        DecoratorAsset::imsomwwswyoquoqk("\x6a\x71\165\x65\x72\171\x2d\164\157\x75\143\150\x2d\x70\x75\156\143\x68");
        goto aaogeemgkogagkai;
        gicmaqmuscawegie:
    }
    
    public function sagusgigmkeysock()
    {
        return $this->message;
    }
    public function mqyuagguukgcoeka()
    {
        goto ucksaiwquekagyqe;
        ucksaiwquekagyqe:
        parent::mqyuagguukgcoeka();
        goto iyeswoaqkaeggiiy;
        yimeskeioamqmuwg:
        wp_die(__("\123\x6f\162\162\x79\54\x20\x79\157\x75\x20\141\162\x65\x20\x6e\x6f\164\x20\141\x6c\154\157\167\145\x64\40\164\x6f\40\x65\x64\x69\164\x20\x74\150\151\x73\x20\x69\x74\145\x6d\56", PR__CMN__FOUNDATION));
        goto yeemsgmumygmumqw;
        wkaoyycsoeoyqcae:
        gygqgauaceiuawkq:
        goto cwugokqsmiomgmqg;
        jkgouewqysmscmqs:
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        goto sgiuwkisugmewmcs;
        iyeswoaqkaeggiiy:
        $this->amsuqecgqokqqaue();
        goto asqqqqakiagymemk;
        sgiuwkisugmewmcs:
        goto gygqgauaceiuawkq;
        goto kceeuicccqscwgsu;
        eacysqsegwcqawsa:
        
        if (DecoratorUser::scmcyesmmikkucie("\145\x64\x69\x74\137\151\164\145\x6d", $this->mwikyscisascoeea())) {
            goto oymyqcoekqyuiguq;
        }
        goto yimeskeioamqmuwg;
        asqqqqakiagymemk:
        if ($this->mwikyscisascoeea()) {
            goto ayamomygygmgwgkg;
        }
        goto jkgouewqysmscmqs;
        iquecygaakmiomeg:
        $this->editing = true;
        goto eacysqsegwcqawsa;
        kceeuicccqscwgsu:
        ayamomygygmgwgkg:
        goto iquecygaakmiomeg;
        yeemsgmumygmumqw:
        oymyqcoekqyuiguq:
        goto wkaoyycsoeoyqcae;
        cwugokqsmiomgmqg:
    }
    public function iuaucuookgoqiiio()
    {
        goto ggqwcqssoauckuic;
        kyggwyywiycksgqq:
        uuuceqkseqkqawko:
        goto sugumgeqcwgekcqs;
        gaceikykesgywssm:
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) {
            goto ocmagamuyawyiyka;
            agemeseegiuuowgo:
            if (!$ueeagokqmgisgauy) {
                goto ggyoywwggggekycs;
            }
            goto goswwiomuackymqi;
            gqaimiooakyykccy:
            iuysqgmmgqiywssm:
            goto agemeseegiuuowgo;
            mmmqqoemusicwgqg:
            goto kucqcgeesiccuuia;
            goto iquugwoswgkoiieg;
            okagauksoqkoqygi:
            ygskksomysgaokek:
            goto eciksmgaqikwegwq;
            imwiyqcekcykscui:
            if ($aiowsaccomcoikus instanceof Group) {
                goto becceuuwokgoaewy;
            }
            goto umemmgiwimkymaya;
            umemmgiwimkymaya:
            if ($aiowsaccomcoikus instanceof Checkbox) {
                goto wwcwmkowgooocaem;
            }
            goto omsmaougqkqigogw;
            wowmysuygugawmmu:
            ManipulateArray::unset($ikgwqyuyckaewsow, $uusmaiomayssaecw);
            goto mmmqqoemusicwgqg;
            uugwmywmaqomeksa:
            if ($wkkcmkuiigsukyik) {
                goto gkkwmqoacciwomqs;
            }
            goto wowmysuygugawmmu;
            amqgiisymksuuuss:
            if ($this->oguuceugyqgsqewy()) {
                goto kskqquqsegiiogek;
            }
            goto iwgmywqocewwgoeo;
            iquugwoswgkoiieg:
            gkkwmqoacciwomqs:
            goto xogaycsaesgqeqig;
            auaigccmwqwsqsku:
            aeaciamekuqyieys:
            goto wiaesksmicgikqcm;
            ucaoyoamaycsiacq:
            goto wyugqoowakyicyic;
            goto iuyagqakcieasiua;
            iokemmkgmcaksiqu:
            $eqgoocgaqwqcimie = array_fill(0, $eqgoocgaqwqcimie->count(), 0);
            goto okagauksoqkoqygi;
            guqmgiqaaowaauyo:
            $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $aiowsaccomcoikus->mwikyscisascoeea()) == "\61";
            goto mccimkgwkkamsime;
            qowcwmsiyscackaa:
            kucqcgeesiccuuia:
            goto aqigiwmamkowomiw;
            qweyymyuuqwcmkqg:
            wwcwmkowgooocaem:
            goto guqmgiqaaowaauyo;
            ggqeakyaggiuegek:
            ggyoywwggggekycs:
            goto usgcoawgqswoeiec;
            goswwiomuackymqi:
            $iswcokucwmiosiaq = ManipulateArray::get($ueeagokqmgisgauy, $aiowsaccomcoikus->mwikyscisascoeea());
            goto gykuaukukosiocoy;
            iuyagqakcieasiua:
            becceuuwokgoaewy:
            goto oasisywuwssumsok;
            ucasigqmoiwaimkk:
            mocaoayiouggauiy:
            goto uugwmywmaqomeksa;
            geasgywiogoeamek:
            goto qgkiguggkyiycwow;
            goto qweyymyuuqwcmkqg;
            camawumockccayaq:
            $aiowsaccomcoikus->msqsseeaasqysese($iswcokucwmiosiaq);
            goto uuisaeysawuagysg;
            wiaesksmicgikqcm:
            $eqgoocgaqwqcimie = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}\x5f\x6d\x61\156\x61\x67\x65\x5f\x65\x64\x69\164\137\x66\x69\x65\154\x64\137\x76\141\x6c\x75\145"), $eqgoocgaqwqcimie, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus, $mksyucucyswaukig);
            goto mcucegiogmuyogki;
            syiyemqigyugagks:
            goto iuysqgmmgqiywssm;
            goto woqkgwmkmqsuceuy;
            aqigiwmamkowomiw:
            oycuaqewsskgkqci:
            goto qesqgumuouyymcwa;
            qckouamqueqiykqi:
            if (!($aiowsaccomcoikus instanceof File && is_numeric($eqgoocgaqwqcimie))) {
                goto aeaciamekuqyieys;
            }
            goto measoqewessauqma;
            gsiaskgsukseumig:
            $eqgoocgaqwqcimie = ManipulateArray::get($aaeyeciuoqooykka, $aiowsaccomcoikus->mwikyscisascoeea());
            goto syiyemqigyugagks;
            woqkgwmkmqsuceuy:
            ugiqiewymimqecsu:
            goto imwiyqcekcykscui;
            mccimkgwkkamsime:
            qgkiguggkyiycwow:
            goto ucaoyoamaycsiacq;
            xogaycsaesgqeqig:
            if ($this->oguuceugyqgsqewy()) {
                goto ugiqiewymimqecsu;
            }
            goto gsiaskgsukseumig;
            iaoyeugekskmewgs:
            if (!$eqgoocgaqwqcimie instanceof Collection) {
                goto ygskksomysgaokek;
            }
            goto iokemmkgmcaksiqu;
            sgiouaqukyycswqm:
            kskqquqsegiiogek:
            goto gwkawguwsamuomuo;
            uuisaeysawuagysg:
            weouocwmwicayyiy:
            goto ggqeakyaggiuegek;
            kieyoaoawqacqamy:
            wyugqoowakyicyic:
            goto qckouamqueqiykqi;
            omsmaougqkqigogw:
            $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $aiowsaccomcoikus->mwikyscisascoeea());
            goto geasgywiogoeamek;
            measoqewessauqma:
            $eqgoocgaqwqcimie = ManipulateAttachment::mgaeeqsgeoukeokc($eqgoocgaqwqcimie);
            goto auaigccmwqwsqsku;
            gykuaukukosiocoy:
            if (!$iswcokucwmiosiaq) {
                goto weouocwmwicayyiy;
            }
            goto camawumockccayaq;
            gwkawguwsamuomuo:
            $wkkcmkuiigsukyik = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}\x5f\155\141\156\x61\x67\145\137\x65\x64\151\164\137\146\151\x65\x6c\x64\x5f\x73\x68\157\x77"), true, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus, $mksyucucyswaukig);
            goto ucasigqmoiwaimkk;
            eciksmgaqikwegwq:
            $aiowsaccomcoikus->mkksewyosgeumwsa(MetaBox::cwiuiiakukcsaakw($meywaqqsugaoeyys->kumuygiiqswoyasy()));
            goto kieyoaoawqacqamy;
            ocmagamuyawyiyka:
            if (!$aiowsaccomcoikus) {
                goto oycuaqewsskgkqci;
            }
            goto amqgiisymksuuuss;
            mcucegiogmuyogki:
            $eqgoocgaqwqcimie = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}\x5f\155\x61\x6e\141\x67\x65\x5f\x65\144\151\x74\x5f{$aiowsaccomcoikus->aakmagwggmkoiiyu()}\137\x76\141\x6c\x75\x65"), $eqgoocgaqwqcimie, $aiowsaccomcoikus, $mksyucucyswaukig);
            goto gqaimiooakyykccy;
            qesqgumuouyymcwa:
            akeoaicoieaiekcw:
            goto csyoimsqgwcmiwki;
            iwgmywqocewwgoeo:
            $wkkcmkuiigsukyik = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}\x5f\x6d\x61\x6e\x61\147\x65\x5f\x61\x64\x64\x5f\146\x69\x65\x6c\x64\137\163\x68\x6f\x77"), true, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus);
            goto syoeqaqkseguwmgy;
            usgcoawgqswoeiec:
            $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie);
            goto qowcwmsiyscackaa;
            oasisywuwssumsok:
            $eqgoocgaqwqcimie = $mksyucucyswaukig->{$aiowsaccomcoikus->mwikyscisascoeea()};
            goto iaoyeugekskmewgs;
            syoeqaqkseguwmgy:
            goto mocaoayiouggauiy;
            goto sgiouaqukyycswqm;
            csyoimsqgwcmiwki:
        }
        goto weggeeowykuqooyg;
        aymmymequcisekie:
        if (!$aaeyeciuoqooykka) {
            goto uuuceqkseqkqawko;
        }
        goto gyeayeuuyiemuwuq;
        ggwcauaeuagekeyo:
        $ikgwqyuyckaewsow = $meywaqqsugaoeyys->ugmceccgwaaaigiy();
        goto mmkoqmccusoeaoyi;
        gyeayeuuyiemuwuq:
        $aaeyeciuoqooykka = json_decode(wp_unslash($aaeyeciuoqooykka), true);
        goto kyggwyywiycksgqq;
        yyamycyesguwueuw:
        $ueeagokqmgisgauy = ManipulateServer::aukgyiaewiccooqw(self::COOKIE_ERRORS);
        goto aymmymequcisekie;
        imeaiksowuukikui:
        $ueeagokqmgisgauy = json_decode(wp_unslash($ueeagokqmgisgauy), true);
        goto aqmiewawgseaqeqk;
        ggqwcqssoauckuic:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto ggwcauaeuagekeyo;
        cqkuuyouqoqyguus:
        MetaBox::iuaucuookgoqiiio($ikgwqyuyckaewsow, ["\x65\x63\150\x6f" => true, "\x63\154\x61\x73\x73\x65\163" => "\157\162\x6d\55\145\144\x69\164\x2d\x66\157\162\x6d"]);
        goto ssmgmiuqoeiuacsa;
        sugumgeqcwgekcqs:
        if (!$ueeagokqmgisgauy) {
            goto ekoegocuqoycoeyq;
        }
        goto imeaiksowuukikui;
        mmkoqmccusoeaoyi:
        $mksyucucyswaukig = $this->imgymusqgccqsqqq();
        goto waewaiuiogywqigu;
        aqmiewawgseaqeqk:
        ekoegocuqoycoeyq:
        goto gaceikykesgywssm;
        waewaiuiogywqigu:
        $aaeyeciuoqooykka = ManipulateServer::aukgyiaewiccooqw(self::COOKIE_STORE);
        goto yyamycyesguwueuw;
        weggeeowykuqooyg:
        yksamaucqkqsawkk:
        goto cqkuuyouqoqyguus;
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
        cycwgukowsksmkyc:
        $cwoayyawiauoeokk = $meywaqqsugaoeyys->rkmkouiquumiecqy($iwywmkygwewiamwm);
        goto siuyaemoiiqyoggo;
        qmgueimkwqmsakis:
        $oammesyieqmwuwyi = $meywaqqsugaoeyys->eukyqwmmeyakcyoo($mksyucucyswaukig, $meywaqqsugaoeyys->mgeouagciaesieae());
        goto ooqmaweuqmcmwsuk;
        qccmuwiwykuegoga:
        $mksyucucyswaukig = $this->imgymusqgccqsqqq();
        goto csucwwqcsaymyiuk;
        yuoamgkigcwaooqu:
        wiqigqgiegmacgsw:
        goto ymwyooosikgokiaa;
        kaiqsuaywyuckuoo:
        $myyqiummwqiokocc = __("\x55\160\144\x61\x74\x65", PR__CMN__FOUNDATION);
        goto yuoamgkigcwaooqu;
        cqugssuesycomqwa:
        if (!$this->oguuceugyqgsqewy()) {
            goto wiqigqgiegmacgsw;
        }
        goto kaiqsuaywyuckuoo;
        ymwyooosikgokiaa:
        $oammesyieqmwuwyi = [];
        goto qaiuogoowcoimwee;
        kuyqusuycscumuek:
        if (!($iwywmkygwewiamwm = $meywaqqsugaoeyys->cgccmsewskigcuig($kqokimuosyuyyucg))) {
            goto koggssokukoukkay;
        }
        goto cycwgukowsksmkyc;
        qaiuogoowcoimwee:
        $kqokimuosyuyyucg = 0;
        goto osqgywagokmsicqe;
        osqgywagokmsicqe:
        $cwoayyawiauoeokk = '';
        goto qccmuwiwykuegoga;
        csucwwqcsaymyiuk:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto iiuuwuwcwamqegey;
        ooqmaweuqmcmwsuk:
        $kqokimuosyuyyucg = $mksyucucyswaukig->{$ceiwsaacewygcsqg};
        goto uscissuaiyuiukea;
        ucecweoaoyeoyuue:
        $myyqiummwqiokocc = __("\101\x64\x64", PR__CMN__FOUNDATION);
        goto cqugssuesycomqwa;
        koemwyegoqwiikom:
        $myyqiummwqiokocc = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\x73\x63\162\145\x65\x6e\137\x73\165\x62\155\x69\x74\137\154\x61\x62\145\x6c"), $myyqiummwqiokocc, $mksyucucyswaukig, $meywaqqsugaoeyys, $this->oguuceugyqgsqewy());
        goto qycsooiomiugimqc;
        eqemcocqsyasqycq:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto ucecweoaoyeoyuue;
        ueaiskyiqcquiika:
        $ymqmyyeuycgmigyo = $this->oyeskqayoscwciem()->aakmagwggmkoiiyu();
        goto eqemcocqsyasqycq;
        siuyaemoiiqyoggo:
        koggssokukoukkay:
        goto koemwyegoqwiikom;
        qycsooiomiugimqc:
        echo $this->iuygowkemiiwqmiw("\163\x75\x62\155\x69\164\137\155\145\164\141\142\x6f\170", ["\155\x6f\x64\x65\x6c" => $meywaqqsugaoeyys, "\x69\164\x65\x6d\x73" => $oammesyieqmwuwyi, "\157\x62\152\145\x63\x74" => $mksyucucyswaukig, "\x64\145\x6c\x65\x74\151\x6f\156" => $cwoayyawiauoeokk, "\163\x75\142\155\x69\x74\x5f\x6c\141\142\145\x6c" => $myyqiummwqiokocc, "\151\163\137\145\144\151\164\151\x6e\x67" => $this->oguuceugyqgsqewy(), "\150\157\157\x6b\137\160\x72\x65\x66\x69\170" => $this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\163\x63\162\x65\x65\x6e\137\x73\165\x62\x6d\151\164\x5f\x6d\x65\164\x61\137\142\157\x78")]);
        goto qioswooukgoowsuc;
        uscissuaiyuiukea:
        gwoacimkeyymqccq:
        goto kuyqusuycscumuek;
        qioswooukgoowsuc:
    }
}
