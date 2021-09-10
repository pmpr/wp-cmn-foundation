<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
            eiqiqqoyqcaiiwqo:
            ayccewcmckaqowek:
            goto amescycuaoumygqc;
            cemsuwwwgiqiyigo:
            $sogksuscggsicmac[$ymqmyyeuycgmigyo] = ["\171\155\x6b\157\x6d\x6f\143\143\x6d\171\155\143\x6f\151\x65\x61" => $kesssewsiegssiya, "\151\167\145\x77\143\167\165\x73\x65\155\161\x61\x69\x67\147\x6b" => []];
            goto owymcaeysicqacya;
            owymcaeysicqacya:
            aaoywwqcimiwiywu:
            goto eiqiqqoyqcaiiwqo;
            uimyekysswywuoyi:
            if (!$kesssewsiegssiya) {
                goto aaoywwqcimiwiywu;
            }
            goto cemsuwwwgiqiyigo;
            oeguggskkegamuoo:
            $kesssewsiegssiya = ManipulateArray::get($seyqqsmuaiegkeeq, ManipulateString::wiecmkiugmyyqiqc("\x70\141\137", '', $ymqmyyeuycgmigyo));
            goto uimyekysswywuoyi;
            amescycuaoumygqc:
        }
        goto agiieggoecqiaoum;
        agiieggoecqiaoum:
        kmayiocekggkoyso:
        goto ksgumesawyqswaoa;
        ksgumesawyqswaoa:
        return $sogksuscggsicmac;
        goto ieycaaisagswkaiy;
        ieycaaisagswkaiy:
    }
    
    public static function kyycwccmaemgokwu($smwiiesyqsgyisos) : string
    {
        goto ueekmmegamoyagog;
        mgscesskeauowgsu:
        
        return $smwiiesyqsgyisos->get_code();
        goto kyowegyokkesuugi;
        ueekmmegamoyagog:
        if ($smwiiesyqsgyisos instanceof WC_Coupon) {
            goto emyeissowqweyqec;
        }
        goto qeayouqugioyieei;
        gogyuwukcgmycsqw:
        emyeissowqweyqec:
        goto mgscesskeauowgsu;
        qeayouqugioyieei:
        $smwiiesyqsgyisos = new WC_Coupon($smwiiesyqsgyisos);
        goto gogyuwukcgmycsqw;
        kyowegyokkesuugi:
    }
    
    public static function oeeuywgiaywkimek($smwiiesyqsgyisos)
    {
        goto uowaoiwemyccakim;
        uowaoiwemyccakim:
        $smwiiesyqsgyisos = new WC_Coupon($smwiiesyqsgyisos);
        goto gukkaswwecmuoayo;
        gukkaswwecmuoayo:
        if (self::kyycwccmaemgokwu($smwiiesyqsgyisos)) {
            goto qyyiiuuscqgeowya;
        }
        goto sccoieksocaiaogm;
        iaqiocmqqiaeuwyg:
        return $smwiiesyqsgyisos;
        goto yasegwakoscmkouu;
        gskmiyeoisqoqkci:
        qyyiiuuscqgeowya:
        goto iaqiocmqqiaeuwyg;
        sccoieksocaiaogm:
        $smwiiesyqsgyisos = false;
        goto gskmiyeoisqoqkci;
        yasegwakoscmkouu:
    }
    
    public static function cuwomiomuqqkayoo($ioakeqoosmkukeaa)
    {
        goto gkuyqiyuaquuyaay;
        eogaamwmasgugqgy:
        osamqwsmcawigggw:
        goto weyoiomaeciyggug;
        masgkciqasaucoss:
        
        $wwcysoksoogyacog->add_discount($ioakeqoosmkukeaa);
        goto eogaamwmasgugqgy;
        aqyqqgkiycokskwq:
        if (!$wwcysoksoogyacog) {
            goto osamqwsmcawigggw;
        }
        goto masgkciqasaucoss;
        gkuyqiyuaquuyaay:
        $wwcysoksoogyacog = ManipulateWoocommerce::uceecgsoicggikeu();
        goto aqyqqgkiycokskwq;
        weyoiomaeciyggug:
    }
    
    public static function mmmcswscsiecscwg($umwqusowiqmyseom)
    {
        goto eaqsewgiawoasqgu;
        kaaasaqewwykmikk:
        $umwqusowiqmyseom = DecoratorWoocommerce::mmmcswscsiecscwg($umwqusowiqmyseom);
        goto cmawmeioiuegssuw;
        umeemqiuewswymkw:
        return $umwqusowiqmyseom;
        goto qweqcmkkiqkkukis;
        eaqsewgiawoasqgu:
        if (is_a($umwqusowiqmyseom, "\127\103\x5f\117\162\144\145\x72")) {
            goto oockcigwicccqyko;
        }
        goto kaaasaqewwykmikk;
        cmawmeioiuegssuw:
        oockcigwicccqyko:
        goto umeemqiuewswymkw;
        qweqcmkkiqkkukis:
    }
    
    public static function wcqicmcuiewessgy($umwqusowiqmyseom) : string
    {
        goto ugiuoawueimimiwk;
        iwekcauymcaoooie:
        return $iueymcwwscwqkiyq;
        goto mmksuuciiyoyaaoa;
        ukcyuqaycogiiiye:
        if (!$umwqusowiqmyseom) {
            goto qgkmsokwcmmawiey;
        }
        goto oiseukwsseayeamo;
        ugiuoawueimimiwk:
        $umwqusowiqmyseom = self::mmmcswscsiecscwg($umwqusowiqmyseom);
        goto aouoeqamkuemyeqa;
        aouoeqamkuemyeqa:
        $iueymcwwscwqkiyq = '';
        goto ukcyuqaycogiiiye;
        oiseukwsseayeamo:
        $iueymcwwscwqkiyq = DecoratorWoocommerce::ueqkgikommgyqmoa($umwqusowiqmyseom->get_status());
        goto awcwocukswgsaymk;
        awcwocukswgsaymk:
        qgkmsokwcmmawiey:
        goto iwekcauymcaoooie;
        mmksuuciiyoyaaoa:
    }
    
    public static function susisykioakswkmm($umwqusowiqmyseom) : string
    {
        goto qkkcekocsgakoqqo;
        ymmwikogcaccsgyo:
        quweyqomsoqcwmae:
        goto xoyesscyiuyyoaao;
        gyqecessamsiywea:
        if ($umwqusowiqmyseom->get_billing_company()) {
            goto kcyccscigsuuiomi;
        }
        goto cywckaugcygcssie;
        mukmccquscqkeeuy:
        $qsegigkmaaskiaeo = ucwords($mkucggyaiaukqoce->display_name);
        goto icuauuecukomyoss;
        ueioekeyeekmugss:
        $qsegigkmaaskiaeo = trim($umwqusowiqmyseom->get_billing_company());
        goto smwwcycswiyuqouu;
        smwwcycswiyuqouu:
        nacqwwcyskisiqmi:
        goto isgekmewmqgmwiky;
        cookqcosymocwyqg:
        goto nacqwwcyskisiqmi;
        goto kaacgcseugewuceu;
        xoyesscyiuyyoaao:
        saeeegogmqsyimqk:
        goto kkeeggmwkmuwswca;
        yaqamykgsuagaksc:
        aowgayqaooygayky:
        goto gkecqaygqygkkgwc;
        kaacgcseugewuceu:
        kcyccscigsuuiomi:
        goto ueioekeyeekmugss;
        aeusyyagoyskceiy:
        if (!$umwqusowiqmyseom) {
            goto saeeegogmqsyimqk;
        }
        goto ioeaawqkkakemsum;
        cywckaugcygcssie:
        if (!$umwqusowiqmyseom->get_customer_id()) {
            goto seiyywsmwamccscw;
        }
        goto ascyoecaiyskamoo;
        ascyoecaiyskamoo:
        $mkucggyaiaukqoce = ManipulateUser::get($umwqusowiqmyseom->get_customer_id(), true);
        goto wsemcaiucsysuqiq;
        isgekmewmqgmwiky:
        goto quweyqomsoqcwmae;
        goto yaqamykgsuagaksc;
        egkiyyuywuiekisw:
        seiyywsmwamccscw:
        goto cookqcosymocwyqg;
        ioeaawqkkakemsum:
        if ($umwqusowiqmyseom->get_billing_first_name() || $umwqusowiqmyseom->get_billing_last_name()) {
            goto aowgayqaooygayky;
        }
        goto gyqecessamsiywea;
        wsemcaiucsysuqiq:
        if (!$mkucggyaiaukqoce) {
            goto oowymeqscqicmiac;
        }
        goto mukmccquscqkeeuy;
        koyyawuukocokcme:
        $umwqusowiqmyseom = self::mmmcswscsiecscwg($umwqusowiqmyseom);
        goto aeusyyagoyskceiy;
        kkeeggmwkmuwswca:
        return $qsegigkmaaskiaeo;
        goto sgsmiecuouaseyeu;
        icuauuecukomyoss:
        oowymeqscqicmiac:
        goto egkiyyuywuiekisw;
        qkkcekocsgakoqqo:
        $qsegigkmaaskiaeo = '';
        goto koyyawuukocokcme;
        gkecqaygqygkkgwc:
        $qsegigkmaaskiaeo = trim(sprintf("\45\163\40\45\x73", $umwqusowiqmyseom->get_billing_first_name(), $umwqusowiqmyseom->get_billing_last_name()));
        goto ymmwikogcaccsgyo;
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
        cegciyyeemaaawuo:
        $wwcysoksoogyacog->empty_cart();
        goto ocmsggeccyugikwu;
        qqmsywmwmygigewc:
        if (!$wwcysoksoogyacog) {
            goto muwyoumcckugweeg;
        }
        goto cegciyyeemaaawuo;
        ocmsggeccyugikwu:
        muwyoumcckugweeg:
        goto ysmyakmkagcqqswo;
        uyscswaymikycueg:
        uuwiiwywmwyoymgi:
        goto qiaowqciwwyiucae;
        cmssgciwquymiacc:
        wc_empty_cart();
        goto uyscswaymikycueg;
        ysmyakmkagcqqswo:
        goto uuwiiwywmwyoymgi;
        goto makosoyccwoyooyu;
        makosoyccwoyooyu:
        agimkskeiiemakqe:
        goto cmssgciwquymiacc;
        oqiowcuqsqwyukgi:
        if (function_exists("\x77\x63\137\x65\155\x70\164\x79\x5f\143\x61\162\x74")) {
            goto agimkskeiiemakqe;
        }
        goto kmeesswcuaququqw;
        kmeesswcuaququqw:
        $wwcysoksoogyacog = self::uceecgsoicggikeu();
        goto qqmsywmwmygigewc;
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
        iamqccceoygiywgo:
        $wwcysoksoogyacog = self::uceecgsoicggikeu();
        goto qgoicagqowggweeq;
        wgeuaaggcwocgomy:
        $ygwoqcwsaggqoamw = $wwcysoksoogyacog->get_cart_contents();
        goto cgyaokocoymsqakq;
        qiycageymgowgicg:
        return $ygwoqcwsaggqoamw;
        goto yususwsyymskuwge;
        qgoicagqowggweeq:
        $ygwoqcwsaggqoamw = [];
        goto wukmywyisgqyiwku;
        cgyaokocoymsqakq:
        aaqoyoyiagqcguse:
        goto qiycageymgowgicg;
        yususwsyymskuwge:
    }
    
    public static function geoemsmuouqcqmei() : ?string
    {
        goto aocsmigsemowswge;
        aocsmigsemowswge:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto iikgymkaqikicssa;
        iikgymkaqikicssa:
        if (function_exists("\x77\143\x5f\x67\145\x74\137\x63\x61\162\x74\x5f\x75\162\x6c")) {
            goto koiweeaoqaqgeiow;
        }
        goto gokisgaagiawmqmg;
        uaycgmwwmeqsqoss:
        return wc_get_cart_url();
        goto mackmiksusgquqku;
        mackmiksusgquqku:
        ieukeyosucwcigcq:
        goto kkcskacouykscykm;
        gkoyauwycuyumiey:
        goto ieukeyosucwcigcq;
        goto uguaomoemkcuqksw;
        gokisgaagiawmqmg:
        return $woocommerce->cart->get_cart_url();
        goto gkoyauwycuyumiey;
        uguaomoemkcuqksw:
        koiweeaoqaqgeiow:
        goto uaycgmwwmeqsqoss;
        kkcskacouykscykm:
    }
    
    public static function ayseokmqycoqaigc() : bool
    {
        return class_exists("\167\157\x6f\x63\x6f\155\x6d\x65\x72\x63\x65") && ManipulatePlugin::ggocakcisguuokai("\x77\157\157\x63\x6f\x6d\155\x65\x72\x63\x65\57\x77\x6f\x6f\x63\157\x6d\155\145\162\143\145\56\x70\x68\160");
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
        eicoyaciiwoweyow:
        return $aokagokqyuysuksm;
        goto ccykaqwcuqguuesk;
        gcaeuwucgqwocegi:
        if (!is_a($umwqusowiqmyseom, "\127\103\x5f\117\x72\144\145\x72")) {
            goto sugiiygakykaogou;
        }
        goto yumugwyseyuawuae;
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
        ygogeqikkaiewqak:
        $product = DecoratorWoocommerce::aqasygcsqysmmyke($product);
        goto qgwksesamqckoysm;
        kgyiaoswiyukcguu:
        if (is_a($product, "\127\103\137\x50\162\x6f\144\165\x63\x74")) {
            goto aoywumwiwsuugsae;
        }
        goto ygogeqikkaiewqak;
        iyqwcuwcoqsqiqey:
        return $product;
        goto uykoiemomggyyaqm;
        qgwksesamqckoysm:
        aoywumwiwsuugsae:
        goto iyqwcuwcoqsqiqey;
        uykoiemomggyyaqm:
    }
    
    public static function mkiigkeqaeiwqyua() : bool
    {
        return in_array(DecoratorWoocommerce::useawgqusasoukqm(), ["\x49\x52\124", "\x49\122\122"]);
    }
    
    public static function eywqaumgkccycyau($aokagokqyuysuksm, $ywmkwiwkosakssii = [])
    {
        goto sqcucoqwgcookais;
        igoiiguaiiyskqye:
        $wkyuegumgeqqqmyg = [];
        goto osqscmomgeumekym;
        sqcucoqwgcookais:
        $ywmkwiwkosakssii[self::ID] = $aokagokqyuysuksm;
        goto igoiiguaiiyskqye;
        osqscmomgeumekym:
        foreach ($wkyuegumgeqqqmyg as $aiowsaccomcoikus) {
            goto wwoyegucuaugosys;
            kcyyceweysgmscgm:
            $ywmkwiwkosakssii[$aiowsaccomcoikus] = DecoratorSanitize::aoeoykwemwaqsikc($ywmkwiwkosakssii[$aiowsaccomcoikus]);
            goto ouekywuyisaayusa;
            ouekywuyisaayusa:
            caeissowkcqcoisu:
            goto maeoaamgcykqqcac;
            wwoyegucuaugosys:
            if (!isset($ywmkwiwkosakssii[$aiowsaccomcoikus])) {
                goto caeissowkcqcoisu;
            }
            goto kcyyceweysgmscgm;
            maeoaamgcykqqcac:
            omygqyyicqyuswqs:
            goto eqmiagqymgsqikio;
            eqmiagqymgsqikio:
        }
        goto isqoqyuosaeauika;
        cqkmekqeuoamwwik:
        DecoratorWoocommerce::eywqaumgkccycyau($ywmkwiwkosakssii);
        goto gkqeioiiywequymm;
        isqoqyuosaeauika:
        yqusmmkkqyqusoug:
        goto cqkmekqeuoamwwik;
        gkqeioiiywequymm:
    }
    
    public static function oseiymowmquqkaca() : bool
    {
        global $woocommerce_loop;
        return DecoratorWoocommerce::kmymkocwcawgeccm() && isset($woocommerce_loop["\156\141\x6d\x65"]) && in_array($woocommerce_loop["\156\x61\155\145"], ["\162\x65\154\141\x74\145\144", "\x75\160\x20\x2d\x20\x73\145\154\x6c\x73"]);
    }
    
    public static function kyckwuuiqwmyoqma() : ?\WC_Query
    {
        goto eqskaoiwkcikoock;
        aesqskyuooksouwa:
        return $gqgemcmoicmgaqie;
        goto mkuoeggssimkqoee;
        wwowwogiasqyegco:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto cowcyoscwiogwoss;
        eqskaoiwkcikoock:
        $gqgemcmoicmgaqie = null;
        goto wwowwogiasqyegco;
        iammguyywsgygewo:
        $gqgemcmoicmgaqie = $woocommerce->query;
        goto ekwgywkksceymecu;
        cowcyoscwiogwoss:
        if (!$woocommerce) {
            goto aswqcceuwmmqciec;
        }
        goto iammguyywsgygewo;
        ekwgywkksceymecu:
        aswqcceuwmmqciec:
        goto aesqskyuooksouwa;
        mkuoeggssimkqoee:
    }
    
    public static function kkewuuisyiscmgyc() : WooCommerce
    {
        goto umeuqqawicigwmmw;
        wocmuysuywyaeyia:
        ockwkskmgeqemqwm:
        goto iiwkgiyuiuskiusa;
        eqesiosukaowuquq:
        eqaqiuescmyiwsoq:
        goto swyaqueaoyekgomq;
        swyaqueaoyekgomq:
        return $mksyucucyswaukig;
        goto owgiiuqeeesguqsq;
        ywmkeguguoigeago:
        global $woocommerce;
        goto qoieockmumciwweq;
        umeuqqawicigwmmw:
        if (function_exists("\x57\103")) {
            goto ockwkskmgeqemqwm;
        }
        goto ywmkeguguoigeago;
        qoieockmumciwweq:
        $mksyucucyswaukig = $woocommerce;
        goto qmccgkcskscsakcu;
        qmccgkcskscsakcu:
        goto eqaqiuescmyiwsoq;
        goto wocmuysuywyaeyia;
        iiwkgiyuiuskiusa:
        $mksyucucyswaukig = WC();
        goto eqesiosukaowuquq;
        owgiiuqeeesguqsq:
    }
    
    public static function scgumisucgwskyqk($product, $mgkceomocowocqyo = "\166\151\x65\167") : string
    {
        goto gmqceeyooqckwwms;
        gowguesicegmegqw:
        yqmkgcicoecyuiku:
        goto owgocmqmgsgeayue;
        qqsyqgokqqsqoooe:
        if (!$product) {
            goto ycaqamikucimygma;
        }
        goto amqmckimqwauwkug;
        ikckcqggoqoimoio:
        $product = self::aqasygcsqysmmyke($product);
        goto qqsyqgokqqsqoooe;
        mqysyiqsowkciiiq:
        ycaqamikucimygma:
        goto comswgimqmwcyyas;
        iuawscaywkoegium:
        $eyuymeqcioasuyyi = $product->regular_price;
        goto emsoowiaoaoayqyy;
        gmqceeyooqckwwms:
        $aumscagymwyyicag = '';
        goto ikckcqggoqoimoio;
        emsoowiaoaoayqyy:
        goto ueoykiauoyuauwsi;
        goto gowguesicegmegqw;
        ueiooqcaegkyumkk:
        $aumscagymwyyicag = DecoratorHook::sscegwueamckwmcy("\x77\x6f\157\143\x6f\155\155\145\x72\x63\145\137\x70\x72\157\x64\x75\x63\164\137\x72\145\147\x75\154\x61\x72\x5f\x70\162\151\143\x65", $eyuymeqcioasuyyi, $product);
        goto mqysyiqsowkciiiq;
        comswgimqmwcyyas:
        return $aumscagymwyyicag;
        goto sigcqyomcgiyamkq;
        usuiacsqegaeywgs:
        ueoykiauoyuauwsi:
        goto ueiooqcaegkyumkk;
        amqmckimqwauwkug:
        if (method_exists($product, "\x67\145\x74\x5f\163\x61\154\145\x5f\x70\x72\151\143\145")) {
            goto yqmkgcicoecyuiku;
        }
        goto iuawscaywkoegium;
        owgocmqmgsgeayue:
        $eyuymeqcioasuyyi = $product->get_regular_price($mgkceomocowocqyo);
        goto usuiacsqegaeywgs;
        sigcqyomcgiyamkq:
    }
    
    public static function asaycagaeksiumkw($product, $mgkceomocowocqyo = "\x76\x69\145\167") : string
    {
        goto cseuscicwscieqaa;
        cgiioksocuikciqu:
        $aumscagymwyyicag = DecoratorHook::sscegwueamckwmcy("\x77\157\x6f\143\157\x6d\155\x65\x72\x63\x65\x5f\x70\162\x6f\144\x75\x63\164\x5f\x73\x61\154\x65\x5f\160\x72\151\143\x65", $eyuymeqcioasuyyi, $product);
        goto kucuomkwkigoaaoi;
        aqimsokikskmeukc:
        return $aumscagymwyyicag;
        goto igmocmyuiauyaaky;
        gccusiaomowsyeqk:
        $product = self::aqasygcsqysmmyke($product);
        goto kwwqiuaycwkcigqq;
        kkskwicmigikmwuk:
        $eyuymeqcioasuyyi = $product->sale_price;
        goto makucowmowkkooyy;
        cseuscicwscieqaa:
        $aumscagymwyyicag = '';
        goto gccusiaomowsyeqk;
        kauocquekqgswwoe:
        $eyuymeqcioasuyyi = $product->get_sale_price($mgkceomocowocqyo);
        goto ewkmiiygeqessaue;
        kucuomkwkigoaaoi:
        wimquiyiyyakiyqo:
        goto aqimsokikskmeukc;
        makucowmowkkooyy:
        goto kgykiwcggygyekgc;
        goto csmqycguwyiekmwq;
        csmqycguwyiekmwq:
        eiimgesccmkgusys:
        goto kauocquekqgswwoe;
        ewkmiiygeqessaue:
        kgykiwcggygyekgc:
        goto cgiioksocuikciqu;
        cgsygucccwyayksw:
        if (method_exists($product, "\147\145\x74\x5f\163\x61\x6c\x65\x5f\160\162\151\x63\x65")) {
            goto eiimgesccmkgusys;
        }
        goto kkskwicmigikmwuk;
        kwwqiuaycwkcigqq:
        if (!$product) {
            goto wimquiyiyyakiyqo;
        }
        goto cgsygucccwyayksw;
        igmocmyuiauyaaky:
    }
    
    public static function aqwquwewocyewasw() : bool
    {
        goto siawmiiggusigmks;
        auyuoiygayksuuua:
        return $uwqkkwmiiumuukoa;
        goto ogkwaimcumgaueem;
        awgckickkikmwgoe:
        $uwqkkwmiiumuukoa = $woocommerce->is_rest_api_request();
        goto ikuecasooegqekwi;
        cekucgakuqaicscm:
        if (!($woocommerce && method_exists($woocommerce, "\151\x73\x5f\162\x65\163\164\137\x61\160\151\x5f\162\145\161\x75\145\x73\x74"))) {
            goto kqaqeisqomwwcasq;
        }
        goto awgckickkikmwgoe;
        siawmiiggusigmks:
        $uwqkkwmiiumuukoa = false;
        goto qyoyoscsokwicwcm;
        ikuecasooegqekwi:
        kqaqeisqomwwcasq:
        goto auyuoiygayksuuua;
        qyoyoscsokwicwcm:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto cekucgakuqaicscm;
        ogkwaimcumgaueem:
    }
    
    public static function uceecgsoicggikeu() : ?WC_Cart
    {
        goto ackemimmseeuauek;
        kmqcsyeeiyqwiusw:
        if (!$woocommerce) {
            goto eikgggsiaicqiqag;
        }
        goto gmymykusaimcgayu;
        gmymykusaimcgayu:
        $wwcysoksoogyacog = $woocommerce->cart;
        goto pewociqgeseqykos;
        ackemimmseeuauek:
        $wwcysoksoogyacog = null;
        goto ayikyecyysisuioq;
        pewociqgeseqykos:
        eikgggsiaicqiqag:
        goto moqccissukkoumwo;
        moqccissukkoumwo:
        return $wwcysoksoogyacog;
        goto eoyokykwkikgaaww;
        ayikyecyysisuioq:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto kmqcsyeeiyqwiusw;
        eoyokykwkikgaaww:
    }
    
    public static function aoqkwiysueqqwigk() : ?string
    {
        goto iqmqycmwemkkugmw;
        sagukwqksqiukyeq:
        return $woocommerce->cart->get_checkout_url();
        goto oassuwsweqqyooss;
        oassuwsweqqyooss:
        goto ucmwwiwcaqesyqaw;
        goto osucouyseikugqwm;
        kikgmuyaiiicugcg:
        return wc_get_checkout_url();
        goto qyyioseuoicymucm;
        qyyioseuoicymucm:
        ucmwwiwcaqesyqaw:
        goto gcueeowqwicyuuwm;
        iqmqycmwemkkugmw:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto mwcqoqsgsoiacuqu;
        mwcqoqsgsoiacuqu:
        if (function_exists("\x77\143\x5f\147\145\164\x5f\x63\150\145\x63\x6b\x6f\x75\x74\x5f\x75\162\x6c")) {
            goto ouesqgosuiesgwas;
        }
        goto sagukwqksqiukyeq;
        osucouyseikugqwm:
        ouesqgosuiesgwas:
        goto kikgmuyaiiicugcg;
        gcueeowqwicyuuwm:
    }
    
    public static function kccgkwigyyiugcco() : bool
    {
        return "\x79\x65\x73" === self::giiuwsmyumqwwiyq("\145\156\x61\x62\x6c\x65\x5f\x6d\x79\x61\143\143\x6f\165\156\x74\x5f\162\145\147\x69\163\x74\x72\x61\x74\x69\x6f\x6e");
    }
    
    public static function yaaucgakecuykawk() : bool
    {
        global $woocommerce_loop;
        return DecoratorWoocommerce::kmymkocwcawgeccm() && isset($woocommerce_loop["\156\141\155\145"]) && in_array($woocommerce_loop["\x6e\x61\x6d\x65"], ["\x75\160\40\55\x20\163\x65\154\x6c\163"]);
    }
    
    public static function ogkieiokqueakmyc() : bool
    {
        global $woocommerce_loop;
        return DecoratorWoocommerce::kmymkocwcawgeccm() && isset($woocommerce_loop["\x6e\x61\155\145"]) && in_array($woocommerce_loop["\x6e\x61\155\x65"], ["\162\145\154\141\164\145\144"]);
    }
    
    public static function omwkqcuwceweymcc($product = null)
    {
        goto saoicecaigamyumi;
        gcgguqeygkiuseei:
        return $aokagokqyuysuksm;
        goto kgkycyakimoowckw;
        wicgcmsymyamgkqo:
        $product = self::aqasygcsqysmmyke(ManipulatePost::mwikyscisascoeea());
        goto owwkeimwommeqeuk;
        saoicecaigamyumi:
        if ($product) {
            goto kiwiacqeekiyqqum;
        }
        goto wicgcmsymyamgkqo;
        ouyaoosmgkcycecy:
        $aokagokqyuysuksm = $product;
        goto agcecaceyeicacew;
        owwkeimwommeqeuk:
        kiwiacqeekiyqqum:
        goto ouyaoosmgkcycecy;
        ekiaooogkcaiqmku:
        uwkusimiysaesysu:
        goto gcgguqeygkiuseei;
        agcecaceyeicacew:
        if (!is_a($product, "\x57\x43\x5f\x50\x72\157\x64\x75\x63\x74")) {
            goto uwkusimiysaesysu;
        }
        goto qeyyusmwmygyssis;
        qeyyusmwmygyssis:
        $aokagokqyuysuksm = $product->get_id();
        goto ekiaooogkcaiqmku;
        kgkycyakimoowckw:
    }
    
    public static function ageqswwkkqywckco($ywmkwiwkosakssii = []) : array
    {
        goto moyeqcaaoumugqga;
        egqwmisqumyygeaw:
        eqmmisowcsogsmmi:
        goto eqswioyysgiegmkw;
        asmqyacukagmsmog:
        $oksqskmgoqiqciis = [];
        goto iiaqqsyysmuiuqgk;
        eqswioyysgiegmkw:
        acykkosiggykiqae:
        goto ecgigaamcwiqiukk;
        ecgigaamcwiqiukk:
        return $oksqskmgoqiqciis;
        goto wgieqooykcsmeemu;
        iiaqqsyysmuiuqgk:
        if (!is_array($oysoyeaucuawyaky)) {
            goto acykkosiggykiqae;
        }
        goto gguqqicieewmyqak;
        ekmowewoceagouse:
        $oysoyeaucuawyaky = ManipulatePost::ciugwooasaqcywas("\x70\x72\x6f\144\x75\x63\164", $ywmkwiwkosakssii);
        goto asmqyacukagmsmog;
        gguqqicieewmyqak:
        foreach ($oysoyeaucuawyaky as $aokagokqyuysuksm) {
            goto iuasisokiwkkgsig;
            uqioouaicscwyeei:
            yywwamymqqweegma:
            goto sygcsssigqkuemcu;
            kcwmuwimsuqeeika:
            $oksqskmgoqiqciis[$aokagokqyuysuksm] = $product;
            goto qouiaaqwcueugsyg;
            qouiaaqwcueugsyg:
            qmwgkkusoumsaymy:
            goto uqioouaicscwyeei;
            wygeoqscyoqegsim:
            if (!$product) {
                goto qmwgkkusoumsaymy;
            }
            goto kcwmuwimsuqeeika;
            iuasisokiwkkgsig:
            $product = self::aqasygcsqysmmyke($aokagokqyuysuksm);
            goto wygeoqscyoqegsim;
            sygcsssigqkuemcu:
        }
        goto egqwmisqumyygeaw;
        moyeqcaaoumugqga:
        $ywmkwiwkosakssii["\146\151\145\154\144\163"] = "\x69\144\163";
        goto ekmowewoceagouse;
        wgieqooykcsmeemu:
    }
    
    public static function weqwusgaqsmseiyq() : array
    {
        return ["\x69\155\141\x67\x65" => esc_html__("\x49\x6d\x61\147\145", PR__CMN__FOUNDATION), "\x70\162\x69\143\145" => esc_html__("\120\x72\151\x63\145", PR__CMN__FOUNDATION), "\x61\x64\144\x2d\164\157\x2d\x63\141\162\164" => esc_html__("\x41\x64\144\x20\x74\157\40\143\x61\162\x74", PR__CMN__FOUNDATION), "\x64\145\163\x63\162\151\160\x74\x69\157\x6e" => esc_html__("\x44\145\163\x63\x72\x69\160\x74\x69\157\156", PR__CMN__FOUNDATION), "\163\153\165" => esc_html__("\x53\153\165", PR__CMN__FOUNDATION), "\x73\164\x6f\x63\x6b" => esc_html__("\101\166\141\151\154\x61\x62\x69\154\x69\164\x79", PR__CMN__FOUNDATION), "\167\145\151\x67\150\164" => esc_html__("\x57\x65\x69\147\x68\164", PR__CMN__FOUNDATION), "\144\151\155\145\156\x73\151\x6f\x6e\x73" => esc_html__("\x44\151\155\x65\x6e\x73\151\157\x6e\x73", PR__CMN__FOUNDATION)];
    }
    
    public static function gmowuaggkmgkseyo() : bool
    {
        return DecoratorQuery::qmssqeyayicowkgy("\x70\162\x6f\144\x75\143\164\137\143\x61\x74");
    }
    
    public static function ecaegsuskkkigkgc() : ?WC_Checkout
    {
        goto qaowiwsuoecmmkkw;
        soqwcqmyqkqyqawm:
        if (!$woocommerce) {
            goto ywogweeguksciwcw;
        }
        goto yaaygymiwgcucuee;
        qkkcyimckwcmwoyg:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto soqwcqmyqkqyqawm;
        kuygeikysoqqqouy:
        ywogweeguksciwcw:
        goto gemiusgkmeaykywq;
        yaaygymiwgcucuee:
        $yogeuygiqackeiky = $woocommerce->yogeuygiqackeiky();
        goto kuygeikysoqqqouy;
        qaowiwsuoecmmkkw:
        $yogeuygiqackeiky = null;
        goto qkkcyimckwcmwoyg;
        gemiusgkmeaykywq:
        return $yogeuygiqackeiky;
        goto akgusigiuuowiemm;
        akgusigiuuowiemm:
    }
    
    public static function giyscymwkesykqsg($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie)
    {
        self::cmussoegoauyyguw("\163\x65\x74", $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie);
    }
    
    public static function qusqewgmqyucyooc($product, $ikgwqyuyckaewsow)
    {
        goto ikoqcwgayswaisqo;
        yciammygksiessww:
        $qqswgiawgeaeoecu = [];
        goto smucwoowmswcmqiq;
        ikoqcwgayswaisqo:
        $product = self::aqasygcsqysmmyke($product);
        goto kascgoogiymmugcy;
        qmkkgkcemceygaou:
        omogkekcmgcmgaks:
        goto mqmwceouegaaucoi;
        mmkuokwocceayask:
        
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus => $ymqmyyeuycgmigyo) {
            goto wuiwikwsqoyseayq;
            uukiykgkqyekggay:
            ueygyquuioiuckmw:
            goto qagmacuwmywoisyq;
            wuiwikwsqoyseayq:
            switch ($aiowsaccomcoikus) {
                case "\x74\x69\x74\154\x65":
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $product->get_title();
                    goto igsgeycmgyyiqyaw;
                case "\x70\162\x69\143\x65":
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $product->get_price_html();
                    goto igsgeycmgyyiqyaw;
                case "\151\155\x61\x67\145":
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = intval(ManipulatePost::wsiiswmaagmyiaiw($aokagokqyuysuksm));
                    goto igsgeycmgyyiqyaw;
                case "\x64\x65\x73\x63\162\x69\160\x74\x69\x6f\156":
                    goto ceyiiqgekmueswas;
                    csiumocowgwwkseu:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $ukwokcuqauuosmoo;
                    goto ceooqwocwgyaosca;
                    ceyiiqgekmueswas:
                    $ukwokcuqauuosmoo = DecoratorHook::sscegwueamckwmcy("\x77\x6f\x6f\x63\157\x6d\x6d\145\162\x63\x65\137\x73\x68\157\x72\x74\137\x64\x65\163\x63\162\x69\160\164\151\x6f\156", $product->get_short_description());
                    goto csiumocowgwwkseu;
                    ceooqwocwgyaosca:
                    goto igsgeycmgyyiqyaw;
                    goto eggeemqkkcgiwkgm;
                    eggeemqkkcgiwkgm:
                case "\163\x74\157\x63\x6b":
                    goto socyamqieqoiusuo;
                    momkymyyokcqmiwc:
                    skuaykemeskiciyq:
                    goto oiaqgumiwqckysqq;
                    socyamqieqoiusuo:
                    $imooqykauqyyswsw = $product->get_availability();
                    goto ggwecgmoiwsqaiem;
                    oiaqgumiwqckysqq:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $imooqykauqyyswsw["\141\x76\x61\151\x6c\141\142\151\x6c\x69\164\x79"];
                    goto yseqooouywimkcsi;
                    kmcmmgeegciwucsu:
                    $imooqykauqyyswsw["\141\x76\141\x69\x6c\x61\x62\x69\x6c\x69\164\171"] = __("\x49\x6e\40\163\164\157\143\x6b", PR__CMN__FOUNDATION);
                    goto momkymyyokcqmiwc;
                    ggwecgmoiwsqaiem:
                    if (!empty($imooqykauqyyswsw["\141\x76\x61\x69\x6c\x61\142\151\x6c\151\x74\171"])) {
                        goto skuaykemeskiciyq;
                    }
                    goto kmcmmgeegciwucsu;
                    yseqooouywimkcsi:
                    goto igsgeycmgyyiqyaw;
                    goto rgeqksseqwssoqeq;
                    rgeqksseqwssoqeq:
                case "\x73\153\165":
                    goto rmamqouaqyeogmmm;
                    ukoqocmokmwgkggo:
                    !$mmkkmgusieqaqkki && ($mmkkmgusieqaqkki = "\x2d");
                    goto scquwmwgssauikwq;
                    rmamqouaqyeogmmm:
                    $mmkkmgusieqaqkki = $product->get_sku();
                    goto ukoqocmokmwgkggo;
                    scquwmwgssauikwq:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $mmkkmgusieqaqkki;
                    goto imycougggwgmwque;
                    imycougggwgmwque:
                    goto igsgeycmgyyiqyaw;
                    goto igwwywsaqumsmakc;
                    igwwywsaqumsmakc:
                case "\167\145\x69\x67\150\x74":
                    goto ucasooakcusgmasq;
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
                    smwcciswieyocowa:
                    $mycwwoyokwokowmo = "\x2d";
                    goto eiiygsskgeocucse;
                    kwkaekkyamsuosic:
                    igigquuegyegmyas:
                    goto qmmiuscmmiciksuq;
                    wsksyesmkwcseqmi:
                    $mycwwoyokwokowmo = wc_format_localized_decimal($mycwwoyokwokowmo) . "\40" . esc_attr(DecoratorOption::get("\167\x6f\157\143\157\x6d\x6d\145\x72\143\x65\137\x77\x65\x69\x67\x68\164\x5f\x75\x6e\x69\x74"));
                    goto kwkaekkyamsuosic;
                    eiiygsskgeocucse:
                    goto igigquuegyegmyas;
                    goto scqikcmqmsuaccuk;
                    wysqeaawgmsgywwe:
                    goto igsgeycmgyyiqyaw;
                    goto msmyekocyqaeiqui;
                    msmyekocyqaeiqui:
                case "\144\151\x6d\x65\x6e\163\151\157\156\x73":
                    goto qyqeeqeasassiyqg;
                    ykgaewsgaccoewmy:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $qaiwqwwemmyyqosy;
                    goto goagoaikyyyaisgy;
                    qyqeeqeasassiyqg:
                    $qaiwqwwemmyyqosy = function_exists("\x77\143\137\146\x6f\x72\155\141\164\137\144\151\x6d\x65\x6e\x73\x69\x6f\x6e\163") ? wc_format_dimensions($product->get_dimensions(false)) : $product->get_dimensions();
                    goto qiwwswgwkcekequo;
                    goagoaikyyyaisgy:
                    goto igsgeycmgyyiqyaw;
                    goto qcwmwsussmygiowm;
                    qiwwswgwkcekequo:
                    !$qaiwqwwemmyyqosy && ($qaiwqwwemmyyqosy = "\55");
                    goto ykgaewsgaccoewmy;
                    qcwmwsussmygiowm:
                default:
                    goto smiosccsmkciiaei;
                    smiosccsmkciiaei:
                    if (DecoratorTaxonomy::myagqecycsaiyqsk($aiowsaccomcoikus)) {
                        goto mqaamgcyimqcgyyu;
                    }
                    goto ugsimmgccyugoqka;
                    rayoswqmyqiuiics:
                    $eqgoocgaqwqcimie = implode("\54\x20", $eqgoocgaqwqcimie);
                    goto umeiygeyqcouqcsk;
                    uuemseeewwgcoqqc:
                    if (empty($uyuaosigqymaqsaa)) {
                        goto kiqioykgyqakwmsc;
                    }
                    goto ocowsksosgwgogmy;
                    wskwqauamemaueue:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $eqgoocgaqwqcimie;
                    goto rmoogiakmggyosaw;
                    ywcksgacokiyuuks:
                    goto igsgeycmgyyiqyaw;
                    goto wemcucimscmkccee;
                    ymaeysgwkcwwiqmu:
                    igymmkeosawsmquy:
                    goto ywcksgacokiyuuks;
                    kukmwwkmmiwaqmai:
                    mqyceoiukuosysus:
                    goto wyomsacikcaawgow;
                    ggiyqoigmmgiamyo:
                    mqaamgcyimqcgyyu:
                    goto cocwkumuyaacwuie;
                    ugsimmgccyugoqka:
                    $eqgoocgaqwqcimie = $product->get_attribute($aiowsaccomcoikus);
                    goto gmgysasgwkiakiic;
                    gmgysasgwkiakiic:
                    if (!is_array($eqgoocgaqwqcimie)) {
                        goto ouqsaimcqcgaemws;
                    }
                    goto rayoswqmyqiuiics;
                    cocwkumuyaacwuie:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = [];
                    goto iaaaeesqwkogwook;
                    kciguwegyomuqawq:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = implode("\x2c\40", $qqswgiawgeaeoecu[$aiowsaccomcoikus]);
                    goto ymaeysgwkcwwiqmu;
                    wyomsacikcaawgow:
                    kiqioykgyqakwmsc:
                    goto kciguwegyomuqawq;
                    umeiygeyqcouqcsk:
                    ouqsaimcqcgaemws:
                    goto wskwqauamemaueue;
                    iaaaeesqwkogwook:
                    $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($aokagokqyuysuksm, $aiowsaccomcoikus);
                    goto uuemseeewwgcoqqc;
                    ocowsksosgwgogmy:
                    foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
                        goto yuyqiqgiykceuwyi;
                        yuyqiqgiykceuwyi:
                        $iwewcwusemqaiggk = DecoratorSanitize::iwewcwusemqaiggk($iwewcwusemqaiggk, $aiowsaccomcoikus);
                        goto uamgomuoiswgmyou;
                        uamgomuoiswgmyou:
                        $qqswgiawgeaeoecu[$aiowsaccomcoikus][] = ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk);
                        goto sacqwquywoyemsui;
                        sacqwquywoyemsui:
                        cuesuqwoogmkcwuu:
                        goto kisqeasymciqmcma;
                        kisqeasymciqmcma:
                    }
                    goto kukmwwkmmiwaqmai;
                    rmoogiakmggyosaw:
                    goto igymmkeosawsmquy;
                    goto ggiyqoigmmgiamyo;
                    wemcucimscmkccee:
            }
            goto giikseaiieuqkccg;
            giikseaiieuqkccg:
            gqeosgkaqwoooomg:
            goto cqcoykgagkcckiyi;
            cqcoykgagkcckiyi:
            igsgeycmgyyiqyaw:
            goto uukiykgkqyekggay;
            qagmacuwmywoisyq:
        }
        goto kuukuccioawuoiea;
        vwwckgewsegagiqm:
        $product->fields = $qqswgiawgeaeoecu;
        goto qmkkgkcemceygaou;
        msygsomkaywgokuq:
        if (!$qqswgiawgeaeoecu) {
            goto omogkekcmgcmgaks;
        }
        goto vwwckgewsegagiqm;
        mqmwceouegaaucoi:
        kqkckwwigeyywyik:
        goto wgiewcmyikiwsasu;
        smucwoowmswcmqiq:
        $aokagokqyuysuksm = $product->get_id();
        goto mmkuokwocceayask;
        kascgoogiymmugcy:
        if (!$product) {
            goto kqkckwwigeyywyik;
        }
        goto yciammygksiessww;
        kuukuccioawuoiea:
        gqgiygyaagieswyg:
        goto msygsomkaywgokuq;
        wgiewcmyikiwsasu:
        return $product;
        goto cqguwaockaiuioqo;
        cqguwaockaiuioqo:
    }
    
    public static function qysuguqkwiksywaq($product, $isweyuoisomqyaag) : array
    {
        goto iwwcyaoguoweqqmi;
        xsucwemqaekogyqi:
        if (!($isweyuoisomqyaag && $product instanceof WC_Product_Variable)) {
            goto ssmesescgegmqegs;
        }
        goto msiwaicoesyagumk;
        ksosaiwckkacoeww:
        return $uomewyckeuqoqocu;
        goto ksmgqwcssgmuykqm;
        iwwcyaoguoweqqmi:
        $uomewyckeuqoqocu = [];
        goto okyoymqacqaimooo;
        cmomkawiiikmcccq:
        ssmesescgegmqegs:
        goto ksosaiwckkacoeww;
        okyoymqacqaimooo:
        $product = self::aqasygcsqysmmyke($product);
        goto xsucwemqaekogyqi;
        msiwaicoesyagumk:
        $uomewyckeuqoqocu = $product->get_available_variation($isweyuoisomqyaag);
        goto cmomkawiiikmcccq;
        ksmgqwcssgmuykqm:
    }
    
    public static function mcgaskyiamgqmqgu($aumscagymwyyicag, $ywmkwiwkosakssii = []) : string
    {
        return DecoratorWoocommerce::aumscagymwyyicag($aumscagymwyyicag, $ywmkwiwkosakssii);
    }
    
    public static function wugwewwmekuaamos($ymqmyyeuycgmigyo, $kekikiwsckuiyuyo = false)
    {
        return self::cmussoegoauyyguw("\147\x65\x74", $ymqmyyeuycgmigyo, '', $kekikiwsckuiyuyo);
    }
    
    public static function ucauuyiegweuccsq($uusmaiomayssaecw, $eqgoocgaqwqcimie, $ywmkwiwkosakssii = [])
    {
        $ywmkwiwkosakssii["\x6d\x65\164\141\x5f\161\165\145\162\171"] = ["\x6d\145\x74\x61\x5f\x6b\x65\x79" => $uusmaiomayssaecw, "\155\145\164\141\x5f\x76\141\x6c\165\145" => $eqgoocgaqwqcimie, "\x6d\145\164\141\137\x63\157\x6d\x70\141\162\x65" => "\114\x49\x4b\x45"];
        return DecoratorWoocommerce::ageqswwkkqywckco($ywmkwiwkosakssii);
    }
    
    public static function gkokioeusiomuwee($product, $cqcsaaswaciweiie = [], $aqcaekiaqgiaiwiu = true)
    {
        goto sgaamousiakskkko;
        woweqwuwmegoecgu:
        if (!($qaiwqwwemmyyqosy && $product->has_weight())) {
            goto owqukoyoaogmwioi;
        }
        goto csmosoqqwicqwuqg;
        sgaamousiakskkko:
        $uomewyckeuqoqocu = [];
        goto mwqqkaiwyugqakeq;
        yqemqgiwcuoowges:
        
        $siquossayskcwkea = array_filter($product->get_attributes(), "\167\143\x5f\x61\x74\164\x72\x69\x62\x75\x74\145\163\x5f\141\x72\162\x61\171\137\x66\x69\154\164\x65\x72\x5f\x76\x69\163\151\142\x6c\x65");
        goto eawiyomugeiugoca;
        osmogyiiwqqwieoe:
        owqukoyoaogmwioi:
        goto ymqsaggkkwkoomgc;
        mwqqkaiwyugqakeq:
        $product = self::aqasygcsqysmmyke($product);
        goto yikaoaeoqsgieqoq;
        ymqsaggkkwkoomgc:
        if (!($qaiwqwwemmyyqosy && $product->has_dimensions())) {
            goto aaoeckeaamycqkam;
        }
        goto suuwwusyekuwqgwi;
        gqmqqaumkqkyyuom:
        return DecoratorHook::sscegwueamckwmcy("\x77\157\x6f\143\157\155\x6d\x65\162\143\x65\137\144\x69\163\160\154\141\x79\x5f\160\162\157\144\165\x63\x74\x5f\x61\164\164\162\151\x62\165\164\x65\163", $uomewyckeuqoqocu, $product);
        goto kssuoaucoagqicew;
        yikaoaeoqsgieqoq:
        
        $qaiwqwwemmyyqosy = DecoratorHook::sscegwueamckwmcy("\x77\143\137\x70\162\157\144\x75\143\164\x5f\x65\x6e\141\x62\x6c\x65\x5f\144\x69\155\x65\156\163\x69\157\x6e\163\x5f\144\x69\x73\160\x6c\x61\171", $product->has_weight() || $product->has_dimensions());
        goto woweqwuwmegoecgu;
        cccusomswoycqgye:
        aaoeckeaamycqkam:
        goto yqemqgiwcuoowges;
        eawiyomugeiugoca:
        foreach ($siquossayskcwkea as $ymkomoccmymcoiea) {
            goto megqkwsyeisgoiuq;
            ggiswsmgccuackao:
            oiioqgoqyykuocou:
            goto iwwawgsoqcciekeq;
            uycysmimgmsawemy:
            mimgyeoccsuwmomg:
            goto ggiswsmgccuackao;
            yoicqeqousygweyk:
            $ymqmyyeuycgmigyo = DecoratorWoocommerce::gmeusukogwcamcyc($ymqmyyeuycgmigyo);
            goto gkgiqeqokmyaosyi;
            megqkwsyeisgoiuq:
            $mmykcgusskuuuace = self::cswwmqwaucwuqcaq($product, $ymkomoccmymcoiea);
            goto qagsccmgemwyowgq;
            gkgiqeqokmyaosyi:
            oswkqueiycsgwwqc:
            goto mqweissqoiqukwuc;
            qagsccmgemwyowgq:
            $kskgqoywkoawosao = true;
            goto swuockeicagsysku;
            swuockeicagsysku:
            if (!(is_array($cqcsaaswaciweiie) && $cqcsaaswaciweiie)) {
                goto gcoaosuecgyuuiyq;
            }
            goto cwcqcsgwwkokqgoy;
            owosmsmuaueegaas:
            if (!$kskgqoywkoawosao) {
                goto mimgyeoccsuwmomg;
            }
            goto okcoqaemsekeyqgi;
            cwcqcsgwwkokqgoy:
            foreach ($cqcsaaswaciweiie as $tsuauommsquiesmk => $eqgoocgaqwqcimie) {
                goto kwuayueukssiusyo;
                kwuayueukssiusyo:
                $uiymkeeaukcyqqik = ManipulateArray::get($mmykcgusskuuuace, $tsuauommsquiesmk, false);
                goto ksyaeigosimeymmu;
                amwucayokoyowcki:
                $kskgqoywkoawosao = false;
                goto igkykqemaiuckkqm;
                ywckcmesqeiougoy:
                gigyyqgmkceykwam:
                goto uqcqusigauwqaucm;
                igkykqemaiuckkqm:
                goto kgwcgkqqguiwgmmm;
                goto ywckcmesqeiougoy;
                uqcqusigauwqaucm:
                umwsiiqcymkwcasg:
                goto usamasqcwkcaaeyo;
                ksyaeigosimeymmu:
                if (!(is_array($uiymkeeaukcyqqik) && !in_array($eqgoocgaqwqcimie, $uiymkeeaukcyqqik) && $uiymkeeaukcyqqik != $eqgoocgaqwqcimie)) {
                    goto gigyyqgmkceykwam;
                }
                goto amwucayokoyowcki;
                usamasqcwkcaaeyo:
            }
            goto ucuyyuummcgmmcoo;
            okcoqaemsekeyqgi:
            $ymqmyyeuycgmigyo = $ymkomoccmymcoiea->get_name();
            goto wgakiauyywueqsma;
            cssokcmoicccseqa:
            gcoaosuecgyuuiyq:
            goto owosmsmuaueegaas;
            wgakiauyywueqsma:
            if (!$aqcaekiaqgiaiwiu) {
                goto oswkqueiycsgwwqc;
            }
            goto yoicqeqousygweyk;
            ucuyyuummcgmmcoo:
            kgwcgkqqguiwgmmm:
            goto cssokcmoicccseqa;
            mqweissqoiqukwuc:
            $uomewyckeuqoqocu[$ymqmyyeuycgmigyo] = $mmykcgusskuuuace;
            goto uycysmimgmsawemy;
            iwwawgsoqcciekeq:
        }
        goto yokquaecwougwgme;
        yokquaecwougwgme:
        sawkewuuqsaekcsy:
        goto gqmqqaumkqkyyuom;
        suuwwusyekuwqgwi:
        $uomewyckeuqoqocu["\x64\x69\x6d\145\156\163\151\157\x6e\x73"] = ["\x6c\x61\x62\145\154" => __("\x44\151\155\x65\x6e\x73\x69\x6f\156\163", "\x77\x6f\x6f\143\157\155\155\x65\162\x63\145"), "\166\x61\154\165\145" => wc_format_dimensions($product->get_dimensions(false))];
        goto cccusomswoycqgye;
        csmosoqqwicqwuqg:
        $uomewyckeuqoqocu["\x77\x65\x69\147\150\x74"] = ["\x6c\141\142\x65\154" => __("\x57\x65\151\147\x68\164", "\x77\x6f\x6f\143\157\155\x6d\145\x72\x63\145"), "\x76\x61\x6c\165\x65" => wc_format_weight($product->get_weight())];
        goto osmogyiiwqqwieoe;
        kssuoaucoagqicew:
    }
    
    public static function ucqakycuekccuocw($aqykuigiuwmmcieu = self::OBJECT) : ?array
    {
        goto oiekocisyuaicoey;
        swwmuqsewiaswasq:
        if (!empty($seyqqsmuaiegkeeq)) {
            goto egaqcmmgioyoskak;
        }
        goto oiecwmgwkgscuaom;
        uccuwggkcciaascm:
        ManipulateArray::unset($seyqqsmuaiegkeeq, ["\x70\x72\x6f\x64\x75\143\x74\x5f\x73\150\151\160\x70\151\x6e\x67\x5f\143\154\141\x73\x73", "\160\162\x6f\144\165\x63\x74\x5f\x76\x69\x73\151\x62\x69\154\151\164\x79", "\x70\x72\157\144\x75\x63\164\x5f\x74\171\x70\145"]);
        goto qmgqakuqmkigkgcw;
        oiekocisyuaicoey:
        static $seyqqsmuaiegkeeq = [];
        goto swwmuqsewiaswasq;
        qmgqakuqmkigkgcw:
        egaqcmmgioyoskak:
        goto oimwsegacayecyko;
        oimwsegacayecyko:
        return $seyqqsmuaiegkeeq;
        goto swasewcuckegeuuy;
        oiecwmgwkgscuaom:
        $seyqqsmuaiegkeeq = DecoratorTaxonomy::qgckgkwskmsomoqs("\160\162\x6f\x64\x75\x63\x74", $aqykuigiuwmmcieu);
        goto uccuwggkcciaascm;
        swasewcuckegeuuy:
    }
    
    public static function mywkcmciykgikmyc($product, $kesssewsiegssiya, $ywmkwiwkosakssii = []) : array
    {
        return DecoratorWoocommerce::mywkcmciykgikmyc(self::omwkqcuwceweymcc($product), $kesssewsiegssiya, $ywmkwiwkosakssii);
    }
    
    public static function iwoqeaamkmyoquwm($product, $scwmkmciyywokcug) : array
    {
        goto wqeaomqyumqiocka;
        kgwgksykmqweowgi:
        return $wpdb->get_col("\12\x9\11\11\123\x45\x4c\105\x43\x54\x20\x6f\x69\163\x2e\157\162\x64\145\x72\137\151\x64\xa\x9\x9\11\x46\122\x4f\115\x20{$yuwymayicwwqiske}\x77\x6f\x6f\x63\x6f\x6d\x6d\145\x72\143\x65\x5f\x6f\x72\x64\x65\162\137\151\x74\145\155\163\40\141\163\x20\x6f\151\163\xa\11\11\x9\114\x45\106\x54\x20\x4a\117\x49\x4e\x20{$yuwymayicwwqiske}\167\157\157\143\x6f\x6d\x6d\145\162\143\145\137\x6f\x72\x64\x65\162\x5f\x69\x74\145\155\155\x65\164\141\40\x61\x73\x20\x6f\151\155\x20\117\x4e\40\157\x69\x73\x2e\x6f\x72\x64\x65\162\x5f\151\164\x65\155\137\x69\x64\40\x3d\40\x6f\151\x6d\56\157\x72\x64\x65\x72\x5f\151\x74\145\155\137\151\x64\xa\x9\x9\x9\x4c\x45\106\x54\x20\112\117\x49\116\x20{$wpdb->posts}\40\x41\x53\x20\x70\40\117\x4e\x20\x6f\151\x73\x2e\x6f\x72\144\x65\162\137\x69\x64\x20\75\x20\160\x2e\x49\x44\12\11\x9\x9\114\x45\x46\x54\40\x4a\x4f\111\116\40{$wpdb->postmeta}\x20\x41\123\40\x70\x6d\40\117\x4e\40\157\151\x73\56\157\x72\x64\x65\162\137\x69\144\x20\x3d\40\x70\155\56\x6d\145\x74\141\x5f\x69\x64\12\11\x9\x9\127\110\x45\x52\105\40\x70\x2e\x70\157\x73\x74\137\x74\171\160\145\x20\75\x20\x27\x73\x68\157\160\137\x6f\x72\144\x65\x72\x27\12\x9\x9\11\x41\x4e\104\x20\160\x2e\160\157\x73\x74\x5f\163\x74\141\x74\165\x73\40\111\x4e\40\50\40\x27\x77\143\55" . implode("\47\x2c\x20\47\x77\143\x2d", $oqseeekuqisekiwy) . "\47\x20\51\xa\11\11\11\101\116\104\40\x6f\151\x73\x2e\x6f\162\144\x65\162\x5f\151\164\145\x6d\137\164\171\x70\x65\40\x3d\x20\x27\154\x69\156\x65\137\151\164\145\x6d\x27\12\11\x9\11\x41\x4e\104\x20\157\151\155\56\x6d\145\x74\141\137\x6b\145\171\40\75\x20\47\x5f\160\162\157\x64\x75\x63\x74\137\151\x64\47\xa\11\x9\x9\x41\116\x44\40\157\151\155\56\155\x65\x74\x61\137\x76\141\154\x75\x65\x20\75\40\x27{$product}\47\xa\x9\x9\x9\101\116\104\40\160\155\56\155\x65\x74\141\x5f\x6b\x65\171\x20\75\40\x27\x5f\x63\165\163\x74\157\x6d\145\x72\137\165\x73\x65\162\x27\xa\11\11\x9\101\116\x44\x20\x70\155\56\155\145\164\x61\x5f\166\x61\154\165\145\40\75\x20\47{$scwmkmciyywokcug}\47\xa\x20\40\40\x20\x9");
        goto gygmukceqmuewaim;
        wqeaomqyumqiocka:
        global $wpdb;
        goto quookucgqymiqocy;
        qqeycioeqswikseq:
        $oqseeekuqisekiwy = array_map("\145\x73\143\137\163\x71\x6c", DecoratorWoocommerce::ouqoeawmueswmksm());
        goto kgwgksykmqweowgi;
        quookucgqymiqocy:
        $yuwymayicwwqiske = $wpdb->prefix;
        goto gaoeaaeausmqguee;
        gaoeaaeausmqguee:
        $product = self::omwkqcuwceweymcc($product);
        goto qqeycioeqswikseq;
        gygmukceqmuewaim:
    }
    
    public static function giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee = null, $yuwymayicwwqiske = "\167\157\x6f\x63\x6f\x6d\155\x65\162\x63\145\x5f")
    {
        goto ugkkcqkwssgykcyo;
        coqswqysimeumkei:
        $uusmaiomayssaecw = $yuwymayicwwqiske . $uusmaiomayssaecw;
        goto muaaeioooicwskgu;
        ecqswsccqomawuoy:
        return DecoratorOption::get($uusmaiomayssaecw, $ggauoeuaesiymgee);
        goto iwwayiuyaecikeku;
        ugkkcqkwssgykcyo:
        if (!$yuwymayicwwqiske) {
            goto sokekecgsmeyesqq;
        }
        goto coqswqysimeumkei;
        muaaeioooicwskgu:
        sokekecgsmeyesqq:
        goto ecqswsccqomawuoy;
        iwwayiuyaecikeku:
    }
    
    public static function cswwmqwaucwuqcaq($product, $ymkomoccmymcoiea) : array
    {
        goto eymiaowquwyiggie;
        wsasggmqwyisgoiq:
        cmicuicekiiowekc:
        goto ykcmokmsimckuego;
        iwqasgooqqmcyqmy:
        oomiawgcsyaaqaao:
        goto keuikgoukmwokcoa;
        kgecwaiwqeacyqge:
        foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
            goto wwuwumqemissswei;
            ggoceeqkiqmqkiwg:
            $qqswgiawgeaeoecu[] = ManipulateHTML::uuccukgasskgimsq("\141", ["\x68\x72\145\146" => ManipulateTerm::qmgcisuuikgmqcsu(ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk), $ymkomoccmymcoiea->get_name()), "\162\145\x6c" => "\164\x61\147"], $ymqmyyeuycgmigyo);
            goto qqoaguokgcoeieyi;
            gsqmakgaqakuawue:
            wmkkqgiamggikgsi:
            goto ggoceeqkiqmqkiwg;
            eoikakegoqcywcui:
            $qqswgiawgeaeoecu[] = $ymqmyyeuycgmigyo;
            goto ccmgkkiyameumyoi;
            skoaowmysckmmocc:
            eeuosekauyeiqoie:
            goto ecuosiaqyaoqckao;
            ccmgkkiyameumyoi:
            goto wqcseagmwswqeqgu;
            goto gsqmakgaqakuawue;
            qqoaguokgcoeieyi:
            wqcseagmwswqeqgu:
            goto skoaowmysckmmocc;
            qwsgukcwoomuuais:
            if ($kesssewsiegssiya->attribute_public) {
                goto wmkkqgiamggikgsi;
            }
            goto eoikakegoqcywcui;
            wwuwumqemissswei:
            $ymqmyyeuycgmigyo = esc_html($iwewcwusemqaiggk->name);
            goto qwsgukcwoomuuais;
            ecuosiaqyaoqckao:
        }
        goto wsasggmqwyisgoiq;
        aeoicygsgoeeqguk:
        $mmykcgusskuuuace = ["\x76\141\154\165\x65" => DecoratorHook::sscegwueamckwmcy("\x77\157\x6f\143\157\x6d\x6d\x65\162\143\x65\x5f\141\164\x74\x72\151\142\x75\164\145", wptexturize(implode("\x2c\40", $qqswgiawgeaeoecu)), $ymkomoccmymcoiea, $qqswgiawgeaeoecu), "\x6c\141\x62\x65\154" => DecoratorWoocommerce::qysciqmmoqsaqmqk($ymkomoccmymcoiea->get_name(), $product)];
        goto aqqgkiieakuwceea;
        kgkameuwwcmaawwg:
        if ($ymkomoccmymcoiea->is_taxonomy()) {
            goto qiqmamemmguaieiw;
        }
        goto ssooqmscuqwmcoeu;
        ssooqmscuqwmcoeu:
        $qqswgiawgeaeoecu = $ymkomoccmymcoiea->get_options();
        goto kamkksumiggskuay;
        qwykccyeiymiomyi:
        $kesssewsiegssiya = $ymkomoccmymcoiea->get_taxonomy_object();
        goto asmkyaumussymycs;
        ykcmokmsimckuego:
        owauaaeeaeoqgiii:
        goto aeoicygsgoeeqguk;
        asmkyaumussymycs:
        $uyuaosigqymaqsaa = self::mywkcmciykgikmyc($product, $ymkomoccmymcoiea->get_name(), ["\x66\x69\x65\154\144\x73" => "\141\154\x6c"]);
        goto kgecwaiwqeacyqge;
        eymiaowquwyiggie:
        $qqswgiawgeaeoecu = [];
        goto kgkameuwwcmaawwg;
        kamkksumiggskuay:
        foreach ($qqswgiawgeaeoecu as &$eqgoocgaqwqcimie) {
            $eqgoocgaqwqcimie = make_clickable(esc_html($eqgoocgaqwqcimie));
            wokmesqciaaskwoe:
        }
        goto iwqasgooqqmcyqmy;
        aqqgkiieakuwceea:
        return (array) DecoratorHook::sscegwueamckwmcy("\167\157\x6f\143\157\155\155\145\162\143\x65\x5f\141\x74\164\x72\151\142\x75\164\x65\137\x6f\x75\x74\x70\165\x74", $mmykcgusskuuuace, $ymkomoccmymcoiea, $product);
        goto okseeygkgkqkwsgw;
        keuikgoukmwokcoa:
        goto owauaaeeaeoqgiii;
        goto yqccqmsucoukqkmw;
        yqccqmsucoukqkmw:
        qiqmamemmguaieiw:
        goto qwykccyeiymiomyi;
        okseeygkgkqkwsgw:
    }
    
    public static function cmussoegoauyyguw($aiamqeawckcsuaou, $ymqmyyeuycgmigyo = '', $eqgoocgaqwqcimie = '', $kekikiwsckuiyuyo = false)
    {
        goto imwkaaqausgqquoo;
        amuoiqyswiesyyck:
        $eqgoocgaqwqcimie = $cmussoegoauyyguw->{$aiamqeawckcsuaou}($ymqmyyeuycgmigyo);
        goto ioimwcssyaqsuqma;
        wgkecsowgumikqqm:
        return $eqgoocgaqwqcimie;
        goto gusamkkgwqmamcke;
        ogyguukmcmoqkqei:
        goto qmusucqwswsqsgwc;
        goto wcuguimgckkocagq;
        womskaaiqugkuggi:
        if ($aiamqeawckcsuaou == "\163\x65\164") {
            goto osiwmoqisiiogawm;
        }
        goto yimasagkemgkoeqq;
        ioimwcssyaqsuqma:
        gykoquuuowomucyq:
        goto oekkmwkqkuqwckui;
        qwamueuasumwowym:
        wewkyisikaywwcmu:
        goto amuoiqyswiesyyck;
        qeycwoqakqucwscm:
        cyycimgiyeqgssuy:
        goto oyaeggoyqusqqcyo;
        amocqywwugaccike:
        goto cyycimgiyeqgssuy;
        goto cckmsweoqwaucgcs;
        oyaeggoyqusqqcyo:
        qmusucqwswsqsgwc:
        goto wgkecsowgumikqqm;
        acsmysaakckkkkie:
        $cmussoegoauyyguw = $woocommerce->session;
        goto womskaaiqugkuggi;
        wqiyuoiwqekmsues:
        unset($woocommerce->session->{$ymqmyyeuycgmigyo});
        goto eawmqueomoausgog;
        cumieyuwywwwsaqg:
        $eqgoocgaqwqcimie = $cmussoegoauyyguw->{$ymqmyyeuycgmigyo};
        goto esgwyeyackaweskk;
        caoqqqweswimckec:
        if (method_exists($cmussoegoauyyguw, $aiamqeawckcsuaou)) {
            goto wewkyisikaywwcmu;
        }
        goto cumieyuwywwwsaqg;
        ykqswiqaqaogkksc:
        cwqmuqiqouooguqm:
        goto ogyguukmcmoqkqei;
        imwkaaqausgqquoo:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto acsmysaakckkkkie;
        esgwyeyackaweskk:
        goto gykoquuuowomucyq;
        goto qwamueuasumwowym;
        yimasagkemgkoeqq:
        if (!($aiamqeawckcsuaou == "\x67\x65\164")) {
            goto cwqmuqiqouooguqm;
        }
        goto caoqqqweswimckec;
        oekkmwkqkuqwckui:
        if (!$kekikiwsckuiyuyo) {
            goto vosacywygmcokgkw;
        }
        goto wqiyuoiwqekmsues;
        iiskacegeekeseky:
        if (method_exists($cmussoegoauyyguw, $aiamqeawckcsuaou)) {
            goto ciamwmmiqcseaeuc;
        }
        goto ukoqsuaqouuqkuig;
        youqqmmoywqeggeg:
        $woocommerce->session->{$aiamqeawckcsuaou}($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie);
        goto qeycwoqakqucwscm;
        eawmqueomoausgog:
        vosacywygmcokgkw:
        goto ykqswiqaqaogkksc;
        wcuguimgckkocagq:
        osiwmoqisiiogawm:
        goto iiskacegeekeseky;
        ukoqsuaqouuqkuig:
        $woocommerce->session->{$ymqmyyeuycgmigyo} = $eqgoocgaqwqcimie;
        goto amocqywwugaccike;
        cckmsweoqwaucgcs:
        ciamwmmiqcseaeuc:
        goto youqqmmoywqeggeg;
        gusamkkgwqmamcke:
    }
    
    public static function ceusksoaisoswmia($umwqusowiqmyseom = null) : array
    {
        goto qcysusmwyoeoguki;
        mawoaecogwegmcoc:
        if (!(!$oammesyieqmwuwyi && $umwqusowiqmyseom)) {
            goto ngaquoioqeukmoyu;
        }
        goto isqyiumsggacqmak;
        dwaiimguqaaikoso:
        $oammesyieqmwuwyi = $umwqusowiqmyseom->get_items();
        goto uqiisswyoggsckqg;
        siequuwyyyusqeie:
        return $oammesyieqmwuwyi;
        goto goamosigosumsmkq;
        uqiisswyoggsckqg:
        kuoqweoiooqosmoe:
        goto qmwkauswsyowckua;
        isqyiumsggacqmak:
        $umwqusowiqmyseom = self::mmmcswscsiecscwg($umwqusowiqmyseom);
        goto eicuumeiweosiaqy;
        eicuumeiweosiaqy:
        if (!$umwqusowiqmyseom) {
            goto kuoqweoiooqosmoe;
        }
        goto dwaiimguqaaikoso;
        qmwkauswsyowckua:
        ngaquoioqeukmoyu:
        goto siequuwyyyusqeie;
        qcysusmwyoeoguki:
        $oammesyieqmwuwyi = self::uakuwyoiooeqqiow();
        goto mawoaecogwegmcoc;
        goamosigosumsmkq:
    }
    
    public static function uwyscmkeyeuqyukk($ywmkwiwkosakssii = []) : string
    {
        goto kakyqyqyweuaoqmg;
        ecgwcgmuemqagggm:
        $wwgucssaecqekuek = ["\143\154\141\x73\x73" => "\143\150\145\143\x6b\x62\157\170", self::TYPE => "\143\150\x65\143\x6b\x62\157\170", self::NAME => ManipulateArray::get($ywmkwiwkosakssii, self::NAME)];
        goto igauaamasosqcyys;
        uwwqiicwuwkwqcmg:
        return ManipulateHTML::uuccukgasskgimsq("\x6c\141\142\x65\154", ["\143\154\141\163\x73" => "\x74\x69\x70\163", "\x64\x61\164\141\55\164\151\160" => ManipulateArray::get($ywmkwiwkosakssii, "\x74\x69\160")], [ManipulateArray::get($ywmkwiwkosakssii, self::LABEL), ManipulateHTML::qgsekwygcgawekeq("\x69\156\160\165\164", $wwgucssaecqekuek)]);
        goto ikmeskqmmqqyigmw;
        ecowowaocsooqkyo:
        $wwgucssaecqekuek["\143\150\145\x63\153\145\x64"] = true;
        goto yuiimkuacqcecwgw;
        kakyqyqyweuaoqmg:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x74\151\x70" => '', self::NAME => '', self::LABEL => '', self::VALUE => '']);
        goto ecgwcgmuemqagggm;
        igauaamasosqcyys:
        if (!ManipulateArray::get($ywmkwiwkosakssii, self::VALUE, false)) {
            goto wuwaakyeqqeeogyy;
        }
        goto ecowowaocsooqkyo;
        yuiimkuacqcecwgw:
        wuwaakyeqqeeogyy:
        goto uwwqiicwuwkwqcmg;
        ikmeskqmmqqyigmw:
    }
}
