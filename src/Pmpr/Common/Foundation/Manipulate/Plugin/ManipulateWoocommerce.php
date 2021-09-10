<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        goto iwecwgwiccuemkye;
        iwecwgwiccuemkye:
        $sogksuscggsicmac = [];
        goto qeoawooaykmyokuo;
        qeoawooaykmyokuo:
        $seyqqsmuaiegkeeq = DecoratorWoocommerce::mqsqiyqiceqasokq();
        goto okyqqamccagawuoi;
        okyqqamccagawuoi:
        foreach ($isweyuoisomqyaag as $ymqmyyeuycgmigyo => $igqsaukqcqscimok) {
            goto oeguggskkegamuoo;
            uimyekysswywuoyi:
            if (!$kesssewsiegssiya) {
                goto aaoywwqcimiwiywu;
            }
            goto cemsuwwwgiqiyigo;
            cemsuwwwgiqiyigo:
            $sogksuscggsicmac[$ymqmyyeuycgmigyo] = ["\x61\164\164\162\x69\x62\x75\x74\x65" => $kesssewsiegssiya, "\164\145\162\x6d" => []];
            goto owymcaeysicqacya;
            eiqiqqoyqcaiiwqo:
            ayccewcmckaqowek:
            goto amescycuaoumygqc;
            oeguggskkegamuoo:
            $kesssewsiegssiya = ManipulateArray::get($seyqqsmuaiegkeeq, ManipulateString::wiecmkiugmyyqiqc("\160\141\137", '', $ymqmyyeuycgmigyo));
            goto uimyekysswywuoyi;
            owymcaeysicqacya:
            aaoywwqcimiwiywu:
            goto eiqiqqoyqcaiiwqo;
            amescycuaoumygqc:
        }
        goto agiieggoecqiaoum;
        ksgumesawyqswaoa:
        return $sogksuscggsicmac;
        goto ieycaaisagswkaiy;
        agiieggoecqiaoum:
        kmayiocekggkoyso:
        goto ksgumesawyqswaoa;
        ieycaaisagswkaiy:
    }
    
    public static function kyycwccmaemgokwu($smwiiesyqsgyisos) : string
    {
        goto ueekmmegamoyagog;
        gogyuwukcgmycsqw:
        emyeissowqweyqec:
        goto mgscesskeauowgsu;
        mgscesskeauowgsu:
        
        return $smwiiesyqsgyisos->get_code();
        goto kyowegyokkesuugi;
        qeayouqugioyieei:
        $smwiiesyqsgyisos = new WC_Coupon($smwiiesyqsgyisos);
        goto gogyuwukcgmycsqw;
        ueekmmegamoyagog:
        if ($smwiiesyqsgyisos instanceof WC_Coupon) {
            goto emyeissowqweyqec;
        }
        goto qeayouqugioyieei;
        kyowegyokkesuugi:
    }
    
    public static function oeeuywgiaywkimek($smwiiesyqsgyisos)
    {
        goto uowaoiwemyccakim;
        uowaoiwemyccakim:
        $smwiiesyqsgyisos = new WC_Coupon($smwiiesyqsgyisos);
        goto gukkaswwecmuoayo;
        sccoieksocaiaogm:
        $smwiiesyqsgyisos = false;
        goto gskmiyeoisqoqkci;
        gskmiyeoisqoqkci:
        qyyiiuuscqgeowya:
        goto iaqiocmqqiaeuwyg;
        iaqiocmqqiaeuwyg:
        return $smwiiesyqsgyisos;
        goto yasegwakoscmkouu;
        gukkaswwecmuoayo:
        if (self::kyycwccmaemgokwu($smwiiesyqsgyisos)) {
            goto qyyiiuuscqgeowya;
        }
        goto sccoieksocaiaogm;
        yasegwakoscmkouu:
    }
    
    public static function cuwomiomuqqkayoo($ioakeqoosmkukeaa)
    {
        goto gkuyqiyuaquuyaay;
        gkuyqiyuaquuyaay:
        $wwcysoksoogyacog = ManipulateWoocommerce::uceecgsoicggikeu();
        goto aqyqqgkiycokskwq;
        aqyqqgkiycokskwq:
        if (!$wwcysoksoogyacog) {
            goto osamqwsmcawigggw;
        }
        goto masgkciqasaucoss;
        masgkciqasaucoss:
        
        $wwcysoksoogyacog->add_discount($ioakeqoosmkukeaa);
        goto eogaamwmasgugqgy;
        eogaamwmasgugqgy:
        osamqwsmcawigggw:
        goto weyoiomaeciyggug;
        weyoiomaeciyggug:
    }
    
    public static function mmmcswscsiecscwg($umwqusowiqmyseom)
    {
        goto eaqsewgiawoasqgu;
        eaqsewgiawoasqgu:
        if (is_a($umwqusowiqmyseom, "\127\103\137\117\162\x64\x65\162")) {
            goto oockcigwicccqyko;
        }
        goto kaaasaqewwykmikk;
        kaaasaqewwykmikk:
        $umwqusowiqmyseom = DecoratorWoocommerce::mmmcswscsiecscwg($umwqusowiqmyseom);
        goto cmawmeioiuegssuw;
        umeemqiuewswymkw:
        return $umwqusowiqmyseom;
        goto qweqcmkkiqkkukis;
        cmawmeioiuegssuw:
        oockcigwicccqyko:
        goto umeemqiuewswymkw;
        qweqcmkkiqkkukis:
    }
    
    public static function wcqicmcuiewessgy($umwqusowiqmyseom) : string
    {
        goto ugiuoawueimimiwk;
        aouoeqamkuemyeqa:
        $iueymcwwscwqkiyq = '';
        goto ukcyuqaycogiiiye;
        oiseukwsseayeamo:
        $iueymcwwscwqkiyq = DecoratorWoocommerce::ueqkgikommgyqmoa($umwqusowiqmyseom->get_status());
        goto awcwocukswgsaymk;
        iwekcauymcaoooie:
        return $iueymcwwscwqkiyq;
        goto mmksuuciiyoyaaoa;
        ugiuoawueimimiwk:
        $umwqusowiqmyseom = self::mmmcswscsiecscwg($umwqusowiqmyseom);
        goto aouoeqamkuemyeqa;
        awcwocukswgsaymk:
        qgkmsokwcmmawiey:
        goto iwekcauymcaoooie;
        ukcyuqaycogiiiye:
        if (!$umwqusowiqmyseom) {
            goto qgkmsokwcmmawiey;
        }
        goto oiseukwsseayeamo;
        mmksuuciiyoyaaoa:
    }
    
    public static function susisykioakswkmm($umwqusowiqmyseom) : string
    {
        goto qkkcekocsgakoqqo;
        ioeaawqkkakemsum:
        if ($umwqusowiqmyseom->get_billing_first_name() || $umwqusowiqmyseom->get_billing_last_name()) {
            goto aowgayqaooygayky;
        }
        goto gyqecessamsiywea;
        icuauuecukomyoss:
        oowymeqscqicmiac:
        goto egkiyyuywuiekisw;
        ymmwikogcaccsgyo:
        quweyqomsoqcwmae:
        goto xoyesscyiuyyoaao;
        koyyawuukocokcme:
        $umwqusowiqmyseom = self::mmmcswscsiecscwg($umwqusowiqmyseom);
        goto aeusyyagoyskceiy;
        egkiyyuywuiekisw:
        seiyywsmwamccscw:
        goto cookqcosymocwyqg;
        yaqamykgsuagaksc:
        aowgayqaooygayky:
        goto gkecqaygqygkkgwc;
        ueioekeyeekmugss:
        $qsegigkmaaskiaeo = trim($umwqusowiqmyseom->get_billing_company());
        goto smwwcycswiyuqouu;
        kkeeggmwkmuwswca:
        return $qsegigkmaaskiaeo;
        goto sgsmiecuouaseyeu;
        cywckaugcygcssie:
        if (!$umwqusowiqmyseom->get_customer_id()) {
            goto seiyywsmwamccscw;
        }
        goto ascyoecaiyskamoo;
        wsemcaiucsysuqiq:
        if (!$mkucggyaiaukqoce) {
            goto oowymeqscqicmiac;
        }
        goto mukmccquscqkeeuy;
        gyqecessamsiywea:
        if ($umwqusowiqmyseom->get_billing_company()) {
            goto kcyccscigsuuiomi;
        }
        goto cywckaugcygcssie;
        cookqcosymocwyqg:
        goto nacqwwcyskisiqmi;
        goto kaacgcseugewuceu;
        gkecqaygqygkkgwc:
        $qsegigkmaaskiaeo = trim(sprintf("\x25\163\x20\45\163", $umwqusowiqmyseom->get_billing_first_name(), $umwqusowiqmyseom->get_billing_last_name()));
        goto ymmwikogcaccsgyo;
        smwwcycswiyuqouu:
        nacqwwcyskisiqmi:
        goto isgekmewmqgmwiky;
        mukmccquscqkeeuy:
        $qsegigkmaaskiaeo = ucwords($mkucggyaiaukqoce->display_name);
        goto icuauuecukomyoss;
        kaacgcseugewuceu:
        kcyccscigsuuiomi:
        goto ueioekeyeekmugss;
        aeusyyagoyskceiy:
        if (!$umwqusowiqmyseom) {
            goto saeeegogmqsyimqk;
        }
        goto ioeaawqkkakemsum;
        qkkcekocsgakoqqo:
        $qsegigkmaaskiaeo = '';
        goto koyyawuukocokcme;
        ascyoecaiyskamoo:
        $mkucggyaiaukqoce = ManipulateUser::get($umwqusowiqmyseom->get_customer_id(), true);
        goto wsemcaiucsysuqiq;
        xoyesscyiuyyoaao:
        saeeegogmqsyimqk:
        goto kkeeggmwkmuwswca;
        isgekmewmqgmwiky:
        goto quweyqomsoqcwmae;
        goto yaqamykgsuagaksc;
        sgsmiecuouaseyeu:
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
        goto oqiowcuqsqwyukgi;
        qqmsywmwmygigewc:
        if (!$wwcysoksoogyacog) {
            goto muwyoumcckugweeg;
        }
        goto cegciyyeemaaawuo;
        ocmsggeccyugikwu:
        muwyoumcckugweeg:
        goto ysmyakmkagcqqswo;
        ysmyakmkagcqqswo:
        goto uuwiiwywmwyoymgi;
        goto makosoyccwoyooyu;
        kmeesswcuaququqw:
        $wwcysoksoogyacog = self::uceecgsoicggikeu();
        goto qqmsywmwmygigewc;
        makosoyccwoyooyu:
        agimkskeiiemakqe:
        goto cmssgciwquymiacc;
        uyscswaymikycueg:
        uuwiiwywmwyoymgi:
        goto qiaowqciwwyiucae;
        cmssgciwquymiacc:
        wc_empty_cart();
        goto uyscswaymikycueg;
        cegciyyeemaaawuo:
        $wwcysoksoogyacog->empty_cart();
        goto ocmsggeccyugikwu;
        oqiowcuqsqwyukgi:
        if (function_exists("\167\x63\137\x65\155\x70\164\x79\137\143\141\x72\x74")) {
            goto agimkskeiiemakqe;
        }
        goto kmeesswcuaququqw;
        qiaowqciwwyiucae:
    }
    
    public static function uakuwyoiooeqqiow() : array
    {
        goto iamqccceoygiywgo;
        wukmywyisgqyiwku:
        if (!$wwcysoksoogyacog) {
            goto aaqoyoyiagqcguse;
        }
        goto wgeuaaggcwocgomy;
        qiycageymgowgicg:
        return $ygwoqcwsaggqoamw;
        goto yususwsyymskuwge;
        cgyaokocoymsqakq:
        aaqoyoyiagqcguse:
        goto qiycageymgowgicg;
        qgoicagqowggweeq:
        $ygwoqcwsaggqoamw = [];
        goto wukmywyisgqyiwku;
        wgeuaaggcwocgomy:
        $ygwoqcwsaggqoamw = $wwcysoksoogyacog->get_cart_contents();
        goto cgyaokocoymsqakq;
        iamqccceoygiywgo:
        $wwcysoksoogyacog = self::uceecgsoicggikeu();
        goto qgoicagqowggweeq;
        yususwsyymskuwge:
    }
    
    public static function geoemsmuouqcqmei() : ?string
    {
        goto aocsmigsemowswge;
        gkoyauwycuyumiey:
        goto ieukeyosucwcigcq;
        goto uguaomoemkcuqksw;
        iikgymkaqikicssa:
        if (function_exists("\167\143\137\147\145\x74\x5f\143\141\162\x74\137\x75\x72\154")) {
            goto koiweeaoqaqgeiow;
        }
        goto gokisgaagiawmqmg;
        mackmiksusgquqku:
        ieukeyosucwcigcq:
        goto kkcskacouykscykm;
        uguaomoemkcuqksw:
        koiweeaoqaqgeiow:
        goto uaycgmwwmeqsqoss;
        uaycgmwwmeqsqoss:
        return wc_get_cart_url();
        goto mackmiksusgquqku;
        gokisgaagiawmqmg:
        return $woocommerce->cart->get_cart_url();
        goto gkoyauwycuyumiey;
        aocsmigsemowswge:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto iikgymkaqikicssa;
        kkcskacouykscykm:
    }
    
    public static function ayseokmqycoqaigc() : bool
    {
        return class_exists("\167\157\x6f\x63\x6f\x6d\155\145\162\x63\145") && ManipulatePlugin::ggocakcisguuokai("\167\157\x6f\143\x6f\155\x6d\x65\x72\143\x65\57\x77\157\x6f\143\157\155\155\x65\162\x63\x65\56\x70\x68\x70");
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
        goto qqoeqgqkmegyquie;
        gcaeuwucgqwocegi:
        if (!is_a($umwqusowiqmyseom, "\x57\x43\x5f\117\x72\144\145\162")) {
            goto sugiiygakykaogou;
        }
        goto yumugwyseyuawuae;
        eicoyaciiwoweyow:
        return $aokagokqyuysuksm;
        goto ccykaqwcuqguuesk;
        qqoeqgqkmegyquie:
        $aokagokqyuysuksm = $umwqusowiqmyseom;
        goto gcaeuwucgqwocegi;
        yumugwyseyuawuae:
        $aokagokqyuysuksm = $umwqusowiqmyseom->get_id();
        goto kuekaewgqsagkokm;
        kuekaewgqsagkokm:
        sugiiygakykaogou:
        goto eicoyaciiwoweyow;
        ccykaqwcuqguuesk:
    }
    
    public static function aqasygcsqysmmyke($product = null)
    {
        goto kgyiaoswiyukcguu;
        qgwksesamqckoysm:
        aoywumwiwsuugsae:
        goto iyqwcuwcoqsqiqey;
        ygogeqikkaiewqak:
        $product = DecoratorWoocommerce::aqasygcsqysmmyke($product);
        goto qgwksesamqckoysm;
        kgyiaoswiyukcguu:
        if (is_a($product, "\x57\x43\137\x50\162\157\144\165\x63\164")) {
            goto aoywumwiwsuugsae;
        }
        goto ygogeqikkaiewqak;
        iyqwcuwcoqsqiqey:
        return $product;
        goto uykoiemomggyyaqm;
        uykoiemomggyyaqm:
    }
    
    public static function mkiigkeqaeiwqyua() : bool
    {
        return in_array(DecoratorWoocommerce::useawgqusasoukqm(), ["\x49\x52\x54", "\x49\x52\x52"]);
    }
    
    public static function eywqaumgkccycyau($aokagokqyuysuksm, $ywmkwiwkosakssii = [])
    {
        goto sqcucoqwgcookais;
        cqkmekqeuoamwwik:
        DecoratorWoocommerce::eywqaumgkccycyau($ywmkwiwkosakssii);
        goto gkqeioiiywequymm;
        osqscmomgeumekym:
        foreach ($wkyuegumgeqqqmyg as $aiowsaccomcoikus) {
            goto wwoyegucuaugosys;
            kcyyceweysgmscgm:
            $ywmkwiwkosakssii[$aiowsaccomcoikus] = DecoratorSanitize::aoeoykwemwaqsikc($ywmkwiwkosakssii[$aiowsaccomcoikus]);
            goto ouekywuyisaayusa;
            wwoyegucuaugosys:
            if (!isset($ywmkwiwkosakssii[$aiowsaccomcoikus])) {
                goto caeissowkcqcoisu;
            }
            goto kcyyceweysgmscgm;
            ouekywuyisaayusa:
            caeissowkcqcoisu:
            goto maeoaamgcykqqcac;
            maeoaamgcykqqcac:
            omygqyyicqyuswqs:
            goto eqmiagqymgsqikio;
            eqmiagqymgsqikio:
        }
        goto isqoqyuosaeauika;
        isqoqyuosaeauika:
        yqusmmkkqyqusoug:
        goto cqkmekqeuoamwwik;
        sqcucoqwgcookais:
        $ywmkwiwkosakssii[self::ID] = $aokagokqyuysuksm;
        goto igoiiguaiiyskqye;
        igoiiguaiiyskqye:
        $wkyuegumgeqqqmyg = [];
        goto osqscmomgeumekym;
        gkqeioiiywequymm:
    }
    
    public static function oseiymowmquqkaca() : bool
    {
        global $woocommerce_loop;
        return DecoratorWoocommerce::kmymkocwcawgeccm() && isset($woocommerce_loop["\156\141\x6d\x65"]) && in_array($woocommerce_loop["\156\141\155\x65"], ["\162\145\x6c\x61\164\145\x64", "\165\160\40\55\x20\163\145\154\154\x73"]);
    }
    
    public static function kyckwuuiqwmyoqma() : ?\WC_Query
    {
        goto eqskaoiwkcikoock;
        aesqskyuooksouwa:
        return $gqgemcmoicmgaqie;
        goto mkuoeggssimkqoee;
        cowcyoscwiogwoss:
        if (!$woocommerce) {
            goto aswqcceuwmmqciec;
        }
        goto iammguyywsgygewo;
        eqskaoiwkcikoock:
        $gqgemcmoicmgaqie = null;
        goto wwowwogiasqyegco;
        iammguyywsgygewo:
        $gqgemcmoicmgaqie = $woocommerce->query;
        goto ekwgywkksceymecu;
        wwowwogiasqyegco:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto cowcyoscwiogwoss;
        ekwgywkksceymecu:
        aswqcceuwmmqciec:
        goto aesqskyuooksouwa;
        mkuoeggssimkqoee:
    }
    
    public static function kkewuuisyiscmgyc() : WooCommerce
    {
        goto umeuqqawicigwmmw;
        qoieockmumciwweq:
        $mksyucucyswaukig = $woocommerce;
        goto qmccgkcskscsakcu;
        swyaqueaoyekgomq:
        return $mksyucucyswaukig;
        goto owgiiuqeeesguqsq;
        wocmuysuywyaeyia:
        ockwkskmgeqemqwm:
        goto iiwkgiyuiuskiusa;
        eqesiosukaowuquq:
        eqaqiuescmyiwsoq:
        goto swyaqueaoyekgomq;
        iiwkgiyuiuskiusa:
        $mksyucucyswaukig = WC();
        goto eqesiosukaowuquq;
        umeuqqawicigwmmw:
        if (function_exists("\x57\103")) {
            goto ockwkskmgeqemqwm;
        }
        goto ywmkeguguoigeago;
        qmccgkcskscsakcu:
        goto eqaqiuescmyiwsoq;
        goto wocmuysuywyaeyia;
        ywmkeguguoigeago:
        global $woocommerce;
        goto qoieockmumciwweq;
        owgiiuqeeesguqsq:
    }
    
    public static function scgumisucgwskyqk($product, $mgkceomocowocqyo = "\166\x69\145\x77") : string
    {
        goto gmqceeyooqckwwms;
        ueiooqcaegkyumkk:
        $aumscagymwyyicag = DecoratorHook::sscegwueamckwmcy("\167\x6f\157\143\x6f\x6d\155\x65\x72\143\145\x5f\160\162\x6f\144\x75\x63\164\x5f\162\x65\147\165\154\x61\x72\137\160\162\151\x63\145", $eyuymeqcioasuyyi, $product);
        goto mqysyiqsowkciiiq;
        emsoowiaoaoayqyy:
        goto ueoykiauoyuauwsi;
        goto gowguesicegmegqw;
        ikckcqggoqoimoio:
        $product = self::aqasygcsqysmmyke($product);
        goto qqsyqgokqqsqoooe;
        qqsyqgokqqsqoooe:
        if (!$product) {
            goto ycaqamikucimygma;
        }
        goto amqmckimqwauwkug;
        usuiacsqegaeywgs:
        ueoykiauoyuauwsi:
        goto ueiooqcaegkyumkk;
        iuawscaywkoegium:
        $eyuymeqcioasuyyi = $product->regular_price;
        goto emsoowiaoaoayqyy;
        owgocmqmgsgeayue:
        $eyuymeqcioasuyyi = $product->get_regular_price($mgkceomocowocqyo);
        goto usuiacsqegaeywgs;
        gmqceeyooqckwwms:
        $aumscagymwyyicag = '';
        goto ikckcqggoqoimoio;
        gowguesicegmegqw:
        yqmkgcicoecyuiku:
        goto owgocmqmgsgeayue;
        comswgimqmwcyyas:
        return $aumscagymwyyicag;
        goto sigcqyomcgiyamkq;
        amqmckimqwauwkug:
        if (method_exists($product, "\147\145\164\137\163\x61\154\x65\137\160\162\151\143\145")) {
            goto yqmkgcicoecyuiku;
        }
        goto iuawscaywkoegium;
        mqysyiqsowkciiiq:
        ycaqamikucimygma:
        goto comswgimqmwcyyas;
        sigcqyomcgiyamkq:
    }
    
    public static function asaycagaeksiumkw($product, $mgkceomocowocqyo = "\166\x69\145\167") : string
    {
        goto cseuscicwscieqaa;
        kwwqiuaycwkcigqq:
        if (!$product) {
            goto wimquiyiyyakiyqo;
        }
        goto cgsygucccwyayksw;
        ewkmiiygeqessaue:
        kgykiwcggygyekgc:
        goto cgiioksocuikciqu;
        gccusiaomowsyeqk:
        $product = self::aqasygcsqysmmyke($product);
        goto kwwqiuaycwkcigqq;
        kauocquekqgswwoe:
        $eyuymeqcioasuyyi = $product->get_sale_price($mgkceomocowocqyo);
        goto ewkmiiygeqessaue;
        cseuscicwscieqaa:
        $aumscagymwyyicag = '';
        goto gccusiaomowsyeqk;
        csmqycguwyiekmwq:
        eiimgesccmkgusys:
        goto kauocquekqgswwoe;
        cgsygucccwyayksw:
        if (method_exists($product, "\x67\x65\x74\137\163\x61\154\145\137\x70\162\x69\143\x65")) {
            goto eiimgesccmkgusys;
        }
        goto kkskwicmigikmwuk;
        kucuomkwkigoaaoi:
        wimquiyiyyakiyqo:
        goto aqimsokikskmeukc;
        aqimsokikskmeukc:
        return $aumscagymwyyicag;
        goto igmocmyuiauyaaky;
        cgiioksocuikciqu:
        $aumscagymwyyicag = DecoratorHook::sscegwueamckwmcy("\x77\x6f\157\x63\157\x6d\155\x65\x72\143\145\x5f\x70\x72\x6f\x64\x75\143\x74\x5f\x73\x61\154\x65\x5f\160\162\151\x63\145", $eyuymeqcioasuyyi, $product);
        goto kucuomkwkigoaaoi;
        makucowmowkkooyy:
        goto kgykiwcggygyekgc;
        goto csmqycguwyiekmwq;
        kkskwicmigikmwuk:
        $eyuymeqcioasuyyi = $product->sale_price;
        goto makucowmowkkooyy;
        igmocmyuiauyaaky:
    }
    
    public static function aqwquwewocyewasw() : bool
    {
        goto siawmiiggusigmks;
        awgckickkikmwgoe:
        $uwqkkwmiiumuukoa = $woocommerce->is_rest_api_request();
        goto ikuecasooegqekwi;
        ikuecasooegqekwi:
        kqaqeisqomwwcasq:
        goto auyuoiygayksuuua;
        auyuoiygayksuuua:
        return $uwqkkwmiiumuukoa;
        goto ogkwaimcumgaueem;
        qyoyoscsokwicwcm:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto cekucgakuqaicscm;
        siawmiiggusigmks:
        $uwqkkwmiiumuukoa = false;
        goto qyoyoscsokwicwcm;
        cekucgakuqaicscm:
        if (!($woocommerce && method_exists($woocommerce, "\x69\x73\x5f\x72\145\163\x74\137\x61\160\151\137\162\x65\x71\165\x65\x73\x74"))) {
            goto kqaqeisqomwwcasq;
        }
        goto awgckickkikmwgoe;
        ogkwaimcumgaueem:
    }
    
    public static function uceecgsoicggikeu() : ?WC_Cart
    {
        goto ackemimmseeuauek;
        ackemimmseeuauek:
        $wwcysoksoogyacog = null;
        goto ayikyecyysisuioq;
        ayikyecyysisuioq:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto kmqcsyeeiyqwiusw;
        moqccissukkoumwo:
        return $wwcysoksoogyacog;
        goto eoyokykwkikgaaww;
        kmqcsyeeiyqwiusw:
        if (!$woocommerce) {
            goto eikgggsiaicqiqag;
        }
        goto gmymykusaimcgayu;
        gmymykusaimcgayu:
        $wwcysoksoogyacog = $woocommerce->cart;
        goto pewociqgeseqykos;
        pewociqgeseqykos:
        eikgggsiaicqiqag:
        goto moqccissukkoumwo;
        eoyokykwkikgaaww:
    }
    
    public static function aoqkwiysueqqwigk() : ?string
    {
        goto iqmqycmwemkkugmw;
        mwcqoqsgsoiacuqu:
        if (function_exists("\167\143\x5f\147\145\x74\137\x63\x68\145\143\153\157\x75\164\137\x75\x72\154")) {
            goto ouesqgosuiesgwas;
        }
        goto sagukwqksqiukyeq;
        oassuwsweqqyooss:
        goto ucmwwiwcaqesyqaw;
        goto osucouyseikugqwm;
        iqmqycmwemkkugmw:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto mwcqoqsgsoiacuqu;
        sagukwqksqiukyeq:
        return $woocommerce->cart->get_checkout_url();
        goto oassuwsweqqyooss;
        osucouyseikugqwm:
        ouesqgosuiesgwas:
        goto kikgmuyaiiicugcg;
        kikgmuyaiiicugcg:
        return wc_get_checkout_url();
        goto qyyioseuoicymucm;
        qyyioseuoicymucm:
        ucmwwiwcaqesyqaw:
        goto gcueeowqwicyuuwm;
        gcueeowqwicyuuwm:
    }
    
    public static function kccgkwigyyiugcco() : bool
    {
        return "\x79\x65\x73" === self::giiuwsmyumqwwiyq("\x65\156\x61\x62\154\145\x5f\x6d\171\141\x63\143\x6f\x75\156\164\x5f\x72\145\x67\151\x73\164\162\141\x74\x69\157\156");
    }
    
    public static function yaaucgakecuykawk() : bool
    {
        global $woocommerce_loop;
        return DecoratorWoocommerce::kmymkocwcawgeccm() && isset($woocommerce_loop["\156\x61\x6d\145"]) && in_array($woocommerce_loop["\x6e\141\x6d\x65"], ["\165\160\x20\55\x20\x73\145\x6c\x6c\x73"]);
    }
    
    public static function ogkieiokqueakmyc() : bool
    {
        global $woocommerce_loop;
        return DecoratorWoocommerce::kmymkocwcawgeccm() && isset($woocommerce_loop["\156\141\x6d\x65"]) && in_array($woocommerce_loop["\x6e\x61\155\x65"], ["\x72\145\154\141\x74\x65\x64"]);
    }
    
    public static function omwkqcuwceweymcc($product = null)
    {
        goto saoicecaigamyumi;
        gcgguqeygkiuseei:
        return $aokagokqyuysuksm;
        goto kgkycyakimoowckw;
        owwkeimwommeqeuk:
        kiwiacqeekiyqqum:
        goto ouyaoosmgkcycecy;
        qeyyusmwmygyssis:
        $aokagokqyuysuksm = $product->get_id();
        goto ekiaooogkcaiqmku;
        ouyaoosmgkcycecy:
        $aokagokqyuysuksm = $product;
        goto agcecaceyeicacew;
        wicgcmsymyamgkqo:
        $product = self::aqasygcsqysmmyke(ManipulatePost::mwikyscisascoeea());
        goto owwkeimwommeqeuk;
        agcecaceyeicacew:
        if (!is_a($product, "\x57\103\137\x50\x72\157\144\x75\143\164")) {
            goto uwkusimiysaesysu;
        }
        goto qeyyusmwmygyssis;
        saoicecaigamyumi:
        if ($product) {
            goto kiwiacqeekiyqqum;
        }
        goto wicgcmsymyamgkqo;
        ekiaooogkcaiqmku:
        uwkusimiysaesysu:
        goto gcgguqeygkiuseei;
        kgkycyakimoowckw:
    }
    
    public static function ageqswwkkqywckco($ywmkwiwkosakssii = []) : array
    {
        goto moyeqcaaoumugqga;
        gguqqicieewmyqak:
        foreach ($oysoyeaucuawyaky as $aokagokqyuysuksm) {
            goto iuasisokiwkkgsig;
            uqioouaicscwyeei:
            yywwamymqqweegma:
            goto sygcsssigqkuemcu;
            kcwmuwimsuqeeika:
            $oksqskmgoqiqciis[$aokagokqyuysuksm] = $product;
            goto qouiaaqwcueugsyg;
            iuasisokiwkkgsig:
            $product = self::aqasygcsqysmmyke($aokagokqyuysuksm);
            goto wygeoqscyoqegsim;
            wygeoqscyoqegsim:
            if (!$product) {
                goto qmwgkkusoumsaymy;
            }
            goto kcwmuwimsuqeeika;
            qouiaaqwcueugsyg:
            qmwgkkusoumsaymy:
            goto uqioouaicscwyeei;
            sygcsssigqkuemcu:
        }
        goto egqwmisqumyygeaw;
        iiaqqsyysmuiuqgk:
        if (!is_array($oysoyeaucuawyaky)) {
            goto acykkosiggykiqae;
        }
        goto gguqqicieewmyqak;
        ekmowewoceagouse:
        $oysoyeaucuawyaky = ManipulatePost::ciugwooasaqcywas("\x70\x72\157\x64\165\x63\x74", $ywmkwiwkosakssii);
        goto asmqyacukagmsmog;
        egqwmisqumyygeaw:
        eqmmisowcsogsmmi:
        goto eqswioyysgiegmkw;
        asmqyacukagmsmog:
        $oksqskmgoqiqciis = [];
        goto iiaqqsyysmuiuqgk;
        ecgigaamcwiqiukk:
        return $oksqskmgoqiqciis;
        goto wgieqooykcsmeemu;
        eqswioyysgiegmkw:
        acykkosiggykiqae:
        goto ecgigaamcwiqiukk;
        moyeqcaaoumugqga:
        $ywmkwiwkosakssii["\x66\x69\145\154\x64\x73"] = "\151\x64\163";
        goto ekmowewoceagouse;
        wgieqooykcsmeemu:
    }
    
    public static function weqwusgaqsmseiyq() : array
    {
        return ["\151\155\x61\x67\x65" => esc_html__("\x49\155\141\x67\145", PR__CMN__FOUNDATION), "\x70\x72\x69\x63\x65" => esc_html__("\120\162\151\x63\145", PR__CMN__FOUNDATION), "\x61\x64\x64\x2d\164\157\55\143\x61\x72\164" => esc_html__("\x41\x64\144\x20\x74\157\x20\143\x61\162\164", PR__CMN__FOUNDATION), "\x64\x65\163\x63\162\151\160\164\x69\157\156" => esc_html__("\104\x65\163\143\x72\151\x70\x74\x69\x6f\x6e", PR__CMN__FOUNDATION), "\163\153\165" => esc_html__("\x53\153\165", PR__CMN__FOUNDATION), "\x73\164\157\x63\x6b" => esc_html__("\101\166\x61\x69\x6c\x61\142\151\x6c\151\x74\171", PR__CMN__FOUNDATION), "\x77\x65\151\x67\150\x74" => esc_html__("\x57\x65\x69\147\150\x74", PR__CMN__FOUNDATION), "\144\x69\155\x65\x6e\163\151\x6f\156\x73" => esc_html__("\x44\151\155\145\156\x73\151\x6f\x6e\163", PR__CMN__FOUNDATION)];
    }
    
    public static function gmowuaggkmgkseyo() : bool
    {
        return DecoratorQuery::qmssqeyayicowkgy("\160\x72\x6f\x64\165\x63\164\x5f\143\141\x74");
    }
    
    public static function ecaegsuskkkigkgc() : ?WC_Checkout
    {
        goto qaowiwsuoecmmkkw;
        gemiusgkmeaykywq:
        return $yogeuygiqackeiky;
        goto akgusigiuuowiemm;
        kuygeikysoqqqouy:
        ywogweeguksciwcw:
        goto gemiusgkmeaykywq;
        soqwcqmyqkqyqawm:
        if (!$woocommerce) {
            goto ywogweeguksciwcw;
        }
        goto yaaygymiwgcucuee;
        yaaygymiwgcucuee:
        $yogeuygiqackeiky = $woocommerce->yogeuygiqackeiky();
        goto kuygeikysoqqqouy;
        qkkcyimckwcmwoyg:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto soqwcqmyqkqyqawm;
        qaowiwsuoecmmkkw:
        $yogeuygiqackeiky = null;
        goto qkkcyimckwcmwoyg;
        akgusigiuuowiemm:
    }
    
    public static function giyscymwkesykqsg($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie)
    {
        self::cmussoegoauyyguw("\x73\x65\164", $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie);
    }
    
    public static function qusqewgmqyucyooc($product, $ikgwqyuyckaewsow)
    {
        goto ikoqcwgayswaisqo;
        qmkkgkcemceygaou:
        omogkekcmgcmgaks:
        goto mqmwceouegaaucoi;
        vwwckgewsegagiqm:
        $product->fields = $qqswgiawgeaeoecu;
        goto qmkkgkcemceygaou;
        mqmwceouegaaucoi:
        kqkckwwigeyywyik:
        goto wgiewcmyikiwsasu;
        yciammygksiessww:
        $qqswgiawgeaeoecu = [];
        goto smucwoowmswcmqiq;
        kascgoogiymmugcy:
        if (!$product) {
            goto kqkckwwigeyywyik;
        }
        goto yciammygksiessww;
        smucwoowmswcmqiq:
        $aokagokqyuysuksm = $product->get_id();
        goto mmkuokwocceayask;
        msygsomkaywgokuq:
        if (!$qqswgiawgeaeoecu) {
            goto omogkekcmgcmgaks;
        }
        goto vwwckgewsegagiqm;
        ikoqcwgayswaisqo:
        $product = self::aqasygcsqysmmyke($product);
        goto kascgoogiymmugcy;
        kuukuccioawuoiea:
        gqgiygyaagieswyg:
        goto msygsomkaywgokuq;
        wgiewcmyikiwsasu:
        return $product;
        goto cqguwaockaiuioqo;
        mmkuokwocceayask:
        
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus => $ymqmyyeuycgmigyo) {
            goto wuiwikwsqoyseayq;
            uukiykgkqyekggay:
            ueygyquuioiuckmw:
            goto qagmacuwmywoisyq;
            wuiwikwsqoyseayq:
            switch ($aiowsaccomcoikus) {
                case "\164\x69\164\154\145":
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $product->get_title();
                    goto igsgeycmgyyiqyaw;
                case "\x70\162\x69\x63\145":
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $product->get_price_html();
                    goto igsgeycmgyyiqyaw;
                case "\151\x6d\x61\x67\x65":
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = intval(ManipulatePost::wsiiswmaagmyiaiw($aokagokqyuysuksm));
                    goto igsgeycmgyyiqyaw;
                case "\x64\x65\163\x63\162\151\160\x74\x69\x6f\156":
                    goto ceyiiqgekmueswas;
                    csiumocowgwwkseu:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $ukwokcuqauuosmoo;
                    goto ceooqwocwgyaosca;
                    ceyiiqgekmueswas:
                    $ukwokcuqauuosmoo = DecoratorHook::sscegwueamckwmcy("\x77\x6f\x6f\143\x6f\155\155\145\162\143\145\x5f\163\150\157\162\164\x5f\x64\145\x73\x63\x72\x69\160\164\151\157\x6e", $product->get_short_description());
                    goto csiumocowgwwkseu;
                    ceooqwocwgyaosca:
                    goto igsgeycmgyyiqyaw;
                    goto eggeemqkkcgiwkgm;
                    eggeemqkkcgiwkgm:
                case "\163\x74\157\x63\153":
                    goto socyamqieqoiusuo;
                    kmcmmgeegciwucsu:
                    $imooqykauqyyswsw["\x61\166\x61\151\x6c\141\142\x69\154\x69\164\x79"] = __("\111\x6e\x20\x73\164\157\143\x6b", PR__CMN__FOUNDATION);
                    goto momkymyyokcqmiwc;
                    oiaqgumiwqckysqq:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $imooqykauqyyswsw["\x61\166\141\x69\x6c\x61\x62\x69\154\151\x74\x79"];
                    goto yseqooouywimkcsi;
                    socyamqieqoiusuo:
                    $imooqykauqyyswsw = $product->get_availability();
                    goto ggwecgmoiwsqaiem;
                    yseqooouywimkcsi:
                    goto igsgeycmgyyiqyaw;
                    goto rgeqksseqwssoqeq;
                    momkymyyokcqmiwc:
                    skuaykemeskiciyq:
                    goto oiaqgumiwqckysqq;
                    ggwecgmoiwsqaiem:
                    if (!empty($imooqykauqyyswsw["\x61\166\x61\151\154\141\x62\x69\x6c\x69\164\x79"])) {
                        goto skuaykemeskiciyq;
                    }
                    goto kmcmmgeegciwucsu;
                    rgeqksseqwssoqeq:
                case "\x73\x6b\165":
                    goto rmamqouaqyeogmmm;
                    imycougggwgmwque:
                    goto igsgeycmgyyiqyaw;
                    goto igwwywsaqumsmakc;
                    ukoqocmokmwgkggo:
                    !$mmkkmgusieqaqkki && ($mmkkmgusieqaqkki = "\55");
                    goto scquwmwgssauikwq;
                    scquwmwgssauikwq:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $mmkkmgusieqaqkki;
                    goto imycougggwgmwque;
                    rmamqouaqyeogmmm:
                    $mmkkmgusieqaqkki = $product->get_sku();
                    goto ukoqocmokmwgkggo;
                    igwwywsaqumsmakc:
                case "\x77\x65\x69\x67\150\x74":
                    goto ucasooakcusgmasq;
                    wsksyesmkwcseqmi:
                    $mycwwoyokwokowmo = wc_format_localized_decimal($mycwwoyokwokowmo) . "\x20" . esc_attr(DecoratorOption::get("\x77\x6f\x6f\x63\157\155\155\145\162\x63\x65\x5f\167\x65\151\147\x68\x74\137\x75\x6e\x69\164"));
                    goto kwkaekkyamsuosic;
                    smwcciswieyocowa:
                    $mycwwoyokwokowmo = "\55";
                    goto eiiygsskgeocucse;
                    kwkaekkyamsuosic:
                    igigquuegyegmyas:
                    goto qmmiuscmmiciksuq;
                    ucasooakcusgmasq:
                    if ($mycwwoyokwokowmo = $product->get_weight()) {
                        goto eguqeogcowkuqmes;
                    }
                    goto smwcciswieyocowa;
                    qmmiuscmmiciksuq:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $mycwwoyokwokowmo;
                    goto wysqeaawgmsgywwe;
                    scqikcmqmsuaccuk:
                    eguqeogcowkuqmes:
                    goto wsksyesmkwcseqmi;
                    eiiygsskgeocucse:
                    goto igigquuegyegmyas;
                    goto scqikcmqmsuaccuk;
                    wysqeaawgmsgywwe:
                    goto igsgeycmgyyiqyaw;
                    goto msmyekocyqaeiqui;
                    msmyekocyqaeiqui:
                case "\144\x69\x6d\x65\x6e\163\151\157\156\x73":
                    goto qyqeeqeasassiyqg;
                    goagoaikyyyaisgy:
                    goto igsgeycmgyyiqyaw;
                    goto qcwmwsussmygiowm;
                    qiwwswgwkcekequo:
                    !$qaiwqwwemmyyqosy && ($qaiwqwwemmyyqosy = "\55");
                    goto ykgaewsgaccoewmy;
                    ykgaewsgaccoewmy:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $qaiwqwwemmyyqosy;
                    goto goagoaikyyyaisgy;
                    qyqeeqeasassiyqg:
                    $qaiwqwwemmyyqosy = function_exists("\167\x63\137\146\157\162\155\x61\164\x5f\144\x69\155\145\156\163\x69\x6f\x6e\163") ? wc_format_dimensions($product->get_dimensions(false)) : $product->get_dimensions();
                    goto qiwwswgwkcekequo;
                    qcwmwsussmygiowm:
                default:
                    goto smiosccsmkciiaei;
                    ocowsksosgwgogmy:
                    foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
                        goto yuyqiqgiykceuwyi;
                        uamgomuoiswgmyou:
                        $qqswgiawgeaeoecu[$aiowsaccomcoikus][] = ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk);
                        goto sacqwquywoyemsui;
                        sacqwquywoyemsui:
                        cuesuqwoogmkcwuu:
                        goto kisqeasymciqmcma;
                        yuyqiqgiykceuwyi:
                        $iwewcwusemqaiggk = DecoratorSanitize::iwewcwusemqaiggk($iwewcwusemqaiggk, $aiowsaccomcoikus);
                        goto uamgomuoiswgmyou;
                        kisqeasymciqmcma:
                    }
                    goto kukmwwkmmiwaqmai;
                    kciguwegyomuqawq:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = implode("\54\x20", $qqswgiawgeaeoecu[$aiowsaccomcoikus]);
                    goto ymaeysgwkcwwiqmu;
                    uuemseeewwgcoqqc:
                    if (empty($uyuaosigqymaqsaa)) {
                        goto kiqioykgyqakwmsc;
                    }
                    goto ocowsksosgwgogmy;
                    gmgysasgwkiakiic:
                    if (!is_array($eqgoocgaqwqcimie)) {
                        goto ouqsaimcqcgaemws;
                    }
                    goto rayoswqmyqiuiics;
                    ggiyqoigmmgiamyo:
                    mqaamgcyimqcgyyu:
                    goto cocwkumuyaacwuie;
                    smiosccsmkciiaei:
                    if (DecoratorTaxonomy::myagqecycsaiyqsk($aiowsaccomcoikus)) {
                        goto mqaamgcyimqcgyyu;
                    }
                    goto ugsimmgccyugoqka;
                    ymaeysgwkcwwiqmu:
                    igymmkeosawsmquy:
                    goto ywcksgacokiyuuks;
                    ywcksgacokiyuuks:
                    goto igsgeycmgyyiqyaw;
                    goto wemcucimscmkccee;
                    iaaaeesqwkogwook:
                    $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($aokagokqyuysuksm, $aiowsaccomcoikus);
                    goto uuemseeewwgcoqqc;
                    rayoswqmyqiuiics:
                    $eqgoocgaqwqcimie = implode("\54\40", $eqgoocgaqwqcimie);
                    goto umeiygeyqcouqcsk;
                    wyomsacikcaawgow:
                    kiqioykgyqakwmsc:
                    goto kciguwegyomuqawq;
                    cocwkumuyaacwuie:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = [];
                    goto iaaaeesqwkogwook;
                    umeiygeyqcouqcsk:
                    ouqsaimcqcgaemws:
                    goto wskwqauamemaueue;
                    ugsimmgccyugoqka:
                    $eqgoocgaqwqcimie = $product->get_attribute($aiowsaccomcoikus);
                    goto gmgysasgwkiakiic;
                    rmoogiakmggyosaw:
                    goto igymmkeosawsmquy;
                    goto ggiyqoigmmgiamyo;
                    wskwqauamemaueue:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $eqgoocgaqwqcimie;
                    goto rmoogiakmggyosaw;
                    kukmwwkmmiwaqmai:
                    mqyceoiukuosysus:
                    goto wyomsacikcaawgow;
                    wemcucimscmkccee:
            }
            goto giikseaiieuqkccg;
            cqcoykgagkcckiyi:
            igsgeycmgyyiqyaw:
            goto uukiykgkqyekggay;
            giikseaiieuqkccg:
            gqeosgkaqwoooomg:
            goto cqcoykgagkcckiyi;
            qagmacuwmywoisyq:
        }
        goto kuukuccioawuoiea;
        cqguwaockaiuioqo:
    }
    
    public static function qysuguqkwiksywaq($product, $isweyuoisomqyaag) : array
    {
        goto iwwcyaoguoweqqmi;
        okyoymqacqaimooo:
        $product = self::aqasygcsqysmmyke($product);
        goto xsucwemqaekogyqi;
        xsucwemqaekogyqi:
        if (!($isweyuoisomqyaag && $product instanceof WC_Product_Variable)) {
            goto ssmesescgegmqegs;
        }
        goto msiwaicoesyagumk;
        ksosaiwckkacoeww:
        return $uomewyckeuqoqocu;
        goto ksmgqwcssgmuykqm;
        msiwaicoesyagumk:
        $uomewyckeuqoqocu = $product->get_available_variation($isweyuoisomqyaag);
        goto cmomkawiiikmcccq;
        cmomkawiiikmcccq:
        ssmesescgegmqegs:
        goto ksosaiwckkacoeww;
        iwwcyaoguoweqqmi:
        $uomewyckeuqoqocu = [];
        goto okyoymqacqaimooo;
        ksmgqwcssgmuykqm:
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
        $ywmkwiwkosakssii["\155\145\x74\x61\137\x71\165\145\x72\x79"] = ["\x6d\x65\164\141\x5f\x6b\x65\x79" => $uusmaiomayssaecw, "\x6d\145\x74\x61\137\x76\141\x6c\165\x65" => $eqgoocgaqwqcimie, "\x6d\x65\x74\x61\137\143\157\x6d\x70\x61\x72\145" => "\114\111\x4b\105"];
        return DecoratorWoocommerce::ageqswwkkqywckco($ywmkwiwkosakssii);
    }
    
    public static function gkokioeusiomuwee($product, $cqcsaaswaciweiie = [], $aqcaekiaqgiaiwiu = true)
    {
        goto sgaamousiakskkko;
        ymqsaggkkwkoomgc:
        if (!($qaiwqwwemmyyqosy && $product->has_dimensions())) {
            goto aaoeckeaamycqkam;
        }
        goto suuwwusyekuwqgwi;
        osmogyiiwqqwieoe:
        owqukoyoaogmwioi:
        goto ymqsaggkkwkoomgc;
        sgaamousiakskkko:
        $uomewyckeuqoqocu = [];
        goto mwqqkaiwyugqakeq;
        cccusomswoycqgye:
        aaoeckeaamycqkam:
        goto yqemqgiwcuoowges;
        csmosoqqwicqwuqg:
        $uomewyckeuqoqocu["\x77\x65\x69\x67\x68\164"] = ["\x6c\141\142\x65\x6c" => __("\127\145\x69\147\150\164", "\x77\x6f\x6f\x63\x6f\x6d\155\x65\162\143\x65"), "\166\x61\x6c\x75\145" => wc_format_weight($product->get_weight())];
        goto osmogyiiwqqwieoe;
        eawiyomugeiugoca:
        foreach ($siquossayskcwkea as $ymkomoccmymcoiea) {
            goto megqkwsyeisgoiuq;
            gkgiqeqokmyaosyi:
            oswkqueiycsgwwqc:
            goto mqweissqoiqukwuc;
            cssokcmoicccseqa:
            gcoaosuecgyuuiyq:
            goto owosmsmuaueegaas;
            ggiswsmgccuackao:
            oiioqgoqyykuocou:
            goto iwwawgsoqcciekeq;
            ucuyyuummcgmmcoo:
            kgwcgkqqguiwgmmm:
            goto cssokcmoicccseqa;
            megqkwsyeisgoiuq:
            $mmykcgusskuuuace = self::cswwmqwaucwuqcaq($product, $ymkomoccmymcoiea);
            goto qagsccmgemwyowgq;
            wgakiauyywueqsma:
            if (!$aqcaekiaqgiaiwiu) {
                goto oswkqueiycsgwwqc;
            }
            goto yoicqeqousygweyk;
            okcoqaemsekeyqgi:
            $ymqmyyeuycgmigyo = $ymkomoccmymcoiea->get_name();
            goto wgakiauyywueqsma;
            mqweissqoiqukwuc:
            $uomewyckeuqoqocu[$ymqmyyeuycgmigyo] = $mmykcgusskuuuace;
            goto uycysmimgmsawemy;
            qagsccmgemwyowgq:
            $kskgqoywkoawosao = true;
            goto swuockeicagsysku;
            owosmsmuaueegaas:
            if (!$kskgqoywkoawosao) {
                goto mimgyeoccsuwmomg;
            }
            goto okcoqaemsekeyqgi;
            yoicqeqousygweyk:
            $ymqmyyeuycgmigyo = DecoratorWoocommerce::gmeusukogwcamcyc($ymqmyyeuycgmigyo);
            goto gkgiqeqokmyaosyi;
            uycysmimgmsawemy:
            mimgyeoccsuwmomg:
            goto ggiswsmgccuackao;
            swuockeicagsysku:
            if (!(is_array($cqcsaaswaciweiie) && $cqcsaaswaciweiie)) {
                goto gcoaosuecgyuuiyq;
            }
            goto cwcqcsgwwkokqgoy;
            cwcqcsgwwkokqgoy:
            foreach ($cqcsaaswaciweiie as $tsuauommsquiesmk => $eqgoocgaqwqcimie) {
                goto kwuayueukssiusyo;
                uqcqusigauwqaucm:
                umwsiiqcymkwcasg:
                goto usamasqcwkcaaeyo;
                amwucayokoyowcki:
                $kskgqoywkoawosao = false;
                goto igkykqemaiuckkqm;
                kwuayueukssiusyo:
                $uiymkeeaukcyqqik = ManipulateArray::get($mmykcgusskuuuace, $tsuauommsquiesmk, false);
                goto ksyaeigosimeymmu;
                ywckcmesqeiougoy:
                gigyyqgmkceykwam:
                goto uqcqusigauwqaucm;
                igkykqemaiuckkqm:
                goto kgwcgkqqguiwgmmm;
                goto ywckcmesqeiougoy;
                ksyaeigosimeymmu:
                if (!(is_array($uiymkeeaukcyqqik) && !in_array($eqgoocgaqwqcimie, $uiymkeeaukcyqqik) && $uiymkeeaukcyqqik != $eqgoocgaqwqcimie)) {
                    goto gigyyqgmkceykwam;
                }
                goto amwucayokoyowcki;
                usamasqcwkcaaeyo:
            }
            goto ucuyyuummcgmmcoo;
            iwwawgsoqcciekeq:
        }
        goto yokquaecwougwgme;
        yqemqgiwcuoowges:
        
        $siquossayskcwkea = array_filter($product->get_attributes(), "\167\143\137\141\164\x74\162\x69\x62\x75\x74\145\x73\137\x61\162\x72\x61\x79\x5f\146\x69\x6c\x74\145\x72\137\x76\x69\163\151\142\x6c\x65");
        goto eawiyomugeiugoca;
        gqmqqaumkqkyyuom:
        return DecoratorHook::sscegwueamckwmcy("\167\157\x6f\x63\157\x6d\x6d\145\x72\143\145\x5f\144\151\163\x70\154\141\171\137\160\x72\157\144\x75\143\x74\x5f\x61\164\164\162\151\142\165\x74\145\x73", $uomewyckeuqoqocu, $product);
        goto kssuoaucoagqicew;
        yikaoaeoqsgieqoq:
        
        $qaiwqwwemmyyqosy = DecoratorHook::sscegwueamckwmcy("\x77\143\137\x70\162\x6f\144\165\x63\x74\137\x65\x6e\x61\142\154\145\137\x64\151\x6d\x65\x6e\163\x69\x6f\x6e\163\x5f\144\151\163\x70\154\x61\171", $product->has_weight() || $product->has_dimensions());
        goto woweqwuwmegoecgu;
        suuwwusyekuwqgwi:
        $uomewyckeuqoqocu["\144\151\x6d\145\x6e\163\151\157\x6e\163"] = ["\x6c\x61\x62\x65\154" => __("\x44\x69\155\145\x6e\163\x69\x6f\156\x73", "\167\157\157\143\157\155\x6d\145\x72\143\145"), "\x76\141\154\x75\x65" => wc_format_dimensions($product->get_dimensions(false))];
        goto cccusomswoycqgye;
        woweqwuwmegoecgu:
        if (!($qaiwqwwemmyyqosy && $product->has_weight())) {
            goto owqukoyoaogmwioi;
        }
        goto csmosoqqwicqwuqg;
        mwqqkaiwyugqakeq:
        $product = self::aqasygcsqysmmyke($product);
        goto yikaoaeoqsgieqoq;
        yokquaecwougwgme:
        sawkewuuqsaekcsy:
        goto gqmqqaumkqkyyuom;
        kssuoaucoagqicew:
    }
    
    public static function ucqakycuekccuocw($aqykuigiuwmmcieu = self::OBJECT) : ?array
    {
        goto oiekocisyuaicoey;
        oimwsegacayecyko:
        return $seyqqsmuaiegkeeq;
        goto swasewcuckegeuuy;
        qmgqakuqmkigkgcw:
        egaqcmmgioyoskak:
        goto oimwsegacayecyko;
        oiecwmgwkgscuaom:
        $seyqqsmuaiegkeeq = DecoratorTaxonomy::qgckgkwskmsomoqs("\x70\162\157\144\165\143\x74", $aqykuigiuwmmcieu);
        goto uccuwggkcciaascm;
        oiekocisyuaicoey:
        static $seyqqsmuaiegkeeq = [];
        goto swwmuqsewiaswasq;
        swwmuqsewiaswasq:
        if (!empty($seyqqsmuaiegkeeq)) {
            goto egaqcmmgioyoskak;
        }
        goto oiecwmgwkgscuaom;
        uccuwggkcciaascm:
        ManipulateArray::unset($seyqqsmuaiegkeeq, ["\160\x72\157\144\x75\x63\164\137\x73\150\151\160\160\x69\156\147\x5f\143\x6c\x61\163\x73", "\160\162\x6f\x64\165\143\x74\137\166\x69\x73\x69\142\x69\154\x69\x74\x79", "\160\162\157\144\165\x63\164\x5f\164\171\160\145"]);
        goto qmgqakuqmkigkgcw;
        swasewcuckegeuuy:
    }
    
    public static function mywkcmciykgikmyc($product, $kesssewsiegssiya, $ywmkwiwkosakssii = []) : array
    {
        return DecoratorWoocommerce::mywkcmciykgikmyc(self::omwkqcuwceweymcc($product), $kesssewsiegssiya, $ywmkwiwkosakssii);
    }
    
    public static function iwoqeaamkmyoquwm($product, $scwmkmciyywokcug) : array
    {
        goto wqeaomqyumqiocka;
        quookucgqymiqocy:
        $yuwymayicwwqiske = $wpdb->prefix;
        goto gaoeaaeausmqguee;
        qqeycioeqswikseq:
        $oqseeekuqisekiwy = array_map("\x65\163\143\x5f\x73\161\154", DecoratorWoocommerce::ouqoeawmueswmksm());
        goto kgwgksykmqweowgi;
        kgwgksykmqweowgi:
        return $wpdb->get_col("\xa\x9\11\x9\123\x45\114\x45\x43\x54\40\x6f\x69\163\x2e\157\162\x64\145\x72\137\151\x64\12\x9\x9\x9\x46\122\117\115\x20{$yuwymayicwwqiske}\167\x6f\x6f\143\157\x6d\155\x65\x72\143\x65\x5f\157\x72\x64\x65\x72\137\151\164\x65\x6d\163\x20\141\x73\40\157\151\163\xa\11\x9\x9\114\x45\106\124\x20\x4a\x4f\x49\x4e\40{$yuwymayicwwqiske}\167\157\x6f\143\157\155\155\x65\x72\x63\x65\137\x6f\162\x64\145\162\x5f\151\164\145\155\x6d\145\164\x61\40\x61\163\x20\157\151\x6d\40\x4f\116\x20\x6f\x69\x73\x2e\157\x72\x64\x65\162\x5f\151\164\x65\x6d\137\x69\x64\x20\75\40\157\151\155\x2e\157\162\144\x65\162\x5f\151\164\145\x6d\137\x69\144\12\x9\11\x9\x4c\x45\106\124\x20\x4a\x4f\x49\x4e\40{$wpdb->posts}\40\101\x53\x20\x70\x20\x4f\116\x20\157\151\x73\x2e\x6f\x72\x64\145\162\x5f\x69\x64\40\75\x20\x70\56\x49\104\12\x9\11\x9\114\105\x46\124\x20\112\x4f\111\116\40{$wpdb->postmeta}\40\x41\x53\40\x70\155\x20\x4f\x4e\40\157\151\x73\x2e\157\162\x64\145\162\x5f\151\x64\x20\75\x20\160\155\x2e\x6d\x65\164\x61\137\x69\144\12\11\11\x9\127\x48\105\122\105\40\160\56\x70\x6f\163\164\x5f\164\171\160\145\40\75\x20\x27\163\150\157\x70\x5f\157\162\x64\145\162\47\xa\11\11\11\101\116\104\40\160\56\160\x6f\163\x74\137\163\164\x61\164\x75\163\x20\x49\x4e\40\50\x20\47\167\x63\x2d" . implode("\x27\x2c\40\x27\x77\143\x2d", $oqseeekuqisekiwy) . "\x27\x20\51\xa\11\x9\x9\x41\116\104\40\x6f\x69\163\56\x6f\x72\x64\x65\x72\137\x69\164\x65\x6d\137\164\x79\x70\145\x20\x3d\x20\x27\154\x69\x6e\x65\x5f\x69\164\145\x6d\47\xa\11\x9\x9\x41\x4e\104\40\157\151\x6d\x2e\155\145\x74\141\137\x6b\145\x79\40\75\40\x27\x5f\x70\x72\x6f\144\x75\143\x74\137\151\144\x27\xa\11\x9\x9\101\x4e\x44\x20\x6f\x69\x6d\x2e\155\145\x74\141\137\x76\141\x6c\x75\x65\40\75\x20\47{$product}\47\12\11\11\11\x41\116\x44\x20\x70\x6d\56\x6d\145\164\x61\x5f\153\145\x79\40\x3d\x20\47\x5f\x63\x75\x73\164\x6f\155\145\162\x5f\x75\163\x65\162\47\12\x9\x9\11\101\116\104\40\x70\155\56\155\145\164\141\137\x76\141\154\x75\145\x20\75\40\x27{$scwmkmciyywokcug}\47\12\40\x20\40\40\11");
        goto gygmukceqmuewaim;
        gaoeaaeausmqguee:
        $product = self::omwkqcuwceweymcc($product);
        goto qqeycioeqswikseq;
        wqeaomqyumqiocka:
        global $wpdb;
        goto quookucgqymiqocy;
        gygmukceqmuewaim:
    }
    
    public static function giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee = null, $yuwymayicwwqiske = "\167\157\157\x63\157\x6d\x6d\x65\x72\143\x65\x5f")
    {
        goto ugkkcqkwssgykcyo;
        muaaeioooicwskgu:
        sokekecgsmeyesqq:
        goto ecqswsccqomawuoy;
        ecqswsccqomawuoy:
        return DecoratorOption::get($uusmaiomayssaecw, $ggauoeuaesiymgee);
        goto iwwayiuyaecikeku;
        ugkkcqkwssgykcyo:
        if (!$yuwymayicwwqiske) {
            goto sokekecgsmeyesqq;
        }
        goto coqswqysimeumkei;
        coqswqysimeumkei:
        $uusmaiomayssaecw = $yuwymayicwwqiske . $uusmaiomayssaecw;
        goto muaaeioooicwskgu;
        iwwayiuyaecikeku:
    }
    
    public static function cswwmqwaucwuqcaq($product, $ymkomoccmymcoiea) : array
    {
        goto eymiaowquwyiggie;
        kgkameuwwcmaawwg:
        if ($ymkomoccmymcoiea->is_taxonomy()) {
            goto qiqmamemmguaieiw;
        }
        goto ssooqmscuqwmcoeu;
        iwqasgooqqmcyqmy:
        oomiawgcsyaaqaao:
        goto keuikgoukmwokcoa;
        ssooqmscuqwmcoeu:
        $qqswgiawgeaeoecu = $ymkomoccmymcoiea->get_options();
        goto kamkksumiggskuay;
        kamkksumiggskuay:
        foreach ($qqswgiawgeaeoecu as &$eqgoocgaqwqcimie) {
            $eqgoocgaqwqcimie = make_clickable(esc_html($eqgoocgaqwqcimie));
            wokmesqciaaskwoe:
        }
        goto iwqasgooqqmcyqmy;
        ykcmokmsimckuego:
        owauaaeeaeoqgiii:
        goto aeoicygsgoeeqguk;
        yqccqmsucoukqkmw:
        qiqmamemmguaieiw:
        goto qwykccyeiymiomyi;
        aeoicygsgoeeqguk:
        $mmykcgusskuuuace = ["\166\x61\x6c\x75\145" => DecoratorHook::sscegwueamckwmcy("\x77\157\x6f\143\157\155\155\145\162\x63\x65\137\141\x74\x74\x72\x69\142\x75\164\145", wptexturize(implode("\x2c\x20", $qqswgiawgeaeoecu)), $ymkomoccmymcoiea, $qqswgiawgeaeoecu), "\x6c\141\142\x65\154" => DecoratorWoocommerce::qysciqmmoqsaqmqk($ymkomoccmymcoiea->get_name(), $product)];
        goto aqqgkiieakuwceea;
        kgecwaiwqeacyqge:
        foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
            goto wwuwumqemissswei;
            gsqmakgaqakuawue:
            wmkkqgiamggikgsi:
            goto ggoceeqkiqmqkiwg;
            ccmgkkiyameumyoi:
            goto wqcseagmwswqeqgu;
            goto gsqmakgaqakuawue;
            eoikakegoqcywcui:
            $qqswgiawgeaeoecu[] = $ymqmyyeuycgmigyo;
            goto ccmgkkiyameumyoi;
            qwsgukcwoomuuais:
            if ($kesssewsiegssiya->attribute_public) {
                goto wmkkqgiamggikgsi;
            }
            goto eoikakegoqcywcui;
            qqoaguokgcoeieyi:
            wqcseagmwswqeqgu:
            goto skoaowmysckmmocc;
            skoaowmysckmmocc:
            eeuosekauyeiqoie:
            goto ecuosiaqyaoqckao;
            wwuwumqemissswei:
            $ymqmyyeuycgmigyo = esc_html($iwewcwusemqaiggk->name);
            goto qwsgukcwoomuuais;
            ggoceeqkiqmqkiwg:
            $qqswgiawgeaeoecu[] = ManipulateHTML::uuccukgasskgimsq("\141", ["\x68\162\145\x66" => ManipulateTerm::qmgcisuuikgmqcsu(ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk), $ymkomoccmymcoiea->get_name()), "\x72\x65\x6c" => "\164\x61\x67"], $ymqmyyeuycgmigyo);
            goto qqoaguokgcoeieyi;
            ecuosiaqyaoqckao:
        }
        goto wsasggmqwyisgoiq;
        qwykccyeiymiomyi:
        $kesssewsiegssiya = $ymkomoccmymcoiea->get_taxonomy_object();
        goto asmkyaumussymycs;
        wsasggmqwyisgoiq:
        cmicuicekiiowekc:
        goto ykcmokmsimckuego;
        eymiaowquwyiggie:
        $qqswgiawgeaeoecu = [];
        goto kgkameuwwcmaawwg;
        keuikgoukmwokcoa:
        goto owauaaeeaeoqgiii;
        goto yqccqmsucoukqkmw;
        aqqgkiieakuwceea:
        return (array) DecoratorHook::sscegwueamckwmcy("\167\x6f\x6f\x63\x6f\155\155\145\162\x63\145\x5f\141\x74\164\162\151\142\x75\x74\145\x5f\x6f\165\x74\160\165\164", $mmykcgusskuuuace, $ymkomoccmymcoiea, $product);
        goto okseeygkgkqkwsgw;
        asmkyaumussymycs:
        $uyuaosigqymaqsaa = self::mywkcmciykgikmyc($product, $ymkomoccmymcoiea->get_name(), ["\146\151\x65\x6c\144\163" => "\141\154\x6c"]);
        goto kgecwaiwqeacyqge;
        okseeygkgkqkwsgw:
    }
    
    public static function cmussoegoauyyguw($aiamqeawckcsuaou, $ymqmyyeuycgmigyo = '', $eqgoocgaqwqcimie = '', $kekikiwsckuiyuyo = false)
    {
        goto imwkaaqausgqquoo;
        wcuguimgckkocagq:
        osiwmoqisiiogawm:
        goto iiskacegeekeseky;
        oekkmwkqkuqwckui:
        if (!$kekikiwsckuiyuyo) {
            goto vosacywygmcokgkw;
        }
        goto wqiyuoiwqekmsues;
        ogyguukmcmoqkqei:
        goto qmusucqwswsqsgwc;
        goto wcuguimgckkocagq;
        wqiyuoiwqekmsues:
        unset($woocommerce->session->{$ymqmyyeuycgmigyo});
        goto eawmqueomoausgog;
        amocqywwugaccike:
        goto cyycimgiyeqgssuy;
        goto cckmsweoqwaucgcs;
        youqqmmoywqeggeg:
        $woocommerce->session->{$aiamqeawckcsuaou}($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie);
        goto qeycwoqakqucwscm;
        amuoiqyswiesyyck:
        $eqgoocgaqwqcimie = $cmussoegoauyyguw->{$aiamqeawckcsuaou}($ymqmyyeuycgmigyo);
        goto ioimwcssyaqsuqma;
        oyaeggoyqusqqcyo:
        qmusucqwswsqsgwc:
        goto wgkecsowgumikqqm;
        cumieyuwywwwsaqg:
        $eqgoocgaqwqcimie = $cmussoegoauyyguw->{$ymqmyyeuycgmigyo};
        goto esgwyeyackaweskk;
        imwkaaqausgqquoo:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto acsmysaakckkkkie;
        iiskacegeekeseky:
        if (method_exists($cmussoegoauyyguw, $aiamqeawckcsuaou)) {
            goto ciamwmmiqcseaeuc;
        }
        goto ukoqsuaqouuqkuig;
        qwamueuasumwowym:
        wewkyisikaywwcmu:
        goto amuoiqyswiesyyck;
        yimasagkemgkoeqq:
        if (!($aiamqeawckcsuaou == "\147\x65\x74")) {
            goto cwqmuqiqouooguqm;
        }
        goto caoqqqweswimckec;
        caoqqqweswimckec:
        if (method_exists($cmussoegoauyyguw, $aiamqeawckcsuaou)) {
            goto wewkyisikaywwcmu;
        }
        goto cumieyuwywwwsaqg;
        ykqswiqaqaogkksc:
        cwqmuqiqouooguqm:
        goto ogyguukmcmoqkqei;
        ioimwcssyaqsuqma:
        gykoquuuowomucyq:
        goto oekkmwkqkuqwckui;
        ukoqsuaqouuqkuig:
        $woocommerce->session->{$ymqmyyeuycgmigyo} = $eqgoocgaqwqcimie;
        goto amocqywwugaccike;
        qeycwoqakqucwscm:
        cyycimgiyeqgssuy:
        goto oyaeggoyqusqqcyo;
        esgwyeyackaweskk:
        goto gykoquuuowomucyq;
        goto qwamueuasumwowym;
        acsmysaakckkkkie:
        $cmussoegoauyyguw = $woocommerce->session;
        goto womskaaiqugkuggi;
        eawmqueomoausgog:
        vosacywygmcokgkw:
        goto ykqswiqaqaogkksc;
        cckmsweoqwaucgcs:
        ciamwmmiqcseaeuc:
        goto youqqmmoywqeggeg;
        wgkecsowgumikqqm:
        return $eqgoocgaqwqcimie;
        goto gusamkkgwqmamcke;
        womskaaiqugkuggi:
        if ($aiamqeawckcsuaou == "\x73\145\164") {
            goto osiwmoqisiiogawm;
        }
        goto yimasagkemgkoeqq;
        gusamkkgwqmamcke:
    }
    
    public static function ceusksoaisoswmia($umwqusowiqmyseom = null) : array
    {
        goto qcysusmwyoeoguki;
        qmwkauswsyowckua:
        ngaquoioqeukmoyu:
        goto siequuwyyyusqeie;
        siequuwyyyusqeie:
        return $oammesyieqmwuwyi;
        goto goamosigosumsmkq;
        dwaiimguqaaikoso:
        $oammesyieqmwuwyi = $umwqusowiqmyseom->get_items();
        goto uqiisswyoggsckqg;
        qcysusmwyoeoguki:
        $oammesyieqmwuwyi = self::uakuwyoiooeqqiow();
        goto mawoaecogwegmcoc;
        mawoaecogwegmcoc:
        if (!(!$oammesyieqmwuwyi && $umwqusowiqmyseom)) {
            goto ngaquoioqeukmoyu;
        }
        goto isqyiumsggacqmak;
        eicuumeiweosiaqy:
        if (!$umwqusowiqmyseom) {
            goto kuoqweoiooqosmoe;
        }
        goto dwaiimguqaaikoso;
        isqyiumsggacqmak:
        $umwqusowiqmyseom = self::mmmcswscsiecscwg($umwqusowiqmyseom);
        goto eicuumeiweosiaqy;
        uqiisswyoggsckqg:
        kuoqweoiooqosmoe:
        goto qmwkauswsyowckua;
        goamosigosumsmkq:
    }
    
    public static function uwyscmkeyeuqyukk($ywmkwiwkosakssii = []) : string
    {
        goto kakyqyqyweuaoqmg;
        igauaamasosqcyys:
        if (!ManipulateArray::get($ywmkwiwkosakssii, self::VALUE, false)) {
            goto wuwaakyeqqeeogyy;
        }
        goto ecowowaocsooqkyo;
        yuiimkuacqcecwgw:
        wuwaakyeqqeeogyy:
        goto uwwqiicwuwkwqcmg;
        kakyqyqyweuaoqmg:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x74\151\x70" => '', self::NAME => '', self::LABEL => '', self::VALUE => '']);
        goto ecgwcgmuemqagggm;
        ecgwcgmuemqagggm:
        $wwgucssaecqekuek = ["\143\x6c\x61\x73\163" => "\143\x68\145\143\x6b\x62\x6f\x78", self::TYPE => "\x63\150\x65\143\x6b\x62\x6f\x78", self::NAME => ManipulateArray::get($ywmkwiwkosakssii, self::NAME)];
        goto igauaamasosqcyys;
        ecowowaocsooqkyo:
        $wwgucssaecqekuek["\143\x68\x65\x63\x6b\x65\x64"] = true;
        goto yuiimkuacqcecwgw;
        uwwqiicwuwkwqcmg:
        return ManipulateHTML::uuccukgasskgimsq("\x6c\141\142\145\x6c", ["\143\x6c\141\163\163" => "\x74\151\x70\x73", "\x64\141\x74\141\x2d\x74\151\160" => ManipulateArray::get($ywmkwiwkosakssii, "\x74\151\160")], [ManipulateArray::get($ywmkwiwkosakssii, self::LABEL), ManipulateHTML::qgsekwygcgawekeq("\x69\x6e\x70\x75\x74", $wwgucssaecqekuek)]);
        goto ikmeskqmmqqyigmw;
        ikmeskqmmqqyigmw:
    }
}
