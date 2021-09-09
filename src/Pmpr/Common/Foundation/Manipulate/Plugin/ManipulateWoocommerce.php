<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Plugin;

use Pmpr\Common\Foundation\Decorator\DecoratorHook;
use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\Decorator\DecoratorSanitize;
use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce;
use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy;
use Pmpr\Common\Foundation\Manipulate\Manipulate;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateUser;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use WC_Cart;
use WC_Checkout;
use WC_Coupon;
use WC_Product_Variable;
use WooCommerce;

class ManipulateWoocommerce extends Manipulate
{
    
    public static function kuoewkkoaoyaagmi(array $isweyuoisomqyaag) : array
    {
        goto ysawesawywsauwoi;
        eemcaiwmeswmukso:
        foreach ($isweyuoisomqyaag as $ymqmyyeuycgmigyo => $igqsaukqcqscimok) {
            goto ggiqkimkqqwskeoa;
            ggiqkimkqqwskeoa:
            $kesssewsiegssiya = ManipulateArray::get($seyqqsmuaiegkeeq, ManipulateString::wiecmkiugmyyqiqc("\160\141\137", '', $ymqmyyeuycgmigyo));
            goto awmcioiwswckueis;
            gsgkgikagiuqeoie:
            ioouuggmywygqauo:
            goto ogqeqywosyqyaigy;
            awmcioiwswckueis:
            if (!$kesssewsiegssiya) {
                goto oiyywaikucqwquie;
            }
            goto auqkowcaacmmoqqk;
            skyosyooeugyimmm:
            oiyywaikucqwquie:
            goto gsgkgikagiuqeoie;
            auqkowcaacmmoqqk:
            $sogksuscggsicmac[$ymqmyyeuycgmigyo] = ["\141\x74\164\x72\151\x62\x75\x74\145" => $kesssewsiegssiya, "\164\x65\162\155" => []];
            goto skyosyooeugyimmm;
            ogqeqywosyqyaigy:
        }
        goto gasqiyouygwogiku;
        mogmqciagcakuqkw:
        return $sogksuscggsicmac;
        goto kimswwmiyciiwsuk;
        ysawesawywsauwoi:
        $sogksuscggsicmac = [];
        goto eeyueqsugiwsyiig;
        eeyueqsugiwsyiig:
        $seyqqsmuaiegkeeq = DecoratorWoocommerce::mqsqiyqiceqasokq();
        goto eemcaiwmeswmukso;
        gasqiyouygwogiku:
        wykwsyuewigykqeg:
        goto mogmqciagcakuqkw;
        kimswwmiyciiwsuk:
    }
    
    public static function kyycwccmaemgokwu($smwiiesyqsgyisos) : string
    {
        goto scumgsosuakacmee;
        scumgsosuakacmee:
        if ($smwiiesyqsgyisos instanceof WC_Coupon) {
            goto acaowkgayugqqgmk;
        }
        goto gaqqyqieyeoccskc;
        yyqqwsawsocusuqc:
        
        return $smwiiesyqsgyisos->get_code();
        goto ceaccikuogcywkaw;
        gaqqyqieyeoccskc:
        $smwiiesyqsgyisos = new WC_Coupon($smwiiesyqsgyisos);
        goto msmewamakoiksqok;
        msmewamakoiksqok:
        acaowkgayugqqgmk:
        goto yyqqwsawsocusuqc;
        ceaccikuogcywkaw:
    }
    
    public static function oeeuywgiaywkimek($smwiiesyqsgyisos)
    {
        goto awckqcsumswoggcm;
        wscymqowwagkecqk:
        $smwiiesyqsgyisos = false;
        goto eeowmomscuckuoum;
        kiwsaeeagagkwooc:
        if (self::kyycwccmaemgokwu($smwiiesyqsgyisos)) {
            goto uywmokmuiikigyso;
        }
        goto wscymqowwagkecqk;
        awckqcsumswoggcm:
        $smwiiesyqsgyisos = new WC_Coupon($smwiiesyqsgyisos);
        goto kiwsaeeagagkwooc;
        auksmaiaiccmekam:
        return $smwiiesyqsgyisos;
        goto wquwyumimoaeeqkm;
        eeowmomscuckuoum:
        uywmokmuiikigyso:
        goto auksmaiaiccmekam;
        wquwyumimoaeeqkm:
    }
    
    public static function cuwomiomuqqkayoo($ioakeqoosmkukeaa)
    {
        goto cocuwykyogwqksuc;
        wscmeosuswieugqc:
        yqcumeywukecmiey:
        goto qmawiqqoigwiwyqs;
        qgosqkumckekweig:
        
        $wwcysoksoogyacog->add_discount($ioakeqoosmkukeaa);
        goto wscmeosuswieugqc;
        ecogskgckaqscygu:
        if (!$wwcysoksoogyacog) {
            goto yqcumeywukecmiey;
        }
        goto qgosqkumckekweig;
        cocuwykyogwqksuc:
        $wwcysoksoogyacog = ManipulateWoocommerce::uceecgsoicggikeu();
        goto ecogskgckaqscygu;
        qmawiqqoigwiwyqs:
    }
    
    public static function mmmcswscsiecscwg($umwqusowiqmyseom)
    {
        goto guousgemwcuecmqe;
        owkcoawgimcoyima:
        ugoeugewuucscmio:
        goto gwiyiyawcwasesgc;
        guousgemwcuecmqe:
        if (is_a($umwqusowiqmyseom, "\127\x43\x5f\117\162\x64\145\162")) {
            goto ugoeugewuucscmio;
        }
        goto yccqiqeuguggucem;
        gwiyiyawcwasesgc:
        return $umwqusowiqmyseom;
        goto igiygcsmsmsaaqkq;
        yccqiqeuguggucem:
        $umwqusowiqmyseom = DecoratorWoocommerce::mmmcswscsiecscwg($umwqusowiqmyseom);
        goto owkcoawgimcoyima;
        igiygcsmsmsaaqkq:
    }
    
    public static function wcqicmcuiewessgy($umwqusowiqmyseom) : string
    {
        goto ecgwamoiwysakygg;
        ygewgysgwcacuimc:
        $iueymcwwscwqkiyq = '';
        goto mgeemmasukoaoska;
        mgeemmasukoaoska:
        if (!$umwqusowiqmyseom) {
            goto kgocgogqyicccqek;
        }
        goto koskggyaeiiwqisa;
        ywskmwikageumkig:
        kgocgogqyicccqek:
        goto cosusaqikwmmwwyy;
        ecgwamoiwysakygg:
        $umwqusowiqmyseom = self::mmmcswscsiecscwg($umwqusowiqmyseom);
        goto ygewgysgwcacuimc;
        koskggyaeiiwqisa:
        $iueymcwwscwqkiyq = DecoratorWoocommerce::ueqkgikommgyqmoa($umwqusowiqmyseom->get_status());
        goto ywskmwikageumkig;
        cosusaqikwmmwwyy:
        return $iueymcwwscwqkiyq;
        goto ucycmawyuaaewmuq;
        ucycmawyuaaewmuq:
    }
    
    public static function susisykioakswkmm($umwqusowiqmyseom) : string
    {
        goto icyywimceiaqcaki;
        awkycquykaigeoms:
        eamksmamqqemuuwm:
        goto oioygkocoumymyqa;
        oeooskowyaoiesig:
        $qsegigkmaaskiaeo = ucwords($mkucggyaiaukqoce->display_name);
        goto awkycquykaigeoms;
        oioygkocoumymyqa:
        cioueaakwyaagseq:
        goto makoqausqoiwyouc;
        fawmeqyyqawqmqsy:
        if ($umwqusowiqmyseom->get_billing_first_name() || $umwqusowiqmyseom->get_billing_last_name()) {
            goto kywacsgsquqwkmee;
        }
        goto iyyekyusuukgcgmg;
        kmqiucuioimqwmcs:
        $umwqusowiqmyseom = self::mmmcswscsiecscwg($umwqusowiqmyseom);
        goto agyowuuawgseioyo;
        agyowuuawgseioyo:
        if (!$umwqusowiqmyseom) {
            goto uqwuggsqqsykmecm;
        }
        goto fawmeqyyqawqmqsy;
        kmayiocekggkoyso:
        ycwegycyuuciuuuc:
        goto ayccewcmckaqowek;
        icyywimceiaqcaki:
        $qsegigkmaaskiaeo = '';
        goto kmqiucuioimqwmcs;
        gaoycoykycqicwaq:
        $mkucggyaiaukqoce = ManipulateUser::get($umwqusowiqmyseom->get_customer_id(), true);
        goto eoieikyaiucwwwas;
        aaoywwqcimiwiywu:
        return $qsegigkmaaskiaeo;
        goto oeguggskkegamuoo;
        iyyekyusuukgcgmg:
        if ($umwqusowiqmyseom->get_billing_company()) {
            goto ywuqayooawsuwyos;
        }
        goto yeeaasukmegoociq;
        makoqausqoiwyouc:
        goto waiqucggoasiqici;
        goto ocgyqmccaskoieei;
        skgguaeyousyogee:
        $qsegigkmaaskiaeo = trim($umwqusowiqmyseom->get_billing_company());
        goto gqqmmososkagcqco;
        wuogwyququiiecaa:
        kywacsgsquqwkmee:
        goto scqwymaqqacaugqa;
        yeeaasukmegoociq:
        if (!$umwqusowiqmyseom->get_customer_id()) {
            goto cioueaakwyaagseq;
        }
        goto gaoycoykycqicwaq;
        asoqwsaqqyuoioac:
        goto ycwegycyuuciuuuc;
        goto wuogwyququiiecaa;
        scqwymaqqacaugqa:
        $qsegigkmaaskiaeo = trim(sprintf("\x25\163\40\45\163", $umwqusowiqmyseom->get_billing_first_name(), $umwqusowiqmyseom->get_billing_last_name()));
        goto kmayiocekggkoyso;
        ayccewcmckaqowek:
        uqwuggsqqsykmecm:
        goto aaoywwqcimiwiywu;
        ocgyqmccaskoieei:
        ywuqayooawsuwyos:
        goto skgguaeyousyogee;
        eoieikyaiucwwwas:
        if (!$mkucggyaiaukqoce) {
            goto eamksmamqqemuuwm;
        }
        goto oeooskowyaoiesig;
        gqqmmososkagcqco:
        waiqucggoasiqici:
        goto asoqwsaqqyuoioac;
        oeguggskkegamuoo:
    }
    
    public static function ogequuuycswsseas($ywmkwiwkosakssii = []) : array
    {
        return DecoratorWoocommerce::ogequuuycswsseas($ywmkwiwkosakssii);
    }
    
    public static function icsokmyykmuweoco($suaemuyiacqyugsm, $post = null) : bool
    {
        return DecoratorWoocommerce::imsiwqgqaeceoomu($suaemuyiacqyugsm) == ManipulatePost::mwikyscisascoeea($post);
    }
    public static function uauicwgqqogawesc()
    {
        goto eiqiqqoyqcaiiwqo;
        eiqiqqoyqcaiiwqo:
        if (function_exists("\167\x63\x5f\145\x6d\160\164\x79\x5f\143\x61\162\164")) {
            goto cemsuwwwgiqiyigo;
        }
        goto amescycuaoumygqc;
        ksgumesawyqswaoa:
        cemsuwwwgiqiyigo:
        goto ieycaaisagswkaiy;
        qeoawooaykmyokuo:
        $wwcysoksoogyacog->empty_cart();
        goto okyqqamccagawuoi;
        ieycaaisagswkaiy:
        wc_empty_cart();
        goto emyeissowqweyqec;
        iwecwgwiccuemkye:
        if (!$wwcysoksoogyacog) {
            goto uimyekysswywuoyi;
        }
        goto qeoawooaykmyokuo;
        agiieggoecqiaoum:
        goto owymcaeysicqacya;
        goto ksgumesawyqswaoa;
        amescycuaoumygqc:
        $wwcysoksoogyacog = self::uceecgsoicggikeu();
        goto iwecwgwiccuemkye;
        okyqqamccagawuoi:
        uimyekysswywuoyi:
        goto agiieggoecqiaoum;
        emyeissowqweyqec:
        owymcaeysicqacya:
        goto ueekmmegamoyagog;
        ueekmmegamoyagog:
    }
    
    public static function uakuwyoiooeqqiow() : array
    {
        goto gogyuwukcgmycsqw;
        mgscesskeauowgsu:
        $ygwoqcwsaggqoamw = [];
        goto kyowegyokkesuugi;
        kyowegyokkesuugi:
        if (!$wwcysoksoogyacog) {
            goto qeayouqugioyieei;
        }
        goto qyyiiuuscqgeowya;
        uowaoiwemyccakim:
        qeayouqugioyieei:
        goto gukkaswwecmuoayo;
        gukkaswwecmuoayo:
        return $ygwoqcwsaggqoamw;
        goto sccoieksocaiaogm;
        qyyiiuuscqgeowya:
        $ygwoqcwsaggqoamw = $wwcysoksoogyacog->get_cart_contents();
        goto uowaoiwemyccakim;
        gogyuwukcgmycsqw:
        $wwcysoksoogyacog = self::uceecgsoicggikeu();
        goto mgscesskeauowgsu;
        sccoieksocaiaogm:
    }
    
    public static function geoemsmuouqcqmei() : ?string
    {
        goto yasegwakoscmkouu;
        masgkciqasaucoss:
        gskmiyeoisqoqkci:
        goto eogaamwmasgugqgy;
        aqyqqgkiycokskwq:
        goto iaqiocmqqiaeuwyg;
        goto masgkciqasaucoss;
        eogaamwmasgugqgy:
        return wc_get_cart_url();
        goto weyoiomaeciyggug;
        gkuyqiyuaquuyaay:
        return $woocommerce->cart->get_cart_url();
        goto aqyqqgkiycokskwq;
        osamqwsmcawigggw:
        if (function_exists("\167\x63\x5f\x67\x65\x74\x5f\143\141\162\164\137\165\x72\154")) {
            goto gskmiyeoisqoqkci;
        }
        goto gkuyqiyuaquuyaay;
        weyoiomaeciyggug:
        iaqiocmqqiaeuwyg:
        goto oockcigwicccqyko;
        yasegwakoscmkouu:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto osamqwsmcawigggw;
        oockcigwicccqyko:
    }
    
    public static function ayseokmqycoqaigc() : bool
    {
        return class_exists("\x77\157\x6f\143\157\x6d\155\145\162\x63\145") && ManipulatePlugin::ggocakcisguuokai("\x77\157\157\143\157\155\x6d\x65\162\x63\x65\57\167\157\157\x63\157\155\x6d\145\162\143\x65\56\x70\x68\160");
    }
    
    public static function uiskcesaqyyewwsa() : bool
    {
        return DecoratorWoocommerce::wayckuoqggqsuiys() || self::gmowuaggkmgkseyo();
    }
    
    public static function gyewmgoywgqycmck() : bool
    {
        return DecoratorWoocommerce::kmymkocwcawgeccm() && !self::yaaucgakecuykawk() && !self::ogkieiokqueakmyc();
    }
    
    public static function kcwiwskyggmcimie($umwqusowiqmyseom) : ?int
    {
        goto kaaasaqewwykmikk;
        umeemqiuewswymkw:
        $aokagokqyuysuksm = $umwqusowiqmyseom->get_id();
        goto qweqcmkkiqkkukis;
        qweqcmkkiqkkukis:
        eaqsewgiawoasqgu:
        goto qgkmsokwcmmawiey;
        qgkmsokwcmmawiey:
        return $aokagokqyuysuksm;
        goto ugiuoawueimimiwk;
        cmawmeioiuegssuw:
        if (!is_a($umwqusowiqmyseom, "\x57\103\x5f\117\x72\144\145\162")) {
            goto eaqsewgiawoasqgu;
        }
        goto umeemqiuewswymkw;
        kaaasaqewwykmikk:
        $aokagokqyuysuksm = $umwqusowiqmyseom;
        goto cmawmeioiuegssuw;
        ugiuoawueimimiwk:
    }
    
    public static function aqasygcsqysmmyke($product = null)
    {
        goto ukcyuqaycogiiiye;
        iwekcauymcaoooie:
        return $product;
        goto mmksuuciiyoyaaoa;
        oiseukwsseayeamo:
        $product = DecoratorWoocommerce::aqasygcsqysmmyke($product);
        goto awcwocukswgsaymk;
        ukcyuqaycogiiiye:
        if (is_a($product, "\x57\x43\137\x50\162\157\144\165\143\164")) {
            goto aouoeqamkuemyeqa;
        }
        goto oiseukwsseayeamo;
        awcwocukswgsaymk:
        aouoeqamkuemyeqa:
        goto iwekcauymcaoooie;
        mmksuuciiyoyaaoa:
    }
    
    public static function mkiigkeqaeiwqyua() : bool
    {
        return in_array(DecoratorWoocommerce::useawgqusasoukqm(), ["\x49\122\x54", "\111\x52\x52"]);
    }
    
    public static function eywqaumgkccycyau($aokagokqyuysuksm, $ywmkwiwkosakssii = [])
    {
        goto koyyawuukocokcme;
        ioeaawqkkakemsum:
        foreach ($wkyuegumgeqqqmyg as $aiowsaccomcoikus) {
            goto nacqwwcyskisiqmi;
            nacqwwcyskisiqmi:
            if (!isset($ywmkwiwkosakssii[$aiowsaccomcoikus])) {
                goto kcyccscigsuuiomi;
            }
            goto aowgayqaooygayky;
            aowgayqaooygayky:
            $ywmkwiwkosakssii[$aiowsaccomcoikus] = DecoratorSanitize::aoeoykwemwaqsikc($ywmkwiwkosakssii[$aiowsaccomcoikus]);
            goto quweyqomsoqcwmae;
            quweyqomsoqcwmae:
            kcyccscigsuuiomi:
            goto saeeegogmqsyimqk;
            saeeegogmqsyimqk:
            seiyywsmwamccscw:
            goto qkkcekocsgakoqqo;
            qkkcekocsgakoqqo:
        }
        goto gyqecessamsiywea;
        koyyawuukocokcme:
        $ywmkwiwkosakssii[self::ID] = $aokagokqyuysuksm;
        goto aeusyyagoyskceiy;
        gyqecessamsiywea:
        oowymeqscqicmiac:
        goto cywckaugcygcssie;
        aeusyyagoyskceiy:
        $wkyuegumgeqqqmyg = [];
        goto ioeaawqkkakemsum;
        cywckaugcygcssie:
        DecoratorWoocommerce::eywqaumgkccycyau($ywmkwiwkosakssii);
        goto ascyoecaiyskamoo;
        ascyoecaiyskamoo:
    }
    
    public static function oseiymowmquqkaca() : bool
    {
        global $woocommerce_loop;
        return DecoratorWoocommerce::kmymkocwcawgeccm() && isset($woocommerce_loop["\x6e\x61\155\x65"]) && in_array($woocommerce_loop["\156\x61\x6d\x65"], ["\162\145\x6c\141\x74\x65\x64", "\x75\160\x20\55\x20\x73\x65\154\154\163"]);
    }
    
    public static function kyckwuuiqwmyoqma() : ?\WC_Query
    {
        goto mukmccquscqkeeuy;
        egkiyyuywuiekisw:
        if (!$woocommerce) {
            goto wsemcaiucsysuqiq;
        }
        goto cookqcosymocwyqg;
        icuauuecukomyoss:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto egkiyyuywuiekisw;
        cookqcosymocwyqg:
        $gqgemcmoicmgaqie = $woocommerce->query;
        goto kaacgcseugewuceu;
        mukmccquscqkeeuy:
        $gqgemcmoicmgaqie = null;
        goto icuauuecukomyoss;
        kaacgcseugewuceu:
        wsemcaiucsysuqiq:
        goto ueioekeyeekmugss;
        ueioekeyeekmugss:
        return $gqgemcmoicmgaqie;
        goto smwwcycswiyuqouu;
        smwwcycswiyuqouu:
    }
    
    public static function kkewuuisyiscmgyc() : WooCommerce
    {
        goto gkecqaygqygkkgwc;
        uuwiiwywmwyoymgi:
        return $mksyucucyswaukig;
        goto oqiowcuqsqwyukgi;
        xoyesscyiuyyoaao:
        $mksyucucyswaukig = $woocommerce;
        goto kkeeggmwkmuwswca;
        muwyoumcckugweeg:
        $mksyucucyswaukig = WC();
        goto agimkskeiiemakqe;
        agimkskeiiemakqe:
        yaqamykgsuagaksc:
        goto uuwiiwywmwyoymgi;
        ymmwikogcaccsgyo:
        global $woocommerce;
        goto xoyesscyiuyyoaao;
        gkecqaygqygkkgwc:
        if (function_exists("\x57\x43")) {
            goto isgekmewmqgmwiky;
        }
        goto ymmwikogcaccsgyo;
        sgsmiecuouaseyeu:
        isgekmewmqgmwiky:
        goto muwyoumcckugweeg;
        kkeeggmwkmuwswca:
        goto yaqamykgsuagaksc;
        goto sgsmiecuouaseyeu;
        oqiowcuqsqwyukgi:
    }
    
    public static function scgumisucgwskyqk($product, $mgkceomocowocqyo = "\x76\151\x65\167") : string
    {
        goto ocmsggeccyugikwu;
        cgyaokocoymsqakq:
        return $aumscagymwyyicag;
        goto qiycageymgowgicg;
        uyscswaymikycueg:
        $eyuymeqcioasuyyi = $product->regular_price;
        goto qiaowqciwwyiucae;
        aaqoyoyiagqcguse:
        kmeesswcuaququqw:
        goto iamqccceoygiywgo;
        cmssgciwquymiacc:
        if (method_exists($product, "\147\145\x74\x5f\163\141\154\145\137\160\162\151\143\x65")) {
            goto kmeesswcuaququqw;
        }
        goto uyscswaymikycueg;
        qgoicagqowggweeq:
        qqmsywmwmygigewc:
        goto wukmywyisgqyiwku;
        makosoyccwoyooyu:
        if (!$product) {
            goto cegciyyeemaaawuo;
        }
        goto cmssgciwquymiacc;
        wukmywyisgqyiwku:
        $aumscagymwyyicag = DecoratorHook::sscegwueamckwmcy("\x77\x6f\x6f\143\x6f\x6d\x6d\x65\162\x63\x65\137\x70\x72\157\x64\x75\x63\x74\x5f\x72\145\x67\x75\x6c\x61\x72\137\x70\x72\151\x63\145", $eyuymeqcioasuyyi, $product);
        goto wgeuaaggcwocgomy;
        ocmsggeccyugikwu:
        $aumscagymwyyicag = '';
        goto ysmyakmkagcqqswo;
        ysmyakmkagcqqswo:
        $product = self::aqasygcsqysmmyke($product);
        goto makosoyccwoyooyu;
        iamqccceoygiywgo:
        $eyuymeqcioasuyyi = $product->get_regular_price($mgkceomocowocqyo);
        goto qgoicagqowggweeq;
        qiaowqciwwyiucae:
        goto qqmsywmwmygigewc;
        goto aaqoyoyiagqcguse;
        wgeuaaggcwocgomy:
        cegciyyeemaaawuo:
        goto cgyaokocoymsqakq;
        qiycageymgowgicg:
    }
    
    public static function asaycagaeksiumkw($product, $mgkceomocowocqyo = "\x76\x69\145\167") : string
    {
        goto aocsmigsemowswge;
        gkoyauwycuyumiey:
        if (method_exists($product, "\x67\145\164\137\x73\x61\x6c\x65\x5f\160\162\x69\x63\145")) {
            goto yususwsyymskuwge;
        }
        goto uguaomoemkcuqksw;
        iikgymkaqikicssa:
        $product = self::aqasygcsqysmmyke($product);
        goto gokisgaagiawmqmg;
        mackmiksusgquqku:
        yususwsyymskuwge:
        goto kkcskacouykscykm;
        sugiiygakykaogou:
        koiweeaoqaqgeiow:
        goto qqoeqgqkmegyquie;
        gcaeuwucgqwocegi:
        ieukeyosucwcigcq:
        goto yumugwyseyuawuae;
        qqoeqgqkmegyquie:
        $aumscagymwyyicag = DecoratorHook::sscegwueamckwmcy("\167\157\157\143\x6f\155\x6d\145\x72\x63\145\x5f\x70\162\x6f\x64\x75\x63\x74\x5f\163\141\154\x65\137\160\162\151\x63\145", $eyuymeqcioasuyyi, $product);
        goto gcaeuwucgqwocegi;
        yumugwyseyuawuae:
        return $aumscagymwyyicag;
        goto kuekaewgqsagkokm;
        aocsmigsemowswge:
        $aumscagymwyyicag = '';
        goto iikgymkaqikicssa;
        uaycgmwwmeqsqoss:
        goto koiweeaoqaqgeiow;
        goto mackmiksusgquqku;
        kkcskacouykscykm:
        $eyuymeqcioasuyyi = $product->get_sale_price($mgkceomocowocqyo);
        goto sugiiygakykaogou;
        gokisgaagiawmqmg:
        if (!$product) {
            goto ieukeyosucwcigcq;
        }
        goto gkoyauwycuyumiey;
        uguaomoemkcuqksw:
        $eyuymeqcioasuyyi = $product->sale_price;
        goto uaycgmwwmeqsqoss;
        kuekaewgqsagkokm:
    }
    
    public static function aqwquwewocyewasw() : bool
    {
        goto ccykaqwcuqguuesk;
        qgwksesamqckoysm:
        eicoyaciiwoweyow:
        goto iyqwcuwcoqsqiqey;
        iyqwcuwcoqsqiqey:
        return $uwqkkwmiiumuukoa;
        goto uykoiemomggyyaqm;
        ygogeqikkaiewqak:
        $uwqkkwmiiumuukoa = $woocommerce->is_rest_api_request();
        goto qgwksesamqckoysm;
        aoywumwiwsuugsae:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto kgyiaoswiyukcguu;
        kgyiaoswiyukcguu:
        if (!($woocommerce && method_exists($woocommerce, "\151\163\137\x72\x65\x73\164\x5f\141\x70\x69\x5f\x72\x65\161\x75\145\163\164"))) {
            goto eicoyaciiwoweyow;
        }
        goto ygogeqikkaiewqak;
        ccykaqwcuqguuesk:
        $uwqkkwmiiumuukoa = false;
        goto aoywumwiwsuugsae;
        uykoiemomggyyaqm:
    }
    
    public static function uceecgsoicggikeu() : ?WC_Cart
    {
        goto omygqyyicqyuswqs;
        kcyyceweysgmscgm:
        $wwcysoksoogyacog = $woocommerce->cart;
        goto ouekywuyisaayusa;
        maeoaamgcykqqcac:
        return $wwcysoksoogyacog;
        goto eqmiagqymgsqikio;
        caeissowkcqcoisu:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto wwoyegucuaugosys;
        omygqyyicqyuswqs:
        $wwcysoksoogyacog = null;
        goto caeissowkcqcoisu;
        ouekywuyisaayusa:
        yqusmmkkqyqusoug:
        goto maeoaamgcykqqcac;
        wwoyegucuaugosys:
        if (!$woocommerce) {
            goto yqusmmkkqyqusoug;
        }
        goto kcyyceweysgmscgm;
        eqmiagqymgsqikio:
    }
    
    public static function aoqkwiysueqqwigk() : ?string
    {
        goto osqscmomgeumekym;
        aswqcceuwmmqciec:
        sqcucoqwgcookais:
        goto eqskaoiwkcikoock;
        wwowwogiasqyegco:
        igoiiguaiiyskqye:
        goto cowcyoscwiogwoss;
        isqoqyuosaeauika:
        if (function_exists("\x77\143\x5f\x67\x65\164\137\x63\150\145\143\153\157\165\164\x5f\x75\162\x6c")) {
            goto sqcucoqwgcookais;
        }
        goto cqkmekqeuoamwwik;
        osqscmomgeumekym:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto isqoqyuosaeauika;
        eqskaoiwkcikoock:
        return wc_get_checkout_url();
        goto wwowwogiasqyegco;
        gkqeioiiywequymm:
        goto igoiiguaiiyskqye;
        goto aswqcceuwmmqciec;
        cqkmekqeuoamwwik:
        return $woocommerce->cart->get_checkout_url();
        goto gkqeioiiywequymm;
        cowcyoscwiogwoss:
    }
    
    public static function kccgkwigyyiugcco() : bool
    {
        return "\x79\x65\163" === self::giiuwsmyumqwwiyq("\x65\x6e\141\x62\x6c\x65\x5f\x6d\171\x61\143\143\157\x75\x6e\164\x5f\x72\145\147\151\163\x74\x72\141\x74\151\x6f\x6e");
    }
    
    public static function yaaucgakecuykawk() : bool
    {
        global $woocommerce_loop;
        return DecoratorWoocommerce::kmymkocwcawgeccm() && isset($woocommerce_loop["\x6e\x61\x6d\145"]) && in_array($woocommerce_loop["\x6e\141\x6d\x65"], ["\165\x70\40\55\40\163\x65\154\154\x73"]);
    }
    
    public static function ogkieiokqueakmyc() : bool
    {
        global $woocommerce_loop;
        return DecoratorWoocommerce::kmymkocwcawgeccm() && isset($woocommerce_loop["\156\x61\155\x65"]) && in_array($woocommerce_loop["\156\141\x6d\145"], ["\x72\x65\x6c\x61\164\145\x64"]);
    }
    
    public static function omwkqcuwceweymcc($product = null)
    {
        goto aesqskyuooksouwa;
        aesqskyuooksouwa:
        if ($product) {
            goto iammguyywsgygewo;
        }
        goto mkuoeggssimkqoee;
        umeuqqawicigwmmw:
        if (!is_a($product, "\x57\x43\x5f\120\x72\x6f\144\x75\x63\x74")) {
            goto ekwgywkksceymecu;
        }
        goto ywmkeguguoigeago;
        ywmkeguguoigeago:
        $aokagokqyuysuksm = $product->get_id();
        goto qoieockmumciwweq;
        eqaqiuescmyiwsoq:
        $aokagokqyuysuksm = $product;
        goto umeuqqawicigwmmw;
        mkuoeggssimkqoee:
        $product = self::aqasygcsqysmmyke(ManipulatePost::mwikyscisascoeea());
        goto ockwkskmgeqemqwm;
        qoieockmumciwweq:
        ekwgywkksceymecu:
        goto qmccgkcskscsakcu;
        qmccgkcskscsakcu:
        return $aokagokqyuysuksm;
        goto wocmuysuywyaeyia;
        ockwkskmgeqemqwm:
        iammguyywsgygewo:
        goto eqaqiuescmyiwsoq;
        wocmuysuywyaeyia:
    }
    
    public static function ageqswwkkqywckco($ywmkwiwkosakssii = []) : array
    {
        goto amqmckimqwauwkug;
        owgocmqmgsgeayue:
        foreach ($oysoyeaucuawyaky as $aokagokqyuysuksm) {
            goto owgiiuqeeesguqsq;
            owgiiuqeeesguqsq:
            $product = self::aqasygcsqysmmyke($aokagokqyuysuksm);
            goto yqmkgcicoecyuiku;
            ycaqamikucimygma:
            swyaqueaoyekgomq:
            goto gmqceeyooqckwwms;
            ueoykiauoyuauwsi:
            $oksqskmgoqiqciis[$aokagokqyuysuksm] = $product;
            goto ycaqamikucimygma;
            gmqceeyooqckwwms:
            eqesiosukaowuquq:
            goto ikckcqggoqoimoio;
            yqmkgcicoecyuiku:
            if (!$product) {
                goto swyaqueaoyekgomq;
            }
            goto ueoykiauoyuauwsi;
            ikckcqggoqoimoio:
        }
        goto usuiacsqegaeywgs;
        gowguesicegmegqw:
        if (!is_array($oysoyeaucuawyaky)) {
            goto qqsyqgokqqsqoooe;
        }
        goto owgocmqmgsgeayue;
        emsoowiaoaoayqyy:
        $oksqskmgoqiqciis = [];
        goto gowguesicegmegqw;
        amqmckimqwauwkug:
        $ywmkwiwkosakssii["\146\x69\145\x6c\x64\163"] = "\x69\x64\163";
        goto iuawscaywkoegium;
        ueiooqcaegkyumkk:
        qqsyqgokqqsqoooe:
        goto mqysyiqsowkciiiq;
        mqysyiqsowkciiiq:
        return $oksqskmgoqiqciis;
        goto comswgimqmwcyyas;
        usuiacsqegaeywgs:
        iiwkgiyuiuskiusa:
        goto ueiooqcaegkyumkk;
        iuawscaywkoegium:
        $oysoyeaucuawyaky = ManipulatePost::ciugwooasaqcywas("\160\x72\x6f\x64\x75\143\x74", $ywmkwiwkosakssii);
        goto emsoowiaoaoayqyy;
        comswgimqmwcyyas:
    }
    
    public static function weqwusgaqsmseiyq() : array
    {
        return ["\x69\155\141\147\x65" => esc_html__("\x49\x6d\x61\147\x65", PR__CMN__FOUNDATION), "\x70\162\151\x63\145" => esc_html__("\120\162\151\143\145", PR__CMN__FOUNDATION), "\141\x64\144\x2d\164\157\x2d\143\141\x72\164" => esc_html__("\x41\144\x64\40\x74\x6f\40\143\141\162\164", PR__CMN__FOUNDATION), "\x64\145\163\x63\x72\151\160\164\151\x6f\x6e" => esc_html__("\104\145\x73\x63\162\151\x70\x74\151\157\156", PR__CMN__FOUNDATION), "\163\x6b\x75" => esc_html__("\x53\x6b\x75", PR__CMN__FOUNDATION), "\x73\164\x6f\143\153" => esc_html__("\x41\x76\141\151\154\141\142\151\154\x69\164\x79", PR__CMN__FOUNDATION), "\x77\145\151\147\x68\x74" => esc_html__("\x57\145\x69\x67\x68\164", PR__CMN__FOUNDATION), "\144\x69\x6d\145\x6e\163\x69\157\156\x73" => esc_html__("\x44\151\155\145\x6e\x73\x69\x6f\156\163", PR__CMN__FOUNDATION)];
    }
    
    public static function gmowuaggkmgkseyo() : bool
    {
        return DecoratorQuery::qmssqeyayicowkgy("\x70\x72\157\144\x75\x63\164\x5f\143\x61\164");
    }
    
    public static function ecaegsuskkkigkgc() : ?WC_Checkout
    {
        goto eiimgesccmkgusys;
        eiimgesccmkgusys:
        $yogeuygiqackeiky = null;
        goto kgykiwcggygyekgc;
        gccusiaomowsyeqk:
        sigcqyomcgiyamkq:
        goto kwwqiuaycwkcigqq;
        wimquiyiyyakiyqo:
        if (!$woocommerce) {
            goto sigcqyomcgiyamkq;
        }
        goto cseuscicwscieqaa;
        kwwqiuaycwkcigqq:
        return $yogeuygiqackeiky;
        goto cgsygucccwyayksw;
        cseuscicwscieqaa:
        $yogeuygiqackeiky = $woocommerce->yogeuygiqackeiky();
        goto gccusiaomowsyeqk;
        kgykiwcggygyekgc:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto wimquiyiyyakiyqo;
        cgsygucccwyayksw:
    }
    
    public static function giyscymwkesykqsg($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie)
    {
        self::cmussoegoauyyguw("\x73\x65\x74", $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie);
    }
    
    public static function qusqewgmqyucyooc($product, $ikgwqyuyckaewsow)
    {
        goto akgusigiuuowiemm;
        gqgiygyaagieswyg:
        if (!$product) {
            goto gemiusgkmeaykywq;
        }
        goto ueygyquuioiuckmw;
        ueygyquuioiuckmw:
        $qqswgiawgeaeoecu = [];
        goto igsgeycmgyyiqyaw;
        ceooqwocwgyaosca:
        $product->fields = $qqswgiawgeaeoecu;
        goto eggeemqkkcgiwkgm;
        igsgeycmgyyiqyaw:
        $aokagokqyuysuksm = $product->get_id();
        goto gqeosgkaqwoooomg;
        ceyiiqgekmueswas:
        kkskwicmigikmwuk:
        goto csiumocowgwwkseu;
        skuaykemeskiciyq:
        gemiusgkmeaykywq:
        goto socyamqieqoiusuo;
        socyamqieqoiusuo:
        return $product;
        goto ggwecgmoiwsqaiem;
        gqeosgkaqwoooomg:
        
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus => $ymqmyyeuycgmigyo) {
            goto ywogweeguksciwcw;
            ywogweeguksciwcw:
            switch ($aiowsaccomcoikus) {
                case "\164\x69\x74\x6c\145":
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $product->get_title();
                    goto csmqycguwyiekmwq;
                case "\160\162\151\143\145":
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $product->get_price_html();
                    goto csmqycguwyiekmwq;
                case "\151\155\141\147\x65":
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = intval(ManipulatePost::wsiiswmaagmyiaiw($aokagokqyuysuksm));
                    goto csmqycguwyiekmwq;
                case "\x64\145\163\143\x72\x69\x70\x74\151\x6f\156":
                    goto ewkmiiygeqessaue;
                    cgiioksocuikciqu:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $ukwokcuqauuosmoo;
                    goto kucuomkwkigoaaoi;
                    ewkmiiygeqessaue:
                    $ukwokcuqauuosmoo = DecoratorHook::sscegwueamckwmcy("\167\x6f\x6f\x63\157\155\155\145\x72\143\145\x5f\x73\150\x6f\x72\x74\137\x64\145\163\x63\x72\151\160\164\x69\157\156", $product->get_short_description());
                    goto cgiioksocuikciqu;
                    kucuomkwkigoaaoi:
                    goto csmqycguwyiekmwq;
                    goto aqimsokikskmeukc;
                    aqimsokikskmeukc:
                case "\x73\x74\x6f\143\x6b":
                    goto kqaqeisqomwwcasq;
                    awgckickkikmwgoe:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $imooqykauqyyswsw["\x61\x76\x61\x69\x6c\141\142\x69\154\x69\164\x79"];
                    goto ikuecasooegqekwi;
                    ikuecasooegqekwi:
                    goto csmqycguwyiekmwq;
                    goto auyuoiygayksuuua;
                    qyoyoscsokwicwcm:
                    $imooqykauqyyswsw["\x61\166\x61\151\x6c\x61\x62\151\x6c\x69\x74\x79"] = __("\x49\x6e\40\163\164\x6f\143\153", PR__CMN__FOUNDATION);
                    goto cekucgakuqaicscm;
                    cekucgakuqaicscm:
                    igmocmyuiauyaaky:
                    goto awgckickkikmwgoe;
                    siawmiiggusigmks:
                    if (!empty($imooqykauqyyswsw["\x61\x76\x61\151\154\141\x62\151\154\151\x74\171"])) {
                        goto igmocmyuiauyaaky;
                    }
                    goto qyoyoscsokwicwcm;
                    kqaqeisqomwwcasq:
                    $imooqykauqyyswsw = $product->get_availability();
                    goto siawmiiggusigmks;
                    auyuoiygayksuuua:
                case "\163\153\x75":
                    goto ogkwaimcumgaueem;
                    ackemimmseeuauek:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $mmkkmgusieqaqkki;
                    goto ayikyecyysisuioq;
                    ayikyecyysisuioq:
                    goto csmqycguwyiekmwq;
                    goto kmqcsyeeiyqwiusw;
                    eikgggsiaicqiqag:
                    !$mmkkmgusieqaqkki && ($mmkkmgusieqaqkki = "\55");
                    goto ackemimmseeuauek;
                    ogkwaimcumgaueem:
                    $mmkkmgusieqaqkki = $product->get_sku();
                    goto eikgggsiaicqiqag;
                    kmqcsyeeiyqwiusw:
                case "\x77\x65\x69\147\x68\x74":
                    goto moqccissukkoumwo;
                    sagukwqksqiukyeq:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $mycwwoyokwokowmo;
                    goto oassuwsweqqyooss;
                    mwcqoqsgsoiacuqu:
                    pewociqgeseqykos:
                    goto sagukwqksqiukyeq;
                    ucmwwiwcaqesyqaw:
                    gmymykusaimcgayu:
                    goto iqmqycmwemkkugmw;
                    ouesqgosuiesgwas:
                    goto pewociqgeseqykos;
                    goto ucmwwiwcaqesyqaw;
                    eoyokykwkikgaaww:
                    $mycwwoyokwokowmo = "\55";
                    goto ouesqgosuiesgwas;
                    moqccissukkoumwo:
                    if ($mycwwoyokwokowmo = $product->get_weight()) {
                        goto gmymykusaimcgayu;
                    }
                    goto eoyokykwkikgaaww;
                    oassuwsweqqyooss:
                    goto csmqycguwyiekmwq;
                    goto osucouyseikugqwm;
                    iqmqycmwemkkugmw:
                    $mycwwoyokwokowmo = wc_format_localized_decimal($mycwwoyokwokowmo) . "\40" . esc_attr(DecoratorOption::get("\167\x6f\157\143\x6f\155\155\145\162\143\x65\x5f\x77\x65\151\x67\150\x74\x5f\x75\x6e\x69\x74"));
                    goto mwcqoqsgsoiacuqu;
                    osucouyseikugqwm:
                case "\144\151\x6d\145\x6e\163\151\157\x6e\x73":
                    goto kikgmuyaiiicugcg;
                    kiwiacqeekiyqqum:
                    goto csmqycguwyiekmwq;
                    goto uwkusimiysaesysu;
                    qyyioseuoicymucm:
                    !$qaiwqwwemmyyqosy && ($qaiwqwwemmyyqosy = "\x2d");
                    goto gcueeowqwicyuuwm;
                    kikgmuyaiiicugcg:
                    $qaiwqwwemmyyqosy = function_exists("\x77\143\137\x66\157\x72\155\x61\x74\x5f\144\x69\155\145\x6e\x73\151\157\x6e\x73") ? wc_format_dimensions($product->get_dimensions(false)) : $product->get_dimensions();
                    goto qyyioseuoicymucm;
                    gcueeowqwicyuuwm:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $qaiwqwwemmyyqosy;
                    goto kiwiacqeekiyqqum;
                    uwkusimiysaesysu:
                default:
                    goto yywwamymqqweegma;
                    egqwmisqumyygeaw:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = implode("\54\40", $qqswgiawgeaeoecu[$aiowsaccomcoikus]);
                    goto eqswioyysgiegmkw;
                    ekmowewoceagouse:
                    if (empty($uyuaosigqymaqsaa)) {
                        goto ekiaooogkcaiqmku;
                    }
                    goto asmqyacukagmsmog;
                    sygcsssigqkuemcu:
                    kgkycyakimoowckw:
                    goto acykkosiggykiqae;
                    ecgigaamcwiqiukk:
                    goto csmqycguwyiekmwq;
                    goto wgieqooykcsmeemu;
                    iiaqqsyysmuiuqgk:
                    saoicecaigamyumi:
                    goto gguqqicieewmyqak;
                    yywwamymqqweegma:
                    if (DecoratorTaxonomy::myagqecycsaiyqsk($aiowsaccomcoikus)) {
                        goto kgkycyakimoowckw;
                    }
                    goto qmwgkkusoumsaymy;
                    wygeoqscyoqegsim:
                    $eqgoocgaqwqcimie = implode("\54\x20", $eqgoocgaqwqcimie);
                    goto kcwmuwimsuqeeika;
                    qmwgkkusoumsaymy:
                    $eqgoocgaqwqcimie = $product->get_attribute($aiowsaccomcoikus);
                    goto iuasisokiwkkgsig;
                    kcwmuwimsuqeeika:
                    gcgguqeygkiuseei:
                    goto qouiaaqwcueugsyg;
                    moyeqcaaoumugqga:
                    $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($aokagokqyuysuksm, $aiowsaccomcoikus);
                    goto ekmowewoceagouse;
                    asmqyacukagmsmog:
                    foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
                        goto owwkeimwommeqeuk;
                        agcecaceyeicacew:
                        wicgcmsymyamgkqo:
                        goto qeyyusmwmygyssis;
                        ouyaoosmgkcycecy:
                        $qqswgiawgeaeoecu[$aiowsaccomcoikus][] = ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk);
                        goto agcecaceyeicacew;
                        owwkeimwommeqeuk:
                        $iwewcwusemqaiggk = DecoratorSanitize::iwewcwusemqaiggk($iwewcwusemqaiggk, $aiowsaccomcoikus);
                        goto ouyaoosmgkcycecy;
                        qeyyusmwmygyssis:
                    }
                    goto iiaqqsyysmuiuqgk;
                    eqswioyysgiegmkw:
                    eqmmisowcsogsmmi:
                    goto ecgigaamcwiqiukk;
                    acykkosiggykiqae:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = [];
                    goto moyeqcaaoumugqga;
                    iuasisokiwkkgsig:
                    if (!is_array($eqgoocgaqwqcimie)) {
                        goto gcgguqeygkiuseei;
                    }
                    goto wygeoqscyoqegsim;
                    gguqqicieewmyqak:
                    ekiaooogkcaiqmku:
                    goto egqwmisqumyygeaw;
                    uqioouaicscwyeei:
                    goto eqmmisowcsogsmmi;
                    goto sygcsssigqkuemcu;
                    qouiaaqwcueugsyg:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $eqgoocgaqwqcimie;
                    goto uqioouaicscwyeei;
                    wgieqooykcsmeemu:
            }
            goto qaowiwsuoecmmkkw;
            qkkcyimckwcmwoyg:
            csmqycguwyiekmwq:
            goto soqwcqmyqkqyqawm;
            soqwcqmyqkqyqawm:
            makucowmowkkooyy:
            goto yaaygymiwgcucuee;
            qaowiwsuoecmmkkw:
            kauocquekqgswwoe:
            goto qkkcyimckwcmwoyg;
            yaaygymiwgcucuee:
        }
        goto ceyiiqgekmueswas;
        csiumocowgwwkseu:
        if (!$qqswgiawgeaeoecu) {
            goto kuygeikysoqqqouy;
        }
        goto ceooqwocwgyaosca;
        akgusigiuuowiemm:
        $product = self::aqasygcsqysmmyke($product);
        goto gqgiygyaagieswyg;
        eggeemqkkcgiwkgm:
        kuygeikysoqqqouy:
        goto skuaykemeskiciyq;
        ggwecgmoiwsqaiem:
    }
    
    public static function qysuguqkwiksywaq($product, $isweyuoisomqyaag) : array
    {
        goto momkymyyokcqmiwc;
        rmamqouaqyeogmmm:
        kmcmmgeegciwucsu:
        goto ukoqocmokmwgkggo;
        rgeqksseqwssoqeq:
        $uomewyckeuqoqocu = $product->get_available_variation($isweyuoisomqyaag);
        goto rmamqouaqyeogmmm;
        yseqooouywimkcsi:
        if (!($isweyuoisomqyaag && $product instanceof WC_Product_Variable)) {
            goto kmcmmgeegciwucsu;
        }
        goto rgeqksseqwssoqeq;
        oiaqgumiwqckysqq:
        $product = self::aqasygcsqysmmyke($product);
        goto yseqooouywimkcsi;
        momkymyyokcqmiwc:
        $uomewyckeuqoqocu = [];
        goto oiaqgumiwqckysqq;
        ukoqocmokmwgkggo:
        return $uomewyckeuqoqocu;
        goto scquwmwgssauikwq;
        scquwmwgssauikwq:
    }
    
    public static function mcgaskyiamgqmqgu($aumscagymwyyicag, $ywmkwiwkosakssii = []) : string
    {
        return DecoratorWoocommerce::aumscagymwyyicag($aumscagymwyyicag, $ywmkwiwkosakssii);
    }
    
    public static function wugwewwmekuaamos($ymqmyyeuycgmigyo, $kekikiwsckuiyuyo = false)
    {
        return self::cmussoegoauyyguw("\x67\145\164", $ymqmyyeuycgmigyo, '', $kekikiwsckuiyuyo);
    }
    
    public static function ucauuyiegweuccsq($uusmaiomayssaecw, $eqgoocgaqwqcimie, $ywmkwiwkosakssii = [])
    {
        $ywmkwiwkosakssii["\x6d\145\164\141\137\161\165\145\162\171"] = ["\155\x65\164\x61\137\153\145\x79" => $uusmaiomayssaecw, "\x6d\145\x74\x61\x5f\x76\141\154\165\x65" => $eqgoocgaqwqcimie, "\155\x65\164\141\x5f\143\157\155\160\141\162\x65" => "\x4c\x49\113\105"];
        return DecoratorWoocommerce::ageqswwkkqywckco($ywmkwiwkosakssii);
    }
    
    public static function gkokioeusiomuwee($product, $cqcsaaswaciweiie = [], $aqcaekiaqgiaiwiu = true)
    {
        goto umeiygeyqcouqcsk;
        uuemseeewwgcoqqc:
        if (!($qaiwqwwemmyyqosy && $product->has_dimensions())) {
            goto igwwywsaqumsmakc;
        }
        goto ocowsksosgwgogmy;
        umeiygeyqcouqcsk:
        $uomewyckeuqoqocu = [];
        goto wskwqauamemaueue;
        ocowsksosgwgogmy:
        $uomewyckeuqoqocu["\x64\151\x6d\x65\x6e\163\151\157\x6e\163"] = ["\x6c\141\x62\x65\154" => __("\x44\x69\x6d\x65\156\x73\x69\157\156\x73", "\167\157\157\x63\x6f\155\x6d\145\x72\143\x65"), "\166\141\x6c\x75\145" => wc_format_dimensions($product->get_dimensions(false))];
        goto kukmwwkmmiwaqmai;
        ggiyqoigmmgiamyo:
        if (!($qaiwqwwemmyyqosy && $product->has_weight())) {
            goto imycougggwgmwque;
        }
        goto cocwkumuyaacwuie;
        wyomsacikcaawgow:
        
        $siquossayskcwkea = array_filter($product->get_attributes(), "\x77\x63\x5f\x61\x74\164\162\151\x62\165\x74\x65\x73\x5f\x61\x72\162\x61\x79\x5f\x66\x69\154\x74\145\x72\x5f\166\x69\163\151\142\x6c\x65");
        goto kciguwegyomuqawq;
        ymaeysgwkcwwiqmu:
        eguqeogcowkuqmes:
        goto ywcksgacokiyuuks;
        ywcksgacokiyuuks:
        return DecoratorHook::sscegwueamckwmcy("\x77\x6f\x6f\143\157\155\155\145\162\x63\145\x5f\x64\151\163\x70\x6c\x61\171\137\x70\x72\157\x64\165\143\164\x5f\141\x74\164\x72\151\x62\165\164\x65\x73", $uomewyckeuqoqocu, $product);
        goto wemcucimscmkccee;
        iaaaeesqwkogwook:
        imycougggwgmwque:
        goto uuemseeewwgcoqqc;
        kukmwwkmmiwaqmai:
        igwwywsaqumsmakc:
        goto wyomsacikcaawgow;
        wskwqauamemaueue:
        $product = self::aqasygcsqysmmyke($product);
        goto rmoogiakmggyosaw;
        kciguwegyomuqawq:
        foreach ($siquossayskcwkea as $ymkomoccmymcoiea) {
            goto qcwmwsussmygiowm;
            igymmkeosawsmquy:
            ykgaewsgaccoewmy:
            goto smiosccsmkciiaei;
            qcwmwsussmygiowm:
            $mmykcgusskuuuace = self::cswwmqwaucwuqcaq($product, $ymkomoccmymcoiea);
            goto mqyceoiukuosysus;
            ouqsaimcqcgaemws:
            if (!$aqcaekiaqgiaiwiu) {
                goto ykgaewsgaccoewmy;
            }
            goto mqaamgcyimqcgyyu;
            kisqeasymciqmcma:
            if (!$kskgqoywkoawosao) {
                goto goagoaikyyyaisgy;
            }
            goto kiqioykgyqakwmsc;
            yuyqiqgiykceuwyi:
            foreach ($cqcsaaswaciweiie as $tsuauommsquiesmk => $eqgoocgaqwqcimie) {
                goto scqikcmqmsuaccuk;
                qmmiuscmmiciksuq:
                goto ucasooakcusgmasq;
                goto wysqeaawgmsgywwe;
                wsksyesmkwcseqmi:
                if (!(is_array($uiymkeeaukcyqqik) && !in_array($eqgoocgaqwqcimie, $uiymkeeaukcyqqik) && $uiymkeeaukcyqqik != $eqgoocgaqwqcimie)) {
                    goto eiiygsskgeocucse;
                }
                goto kwkaekkyamsuosic;
                msmyekocyqaeiqui:
                smwcciswieyocowa:
                goto qyqeeqeasassiyqg;
                scqikcmqmsuaccuk:
                $uiymkeeaukcyqqik = ManipulateArray::get($mmykcgusskuuuace, $tsuauommsquiesmk, false);
                goto wsksyesmkwcseqmi;
                kwkaekkyamsuosic:
                $kskgqoywkoawosao = false;
                goto qmmiuscmmiciksuq;
                wysqeaawgmsgywwe:
                eiiygsskgeocucse:
                goto msmyekocyqaeiqui;
                qyqeeqeasassiyqg:
            }
            goto uamgomuoiswgmyou;
            ugsimmgccyugoqka:
            goagoaikyyyaisgy:
            goto gmgysasgwkiakiic;
            mqyceoiukuosysus:
            $kskgqoywkoawosao = true;
            goto cuesuqwoogmkcwuu;
            sacqwquywoyemsui:
            qiwwswgwkcekequo:
            goto kisqeasymciqmcma;
            uamgomuoiswgmyou:
            ucasooakcusgmasq:
            goto sacqwquywoyemsui;
            gmgysasgwkiakiic:
            igigquuegyegmyas:
            goto rayoswqmyqiuiics;
            cuesuqwoogmkcwuu:
            if (!(is_array($cqcsaaswaciweiie) && $cqcsaaswaciweiie)) {
                goto qiwwswgwkcekequo;
            }
            goto yuyqiqgiykceuwyi;
            mqaamgcyimqcgyyu:
            $ymqmyyeuycgmigyo = DecoratorWoocommerce::gmeusukogwcamcyc($ymqmyyeuycgmigyo);
            goto igymmkeosawsmquy;
            kiqioykgyqakwmsc:
            $ymqmyyeuycgmigyo = $ymkomoccmymcoiea->get_name();
            goto ouqsaimcqcgaemws;
            smiosccsmkciiaei:
            $uomewyckeuqoqocu[$ymqmyyeuycgmigyo] = $mmykcgusskuuuace;
            goto ugsimmgccyugoqka;
            rayoswqmyqiuiics:
        }
        goto ymaeysgwkcwwiqmu;
        cocwkumuyaacwuie:
        $uomewyckeuqoqocu["\x77\145\151\x67\x68\x74"] = ["\x6c\x61\x62\145\x6c" => __("\127\x65\x69\x67\x68\164", "\167\x6f\x6f\143\157\x6d\x6d\145\162\143\x65"), "\x76\x61\x6c\165\x65" => wc_format_weight($product->get_weight())];
        goto iaaaeesqwkogwook;
        rmoogiakmggyosaw:
        
        $qaiwqwwemmyyqosy = DecoratorHook::sscegwueamckwmcy("\167\x63\137\160\162\x6f\144\x75\x63\x74\x5f\x65\156\141\142\x6c\145\x5f\x64\x69\x6d\x65\156\163\151\x6f\156\163\137\144\151\163\x70\x6c\141\171", $product->has_weight() || $product->has_dimensions());
        goto ggiyqoigmmgiamyo;
        wemcucimscmkccee:
    }
    
    public static function ucqakycuekccuocw($aqykuigiuwmmcieu = self::OBJECT) : ?array
    {
        goto giikseaiieuqkccg;
        uukiykgkqyekggay:
        $seyqqsmuaiegkeeq = DecoratorTaxonomy::qgckgkwskmsomoqs("\x70\162\x6f\144\x75\x63\x74", $aqykuigiuwmmcieu);
        goto qagmacuwmywoisyq;
        qagmacuwmywoisyq:
        ManipulateArray::unset($seyqqsmuaiegkeeq, ["\160\x72\157\144\165\143\164\137\x73\150\x69\160\x70\x69\x6e\x67\x5f\x63\x6c\x61\x73\163", "\160\x72\x6f\x64\165\143\164\137\x76\151\x73\151\x62\x69\x6c\151\164\x79", "\160\x72\157\144\165\143\164\137\164\171\x70\145"]);
        goto omogkekcmgcmgaks;
        omogkekcmgcmgaks:
        wuiwikwsqoyseayq:
        goto kqkckwwigeyywyik;
        cqcoykgagkcckiyi:
        if (!empty($seyqqsmuaiegkeeq)) {
            goto wuiwikwsqoyseayq;
        }
        goto uukiykgkqyekggay;
        kqkckwwigeyywyik:
        return $seyqqsmuaiegkeeq;
        goto ikoqcwgayswaisqo;
        giikseaiieuqkccg:
        static $seyqqsmuaiegkeeq = [];
        goto cqcoykgagkcckiyi;
        ikoqcwgayswaisqo:
    }
    
    public static function mywkcmciykgikmyc($product, $kesssewsiegssiya, $ywmkwiwkosakssii = []) : array
    {
        return DecoratorWoocommerce::mywkcmciykgikmyc(self::omwkqcuwceweymcc($product), $kesssewsiegssiya, $ywmkwiwkosakssii);
    }
    
    public static function iwoqeaamkmyoquwm($product, $scwmkmciyywokcug) : array
    {
        goto kascgoogiymmugcy;
        kuukuccioawuoiea:
        return $wpdb->get_col("\xa\11\11\x9\123\x45\114\x45\x43\124\x20\x6f\151\x73\x2e\x6f\162\x64\145\162\137\151\x64\12\x9\x9\x9\x46\x52\117\115\x20{$yuwymayicwwqiske}\167\x6f\157\x63\x6f\155\x6d\x65\162\x63\145\137\157\162\144\145\162\x5f\x69\x74\145\155\163\x20\141\x73\x20\x6f\x69\x73\xa\x9\11\11\x4c\105\106\x54\x20\112\x4f\x49\x4e\40{$yuwymayicwwqiske}\x77\157\x6f\x63\x6f\x6d\155\x65\x72\143\145\x5f\x6f\x72\144\145\x72\x5f\x69\164\145\155\x6d\145\x74\x61\x20\141\x73\40\157\x69\x6d\40\117\x4e\x20\x6f\151\163\x2e\x6f\x72\x64\x65\162\137\x69\x74\x65\155\x5f\x69\x64\40\x3d\40\157\x69\x6d\56\x6f\162\144\x65\x72\x5f\x69\164\145\x6d\x5f\151\144\12\11\11\11\114\105\x46\124\x20\112\117\111\x4e\40{$wpdb->posts}\40\101\123\40\160\x20\x4f\116\x20\157\x69\163\x2e\x6f\162\144\145\x72\x5f\x69\x64\x20\75\x20\160\56\111\104\12\x9\x9\11\114\105\106\x54\x20\x4a\x4f\x49\116\40{$wpdb->postmeta}\x20\x41\123\x20\x70\x6d\x20\x4f\116\40\157\151\x73\56\157\162\x64\145\x72\x5f\151\x64\40\75\40\160\x6d\56\x6d\145\164\141\137\151\144\12\x9\11\x9\127\110\105\x52\x45\x20\x70\56\160\157\163\x74\x5f\164\171\160\x65\x20\75\x20\x27\x73\x68\157\x70\x5f\157\162\x64\x65\x72\47\xa\x9\x9\x9\x41\116\104\40\160\56\x70\x6f\163\164\137\163\164\141\x74\x75\x73\40\x49\116\x20\x28\40\47\x77\143\55" . implode("\x27\54\x20\47\x77\x63\55", $oqseeekuqisekiwy) . "\x27\x20\51\12\11\11\11\x41\116\104\x20\x6f\x69\x73\x2e\157\162\x64\x65\x72\137\151\x74\x65\x6d\137\164\171\x70\x65\x20\75\x20\x27\154\x69\x6e\x65\x5f\x69\x74\x65\155\x27\xa\11\x9\11\x41\x4e\x44\40\x6f\x69\x6d\56\x6d\145\x74\x61\137\x6b\145\x79\40\75\x20\x27\137\160\162\x6f\144\165\143\164\x5f\x69\x64\x27\xa\11\11\11\101\116\x44\40\x6f\151\155\x2e\155\145\164\141\137\166\141\154\x75\145\x20\x3d\40\47{$product}\x27\xa\x9\x9\x9\101\x4e\104\x20\160\155\x2e\155\145\164\x61\x5f\x6b\145\x79\40\x3d\40\47\x5f\x63\165\x73\x74\x6f\155\x65\162\x5f\x75\x73\145\x72\x27\xa\11\11\11\x41\116\104\40\x70\x6d\x2e\155\x65\x74\141\x5f\x76\141\x6c\165\145\40\x3d\x20\47{$scwmkmciyywokcug}\x27\12\40\40\x20\40\11");
        goto msygsomkaywgokuq;
        mmkuokwocceayask:
        $oqseeekuqisekiwy = array_map("\145\x73\143\x5f\x73\x71\154", DecoratorWoocommerce::ouqoeawmueswmksm());
        goto kuukuccioawuoiea;
        smucwoowmswcmqiq:
        $product = self::omwkqcuwceweymcc($product);
        goto mmkuokwocceayask;
        yciammygksiessww:
        $yuwymayicwwqiske = $wpdb->prefix;
        goto smucwoowmswcmqiq;
        kascgoogiymmugcy:
        global $wpdb;
        goto yciammygksiessww;
        msygsomkaywgokuq:
    }
    
    public static function giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee = null, $yuwymayicwwqiske = "\167\157\157\x63\x6f\155\x6d\145\x72\143\x65\x5f")
    {
        goto qmkkgkcemceygaou;
        mqmwceouegaaucoi:
        $uusmaiomayssaecw = $yuwymayicwwqiske . $uusmaiomayssaecw;
        goto wgiewcmyikiwsasu;
        wgiewcmyikiwsasu:
        vwwckgewsegagiqm:
        goto cqguwaockaiuioqo;
        qmkkgkcemceygaou:
        if (!$yuwymayicwwqiske) {
            goto vwwckgewsegagiqm;
        }
        goto mqmwceouegaaucoi;
        cqguwaockaiuioqo:
        return DecoratorOption::get($uusmaiomayssaecw, $ggauoeuaesiymgee);
        goto ssmesescgegmqegs;
        ssmesescgegmqegs:
    }
    
    public static function cswwmqwaucwuqcaq($product, $ymkomoccmymcoiea) : array
    {
        goto igkykqemaiuckkqm;
        mimgyeoccsuwmomg:
        ksyaeigosimeymmu:
        goto megqkwsyeisgoiuq;
        igkykqemaiuckkqm:
        $qqswgiawgeaeoecu = [];
        goto ywckcmesqeiougoy;
        oswkqueiycsgwwqc:
        goto amwucayokoyowcki;
        goto mimgyeoccsuwmomg;
        owosmsmuaueegaas:
        return (array) DecoratorHook::sscegwueamckwmcy("\x77\157\157\143\x6f\x6d\155\145\x72\x63\x65\137\x61\x74\x74\x72\x69\x62\165\164\x65\137\x6f\x75\x74\x70\165\164", $mmykcgusskuuuace, $ymkomoccmymcoiea, $product);
        goto okcoqaemsekeyqgi;
        cssokcmoicccseqa:
        $mmykcgusskuuuace = ["\166\x61\154\x75\145" => DecoratorHook::sscegwueamckwmcy("\167\157\x6f\x63\x6f\155\155\x65\162\x63\145\x5f\141\x74\164\162\x69\x62\165\164\145", wptexturize(implode("\x2c\x20", $qqswgiawgeaeoecu)), $ymkomoccmymcoiea, $qqswgiawgeaeoecu), "\154\x61\x62\x65\154" => DecoratorWoocommerce::qysciqmmoqsaqmqk($ymkomoccmymcoiea->get_name(), $product)];
        goto owosmsmuaueegaas;
        cwcqcsgwwkokqgoy:
        iwwcyaoguoweqqmi:
        goto ucuyyuummcgmmcoo;
        gcoaosuecgyuuiyq:
        gigyyqgmkceykwam:
        goto oswkqueiycsgwwqc;
        usamasqcwkcaaeyo:
        foreach ($qqswgiawgeaeoecu as &$eqgoocgaqwqcimie) {
            $eqgoocgaqwqcimie = make_clickable(esc_html($eqgoocgaqwqcimie));
            kwuayueukssiusyo:
        }
        goto gcoaosuecgyuuiyq;
        uqcqusigauwqaucm:
        $qqswgiawgeaeoecu = $ymkomoccmymcoiea->get_options();
        goto usamasqcwkcaaeyo;
        swuockeicagsysku:
        foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
            goto cmomkawiiikmcccq;
            aaoeckeaamycqkam:
            xsucwemqaekogyqi:
            goto sawkewuuqsaekcsy;
            ksosaiwckkacoeww:
            if ($kesssewsiegssiya->attribute_public) {
                goto xsucwemqaekogyqi;
            }
            goto ksmgqwcssgmuykqm;
            sawkewuuqsaekcsy:
            $qqswgiawgeaeoecu[] = ManipulateHTML::uuccukgasskgimsq("\x61", ["\x68\162\145\146" => ManipulateTerm::qmgcisuuikgmqcsu(ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk), $ymkomoccmymcoiea->get_name()), "\x72\145\x6c" => "\x74\141\147"], $ymqmyyeuycgmigyo);
            goto oiioqgoqyykuocou;
            ksmgqwcssgmuykqm:
            $qqswgiawgeaeoecu[] = $ymqmyyeuycgmigyo;
            goto owqukoyoaogmwioi;
            cmomkawiiikmcccq:
            $ymqmyyeuycgmigyo = esc_html($iwewcwusemqaiggk->name);
            goto ksosaiwckkacoeww;
            oiioqgoqyykuocou:
            msiwaicoesyagumk:
            goto kgwcgkqqguiwgmmm;
            owqukoyoaogmwioi:
            goto msiwaicoesyagumk;
            goto aaoeckeaamycqkam;
            kgwcgkqqguiwgmmm:
            okyoymqacqaimooo:
            goto umwsiiqcymkwcasg;
            umwsiiqcymkwcasg:
        }
        goto cwcqcsgwwkokqgoy;
        qagsccmgemwyowgq:
        $uyuaosigqymaqsaa = self::mywkcmciykgikmyc($product, $ymkomoccmymcoiea->get_name(), ["\x66\151\145\x6c\144\x73" => "\141\154\x6c"]);
        goto swuockeicagsysku;
        ywckcmesqeiougoy:
        if ($ymkomoccmymcoiea->is_taxonomy()) {
            goto ksyaeigosimeymmu;
        }
        goto uqcqusigauwqaucm;
        ucuyyuummcgmmcoo:
        amwucayokoyowcki:
        goto cssokcmoicccseqa;
        megqkwsyeisgoiuq:
        $kesssewsiegssiya = $ymkomoccmymcoiea->get_taxonomy_object();
        goto qagsccmgemwyowgq;
        okcoqaemsekeyqgi:
    }
    
    public static function cmussoegoauyyguw($aiamqeawckcsuaou, $ymqmyyeuycgmigyo = '', $eqgoocgaqwqcimie = '', $kekikiwsckuiyuyo = false)
    {
        goto mwqqkaiwyugqakeq;
        woweqwuwmegoecgu:
        if ($aiamqeawckcsuaou == "\x73\x65\x74") {
            goto iwwawgsoqcciekeq;
        }
        goto csmosoqqwicqwuqg;
        eawiyomugeiugoca:
        mqweissqoiqukwuc:
        goto yokquaecwougwgme;
        egaqcmmgioyoskak:
        ggiswsmgccuackao:
        goto oiekocisyuaicoey;
        suuwwusyekuwqgwi:
        goto mqweissqoiqukwuc;
        goto cccusomswoycqgye;
        quookucgqymiqocy:
        sgaamousiakskkko:
        goto gaoeaaeausmqguee;
        wqeaomqyumqiocka:
        yoicqeqousygweyk:
        goto quookucgqymiqocy;
        gqmqqaumkqkyyuom:
        unset($woocommerce->session->{$ymqmyyeuycgmigyo});
        goto kssuoaucoagqicew;
        osmogyiiwqqwieoe:
        if (method_exists($cmussoegoauyyguw, $aiamqeawckcsuaou)) {
            goto gkgiqeqokmyaosyi;
        }
        goto ymqsaggkkwkoomgc;
        swwmuqsewiaswasq:
        iwwawgsoqcciekeq:
        goto oiecwmgwkgscuaom;
        cccusomswoycqgye:
        gkgiqeqokmyaosyi:
        goto yqemqgiwcuoowges;
        oiekocisyuaicoey:
        goto sgaamousiakskkko;
        goto swwmuqsewiaswasq;
        yqemqgiwcuoowges:
        $eqgoocgaqwqcimie = $cmussoegoauyyguw->{$aiamqeawckcsuaou}($ymqmyyeuycgmigyo);
        goto eawiyomugeiugoca;
        swasewcuckegeuuy:
        $woocommerce->session->{$aiamqeawckcsuaou}($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie);
        goto wqeaomqyumqiocka;
        mwqqkaiwyugqakeq:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto yikaoaeoqsgieqoq;
        yikaoaeoqsgieqoq:
        $cmussoegoauyyguw = $woocommerce->session;
        goto woweqwuwmegoecgu;
        oimwsegacayecyko:
        wgakiauyywueqsma:
        goto swasewcuckegeuuy;
        qmgqakuqmkigkgcw:
        goto yoicqeqousygweyk;
        goto oimwsegacayecyko;
        oiecwmgwkgscuaom:
        if (method_exists($cmussoegoauyyguw, $aiamqeawckcsuaou)) {
            goto wgakiauyywueqsma;
        }
        goto uccuwggkcciaascm;
        yokquaecwougwgme:
        if (!$kekikiwsckuiyuyo) {
            goto uycysmimgmsawemy;
        }
        goto gqmqqaumkqkyyuom;
        kssuoaucoagqicew:
        uycysmimgmsawemy:
        goto egaqcmmgioyoskak;
        gaoeaaeausmqguee:
        return $eqgoocgaqwqcimie;
        goto qqeycioeqswikseq;
        csmosoqqwicqwuqg:
        if (!($aiamqeawckcsuaou == "\x67\145\x74")) {
            goto ggiswsmgccuackao;
        }
        goto osmogyiiwqqwieoe;
        ymqsaggkkwkoomgc:
        $eqgoocgaqwqcimie = $cmussoegoauyyguw->{$ymqmyyeuycgmigyo};
        goto suuwwusyekuwqgwi;
        uccuwggkcciaascm:
        $woocommerce->session->{$ymqmyyeuycgmigyo} = $eqgoocgaqwqcimie;
        goto qmgqakuqmkigkgcw;
        qqeycioeqswikseq:
    }
    
    public static function ceusksoaisoswmia($umwqusowiqmyseom = null) : array
    {
        goto sokekecgsmeyesqq;
        sokekecgsmeyesqq:
        $oammesyieqmwuwyi = self::uakuwyoiooeqqiow();
        goto ugkkcqkwssgykcyo;
        muaaeioooicwskgu:
        if (!$umwqusowiqmyseom) {
            goto kgwgksykmqweowgi;
        }
        goto ecqswsccqomawuoy;
        iwwayiuyaecikeku:
        kgwgksykmqweowgi:
        goto cmicuicekiiowekc;
        coqswqysimeumkei:
        $umwqusowiqmyseom = self::mmmcswscsiecscwg($umwqusowiqmyseom);
        goto muaaeioooicwskgu;
        ugkkcqkwssgykcyo:
        if (!(!$oammesyieqmwuwyi && $umwqusowiqmyseom)) {
            goto gygmukceqmuewaim;
        }
        goto coqswqysimeumkei;
        cmicuicekiiowekc:
        gygmukceqmuewaim:
        goto eeuosekauyeiqoie;
        ecqswsccqomawuoy:
        $oammesyieqmwuwyi = $umwqusowiqmyseom->get_items();
        goto iwwayiuyaecikeku;
        eeuosekauyeiqoie:
        return $oammesyieqmwuwyi;
        goto wmkkqgiamggikgsi;
        wmkkqgiamggikgsi:
    }
    
    public static function uwyscmkeyeuqyukk($ywmkwiwkosakssii = []) : string
    {
        goto wwuwumqemissswei;
        eoikakegoqcywcui:
        if (!ManipulateArray::get($ywmkwiwkosakssii, self::VALUE, false)) {
            goto wqcseagmwswqeqgu;
        }
        goto ccmgkkiyameumyoi;
        ccmgkkiyameumyoi:
        $wwgucssaecqekuek["\143\150\145\x63\x6b\x65\x64"] = true;
        goto gsqmakgaqakuawue;
        wwuwumqemissswei:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\164\x69\160" => '', self::NAME => '', self::LABEL => '', self::VALUE => '']);
        goto qwsgukcwoomuuais;
        qwsgukcwoomuuais:
        $wwgucssaecqekuek = ["\x63\x6c\141\163\163" => "\143\x68\x65\143\x6b\142\x6f\x78", self::TYPE => "\143\x68\x65\143\x6b\x62\x6f\x78", self::NAME => ManipulateArray::get($ywmkwiwkosakssii, self::NAME)];
        goto eoikakegoqcywcui;
        gsqmakgaqakuawue:
        wqcseagmwswqeqgu:
        goto ggoceeqkiqmqkiwg;
        ggoceeqkiqmqkiwg:
        return ManipulateHTML::uuccukgasskgimsq("\x6c\141\x62\x65\x6c", ["\143\x6c\141\x73\163" => "\x74\x69\160\x73", "\144\x61\x74\141\55\164\x69\160" => ManipulateArray::get($ywmkwiwkosakssii, "\164\x69\160")], [ManipulateArray::get($ywmkwiwkosakssii, self::LABEL), ManipulateHTML::qgsekwygcgawekeq("\x69\156\x70\x75\x74", $wwgucssaecqekuek)]);
        goto qqoaguokgcoeieyi;
        qqoaguokgcoeieyi:
    }
}
