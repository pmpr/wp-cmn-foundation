<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
            owymcaeysicqacya:
            aaoywwqcimiwiywu:
            goto eiqiqqoyqcaiiwqo;
            cemsuwwwgiqiyigo:
            $sogksuscggsicmac[$ymqmyyeuycgmigyo] = ["\x61\x74\164\162\x69\x62\x75\x74\145" => $kesssewsiegssiya, "\164\x65\162\x6d" => []];
            goto owymcaeysicqacya;
            eiqiqqoyqcaiiwqo:
            ayccewcmckaqowek:
            goto amescycuaoumygqc;
            oeguggskkegamuoo:
            $kesssewsiegssiya = ManipulateArray::get($seyqqsmuaiegkeeq, ManipulateString::wiecmkiugmyyqiqc("\160\141\x5f", '', $ymqmyyeuycgmigyo));
            goto uimyekysswywuoyi;
            amescycuaoumygqc:
        }
        goto agiieggoecqiaoum;
        ksgumesawyqswaoa:
        return $sogksuscggsicmac;
        goto ieycaaisagswkaiy;
        agiieggoecqiaoum:
        kmayiocekggkoyso:
        goto ksgumesawyqswaoa;
        iwecwgwiccuemkye:
        $sogksuscggsicmac = [];
        goto qeoawooaykmyokuo;
        ieycaaisagswkaiy:
    }
    
    public static function kyycwccmaemgokwu($smwiiesyqsgyisos) : string
    {
        goto ueekmmegamoyagog;
        qeayouqugioyieei:
        $smwiiesyqsgyisos = new WC_Coupon($smwiiesyqsgyisos);
        goto gogyuwukcgmycsqw;
        ueekmmegamoyagog:
        if ($smwiiesyqsgyisos instanceof WC_Coupon) {
            goto emyeissowqweyqec;
        }
        goto qeayouqugioyieei;
        gogyuwukcgmycsqw:
        emyeissowqweyqec:
        goto mgscesskeauowgsu;
        mgscesskeauowgsu:
        
        return $smwiiesyqsgyisos->get_code();
        goto kyowegyokkesuugi;
        kyowegyokkesuugi:
    }
    
    public static function oeeuywgiaywkimek($smwiiesyqsgyisos)
    {
        goto uowaoiwemyccakim;
        sccoieksocaiaogm:
        $smwiiesyqsgyisos = false;
        goto gskmiyeoisqoqkci;
        gukkaswwecmuoayo:
        if (self::kyycwccmaemgokwu($smwiiesyqsgyisos)) {
            goto qyyiiuuscqgeowya;
        }
        goto sccoieksocaiaogm;
        iaqiocmqqiaeuwyg:
        return $smwiiesyqsgyisos;
        goto yasegwakoscmkouu;
        uowaoiwemyccakim:
        $smwiiesyqsgyisos = new WC_Coupon($smwiiesyqsgyisos);
        goto gukkaswwecmuoayo;
        gskmiyeoisqoqkci:
        qyyiiuuscqgeowya:
        goto iaqiocmqqiaeuwyg;
        yasegwakoscmkouu:
    }
    
    public static function cuwomiomuqqkayoo($ioakeqoosmkukeaa)
    {
        goto gkuyqiyuaquuyaay;
        masgkciqasaucoss:
        
        $wwcysoksoogyacog->add_discount($ioakeqoosmkukeaa);
        goto eogaamwmasgugqgy;
        eogaamwmasgugqgy:
        osamqwsmcawigggw:
        goto weyoiomaeciyggug;
        gkuyqiyuaquuyaay:
        $wwcysoksoogyacog = ManipulateWoocommerce::uceecgsoicggikeu();
        goto aqyqqgkiycokskwq;
        aqyqqgkiycokskwq:
        if (!$wwcysoksoogyacog) {
            goto osamqwsmcawigggw;
        }
        goto masgkciqasaucoss;
        weyoiomaeciyggug:
    }
    
    public static function mmmcswscsiecscwg($umwqusowiqmyseom)
    {
        goto eaqsewgiawoasqgu;
        umeemqiuewswymkw:
        return $umwqusowiqmyseom;
        goto qweqcmkkiqkkukis;
        eaqsewgiawoasqgu:
        if (is_a($umwqusowiqmyseom, "\x57\103\137\117\x72\x64\x65\x72")) {
            goto oockcigwicccqyko;
        }
        goto kaaasaqewwykmikk;
        cmawmeioiuegssuw:
        oockcigwicccqyko:
        goto umeemqiuewswymkw;
        kaaasaqewwykmikk:
        $umwqusowiqmyseom = DecoratorWoocommerce::mmmcswscsiecscwg($umwqusowiqmyseom);
        goto cmawmeioiuegssuw;
        qweqcmkkiqkkukis:
    }
    
    public static function wcqicmcuiewessgy($umwqusowiqmyseom) : string
    {
        goto ugiuoawueimimiwk;
        iwekcauymcaoooie:
        return $iueymcwwscwqkiyq;
        goto mmksuuciiyoyaaoa;
        oiseukwsseayeamo:
        $iueymcwwscwqkiyq = DecoratorWoocommerce::ueqkgikommgyqmoa($umwqusowiqmyseom->get_status());
        goto awcwocukswgsaymk;
        aouoeqamkuemyeqa:
        $iueymcwwscwqkiyq = '';
        goto ukcyuqaycogiiiye;
        ukcyuqaycogiiiye:
        if (!$umwqusowiqmyseom) {
            goto qgkmsokwcmmawiey;
        }
        goto oiseukwsseayeamo;
        awcwocukswgsaymk:
        qgkmsokwcmmawiey:
        goto iwekcauymcaoooie;
        ugiuoawueimimiwk:
        $umwqusowiqmyseom = self::mmmcswscsiecscwg($umwqusowiqmyseom);
        goto aouoeqamkuemyeqa;
        mmksuuciiyoyaaoa:
    }
    
    public static function susisykioakswkmm($umwqusowiqmyseom) : string
    {
        goto qkkcekocsgakoqqo;
        icuauuecukomyoss:
        oowymeqscqicmiac:
        goto egkiyyuywuiekisw;
        koyyawuukocokcme:
        $umwqusowiqmyseom = self::mmmcswscsiecscwg($umwqusowiqmyseom);
        goto aeusyyagoyskceiy;
        aeusyyagoyskceiy:
        if (!$umwqusowiqmyseom) {
            goto saeeegogmqsyimqk;
        }
        goto ioeaawqkkakemsum;
        mukmccquscqkeeuy:
        $qsegigkmaaskiaeo = ucwords($mkucggyaiaukqoce->display_name);
        goto icuauuecukomyoss;
        qkkcekocsgakoqqo:
        $qsegigkmaaskiaeo = '';
        goto koyyawuukocokcme;
        kaacgcseugewuceu:
        kcyccscigsuuiomi:
        goto ueioekeyeekmugss;
        smwwcycswiyuqouu:
        nacqwwcyskisiqmi:
        goto isgekmewmqgmwiky;
        ymmwikogcaccsgyo:
        quweyqomsoqcwmae:
        goto xoyesscyiuyyoaao;
        gyqecessamsiywea:
        if ($umwqusowiqmyseom->get_billing_company()) {
            goto kcyccscigsuuiomi;
        }
        goto cywckaugcygcssie;
        cywckaugcygcssie:
        if (!$umwqusowiqmyseom->get_customer_id()) {
            goto seiyywsmwamccscw;
        }
        goto ascyoecaiyskamoo;
        isgekmewmqgmwiky:
        goto quweyqomsoqcwmae;
        goto yaqamykgsuagaksc;
        kkeeggmwkmuwswca:
        return $qsegigkmaaskiaeo;
        goto sgsmiecuouaseyeu;
        gkecqaygqygkkgwc:
        $qsegigkmaaskiaeo = trim(sprintf("\x25\163\x20\x25\x73", $umwqusowiqmyseom->get_billing_first_name(), $umwqusowiqmyseom->get_billing_last_name()));
        goto ymmwikogcaccsgyo;
        egkiyyuywuiekisw:
        seiyywsmwamccscw:
        goto cookqcosymocwyqg;
        yaqamykgsuagaksc:
        aowgayqaooygayky:
        goto gkecqaygqygkkgwc;
        cookqcosymocwyqg:
        goto nacqwwcyskisiqmi;
        goto kaacgcseugewuceu;
        xoyesscyiuyyoaao:
        saeeegogmqsyimqk:
        goto kkeeggmwkmuwswca;
        ascyoecaiyskamoo:
        $mkucggyaiaukqoce = ManipulateUser::get($umwqusowiqmyseom->get_customer_id(), true);
        goto wsemcaiucsysuqiq;
        ioeaawqkkakemsum:
        if ($umwqusowiqmyseom->get_billing_first_name() || $umwqusowiqmyseom->get_billing_last_name()) {
            goto aowgayqaooygayky;
        }
        goto gyqecessamsiywea;
        ueioekeyeekmugss:
        $qsegigkmaaskiaeo = trim($umwqusowiqmyseom->get_billing_company());
        goto smwwcycswiyuqouu;
        wsemcaiucsysuqiq:
        if (!$mkucggyaiaukqoce) {
            goto oowymeqscqicmiac;
        }
        goto mukmccquscqkeeuy;
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
        kmeesswcuaququqw:
        $wwcysoksoogyacog = self::uceecgsoicggikeu();
        goto qqmsywmwmygigewc;
        oqiowcuqsqwyukgi:
        if (function_exists("\167\x63\137\145\155\160\164\x79\x5f\143\141\x72\164")) {
            goto agimkskeiiemakqe;
        }
        goto kmeesswcuaququqw;
        ysmyakmkagcqqswo:
        goto uuwiiwywmwyoymgi;
        goto makosoyccwoyooyu;
        qqmsywmwmygigewc:
        if (!$wwcysoksoogyacog) {
            goto muwyoumcckugweeg;
        }
        goto cegciyyeemaaawuo;
        ocmsggeccyugikwu:
        muwyoumcckugweeg:
        goto ysmyakmkagcqqswo;
        cmssgciwquymiacc:
        wc_empty_cart();
        goto uyscswaymikycueg;
        cegciyyeemaaawuo:
        $wwcysoksoogyacog->empty_cart();
        goto ocmsggeccyugikwu;
        uyscswaymikycueg:
        uuwiiwywmwyoymgi:
        goto qiaowqciwwyiucae;
        makosoyccwoyooyu:
        agimkskeiiemakqe:
        goto cmssgciwquymiacc;
        qiaowqciwwyiucae:
    }
    
    public static function uakuwyoiooeqqiow() : array
    {
        goto iamqccceoygiywgo;
        qiycageymgowgicg:
        return $ygwoqcwsaggqoamw;
        goto yususwsyymskuwge;
        cgyaokocoymsqakq:
        aaqoyoyiagqcguse:
        goto qiycageymgowgicg;
        wgeuaaggcwocgomy:
        $ygwoqcwsaggqoamw = $wwcysoksoogyacog->get_cart_contents();
        goto cgyaokocoymsqakq;
        wukmywyisgqyiwku:
        if (!$wwcysoksoogyacog) {
            goto aaqoyoyiagqcguse;
        }
        goto wgeuaaggcwocgomy;
        qgoicagqowggweeq:
        $ygwoqcwsaggqoamw = [];
        goto wukmywyisgqyiwku;
        iamqccceoygiywgo:
        $wwcysoksoogyacog = self::uceecgsoicggikeu();
        goto qgoicagqowggweeq;
        yususwsyymskuwge:
    }
    
    public static function geoemsmuouqcqmei() : ?string
    {
        goto aocsmigsemowswge;
        aocsmigsemowswge:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto iikgymkaqikicssa;
        iikgymkaqikicssa:
        if (function_exists("\167\x63\x5f\x67\x65\x74\137\x63\141\162\164\137\165\162\x6c")) {
            goto koiweeaoqaqgeiow;
        }
        goto gokisgaagiawmqmg;
        mackmiksusgquqku:
        ieukeyosucwcigcq:
        goto kkcskacouykscykm;
        gokisgaagiawmqmg:
        return $woocommerce->cart->get_cart_url();
        goto gkoyauwycuyumiey;
        gkoyauwycuyumiey:
        goto ieukeyosucwcigcq;
        goto uguaomoemkcuqksw;
        uaycgmwwmeqsqoss:
        return wc_get_cart_url();
        goto mackmiksusgquqku;
        uguaomoemkcuqksw:
        koiweeaoqaqgeiow:
        goto uaycgmwwmeqsqoss;
        kkcskacouykscykm:
    }
    
    public static function ayseokmqycoqaigc() : bool
    {
        return class_exists("\x77\x6f\157\143\157\155\x6d\145\162\x63\x65") && ManipulatePlugin::ggocakcisguuokai("\x77\x6f\x6f\143\x6f\x6d\x6d\145\162\143\145\57\x77\x6f\157\x63\x6f\x6d\155\145\x72\143\x65\x2e\160\150\x70");
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
        yumugwyseyuawuae:
        $aokagokqyuysuksm = $umwqusowiqmyseom->get_id();
        goto kuekaewgqsagkokm;
        qqoeqgqkmegyquie:
        $aokagokqyuysuksm = $umwqusowiqmyseom;
        goto gcaeuwucgqwocegi;
        gcaeuwucgqwocegi:
        if (!is_a($umwqusowiqmyseom, "\x57\103\x5f\117\162\144\x65\162")) {
            goto sugiiygakykaogou;
        }
        goto yumugwyseyuawuae;
        eicoyaciiwoweyow:
        return $aokagokqyuysuksm;
        goto ccykaqwcuqguuesk;
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
        kgyiaoswiyukcguu:
        if (is_a($product, "\x57\x43\137\120\x72\x6f\x64\165\143\x74")) {
            goto aoywumwiwsuugsae;
        }
        goto ygogeqikkaiewqak;
        ygogeqikkaiewqak:
        $product = DecoratorWoocommerce::aqasygcsqysmmyke($product);
        goto qgwksesamqckoysm;
        iyqwcuwcoqsqiqey:
        return $product;
        goto uykoiemomggyyaqm;
        uykoiemomggyyaqm:
    }
    
    public static function mkiigkeqaeiwqyua() : bool
    {
        return in_array(DecoratorWoocommerce::useawgqusasoukqm(), ["\111\122\124", "\111\122\122"]);
    }
    
    public static function eywqaumgkccycyau($aokagokqyuysuksm, $ywmkwiwkosakssii = [])
    {
        goto sqcucoqwgcookais;
        igoiiguaiiyskqye:
        $wkyuegumgeqqqmyg = [];
        goto osqscmomgeumekym;
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
            maeoaamgcykqqcac:
            omygqyyicqyuswqs:
            goto eqmiagqymgsqikio;
            ouekywuyisaayusa:
            caeissowkcqcoisu:
            goto maeoaamgcykqqcac;
            eqmiagqymgsqikio:
        }
        goto isqoqyuosaeauika;
        cqkmekqeuoamwwik:
        DecoratorWoocommerce::eywqaumgkccycyau($ywmkwiwkosakssii);
        goto gkqeioiiywequymm;
        isqoqyuosaeauika:
        yqusmmkkqyqusoug:
        goto cqkmekqeuoamwwik;
        sqcucoqwgcookais:
        $ywmkwiwkosakssii[self::ID] = $aokagokqyuysuksm;
        goto igoiiguaiiyskqye;
        gkqeioiiywequymm:
    }
    
    public static function oseiymowmquqkaca() : bool
    {
        global $woocommerce_loop;
        return DecoratorWoocommerce::kmymkocwcawgeccm() && isset($woocommerce_loop["\x6e\141\x6d\x65"]) && in_array($woocommerce_loop["\x6e\x61\x6d\145"], ["\x72\145\154\141\x74\x65\x64", "\165\160\x20\55\x20\x73\145\154\x6c\163"]);
    }
    
    public static function kyckwuuiqwmyoqma() : ?\WC_Query
    {
        goto eqskaoiwkcikoock;
        ekwgywkksceymecu:
        aswqcceuwmmqciec:
        goto aesqskyuooksouwa;
        iammguyywsgygewo:
        $gqgemcmoicmgaqie = $woocommerce->query;
        goto ekwgywkksceymecu;
        cowcyoscwiogwoss:
        if (!$woocommerce) {
            goto aswqcceuwmmqciec;
        }
        goto iammguyywsgygewo;
        aesqskyuooksouwa:
        return $gqgemcmoicmgaqie;
        goto mkuoeggssimkqoee;
        eqskaoiwkcikoock:
        $gqgemcmoicmgaqie = null;
        goto wwowwogiasqyegco;
        wwowwogiasqyegco:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto cowcyoscwiogwoss;
        mkuoeggssimkqoee:
    }
    
    public static function kkewuuisyiscmgyc() : WooCommerce
    {
        goto umeuqqawicigwmmw;
        wocmuysuywyaeyia:
        ockwkskmgeqemqwm:
        goto iiwkgiyuiuskiusa;
        ywmkeguguoigeago:
        global $woocommerce;
        goto qoieockmumciwweq;
        umeuqqawicigwmmw:
        if (function_exists("\x57\103")) {
            goto ockwkskmgeqemqwm;
        }
        goto ywmkeguguoigeago;
        eqesiosukaowuquq:
        eqaqiuescmyiwsoq:
        goto swyaqueaoyekgomq;
        iiwkgiyuiuskiusa:
        $mksyucucyswaukig = WC();
        goto eqesiosukaowuquq;
        swyaqueaoyekgomq:
        return $mksyucucyswaukig;
        goto owgiiuqeeesguqsq;
        qoieockmumciwweq:
        $mksyucucyswaukig = $woocommerce;
        goto qmccgkcskscsakcu;
        qmccgkcskscsakcu:
        goto eqaqiuescmyiwsoq;
        goto wocmuysuywyaeyia;
        owgiiuqeeesguqsq:
    }
    
    public static function scgumisucgwskyqk($product, $mgkceomocowocqyo = "\x76\x69\x65\167") : string
    {
        goto gmqceeyooqckwwms;
        qqsyqgokqqsqoooe:
        if (!$product) {
            goto ycaqamikucimygma;
        }
        goto amqmckimqwauwkug;
        comswgimqmwcyyas:
        return $aumscagymwyyicag;
        goto sigcqyomcgiyamkq;
        owgocmqmgsgeayue:
        $eyuymeqcioasuyyi = $product->get_regular_price($mgkceomocowocqyo);
        goto usuiacsqegaeywgs;
        gmqceeyooqckwwms:
        $aumscagymwyyicag = '';
        goto ikckcqggoqoimoio;
        ikckcqggoqoimoio:
        $product = self::aqasygcsqysmmyke($product);
        goto qqsyqgokqqsqoooe;
        gowguesicegmegqw:
        yqmkgcicoecyuiku:
        goto owgocmqmgsgeayue;
        emsoowiaoaoayqyy:
        goto ueoykiauoyuauwsi;
        goto gowguesicegmegqw;
        iuawscaywkoegium:
        $eyuymeqcioasuyyi = $product->regular_price;
        goto emsoowiaoaoayqyy;
        mqysyiqsowkciiiq:
        ycaqamikucimygma:
        goto comswgimqmwcyyas;
        ueiooqcaegkyumkk:
        $aumscagymwyyicag = DecoratorHook::sscegwueamckwmcy("\167\x6f\x6f\x63\x6f\155\155\x65\x72\143\x65\x5f\x70\162\157\x64\x75\x63\x74\x5f\162\x65\x67\x75\x6c\141\x72\137\x70\162\x69\x63\145", $eyuymeqcioasuyyi, $product);
        goto mqysyiqsowkciiiq;
        usuiacsqegaeywgs:
        ueoykiauoyuauwsi:
        goto ueiooqcaegkyumkk;
        amqmckimqwauwkug:
        if (method_exists($product, "\x67\145\x74\137\163\x61\154\145\x5f\160\x72\151\x63\x65")) {
            goto yqmkgcicoecyuiku;
        }
        goto iuawscaywkoegium;
        sigcqyomcgiyamkq:
    }
    
    public static function asaycagaeksiumkw($product, $mgkceomocowocqyo = "\166\151\145\167") : string
    {
        goto cseuscicwscieqaa;
        cseuscicwscieqaa:
        $aumscagymwyyicag = '';
        goto gccusiaomowsyeqk;
        aqimsokikskmeukc:
        return $aumscagymwyyicag;
        goto igmocmyuiauyaaky;
        gccusiaomowsyeqk:
        $product = self::aqasygcsqysmmyke($product);
        goto kwwqiuaycwkcigqq;
        kauocquekqgswwoe:
        $eyuymeqcioasuyyi = $product->get_sale_price($mgkceomocowocqyo);
        goto ewkmiiygeqessaue;
        cgiioksocuikciqu:
        $aumscagymwyyicag = DecoratorHook::sscegwueamckwmcy("\x77\157\x6f\143\x6f\x6d\x6d\x65\162\x63\x65\137\160\x72\157\144\x75\x63\x74\137\x73\141\x6c\145\137\x70\162\x69\143\x65", $eyuymeqcioasuyyi, $product);
        goto kucuomkwkigoaaoi;
        kkskwicmigikmwuk:
        $eyuymeqcioasuyyi = $product->sale_price;
        goto makucowmowkkooyy;
        kucuomkwkigoaaoi:
        wimquiyiyyakiyqo:
        goto aqimsokikskmeukc;
        makucowmowkkooyy:
        goto kgykiwcggygyekgc;
        goto csmqycguwyiekmwq;
        cgsygucccwyayksw:
        if (method_exists($product, "\147\145\x74\x5f\163\x61\154\145\137\160\x72\151\143\x65")) {
            goto eiimgesccmkgusys;
        }
        goto kkskwicmigikmwuk;
        ewkmiiygeqessaue:
        kgykiwcggygyekgc:
        goto cgiioksocuikciqu;
        csmqycguwyiekmwq:
        eiimgesccmkgusys:
        goto kauocquekqgswwoe;
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
        qyoyoscsokwicwcm:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto cekucgakuqaicscm;
        ikuecasooegqekwi:
        kqaqeisqomwwcasq:
        goto auyuoiygayksuuua;
        awgckickkikmwgoe:
        $uwqkkwmiiumuukoa = $woocommerce->is_rest_api_request();
        goto ikuecasooegqekwi;
        siawmiiggusigmks:
        $uwqkkwmiiumuukoa = false;
        goto qyoyoscsokwicwcm;
        cekucgakuqaicscm:
        if (!($woocommerce && method_exists($woocommerce, "\x69\x73\137\x72\145\x73\164\x5f\x61\160\151\x5f\x72\x65\161\165\145\x73\x74"))) {
            goto kqaqeisqomwwcasq;
        }
        goto awgckickkikmwgoe;
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
        ayikyecyysisuioq:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto kmqcsyeeiyqwiusw;
        moqccissukkoumwo:
        return $wwcysoksoogyacog;
        goto eoyokykwkikgaaww;
        eoyokykwkikgaaww:
    }
    
    public static function aoqkwiysueqqwigk() : ?string
    {
        goto iqmqycmwemkkugmw;
        mwcqoqsgsoiacuqu:
        if (function_exists("\167\143\x5f\x67\145\164\137\x63\x68\145\x63\153\x6f\165\164\x5f\165\162\x6c")) {
            goto ouesqgosuiesgwas;
        }
        goto sagukwqksqiukyeq;
        sagukwqksqiukyeq:
        return $woocommerce->cart->get_checkout_url();
        goto oassuwsweqqyooss;
        iqmqycmwemkkugmw:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto mwcqoqsgsoiacuqu;
        oassuwsweqqyooss:
        goto ucmwwiwcaqesyqaw;
        goto osucouyseikugqwm;
        qyyioseuoicymucm:
        ucmwwiwcaqesyqaw:
        goto gcueeowqwicyuuwm;
        osucouyseikugqwm:
        ouesqgosuiesgwas:
        goto kikgmuyaiiicugcg;
        kikgmuyaiiicugcg:
        return wc_get_checkout_url();
        goto qyyioseuoicymucm;
        gcueeowqwicyuuwm:
    }
    
    public static function kccgkwigyyiugcco() : bool
    {
        return "\x79\145\163" === self::giiuwsmyumqwwiyq("\145\x6e\x61\142\x6c\145\x5f\x6d\x79\141\x63\x63\157\x75\x6e\164\137\x72\x65\x67\x69\x73\x74\x72\x61\164\151\x6f\156");
    }
    
    public static function yaaucgakecuykawk() : bool
    {
        global $woocommerce_loop;
        return DecoratorWoocommerce::kmymkocwcawgeccm() && isset($woocommerce_loop["\x6e\141\155\x65"]) && in_array($woocommerce_loop["\x6e\141\x6d\x65"], ["\x75\160\x20\55\x20\x73\145\x6c\154\x73"]);
    }
    
    public static function ogkieiokqueakmyc() : bool
    {
        global $woocommerce_loop;
        return DecoratorWoocommerce::kmymkocwcawgeccm() && isset($woocommerce_loop["\x6e\141\155\145"]) && in_array($woocommerce_loop["\156\x61\x6d\145"], ["\162\x65\154\x61\164\x65\144"]);
    }
    
    public static function omwkqcuwceweymcc($product = null)
    {
        goto saoicecaigamyumi;
        wicgcmsymyamgkqo:
        $product = self::aqasygcsqysmmyke(ManipulatePost::mwikyscisascoeea());
        goto owwkeimwommeqeuk;
        owwkeimwommeqeuk:
        kiwiacqeekiyqqum:
        goto ouyaoosmgkcycecy;
        gcgguqeygkiuseei:
        return $aokagokqyuysuksm;
        goto kgkycyakimoowckw;
        ouyaoosmgkcycecy:
        $aokagokqyuysuksm = $product;
        goto agcecaceyeicacew;
        ekiaooogkcaiqmku:
        uwkusimiysaesysu:
        goto gcgguqeygkiuseei;
        qeyyusmwmygyssis:
        $aokagokqyuysuksm = $product->get_id();
        goto ekiaooogkcaiqmku;
        saoicecaigamyumi:
        if ($product) {
            goto kiwiacqeekiyqqum;
        }
        goto wicgcmsymyamgkqo;
        agcecaceyeicacew:
        if (!is_a($product, "\x57\x43\x5f\x50\162\157\144\x75\143\164")) {
            goto uwkusimiysaesysu;
        }
        goto qeyyusmwmygyssis;
        kgkycyakimoowckw:
    }
    
    public static function ageqswwkkqywckco($ywmkwiwkosakssii = []) : array
    {
        goto moyeqcaaoumugqga;
        gguqqicieewmyqak:
        foreach ($oysoyeaucuawyaky as $aokagokqyuysuksm) {
            goto iuasisokiwkkgsig;
            qouiaaqwcueugsyg:
            qmwgkkusoumsaymy:
            goto uqioouaicscwyeei;
            uqioouaicscwyeei:
            yywwamymqqweegma:
            goto sygcsssigqkuemcu;
            iuasisokiwkkgsig:
            $product = self::aqasygcsqysmmyke($aokagokqyuysuksm);
            goto wygeoqscyoqegsim;
            wygeoqscyoqegsim:
            if (!$product) {
                goto qmwgkkusoumsaymy;
            }
            goto kcwmuwimsuqeeika;
            kcwmuwimsuqeeika:
            $oksqskmgoqiqciis[$aokagokqyuysuksm] = $product;
            goto qouiaaqwcueugsyg;
            sygcsssigqkuemcu:
        }
        goto egqwmisqumyygeaw;
        asmqyacukagmsmog:
        $oksqskmgoqiqciis = [];
        goto iiaqqsyysmuiuqgk;
        moyeqcaaoumugqga:
        $ywmkwiwkosakssii["\146\x69\145\x6c\144\x73"] = "\x69\144\x73";
        goto ekmowewoceagouse;
        ekmowewoceagouse:
        $oysoyeaucuawyaky = ManipulatePost::ciugwooasaqcywas("\x70\162\157\x64\x75\143\164", $ywmkwiwkosakssii);
        goto asmqyacukagmsmog;
        egqwmisqumyygeaw:
        eqmmisowcsogsmmi:
        goto eqswioyysgiegmkw;
        eqswioyysgiegmkw:
        acykkosiggykiqae:
        goto ecgigaamcwiqiukk;
        iiaqqsyysmuiuqgk:
        if (!is_array($oysoyeaucuawyaky)) {
            goto acykkosiggykiqae;
        }
        goto gguqqicieewmyqak;
        ecgigaamcwiqiukk:
        return $oksqskmgoqiqciis;
        goto wgieqooykcsmeemu;
        wgieqooykcsmeemu:
    }
    
    public static function weqwusgaqsmseiyq() : array
    {
        return ["\151\x6d\x61\147\145" => esc_html__("\x49\155\x61\147\145", PR__CMN__FOUNDATION), "\x70\162\151\x63\145" => esc_html__("\120\x72\151\x63\145", PR__CMN__FOUNDATION), "\x61\x64\x64\x2d\164\157\x2d\143\141\x72\164" => esc_html__("\x41\x64\x64\x20\x74\157\x20\x63\x61\162\164", PR__CMN__FOUNDATION), "\x64\x65\163\x63\162\151\x70\164\151\x6f\156" => esc_html__("\x44\x65\x73\143\x72\151\160\164\x69\157\156", PR__CMN__FOUNDATION), "\x73\153\165" => esc_html__("\123\153\x75", PR__CMN__FOUNDATION), "\163\x74\x6f\x63\x6b" => esc_html__("\x41\x76\141\151\154\x61\142\151\x6c\151\164\171", PR__CMN__FOUNDATION), "\167\145\151\147\150\x74" => esc_html__("\x57\145\151\x67\x68\x74", PR__CMN__FOUNDATION), "\144\151\x6d\x65\156\163\151\157\x6e\x73" => esc_html__("\x44\x69\x6d\x65\x6e\163\151\x6f\x6e\x73", PR__CMN__FOUNDATION)];
    }
    
    public static function gmowuaggkmgkseyo() : bool
    {
        return DecoratorQuery::qmssqeyayicowkgy("\160\162\x6f\x64\165\143\164\x5f\x63\x61\x74");
    }
    
    public static function ecaegsuskkkigkgc() : ?WC_Checkout
    {
        goto qaowiwsuoecmmkkw;
        soqwcqmyqkqyqawm:
        if (!$woocommerce) {
            goto ywogweeguksciwcw;
        }
        goto yaaygymiwgcucuee;
        kuygeikysoqqqouy:
        ywogweeguksciwcw:
        goto gemiusgkmeaykywq;
        qaowiwsuoecmmkkw:
        $yogeuygiqackeiky = null;
        goto qkkcyimckwcmwoyg;
        yaaygymiwgcucuee:
        $yogeuygiqackeiky = $woocommerce->yogeuygiqackeiky();
        goto kuygeikysoqqqouy;
        qkkcyimckwcmwoyg:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto soqwcqmyqkqyqawm;
        gemiusgkmeaykywq:
        return $yogeuygiqackeiky;
        goto akgusigiuuowiemm;
        akgusigiuuowiemm:
    }
    
    public static function giyscymwkesykqsg($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie)
    {
        self::cmussoegoauyyguw("\163\145\x74", $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie);
    }
    
    public static function qusqewgmqyucyooc($product, $ikgwqyuyckaewsow)
    {
        goto ikoqcwgayswaisqo;
        wgiewcmyikiwsasu:
        return $product;
        goto cqguwaockaiuioqo;
        kascgoogiymmugcy:
        if (!$product) {
            goto kqkckwwigeyywyik;
        }
        goto yciammygksiessww;
        ikoqcwgayswaisqo:
        $product = self::aqasygcsqysmmyke($product);
        goto kascgoogiymmugcy;
        vwwckgewsegagiqm:
        $product->fields = $qqswgiawgeaeoecu;
        goto qmkkgkcemceygaou;
        yciammygksiessww:
        $qqswgiawgeaeoecu = [];
        goto smucwoowmswcmqiq;
        qmkkgkcemceygaou:
        omogkekcmgcmgaks:
        goto mqmwceouegaaucoi;
        smucwoowmswcmqiq:
        $aokagokqyuysuksm = $product->get_id();
        goto mmkuokwocceayask;
        msygsomkaywgokuq:
        if (!$qqswgiawgeaeoecu) {
            goto omogkekcmgcmgaks;
        }
        goto vwwckgewsegagiqm;
        mqmwceouegaaucoi:
        kqkckwwigeyywyik:
        goto wgiewcmyikiwsasu;
        kuukuccioawuoiea:
        gqgiygyaagieswyg:
        goto msygsomkaywgokuq;
        mmkuokwocceayask:
        
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus => $ymqmyyeuycgmigyo) {
            goto wuiwikwsqoyseayq;
            giikseaiieuqkccg:
            gqeosgkaqwoooomg:
            goto cqcoykgagkcckiyi;
            wuiwikwsqoyseayq:
            switch ($aiowsaccomcoikus) {
                case "\164\x69\164\x6c\145":
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $product->get_title();
                    goto igsgeycmgyyiqyaw;
                case "\160\x72\x69\143\x65":
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $product->get_price_html();
                    goto igsgeycmgyyiqyaw;
                case "\151\x6d\141\x67\x65":
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = intval(ManipulatePost::wsiiswmaagmyiaiw($aokagokqyuysuksm));
                    goto igsgeycmgyyiqyaw;
                case "\144\x65\x73\x63\x72\151\160\x74\x69\x6f\156":
                    goto ceyiiqgekmueswas;
                    ceyiiqgekmueswas:
                    $ukwokcuqauuosmoo = DecoratorHook::sscegwueamckwmcy("\167\x6f\x6f\x63\157\155\x6d\145\162\x63\x65\x5f\163\x68\157\x72\x74\x5f\x64\x65\x73\x63\162\151\160\x74\151\x6f\x6e", $product->get_short_description());
                    goto csiumocowgwwkseu;
                    ceooqwocwgyaosca:
                    goto igsgeycmgyyiqyaw;
                    goto eggeemqkkcgiwkgm;
                    csiumocowgwwkseu:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $ukwokcuqauuosmoo;
                    goto ceooqwocwgyaosca;
                    eggeemqkkcgiwkgm:
                case "\163\164\157\x63\x6b":
                    goto socyamqieqoiusuo;
                    momkymyyokcqmiwc:
                    skuaykemeskiciyq:
                    goto oiaqgumiwqckysqq;
                    kmcmmgeegciwucsu:
                    $imooqykauqyyswsw["\x61\166\x61\x69\154\x61\142\x69\x6c\x69\164\x79"] = __("\x49\x6e\40\x73\164\157\x63\153", PR__CMN__FOUNDATION);
                    goto momkymyyokcqmiwc;
                    oiaqgumiwqckysqq:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $imooqykauqyyswsw["\141\x76\x61\x69\x6c\141\142\x69\154\x69\164\x79"];
                    goto yseqooouywimkcsi;
                    socyamqieqoiusuo:
                    $imooqykauqyyswsw = $product->get_availability();
                    goto ggwecgmoiwsqaiem;
                    yseqooouywimkcsi:
                    goto igsgeycmgyyiqyaw;
                    goto rgeqksseqwssoqeq;
                    ggwecgmoiwsqaiem:
                    if (!empty($imooqykauqyyswsw["\141\x76\141\151\x6c\x61\142\x69\x6c\151\x74\171"])) {
                        goto skuaykemeskiciyq;
                    }
                    goto kmcmmgeegciwucsu;
                    rgeqksseqwssoqeq:
                case "\163\153\165":
                    goto rmamqouaqyeogmmm;
                    ukoqocmokmwgkggo:
                    !$mmkkmgusieqaqkki && ($mmkkmgusieqaqkki = "\55");
                    goto scquwmwgssauikwq;
                    rmamqouaqyeogmmm:
                    $mmkkmgusieqaqkki = $product->get_sku();
                    goto ukoqocmokmwgkggo;
                    imycougggwgmwque:
                    goto igsgeycmgyyiqyaw;
                    goto igwwywsaqumsmakc;
                    scquwmwgssauikwq:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $mmkkmgusieqaqkki;
                    goto imycougggwgmwque;
                    igwwywsaqumsmakc:
                case "\x77\145\151\x67\x68\x74":
                    goto ucasooakcusgmasq;
                    wsksyesmkwcseqmi:
                    $mycwwoyokwokowmo = wc_format_localized_decimal($mycwwoyokwokowmo) . "\40" . esc_attr(DecoratorOption::get("\167\157\157\x63\x6f\155\x6d\x65\162\x63\x65\x5f\x77\x65\x69\147\150\164\x5f\x75\156\151\164"));
                    goto kwkaekkyamsuosic;
                    kwkaekkyamsuosic:
                    igigquuegyegmyas:
                    goto qmmiuscmmiciksuq;
                    smwcciswieyocowa:
                    $mycwwoyokwokowmo = "\55";
                    goto eiiygsskgeocucse;
                    qmmiuscmmiciksuq:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $mycwwoyokwokowmo;
                    goto wysqeaawgmsgywwe;
                    eiiygsskgeocucse:
                    goto igigquuegyegmyas;
                    goto scqikcmqmsuaccuk;
                    scqikcmqmsuaccuk:
                    eguqeogcowkuqmes:
                    goto wsksyesmkwcseqmi;
                    wysqeaawgmsgywwe:
                    goto igsgeycmgyyiqyaw;
                    goto msmyekocyqaeiqui;
                    ucasooakcusgmasq:
                    if ($mycwwoyokwokowmo = $product->get_weight()) {
                        goto eguqeogcowkuqmes;
                    }
                    goto smwcciswieyocowa;
                    msmyekocyqaeiqui:
                case "\144\x69\x6d\145\x6e\163\151\157\156\163":
                    goto qyqeeqeasassiyqg;
                    ykgaewsgaccoewmy:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $qaiwqwwemmyyqosy;
                    goto goagoaikyyyaisgy;
                    goagoaikyyyaisgy:
                    goto igsgeycmgyyiqyaw;
                    goto qcwmwsussmygiowm;
                    qyqeeqeasassiyqg:
                    $qaiwqwwemmyyqosy = function_exists("\167\x63\137\x66\x6f\x72\155\141\x74\137\x64\151\x6d\x65\156\x73\x69\157\156\163") ? wc_format_dimensions($product->get_dimensions(false)) : $product->get_dimensions();
                    goto qiwwswgwkcekequo;
                    qiwwswgwkcekequo:
                    !$qaiwqwwemmyyqosy && ($qaiwqwwemmyyqosy = "\55");
                    goto ykgaewsgaccoewmy;
                    qcwmwsussmygiowm:
                default:
                    goto smiosccsmkciiaei;
                    wyomsacikcaawgow:
                    kiqioykgyqakwmsc:
                    goto kciguwegyomuqawq;
                    ggiyqoigmmgiamyo:
                    mqaamgcyimqcgyyu:
                    goto cocwkumuyaacwuie;
                    wskwqauamemaueue:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = $eqgoocgaqwqcimie;
                    goto rmoogiakmggyosaw;
                    gmgysasgwkiakiic:
                    if (!is_array($eqgoocgaqwqcimie)) {
                        goto ouqsaimcqcgaemws;
                    }
                    goto rayoswqmyqiuiics;
                    rmoogiakmggyosaw:
                    goto igymmkeosawsmquy;
                    goto ggiyqoigmmgiamyo;
                    rayoswqmyqiuiics:
                    $eqgoocgaqwqcimie = implode("\54\x20", $eqgoocgaqwqcimie);
                    goto umeiygeyqcouqcsk;
                    umeiygeyqcouqcsk:
                    ouqsaimcqcgaemws:
                    goto wskwqauamemaueue;
                    uuemseeewwgcoqqc:
                    if (empty($uyuaosigqymaqsaa)) {
                        goto kiqioykgyqakwmsc;
                    }
                    goto ocowsksosgwgogmy;
                    ywcksgacokiyuuks:
                    goto igsgeycmgyyiqyaw;
                    goto wemcucimscmkccee;
                    kciguwegyomuqawq:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = implode("\x2c\x20", $qqswgiawgeaeoecu[$aiowsaccomcoikus]);
                    goto ymaeysgwkcwwiqmu;
                    smiosccsmkciiaei:
                    if (DecoratorTaxonomy::myagqecycsaiyqsk($aiowsaccomcoikus)) {
                        goto mqaamgcyimqcgyyu;
                    }
                    goto ugsimmgccyugoqka;
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
                    ymaeysgwkcwwiqmu:
                    igymmkeosawsmquy:
                    goto ywcksgacokiyuuks;
                    iaaaeesqwkogwook:
                    $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($aokagokqyuysuksm, $aiowsaccomcoikus);
                    goto uuemseeewwgcoqqc;
                    ugsimmgccyugoqka:
                    $eqgoocgaqwqcimie = $product->get_attribute($aiowsaccomcoikus);
                    goto gmgysasgwkiakiic;
                    cocwkumuyaacwuie:
                    $qqswgiawgeaeoecu[$aiowsaccomcoikus] = [];
                    goto iaaaeesqwkogwook;
                    kukmwwkmmiwaqmai:
                    mqyceoiukuosysus:
                    goto wyomsacikcaawgow;
                    wemcucimscmkccee:
            }
            goto giikseaiieuqkccg;
            uukiykgkqyekggay:
            ueygyquuioiuckmw:
            goto qagmacuwmywoisyq;
            cqcoykgagkcckiyi:
            igsgeycmgyyiqyaw:
            goto uukiykgkqyekggay;
            qagmacuwmywoisyq:
        }
        goto kuukuccioawuoiea;
        cqguwaockaiuioqo:
    }
    
    public static function qysuguqkwiksywaq($product, $isweyuoisomqyaag) : array
    {
        goto iwwcyaoguoweqqmi;
        msiwaicoesyagumk:
        $uomewyckeuqoqocu = $product->get_available_variation($isweyuoisomqyaag);
        goto cmomkawiiikmcccq;
        xsucwemqaekogyqi:
        if (!($isweyuoisomqyaag && $product instanceof WC_Product_Variable)) {
            goto ssmesescgegmqegs;
        }
        goto msiwaicoesyagumk;
        okyoymqacqaimooo:
        $product = self::aqasygcsqysmmyke($product);
        goto xsucwemqaekogyqi;
        ksosaiwckkacoeww:
        return $uomewyckeuqoqocu;
        goto ksmgqwcssgmuykqm;
        iwwcyaoguoweqqmi:
        $uomewyckeuqoqocu = [];
        goto okyoymqacqaimooo;
        cmomkawiiikmcccq:
        ssmesescgegmqegs:
        goto ksosaiwckkacoeww;
        ksmgqwcssgmuykqm:
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
        $ywmkwiwkosakssii["\155\145\x74\x61\x5f\161\165\x65\162\171"] = ["\x6d\145\x74\141\137\x6b\x65\x79" => $uusmaiomayssaecw, "\x6d\x65\164\141\137\166\x61\154\x75\x65" => $eqgoocgaqwqcimie, "\155\145\x74\x61\137\143\157\155\160\141\x72\145" => "\x4c\111\113\x45"];
        return DecoratorWoocommerce::ageqswwkkqywckco($ywmkwiwkosakssii);
    }
    
    public static function gkokioeusiomuwee($product, $cqcsaaswaciweiie = [], $aqcaekiaqgiaiwiu = true)
    {
        goto sgaamousiakskkko;
        yqemqgiwcuoowges:
        
        $siquossayskcwkea = array_filter($product->get_attributes(), "\x77\143\137\x61\164\164\x72\x69\142\x75\164\x65\x73\x5f\x61\162\x72\x61\171\x5f\146\151\154\164\145\162\137\166\151\x73\151\x62\154\145");
        goto eawiyomugeiugoca;
        gqmqqaumkqkyyuom:
        return DecoratorHook::sscegwueamckwmcy("\167\157\x6f\143\x6f\155\155\145\162\143\145\x5f\144\x69\163\x70\x6c\141\171\137\x70\162\157\144\x75\x63\x74\x5f\141\x74\164\162\151\142\x75\164\x65\163", $uomewyckeuqoqocu, $product);
        goto kssuoaucoagqicew;
        mwqqkaiwyugqakeq:
        $product = self::aqasygcsqysmmyke($product);
        goto yikaoaeoqsgieqoq;
        woweqwuwmegoecgu:
        if (!($qaiwqwwemmyyqosy && $product->has_weight())) {
            goto owqukoyoaogmwioi;
        }
        goto csmosoqqwicqwuqg;
        yokquaecwougwgme:
        sawkewuuqsaekcsy:
        goto gqmqqaumkqkyyuom;
        ymqsaggkkwkoomgc:
        if (!($qaiwqwwemmyyqosy && $product->has_dimensions())) {
            goto aaoeckeaamycqkam;
        }
        goto suuwwusyekuwqgwi;
        yikaoaeoqsgieqoq:
        
        $qaiwqwwemmyyqosy = DecoratorHook::sscegwueamckwmcy("\167\x63\137\160\x72\157\144\x75\x63\164\x5f\145\x6e\141\x62\x6c\x65\x5f\144\x69\155\x65\156\x73\151\157\156\x73\x5f\144\151\x73\160\x6c\x61\x79", $product->has_weight() || $product->has_dimensions());
        goto woweqwuwmegoecgu;
        cccusomswoycqgye:
        aaoeckeaamycqkam:
        goto yqemqgiwcuoowges;
        csmosoqqwicqwuqg:
        $uomewyckeuqoqocu["\167\x65\x69\x67\150\x74"] = ["\x6c\x61\x62\x65\154" => __("\x57\x65\151\x67\150\164", "\167\157\157\143\157\x6d\155\x65\x72\143\x65"), "\x76\141\154\165\145" => wc_format_weight($product->get_weight())];
        goto osmogyiiwqqwieoe;
        osmogyiiwqqwieoe:
        owqukoyoaogmwioi:
        goto ymqsaggkkwkoomgc;
        eawiyomugeiugoca:
        foreach ($siquossayskcwkea as $ymkomoccmymcoiea) {
            goto megqkwsyeisgoiuq;
            swuockeicagsysku:
            if (!(is_array($cqcsaaswaciweiie) && $cqcsaaswaciweiie)) {
                goto gcoaosuecgyuuiyq;
            }
            goto cwcqcsgwwkokqgoy;
            okcoqaemsekeyqgi:
            $ymqmyyeuycgmigyo = $ymkomoccmymcoiea->get_name();
            goto wgakiauyywueqsma;
            gkgiqeqokmyaosyi:
            oswkqueiycsgwwqc:
            goto mqweissqoiqukwuc;
            yoicqeqousygweyk:
            $ymqmyyeuycgmigyo = DecoratorWoocommerce::gmeusukogwcamcyc($ymqmyyeuycgmigyo);
            goto gkgiqeqokmyaosyi;
            owosmsmuaueegaas:
            if (!$kskgqoywkoawosao) {
                goto mimgyeoccsuwmomg;
            }
            goto okcoqaemsekeyqgi;
            uycysmimgmsawemy:
            mimgyeoccsuwmomg:
            goto ggiswsmgccuackao;
            cssokcmoicccseqa:
            gcoaosuecgyuuiyq:
            goto owosmsmuaueegaas;
            mqweissqoiqukwuc:
            $uomewyckeuqoqocu[$ymqmyyeuycgmigyo] = $mmykcgusskuuuace;
            goto uycysmimgmsawemy;
            megqkwsyeisgoiuq:
            $mmykcgusskuuuace = self::cswwmqwaucwuqcaq($product, $ymkomoccmymcoiea);
            goto qagsccmgemwyowgq;
            cwcqcsgwwkokqgoy:
            foreach ($cqcsaaswaciweiie as $tsuauommsquiesmk => $eqgoocgaqwqcimie) {
                goto kwuayueukssiusyo;
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
                ywckcmesqeiougoy:
                gigyyqgmkceykwam:
                goto uqcqusigauwqaucm;
                kwuayueukssiusyo:
                $uiymkeeaukcyqqik = ManipulateArray::get($mmykcgusskuuuace, $tsuauommsquiesmk, false);
                goto ksyaeigosimeymmu;
                amwucayokoyowcki:
                $kskgqoywkoawosao = false;
                goto igkykqemaiuckkqm;
                usamasqcwkcaaeyo:
            }
            goto ucuyyuummcgmmcoo;
            ggiswsmgccuackao:
            oiioqgoqyykuocou:
            goto iwwawgsoqcciekeq;
            qagsccmgemwyowgq:
            $kskgqoywkoawosao = true;
            goto swuockeicagsysku;
            ucuyyuummcgmmcoo:
            kgwcgkqqguiwgmmm:
            goto cssokcmoicccseqa;
            wgakiauyywueqsma:
            if (!$aqcaekiaqgiaiwiu) {
                goto oswkqueiycsgwwqc;
            }
            goto yoicqeqousygweyk;
            iwwawgsoqcciekeq:
        }
        goto yokquaecwougwgme;
        suuwwusyekuwqgwi:
        $uomewyckeuqoqocu["\144\x69\155\x65\x6e\163\151\157\x6e\163"] = ["\x6c\x61\x62\145\x6c" => __("\x44\151\x6d\145\156\x73\x69\x6f\x6e\x73", "\167\x6f\x6f\143\157\155\155\x65\x72\143\x65"), "\166\141\154\165\145" => wc_format_dimensions($product->get_dimensions(false))];
        goto cccusomswoycqgye;
        sgaamousiakskkko:
        $uomewyckeuqoqocu = [];
        goto mwqqkaiwyugqakeq;
        kssuoaucoagqicew:
    }
    
    public static function ucqakycuekccuocw($aqykuigiuwmmcieu = self::OBJECT) : ?array
    {
        goto oiekocisyuaicoey;
        uccuwggkcciaascm:
        ManipulateArray::unset($seyqqsmuaiegkeeq, ["\160\x72\x6f\x64\x75\143\x74\137\x73\x68\x69\x70\160\151\156\x67\x5f\x63\154\x61\163\x73", "\x70\x72\157\x64\165\143\164\x5f\166\x69\x73\151\142\151\x6c\151\x74\171", "\160\162\x6f\x64\165\x63\x74\137\164\171\160\145"]);
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
        $seyqqsmuaiegkeeq = DecoratorTaxonomy::qgckgkwskmsomoqs("\x70\162\157\144\165\x63\164", $aqykuigiuwmmcieu);
        goto uccuwggkcciaascm;
        swwmuqsewiaswasq:
        if (!empty($seyqqsmuaiegkeeq)) {
            goto egaqcmmgioyoskak;
        }
        goto oiecwmgwkgscuaom;
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
        return $wpdb->get_col("\12\x9\11\x9\123\x45\114\x45\103\124\x20\x6f\151\x73\x2e\x6f\162\x64\145\162\x5f\151\x64\12\11\x9\x9\x46\x52\x4f\115\40{$yuwymayicwwqiske}\167\x6f\x6f\143\157\x6d\x6d\x65\162\143\x65\x5f\157\162\144\x65\162\137\x69\164\145\x6d\x73\40\x61\163\x20\157\151\163\xa\x9\x9\x9\x4c\105\106\124\x20\x4a\117\x49\116\40{$yuwymayicwwqiske}\167\157\x6f\143\157\x6d\155\x65\x72\143\x65\137\x6f\162\x64\145\x72\x5f\x69\x74\x65\155\x6d\145\x74\x61\x20\141\x73\40\157\x69\x6d\40\x4f\116\x20\157\x69\x73\x2e\157\x72\144\145\162\x5f\x69\x74\145\155\x5f\151\x64\40\x3d\40\157\151\155\56\157\x72\x64\x65\162\x5f\151\x74\145\155\137\151\x64\xa\x9\11\x9\114\x45\106\x54\40\112\117\111\x4e\40{$wpdb->posts}\40\101\123\x20\160\x20\117\x4e\x20\x6f\x69\x73\x2e\157\x72\x64\145\x72\x5f\151\144\x20\75\x20\x70\56\111\x44\12\x9\x9\x9\x4c\105\x46\x54\x20\x4a\117\x49\x4e\x20{$wpdb->postmeta}\40\101\123\x20\160\155\40\x4f\116\x20\x6f\151\163\56\x6f\162\x64\x65\162\137\151\x64\40\75\x20\160\x6d\x2e\155\x65\164\141\137\x69\144\xa\x9\x9\x9\127\110\x45\122\x45\40\160\56\x70\x6f\163\x74\137\x74\x79\x70\x65\40\75\x20\47\163\150\x6f\x70\137\157\162\144\145\162\47\12\11\x9\11\101\x4e\104\x20\160\56\x70\157\x73\164\137\x73\x74\x61\x74\x75\x73\40\x49\x4e\40\50\40\47\x77\x63\x2d" . implode("\47\x2c\40\x27\x77\x63\x2d", $oqseeekuqisekiwy) . "\47\x20\51\12\x9\11\11\x41\116\104\40\157\x69\163\x2e\x6f\162\144\145\x72\x5f\151\x74\x65\x6d\x5f\164\x79\160\145\40\x3d\40\x27\154\x69\156\145\137\x69\164\145\155\47\12\x9\x9\11\101\x4e\104\40\x6f\151\x6d\56\155\x65\164\x61\x5f\x6b\x65\171\40\75\x20\x27\x5f\x70\x72\157\144\x75\143\x74\x5f\x69\x64\47\12\11\x9\x9\101\116\x44\x20\157\x69\155\x2e\155\145\x74\141\137\x76\141\154\x75\145\x20\x3d\40\47{$product}\47\xa\x9\11\x9\101\x4e\104\x20\160\155\56\155\x65\x74\x61\x5f\x6b\x65\171\x20\75\x20\47\137\143\165\163\164\x6f\155\145\162\137\165\163\x65\162\47\xa\11\x9\11\x41\x4e\104\x20\160\155\56\155\145\164\x61\x5f\x76\x61\154\165\x65\x20\x3d\x20\x27{$scwmkmciyywokcug}\x27\xa\x20\40\40\40\x9");
        goto gygmukceqmuewaim;
        qqeycioeqswikseq:
        $oqseeekuqisekiwy = array_map("\145\163\x63\137\163\161\154", DecoratorWoocommerce::ouqoeawmueswmksm());
        goto kgwgksykmqweowgi;
        quookucgqymiqocy:
        $yuwymayicwwqiske = $wpdb->prefix;
        goto gaoeaaeausmqguee;
        wqeaomqyumqiocka:
        global $wpdb;
        goto quookucgqymiqocy;
        gaoeaaeausmqguee:
        $product = self::omwkqcuwceweymcc($product);
        goto qqeycioeqswikseq;
        gygmukceqmuewaim:
    }
    
    public static function giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee = null, $yuwymayicwwqiske = "\x77\157\x6f\x63\x6f\155\155\145\162\x63\x65\137")
    {
        goto ugkkcqkwssgykcyo;
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
        coqswqysimeumkei:
        $uusmaiomayssaecw = $yuwymayicwwqiske . $uusmaiomayssaecw;
        goto muaaeioooicwskgu;
        iwwayiuyaecikeku:
    }
    
    public static function cswwmqwaucwuqcaq($product, $ymkomoccmymcoiea) : array
    {
        goto eymiaowquwyiggie;
        kgecwaiwqeacyqge:
        foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
            goto wwuwumqemissswei;
            gsqmakgaqakuawue:
            wmkkqgiamggikgsi:
            goto ggoceeqkiqmqkiwg;
            ccmgkkiyameumyoi:
            goto wqcseagmwswqeqgu;
            goto gsqmakgaqakuawue;
            qqoaguokgcoeieyi:
            wqcseagmwswqeqgu:
            goto skoaowmysckmmocc;
            ggoceeqkiqmqkiwg:
            $qqswgiawgeaeoecu[] = ManipulateHTML::uuccukgasskgimsq("\141", ["\x68\162\145\x66" => ManipulateTerm::qmgcisuuikgmqcsu(ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk), $ymkomoccmymcoiea->get_name()), "\162\145\154" => "\x74\x61\147"], $ymqmyyeuycgmigyo);
            goto qqoaguokgcoeieyi;
            eoikakegoqcywcui:
            $qqswgiawgeaeoecu[] = $ymqmyyeuycgmigyo;
            goto ccmgkkiyameumyoi;
            skoaowmysckmmocc:
            eeuosekauyeiqoie:
            goto ecuosiaqyaoqckao;
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
        qwykccyeiymiomyi:
        $kesssewsiegssiya = $ymkomoccmymcoiea->get_taxonomy_object();
        goto asmkyaumussymycs;
        iwqasgooqqmcyqmy:
        oomiawgcsyaaqaao:
        goto keuikgoukmwokcoa;
        kamkksumiggskuay:
        foreach ($qqswgiawgeaeoecu as &$eqgoocgaqwqcimie) {
            $eqgoocgaqwqcimie = make_clickable(esc_html($eqgoocgaqwqcimie));
            wokmesqciaaskwoe:
        }
        goto iwqasgooqqmcyqmy;
        aeoicygsgoeeqguk:
        $mmykcgusskuuuace = ["\x76\x61\154\165\x65" => DecoratorHook::sscegwueamckwmcy("\167\x6f\157\x63\x6f\x6d\155\x65\162\x63\x65\x5f\141\164\x74\x72\x69\142\165\x74\145", wptexturize(implode("\x2c\40", $qqswgiawgeaeoecu)), $ymkomoccmymcoiea, $qqswgiawgeaeoecu), "\154\141\x62\x65\154" => DecoratorWoocommerce::qysciqmmoqsaqmqk($ymkomoccmymcoiea->get_name(), $product)];
        goto aqqgkiieakuwceea;
        asmkyaumussymycs:
        $uyuaosigqymaqsaa = self::mywkcmciykgikmyc($product, $ymkomoccmymcoiea->get_name(), ["\x66\x69\145\154\144\163" => "\141\154\x6c"]);
        goto kgecwaiwqeacyqge;
        aqqgkiieakuwceea:
        return (array) DecoratorHook::sscegwueamckwmcy("\167\157\157\x63\157\x6d\x6d\145\x72\143\145\137\141\x74\164\162\x69\142\x75\164\145\137\157\x75\x74\160\x75\164", $mmykcgusskuuuace, $ymkomoccmymcoiea, $product);
        goto okseeygkgkqkwsgw;
        wsasggmqwyisgoiq:
        cmicuicekiiowekc:
        goto ykcmokmsimckuego;
        ykcmokmsimckuego:
        owauaaeeaeoqgiii:
        goto aeoicygsgoeeqguk;
        keuikgoukmwokcoa:
        goto owauaaeeaeoqgiii;
        goto yqccqmsucoukqkmw;
        ssooqmscuqwmcoeu:
        $qqswgiawgeaeoecu = $ymkomoccmymcoiea->get_options();
        goto kamkksumiggskuay;
        kgkameuwwcmaawwg:
        if ($ymkomoccmymcoiea->is_taxonomy()) {
            goto qiqmamemmguaieiw;
        }
        goto ssooqmscuqwmcoeu;
        yqccqmsucoukqkmw:
        qiqmamemmguaieiw:
        goto qwykccyeiymiomyi;
        eymiaowquwyiggie:
        $qqswgiawgeaeoecu = [];
        goto kgkameuwwcmaawwg;
        okseeygkgkqkwsgw:
    }
    
    public static function cmussoegoauyyguw($aiamqeawckcsuaou, $ymqmyyeuycgmigyo = '', $eqgoocgaqwqcimie = '', $kekikiwsckuiyuyo = false)
    {
        goto imwkaaqausgqquoo;
        amocqywwugaccike:
        goto cyycimgiyeqgssuy;
        goto cckmsweoqwaucgcs;
        eawmqueomoausgog:
        vosacywygmcokgkw:
        goto ykqswiqaqaogkksc;
        esgwyeyackaweskk:
        goto gykoquuuowomucyq;
        goto qwamueuasumwowym;
        qwamueuasumwowym:
        wewkyisikaywwcmu:
        goto amuoiqyswiesyyck;
        ioimwcssyaqsuqma:
        gykoquuuowomucyq:
        goto oekkmwkqkuqwckui;
        youqqmmoywqeggeg:
        $woocommerce->session->{$aiamqeawckcsuaou}($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie);
        goto qeycwoqakqucwscm;
        imwkaaqausgqquoo:
        $woocommerce = self::kkewuuisyiscmgyc();
        goto acsmysaakckkkkie;
        iiskacegeekeseky:
        if (method_exists($cmussoegoauyyguw, $aiamqeawckcsuaou)) {
            goto ciamwmmiqcseaeuc;
        }
        goto ukoqsuaqouuqkuig;
        cckmsweoqwaucgcs:
        ciamwmmiqcseaeuc:
        goto youqqmmoywqeggeg;
        ogyguukmcmoqkqei:
        goto qmusucqwswsqsgwc;
        goto wcuguimgckkocagq;
        acsmysaakckkkkie:
        $cmussoegoauyyguw = $woocommerce->session;
        goto womskaaiqugkuggi;
        oekkmwkqkuqwckui:
        if (!$kekikiwsckuiyuyo) {
            goto vosacywygmcokgkw;
        }
        goto wqiyuoiwqekmsues;
        caoqqqweswimckec:
        if (method_exists($cmussoegoauyyguw, $aiamqeawckcsuaou)) {
            goto wewkyisikaywwcmu;
        }
        goto cumieyuwywwwsaqg;
        yimasagkemgkoeqq:
        if (!($aiamqeawckcsuaou == "\x67\145\x74")) {
            goto cwqmuqiqouooguqm;
        }
        goto caoqqqweswimckec;
        womskaaiqugkuggi:
        if ($aiamqeawckcsuaou == "\163\145\164") {
            goto osiwmoqisiiogawm;
        }
        goto yimasagkemgkoeqq;
        oyaeggoyqusqqcyo:
        qmusucqwswsqsgwc:
        goto wgkecsowgumikqqm;
        amuoiqyswiesyyck:
        $eqgoocgaqwqcimie = $cmussoegoauyyguw->{$aiamqeawckcsuaou}($ymqmyyeuycgmigyo);
        goto ioimwcssyaqsuqma;
        wgkecsowgumikqqm:
        return $eqgoocgaqwqcimie;
        goto gusamkkgwqmamcke;
        qeycwoqakqucwscm:
        cyycimgiyeqgssuy:
        goto oyaeggoyqusqqcyo;
        ykqswiqaqaogkksc:
        cwqmuqiqouooguqm:
        goto ogyguukmcmoqkqei;
        cumieyuwywwwsaqg:
        $eqgoocgaqwqcimie = $cmussoegoauyyguw->{$ymqmyyeuycgmigyo};
        goto esgwyeyackaweskk;
        wcuguimgckkocagq:
        osiwmoqisiiogawm:
        goto iiskacegeekeseky;
        wqiyuoiwqekmsues:
        unset($woocommerce->session->{$ymqmyyeuycgmigyo});
        goto eawmqueomoausgog;
        ukoqsuaqouuqkuig:
        $woocommerce->session->{$ymqmyyeuycgmigyo} = $eqgoocgaqwqcimie;
        goto amocqywwugaccike;
        gusamkkgwqmamcke:
    }
    
    public static function ceusksoaisoswmia($umwqusowiqmyseom = null) : array
    {
        goto qcysusmwyoeoguki;
        eicuumeiweosiaqy:
        if (!$umwqusowiqmyseom) {
            goto kuoqweoiooqosmoe;
        }
        goto dwaiimguqaaikoso;
        uqiisswyoggsckqg:
        kuoqweoiooqosmoe:
        goto qmwkauswsyowckua;
        qcysusmwyoeoguki:
        $oammesyieqmwuwyi = self::uakuwyoiooeqqiow();
        goto mawoaecogwegmcoc;
        isqyiumsggacqmak:
        $umwqusowiqmyseom = self::mmmcswscsiecscwg($umwqusowiqmyseom);
        goto eicuumeiweosiaqy;
        qmwkauswsyowckua:
        ngaquoioqeukmoyu:
        goto siequuwyyyusqeie;
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
        goamosigosumsmkq:
    }
    
    public static function uwyscmkeyeuqyukk($ywmkwiwkosakssii = []) : string
    {
        goto kakyqyqyweuaoqmg;
        uwwqiicwuwkwqcmg:
        return ManipulateHTML::uuccukgasskgimsq("\154\x61\x62\145\154", ["\143\x6c\141\163\163" => "\x74\x69\x70\x73", "\144\141\164\141\55\x74\x69\x70" => ManipulateArray::get($ywmkwiwkosakssii, "\164\x69\x70")], [ManipulateArray::get($ywmkwiwkosakssii, self::LABEL), ManipulateHTML::qgsekwygcgawekeq("\x69\156\x70\165\164", $wwgucssaecqekuek)]);
        goto ikmeskqmmqqyigmw;
        yuiimkuacqcecwgw:
        wuwaakyeqqeeogyy:
        goto uwwqiicwuwkwqcmg;
        kakyqyqyweuaoqmg:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\164\x69\160" => '', self::NAME => '', self::LABEL => '', self::VALUE => '']);
        goto ecgwcgmuemqagggm;
        ecowowaocsooqkyo:
        $wwgucssaecqekuek["\x63\x68\145\143\x6b\x65\144"] = true;
        goto yuiimkuacqcecwgw;
        ecgwcgmuemqagggm:
        $wwgucssaecqekuek = ["\143\x6c\x61\x73\163" => "\x63\x68\145\x63\153\142\x6f\x78", self::TYPE => "\x63\150\x65\x63\x6b\142\157\170", self::NAME => ManipulateArray::get($ywmkwiwkosakssii, self::NAME)];
        goto igauaamasosqcyys;
        igauaamasosqcyys:
        if (!ManipulateArray::get($ywmkwiwkosakssii, self::VALUE, false)) {
            goto wuwaakyeqqeeogyy;
        }
        goto ecowowaocsooqkyo;
        ikmeskqmmqqyigmw:
    }
}
