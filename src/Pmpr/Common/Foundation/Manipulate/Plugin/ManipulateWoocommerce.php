<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        goto amescycuaoumygqc;
        qeoawooaykmyokuo:
        foreach ($isweyuoisomqyaag as $ymqmyyeuycgmigyo => $igqsaukqcqscimok) {
            goto aaoywwqcimiwiywu;
            owymcaeysicqacya:
            kmayiocekggkoyso:
            goto eiqiqqoyqcaiiwqo;
            aaoywwqcimiwiywu:
            $kesssewsiegssiya = ManipulateArray::get($seyqqsmuaiegkeeq, ManipulateString::wiecmkiugmyyqiqc("\160\x61\x5f", '', $ymqmyyeuycgmigyo));
            goto oeguggskkegamuoo;
            uimyekysswywuoyi:
            $sogksuscggsicmac[$ymqmyyeuycgmigyo] = ["\141\164\164\162\151\x62\x75\x74\x65" => $kesssewsiegssiya, "\x74\x65\x72\x6d" => []];
            goto cemsuwwwgiqiyigo;
            cemsuwwwgiqiyigo:
            ayccewcmckaqowek:
            goto owymcaeysicqacya;
            oeguggskkegamuoo:
            if (!$kesssewsiegssiya) {
                goto ayccewcmckaqowek;
            }
            goto uimyekysswywuoyi;
            eiqiqqoyqcaiiwqo:
        }
        goto okyqqamccagawuoi;
        okyqqamccagawuoi:
        scqwymaqqacaugqa:
        goto agiieggoecqiaoum;
        iwecwgwiccuemkye:
        $seyqqsmuaiegkeeq = DecoratorWoocommerce::mqsqiyqiceqasokq();
        goto qeoawooaykmyokuo;
        amescycuaoumygqc:
        $sogksuscggsicmac = [];
        goto iwecwgwiccuemkye;
        agiieggoecqiaoum:
        return $sogksuscggsicmac;
        goto ksgumesawyqswaoa;
        ksgumesawyqswaoa:
    }
    
    public static function kyycwccmaemgokwu($smwiiesyqsgyisos) : string
    {
        goto emyeissowqweyqec;
        ueekmmegamoyagog:
        $smwiiesyqsgyisos = new WC_Coupon($smwiiesyqsgyisos);
        goto qeayouqugioyieei;
        qeayouqugioyieei:
        ieycaaisagswkaiy:
        goto gogyuwukcgmycsqw;
        emyeissowqweyqec:
        if ($smwiiesyqsgyisos instanceof WC_Coupon) {
            goto ieycaaisagswkaiy;
        }
        goto ueekmmegamoyagog;
        gogyuwukcgmycsqw:
        
        return $smwiiesyqsgyisos->get_code();
        goto mgscesskeauowgsu;
        mgscesskeauowgsu:
    }
    
    public static function oeeuywgiaywkimek($smwiiesyqsgyisos)
    {
        goto qyyiiuuscqgeowya;
        qyyiiuuscqgeowya:
        $smwiiesyqsgyisos = new WC_Coupon($smwiiesyqsgyisos);
        goto uowaoiwemyccakim;
        uowaoiwemyccakim:
        if (self::kyycwccmaemgokwu($smwiiesyqsgyisos)) {
            goto kyowegyokkesuugi;
        }
        goto gukkaswwecmuoayo;
        gskmiyeoisqoqkci:
        return $smwiiesyqsgyisos;
        goto iaqiocmqqiaeuwyg;
        gukkaswwecmuoayo:
        $smwiiesyqsgyisos = false;
        goto sccoieksocaiaogm;
        sccoieksocaiaogm:
        kyowegyokkesuugi:
        goto gskmiyeoisqoqkci;
        iaqiocmqqiaeuwyg:
    }
    
    public static function cuwomiomuqqkayoo($ioakeqoosmkukeaa)
    {
        goto osamqwsmcawigggw;
        osamqwsmcawigggw:
        $wwcysoksoogyacog = ManipulateWoocommerce::uceecgsoicggikeu();
        goto gkuyqiyuaquuyaay;
        masgkciqasaucoss:
        yasegwakoscmkouu:
        goto eogaamwmasgugqgy;
        aqyqqgkiycokskwq:
        
        $wwcysoksoogyacog->add_discount($ioakeqoosmkukeaa);
        goto masgkciqasaucoss;
        gkuyqiyuaquuyaay:
        if (!$wwcysoksoogyacog) {
            goto yasegwakoscmkouu;
        }
        goto aqyqqgkiycokskwq;
        eogaamwmasgugqgy:
    }
    
    public static function mmmcswscsiecscwg($umwqusowiqmyseom)
    {
        goto oockcigwicccqyko;
        cmawmeioiuegssuw:
        return $umwqusowiqmyseom;
        goto umeemqiuewswymkw;
        kaaasaqewwykmikk:
        weyoiomaeciyggug:
        goto cmawmeioiuegssuw;
        oockcigwicccqyko:
        if (is_a($umwqusowiqmyseom, "\x57\x43\137\117\162\144\145\162")) {
            goto weyoiomaeciyggug;
        }
        goto eaqsewgiawoasqgu;
        eaqsewgiawoasqgu:
        $umwqusowiqmyseom = DecoratorWoocommerce::mmmcswscsiecscwg($umwqusowiqmyseom);
        goto kaaasaqewwykmikk;
        umeemqiuewswymkw:
    }
    
    public static function wcqicmcuiewessgy($umwqusowiqmyseom) : string
    {
        goto qgkmsokwcmmawiey;
        qgkmsokwcmmawiey:
        $umwqusowiqmyseom = self::mmmcswscsiecscwg($umwqusowiqmyseom);
        goto ugiuoawueimimiwk;
        awcwocukswgsaymk:
        return $iueymcwwscwqkiyq;
        goto iwekcauymcaoooie;
        ukcyuqaycogiiiye:
        $iueymcwwscwqkiyq = DecoratorWoocommerce::ueqkgikommgyqmoa($umwqusowiqmyseom->get_status());
        goto oiseukwsseayeamo;
        ugiuoawueimimiwk:
        $iueymcwwscwqkiyq = '';
        goto aouoeqamkuemyeqa;
        oiseukwsseayeamo:
        qweqcmkkiqkkukis:
        goto awcwocukswgsaymk;
        aouoeqamkuemyeqa:
        if (!$umwqusowiqmyseom) {
            goto qweqcmkkiqkkukis;
        }
        goto ukcyuqaycogiiiye;
        iwekcauymcaoooie:
    }
    
    public static function susisykioakswkmm($umwqusowiqmyseom) : string
    {
        goto saeeegogmqsyimqk;
        cywckaugcygcssie:
        $mkucggyaiaukqoce = ManipulateUser::get($umwqusowiqmyseom->get_customer_id(), true);
        goto ascyoecaiyskamoo;
        icuauuecukomyoss:
        oowymeqscqicmiac:
        goto egkiyyuywuiekisw;
        gkecqaygqygkkgwc:
        aowgayqaooygayky:
        goto ymmwikogcaccsgyo;
        ymmwikogcaccsgyo:
        quweyqomsoqcwmae:
        goto xoyesscyiuyyoaao;
        isgekmewmqgmwiky:
        nacqwwcyskisiqmi:
        goto yaqamykgsuagaksc;
        wsemcaiucsysuqiq:
        $qsegigkmaaskiaeo = ucwords($mkucggyaiaukqoce->display_name);
        goto mukmccquscqkeeuy;
        smwwcycswiyuqouu:
        goto aowgayqaooygayky;
        goto isgekmewmqgmwiky;
        ueioekeyeekmugss:
        kcyccscigsuuiomi:
        goto smwwcycswiyuqouu;
        mukmccquscqkeeuy:
        mmksuuciiyoyaaoa:
        goto icuauuecukomyoss;
        saeeegogmqsyimqk:
        $qsegigkmaaskiaeo = '';
        goto qkkcekocsgakoqqo;
        ascyoecaiyskamoo:
        if (!$mkucggyaiaukqoce) {
            goto mmksuuciiyoyaaoa;
        }
        goto wsemcaiucsysuqiq;
        yaqamykgsuagaksc:
        $qsegigkmaaskiaeo = trim(sprintf("\x25\x73\x20\x25\163", $umwqusowiqmyseom->get_billing_first_name(), $umwqusowiqmyseom->get_billing_last_name()));
        goto gkecqaygqygkkgwc;
        ioeaawqkkakemsum:
        if ($umwqusowiqmyseom->get_billing_company()) {
            goto seiyywsmwamccscw;
        }
        goto gyqecessamsiywea;
        egkiyyuywuiekisw:
        goto kcyccscigsuuiomi;
        goto cookqcosymocwyqg;
        xoyesscyiuyyoaao:
        return $qsegigkmaaskiaeo;
        goto kkeeggmwkmuwswca;
        gyqecessamsiywea:
        if (!$umwqusowiqmyseom->get_customer_id()) {
            goto oowymeqscqicmiac;
        }
        goto cywckaugcygcssie;
        aeusyyagoyskceiy:
        if ($umwqusowiqmyseom->get_billing_first_name() || $umwqusowiqmyseom->get_billing_last_name()) {
            goto nacqwwcyskisiqmi;
        }
        goto ioeaawqkkakemsum;
        qkkcekocsgakoqqo:
        $umwqusowiqmyseom = self::mmmcswscsiecscwg($umwqusowiqmyseom);
        goto koyyawuukocokcme;
        koyyawuukocokcme:
        if (!$umwqusowiqmyseom) {
            goto quweyqomsoqcwmae;
        }
        goto aeusyyagoyskceiy;
        kaacgcseugewuceu:
        $qsegigkmaaskiaeo = trim($umwqusowiqmyseom->get_billing_company());
        goto ueioekeyeekmugss;
        cookqcosymocwyqg:
        seiyywsmwamccscw:
        goto kaacgcseugewuceu;
        kkeeggmwkmuwswca:
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
        goto uuwiiwywmwyoymgi;
        ocmsggeccyugikwu:
        goto agimkskeiiemakqe;
        goto ysmyakmkagcqqswo;
        cegciyyeemaaawuo:
        sgsmiecuouaseyeu:
        goto ocmsggeccyugikwu;
        kmeesswcuaququqw:
        if (!$wwcysoksoogyacog) {
            goto sgsmiecuouaseyeu;
        }
        goto qqmsywmwmygigewc;
        qqmsywmwmygigewc:
        $wwcysoksoogyacog->empty_cart();
        goto cegciyyeemaaawuo;
        oqiowcuqsqwyukgi:
        $wwcysoksoogyacog = self::uceecgsoicggikeu();
        goto kmeesswcuaququqw;
        uuwiiwywmwyoymgi:
        if (function_exists("\167\143\137\x65\x6d\160\164\171\137\x63\141\x72\x74")) {
            goto muwyoumcckugweeg;
        }
        goto oqiowcuqsqwyukgi;
        ysmyakmkagcqqswo:
        muwyoumcckugweeg:
        goto makosoyccwoyooyu;
        makosoyccwoyooyu:
        wc_empty_cart();
        goto cmssgciwquymiacc;
        cmssgciwquymiacc:
        agimkskeiiemakqe:
        goto uyscswaymikycueg;
        uyscswaymikycueg:
    }
    
    public static function uakuwyoiooeqqiow() : array
    {
        goto aaqoyoyiagqcguse;
        wgeuaaggcwocgomy:
        qiaowqciwwyiucae:
        goto cgyaokocoymsqakq;
        aaqoyoyiagqcguse:
        $wwcysoksoogyacog = self::uceecgsoicggikeu();
        goto iamqccceoygiywgo;
        cgyaokocoymsqakq:
        return $ygwoqcwsaggqoamw;
        goto qiycageymgowgicg;
        qgoicagqowggweeq:
        if (!$wwcysoksoogyacog) {
            goto qiaowqciwwyiucae;
        }
        goto wukmywyisgqyiwku;
        iamqccceoygiywgo:
        $ygwoqcwsaggqoamw = [];
        goto qgoicagqowggweeq;
        wukmywyisgqyiwku:
        $ygwoqcwsaggqoamw = $wwcysoksoogyacog->get_cart_contents();
        goto wgeuaaggcwocgomy;
        qiycageymgowgicg:
    }
    
    public static function geoemsmuouqcqmei() : ?string
    {
        goto ieukeyosucwcigcq;
        gkoyauwycuyumiey:
        yususwsyymskuwge:
        goto uguaomoemkcuqksw;
        uguaomoemkcuqksw:
        return wc_get_cart_url();
        goto uaycgmwwmeqsqoss;
        ieukeyosucwcigcq:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto aocsmigsemowswge;
        aocsmigsemowswge:
        if (function_exists("\x77\143\x5f\x67\x65\x74\x5f\143\x61\162\164\x5f\165\x72\154")) {
            goto yususwsyymskuwge;
        }
        goto iikgymkaqikicssa;
        iikgymkaqikicssa:
        return $woocommerce->cart->get_cart_url();
        goto gokisgaagiawmqmg;
        uaycgmwwmeqsqoss:
        koiweeaoqaqgeiow:
        goto mackmiksusgquqku;
        gokisgaagiawmqmg:
        goto koiweeaoqaqgeiow;
        goto gkoyauwycuyumiey;
        mackmiksusgquqku:
    }
    
    public static function ayseokmqycoqaigc() : bool
    {
        return class_exists("\x77\157\157\x63\x6f\x6d\155\145\162\143\145") && ManipulatePlugin::ggocakcisguuokai("\x77\157\x6f\x63\157\155\x6d\x65\x72\143\x65\57\x77\157\157\x63\157\x6d\x6d\145\162\x63\x65\x2e\160\150\160");
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
        goto sugiiygakykaogou;
        kuekaewgqsagkokm:
        return $aokagokqyuysuksm;
        goto eicoyaciiwoweyow;
        sugiiygakykaogou:
        $aokagokqyuysuksm = $umwqusowiqmyseom;
        goto qqoeqgqkmegyquie;
        yumugwyseyuawuae:
        kkcskacouykscykm:
        goto kuekaewgqsagkokm;
        qqoeqgqkmegyquie:
        if (!is_a($umwqusowiqmyseom, "\127\x43\137\x4f\x72\144\x65\162")) {
            goto kkcskacouykscykm;
        }
        goto gcaeuwucgqwocegi;
        gcaeuwucgqwocegi:
        $aokagokqyuysuksm = $umwqusowiqmyseom->get_id();
        goto yumugwyseyuawuae;
        eicoyaciiwoweyow:
    }
    
    public static function aqasygcsqysmmyke($product = null)
    {
        goto aoywumwiwsuugsae;
        qgwksesamqckoysm:
        return $product;
        goto iyqwcuwcoqsqiqey;
        aoywumwiwsuugsae:
        if (is_a($product, "\x57\x43\137\120\162\157\x64\x75\143\164")) {
            goto ccykaqwcuqguuesk;
        }
        goto kgyiaoswiyukcguu;
        ygogeqikkaiewqak:
        ccykaqwcuqguuesk:
        goto qgwksesamqckoysm;
        kgyiaoswiyukcguu:
        $product = DecoratorWoocommerce::aqasygcsqysmmyke($product);
        goto ygogeqikkaiewqak;
        iyqwcuwcoqsqiqey:
    }
    
    public static function mkiigkeqaeiwqyua() : bool
    {
        return in_array(DecoratorWoocommerce::useawgqusasoukqm(), ["\111\x52\124", "\111\x52\122"]);
    }
    
    public static function eywqaumgkccycyau($aokagokqyuysuksm, $ywmkwiwkosakssii = [])
    {
        goto eqmiagqymgsqikio;
        eqmiagqymgsqikio:
        $ywmkwiwkosakssii[self::ID] = $aokagokqyuysuksm;
        goto sqcucoqwgcookais;
        osqscmomgeumekym:
        uykoiemomggyyaqm:
        goto isqoqyuosaeauika;
        sqcucoqwgcookais:
        $wkyuegumgeqqqmyg = [];
        goto igoiiguaiiyskqye;
        igoiiguaiiyskqye:
        foreach ($wkyuegumgeqqqmyg as $aiowsaccomcoikus) {
            goto caeissowkcqcoisu;
            ouekywuyisaayusa:
            yqusmmkkqyqusoug:
            goto maeoaamgcykqqcac;
            kcyyceweysgmscgm:
            omygqyyicqyuswqs:
            goto ouekywuyisaayusa;
            wwoyegucuaugosys:
            $ywmkwiwkosakssii[$aiowsaccomcoikus] = DecoratorSanitize::aoeoykwemwaqsikc($ywmkwiwkosakssii[$aiowsaccomcoikus]);
            goto kcyyceweysgmscgm;
            caeissowkcqcoisu:
            if (!isset($ywmkwiwkosakssii[$aiowsaccomcoikus])) {
                goto omygqyyicqyuswqs;
            }
            goto wwoyegucuaugosys;
            maeoaamgcykqqcac:
        }
        goto osqscmomgeumekym;
        isqoqyuosaeauika:
        DecoratorWoocommerce::eywqaumgkccycyau($ywmkwiwkosakssii);
        goto cqkmekqeuoamwwik;
        cqkmekqeuoamwwik:
    }
    
    public static function oseiymowmquqkaca() : bool
    {
        global $woocommerce_loop;
        return DecoratorWoocommerce::kmymkocwcawgeccm() && isset($woocommerce_loop["\156\141\155\x65"]) && in_array($woocommerce_loop["\156\141\155\x65"], ["\x72\145\x6c\x61\164\145\144", "\x75\160\x20\55\x20\x73\145\x6c\x6c\x73"]);
    }
    
    public static function kyckwuuiqwmyoqma() : ?\WC_Query
    {
        goto aswqcceuwmmqciec;
        wwowwogiasqyegco:
        if (!$woocommerce) {
            goto gkqeioiiywequymm;
        }
        goto cowcyoscwiogwoss;
        eqskaoiwkcikoock:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto wwowwogiasqyegco;
        cowcyoscwiogwoss:
        $gqgemcmoicmgaqie = $woocommerce->query;
        goto iammguyywsgygewo;
        ekwgywkksceymecu:
        return $gqgemcmoicmgaqie;
        goto aesqskyuooksouwa;
        iammguyywsgygewo:
        gkqeioiiywequymm:
        goto ekwgywkksceymecu;
        aswqcceuwmmqciec:
        $gqgemcmoicmgaqie = null;
        goto eqskaoiwkcikoock;
        aesqskyuooksouwa:
    }
    
    public static function kkewuuisyiscmgyc() : WooCommerce
    {
        goto eqaqiuescmyiwsoq;
        umeuqqawicigwmmw:
        global $woocommerce;
        goto ywmkeguguoigeago;
        wocmuysuywyaeyia:
        $mksyucucyswaukig = WC();
        goto iiwkgiyuiuskiusa;
        iiwkgiyuiuskiusa:
        ockwkskmgeqemqwm:
        goto eqesiosukaowuquq;
        qoieockmumciwweq:
        goto ockwkskmgeqemqwm;
        goto qmccgkcskscsakcu;
        eqaqiuescmyiwsoq:
        if (function_exists("\127\x43")) {
            goto mkuoeggssimkqoee;
        }
        goto umeuqqawicigwmmw;
        eqesiosukaowuquq:
        return $mksyucucyswaukig;
        goto swyaqueaoyekgomq;
        ywmkeguguoigeago:
        $mksyucucyswaukig = $woocommerce;
        goto qoieockmumciwweq;
        qmccgkcskscsakcu:
        mkuoeggssimkqoee:
        goto wocmuysuywyaeyia;
        swyaqueaoyekgomq:
    }
    
    public static function scgumisucgwskyqk($product, $mgkceomocowocqyo = "\166\x69\145\x77") : string
    {
        goto ycaqamikucimygma;
        ueiooqcaegkyumkk:
        ueoykiauoyuauwsi:
        goto mqysyiqsowkciiiq;
        ycaqamikucimygma:
        $aumscagymwyyicag = '';
        goto gmqceeyooqckwwms;
        ikckcqggoqoimoio:
        if (!$product) {
            goto ueoykiauoyuauwsi;
        }
        goto qqsyqgokqqsqoooe;
        emsoowiaoaoayqyy:
        owgiiuqeeesguqsq:
        goto gowguesicegmegqw;
        gowguesicegmegqw:
        $eyuymeqcioasuyyi = $product->get_regular_price($mgkceomocowocqyo);
        goto owgocmqmgsgeayue;
        iuawscaywkoegium:
        goto yqmkgcicoecyuiku;
        goto emsoowiaoaoayqyy;
        mqysyiqsowkciiiq:
        return $aumscagymwyyicag;
        goto comswgimqmwcyyas;
        gmqceeyooqckwwms:
        $product = self::aqasygcsqysmmyke($product);
        goto ikckcqggoqoimoio;
        owgocmqmgsgeayue:
        yqmkgcicoecyuiku:
        goto usuiacsqegaeywgs;
        usuiacsqegaeywgs:
        $aumscagymwyyicag = DecoratorHook::sscegwueamckwmcy("\167\157\157\143\157\x6d\x6d\145\x72\x63\x65\137\160\162\157\x64\165\143\164\x5f\162\145\147\x75\154\141\162\x5f\x70\162\x69\143\145", $eyuymeqcioasuyyi, $product);
        goto ueiooqcaegkyumkk;
        qqsyqgokqqsqoooe:
        if (method_exists($product, "\x67\145\x74\x5f\163\141\x6c\145\x5f\x70\x72\x69\x63\145")) {
            goto owgiiuqeeesguqsq;
        }
        goto amqmckimqwauwkug;
        amqmckimqwauwkug:
        $eyuymeqcioasuyyi = $product->regular_price;
        goto iuawscaywkoegium;
        comswgimqmwcyyas:
    }
    
    public static function asaycagaeksiumkw($product, $mgkceomocowocqyo = "\166\x69\x65\x77") : string
    {
        goto wimquiyiyyakiyqo;
        kauocquekqgswwoe:
        eiimgesccmkgusys:
        goto ewkmiiygeqessaue;
        kwwqiuaycwkcigqq:
        if (method_exists($product, "\x67\x65\x74\x5f\163\x61\154\x65\137\160\162\x69\x63\x65")) {
            goto sigcqyomcgiyamkq;
        }
        goto cgsygucccwyayksw;
        csmqycguwyiekmwq:
        $eyuymeqcioasuyyi = $product->get_sale_price($mgkceomocowocqyo);
        goto kauocquekqgswwoe;
        cseuscicwscieqaa:
        $product = self::aqasygcsqysmmyke($product);
        goto gccusiaomowsyeqk;
        kkskwicmigikmwuk:
        goto eiimgesccmkgusys;
        goto makucowmowkkooyy;
        ewkmiiygeqessaue:
        $aumscagymwyyicag = DecoratorHook::sscegwueamckwmcy("\167\x6f\157\143\157\x6d\155\145\162\143\x65\x5f\160\x72\x6f\x64\165\x63\x74\x5f\x73\141\154\x65\x5f\160\162\x69\x63\145", $eyuymeqcioasuyyi, $product);
        goto cgiioksocuikciqu;
        kucuomkwkigoaaoi:
        return $aumscagymwyyicag;
        goto aqimsokikskmeukc;
        cgsygucccwyayksw:
        $eyuymeqcioasuyyi = $product->sale_price;
        goto kkskwicmigikmwuk;
        cgiioksocuikciqu:
        kgykiwcggygyekgc:
        goto kucuomkwkigoaaoi;
        wimquiyiyyakiyqo:
        $aumscagymwyyicag = '';
        goto cseuscicwscieqaa;
        gccusiaomowsyeqk:
        if (!$product) {
            goto kgykiwcggygyekgc;
        }
        goto kwwqiuaycwkcigqq;
        makucowmowkkooyy:
        sigcqyomcgiyamkq:
        goto csmqycguwyiekmwq;
        aqimsokikskmeukc:
    }
    
    public static function aqwquwewocyewasw() : bool
    {
        goto kqaqeisqomwwcasq;
        qyoyoscsokwicwcm:
        if (!($woocommerce && method_exists($woocommerce, "\x69\163\137\162\x65\x73\x74\137\x61\160\151\x5f\162\145\x71\165\145\163\164"))) {
            goto igmocmyuiauyaaky;
        }
        goto cekucgakuqaicscm;
        kqaqeisqomwwcasq:
        $uwqkkwmiiumuukoa = false;
        goto siawmiiggusigmks;
        siawmiiggusigmks:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto qyoyoscsokwicwcm;
        ikuecasooegqekwi:
        return $uwqkkwmiiumuukoa;
        goto auyuoiygayksuuua;
        cekucgakuqaicscm:
        $uwqkkwmiiumuukoa = $woocommerce->is_rest_api_request();
        goto awgckickkikmwgoe;
        awgckickkikmwgoe:
        igmocmyuiauyaaky:
        goto ikuecasooegqekwi;
        auyuoiygayksuuua:
    }
    
    public static function uceecgsoicggikeu() : ?WC_Cart
    {
        goto eikgggsiaicqiqag;
        pewociqgeseqykos:
        return $wwcysoksoogyacog;
        goto moqccissukkoumwo;
        gmymykusaimcgayu:
        ogkwaimcumgaueem:
        goto pewociqgeseqykos;
        ackemimmseeuauek:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto ayikyecyysisuioq;
        eikgggsiaicqiqag:
        $wwcysoksoogyacog = null;
        goto ackemimmseeuauek;
        ayikyecyysisuioq:
        if (!$woocommerce) {
            goto ogkwaimcumgaueem;
        }
        goto kmqcsyeeiyqwiusw;
        kmqcsyeeiyqwiusw:
        $wwcysoksoogyacog = $woocommerce->cart;
        goto gmymykusaimcgayu;
        moqccissukkoumwo:
    }
    
    public static function aoqkwiysueqqwigk() : ?string
    {
        goto ucmwwiwcaqesyqaw;
        iqmqycmwemkkugmw:
        if (function_exists("\167\143\137\x67\x65\164\x5f\x63\150\145\143\x6b\157\165\164\137\x75\x72\154")) {
            goto eoyokykwkikgaaww;
        }
        goto mwcqoqsgsoiacuqu;
        osucouyseikugqwm:
        return wc_get_checkout_url();
        goto kikgmuyaiiicugcg;
        mwcqoqsgsoiacuqu:
        return $woocommerce->cart->get_checkout_url();
        goto sagukwqksqiukyeq;
        oassuwsweqqyooss:
        eoyokykwkikgaaww:
        goto osucouyseikugqwm;
        sagukwqksqiukyeq:
        goto ouesqgosuiesgwas;
        goto oassuwsweqqyooss;
        ucmwwiwcaqesyqaw:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto iqmqycmwemkkugmw;
        kikgmuyaiiicugcg:
        ouesqgosuiesgwas:
        goto qyyioseuoicymucm;
        qyyioseuoicymucm:
    }
    
    public static function kccgkwigyyiugcco() : bool
    {
        return "\x79\145\x73" === self::giiuwsmyumqwwiyq("\145\156\x61\142\x6c\145\137\155\171\x61\x63\x63\157\165\156\164\137\x72\x65\147\151\163\x74\162\141\x74\151\x6f\x6e");
    }
    
    public static function yaaucgakecuykawk() : bool
    {
        global $woocommerce_loop;
        return DecoratorWoocommerce::kmymkocwcawgeccm() && isset($woocommerce_loop["\156\x61\x6d\x65"]) && in_array($woocommerce_loop["\x6e\141\155\145"], ["\165\x70\40\x2d\x20\163\145\154\154\163"]);
    }
    
    public static function ogkieiokqueakmyc() : bool
    {
        global $woocommerce_loop;
        return DecoratorWoocommerce::kmymkocwcawgeccm() && isset($woocommerce_loop["\x6e\141\x6d\145"]) && in_array($woocommerce_loop["\156\141\155\145"], ["\162\145\154\141\164\145\144"]);
    }
    
    public static function omwkqcuwceweymcc($product = null)
    {
        goto uwkusimiysaesysu;
        qeyyusmwmygyssis:
        kiwiacqeekiyqqum:
        goto ekiaooogkcaiqmku;
        agcecaceyeicacew:
        $aokagokqyuysuksm = $product->get_id();
        goto qeyyusmwmygyssis;
        uwkusimiysaesysu:
        if ($product) {
            goto gcueeowqwicyuuwm;
        }
        goto saoicecaigamyumi;
        wicgcmsymyamgkqo:
        gcueeowqwicyuuwm:
        goto owwkeimwommeqeuk;
        ekiaooogkcaiqmku:
        return $aokagokqyuysuksm;
        goto gcgguqeygkiuseei;
        saoicecaigamyumi:
        $product = self::aqasygcsqysmmyke(ManipulatePost::mwikyscisascoeea());
        goto wicgcmsymyamgkqo;
        ouyaoosmgkcycecy:
        if (!is_a($product, "\x57\x43\x5f\x50\162\157\144\x75\143\164")) {
            goto kiwiacqeekiyqqum;
        }
        goto agcecaceyeicacew;
        owwkeimwommeqeuk:
        $aokagokqyuysuksm = $product;
        goto ouyaoosmgkcycecy;
        gcgguqeygkiuseei:
    }
    
    public static function ageqswwkkqywckco($ywmkwiwkosakssii = []) : array
    {
        goto acykkosiggykiqae;
        iiaqqsyysmuiuqgk:
        foreach ($oysoyeaucuawyaky as $aokagokqyuysuksm) {
            goto qmwgkkusoumsaymy;
            wygeoqscyoqegsim:
            $oksqskmgoqiqciis[$aokagokqyuysuksm] = $product;
            goto kcwmuwimsuqeeika;
            kcwmuwimsuqeeika:
            yywwamymqqweegma:
            goto qouiaaqwcueugsyg;
            iuasisokiwkkgsig:
            if (!$product) {
                goto yywwamymqqweegma;
            }
            goto wygeoqscyoqegsim;
            qmwgkkusoumsaymy:
            $product = self::aqasygcsqysmmyke($aokagokqyuysuksm);
            goto iuasisokiwkkgsig;
            qouiaaqwcueugsyg:
            eqmmisowcsogsmmi:
            goto uqioouaicscwyeei;
            uqioouaicscwyeei:
        }
        goto gguqqicieewmyqak;
        egqwmisqumyygeaw:
        sygcsssigqkuemcu:
        goto eqswioyysgiegmkw;
        ekmowewoceagouse:
        $oksqskmgoqiqciis = [];
        goto asmqyacukagmsmog;
        gguqqicieewmyqak:
        kgkycyakimoowckw:
        goto egqwmisqumyygeaw;
        moyeqcaaoumugqga:
        $oysoyeaucuawyaky = ManipulatePost::ciugwooasaqcywas("\x70\162\x6f\144\165\x63\x74", $ywmkwiwkosakssii);
        goto ekmowewoceagouse;
        eqswioyysgiegmkw:
        return $oksqskmgoqiqciis;
        goto ecgigaamcwiqiukk;
        asmqyacukagmsmog:
        if (!is_array($oysoyeaucuawyaky)) {
            goto sygcsssigqkuemcu;
        }
        goto iiaqqsyysmuiuqgk;
        acykkosiggykiqae:
        $ywmkwiwkosakssii["\146\x69\145\154\144\163"] = "\x69\144\163";
        goto moyeqcaaoumugqga;
        ecgigaamcwiqiukk:
    }
    
    public static function weqwusgaqsmseiyq() : array
    {
        return ["\x69\x6d\141\147\145" => esc_html__("\x49\x6d\141\147\145", PR__CMN__FOUNDATION), "\x70\162\x69\x63\x65" => esc_html__("\x50\162\151\x63\x65", PR__CMN__FOUNDATION), "\x61\144\144\x2d\x74\157\55\x63\141\x72\164" => esc_html__("\x41\144\x64\x20\164\x6f\x20\143\x61\162\164", PR__CMN__FOUNDATION), "\x64\x65\163\x63\x72\151\160\x74\x69\157\x6e" => esc_html__("\x44\145\163\x63\x72\x69\x70\x74\151\157\x6e", PR__CMN__FOUNDATION), "\x73\153\165" => esc_html__("\123\x6b\165", PR__CMN__FOUNDATION), "\163\x74\157\x63\x6b" => esc_html__("\x41\166\x61\x69\154\141\x62\x69\x6c\151\164\171", PR__CMN__FOUNDATION), "\x77\145\x69\x67\x68\164" => esc_html__("\x57\x65\x69\147\x68\164", PR__CMN__FOUNDATION), "\144\151\155\145\x6e\x73\151\157\156\163" => esc_html__("\104\151\x6d\x65\156\163\151\x6f\x6e\x73", PR__CMN__FOUNDATION)];
    }
    
    public static function gmowuaggkmgkseyo() : bool
    {
        return DecoratorQuery::qmssqeyayicowkgy("\x70\x72\x6f\144\165\143\x74\137\x63\x61\x74");
    }
    
    public static function ecaegsuskkkigkgc() : ?WC_Checkout
    {
        goto ywogweeguksciwcw;
        qkkcyimckwcmwoyg:
        if (!$woocommerce) {
            goto wgieqooykcsmeemu;
        }
        goto soqwcqmyqkqyqawm;
        kuygeikysoqqqouy:
        return $yogeuygiqackeiky;
        goto gemiusgkmeaykywq;
        qaowiwsuoecmmkkw:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto qkkcyimckwcmwoyg;
        ywogweeguksciwcw:
        $yogeuygiqackeiky = null;
        goto qaowiwsuoecmmkkw;
        yaaygymiwgcucuee:
        wgieqooykcsmeemu:
        goto kuygeikysoqqqouy;
        soqwcqmyqkqyqawm:
        $yogeuygiqackeiky = $woocommerce->yogeuygiqackeiky();
        goto yaaygymiwgcucuee;
        gemiusgkmeaykywq:
    }
    
    public static function giyscymwkesykqsg($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie)
    {
        self::cmussoegoauyyguw("\x73\145\164", $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie);
    }
    
    public static function qusqewgmqyucyooc($product, $ikgwqyuyckaewsow)
    {
        goto kqkckwwigeyywyik;
        smucwoowmswcmqiq:
        
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus => $ymqmyyeuycgmigyo) {
            goto wemcucimscmkccee;
            wuiwikwsqoyseayq:
            igsgeycmgyyiqyaw:
            goto giikseaiieuqkccg;
            wemcucimscmkccee:
            switch ($aiowsaccomcoikus) {
                case "\x74\x69\164\154\x65":
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $product->get_title();
                    goto ueygyquuioiuckmw;
                case "\x70\x72\151\x63\x65":
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $product->get_price_html();
                    goto ueygyquuioiuckmw;
                case "\x69\155\141\147\x65":
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = intval(ManipulatePost::wsiiswmaagmyiaiw($aokagokqyuysuksm));
                    goto ueygyquuioiuckmw;
                case "\144\x65\163\143\x72\x69\x70\x74\x69\157\x6e":
                    goto gqeosgkaqwoooomg;
                    gqeosgkaqwoooomg:
                    $ukwokcuqauuosmoo = DecoratorHook::sscegwueamckwmcy("\x77\157\157\143\157\155\x6d\145\162\x63\145\137\x73\x68\x6f\162\x74\x5f\144\145\163\143\162\151\x70\164\x69\x6f\x6e", $product->get_short_description());
                    goto ceyiiqgekmueswas;
                    csiumocowgwwkseu:
                    goto ueygyquuioiuckmw;
                    goto ceooqwocwgyaosca;
                    ceyiiqgekmueswas:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $ukwokcuqauuosmoo;
                    goto csiumocowgwwkseu;
                    ceooqwocwgyaosca:
                case "\163\x74\x6f\143\x6b":
                    goto skuaykemeskiciyq;
                    socyamqieqoiusuo:
                    if (!empty($imooqykauqyyswsw["\141\x76\141\151\154\x61\142\x69\154\x69\164\171"])) {
                        goto eggeemqkkcgiwkgm;
                    }
                    goto ggwecgmoiwsqaiem;
                    momkymyyokcqmiwc:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $imooqykauqyyswsw["\x61\166\141\151\x6c\141\x62\x69\154\x69\x74\171"];
                    goto oiaqgumiwqckysqq;
                    kmcmmgeegciwucsu:
                    eggeemqkkcgiwkgm:
                    goto momkymyyokcqmiwc;
                    oiaqgumiwqckysqq:
                    goto ueygyquuioiuckmw;
                    goto yseqooouywimkcsi;
                    ggwecgmoiwsqaiem:
                    $imooqykauqyyswsw["\141\166\x61\151\154\x61\x62\x69\154\151\164\x79"] = __("\111\x6e\40\163\x74\x6f\143\153", PR__CMN__FOUNDATION);
                    goto kmcmmgeegciwucsu;
                    skuaykemeskiciyq:
                    $imooqykauqyyswsw = $product->get_availability();
                    goto socyamqieqoiusuo;
                    yseqooouywimkcsi:
                case "\x73\x6b\x75":
                    goto rgeqksseqwssoqeq;
                    rmamqouaqyeogmmm:
                    !$mmkkmgusieqaqkki && ($mmkkmgusieqaqkki = "\x2d");
                    goto ukoqocmokmwgkggo;
                    scquwmwgssauikwq:
                    goto ueygyquuioiuckmw;
                    goto imycougggwgmwque;
                    rgeqksseqwssoqeq:
                    $mmkkmgusieqaqkki = $product->get_sku();
                    goto rmamqouaqyeogmmm;
                    ukoqocmokmwgkggo:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $mmkkmgusieqaqkki;
                    goto scquwmwgssauikwq;
                    imycougggwgmwque:
                case "\x77\145\151\147\x68\164":
                    goto igigquuegyegmyas;
                    smwcciswieyocowa:
                    goto eguqeogcowkuqmes;
                    goto eiiygsskgeocucse;
                    kwkaekkyamsuosic:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $mycwwoyokwokowmo;
                    goto qmmiuscmmiciksuq;
                    wsksyesmkwcseqmi:
                    eguqeogcowkuqmes:
                    goto kwkaekkyamsuosic;
                    ucasooakcusgmasq:
                    $mycwwoyokwokowmo = "\55";
                    goto smwcciswieyocowa;
                    scqikcmqmsuaccuk:
                    $mycwwoyokwokowmo = wc_format_localized_decimal($mycwwoyokwokowmo) . "\40" . esc_attr(DecoratorOption::get("\167\x6f\157\x63\x6f\x6d\155\x65\x72\143\145\137\167\x65\x69\147\x68\x74\x5f\x75\156\151\x74"));
                    goto wsksyesmkwcseqmi;
                    eiiygsskgeocucse:
                    igwwywsaqumsmakc:
                    goto scqikcmqmsuaccuk;
                    igigquuegyegmyas:
                    if ($mycwwoyokwokowmo = $product->get_weight()) {
                        goto igwwywsaqumsmakc;
                    }
                    goto ucasooakcusgmasq;
                    qmmiuscmmiciksuq:
                    goto ueygyquuioiuckmw;
                    goto wysqeaawgmsgywwe;
                    wysqeaawgmsgywwe:
                case "\144\x69\x6d\145\x6e\163\151\157\x6e\163":
                    goto msmyekocyqaeiqui;
                    ykgaewsgaccoewmy:
                    goto ueygyquuioiuckmw;
                    goto goagoaikyyyaisgy;
                    qiwwswgwkcekequo:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $qaiwqwwemmyyqosy;
                    goto ykgaewsgaccoewmy;
                    qyqeeqeasassiyqg:
                    !$qaiwqwwemmyyqosy && ($qaiwqwwemmyyqosy = "\55");
                    goto qiwwswgwkcekequo;
                    msmyekocyqaeiqui:
                    $qaiwqwwemmyyqosy = function_exists("\x77\143\x5f\x66\x6f\162\x6d\x61\164\137\144\x69\155\x65\156\x73\x69\x6f\156\163") ? wc_format_dimensions($product->get_dimensions(false)) : $product->get_dimensions();
                    goto qyqeeqeasassiyqg;
                    goagoaikyyyaisgy:
                default:
                    goto igymmkeosawsmquy;
                    rmoogiakmggyosaw:
                    ouqsaimcqcgaemws:
                    goto ggiyqoigmmgiamyo;
                    ymaeysgwkcwwiqmu:
                    goto ueygyquuioiuckmw;
                    goto ywcksgacokiyuuks;
                    cocwkumuyaacwuie:
                    $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($aokagokqyuysuksm, $aiowsaccomcoikus);
                    goto iaaaeesqwkogwook;
                    wskwqauamemaueue:
                    goto mqaamgcyimqcgyyu;
                    goto rmoogiakmggyosaw;
                    kukmwwkmmiwaqmai:
                    kisqeasymciqmcma:
                    goto wyomsacikcaawgow;
                    igymmkeosawsmquy:
                    if (DecoratorTaxonomy::myagqecycsaiyqsk($aiowsaccomcoikus)) {
                        goto ouqsaimcqcgaemws;
                    }
                    goto smiosccsmkciiaei;
                    ocowsksosgwgogmy:
                    qcwmwsussmygiowm:
                    goto kukmwwkmmiwaqmai;
                    umeiygeyqcouqcsk:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $eqgoocgaqwqcimie;
                    goto wskwqauamemaueue;
                    ugsimmgccyugoqka:
                    if (!is_array($eqgoocgaqwqcimie)) {
                        goto kiqioykgyqakwmsc;
                    }
                    goto gmgysasgwkiakiic;
                    iaaaeesqwkogwook:
                    if (empty($uyuaosigqymaqsaa)) {
                        goto kisqeasymciqmcma;
                    }
                    goto uuemseeewwgcoqqc;
                    rayoswqmyqiuiics:
                    kiqioykgyqakwmsc:
                    goto umeiygeyqcouqcsk;
                    gmgysasgwkiakiic:
                    $eqgoocgaqwqcimie = implode("\54\x20", $eqgoocgaqwqcimie);
                    goto rayoswqmyqiuiics;
                    kciguwegyomuqawq:
                    mqaamgcyimqcgyyu:
                    goto ymaeysgwkcwwiqmu;
                    smiosccsmkciiaei:
                    $eqgoocgaqwqcimie = $product->get_attribute($aiowsaccomcoikus);
                    goto ugsimmgccyugoqka;
                    wyomsacikcaawgow:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = implode("\54\40", $qqswgiawgeaeoecu[$aiowsaccomcoikus]);
                    goto kciguwegyomuqawq;
                    uuemseeewwgcoqqc:
                    foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
                        goto cuesuqwoogmkcwuu;
                        cuesuqwoogmkcwuu:
                        $iwewcwusemqaiggk = DecoratorSanitize::iwewcwusemqaiggk($iwewcwusemqaiggk, $aiowsaccomcoikus);
                        goto yuyqiqgiykceuwyi;
                        yuyqiqgiykceuwyi:
                        $qqswgiawgeaeoecu[$aiowsaccomcoikus][] = ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk);
                        goto uamgomuoiswgmyou;
                        uamgomuoiswgmyou:
                        mqyceoiukuosysus:
                        goto sacqwquywoyemsui;
                        sacqwquywoyemsui:
                    }
                    goto ocowsksosgwgogmy;
                    ggiyqoigmmgiamyo:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = [];
                    goto cocwkumuyaacwuie;
                    ywcksgacokiyuuks:
            }
            goto wuiwikwsqoyseayq;
            cqcoykgagkcckiyi:
            gqgiygyaagieswyg:
            goto uukiykgkqyekggay;
            giikseaiieuqkccg:
            ueygyquuioiuckmw:
            goto cqcoykgagkcckiyi;
            uukiykgkqyekggay:
        }
        goto mmkuokwocceayask;
        qmkkgkcemceygaou:
        omogkekcmgcmgaks:
        goto mqmwceouegaaucoi;
        mmkuokwocceayask:
        akgusigiuuowiemm:
        goto kuukuccioawuoiea;
        yciammygksiessww:
        $aokagokqyuysuksm = $product->get_id();
        goto smucwoowmswcmqiq;
        msygsomkaywgokuq:
        $product->fields = $qqswgiawgeaeoecu;
        goto vwwckgewsegagiqm;
        mqmwceouegaaucoi:
        return $product;
        goto wgiewcmyikiwsasu;
        kuukuccioawuoiea:
        if (!$qqswgiawgeaeoecu) {
            goto qagmacuwmywoisyq;
        }
        goto msygsomkaywgokuq;
        kascgoogiymmugcy:
        $qqswgiawgeaeoecu = [];
        goto yciammygksiessww;
        vwwckgewsegagiqm:
        qagmacuwmywoisyq:
        goto qmkkgkcemceygaou;
        kqkckwwigeyywyik:
        $product = self::aqasygcsqysmmyke($product);
        goto ikoqcwgayswaisqo;
        ikoqcwgayswaisqo:
        if (!$product) {
            goto omogkekcmgcmgaks;
        }
        goto kascgoogiymmugcy;
        wgiewcmyikiwsasu:
    }
    
    public static function qysuguqkwiksywaq($product, $isweyuoisomqyaag) : array
    {
        goto ssmesescgegmqegs;
        okyoymqacqaimooo:
        if (!($isweyuoisomqyaag && $product instanceof WC_Product_Variable)) {
            goto cqguwaockaiuioqo;
        }
        goto xsucwemqaekogyqi;
        ssmesescgegmqegs:
        $uomewyckeuqoqocu = [];
        goto iwwcyaoguoweqqmi;
        iwwcyaoguoweqqmi:
        $product = self::aqasygcsqysmmyke($product);
        goto okyoymqacqaimooo;
        cmomkawiiikmcccq:
        return $uomewyckeuqoqocu;
        goto ksosaiwckkacoeww;
        msiwaicoesyagumk:
        cqguwaockaiuioqo:
        goto cmomkawiiikmcccq;
        xsucwemqaekogyqi:
        $uomewyckeuqoqocu = $product->get_available_variation($isweyuoisomqyaag);
        goto msiwaicoesyagumk;
        ksosaiwckkacoeww:
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
        $ywmkwiwkosakssii["\x6d\x65\164\141\x5f\161\x75\145\x72\x79"] = ["\155\x65\164\141\x5f\x6b\145\171" => $uusmaiomayssaecw, "\x6d\145\164\x61\x5f\166\x61\x6c\x75\x65" => $eqgoocgaqwqcimie, "\155\145\164\x61\x5f\143\x6f\155\x70\x61\x72\x65" => "\114\x49\113\x45"];
        return DecoratorWoocommerce::ageqswwkkqywckco($ywmkwiwkosakssii);
    }
    
    public static function gkokioeusiomuwee($product, $cqcsaaswaciweiie = [], $aqcaekiaqgiaiwiu = true)
    {
        goto iwwawgsoqcciekeq;
        woweqwuwmegoecgu:
        $uomewyckeuqoqocu["\167\145\151\147\x68\x74"] = ["\154\141\x62\x65\154" => __("\127\145\x69\x67\150\164", "\167\157\x6f\143\x6f\155\155\145\162\143\x65"), "\x76\x61\154\165\x65" => wc_format_weight($product->get_weight())];
        goto csmosoqqwicqwuqg;
        iwwawgsoqcciekeq:
        $uomewyckeuqoqocu = [];
        goto sgaamousiakskkko;
        eawiyomugeiugoca:
        aaoeckeaamycqkam:
        goto yokquaecwougwgme;
        sgaamousiakskkko:
        $product = self::aqasygcsqysmmyke($product);
        goto mwqqkaiwyugqakeq;
        csmosoqqwicqwuqg:
        ksmgqwcssgmuykqm:
        goto osmogyiiwqqwieoe;
        mwqqkaiwyugqakeq:
        
        $qaiwqwwemmyyqosy = DecoratorHook::sscegwueamckwmcy("\167\143\137\160\162\x6f\x64\x75\x63\164\x5f\x65\156\x61\142\154\x65\x5f\144\x69\x6d\145\x6e\163\151\x6f\156\x73\137\144\151\x73\160\154\x61\171", $product->has_weight() || $product->has_dimensions());
        goto yikaoaeoqsgieqoq;
        osmogyiiwqqwieoe:
        if (!($qaiwqwwemmyyqosy && $product->has_dimensions())) {
            goto owqukoyoaogmwioi;
        }
        goto ymqsaggkkwkoomgc;
        ymqsaggkkwkoomgc:
        $uomewyckeuqoqocu["\144\x69\155\x65\156\x73\x69\157\x6e\x73"] = ["\154\141\142\x65\x6c" => __("\x44\151\155\x65\x6e\163\151\157\x6e\163", "\x77\157\157\x63\157\x6d\x6d\x65\x72\143\145"), "\166\x61\x6c\165\x65" => wc_format_dimensions($product->get_dimensions(false))];
        goto suuwwusyekuwqgwi;
        yokquaecwougwgme:
        return DecoratorHook::sscegwueamckwmcy("\167\x6f\157\x63\157\155\155\x65\x72\143\145\x5f\144\x69\x73\x70\154\141\x79\x5f\160\162\157\144\165\x63\x74\x5f\141\x74\164\x72\151\142\165\x74\145\x73", $uomewyckeuqoqocu, $product);
        goto gqmqqaumkqkyyuom;
        suuwwusyekuwqgwi:
        owqukoyoaogmwioi:
        goto cccusomswoycqgye;
        yqemqgiwcuoowges:
        foreach ($siquossayskcwkea as $ymkomoccmymcoiea) {
            goto mimgyeoccsuwmomg;
            megqkwsyeisgoiuq:
            $kskgqoywkoawosao = true;
            goto qagsccmgemwyowgq;
            cssokcmoicccseqa:
            if (!$kskgqoywkoawosao) {
                goto oswkqueiycsgwwqc;
            }
            goto owosmsmuaueegaas;
            yoicqeqousygweyk:
            gcoaosuecgyuuiyq:
            goto gkgiqeqokmyaosyi;
            qagsccmgemwyowgq:
            if (!(is_array($cqcsaaswaciweiie) && $cqcsaaswaciweiie)) {
                goto usamasqcwkcaaeyo;
            }
            goto swuockeicagsysku;
            wgakiauyywueqsma:
            $ymqmyyeuycgmigyo = DecoratorWoocommerce::gmeusukogwcamcyc($ymqmyyeuycgmigyo);
            goto yoicqeqousygweyk;
            swuockeicagsysku:
            foreach ($cqcsaaswaciweiie as $tsuauommsquiesmk => $eqgoocgaqwqcimie) {
                goto gigyyqgmkceykwam;
                ksyaeigosimeymmu:
                $kskgqoywkoawosao = false;
                goto amwucayokoyowcki;
                gigyyqgmkceykwam:
                $uiymkeeaukcyqqik = ManipulateArray::get($mmykcgusskuuuace, $tsuauommsquiesmk, false);
                goto kwuayueukssiusyo;
                kwuayueukssiusyo:
                if (!(is_array($uiymkeeaukcyqqik) && !in_array($eqgoocgaqwqcimie, $uiymkeeaukcyqqik) && $uiymkeeaukcyqqik != $eqgoocgaqwqcimie)) {
                    goto umwsiiqcymkwcasg;
                }
                goto ksyaeigosimeymmu;
                amwucayokoyowcki:
                goto oiioqgoqyykuocou;
                goto igkykqemaiuckkqm;
                igkykqemaiuckkqm:
                umwsiiqcymkwcasg:
                goto ywckcmesqeiougoy;
                ywckcmesqeiougoy:
                kgwcgkqqguiwgmmm:
                goto uqcqusigauwqaucm;
                uqcqusigauwqaucm:
            }
            goto cwcqcsgwwkokqgoy;
            gkgiqeqokmyaosyi:
            $uomewyckeuqoqocu[$ymqmyyeuycgmigyo] = $mmykcgusskuuuace;
            goto mqweissqoiqukwuc;
            ucuyyuummcgmmcoo:
            usamasqcwkcaaeyo:
            goto cssokcmoicccseqa;
            owosmsmuaueegaas:
            $ymqmyyeuycgmigyo = $ymkomoccmymcoiea->get_name();
            goto okcoqaemsekeyqgi;
            okcoqaemsekeyqgi:
            if (!$aqcaekiaqgiaiwiu) {
                goto gcoaosuecgyuuiyq;
            }
            goto wgakiauyywueqsma;
            cwcqcsgwwkokqgoy:
            oiioqgoqyykuocou:
            goto ucuyyuummcgmmcoo;
            mimgyeoccsuwmomg:
            $mmykcgusskuuuace = self::cswwmqwaucwuqcaq($product, $ymkomoccmymcoiea);
            goto megqkwsyeisgoiuq;
            uycysmimgmsawemy:
            sawkewuuqsaekcsy:
            goto ggiswsmgccuackao;
            mqweissqoiqukwuc:
            oswkqueiycsgwwqc:
            goto uycysmimgmsawemy;
            ggiswsmgccuackao:
        }
        goto eawiyomugeiugoca;
        cccusomswoycqgye:
        
        $siquossayskcwkea = array_filter($product->get_attributes(), "\x77\143\x5f\141\x74\164\162\151\142\x75\x74\x65\x73\137\141\x72\162\x61\171\x5f\x66\151\x6c\x74\145\x72\137\166\151\x73\x69\x62\154\145");
        goto yqemqgiwcuoowges;
        yikaoaeoqsgieqoq:
        if (!($qaiwqwwemmyyqosy && $product->has_weight())) {
            goto ksmgqwcssgmuykqm;
        }
        goto woweqwuwmegoecgu;
        gqmqqaumkqkyyuom:
    }
    
    public static function ucqakycuekccuocw($aqykuigiuwmmcieu = self::OBJECT) : ?array
    {
        goto egaqcmmgioyoskak;
        uccuwggkcciaascm:
        kssuoaucoagqicew:
        goto qmgqakuqmkigkgcw;
        oiecwmgwkgscuaom:
        ManipulateArray::unset($seyqqsmuaiegkeeq, ["\160\x72\157\x64\165\x63\164\137\x73\150\151\x70\160\x69\156\147\137\143\154\x61\x73\x73", "\160\x72\157\x64\x75\x63\164\x5f\x76\151\x73\151\x62\x69\154\151\x74\171", "\x70\162\x6f\x64\165\143\164\137\164\171\x70\x65"]);
        goto uccuwggkcciaascm;
        qmgqakuqmkigkgcw:
        return $seyqqsmuaiegkeeq;
        goto oimwsegacayecyko;
        egaqcmmgioyoskak:
        static $seyqqsmuaiegkeeq = [];
        goto oiekocisyuaicoey;
        oiekocisyuaicoey:
        if (!empty($seyqqsmuaiegkeeq)) {
            goto kssuoaucoagqicew;
        }
        goto swwmuqsewiaswasq;
        swwmuqsewiaswasq:
        $seyqqsmuaiegkeeq = DecoratorTaxonomy::qgckgkwskmsomoqs("\160\x72\x6f\x64\x75\143\164", $aqykuigiuwmmcieu);
        goto oiecwmgwkgscuaom;
        oimwsegacayecyko:
    }
    
    public static function mywkcmciykgikmyc($product, $kesssewsiegssiya, $ywmkwiwkosakssii = []) : array
    {
        return DecoratorWoocommerce::mywkcmciykgikmyc(self::omwkqcuwceweymcc($product), $kesssewsiegssiya, $ywmkwiwkosakssii);
    }
    
    public static function iwoqeaamkmyoquwm($product, $scwmkmciyywokcug) : array
    {
        goto swasewcuckegeuuy;
        gaoeaaeausmqguee:
        $oqseeekuqisekiwy = array_map("\145\x73\x63\x5f\x73\x71\x6c", DecoratorWoocommerce::ouqoeawmueswmksm());
        goto qqeycioeqswikseq;
        swasewcuckegeuuy:
        global $wpdb;
        goto wqeaomqyumqiocka;
        qqeycioeqswikseq:
        return $wpdb->get_col("\12\11\11\11\123\105\x4c\x45\x43\124\40\157\x69\x73\x2e\157\x72\144\x65\x72\x5f\x69\144\12\11\11\x9\x46\x52\117\x4d\x20{$yuwymayicwwqiske}\x77\157\x6f\143\x6f\155\x6d\x65\162\143\145\x5f\157\162\144\145\162\137\x69\164\x65\x6d\163\x20\x61\x73\40\x6f\x69\163\12\x9\11\x9\x4c\105\106\x54\40\112\x4f\111\116\40{$yuwymayicwwqiske}\x77\157\x6f\143\x6f\x6d\x6d\x65\x72\x63\x65\137\x6f\x72\144\145\162\x5f\x69\164\x65\155\x6d\x65\164\x61\x20\x61\163\x20\x6f\x69\155\x20\x4f\116\40\157\151\163\x2e\x6f\x72\x64\x65\x72\x5f\151\x74\x65\x6d\137\151\x64\40\75\x20\x6f\x69\x6d\x2e\x6f\162\x64\145\162\137\x69\164\145\155\137\151\144\12\x9\11\x9\114\x45\x46\124\40\x4a\117\111\116\x20{$wpdb->posts}\40\x41\123\40\160\40\x4f\x4e\x20\157\151\x73\x2e\157\x72\144\145\162\x5f\x69\144\x20\75\40\160\x2e\x49\x44\xa\11\x9\x9\x4c\x45\106\124\40\x4a\x4f\x49\x4e\x20{$wpdb->postmeta}\x20\101\123\40\160\155\40\x4f\116\x20\157\x69\x73\x2e\x6f\162\144\x65\162\137\x69\144\x20\75\x20\x70\x6d\x2e\155\x65\164\141\137\151\144\xa\11\11\11\x57\110\x45\122\105\x20\x70\56\x70\157\x73\164\x5f\x74\171\160\x65\x20\75\40\x27\163\150\x6f\x70\137\157\162\144\145\162\x27\12\11\x9\11\x41\x4e\104\x20\x70\x2e\160\x6f\x73\x74\x5f\x73\x74\141\x74\x75\163\x20\x49\116\x20\x28\x20\x27\x77\143\x2d" . implode("\47\54\x20\x27\x77\143\x2d", $oqseeekuqisekiwy) . "\x27\40\x29\12\11\x9\11\x41\116\104\40\x6f\x69\x73\x2e\x6f\x72\x64\x65\x72\137\x69\x74\145\x6d\137\164\x79\x70\x65\40\x3d\40\x27\x6c\x69\156\x65\137\151\164\145\155\47\12\x9\x9\11\101\116\x44\40\x6f\x69\x6d\56\155\145\164\x61\x5f\153\145\171\x20\x3d\40\47\137\x70\x72\x6f\x64\x75\x63\x74\137\x69\144\47\xa\11\x9\11\101\x4e\104\x20\x6f\151\x6d\56\155\x65\x74\141\x5f\166\141\154\x75\x65\40\75\x20\x27{$product}\47\12\x9\11\x9\x41\x4e\104\x20\x70\155\x2e\155\x65\x74\141\137\x6b\145\171\40\75\40\47\137\x63\x75\163\x74\x6f\155\x65\162\137\165\163\145\x72\47\xa\11\x9\x9\x41\x4e\104\x20\x70\x6d\56\x6d\145\x74\x61\x5f\x76\x61\x6c\x75\145\x20\x3d\x20\x27{$scwmkmciyywokcug}\x27\12\40\x20\x20\x20\11");
        goto kgwgksykmqweowgi;
        quookucgqymiqocy:
        $product = self::omwkqcuwceweymcc($product);
        goto gaoeaaeausmqguee;
        wqeaomqyumqiocka:
        $yuwymayicwwqiske = $wpdb->prefix;
        goto quookucgqymiqocy;
        kgwgksykmqweowgi:
    }
    
    public static function giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee = null, $yuwymayicwwqiske = "\167\157\157\x63\157\x6d\x6d\145\x72\x63\145\x5f")
    {
        goto sokekecgsmeyesqq;
        muaaeioooicwskgu:
        return DecoratorOption::get($uusmaiomayssaecw, $ggauoeuaesiymgee);
        goto ecqswsccqomawuoy;
        coqswqysimeumkei:
        gygmukceqmuewaim:
        goto muaaeioooicwskgu;
        ugkkcqkwssgykcyo:
        $uusmaiomayssaecw = $yuwymayicwwqiske . $uusmaiomayssaecw;
        goto coqswqysimeumkei;
        sokekecgsmeyesqq:
        if (!$yuwymayicwwqiske) {
            goto gygmukceqmuewaim;
        }
        goto ugkkcqkwssgykcyo;
        ecqswsccqomawuoy:
    }
    
    public static function cswwmqwaucwuqcaq($product, $ymkomoccmymcoiea) : array
    {
        goto owauaaeeaeoqgiii;
        ykcmokmsimckuego:
        $mmykcgusskuuuace = ["\x76\x61\x6c\x75\145" => DecoratorHook::sscegwueamckwmcy("\x77\157\x6f\x63\157\x6d\x6d\145\x72\143\x65\x5f\141\x74\x74\162\x69\x62\x75\164\145", wptexturize(implode("\x2c\40", $qqswgiawgeaeoecu)), $ymkomoccmymcoiea, $qqswgiawgeaeoecu), "\x6c\x61\142\145\x6c" => DecoratorWoocommerce::qysciqmmoqsaqmqk($ymkomoccmymcoiea->get_name(), $product)];
        goto aeoicygsgoeeqguk;
        kgkameuwwcmaawwg:
        $qqswgiawgeaeoecu = $ymkomoccmymcoiea->get_options();
        goto ssooqmscuqwmcoeu;
        asmkyaumussymycs:
        foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
            goto wqcseagmwswqeqgu;
            wqcseagmwswqeqgu:
            $ymqmyyeuycgmigyo = esc_html($iwewcwusemqaiggk->name);
            goto wwuwumqemissswei;
            gsqmakgaqakuawue:
            $qqswgiawgeaeoecu[] = ManipulateHTML::uuccukgasskgimsq("\141", ["\150\162\x65\x66" => ManipulateTerm::qmgcisuuikgmqcsu(ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk), $ymkomoccmymcoiea->get_name()), "\x72\145\154" => "\x74\141\x67"], $ymqmyyeuycgmigyo);
            goto ggoceeqkiqmqkiwg;
            eoikakegoqcywcui:
            goto wmkkqgiamggikgsi;
            goto ccmgkkiyameumyoi;
            ccmgkkiyameumyoi:
            eeuosekauyeiqoie:
            goto gsqmakgaqakuawue;
            ggoceeqkiqmqkiwg:
            wmkkqgiamggikgsi:
            goto qqoaguokgcoeieyi;
            qwsgukcwoomuuais:
            $qqswgiawgeaeoecu[] = $ymqmyyeuycgmigyo;
            goto eoikakegoqcywcui;
            wwuwumqemissswei:
            if ($kesssewsiegssiya->attribute_public) {
                goto eeuosekauyeiqoie;
            }
            goto qwsgukcwoomuuais;
            qqoaguokgcoeieyi:
            cmicuicekiiowekc:
            goto skoaowmysckmmocc;
            skoaowmysckmmocc:
        }
        goto kgecwaiwqeacyqge;
        ssooqmscuqwmcoeu:
        foreach ($qqswgiawgeaeoecu as &$eqgoocgaqwqcimie) {
            $eqgoocgaqwqcimie = make_clickable(esc_html($eqgoocgaqwqcimie));
            oomiawgcsyaaqaao:
        }
        goto kamkksumiggskuay;
        iwqasgooqqmcyqmy:
        goto qiqmamemmguaieiw;
        goto keuikgoukmwokcoa;
        keuikgoukmwokcoa:
        wokmesqciaaskwoe:
        goto yqccqmsucoukqkmw;
        yqccqmsucoukqkmw:
        $kesssewsiegssiya = $ymkomoccmymcoiea->get_taxonomy_object();
        goto qwykccyeiymiomyi;
        kamkksumiggskuay:
        ecuosiaqyaoqckao:
        goto iwqasgooqqmcyqmy;
        qwykccyeiymiomyi:
        $uyuaosigqymaqsaa = self::mywkcmciykgikmyc($product, $ymkomoccmymcoiea->get_name(), ["\x66\x69\145\154\144\x73" => "\141\154\154"]);
        goto asmkyaumussymycs;
        aeoicygsgoeeqguk:
        return (array) DecoratorHook::sscegwueamckwmcy("\167\157\157\x63\x6f\x6d\x6d\145\x72\x63\x65\x5f\x61\164\164\162\151\x62\165\x74\145\137\157\x75\164\160\165\164", $mmykcgusskuuuace, $ymkomoccmymcoiea, $product);
        goto aqqgkiieakuwceea;
        owauaaeeaeoqgiii:
        $qqswgiawgeaeoecu = [];
        goto eymiaowquwyiggie;
        eymiaowquwyiggie:
        if ($ymkomoccmymcoiea->is_taxonomy()) {
            goto wokmesqciaaskwoe;
        }
        goto kgkameuwwcmaawwg;
        wsasggmqwyisgoiq:
        qiqmamemmguaieiw:
        goto ykcmokmsimckuego;
        kgecwaiwqeacyqge:
        iwwayiuyaecikeku:
        goto wsasggmqwyisgoiq;
        aqqgkiieakuwceea:
    }
    
    public static function cmussoegoauyyguw($aiamqeawckcsuaou, $ymqmyyeuycgmigyo = '', $eqgoocgaqwqcimie = '', $kekikiwsckuiyuyo = false)
    {
        goto qmusucqwswsqsgwc;
        amuoiqyswiesyyck:
        wewkyisikaywwcmu:
        goto ioimwcssyaqsuqma;
        esgwyeyackaweskk:
        cyycimgiyeqgssuy:
        goto qwamueuasumwowym;
        iiskacegeekeseky:
        $woocommerce->session->{$ymqmyyeuycgmigyo} = $eqgoocgaqwqcimie;
        goto ukoqsuaqouuqkuig;
        ogyguukmcmoqkqei:
        cwqmuqiqouooguqm:
        goto wcuguimgckkocagq;
        acsmysaakckkkkie:
        if ($aiamqeawckcsuaou == "\163\145\164") {
            goto cwqmuqiqouooguqm;
        }
        goto womskaaiqugkuggi;
        caoqqqweswimckec:
        $eqgoocgaqwqcimie = $cmussoegoauyyguw->{$ymqmyyeuycgmigyo};
        goto cumieyuwywwwsaqg;
        imwkaaqausgqquoo:
        $cmussoegoauyyguw = $woocommerce->session;
        goto acsmysaakckkkkie;
        cumieyuwywwwsaqg:
        goto wewkyisikaywwcmu;
        goto esgwyeyackaweskk;
        eawmqueomoausgog:
        vosacywygmcokgkw:
        goto ykqswiqaqaogkksc;
        amocqywwugaccike:
        okseeygkgkqkwsgw:
        goto cckmsweoqwaucgcs;
        qmusucqwswsqsgwc:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto imwkaaqausgqquoo;
        youqqmmoywqeggeg:
        ciamwmmiqcseaeuc:
        goto qeycwoqakqucwscm;
        wqiyuoiwqekmsues:
        gykoquuuowomucyq:
        goto eawmqueomoausgog;
        womskaaiqugkuggi:
        if (!($aiamqeawckcsuaou == "\147\145\164")) {
            goto vosacywygmcokgkw;
        }
        goto yimasagkemgkoeqq;
        oyaeggoyqusqqcyo:
        return $eqgoocgaqwqcimie;
        goto wgkecsowgumikqqm;
        wcuguimgckkocagq:
        if (method_exists($cmussoegoauyyguw, $aiamqeawckcsuaou)) {
            goto okseeygkgkqkwsgw;
        }
        goto iiskacegeekeseky;
        ukoqsuaqouuqkuig:
        goto ciamwmmiqcseaeuc;
        goto amocqywwugaccike;
        oekkmwkqkuqwckui:
        unset($woocommerce->session->{$ymqmyyeuycgmigyo});
        goto wqiyuoiwqekmsues;
        qwamueuasumwowym:
        $eqgoocgaqwqcimie = $cmussoegoauyyguw->{$aiamqeawckcsuaou}($ymqmyyeuycgmigyo);
        goto amuoiqyswiesyyck;
        yimasagkemgkoeqq:
        if (method_exists($cmussoegoauyyguw, $aiamqeawckcsuaou)) {
            goto cyycimgiyeqgssuy;
        }
        goto caoqqqweswimckec;
        cckmsweoqwaucgcs:
        $woocommerce->session->{$aiamqeawckcsuaou}($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie);
        goto youqqmmoywqeggeg;
        ykqswiqaqaogkksc:
        goto osiwmoqisiiogawm;
        goto ogyguukmcmoqkqei;
        ioimwcssyaqsuqma:
        if (!$kekikiwsckuiyuyo) {
            goto gykoquuuowomucyq;
        }
        goto oekkmwkqkuqwckui;
        qeycwoqakqucwscm:
        osiwmoqisiiogawm:
        goto oyaeggoyqusqqcyo;
        wgkecsowgumikqqm:
    }
    
    public static function ceusksoaisoswmia($umwqusowiqmyseom = null) : array
    {
        goto ngaquoioqeukmoyu;
        mawoaecogwegmcoc:
        $umwqusowiqmyseom = self::mmmcswscsiecscwg($umwqusowiqmyseom);
        goto isqyiumsggacqmak;
        dwaiimguqaaikoso:
        gusamkkgwqmamcke:
        goto uqiisswyoggsckqg;
        ngaquoioqeukmoyu:
        $oammesyieqmwuwyi = self::uakuwyoiooeqqiow();
        goto qcysusmwyoeoguki;
        eicuumeiweosiaqy:
        $oammesyieqmwuwyi = $umwqusowiqmyseom->get_items();
        goto dwaiimguqaaikoso;
        qcysusmwyoeoguki:
        if (!(!$oammesyieqmwuwyi && $umwqusowiqmyseom)) {
            goto kuoqweoiooqosmoe;
        }
        goto mawoaecogwegmcoc;
        isqyiumsggacqmak:
        if (!$umwqusowiqmyseom) {
            goto gusamkkgwqmamcke;
        }
        goto eicuumeiweosiaqy;
        qmwkauswsyowckua:
        return $oammesyieqmwuwyi;
        goto siequuwyyyusqeie;
        uqiisswyoggsckqg:
        kuoqweoiooqosmoe:
        goto qmwkauswsyowckua;
        siequuwyyyusqeie:
    }
    
    public static function uwyscmkeyeuqyukk($ywmkwiwkosakssii = []) : string
    {
        goto wuwaakyeqqeeogyy;
        igauaamasosqcyys:
        $wwgucssaecqekuek["\143\x68\x65\x63\153\145\144"] = true;
        goto ecowowaocsooqkyo;
        yuiimkuacqcecwgw:
        return ManipulateHTML::uuccukgasskgimsq("\154\141\x62\x65\x6c", ["\x63\x6c\x61\163\x73" => "\x74\151\x70\163", "\x64\141\x74\x61\x2d\164\151\160" => ManipulateArray::get($ywmkwiwkosakssii, "\x74\x69\x70")], [ManipulateArray::get($ywmkwiwkosakssii, self::LABEL), ManipulateHTML::qgsekwygcgawekeq("\x69\x6e\x70\165\x74", $wwgucssaecqekuek)]);
        goto uwwqiicwuwkwqcmg;
        kakyqyqyweuaoqmg:
        $wwgucssaecqekuek = ["\143\x6c\141\163\163" => "\143\x68\x65\143\153\x62\x6f\170", self::TYPE => "\143\150\x65\143\153\142\157\170", self::NAME => ManipulateArray::get($ywmkwiwkosakssii, self::NAME)];
        goto ecgwcgmuemqagggm;
        wuwaakyeqqeeogyy:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\164\x69\x70" => '', self::NAME => '', self::LABEL => '', self::VALUE => '']);
        goto kakyqyqyweuaoqmg;
        ecgwcgmuemqagggm:
        if (!ManipulateArray::get($ywmkwiwkosakssii, self::VALUE, false)) {
            goto goamosigosumsmkq;
        }
        goto igauaamasosqcyys;
        ecowowaocsooqkyo:
        goamosigosumsmkq:
        goto yuiimkuacqcecwgw;
        uwwqiicwuwkwqcmg:
    }
}
