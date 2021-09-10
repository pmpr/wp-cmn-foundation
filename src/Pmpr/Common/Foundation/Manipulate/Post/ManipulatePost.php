<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Post;

use Exception;
use Pmpr\Common\Foundation\Decorator\DecoratorHook;
use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\Decorator\DecoratorUser;
use Pmpr\Common\Foundation\Decorator\Post\DecoratorAuthor;
use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\ManipulateUser;
use Pmpr\Common\Foundation\Manipulate\ManipulateValidation;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use WP_Post;
use WP_Post_Type;
use WP_Query;

class ManipulatePost extends Common
{
    
    public static function wugecumwuwwwqyoe($post)
    {
        return DecoratorPost::wugecumwuwwwqyoe(self::mwikyscisascoeea($post, true));
    }
    
    public static function cwucesiiikgqsgui()
    {
        goto ayocomqsygokygku;
        mwkyqwwyuoquwycw:
        $sqeykgyoooqysmca = self::gueasuouwqysmomu($post);
        goto cagckkqacmeaemik;
        ekieuqyaekgaekem:
        return $sqeykgyoooqysmca;
        goto uycmykimwqoyykmo;
        skgmwkqigcucecks:
        if ($typenow) {
            goto yemeacuywsiqecgm;
        }
        goto qaugoawikwesmkqo;
        swekqcymmemsckim:
        goto cwaaqwgckkmmuayw;
        goto mgsqaweekeiqgcys;
        kmgmsagugycgguso:
        goto cwaaqwgckkmmuayw;
        goto qoukygmscqwwmeci;
        mgsqaweekeiqgcys:
        yemeacuywsiqecgm:
        goto ccyskouwcaewmmuq;
        cagckkqacmeaemik:
        eegacceeuuycmssm:
        goto gokeooqgmyisigwu;
        cyweqwceuyeuqwiq:
        if ($sqeykgyoooqysmca) {
            goto imgcoqgqsgmwussc;
        }
        goto okwcqgkysyueokie;
        okwcqgkysyueokie:
        global $typenow, $current_screen;
        goto skgmwkqigcucecks;
        ccyskouwcaewmmuq:
        $sqeykgyoooqysmca = $typenow;
        goto kmgmsagugycgguso;
        maaqgkcmqkcguscg:
        if (!(!$sqeykgyoooqysmca && $post)) {
            goto eegacceeuuycmssm;
        }
        goto mwkyqwwyuoquwycw;
        cyoqykquycmuksqu:
        $sqeykgyoooqysmca = ManipulateArray::get($current_screen, self::POST_TYPE);
        goto owcyysasyeaaowwk;
        ksewmguscaqkiiso:
        $sqeykgyoooqysmca = ManipulateServer::ayueggmoqeeukqmq(self::POST_TYPE);
        goto qkccmuekscemyiqi;
        qkccmuekscemyiqi:
        $post = ManipulateServer::ayueggmoqeeukqmq(self::POST);
        goto maaqgkcmqkcguscg;
        ayocomqsygokygku:
        $sqeykgyoooqysmca = ManipulateArray::get(self::get(), self::POST_TYPE);
        goto cyweqwceuyeuqwiq;
        qoukygmscqwwmeci:
        saaqoyeqicykmmuu:
        goto cyoqykquycmuksqu;
        kiaeuogcagqymoia:
        imgcoqgqsgmwussc:
        goto ekieuqyaekgaekem;
        qaugoawikwesmkqo:
        if ($current_screen) {
            goto saaqoyeqicykmmuu;
        }
        goto swekqcymmemsckim;
        eiqwmksumaugsiue:
        if ($sqeykgyoooqysmca) {
            goto yswsuyqqsygkqcgi;
        }
        goto ksewmguscaqkiiso;
        gokeooqgmyisigwu:
        yswsuyqqsygkqcgi:
        goto kiaeuogcagqymoia;
        owcyysasyeaaowwk:
        cwaaqwgckkmmuayw:
        goto eiqwmksumaugsiue;
        uycmykimwqoyykmo:
    }
    
    public static function ygqycmmkoiuocoia($post)
    {
        return ManipulateArray::get(self::get($post), "\x70\157\163\x74\x5f\x70\141\x72\145\x6e\164");
    }
    
    public static function ekwkywuguceaogsk()
    {
        goto igommeoookeycwmc;
        yaggoqgeaucmkmsi:
        sgiswsoiyoowcqsw:
        goto weuicwuusquqioeo;
        ymmkmyqiigmskumu:
        yuqyccgsmegiicoc:
        goto cumcsgcamqomeygk;
        cumcsgcamqomeygk:
        return $wyoiwuqokyeeuguk;
        goto kikyqwgykkiskoik;
        scmqkqwakowggkmu:
        if (!have_posts()) {
            goto yuqyccgsmegiicoc;
        }
        goto yaggoqgeaucmkmsi;
        kmeqemccwyaskwqk:
        goto sgiswsoiyoowcqsw;
        goto akeeousiaemumwqy;
        igommeoookeycwmc:
        $wyoiwuqokyeeuguk = [];
        goto scmqkqwakowggkmu;
        weuicwuusquqioeo:
        if (!have_posts()) {
            goto gyakkgyocuygkkwi;
        }
        goto mswiyiyqqqqqmccc;
        akeeousiaemumwqy:
        gyakkgyocuygkkwi:
        goto ymmkmyqiigmskumu;
        mswiyiyqqqqqmccc:
        the_post();
        goto ousuggsuweyeqyuo;
        ousuggsuweyeqyuo:
        $wyoiwuqokyeeuguk[] = self::get();
        goto kmeqemccwyaskwqk;
        kikyqwgykkiskoik:
    }
    
    public static function cuoieqacocyyookg($post)
    {
        $emeuskyoeemoywwi = self::wgocauqiyqkmkyki($post);
        return floor($emeuskyoeemoywwi / 200);
    }
    
    public static function wgocauqiyqkmkyki($post)
    {
        goto kusaguaukqyawgck;
        oekkqiisaauoowkm:
        
        $ewgwqamkygiqaawc = preg_replace("\57\133\x5b\72\x73\x70\141\143\x65\72\135\x5d\x2f", "\x20", $ewgwqamkygiqaawc);
        goto iuqesqwcmseaoouo;
        kusaguaukqyawgck:
        $post = self::get($post);
        goto iwuiyecakwogaqos;
        iuqesqwcmseaoouo:
        
        
        $emeuskyoeemoywwi = preg_split("\57\133\12\xd\x9\40\x5d\53\57", $ewgwqamkygiqaawc, 0, PREG_SPLIT_NO_EMPTY);
        goto gyqeokswmeikygki;
        gyqeokswmeikygki:
        
        return count($emeuskyoeemoywwi);
        goto gcqmmuowwaseagoa;
        eceyessoaayaagci:
        
        $ewgwqamkygiqaawc = preg_replace("\x2f\x5b\133\72\x70\165\x6e\143\x74\x3a\x5d\x5b\x3a\144\x69\x67\x69\164\x3a\x5d\135\x2f", '', $ewgwqamkygiqaawc);
        goto oekkqiisaauoowkm;
        iwuiyecakwogaqos:
        $ewgwqamkygiqaawc = self::souwykwwmyygqyqi($post);
        goto eceyessoaayaagci;
        gcqmmuowwaseagoa:
    }
    
    public static function mwoyqeeigwqoamiw($ywmkwiwkosakssii = [])
    {
        goto aqgmwywwecioauqg;
        ocsyqkkqkwekgakm:
        mcyiwawwcsquwiqq:
        goto wuucmmcggqqsmakc;
        cquyikuyaiskayos:
        if (!$ooiewiwkegguusum) {
            goto qsocqumaigsayksm;
        }
        goto kwsusuqioqiaokmk;
        ikuuqaoiwigcmwyu:
        yskwigcmaicqamqy:
        goto amaoecqeywkkmyoi;
        acmoiyiogowkkesw:
        $oammesyieqmwuwyi = array_diff_key($oammesyieqmwuwyi, array_flip($yemgmmgogcwccuky));
        goto ocsyqkkqkwekgakm;
        uwyuiwkkeuwsykys:
        csciwewamgcguguc:
        goto acmoiyiogowkkesw;
        ucwuomcmcoqmyqwm:
        akkuiemqaogigaqa:
        goto iomigqssyeeaqgsg;
        wceiwqiccssqgcuw:
        $ooiewiwkegguusum = ManipulateArray::get($ywmkwiwkosakssii, self::INCLUDE);
        goto ueoygowuiugooicc;
        ugiegewmsumyuqmq:
        $gqgemcmoicmgaqie = ManipulateFormat::omaawkkwwyesqwcc($gqgemcmoicmgaqie, ["\160\x75\x62\x6c\151\x63" => true, "\137\142\165\x69\x6c\164\151\156" => false, "\x70\x75\x62\x6c\x69\143\154\x79\x5f\x71\x75\145\x72\171\x61\x62\154\x65" => true]);
        goto geiwkqgwawsmyeiw;
        suqaqoaowamkiymi:
        if ($yemgmmgogcwccuky) {
            goto csciwewamgcguguc;
        }
        goto wccuioiewmeamewo;
        ogekauwggisguwkq:
        goto mcyiwawwcsquwiqq;
        goto uwyuiwkkeuwsykys;
        wwkgimsumqsaicoy:
        qsocqumaigsayksm:
        goto ugiegewmsumyuqmq;
        kwqoqgccuqgigkoc:
        emmkqsuswgssikec:
        goto ikuuqaoiwigcmwyu;
        wuucmmcggqqsmakc:
        $ksaameoqigiaoigg = [];
        goto eemuaaqoyiqiyyoe;
        wccuioiewmeamewo:
        goto mcyiwawwcsquwiqq;
        goto ucwuomcmcoqmyqwm;
        aesusogymakeuios:
        $aqykuigiuwmmcieu = $sogksuscggsicmac;
        goto seqgigumouyguowy;
        ueocsmuykwyoywui:
        $aqykuigiuwmmcieu = self::OBJECT;
        goto kawkoccmuqqeamms;
        mmgissacqioqksmk:
        $sogksuscggsicmac = ManipulateArray::get($ywmkwiwkosakssii, self::OUTPUT);
        goto wceiwqiccssqgcuw;
        iomigqssyeeaqgsg:
        $oammesyieqmwuwyi = array_intersect_key($ooiewiwkegguusum, $oammesyieqmwuwyi);
        goto ogekauwggisguwkq;
        cuockkkkmamkuygc:
        $ggauoeuaesiymgee = self::DEFAULT_POST_TYPES;
        goto cquyikuyaiskayos;
        kwsusuqioqiaokmk:
        $gqgemcmoicmgaqie = [];
        goto mwsmaceeuacaoeas;
        ueoygowuiugooicc:
        $yemgmmgogcwccuky = ManipulateArray::get($ywmkwiwkosakssii, self::EXCLUDE);
        goto cuockkkkmamkuygc;
        seqgigumouyguowy:
        if (in_array($sogksuscggsicmac, [self::OBJECT, self::NAMES])) {
            goto esggoysyykycecyq;
        }
        goto ueocsmuykwyoywui;
        uqoowswseqmmisei:
        $oammesyieqmwuwyi = ManipulateFormat::omaawkkwwyesqwcc($ggauoeuaesiymgee, DecoratorPost::mwoyqeeigwqoamiw($gqgemcmoicmgaqie, $aqykuigiuwmmcieu));
        goto aeamameocikekces;
        kcaciomiguuugugi:
        foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) {
            goto qokggikksgqmecam;
            oeewoegiqgywwmos:
            goto ccgsasimykggyess;
            goto ekaasiygiigkuasg;
            uumasiqguewuwcaa:
            $ymqmyyeuycgmigyo = $igqsaukqcqscimok->name;
            goto gkwycwegcuicsgas;
            ycygwiuuauuwwmyc:
            goto ccgsasimykggyess;
            goto ywimgeoyusmceogc;
            gqeeomoukqkowycw:
            $ksaameoqigiaoigg[$ymqmyyeuycgmigyo] = $igqsaukqcqscimok;
            goto uussagskoysuoeiw;
            aaqiykkkmossycmw:
            $igqsaukqcqscimok = $igqsaukqcqscimok->label;
            goto ycygwiuuauuwwmyc;
            ywimgeoyusmceogc:
            eueuyagcqqwwsick:
            goto aswkmiocmcogokyy;
            aswkmiocmcogokyy:
            $igqsaukqcqscimok = ManipulateArray::get($igqsaukqcqscimok->rewrite, self::SLUG, $ymqmyyeuycgmigyo);
            goto qyyosiukaswscmuu;
            uussagskoysuoeiw:
            kgqqosqskwaaogyu:
            goto rkasqqqgemowweeg;
            saigoogiqigowuqo:
            if ($sogksuscggsicmac === self::SLUGS) {
                goto eueuyagcqqwwsick;
            }
            goto oeewoegiqgywwmos;
            qyyosiukaswscmuu:
            ccgsasimykggyess:
            goto gqeeomoukqkowycw;
            qokggikksgqmecam:
            $igqsaukqcqscimok = self::waaisqccqacqeium($igqsaukqcqscimok);
            goto smiwewgysqykaqee;
            smiwewgysqykaqee:
            if (!$igqsaukqcqscimok) {
                goto kgqqosqskwaaogyu;
            }
            goto uumasiqguewuwcaa;
            ekaasiygiigkuasg:
            kkicowiukwoykmms:
            goto aaqiykkkmossycmw;
            gkwycwegcuicsgas:
            if ($sogksuscggsicmac === self::LABELS) {
                goto kkicowiukwoykmms;
            }
            goto saigoogiqigowuqo;
            rkasqqqgemowweeg:
            agwoisgcwqooygsg:
            goto cqycwggykmmyacuk;
            cqycwggykmmyacuk:
        }
        goto kwqoqgccuqgigkoc;
        aqgmwywwecioauqg:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\161\x75\145\x72\x79" => [], self::OUTPUT => self::NAMES, self::EXCLUDE => [], self::INCLUDE => []]);
        goto sqgkqqoeksyicmoa;
        mwsmaceeuacaoeas:
        goto eywcgcyicisgcumk;
        goto wwkgimsumqsaicoy;
        sqgkqqoeksyicmoa:
        $gqgemcmoicmgaqie = ManipulateArray::get($ywmkwiwkosakssii, "\161\165\x65\162\x79");
        goto mmgissacqioqksmk;
        gmwqisoikakuqicc:
        $ksaameoqigiaoigg = $oammesyieqmwuwyi;
        goto oouaueaaciqmoaek;
        oouaueaaciqmoaek:
        goto yskwigcmaicqamqy;
        goto eqooqiomasygymwk;
        aeamameocikekces:
        if ($ooiewiwkegguusum) {
            goto akkuiemqaogigaqa;
        }
        goto suqaqoaowamkiymi;
        kawkoccmuqqeamms:
        esggoysyykycecyq:
        goto uqoowswseqmmisei;
        geiwkqgwawsmyeiw:
        eywcgcyicisgcumk:
        goto aesusogymakeuios;
        eemuaaqoyiqiyyoe:
        if (in_array($sogksuscggsicmac, [self::OBJECT, self::LABELS, self::SLUGS])) {
            goto ugkgqeugmkumauos;
        }
        goto gmwqisoikakuqicc;
        eqooqiomasygymwk:
        ugkgqeugmkumauos:
        goto kcaciomiguuugugi;
        amaoecqeywkkmyoi:
        return $ksaameoqigiaoigg;
        goto oymoaaossqyocmue;
        oymoaaossqyocmue:
    }
    
    public static function qcgakseyaikigqco($post = null)
    {
        return DecoratorPost::qcgakseyaikigqco(self::get($post));
    }
    
    public static function cekqoisoaceaqiam($post)
    {
        goto meeceoqcuuasiiio;
        ieyqmiueyikwcwso:
        array_push($auwuoyyagaiegwae, $myyccyuumcscsagc, get_post_type_archive_feed_link($sqeykgyoooqysmca));
        goto eqooeogyogusoyci;
        kwigmoscuksaeaik:
        if (!($myyccyuumcscsagc == true)) {
            goto kyouiqwywyqgkuso;
        }
        goto ieyqmiueyikwcwso;
        sqigokysuqqoyoqq:
        if (!(is_string($ucsmiamgwmayyoco) && !empty($ucsmiamgwmayyoco) && DecoratorOption::get("\x73\x68\x6f\x77\x5f\x6f\x6e\137\146\x72\x6f\156\164") == "\160\141\x67\145")) {
            goto oyqsaukeioykugmm;
        }
        goto qacmciyceoyqmims;
        isawkmamaukaekcg:
        
        array_push($auwuoyyagaiegwae, home_url("\x2f"));
        goto keqweiemkiakogck;
        cgwwckgiugakqowu:
        array_push($auwuoyyagaiegwae, $gwiqqkoakiiquksg, $gwiqqkoakiiquksg . "\146\x65\145\144\57");
        goto aookismekyuisiqy;
        igkuwcieaaaimceu:
        $qscaoekmoooeuyqg = self::mguqscccckuywsya($post);
        goto imgkgmwywoyggiiy;
        gkweycueymqasawm:
        foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) {
            goto omaqoumkmmmuuwkq;
            uwkcasugwwwwmmqu:
            if (!$uyuaosigqymaqsaa) {
                goto weeeiiqqgqoymeke;
            }
            goto sigseymecgiowiii;
            ocykayyqumgsymkk:
            weeeiiqqgqoymeke:
            goto eguuyyiaceyocoge;
            eguuyyiaceyocoge:
            imsmuoawuiemiisk:
            goto skyscuweykackoci;
            sigseymecgiowiii:
            foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
                goto wyuyokmygemgqsmk;
                amgecmwokwwiiuac:
                $ocqawgquwsqioses = ceil($gaeqamemwmwsyukm / $weyoqgcesqgeusiu);
                goto wgwsicukewmsscec;
                ycimqmmmgskimkgi:
                if (!$voccgqswsiwauyow) {
                    goto muisqceosooggyoy;
                }
                goto wmssywakgoiswqey;
                kcgismqksoywmcea:
                if (!$weyoqgcesqgeusiu) {
                    goto acoociuqgmymeggw;
                }
                goto msyksokkggaqasey;
                siymkkcgeegouiuq:
                $weyoqgcesqgeusiu = ManipulateSetting::omkaowmygoqwsywq();
                goto kcgismqksoywmcea;
                ksukaiqewqogiqwu:
                ksmsiiaeokcggegc:
                goto eyuickmcmiiwcgss;
                wgwsicukewmsscec:
                $giqggecqqikcysgq = min($ocqawgquwsqioses, 10);
                goto gcywkgcegesysuoy;
                gcywkgcegesysuoy:
                $ciyackuwsqkoqese = 2;
                goto agqsiuycgsaoescw;
                ousiykwqkgeokoqs:
                ugqqciuuwaioyowe:
                goto qcimcgcggicewoug;
                asmoomkuqyqqywkk:
                $ciyackuwsqkoqese++;
                goto suusasmyiceigsyk;
                agqsiuycgsaoescw:
                woaewkuksuiogeoo:
                goto wgceoaueoiiwwuum;
                wmssywakgoiswqey:
                array_push($auwuoyyagaiegwae, $voccgqswsiwauyow);
                goto siymkkcgeegouiuq;
                wgceoaueoiiwwuum:
                if (!($ciyackuwsqkoqese <= $giqggecqqikcysgq)) {
                    goto ugqqciuuwaioyowe;
                }
                goto imyoymgguyuiksia;
                iqeuoqeeceiikmse:
                muisqceosooggyoy:
                goto ksukaiqewqogiqwu;
                wyuyokmygemgqsmk:
                $voccgqswsiwauyow = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk);
                goto ycimqmmmgskimkgi;
                aigiscsuosewiuus:
                scywsowkeyyssgqo:
                goto asmoomkuqyqqywkk;
                msyksokkggaqasey:
                $gaeqamemwmwsyukm = $iwewcwusemqaiggk->count;
                goto amgecmwokwwiiuac;
                suusasmyiceigsyk:
                goto woaewkuksuiogeoo;
                goto ousiykwqkgeokoqs;
                qcimcgcggicewoug:
                acoociuqgmymeggw:
                goto iqeuoqeeceiikmse;
                imyoymgguyuiksia:
                $oaeeeywcmcskwwgy = $voccgqswsiwauyow . "\160\x61\x67\x65\x2f" . user_trailingslashit($ciyackuwsqkoqese);
                goto ycuamgwmgueemuaq;
                ycuamgwmgueemuaq:
                array_push($auwuoyyagaiegwae, $oaeeeywcmcskwwgy);
                goto aigiscsuosewiuus;
                eyuickmcmiiwcgss:
            }
            goto uwkaawaqoswkcuye;
            omaqoumkmmmuuwkq:
            $uyuaosigqymaqsaa = self::weescwwgqgiyumyw($post, $kesssewsiegssiya);
            goto uwkcasugwwwwmmqu;
            uwkaawaqoswkcuye:
            qqewuuoigkoeeocq:
            goto ocykayyqumgsymkk;
            skyscuweykackoci:
        }
        goto euceooqmeegmumya;
        imgkgmwywoyggiiy:
        
        array_push($auwuoyyagaiegwae, DecoratorAuthor::mkaiaewoyaimieqg($qscaoekmoooeuyqg), get_author_feed_link($qscaoekmoooeuyqg));
        goto qsqgsggawskeqauc;
        uesmmkgaqoqmaiik:
        $sqeykgyoooqysmca = self::gueasuouwqysmomu($post);
        goto wequuyiayswgoosg;
        eqooeogyogusoyci:
        kyouiqwywyqgkuso:
        goto awcgaimyecemucay;
        cymkauiwaemgisae:
        $gwiqqkoakiiquksg = self::ycqquoiyyuesegsy($post);
        goto wwuyacuysiocqcwq;
        aookismekyuisiqy:
        smqgoowsgakckqse:
        goto isawkmamaukaekcg;
        awcgaimyecemucay:
        
        if (!(self::ucwmcwqmqwaymkkc($post) == "\x74\162\141\163\150")) {
            goto smqgoowsgakckqse;
        }
        goto cymkauiwaemgisae;
        iyqaossmgeskkcgg:
        
        $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas($sqeykgyoooqysmca);
        goto gkweycueymqasawm;
        qsqgsggawskeqauc:
        
        $myyccyuumcscsagc = self::mqgeysameoesmuqw($sqeykgyoooqysmca);
        goto kwigmoscuksaeaik;
        iayksyuawioekakq:
        $post = self::get($post);
        goto uesmmkgaqoqmaiik;
        wwuyacuysiocqcwq:
        $gwiqqkoakiiquksg = str_replace("\137\137\x74\162\141\163\150\145\144", '', $gwiqqkoakiiquksg);
        goto cgwwckgiugakqowu;
        keqweiemkiakogck:
        $ucsmiamgwmayyoco = ManipulatePage::symuoymymumgwkaw();
        goto sqigokysuqqoyoqq;
        ksycyguoaoakaasa:
        oyqsaukeioykugmm:
        goto eqgewqgayssmyqyi;
        euceooqmeegmumya:
        cscciumkmikyqica:
        goto igkuwcieaaaimceu;
        eqgewqgayssmyqyi:
        return $auwuoyyagaiegwae;
        goto ikggeywmqciukyuy;
        meeceoqcuuasiiio:
        $auwuoyyagaiegwae = [];
        goto iayksyuawioekakq;
        wequuyiayswgoosg:
        
        array_push($auwuoyyagaiegwae, self::ycqquoiyyuesegsy($post));
        goto iyqaossmgeskkcgg;
        qacmciyceoyqmims:
        array_push($auwuoyyagaiegwae, $ucsmiamgwmayyoco);
        goto ksycyguoaoakaasa;
        ikggeywmqciukyuy:
    }
    
    public static function keeogscqcgsequyc($useksmwkuswkwcqg)
    {
        goto ygyikqcaweccikoy;
        wsocqyukguoqmoou:
        if ($wkaqekwwgqsqwcoi) {
            goto qeeiayaggickmsem;
        }
        goto emwuosqcciqgwuec;
        ygyikqcaweccikoy:
        $wkaqekwwgqsqwcoi = '';
        goto oaquckygauqeycue;
        ouuuiwcmacckekgw:
        if (!$mksyucucyswaukig) {
            goto uogugagqqgaumeui;
        }
        goto siikoyaookakcsya;
        siikoyaookakcsya:
        $wkaqekwwgqsqwcoi = $mksyucucyswaukig->menu_icon;
        goto akiaoyqwwgyogmwa;
        mygoemwmmmmeswoy:
        uogugagqqgaumeui:
        goto wsocqyukguoqmoou;
        akiaoyqwwgyogmwa:
        $useksmwkuswkwcqg = $mksyucucyswaukig->name;
        goto mygoemwmmmmeswoy;
        oaquckygauqeycue:
        $mksyucucyswaukig = self::waaisqccqacqeium($useksmwkuswkwcqg);
        goto ouuuiwcmacckekgw;
        emwuosqcciqgwuec:
        $wkaqekwwgqsqwcoi = "\x61\x64\x6d\x69\x6e\x2d{$useksmwkuswkwcqg}";
        goto daaaoeseaeakowis;
        daaaoeseaeakowis:
        qeeiayaggickmsem:
        goto mqqqskweuccusqsg;
        mqqqskweuccusqsg:
        return $wkaqekwwgqsqwcoi;
        goto egssagkqigycaowo;
        egssagkqigycaowo:
    }
    
    public static function uikgwcuascgeissw($post = null)
    {
        goto mweuowgyuuomycug;
        asqikgqmeqysakky:
        return sprintf("\45\x73\40\x2d\x20\x25\x73", $meqocwsecsywiiqs, $useksmwkuswkwcqg);
        goto yyckkkysceayoacc;
        gogeigmcqokqqiwc:
        $useksmwkuswkwcqg = self::gueasuouwqysmomu($post, true);
        goto yieyamwmiyceaysm;
        qqsoyoesgkwakcwc:
        $useksmwkuswkwcqg = ManipulateArray::qamwegcyimgcqksw($useksmwkuswkwcqg, "\x6c\141\x62\145\154\x73\x2e\x73\151\x6e\x67\165\x6c\141\x72\137\x6e\141\155\x65");
        goto wqsikiwycqwksiwy;
        mweuowgyuuomycug:
        $post = self::get($post);
        goto iuagymwagckgasgy;
        iuagymwagckgasgy:
        $meqocwsecsywiiqs = DecoratorPost::qcgakseyaikigqco($post);
        goto gogeigmcqokqqiwc;
        yieyamwmiyceaysm:
        if (!$useksmwkuswkwcqg) {
            goto usymiywgyuqgsmgo;
        }
        goto qqsoyoesgkwakcwc;
        wqsikiwycqwksiwy:
        usymiywgyuqgsmgo:
        goto asqikgqmeqysakky;
        yyckkkysceayoacc:
    }
    
    public static function wieguyuwywywksac($ywmkwiwkosakssii = [])
    {
        return wp_get_archives(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\145\x63\x68\157" => false, self::TYPE => "\x6d\157\x6e\164\x68\154\171", self::ORDER => "\x44\x45\123\103"]));
    }
    
    public static function ccwssmqgyasqqcoc($post, $sqeykgyoooqysmca) : bool
    {
        $post = self::get($post, self::OBJECT, true);
        return $post && self::gueasuouwqysmomu($post) == $sqeykgyoooqysmca;
    }
    
    public static function qeosassuekcieuuy($sqeykgyoooqysmca = null) : bool
    {
        goto umugkkiiiakomyae;
        ssseiiwsmacscqkk:
        $sqeykgyoooqysmca = self::waaisqccqacqeium($sqeykgyoooqysmca);
        goto wsagsuekaoamamwq;
        giismoqygwoeiucm:
        return $cekoogweeooasayu;
        goto usayuwaoekoyeigw;
        umugkkiiiakomyae:
        $cekoogweeooasayu = false;
        goto ssseiiwsmacscqkk;
        ywkowqwiseoaosue:
        fgacmumaqamuggaw:
        goto giismoqygwoeiucm;
        gqkckwmwucyicaom:
        $cekoogweeooasayu = $sqeykgyoooqysmca->public === true;
        goto ywkowqwiseoaosue;
        wsagsuekaoamamwq:
        if (!$sqeykgyoooqysmca) {
            goto fgacmumaqamuggaw;
        }
        goto gqkckwmwucyicaom;
        usayuwaoekoyeigw:
    }
    
    public static function qkweigiqsaaigqau($post = null) : ?string
    {
        goto zoeammwiceimsmea;
        iqayckmwkoaoyusg:
        return $eeamcawaiqocomwy;
        goto cusamwcumoyaccig;
        oeiyuauoweasyegq:
        if (!$qscaoekmoooeuyqg) {
            goto sgwggiwoawyysamo;
        }
        goto oeyaaksqsgmecwmm;
        qyowaswasswaayey:
        sgwggiwoawyysamo:
        goto iqayckmwkoaoyusg;
        oeyaaksqsgmecwmm:
        $eeamcawaiqocomwy = DecoratorAuthor::mkaiaewoyaimieqg($qscaoekmoooeuyqg);
        goto qyowaswasswaayey;
        zoeammwiceimsmea:
        $eeamcawaiqocomwy = null;
        goto gawoykaumugqiiiw;
        gawoykaumugqiiiw:
        $qscaoekmoooeuyqg = self::mguqscccckuywsya($post);
        goto oeiyuauoweasyegq;
        cusamwcumoyaccig:
    }
    
    public static function wsiiswmaagmyiaiw($post = null)
    {
        return DecoratorPost::wsiiswmaagmyiaiw(self::mwikyscisascoeea($post));
    }
    
    public static function mqgeysameoesmuqw($useksmwkuswkwcqg) : string
    {
        goto egoyusisgekiqoye;
        iwgymiqeamaeqqom:
        qckuswayaoymsksk:
        goto aamackwoccmccyks;
        aamackwoccmccyks:
        return trailingslashit(DecoratorPost::mqgeysameoesmuqw($useksmwkuswkwcqg));
        goto meamgyseweakcwms;
        eukasuwuekwugokm:
        $useksmwkuswkwcqg = $useksmwkuswkwcqg->name;
        goto iwgymiqeamaeqqom;
        egoyusisgekiqoye:
        if (!$useksmwkuswkwcqg instanceof WP_Post_Type) {
            goto qckuswayaoymsksk;
        }
        goto eukasuwuekwugokm;
        meamgyseweakcwms:
    }
    
    public static function insert($useksmwkuswkwcqg, $ywmkwiwkosakssii = []) : ?int
    {
        goto eqyccakwmkgmsyik;
        imkggwewaoaeaaaa:
        $sogksuscggsicmac = DecoratorPost::insert($ywmkwiwkosakssii);
        goto kegkgqcaoogqqwuy;
        ukamoqcwkkacmkuo:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\157\163\164\x5f\x74\x69\x74\154\145" => '', "\160\157\163\x74\137\156\x61\155\x65" => '', "\x70\157\163\164\x5f\143\x6f\x6e\x74\145\x6e\164" => '', "\160\x6f\x73\x74\137\x73\164\x61\164\x75\163" => '']);
        goto osisauycomkeaisq;
        sysqgmqceqakymga:
        if ($wyoiwuqokyeeuguk) {
            goto uaequckaaeewaqiy;
        }
        goto ckoqcgskyowkgwqc;
        ueyscskqyqmwgyqq:
        return $sogksuscggsicmac;
        goto qgsqycogyicuiioq;
        osisauycomkeaisq:
        $wyoiwuqokyeeuguk = self::ciugwooasaqcywas($useksmwkuswkwcqg, [self::NAME => $ywmkwiwkosakssii["\160\x6f\163\164\x5f\156\141\x6d\x65"], self::POSTS_PER_PAGE => 1]);
        goto sysqgmqceqakymga;
        mmmaqiceqwswaica:
        $ywmkwiwkosakssii[self::POST_TYPE] = $useksmwkuswkwcqg;
        goto ukamoqcwkkacmkuo;
        kegkgqcaoogqqwuy:
        uaequckaaeewaqiy:
        goto ueyscskqyqmwgyqq;
        ckoqcgskyowkgwqc:
        $ywmkwiwkosakssii["\160\157\163\164\137\x61\165\x74\x68\157\162"] = ManipulateUser::mwikyscisascoeea();
        goto imkggwewaoaeaaaa;
        eqyccakwmkgmsyik:
        $sogksuscggsicmac = null;
        goto mmmaqiceqwswaica;
        qgsqycogyicuiioq:
    }
    
    public static function sqyyemqmmgmyiaam($sciomagaqmgggsiu = [])
    {
        return DecoratorQuery::moegwqkekcawsggs($sciomagaqmgggsiu);
    }
    
    public static function waoeigwigksoikgu($post, $ywmkwiwkosakssii = [])
    {
        $ywmkwiwkosakssii["\160\157\x73\x74\x5f\x69\144"] = self::mwikyscisascoeea($post);
        return ManipulateComment::ciugwooasaqcywas($ywmkwiwkosakssii);
    }
    
    public static function iuaacwwygkmcoeiy($qwcmueausqgiwigy, $gqgemcmoicmgaqie)
    {
        goto ameoiemwymmeomqq;
        uwmckciqcuwoyemm:
        if (!($uyuaosigqymaqsaa && $qwcmueausqgiwigy)) {
            goto xeeuigemugoamqao;
        }
        goto easusuoaqiwgcuui;
        iecocimeqmmockam:
        xeeuigemugoamqao:
        goto ceogiuqcsqkmysga;
        sqmqymmecmqykiqs:
        $qqmmggwcsmymegca = $uyuaosigqymaqsaa;
        goto youwoggqmcuggmyy;
        eewcoeiokouymaic:
        eycmewmysuymswuk:
        goto ocuocqiyuecksmsi;
        ameoiemwymmeomqq:
        $uyuaosigqymaqsaa = ManipulateArray::get($gqgemcmoicmgaqie->query_vars, "\163\x65\x61\x72\x63\x68\x5f\x74\x65\162\155\x73");
        goto uwmckciqcuwoyemm;
        qqmeumqiyqkoycww:
        foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
            $qwcmueausqgiwigy[] = $wpdb->prepare("{$wpdb->posts}\56\x70\157\163\164\137\164\151\164\154\x65\40\114\x49\x4b\105\40\x25\x73", $aaycmcgqqqsysccs . $wpdb->esc_like($iwewcwusemqaiggk) . $aaycmcgqqqsysccs);
            sccqosiycoaosikm:
        }
        goto eewcoeiokouymaic;
        easusuoaqiwgcuui:
        global $wpdb;
        goto sqmqymmecmqykiqs;
        youwoggqmcuggmyy:
        $aaycmcgqqqsysccs = !empty($qqmmggwcsmymegca["\x65\x78\141\x63\x74"]) ? '' : "\x25";
        goto gmycyuqoscismuig;
        gmycyuqoscismuig:
        $qwcmueausqgiwigy = [];
        goto qqmeumqiyqkoycww;
        ceogiuqcsqkmysga:
        return $qwcmueausqgiwigy;
        goto iaqwyagqyokkmeoo;
        suicyusecackqaii:
        wcykiuessuoeagki:
        goto gacwuumiuewqgeim;
        ekayucummqeqmwgc:
        $qwcmueausqgiwigy[] = "{$wpdb->posts}\x2e\160\x6f\x73\164\x5f\x70\x61\x73\x73\x77\157\162\144\x20\x3d\x20\47\47";
        goto suicyusecackqaii;
        gacwuumiuewqgeim:
        $qwcmueausqgiwigy = "\40\101\x4e\104\40" . implode("\x20\101\116\x44\x20", $qwcmueausqgiwigy);
        goto iecocimeqmmockam;
        ocuocqiyuecksmsi:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto wcykiuessuoeagki;
        }
        goto ekayucummqeqmwgc;
        iaqwyagqyokkmeoo:
    }
    
    public static function waaisqccqacqeium($useksmwkuswkwcqg = null) : ?WP_Post_Type
    {
        goto kusoiyymwykqsgue;
        asgkgomkmykaqeac:
        $useksmwkuswkwcqg = DecoratorPost::waaisqccqacqeium($useksmwkuswkwcqg);
        goto ukaocimwskuqgqso;
        oayuucaeciioiwqw:
        $useksmwkuswkwcqg = self::gueasuouwqysmomu();
        goto gqkuecyoaomqacgk;
        kusoiyymwykqsgue:
        if ($useksmwkuswkwcqg instanceof WP_Post_Type) {
            goto syuoooyaackuoues;
        }
        goto agksaoiusscawcwc;
        ukaocimwskuqgqso:
        syuoooyaackuoues:
        goto quwqksyoiigamkys;
        quwqksyoiigamkys:
        return $useksmwkuswkwcqg;
        goto eqwmoigeokkskwuy;
        gqkuecyoaomqacgk:
        uqowsoiyaummsyoy:
        goto asgkgomkmykaqeac;
        agksaoiusscawcwc:
        if ($useksmwkuswkwcqg) {
            goto uqowsoiyaummsyoy;
        }
        goto oayuucaeciioiwqw;
        eqwmoigeokkskwuy:
    }
    
    public static function mwikyscisascoeea($post = null, $cwwowqyuwccuykom = false)
    {
        goto qycekaqowowqaosm;
        gwimqwmmuacwkmou:
        $post = get_the_ID();
        goto kswkocesygkuqiiy;
        qycekaqowowqaosm:
        if (is_numeric($post)) {
            goto wwcimuywiwqwagoq;
        }
        goto iuaikkckoskwuwyw;
        iuaikkckoskwuwyw:
        $post = ManipulateArray::get($post, "\x49\104");
        goto oksiwycekgweuyoc;
        eqyykccckaqyikas:
        ikqwwkscesmugsuq:
        goto uwscoaaycokmqegk;
        uwscoaaycokmqegk:
        mioiyawikawqyaay:
        goto swqycaokmkkykkea;
        oksiwycekgweuyoc:
        if (!(!$post && !$cwwowqyuwccuykom)) {
            goto mioiyawikawqyaay;
        }
        goto kwugcgwmcsoswees;
        kwiuwccmuwwwwcak:
        kyicaqywsmawwwuo:
        goto wakcuqwemksmyeos;
        kwugcgwmcsoswees:
        if (DecoratorQuery::seokosgecygsmqau()) {
            goto kyicaqywsmawwwuo;
        }
        goto gwimqwmmuacwkmou;
        swqycaokmkkykkea:
        wwcimuywiwqwagoq:
        goto aoycieuggikeomis;
        aoycieuggikeomis:
        return $post;
        goto uwgksqcakaieyscy;
        kswkocesygkuqiiy:
        goto ikqwwkscesmugsuq;
        goto kwiuwccmuwwwwcak;
        wakcuqwemksmyeos:
        $post = DecoratorQuery::keeuqgyooycqoygw();
        goto eqyykccckaqyikas;
        uwgksqcakaieyscy:
    }
    
    public static function emcckouwaoassquc(array $sciomagaqmgggsiu = [])
    {
        goto oeegykgsgkscwcio;
        imsqyecesygwiwkk:
        oqcgimyqwmqgyygw:
        goto yysqgqeoyckgmcsa;
        yysqgqeoyckgmcsa:
        return self::ciugwooasaqcywas($sciomagaqmgggsiu, ["\x70\157\x73\164\137\x73\x74\141\x74\x75\163" => "\160\165\x62\154\x69\x73\150", "\146\x69\x65\154\144\163" => self::IDS]);
        goto coaiaawqcaggmemg;
        oeegykgsgkscwcio:
        if ($sciomagaqmgggsiu) {
            goto oqcgimyqwmqgyygw;
        }
        goto qmgqguiisgckwocw;
        qmgqguiisgckwocw:
        $sciomagaqmgggsiu = self::mwoyqeeigwqoamiw();
        goto imsqyecesygwiwkk;
        coaiaawqcaggmemg:
    }
    
    public static function aqcogscycyycgkuq($post = null, $mgkceomocowocqyo = [])
    {
        return self::ygwimyogyaqgumam("\x70\157\163\x74\137\156\141\x6d\x65", $post, $mgkceomocowocqyo);
    }
    
    public static function qkuksuwkueysueww(string $useksmwkuswkwcqg)
    {
        goto cauamyimeqmgwick;
        ymiiukyiasogueiq:
        $gaeqamemwmwsyukm = 0;
        goto qsweawwuowkoeemg;
        wawiggqugqwwacgq:
        return $gaeqamemwmwsyukm;
        goto qwkwyciyyigugcms;
        cauamyimeqmgwick:
        global $wpdb;
        goto ymiiukyiasogueiq;
        qsweawwuowkoeemg:
        try {
            $gaeqamemwmwsyukm = (int) $wpdb->get_var("\x53\x45\x4c\105\x43\x54\40\x43\117\x55\116\x54\x28\143\x6f\x6d\x6d\145\156\164\x5f\111\104\x29\12\11\11\11\11\11\x46\122\117\115\40{$wpdb->comments}\40\127\110\x45\x52\x45\x20\x63\x6f\155\155\145\x6e\164\x5f\x70\x6f\163\x74\x5f\111\x44\40\151\x6e\40\50\xa\11\11\11\11\x9\x53\x45\x4c\105\x43\x54\40\111\x44\40\x46\x52\117\115\x20{$wpdb->posts}\40\127\x48\x45\x52\x45\40\x70\157\x73\164\137\x74\x79\x70\145\40\x3d\x20\x27{$useksmwkuswkwcqg}\x27\12\11\11\11\x9\11\101\116\x44\40\160\x6f\x73\x74\137\163\x74\141\x74\x75\x73\40\75\x20\x27\x70\165\x62\x6c\151\x73\150\x27\x29\40\x41\x4e\x44\x20\143\x6f\x6d\x6d\145\x6e\164\137\x61\160\x70\x72\x6f\x76\145\x64\40\x3d\40\x27\x31\x27");
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        goto wawiggqugqwwacgq;
        qwkwyciyyigugcms:
    }
    
    public static function ucwmcwqmqwaymkkc($post = null, $mgkceomocowocqyo = [])
    {
        return self::ygwimyogyaqgumam("\160\x6f\x73\x74\137\x73\x74\x61\x74\165\x73", $post, $mgkceomocowocqyo);
    }
    
    public static function mguqscccckuywsya($post = null, $cwwowqyuwccuykom = false)
    {
        return self::ygwimyogyaqgumam("\160\x6f\163\x74\x5f\x61\165\164\150\157\x72", self::mwikyscisascoeea($post, $cwwowqyuwccuykom));
    }
    
    public static function uiuwugwykqocmiec($post = null) : ?int
    {
        return DecoratorHook::sscegwueamckwmcy("\x67\x65\x74\x5f\160\x6f\x73\164\x5f\167\157\162\x64\x5f\143\x6f\165\156\x74", 0, self::get($post));
    }
    
    public static function gsaceacmqiuqoouo($useksmwkuswkwcqg, $ymqmyyeuycgmigyo, $ywmkwiwkosakssii = [])
    {
        goto ceqcqskmksiuosuy;
        wgyqskiikcoamceq:
        return $suuagcecoyuweoqk ? array_pop($suuagcecoyuweoqk) : '';
        goto yoceycuiiwwmscci;
        ceqcqskmksiuosuy:
        $ywmkwiwkosakssii["\x6e\x61\x6d\x65"] = $ymqmyyeuycgmigyo;
        goto ygygqysoqeimimgm;
        ygygqysoqeimimgm:
        $suuagcecoyuweoqk = self::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii);
        goto wgyqskiikcoamceq;
        yoceycuiiwwmscci:
    }
    
    public static function owicscwgeuqcqaig($useksmwkuswkwcqg = "\x70\157\x73\164", $ywmkwiwkosakssii = [])
    {
        goto sigisgiqiuiuqemc;
        okeewwyoqawamsoa:
        $yiasugywggckywoa["\151\x67\156\157\162\x65\x5f\163\164\151\143\x6b\x79\137\x70\x6f\163\x74\x73"] = true;
        goto sgguaokgyweasccc;
        qowqokqkiweosuwa:
        $yiasugywggckywoa["\x63\141\164"] = $yiasugywggckywoa["\143\141\164\x65\x67\157\x72\x79"];
        goto qucmewyuwkkwsseo;
        wywyyuawikmwceym:
        $yiasugywggckywoa["\x70\157\163\164\x5f\137\156\x6f\x74\x5f\151\x6e"] = wp_parse_id_list($yiasugywggckywoa["\x65\x78\143\x6c\165\144\145"]);
        goto eomwsawiqyuyiiiw;
        ikwwiueqmmkayyce:
        if (!(!empty($yiasugywggckywoa["\x6e\x75\x6d\142\145\x72\160\157\163\x74\163"]) && empty($yiasugywggckywoa["\160\x6f\x73\164\x73\x5f\x70\x65\x72\137\160\x61\147\145"]))) {
            goto mmgsqoiukqkyiayw;
        }
        goto iwcwuugoguscgqye;
        sigisgiqiuiuqemc:
        $ycmguuqqaiisymgg = ["\x6e\x75\x6d\142\x65\x72\x70\157\163\164\x73" => 5, "\143\x61\164\145\147\x6f\x72\171" => 0, "\157\x72\x64\x65\162\x62\171" => "\x64\141\164\145", "\157\162\144\145\162" => "\104\105\x53\x43", "\x69\156\143\x6c\165\x64\x65" => [], "\145\170\143\x6c\x75\x64\145" => [], "\155\145\x74\x61\137\153\145\x79" => '', "\155\145\164\x61\137\x76\x61\154\x75\x65" => '', "\160\x6f\163\x74\x5f\x74\x79\160\145" => $useksmwkuswkwcqg, "\163\x75\160\x70\162\145\163\x73\137\146\x69\154\164\x65\162\163" => true];
        goto siiyycmowckwsemw;
        qymkekiqwouwaoos:
        goto kmocumwwsgkgeqay;
        goto eceowukgiumqosom;
        qsaagygqqsmgiesk:
        $yiasugywggckywoa["\160\x6f\163\164\137\x5f\151\156"] = $egekuwigiusmwiek;
        goto qymkekiqwouwaoos;
        osgkqqqqimmwsmsi:
        if (!empty($yiasugywggckywoa["\145\170\x63\154\x75\144\145"])) {
            goto uockmkmeymgyqsqi;
        }
        goto megauiwcsiuuiquk;
        gyuioyyowaiqcywy:
        return new WP_Query($yiasugywggckywoa);
        goto gcaaimgqweguwksg;
        omcseuaowsucussk:
        $egekuwigiusmwiek = wp_parse_id_list($yiasugywggckywoa["\x69\156\143\x6c\x75\x64\x65"]);
        goto iimqqykwwmqeukai;
        kymkyymiquekuscq:
        mmgsqoiukqkyiayw:
        goto ckqgkowqkggscuoi;
        ckqgkowqkggscuoi:
        if (empty($yiasugywggckywoa["\143\x61\164\x65\147\x6f\x72\x79"])) {
            goto qeyuquwgysuucygo;
        }
        goto qowqokqkiweosuwa;
        iimqqykwwmqeukai:
        $yiasugywggckywoa["\160\157\x73\164\x73\x5f\160\x65\x72\x5f\x70\141\147\x65"] = count($egekuwigiusmwiek);
        goto qsaagygqqsmgiesk;
        aecweaquqmiiimsc:
        if (!empty($yiasugywggckywoa["\160\x6f\x73\x74\137\163\x74\141\x74\x75\x73"])) {
            goto xeyusieocqgkowca;
        }
        goto wkkwgyuaqwiygawe;
        eceowukgiumqosom:
        uockmkmeymgyqsqi:
        goto wywyyuawikmwceym;
        megauiwcsiuuiquk:
        goto kmocumwwsgkgeqay;
        goto zkuyggayyoqeeqek;
        kocoameeyqygkwok:
        if (!empty($yiasugywggckywoa["\x69\x6e\x63\x6c\x75\x64\145"])) {
            goto wimqsusyesasaism;
        }
        goto osgkqqqqimmwsmsi;
        eomwsawiqyuyiiiw:
        kmocumwwsgkgeqay:
        goto okeewwyoqawamsoa;
        zkuyggayyoqeeqek:
        wimqsusyesasaism:
        goto omcseuaowsucussk;
        qucmewyuwkkwsseo:
        qeyuquwgysuucygo:
        goto kocoameeyqygkwok;
        iwcwuugoguscgqye:
        $yiasugywggckywoa["\x70\x6f\x73\x74\x73\137\160\x65\162\x5f\160\x61\147\145"] = $yiasugywggckywoa["\x6e\x75\x6d\x62\x65\162\160\157\163\x74\x73"];
        goto kymkyymiquekuscq;
        uaeyogsicwkuwcak:
        xeyusieocqgkowca:
        goto ikwwiueqmmkayyce;
        wkkwgyuaqwiygawe:
        $yiasugywggckywoa["\x70\x6f\x73\164\137\x73\x74\141\164\165\x73"] = "\x61\164\x74\x61\x63\150\155\x65\x6e\164" === $yiasugywggckywoa["\160\157\x73\164\x5f\x74\x79\x70\145"] ? "\x69\x6e\x68\x65\x72\x69\x74" : "\160\x75\x62\154\x69\x73\150";
        goto uaeyogsicwkuwcak;
        sgguaokgyweasccc:
        $yiasugywggckywoa["\x6e\157\x5f\x66\157\x75\156\144\x5f\x72\x6f\x77\x73"] = true;
        goto gyuioyyowaiqcywy;
        siiyycmowckwsemw:
        $yiasugywggckywoa = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg);
        goto aecweaquqmiiimsc;
        gcaaimgqweguwksg:
    }
    
    public static function weescwwgqgiyumyw($post, $seyqqsmuaiegkeeq, $ywmkwiwkosakssii = [])
    {
        goto ssiwoquqiiuysuma;
        yucmskwuguqgqimc:
        $uyuaosigqymaqsaa = [];
        goto eeieegmqysegumei;
        eeieegmqysegumei:
        cyamaucweckqmscc:
        goto usyyyguieaqqyswa;
        ssiwoquqiiuysuma:
        $uyuaosigqymaqsaa = DecoratorPost::weescwwgqgiyumyw(self::mwikyscisascoeea($post), $seyqqsmuaiegkeeq, $ywmkwiwkosakssii);
        goto iiukckigywisaego;
        usyyyguieaqqyswa:
        return $uyuaosigqymaqsaa;
        goto ousiqsmccumayaes;
        iiukckigywisaego:
        if (!(!is_array($uyuaosigqymaqsaa) || is_wp_error($uyuaosigqymaqsaa))) {
            goto cyamaucweckqmscc;
        }
        goto yucmskwuguqgqimc;
        ousiqsmccumayaes:
    }
    
    public static function ekauksssqmmykouq($post = null, $wwgucssaecqekuek = [])
    {
        goto mgywqmgswkeyucaq;
        mgywqmgswkeyucaq:
        $qscaoekmoooeuyqg = self::qkweigiqsaaigqau($post);
        goto mqkwmkuieegmucmg;
        ugaowwakggeccsic:
        $wwgucssaecqekuek["\x68\x72\145\146"] = $qscaoekmoooeuyqg;
        goto agauowggkqsoyqiq;
        iycimwiaauksigiw:
        return $qscaoekmoooeuyqg;
        goto cccgemwsykwgemeg;
        agauowggkqsoyqiq:
        $ymqmyyeuycgmigyo = DecoratorAuthor::igawqaomowicuayw("\x64\151\x73\x70\154\x61\x79\x5f\x6e\x61\x6d\145", self::mguqscccckuywsya($post));
        goto okyuswywywsaeias;
        okyuswywywsaeias:
        $qscaoekmoooeuyqg = ManipulateHTML::uuccukgasskgimsq("\x61", $wwgucssaecqekuek, $ymqmyyeuycgmigyo);
        goto aeaqgqqqowqykgcc;
        aeaqgqqqowqykgcc:
        smsymmwykgkakeqk:
        goto iycimwiaauksigiw;
        mqkwmkuieegmucmg:
        if (!$qscaoekmoooeuyqg) {
            goto smsymmwykgkakeqk;
        }
        goto ugaowwakggeccsic;
        cccgemwsykwgemeg:
    }
    
    public static function gueasuouwqysmomu($post = null, $awqscowmskeuymeu = false)
    {
        goto mwuisiuasugcaywu;
        gaqccucuqyssqkmy:
        oieoyiowucgkouoq:
        goto gioogyikawiiiyqq;
        asckqiuugiguuiwe:
        if (!is_numeric($post)) {
            goto cyomqwmieugiasem;
        }
        goto wcuuyecsiamsaqqy;
        woquimckgiecokuo:
        return $useksmwkuswkwcqg;
        goto gggayasokuomgeus;
        iimwiesgggauwcqk:
        cyomqwmieugiasem:
        goto gomiiockquaqsyuo;
        ciqqeouuygcaiiiq:
        $useksmwkuswkwcqg = ManipulateArray::get($post, "\160\x6f\x73\x74\137\x74\171\160\x65");
        goto qgyqamakooyqciyo;
        seggcuqcuiaegeya:
        $useksmwkuswkwcqg = self::waaisqccqacqeium($useksmwkuswkwcqg);
        goto ucouymumcuosygii;
        gomiiockquaqsyuo:
        if (!(is_array($post) || $post instanceof WP_Post)) {
            goto yuycmoyawueickya;
        }
        goto ciqqeouuygcaiiiq;
        ucouymumcuosygii:
        aiaiswgwmcguoues:
        goto woquimckgiecokuo;
        qgyqamakooyqciyo:
        yuycmoyawueickya:
        goto wioicqyeyqmsckwg;
        wioicqyeyqmsckwg:
        if ($useksmwkuswkwcqg) {
            goto oieoyiowucgkouoq;
        }
        goto iiysucwqgweammss;
        gioogyikawiiiyqq:
        if (!$awqscowmskeuymeu) {
            goto aiaiswgwmcguoues;
        }
        goto seggcuqcuiaegeya;
        mwuisiuasugcaywu:
        $useksmwkuswkwcqg = get_post_type();
        goto asckqiuugiguuiwe;
        wcuuyecsiamsaqqy:
        $post = self::get($post);
        goto iimwiesgggauwcqk;
        iiysucwqgweammss:
        $useksmwkuswkwcqg = ManipulateServer::get("\160\x6f\x73\x74\x5f\164\x79\160\x65");
        goto gaqccucuqyssqkmy;
        gggayasokuomgeus:
    }
    
    public static function gamoemyysmgugccu($post = null, $iueymcwwscwqkiyq = "\x61\x6c\154")
    {
        return self::ymgsgecsiqeegseg($post, $iueymcwwscwqkiyq) > 0;
    }
    
    public static function wsqeykgqiemswysa($sqeykgyoooqysmca, $iueymcwwscwqkiyq = "\160\165\x62\154\x69\163\150", $yiyimoacecwoqeko = '')
    {
        return ManipulateArray::get(wp_count_posts($sqeykgyoooqysmca, $yiyimoacecwoqeko), $iueymcwwscwqkiyq);
    }
    
    public static function igkcwemyysqkwuuy($meqocwsecsywiiqs, $useksmwkuswkwcqg, $ywmkwiwkosakssii = [])
    {
        goto gsoskqieucsesaks;
        emkqygwcsiyiykiw:
        $ywmkwiwkosakssii["\x73"] = $meqocwsecsywiiqs;
        goto yeuqcwawkauowkgu;
        cigaaqeauwccoiqa:
        return $wyoiwuqokyeeuguk;
        goto qwkoeagysgskmuyq;
        akuskaiiaswmksko:
        DecoratorHook::cecaguuoecmccuse("\160\x6f\x73\x74\163\137\163\x65\x61\162\x63\x68", [__CLASS__, "\151\165\141\x61\143\167\x77\x79\x67\x6b\155\x63\x6f\145\x69\171"], 10, 2);
        goto wmsigkymceakwywo;
        guoyescsqcuuymku:
        if (!(strlen($meqocwsecsywiiqs) > 1)) {
            goto cqmkeyweesgwycgy;
        }
        goto emkqygwcsiyiykiw;
        gsoskqieucsesaks:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x6f\162\x64\145\x72" => "\x41\123\103", "\x70\157\163\164\x73\137\x70\x65\162\137\x70\141\147\x65" => 10]);
        goto guoyescsqcuuymku;
        equokkeomguewmua:
        DecoratorHook::ggmgmqswqkgecosg("\160\x6f\x73\x74\x73\137\x73\145\x61\162\143\x68", [__CLASS__, "\151\x75\141\x61\x63\x77\167\x79\147\153\155\x63\x6f\x65\151\x79"], 10);
        goto cigaaqeauwccoiqa;
        euuaeuyegkksasge:
        cqmkeyweesgwycgy:
        goto akuskaiiaswmksko;
        yeuqcwawkauowkgu:
        $ywmkwiwkosakssii["\163\165\x70\160\x72\145\163\x73\137\x66\151\154\x74\145\x72\x73"] = false;
        goto euuaeuyegkksasge;
        wmsigkymceakwywo:
        $wyoiwuqokyeeuguk = self::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii);
        goto equokkeomguewmua;
        qwkoeagysgskmuyq:
    }
    
    public static function ygwimyogyaqgumam($aiowsaccomcoikus, $post = null, $mgkceomocowocqyo = [])
    {
        return DecoratorPost::ygwimyogyaqgumam($aiowsaccomcoikus, self::mwikyscisascoeea($post), $mgkceomocowocqyo);
    }
    
    public static function kckogqkiycqeumoa($post, $kesssewsiegssiya, $qqgsimqiqyaugceg = true)
    {
        goto koiimcuoyakqsuam;
        sycecywsiomgcuiq:
        gacasmwcscckymwc:
        goto yaswwoqemsqmawse;
        yaswwoqemsqmawse:
        return $uyuaosigqymaqsaa;
        goto icwuocgiukckmyyu;
        koiimcuoyakqsuam:
        $uyuaosigqymaqsaa = self::weescwwgqgiyumyw($post, $kesssewsiegssiya);
        goto eskmkqowoyogaoko;
        hwiqmsqyyiscmeiu:
        goto gacasmwcscckymwc;
        goto iwmassqyauymkwaa;
        xocaameouysockim:
        mekmscssquqsgquc:
        goto sycecywsiomgcuiq;
        keygywkiwuoagqsw:
        $uyuaosigqymaqsaa = null;
        goto hwiqmsqyyiscmeiu;
        iccqsmwsmisaayam:
        if (!$qqgsimqiqyaugceg) {
            goto mekmscssquqsgquc;
        }
        goto sqecccyugmaiuwsq;
        sqecccyugmaiuwsq:
        $uyuaosigqymaqsaa = isset($uyuaosigqymaqsaa[0]) ? $uyuaosigqymaqsaa[0] : null;
        goto xocaameouysockim;
        eskmkqowoyogaoko:
        if (is_array($uyuaosigqymaqsaa)) {
            goto seqwmeeoiicciigo;
        }
        goto keygywkiwuoagqsw;
        iwmassqyauymkwaa:
        seqwmeeoiicciigo:
        goto iccqsmwsmisaayam;
        icwuocgiukckmyyu:
    }
    
    public static function smqukgcyacswysqa($uusmaiomayssaecw = '', $post = null, $eqgoocgaqwqcimie = '')
    {
        return DecoratorPost::smqukgcyacswysqa($post, $uusmaiomayssaecw, $eqgoocgaqwqcimie);
    }
    
    public static function masoymaamekuykso($post = null, $gioggcykgoikcwiy = false) : ?string
    {
        goto aeesuccguagwomqw;
        weyumyqgceqsimmq:
        cioomiusgwycykag:
        goto mkiyekcyyukamwck;
        mkiyekcyyukamwck:
        return $iayakwckycsumkqa;
        goto guwikcacqsmwkyya;
        aeesuccguagwomqw:
        $post = self::get($post);
        goto ogisaykaiaeuiika;
        ogisaykaiaeuiika:
        $iayakwckycsumkqa = null;
        goto vseyiyomcwkayoio;
        vseyiyomcwkayoio:
        if (!(!$gioggcykgoikcwiy || DecoratorPost::seewsasmyoyciiee($post))) {
            goto cioomiusgwycykag;
        }
        goto kwgwkkkaagkkesik;
        kwgwkkkaagkkesik:
        $iayakwckycsumkqa = DecoratorPost::masoymaamekuykso($post);
        goto weyumyqgceqsimmq;
        guwikcacqsmwkyya:
    }
    
    public static function cagmcswsqkwuasiy($sciomagaqmgggsiu = self::DEFAULT_POST_TYPES)
    {
        goto seousiqwmmcaygac;
        ueeowwusmsueouao:
        if (!(is_array($sciomagaqmgggsiu) && in_array($useksmwkuswkwcqg, $sciomagaqmgggsiu) || is_string($useksmwkuswkwcqg) && $useksmwkuswkwcqg == $sciomagaqmgggsiu)) {
            goto ueiqomqieicasmsi;
        }
        goto uuauuoykcoseecuu;
        seousiqwmmcaygac:
        global $pagenow;
        goto ukqomyqaykkiygwu;
        oeqsgusqqgoioqwu:
        return $sogksuscggsicmac;
        goto bgsaeeicmsikiwgm;
        cqoeiqeeukaiioia:
        if (!($pagenow == "\145\144\x69\x74\56\x70\x68\160" && is_admin())) {
            goto domskgkmquiwwqcg;
        }
        goto qqecycksisecgwiw;
        qqecycksisecgwiw:
        $useksmwkuswkwcqg = self::gueasuouwqysmomu();
        goto ueeowwusmsueouao;
        okwgeicyaawqyoye:
        ueiqomqieicasmsi:
        goto wgcewuoaksusicyi;
        uuauuoykcoseecuu:
        $sogksuscggsicmac = true;
        goto okwgeicyaawqyoye;
        ukqomyqaykkiygwu:
        $sogksuscggsicmac = false;
        goto cqoeiqeeukaiioia;
        wgcewuoaksusicyi:
        domskgkmquiwwqcg:
        goto oeqsgusqqgoioqwu;
        bgsaeeicmsikiwgm:
    }
    
    public static function ymgsgecsiqeegseg($post = null, $iueymcwwscwqkiyq = "\141\x70\160\x72\x6f\166\x65\144")
    {
        $egkygecqiowwuuuu = DecoratorPost::ymgsgecsiqeegseg(self::mwikyscisascoeea($post));
        return ManipulateArray::get($egkygecqiowwuuuu, $iueymcwwscwqkiyq, 0);
    }
    
    public static function giwmekimakcaawsq($uusmaiomayssaecw, $eqgoocgaqwqcimie, $post = null, $omasqoksqewuwwkq = false)
    {
        return DecoratorPost::giwmekimakcaawsq(self::mwikyscisascoeea($post), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $omasqoksqewuwwkq);
    }
    
    public static function igawqaomowicuayw($uusmaiomayssaecw = '', $post = null, bool $cuyooiakswegosog = true)
    {
        return DecoratorPost::igawqaomowicuayw(self::mwikyscisascoeea($post), $uusmaiomayssaecw, $cuyooiakswegosog);
    }
    
    public static function souwykwwmyygqyqi($post = null, $egkeamycaysqsoma = true) : ?string
    {
        goto qmsmcsoqgumsigme;
        gqcsicosskykmgiu:
        $ewgwqamkygiqaawc = DecoratorPost::souwykwwmyygqyqi($post);
        goto yagoqwkegiyqceoe;
        kaaweieegskiqqgm:
        if ($egkeamycaysqsoma) {
            goto ssqieyoogiwsyksk;
        }
        goto kgkweawaqmqomkuc;
        skuwwwayeyemggoe:
        wmwkgawmkmciaeoi:
        goto ieywgqsawwkgiamc;
        oywouymwcigkauye:
        siceqsgwyswyguog:
        goto iaekkeskykqsyiim;
        uucqywaoqssqggug:
        $ewgwqamkygiqaawc = '';
        goto kaaweieegskiqqgm;
        iaekkeskykqsyiim:
        $ewgwqamkygiqaawc = ManipulateArray::get($post, "\x70\x6f\x73\x74\137\143\x6f\x6e\x74\x65\x6e\x74");
        goto skuwwwayeyemggoe;
        ieywgqsawwkgiamc:
        return $ewgwqamkygiqaawc;
        goto ygiwsaegqoeaocqi;
        yagoqwkegiyqceoe:
        goto wmwkgawmkmciaeoi;
        goto oywouymwcigkauye;
        mamieseosscguoye:
        ssqieyoogiwsyksk:
        goto gqcsicosskykmgiu;
        kgkweawaqmqomkuc:
        if ($post) {
            goto siceqsgwyswyguog;
        }
        goto igegouiwyasqgwwc;
        qmsmcsoqgumsigme:
        $post = self::get($post);
        goto uucqywaoqssqggug;
        igegouiwyasqgwwc:
        goto wmwkgawmkmciaeoi;
        goto mamieseosscguoye;
        ygiwsaegqoeaocqi:
    }
    
    public static function ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $post = null, $oyuqkqayqyqysyse = '')
    {
        return DecoratorPost::ksmqawcowkmegigw(self::mwikyscisascoeea($post), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $oyuqkqayqyqysyse);
    }
    
    public static function mmoaikqueyiwcesm($post, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii["\160\x6f\x73\x74\x5f\x70\x61\162\145\x6e\164"] = self::mwikyscisascoeea($post);
        return self::ciugwooasaqcywas(DecoratorPost::gueasuouwqysmomu($post), $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
    
    public static function qmmimiesyoyuqeqo($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        goto yysqwceyageaeieo;
        ceoicyukguaouuwa:
        return $eyagosskwwmgwmog;
        goto ygeaissawcacmmyu;
        eyimaakssauckmgk:
        wwkeoqicoeqmsuui:
        goto ceoicyukguaouuwa;
        umuwmuiugqisoyek:
        foreach ($eyagosskwwmgwmog as $omwmuycmeqcqokom) {
            $omwmuycmeqcqokom->children = self::mmoaikqueyiwcesm($omwmuycmeqcqokom, $ywmkwiwkosakssii);
            iswuimkowigsiwmi:
        }
        goto eyimaakssauckmgk;
        yysqwceyageaeieo:
        $eyagosskwwmgwmog = self::uswuayuaaosoksqg($useksmwkuswkwcqg, $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
        goto umuwmuiugqisoyek;
        ygeaissawcacmmyu:
    }
    
    public static function ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        goto qaewuekauiwkuwoa;
        makigymuacqucieo:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg);
        goto yygauekecaiessss;
        uiyuycigkskokcco:
        ymgyewqwqmcukmyu:
        goto suqyiooacuiiqcuk;
        iqiwskswayisages:
        goto eoqgquwgcgkugouq;
        goto iqkgeamgsuwqkckg;
        suqyiooacuiiqcuk:
        eoqgquwgcgkugouq:
        goto iygakaaakekgyeqy;
        wayoumqqasqeowsk:
        if ($aqykuigiuwmmcieu == self::LABELS) {
            goto eoiysyeyuwwugsee;
        }
        goto syauycikyosiscgs;
        faiesskquaeiqqom:
        $wyoiwuqokyeeuguk = DecoratorPost::ciugwooasaqcywas($ywmkwiwkosakssii);
        goto wayoumqqasqeowsk;
        syauycikyosiscgs:
        $sogksuscggsicmac = $wyoiwuqokyeeuguk;
        goto iqiwskswayisages;
        iygakaaakekgyeqy:
        return $sogksuscggsicmac;
        goto ewqwyuuyegqukcmw;
        qaewuekauiwkuwoa:
        $sogksuscggsicmac = [];
        goto qgumkmmmeaoskamq;
        iqkgeamgsuwqkckg:
        eoiysyeyuwwugsee:
        goto wgiakoeckyswemak;
        qgumkmmmeaoskamq:
        $ycmguuqqaiisymgg = [self::POST_TYPE => $useksmwkuswkwcqg, self::POSTS_PER_PAGE => -1];
        goto makigymuacqucieo;
        wgiakoeckyswemak:
        foreach ($wyoiwuqokyeeuguk as $uusmaiomayssaecw => $post) {
            goto ukmmkgmcooowqksi;
            iocmmwiqausgmkcu:
            wecuakwyikeqwyac:
            goto usuwmkwcsukckuee;
            ukmmkgmcooowqksi:
            $meqocwsecsywiiqs = get_the_title($post);
            goto sisumqgocskwyago;
            sisumqgocskwyago:
            if (!$meqocwsecsywiiqs) {
                goto wecuakwyikeqwyac;
            }
            goto miyyiuaokyesyygy;
            usuwmkwcsukckuee:
            wmgqacaeeuokysey:
            goto ewmmuusmqgceimky;
            miyyiuaokyesyygy:
            $sogksuscggsicmac[self::mwikyscisascoeea($post)] = $meqocwsecsywiiqs;
            goto iocmmwiqausgmkcu;
            ewmmuusmqgceimky:
        }
        goto uiyuycigkskokcco;
        yygauekecaiessss:
        $ywmkwiwkosakssii = DecoratorHook::sscegwueamckwmcy("\147\x65\x74\x5f\160\157\x73\164\163\x5f\x61\162\147\x73", $ywmkwiwkosakssii);
        goto faiesskquaeiqqom;
        ewqwyuuyegqukcmw:
    }
    
    public static function uamasysiccecccmw($oiegiwogmwmawkeo = "\160\x6f\163\164\x2d\x74\x68\165\155\142\x6e\141\151\154", $post = null)
    {
        $eeamcawaiqocomwy = DecoratorPost::uamasysiccecccmw(self::mwikyscisascoeea($post), $oiegiwogmwmawkeo);
        return (string) DecoratorHook::sscegwueamckwmcy("\160\157\163\x74\137\164\x68\165\155\142\x6e\141\151\x6c\137\x75\162\154", $eeamcawaiqocomwy, $post, $oiegiwogmwmawkeo);
    }
    
    public static function ymuqsscwmcumcama($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::POST_TYPE => $useksmwkuswkwcqg, "\x70\157\163\164\x5f\x73\164\x61\x74\x75\163" => "\160\x75\142\154\151\163\150"]);
        return DecoratorPost::ymuqsscwmcumcama($ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
    
    public static function squyiyimquqicqke($saqmwwmqiwmkiwaa = null, $post = null, $egkeamycaysqsoma = true)
    {
        goto mumcqcssasmyqmca;
        ggwgiusgggqqckqw:
        $saqmwwmqiwmkiwaa = ManipulateSetting::uyomwmskouyyqyyq();
        goto ioecigquiawyecis;
        iiugkqmswuikwcuo:
        $ocogsiouoiuuguym = null;
        goto sweyywawiwkgsqkw;
        mumcqcssasmyqmca:
        $post = self::get($post);
        goto iiugkqmswuikwcuo;
        sckagcuweuycciog:
        yaioeuewuagwmaym:
        goto yimcyeuemqyssysu;
        yimcyeuemqyssysu:
        giuwumskimssakwo:
        goto towiyceuykgmeooc;
        ioecigquiawyecis:
        suuocycsksmcsqsm:
        goto aikomgoeseyekwqa;
        aocacgkcisiuosug:
        if (!$egkeamycaysqsoma) {
            goto yaioeuewuagwmaym;
        }
        goto csmwsuakqgukaqkm;
        aikomgoeseyekwqa:
        $ocogsiouoiuuguym = DecoratorPost::kugamkssceycoyaq($saqmwwmqiwmkiwaa, false, $post);
        goto aocacgkcisiuosug;
        csmwsuakqgukaqkm:
        $ocogsiouoiuuguym = DecoratorHook::sscegwueamckwmcy("\147\145\x74\x5f\x74\150\145\137\144\141\164\x65", $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $post);
        goto sckagcuweuycciog;
        wycsycuaymkqqgce:
        if ($saqmwwmqiwmkiwaa) {
            goto suuocycsksmcsqsm;
        }
        goto ggwgiusgggqqckqw;
        sweyywawiwkgsqkw:
        if (!$post) {
            goto giuwumskimssakwo;
        }
        goto wycsycuaymkqqgce;
        towiyceuykgmeooc:
        return $ocogsiouoiuuguym;
        goto ciusceaiyqsgwesy;
        ciusceaiyqsgwesy:
    }
    
    public static function get($post = null, $aqykuigiuwmmcieu = self::OBJECT, $cwwowqyuwccuykom = false)
    {
        goto cgmkwykqsuikugio;
        ogoigckgkacomgsw:
        return $post;
        goto aqqaecewqeqyecge;
        quwawmyimwumqiik:
        if (!$post && $cwwowqyuwccuykom) {
            goto kqgkgyyskmmomkuy;
        }
        goto aoasseeyymigiuqg;
        ieiwqquomwgcgasg:
        agmoeimoggkkmamk:
        goto kemyesuyqgygsgmc;
        gasqiqwuuokswuak:
        $post = ManipulateServer::get(self::POST);
        goto ieiwqquomwgcgasg;
        yuaeosigaqocaswy:
        goto mkmcaqquqsycicwk;
        goto agwwockuoekeayoe;
        kemyesuyqgygsgmc:
        $post = DecoratorPost::get($post, $aqykuigiuwmmcieu);
        goto yuaeosigaqocaswy;
        aoasseeyymigiuqg:
        if ($post) {
            goto agmoeimoggkkmamk;
        }
        goto gasqiqwuuokswuak;
        cgmkwykqsuikugio:
        if ($post instanceof WP_Post) {
            goto iyeukmoycqcoeoww;
        }
        goto quwawmyimwumqiik;
        agwwockuoekeayoe:
        kqgkgyyskmmomkuy:
        goto qqcagaaisccuygwq;
        qqcagaaisccuygwq:
        $post = null;
        goto maimcygiikgukege;
        maimcygiikgukege:
        mkmcaqquqsycicwk:
        goto cecqqywgssugeikg;
        cecqqywgssugeikg:
        iyeukmoycqcoeoww:
        goto ogoigckgkacomgsw;
        aqqaecewqeqyecge:
    }
    
    public static function eqgwuukcqqayesqa($oysoyeaucuawyaky = [], $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::POST__IN => $oysoyeaucuawyaky, self::ORDERBY => self::POST__IN]);
        return self::ciugwooasaqcywas(self::mwoyqeeigwqoamiw(), $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
    
    public static function ycqquoiyyuesegsy($ccamueccusigaaio = null, $cwwowqyuwccuykom = false, $eoocgqsqmwuegiae = false)
    {
        goto eaesqqacyqsmmasw;
        cucceeyaayakweic:
        return trailingslashit($migiiksoiymissge);
        goto oqigaksscaygqcyg;
        asecysweauowukym:
        pgkmykoemkssyciw:
        goto igawggssmuyywoiw;
        uikosuscmyagkucg:
        ogcucyqcaawqsikk:
        goto cucceeyaayakweic;
        eaesqqacyqsmmasw:
        $post = self::mwikyscisascoeea($ccamueccusigaaio, $cwwowqyuwccuykom);
        goto aceokuucoumoawei;
        aceokuucoumoawei:
        $migiiksoiymissge = '';
        goto ioaiogagwmswaiyu;
        igawggssmuyywoiw:
        $migiiksoiymissge = DecoratorPost::ycqquoiyyuesegsy($post, $eoocgqsqmwuegiae);
        goto omsmasoumqusgusq;
        ckamssoyigceqkqe:
        if (is_string($ccamueccusigaaio) && ManipulateValidation::wmcwegoisyeeosqu($ccamueccusigaaio)) {
            goto ycyukikioeesmosk;
        }
        goto oigskyaeyywyscoi;
        oigskyaeyywyscoi:
        goto ogcucyqcaawqsikk;
        goto asecysweauowukym;
        kyycgosayogwiose:
        $migiiksoiymissge = $ccamueccusigaaio;
        goto uikosuscmyagkucg;
        ioaiogagwmswaiyu:
        if ($post) {
            goto pgkmykoemkssyciw;
        }
        goto ckamssoyigceqkqe;
        omsmasoumqusgusq:
        goto ogcucyqcaawqsikk;
        goto keoqugaesaeocwky;
        keoqugaesaeocwky:
        ycyukikioeesmosk:
        goto kyycgosayogwiose;
        oqigaksscaygqcyg:
    }
    
    public static function uswuayuaaosoksqg($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii["\160\157\x73\x74\137\x70\x61\162\x65\x6e\x74"] = 0;
        return self::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
    
    public static function oukqamgqowciwoum($saqmwwmqiwmkiwaa = null, $post = null, $egkeamycaysqsoma = true)
    {
        goto imkcoqicusaaieiq;
        gwciqqammeugmyic:
        if ($saqmwwmqiwmkiwaa) {
            goto sgsowgqykyceieqs;
        }
        goto koywwayicykawmsw;
        eiugaasyaiggaoem:
        $ocogsiouoiuuguym = null;
        goto oigewwwkwggioeom;
        ikiqwwyuwiqkgoqq:
        if (!$egkeamycaysqsoma) {
            goto uawiiskiyascymig;
        }
        goto qqyeoguyyawwacyi;
        moaekmimicakwisg:
        return $ocogsiouoiuuguym;
        goto ouwsgqaiqguiomym;
        oigewwwkwggioeom:
        if (!$post) {
            goto mwgogaswksgaiggw;
        }
        goto gwciqqammeugmyic;
        imkcoqicusaaieiq:
        $post = self::get($post);
        goto eiugaasyaiggaoem;
        iewuoiiumywkmwwi:
        sgsowgqykyceieqs:
        goto yiooaygkcosiouiq;
        qqyeoguyyawwacyi:
        $ocogsiouoiuuguym = DecoratorHook::sscegwueamckwmcy("\x67\x65\x74\x5f\x74\x68\x65\x5f\155\157\144\151\146\x69\x65\x64\137\x64\x61\x74\x65", $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $post);
        goto waqguwsseiamucog;
        igcogeumkiyaiekm:
        mwgogaswksgaiggw:
        goto moaekmimicakwisg;
        yiooaygkcosiouiq:
        $ocogsiouoiuuguym = DecoratorPost::kkkiiqssauymiqsk($saqmwwmqiwmkiwaa, false, $post);
        goto ikiqwwyuwiqkgoqq;
        waqguwsseiamucog:
        uawiiskiyascymig:
        goto igcogeumkiyaiekm;
        koywwayicykawmsw:
        $saqmwwmqiwmkiwaa = ManipulateSetting::uyomwmskouyyqyyq();
        goto iewuoiiumywkmwwi;
        ouwsgqaiqguiomym:
    }
    
    public static function uqwgsuysegkweago($sciomagaqmgggsiu = self::DEFAULT_POST_TYPES, $ccamueccusigaaio = "\x62\157\164\x68")
    {
        goto usukgagsmcsgayiq;
        woysagioiaegygiw:
        wkgossscggiwwgqi:
        goto uciwcwkusqqwicyi;
        usukgagsmcsgayiq:
        $sogksuscggsicmac = false;
        goto mwqksegiysmkmase;
        asayowukiisowcoo:
        switch ($ccamueccusigaaio) {
            case "\145\x64\151\164":
                $sogksuscggsicmac = in_array($pagenow, ["\x70\x6f\x73\x74\56\x70\150\160"]);
                goto cwukciqgyiykkmme;
            case "\x6e\145\167":
                $sogksuscggsicmac = in_array($pagenow, ["\x70\x6f\163\x74\55\x6e\145\x77\56\x70\x68\160"]);
                goto cwukciqgyiykkmme;
            default:
                $sogksuscggsicmac = in_array($pagenow, ["\160\x6f\x73\x74\x2e\x70\x68\160", "\160\157\163\164\55\156\x65\167\56\160\x68\160"]);
        }
        goto woysagioiaegygiw;
        euuweiukuiuwcuym:
        $sciomagaqmgggsiu = ManipulatePost::mwoyqeeigwqoamiw();
        goto imscuiceoqcqeuec;
        qaaeckkicouagsiq:
        if (!(is_admin() && $sciomagaqmgggsiu)) {
            goto oogauyisucksqwgq;
        }
        goto wiwcgyekioquskkg;
        smaemsgsuyckcasg:
        return $sogksuscggsicmac;
        goto sgguweyyyiqmkakc;
        wsokcmgygywqyuki:
        oogauyisucksqwgq:
        goto smaemsgsuyckcasg;
        uciwcwkusqqwicyi:
        cwukciqgyiykkmme:
        goto qycyyqyaseuqsoss;
        qeiygiiuygamegkq:
        $useksmwkuswkwcqg = self::cwucesiiikgqsgui();
        goto kwyosousqcwgcaqq;
        mwqksegiysmkmase:
        if ($sciomagaqmgggsiu) {
            goto cmgkyyywsqscoeia;
        }
        goto euuweiukuiuwcuym;
        qycyyqyaseuqsoss:
        ucwqokwamqeiyauo:
        goto wsokcmgygywqyuki;
        wiwcgyekioquskkg:
        global $pagenow;
        goto qeiygiiuygamegkq;
        imscuiceoqcqeuec:
        cmgkyyywsqscoeia:
        goto qaaeckkicouagsiq;
        kwyosousqcwgcaqq:
        if (!(is_array($sciomagaqmgggsiu) && in_array($useksmwkuswkwcqg, $sciomagaqmgggsiu) || $useksmwkuswkwcqg === $sciomagaqmgggsiu)) {
            goto ucwqokwamqeiyauo;
        }
        goto asayowukiisowcoo;
        sgguweyyyiqmkakc:
    }
    
    public static function qgisekcaywsmigga(string $useksmwkuswkwcqg, string $gwiwsycaaqgwmewg, $aucgaecqisksougg = null, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc(["\x6d\x65\164\141\137\153\x65\x79" => $gwiwsycaaqgwmewg, "\x6d\x65\164\141\x5f\166\x61\x6c\165\145" => $aucgaecqisksougg, "\160\x6f\163\164\137\163\164\141\164\165\163" => "\141\156\171"], $ywmkwiwkosakssii);
        return self::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
}
