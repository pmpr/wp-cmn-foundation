<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto cemsuwwwgiqiyigo;
        eiqiqqoyqcaiiwqo:
        foreach ($isweyuoisomqyaag as $ymqmyyeuycgmigyo => $igqsaukqcqscimok) {
            goto scqwymaqqacaugqa;
            kmayiocekggkoyso:
            if (!$kesssewsiegssiya) {
                goto wuogwyququiiecaa;
            }
            goto ayccewcmckaqowek;
            ayccewcmckaqowek:
            $sogksuscggsicmac[$ymqmyyeuycgmigyo] = ["\141\x74\164\162\x69\142\165\164\145" => $kesssewsiegssiya, "\164\x65\x72\155" => []];
            goto aaoywwqcimiwiywu;
            oeguggskkegamuoo:
            asoqwsaqqyuoioac:
            goto uimyekysswywuoyi;
            aaoywwqcimiwiywu:
            wuogwyququiiecaa:
            goto oeguggskkegamuoo;
            scqwymaqqacaugqa:
            $kesssewsiegssiya = ManipulateArray::get($seyqqsmuaiegkeeq, ManipulateString::wiecmkiugmyyqiqc("\x70\x61\137", '', $ymqmyyeuycgmigyo));
            goto kmayiocekggkoyso;
            uimyekysswywuoyi:
        }
        goto amescycuaoumygqc;
        iwecwgwiccuemkye:
        return $sogksuscggsicmac;
        goto qeoawooaykmyokuo;
        amescycuaoumygqc:
        gqqmmososkagcqco:
        goto iwecwgwiccuemkye;
        cemsuwwwgiqiyigo:
        $sogksuscggsicmac = [];
        goto owymcaeysicqacya;
        owymcaeysicqacya:
        $seyqqsmuaiegkeeq = DecoratorWoocommerce::mqsqiyqiceqasokq();
        goto eiqiqqoyqcaiiwqo;
        qeoawooaykmyokuo:
    }
    
    public static function kyycwccmaemgokwu($smwiiesyqsgyisos) : string
    {
        goto agiieggoecqiaoum;
        emyeissowqweyqec:
        
        return $smwiiesyqsgyisos->get_code();
        goto ueekmmegamoyagog;
        agiieggoecqiaoum:
        if ($smwiiesyqsgyisos instanceof WC_Coupon) {
            goto okyqqamccagawuoi;
        }
        goto ksgumesawyqswaoa;
        ieycaaisagswkaiy:
        okyqqamccagawuoi:
        goto emyeissowqweyqec;
        ksgumesawyqswaoa:
        $smwiiesyqsgyisos = new WC_Coupon($smwiiesyqsgyisos);
        goto ieycaaisagswkaiy;
        ueekmmegamoyagog:
    }
    
    public static function oeeuywgiaywkimek($smwiiesyqsgyisos)
    {
        goto gogyuwukcgmycsqw;
        uowaoiwemyccakim:
        return $smwiiesyqsgyisos;
        goto gukkaswwecmuoayo;
        gogyuwukcgmycsqw:
        $smwiiesyqsgyisos = new WC_Coupon($smwiiesyqsgyisos);
        goto mgscesskeauowgsu;
        qyyiiuuscqgeowya:
        qeayouqugioyieei:
        goto uowaoiwemyccakim;
        mgscesskeauowgsu:
        if (self::kyycwccmaemgokwu($smwiiesyqsgyisos)) {
            goto qeayouqugioyieei;
        }
        goto kyowegyokkesuugi;
        kyowegyokkesuugi:
        $smwiiesyqsgyisos = false;
        goto qyyiiuuscqgeowya;
        gukkaswwecmuoayo:
    }
    
    public static function cuwomiomuqqkayoo($ioakeqoosmkukeaa)
    {
        goto gskmiyeoisqoqkci;
        yasegwakoscmkouu:
        
        $wwcysoksoogyacog->add_discount($ioakeqoosmkukeaa);
        goto osamqwsmcawigggw;
        gskmiyeoisqoqkci:
        $wwcysoksoogyacog = ManipulateWoocommerce::uceecgsoicggikeu();
        goto iaqiocmqqiaeuwyg;
        osamqwsmcawigggw:
        sccoieksocaiaogm:
        goto gkuyqiyuaquuyaay;
        iaqiocmqqiaeuwyg:
        if (!$wwcysoksoogyacog) {
            goto sccoieksocaiaogm;
        }
        goto yasegwakoscmkouu;
        gkuyqiyuaquuyaay:
    }
    
    public static function mmmcswscsiecscwg($umwqusowiqmyseom)
    {
        goto masgkciqasaucoss;
        oockcigwicccqyko:
        return $umwqusowiqmyseom;
        goto eaqsewgiawoasqgu;
        eogaamwmasgugqgy:
        $umwqusowiqmyseom = DecoratorWoocommerce::mmmcswscsiecscwg($umwqusowiqmyseom);
        goto weyoiomaeciyggug;
        weyoiomaeciyggug:
        aqyqqgkiycokskwq:
        goto oockcigwicccqyko;
        masgkciqasaucoss:
        if (is_a($umwqusowiqmyseom, "\x57\103\x5f\117\162\x64\145\x72")) {
            goto aqyqqgkiycokskwq;
        }
        goto eogaamwmasgugqgy;
        eaqsewgiawoasqgu:
    }
    
    public static function wcqicmcuiewessgy($umwqusowiqmyseom) : string
    {
        goto cmawmeioiuegssuw;
        ugiuoawueimimiwk:
        kaaasaqewwykmikk:
        goto aouoeqamkuemyeqa;
        qweqcmkkiqkkukis:
        if (!$umwqusowiqmyseom) {
            goto kaaasaqewwykmikk;
        }
        goto qgkmsokwcmmawiey;
        umeemqiuewswymkw:
        $iueymcwwscwqkiyq = '';
        goto qweqcmkkiqkkukis;
        aouoeqamkuemyeqa:
        return $iueymcwwscwqkiyq;
        goto ukcyuqaycogiiiye;
        qgkmsokwcmmawiey:
        $iueymcwwscwqkiyq = DecoratorWoocommerce::ueqkgikommgyqmoa($umwqusowiqmyseom->get_status());
        goto ugiuoawueimimiwk;
        cmawmeioiuegssuw:
        $umwqusowiqmyseom = self::mmmcswscsiecscwg($umwqusowiqmyseom);
        goto umeemqiuewswymkw;
        ukcyuqaycogiiiye:
    }
    
    public static function susisykioakswkmm($umwqusowiqmyseom) : string
    {
        goto nacqwwcyskisiqmi;
        kaacgcseugewuceu:
        oowymeqscqicmiac:
        goto ueioekeyeekmugss;
        cywckaugcygcssie:
        oiseukwsseayeamo:
        goto ascyoecaiyskamoo;
        mukmccquscqkeeuy:
        iwekcauymcaoooie:
        goto icuauuecukomyoss;
        ascyoecaiyskamoo:
        awcwocukswgsaymk:
        goto wsemcaiucsysuqiq;
        egkiyyuywuiekisw:
        mmksuuciiyoyaaoa:
        goto cookqcosymocwyqg;
        nacqwwcyskisiqmi:
        $qsegigkmaaskiaeo = '';
        goto aowgayqaooygayky;
        saeeegogmqsyimqk:
        if ($umwqusowiqmyseom->get_billing_first_name() || $umwqusowiqmyseom->get_billing_last_name()) {
            goto oowymeqscqicmiac;
        }
        goto qkkcekocsgakoqqo;
        aowgayqaooygayky:
        $umwqusowiqmyseom = self::mmmcswscsiecscwg($umwqusowiqmyseom);
        goto quweyqomsoqcwmae;
        icuauuecukomyoss:
        $qsegigkmaaskiaeo = trim($umwqusowiqmyseom->get_billing_company());
        goto egkiyyuywuiekisw;
        ueioekeyeekmugss:
        $qsegigkmaaskiaeo = trim(sprintf("\45\x73\40\x25\163", $umwqusowiqmyseom->get_billing_first_name(), $umwqusowiqmyseom->get_billing_last_name()));
        goto smwwcycswiyuqouu;
        yaqamykgsuagaksc:
        return $qsegigkmaaskiaeo;
        goto gkecqaygqygkkgwc;
        isgekmewmqgmwiky:
        kcyccscigsuuiomi:
        goto yaqamykgsuagaksc;
        ioeaawqkkakemsum:
        if (!$mkucggyaiaukqoce) {
            goto oiseukwsseayeamo;
        }
        goto gyqecessamsiywea;
        smwwcycswiyuqouu:
        seiyywsmwamccscw:
        goto isgekmewmqgmwiky;
        qkkcekocsgakoqqo:
        if ($umwqusowiqmyseom->get_billing_company()) {
            goto iwekcauymcaoooie;
        }
        goto koyyawuukocokcme;
        quweyqomsoqcwmae:
        if (!$umwqusowiqmyseom) {
            goto kcyccscigsuuiomi;
        }
        goto saeeegogmqsyimqk;
        cookqcosymocwyqg:
        goto seiyywsmwamccscw;
        goto kaacgcseugewuceu;
        gyqecessamsiywea:
        $qsegigkmaaskiaeo = ucwords($mkucggyaiaukqoce->display_name);
        goto cywckaugcygcssie;
        koyyawuukocokcme:
        if (!$umwqusowiqmyseom->get_customer_id()) {
            goto awcwocukswgsaymk;
        }
        goto aeusyyagoyskceiy;
        aeusyyagoyskceiy:
        $mkucggyaiaukqoce = ManipulateUser::get($umwqusowiqmyseom->get_customer_id(), true);
        goto ioeaawqkkakemsum;
        wsemcaiucsysuqiq:
        goto mmksuuciiyoyaaoa;
        goto mukmccquscqkeeuy;
        gkecqaygqygkkgwc:
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
        goto sgsmiecuouaseyeu;
        uuwiiwywmwyoymgi:
        $wwcysoksoogyacog->empty_cart();
        goto oqiowcuqsqwyukgi;
        oqiowcuqsqwyukgi:
        ymmwikogcaccsgyo:
        goto kmeesswcuaququqw;
        sgsmiecuouaseyeu:
        if (function_exists("\x77\143\x5f\x65\x6d\160\x74\x79\137\143\x61\162\164")) {
            goto xoyesscyiuyyoaao;
        }
        goto muwyoumcckugweeg;
        kmeesswcuaququqw:
        goto kkeeggmwkmuwswca;
        goto qqmsywmwmygigewc;
        ocmsggeccyugikwu:
        kkeeggmwkmuwswca:
        goto ysmyakmkagcqqswo;
        qqmsywmwmygigewc:
        xoyesscyiuyyoaao:
        goto cegciyyeemaaawuo;
        cegciyyeemaaawuo:
        wc_empty_cart();
        goto ocmsggeccyugikwu;
        muwyoumcckugweeg:
        $wwcysoksoogyacog = self::uceecgsoicggikeu();
        goto agimkskeiiemakqe;
        agimkskeiiemakqe:
        if (!$wwcysoksoogyacog) {
            goto ymmwikogcaccsgyo;
        }
        goto uuwiiwywmwyoymgi;
        ysmyakmkagcqqswo:
    }
    
    public static function uakuwyoiooeqqiow() : array
    {
        goto cmssgciwquymiacc;
        iamqccceoygiywgo:
        makosoyccwoyooyu:
        goto qgoicagqowggweeq;
        qiaowqciwwyiucae:
        if (!$wwcysoksoogyacog) {
            goto makosoyccwoyooyu;
        }
        goto aaqoyoyiagqcguse;
        qgoicagqowggweeq:
        return $ygwoqcwsaggqoamw;
        goto wukmywyisgqyiwku;
        cmssgciwquymiacc:
        $wwcysoksoogyacog = self::uceecgsoicggikeu();
        goto uyscswaymikycueg;
        uyscswaymikycueg:
        $ygwoqcwsaggqoamw = [];
        goto qiaowqciwwyiucae;
        aaqoyoyiagqcguse:
        $ygwoqcwsaggqoamw = $wwcysoksoogyacog->get_cart_contents();
        goto iamqccceoygiywgo;
        wukmywyisgqyiwku:
    }
    
    public static function geoemsmuouqcqmei() : ?string
    {
        goto qiycageymgowgicg;
        yususwsyymskuwge:
        if (function_exists("\167\143\x5f\147\145\x74\x5f\143\141\x72\164\x5f\165\x72\x6c")) {
            goto wgeuaaggcwocgomy;
        }
        goto koiweeaoqaqgeiow;
        koiweeaoqaqgeiow:
        return $woocommerce->cart->get_cart_url();
        goto ieukeyosucwcigcq;
        aocsmigsemowswge:
        wgeuaaggcwocgomy:
        goto iikgymkaqikicssa;
        iikgymkaqikicssa:
        return wc_get_cart_url();
        goto gokisgaagiawmqmg;
        ieukeyosucwcigcq:
        goto cgyaokocoymsqakq;
        goto aocsmigsemowswge;
        gokisgaagiawmqmg:
        cgyaokocoymsqakq:
        goto gkoyauwycuyumiey;
        qiycageymgowgicg:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto yususwsyymskuwge;
        gkoyauwycuyumiey:
    }
    
    public static function ayseokmqycoqaigc() : bool
    {
        return class_exists("\x77\157\x6f\x63\x6f\155\155\145\x72\x63\x65") && ManipulatePlugin::ggocakcisguuokai("\x77\x6f\x6f\x63\157\x6d\x6d\x65\x72\x63\x65\57\x77\x6f\x6f\143\157\155\155\145\x72\143\145\x2e\x70\150\x70");
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
        goto uaycgmwwmeqsqoss;
        kkcskacouykscykm:
        $aokagokqyuysuksm = $umwqusowiqmyseom->get_id();
        goto sugiiygakykaogou;
        mackmiksusgquqku:
        if (!is_a($umwqusowiqmyseom, "\x57\103\x5f\x4f\162\x64\145\x72")) {
            goto uguaomoemkcuqksw;
        }
        goto kkcskacouykscykm;
        sugiiygakykaogou:
        uguaomoemkcuqksw:
        goto qqoeqgqkmegyquie;
        qqoeqgqkmegyquie:
        return $aokagokqyuysuksm;
        goto gcaeuwucgqwocegi;
        uaycgmwwmeqsqoss:
        $aokagokqyuysuksm = $umwqusowiqmyseom;
        goto mackmiksusgquqku;
        gcaeuwucgqwocegi:
    }
    
    public static function aqasygcsqysmmyke($product = null)
    {
        goto kuekaewgqsagkokm;
        eicoyaciiwoweyow:
        $product = DecoratorWoocommerce::aqasygcsqysmmyke($product);
        goto ccykaqwcuqguuesk;
        kuekaewgqsagkokm:
        if (is_a($product, "\127\x43\x5f\120\162\x6f\144\165\143\x74")) {
            goto yumugwyseyuawuae;
        }
        goto eicoyaciiwoweyow;
        ccykaqwcuqguuesk:
        yumugwyseyuawuae:
        goto aoywumwiwsuugsae;
        aoywumwiwsuugsae:
        return $product;
        goto kgyiaoswiyukcguu;
        kgyiaoswiyukcguu:
    }
    
    public static function mkiigkeqaeiwqyua() : bool
    {
        return in_array(DecoratorWoocommerce::useawgqusasoukqm(), ["\x49\x52\x54", "\x49\122\x52"]);
    }
    
    public static function eywqaumgkccycyau($aokagokqyuysuksm, $ywmkwiwkosakssii = [])
    {
        goto kcyyceweysgmscgm;
        sqcucoqwgcookais:
        DecoratorWoocommerce::eywqaumgkccycyau($ywmkwiwkosakssii);
        goto igoiiguaiiyskqye;
        maeoaamgcykqqcac:
        foreach ($wkyuegumgeqqqmyg as $aiowsaccomcoikus) {
            goto uykoiemomggyyaqm;
            yqusmmkkqyqusoug:
            $ywmkwiwkosakssii[$aiowsaccomcoikus] = DecoratorSanitize::aoeoykwemwaqsikc($ywmkwiwkosakssii[$aiowsaccomcoikus]);
            goto omygqyyicqyuswqs;
            omygqyyicqyuswqs:
            iyqwcuwcoqsqiqey:
            goto caeissowkcqcoisu;
            uykoiemomggyyaqm:
            if (!isset($ywmkwiwkosakssii[$aiowsaccomcoikus])) {
                goto iyqwcuwcoqsqiqey;
            }
            goto yqusmmkkqyqusoug;
            caeissowkcqcoisu:
            qgwksesamqckoysm:
            goto wwoyegucuaugosys;
            wwoyegucuaugosys:
        }
        goto eqmiagqymgsqikio;
        ouekywuyisaayusa:
        $wkyuegumgeqqqmyg = [];
        goto maeoaamgcykqqcac;
        kcyyceweysgmscgm:
        $ywmkwiwkosakssii[self::ID] = $aokagokqyuysuksm;
        goto ouekywuyisaayusa;
        eqmiagqymgsqikio:
        ygogeqikkaiewqak:
        goto sqcucoqwgcookais;
        igoiiguaiiyskqye:
    }
    
    public static function oseiymowmquqkaca() : bool
    {
        global $woocommerce_loop;
        return DecoratorWoocommerce::kmymkocwcawgeccm() && isset($woocommerce_loop["\x6e\x61\x6d\145"]) && in_array($woocommerce_loop["\x6e\x61\155\145"], ["\162\145\x6c\x61\164\145\x64", "\165\x70\x20\55\x20\x73\145\154\154\x73"]);
    }
    
    public static function kyckwuuiqwmyoqma() : ?\WC_Query
    {
        goto isqoqyuosaeauika;
        isqoqyuosaeauika:
        $gqgemcmoicmgaqie = null;
        goto cqkmekqeuoamwwik;
        wwowwogiasqyegco:
        return $gqgemcmoicmgaqie;
        goto cowcyoscwiogwoss;
        cqkmekqeuoamwwik:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto gkqeioiiywequymm;
        gkqeioiiywequymm:
        if (!$woocommerce) {
            goto osqscmomgeumekym;
        }
        goto aswqcceuwmmqciec;
        aswqcceuwmmqciec:
        $gqgemcmoicmgaqie = $woocommerce->query;
        goto eqskaoiwkcikoock;
        eqskaoiwkcikoock:
        osqscmomgeumekym:
        goto wwowwogiasqyegco;
        cowcyoscwiogwoss:
    }
    
    public static function kkewuuisyiscmgyc() : WooCommerce
    {
        goto aesqskyuooksouwa;
        ywmkeguguoigeago:
        $mksyucucyswaukig = WC();
        goto qoieockmumciwweq;
        ockwkskmgeqemqwm:
        $mksyucucyswaukig = $woocommerce;
        goto eqaqiuescmyiwsoq;
        qoieockmumciwweq:
        ekwgywkksceymecu:
        goto qmccgkcskscsakcu;
        mkuoeggssimkqoee:
        global $woocommerce;
        goto ockwkskmgeqemqwm;
        eqaqiuescmyiwsoq:
        goto ekwgywkksceymecu;
        goto umeuqqawicigwmmw;
        umeuqqawicigwmmw:
        iammguyywsgygewo:
        goto ywmkeguguoigeago;
        aesqskyuooksouwa:
        if (function_exists("\x57\103")) {
            goto iammguyywsgygewo;
        }
        goto mkuoeggssimkqoee;
        qmccgkcskscsakcu:
        return $mksyucucyswaukig;
        goto wocmuysuywyaeyia;
        wocmuysuywyaeyia:
    }
    
    public static function scgumisucgwskyqk($product, $mgkceomocowocqyo = "\x76\151\x65\167") : string
    {
        goto owgiiuqeeesguqsq;
        ikckcqggoqoimoio:
        goto eqesiosukaowuquq;
        goto qqsyqgokqqsqoooe;
        qqsyqgokqqsqoooe:
        iiwkgiyuiuskiusa:
        goto amqmckimqwauwkug;
        gowguesicegmegqw:
        swyaqueaoyekgomq:
        goto owgocmqmgsgeayue;
        ueoykiauoyuauwsi:
        if (!$product) {
            goto swyaqueaoyekgomq;
        }
        goto ycaqamikucimygma;
        emsoowiaoaoayqyy:
        $aumscagymwyyicag = DecoratorHook::sscegwueamckwmcy("\x77\x6f\157\x63\x6f\155\155\145\162\x63\145\137\x70\162\157\144\165\x63\164\137\x72\145\x67\x75\154\141\162\x5f\x70\162\x69\143\145", $eyuymeqcioasuyyi, $product);
        goto gowguesicegmegqw;
        gmqceeyooqckwwms:
        $eyuymeqcioasuyyi = $product->regular_price;
        goto ikckcqggoqoimoio;
        iuawscaywkoegium:
        eqesiosukaowuquq:
        goto emsoowiaoaoayqyy;
        owgocmqmgsgeayue:
        return $aumscagymwyyicag;
        goto usuiacsqegaeywgs;
        amqmckimqwauwkug:
        $eyuymeqcioasuyyi = $product->get_regular_price($mgkceomocowocqyo);
        goto iuawscaywkoegium;
        yqmkgcicoecyuiku:
        $product = self::aqasygcsqysmmyke($product);
        goto ueoykiauoyuauwsi;
        owgiiuqeeesguqsq:
        $aumscagymwyyicag = '';
        goto yqmkgcicoecyuiku;
        ycaqamikucimygma:
        if (method_exists($product, "\x67\x65\164\137\x73\141\x6c\x65\x5f\x70\162\151\x63\x65")) {
            goto iiwkgiyuiuskiusa;
        }
        goto gmqceeyooqckwwms;
        usuiacsqegaeywgs:
    }
    
    public static function asaycagaeksiumkw($product, $mgkceomocowocqyo = "\x76\151\x65\167") : string
    {
        goto sigcqyomcgiyamkq;
        kgykiwcggygyekgc:
        if (!$product) {
            goto comswgimqmwcyyas;
        }
        goto wimquiyiyyakiyqo;
        wimquiyiyyakiyqo:
        if (method_exists($product, "\147\145\x74\137\163\141\x6c\x65\137\x70\162\x69\x63\145")) {
            goto ueiooqcaegkyumkk;
        }
        goto cseuscicwscieqaa;
        makucowmowkkooyy:
        $aumscagymwyyicag = DecoratorHook::sscegwueamckwmcy("\x77\157\157\143\157\x6d\x6d\145\x72\143\x65\137\x70\x72\x6f\144\x75\x63\164\137\x73\141\154\145\137\x70\162\151\143\x65", $eyuymeqcioasuyyi, $product);
        goto csmqycguwyiekmwq;
        cgsygucccwyayksw:
        $eyuymeqcioasuyyi = $product->get_sale_price($mgkceomocowocqyo);
        goto kkskwicmigikmwuk;
        cseuscicwscieqaa:
        $eyuymeqcioasuyyi = $product->sale_price;
        goto gccusiaomowsyeqk;
        kwwqiuaycwkcigqq:
        ueiooqcaegkyumkk:
        goto cgsygucccwyayksw;
        kauocquekqgswwoe:
        return $aumscagymwyyicag;
        goto ewkmiiygeqessaue;
        kkskwicmigikmwuk:
        mqysyiqsowkciiiq:
        goto makucowmowkkooyy;
        csmqycguwyiekmwq:
        comswgimqmwcyyas:
        goto kauocquekqgswwoe;
        sigcqyomcgiyamkq:
        $aumscagymwyyicag = '';
        goto eiimgesccmkgusys;
        gccusiaomowsyeqk:
        goto mqysyiqsowkciiiq;
        goto kwwqiuaycwkcigqq;
        eiimgesccmkgusys:
        $product = self::aqasygcsqysmmyke($product);
        goto kgykiwcggygyekgc;
        ewkmiiygeqessaue:
    }
    
    public static function aqwquwewocyewasw() : bool
    {
        goto kucuomkwkigoaaoi;
        igmocmyuiauyaaky:
        if (!($woocommerce && method_exists($woocommerce, "\x69\163\137\162\145\163\x74\137\141\x70\151\x5f\162\x65\x71\x75\145\x73\x74"))) {
            goto cgiioksocuikciqu;
        }
        goto kqaqeisqomwwcasq;
        siawmiiggusigmks:
        cgiioksocuikciqu:
        goto qyoyoscsokwicwcm;
        kqaqeisqomwwcasq:
        $uwqkkwmiiumuukoa = $woocommerce->is_rest_api_request();
        goto siawmiiggusigmks;
        aqimsokikskmeukc:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto igmocmyuiauyaaky;
        kucuomkwkigoaaoi:
        $uwqkkwmiiumuukoa = false;
        goto aqimsokikskmeukc;
        qyoyoscsokwicwcm:
        return $uwqkkwmiiumuukoa;
        goto cekucgakuqaicscm;
        cekucgakuqaicscm:
    }
    
    public static function uceecgsoicggikeu() : ?WC_Cart
    {
        goto ikuecasooegqekwi;
        eikgggsiaicqiqag:
        $wwcysoksoogyacog = $woocommerce->cart;
        goto ackemimmseeuauek;
        ogkwaimcumgaueem:
        if (!$woocommerce) {
            goto awgckickkikmwgoe;
        }
        goto eikgggsiaicqiqag;
        ackemimmseeuauek:
        awgckickkikmwgoe:
        goto ayikyecyysisuioq;
        auyuoiygayksuuua:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto ogkwaimcumgaueem;
        ayikyecyysisuioq:
        return $wwcysoksoogyacog;
        goto kmqcsyeeiyqwiusw;
        ikuecasooegqekwi:
        $wwcysoksoogyacog = null;
        goto auyuoiygayksuuua;
        kmqcsyeeiyqwiusw:
    }
    
    public static function aoqkwiysueqqwigk() : ?string
    {
        goto moqccissukkoumwo;
        mwcqoqsgsoiacuqu:
        return wc_get_checkout_url();
        goto sagukwqksqiukyeq;
        ouesqgosuiesgwas:
        return $woocommerce->cart->get_checkout_url();
        goto ucmwwiwcaqesyqaw;
        moqccissukkoumwo:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto eoyokykwkikgaaww;
        eoyokykwkikgaaww:
        if (function_exists("\167\x63\137\x67\x65\x74\137\143\150\145\143\153\157\165\x74\x5f\x75\x72\154")) {
            goto gmymykusaimcgayu;
        }
        goto ouesqgosuiesgwas;
        sagukwqksqiukyeq:
        pewociqgeseqykos:
        goto oassuwsweqqyooss;
        ucmwwiwcaqesyqaw:
        goto pewociqgeseqykos;
        goto iqmqycmwemkkugmw;
        iqmqycmwemkkugmw:
        gmymykusaimcgayu:
        goto mwcqoqsgsoiacuqu;
        oassuwsweqqyooss:
    }
    
    public static function kccgkwigyyiugcco() : bool
    {
        return "\171\145\x73" === self::giiuwsmyumqwwiyq("\x65\x6e\x61\x62\x6c\x65\x5f\155\x79\x61\x63\143\x6f\165\x6e\164\137\x72\145\147\151\163\x74\162\141\164\x69\157\156");
    }
    
    public static function yaaucgakecuykawk() : bool
    {
        global $woocommerce_loop;
        return DecoratorWoocommerce::kmymkocwcawgeccm() && isset($woocommerce_loop["\156\x61\x6d\x65"]) && in_array($woocommerce_loop["\x6e\141\x6d\x65"], ["\x75\160\x20\x2d\40\x73\x65\154\154\163"]);
    }
    
    public static function ogkieiokqueakmyc() : bool
    {
        global $woocommerce_loop;
        return DecoratorWoocommerce::kmymkocwcawgeccm() && isset($woocommerce_loop["\156\141\x6d\x65"]) && in_array($woocommerce_loop["\156\141\155\x65"], ["\x72\145\154\x61\x74\145\144"]);
    }
    
    public static function omwkqcuwceweymcc($product = null)
    {
        goto qyyioseuoicymucm;
        qyyioseuoicymucm:
        if ($product) {
            goto osucouyseikugqwm;
        }
        goto gcueeowqwicyuuwm;
        kiwiacqeekiyqqum:
        osucouyseikugqwm:
        goto uwkusimiysaesysu;
        owwkeimwommeqeuk:
        kikgmuyaiiicugcg:
        goto ouyaoosmgkcycecy;
        gcueeowqwicyuuwm:
        $product = self::aqasygcsqysmmyke(ManipulatePost::mwikyscisascoeea());
        goto kiwiacqeekiyqqum;
        wicgcmsymyamgkqo:
        $aokagokqyuysuksm = $product->get_id();
        goto owwkeimwommeqeuk;
        uwkusimiysaesysu:
        $aokagokqyuysuksm = $product;
        goto saoicecaigamyumi;
        ouyaoosmgkcycecy:
        return $aokagokqyuysuksm;
        goto agcecaceyeicacew;
        saoicecaigamyumi:
        if (!is_a($product, "\x57\x43\x5f\x50\x72\x6f\144\x75\143\164")) {
            goto kikgmuyaiiicugcg;
        }
        goto wicgcmsymyamgkqo;
        agcecaceyeicacew:
    }
    
    public static function ageqswwkkqywckco($ywmkwiwkosakssii = []) : array
    {
        goto qouiaaqwcueugsyg;
        iiaqqsyysmuiuqgk:
        return $oksqskmgoqiqciis;
        goto gguqqicieewmyqak;
        uqioouaicscwyeei:
        $oysoyeaucuawyaky = ManipulatePost::ciugwooasaqcywas("\x70\162\157\144\165\x63\164", $ywmkwiwkosakssii);
        goto sygcsssigqkuemcu;
        qouiaaqwcueugsyg:
        $ywmkwiwkosakssii["\146\x69\145\x6c\x64\163"] = "\151\x64\163";
        goto uqioouaicscwyeei;
        ekmowewoceagouse:
        qeyyusmwmygyssis:
        goto asmqyacukagmsmog;
        acykkosiggykiqae:
        if (!is_array($oysoyeaucuawyaky)) {
            goto kcwmuwimsuqeeika;
        }
        goto moyeqcaaoumugqga;
        moyeqcaaoumugqga:
        foreach ($oysoyeaucuawyaky as $aokagokqyuysuksm) {
            goto kgkycyakimoowckw;
            eqmmisowcsogsmmi:
            if (!$product) {
                goto gcgguqeygkiuseei;
            }
            goto yywwamymqqweegma;
            yywwamymqqweegma:
            $oksqskmgoqiqciis[$aokagokqyuysuksm] = $product;
            goto qmwgkkusoumsaymy;
            iuasisokiwkkgsig:
            ekiaooogkcaiqmku:
            goto wygeoqscyoqegsim;
            qmwgkkusoumsaymy:
            gcgguqeygkiuseei:
            goto iuasisokiwkkgsig;
            kgkycyakimoowckw:
            $product = self::aqasygcsqysmmyke($aokagokqyuysuksm);
            goto eqmmisowcsogsmmi;
            wygeoqscyoqegsim:
        }
        goto ekmowewoceagouse;
        sygcsssigqkuemcu:
        $oksqskmgoqiqciis = [];
        goto acykkosiggykiqae;
        asmqyacukagmsmog:
        kcwmuwimsuqeeika:
        goto iiaqqsyysmuiuqgk;
        gguqqicieewmyqak:
    }
    
    public static function weqwusgaqsmseiyq() : array
    {
        return ["\151\x6d\141\x67\145" => esc_html__("\x49\155\141\x67\145", PR__CMN__FOUNDATION), "\160\x72\x69\x63\145" => esc_html__("\120\162\x69\x63\145", PR__CMN__FOUNDATION), "\141\x64\x64\55\x74\x6f\x2d\143\x61\x72\164" => esc_html__("\x41\144\144\x20\164\157\40\x63\x61\162\x74", PR__CMN__FOUNDATION), "\144\x65\163\x63\162\x69\x70\x74\151\x6f\x6e" => esc_html__("\104\145\x73\x63\x72\x69\x70\164\151\157\x6e", PR__CMN__FOUNDATION), "\163\x6b\x75" => esc_html__("\123\x6b\165", PR__CMN__FOUNDATION), "\x73\x74\x6f\143\x6b" => esc_html__("\101\166\141\151\x6c\x61\x62\x69\154\151\164\x79", PR__CMN__FOUNDATION), "\x77\145\x69\x67\150\164" => esc_html__("\x57\145\x69\x67\150\x74", PR__CMN__FOUNDATION), "\x64\151\x6d\x65\x6e\x73\x69\x6f\x6e\x73" => esc_html__("\104\151\x6d\145\x6e\x73\151\x6f\x6e\x73", PR__CMN__FOUNDATION)];
    }
    
    public static function gmowuaggkmgkseyo() : bool
    {
        return DecoratorQuery::qmssqeyayicowkgy("\x70\x72\157\x64\165\x63\164\x5f\x63\x61\164");
    }
    
    public static function ecaegsuskkkigkgc() : ?WC_Checkout
    {
        goto eqswioyysgiegmkw;
        qkkcyimckwcmwoyg:
        return $yogeuygiqackeiky;
        goto soqwcqmyqkqyqawm;
        eqswioyysgiegmkw:
        $yogeuygiqackeiky = null;
        goto ecgigaamcwiqiukk;
        qaowiwsuoecmmkkw:
        egqwmisqumyygeaw:
        goto qkkcyimckwcmwoyg;
        ecgigaamcwiqiukk:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto wgieqooykcsmeemu;
        wgieqooykcsmeemu:
        if (!$woocommerce) {
            goto egqwmisqumyygeaw;
        }
        goto ywogweeguksciwcw;
        ywogweeguksciwcw:
        $yogeuygiqackeiky = $woocommerce->yogeuygiqackeiky();
        goto qaowiwsuoecmmkkw;
        soqwcqmyqkqyqawm:
    }
    
    public static function giyscymwkesykqsg($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie)
    {
        self::cmussoegoauyyguw("\x73\x65\164", $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie);
    }
    
    public static function qusqewgmqyucyooc($product, $ikgwqyuyckaewsow)
    {
        goto uukiykgkqyekggay;
        yciammygksiessww:
        if (!$qqswgiawgeaeoecu) {
            goto giikseaiieuqkccg;
        }
        goto smucwoowmswcmqiq;
        kuukuccioawuoiea:
        cqcoykgagkcckiyi:
        goto msygsomkaywgokuq;
        omogkekcmgcmgaks:
        $qqswgiawgeaeoecu = [];
        goto kqkckwwigeyywyik;
        ikoqcwgayswaisqo:
        
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus => $ymqmyyeuycgmigyo) {
            goto kciguwegyomuqawq;
            ywcksgacokiyuuks:
            gemiusgkmeaykywq:
            goto wemcucimscmkccee;
            kciguwegyomuqawq:
            switch ($aiowsaccomcoikus) {
                case "\164\x69\164\x6c\145":
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $product->get_title();
                    goto gemiusgkmeaykywq;
                case "\160\162\x69\143\145":
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $product->get_price_html();
                    goto gemiusgkmeaykywq;
                case "\151\155\x61\147\145":
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = intval(ManipulatePost::wsiiswmaagmyiaiw($aokagokqyuysuksm));
                    goto gemiusgkmeaykywq;
                case "\144\x65\x73\x63\x72\x69\x70\164\x69\157\x6e":
                    goto gqgiygyaagieswyg;
                    ueygyquuioiuckmw:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $ukwokcuqauuosmoo;
                    goto igsgeycmgyyiqyaw;
                    igsgeycmgyyiqyaw:
                    goto gemiusgkmeaykywq;
                    goto gqeosgkaqwoooomg;
                    gqgiygyaagieswyg:
                    $ukwokcuqauuosmoo = DecoratorHook::sscegwueamckwmcy("\x77\157\157\x63\157\155\155\x65\x72\x63\145\x5f\163\150\157\162\x74\137\144\145\x73\x63\162\151\160\164\151\157\156", $product->get_short_description());
                    goto ueygyquuioiuckmw;
                    gqeosgkaqwoooomg:
                case "\163\x74\x6f\x63\153":
                    goto csiumocowgwwkseu;
                    eggeemqkkcgiwkgm:
                    $imooqykauqyyswsw["\141\x76\x61\151\154\x61\142\151\x6c\x69\x74\171"] = __("\x49\x6e\x20\163\164\157\x63\153", PR__CMN__FOUNDATION);
                    goto skuaykemeskiciyq;
                    ceooqwocwgyaosca:
                    if (!empty($imooqykauqyyswsw["\141\x76\x61\151\x6c\x61\x62\x69\x6c\151\164\x79"])) {
                        goto ceyiiqgekmueswas;
                    }
                    goto eggeemqkkcgiwkgm;
                    skuaykemeskiciyq:
                    ceyiiqgekmueswas:
                    goto socyamqieqoiusuo;
                    ggwecgmoiwsqaiem:
                    goto gemiusgkmeaykywq;
                    goto kmcmmgeegciwucsu;
                    csiumocowgwwkseu:
                    $imooqykauqyyswsw = $product->get_availability();
                    goto ceooqwocwgyaosca;
                    socyamqieqoiusuo:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $imooqykauqyyswsw["\141\x76\141\x69\x6c\x61\142\x69\x6c\x69\x74\x79"];
                    goto ggwecgmoiwsqaiem;
                    kmcmmgeegciwucsu:
                case "\163\153\x75":
                    goto momkymyyokcqmiwc;
                    rgeqksseqwssoqeq:
                    goto gemiusgkmeaykywq;
                    goto rmamqouaqyeogmmm;
                    oiaqgumiwqckysqq:
                    !$mmkkmgusieqaqkki && ($mmkkmgusieqaqkki = "\x2d");
                    goto yseqooouywimkcsi;
                    momkymyyokcqmiwc:
                    $mmkkmgusieqaqkki = $product->get_sku();
                    goto oiaqgumiwqckysqq;
                    yseqooouywimkcsi:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $mmkkmgusieqaqkki;
                    goto rgeqksseqwssoqeq;
                    rmamqouaqyeogmmm:
                case "\x77\145\x69\147\150\x74":
                    goto imycougggwgmwque;
                    igwwywsaqumsmakc:
                    $mycwwoyokwokowmo = "\55";
                    goto eguqeogcowkuqmes;
                    smwcciswieyocowa:
                    scquwmwgssauikwq:
                    goto eiiygsskgeocucse;
                    eiiygsskgeocucse:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $mycwwoyokwokowmo;
                    goto scqikcmqmsuaccuk;
                    eguqeogcowkuqmes:
                    goto scquwmwgssauikwq;
                    goto igigquuegyegmyas;
                    igigquuegyegmyas:
                    ukoqocmokmwgkggo:
                    goto ucasooakcusgmasq;
                    scqikcmqmsuaccuk:
                    goto gemiusgkmeaykywq;
                    goto wsksyesmkwcseqmi;
                    ucasooakcusgmasq:
                    $mycwwoyokwokowmo = wc_format_localized_decimal($mycwwoyokwokowmo) . "\x20" . esc_attr(DecoratorOption::get("\x77\x6f\x6f\143\x6f\155\155\x65\162\143\x65\137\x77\145\x69\x67\x68\164\137\x75\156\151\164"));
                    goto smwcciswieyocowa;
                    imycougggwgmwque:
                    if ($mycwwoyokwokowmo = $product->get_weight()) {
                        goto ukoqocmokmwgkggo;
                    }
                    goto igwwywsaqumsmakc;
                    wsksyesmkwcseqmi:
                case "\144\x69\155\x65\156\163\151\x6f\156\x73":
                    goto kwkaekkyamsuosic;
                    qmmiuscmmiciksuq:
                    !$qaiwqwwemmyyqosy && ($qaiwqwwemmyyqosy = "\55");
                    goto wysqeaawgmsgywwe;
                    wysqeaawgmsgywwe:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $qaiwqwwemmyyqosy;
                    goto msmyekocyqaeiqui;
                    kwkaekkyamsuosic:
                    $qaiwqwwemmyyqosy = function_exists("\x77\143\x5f\x66\x6f\x72\x6d\x61\x74\137\144\x69\155\x65\156\163\x69\x6f\156\x73") ? wc_format_dimensions($product->get_dimensions(false)) : $product->get_dimensions();
                    goto qmmiuscmmiciksuq;
                    msmyekocyqaeiqui:
                    goto gemiusgkmeaykywq;
                    goto qyqeeqeasassiyqg;
                    qyqeeqeasassiyqg:
                default:
                    goto kiqioykgyqakwmsc;
                    mqaamgcyimqcgyyu:
                    if (!is_array($eqgoocgaqwqcimie)) {
                        goto uamgomuoiswgmyou;
                    }
                    goto igymmkeosawsmquy;
                    gmgysasgwkiakiic:
                    goto kisqeasymciqmcma;
                    goto rayoswqmyqiuiics;
                    kukmwwkmmiwaqmai:
                    goto gemiusgkmeaykywq;
                    goto wyomsacikcaawgow;
                    igymmkeosawsmquy:
                    $eqgoocgaqwqcimie = implode("\54\x20", $eqgoocgaqwqcimie);
                    goto smiosccsmkciiaei;
                    ocowsksosgwgogmy:
                    kisqeasymciqmcma:
                    goto kukmwwkmmiwaqmai;
                    cocwkumuyaacwuie:
                    qiwwswgwkcekequo:
                    goto iaaaeesqwkogwook;
                    kiqioykgyqakwmsc:
                    if (DecoratorTaxonomy::myagqecycsaiyqsk($aiowsaccomcoikus)) {
                        goto sacqwquywoyemsui;
                    }
                    goto ouqsaimcqcgaemws;
                    uuemseeewwgcoqqc:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = implode("\54\40", $qqswgiawgeaeoecu[$aiowsaccomcoikus]);
                    goto ocowsksosgwgogmy;
                    umeiygeyqcouqcsk:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = [];
                    goto wskwqauamemaueue;
                    iaaaeesqwkogwook:
                    yuyqiqgiykceuwyi:
                    goto uuemseeewwgcoqqc;
                    ouqsaimcqcgaemws:
                    $eqgoocgaqwqcimie = $product->get_attribute($aiowsaccomcoikus);
                    goto mqaamgcyimqcgyyu;
                    ugsimmgccyugoqka:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $eqgoocgaqwqcimie;
                    goto gmgysasgwkiakiic;
                    smiosccsmkciiaei:
                    uamgomuoiswgmyou:
                    goto ugsimmgccyugoqka;
                    rmoogiakmggyosaw:
                    if (empty($uyuaosigqymaqsaa)) {
                        goto yuyqiqgiykceuwyi;
                    }
                    goto ggiyqoigmmgiamyo;
                    ggiyqoigmmgiamyo:
                    foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
                        goto goagoaikyyyaisgy;
                        goagoaikyyyaisgy:
                        $iwewcwusemqaiggk = DecoratorSanitize::iwewcwusemqaiggk($iwewcwusemqaiggk, $aiowsaccomcoikus);
                        goto qcwmwsussmygiowm;
                        qcwmwsussmygiowm:
                        $qqswgiawgeaeoecu[$aiowsaccomcoikus][] = ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk);
                        goto mqyceoiukuosysus;
                        mqyceoiukuosysus:
                        ykgaewsgaccoewmy:
                        goto cuesuqwoogmkcwuu;
                        cuesuqwoogmkcwuu:
                    }
                    goto cocwkumuyaacwuie;
                    wskwqauamemaueue:
                    $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($aokagokqyuysuksm, $aiowsaccomcoikus);
                    goto rmoogiakmggyosaw;
                    rayoswqmyqiuiics:
                    sacqwquywoyemsui:
                    goto umeiygeyqcouqcsk;
                    wyomsacikcaawgow:
            }
            goto ymaeysgwkcwwiqmu;
            wemcucimscmkccee:
            kuygeikysoqqqouy:
            goto wuiwikwsqoyseayq;
            ymaeysgwkcwwiqmu:
            akgusigiuuowiemm:
            goto ywcksgacokiyuuks;
            wuiwikwsqoyseayq:
        }
        goto kascgoogiymmugcy;
        kqkckwwigeyywyik:
        $aokagokqyuysuksm = $product->get_id();
        goto ikoqcwgayswaisqo;
        msygsomkaywgokuq:
        return $product;
        goto vwwckgewsegagiqm;
        qagmacuwmywoisyq:
        if (!$product) {
            goto cqcoykgagkcckiyi;
        }
        goto omogkekcmgcmgaks;
        uukiykgkqyekggay:
        $product = self::aqasygcsqysmmyke($product);
        goto qagmacuwmywoisyq;
        kascgoogiymmugcy:
        yaaygymiwgcucuee:
        goto yciammygksiessww;
        smucwoowmswcmqiq:
        $product->fields = $qqswgiawgeaeoecu;
        goto mmkuokwocceayask;
        mmkuokwocceayask:
        giikseaiieuqkccg:
        goto kuukuccioawuoiea;
        vwwckgewsegagiqm:
    }
    
    public static function qysuguqkwiksywaq($product, $isweyuoisomqyaag) : array
    {
        goto mqmwceouegaaucoi;
        okyoymqacqaimooo:
        return $uomewyckeuqoqocu;
        goto xsucwemqaekogyqi;
        ssmesescgegmqegs:
        $uomewyckeuqoqocu = $product->get_available_variation($isweyuoisomqyaag);
        goto iwwcyaoguoweqqmi;
        wgiewcmyikiwsasu:
        $product = self::aqasygcsqysmmyke($product);
        goto cqguwaockaiuioqo;
        mqmwceouegaaucoi:
        $uomewyckeuqoqocu = [];
        goto wgiewcmyikiwsasu;
        cqguwaockaiuioqo:
        if (!($isweyuoisomqyaag && $product instanceof WC_Product_Variable)) {
            goto qmkkgkcemceygaou;
        }
        goto ssmesescgegmqegs;
        iwwcyaoguoweqqmi:
        qmkkgkcemceygaou:
        goto okyoymqacqaimooo;
        xsucwemqaekogyqi:
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
        $ywmkwiwkosakssii["\155\145\164\x61\x5f\161\165\145\162\x79"] = ["\x6d\x65\x74\x61\137\153\x65\171" => $uusmaiomayssaecw, "\155\x65\x74\x61\x5f\x76\x61\x6c\165\x65" => $eqgoocgaqwqcimie, "\x6d\145\164\141\137\x63\x6f\155\160\x61\x72\x65" => "\x4c\111\113\105"];
        return DecoratorWoocommerce::ageqswwkkqywckco($ywmkwiwkosakssii);
    }
    
    public static function gkokioeusiomuwee($product, $cqcsaaswaciweiie = [], $aqcaekiaqgiaiwiu = true)
    {
        goto mqweissqoiqukwuc;
        ymqsaggkkwkoomgc:
        foreach ($siquossayskcwkea as $ymkomoccmymcoiea) {
            goto usamasqcwkcaaeyo;
            gcoaosuecgyuuiyq:
            $kskgqoywkoawosao = true;
            goto oswkqueiycsgwwqc;
            yoicqeqousygweyk:
            ksmgqwcssgmuykqm:
            goto gkgiqeqokmyaosyi;
            ucuyyuummcgmmcoo:
            if (!$aqcaekiaqgiaiwiu) {
                goto ywckcmesqeiougoy;
            }
            goto cssokcmoicccseqa;
            swuockeicagsysku:
            if (!$kskgqoywkoawosao) {
                goto uqcqusigauwqaucm;
            }
            goto cwcqcsgwwkokqgoy;
            cwcqcsgwwkokqgoy:
            $ymqmyyeuycgmigyo = $ymkomoccmymcoiea->get_name();
            goto ucuyyuummcgmmcoo;
            oswkqueiycsgwwqc:
            if (!(is_array($cqcsaaswaciweiie) && $cqcsaaswaciweiie)) {
                goto igkykqemaiuckkqm;
            }
            goto mimgyeoccsuwmomg;
            qagsccmgemwyowgq:
            igkykqemaiuckkqm:
            goto swuockeicagsysku;
            wgakiauyywueqsma:
            uqcqusigauwqaucm:
            goto yoicqeqousygweyk;
            megqkwsyeisgoiuq:
            owqukoyoaogmwioi:
            goto qagsccmgemwyowgq;
            usamasqcwkcaaeyo:
            $mmykcgusskuuuace = self::cswwmqwaucwuqcaq($product, $ymkomoccmymcoiea);
            goto gcoaosuecgyuuiyq;
            okcoqaemsekeyqgi:
            $uomewyckeuqoqocu[$ymqmyyeuycgmigyo] = $mmykcgusskuuuace;
            goto wgakiauyywueqsma;
            mimgyeoccsuwmomg:
            foreach ($cqcsaaswaciweiie as $tsuauommsquiesmk => $eqgoocgaqwqcimie) {
                goto oiioqgoqyykuocou;
                kwuayueukssiusyo:
                sawkewuuqsaekcsy:
                goto ksyaeigosimeymmu;
                oiioqgoqyykuocou:
                $uiymkeeaukcyqqik = ManipulateArray::get($mmykcgusskuuuace, $tsuauommsquiesmk, false);
                goto kgwcgkqqguiwgmmm;
                kgwcgkqqguiwgmmm:
                if (!(is_array($uiymkeeaukcyqqik) && !in_array($eqgoocgaqwqcimie, $uiymkeeaukcyqqik) && $uiymkeeaukcyqqik != $eqgoocgaqwqcimie)) {
                    goto sawkewuuqsaekcsy;
                }
                goto umwsiiqcymkwcasg;
                ksyaeigosimeymmu:
                aaoeckeaamycqkam:
                goto amwucayokoyowcki;
                gigyyqgmkceykwam:
                goto owqukoyoaogmwioi;
                goto kwuayueukssiusyo;
                umwsiiqcymkwcasg:
                $kskgqoywkoawosao = false;
                goto gigyyqgmkceykwam;
                amwucayokoyowcki:
            }
            goto megqkwsyeisgoiuq;
            owosmsmuaueegaas:
            ywckcmesqeiougoy:
            goto okcoqaemsekeyqgi;
            cssokcmoicccseqa:
            $ymqmyyeuycgmigyo = DecoratorWoocommerce::gmeusukogwcamcyc($ymqmyyeuycgmigyo);
            goto owosmsmuaueegaas;
            gkgiqeqokmyaosyi:
        }
        goto suuwwusyekuwqgwi;
        csmosoqqwicqwuqg:
        cmomkawiiikmcccq:
        goto osmogyiiwqqwieoe;
        ggiswsmgccuackao:
        
        $qaiwqwwemmyyqosy = DecoratorHook::sscegwueamckwmcy("\x77\x63\137\160\162\157\144\165\x63\x74\x5f\145\156\x61\142\x6c\x65\137\144\x69\155\x65\x6e\163\151\x6f\x6e\x73\x5f\144\151\163\160\x6c\141\x79", $product->has_weight() || $product->has_dimensions());
        goto iwwawgsoqcciekeq;
        iwwawgsoqcciekeq:
        if (!($qaiwqwwemmyyqosy && $product->has_weight())) {
            goto msiwaicoesyagumk;
        }
        goto sgaamousiakskkko;
        osmogyiiwqqwieoe:
        
        $siquossayskcwkea = array_filter($product->get_attributes(), "\x77\143\137\x61\x74\164\162\151\x62\165\x74\x65\x73\x5f\141\162\162\x61\x79\x5f\x66\151\x6c\x74\x65\x72\137\x76\x69\163\x69\x62\154\x65");
        goto ymqsaggkkwkoomgc;
        woweqwuwmegoecgu:
        $uomewyckeuqoqocu["\x64\151\155\x65\x6e\x73\151\x6f\156\163"] = ["\154\141\142\145\154" => __("\x44\151\x6d\x65\156\x73\151\x6f\156\x73", "\x77\x6f\157\x63\157\x6d\155\x65\x72\143\x65"), "\166\141\x6c\165\145" => wc_format_dimensions($product->get_dimensions(false))];
        goto csmosoqqwicqwuqg;
        yikaoaeoqsgieqoq:
        if (!($qaiwqwwemmyyqosy && $product->has_dimensions())) {
            goto cmomkawiiikmcccq;
        }
        goto woweqwuwmegoecgu;
        mqweissqoiqukwuc:
        $uomewyckeuqoqocu = [];
        goto uycysmimgmsawemy;
        cccusomswoycqgye:
        return DecoratorHook::sscegwueamckwmcy("\167\157\x6f\x63\157\155\155\x65\x72\x63\145\137\x64\x69\x73\x70\x6c\141\171\137\x70\162\x6f\144\x75\143\x74\137\141\x74\x74\162\x69\142\x75\x74\x65\163", $uomewyckeuqoqocu, $product);
        goto yqemqgiwcuoowges;
        uycysmimgmsawemy:
        $product = self::aqasygcsqysmmyke($product);
        goto ggiswsmgccuackao;
        mwqqkaiwyugqakeq:
        msiwaicoesyagumk:
        goto yikaoaeoqsgieqoq;
        sgaamousiakskkko:
        $uomewyckeuqoqocu["\167\x65\151\x67\x68\x74"] = ["\x6c\141\x62\x65\x6c" => __("\127\145\x69\x67\x68\x74", "\167\x6f\x6f\143\x6f\155\155\x65\162\143\x65"), "\x76\141\x6c\x75\145" => wc_format_weight($product->get_weight())];
        goto mwqqkaiwyugqakeq;
        suuwwusyekuwqgwi:
        ksosaiwckkacoeww:
        goto cccusomswoycqgye;
        yqemqgiwcuoowges:
    }
    
    public static function ucqakycuekccuocw($aqykuigiuwmmcieu = self::OBJECT) : ?array
    {
        goto yokquaecwougwgme;
        swwmuqsewiaswasq:
        return $seyqqsmuaiegkeeq;
        goto oiecwmgwkgscuaom;
        kssuoaucoagqicew:
        $seyqqsmuaiegkeeq = DecoratorTaxonomy::qgckgkwskmsomoqs("\x70\x72\x6f\x64\165\143\x74", $aqykuigiuwmmcieu);
        goto egaqcmmgioyoskak;
        gqmqqaumkqkyyuom:
        if (!empty($seyqqsmuaiegkeeq)) {
            goto eawiyomugeiugoca;
        }
        goto kssuoaucoagqicew;
        egaqcmmgioyoskak:
        ManipulateArray::unset($seyqqsmuaiegkeeq, ["\x70\162\x6f\144\x75\x63\x74\x5f\x73\x68\151\x70\x70\x69\x6e\x67\x5f\x63\x6c\x61\x73\x73", "\x70\162\157\144\x75\x63\164\x5f\166\151\x73\151\142\151\154\x69\x74\171", "\x70\x72\157\144\165\x63\164\137\x74\x79\x70\x65"]);
        goto oiekocisyuaicoey;
        yokquaecwougwgme:
        static $seyqqsmuaiegkeeq = [];
        goto gqmqqaumkqkyyuom;
        oiekocisyuaicoey:
        eawiyomugeiugoca:
        goto swwmuqsewiaswasq;
        oiecwmgwkgscuaom:
    }
    
    public static function mywkcmciykgikmyc($product, $kesssewsiegssiya, $ywmkwiwkosakssii = []) : array
    {
        return DecoratorWoocommerce::mywkcmciykgikmyc(self::omwkqcuwceweymcc($product), $kesssewsiegssiya, $ywmkwiwkosakssii);
    }
    
    public static function iwoqeaamkmyoquwm($product, $scwmkmciyywokcug) : array
    {
        goto uccuwggkcciaascm;
        swasewcuckegeuuy:
        $oqseeekuqisekiwy = array_map("\145\x73\143\x5f\163\161\x6c", DecoratorWoocommerce::ouqoeawmueswmksm());
        goto wqeaomqyumqiocka;
        oimwsegacayecyko:
        $product = self::omwkqcuwceweymcc($product);
        goto swasewcuckegeuuy;
        wqeaomqyumqiocka:
        return $wpdb->get_col("\xa\x9\11\x9\123\x45\114\105\x43\x54\x20\157\151\x73\x2e\157\162\144\x65\162\x5f\151\144\12\x9\x9\x9\x46\122\x4f\115\x20{$yuwymayicwwqiske}\x77\157\157\143\x6f\x6d\155\x65\x72\143\x65\x5f\x6f\162\144\x65\x72\137\151\x74\145\x6d\163\40\x61\163\x20\x6f\x69\163\12\x9\x9\x9\x4c\105\x46\124\40\112\117\x49\x4e\x20{$yuwymayicwwqiske}\167\x6f\157\x63\157\155\155\145\162\143\x65\x5f\x6f\x72\x64\x65\x72\137\x69\164\x65\x6d\155\x65\x74\141\40\x61\163\40\x6f\x69\155\40\117\x4e\40\x6f\x69\x73\56\x6f\162\144\145\x72\x5f\151\x74\x65\x6d\x5f\151\144\x20\75\40\157\151\x6d\56\x6f\x72\144\145\162\137\x69\x74\145\x6d\137\x69\x64\12\x9\x9\x9\x4c\x45\106\124\x20\112\x4f\x49\116\x20{$wpdb->posts}\40\x41\x53\40\x70\40\117\x4e\x20\x6f\x69\163\56\x6f\162\144\145\x72\137\151\x64\x20\x3d\x20\160\x2e\111\104\xa\x9\11\x9\x4c\105\x46\x54\x20\112\x4f\x49\x4e\x20{$wpdb->postmeta}\40\101\x53\40\x70\155\40\x4f\x4e\x20\x6f\151\x73\56\x6f\162\144\x65\162\137\151\x64\40\x3d\x20\160\155\56\155\145\x74\141\x5f\x69\x64\xa\x9\x9\11\x57\110\105\x52\105\x20\x70\56\x70\157\163\164\137\164\x79\160\x65\40\75\x20\47\x73\x68\x6f\x70\x5f\157\x72\144\x65\x72\x27\xa\x9\x9\x9\101\x4e\x44\40\160\56\x70\x6f\163\x74\137\163\x74\141\x74\x75\x73\40\111\x4e\x20\50\x20\47\x77\x63\x2d" . implode("\x27\x2c\40\47\x77\x63\x2d", $oqseeekuqisekiwy) . "\x27\40\51\12\11\11\x9\x41\x4e\x44\x20\x6f\x69\163\56\x6f\162\144\145\162\x5f\151\164\x65\x6d\137\x74\171\160\145\x20\75\x20\x27\x6c\x69\156\145\x5f\x69\164\145\x6d\47\12\11\x9\x9\101\x4e\x44\40\x6f\151\155\x2e\x6d\x65\x74\x61\x5f\153\x65\x79\40\x3d\x20\47\137\x70\x72\157\x64\x75\143\164\137\151\x64\47\12\x9\11\11\x41\x4e\104\x20\157\x69\x6d\x2e\155\145\164\x61\x5f\166\x61\x6c\x75\x65\40\75\40\47{$product}\x27\12\11\x9\x9\x41\116\104\x20\160\x6d\56\155\x65\x74\x61\x5f\x6b\x65\171\40\75\40\47\137\143\x75\x73\x74\x6f\155\x65\162\137\165\x73\145\x72\x27\12\x9\11\x9\101\x4e\104\x20\160\x6d\x2e\155\145\164\141\x5f\166\141\x6c\x75\x65\x20\x3d\40\47{$scwmkmciyywokcug}\x27\xa\40\x20\x20\40\x9");
        goto quookucgqymiqocy;
        uccuwggkcciaascm:
        global $wpdb;
        goto qmgqakuqmkigkgcw;
        qmgqakuqmkigkgcw:
        $yuwymayicwwqiske = $wpdb->prefix;
        goto oimwsegacayecyko;
        quookucgqymiqocy:
    }
    
    public static function giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee = null, $yuwymayicwwqiske = "\x77\157\157\x63\x6f\155\155\145\x72\143\145\x5f")
    {
        goto qqeycioeqswikseq;
        kgwgksykmqweowgi:
        $uusmaiomayssaecw = $yuwymayicwwqiske . $uusmaiomayssaecw;
        goto gygmukceqmuewaim;
        qqeycioeqswikseq:
        if (!$yuwymayicwwqiske) {
            goto gaoeaaeausmqguee;
        }
        goto kgwgksykmqweowgi;
        gygmukceqmuewaim:
        gaoeaaeausmqguee:
        goto sokekecgsmeyesqq;
        sokekecgsmeyesqq:
        return DecoratorOption::get($uusmaiomayssaecw, $ggauoeuaesiymgee);
        goto ugkkcqkwssgykcyo;
        ugkkcqkwssgykcyo:
    }
    
    public static function cswwmqwaucwuqcaq($product, $ymkomoccmymcoiea) : array
    {
        goto oomiawgcsyaaqaao;
        owauaaeeaeoqgiii:
        foreach ($qqswgiawgeaeoecu as &$eqgoocgaqwqcimie) {
            $eqgoocgaqwqcimie = make_clickable(esc_html($eqgoocgaqwqcimie));
            qqoaguokgcoeieyi:
        }
        goto eymiaowquwyiggie;
        qiqmamemmguaieiw:
        $qqswgiawgeaeoecu = $ymkomoccmymcoiea->get_options();
        goto owauaaeeaeoqgiii;
        kgecwaiwqeacyqge:
        return (array) DecoratorHook::sscegwueamckwmcy("\167\x6f\x6f\x63\x6f\x6d\x6d\x65\x72\x63\145\x5f\141\x74\x74\162\x69\142\x75\164\145\x5f\157\x75\x74\160\165\x74", $mmykcgusskuuuace, $ymkomoccmymcoiea, $product);
        goto wsasggmqwyisgoiq;
        kgkameuwwcmaawwg:
        goto ecuosiaqyaoqckao;
        goto ssooqmscuqwmcoeu;
        oomiawgcsyaaqaao:
        $qqswgiawgeaeoecu = [];
        goto wokmesqciaaskwoe;
        asmkyaumussymycs:
        $mmykcgusskuuuace = ["\x76\141\154\x75\145" => DecoratorHook::sscegwueamckwmcy("\x77\x6f\157\143\157\155\x6d\145\162\143\145\137\x61\x74\x74\x72\151\x62\x75\164\x65", wptexturize(implode("\x2c\40", $qqswgiawgeaeoecu)), $ymkomoccmymcoiea, $qqswgiawgeaeoecu), "\x6c\141\142\145\x6c" => DecoratorWoocommerce::qysciqmmoqsaqmqk($ymkomoccmymcoiea->get_name(), $product)];
        goto kgecwaiwqeacyqge;
        ssooqmscuqwmcoeu:
        skoaowmysckmmocc:
        goto kamkksumiggskuay;
        qwykccyeiymiomyi:
        ecuosiaqyaoqckao:
        goto asmkyaumussymycs;
        wokmesqciaaskwoe:
        if ($ymkomoccmymcoiea->is_taxonomy()) {
            goto skoaowmysckmmocc;
        }
        goto qiqmamemmguaieiw;
        kamkksumiggskuay:
        $kesssewsiegssiya = $ymkomoccmymcoiea->get_taxonomy_object();
        goto iwqasgooqqmcyqmy;
        iwqasgooqqmcyqmy:
        $uyuaosigqymaqsaa = self::mywkcmciykgikmyc($product, $ymkomoccmymcoiea->get_name(), ["\x66\151\145\x6c\x64\163" => "\141\154\x6c"]);
        goto keuikgoukmwokcoa;
        yqccqmsucoukqkmw:
        coqswqysimeumkei:
        goto qwykccyeiymiomyi;
        keuikgoukmwokcoa:
        foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
            goto cmicuicekiiowekc;
            wwuwumqemissswei:
            ecqswsccqomawuoy:
            goto qwsgukcwoomuuais;
            cmicuicekiiowekc:
            $ymqmyyeuycgmigyo = esc_html($iwewcwusemqaiggk->name);
            goto eeuosekauyeiqoie;
            eoikakegoqcywcui:
            iwwayiuyaecikeku:
            goto ccmgkkiyameumyoi;
            wmkkqgiamggikgsi:
            $qqswgiawgeaeoecu[] = $ymqmyyeuycgmigyo;
            goto wqcseagmwswqeqgu;
            wqcseagmwswqeqgu:
            goto iwwayiuyaecikeku;
            goto wwuwumqemissswei;
            eeuosekauyeiqoie:
            if ($kesssewsiegssiya->attribute_public) {
                goto ecqswsccqomawuoy;
            }
            goto wmkkqgiamggikgsi;
            ccmgkkiyameumyoi:
            muaaeioooicwskgu:
            goto gsqmakgaqakuawue;
            qwsgukcwoomuuais:
            $qqswgiawgeaeoecu[] = ManipulateHTML::uuccukgasskgimsq("\x61", ["\150\162\145\146" => ManipulateTerm::qmgcisuuikgmqcsu(ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk), $ymkomoccmymcoiea->get_name()), "\162\145\154" => "\x74\141\x67"], $ymqmyyeuycgmigyo);
            goto eoikakegoqcywcui;
            gsqmakgaqakuawue:
        }
        goto yqccqmsucoukqkmw;
        eymiaowquwyiggie:
        ggoceeqkiqmqkiwg:
        goto kgkameuwwcmaawwg;
        wsasggmqwyisgoiq:
    }
    
    public static function cmussoegoauyyguw($aiamqeawckcsuaou, $ymqmyyeuycgmigyo = '', $eqgoocgaqwqcimie = '', $kekikiwsckuiyuyo = false)
    {
        goto vosacywygmcokgkw;
        iiskacegeekeseky:
        $woocommerce->session->{$aiamqeawckcsuaou}($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie);
        goto ukoqsuaqouuqkuig;
        ogyguukmcmoqkqei:
        goto aeoicygsgoeeqguk;
        goto wcuguimgckkocagq;
        ioimwcssyaqsuqma:
        cyycimgiyeqgssuy:
        goto oekkmwkqkuqwckui;
        cwqmuqiqouooguqm:
        $cmussoegoauyyguw = $woocommerce->session;
        goto osiwmoqisiiogawm;
        womskaaiqugkuggi:
        goto okseeygkgkqkwsgw;
        goto yimasagkemgkoeqq;
        esgwyeyackaweskk:
        if (!$kekikiwsckuiyuyo) {
            goto ciamwmmiqcseaeuc;
        }
        goto qwamueuasumwowym;
        oekkmwkqkuqwckui:
        goto gykoquuuowomucyq;
        goto wqiyuoiwqekmsues;
        ykqswiqaqaogkksc:
        $woocommerce->session->{$ymqmyyeuycgmigyo} = $eqgoocgaqwqcimie;
        goto ogyguukmcmoqkqei;
        wcuguimgckkocagq:
        ykcmokmsimckuego:
        goto iiskacegeekeseky;
        qwamueuasumwowym:
        unset($woocommerce->session->{$ymqmyyeuycgmigyo});
        goto amuoiqyswiesyyck;
        qmusucqwswsqsgwc:
        if (!($aiamqeawckcsuaou == "\147\145\164")) {
            goto cyycimgiyeqgssuy;
        }
        goto imwkaaqausgqquoo;
        amuoiqyswiesyyck:
        ciamwmmiqcseaeuc:
        goto ioimwcssyaqsuqma;
        osiwmoqisiiogawm:
        if ($aiamqeawckcsuaou == "\163\145\x74") {
            goto wewkyisikaywwcmu;
        }
        goto qmusucqwswsqsgwc;
        ukoqsuaqouuqkuig:
        aeoicygsgoeeqguk:
        goto amocqywwugaccike;
        acsmysaakckkkkie:
        $eqgoocgaqwqcimie = $cmussoegoauyyguw->{$ymqmyyeuycgmigyo};
        goto womskaaiqugkuggi;
        cckmsweoqwaucgcs:
        return $eqgoocgaqwqcimie;
        goto youqqmmoywqeggeg;
        caoqqqweswimckec:
        $eqgoocgaqwqcimie = $cmussoegoauyyguw->{$aiamqeawckcsuaou}($ymqmyyeuycgmigyo);
        goto cumieyuwywwwsaqg;
        imwkaaqausgqquoo:
        if (method_exists($cmussoegoauyyguw, $aiamqeawckcsuaou)) {
            goto aqqgkiieakuwceea;
        }
        goto acsmysaakckkkkie;
        wqiyuoiwqekmsues:
        wewkyisikaywwcmu:
        goto eawmqueomoausgog;
        yimasagkemgkoeqq:
        aqqgkiieakuwceea:
        goto caoqqqweswimckec;
        eawmqueomoausgog:
        if (method_exists($cmussoegoauyyguw, $aiamqeawckcsuaou)) {
            goto ykcmokmsimckuego;
        }
        goto ykqswiqaqaogkksc;
        amocqywwugaccike:
        gykoquuuowomucyq:
        goto cckmsweoqwaucgcs;
        vosacywygmcokgkw:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto cwqmuqiqouooguqm;
        cumieyuwywwwsaqg:
        okseeygkgkqkwsgw:
        goto esgwyeyackaweskk;
        youqqmmoywqeggeg:
    }
    
    public static function ceusksoaisoswmia($umwqusowiqmyseom = null) : array
    {
        goto wgkecsowgumikqqm;
        ngaquoioqeukmoyu:
        if (!$umwqusowiqmyseom) {
            goto qeycwoqakqucwscm;
        }
        goto qcysusmwyoeoguki;
        mawoaecogwegmcoc:
        qeycwoqakqucwscm:
        goto isqyiumsggacqmak;
        wgkecsowgumikqqm:
        $oammesyieqmwuwyi = self::uakuwyoiooeqqiow();
        goto gusamkkgwqmamcke;
        kuoqweoiooqosmoe:
        $umwqusowiqmyseom = self::mmmcswscsiecscwg($umwqusowiqmyseom);
        goto ngaquoioqeukmoyu;
        isqyiumsggacqmak:
        oyaeggoyqusqqcyo:
        goto eicuumeiweosiaqy;
        qcysusmwyoeoguki:
        $oammesyieqmwuwyi = $umwqusowiqmyseom->get_items();
        goto mawoaecogwegmcoc;
        eicuumeiweosiaqy:
        return $oammesyieqmwuwyi;
        goto dwaiimguqaaikoso;
        gusamkkgwqmamcke:
        if (!(!$oammesyieqmwuwyi && $umwqusowiqmyseom)) {
            goto oyaeggoyqusqqcyo;
        }
        goto kuoqweoiooqosmoe;
        dwaiimguqaaikoso:
    }
    
    public static function uwyscmkeyeuqyukk($ywmkwiwkosakssii = []) : string
    {
        goto qmwkauswsyowckua;
        kakyqyqyweuaoqmg:
        uqiisswyoggsckqg:
        goto ecgwcgmuemqagggm;
        siequuwyyyusqeie:
        $wwgucssaecqekuek = ["\x63\154\x61\163\163" => "\143\150\x65\x63\153\142\x6f\170", self::TYPE => "\143\150\145\143\x6b\x62\x6f\x78", self::NAME => ManipulateArray::get($ywmkwiwkosakssii, self::NAME)];
        goto goamosigosumsmkq;
        goamosigosumsmkq:
        if (!ManipulateArray::get($ywmkwiwkosakssii, self::VALUE, false)) {
            goto uqiisswyoggsckqg;
        }
        goto wuwaakyeqqeeogyy;
        wuwaakyeqqeeogyy:
        $wwgucssaecqekuek["\143\x68\145\x63\153\x65\144"] = true;
        goto kakyqyqyweuaoqmg;
        ecgwcgmuemqagggm:
        return ManipulateHTML::uuccukgasskgimsq("\154\141\x62\x65\x6c", ["\143\154\x61\163\x73" => "\164\x69\x70\163", "\x64\141\x74\141\55\164\x69\160" => ManipulateArray::get($ywmkwiwkosakssii, "\164\151\x70")], [ManipulateArray::get($ywmkwiwkosakssii, self::LABEL), ManipulateHTML::qgsekwygcgawekeq("\151\156\160\165\164", $wwgucssaecqekuek)]);
        goto igauaamasosqcyys;
        qmwkauswsyowckua:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x74\151\160" => '', self::NAME => '', self::LABEL => '', self::VALUE => '']);
        goto siequuwyyyusqeie;
        igauaamasosqcyys:
    }
}
