<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        goto qeoawooaykmyokuo;
        okyqqamccagawuoi:
        $seyqqsmuaiegkeeq = DecoratorWoocommerce::mqsqiyqiceqasokq();
        goto agiieggoecqiaoum;
        ieycaaisagswkaiy:
        return $sogksuscggsicmac;
        goto emyeissowqweyqec;
        qeoawooaykmyokuo:
        $sogksuscggsicmac = [];
        goto okyqqamccagawuoi;
        ksgumesawyqswaoa:
        ayccewcmckaqowek:
        goto ieycaaisagswkaiy;
        agiieggoecqiaoum:
        foreach ($isweyuoisomqyaag as $ymqmyyeuycgmigyo => $igqsaukqcqscimok) {
            goto uimyekysswywuoyi;
            uimyekysswywuoyi:
            $kesssewsiegssiya = ManipulateArray::get($seyqqsmuaiegkeeq, ManipulateString::wiecmkiugmyyqiqc("\x70\141\137", '', $ymqmyyeuycgmigyo));
            goto cemsuwwwgiqiyigo;
            amescycuaoumygqc:
            aaoywwqcimiwiywu:
            goto iwecwgwiccuemkye;
            owymcaeysicqacya:
            $sogksuscggsicmac[$ymqmyyeuycgmigyo] = ["\x79\155\x6b\157\155\x6f\x63\143\x6d\171\x6d\143\157\151\145\141" => $kesssewsiegssiya, "\x69\x77\x65\x77\143\x77\x75\163\145\155\161\141\151\147\147\x6b" => []];
            goto eiqiqqoyqcaiiwqo;
            eiqiqqoyqcaiiwqo:
            oeguggskkegamuoo:
            goto amescycuaoumygqc;
            cemsuwwwgiqiyigo:
            if (!$kesssewsiegssiya) {
                goto oeguggskkegamuoo;
            }
            goto owymcaeysicqacya;
            iwecwgwiccuemkye:
        }
        goto ksgumesawyqswaoa;
        emyeissowqweyqec:
    }
    
    public static function kyycwccmaemgokwu($smwiiesyqsgyisos) : string
    {
        goto qeayouqugioyieei;
        mgscesskeauowgsu:
        ueekmmegamoyagog:
        goto kyowegyokkesuugi;
        kyowegyokkesuugi:
        
        return $smwiiesyqsgyisos->get_code();
        goto qyyiiuuscqgeowya;
        gogyuwukcgmycsqw:
        $smwiiesyqsgyisos = new WC_Coupon($smwiiesyqsgyisos);
        goto mgscesskeauowgsu;
        qeayouqugioyieei:
        if ($smwiiesyqsgyisos instanceof WC_Coupon) {
            goto ueekmmegamoyagog;
        }
        goto gogyuwukcgmycsqw;
        qyyiiuuscqgeowya:
    }
    
    public static function oeeuywgiaywkimek($smwiiesyqsgyisos)
    {
        goto gukkaswwecmuoayo;
        yasegwakoscmkouu:
        return $smwiiesyqsgyisos;
        goto osamqwsmcawigggw;
        sccoieksocaiaogm:
        if (self::kyycwccmaemgokwu($smwiiesyqsgyisos)) {
            goto uowaoiwemyccakim;
        }
        goto gskmiyeoisqoqkci;
        gskmiyeoisqoqkci:
        $smwiiesyqsgyisos = false;
        goto iaqiocmqqiaeuwyg;
        iaqiocmqqiaeuwyg:
        uowaoiwemyccakim:
        goto yasegwakoscmkouu;
        gukkaswwecmuoayo:
        $smwiiesyqsgyisos = new WC_Coupon($smwiiesyqsgyisos);
        goto sccoieksocaiaogm;
        osamqwsmcawigggw:
    }
    
    public static function cuwomiomuqqkayoo($ioakeqoosmkukeaa)
    {
        goto aqyqqgkiycokskwq;
        aqyqqgkiycokskwq:
        $wwcysoksoogyacog = ManipulateWoocommerce::uceecgsoicggikeu();
        goto masgkciqasaucoss;
        masgkciqasaucoss:
        if (!$wwcysoksoogyacog) {
            goto gkuyqiyuaquuyaay;
        }
        goto eogaamwmasgugqgy;
        eogaamwmasgugqgy:
        
        $wwcysoksoogyacog->add_discount($ioakeqoosmkukeaa);
        goto weyoiomaeciyggug;
        weyoiomaeciyggug:
        gkuyqiyuaquuyaay:
        goto oockcigwicccqyko;
        oockcigwicccqyko:
    }
    
    public static function mmmcswscsiecscwg($umwqusowiqmyseom)
    {
        goto kaaasaqewwykmikk;
        kaaasaqewwykmikk:
        if (is_a($umwqusowiqmyseom, "\127\x43\x5f\117\x72\x64\x65\162")) {
            goto eaqsewgiawoasqgu;
        }
        goto cmawmeioiuegssuw;
        cmawmeioiuegssuw:
        $umwqusowiqmyseom = DecoratorWoocommerce::mmmcswscsiecscwg($umwqusowiqmyseom);
        goto umeemqiuewswymkw;
        qweqcmkkiqkkukis:
        return $umwqusowiqmyseom;
        goto qgkmsokwcmmawiey;
        umeemqiuewswymkw:
        eaqsewgiawoasqgu:
        goto qweqcmkkiqkkukis;
        qgkmsokwcmmawiey:
    }
    
    public static function wcqicmcuiewessgy($umwqusowiqmyseom) : string
    {
        goto aouoeqamkuemyeqa;
        mmksuuciiyoyaaoa:
        return $iueymcwwscwqkiyq;
        goto oowymeqscqicmiac;
        awcwocukswgsaymk:
        $iueymcwwscwqkiyq = DecoratorWoocommerce::ueqkgikommgyqmoa($umwqusowiqmyseom->get_status());
        goto iwekcauymcaoooie;
        iwekcauymcaoooie:
        ugiuoawueimimiwk:
        goto mmksuuciiyoyaaoa;
        oiseukwsseayeamo:
        if (!$umwqusowiqmyseom) {
            goto ugiuoawueimimiwk;
        }
        goto awcwocukswgsaymk;
        ukcyuqaycogiiiye:
        $iueymcwwscwqkiyq = '';
        goto oiseukwsseayeamo;
        aouoeqamkuemyeqa:
        $umwqusowiqmyseom = self::mmmcswscsiecscwg($umwqusowiqmyseom);
        goto ukcyuqaycogiiiye;
        oowymeqscqicmiac:
    }
    
    public static function susisykioakswkmm($umwqusowiqmyseom) : string
    {
        goto koyyawuukocokcme;
        egkiyyuywuiekisw:
        seiyywsmwamccscw:
        goto cookqcosymocwyqg;
        mukmccquscqkeeuy:
        if (!$mkucggyaiaukqoce) {
            goto seiyywsmwamccscw;
        }
        goto icuauuecukomyoss;
        ueioekeyeekmugss:
        nacqwwcyskisiqmi:
        goto smwwcycswiyuqouu;
        cywckaugcygcssie:
        if ($umwqusowiqmyseom->get_billing_company()) {
            goto nacqwwcyskisiqmi;
        }
        goto ascyoecaiyskamoo;
        gyqecessamsiywea:
        if ($umwqusowiqmyseom->get_billing_first_name() || $umwqusowiqmyseom->get_billing_last_name()) {
            goto quweyqomsoqcwmae;
        }
        goto cywckaugcygcssie;
        gkecqaygqygkkgwc:
        quweyqomsoqcwmae:
        goto ymmwikogcaccsgyo;
        sgsmiecuouaseyeu:
        return $qsegigkmaaskiaeo;
        goto muwyoumcckugweeg;
        yaqamykgsuagaksc:
        goto saeeegogmqsyimqk;
        goto gkecqaygqygkkgwc;
        kkeeggmwkmuwswca:
        qkkcekocsgakoqqo:
        goto sgsmiecuouaseyeu;
        aeusyyagoyskceiy:
        $umwqusowiqmyseom = self::mmmcswscsiecscwg($umwqusowiqmyseom);
        goto ioeaawqkkakemsum;
        ioeaawqkkakemsum:
        if (!$umwqusowiqmyseom) {
            goto qkkcekocsgakoqqo;
        }
        goto gyqecessamsiywea;
        cookqcosymocwyqg:
        kcyccscigsuuiomi:
        goto kaacgcseugewuceu;
        kaacgcseugewuceu:
        goto aowgayqaooygayky;
        goto ueioekeyeekmugss;
        koyyawuukocokcme:
        $qsegigkmaaskiaeo = '';
        goto aeusyyagoyskceiy;
        icuauuecukomyoss:
        $qsegigkmaaskiaeo = ucwords($mkucggyaiaukqoce->display_name);
        goto egkiyyuywuiekisw;
        wsemcaiucsysuqiq:
        $mkucggyaiaukqoce = ManipulateUser::get($umwqusowiqmyseom->get_customer_id(), true);
        goto mukmccquscqkeeuy;
        smwwcycswiyuqouu:
        $qsegigkmaaskiaeo = trim($umwqusowiqmyseom->get_billing_company());
        goto isgekmewmqgmwiky;
        ascyoecaiyskamoo:
        if (!$umwqusowiqmyseom->get_customer_id()) {
            goto kcyccscigsuuiomi;
        }
        goto wsemcaiucsysuqiq;
        ymmwikogcaccsgyo:
        $qsegigkmaaskiaeo = trim(sprintf("\45\163\40\x25\163", $umwqusowiqmyseom->get_billing_first_name(), $umwqusowiqmyseom->get_billing_last_name()));
        goto xoyesscyiuyyoaao;
        isgekmewmqgmwiky:
        aowgayqaooygayky:
        goto yaqamykgsuagaksc;
        xoyesscyiuyyoaao:
        saeeegogmqsyimqk:
        goto kkeeggmwkmuwswca;
        muwyoumcckugweeg:
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
        goto kmeesswcuaququqw;
        cegciyyeemaaawuo:
        if (!$wwcysoksoogyacog) {
            goto agimkskeiiemakqe;
        }
        goto ocmsggeccyugikwu;
        cmssgciwquymiacc:
        uuwiiwywmwyoymgi:
        goto uyscswaymikycueg;
        qiaowqciwwyiucae:
        oqiowcuqsqwyukgi:
        goto aaqoyoyiagqcguse;
        ocmsggeccyugikwu:
        $wwcysoksoogyacog->empty_cart();
        goto ysmyakmkagcqqswo;
        uyscswaymikycueg:
        wc_empty_cart();
        goto qiaowqciwwyiucae;
        kmeesswcuaququqw:
        if (function_exists("\x77\143\137\145\155\x70\x74\x79\137\x63\141\162\164")) {
            goto uuwiiwywmwyoymgi;
        }
        goto qqmsywmwmygigewc;
        makosoyccwoyooyu:
        goto oqiowcuqsqwyukgi;
        goto cmssgciwquymiacc;
        ysmyakmkagcqqswo:
        agimkskeiiemakqe:
        goto makosoyccwoyooyu;
        qqmsywmwmygigewc:
        $wwcysoksoogyacog = self::uceecgsoicggikeu();
        goto cegciyyeemaaawuo;
        aaqoyoyiagqcguse:
    }
    
    public static function uakuwyoiooeqqiow() : array
    {
        goto qgoicagqowggweeq;
        wgeuaaggcwocgomy:
        if (!$wwcysoksoogyacog) {
            goto iamqccceoygiywgo;
        }
        goto cgyaokocoymsqakq;
        yususwsyymskuwge:
        return $ygwoqcwsaggqoamw;
        goto koiweeaoqaqgeiow;
        qgoicagqowggweeq:
        $wwcysoksoogyacog = self::uceecgsoicggikeu();
        goto wukmywyisgqyiwku;
        cgyaokocoymsqakq:
        $ygwoqcwsaggqoamw = $wwcysoksoogyacog->get_cart_contents();
        goto qiycageymgowgicg;
        wukmywyisgqyiwku:
        $ygwoqcwsaggqoamw = [];
        goto wgeuaaggcwocgomy;
        qiycageymgowgicg:
        iamqccceoygiywgo:
        goto yususwsyymskuwge;
        koiweeaoqaqgeiow:
    }
    
    public static function geoemsmuouqcqmei() : ?string
    {
        goto iikgymkaqikicssa;
        mackmiksusgquqku:
        return wc_get_cart_url();
        goto kkcskacouykscykm;
        uaycgmwwmeqsqoss:
        ieukeyosucwcigcq:
        goto mackmiksusgquqku;
        gkoyauwycuyumiey:
        return $woocommerce->cart->get_cart_url();
        goto uguaomoemkcuqksw;
        iikgymkaqikicssa:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto gokisgaagiawmqmg;
        gokisgaagiawmqmg:
        if (function_exists("\x77\x63\x5f\x67\145\x74\137\x63\x61\x72\x74\x5f\x75\x72\x6c")) {
            goto ieukeyosucwcigcq;
        }
        goto gkoyauwycuyumiey;
        uguaomoemkcuqksw:
        goto aocsmigsemowswge;
        goto uaycgmwwmeqsqoss;
        kkcskacouykscykm:
        aocsmigsemowswge:
        goto sugiiygakykaogou;
        sugiiygakykaogou:
    }
    
    public static function ayseokmqycoqaigc() : bool
    {
        return class_exists("\x77\x6f\x6f\x63\x6f\x6d\155\x65\162\143\x65") && ManipulatePlugin::ggocakcisguuokai("\167\x6f\x6f\143\157\155\155\145\x72\x63\x65\57\x77\157\157\x63\157\x6d\x6d\145\162\x63\145\56\x70\150\160");
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
        goto gcaeuwucgqwocegi;
        gcaeuwucgqwocegi:
        $aokagokqyuysuksm = $umwqusowiqmyseom;
        goto yumugwyseyuawuae;
        ccykaqwcuqguuesk:
        return $aokagokqyuysuksm;
        goto aoywumwiwsuugsae;
        eicoyaciiwoweyow:
        qqoeqgqkmegyquie:
        goto ccykaqwcuqguuesk;
        kuekaewgqsagkokm:
        $aokagokqyuysuksm = $umwqusowiqmyseom->get_id();
        goto eicoyaciiwoweyow;
        yumugwyseyuawuae:
        if (!is_a($umwqusowiqmyseom, "\127\103\x5f\x4f\162\x64\x65\x72")) {
            goto qqoeqgqkmegyquie;
        }
        goto kuekaewgqsagkokm;
        aoywumwiwsuugsae:
    }
    
    public static function aqasygcsqysmmyke($product = null)
    {
        goto ygogeqikkaiewqak;
        ygogeqikkaiewqak:
        if (is_a($product, "\x57\103\137\x50\x72\x6f\144\165\143\x74")) {
            goto kgyiaoswiyukcguu;
        }
        goto qgwksesamqckoysm;
        uykoiemomggyyaqm:
        return $product;
        goto yqusmmkkqyqusoug;
        qgwksesamqckoysm:
        $product = DecoratorWoocommerce::aqasygcsqysmmyke($product);
        goto iyqwcuwcoqsqiqey;
        iyqwcuwcoqsqiqey:
        kgyiaoswiyukcguu:
        goto uykoiemomggyyaqm;
        yqusmmkkqyqusoug:
    }
    
    public static function mkiigkeqaeiwqyua() : bool
    {
        return in_array(DecoratorWoocommerce::useawgqusasoukqm(), ["\x49\122\x54", "\x49\x52\x52"]);
    }
    
    public static function eywqaumgkccycyau($aokagokqyuysuksm, $ywmkwiwkosakssii = [])
    {
        goto igoiiguaiiyskqye;
        isqoqyuosaeauika:
        foreach ($wkyuegumgeqqqmyg as $aiowsaccomcoikus) {
            goto kcyyceweysgmscgm;
            maeoaamgcykqqcac:
            wwoyegucuaugosys:
            goto eqmiagqymgsqikio;
            kcyyceweysgmscgm:
            if (!isset($ywmkwiwkosakssii[$aiowsaccomcoikus])) {
                goto wwoyegucuaugosys;
            }
            goto ouekywuyisaayusa;
            eqmiagqymgsqikio:
            caeissowkcqcoisu:
            goto sqcucoqwgcookais;
            ouekywuyisaayusa:
            $ywmkwiwkosakssii[$aiowsaccomcoikus] = DecoratorSanitize::aoeoykwemwaqsikc($ywmkwiwkosakssii[$aiowsaccomcoikus]);
            goto maeoaamgcykqqcac;
            sqcucoqwgcookais:
        }
        goto cqkmekqeuoamwwik;
        gkqeioiiywequymm:
        DecoratorWoocommerce::eywqaumgkccycyau($ywmkwiwkosakssii);
        goto aswqcceuwmmqciec;
        igoiiguaiiyskqye:
        $ywmkwiwkosakssii[self::ID] = $aokagokqyuysuksm;
        goto osqscmomgeumekym;
        osqscmomgeumekym:
        $wkyuegumgeqqqmyg = [];
        goto isqoqyuosaeauika;
        cqkmekqeuoamwwik:
        omygqyyicqyuswqs:
        goto gkqeioiiywequymm;
        aswqcceuwmmqciec:
    }
    
    public static function oseiymowmquqkaca() : bool
    {
        global $woocommerce_loop;
        return DecoratorWoocommerce::kmymkocwcawgeccm() && isset($woocommerce_loop["\x6e\x61\155\x65"]) && in_array($woocommerce_loop["\x6e\141\x6d\145"], ["\x72\145\x6c\141\x74\145\x64", "\x75\x70\x20\x2d\40\163\x65\154\x6c\x73"]);
    }
    
    public static function kyckwuuiqwmyoqma() : ?\WC_Query
    {
        goto wwowwogiasqyegco;
        aesqskyuooksouwa:
        eqskaoiwkcikoock:
        goto mkuoeggssimkqoee;
        wwowwogiasqyegco:
        $gqgemcmoicmgaqie = null;
        goto cowcyoscwiogwoss;
        iammguyywsgygewo:
        if (!$woocommerce) {
            goto eqskaoiwkcikoock;
        }
        goto ekwgywkksceymecu;
        cowcyoscwiogwoss:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto iammguyywsgygewo;
        mkuoeggssimkqoee:
        return $gqgemcmoicmgaqie;
        goto ockwkskmgeqemqwm;
        ekwgywkksceymecu:
        $gqgemcmoicmgaqie = $woocommerce->query;
        goto aesqskyuooksouwa;
        ockwkskmgeqemqwm:
    }
    
    public static function kkewuuisyiscmgyc() : WooCommerce
    {
        goto ywmkeguguoigeago;
        eqesiosukaowuquq:
        $mksyucucyswaukig = WC();
        goto swyaqueaoyekgomq;
        owgiiuqeeesguqsq:
        return $mksyucucyswaukig;
        goto yqmkgcicoecyuiku;
        qmccgkcskscsakcu:
        $mksyucucyswaukig = $woocommerce;
        goto wocmuysuywyaeyia;
        swyaqueaoyekgomq:
        umeuqqawicigwmmw:
        goto owgiiuqeeesguqsq;
        qoieockmumciwweq:
        global $woocommerce;
        goto qmccgkcskscsakcu;
        ywmkeguguoigeago:
        if (function_exists("\127\x43")) {
            goto eqaqiuescmyiwsoq;
        }
        goto qoieockmumciwweq;
        wocmuysuywyaeyia:
        goto umeuqqawicigwmmw;
        goto iiwkgiyuiuskiusa;
        iiwkgiyuiuskiusa:
        eqaqiuescmyiwsoq:
        goto eqesiosukaowuquq;
        yqmkgcicoecyuiku:
    }
    
    public static function scgumisucgwskyqk($product, $mgkceomocowocqyo = "\x76\x69\x65\167") : string
    {
        goto ikckcqggoqoimoio;
        usuiacsqegaeywgs:
        $eyuymeqcioasuyyi = $product->get_regular_price($mgkceomocowocqyo);
        goto ueiooqcaegkyumkk;
        emsoowiaoaoayqyy:
        $eyuymeqcioasuyyi = $product->regular_price;
        goto gowguesicegmegqw;
        ueiooqcaegkyumkk:
        ycaqamikucimygma:
        goto mqysyiqsowkciiiq;
        mqysyiqsowkciiiq:
        $aumscagymwyyicag = DecoratorHook::sscegwueamckwmcy("\167\157\157\143\157\x6d\155\x65\162\x63\x65\137\x70\162\x6f\144\165\143\x74\x5f\x72\x65\147\x75\154\x61\x72\x5f\x70\162\x69\143\x65", $eyuymeqcioasuyyi, $product);
        goto comswgimqmwcyyas;
        amqmckimqwauwkug:
        if (!$product) {
            goto gmqceeyooqckwwms;
        }
        goto iuawscaywkoegium;
        ikckcqggoqoimoio:
        $aumscagymwyyicag = '';
        goto qqsyqgokqqsqoooe;
        comswgimqmwcyyas:
        gmqceeyooqckwwms:
        goto sigcqyomcgiyamkq;
        qqsyqgokqqsqoooe:
        $product = self::aqasygcsqysmmyke($product);
        goto amqmckimqwauwkug;
        sigcqyomcgiyamkq:
        return $aumscagymwyyicag;
        goto eiimgesccmkgusys;
        owgocmqmgsgeayue:
        ueoykiauoyuauwsi:
        goto usuiacsqegaeywgs;
        gowguesicegmegqw:
        goto ycaqamikucimygma;
        goto owgocmqmgsgeayue;
        iuawscaywkoegium:
        if (method_exists($product, "\147\145\x74\x5f\163\x61\x6c\145\x5f\160\x72\151\x63\145")) {
            goto ueoykiauoyuauwsi;
        }
        goto emsoowiaoaoayqyy;
        eiimgesccmkgusys:
    }
    
    public static function asaycagaeksiumkw($product, $mgkceomocowocqyo = "\166\x69\x65\x77") : string
    {
        goto gccusiaomowsyeqk;
        aqimsokikskmeukc:
        cseuscicwscieqaa:
        goto igmocmyuiauyaaky;
        kwwqiuaycwkcigqq:
        $product = self::aqasygcsqysmmyke($product);
        goto cgsygucccwyayksw;
        kucuomkwkigoaaoi:
        $aumscagymwyyicag = DecoratorHook::sscegwueamckwmcy("\167\157\157\143\157\x6d\155\145\x72\143\x65\137\x70\162\x6f\x64\x75\x63\x74\x5f\x73\x61\154\145\137\160\162\151\143\x65", $eyuymeqcioasuyyi, $product);
        goto aqimsokikskmeukc;
        gccusiaomowsyeqk:
        $aumscagymwyyicag = '';
        goto kwwqiuaycwkcigqq;
        igmocmyuiauyaaky:
        return $aumscagymwyyicag;
        goto kqaqeisqomwwcasq;
        makucowmowkkooyy:
        $eyuymeqcioasuyyi = $product->sale_price;
        goto csmqycguwyiekmwq;
        ewkmiiygeqessaue:
        $eyuymeqcioasuyyi = $product->get_sale_price($mgkceomocowocqyo);
        goto cgiioksocuikciqu;
        kkskwicmigikmwuk:
        if (method_exists($product, "\147\145\164\137\163\141\x6c\145\137\160\162\151\x63\145")) {
            goto kgykiwcggygyekgc;
        }
        goto makucowmowkkooyy;
        cgsygucccwyayksw:
        if (!$product) {
            goto cseuscicwscieqaa;
        }
        goto kkskwicmigikmwuk;
        csmqycguwyiekmwq:
        goto wimquiyiyyakiyqo;
        goto kauocquekqgswwoe;
        kauocquekqgswwoe:
        kgykiwcggygyekgc:
        goto ewkmiiygeqessaue;
        cgiioksocuikciqu:
        wimquiyiyyakiyqo:
        goto kucuomkwkigoaaoi;
        kqaqeisqomwwcasq:
    }
    
    public static function aqwquwewocyewasw() : bool
    {
        goto qyoyoscsokwicwcm;
        ikuecasooegqekwi:
        $uwqkkwmiiumuukoa = $woocommerce->is_rest_api_request();
        goto auyuoiygayksuuua;
        ogkwaimcumgaueem:
        return $uwqkkwmiiumuukoa;
        goto eikgggsiaicqiqag;
        cekucgakuqaicscm:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto awgckickkikmwgoe;
        qyoyoscsokwicwcm:
        $uwqkkwmiiumuukoa = false;
        goto cekucgakuqaicscm;
        awgckickkikmwgoe:
        if (!($woocommerce && method_exists($woocommerce, "\151\x73\137\x72\x65\163\164\x5f\141\x70\x69\137\162\145\161\165\x65\163\164"))) {
            goto siawmiiggusigmks;
        }
        goto ikuecasooegqekwi;
        auyuoiygayksuuua:
        siawmiiggusigmks:
        goto ogkwaimcumgaueem;
        eikgggsiaicqiqag:
    }
    
    public static function uceecgsoicggikeu() : ?WC_Cart
    {
        goto ayikyecyysisuioq;
        gmymykusaimcgayu:
        if (!$woocommerce) {
            goto ackemimmseeuauek;
        }
        goto pewociqgeseqykos;
        eoyokykwkikgaaww:
        return $wwcysoksoogyacog;
        goto ouesqgosuiesgwas;
        ayikyecyysisuioq:
        $wwcysoksoogyacog = null;
        goto kmqcsyeeiyqwiusw;
        pewociqgeseqykos:
        $wwcysoksoogyacog = $woocommerce->cart;
        goto moqccissukkoumwo;
        moqccissukkoumwo:
        ackemimmseeuauek:
        goto eoyokykwkikgaaww;
        kmqcsyeeiyqwiusw:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto gmymykusaimcgayu;
        ouesqgosuiesgwas:
    }
    
    public static function aoqkwiysueqqwigk() : ?string
    {
        goto mwcqoqsgsoiacuqu;
        mwcqoqsgsoiacuqu:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto sagukwqksqiukyeq;
        kikgmuyaiiicugcg:
        ucmwwiwcaqesyqaw:
        goto qyyioseuoicymucm;
        oassuwsweqqyooss:
        return $woocommerce->cart->get_checkout_url();
        goto osucouyseikugqwm;
        sagukwqksqiukyeq:
        if (function_exists("\x77\x63\137\x67\145\x74\x5f\x63\x68\x65\x63\x6b\x6f\x75\x74\137\165\x72\x6c")) {
            goto ucmwwiwcaqesyqaw;
        }
        goto oassuwsweqqyooss;
        qyyioseuoicymucm:
        return wc_get_checkout_url();
        goto gcueeowqwicyuuwm;
        gcueeowqwicyuuwm:
        iqmqycmwemkkugmw:
        goto kiwiacqeekiyqqum;
        osucouyseikugqwm:
        goto iqmqycmwemkkugmw;
        goto kikgmuyaiiicugcg;
        kiwiacqeekiyqqum:
    }
    
    public static function kccgkwigyyiugcco() : bool
    {
        return "\x79\x65\x73" === self::giiuwsmyumqwwiyq("\x65\156\x61\x62\x6c\145\137\155\171\141\x63\143\x6f\x75\x6e\164\137\162\x65\147\151\163\164\x72\x61\164\151\x6f\x6e");
    }
    
    public static function yaaucgakecuykawk() : bool
    {
        global $woocommerce_loop;
        return DecoratorWoocommerce::kmymkocwcawgeccm() && isset($woocommerce_loop["\156\141\155\145"]) && in_array($woocommerce_loop["\156\141\x6d\145"], ["\165\x70\40\55\x20\163\145\x6c\154\x73"]);
    }
    
    public static function ogkieiokqueakmyc() : bool
    {
        global $woocommerce_loop;
        return DecoratorWoocommerce::kmymkocwcawgeccm() && isset($woocommerce_loop["\x6e\141\x6d\145"]) && in_array($woocommerce_loop["\x6e\x61\x6d\145"], ["\162\145\x6c\x61\164\x65\144"]);
    }
    
    public static function omwkqcuwceweymcc($product = null)
    {
        goto wicgcmsymyamgkqo;
        owwkeimwommeqeuk:
        $product = self::aqasygcsqysmmyke(ManipulatePost::mwikyscisascoeea());
        goto ouyaoosmgkcycecy;
        kgkycyakimoowckw:
        return $aokagokqyuysuksm;
        goto eqmmisowcsogsmmi;
        wicgcmsymyamgkqo:
        if ($product) {
            goto uwkusimiysaesysu;
        }
        goto owwkeimwommeqeuk;
        qeyyusmwmygyssis:
        if (!is_a($product, "\x57\x43\137\x50\x72\157\x64\165\143\164")) {
            goto saoicecaigamyumi;
        }
        goto ekiaooogkcaiqmku;
        gcgguqeygkiuseei:
        saoicecaigamyumi:
        goto kgkycyakimoowckw;
        agcecaceyeicacew:
        $aokagokqyuysuksm = $product;
        goto qeyyusmwmygyssis;
        ouyaoosmgkcycecy:
        uwkusimiysaesysu:
        goto agcecaceyeicacew;
        ekiaooogkcaiqmku:
        $aokagokqyuysuksm = $product->get_id();
        goto gcgguqeygkiuseei;
        eqmmisowcsogsmmi:
    }
    
    public static function ageqswwkkqywckco($ywmkwiwkosakssii = []) : array
    {
        goto ekmowewoceagouse;
        gguqqicieewmyqak:
        if (!is_array($oysoyeaucuawyaky)) {
            goto moyeqcaaoumugqga;
        }
        goto egqwmisqumyygeaw;
        iiaqqsyysmuiuqgk:
        $oksqskmgoqiqciis = [];
        goto gguqqicieewmyqak;
        asmqyacukagmsmog:
        $oysoyeaucuawyaky = ManipulatePost::ciugwooasaqcywas("\x70\x72\x6f\144\x75\x63\x74", $ywmkwiwkosakssii);
        goto iiaqqsyysmuiuqgk;
        ecgigaamcwiqiukk:
        moyeqcaaoumugqga:
        goto wgieqooykcsmeemu;
        wgieqooykcsmeemu:
        return $oksqskmgoqiqciis;
        goto ywogweeguksciwcw;
        eqswioyysgiegmkw:
        yywwamymqqweegma:
        goto ecgigaamcwiqiukk;
        egqwmisqumyygeaw:
        foreach ($oysoyeaucuawyaky as $aokagokqyuysuksm) {
            goto wygeoqscyoqegsim;
            qouiaaqwcueugsyg:
            $oksqskmgoqiqciis[$aokagokqyuysuksm] = $product;
            goto uqioouaicscwyeei;
            wygeoqscyoqegsim:
            $product = self::aqasygcsqysmmyke($aokagokqyuysuksm);
            goto kcwmuwimsuqeeika;
            sygcsssigqkuemcu:
            qmwgkkusoumsaymy:
            goto acykkosiggykiqae;
            uqioouaicscwyeei:
            iuasisokiwkkgsig:
            goto sygcsssigqkuemcu;
            kcwmuwimsuqeeika:
            if (!$product) {
                goto iuasisokiwkkgsig;
            }
            goto qouiaaqwcueugsyg;
            acykkosiggykiqae:
        }
        goto eqswioyysgiegmkw;
        ekmowewoceagouse:
        $ywmkwiwkosakssii["\x66\151\x65\154\x64\x73"] = "\x69\144\x73";
        goto asmqyacukagmsmog;
        ywogweeguksciwcw:
    }
    
    public static function weqwusgaqsmseiyq() : array
    {
        return ["\151\x6d\x61\147\x65" => esc_html__("\x49\155\x61\147\145", PR__CMN__FOUNDATION), "\160\x72\x69\x63\145" => esc_html__("\120\162\x69\143\x65", PR__CMN__FOUNDATION), "\141\144\144\55\164\157\x2d\x63\x61\x72\164" => esc_html__("\x41\x64\x64\40\164\x6f\x20\143\x61\x72\x74", PR__CMN__FOUNDATION), "\x64\145\163\x63\162\x69\160\164\x69\x6f\156" => esc_html__("\104\x65\163\143\x72\151\x70\x74\151\x6f\156", PR__CMN__FOUNDATION), "\x73\153\x75" => esc_html__("\x53\153\165", PR__CMN__FOUNDATION), "\x73\x74\157\x63\153" => esc_html__("\x41\x76\x61\151\154\141\142\151\x6c\151\164\171", PR__CMN__FOUNDATION), "\x77\x65\x69\x67\x68\164" => esc_html__("\127\x65\x69\147\x68\x74", PR__CMN__FOUNDATION), "\144\151\155\x65\x6e\163\x69\x6f\x6e\163" => esc_html__("\104\151\x6d\x65\156\x73\151\x6f\x6e\x73", PR__CMN__FOUNDATION)];
    }
    
    public static function gmowuaggkmgkseyo() : bool
    {
        return DecoratorQuery::qmssqeyayicowkgy("\x70\162\x6f\144\165\143\164\x5f\x63\x61\x74");
    }
    
    public static function ecaegsuskkkigkgc() : ?WC_Checkout
    {
        goto qkkcyimckwcmwoyg;
        yaaygymiwgcucuee:
        if (!$woocommerce) {
            goto qaowiwsuoecmmkkw;
        }
        goto kuygeikysoqqqouy;
        kuygeikysoqqqouy:
        $yogeuygiqackeiky = $woocommerce->yogeuygiqackeiky();
        goto gemiusgkmeaykywq;
        soqwcqmyqkqyqawm:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto yaaygymiwgcucuee;
        gemiusgkmeaykywq:
        qaowiwsuoecmmkkw:
        goto akgusigiuuowiemm;
        qkkcyimckwcmwoyg:
        $yogeuygiqackeiky = null;
        goto soqwcqmyqkqyqawm;
        akgusigiuuowiemm:
        return $yogeuygiqackeiky;
        goto gqgiygyaagieswyg;
        gqgiygyaagieswyg:
    }
    
    public static function giyscymwkesykqsg($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie)
    {
        self::cmussoegoauyyguw("\x73\145\x74", $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie);
    }
    
    public static function qusqewgmqyucyooc($product, $ikgwqyuyckaewsow)
    {
        goto kascgoogiymmugcy;
        cqguwaockaiuioqo:
        return $product;
        goto ssmesescgegmqegs;
        yciammygksiessww:
        if (!$product) {
            goto ikoqcwgayswaisqo;
        }
        goto smucwoowmswcmqiq;
        kascgoogiymmugcy:
        $product = self::aqasygcsqysmmyke($product);
        goto yciammygksiessww;
        vwwckgewsegagiqm:
        if (!$qqswgiawgeaeoecu) {
            goto kqkckwwigeyywyik;
        }
        goto qmkkgkcemceygaou;
        kuukuccioawuoiea:
        
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus => $ymqmyyeuycgmigyo) {
            goto giikseaiieuqkccg;
            giikseaiieuqkccg:
            switch ($aiowsaccomcoikus) {
                case "\164\x69\164\154\145":
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $product->get_title();
                    goto gqeosgkaqwoooomg;
                case "\x70\162\x69\143\145":
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $product->get_price_html();
                    goto gqeosgkaqwoooomg;
                case "\151\155\141\x67\145":
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = intval(ManipulatePost::wsiiswmaagmyiaiw($aokagokqyuysuksm));
                    goto gqeosgkaqwoooomg;
                case "\144\x65\x73\143\162\x69\160\x74\151\x6f\x6e":
                    goto csiumocowgwwkseu;
                    eggeemqkkcgiwkgm:
                    goto gqeosgkaqwoooomg;
                    goto skuaykemeskiciyq;
                    csiumocowgwwkseu:
                    $ukwokcuqauuosmoo = DecoratorHook::sscegwueamckwmcy("\167\157\157\x63\157\x6d\x6d\145\162\x63\x65\137\163\150\157\x72\164\137\144\x65\x73\x63\162\151\160\x74\x69\157\156", $product->get_short_description());
                    goto ceooqwocwgyaosca;
                    ceooqwocwgyaosca:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $ukwokcuqauuosmoo;
                    goto eggeemqkkcgiwkgm;
                    skuaykemeskiciyq:
                case "\x73\x74\x6f\143\x6b":
                    goto ggwecgmoiwsqaiem;
                    momkymyyokcqmiwc:
                    $imooqykauqyyswsw["\141\x76\141\151\154\141\x62\151\154\151\164\x79"] = __("\111\x6e\40\163\x74\x6f\143\153", PR__CMN__FOUNDATION);
                    goto oiaqgumiwqckysqq;
                    rgeqksseqwssoqeq:
                    goto gqeosgkaqwoooomg;
                    goto rmamqouaqyeogmmm;
                    kmcmmgeegciwucsu:
                    if (!empty($imooqykauqyyswsw["\x61\166\141\151\154\141\142\x69\x6c\151\x74\x79"])) {
                        goto socyamqieqoiusuo;
                    }
                    goto momkymyyokcqmiwc;
                    oiaqgumiwqckysqq:
                    socyamqieqoiusuo:
                    goto yseqooouywimkcsi;
                    ggwecgmoiwsqaiem:
                    $imooqykauqyyswsw = $product->get_availability();
                    goto kmcmmgeegciwucsu;
                    yseqooouywimkcsi:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $imooqykauqyyswsw["\141\x76\141\151\154\141\142\151\154\151\164\x79"];
                    goto rgeqksseqwssoqeq;
                    rmamqouaqyeogmmm:
                case "\163\153\x75":
                    goto ukoqocmokmwgkggo;
                    ukoqocmokmwgkggo:
                    $mmkkmgusieqaqkki = $product->get_sku();
                    goto scquwmwgssauikwq;
                    igwwywsaqumsmakc:
                    goto gqeosgkaqwoooomg;
                    goto eguqeogcowkuqmes;
                    scquwmwgssauikwq:
                    !$mmkkmgusieqaqkki && ($mmkkmgusieqaqkki = "\55");
                    goto imycougggwgmwque;
                    imycougggwgmwque:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $mmkkmgusieqaqkki;
                    goto igwwywsaqumsmakc;
                    eguqeogcowkuqmes:
                case "\x77\145\151\x67\x68\164":
                    goto smwcciswieyocowa;
                    qmmiuscmmiciksuq:
                    ucasooakcusgmasq:
                    goto wysqeaawgmsgywwe;
                    wysqeaawgmsgywwe:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $mycwwoyokwokowmo;
                    goto msmyekocyqaeiqui;
                    scqikcmqmsuaccuk:
                    goto ucasooakcusgmasq;
                    goto wsksyesmkwcseqmi;
                    wsksyesmkwcseqmi:
                    igigquuegyegmyas:
                    goto kwkaekkyamsuosic;
                    kwkaekkyamsuosic:
                    $mycwwoyokwokowmo = wc_format_localized_decimal($mycwwoyokwokowmo) . "\40" . esc_attr(DecoratorOption::get("\x77\157\157\x63\x6f\x6d\x6d\x65\x72\143\x65\x5f\x77\145\x69\147\150\x74\x5f\x75\x6e\151\x74"));
                    goto qmmiuscmmiciksuq;
                    eiiygsskgeocucse:
                    $mycwwoyokwokowmo = "\55";
                    goto scqikcmqmsuaccuk;
                    smwcciswieyocowa:
                    if ($mycwwoyokwokowmo = $product->get_weight()) {
                        goto igigquuegyegmyas;
                    }
                    goto eiiygsskgeocucse;
                    msmyekocyqaeiqui:
                    goto gqeosgkaqwoooomg;
                    goto qyqeeqeasassiyqg;
                    qyqeeqeasassiyqg:
                case "\x64\151\x6d\145\x6e\163\151\x6f\x6e\x73":
                    goto qiwwswgwkcekequo;
                    qiwwswgwkcekequo:
                    $qaiwqwwemmyyqosy = function_exists("\167\x63\137\x66\157\162\x6d\x61\x74\x5f\144\x69\x6d\145\156\163\151\x6f\x6e\163") ? wc_format_dimensions($product->get_dimensions(false)) : $product->get_dimensions();
                    goto ykgaewsgaccoewmy;
                    qcwmwsussmygiowm:
                    goto gqeosgkaqwoooomg;
                    goto mqyceoiukuosysus;
                    goagoaikyyyaisgy:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $qaiwqwwemmyyqosy;
                    goto qcwmwsussmygiowm;
                    ykgaewsgaccoewmy:
                    !$qaiwqwwemmyyqosy && ($qaiwqwwemmyyqosy = "\x2d");
                    goto goagoaikyyyaisgy;
                    mqyceoiukuosysus:
                default:
                    goto ugsimmgccyugoqka;
                    iaaaeesqwkogwook:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = [];
                    goto uuemseeewwgcoqqc;
                    ugsimmgccyugoqka:
                    if (DecoratorTaxonomy::myagqecycsaiyqsk($aiowsaccomcoikus)) {
                        goto igymmkeosawsmquy;
                    }
                    goto gmgysasgwkiakiic;
                    ymaeysgwkcwwiqmu:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = implode("\54\40", $qqswgiawgeaeoecu[$aiowsaccomcoikus]);
                    goto ywcksgacokiyuuks;
                    rmoogiakmggyosaw:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $eqgoocgaqwqcimie;
                    goto ggiyqoigmmgiamyo;
                    wskwqauamemaueue:
                    mqaamgcyimqcgyyu:
                    goto rmoogiakmggyosaw;
                    ggiyqoigmmgiamyo:
                    goto smiosccsmkciiaei;
                    goto cocwkumuyaacwuie;
                    gmgysasgwkiakiic:
                    $eqgoocgaqwqcimie = $product->get_attribute($aiowsaccomcoikus);
                    goto rayoswqmyqiuiics;
                    wyomsacikcaawgow:
                    cuesuqwoogmkcwuu:
                    goto kciguwegyomuqawq;
                    umeiygeyqcouqcsk:
                    $eqgoocgaqwqcimie = implode("\54\40", $eqgoocgaqwqcimie);
                    goto wskwqauamemaueue;
                    ocowsksosgwgogmy:
                    if (empty($uyuaosigqymaqsaa)) {
                        goto ouqsaimcqcgaemws;
                    }
                    goto kukmwwkmmiwaqmai;
                    rayoswqmyqiuiics:
                    if (!is_array($eqgoocgaqwqcimie)) {
                        goto mqaamgcyimqcgyyu;
                    }
                    goto umeiygeyqcouqcsk;
                    cocwkumuyaacwuie:
                    igymmkeosawsmquy:
                    goto iaaaeesqwkogwook;
                    ywcksgacokiyuuks:
                    smiosccsmkciiaei:
                    goto wemcucimscmkccee;
                    kukmwwkmmiwaqmai:
                    foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
                        goto uamgomuoiswgmyou;
                        sacqwquywoyemsui:
                        $qqswgiawgeaeoecu[$aiowsaccomcoikus][] = ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk);
                        goto kisqeasymciqmcma;
                        uamgomuoiswgmyou:
                        $iwewcwusemqaiggk = DecoratorSanitize::iwewcwusemqaiggk($iwewcwusemqaiggk, $aiowsaccomcoikus);
                        goto sacqwquywoyemsui;
                        kisqeasymciqmcma:
                        yuyqiqgiykceuwyi:
                        goto kiqioykgyqakwmsc;
                        kiqioykgyqakwmsc:
                    }
                    goto wyomsacikcaawgow;
                    wemcucimscmkccee:
                    goto gqeosgkaqwoooomg;
                    goto wuiwikwsqoyseayq;
                    kciguwegyomuqawq:
                    ouqsaimcqcgaemws:
                    goto ymaeysgwkcwwiqmu;
                    uuemseeewwgcoqqc:
                    $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($aokagokqyuysuksm, $aiowsaccomcoikus);
                    goto ocowsksosgwgogmy;
                    wuiwikwsqoyseayq:
            }
            goto cqcoykgagkcckiyi;
            qagmacuwmywoisyq:
            igsgeycmgyyiqyaw:
            goto omogkekcmgcmgaks;
            cqcoykgagkcckiyi:
            ceyiiqgekmueswas:
            goto uukiykgkqyekggay;
            uukiykgkqyekggay:
            gqeosgkaqwoooomg:
            goto qagmacuwmywoisyq;
            omogkekcmgcmgaks:
        }
        goto msygsomkaywgokuq;
        mqmwceouegaaucoi:
        kqkckwwigeyywyik:
        goto wgiewcmyikiwsasu;
        mmkuokwocceayask:
        $aokagokqyuysuksm = $product->get_id();
        goto kuukuccioawuoiea;
        wgiewcmyikiwsasu:
        ikoqcwgayswaisqo:
        goto cqguwaockaiuioqo;
        smucwoowmswcmqiq:
        $qqswgiawgeaeoecu = [];
        goto mmkuokwocceayask;
        msygsomkaywgokuq:
        ueygyquuioiuckmw:
        goto vwwckgewsegagiqm;
        qmkkgkcemceygaou:
        $product->fields = $qqswgiawgeaeoecu;
        goto mqmwceouegaaucoi;
        ssmesescgegmqegs:
    }
    
    public static function qysuguqkwiksywaq($product, $isweyuoisomqyaag) : array
    {
        goto okyoymqacqaimooo;
        cmomkawiiikmcccq:
        $uomewyckeuqoqocu = $product->get_available_variation($isweyuoisomqyaag);
        goto ksosaiwckkacoeww;
        okyoymqacqaimooo:
        $uomewyckeuqoqocu = [];
        goto xsucwemqaekogyqi;
        ksmgqwcssgmuykqm:
        return $uomewyckeuqoqocu;
        goto owqukoyoaogmwioi;
        msiwaicoesyagumk:
        if (!($isweyuoisomqyaag && $product instanceof WC_Product_Variable)) {
            goto iwwcyaoguoweqqmi;
        }
        goto cmomkawiiikmcccq;
        xsucwemqaekogyqi:
        $product = self::aqasygcsqysmmyke($product);
        goto msiwaicoesyagumk;
        ksosaiwckkacoeww:
        iwwcyaoguoweqqmi:
        goto ksmgqwcssgmuykqm;
        owqukoyoaogmwioi:
    }
    
    public static function mcgaskyiamgqmqgu($aumscagymwyyicag, $ywmkwiwkosakssii = []) : string
    {
        return DecoratorWoocommerce::aumscagymwyyicag($aumscagymwyyicag, $ywmkwiwkosakssii);
    }
    
    public static function wugwewwmekuaamos($ymqmyyeuycgmigyo, $kekikiwsckuiyuyo = false)
    {
        return self::cmussoegoauyyguw("\147\x65\164", $ymqmyyeuycgmigyo, '', $kekikiwsckuiyuyo);
    }
    
    public static function ucauuyiegweuccsq($uusmaiomayssaecw, $eqgoocgaqwqcimie, $ywmkwiwkosakssii = [])
    {
        $ywmkwiwkosakssii["\x6d\x65\x74\141\137\x71\165\145\x72\x79"] = ["\155\x65\x74\141\137\x6b\145\171" => $uusmaiomayssaecw, "\x6d\x65\x74\141\x5f\x76\141\154\x75\145" => $eqgoocgaqwqcimie, "\155\x65\164\x61\x5f\143\157\x6d\x70\x61\x72\x65" => "\x4c\x49\113\105"];
        return DecoratorWoocommerce::ageqswwkkqywckco($ywmkwiwkosakssii);
    }
    
    public static function gkokioeusiomuwee($product, $cqcsaaswaciweiie = [], $aqcaekiaqgiaiwiu = true)
    {
        goto mwqqkaiwyugqakeq;
        yokquaecwougwgme:
        foreach ($siquossayskcwkea as $ymkomoccmymcoiea) {
            goto qagsccmgemwyowgq;
            gkgiqeqokmyaosyi:
            $ymqmyyeuycgmigyo = DecoratorWoocommerce::gmeusukogwcamcyc($ymqmyyeuycgmigyo);
            goto mqweissqoiqukwuc;
            cssokcmoicccseqa:
            umwsiiqcymkwcasg:
            goto owosmsmuaueegaas;
            qagsccmgemwyowgq:
            $mmykcgusskuuuace = self::cswwmqwaucwuqcaq($product, $ymkomoccmymcoiea);
            goto swuockeicagsysku;
            ggiswsmgccuackao:
            megqkwsyeisgoiuq:
            goto iwwawgsoqcciekeq;
            wgakiauyywueqsma:
            $ymqmyyeuycgmigyo = $ymkomoccmymcoiea->get_name();
            goto yoicqeqousygweyk;
            owosmsmuaueegaas:
            oswkqueiycsgwwqc:
            goto okcoqaemsekeyqgi;
            ucuyyuummcgmmcoo:
            foreach ($cqcsaaswaciweiie as $tsuauommsquiesmk => $eqgoocgaqwqcimie) {
                goto ksyaeigosimeymmu;
                amwucayokoyowcki:
                if (!(is_array($uiymkeeaukcyqqik) && !in_array($eqgoocgaqwqcimie, $uiymkeeaukcyqqik) && $uiymkeeaukcyqqik != $eqgoocgaqwqcimie)) {
                    goto kwuayueukssiusyo;
                }
                goto igkykqemaiuckkqm;
                igkykqemaiuckkqm:
                $kskgqoywkoawosao = false;
                goto ywckcmesqeiougoy;
                ksyaeigosimeymmu:
                $uiymkeeaukcyqqik = ManipulateArray::get($mmykcgusskuuuace, $tsuauommsquiesmk, false);
                goto amwucayokoyowcki;
                uqcqusigauwqaucm:
                kwuayueukssiusyo:
                goto usamasqcwkcaaeyo;
                ywckcmesqeiougoy:
                goto umwsiiqcymkwcasg;
                goto uqcqusigauwqaucm;
                usamasqcwkcaaeyo:
                gigyyqgmkceykwam:
                goto gcoaosuecgyuuiyq;
                gcoaosuecgyuuiyq:
            }
            goto cssokcmoicccseqa;
            uycysmimgmsawemy:
            $uomewyckeuqoqocu[$ymqmyyeuycgmigyo] = $mmykcgusskuuuace;
            goto ggiswsmgccuackao;
            mqweissqoiqukwuc:
            mimgyeoccsuwmomg:
            goto uycysmimgmsawemy;
            iwwawgsoqcciekeq:
            kgwcgkqqguiwgmmm:
            goto sgaamousiakskkko;
            cwcqcsgwwkokqgoy:
            if (!(is_array($cqcsaaswaciweiie) && $cqcsaaswaciweiie)) {
                goto oswkqueiycsgwwqc;
            }
            goto ucuyyuummcgmmcoo;
            yoicqeqousygweyk:
            if (!$aqcaekiaqgiaiwiu) {
                goto mimgyeoccsuwmomg;
            }
            goto gkgiqeqokmyaosyi;
            okcoqaemsekeyqgi:
            if (!$kskgqoywkoawosao) {
                goto megqkwsyeisgoiuq;
            }
            goto wgakiauyywueqsma;
            swuockeicagsysku:
            $kskgqoywkoawosao = true;
            goto cwcqcsgwwkokqgoy;
            sgaamousiakskkko:
        }
        goto gqmqqaumkqkyyuom;
        osmogyiiwqqwieoe:
        $uomewyckeuqoqocu["\x77\145\151\147\x68\x74"] = ["\154\x61\x62\145\154" => __("\127\x65\151\147\x68\x74", "\167\x6f\157\143\x6f\x6d\155\145\x72\x63\x65"), "\x76\x61\x6c\x75\145" => wc_format_weight($product->get_weight())];
        goto ymqsaggkkwkoomgc;
        csmosoqqwicqwuqg:
        if (!($qaiwqwwemmyyqosy && $product->has_weight())) {
            goto aaoeckeaamycqkam;
        }
        goto osmogyiiwqqwieoe;
        gqmqqaumkqkyyuom:
        oiioqgoqyykuocou:
        goto kssuoaucoagqicew;
        mwqqkaiwyugqakeq:
        $uomewyckeuqoqocu = [];
        goto yikaoaeoqsgieqoq;
        ymqsaggkkwkoomgc:
        aaoeckeaamycqkam:
        goto suuwwusyekuwqgwi;
        kssuoaucoagqicew:
        return DecoratorHook::sscegwueamckwmcy("\167\x6f\x6f\143\x6f\155\155\145\x72\x63\x65\x5f\x64\x69\163\160\154\x61\x79\137\160\x72\157\x64\165\x63\x74\137\x61\164\164\162\151\x62\x75\164\x65\x73", $uomewyckeuqoqocu, $product);
        goto egaqcmmgioyoskak;
        woweqwuwmegoecgu:
        
        $qaiwqwwemmyyqosy = DecoratorHook::sscegwueamckwmcy("\x77\x63\137\160\162\157\x64\165\143\x74\137\145\x6e\x61\x62\154\x65\137\144\151\x6d\145\156\x73\x69\157\x6e\x73\x5f\x64\x69\163\x70\x6c\141\x79", $product->has_weight() || $product->has_dimensions());
        goto csmosoqqwicqwuqg;
        cccusomswoycqgye:
        $uomewyckeuqoqocu["\144\x69\155\x65\156\163\151\157\x6e\163"] = ["\x6c\x61\x62\x65\x6c" => __("\104\x69\155\145\156\163\x69\x6f\x6e\163", "\167\x6f\x6f\x63\x6f\155\155\x65\162\143\145"), "\x76\x61\x6c\x75\145" => wc_format_dimensions($product->get_dimensions(false))];
        goto yqemqgiwcuoowges;
        eawiyomugeiugoca:
        
        $siquossayskcwkea = array_filter($product->get_attributes(), "\x77\143\x5f\141\x74\x74\x72\x69\x62\165\x74\145\x73\x5f\141\x72\x72\141\x79\x5f\146\151\x6c\x74\145\162\x5f\x76\151\x73\151\x62\x6c\145");
        goto yokquaecwougwgme;
        suuwwusyekuwqgwi:
        if (!($qaiwqwwemmyyqosy && $product->has_dimensions())) {
            goto sawkewuuqsaekcsy;
        }
        goto cccusomswoycqgye;
        yqemqgiwcuoowges:
        sawkewuuqsaekcsy:
        goto eawiyomugeiugoca;
        yikaoaeoqsgieqoq:
        $product = self::aqasygcsqysmmyke($product);
        goto woweqwuwmegoecgu;
        egaqcmmgioyoskak:
    }
    
    public static function ucqakycuekccuocw($aqykuigiuwmmcieu = self::OBJECT) : ?array
    {
        goto swwmuqsewiaswasq;
        qmgqakuqmkigkgcw:
        ManipulateArray::unset($seyqqsmuaiegkeeq, ["\160\162\x6f\144\165\x63\164\137\x73\150\x69\x70\160\151\156\147\x5f\x63\x6c\x61\163\163", "\x70\x72\157\144\x75\143\164\137\166\x69\163\151\x62\151\x6c\151\x74\171", "\160\162\x6f\144\165\x63\164\x5f\164\171\x70\145"]);
        goto oimwsegacayecyko;
        swwmuqsewiaswasq:
        static $seyqqsmuaiegkeeq = [];
        goto oiecwmgwkgscuaom;
        swasewcuckegeuuy:
        return $seyqqsmuaiegkeeq;
        goto wqeaomqyumqiocka;
        uccuwggkcciaascm:
        $seyqqsmuaiegkeeq = DecoratorTaxonomy::qgckgkwskmsomoqs("\160\x72\x6f\144\x75\143\x74", $aqykuigiuwmmcieu);
        goto qmgqakuqmkigkgcw;
        oimwsegacayecyko:
        oiekocisyuaicoey:
        goto swasewcuckegeuuy;
        oiecwmgwkgscuaom:
        if (!empty($seyqqsmuaiegkeeq)) {
            goto oiekocisyuaicoey;
        }
        goto uccuwggkcciaascm;
        wqeaomqyumqiocka:
    }
    
    public static function mywkcmciykgikmyc($product, $kesssewsiegssiya, $ywmkwiwkosakssii = []) : array
    {
        return DecoratorWoocommerce::mywkcmciykgikmyc(self::omwkqcuwceweymcc($product), $kesssewsiegssiya, $ywmkwiwkosakssii);
    }
    
    public static function iwoqeaamkmyoquwm($product, $scwmkmciyywokcug) : array
    {
        goto quookucgqymiqocy;
        gaoeaaeausmqguee:
        $yuwymayicwwqiske = $wpdb->prefix;
        goto qqeycioeqswikseq;
        gygmukceqmuewaim:
        return $wpdb->get_col("\xa\x9\11\11\x53\x45\x4c\105\103\124\40\x6f\151\x73\56\x6f\162\144\x65\162\137\151\144\xa\11\x9\x9\106\122\117\x4d\x20{$yuwymayicwwqiske}\x77\x6f\x6f\143\157\x6d\155\x65\162\143\x65\x5f\x6f\162\144\145\x72\137\151\x74\x65\155\x73\40\x61\163\x20\x6f\151\x73\12\11\x9\x9\x4c\105\x46\124\40\x4a\x4f\x49\x4e\x20{$yuwymayicwwqiske}\x77\157\x6f\x63\x6f\155\x6d\x65\162\143\x65\x5f\x6f\162\144\145\x72\137\151\x74\x65\x6d\155\x65\164\141\40\x61\163\x20\x6f\151\x6d\x20\117\116\x20\157\x69\163\x2e\x6f\x72\144\145\162\137\151\164\x65\x6d\x5f\x69\144\x20\75\40\x6f\151\x6d\56\x6f\x72\x64\145\x72\x5f\x69\x74\x65\x6d\x5f\151\144\xa\11\11\11\114\x45\106\124\40\112\x4f\x49\116\40{$wpdb->posts}\x20\x41\123\x20\x70\40\x4f\116\40\x6f\x69\163\x2e\x6f\162\x64\x65\x72\x5f\x69\144\40\75\x20\x70\56\x49\104\xa\x9\11\x9\x4c\x45\x46\x54\40\x4a\117\111\x4e\40{$wpdb->postmeta}\40\101\x53\40\x70\155\x20\x4f\x4e\40\157\151\163\x2e\x6f\x72\x64\x65\x72\137\151\144\40\75\x20\x70\155\x2e\155\x65\164\x61\x5f\x69\x64\12\x9\x9\11\x57\110\105\122\105\40\x70\x2e\160\x6f\x73\164\137\164\x79\160\x65\x20\x3d\40\x27\163\150\157\x70\137\157\162\x64\145\x72\x27\12\x9\x9\x9\x41\116\x44\x20\160\56\x70\x6f\163\x74\x5f\163\164\x61\164\x75\163\40\111\116\40\x28\x20\x27\x77\x63\55" . implode("\x27\54\x20\47\x77\143\x2d", $oqseeekuqisekiwy) . "\47\x20\51\12\x9\11\11\x41\116\104\40\x6f\151\163\x2e\x6f\x72\x64\145\x72\137\x69\164\145\x6d\x5f\x74\171\160\145\40\x3d\40\x27\154\151\156\145\137\151\164\145\155\x27\12\11\11\11\101\116\x44\x20\x6f\x69\x6d\x2e\x6d\145\164\141\137\x6b\145\x79\40\x3d\40\47\137\x70\x72\x6f\144\165\143\164\x5f\x69\144\47\xa\11\11\x9\101\x4e\x44\x20\157\151\155\56\155\x65\164\x61\137\x76\141\154\165\145\40\x3d\x20\x27{$product}\x27\12\11\11\x9\x41\x4e\104\40\x70\x6d\56\155\145\x74\x61\x5f\x6b\145\x79\x20\x3d\40\x27\x5f\143\165\x73\x74\157\x6d\145\x72\x5f\x75\x73\145\162\47\xa\x9\11\11\101\x4e\x44\x20\x70\155\x2e\155\145\164\141\137\x76\x61\x6c\165\145\x20\75\x20\47{$scwmkmciyywokcug}\x27\xa\40\40\x20\x20\x9");
        goto sokekecgsmeyesqq;
        qqeycioeqswikseq:
        $product = self::omwkqcuwceweymcc($product);
        goto kgwgksykmqweowgi;
        quookucgqymiqocy:
        global $wpdb;
        goto gaoeaaeausmqguee;
        kgwgksykmqweowgi:
        $oqseeekuqisekiwy = array_map("\x65\163\143\x5f\163\x71\154", DecoratorWoocommerce::ouqoeawmueswmksm());
        goto gygmukceqmuewaim;
        sokekecgsmeyesqq:
    }
    
    public static function giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee = null, $yuwymayicwwqiske = "\x77\157\x6f\x63\x6f\155\x6d\145\x72\x63\x65\137")
    {
        goto coqswqysimeumkei;
        coqswqysimeumkei:
        if (!$yuwymayicwwqiske) {
            goto ugkkcqkwssgykcyo;
        }
        goto muaaeioooicwskgu;
        muaaeioooicwskgu:
        $uusmaiomayssaecw = $yuwymayicwwqiske . $uusmaiomayssaecw;
        goto ecqswsccqomawuoy;
        ecqswsccqomawuoy:
        ugkkcqkwssgykcyo:
        goto iwwayiuyaecikeku;
        iwwayiuyaecikeku:
        return DecoratorOption::get($uusmaiomayssaecw, $ggauoeuaesiymgee);
        goto cmicuicekiiowekc;
        cmicuicekiiowekc:
    }
    
    public static function cswwmqwaucwuqcaq($product, $ymkomoccmymcoiea) : array
    {
        goto kgkameuwwcmaawwg;
        kgkameuwwcmaawwg:
        $qqswgiawgeaeoecu = [];
        goto ssooqmscuqwmcoeu;
        wsasggmqwyisgoiq:
        foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
            goto qwsgukcwoomuuais;
            qwsgukcwoomuuais:
            $ymqmyyeuycgmigyo = esc_html($iwewcwusemqaiggk->name);
            goto eoikakegoqcywcui;
            gsqmakgaqakuawue:
            goto wwuwumqemissswei;
            goto ggoceeqkiqmqkiwg;
            eoikakegoqcywcui:
            if ($kesssewsiegssiya->attribute_public) {
                goto wqcseagmwswqeqgu;
            }
            goto ccmgkkiyameumyoi;
            ggoceeqkiqmqkiwg:
            wqcseagmwswqeqgu:
            goto qqoaguokgcoeieyi;
            ccmgkkiyameumyoi:
            $qqswgiawgeaeoecu[] = $ymqmyyeuycgmigyo;
            goto gsqmakgaqakuawue;
            qqoaguokgcoeieyi:
            $qqswgiawgeaeoecu[] = ManipulateHTML::uuccukgasskgimsq("\x61", ["\x68\x72\x65\146" => ManipulateTerm::qmgcisuuikgmqcsu(ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk), $ymkomoccmymcoiea->get_name()), "\x72\x65\x6c" => "\x74\x61\147"], $ymqmyyeuycgmigyo);
            goto skoaowmysckmmocc;
            skoaowmysckmmocc:
            wwuwumqemissswei:
            goto ecuosiaqyaoqckao;
            ecuosiaqyaoqckao:
            wmkkqgiamggikgsi:
            goto oomiawgcsyaaqaao;
            oomiawgcsyaaqaao:
        }
        goto ykcmokmsimckuego;
        qwykccyeiymiomyi:
        owauaaeeaeoqgiii:
        goto asmkyaumussymycs;
        yqccqmsucoukqkmw:
        goto eymiaowquwyiggie;
        goto qwykccyeiymiomyi;
        aqqgkiieakuwceea:
        $mmykcgusskuuuace = ["\166\x61\x6c\x75\145" => DecoratorHook::sscegwueamckwmcy("\x77\x6f\157\143\x6f\155\155\145\162\143\x65\137\141\x74\164\x72\151\x62\x75\x74\x65", wptexturize(implode("\54\x20", $qqswgiawgeaeoecu)), $ymkomoccmymcoiea, $qqswgiawgeaeoecu), "\x6c\x61\142\x65\154" => DecoratorWoocommerce::qysciqmmoqsaqmqk($ymkomoccmymcoiea->get_name(), $product)];
        goto okseeygkgkqkwsgw;
        ssooqmscuqwmcoeu:
        if ($ymkomoccmymcoiea->is_taxonomy()) {
            goto owauaaeeaeoqgiii;
        }
        goto kamkksumiggskuay;
        ykcmokmsimckuego:
        eeuosekauyeiqoie:
        goto aeoicygsgoeeqguk;
        kamkksumiggskuay:
        $qqswgiawgeaeoecu = $ymkomoccmymcoiea->get_options();
        goto iwqasgooqqmcyqmy;
        asmkyaumussymycs:
        $kesssewsiegssiya = $ymkomoccmymcoiea->get_taxonomy_object();
        goto kgecwaiwqeacyqge;
        iwqasgooqqmcyqmy:
        foreach ($qqswgiawgeaeoecu as &$eqgoocgaqwqcimie) {
            $eqgoocgaqwqcimie = make_clickable(esc_html($eqgoocgaqwqcimie));
            qiqmamemmguaieiw:
        }
        goto keuikgoukmwokcoa;
        keuikgoukmwokcoa:
        wokmesqciaaskwoe:
        goto yqccqmsucoukqkmw;
        kgecwaiwqeacyqge:
        $uyuaosigqymaqsaa = self::mywkcmciykgikmyc($product, $ymkomoccmymcoiea->get_name(), ["\x66\x69\145\154\x64\x73" => "\x61\x6c\154"]);
        goto wsasggmqwyisgoiq;
        okseeygkgkqkwsgw:
        return (array) DecoratorHook::sscegwueamckwmcy("\x77\157\x6f\143\157\x6d\x6d\x65\x72\x63\x65\137\141\164\x74\162\151\142\x75\164\x65\x5f\x6f\x75\164\160\165\164", $mmykcgusskuuuace, $ymkomoccmymcoiea, $product);
        goto ciamwmmiqcseaeuc;
        aeoicygsgoeeqguk:
        eymiaowquwyiggie:
        goto aqqgkiieakuwceea;
        ciamwmmiqcseaeuc:
    }
    
    public static function cmussoegoauyyguw($aiamqeawckcsuaou, $ymqmyyeuycgmigyo = '', $eqgoocgaqwqcimie = '', $kekikiwsckuiyuyo = false)
    {
        goto acsmysaakckkkkie;
        cckmsweoqwaucgcs:
        goto wewkyisikaywwcmu;
        goto youqqmmoywqeggeg;
        oyaeggoyqusqqcyo:
        wewkyisikaywwcmu:
        goto wgkecsowgumikqqm;
        cumieyuwywwwsaqg:
        if (method_exists($cmussoegoauyyguw, $aiamqeawckcsuaou)) {
            goto gykoquuuowomucyq;
        }
        goto esgwyeyackaweskk;
        acsmysaakckkkkie:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto womskaaiqugkuggi;
        ykqswiqaqaogkksc:
        cwqmuqiqouooguqm:
        goto ogyguukmcmoqkqei;
        youqqmmoywqeggeg:
        cyycimgiyeqgssuy:
        goto qeycwoqakqucwscm;
        ogyguukmcmoqkqei:
        osiwmoqisiiogawm:
        goto wcuguimgckkocagq;
        qwamueuasumwowym:
        goto vosacywygmcokgkw;
        goto amuoiqyswiesyyck;
        oekkmwkqkuqwckui:
        vosacywygmcokgkw:
        goto wqiyuoiwqekmsues;
        qeycwoqakqucwscm:
        $woocommerce->session->{$aiamqeawckcsuaou}($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie);
        goto oyaeggoyqusqqcyo;
        wqiyuoiwqekmsues:
        if (!$kekikiwsckuiyuyo) {
            goto cwqmuqiqouooguqm;
        }
        goto eawmqueomoausgog;
        yimasagkemgkoeqq:
        if ($aiamqeawckcsuaou == "\x73\145\164") {
            goto qmusucqwswsqsgwc;
        }
        goto caoqqqweswimckec;
        wgkecsowgumikqqm:
        imwkaaqausgqquoo:
        goto gusamkkgwqmamcke;
        esgwyeyackaweskk:
        $eqgoocgaqwqcimie = $cmussoegoauyyguw->{$ymqmyyeuycgmigyo};
        goto qwamueuasumwowym;
        iiskacegeekeseky:
        qmusucqwswsqsgwc:
        goto ukoqsuaqouuqkuig;
        gusamkkgwqmamcke:
        return $eqgoocgaqwqcimie;
        goto kuoqweoiooqosmoe;
        caoqqqweswimckec:
        if (!($aiamqeawckcsuaou == "\147\145\164")) {
            goto osiwmoqisiiogawm;
        }
        goto cumieyuwywwwsaqg;
        amocqywwugaccike:
        $woocommerce->session->{$ymqmyyeuycgmigyo} = $eqgoocgaqwqcimie;
        goto cckmsweoqwaucgcs;
        ukoqsuaqouuqkuig:
        if (method_exists($cmussoegoauyyguw, $aiamqeawckcsuaou)) {
            goto cyycimgiyeqgssuy;
        }
        goto amocqywwugaccike;
        eawmqueomoausgog:
        unset($woocommerce->session->{$ymqmyyeuycgmigyo});
        goto ykqswiqaqaogkksc;
        womskaaiqugkuggi:
        $cmussoegoauyyguw = $woocommerce->session;
        goto yimasagkemgkoeqq;
        wcuguimgckkocagq:
        goto imwkaaqausgqquoo;
        goto iiskacegeekeseky;
        ioimwcssyaqsuqma:
        $eqgoocgaqwqcimie = $cmussoegoauyyguw->{$aiamqeawckcsuaou}($ymqmyyeuycgmigyo);
        goto oekkmwkqkuqwckui;
        amuoiqyswiesyyck:
        gykoquuuowomucyq:
        goto ioimwcssyaqsuqma;
        kuoqweoiooqosmoe:
    }
    
    public static function ceusksoaisoswmia($umwqusowiqmyseom = null) : array
    {
        goto mawoaecogwegmcoc;
        qmwkauswsyowckua:
        ngaquoioqeukmoyu:
        goto siequuwyyyusqeie;
        isqyiumsggacqmak:
        if (!(!$oammesyieqmwuwyi && $umwqusowiqmyseom)) {
            goto qcysusmwyoeoguki;
        }
        goto eicuumeiweosiaqy;
        mawoaecogwegmcoc:
        $oammesyieqmwuwyi = self::uakuwyoiooeqqiow();
        goto isqyiumsggacqmak;
        eicuumeiweosiaqy:
        $umwqusowiqmyseom = self::mmmcswscsiecscwg($umwqusowiqmyseom);
        goto dwaiimguqaaikoso;
        dwaiimguqaaikoso:
        if (!$umwqusowiqmyseom) {
            goto ngaquoioqeukmoyu;
        }
        goto uqiisswyoggsckqg;
        uqiisswyoggsckqg:
        $oammesyieqmwuwyi = $umwqusowiqmyseom->get_items();
        goto qmwkauswsyowckua;
        siequuwyyyusqeie:
        qcysusmwyoeoguki:
        goto goamosigosumsmkq;
        goamosigosumsmkq:
        return $oammesyieqmwuwyi;
        goto wuwaakyeqqeeogyy;
        wuwaakyeqqeeogyy:
    }
    
    public static function uwyscmkeyeuqyukk($ywmkwiwkosakssii = []) : string
    {
        goto ecgwcgmuemqagggm;
        ikmeskqmmqqyigmw:
        return ManipulateHTML::uuccukgasskgimsq("\154\141\x62\145\154", ["\143\154\141\x73\163" => "\164\x69\x70\163", "\x64\x61\x74\x61\x2d\164\x69\160" => ManipulateArray::get($ywmkwiwkosakssii, "\x74\x69\x70")], [ManipulateArray::get($ywmkwiwkosakssii, self::LABEL), ManipulateHTML::qgsekwygcgawekeq("\x69\156\160\165\164", $wwgucssaecqekuek)]);
        goto kikikuoceiouiccg;
        igauaamasosqcyys:
        $wwgucssaecqekuek = ["\x63\x6c\141\163\x73" => "\x63\x68\x65\143\x6b\x62\x6f\170", self::TYPE => "\x63\x68\x65\x63\x6b\x62\157\170", self::NAME => ManipulateArray::get($ywmkwiwkosakssii, self::NAME)];
        goto ecowowaocsooqkyo;
        uwwqiicwuwkwqcmg:
        kakyqyqyweuaoqmg:
        goto ikmeskqmmqqyigmw;
        ecgwcgmuemqagggm:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\164\x69\160" => '', self::NAME => '', self::LABEL => '', self::VALUE => '']);
        goto igauaamasosqcyys;
        yuiimkuacqcecwgw:
        $wwgucssaecqekuek["\143\150\145\143\x6b\x65\144"] = true;
        goto uwwqiicwuwkwqcmg;
        ecowowaocsooqkyo:
        if (!ManipulateArray::get($ywmkwiwkosakssii, self::VALUE, false)) {
            goto kakyqyqyweuaoqmg;
        }
        goto yuiimkuacqcecwgw;
        kikikuoceiouiccg:
    }
}
