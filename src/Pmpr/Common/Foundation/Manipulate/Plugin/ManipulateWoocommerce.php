<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        amescycuaoumygqc:
        $sogksuscggsicmac = [];
        goto iwecwgwiccuemkye;
        okyqqamccagawuoi:
        scqwymaqqacaugqa:
        goto agiieggoecqiaoum;
        agiieggoecqiaoum:
        return $sogksuscggsicmac;
        goto ksgumesawyqswaoa;
        iwecwgwiccuemkye:
        $seyqqsmuaiegkeeq = DecoratorWoocommerce::mqsqiyqiceqasokq();
        goto qeoawooaykmyokuo;
        qeoawooaykmyokuo:
        foreach ($isweyuoisomqyaag as $ymqmyyeuycgmigyo => $igqsaukqcqscimok) {
            goto aaoywwqcimiwiywu;
            cemsuwwwgiqiyigo:
            ayccewcmckaqowek:
            goto owymcaeysicqacya;
            uimyekysswywuoyi:
            $sogksuscggsicmac[$ymqmyyeuycgmigyo] = ["\141\x74\x74\x72\x69\x62\x75\x74\145" => $kesssewsiegssiya, "\164\x65\162\x6d" => []];
            goto cemsuwwwgiqiyigo;
            oeguggskkegamuoo:
            if (!$kesssewsiegssiya) {
                goto ayccewcmckaqowek;
            }
            goto uimyekysswywuoyi;
            owymcaeysicqacya:
            kmayiocekggkoyso:
            goto eiqiqqoyqcaiiwqo;
            aaoywwqcimiwiywu:
            $kesssewsiegssiya = ManipulateArray::get($seyqqsmuaiegkeeq, ManipulateString::wiecmkiugmyyqiqc("\x70\x61\x5f", '', $ymqmyyeuycgmigyo));
            goto oeguggskkegamuoo;
            eiqiqqoyqcaiiwqo:
        }
        goto okyqqamccagawuoi;
        ksgumesawyqswaoa:
    }
    
    public static function kyycwccmaemgokwu($smwiiesyqsgyisos) : string
    {
        goto emyeissowqweyqec;
        emyeissowqweyqec:
        if ($smwiiesyqsgyisos instanceof WC_Coupon) {
            goto ieycaaisagswkaiy;
        }
        goto ueekmmegamoyagog;
        qeayouqugioyieei:
        ieycaaisagswkaiy:
        goto gogyuwukcgmycsqw;
        gogyuwukcgmycsqw:
        
        return $smwiiesyqsgyisos->get_code();
        goto mgscesskeauowgsu;
        ueekmmegamoyagog:
        $smwiiesyqsgyisos = new WC_Coupon($smwiiesyqsgyisos);
        goto qeayouqugioyieei;
        mgscesskeauowgsu:
    }
    
    public static function oeeuywgiaywkimek($smwiiesyqsgyisos)
    {
        goto qyyiiuuscqgeowya;
        uowaoiwemyccakim:
        if (self::kyycwccmaemgokwu($smwiiesyqsgyisos)) {
            goto kyowegyokkesuugi;
        }
        goto gukkaswwecmuoayo;
        sccoieksocaiaogm:
        kyowegyokkesuugi:
        goto gskmiyeoisqoqkci;
        gukkaswwecmuoayo:
        $smwiiesyqsgyisos = false;
        goto sccoieksocaiaogm;
        qyyiiuuscqgeowya:
        $smwiiesyqsgyisos = new WC_Coupon($smwiiesyqsgyisos);
        goto uowaoiwemyccakim;
        gskmiyeoisqoqkci:
        return $smwiiesyqsgyisos;
        goto iaqiocmqqiaeuwyg;
        iaqiocmqqiaeuwyg:
    }
    
    public static function cuwomiomuqqkayoo($ioakeqoosmkukeaa)
    {
        goto osamqwsmcawigggw;
        gkuyqiyuaquuyaay:
        if (!$wwcysoksoogyacog) {
            goto yasegwakoscmkouu;
        }
        goto aqyqqgkiycokskwq;
        osamqwsmcawigggw:
        $wwcysoksoogyacog = ManipulateWoocommerce::uceecgsoicggikeu();
        goto gkuyqiyuaquuyaay;
        masgkciqasaucoss:
        yasegwakoscmkouu:
        goto eogaamwmasgugqgy;
        aqyqqgkiycokskwq:
        
        $wwcysoksoogyacog->add_discount($ioakeqoosmkukeaa);
        goto masgkciqasaucoss;
        eogaamwmasgugqgy:
    }
    
    public static function mmmcswscsiecscwg($umwqusowiqmyseom)
    {
        goto oockcigwicccqyko;
        eaqsewgiawoasqgu:
        $umwqusowiqmyseom = DecoratorWoocommerce::mmmcswscsiecscwg($umwqusowiqmyseom);
        goto kaaasaqewwykmikk;
        oockcigwicccqyko:
        if (is_a($umwqusowiqmyseom, "\x57\103\137\117\x72\144\x65\x72")) {
            goto weyoiomaeciyggug;
        }
        goto eaqsewgiawoasqgu;
        kaaasaqewwykmikk:
        weyoiomaeciyggug:
        goto cmawmeioiuegssuw;
        cmawmeioiuegssuw:
        return $umwqusowiqmyseom;
        goto umeemqiuewswymkw;
        umeemqiuewswymkw:
    }
    
    public static function wcqicmcuiewessgy($umwqusowiqmyseom) : string
    {
        goto qgkmsokwcmmawiey;
        qgkmsokwcmmawiey:
        $umwqusowiqmyseom = self::mmmcswscsiecscwg($umwqusowiqmyseom);
        goto ugiuoawueimimiwk;
        ugiuoawueimimiwk:
        $iueymcwwscwqkiyq = '';
        goto aouoeqamkuemyeqa;
        aouoeqamkuemyeqa:
        if (!$umwqusowiqmyseom) {
            goto qweqcmkkiqkkukis;
        }
        goto ukcyuqaycogiiiye;
        awcwocukswgsaymk:
        return $iueymcwwscwqkiyq;
        goto iwekcauymcaoooie;
        ukcyuqaycogiiiye:
        $iueymcwwscwqkiyq = DecoratorWoocommerce::ueqkgikommgyqmoa($umwqusowiqmyseom->get_status());
        goto oiseukwsseayeamo;
        oiseukwsseayeamo:
        qweqcmkkiqkkukis:
        goto awcwocukswgsaymk;
        iwekcauymcaoooie:
    }
    
    public static function susisykioakswkmm($umwqusowiqmyseom) : string
    {
        goto saeeegogmqsyimqk;
        koyyawuukocokcme:
        if (!$umwqusowiqmyseom) {
            goto quweyqomsoqcwmae;
        }
        goto aeusyyagoyskceiy;
        yaqamykgsuagaksc:
        $qsegigkmaaskiaeo = trim(sprintf("\45\x73\40\45\163", $umwqusowiqmyseom->get_billing_first_name(), $umwqusowiqmyseom->get_billing_last_name()));
        goto gkecqaygqygkkgwc;
        kaacgcseugewuceu:
        $qsegigkmaaskiaeo = trim($umwqusowiqmyseom->get_billing_company());
        goto ueioekeyeekmugss;
        cywckaugcygcssie:
        $mkucggyaiaukqoce = ManipulateUser::get($umwqusowiqmyseom->get_customer_id(), true);
        goto ascyoecaiyskamoo;
        ueioekeyeekmugss:
        kcyccscigsuuiomi:
        goto smwwcycswiyuqouu;
        ymmwikogcaccsgyo:
        quweyqomsoqcwmae:
        goto xoyesscyiuyyoaao;
        mukmccquscqkeeuy:
        mmksuuciiyoyaaoa:
        goto icuauuecukomyoss;
        ioeaawqkkakemsum:
        if ($umwqusowiqmyseom->get_billing_company()) {
            goto seiyywsmwamccscw;
        }
        goto gyqecessamsiywea;
        wsemcaiucsysuqiq:
        $qsegigkmaaskiaeo = ucwords($mkucggyaiaukqoce->display_name);
        goto mukmccquscqkeeuy;
        saeeegogmqsyimqk:
        $qsegigkmaaskiaeo = '';
        goto qkkcekocsgakoqqo;
        icuauuecukomyoss:
        oowymeqscqicmiac:
        goto egkiyyuywuiekisw;
        egkiyyuywuiekisw:
        goto kcyccscigsuuiomi;
        goto cookqcosymocwyqg;
        ascyoecaiyskamoo:
        if (!$mkucggyaiaukqoce) {
            goto mmksuuciiyoyaaoa;
        }
        goto wsemcaiucsysuqiq;
        gkecqaygqygkkgwc:
        aowgayqaooygayky:
        goto ymmwikogcaccsgyo;
        aeusyyagoyskceiy:
        if ($umwqusowiqmyseom->get_billing_first_name() || $umwqusowiqmyseom->get_billing_last_name()) {
            goto nacqwwcyskisiqmi;
        }
        goto ioeaawqkkakemsum;
        gyqecessamsiywea:
        if (!$umwqusowiqmyseom->get_customer_id()) {
            goto oowymeqscqicmiac;
        }
        goto cywckaugcygcssie;
        xoyesscyiuyyoaao:
        return $qsegigkmaaskiaeo;
        goto kkeeggmwkmuwswca;
        smwwcycswiyuqouu:
        goto aowgayqaooygayky;
        goto isgekmewmqgmwiky;
        qkkcekocsgakoqqo:
        $umwqusowiqmyseom = self::mmmcswscsiecscwg($umwqusowiqmyseom);
        goto koyyawuukocokcme;
        isgekmewmqgmwiky:
        nacqwwcyskisiqmi:
        goto yaqamykgsuagaksc;
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
        qqmsywmwmygigewc:
        $wwcysoksoogyacog->empty_cart();
        goto cegciyyeemaaawuo;
        oqiowcuqsqwyukgi:
        $wwcysoksoogyacog = self::uceecgsoicggikeu();
        goto kmeesswcuaququqw;
        uuwiiwywmwyoymgi:
        if (function_exists("\x77\143\137\x65\x6d\x70\x74\x79\x5f\x63\x61\162\164")) {
            goto muwyoumcckugweeg;
        }
        goto oqiowcuqsqwyukgi;
        kmeesswcuaququqw:
        if (!$wwcysoksoogyacog) {
            goto sgsmiecuouaseyeu;
        }
        goto qqmsywmwmygigewc;
        cegciyyeemaaawuo:
        sgsmiecuouaseyeu:
        goto ocmsggeccyugikwu;
        makosoyccwoyooyu:
        wc_empty_cart();
        goto cmssgciwquymiacc;
        ocmsggeccyugikwu:
        goto agimkskeiiemakqe;
        goto ysmyakmkagcqqswo;
        ysmyakmkagcqqswo:
        muwyoumcckugweeg:
        goto makosoyccwoyooyu;
        cmssgciwquymiacc:
        agimkskeiiemakqe:
        goto uyscswaymikycueg;
        uyscswaymikycueg:
    }
    
    public static function uakuwyoiooeqqiow() : array
    {
        goto aaqoyoyiagqcguse;
        aaqoyoyiagqcguse:
        $wwcysoksoogyacog = self::uceecgsoicggikeu();
        goto iamqccceoygiywgo;
        qgoicagqowggweeq:
        if (!$wwcysoksoogyacog) {
            goto qiaowqciwwyiucae;
        }
        goto wukmywyisgqyiwku;
        cgyaokocoymsqakq:
        return $ygwoqcwsaggqoamw;
        goto qiycageymgowgicg;
        iamqccceoygiywgo:
        $ygwoqcwsaggqoamw = [];
        goto qgoicagqowggweeq;
        wgeuaaggcwocgomy:
        qiaowqciwwyiucae:
        goto cgyaokocoymsqakq;
        wukmywyisgqyiwku:
        $ygwoqcwsaggqoamw = $wwcysoksoogyacog->get_cart_contents();
        goto wgeuaaggcwocgomy;
        qiycageymgowgicg:
    }
    
    public static function geoemsmuouqcqmei() : ?string
    {
        goto ieukeyosucwcigcq;
        ieukeyosucwcigcq:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto aocsmigsemowswge;
        uguaomoemkcuqksw:
        return wc_get_cart_url();
        goto uaycgmwwmeqsqoss;
        aocsmigsemowswge:
        if (function_exists("\x77\x63\137\147\x65\164\137\143\x61\x72\164\x5f\165\162\154")) {
            goto yususwsyymskuwge;
        }
        goto iikgymkaqikicssa;
        gokisgaagiawmqmg:
        goto koiweeaoqaqgeiow;
        goto gkoyauwycuyumiey;
        iikgymkaqikicssa:
        return $woocommerce->cart->get_cart_url();
        goto gokisgaagiawmqmg;
        gkoyauwycuyumiey:
        yususwsyymskuwge:
        goto uguaomoemkcuqksw;
        uaycgmwwmeqsqoss:
        koiweeaoqaqgeiow:
        goto mackmiksusgquqku;
        mackmiksusgquqku:
    }
    
    public static function ayseokmqycoqaigc() : bool
    {
        return class_exists("\x77\157\x6f\x63\x6f\x6d\155\x65\x72\143\x65") && ManipulatePlugin::ggocakcisguuokai("\x77\x6f\157\x63\x6f\x6d\155\145\x72\x63\145\57\167\157\157\143\x6f\155\155\x65\x72\143\145\56\160\x68\x70");
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
        qqoeqgqkmegyquie:
        if (!is_a($umwqusowiqmyseom, "\x57\103\x5f\117\162\144\x65\x72")) {
            goto kkcskacouykscykm;
        }
        goto gcaeuwucgqwocegi;
        yumugwyseyuawuae:
        kkcskacouykscykm:
        goto kuekaewgqsagkokm;
        gcaeuwucgqwocegi:
        $aokagokqyuysuksm = $umwqusowiqmyseom->get_id();
        goto yumugwyseyuawuae;
        eicoyaciiwoweyow:
    }
    
    public static function aqasygcsqysmmyke($product = null)
    {
        goto aoywumwiwsuugsae;
        aoywumwiwsuugsae:
        if (is_a($product, "\127\x43\x5f\120\162\x6f\x64\x75\143\x74")) {
            goto ccykaqwcuqguuesk;
        }
        goto kgyiaoswiyukcguu;
        kgyiaoswiyukcguu:
        $product = DecoratorWoocommerce::aqasygcsqysmmyke($product);
        goto ygogeqikkaiewqak;
        qgwksesamqckoysm:
        return $product;
        goto iyqwcuwcoqsqiqey;
        ygogeqikkaiewqak:
        ccykaqwcuqguuesk:
        goto qgwksesamqckoysm;
        iyqwcuwcoqsqiqey:
    }
    
    public static function mkiigkeqaeiwqyua() : bool
    {
        return in_array(DecoratorWoocommerce::useawgqusasoukqm(), ["\x49\122\124", "\x49\122\x52"]);
    }
    
    public static function eywqaumgkccycyau($aokagokqyuysuksm, $ywmkwiwkosakssii = [])
    {
        goto eqmiagqymgsqikio;
        sqcucoqwgcookais:
        $wkyuegumgeqqqmyg = [];
        goto igoiiguaiiyskqye;
        osqscmomgeumekym:
        uykoiemomggyyaqm:
        goto isqoqyuosaeauika;
        igoiiguaiiyskqye:
        foreach ($wkyuegumgeqqqmyg as $aiowsaccomcoikus) {
            goto caeissowkcqcoisu;
            ouekywuyisaayusa:
            yqusmmkkqyqusoug:
            goto maeoaamgcykqqcac;
            wwoyegucuaugosys:
            $ywmkwiwkosakssii[$aiowsaccomcoikus] = DecoratorSanitize::aoeoykwemwaqsikc($ywmkwiwkosakssii[$aiowsaccomcoikus]);
            goto kcyyceweysgmscgm;
            kcyyceweysgmscgm:
            omygqyyicqyuswqs:
            goto ouekywuyisaayusa;
            caeissowkcqcoisu:
            if (!isset($ywmkwiwkosakssii[$aiowsaccomcoikus])) {
                goto omygqyyicqyuswqs;
            }
            goto wwoyegucuaugosys;
            maeoaamgcykqqcac:
        }
        goto osqscmomgeumekym;
        eqmiagqymgsqikio:
        $ywmkwiwkosakssii[self::ID] = $aokagokqyuysuksm;
        goto sqcucoqwgcookais;
        isqoqyuosaeauika:
        DecoratorWoocommerce::eywqaumgkccycyau($ywmkwiwkosakssii);
        goto cqkmekqeuoamwwik;
        cqkmekqeuoamwwik:
    }
    
    public static function oseiymowmquqkaca() : bool
    {
        global $woocommerce_loop;
        return DecoratorWoocommerce::kmymkocwcawgeccm() && isset($woocommerce_loop["\156\x61\155\x65"]) && in_array($woocommerce_loop["\x6e\x61\155\145"], ["\162\x65\x6c\x61\164\x65\144", "\165\160\x20\x2d\x20\x73\145\154\x6c\163"]);
    }
    
    public static function kyckwuuiqwmyoqma() : ?\WC_Query
    {
        goto aswqcceuwmmqciec;
        ekwgywkksceymecu:
        return $gqgemcmoicmgaqie;
        goto aesqskyuooksouwa;
        wwowwogiasqyegco:
        if (!$woocommerce) {
            goto gkqeioiiywequymm;
        }
        goto cowcyoscwiogwoss;
        cowcyoscwiogwoss:
        $gqgemcmoicmgaqie = $woocommerce->query;
        goto iammguyywsgygewo;
        iammguyywsgygewo:
        gkqeioiiywequymm:
        goto ekwgywkksceymecu;
        eqskaoiwkcikoock:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto wwowwogiasqyegco;
        aswqcceuwmmqciec:
        $gqgemcmoicmgaqie = null;
        goto eqskaoiwkcikoock;
        aesqskyuooksouwa:
    }
    
    public static function kkewuuisyiscmgyc() : WooCommerce
    {
        goto eqaqiuescmyiwsoq;
        iiwkgiyuiuskiusa:
        ockwkskmgeqemqwm:
        goto eqesiosukaowuquq;
        qoieockmumciwweq:
        goto ockwkskmgeqemqwm;
        goto qmccgkcskscsakcu;
        eqesiosukaowuquq:
        return $mksyucucyswaukig;
        goto swyaqueaoyekgomq;
        wocmuysuywyaeyia:
        $mksyucucyswaukig = WC();
        goto iiwkgiyuiuskiusa;
        ywmkeguguoigeago:
        $mksyucucyswaukig = $woocommerce;
        goto qoieockmumciwweq;
        umeuqqawicigwmmw:
        global $woocommerce;
        goto ywmkeguguoigeago;
        qmccgkcskscsakcu:
        mkuoeggssimkqoee:
        goto wocmuysuywyaeyia;
        eqaqiuescmyiwsoq:
        if (function_exists("\127\103")) {
            goto mkuoeggssimkqoee;
        }
        goto umeuqqawicigwmmw;
        swyaqueaoyekgomq:
    }
    
    public static function scgumisucgwskyqk($product, $mgkceomocowocqyo = "\x76\x69\145\167") : string
    {
        goto ycaqamikucimygma;
        emsoowiaoaoayqyy:
        owgiiuqeeesguqsq:
        goto gowguesicegmegqw;
        ueiooqcaegkyumkk:
        ueoykiauoyuauwsi:
        goto mqysyiqsowkciiiq;
        gmqceeyooqckwwms:
        $product = self::aqasygcsqysmmyke($product);
        goto ikckcqggoqoimoio;
        mqysyiqsowkciiiq:
        return $aumscagymwyyicag;
        goto comswgimqmwcyyas;
        ycaqamikucimygma:
        $aumscagymwyyicag = '';
        goto gmqceeyooqckwwms;
        amqmckimqwauwkug:
        $eyuymeqcioasuyyi = $product->regular_price;
        goto iuawscaywkoegium;
        iuawscaywkoegium:
        goto yqmkgcicoecyuiku;
        goto emsoowiaoaoayqyy;
        qqsyqgokqqsqoooe:
        if (method_exists($product, "\x67\145\x74\x5f\x73\141\x6c\x65\137\160\162\x69\143\x65")) {
            goto owgiiuqeeesguqsq;
        }
        goto amqmckimqwauwkug;
        usuiacsqegaeywgs:
        $aumscagymwyyicag = DecoratorHook::sscegwueamckwmcy("\x77\x6f\157\x63\x6f\155\x6d\x65\x72\x63\x65\137\x70\x72\x6f\144\165\x63\164\137\162\x65\x67\165\154\x61\x72\137\160\x72\x69\143\x65", $eyuymeqcioasuyyi, $product);
        goto ueiooqcaegkyumkk;
        ikckcqggoqoimoio:
        if (!$product) {
            goto ueoykiauoyuauwsi;
        }
        goto qqsyqgokqqsqoooe;
        owgocmqmgsgeayue:
        yqmkgcicoecyuiku:
        goto usuiacsqegaeywgs;
        gowguesicegmegqw:
        $eyuymeqcioasuyyi = $product->get_regular_price($mgkceomocowocqyo);
        goto owgocmqmgsgeayue;
        comswgimqmwcyyas:
    }
    
    public static function asaycagaeksiumkw($product, $mgkceomocowocqyo = "\x76\x69\145\167") : string
    {
        goto wimquiyiyyakiyqo;
        gccusiaomowsyeqk:
        if (!$product) {
            goto kgykiwcggygyekgc;
        }
        goto kwwqiuaycwkcigqq;
        kkskwicmigikmwuk:
        goto eiimgesccmkgusys;
        goto makucowmowkkooyy;
        ewkmiiygeqessaue:
        $aumscagymwyyicag = DecoratorHook::sscegwueamckwmcy("\167\157\x6f\143\157\155\155\145\x72\x63\x65\x5f\x70\x72\157\x64\x75\143\164\x5f\163\141\x6c\145\137\160\162\x69\143\145", $eyuymeqcioasuyyi, $product);
        goto cgiioksocuikciqu;
        kwwqiuaycwkcigqq:
        if (method_exists($product, "\147\145\x74\x5f\163\x61\x6c\x65\137\160\162\151\x63\145")) {
            goto sigcqyomcgiyamkq;
        }
        goto cgsygucccwyayksw;
        cgiioksocuikciqu:
        kgykiwcggygyekgc:
        goto kucuomkwkigoaaoi;
        cseuscicwscieqaa:
        $product = self::aqasygcsqysmmyke($product);
        goto gccusiaomowsyeqk;
        kauocquekqgswwoe:
        eiimgesccmkgusys:
        goto ewkmiiygeqessaue;
        wimquiyiyyakiyqo:
        $aumscagymwyyicag = '';
        goto cseuscicwscieqaa;
        cgsygucccwyayksw:
        $eyuymeqcioasuyyi = $product->sale_price;
        goto kkskwicmigikmwuk;
        csmqycguwyiekmwq:
        $eyuymeqcioasuyyi = $product->get_sale_price($mgkceomocowocqyo);
        goto kauocquekqgswwoe;
        kucuomkwkigoaaoi:
        return $aumscagymwyyicag;
        goto aqimsokikskmeukc;
        makucowmowkkooyy:
        sigcqyomcgiyamkq:
        goto csmqycguwyiekmwq;
        aqimsokikskmeukc:
    }
    
    public static function aqwquwewocyewasw() : bool
    {
        goto kqaqeisqomwwcasq;
        qyoyoscsokwicwcm:
        if (!($woocommerce && method_exists($woocommerce, "\151\163\x5f\162\145\x73\x74\137\141\x70\151\x5f\162\145\x71\x75\x65\163\x74"))) {
            goto igmocmyuiauyaaky;
        }
        goto cekucgakuqaicscm;
        siawmiiggusigmks:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto qyoyoscsokwicwcm;
        kqaqeisqomwwcasq:
        $uwqkkwmiiumuukoa = false;
        goto siawmiiggusigmks;
        awgckickkikmwgoe:
        igmocmyuiauyaaky:
        goto ikuecasooegqekwi;
        cekucgakuqaicscm:
        $uwqkkwmiiumuukoa = $woocommerce->is_rest_api_request();
        goto awgckickkikmwgoe;
        ikuecasooegqekwi:
        return $uwqkkwmiiumuukoa;
        goto auyuoiygayksuuua;
        auyuoiygayksuuua:
    }
    
    public static function uceecgsoicggikeu() : ?WC_Cart
    {
        goto eikgggsiaicqiqag;
        ayikyecyysisuioq:
        if (!$woocommerce) {
            goto ogkwaimcumgaueem;
        }
        goto kmqcsyeeiyqwiusw;
        kmqcsyeeiyqwiusw:
        $wwcysoksoogyacog = $woocommerce->cart;
        goto gmymykusaimcgayu;
        gmymykusaimcgayu:
        ogkwaimcumgaueem:
        goto pewociqgeseqykos;
        pewociqgeseqykos:
        return $wwcysoksoogyacog;
        goto moqccissukkoumwo;
        eikgggsiaicqiqag:
        $wwcysoksoogyacog = null;
        goto ackemimmseeuauek;
        ackemimmseeuauek:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto ayikyecyysisuioq;
        moqccissukkoumwo:
    }
    
    public static function aoqkwiysueqqwigk() : ?string
    {
        goto ucmwwiwcaqesyqaw;
        ucmwwiwcaqesyqaw:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto iqmqycmwemkkugmw;
        iqmqycmwemkkugmw:
        if (function_exists("\x77\x63\137\x67\x65\x74\x5f\x63\x68\145\x63\x6b\157\x75\164\137\x75\162\x6c")) {
            goto eoyokykwkikgaaww;
        }
        goto mwcqoqsgsoiacuqu;
        mwcqoqsgsoiacuqu:
        return $woocommerce->cart->get_checkout_url();
        goto sagukwqksqiukyeq;
        oassuwsweqqyooss:
        eoyokykwkikgaaww:
        goto osucouyseikugqwm;
        sagukwqksqiukyeq:
        goto ouesqgosuiesgwas;
        goto oassuwsweqqyooss;
        kikgmuyaiiicugcg:
        ouesqgosuiesgwas:
        goto qyyioseuoicymucm;
        osucouyseikugqwm:
        return wc_get_checkout_url();
        goto kikgmuyaiiicugcg;
        qyyioseuoicymucm:
    }
    
    public static function kccgkwigyyiugcco() : bool
    {
        return "\171\145\x73" === self::giiuwsmyumqwwiyq("\145\156\141\142\x6c\145\x5f\x6d\171\141\143\143\157\x75\x6e\x74\137\162\x65\147\x69\163\164\162\x61\164\x69\157\156");
    }
    
    public static function yaaucgakecuykawk() : bool
    {
        global $woocommerce_loop;
        return DecoratorWoocommerce::kmymkocwcawgeccm() && isset($woocommerce_loop["\156\141\155\x65"]) && in_array($woocommerce_loop["\156\141\x6d\x65"], ["\x75\160\40\x2d\x20\x73\145\x6c\154\163"]);
    }
    
    public static function ogkieiokqueakmyc() : bool
    {
        global $woocommerce_loop;
        return DecoratorWoocommerce::kmymkocwcawgeccm() && isset($woocommerce_loop["\156\141\x6d\145"]) && in_array($woocommerce_loop["\156\x61\x6d\x65"], ["\x72\x65\154\x61\x74\x65\x64"]);
    }
    
    public static function omwkqcuwceweymcc($product = null)
    {
        goto uwkusimiysaesysu;
        agcecaceyeicacew:
        $aokagokqyuysuksm = $product->get_id();
        goto qeyyusmwmygyssis;
        owwkeimwommeqeuk:
        $aokagokqyuysuksm = $product;
        goto ouyaoosmgkcycecy;
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
        ouyaoosmgkcycecy:
        if (!is_a($product, "\127\x43\x5f\x50\x72\x6f\144\165\143\164")) {
            goto kiwiacqeekiyqqum;
        }
        goto agcecaceyeicacew;
        qeyyusmwmygyssis:
        kiwiacqeekiyqqum:
        goto ekiaooogkcaiqmku;
        saoicecaigamyumi:
        $product = self::aqasygcsqysmmyke(ManipulatePost::mwikyscisascoeea());
        goto wicgcmsymyamgkqo;
        gcgguqeygkiuseei:
    }
    
    public static function ageqswwkkqywckco($ywmkwiwkosakssii = []) : array
    {
        goto acykkosiggykiqae;
        gguqqicieewmyqak:
        kgkycyakimoowckw:
        goto egqwmisqumyygeaw;
        acykkosiggykiqae:
        $ywmkwiwkosakssii["\146\151\x65\154\x64\x73"] = "\151\144\163";
        goto moyeqcaaoumugqga;
        moyeqcaaoumugqga:
        $oysoyeaucuawyaky = ManipulatePost::ciugwooasaqcywas("\x70\162\x6f\144\165\143\164", $ywmkwiwkosakssii);
        goto ekmowewoceagouse;
        ekmowewoceagouse:
        $oksqskmgoqiqciis = [];
        goto asmqyacukagmsmog;
        iiaqqsyysmuiuqgk:
        foreach ($oysoyeaucuawyaky as $aokagokqyuysuksm) {
            goto qmwgkkusoumsaymy;
            qmwgkkusoumsaymy:
            $product = self::aqasygcsqysmmyke($aokagokqyuysuksm);
            goto iuasisokiwkkgsig;
            qouiaaqwcueugsyg:
            eqmmisowcsogsmmi:
            goto uqioouaicscwyeei;
            kcwmuwimsuqeeika:
            yywwamymqqweegma:
            goto qouiaaqwcueugsyg;
            wygeoqscyoqegsim:
            $oksqskmgoqiqciis[$aokagokqyuysuksm] = $product;
            goto kcwmuwimsuqeeika;
            iuasisokiwkkgsig:
            if (!$product) {
                goto yywwamymqqweegma;
            }
            goto wygeoqscyoqegsim;
            uqioouaicscwyeei:
        }
        goto gguqqicieewmyqak;
        asmqyacukagmsmog:
        if (!is_array($oysoyeaucuawyaky)) {
            goto sygcsssigqkuemcu;
        }
        goto iiaqqsyysmuiuqgk;
        egqwmisqumyygeaw:
        sygcsssigqkuemcu:
        goto eqswioyysgiegmkw;
        eqswioyysgiegmkw:
        return $oksqskmgoqiqciis;
        goto ecgigaamcwiqiukk;
        ecgigaamcwiqiukk:
    }
    
    public static function weqwusgaqsmseiyq() : array
    {
        return ["\151\155\x61\147\x65" => esc_html__("\111\155\x61\147\145", PR__CMN__FOUNDATION), "\x70\x72\x69\143\x65" => esc_html__("\120\162\151\143\x65", PR__CMN__FOUNDATION), "\x61\144\144\x2d\x74\157\55\143\141\x72\x74" => esc_html__("\101\144\x64\x20\x74\157\x20\x63\141\x72\x74", PR__CMN__FOUNDATION), "\x64\x65\163\x63\162\x69\x70\x74\151\x6f\156" => esc_html__("\x44\145\163\143\x72\151\x70\x74\151\157\x6e", PR__CMN__FOUNDATION), "\163\x6b\165" => esc_html__("\x53\153\165", PR__CMN__FOUNDATION), "\x73\164\x6f\x63\153" => esc_html__("\x41\x76\141\151\x6c\141\x62\151\154\151\x74\x79", PR__CMN__FOUNDATION), "\167\145\x69\x67\x68\164" => esc_html__("\127\x65\151\147\150\164", PR__CMN__FOUNDATION), "\144\151\155\145\156\163\151\x6f\156\163" => esc_html__("\104\x69\x6d\x65\x6e\x73\x69\157\156\x73", PR__CMN__FOUNDATION)];
    }
    
    public static function gmowuaggkmgkseyo() : bool
    {
        return DecoratorQuery::qmssqeyayicowkgy("\160\162\157\x64\x75\x63\x74\137\143\x61\x74");
    }
    
    public static function ecaegsuskkkigkgc() : ?WC_Checkout
    {
        goto ywogweeguksciwcw;
        yaaygymiwgcucuee:
        wgieqooykcsmeemu:
        goto kuygeikysoqqqouy;
        ywogweeguksciwcw:
        $yogeuygiqackeiky = null;
        goto qaowiwsuoecmmkkw;
        qaowiwsuoecmmkkw:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto qkkcyimckwcmwoyg;
        soqwcqmyqkqyqawm:
        $yogeuygiqackeiky = $woocommerce->yogeuygiqackeiky();
        goto yaaygymiwgcucuee;
        qkkcyimckwcmwoyg:
        if (!$woocommerce) {
            goto wgieqooykcsmeemu;
        }
        goto soqwcqmyqkqyqawm;
        kuygeikysoqqqouy:
        return $yogeuygiqackeiky;
        goto gemiusgkmeaykywq;
        gemiusgkmeaykywq:
    }
    
    public static function giyscymwkesykqsg($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie)
    {
        self::cmussoegoauyyguw("\163\145\164", $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie);
    }
    
    public static function qusqewgmqyucyooc($product, $ikgwqyuyckaewsow)
    {
        goto kqkckwwigeyywyik;
        msygsomkaywgokuq:
        $product->fields = $qqswgiawgeaeoecu;
        goto vwwckgewsegagiqm;
        kqkckwwigeyywyik:
        $product = self::aqasygcsqysmmyke($product);
        goto ikoqcwgayswaisqo;
        kascgoogiymmugcy:
        $qqswgiawgeaeoecu = [];
        goto yciammygksiessww;
        qmkkgkcemceygaou:
        omogkekcmgcmgaks:
        goto mqmwceouegaaucoi;
        kuukuccioawuoiea:
        if (!$qqswgiawgeaeoecu) {
            goto qagmacuwmywoisyq;
        }
        goto msygsomkaywgokuq;
        mqmwceouegaaucoi:
        return $product;
        goto wgiewcmyikiwsasu;
        vwwckgewsegagiqm:
        qagmacuwmywoisyq:
        goto qmkkgkcemceygaou;
        smucwoowmswcmqiq:
        
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus => $ymqmyyeuycgmigyo) {
            goto wemcucimscmkccee;
            giikseaiieuqkccg:
            ueygyquuioiuckmw:
            goto cqcoykgagkcckiyi;
            wemcucimscmkccee:
            switch ($aiowsaccomcoikus) {
                case "\x74\x69\164\x6c\x65":
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $product->get_title();
                    goto ueygyquuioiuckmw;
                case "\160\162\x69\143\145":
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $product->get_price_html();
                    goto ueygyquuioiuckmw;
                case "\151\x6d\141\x67\x65":
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = intval(ManipulatePost::wsiiswmaagmyiaiw($aokagokqyuysuksm));
                    goto ueygyquuioiuckmw;
                case "\x64\145\163\x63\162\151\x70\164\x69\x6f\x6e":
                    goto gqeosgkaqwoooomg;
                    gqeosgkaqwoooomg:
                    $ukwokcuqauuosmoo = DecoratorHook::sscegwueamckwmcy("\x77\x6f\157\x63\157\155\155\145\x72\x63\x65\137\163\x68\x6f\162\x74\137\144\x65\x73\x63\x72\151\160\164\x69\x6f\x6e", $product->get_short_description());
                    goto ceyiiqgekmueswas;
                    csiumocowgwwkseu:
                    goto ueygyquuioiuckmw;
                    goto ceooqwocwgyaosca;
                    ceyiiqgekmueswas:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $ukwokcuqauuosmoo;
                    goto csiumocowgwwkseu;
                    ceooqwocwgyaosca:
                case "\163\x74\157\x63\153":
                    goto skuaykemeskiciyq;
                    kmcmmgeegciwucsu:
                    eggeemqkkcgiwkgm:
                    goto momkymyyokcqmiwc;
                    momkymyyokcqmiwc:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $imooqykauqyyswsw["\x61\x76\141\151\154\141\x62\x69\x6c\151\x74\x79"];
                    goto oiaqgumiwqckysqq;
                    skuaykemeskiciyq:
                    $imooqykauqyyswsw = $product->get_availability();
                    goto socyamqieqoiusuo;
                    oiaqgumiwqckysqq:
                    goto ueygyquuioiuckmw;
                    goto yseqooouywimkcsi;
                    ggwecgmoiwsqaiem:
                    $imooqykauqyyswsw["\141\x76\141\x69\x6c\x61\142\x69\154\151\x74\171"] = __("\111\x6e\40\163\164\x6f\143\153", PR__CMN__FOUNDATION);
                    goto kmcmmgeegciwucsu;
                    socyamqieqoiusuo:
                    if (!empty($imooqykauqyyswsw["\x61\166\x61\151\x6c\x61\142\151\x6c\151\164\x79"])) {
                        goto eggeemqkkcgiwkgm;
                    }
                    goto ggwecgmoiwsqaiem;
                    yseqooouywimkcsi:
                case "\x73\x6b\x75":
                    goto rgeqksseqwssoqeq;
                    rmamqouaqyeogmmm:
                    !$mmkkmgusieqaqkki && ($mmkkmgusieqaqkki = "\x2d");
                    goto ukoqocmokmwgkggo;
                    rgeqksseqwssoqeq:
                    $mmkkmgusieqaqkki = $product->get_sku();
                    goto rmamqouaqyeogmmm;
                    ukoqocmokmwgkggo:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $mmkkmgusieqaqkki;
                    goto scquwmwgssauikwq;
                    scquwmwgssauikwq:
                    goto ueygyquuioiuckmw;
                    goto imycougggwgmwque;
                    imycougggwgmwque:
                case "\x77\145\151\147\x68\164":
                    goto igigquuegyegmyas;
                    kwkaekkyamsuosic:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $mycwwoyokwokowmo;
                    goto qmmiuscmmiciksuq;
                    eiiygsskgeocucse:
                    igwwywsaqumsmakc:
                    goto scqikcmqmsuaccuk;
                    ucasooakcusgmasq:
                    $mycwwoyokwokowmo = "\x2d";
                    goto smwcciswieyocowa;
                    qmmiuscmmiciksuq:
                    goto ueygyquuioiuckmw;
                    goto wysqeaawgmsgywwe;
                    scqikcmqmsuaccuk:
                    $mycwwoyokwokowmo = wc_format_localized_decimal($mycwwoyokwokowmo) . "\x20" . esc_attr(DecoratorOption::get("\x77\157\157\x63\157\155\x6d\145\x72\x63\x65\137\x77\145\151\x67\150\164\x5f\x75\156\151\x74"));
                    goto wsksyesmkwcseqmi;
                    igigquuegyegmyas:
                    if ($mycwwoyokwokowmo = $product->get_weight()) {
                        goto igwwywsaqumsmakc;
                    }
                    goto ucasooakcusgmasq;
                    wsksyesmkwcseqmi:
                    eguqeogcowkuqmes:
                    goto kwkaekkyamsuosic;
                    smwcciswieyocowa:
                    goto eguqeogcowkuqmes;
                    goto eiiygsskgeocucse;
                    wysqeaawgmsgywwe:
                case "\x64\x69\x6d\x65\x6e\x73\151\x6f\x6e\163":
                    goto msmyekocyqaeiqui;
                    qyqeeqeasassiyqg:
                    !$qaiwqwwemmyyqosy && ($qaiwqwwemmyyqosy = "\x2d");
                    goto qiwwswgwkcekequo;
                    qiwwswgwkcekequo:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $qaiwqwwemmyyqosy;
                    goto ykgaewsgaccoewmy;
                    ykgaewsgaccoewmy:
                    goto ueygyquuioiuckmw;
                    goto goagoaikyyyaisgy;
                    msmyekocyqaeiqui:
                    $qaiwqwwemmyyqosy = function_exists("\x77\x63\x5f\x66\157\x72\x6d\141\164\x5f\144\151\155\145\x6e\x73\151\x6f\x6e\163") ? wc_format_dimensions($product->get_dimensions(false)) : $product->get_dimensions();
                    goto qyqeeqeasassiyqg;
                    goagoaikyyyaisgy:
                default:
                    goto igymmkeosawsmquy;
                    smiosccsmkciiaei:
                    $eqgoocgaqwqcimie = $product->get_attribute($aiowsaccomcoikus);
                    goto ugsimmgccyugoqka;
                    wskwqauamemaueue:
                    goto mqaamgcyimqcgyyu;
                    goto rmoogiakmggyosaw;
                    wyomsacikcaawgow:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = implode("\x2c\40", $qqswgiawgeaeoecu[$aiowsaccomcoikus]);
                    goto kciguwegyomuqawq;
                    kciguwegyomuqawq:
                    mqaamgcyimqcgyyu:
                    goto ymaeysgwkcwwiqmu;
                    ugsimmgccyugoqka:
                    if (!is_array($eqgoocgaqwqcimie)) {
                        goto kiqioykgyqakwmsc;
                    }
                    goto gmgysasgwkiakiic;
                    rayoswqmyqiuiics:
                    kiqioykgyqakwmsc:
                    goto umeiygeyqcouqcsk;
                    rmoogiakmggyosaw:
                    ouqsaimcqcgaemws:
                    goto ggiyqoigmmgiamyo;
                    gmgysasgwkiakiic:
                    $eqgoocgaqwqcimie = implode("\x2c\x20", $eqgoocgaqwqcimie);
                    goto rayoswqmyqiuiics;
                    kukmwwkmmiwaqmai:
                    kisqeasymciqmcma:
                    goto wyomsacikcaawgow;
                    iaaaeesqwkogwook:
                    if (empty($uyuaosigqymaqsaa)) {
                        goto kisqeasymciqmcma;
                    }
                    goto uuemseeewwgcoqqc;
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
                    ocowsksosgwgogmy:
                    qcwmwsussmygiowm:
                    goto kukmwwkmmiwaqmai;
                    ymaeysgwkcwwiqmu:
                    goto ueygyquuioiuckmw;
                    goto ywcksgacokiyuuks;
                    cocwkumuyaacwuie:
                    $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($aokagokqyuysuksm, $aiowsaccomcoikus);
                    goto iaaaeesqwkogwook;
                    igymmkeosawsmquy:
                    if (DecoratorTaxonomy::myagqecycsaiyqsk($aiowsaccomcoikus)) {
                        goto ouqsaimcqcgaemws;
                    }
                    goto smiosccsmkciiaei;
                    umeiygeyqcouqcsk:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $eqgoocgaqwqcimie;
                    goto wskwqauamemaueue;
                    ywcksgacokiyuuks:
            }
            goto wuiwikwsqoyseayq;
            wuiwikwsqoyseayq:
            igsgeycmgyyiqyaw:
            goto giikseaiieuqkccg;
            cqcoykgagkcckiyi:
            gqgiygyaagieswyg:
            goto uukiykgkqyekggay;
            uukiykgkqyekggay:
        }
        goto mmkuokwocceayask;
        yciammygksiessww:
        $aokagokqyuysuksm = $product->get_id();
        goto smucwoowmswcmqiq;
        mmkuokwocceayask:
        akgusigiuuowiemm:
        goto kuukuccioawuoiea;
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
        xsucwemqaekogyqi:
        $uomewyckeuqoqocu = $product->get_available_variation($isweyuoisomqyaag);
        goto msiwaicoesyagumk;
        ssmesescgegmqegs:
        $uomewyckeuqoqocu = [];
        goto iwwcyaoguoweqqmi;
        msiwaicoesyagumk:
        cqguwaockaiuioqo:
        goto cmomkawiiikmcccq;
        cmomkawiiikmcccq:
        return $uomewyckeuqoqocu;
        goto ksosaiwckkacoeww;
        iwwcyaoguoweqqmi:
        $product = self::aqasygcsqysmmyke($product);
        goto okyoymqacqaimooo;
        okyoymqacqaimooo:
        if (!($isweyuoisomqyaag && $product instanceof WC_Product_Variable)) {
            goto cqguwaockaiuioqo;
        }
        goto xsucwemqaekogyqi;
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
        $ywmkwiwkosakssii["\x6d\145\x74\141\x5f\161\x75\x65\x72\x79"] = ["\155\145\x74\x61\137\153\145\x79" => $uusmaiomayssaecw, "\x6d\x65\x74\x61\137\x76\141\x6c\x75\x65" => $eqgoocgaqwqcimie, "\x6d\x65\x74\x61\137\143\x6f\155\x70\141\162\x65" => "\x4c\x49\x4b\105"];
        return DecoratorWoocommerce::ageqswwkkqywckco($ywmkwiwkosakssii);
    }
    
    public static function gkokioeusiomuwee($product, $cqcsaaswaciweiie = [], $aqcaekiaqgiaiwiu = true)
    {
        goto iwwawgsoqcciekeq;
        yqemqgiwcuoowges:
        foreach ($siquossayskcwkea as $ymkomoccmymcoiea) {
            goto mimgyeoccsuwmomg;
            swuockeicagsysku:
            foreach ($cqcsaaswaciweiie as $tsuauommsquiesmk => $eqgoocgaqwqcimie) {
                goto gigyyqgmkceykwam;
                kwuayueukssiusyo:
                if (!(is_array($uiymkeeaukcyqqik) && !in_array($eqgoocgaqwqcimie, $uiymkeeaukcyqqik) && $uiymkeeaukcyqqik != $eqgoocgaqwqcimie)) {
                    goto umwsiiqcymkwcasg;
                }
                goto ksyaeigosimeymmu;
                ywckcmesqeiougoy:
                kgwcgkqqguiwgmmm:
                goto uqcqusigauwqaucm;
                amwucayokoyowcki:
                goto oiioqgoqyykuocou;
                goto igkykqemaiuckkqm;
                igkykqemaiuckkqm:
                umwsiiqcymkwcasg:
                goto ywckcmesqeiougoy;
                gigyyqgmkceykwam:
                $uiymkeeaukcyqqik = ManipulateArray::get($mmykcgusskuuuace, $tsuauommsquiesmk, false);
                goto kwuayueukssiusyo;
                ksyaeigosimeymmu:
                $kskgqoywkoawosao = false;
                goto amwucayokoyowcki;
                uqcqusigauwqaucm:
            }
            goto cwcqcsgwwkokqgoy;
            uycysmimgmsawemy:
            sawkewuuqsaekcsy:
            goto ggiswsmgccuackao;
            mqweissqoiqukwuc:
            oswkqueiycsgwwqc:
            goto uycysmimgmsawemy;
            cssokcmoicccseqa:
            if (!$kskgqoywkoawosao) {
                goto oswkqueiycsgwwqc;
            }
            goto owosmsmuaueegaas;
            ucuyyuummcgmmcoo:
            usamasqcwkcaaeyo:
            goto cssokcmoicccseqa;
            megqkwsyeisgoiuq:
            $kskgqoywkoawosao = true;
            goto qagsccmgemwyowgq;
            okcoqaemsekeyqgi:
            if (!$aqcaekiaqgiaiwiu) {
                goto gcoaosuecgyuuiyq;
            }
            goto wgakiauyywueqsma;
            owosmsmuaueegaas:
            $ymqmyyeuycgmigyo = $ymkomoccmymcoiea->get_name();
            goto okcoqaemsekeyqgi;
            mimgyeoccsuwmomg:
            $mmykcgusskuuuace = self::cswwmqwaucwuqcaq($product, $ymkomoccmymcoiea);
            goto megqkwsyeisgoiuq;
            cwcqcsgwwkokqgoy:
            oiioqgoqyykuocou:
            goto ucuyyuummcgmmcoo;
            yoicqeqousygweyk:
            gcoaosuecgyuuiyq:
            goto gkgiqeqokmyaosyi;
            wgakiauyywueqsma:
            $ymqmyyeuycgmigyo = DecoratorWoocommerce::gmeusukogwcamcyc($ymqmyyeuycgmigyo);
            goto yoicqeqousygweyk;
            qagsccmgemwyowgq:
            if (!(is_array($cqcsaaswaciweiie) && $cqcsaaswaciweiie)) {
                goto usamasqcwkcaaeyo;
            }
            goto swuockeicagsysku;
            gkgiqeqokmyaosyi:
            $uomewyckeuqoqocu[$ymqmyyeuycgmigyo] = $mmykcgusskuuuace;
            goto mqweissqoiqukwuc;
            ggiswsmgccuackao:
        }
        goto eawiyomugeiugoca;
        suuwwusyekuwqgwi:
        owqukoyoaogmwioi:
        goto cccusomswoycqgye;
        sgaamousiakskkko:
        $product = self::aqasygcsqysmmyke($product);
        goto mwqqkaiwyugqakeq;
        mwqqkaiwyugqakeq:
        
        $qaiwqwwemmyyqosy = DecoratorHook::sscegwueamckwmcy("\167\x63\137\160\162\157\144\x75\x63\164\x5f\145\156\141\142\154\x65\x5f\x64\x69\155\x65\x6e\163\x69\x6f\156\x73\x5f\x64\x69\x73\x70\154\x61\171", $product->has_weight() || $product->has_dimensions());
        goto yikaoaeoqsgieqoq;
        woweqwuwmegoecgu:
        $uomewyckeuqoqocu["\167\145\151\147\x68\x74"] = ["\x6c\141\x62\145\x6c" => __("\127\145\151\x67\150\x74", "\x77\x6f\x6f\x63\157\155\x6d\x65\162\143\x65"), "\166\x61\154\165\145" => wc_format_weight($product->get_weight())];
        goto csmosoqqwicqwuqg;
        iwwawgsoqcciekeq:
        $uomewyckeuqoqocu = [];
        goto sgaamousiakskkko;
        ymqsaggkkwkoomgc:
        $uomewyckeuqoqocu["\144\x69\x6d\x65\x6e\163\151\x6f\x6e\x73"] = ["\x6c\141\142\x65\154" => __("\x44\x69\x6d\145\156\163\x69\x6f\156\163", "\167\157\x6f\143\157\x6d\155\145\162\x63\x65"), "\166\x61\x6c\165\x65" => wc_format_dimensions($product->get_dimensions(false))];
        goto suuwwusyekuwqgwi;
        osmogyiiwqqwieoe:
        if (!($qaiwqwwemmyyqosy && $product->has_dimensions())) {
            goto owqukoyoaogmwioi;
        }
        goto ymqsaggkkwkoomgc;
        eawiyomugeiugoca:
        aaoeckeaamycqkam:
        goto yokquaecwougwgme;
        csmosoqqwicqwuqg:
        ksmgqwcssgmuykqm:
        goto osmogyiiwqqwieoe;
        yokquaecwougwgme:
        return DecoratorHook::sscegwueamckwmcy("\x77\x6f\x6f\143\157\155\155\x65\162\143\145\137\x64\151\163\x70\x6c\141\x79\x5f\x70\x72\x6f\144\x75\x63\164\137\141\164\x74\162\x69\x62\165\164\x65\163", $uomewyckeuqoqocu, $product);
        goto gqmqqaumkqkyyuom;
        cccusomswoycqgye:
        
        $siquossayskcwkea = array_filter($product->get_attributes(), "\x77\x63\x5f\141\164\164\x72\x69\x62\165\x74\145\x73\137\141\162\x72\141\x79\137\x66\151\x6c\164\145\162\x5f\x76\x69\x73\x69\x62\x6c\x65");
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
        qmgqakuqmkigkgcw:
        return $seyqqsmuaiegkeeq;
        goto oimwsegacayecyko;
        swwmuqsewiaswasq:
        $seyqqsmuaiegkeeq = DecoratorTaxonomy::qgckgkwskmsomoqs("\160\x72\x6f\x64\x75\x63\x74", $aqykuigiuwmmcieu);
        goto oiecwmgwkgscuaom;
        uccuwggkcciaascm:
        kssuoaucoagqicew:
        goto qmgqakuqmkigkgcw;
        oiekocisyuaicoey:
        if (!empty($seyqqsmuaiegkeeq)) {
            goto kssuoaucoagqicew;
        }
        goto swwmuqsewiaswasq;
        egaqcmmgioyoskak:
        static $seyqqsmuaiegkeeq = [];
        goto oiekocisyuaicoey;
        oiecwmgwkgscuaom:
        ManipulateArray::unset($seyqqsmuaiegkeeq, ["\x70\x72\x6f\x64\x75\143\164\137\163\150\x69\x70\160\x69\x6e\147\137\143\154\141\x73\163", "\x70\x72\157\144\165\x63\x74\x5f\166\151\x73\x69\x62\151\154\x69\x74\171", "\160\x72\x6f\x64\x75\143\x74\137\164\171\160\145"]);
        goto uccuwggkcciaascm;
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
        $oqseeekuqisekiwy = array_map("\145\163\143\137\x73\161\x6c", DecoratorWoocommerce::ouqoeawmueswmksm());
        goto qqeycioeqswikseq;
        swasewcuckegeuuy:
        global $wpdb;
        goto wqeaomqyumqiocka;
        quookucgqymiqocy:
        $product = self::omwkqcuwceweymcc($product);
        goto gaoeaaeausmqguee;
        qqeycioeqswikseq:
        return $wpdb->get_col("\xa\11\11\x9\123\105\114\105\x43\x54\x20\x6f\x69\x73\56\157\x72\x64\x65\162\x5f\151\144\xa\x9\x9\11\106\x52\117\x4d\x20{$yuwymayicwwqiske}\167\x6f\x6f\143\x6f\x6d\x6d\x65\162\x63\145\x5f\x6f\162\x64\145\x72\137\151\x74\145\155\x73\40\x61\x73\40\x6f\x69\163\xa\11\x9\11\x4c\x45\106\124\x20\x4a\x4f\x49\116\40{$yuwymayicwwqiske}\167\157\x6f\143\157\x6d\x6d\145\162\143\145\137\157\162\144\x65\162\137\x69\164\x65\155\x6d\x65\x74\141\x20\x61\x73\40\157\151\155\40\x4f\116\x20\x6f\151\163\56\157\162\144\145\x72\137\151\164\x65\155\x5f\x69\144\40\75\x20\x6f\x69\x6d\x2e\x6f\x72\x64\145\x72\x5f\151\164\145\155\x5f\151\x64\xa\11\x9\x9\114\105\106\x54\x20\112\117\111\x4e\40{$wpdb->posts}\x20\101\123\40\160\x20\117\x4e\x20\x6f\151\x73\56\x6f\162\x64\x65\162\x5f\x69\144\40\75\40\x70\56\x49\x44\xa\11\11\x9\x4c\x45\x46\124\40\x4a\117\x49\x4e\40{$wpdb->postmeta}\x20\101\123\x20\x70\155\40\x4f\116\40\157\x69\163\56\x6f\162\144\x65\x72\137\151\x64\x20\75\x20\160\x6d\56\x6d\x65\x74\141\137\x69\144\xa\x9\x9\x9\x57\110\x45\122\105\40\x70\x2e\x70\157\163\164\137\x74\171\160\x65\40\75\40\47\x73\x68\x6f\x70\137\x6f\162\x64\x65\x72\47\12\x9\11\x9\x41\116\x44\x20\160\x2e\160\x6f\163\164\137\x73\164\141\164\x75\x73\x20\x49\x4e\40\50\x20\47\167\143\x2d" . implode("\x27\54\40\x27\x77\143\55", $oqseeekuqisekiwy) . "\47\40\51\xa\x9\x9\x9\101\x4e\104\x20\x6f\151\163\56\x6f\x72\144\145\162\x5f\151\x74\145\155\137\164\x79\x70\145\x20\75\x20\47\x6c\151\156\x65\x5f\x69\164\145\155\x27\12\11\x9\x9\101\116\x44\x20\x6f\x69\x6d\x2e\x6d\x65\x74\141\x5f\153\145\171\40\75\x20\47\137\160\x72\x6f\144\x75\143\x74\137\151\144\47\xa\11\x9\11\101\116\x44\x20\x6f\x69\x6d\x2e\x6d\145\x74\141\x5f\166\x61\x6c\165\145\x20\75\40\x27{$product}\47\12\x9\x9\11\x41\x4e\x44\40\160\155\56\155\x65\x74\141\x5f\x6b\145\171\x20\x3d\40\x27\137\x63\165\x73\x74\x6f\155\x65\x72\x5f\x75\163\145\162\47\xa\x9\11\x9\x41\116\104\x20\x70\155\x2e\x6d\x65\x74\x61\137\166\x61\154\165\145\40\75\40\x27{$scwmkmciyywokcug}\47\12\40\40\40\x20\11");
        goto kgwgksykmqweowgi;
        wqeaomqyumqiocka:
        $yuwymayicwwqiske = $wpdb->prefix;
        goto quookucgqymiqocy;
        kgwgksykmqweowgi:
    }
    
    public static function giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee = null, $yuwymayicwwqiske = "\x77\157\x6f\143\x6f\x6d\155\145\162\x63\145\137")
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
        aeoicygsgoeeqguk:
        return (array) DecoratorHook::sscegwueamckwmcy("\x77\157\x6f\x63\x6f\x6d\155\x65\162\143\145\x5f\141\x74\x74\162\151\x62\x75\164\145\137\157\165\x74\x70\x75\164", $mmykcgusskuuuace, $ymkomoccmymcoiea, $product);
        goto aqqgkiieakuwceea;
        ssooqmscuqwmcoeu:
        foreach ($qqswgiawgeaeoecu as &$eqgoocgaqwqcimie) {
            $eqgoocgaqwqcimie = make_clickable(esc_html($eqgoocgaqwqcimie));
            oomiawgcsyaaqaao:
        }
        goto kamkksumiggskuay;
        kamkksumiggskuay:
        ecuosiaqyaoqckao:
        goto iwqasgooqqmcyqmy;
        keuikgoukmwokcoa:
        wokmesqciaaskwoe:
        goto yqccqmsucoukqkmw;
        iwqasgooqqmcyqmy:
        goto qiqmamemmguaieiw;
        goto keuikgoukmwokcoa;
        yqccqmsucoukqkmw:
        $kesssewsiegssiya = $ymkomoccmymcoiea->get_taxonomy_object();
        goto qwykccyeiymiomyi;
        kgecwaiwqeacyqge:
        iwwayiuyaecikeku:
        goto wsasggmqwyisgoiq;
        owauaaeeaeoqgiii:
        $qqswgiawgeaeoecu = [];
        goto eymiaowquwyiggie;
        qwykccyeiymiomyi:
        $uyuaosigqymaqsaa = self::mywkcmciykgikmyc($product, $ymkomoccmymcoiea->get_name(), ["\x66\x69\x65\154\144\163" => "\141\154\154"]);
        goto asmkyaumussymycs;
        wsasggmqwyisgoiq:
        qiqmamemmguaieiw:
        goto ykcmokmsimckuego;
        ykcmokmsimckuego:
        $mmykcgusskuuuace = ["\x76\141\x6c\x75\145" => DecoratorHook::sscegwueamckwmcy("\x77\157\157\x63\157\155\155\145\x72\x63\x65\137\141\x74\164\x72\151\x62\x75\x74\x65", wptexturize(implode("\x2c\40", $qqswgiawgeaeoecu)), $ymkomoccmymcoiea, $qqswgiawgeaeoecu), "\x6c\x61\142\145\154" => DecoratorWoocommerce::qysciqmmoqsaqmqk($ymkomoccmymcoiea->get_name(), $product)];
        goto aeoicygsgoeeqguk;
        eymiaowquwyiggie:
        if ($ymkomoccmymcoiea->is_taxonomy()) {
            goto wokmesqciaaskwoe;
        }
        goto kgkameuwwcmaawwg;
        asmkyaumussymycs:
        foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
            goto wqcseagmwswqeqgu;
            eoikakegoqcywcui:
            goto wmkkqgiamggikgsi;
            goto ccmgkkiyameumyoi;
            ggoceeqkiqmqkiwg:
            wmkkqgiamggikgsi:
            goto qqoaguokgcoeieyi;
            qwsgukcwoomuuais:
            $qqswgiawgeaeoecu[] = $ymqmyyeuycgmigyo;
            goto eoikakegoqcywcui;
            qqoaguokgcoeieyi:
            cmicuicekiiowekc:
            goto skoaowmysckmmocc;
            wwuwumqemissswei:
            if ($kesssewsiegssiya->attribute_public) {
                goto eeuosekauyeiqoie;
            }
            goto qwsgukcwoomuuais;
            gsqmakgaqakuawue:
            $qqswgiawgeaeoecu[] = ManipulateHTML::uuccukgasskgimsq("\x61", ["\x68\x72\145\x66" => ManipulateTerm::qmgcisuuikgmqcsu(ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk), $ymkomoccmymcoiea->get_name()), "\x72\x65\154" => "\164\141\x67"], $ymqmyyeuycgmigyo);
            goto ggoceeqkiqmqkiwg;
            wqcseagmwswqeqgu:
            $ymqmyyeuycgmigyo = esc_html($iwewcwusemqaiggk->name);
            goto wwuwumqemissswei;
            ccmgkkiyameumyoi:
            eeuosekauyeiqoie:
            goto gsqmakgaqakuawue;
            skoaowmysckmmocc:
        }
        goto kgecwaiwqeacyqge;
        kgkameuwwcmaawwg:
        $qqswgiawgeaeoecu = $ymkomoccmymcoiea->get_options();
        goto ssooqmscuqwmcoeu;
        aqqgkiieakuwceea:
    }
    
    public static function cmussoegoauyyguw($aiamqeawckcsuaou, $ymqmyyeuycgmigyo = '', $eqgoocgaqwqcimie = '', $kekikiwsckuiyuyo = false)
    {
        goto qmusucqwswsqsgwc;
        amuoiqyswiesyyck:
        wewkyisikaywwcmu:
        goto ioimwcssyaqsuqma;
        oekkmwkqkuqwckui:
        unset($woocommerce->session->{$ymqmyyeuycgmigyo});
        goto wqiyuoiwqekmsues;
        ykqswiqaqaogkksc:
        goto osiwmoqisiiogawm;
        goto ogyguukmcmoqkqei;
        acsmysaakckkkkie:
        if ($aiamqeawckcsuaou == "\163\x65\x74") {
            goto cwqmuqiqouooguqm;
        }
        goto womskaaiqugkuggi;
        qmusucqwswsqsgwc:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto imwkaaqausgqquoo;
        ogyguukmcmoqkqei:
        cwqmuqiqouooguqm:
        goto wcuguimgckkocagq;
        qeycwoqakqucwscm:
        osiwmoqisiiogawm:
        goto oyaeggoyqusqqcyo;
        eawmqueomoausgog:
        vosacywygmcokgkw:
        goto ykqswiqaqaogkksc;
        oyaeggoyqusqqcyo:
        return $eqgoocgaqwqcimie;
        goto wgkecsowgumikqqm;
        womskaaiqugkuggi:
        if (!($aiamqeawckcsuaou == "\147\x65\x74")) {
            goto vosacywygmcokgkw;
        }
        goto yimasagkemgkoeqq;
        ioimwcssyaqsuqma:
        if (!$kekikiwsckuiyuyo) {
            goto gykoquuuowomucyq;
        }
        goto oekkmwkqkuqwckui;
        ukoqsuaqouuqkuig:
        goto ciamwmmiqcseaeuc;
        goto amocqywwugaccike;
        caoqqqweswimckec:
        $eqgoocgaqwqcimie = $cmussoegoauyyguw->{$ymqmyyeuycgmigyo};
        goto cumieyuwywwwsaqg;
        wqiyuoiwqekmsues:
        gykoquuuowomucyq:
        goto eawmqueomoausgog;
        esgwyeyackaweskk:
        cyycimgiyeqgssuy:
        goto qwamueuasumwowym;
        cumieyuwywwwsaqg:
        goto wewkyisikaywwcmu;
        goto esgwyeyackaweskk;
        cckmsweoqwaucgcs:
        $woocommerce->session->{$aiamqeawckcsuaou}($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie);
        goto youqqmmoywqeggeg;
        wcuguimgckkocagq:
        if (method_exists($cmussoegoauyyguw, $aiamqeawckcsuaou)) {
            goto okseeygkgkqkwsgw;
        }
        goto iiskacegeekeseky;
        imwkaaqausgqquoo:
        $cmussoegoauyyguw = $woocommerce->session;
        goto acsmysaakckkkkie;
        iiskacegeekeseky:
        $woocommerce->session->{$ymqmyyeuycgmigyo} = $eqgoocgaqwqcimie;
        goto ukoqsuaqouuqkuig;
        qwamueuasumwowym:
        $eqgoocgaqwqcimie = $cmussoegoauyyguw->{$aiamqeawckcsuaou}($ymqmyyeuycgmigyo);
        goto amuoiqyswiesyyck;
        yimasagkemgkoeqq:
        if (method_exists($cmussoegoauyyguw, $aiamqeawckcsuaou)) {
            goto cyycimgiyeqgssuy;
        }
        goto caoqqqweswimckec;
        youqqmmoywqeggeg:
        ciamwmmiqcseaeuc:
        goto qeycwoqakqucwscm;
        amocqywwugaccike:
        okseeygkgkqkwsgw:
        goto cckmsweoqwaucgcs;
        wgkecsowgumikqqm:
    }
    
    public static function ceusksoaisoswmia($umwqusowiqmyseom = null) : array
    {
        goto ngaquoioqeukmoyu;
        ngaquoioqeukmoyu:
        $oammesyieqmwuwyi = self::uakuwyoiooeqqiow();
        goto qcysusmwyoeoguki;
        qmwkauswsyowckua:
        return $oammesyieqmwuwyi;
        goto siequuwyyyusqeie;
        eicuumeiweosiaqy:
        $oammesyieqmwuwyi = $umwqusowiqmyseom->get_items();
        goto dwaiimguqaaikoso;
        uqiisswyoggsckqg:
        kuoqweoiooqosmoe:
        goto qmwkauswsyowckua;
        isqyiumsggacqmak:
        if (!$umwqusowiqmyseom) {
            goto gusamkkgwqmamcke;
        }
        goto eicuumeiweosiaqy;
        dwaiimguqaaikoso:
        gusamkkgwqmamcke:
        goto uqiisswyoggsckqg;
        mawoaecogwegmcoc:
        $umwqusowiqmyseom = self::mmmcswscsiecscwg($umwqusowiqmyseom);
        goto isqyiumsggacqmak;
        qcysusmwyoeoguki:
        if (!(!$oammesyieqmwuwyi && $umwqusowiqmyseom)) {
            goto kuoqweoiooqosmoe;
        }
        goto mawoaecogwegmcoc;
        siequuwyyyusqeie:
    }
    
    public static function uwyscmkeyeuqyukk($ywmkwiwkosakssii = []) : string
    {
        goto wuwaakyeqqeeogyy;
        wuwaakyeqqeeogyy:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x74\151\160" => '', self::NAME => '', self::LABEL => '', self::VALUE => '']);
        goto kakyqyqyweuaoqmg;
        igauaamasosqcyys:
        $wwgucssaecqekuek["\x63\x68\145\x63\x6b\x65\144"] = true;
        goto ecowowaocsooqkyo;
        ecgwcgmuemqagggm:
        if (!ManipulateArray::get($ywmkwiwkosakssii, self::VALUE, false)) {
            goto goamosigosumsmkq;
        }
        goto igauaamasosqcyys;
        kakyqyqyweuaoqmg:
        $wwgucssaecqekuek = ["\143\154\x61\x73\163" => "\x63\x68\145\x63\153\x62\x6f\170", self::TYPE => "\x63\150\x65\143\153\x62\x6f\x78", self::NAME => ManipulateArray::get($ywmkwiwkosakssii, self::NAME)];
        goto ecgwcgmuemqagggm;
        yuiimkuacqcecwgw:
        return ManipulateHTML::uuccukgasskgimsq("\x6c\141\142\x65\x6c", ["\143\x6c\141\x73\x73" => "\x74\151\160\163", "\x64\x61\x74\141\55\164\151\160" => ManipulateArray::get($ywmkwiwkosakssii, "\x74\151\x70")], [ManipulateArray::get($ywmkwiwkosakssii, self::LABEL), ManipulateHTML::qgsekwygcgawekeq("\151\156\x70\x75\164", $wwgucssaecqekuek)]);
        goto uwwqiicwuwkwqcmg;
        ecowowaocsooqkyo:
        goamosigosumsmkq:
        goto yuiimkuacqcecwgw;
        uwwqiicwuwkwqcmg:
    }
}
