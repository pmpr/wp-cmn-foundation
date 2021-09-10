<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        goto imgcoqgqsgmwussc;
        skgmwkqigcucecks:
        if ($current_screen) {
            goto yemeacuywsiqecgm;
        }
        goto qaugoawikwesmkqo;
        owcyysasyeaaowwk:
        if ($sqeykgyoooqysmca) {
            goto eegacceeuuycmssm;
        }
        goto eiqwmksumaugsiue;
        qkccmuekscemyiqi:
        if (!(!$sqeykgyoooqysmca && $post)) {
            goto saaqoyeqicykmmuu;
        }
        goto maaqgkcmqkcguscg;
        maaqgkcmqkcguscg:
        $sqeykgyoooqysmca = self::gueasuouwqysmomu($post);
        goto mwkyqwwyuoquwycw;
        ksewmguscaqkiiso:
        $post = ManipulateServer::ayueggmoqeeukqmq(self::POST);
        goto qkccmuekscemyiqi;
        gokeooqgmyisigwu:
        yswsuyqqsygkqcgi:
        goto kiaeuogcagqymoia;
        okwcqgkysyueokie:
        if ($typenow) {
            goto cwaaqwgckkmmuayw;
        }
        goto skgmwkqigcucecks;
        kmgmsagugycgguso:
        yemeacuywsiqecgm:
        goto qoukygmscqwwmeci;
        mwkyqwwyuoquwycw:
        saaqoyeqicykmmuu:
        goto cagckkqacmeaemik;
        kiaeuogcagqymoia:
        return $sqeykgyoooqysmca;
        goto ekieuqyaekgaekem;
        qaugoawikwesmkqo:
        goto ooweqiekgaaqweig;
        goto swekqcymmemsckim;
        imgcoqgqsgmwussc:
        $sqeykgyoooqysmca = ManipulateArray::get(self::get(), self::POST_TYPE);
        goto ayocomqsygokygku;
        eiqwmksumaugsiue:
        $sqeykgyoooqysmca = ManipulateServer::ayueggmoqeeukqmq(self::POST_TYPE);
        goto ksewmguscaqkiiso;
        cyweqwceuyeuqwiq:
        global $typenow, $current_screen;
        goto okwcqgkysyueokie;
        ayocomqsygokygku:
        if ($sqeykgyoooqysmca) {
            goto yswsuyqqsygkqcgi;
        }
        goto cyweqwceuyeuqwiq;
        cyoqykquycmuksqu:
        ooweqiekgaaqweig:
        goto owcyysasyeaaowwk;
        ccyskouwcaewmmuq:
        goto ooweqiekgaaqweig;
        goto kmgmsagugycgguso;
        cagckkqacmeaemik:
        eegacceeuuycmssm:
        goto gokeooqgmyisigwu;
        mgsqaweekeiqgcys:
        $sqeykgyoooqysmca = $typenow;
        goto ccyskouwcaewmmuq;
        qoukygmscqwwmeci:
        $sqeykgyoooqysmca = ManipulateArray::get($current_screen, self::POST_TYPE);
        goto cyoqykquycmuksqu;
        swekqcymmemsckim:
        cwaaqwgckkmmuayw:
        goto mgsqaweekeiqgcys;
        ekieuqyaekgaekem:
    }
    
    public static function ygqycmmkoiuocoia($post)
    {
        return ManipulateArray::get(self::get($post), "\x70\157\x73\x74\137\x70\x61\x72\x65\x6e\164");
    }
    
    public static function ekwkywuguceaogsk()
    {
        goto yuqyccgsmegiicoc;
        ousuggsuweyeqyuo:
        goto gyakkgyocuygkkwi;
        goto kmeqemccwyaskwqk;
        yaggoqgeaucmkmsi:
        if (!have_posts()) {
            goto uycmykimwqoyykmo;
        }
        goto weuicwuusquqioeo;
        scmqkqwakowggkmu:
        gyakkgyocuygkkwi:
        goto yaggoqgeaucmkmsi;
        mswiyiyqqqqqmccc:
        $wyoiwuqokyeeuguk[] = self::get();
        goto ousuggsuweyeqyuo;
        ymmkmyqiigmskumu:
        return $wyoiwuqokyeeuguk;
        goto cumcsgcamqomeygk;
        weuicwuusquqioeo:
        the_post();
        goto mswiyiyqqqqqmccc;
        akeeousiaemumwqy:
        sgiswsoiyoowcqsw:
        goto ymmkmyqiigmskumu;
        kmeqemccwyaskwqk:
        uycmykimwqoyykmo:
        goto akeeousiaemumwqy;
        igommeoookeycwmc:
        if (!have_posts()) {
            goto sgiswsoiyoowcqsw;
        }
        goto scmqkqwakowggkmu;
        yuqyccgsmegiicoc:
        $wyoiwuqokyeeuguk = [];
        goto igommeoookeycwmc;
        cumcsgcamqomeygk:
    }
    
    public static function cuoieqacocyyookg($post)
    {
        $emeuskyoeemoywwi = self::wgocauqiyqkmkyki($post);
        return floor($emeuskyoeemoywwi / 200);
    }
    
    public static function wgocauqiyqkmkyki($post)
    {
        goto kikyqwgykkiskoik;
        kusaguaukqyawgck:
        $ewgwqamkygiqaawc = self::souwykwwmyygqyqi($post);
        goto iwuiyecakwogaqos;
        oekkqiisaauoowkm:
        
        
        $emeuskyoeemoywwi = preg_split("\x2f\133\xa\15\x9\x20\135\53\57", $ewgwqamkygiqaawc, 0, PREG_SPLIT_NO_EMPTY);
        goto iuqesqwcmseaoouo;
        iuqesqwcmseaoouo:
        
        return count($emeuskyoeemoywwi);
        goto gyqeokswmeikygki;
        kikyqwgykkiskoik:
        $post = self::get($post);
        goto kusaguaukqyawgck;
        iwuiyecakwogaqos:
        
        $ewgwqamkygiqaawc = preg_replace("\x2f\x5b\x5b\x3a\x70\x75\156\143\164\x3a\135\x5b\72\x64\x69\x67\x69\x74\x3a\135\x5d\x2f", '', $ewgwqamkygiqaawc);
        goto eceyessoaayaagci;
        eceyessoaayaagci:
        
        $ewgwqamkygiqaawc = preg_replace("\57\x5b\x5b\72\x73\x70\x61\x63\145\x3a\x5d\x5d\57", "\40", $ewgwqamkygiqaawc);
        goto oekkqiisaauoowkm;
        gyqeokswmeikygki:
    }
    
    public static function mwoyqeeigwqoamiw($ywmkwiwkosakssii = [])
    {
        goto yskwigcmaicqamqy;
        kwsusuqioqiaokmk:
        goto qsocqumaigsayksm;
        goto mwsmaceeuacaoeas;
        wccuioiewmeamewo:
        mcyiwawwcsquwiqq:
        goto ucwuomcmcoqmyqwm;
        kwqoqgccuqgigkoc:
        ugkgqeugmkumauos:
        goto ikuuqaoiwigcmwyu;
        wuucmmcggqqsmakc:
        if (in_array($sogksuscggsicmac, [self::OBJECT, self::LABELS, self::SLUGS])) {
            goto cqycwggykmmyacuk;
        }
        goto eemuaaqoyiqiyyoe;
        acmoiyiogowkkesw:
        esggoysyykycecyq:
        goto ocsyqkkqkwekgakm;
        ikuuqaoiwigcmwyu:
        return $ksaameoqigiaoigg;
        goto amaoecqeywkkmyoi;
        iomigqssyeeaqgsg:
        goto esggoysyykycecyq;
        goto ogekauwggisguwkq;
        aeamameocikekces:
        if ($yemgmmgogcwccuky) {
            goto akkuiemqaogigaqa;
        }
        goto suqaqoaowamkiymi;
        ocsyqkkqkwekgakm:
        $ksaameoqigiaoigg = [];
        goto wuucmmcggqqsmakc;
        uwyuiwkkeuwsykys:
        $oammesyieqmwuwyi = array_diff_key($oammesyieqmwuwyi, array_flip($yemgmmgogcwccuky));
        goto acmoiyiogowkkesw;
        gmwqisoikakuqicc:
        goto ugkgqeugmkumauos;
        goto oouaueaaciqmoaek;
        kcaciomiguuugugi:
        csciwewamgcguguc:
        goto kwqoqgccuqgigkoc;
        ueoygowuiugooicc:
        $ggauoeuaesiymgee = self::DEFAULT_POST_TYPES;
        goto cuockkkkmamkuygc;
        mmgissacqioqksmk:
        $ooiewiwkegguusum = ManipulateArray::get($ywmkwiwkosakssii, self::INCLUDE);
        goto wceiwqiccssqgcuw;
        cuockkkkmamkuygc:
        if (!$ooiewiwkegguusum) {
            goto gcqmmuowwaseagoa;
        }
        goto cquyikuyaiskayos;
        wceiwqiccssqgcuw:
        $yemgmmgogcwccuky = ManipulateArray::get($ywmkwiwkosakssii, self::EXCLUDE);
        goto ueoygowuiugooicc;
        geiwkqgwawsmyeiw:
        $aqykuigiuwmmcieu = $sogksuscggsicmac;
        goto aesusogymakeuios;
        ueocsmuykwyoywui:
        eywcgcyicisgcumk:
        goto kawkoccmuqqeamms;
        ogekauwggisguwkq:
        akkuiemqaogigaqa:
        goto uwyuiwkkeuwsykys;
        eemuaaqoyiqiyyoe:
        $ksaameoqigiaoigg = $oammesyieqmwuwyi;
        goto gmwqisoikakuqicc;
        mwsmaceeuacaoeas:
        gcqmmuowwaseagoa:
        goto wwkgimsumqsaicoy;
        sqgkqqoeksyicmoa:
        $sogksuscggsicmac = ManipulateArray::get($ywmkwiwkosakssii, self::OUTPUT);
        goto mmgissacqioqksmk;
        suqaqoaowamkiymi:
        goto esggoysyykycecyq;
        goto wccuioiewmeamewo;
        seqgigumouyguowy:
        $aqykuigiuwmmcieu = self::OBJECT;
        goto ueocsmuykwyoywui;
        aqgmwywwecioauqg:
        $gqgemcmoicmgaqie = ManipulateArray::get($ywmkwiwkosakssii, "\161\x75\145\x72\171");
        goto sqgkqqoeksyicmoa;
        ugiegewmsumyuqmq:
        qsocqumaigsayksm:
        goto geiwkqgwawsmyeiw;
        cquyikuyaiskayos:
        $gqgemcmoicmgaqie = [];
        goto kwsusuqioqiaokmk;
        aesusogymakeuios:
        if (in_array($sogksuscggsicmac, [self::OBJECT, self::NAMES])) {
            goto eywcgcyicisgcumk;
        }
        goto seqgigumouyguowy;
        oouaueaaciqmoaek:
        cqycwggykmmyacuk:
        goto eqooqiomasygymwk;
        wwkgimsumqsaicoy:
        $gqgemcmoicmgaqie = ManipulateFormat::omaawkkwwyesqwcc($gqgemcmoicmgaqie, ["\x70\x75\x62\x6c\151\143" => true, "\x5f\x62\x75\x69\154\164\x69\x6e" => false, "\x70\x75\x62\x6c\x69\143\154\x79\137\x71\165\x65\x72\x79\141\142\x6c\145" => true]);
        goto ugiegewmsumyuqmq;
        eqooqiomasygymwk:
        foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) {
            goto kgqqosqskwaaogyu;
            uumasiqguewuwcaa:
            if ($sogksuscggsicmac === self::LABELS) {
                goto ccgsasimykggyess;
            }
            goto gkwycwegcuicsgas;
            ycygwiuuauuwwmyc:
            kkicowiukwoykmms:
            goto ywimgeoyusmceogc;
            aswkmiocmcogokyy:
            agwoisgcwqooygsg:
            goto qyyosiukaswscmuu;
            aaqiykkkmossycmw:
            goto agwoisgcwqooygsg;
            goto ycygwiuuauuwwmyc;
            saigoogiqigowuqo:
            goto agwoisgcwqooygsg;
            goto oeewoegiqgywwmos;
            gkwycwegcuicsgas:
            if ($sogksuscggsicmac === self::SLUGS) {
                goto kkicowiukwoykmms;
            }
            goto saigoogiqigowuqo;
            ywimgeoyusmceogc:
            $igqsaukqcqscimok = ManipulateArray::get($igqsaukqcqscimok->rewrite, self::SLUG, $ymqmyyeuycgmigyo);
            goto aswkmiocmcogokyy;
            smiwewgysqykaqee:
            $ymqmyyeuycgmigyo = $igqsaukqcqscimok->name;
            goto uumasiqguewuwcaa;
            qyyosiukaswscmuu:
            $ksaameoqigiaoigg[$ymqmyyeuycgmigyo] = $igqsaukqcqscimok;
            goto gqeeomoukqkowycw;
            qokggikksgqmecam:
            if (!$igqsaukqcqscimok) {
                goto eueuyagcqqwwsick;
            }
            goto smiwewgysqykaqee;
            kgqqosqskwaaogyu:
            $igqsaukqcqscimok = self::waaisqccqacqeium($igqsaukqcqscimok);
            goto qokggikksgqmecam;
            uussagskoysuoeiw:
            emmkqsuswgssikec:
            goto rkasqqqgemowweeg;
            gqeeomoukqkowycw:
            eueuyagcqqwwsick:
            goto uussagskoysuoeiw;
            ekaasiygiigkuasg:
            $igqsaukqcqscimok = $igqsaukqcqscimok->label;
            goto aaqiykkkmossycmw;
            oeewoegiqgywwmos:
            ccgsasimykggyess:
            goto ekaasiygiigkuasg;
            rkasqqqgemowweeg:
        }
        goto kcaciomiguuugugi;
        yskwigcmaicqamqy:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\161\165\x65\x72\x79" => [], self::OUTPUT => self::NAMES, self::EXCLUDE => [], self::INCLUDE => []]);
        goto aqgmwywwecioauqg;
        ucwuomcmcoqmyqwm:
        $oammesyieqmwuwyi = array_intersect_key($ooiewiwkegguusum, $oammesyieqmwuwyi);
        goto iomigqssyeeaqgsg;
        uqoowswseqmmisei:
        if ($ooiewiwkegguusum) {
            goto mcyiwawwcsquwiqq;
        }
        goto aeamameocikekces;
        kawkoccmuqqeamms:
        $oammesyieqmwuwyi = ManipulateFormat::omaawkkwwyesqwcc($ggauoeuaesiymgee, DecoratorPost::mwoyqeeigwqoamiw($gqgemcmoicmgaqie, $aqykuigiuwmmcieu));
        goto uqoowswseqmmisei;
        amaoecqeywkkmyoi:
    }
    
    public static function qcgakseyaikigqco($post = null)
    {
        return DecoratorPost::qcgakseyaikigqco(self::get($post));
    }
    
    public static function cekqoisoaceaqiam($post)
    {
        goto oyqsaukeioykugmm;
        wwuyacuysiocqcwq:
        array_push($auwuoyyagaiegwae, $gwiqqkoakiiquksg, $gwiqqkoakiiquksg . "\146\x65\145\x64\x2f");
        goto cgwwckgiugakqowu;
        uesmmkgaqoqmaiik:
        
        array_push($auwuoyyagaiegwae, self::ycqquoiyyuesegsy($post));
        goto wequuyiayswgoosg;
        eqooeogyogusoyci:
        
        if (!(self::ucwmcwqmqwaymkkc($post) == "\x74\x72\141\x73\150")) {
            goto kyouiqwywyqgkuso;
        }
        goto awcgaimyecemucay;
        ieyqmiueyikwcwso:
        skyscuweykackoci:
        goto eqooeogyogusoyci;
        iyqaossmgeskkcgg:
        foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) {
            goto weeeiiqqgqoymeke;
            sigseymecgiowiii:
            imsmuoawuiemiisk:
            goto uwkaawaqoswkcuye;
            uwkcasugwwwwmmqu:
            foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
                goto muisqceosooggyoy;
                siymkkcgeegouiuq:
                if (!$weyoqgcesqgeusiu) {
                    goto woaewkuksuiogeoo;
                }
                goto kcgismqksoywmcea;
                iqeuoqeeceiikmse:
                qqewuuoigkoeeocq:
                goto ksukaiqewqogiqwu;
                wgwsicukewmsscec:
                $ciyackuwsqkoqese = 2;
                goto gcywkgcegesysuoy;
                ycuamgwmgueemuaq:
                ugqqciuuwaioyowe:
                goto aigiscsuosewiuus;
                amgecmwokwwiiuac:
                $giqggecqqikcysgq = min($ocqawgquwsqioses, 10);
                goto wgwsicukewmsscec;
                ousiykwqkgeokoqs:
                woaewkuksuiogeoo:
                goto qcimcgcggicewoug;
                suusasmyiceigsyk:
                ksmsiiaeokcggegc:
                goto ousiykwqkgeokoqs;
                wgceoaueoiiwwuum:
                $oaeeeywcmcskwwgy = $voccgqswsiwauyow . "\x70\141\147\145\x2f" . user_trailingslashit($ciyackuwsqkoqese);
                goto imyoymgguyuiksia;
                gcywkgcegesysuoy:
                scywsowkeyyssgqo:
                goto agqsiuycgsaoescw;
                aigiscsuosewiuus:
                $ciyackuwsqkoqese++;
                goto asmoomkuqyqqywkk;
                agqsiuycgsaoescw:
                if (!($ciyackuwsqkoqese <= $giqggecqqikcysgq)) {
                    goto ksmsiiaeokcggegc;
                }
                goto wgceoaueoiiwwuum;
                ycimqmmmgskimkgi:
                array_push($auwuoyyagaiegwae, $voccgqswsiwauyow);
                goto wmssywakgoiswqey;
                wmssywakgoiswqey:
                $weyoqgcesqgeusiu = ManipulateSetting::omkaowmygoqwsywq();
                goto siymkkcgeegouiuq;
                imyoymgguyuiksia:
                array_push($auwuoyyagaiegwae, $oaeeeywcmcskwwgy);
                goto ycuamgwmgueemuaq;
                msyksokkggaqasey:
                $ocqawgquwsqioses = ceil($gaeqamemwmwsyukm / $weyoqgcesqgeusiu);
                goto amgecmwokwwiiuac;
                muisqceosooggyoy:
                $voccgqswsiwauyow = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk);
                goto wyuyokmygemgqsmk;
                kcgismqksoywmcea:
                $gaeqamemwmwsyukm = $iwewcwusemqaiggk->count;
                goto msyksokkggaqasey;
                wyuyokmygemgqsmk:
                if (!$voccgqswsiwauyow) {
                    goto acoociuqgmymeggw;
                }
                goto ycimqmmmgskimkgi;
                qcimcgcggicewoug:
                acoociuqgmymeggw:
                goto iqeuoqeeceiikmse;
                asmoomkuqyqqywkk:
                goto scywsowkeyyssgqo;
                goto suusasmyiceigsyk;
                ksukaiqewqogiqwu:
            }
            goto sigseymecgiowiii;
            ocykayyqumgsymkk:
            cscciumkmikyqica:
            goto eguuyyiaceyocoge;
            weeeiiqqgqoymeke:
            $uyuaosigqymaqsaa = self::weescwwgqgiyumyw($post, $kesssewsiegssiya);
            goto omaqoumkmmmuuwkq;
            uwkaawaqoswkcuye:
            eyuickmcmiiwcgss:
            goto ocykayyqumgsymkk;
            omaqoumkmmmuuwkq:
            if (!$uyuaosigqymaqsaa) {
                goto eyuickmcmiiwcgss;
            }
            goto uwkcasugwwwwmmqu;
            eguuyyiaceyocoge:
        }
        goto gkweycueymqasawm;
        gkweycueymqasawm:
        oymoaaossqyocmue:
        goto euceooqmeegmumya;
        oyqsaukeioykugmm:
        $auwuoyyagaiegwae = [];
        goto meeceoqcuuasiiio;
        isawkmamaukaekcg:
        $ucsmiamgwmayyoco = ManipulatePage::symuoymymumgwkaw();
        goto keqweiemkiakogck;
        iayksyuawioekakq:
        $sqeykgyoooqysmca = self::gueasuouwqysmomu($post);
        goto uesmmkgaqoqmaiik;
        imgkgmwywoyggiiy:
        
        $myyccyuumcscsagc = self::mqgeysameoesmuqw($sqeykgyoooqysmca);
        goto qsqgsggawskeqauc;
        qacmciyceoyqmims:
        smqgoowsgakckqse:
        goto ksycyguoaoakaasa;
        igkuwcieaaaimceu:
        
        array_push($auwuoyyagaiegwae, DecoratorAuthor::mkaiaewoyaimieqg($qscaoekmoooeuyqg), get_author_feed_link($qscaoekmoooeuyqg));
        goto imgkgmwywoyggiiy;
        awcgaimyecemucay:
        $gwiqqkoakiiquksg = self::ycqquoiyyuesegsy($post);
        goto cymkauiwaemgisae;
        aookismekyuisiqy:
        
        array_push($auwuoyyagaiegwae, home_url("\57"));
        goto isawkmamaukaekcg;
        euceooqmeegmumya:
        $qscaoekmoooeuyqg = self::mguqscccckuywsya($post);
        goto igkuwcieaaaimceu;
        keqweiemkiakogck:
        if (!(is_string($ucsmiamgwmayyoco) && !empty($ucsmiamgwmayyoco) && DecoratorOption::get("\x73\150\157\167\x5f\x6f\156\x5f\x66\162\157\x6e\164") == "\160\x61\147\x65")) {
            goto smqgoowsgakckqse;
        }
        goto sqigokysuqqoyoqq;
        ksycyguoaoakaasa:
        return $auwuoyyagaiegwae;
        goto eqgewqgayssmyqyi;
        cgwwckgiugakqowu:
        kyouiqwywyqgkuso:
        goto aookismekyuisiqy;
        qsqgsggawskeqauc:
        if (!($myyccyuumcscsagc == true)) {
            goto skyscuweykackoci;
        }
        goto kwigmoscuksaeaik;
        kwigmoscuksaeaik:
        array_push($auwuoyyagaiegwae, $myyccyuumcscsagc, get_post_type_archive_feed_link($sqeykgyoooqysmca));
        goto ieyqmiueyikwcwso;
        sqigokysuqqoyoqq:
        array_push($auwuoyyagaiegwae, $ucsmiamgwmayyoco);
        goto qacmciyceoyqmims;
        wequuyiayswgoosg:
        
        $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas($sqeykgyoooqysmca);
        goto iyqaossmgeskkcgg;
        meeceoqcuuasiiio:
        $post = self::get($post);
        goto iayksyuawioekakq;
        cymkauiwaemgisae:
        $gwiqqkoakiiquksg = str_replace("\137\x5f\x74\x72\141\163\x68\145\144", '', $gwiqqkoakiiquksg);
        goto wwuyacuysiocqcwq;
        eqgewqgayssmyqyi:
    }
    
    public static function keeogscqcgsequyc($useksmwkuswkwcqg)
    {
        goto qeeiayaggickmsem;
        daaaoeseaeakowis:
        return $wkaqekwwgqsqwcoi;
        goto mqqqskweuccusqsg;
        qeeiayaggickmsem:
        $wkaqekwwgqsqwcoi = '';
        goto ygyikqcaweccikoy;
        akiaoyqwwgyogmwa:
        ikggeywmqciukyuy:
        goto mygoemwmmmmeswoy;
        siikoyaookakcsya:
        $useksmwkuswkwcqg = $mksyucucyswaukig->name;
        goto akiaoyqwwgyogmwa;
        emwuosqcciqgwuec:
        uogugagqqgaumeui:
        goto daaaoeseaeakowis;
        oaquckygauqeycue:
        if (!$mksyucucyswaukig) {
            goto ikggeywmqciukyuy;
        }
        goto ouuuiwcmacckekgw;
        ygyikqcaweccikoy:
        $mksyucucyswaukig = self::waaisqccqacqeium($useksmwkuswkwcqg);
        goto oaquckygauqeycue;
        mygoemwmmmmeswoy:
        if ($wkaqekwwgqsqwcoi) {
            goto uogugagqqgaumeui;
        }
        goto wsocqyukguoqmoou;
        ouuuiwcmacckekgw:
        $wkaqekwwgqsqwcoi = $mksyucucyswaukig->menu_icon;
        goto siikoyaookakcsya;
        wsocqyukguoqmoou:
        $wkaqekwwgqsqwcoi = "\141\x64\155\x69\156\x2d{$useksmwkuswkwcqg}";
        goto emwuosqcciqgwuec;
        mqqqskweuccusqsg:
    }
    
    public static function uikgwcuascgeissw($post = null)
    {
        goto usymiywgyuqgsmgo;
        usymiywgyuqgsmgo:
        $post = self::get($post);
        goto mweuowgyuuomycug;
        qqsoyoesgkwakcwc:
        egssagkqigycaowo:
        goto wqsikiwycqwksiwy;
        wqsikiwycqwksiwy:
        return sprintf("\45\x73\x20\55\40\x25\x73", $meqocwsecsywiiqs, $useksmwkuswkwcqg);
        goto asqikgqmeqysakky;
        gogeigmcqokqqiwc:
        if (!$useksmwkuswkwcqg) {
            goto egssagkqigycaowo;
        }
        goto yieyamwmiyceaysm;
        yieyamwmiyceaysm:
        $useksmwkuswkwcqg = ManipulateArray::qamwegcyimgcqksw($useksmwkuswkwcqg, "\154\x61\x62\145\154\x73\56\163\151\x6e\147\x75\x6c\x61\162\137\x6e\141\155\x65");
        goto qqsoyoesgkwakcwc;
        mweuowgyuuomycug:
        $meqocwsecsywiiqs = DecoratorPost::qcgakseyaikigqco($post);
        goto iuagymwagckgasgy;
        iuagymwagckgasgy:
        $useksmwkuswkwcqg = self::gueasuouwqysmomu($post, true);
        goto gogeigmcqokqqiwc;
        asqikgqmeqysakky:
    }
    
    public static function wieguyuwywywksac($ywmkwiwkosakssii = [])
    {
        return wp_get_archives(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\145\x63\150\157" => false, self::TYPE => "\155\x6f\x6e\x74\150\154\171", self::ORDER => "\x44\105\x53\x43"]));
    }
    
    public static function ccwssmqgyasqqcoc($post, $sqeykgyoooqysmca) : bool
    {
        $post = self::get($post, self::OBJECT, true);
        return $post && self::gueasuouwqysmomu($post) == $sqeykgyoooqysmca;
    }
    
    public static function qeosassuekcieuuy($sqeykgyoooqysmca = null) : bool
    {
        goto fgacmumaqamuggaw;
        ywkowqwiseoaosue:
        return $cekoogweeooasayu;
        goto giismoqygwoeiucm;
        ssseiiwsmacscqkk:
        if (!$sqeykgyoooqysmca) {
            goto yyckkkysceayoacc;
        }
        goto wsagsuekaoamamwq;
        fgacmumaqamuggaw:
        $cekoogweeooasayu = false;
        goto umugkkiiiakomyae;
        umugkkiiiakomyae:
        $sqeykgyoooqysmca = self::waaisqccqacqeium($sqeykgyoooqysmca);
        goto ssseiiwsmacscqkk;
        wsagsuekaoamamwq:
        $cekoogweeooasayu = $sqeykgyoooqysmca->public === true;
        goto gqkckwmwucyicaom;
        gqkckwmwucyicaom:
        yyckkkysceayoacc:
        goto ywkowqwiseoaosue;
        giismoqygwoeiucm:
    }
    
    public static function qkweigiqsaaigqau($post = null) : ?string
    {
        goto sgwggiwoawyysamo;
        gawoykaumugqiiiw:
        if (!$qscaoekmoooeuyqg) {
            goto usayuwaoekoyeigw;
        }
        goto oeiyuauoweasyegq;
        qyowaswasswaayey:
        return $eeamcawaiqocomwy;
        goto iqayckmwkoaoyusg;
        zoeammwiceimsmea:
        $qscaoekmoooeuyqg = self::mguqscccckuywsya($post);
        goto gawoykaumugqiiiw;
        oeyaaksqsgmecwmm:
        usayuwaoekoyeigw:
        goto qyowaswasswaayey;
        oeiyuauoweasyegq:
        $eeamcawaiqocomwy = DecoratorAuthor::mkaiaewoyaimieqg($qscaoekmoooeuyqg);
        goto oeyaaksqsgmecwmm;
        sgwggiwoawyysamo:
        $eeamcawaiqocomwy = null;
        goto zoeammwiceimsmea;
        iqayckmwkoaoyusg:
    }
    
    public static function wsiiswmaagmyiaiw($post = null)
    {
        return DecoratorPost::wsiiswmaagmyiaiw(self::mwikyscisascoeea($post));
    }
    
    public static function mqgeysameoesmuqw($useksmwkuswkwcqg) : string
    {
        goto qckuswayaoymsksk;
        egoyusisgekiqoye:
        $useksmwkuswkwcqg = $useksmwkuswkwcqg->name;
        goto eukasuwuekwugokm;
        iwgymiqeamaeqqom:
        return trailingslashit(DecoratorPost::mqgeysameoesmuqw($useksmwkuswkwcqg));
        goto aamackwoccmccyks;
        eukasuwuekwugokm:
        cusamwcumoyaccig:
        goto iwgymiqeamaeqqom;
        qckuswayaoymsksk:
        if (!$useksmwkuswkwcqg instanceof WP_Post_Type) {
            goto cusamwcumoyaccig;
        }
        goto egoyusisgekiqoye;
        aamackwoccmccyks:
    }
    
    public static function insert($useksmwkuswkwcqg, $ywmkwiwkosakssii = []) : ?int
    {
        goto uaequckaaeewaqiy;
        osisauycomkeaisq:
        if ($wyoiwuqokyeeuguk) {
            goto meamgyseweakcwms;
        }
        goto sysqgmqceqakymga;
        uaequckaaeewaqiy:
        $sogksuscggsicmac = null;
        goto eqyccakwmkgmsyik;
        kegkgqcaoogqqwuy:
        return $sogksuscggsicmac;
        goto ueyscskqyqmwgyqq;
        eqyccakwmkgmsyik:
        $ywmkwiwkosakssii[self::POST_TYPE] = $useksmwkuswkwcqg;
        goto mmmaqiceqwswaica;
        imkggwewaoaeaaaa:
        meamgyseweakcwms:
        goto kegkgqcaoogqqwuy;
        mmmaqiceqwswaica:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\x6f\163\164\x5f\164\x69\164\154\x65" => '', "\x70\157\163\164\x5f\156\x61\x6d\x65" => '', "\x70\x6f\x73\164\137\x63\157\156\x74\x65\x6e\164" => '', "\x70\x6f\163\164\x5f\163\164\x61\164\165\x73" => '']);
        goto ukamoqcwkkacmkuo;
        ukamoqcwkkacmkuo:
        $wyoiwuqokyeeuguk = self::ciugwooasaqcywas($useksmwkuswkwcqg, [self::NAME => $ywmkwiwkosakssii["\160\157\x73\164\x5f\156\x61\155\x65"], self::POSTS_PER_PAGE => 1]);
        goto osisauycomkeaisq;
        ckoqcgskyowkgwqc:
        $sogksuscggsicmac = DecoratorPost::insert($ywmkwiwkosakssii);
        goto imkggwewaoaeaaaa;
        sysqgmqceqakymga:
        $ywmkwiwkosakssii["\x70\157\x73\x74\137\141\165\x74\150\157\162"] = ManipulateUser::mwikyscisascoeea();
        goto ckoqcgskyowkgwqc;
        ueyscskqyqmwgyqq:
    }
    
    public static function sqyyemqmmgmyiaam($sciomagaqmgggsiu = [])
    {
        return DecoratorQuery::moegwqkekcawsggs($sciomagaqmgggsiu);
    }
    
    public static function waoeigwigksoikgu($post, $ywmkwiwkosakssii = [])
    {
        $ywmkwiwkosakssii["\x70\x6f\x73\x74\x5f\x69\144"] = self::mwikyscisascoeea($post);
        return ManipulateComment::ciugwooasaqcywas($ywmkwiwkosakssii);
    }
    
    public static function iuaacwwygkmcoeiy($qwcmueausqgiwigy, $gqgemcmoicmgaqie)
    {
        goto xeeuigemugoamqao;
        xeeuigemugoamqao:
        $uyuaosigqymaqsaa = ManipulateArray::get($gqgemcmoicmgaqie->query_vars, "\163\145\141\162\x63\150\137\x74\145\x72\x6d\163");
        goto ameoiemwymmeomqq;
        ekayucummqeqmwgc:
        sccqosiycoaosikm:
        goto suicyusecackqaii;
        sqmqymmecmqykiqs:
        $aaycmcgqqqsysccs = !empty($qqmmggwcsmymegca["\x65\170\x61\x63\x74"]) ? '' : "\x25";
        goto youwoggqmcuggmyy;
        youwoggqmcuggmyy:
        $qwcmueausqgiwigy = [];
        goto gmycyuqoscismuig;
        iecocimeqmmockam:
        return $qwcmueausqgiwigy;
        goto ceogiuqcsqkmysga;
        gacwuumiuewqgeim:
        wcykiuessuoeagki:
        goto iecocimeqmmockam;
        easusuoaqiwgcuui:
        $qqmmggwcsmymegca = $uyuaosigqymaqsaa;
        goto sqmqymmecmqykiqs;
        qqmeumqiyqkoycww:
        qgsqycogyicuiioq:
        goto eewcoeiokouymaic;
        ocuocqiyuecksmsi:
        $qwcmueausqgiwigy[] = "{$wpdb->posts}\56\160\157\163\x74\137\x70\141\163\x73\x77\x6f\162\x64\40\75\40\x27\x27";
        goto ekayucummqeqmwgc;
        ameoiemwymmeomqq:
        if (!($uyuaosigqymaqsaa && $qwcmueausqgiwigy)) {
            goto wcykiuessuoeagki;
        }
        goto uwmckciqcuwoyemm;
        uwmckciqcuwoyemm:
        global $wpdb;
        goto easusuoaqiwgcuui;
        suicyusecackqaii:
        $qwcmueausqgiwigy = "\x20\101\x4e\104\40" . implode("\x20\x41\116\x44\x20", $qwcmueausqgiwigy);
        goto gacwuumiuewqgeim;
        eewcoeiokouymaic:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto sccqosiycoaosikm;
        }
        goto ocuocqiyuecksmsi;
        gmycyuqoscismuig:
        foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
            $qwcmueausqgiwigy[] = $wpdb->prepare("{$wpdb->posts}\x2e\160\157\163\x74\x5f\x74\151\x74\x6c\145\40\x4c\111\x4b\105\x20\45\x73", $aaycmcgqqqsysccs . $wpdb->esc_like($iwewcwusemqaiggk) . $aaycmcgqqqsysccs);
            eycmewmysuymswuk:
        }
        goto qqmeumqiyqkoycww;
        ceogiuqcsqkmysga:
    }
    
    public static function waaisqccqacqeium($useksmwkuswkwcqg = null) : ?WP_Post_Type
    {
        goto syuoooyaackuoues;
        ukaocimwskuqgqso:
        return $useksmwkuswkwcqg;
        goto quwqksyoiigamkys;
        syuoooyaackuoues:
        if ($useksmwkuswkwcqg instanceof WP_Post_Type) {
            goto uqowsoiyaummsyoy;
        }
        goto kusoiyymwykqsgue;
        agksaoiusscawcwc:
        $useksmwkuswkwcqg = self::gueasuouwqysmomu();
        goto oayuucaeciioiwqw;
        asgkgomkmykaqeac:
        uqowsoiyaummsyoy:
        goto ukaocimwskuqgqso;
        kusoiyymwykqsgue:
        if ($useksmwkuswkwcqg) {
            goto iaqwyagqyokkmeoo;
        }
        goto agksaoiusscawcwc;
        oayuucaeciioiwqw:
        iaqwyagqyokkmeoo:
        goto gqkuecyoaomqacgk;
        gqkuecyoaomqacgk:
        $useksmwkuswkwcqg = DecoratorPost::waaisqccqacqeium($useksmwkuswkwcqg);
        goto asgkgomkmykaqeac;
        quwqksyoiigamkys:
    }
    
    public static function mwikyscisascoeea($post = null, $cwwowqyuwccuykom = false)
    {
        goto wwcimuywiwqwagoq;
        kwugcgwmcsoswees:
        $post = get_the_ID();
        goto gwimqwmmuacwkmou;
        iuaikkckoskwuwyw:
        if (!(!$post && !$cwwowqyuwccuykom)) {
            goto ikqwwkscesmugsuq;
        }
        goto oksiwycekgweuyoc;
        wakcuqwemksmyeos:
        kyicaqywsmawwwuo:
        goto eqyykccckaqyikas;
        qycekaqowowqaosm:
        $post = ManipulateArray::get($post, "\111\x44");
        goto iuaikkckoskwuwyw;
        kswkocesygkuqiiy:
        eqwmoigeokkskwuy:
        goto kwiuwccmuwwwwcak;
        swqycaokmkkykkea:
        return $post;
        goto aoycieuggikeomis;
        uwscoaaycokmqegk:
        mioiyawikawqyaay:
        goto swqycaokmkkykkea;
        wwcimuywiwqwagoq:
        if (is_numeric($post)) {
            goto mioiyawikawqyaay;
        }
        goto qycekaqowowqaosm;
        oksiwycekgweuyoc:
        if (DecoratorQuery::seokosgecygsmqau()) {
            goto eqwmoigeokkskwuy;
        }
        goto kwugcgwmcsoswees;
        kwiuwccmuwwwwcak:
        $post = DecoratorQuery::keeuqgyooycqoygw();
        goto wakcuqwemksmyeos;
        gwimqwmmuacwkmou:
        goto kyicaqywsmawwwuo;
        goto kswkocesygkuqiiy;
        eqyykccckaqyikas:
        ikqwwkscesmugsuq:
        goto uwscoaaycokmqegk;
        aoycieuggikeomis:
    }
    
    public static function emcckouwaoassquc(array $sciomagaqmgggsiu = [])
    {
        goto oqcgimyqwmqgyygw;
        oqcgimyqwmqgyygw:
        if ($sciomagaqmgggsiu) {
            goto uwgksqcakaieyscy;
        }
        goto oeegykgsgkscwcio;
        oeegykgsgkscwcio:
        $sciomagaqmgggsiu = self::mwoyqeeigwqoamiw();
        goto qmgqguiisgckwocw;
        imsqyecesygwiwkk:
        return self::ciugwooasaqcywas($sciomagaqmgggsiu, ["\160\157\x73\164\137\x73\164\141\164\x75\x73" => "\160\165\x62\x6c\151\x73\x68", "\146\x69\145\x6c\144\163" => self::IDS]);
        goto yysqgqeoyckgmcsa;
        qmgqguiisgckwocw:
        uwgksqcakaieyscy:
        goto imsqyecesygwiwkk;
        yysqgqeoyckgmcsa:
    }
    
    public static function aqcogscycyycgkuq($post = null, $mgkceomocowocqyo = [])
    {
        return self::ygwimyogyaqgumam("\x70\157\x73\x74\137\x6e\141\155\x65", $post, $mgkceomocowocqyo);
    }
    
    public static function qkuksuwkueysueww(string $useksmwkuswkwcqg)
    {
        goto coaiaawqcaggmemg;
        qsweawwuowkoeemg:
        return $gaeqamemwmwsyukm;
        goto wawiggqugqwwacgq;
        coaiaawqcaggmemg:
        global $wpdb;
        goto cauamyimeqmgwick;
        ymiiukyiasogueiq:
        try {
            $gaeqamemwmwsyukm = (int) $wpdb->get_var("\123\x45\x4c\105\x43\x54\x20\103\x4f\x55\116\x54\x28\143\x6f\155\155\x65\x6e\164\x5f\x49\104\51\12\x9\11\11\11\11\106\x52\117\x4d\40{$wpdb->comments}\x20\x57\110\x45\122\x45\40\x63\x6f\155\x6d\x65\156\164\137\x70\x6f\x73\x74\x5f\111\104\x20\x69\x6e\40\50\12\x9\x9\x9\x9\11\x53\x45\x4c\x45\x43\x54\x20\x49\x44\40\x46\x52\117\115\x20{$wpdb->posts}\40\x57\x48\105\x52\x45\x20\160\157\x73\x74\x5f\x74\171\160\145\40\75\x20\x27{$useksmwkuswkwcqg}\x27\12\11\x9\11\11\x9\x41\116\104\x20\160\x6f\x73\164\137\163\164\141\x74\x75\x73\x20\75\x20\47\160\165\142\154\151\x73\x68\x27\51\40\101\116\x44\40\143\157\155\155\145\x6e\x74\x5f\x61\x70\x70\x72\x6f\166\x65\x64\40\75\40\x27\61\x27");
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        goto qsweawwuowkoeemg;
        cauamyimeqmgwick:
        $gaeqamemwmwsyukm = 0;
        goto ymiiukyiasogueiq;
        wawiggqugqwwacgq:
    }
    
    public static function ucwmcwqmqwaymkkc($post = null, $mgkceomocowocqyo = [])
    {
        return self::ygwimyogyaqgumam("\x70\x6f\x73\x74\x5f\163\164\x61\x74\165\163", $post, $mgkceomocowocqyo);
    }
    
    public static function mguqscccckuywsya($post = null, $cwwowqyuwccuykom = false)
    {
        return self::ygwimyogyaqgumam("\160\x6f\163\x74\137\x61\x75\164\150\157\x72", self::mwikyscisascoeea($post, $cwwowqyuwccuykom));
    }
    
    public static function uiuwugwykqocmiec($post = null) : ?int
    {
        return DecoratorHook::sscegwueamckwmcy("\147\x65\x74\137\160\157\163\x74\x5f\167\x6f\162\144\x5f\x63\x6f\x75\x6e\x74", 0, self::get($post));
    }
    
    public static function gsaceacmqiuqoouo($useksmwkuswkwcqg, $ymqmyyeuycgmigyo, $ywmkwiwkosakssii = [])
    {
        goto qwkwyciyyigugcms;
        ceqcqskmksiuosuy:
        $suuagcecoyuweoqk = self::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii);
        goto ygygqysoqeimimgm;
        qwkwyciyyigugcms:
        $ywmkwiwkosakssii["\156\x61\x6d\x65"] = $ymqmyyeuycgmigyo;
        goto ceqcqskmksiuosuy;
        ygygqysoqeimimgm:
        return $suuagcecoyuweoqk ? array_pop($suuagcecoyuweoqk) : '';
        goto wgyqskiikcoamceq;
        wgyqskiikcoamceq:
    }
    
    public static function owicscwgeuqcqaig($useksmwkuswkwcqg = "\x70\x6f\163\164", $ywmkwiwkosakssii = [])
    {
        goto uockmkmeymgyqsqi;
        ckqgkowqkggscuoi:
        $yiasugywggckywoa["\143\141\x74"] = $yiasugywggckywoa["\x63\141\164\145\x67\157\x72\x79"];
        goto qowqokqkiweosuwa;
        sigisgiqiuiuqemc:
        $yiasugywggckywoa = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg);
        goto siiyycmowckwsemw;
        omcseuaowsucussk:
        $yiasugywggckywoa["\160\157\163\x74\163\x5f\x70\145\x72\137\160\x61\x67\145"] = count($egekuwigiusmwiek);
        goto iimqqykwwmqeukai;
        qymkekiqwouwaoos:
        wimqsusyesasaism:
        goto eceowukgiumqosom;
        qowqokqkiweosuwa:
        mmgsqoiukqkyiayw:
        goto qucmewyuwkkwsseo;
        aecweaquqmiiimsc:
        $yiasugywggckywoa["\x70\157\163\164\137\163\x74\141\164\165\x73"] = "\x61\164\x74\x61\x63\150\x6d\145\x6e\164" === $yiasugywggckywoa["\x70\x6f\x73\164\137\x74\x79\160\145"] ? "\151\x6e\150\145\x72\151\164" : "\160\165\142\x6c\151\x73\150";
        goto wkkwgyuaqwiygawe;
        eceowukgiumqosom:
        $yiasugywggckywoa["\160\157\163\x74\x5f\137\x6e\x6f\x74\137\151\x6e"] = wp_parse_id_list($yiasugywggckywoa["\145\x78\x63\154\x75\144\145"]);
        goto wywyyuawikmwceym;
        siiyycmowckwsemw:
        if (!empty($yiasugywggckywoa["\x70\157\163\x74\137\x73\x74\141\164\165\x73"])) {
            goto yoceycuiiwwmscci;
        }
        goto aecweaquqmiiimsc;
        qsaagygqqsmgiesk:
        goto qeyuquwgysuucygo;
        goto qymkekiqwouwaoos;
        uockmkmeymgyqsqi:
        $ycmguuqqaiisymgg = ["\x6e\165\155\142\145\162\160\157\x73\164\x73" => 5, "\143\x61\x74\145\147\157\x72\x79" => 0, "\157\162\144\x65\x72\x62\x79" => "\x64\x61\164\x65", "\x6f\x72\x64\x65\x72" => "\104\x45\123\x43", "\x69\x6e\143\x6c\165\144\145" => [], "\x65\170\143\x6c\x75\144\x65" => [], "\x6d\x65\164\141\137\153\x65\171" => '', "\x6d\x65\164\x61\x5f\x76\141\x6c\165\x65" => '', "\x70\x6f\x73\x74\x5f\x74\x79\x70\x65" => $useksmwkuswkwcqg, "\x73\x75\x70\160\x72\x65\163\163\x5f\x66\x69\x6c\164\x65\x72\163" => true];
        goto sigisgiqiuiuqemc;
        zkuyggayyoqeeqek:
        $egekuwigiusmwiek = wp_parse_id_list($yiasugywggckywoa["\151\156\x63\154\x75\144\x65"]);
        goto omcseuaowsucussk;
        osgkqqqqimmwsmsi:
        goto qeyuquwgysuucygo;
        goto megauiwcsiuuiquk;
        uaeyogsicwkuwcak:
        if (!(!empty($yiasugywggckywoa["\x6e\x75\x6d\142\x65\x72\160\157\163\x74\x73"]) && empty($yiasugywggckywoa["\160\157\163\164\163\137\x70\x65\162\x5f\x70\141\147\x65"]))) {
            goto xeyusieocqgkowca;
        }
        goto ikwwiueqmmkayyce;
        sgguaokgyweasccc:
        return new WP_Query($yiasugywggckywoa);
        goto gyuioyyowaiqcywy;
        qucmewyuwkkwsseo:
        if (!empty($yiasugywggckywoa["\151\x6e\x63\x6c\x75\144\x65"])) {
            goto kmocumwwsgkgeqay;
        }
        goto kocoameeyqygkwok;
        kymkyymiquekuscq:
        if (empty($yiasugywggckywoa["\x63\141\x74\145\147\157\162\x79"])) {
            goto mmgsqoiukqkyiayw;
        }
        goto ckqgkowqkggscuoi;
        eomwsawiqyuyiiiw:
        $yiasugywggckywoa["\x69\x67\156\157\162\145\x5f\x73\x74\151\x63\153\171\x5f\x70\x6f\163\x74\163"] = true;
        goto okeewwyoqawamsoa;
        wywyyuawikmwceym:
        qeyuquwgysuucygo:
        goto eomwsawiqyuyiiiw;
        iwcwuugoguscgqye:
        xeyusieocqgkowca:
        goto kymkyymiquekuscq;
        megauiwcsiuuiquk:
        kmocumwwsgkgeqay:
        goto zkuyggayyoqeeqek;
        iimqqykwwmqeukai:
        $yiasugywggckywoa["\x70\157\163\x74\137\x5f\151\x6e"] = $egekuwigiusmwiek;
        goto qsaagygqqsmgiesk;
        wkkwgyuaqwiygawe:
        yoceycuiiwwmscci:
        goto uaeyogsicwkuwcak;
        ikwwiueqmmkayyce:
        $yiasugywggckywoa["\x70\x6f\x73\164\x73\137\160\145\x72\x5f\x70\141\x67\x65"] = $yiasugywggckywoa["\156\x75\155\142\x65\162\x70\x6f\x73\x74\x73"];
        goto iwcwuugoguscgqye;
        kocoameeyqygkwok:
        if (!empty($yiasugywggckywoa["\145\170\x63\154\165\x64\x65"])) {
            goto wimqsusyesasaism;
        }
        goto osgkqqqqimmwsmsi;
        okeewwyoqawamsoa:
        $yiasugywggckywoa["\156\x6f\x5f\146\x6f\x75\x6e\x64\x5f\162\157\x77\x73"] = true;
        goto sgguaokgyweasccc;
        gyuioyyowaiqcywy:
    }
    
    public static function weescwwgqgiyumyw($post, $seyqqsmuaiegkeeq, $ywmkwiwkosakssii = [])
    {
        goto cyamaucweckqmscc;
        eeieegmqysegumei:
        return $uyuaosigqymaqsaa;
        goto usyyyguieaqqyswa;
        cyamaucweckqmscc:
        $uyuaosigqymaqsaa = DecoratorPost::weescwwgqgiyumyw(self::mwikyscisascoeea($post), $seyqqsmuaiegkeeq, $ywmkwiwkosakssii);
        goto ssiwoquqiiuysuma;
        yucmskwuguqgqimc:
        gcaaimgqweguwksg:
        goto eeieegmqysegumei;
        iiukckigywisaego:
        $uyuaosigqymaqsaa = [];
        goto yucmskwuguqgqimc;
        ssiwoquqiiuysuma:
        if (!(!is_array($uyuaosigqymaqsaa) || is_wp_error($uyuaosigqymaqsaa))) {
            goto gcaaimgqweguwksg;
        }
        goto iiukckigywisaego;
        usyyyguieaqqyswa:
    }
    
    public static function ekauksssqmmykouq($post = null, $wwgucssaecqekuek = [])
    {
        goto smsymmwykgkakeqk;
        okyuswywywsaeias:
        ousiqsmccumayaes:
        goto aeaqgqqqowqykgcc;
        aeaqgqqqowqykgcc:
        return $qscaoekmoooeuyqg;
        goto iycimwiaauksigiw;
        ugaowwakggeccsic:
        $ymqmyyeuycgmigyo = DecoratorAuthor::igawqaomowicuayw("\144\151\163\160\154\x61\x79\137\156\x61\155\x65", self::mguqscccckuywsya($post));
        goto agauowggkqsoyqiq;
        mqkwmkuieegmucmg:
        $wwgucssaecqekuek["\150\x72\x65\146"] = $qscaoekmoooeuyqg;
        goto ugaowwakggeccsic;
        smsymmwykgkakeqk:
        $qscaoekmoooeuyqg = self::qkweigiqsaaigqau($post);
        goto mgywqmgswkeyucaq;
        mgywqmgswkeyucaq:
        if (!$qscaoekmoooeuyqg) {
            goto ousiqsmccumayaes;
        }
        goto mqkwmkuieegmucmg;
        agauowggkqsoyqiq:
        $qscaoekmoooeuyqg = ManipulateHTML::uuccukgasskgimsq("\141", $wwgucssaecqekuek, $ymqmyyeuycgmigyo);
        goto okyuswywywsaeias;
        iycimwiaauksigiw:
    }
    
    public static function gueasuouwqysmomu($post = null, $awqscowmskeuymeu = false)
    {
        goto aiaiswgwmcguoues;
        aiaiswgwmcguoues:
        $useksmwkuswkwcqg = get_post_type();
        goto mwuisiuasugcaywu;
        iiysucwqgweammss:
        yuycmoyawueickya:
        goto gaqccucuqyssqkmy;
        gaqccucuqyssqkmy:
        if (!$awqscowmskeuymeu) {
            goto oieoyiowucgkouoq;
        }
        goto gioogyikawiiiyqq;
        asckqiuugiguuiwe:
        $post = self::get($post);
        goto wcuuyecsiamsaqqy;
        qgyqamakooyqciyo:
        if ($useksmwkuswkwcqg) {
            goto yuycmoyawueickya;
        }
        goto wioicqyeyqmsckwg;
        ciqqeouuygcaiiiq:
        cyomqwmieugiasem:
        goto qgyqamakooyqciyo;
        gomiiockquaqsyuo:
        $useksmwkuswkwcqg = ManipulateArray::get($post, "\160\157\163\x74\x5f\164\x79\160\x65");
        goto ciqqeouuygcaiiiq;
        wcuuyecsiamsaqqy:
        cccgemwsykwgemeg:
        goto iimwiesgggauwcqk;
        seggcuqcuiaegeya:
        oieoyiowucgkouoq:
        goto ucouymumcuosygii;
        gioogyikawiiiyqq:
        $useksmwkuswkwcqg = self::waaisqccqacqeium($useksmwkuswkwcqg);
        goto seggcuqcuiaegeya;
        iimwiesgggauwcqk:
        if (!(is_array($post) || $post instanceof WP_Post)) {
            goto cyomqwmieugiasem;
        }
        goto gomiiockquaqsyuo;
        mwuisiuasugcaywu:
        if (!is_numeric($post)) {
            goto cccgemwsykwgemeg;
        }
        goto asckqiuugiguuiwe;
        ucouymumcuosygii:
        return $useksmwkuswkwcqg;
        goto woquimckgiecokuo;
        wioicqyeyqmsckwg:
        $useksmwkuswkwcqg = ManipulateServer::get("\160\157\x73\x74\x5f\x74\171\160\x65");
        goto iiysucwqgweammss;
        woquimckgiecokuo:
    }
    
    public static function gamoemyysmgugccu($post = null, $iueymcwwscwqkiyq = "\141\x6c\x6c")
    {
        return self::ymgsgecsiqeegseg($post, $iueymcwwscwqkiyq) > 0;
    }
    
    public static function wsqeykgqiemswysa($sqeykgyoooqysmca, $iueymcwwscwqkiyq = "\x70\x75\x62\x6c\x69\x73\x68", $yiyimoacecwoqeko = '')
    {
        return ManipulateArray::get(wp_count_posts($sqeykgyoooqysmca, $yiyimoacecwoqeko), $iueymcwwscwqkiyq);
    }
    
    public static function igkcwemyysqkwuuy($meqocwsecsywiiqs, $useksmwkuswkwcqg, $ywmkwiwkosakssii = [])
    {
        goto cqmkeyweesgwycgy;
        euuaeuyegkksasge:
        DecoratorHook::cecaguuoecmccuse("\160\x6f\x73\164\x73\137\x73\x65\141\162\143\x68", [__CLASS__, "\x73\x65\x61\162\143\x68\102\171\x54\151\164\154\x65"], 10, 2);
        goto akuskaiiaswmksko;
        yeuqcwawkauowkgu:
        gggayasokuomgeus:
        goto euuaeuyegkksasge;
        guoyescsqcuuymku:
        $ywmkwiwkosakssii["\x73"] = $meqocwsecsywiiqs;
        goto emkqygwcsiyiykiw;
        gsoskqieucsesaks:
        if (!(strlen($meqocwsecsywiiqs) > 1)) {
            goto gggayasokuomgeus;
        }
        goto guoyescsqcuuymku;
        cqmkeyweesgwycgy:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x6f\162\144\x65\162" => "\101\123\103", "\160\157\163\x74\x73\x5f\x70\145\x72\137\160\x61\x67\x65" => 10]);
        goto gsoskqieucsesaks;
        akuskaiiaswmksko:
        $wyoiwuqokyeeuguk = self::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii);
        goto wmsigkymceakwywo;
        wmsigkymceakwywo:
        DecoratorHook::ggmgmqswqkgecosg("\160\x6f\x73\164\163\x5f\x73\145\x61\162\x63\150", [__CLASS__, "\x73\x65\141\x72\143\x68\102\x79\124\151\x74\x6c\x65"], 10);
        goto equokkeomguewmua;
        equokkeomguewmua:
        return $wyoiwuqokyeeuguk;
        goto cigaaqeauwccoiqa;
        emkqygwcsiyiykiw:
        $ywmkwiwkosakssii["\x73\165\160\x70\x72\x65\163\x73\137\x66\151\x6c\x74\x65\162\x73"] = false;
        goto yeuqcwawkauowkgu;
        cigaaqeauwccoiqa:
    }
    
    public static function ygwimyogyaqgumam($aiowsaccomcoikus, $post = null, $mgkceomocowocqyo = [])
    {
        return DecoratorPost::ygwimyogyaqgumam($aiowsaccomcoikus, self::mwikyscisascoeea($post), $mgkceomocowocqyo);
    }
    
    public static function kckogqkiycqeumoa($post, $kesssewsiegssiya, $qqgsimqiqyaugceg = true)
    {
        goto gacasmwcscckymwc;
        koiimcuoyakqsuam:
        if (is_array($uyuaosigqymaqsaa)) {
            goto mekmscssquqsgquc;
        }
        goto eskmkqowoyogaoko;
        sycecywsiomgcuiq:
        return $uyuaosigqymaqsaa;
        goto yaswwoqemsqmawse;
        gacasmwcscckymwc:
        $uyuaosigqymaqsaa = self::weescwwgqgiyumyw($post, $kesssewsiegssiya);
        goto koiimcuoyakqsuam;
        iwmassqyauymkwaa:
        if (!$qqgsimqiqyaugceg) {
            goto qwkoeagysgskmuyq;
        }
        goto iccqsmwsmisaayam;
        sqecccyugmaiuwsq:
        qwkoeagysgskmuyq:
        goto xocaameouysockim;
        iccqsmwsmisaayam:
        $uyuaosigqymaqsaa = isset($uyuaosigqymaqsaa[0]) ? $uyuaosigqymaqsaa[0] : null;
        goto sqecccyugmaiuwsq;
        eskmkqowoyogaoko:
        $uyuaosigqymaqsaa = null;
        goto keygywkiwuoagqsw;
        xocaameouysockim:
        seqwmeeoiicciigo:
        goto sycecywsiomgcuiq;
        keygywkiwuoagqsw:
        goto seqwmeeoiicciigo;
        goto hwiqmsqyyiscmeiu;
        hwiqmsqyyiscmeiu:
        mekmscssquqsgquc:
        goto iwmassqyauymkwaa;
        yaswwoqemsqmawse:
    }
    
    public static function smqukgcyacswysqa($uusmaiomayssaecw = '', $post = null, $eqgoocgaqwqcimie = '')
    {
        return DecoratorPost::smqukgcyacswysqa($post, $uusmaiomayssaecw, $eqgoocgaqwqcimie);
    }
    
    public static function masoymaamekuykso($post = null, $gioggcykgoikcwiy = false) : ?string
    {
        goto cioomiusgwycykag;
        weyumyqgceqsimmq:
        return $iayakwckycsumkqa;
        goto mkiyekcyyukamwck;
        cioomiusgwycykag:
        $post = self::get($post);
        goto aeesuccguagwomqw;
        vseyiyomcwkayoio:
        $iayakwckycsumkqa = DecoratorPost::masoymaamekuykso($post);
        goto kwgwkkkaagkkesik;
        kwgwkkkaagkkesik:
        icwuocgiukckmyyu:
        goto weyumyqgceqsimmq;
        ogisaykaiaeuiika:
        if (!(!$gioggcykgoikcwiy || DecoratorPost::seewsasmyoyciiee($post))) {
            goto icwuocgiukckmyyu;
        }
        goto vseyiyomcwkayoio;
        aeesuccguagwomqw:
        $iayakwckycsumkqa = null;
        goto ogisaykaiaeuiika;
        mkiyekcyyukamwck:
    }
    
    public static function cagmcswsqkwuasiy($sciomagaqmgggsiu = self::DEFAULT_POST_TYPES)
    {
        goto domskgkmquiwwqcg;
        ukqomyqaykkiygwu:
        if (!($pagenow == "\x65\x64\151\x74\56\x70\x68\x70" && is_admin())) {
            goto ueiqomqieicasmsi;
        }
        goto cqoeiqeeukaiioia;
        domskgkmquiwwqcg:
        global $pagenow;
        goto seousiqwmmcaygac;
        uuauuoykcoseecuu:
        guwikcacqsmwkyya:
        goto okwgeicyaawqyoye;
        qqecycksisecgwiw:
        if (!(is_array($sciomagaqmgggsiu) && in_array($useksmwkuswkwcqg, $sciomagaqmgggsiu) || is_string($useksmwkuswkwcqg) && $useksmwkuswkwcqg == $sciomagaqmgggsiu)) {
            goto guwikcacqsmwkyya;
        }
        goto ueeowwusmsueouao;
        okwgeicyaawqyoye:
        ueiqomqieicasmsi:
        goto wgcewuoaksusicyi;
        wgcewuoaksusicyi:
        return $sogksuscggsicmac;
        goto oeqsgusqqgoioqwu;
        ueeowwusmsueouao:
        $sogksuscggsicmac = true;
        goto uuauuoykcoseecuu;
        seousiqwmmcaygac:
        $sogksuscggsicmac = false;
        goto ukqomyqaykkiygwu;
        cqoeiqeeukaiioia:
        $useksmwkuswkwcqg = self::gueasuouwqysmomu();
        goto qqecycksisecgwiw;
        oeqsgusqqgoioqwu:
    }
    
    public static function ymgsgecsiqeegseg($post = null, $iueymcwwscwqkiyq = "\x61\x70\x70\162\x6f\x76\x65\144")
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
        goto siceqsgwyswyguog;
        skuwwwayeyemggoe:
        return $ewgwqamkygiqaawc;
        goto ieywgqsawwkgiamc;
        kaaweieegskiqqgm:
        if ($post) {
            goto ssqieyoogiwsyksk;
        }
        goto kgkweawaqmqomkuc;
        kgkweawaqmqomkuc:
        goto bgsaeeicmsikiwgm;
        goto igegouiwyasqgwwc;
        mamieseosscguoye:
        $ewgwqamkygiqaawc = DecoratorPost::souwykwwmyygqyqi($post);
        goto gqcsicosskykmgiu;
        oywouymwcigkauye:
        $ewgwqamkygiqaawc = ManipulateArray::get($post, "\x70\157\x73\164\x5f\x63\x6f\x6e\164\145\156\x74");
        goto iaekkeskykqsyiim;
        siceqsgwyswyguog:
        $post = self::get($post);
        goto qmsmcsoqgumsigme;
        iaekkeskykqsyiim:
        bgsaeeicmsikiwgm:
        goto skuwwwayeyemggoe;
        igegouiwyasqgwwc:
        wmwkgawmkmciaeoi:
        goto mamieseosscguoye;
        uucqywaoqssqggug:
        if ($egkeamycaysqsoma) {
            goto wmwkgawmkmciaeoi;
        }
        goto kaaweieegskiqqgm;
        yagoqwkegiyqceoe:
        ssqieyoogiwsyksk:
        goto oywouymwcigkauye;
        gqcsicosskykmgiu:
        goto bgsaeeicmsikiwgm;
        goto yagoqwkegiyqceoe;
        qmsmcsoqgumsigme:
        $ewgwqamkygiqaawc = '';
        goto uucqywaoqssqggug;
        ieywgqsawwkgiamc:
    }
    
    public static function ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $post = null, $oyuqkqayqyqysyse = '')
    {
        return DecoratorPost::ksmqawcowkmegigw(self::mwikyscisascoeea($post), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $oyuqkqayqyqysyse);
    }
    
    public static function mmoaikqueyiwcesm($post, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii["\160\x6f\163\164\137\x70\141\162\145\156\164"] = self::mwikyscisascoeea($post);
        return self::ciugwooasaqcywas(DecoratorPost::gueasuouwqysmomu($post), $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
    
    public static function qmmimiesyoyuqeqo($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        goto iswuimkowigsiwmi;
        umuwmuiugqisoyek:
        ygiwsaegqoeaocqi:
        goto eyimaakssauckmgk;
        eyimaakssauckmgk:
        return $eyagosskwwmgwmog;
        goto ceoicyukguaouuwa;
        iswuimkowigsiwmi:
        $eyagosskwwmgwmog = self::uswuayuaaosoksqg($useksmwkuswkwcqg, $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
        goto yysqwceyageaeieo;
        yysqwceyageaeieo:
        foreach ($eyagosskwwmgwmog as $omwmuycmeqcqokom) {
            $omwmuycmeqcqokom->children = self::mmoaikqueyiwcesm($omwmuycmeqcqokom, $ywmkwiwkosakssii);
            wwkeoqicoeqmsuui:
        }
        goto umuwmuiugqisoyek;
        ceoicyukguaouuwa:
    }
    
    public static function ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        goto eoqgquwgcgkugouq;
        qaewuekauiwkuwoa:
        $ycmguuqqaiisymgg = [self::POST_TYPE => $useksmwkuswkwcqg, self::POSTS_PER_PAGE => -1];
        goto qgumkmmmeaoskamq;
        qgumkmmmeaoskamq:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg);
        goto makigymuacqucieo;
        iqkgeamgsuwqkckg:
        foreach ($wyoiwuqokyeeuguk as $uusmaiomayssaecw => $post) {
            goto wecuakwyikeqwyac;
            miyyiuaokyesyygy:
            wmgqacaeeuokysey:
            goto iocmmwiqausgmkcu;
            sisumqgocskwyago:
            $sogksuscggsicmac[self::mwikyscisascoeea($post)] = $meqocwsecsywiiqs;
            goto miyyiuaokyesyygy;
            wecuakwyikeqwyac:
            $meqocwsecsywiiqs = get_the_title($post);
            goto ukmmkgmcooowqksi;
            ukmmkgmcooowqksi:
            if (!$meqocwsecsywiiqs) {
                goto wmgqacaeeuokysey;
            }
            goto sisumqgocskwyago;
            iocmmwiqausgmkcu:
            ymgyewqwqmcukmyu:
            goto usuwmkwcsukckuee;
            usuwmkwcsukckuee:
        }
        goto wgiakoeckyswemak;
        syauycikyosiscgs:
        goto eoiysyeyuwwugsee;
        goto iqiwskswayisages;
        makigymuacqucieo:
        $ywmkwiwkosakssii = DecoratorHook::sscegwueamckwmcy("\x67\x65\164\x5f\160\157\163\x74\163\x5f\141\162\x67\x73", $ywmkwiwkosakssii);
        goto yygauekecaiessss;
        uiyuycigkskokcco:
        eoiysyeyuwwugsee:
        goto suqyiooacuiiqcuk;
        eoqgquwgcgkugouq:
        $sogksuscggsicmac = [];
        goto qaewuekauiwkuwoa;
        faiesskquaeiqqom:
        if ($aqykuigiuwmmcieu == self::LABELS) {
            goto ewmmuusmqgceimky;
        }
        goto wayoumqqasqeowsk;
        wayoumqqasqeowsk:
        $sogksuscggsicmac = $wyoiwuqokyeeuguk;
        goto syauycikyosiscgs;
        wgiakoeckyswemak:
        ygeaissawcacmmyu:
        goto uiyuycigkskokcco;
        suqyiooacuiiqcuk:
        return $sogksuscggsicmac;
        goto iygakaaakekgyeqy;
        iqiwskswayisages:
        ewmmuusmqgceimky:
        goto iqkgeamgsuwqkckg;
        yygauekecaiessss:
        $wyoiwuqokyeeuguk = DecoratorPost::ciugwooasaqcywas($ywmkwiwkosakssii);
        goto faiesskquaeiqqom;
        iygakaaakekgyeqy:
    }
    
    public static function uamasysiccecccmw($oiegiwogmwmawkeo = "\160\157\163\x74\55\164\150\165\x6d\x62\x6e\141\x69\154", $post = null)
    {
        $eeamcawaiqocomwy = DecoratorPost::uamasysiccecccmw(self::mwikyscisascoeea($post), $oiegiwogmwmawkeo);
        return (string) DecoratorHook::sscegwueamckwmcy("\x70\157\x73\x74\x5f\164\x68\x75\155\142\x6e\x61\151\x6c\137\165\162\154", $eeamcawaiqocomwy, $post, $oiegiwogmwmawkeo);
    }
    
    public static function ymuqsscwmcumcama($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::POST_TYPE => $useksmwkuswkwcqg, "\160\157\x73\x74\x5f\163\x74\141\164\x75\163" => "\160\165\x62\154\151\x73\x68"]);
        return DecoratorPost::ymuqsscwmcumcama($ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
    
    public static function squyiyimquqicqke($saqmwwmqiwmkiwaa = null, $post = null, $egkeamycaysqsoma = true)
    {
        goto giuwumskimssakwo;
        mumcqcssasmyqmca:
        $ocogsiouoiuuguym = null;
        goto iiugkqmswuikwcuo;
        ggwgiusgggqqckqw:
        ewqwyuuyegqukcmw:
        goto ioecigquiawyecis;
        ioecigquiawyecis:
        $ocogsiouoiuuguym = DecoratorPost::kugamkssceycoyaq($saqmwwmqiwmkiwaa, false, $post);
        goto aikomgoeseyekwqa;
        giuwumskimssakwo:
        $post = self::get($post);
        goto mumcqcssasmyqmca;
        iiugkqmswuikwcuo:
        if (!$post) {
            goto yaioeuewuagwmaym;
        }
        goto sweyywawiwkgsqkw;
        wycsycuaymkqqgce:
        $saqmwwmqiwmkiwaa = ManipulateSetting::uyomwmskouyyqyyq();
        goto ggwgiusgggqqckqw;
        sckagcuweuycciog:
        yaioeuewuagwmaym:
        goto yimcyeuemqyssysu;
        aikomgoeseyekwqa:
        if (!$egkeamycaysqsoma) {
            goto suuocycsksmcsqsm;
        }
        goto aocacgkcisiuosug;
        sweyywawiwkgsqkw:
        if ($saqmwwmqiwmkiwaa) {
            goto ewqwyuuyegqukcmw;
        }
        goto wycsycuaymkqqgce;
        yimcyeuemqyssysu:
        return $ocogsiouoiuuguym;
        goto towiyceuykgmeooc;
        csmwsuakqgukaqkm:
        suuocycsksmcsqsm:
        goto sckagcuweuycciog;
        aocacgkcisiuosug:
        $ocogsiouoiuuguym = DecoratorHook::sscegwueamckwmcy("\147\145\164\137\x74\x68\x65\x5f\x64\x61\x74\145", $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $post);
        goto csmwsuakqgukaqkm;
        towiyceuykgmeooc:
    }
    
    public static function get($post = null, $aqykuigiuwmmcieu = self::OBJECT, $cwwowqyuwccuykom = false)
    {
        goto iyeukmoycqcoeoww;
        kemyesuyqgygsgmc:
        goto kqgkgyyskmmomkuy;
        goto yuaeosigaqocaswy;
        aoasseeyymigiuqg:
        $post = ManipulateServer::get(self::POST);
        goto gasqiqwuuokswuak;
        qqcagaaisccuygwq:
        kqgkgyyskmmomkuy:
        goto maimcygiikgukege;
        quwawmyimwumqiik:
        if ($post) {
            goto ciusceaiyqsgwesy;
        }
        goto aoasseeyymigiuqg;
        yuaeosigaqocaswy:
        agmoeimoggkkmamk:
        goto agwwockuoekeayoe;
        ieiwqquomwgcgasg:
        $post = DecoratorPost::get($post, $aqykuigiuwmmcieu);
        goto kemyesuyqgygsgmc;
        maimcygiikgukege:
        mkmcaqquqsycicwk:
        goto cecqqywgssugeikg;
        cgmkwykqsuikugio:
        if (!$post && $cwwowqyuwccuykom) {
            goto agmoeimoggkkmamk;
        }
        goto quwawmyimwumqiik;
        cecqqywgssugeikg:
        return $post;
        goto ogoigckgkacomgsw;
        gasqiqwuuokswuak:
        ciusceaiyqsgwesy:
        goto ieiwqquomwgcgasg;
        iyeukmoycqcoeoww:
        if ($post instanceof WP_Post) {
            goto mkmcaqquqsycicwk;
        }
        goto cgmkwykqsuikugio;
        agwwockuoekeayoe:
        $post = null;
        goto qqcagaaisccuygwq;
        ogoigckgkacomgsw:
    }
    
    public static function eqgwuukcqqayesqa($oysoyeaucuawyaky = [], $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::POST__IN => $oysoyeaucuawyaky, self::ORDERBY => self::POST__IN]);
        return self::ciugwooasaqcywas(self::mwoyqeeigwqoamiw(), $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
    
    public static function ycqquoiyyuesegsy($ccamueccusigaaio = null, $cwwowqyuwccuykom = false, $eoocgqsqmwuegiae = false)
    {
        goto ycyukikioeesmosk;
        uikosuscmyagkucg:
        return trailingslashit($migiiksoiymissge);
        goto cucceeyaayakweic;
        eaesqqacyqsmmasw:
        $migiiksoiymissge = '';
        goto aceokuucoumoawei;
        omsmasoumqusgusq:
        pgkmykoemkssyciw:
        goto keoqugaesaeocwky;
        ioaiogagwmswaiyu:
        if (is_string($ccamueccusigaaio) && ManipulateValidation::wmcwegoisyeeosqu($ccamueccusigaaio)) {
            goto pgkmykoemkssyciw;
        }
        goto ckamssoyigceqkqe;
        oigskyaeyywyscoi:
        ogcucyqcaawqsikk:
        goto asecysweauowukym;
        asecysweauowukym:
        $migiiksoiymissge = DecoratorPost::ycqquoiyyuesegsy($post, $eoocgqsqmwuegiae);
        goto igawggssmuyywoiw;
        ycyukikioeesmosk:
        $post = self::mwikyscisascoeea($ccamueccusigaaio, $cwwowqyuwccuykom);
        goto eaesqqacyqsmmasw;
        igawggssmuyywoiw:
        goto aqqaecewqeqyecge;
        goto omsmasoumqusgusq;
        kyycgosayogwiose:
        aqqaecewqeqyecge:
        goto uikosuscmyagkucg;
        ckamssoyigceqkqe:
        goto aqqaecewqeqyecge;
        goto oigskyaeyywyscoi;
        aceokuucoumoawei:
        if ($post) {
            goto ogcucyqcaawqsikk;
        }
        goto ioaiogagwmswaiyu;
        keoqugaesaeocwky:
        $migiiksoiymissge = $ccamueccusigaaio;
        goto kyycgosayogwiose;
        cucceeyaayakweic:
    }
    
    public static function uswuayuaaosoksqg($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii["\160\157\x73\164\137\160\x61\x72\145\156\164"] = 0;
        return self::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
    
    public static function oukqamgqowciwoum($saqmwwmqiwmkiwaa = null, $post = null, $egkeamycaysqsoma = true)
    {
        goto mwgogaswksgaiggw;
        qqyeoguyyawwacyi:
        sgsowgqykyceieqs:
        goto waqguwsseiamucog;
        yiooaygkcosiouiq:
        if (!$egkeamycaysqsoma) {
            goto sgsowgqykyceieqs;
        }
        goto ikiqwwyuwiqkgoqq;
        waqguwsseiamucog:
        uawiiskiyascymig:
        goto igcogeumkiyaiekm;
        ikiqwwyuwiqkgoqq:
        $ocogsiouoiuuguym = DecoratorHook::sscegwueamckwmcy("\x67\x65\x74\x5f\164\150\x65\137\155\157\144\151\x66\x69\x65\x64\137\144\x61\164\145", $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $post);
        goto qqyeoguyyawwacyi;
        iewuoiiumywkmwwi:
        $ocogsiouoiuuguym = DecoratorPost::kkkiiqssauymiqsk($saqmwwmqiwmkiwaa, false, $post);
        goto yiooaygkcosiouiq;
        igcogeumkiyaiekm:
        return $ocogsiouoiuuguym;
        goto moaekmimicakwisg;
        imkcoqicusaaieiq:
        $ocogsiouoiuuguym = null;
        goto eiugaasyaiggaoem;
        oigewwwkwggioeom:
        if ($saqmwwmqiwmkiwaa) {
            goto oqigaksscaygqcyg;
        }
        goto gwciqqammeugmyic;
        mwgogaswksgaiggw:
        $post = self::get($post);
        goto imkcoqicusaaieiq;
        koywwayicykawmsw:
        oqigaksscaygqcyg:
        goto iewuoiiumywkmwwi;
        eiugaasyaiggaoem:
        if (!$post) {
            goto uawiiskiyascymig;
        }
        goto oigewwwkwggioeom;
        gwciqqammeugmyic:
        $saqmwwmqiwmkiwaa = ManipulateSetting::uyomwmskouyyqyyq();
        goto koywwayicykawmsw;
        moaekmimicakwisg:
    }
    
    public static function uqwgsuysegkweago($sciomagaqmgggsiu = self::DEFAULT_POST_TYPES, $ccamueccusigaaio = "\x62\157\164\x68")
    {
        goto oogauyisucksqwgq;
        imscuiceoqcqeuec:
        if (!(is_admin() && $sciomagaqmgggsiu)) {
            goto ucwqokwamqeiyauo;
        }
        goto qaaeckkicouagsiq;
        wsokcmgygywqyuki:
        return $sogksuscggsicmac;
        goto smaemsgsuyckcasg;
        woysagioiaegygiw:
        cmgkyyywsqscoeia:
        goto uciwcwkusqqwicyi;
        usukgagsmcsgayiq:
        if ($sciomagaqmgggsiu) {
            goto ouwsgqaiqguiomym;
        }
        goto mwqksegiysmkmase;
        oogauyisucksqwgq:
        $sogksuscggsicmac = false;
        goto usukgagsmcsgayiq;
        qeiygiiuygamegkq:
        if (!(is_array($sciomagaqmgggsiu) && in_array($useksmwkuswkwcqg, $sciomagaqmgggsiu) || $useksmwkuswkwcqg === $sciomagaqmgggsiu)) {
            goto wkgossscggiwwgqi;
        }
        goto kwyosousqcwgcaqq;
        uciwcwkusqqwicyi:
        wkgossscggiwwgqi:
        goto qycyyqyaseuqsoss;
        mwqksegiysmkmase:
        $sciomagaqmgggsiu = ManipulatePost::mwoyqeeigwqoamiw();
        goto euuweiukuiuwcuym;
        euuweiukuiuwcuym:
        ouwsgqaiqguiomym:
        goto imscuiceoqcqeuec;
        qaaeckkicouagsiq:
        global $pagenow;
        goto wiwcgyekioquskkg;
        asayowukiisowcoo:
        cwukciqgyiykkmme:
        goto woysagioiaegygiw;
        wiwcgyekioquskkg:
        $useksmwkuswkwcqg = self::cwucesiiikgqsgui();
        goto qeiygiiuygamegkq;
        kwyosousqcwgcaqq:
        switch ($ccamueccusigaaio) {
            case "\x65\x64\151\164":
                $sogksuscggsicmac = in_array($pagenow, ["\x70\x6f\x73\x74\56\160\150\x70"]);
                goto cmgkyyywsqscoeia;
            case "\x6e\145\167":
                $sogksuscggsicmac = in_array($pagenow, ["\160\157\163\x74\55\x6e\x65\167\x2e\160\150\x70"]);
                goto cmgkyyywsqscoeia;
            default:
                $sogksuscggsicmac = in_array($pagenow, ["\160\x6f\x73\164\x2e\x70\x68\x70", "\x70\157\163\x74\55\x6e\x65\x77\56\160\x68\160"]);
        }
        goto asayowukiisowcoo;
        qycyyqyaseuqsoss:
        ucwqokwamqeiyauo:
        goto wsokcmgygywqyuki;
        smaemsgsuyckcasg:
    }
    
    public static function qgisekcaywsmigga(string $useksmwkuswkwcqg, string $gwiwsycaaqgwmewg, $aucgaecqisksougg = null, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc(["\155\x65\164\x61\x5f\153\145\x79" => $gwiwsycaaqgwmewg, "\155\145\x74\141\137\166\141\x6c\165\x65" => $aucgaecqisksougg, "\x70\157\163\x74\x5f\x73\x74\141\x74\165\163" => "\x61\x6e\171"], $ywmkwiwkosakssii);
        return self::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
}
