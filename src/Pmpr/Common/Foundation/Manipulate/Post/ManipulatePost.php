<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        okwcqgkysyueokie:
        if ($typenow) {
            goto cwaaqwgckkmmuayw;
        }
        goto skgmwkqigcucecks;
        maaqgkcmqkcguscg:
        $sqeykgyoooqysmca = self::gueasuouwqysmomu($post);
        goto mwkyqwwyuoquwycw;
        eiqwmksumaugsiue:
        $sqeykgyoooqysmca = ManipulateServer::ayueggmoqeeukqmq(self::POST_TYPE);
        goto ksewmguscaqkiiso;
        kiaeuogcagqymoia:
        return $sqeykgyoooqysmca;
        goto ekieuqyaekgaekem;
        swekqcymmemsckim:
        cwaaqwgckkmmuayw:
        goto mgsqaweekeiqgcys;
        cagckkqacmeaemik:
        eegacceeuuycmssm:
        goto gokeooqgmyisigwu;
        qaugoawikwesmkqo:
        goto ooweqiekgaaqweig;
        goto swekqcymmemsckim;
        skgmwkqigcucecks:
        if ($current_screen) {
            goto yemeacuywsiqecgm;
        }
        goto qaugoawikwesmkqo;
        kmgmsagugycgguso:
        yemeacuywsiqecgm:
        goto qoukygmscqwwmeci;
        gokeooqgmyisigwu:
        yswsuyqqsygkqcgi:
        goto kiaeuogcagqymoia;
        mwkyqwwyuoquwycw:
        saaqoyeqicykmmuu:
        goto cagckkqacmeaemik;
        ccyskouwcaewmmuq:
        goto ooweqiekgaaqweig;
        goto kmgmsagugycgguso;
        owcyysasyeaaowwk:
        if ($sqeykgyoooqysmca) {
            goto eegacceeuuycmssm;
        }
        goto eiqwmksumaugsiue;
        qoukygmscqwwmeci:
        $sqeykgyoooqysmca = ManipulateArray::get($current_screen, self::POST_TYPE);
        goto cyoqykquycmuksqu;
        qkccmuekscemyiqi:
        if (!(!$sqeykgyoooqysmca && $post)) {
            goto saaqoyeqicykmmuu;
        }
        goto maaqgkcmqkcguscg;
        ksewmguscaqkiiso:
        $post = ManipulateServer::ayueggmoqeeukqmq(self::POST);
        goto qkccmuekscemyiqi;
        cyoqykquycmuksqu:
        ooweqiekgaaqweig:
        goto owcyysasyeaaowwk;
        mgsqaweekeiqgcys:
        $sqeykgyoooqysmca = $typenow;
        goto ccyskouwcaewmmuq;
        ayocomqsygokygku:
        if ($sqeykgyoooqysmca) {
            goto yswsuyqqsygkqcgi;
        }
        goto cyweqwceuyeuqwiq;
        imgcoqgqsgmwussc:
        $sqeykgyoooqysmca = ManipulateArray::get(self::get(), self::POST_TYPE);
        goto ayocomqsygokygku;
        cyweqwceuyeuqwiq:
        global $typenow, $current_screen;
        goto okwcqgkysyueokie;
        ekieuqyaekgaekem:
    }
    
    public static function ygqycmmkoiuocoia($post)
    {
        return ManipulateArray::get(self::get($post), "\160\157\x73\x74\x5f\x70\x61\162\x65\x6e\x74");
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
        yuqyccgsmegiicoc:
        $wyoiwuqokyeeuguk = [];
        goto igommeoookeycwmc;
        scmqkqwakowggkmu:
        gyakkgyocuygkkwi:
        goto yaggoqgeaucmkmsi;
        weuicwuusquqioeo:
        the_post();
        goto mswiyiyqqqqqmccc;
        igommeoookeycwmc:
        if (!have_posts()) {
            goto sgiswsoiyoowcqsw;
        }
        goto scmqkqwakowggkmu;
        kmeqemccwyaskwqk:
        uycmykimwqoyykmo:
        goto akeeousiaemumwqy;
        mswiyiyqqqqqmccc:
        $wyoiwuqokyeeuguk[] = self::get();
        goto ousuggsuweyeqyuo;
        ymmkmyqiigmskumu:
        return $wyoiwuqokyeeuguk;
        goto cumcsgcamqomeygk;
        akeeousiaemumwqy:
        sgiswsoiyoowcqsw:
        goto ymmkmyqiigmskumu;
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
        eceyessoaayaagci:
        
        $ewgwqamkygiqaawc = preg_replace("\x2f\133\133\x3a\163\160\141\143\x65\x3a\135\x5d\x2f", "\x20", $ewgwqamkygiqaawc);
        goto oekkqiisaauoowkm;
        kusaguaukqyawgck:
        $ewgwqamkygiqaawc = self::souwykwwmyygqyqi($post);
        goto iwuiyecakwogaqos;
        oekkqiisaauoowkm:
        
        
        $emeuskyoeemoywwi = preg_split("\57\133\xa\xd\11\x20\x5d\x2b\x2f", $ewgwqamkygiqaawc, 0, PREG_SPLIT_NO_EMPTY);
        goto iuqesqwcmseaoouo;
        iwuiyecakwogaqos:
        
        $ewgwqamkygiqaawc = preg_replace("\57\x5b\x5b\x3a\x70\165\x6e\143\x74\x3a\x5d\x5b\x3a\144\151\147\151\164\x3a\135\135\57", '', $ewgwqamkygiqaawc);
        goto eceyessoaayaagci;
        kikyqwgykkiskoik:
        $post = self::get($post);
        goto kusaguaukqyawgck;
        iuqesqwcmseaoouo:
        
        return count($emeuskyoeemoywwi);
        goto gyqeokswmeikygki;
        gyqeokswmeikygki:
    }
    
    public static function mwoyqeeigwqoamiw($ywmkwiwkosakssii = [])
    {
        goto yskwigcmaicqamqy;
        wccuioiewmeamewo:
        mcyiwawwcsquwiqq:
        goto ucwuomcmcoqmyqwm;
        kawkoccmuqqeamms:
        $oammesyieqmwuwyi = ManipulateFormat::omaawkkwwyesqwcc($ggauoeuaesiymgee, DecoratorPost::mwoyqeeigwqoamiw($gqgemcmoicmgaqie, $aqykuigiuwmmcieu));
        goto uqoowswseqmmisei;
        uwyuiwkkeuwsykys:
        $oammesyieqmwuwyi = array_diff_key($oammesyieqmwuwyi, array_flip($yemgmmgogcwccuky));
        goto acmoiyiogowkkesw;
        ueoygowuiugooicc:
        $ggauoeuaesiymgee = self::DEFAULT_POST_TYPES;
        goto cuockkkkmamkuygc;
        yskwigcmaicqamqy:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x71\165\x65\162\171" => [], self::OUTPUT => self::NAMES, self::EXCLUDE => [], self::INCLUDE => []]);
        goto aqgmwywwecioauqg;
        aqgmwywwecioauqg:
        $gqgemcmoicmgaqie = ManipulateArray::get($ywmkwiwkosakssii, "\161\165\145\162\x79");
        goto sqgkqqoeksyicmoa;
        eqooqiomasygymwk:
        foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) {
            goto kgqqosqskwaaogyu;
            oeewoegiqgywwmos:
            ccgsasimykggyess:
            goto ekaasiygiigkuasg;
            smiwewgysqykaqee:
            $ymqmyyeuycgmigyo = $igqsaukqcqscimok->name;
            goto uumasiqguewuwcaa;
            uussagskoysuoeiw:
            emmkqsuswgssikec:
            goto rkasqqqgemowweeg;
            gkwycwegcuicsgas:
            if ($sogksuscggsicmac === self::SLUGS) {
                goto kkicowiukwoykmms;
            }
            goto saigoogiqigowuqo;
            kgqqosqskwaaogyu:
            $igqsaukqcqscimok = self::waaisqccqacqeium($igqsaukqcqscimok);
            goto qokggikksgqmecam;
            qyyosiukaswscmuu:
            $ksaameoqigiaoigg[$ymqmyyeuycgmigyo] = $igqsaukqcqscimok;
            goto gqeeomoukqkowycw;
            uumasiqguewuwcaa:
            if ($sogksuscggsicmac === self::LABELS) {
                goto ccgsasimykggyess;
            }
            goto gkwycwegcuicsgas;
            aswkmiocmcogokyy:
            agwoisgcwqooygsg:
            goto qyyosiukaswscmuu;
            ekaasiygiigkuasg:
            $igqsaukqcqscimok = $igqsaukqcqscimok->label;
            goto aaqiykkkmossycmw;
            ycygwiuuauuwwmyc:
            kkicowiukwoykmms:
            goto ywimgeoyusmceogc;
            gqeeomoukqkowycw:
            eueuyagcqqwwsick:
            goto uussagskoysuoeiw;
            qokggikksgqmecam:
            if (!$igqsaukqcqscimok) {
                goto eueuyagcqqwwsick;
            }
            goto smiwewgysqykaqee;
            aaqiykkkmossycmw:
            goto agwoisgcwqooygsg;
            goto ycygwiuuauuwwmyc;
            saigoogiqigowuqo:
            goto agwoisgcwqooygsg;
            goto oeewoegiqgywwmos;
            ywimgeoyusmceogc:
            $igqsaukqcqscimok = ManipulateArray::get($igqsaukqcqscimok->rewrite, self::SLUG, $ymqmyyeuycgmigyo);
            goto aswkmiocmcogokyy;
            rkasqqqgemowweeg:
        }
        goto kcaciomiguuugugi;
        ugiegewmsumyuqmq:
        qsocqumaigsayksm:
        goto geiwkqgwawsmyeiw;
        wwkgimsumqsaicoy:
        $gqgemcmoicmgaqie = ManipulateFormat::omaawkkwwyesqwcc($gqgemcmoicmgaqie, ["\160\x75\142\x6c\x69\x63" => true, "\x5f\x62\x75\151\154\164\151\156" => false, "\x70\x75\x62\154\151\x63\154\171\137\161\x75\x65\162\x79\141\142\154\145" => true]);
        goto ugiegewmsumyuqmq;
        ikuuqaoiwigcmwyu:
        return $ksaameoqigiaoigg;
        goto amaoecqeywkkmyoi;
        ueocsmuykwyoywui:
        eywcgcyicisgcumk:
        goto kawkoccmuqqeamms;
        sqgkqqoeksyicmoa:
        $sogksuscggsicmac = ManipulateArray::get($ywmkwiwkosakssii, self::OUTPUT);
        goto mmgissacqioqksmk;
        kcaciomiguuugugi:
        csciwewamgcguguc:
        goto kwqoqgccuqgigkoc;
        uqoowswseqmmisei:
        if ($ooiewiwkegguusum) {
            goto mcyiwawwcsquwiqq;
        }
        goto aeamameocikekces;
        acmoiyiogowkkesw:
        esggoysyykycecyq:
        goto ocsyqkkqkwekgakm;
        kwqoqgccuqgigkoc:
        ugkgqeugmkumauos:
        goto ikuuqaoiwigcmwyu;
        eemuaaqoyiqiyyoe:
        $ksaameoqigiaoigg = $oammesyieqmwuwyi;
        goto gmwqisoikakuqicc;
        oouaueaaciqmoaek:
        cqycwggykmmyacuk:
        goto eqooqiomasygymwk;
        wceiwqiccssqgcuw:
        $yemgmmgogcwccuky = ManipulateArray::get($ywmkwiwkosakssii, self::EXCLUDE);
        goto ueoygowuiugooicc;
        aesusogymakeuios:
        if (in_array($sogksuscggsicmac, [self::OBJECT, self::NAMES])) {
            goto eywcgcyicisgcumk;
        }
        goto seqgigumouyguowy;
        kwsusuqioqiaokmk:
        goto qsocqumaigsayksm;
        goto mwsmaceeuacaoeas;
        mmgissacqioqksmk:
        $ooiewiwkegguusum = ManipulateArray::get($ywmkwiwkosakssii, self::INCLUDE);
        goto wceiwqiccssqgcuw;
        ucwuomcmcoqmyqwm:
        $oammesyieqmwuwyi = array_intersect_key($ooiewiwkegguusum, $oammesyieqmwuwyi);
        goto iomigqssyeeaqgsg;
        cuockkkkmamkuygc:
        if (!$ooiewiwkegguusum) {
            goto gcqmmuowwaseagoa;
        }
        goto cquyikuyaiskayos;
        cquyikuyaiskayos:
        $gqgemcmoicmgaqie = [];
        goto kwsusuqioqiaokmk;
        ocsyqkkqkwekgakm:
        $ksaameoqigiaoigg = [];
        goto wuucmmcggqqsmakc;
        iomigqssyeeaqgsg:
        goto esggoysyykycecyq;
        goto ogekauwggisguwkq;
        gmwqisoikakuqicc:
        goto ugkgqeugmkumauos;
        goto oouaueaaciqmoaek;
        wuucmmcggqqsmakc:
        if (in_array($sogksuscggsicmac, [self::OBJECT, self::LABELS, self::SLUGS])) {
            goto cqycwggykmmyacuk;
        }
        goto eemuaaqoyiqiyyoe;
        ogekauwggisguwkq:
        akkuiemqaogigaqa:
        goto uwyuiwkkeuwsykys;
        suqaqoaowamkiymi:
        goto esggoysyykycecyq;
        goto wccuioiewmeamewo;
        aeamameocikekces:
        if ($yemgmmgogcwccuky) {
            goto akkuiemqaogigaqa;
        }
        goto suqaqoaowamkiymi;
        seqgigumouyguowy:
        $aqykuigiuwmmcieu = self::OBJECT;
        goto ueocsmuykwyoywui;
        mwsmaceeuacaoeas:
        gcqmmuowwaseagoa:
        goto wwkgimsumqsaicoy;
        geiwkqgwawsmyeiw:
        $aqykuigiuwmmcieu = $sogksuscggsicmac;
        goto aesusogymakeuios;
        amaoecqeywkkmyoi:
    }
    
    public static function qcgakseyaikigqco($post = null)
    {
        return DecoratorPost::qcgakseyaikigqco(self::get($post));
    }
    
    public static function cekqoisoaceaqiam($post)
    {
        goto oyqsaukeioykugmm;
        qsqgsggawskeqauc:
        if (!($myyccyuumcscsagc == true)) {
            goto skyscuweykackoci;
        }
        goto kwigmoscuksaeaik;
        ksycyguoaoakaasa:
        return $auwuoyyagaiegwae;
        goto eqgewqgayssmyqyi;
        aookismekyuisiqy:
        
        array_push($auwuoyyagaiegwae, home_url("\57"));
        goto isawkmamaukaekcg;
        sqigokysuqqoyoqq:
        array_push($auwuoyyagaiegwae, $ucsmiamgwmayyoco);
        goto qacmciyceoyqmims;
        keqweiemkiakogck:
        if (!(is_string($ucsmiamgwmayyoco) && !empty($ucsmiamgwmayyoco) && DecoratorOption::get("\x73\x68\x6f\167\x5f\x6f\x6e\x5f\x66\x72\x6f\x6e\x74") == "\160\141\x67\x65")) {
            goto smqgoowsgakckqse;
        }
        goto sqigokysuqqoyoqq;
        iyqaossmgeskkcgg:
        foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) {
            goto weeeiiqqgqoymeke;
            sigseymecgiowiii:
            imsmuoawuiemiisk:
            goto uwkaawaqoswkcuye;
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
            uwkcasugwwwwmmqu:
            foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
                goto muisqceosooggyoy;
                ousiykwqkgeokoqs:
                woaewkuksuiogeoo:
                goto qcimcgcggicewoug;
                suusasmyiceigsyk:
                ksmsiiaeokcggegc:
                goto ousiykwqkgeokoqs;
                wmssywakgoiswqey:
                $weyoqgcesqgeusiu = ManipulateSetting::omkaowmygoqwsywq();
                goto siymkkcgeegouiuq;
                ycuamgwmgueemuaq:
                ugqqciuuwaioyowe:
                goto aigiscsuosewiuus;
                qcimcgcggicewoug:
                acoociuqgmymeggw:
                goto iqeuoqeeceiikmse;
                imyoymgguyuiksia:
                array_push($auwuoyyagaiegwae, $oaeeeywcmcskwwgy);
                goto ycuamgwmgueemuaq;
                msyksokkggaqasey:
                $ocqawgquwsqioses = ceil($gaeqamemwmwsyukm / $weyoqgcesqgeusiu);
                goto amgecmwokwwiiuac;
                wyuyokmygemgqsmk:
                if (!$voccgqswsiwauyow) {
                    goto acoociuqgmymeggw;
                }
                goto ycimqmmmgskimkgi;
                asmoomkuqyqqywkk:
                goto scywsowkeyyssgqo;
                goto suusasmyiceigsyk;
                gcywkgcegesysuoy:
                scywsowkeyyssgqo:
                goto agqsiuycgsaoescw;
                aigiscsuosewiuus:
                $ciyackuwsqkoqese++;
                goto asmoomkuqyqqywkk;
                wgwsicukewmsscec:
                $ciyackuwsqkoqese = 2;
                goto gcywkgcegesysuoy;
                muisqceosooggyoy:
                $voccgqswsiwauyow = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk);
                goto wyuyokmygemgqsmk;
                siymkkcgeegouiuq:
                if (!$weyoqgcesqgeusiu) {
                    goto woaewkuksuiogeoo;
                }
                goto kcgismqksoywmcea;
                iqeuoqeeceiikmse:
                qqewuuoigkoeeocq:
                goto ksukaiqewqogiqwu;
                agqsiuycgsaoescw:
                if (!($ciyackuwsqkoqese <= $giqggecqqikcysgq)) {
                    goto ksmsiiaeokcggegc;
                }
                goto wgceoaueoiiwwuum;
                wgceoaueoiiwwuum:
                $oaeeeywcmcskwwgy = $voccgqswsiwauyow . "\x70\x61\x67\x65\x2f" . user_trailingslashit($ciyackuwsqkoqese);
                goto imyoymgguyuiksia;
                ycimqmmmgskimkgi:
                array_push($auwuoyyagaiegwae, $voccgqswsiwauyow);
                goto wmssywakgoiswqey;
                amgecmwokwwiiuac:
                $giqggecqqikcysgq = min($ocqawgquwsqioses, 10);
                goto wgwsicukewmsscec;
                kcgismqksoywmcea:
                $gaeqamemwmwsyukm = $iwewcwusemqaiggk->count;
                goto msyksokkggaqasey;
                ksukaiqewqogiqwu:
            }
            goto sigseymecgiowiii;
            eguuyyiaceyocoge:
        }
        goto gkweycueymqasawm;
        euceooqmeegmumya:
        $qscaoekmoooeuyqg = self::mguqscccckuywsya($post);
        goto igkuwcieaaaimceu;
        qacmciyceoyqmims:
        smqgoowsgakckqse:
        goto ksycyguoaoakaasa;
        isawkmamaukaekcg:
        $ucsmiamgwmayyoco = ManipulatePage::symuoymymumgwkaw();
        goto keqweiemkiakogck;
        kwigmoscuksaeaik:
        array_push($auwuoyyagaiegwae, $myyccyuumcscsagc, get_post_type_archive_feed_link($sqeykgyoooqysmca));
        goto ieyqmiueyikwcwso;
        wwuyacuysiocqcwq:
        array_push($auwuoyyagaiegwae, $gwiqqkoakiiquksg, $gwiqqkoakiiquksg . "\146\x65\x65\x64\x2f");
        goto cgwwckgiugakqowu;
        eqooeogyogusoyci:
        
        if (!(self::ucwmcwqmqwaymkkc($post) == "\164\162\141\x73\150")) {
            goto kyouiqwywyqgkuso;
        }
        goto awcgaimyecemucay;
        gkweycueymqasawm:
        oymoaaossqyocmue:
        goto euceooqmeegmumya;
        meeceoqcuuasiiio:
        $post = self::get($post);
        goto iayksyuawioekakq;
        igkuwcieaaaimceu:
        
        array_push($auwuoyyagaiegwae, DecoratorAuthor::mkaiaewoyaimieqg($qscaoekmoooeuyqg), get_author_feed_link($qscaoekmoooeuyqg));
        goto imgkgmwywoyggiiy;
        uesmmkgaqoqmaiik:
        
        array_push($auwuoyyagaiegwae, self::ycqquoiyyuesegsy($post));
        goto wequuyiayswgoosg;
        awcgaimyecemucay:
        $gwiqqkoakiiquksg = self::ycqquoiyyuesegsy($post);
        goto cymkauiwaemgisae;
        oyqsaukeioykugmm:
        $auwuoyyagaiegwae = [];
        goto meeceoqcuuasiiio;
        ieyqmiueyikwcwso:
        skyscuweykackoci:
        goto eqooeogyogusoyci;
        imgkgmwywoyggiiy:
        
        $myyccyuumcscsagc = self::mqgeysameoesmuqw($sqeykgyoooqysmca);
        goto qsqgsggawskeqauc;
        cgwwckgiugakqowu:
        kyouiqwywyqgkuso:
        goto aookismekyuisiqy;
        iayksyuawioekakq:
        $sqeykgyoooqysmca = self::gueasuouwqysmomu($post);
        goto uesmmkgaqoqmaiik;
        wequuyiayswgoosg:
        
        $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas($sqeykgyoooqysmca);
        goto iyqaossmgeskkcgg;
        cymkauiwaemgisae:
        $gwiqqkoakiiquksg = str_replace("\x5f\x5f\164\162\141\163\x68\145\x64", '', $gwiqqkoakiiquksg);
        goto wwuyacuysiocqcwq;
        eqgewqgayssmyqyi:
    }
    
    public static function keeogscqcgsequyc($useksmwkuswkwcqg)
    {
        goto qeeiayaggickmsem;
        qeeiayaggickmsem:
        $wkaqekwwgqsqwcoi = '';
        goto ygyikqcaweccikoy;
        wsocqyukguoqmoou:
        $wkaqekwwgqsqwcoi = "\141\144\155\x69\x6e\x2d{$useksmwkuswkwcqg}";
        goto emwuosqcciqgwuec;
        siikoyaookakcsya:
        $useksmwkuswkwcqg = $mksyucucyswaukig->name;
        goto akiaoyqwwgyogmwa;
        ygyikqcaweccikoy:
        $mksyucucyswaukig = self::waaisqccqacqeium($useksmwkuswkwcqg);
        goto oaquckygauqeycue;
        mygoemwmmmmeswoy:
        if ($wkaqekwwgqsqwcoi) {
            goto uogugagqqgaumeui;
        }
        goto wsocqyukguoqmoou;
        emwuosqcciqgwuec:
        uogugagqqgaumeui:
        goto daaaoeseaeakowis;
        daaaoeseaeakowis:
        return $wkaqekwwgqsqwcoi;
        goto mqqqskweuccusqsg;
        akiaoyqwwgyogmwa:
        ikggeywmqciukyuy:
        goto mygoemwmmmmeswoy;
        oaquckygauqeycue:
        if (!$mksyucucyswaukig) {
            goto ikggeywmqciukyuy;
        }
        goto ouuuiwcmacckekgw;
        ouuuiwcmacckekgw:
        $wkaqekwwgqsqwcoi = $mksyucucyswaukig->menu_icon;
        goto siikoyaookakcsya;
        mqqqskweuccusqsg:
    }
    
    public static function uikgwcuascgeissw($post = null)
    {
        goto usymiywgyuqgsmgo;
        gogeigmcqokqqiwc:
        if (!$useksmwkuswkwcqg) {
            goto egssagkqigycaowo;
        }
        goto yieyamwmiyceaysm;
        wqsikiwycqwksiwy:
        return sprintf("\x25\163\x20\55\40\x25\x73", $meqocwsecsywiiqs, $useksmwkuswkwcqg);
        goto asqikgqmeqysakky;
        mweuowgyuuomycug:
        $meqocwsecsywiiqs = DecoratorPost::qcgakseyaikigqco($post);
        goto iuagymwagckgasgy;
        qqsoyoesgkwakcwc:
        egssagkqigycaowo:
        goto wqsikiwycqwksiwy;
        iuagymwagckgasgy:
        $useksmwkuswkwcqg = self::gueasuouwqysmomu($post, true);
        goto gogeigmcqokqqiwc;
        yieyamwmiyceaysm:
        $useksmwkuswkwcqg = ManipulateArray::qamwegcyimgcqksw($useksmwkuswkwcqg, "\154\x61\142\145\x6c\163\56\163\151\x6e\147\165\154\141\162\x5f\x6e\x61\155\x65");
        goto qqsoyoesgkwakcwc;
        usymiywgyuqgsmgo:
        $post = self::get($post);
        goto mweuowgyuuomycug;
        asqikgqmeqysakky:
    }
    
    public static function wieguyuwywywksac($ywmkwiwkosakssii = [])
    {
        return wp_get_archives(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x65\x63\150\157" => false, self::TYPE => "\155\157\156\x74\x68\154\171", self::ORDER => "\x44\105\123\x43"]));
    }
    
    public static function ccwssmqgyasqqcoc($post, $sqeykgyoooqysmca) : bool
    {
        $post = self::get($post, self::OBJECT, true);
        return $post && self::gueasuouwqysmomu($post) == $sqeykgyoooqysmca;
    }
    
    public static function qeosassuekcieuuy($sqeykgyoooqysmca = null) : bool
    {
        goto fgacmumaqamuggaw;
        fgacmumaqamuggaw:
        $cekoogweeooasayu = false;
        goto umugkkiiiakomyae;
        wsagsuekaoamamwq:
        $cekoogweeooasayu = $sqeykgyoooqysmca->public === true;
        goto gqkckwmwucyicaom;
        ywkowqwiseoaosue:
        return $cekoogweeooasayu;
        goto giismoqygwoeiucm;
        gqkckwmwucyicaom:
        yyckkkysceayoacc:
        goto ywkowqwiseoaosue;
        ssseiiwsmacscqkk:
        if (!$sqeykgyoooqysmca) {
            goto yyckkkysceayoacc;
        }
        goto wsagsuekaoamamwq;
        umugkkiiiakomyae:
        $sqeykgyoooqysmca = self::waaisqccqacqeium($sqeykgyoooqysmca);
        goto ssseiiwsmacscqkk;
        giismoqygwoeiucm:
    }
    
    public static function qkweigiqsaaigqau($post = null) : ?string
    {
        goto sgwggiwoawyysamo;
        zoeammwiceimsmea:
        $qscaoekmoooeuyqg = self::mguqscccckuywsya($post);
        goto gawoykaumugqiiiw;
        oeyaaksqsgmecwmm:
        usayuwaoekoyeigw:
        goto qyowaswasswaayey;
        oeiyuauoweasyegq:
        $eeamcawaiqocomwy = DecoratorAuthor::mkaiaewoyaimieqg($qscaoekmoooeuyqg);
        goto oeyaaksqsgmecwmm;
        gawoykaumugqiiiw:
        if (!$qscaoekmoooeuyqg) {
            goto usayuwaoekoyeigw;
        }
        goto oeiyuauoweasyegq;
        sgwggiwoawyysamo:
        $eeamcawaiqocomwy = null;
        goto zoeammwiceimsmea;
        qyowaswasswaayey:
        return $eeamcawaiqocomwy;
        goto iqayckmwkoaoyusg;
        iqayckmwkoaoyusg:
    }
    
    public static function wsiiswmaagmyiaiw($post = null)
    {
        return DecoratorPost::wsiiswmaagmyiaiw(self::mwikyscisascoeea($post));
    }
    
    public static function mqgeysameoesmuqw($useksmwkuswkwcqg) : string
    {
        goto qckuswayaoymsksk;
        eukasuwuekwugokm:
        cusamwcumoyaccig:
        goto iwgymiqeamaeqqom;
        iwgymiqeamaeqqom:
        return trailingslashit(DecoratorPost::mqgeysameoesmuqw($useksmwkuswkwcqg));
        goto aamackwoccmccyks;
        qckuswayaoymsksk:
        if (!$useksmwkuswkwcqg instanceof WP_Post_Type) {
            goto cusamwcumoyaccig;
        }
        goto egoyusisgekiqoye;
        egoyusisgekiqoye:
        $useksmwkuswkwcqg = $useksmwkuswkwcqg->name;
        goto eukasuwuekwugokm;
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
        eqyccakwmkgmsyik:
        $ywmkwiwkosakssii[self::POST_TYPE] = $useksmwkuswkwcqg;
        goto mmmaqiceqwswaica;
        sysqgmqceqakymga:
        $ywmkwiwkosakssii["\160\157\163\164\137\141\165\164\150\x6f\x72"] = ManipulateUser::mwikyscisascoeea();
        goto ckoqcgskyowkgwqc;
        ukamoqcwkkacmkuo:
        $wyoiwuqokyeeuguk = self::ciugwooasaqcywas($useksmwkuswkwcqg, [self::NAME => $ywmkwiwkosakssii["\x70\157\x73\x74\137\156\141\155\145"], self::POSTS_PER_PAGE => 1]);
        goto osisauycomkeaisq;
        ckoqcgskyowkgwqc:
        $sogksuscggsicmac = DecoratorPost::insert($ywmkwiwkosakssii);
        goto imkggwewaoaeaaaa;
        imkggwewaoaeaaaa:
        meamgyseweakcwms:
        goto kegkgqcaoogqqwuy;
        mmmaqiceqwswaica:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\x6f\163\164\137\x74\151\164\154\x65" => '', "\160\157\x73\164\137\156\x61\155\x65" => '', "\x70\157\x73\x74\137\x63\x6f\x6e\164\x65\156\164" => '', "\160\x6f\163\x74\137\163\164\x61\x74\x75\163" => '']);
        goto ukamoqcwkkacmkuo;
        kegkgqcaoogqqwuy:
        return $sogksuscggsicmac;
        goto ueyscskqyqmwgyqq;
        ueyscskqyqmwgyqq:
    }
    
    public static function sqyyemqmmgmyiaam($sciomagaqmgggsiu = [])
    {
        return DecoratorQuery::moegwqkekcawsggs($sciomagaqmgggsiu);
    }
    
    public static function waoeigwigksoikgu($post, $ywmkwiwkosakssii = [])
    {
        $ywmkwiwkosakssii["\x70\157\163\x74\x5f\151\144"] = self::mwikyscisascoeea($post);
        return ManipulateComment::ciugwooasaqcywas($ywmkwiwkosakssii);
    }
    
    public static function iuaacwwygkmcoeiy($qwcmueausqgiwigy, $gqgemcmoicmgaqie)
    {
        goto xeeuigemugoamqao;
        sqmqymmecmqykiqs:
        $aaycmcgqqqsysccs = !empty($qqmmggwcsmymegca["\x65\x78\141\143\164"]) ? '' : "\45";
        goto youwoggqmcuggmyy;
        qqmeumqiyqkoycww:
        qgsqycogyicuiioq:
        goto eewcoeiokouymaic;
        uwmckciqcuwoyemm:
        global $wpdb;
        goto easusuoaqiwgcuui;
        iecocimeqmmockam:
        return $qwcmueausqgiwigy;
        goto ceogiuqcsqkmysga;
        gmycyuqoscismuig:
        foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
            $qwcmueausqgiwigy[] = $wpdb->prepare("{$wpdb->posts}\x2e\160\157\163\x74\137\164\151\164\154\x65\40\x4c\x49\x4b\x45\x20\45\163", $aaycmcgqqqsysccs . $wpdb->esc_like($iwewcwusemqaiggk) . $aaycmcgqqqsysccs);
            eycmewmysuymswuk:
        }
        goto qqmeumqiyqkoycww;
        easusuoaqiwgcuui:
        $qqmmggwcsmymegca = $uyuaosigqymaqsaa;
        goto sqmqymmecmqykiqs;
        gacwuumiuewqgeim:
        wcykiuessuoeagki:
        goto iecocimeqmmockam;
        youwoggqmcuggmyy:
        $qwcmueausqgiwigy = [];
        goto gmycyuqoscismuig;
        ekayucummqeqmwgc:
        sccqosiycoaosikm:
        goto suicyusecackqaii;
        suicyusecackqaii:
        $qwcmueausqgiwigy = "\40\101\x4e\104\x20" . implode("\40\x41\116\x44\40", $qwcmueausqgiwigy);
        goto gacwuumiuewqgeim;
        ocuocqiyuecksmsi:
        $qwcmueausqgiwigy[] = "{$wpdb->posts}\x2e\x70\x6f\x73\164\x5f\160\x61\x73\163\x77\157\x72\144\40\x3d\40\x27\47";
        goto ekayucummqeqmwgc;
        ameoiemwymmeomqq:
        if (!($uyuaosigqymaqsaa && $qwcmueausqgiwigy)) {
            goto wcykiuessuoeagki;
        }
        goto uwmckciqcuwoyemm;
        xeeuigemugoamqao:
        $uyuaosigqymaqsaa = ManipulateArray::get($gqgemcmoicmgaqie->query_vars, "\x73\145\x61\x72\143\x68\x5f\164\x65\162\155\x73");
        goto ameoiemwymmeomqq;
        eewcoeiokouymaic:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto sccqosiycoaosikm;
        }
        goto ocuocqiyuecksmsi;
        ceogiuqcsqkmysga:
    }
    
    public static function waaisqccqacqeium($useksmwkuswkwcqg = null) : ?WP_Post_Type
    {
        goto syuoooyaackuoues;
        asgkgomkmykaqeac:
        uqowsoiyaummsyoy:
        goto ukaocimwskuqgqso;
        oayuucaeciioiwqw:
        iaqwyagqyokkmeoo:
        goto gqkuecyoaomqacgk;
        syuoooyaackuoues:
        if ($useksmwkuswkwcqg instanceof WP_Post_Type) {
            goto uqowsoiyaummsyoy;
        }
        goto kusoiyymwykqsgue;
        kusoiyymwykqsgue:
        if ($useksmwkuswkwcqg) {
            goto iaqwyagqyokkmeoo;
        }
        goto agksaoiusscawcwc;
        ukaocimwskuqgqso:
        return $useksmwkuswkwcqg;
        goto quwqksyoiigamkys;
        gqkuecyoaomqacgk:
        $useksmwkuswkwcqg = DecoratorPost::waaisqccqacqeium($useksmwkuswkwcqg);
        goto asgkgomkmykaqeac;
        agksaoiusscawcwc:
        $useksmwkuswkwcqg = self::gueasuouwqysmomu();
        goto oayuucaeciioiwqw;
        quwqksyoiigamkys:
    }
    
    public static function mwikyscisascoeea($post = null, $cwwowqyuwccuykom = false)
    {
        goto wwcimuywiwqwagoq;
        iuaikkckoskwuwyw:
        if (!(!$post && !$cwwowqyuwccuykom)) {
            goto ikqwwkscesmugsuq;
        }
        goto oksiwycekgweuyoc;
        wwcimuywiwqwagoq:
        if (is_numeric($post)) {
            goto mioiyawikawqyaay;
        }
        goto qycekaqowowqaosm;
        swqycaokmkkykkea:
        return $post;
        goto aoycieuggikeomis;
        gwimqwmmuacwkmou:
        goto kyicaqywsmawwwuo;
        goto kswkocesygkuqiiy;
        kwugcgwmcsoswees:
        $post = get_the_ID();
        goto gwimqwmmuacwkmou;
        wakcuqwemksmyeos:
        kyicaqywsmawwwuo:
        goto eqyykccckaqyikas;
        eqyykccckaqyikas:
        ikqwwkscesmugsuq:
        goto uwscoaaycokmqegk;
        oksiwycekgweuyoc:
        if (DecoratorQuery::seokosgecygsmqau()) {
            goto eqwmoigeokkskwuy;
        }
        goto kwugcgwmcsoswees;
        kswkocesygkuqiiy:
        eqwmoigeokkskwuy:
        goto kwiuwccmuwwwwcak;
        kwiuwccmuwwwwcak:
        $post = DecoratorQuery::keeuqgyooycqoygw();
        goto wakcuqwemksmyeos;
        qycekaqowowqaosm:
        $post = ManipulateArray::get($post, "\111\104");
        goto iuaikkckoskwuwyw;
        uwscoaaycokmqegk:
        mioiyawikawqyaay:
        goto swqycaokmkkykkea;
        aoycieuggikeomis:
    }
    
    public static function emcckouwaoassquc(array $sciomagaqmgggsiu = [])
    {
        goto oqcgimyqwmqgyygw;
        imsqyecesygwiwkk:
        return self::ciugwooasaqcywas($sciomagaqmgggsiu, ["\x70\x6f\163\164\x5f\163\164\x61\x74\165\163" => "\160\x75\142\x6c\151\x73\150", "\146\x69\145\154\144\163" => self::IDS]);
        goto yysqgqeoyckgmcsa;
        oqcgimyqwmqgyygw:
        if ($sciomagaqmgggsiu) {
            goto uwgksqcakaieyscy;
        }
        goto oeegykgsgkscwcio;
        qmgqguiisgckwocw:
        uwgksqcakaieyscy:
        goto imsqyecesygwiwkk;
        oeegykgsgkscwcio:
        $sciomagaqmgggsiu = self::mwoyqeeigwqoamiw();
        goto qmgqguiisgckwocw;
        yysqgqeoyckgmcsa:
    }
    
    public static function aqcogscycyycgkuq($post = null, $mgkceomocowocqyo = [])
    {
        return self::ygwimyogyaqgumam("\x70\157\x73\164\x5f\x6e\x61\155\x65", $post, $mgkceomocowocqyo);
    }
    
    public static function qkuksuwkueysueww(string $useksmwkuswkwcqg)
    {
        goto coaiaawqcaggmemg;
        cauamyimeqmgwick:
        $gaeqamemwmwsyukm = 0;
        goto ymiiukyiasogueiq;
        ymiiukyiasogueiq:
        try {
            $gaeqamemwmwsyukm = (int) $wpdb->get_var("\x53\105\x4c\105\x43\124\x20\x43\x4f\125\116\x54\x28\143\x6f\x6d\155\145\x6e\x74\x5f\x49\x44\51\12\x9\x9\x9\x9\11\x46\122\117\x4d\40{$wpdb->comments}\40\x57\110\105\122\105\40\143\x6f\x6d\155\145\156\x74\x5f\160\x6f\x73\164\137\x49\x44\40\x69\156\40\x28\12\11\x9\11\x9\x9\x53\x45\114\x45\x43\x54\x20\x49\x44\40\x46\122\117\115\40{$wpdb->posts}\x20\127\x48\105\122\x45\40\x70\157\x73\x74\137\164\171\160\x65\40\x3d\x20\x27{$useksmwkuswkwcqg}\47\12\x9\x9\x9\11\11\101\116\x44\40\x70\157\x73\x74\137\163\x74\x61\164\165\163\x20\x3d\40\47\x70\165\x62\x6c\x69\x73\150\x27\x29\x20\101\116\104\x20\x63\x6f\155\155\x65\x6e\x74\x5f\x61\x70\160\x72\x6f\166\145\x64\40\x3d\x20\47\x31\47");
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        goto qsweawwuowkoeemg;
        qsweawwuowkoeemg:
        return $gaeqamemwmwsyukm;
        goto wawiggqugqwwacgq;
        coaiaawqcaggmemg:
        global $wpdb;
        goto cauamyimeqmgwick;
        wawiggqugqwwacgq:
    }
    
    public static function ucwmcwqmqwaymkkc($post = null, $mgkceomocowocqyo = [])
    {
        return self::ygwimyogyaqgumam("\x70\x6f\x73\164\137\x73\x74\141\x74\165\x73", $post, $mgkceomocowocqyo);
    }
    
    public static function mguqscccckuywsya($post = null, $cwwowqyuwccuykom = false)
    {
        return self::ygwimyogyaqgumam("\160\157\163\x74\137\x61\165\x74\x68\157\162", self::mwikyscisascoeea($post, $cwwowqyuwccuykom));
    }
    
    public static function uiuwugwykqocmiec($post = null) : ?int
    {
        return DecoratorHook::sscegwueamckwmcy("\x67\x65\164\x5f\160\157\x73\x74\137\x77\x6f\x72\144\137\143\x6f\165\x6e\x74", 0, self::get($post));
    }
    
    public static function gsaceacmqiuqoouo($useksmwkuswkwcqg, $ymqmyyeuycgmigyo, $ywmkwiwkosakssii = [])
    {
        goto qwkwyciyyigugcms;
        ceqcqskmksiuosuy:
        $suuagcecoyuweoqk = self::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii);
        goto ygygqysoqeimimgm;
        ygygqysoqeimimgm:
        return $suuagcecoyuweoqk ? array_pop($suuagcecoyuweoqk) : '';
        goto wgyqskiikcoamceq;
        qwkwyciyyigugcms:
        $ywmkwiwkosakssii["\x6e\x61\x6d\x65"] = $ymqmyyeuycgmigyo;
        goto ceqcqskmksiuosuy;
        wgyqskiikcoamceq:
    }
    
    public static function owicscwgeuqcqaig($useksmwkuswkwcqg = "\160\x6f\163\x74", $ywmkwiwkosakssii = [])
    {
        goto uockmkmeymgyqsqi;
        sigisgiqiuiuqemc:
        $yiasugywggckywoa = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg);
        goto siiyycmowckwsemw;
        sgguaokgyweasccc:
        return new WP_Query($yiasugywggckywoa);
        goto gyuioyyowaiqcywy;
        wkkwgyuaqwiygawe:
        yoceycuiiwwmscci:
        goto uaeyogsicwkuwcak;
        uockmkmeymgyqsqi:
        $ycmguuqqaiisymgg = ["\156\165\x6d\x62\145\x72\x70\x6f\x73\x74\x73" => 5, "\143\141\164\145\147\x6f\x72\171" => 0, "\157\162\x64\x65\162\x62\171" => "\144\x61\164\x65", "\157\162\144\145\x72" => "\x44\x45\x53\x43", "\151\156\x63\154\x75\x64\145" => [], "\145\170\x63\154\165\x64\145" => [], "\155\x65\x74\x61\x5f\153\x65\x79" => '', "\x6d\x65\164\x61\137\x76\x61\154\165\145" => '', "\x70\x6f\x73\164\x5f\164\x79\160\x65" => $useksmwkuswkwcqg, "\163\165\x70\160\162\x65\163\163\x5f\146\151\x6c\164\145\x72\x73" => true];
        goto sigisgiqiuiuqemc;
        iimqqykwwmqeukai:
        $yiasugywggckywoa["\160\157\x73\x74\137\137\151\x6e"] = $egekuwigiusmwiek;
        goto qsaagygqqsmgiesk;
        ikwwiueqmmkayyce:
        $yiasugywggckywoa["\x70\x6f\x73\x74\163\137\160\145\x72\137\x70\141\147\145"] = $yiasugywggckywoa["\x6e\165\x6d\142\145\162\x70\157\x73\x74\x73"];
        goto iwcwuugoguscgqye;
        qymkekiqwouwaoos:
        wimqsusyesasaism:
        goto eceowukgiumqosom;
        ckqgkowqkggscuoi:
        $yiasugywggckywoa["\x63\141\164"] = $yiasugywggckywoa["\x63\x61\164\145\147\x6f\162\171"];
        goto qowqokqkiweosuwa;
        omcseuaowsucussk:
        $yiasugywggckywoa["\160\x6f\163\164\x73\137\160\x65\x72\x5f\160\141\x67\x65"] = count($egekuwigiusmwiek);
        goto iimqqykwwmqeukai;
        qowqokqkiweosuwa:
        mmgsqoiukqkyiayw:
        goto qucmewyuwkkwsseo;
        uaeyogsicwkuwcak:
        if (!(!empty($yiasugywggckywoa["\x6e\x75\x6d\x62\x65\x72\160\157\163\164\163"]) && empty($yiasugywggckywoa["\160\x6f\163\164\163\137\x70\145\x72\x5f\160\x61\147\145"]))) {
            goto xeyusieocqgkowca;
        }
        goto ikwwiueqmmkayyce;
        kocoameeyqygkwok:
        if (!empty($yiasugywggckywoa["\x65\x78\x63\x6c\165\144\145"])) {
            goto wimqsusyesasaism;
        }
        goto osgkqqqqimmwsmsi;
        okeewwyoqawamsoa:
        $yiasugywggckywoa["\x6e\x6f\137\146\x6f\x75\x6e\x64\137\x72\x6f\x77\163"] = true;
        goto sgguaokgyweasccc;
        megauiwcsiuuiquk:
        kmocumwwsgkgeqay:
        goto zkuyggayyoqeeqek;
        siiyycmowckwsemw:
        if (!empty($yiasugywggckywoa["\160\157\x73\x74\137\163\x74\141\164\165\x73"])) {
            goto yoceycuiiwwmscci;
        }
        goto aecweaquqmiiimsc;
        qucmewyuwkkwsseo:
        if (!empty($yiasugywggckywoa["\151\x6e\x63\154\x75\144\145"])) {
            goto kmocumwwsgkgeqay;
        }
        goto kocoameeyqygkwok;
        qsaagygqqsmgiesk:
        goto qeyuquwgysuucygo;
        goto qymkekiqwouwaoos;
        aecweaquqmiiimsc:
        $yiasugywggckywoa["\160\157\x73\x74\x5f\163\x74\141\x74\x75\163"] = "\x61\164\164\141\143\150\155\x65\156\164" === $yiasugywggckywoa["\160\x6f\x73\x74\137\164\x79\160\145"] ? "\151\156\150\145\x72\151\x74" : "\160\x75\x62\x6c\x69\x73\150";
        goto wkkwgyuaqwiygawe;
        eceowukgiumqosom:
        $yiasugywggckywoa["\160\157\163\164\137\x5f\156\157\164\137\x69\156"] = wp_parse_id_list($yiasugywggckywoa["\145\170\x63\x6c\x75\x64\x65"]);
        goto wywyyuawikmwceym;
        eomwsawiqyuyiiiw:
        $yiasugywggckywoa["\151\147\156\x6f\162\x65\x5f\163\x74\151\143\x6b\x79\x5f\160\x6f\x73\164\x73"] = true;
        goto okeewwyoqawamsoa;
        zkuyggayyoqeeqek:
        $egekuwigiusmwiek = wp_parse_id_list($yiasugywggckywoa["\151\x6e\143\x6c\165\x64\145"]);
        goto omcseuaowsucussk;
        iwcwuugoguscgqye:
        xeyusieocqgkowca:
        goto kymkyymiquekuscq;
        kymkyymiquekuscq:
        if (empty($yiasugywggckywoa["\143\x61\164\145\147\157\x72\171"])) {
            goto mmgsqoiukqkyiayw;
        }
        goto ckqgkowqkggscuoi;
        osgkqqqqimmwsmsi:
        goto qeyuquwgysuucygo;
        goto megauiwcsiuuiquk;
        wywyyuawikmwceym:
        qeyuquwgysuucygo:
        goto eomwsawiqyuyiiiw;
        gyuioyyowaiqcywy:
    }
    
    public static function weescwwgqgiyumyw($post, $seyqqsmuaiegkeeq, $ywmkwiwkosakssii = [])
    {
        goto cyamaucweckqmscc;
        yucmskwuguqgqimc:
        gcaaimgqweguwksg:
        goto eeieegmqysegumei;
        iiukckigywisaego:
        $uyuaosigqymaqsaa = [];
        goto yucmskwuguqgqimc;
        cyamaucweckqmscc:
        $uyuaosigqymaqsaa = DecoratorPost::weescwwgqgiyumyw(self::mwikyscisascoeea($post), $seyqqsmuaiegkeeq, $ywmkwiwkosakssii);
        goto ssiwoquqiiuysuma;
        ssiwoquqiiuysuma:
        if (!(!is_array($uyuaosigqymaqsaa) || is_wp_error($uyuaosigqymaqsaa))) {
            goto gcaaimgqweguwksg;
        }
        goto iiukckigywisaego;
        eeieegmqysegumei:
        return $uyuaosigqymaqsaa;
        goto usyyyguieaqqyswa;
        usyyyguieaqqyswa:
    }
    
    public static function ekauksssqmmykouq($post = null, $wwgucssaecqekuek = [])
    {
        goto smsymmwykgkakeqk;
        aeaqgqqqowqykgcc:
        return $qscaoekmoooeuyqg;
        goto iycimwiaauksigiw;
        agauowggkqsoyqiq:
        $qscaoekmoooeuyqg = ManipulateHTML::uuccukgasskgimsq("\141", $wwgucssaecqekuek, $ymqmyyeuycgmigyo);
        goto okyuswywywsaeias;
        smsymmwykgkakeqk:
        $qscaoekmoooeuyqg = self::qkweigiqsaaigqau($post);
        goto mgywqmgswkeyucaq;
        mgywqmgswkeyucaq:
        if (!$qscaoekmoooeuyqg) {
            goto ousiqsmccumayaes;
        }
        goto mqkwmkuieegmucmg;
        okyuswywywsaeias:
        ousiqsmccumayaes:
        goto aeaqgqqqowqykgcc;
        ugaowwakggeccsic:
        $ymqmyyeuycgmigyo = DecoratorAuthor::igawqaomowicuayw("\144\151\x73\x70\154\x61\171\137\156\141\x6d\145", self::mguqscccckuywsya($post));
        goto agauowggkqsoyqiq;
        mqkwmkuieegmucmg:
        $wwgucssaecqekuek["\x68\162\145\x66"] = $qscaoekmoooeuyqg;
        goto ugaowwakggeccsic;
        iycimwiaauksigiw:
    }
    
    public static function gueasuouwqysmomu($post = null, $awqscowmskeuymeu = false)
    {
        goto aiaiswgwmcguoues;
        wcuuyecsiamsaqqy:
        cccgemwsykwgemeg:
        goto iimwiesgggauwcqk;
        wioicqyeyqmsckwg:
        $useksmwkuswkwcqg = ManipulateServer::get("\x70\x6f\x73\164\137\x74\171\x70\x65");
        goto iiysucwqgweammss;
        seggcuqcuiaegeya:
        oieoyiowucgkouoq:
        goto ucouymumcuosygii;
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
        iimwiesgggauwcqk:
        if (!(is_array($post) || $post instanceof WP_Post)) {
            goto cyomqwmieugiasem;
        }
        goto gomiiockquaqsyuo;
        qgyqamakooyqciyo:
        if ($useksmwkuswkwcqg) {
            goto yuycmoyawueickya;
        }
        goto wioicqyeyqmsckwg;
        gomiiockquaqsyuo:
        $useksmwkuswkwcqg = ManipulateArray::get($post, "\160\x6f\163\x74\x5f\x74\x79\x70\x65");
        goto ciqqeouuygcaiiiq;
        mwuisiuasugcaywu:
        if (!is_numeric($post)) {
            goto cccgemwsykwgemeg;
        }
        goto asckqiuugiguuiwe;
        ucouymumcuosygii:
        return $useksmwkuswkwcqg;
        goto woquimckgiecokuo;
        gioogyikawiiiyqq:
        $useksmwkuswkwcqg = self::waaisqccqacqeium($useksmwkuswkwcqg);
        goto seggcuqcuiaegeya;
        ciqqeouuygcaiiiq:
        cyomqwmieugiasem:
        goto qgyqamakooyqciyo;
        asckqiuugiguuiwe:
        $post = self::get($post);
        goto wcuuyecsiamsaqqy;
        woquimckgiecokuo:
    }
    
    public static function gamoemyysmgugccu($post = null, $iueymcwwscwqkiyq = "\x61\x6c\154")
    {
        return self::ymgsgecsiqeegseg($post, $iueymcwwscwqkiyq) > 0;
    }
    
    public static function wsqeykgqiemswysa($sqeykgyoooqysmca, $iueymcwwscwqkiyq = "\x70\x75\x62\154\151\163\x68", $yiyimoacecwoqeko = '')
    {
        return ManipulateArray::get(wp_count_posts($sqeykgyoooqysmca, $yiyimoacecwoqeko), $iueymcwwscwqkiyq);
    }
    
    public static function igkcwemyysqkwuuy($meqocwsecsywiiqs, $useksmwkuswkwcqg, $ywmkwiwkosakssii = [])
    {
        goto cqmkeyweesgwycgy;
        cqmkeyweesgwycgy:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\157\x72\144\145\x72" => "\101\123\x43", "\x70\157\x73\164\163\x5f\x70\145\x72\137\x70\141\147\x65" => 10]);
        goto gsoskqieucsesaks;
        emkqygwcsiyiykiw:
        $ywmkwiwkosakssii["\163\x75\x70\x70\x72\145\x73\x73\x5f\146\x69\154\164\x65\162\163"] = false;
        goto yeuqcwawkauowkgu;
        yeuqcwawkauowkgu:
        gggayasokuomgeus:
        goto euuaeuyegkksasge;
        gsoskqieucsesaks:
        if (!(strlen($meqocwsecsywiiqs) > 1)) {
            goto gggayasokuomgeus;
        }
        goto guoyescsqcuuymku;
        euuaeuyegkksasge:
        DecoratorHook::cecaguuoecmccuse("\x70\157\x73\164\163\137\163\x65\x61\x72\x63\x68", [__CLASS__, "\x73\x65\141\162\143\150\102\171\124\151\164\154\x65"], 10, 2);
        goto akuskaiiaswmksko;
        akuskaiiaswmksko:
        $wyoiwuqokyeeuguk = self::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii);
        goto wmsigkymceakwywo;
        guoyescsqcuuymku:
        $ywmkwiwkosakssii["\x73"] = $meqocwsecsywiiqs;
        goto emkqygwcsiyiykiw;
        wmsigkymceakwywo:
        DecoratorHook::ggmgmqswqkgecosg("\x70\157\x73\164\163\137\x73\145\141\162\143\x68", [__CLASS__, "\x73\145\x61\162\x63\x68\x42\171\124\x69\164\154\x65"], 10);
        goto equokkeomguewmua;
        equokkeomguewmua:
        return $wyoiwuqokyeeuguk;
        goto cigaaqeauwccoiqa;
        cigaaqeauwccoiqa:
    }
    
    public static function ygwimyogyaqgumam($aiowsaccomcoikus, $post = null, $mgkceomocowocqyo = [])
    {
        return DecoratorPost::ygwimyogyaqgumam($aiowsaccomcoikus, self::mwikyscisascoeea($post), $mgkceomocowocqyo);
    }
    
    public static function kckogqkiycqeumoa($post, $kesssewsiegssiya, $qqgsimqiqyaugceg = true)
    {
        goto gacasmwcscckymwc;
        iccqsmwsmisaayam:
        $uyuaosigqymaqsaa = isset($uyuaosigqymaqsaa[0]) ? $uyuaosigqymaqsaa[0] : null;
        goto sqecccyugmaiuwsq;
        sqecccyugmaiuwsq:
        qwkoeagysgskmuyq:
        goto xocaameouysockim;
        keygywkiwuoagqsw:
        goto seqwmeeoiicciigo;
        goto hwiqmsqyyiscmeiu;
        eskmkqowoyogaoko:
        $uyuaosigqymaqsaa = null;
        goto keygywkiwuoagqsw;
        iwmassqyauymkwaa:
        if (!$qqgsimqiqyaugceg) {
            goto qwkoeagysgskmuyq;
        }
        goto iccqsmwsmisaayam;
        xocaameouysockim:
        seqwmeeoiicciigo:
        goto sycecywsiomgcuiq;
        gacasmwcscckymwc:
        $uyuaosigqymaqsaa = self::weescwwgqgiyumyw($post, $kesssewsiegssiya);
        goto koiimcuoyakqsuam;
        sycecywsiomgcuiq:
        return $uyuaosigqymaqsaa;
        goto yaswwoqemsqmawse;
        koiimcuoyakqsuam:
        if (is_array($uyuaosigqymaqsaa)) {
            goto mekmscssquqsgquc;
        }
        goto eskmkqowoyogaoko;
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
        vseyiyomcwkayoio:
        $iayakwckycsumkqa = DecoratorPost::masoymaamekuykso($post);
        goto kwgwkkkaagkkesik;
        aeesuccguagwomqw:
        $iayakwckycsumkqa = null;
        goto ogisaykaiaeuiika;
        cioomiusgwycykag:
        $post = self::get($post);
        goto aeesuccguagwomqw;
        ogisaykaiaeuiika:
        if (!(!$gioggcykgoikcwiy || DecoratorPost::seewsasmyoyciiee($post))) {
            goto icwuocgiukckmyyu;
        }
        goto vseyiyomcwkayoio;
        weyumyqgceqsimmq:
        return $iayakwckycsumkqa;
        goto mkiyekcyyukamwck;
        kwgwkkkaagkkesik:
        icwuocgiukckmyyu:
        goto weyumyqgceqsimmq;
        mkiyekcyyukamwck:
    }
    
    public static function cagmcswsqkwuasiy($sciomagaqmgggsiu = self::DEFAULT_POST_TYPES)
    {
        goto domskgkmquiwwqcg;
        ueeowwusmsueouao:
        $sogksuscggsicmac = true;
        goto uuauuoykcoseecuu;
        qqecycksisecgwiw:
        if (!(is_array($sciomagaqmgggsiu) && in_array($useksmwkuswkwcqg, $sciomagaqmgggsiu) || is_string($useksmwkuswkwcqg) && $useksmwkuswkwcqg == $sciomagaqmgggsiu)) {
            goto guwikcacqsmwkyya;
        }
        goto ueeowwusmsueouao;
        wgcewuoaksusicyi:
        return $sogksuscggsicmac;
        goto oeqsgusqqgoioqwu;
        domskgkmquiwwqcg:
        global $pagenow;
        goto seousiqwmmcaygac;
        seousiqwmmcaygac:
        $sogksuscggsicmac = false;
        goto ukqomyqaykkiygwu;
        ukqomyqaykkiygwu:
        if (!($pagenow == "\x65\x64\x69\x74\x2e\x70\x68\160" && is_admin())) {
            goto ueiqomqieicasmsi;
        }
        goto cqoeiqeeukaiioia;
        okwgeicyaawqyoye:
        ueiqomqieicasmsi:
        goto wgcewuoaksusicyi;
        uuauuoykcoseecuu:
        guwikcacqsmwkyya:
        goto okwgeicyaawqyoye;
        cqoeiqeeukaiioia:
        $useksmwkuswkwcqg = self::gueasuouwqysmomu();
        goto qqecycksisecgwiw;
        oeqsgusqqgoioqwu:
    }
    
    public static function ymgsgecsiqeegseg($post = null, $iueymcwwscwqkiyq = "\141\x70\160\162\157\166\x65\144")
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
        gqcsicosskykmgiu:
        goto bgsaeeicmsikiwgm;
        goto yagoqwkegiyqceoe;
        iaekkeskykqsyiim:
        bgsaeeicmsikiwgm:
        goto skuwwwayeyemggoe;
        siceqsgwyswyguog:
        $post = self::get($post);
        goto qmsmcsoqgumsigme;
        oywouymwcigkauye:
        $ewgwqamkygiqaawc = ManipulateArray::get($post, "\160\x6f\163\x74\x5f\143\157\x6e\164\145\x6e\x74");
        goto iaekkeskykqsyiim;
        yagoqwkegiyqceoe:
        ssqieyoogiwsyksk:
        goto oywouymwcigkauye;
        igegouiwyasqgwwc:
        wmwkgawmkmciaeoi:
        goto mamieseosscguoye;
        mamieseosscguoye:
        $ewgwqamkygiqaawc = DecoratorPost::souwykwwmyygqyqi($post);
        goto gqcsicosskykmgiu;
        uucqywaoqssqggug:
        if ($egkeamycaysqsoma) {
            goto wmwkgawmkmciaeoi;
        }
        goto kaaweieegskiqqgm;
        kgkweawaqmqomkuc:
        goto bgsaeeicmsikiwgm;
        goto igegouiwyasqgwwc;
        kaaweieegskiqqgm:
        if ($post) {
            goto ssqieyoogiwsyksk;
        }
        goto kgkweawaqmqomkuc;
        qmsmcsoqgumsigme:
        $ewgwqamkygiqaawc = '';
        goto uucqywaoqssqggug;
        skuwwwayeyemggoe:
        return $ewgwqamkygiqaawc;
        goto ieywgqsawwkgiamc;
        ieywgqsawwkgiamc:
    }
    
    public static function ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $post = null, $oyuqkqayqyqysyse = '')
    {
        return DecoratorPost::ksmqawcowkmegigw(self::mwikyscisascoeea($post), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $oyuqkqayqyqysyse);
    }
    
    public static function mmoaikqueyiwcesm($post, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii["\160\x6f\163\x74\137\x70\141\162\145\x6e\x74"] = self::mwikyscisascoeea($post);
        return self::ciugwooasaqcywas(DecoratorPost::gueasuouwqysmomu($post), $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
    
    public static function qmmimiesyoyuqeqo($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        goto iswuimkowigsiwmi;
        eyimaakssauckmgk:
        return $eyagosskwwmgwmog;
        goto ceoicyukguaouuwa;
        yysqwceyageaeieo:
        foreach ($eyagosskwwmgwmog as $omwmuycmeqcqokom) {
            $omwmuycmeqcqokom->children = self::mmoaikqueyiwcesm($omwmuycmeqcqokom, $ywmkwiwkosakssii);
            wwkeoqicoeqmsuui:
        }
        goto umuwmuiugqisoyek;
        umuwmuiugqisoyek:
        ygiwsaegqoeaocqi:
        goto eyimaakssauckmgk;
        iswuimkowigsiwmi:
        $eyagosskwwmgwmog = self::uswuayuaaosoksqg($useksmwkuswkwcqg, $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
        goto yysqwceyageaeieo;
        ceoicyukguaouuwa:
    }
    
    public static function ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        goto eoqgquwgcgkugouq;
        qgumkmmmeaoskamq:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg);
        goto makigymuacqucieo;
        wayoumqqasqeowsk:
        $sogksuscggsicmac = $wyoiwuqokyeeuguk;
        goto syauycikyosiscgs;
        iqiwskswayisages:
        ewmmuusmqgceimky:
        goto iqkgeamgsuwqkckg;
        uiyuycigkskokcco:
        eoiysyeyuwwugsee:
        goto suqyiooacuiiqcuk;
        wgiakoeckyswemak:
        ygeaissawcacmmyu:
        goto uiyuycigkskokcco;
        makigymuacqucieo:
        $ywmkwiwkosakssii = DecoratorHook::sscegwueamckwmcy("\x67\x65\x74\137\x70\x6f\x73\x74\x73\x5f\x61\x72\147\163", $ywmkwiwkosakssii);
        goto yygauekecaiessss;
        qaewuekauiwkuwoa:
        $ycmguuqqaiisymgg = [self::POST_TYPE => $useksmwkuswkwcqg, self::POSTS_PER_PAGE => -1];
        goto qgumkmmmeaoskamq;
        yygauekecaiessss:
        $wyoiwuqokyeeuguk = DecoratorPost::ciugwooasaqcywas($ywmkwiwkosakssii);
        goto faiesskquaeiqqom;
        syauycikyosiscgs:
        goto eoiysyeyuwwugsee;
        goto iqiwskswayisages;
        eoqgquwgcgkugouq:
        $sogksuscggsicmac = [];
        goto qaewuekauiwkuwoa;
        faiesskquaeiqqom:
        if ($aqykuigiuwmmcieu == self::LABELS) {
            goto ewmmuusmqgceimky;
        }
        goto wayoumqqasqeowsk;
        suqyiooacuiiqcuk:
        return $sogksuscggsicmac;
        goto iygakaaakekgyeqy;
        iqkgeamgsuwqkckg:
        foreach ($wyoiwuqokyeeuguk as $uusmaiomayssaecw => $post) {
            goto wecuakwyikeqwyac;
            miyyiuaokyesyygy:
            wmgqacaeeuokysey:
            goto iocmmwiqausgmkcu;
            sisumqgocskwyago:
            $sogksuscggsicmac[self::mwikyscisascoeea($post)] = $meqocwsecsywiiqs;
            goto miyyiuaokyesyygy;
            ukmmkgmcooowqksi:
            if (!$meqocwsecsywiiqs) {
                goto wmgqacaeeuokysey;
            }
            goto sisumqgocskwyago;
            iocmmwiqausgmkcu:
            ymgyewqwqmcukmyu:
            goto usuwmkwcsukckuee;
            wecuakwyikeqwyac:
            $meqocwsecsywiiqs = get_the_title($post);
            goto ukmmkgmcooowqksi;
            usuwmkwcsukckuee:
        }
        goto wgiakoeckyswemak;
        iygakaaakekgyeqy:
    }
    
    public static function uamasysiccecccmw($oiegiwogmwmawkeo = "\x70\x6f\163\164\55\164\x68\x75\155\x62\156\x61\151\154", $post = null)
    {
        $eeamcawaiqocomwy = DecoratorPost::uamasysiccecccmw(self::mwikyscisascoeea($post), $oiegiwogmwmawkeo);
        return (string) DecoratorHook::sscegwueamckwmcy("\160\157\x73\164\x5f\x74\x68\x75\155\142\156\141\x69\154\137\165\x72\x6c", $eeamcawaiqocomwy, $post, $oiegiwogmwmawkeo);
    }
    
    public static function ymuqsscwmcumcama($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::POST_TYPE => $useksmwkuswkwcqg, "\160\x6f\x73\x74\137\163\x74\141\164\165\x73" => "\x70\x75\x62\154\x69\163\x68"]);
        return DecoratorPost::ymuqsscwmcumcama($ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
    
    public static function squyiyimquqicqke($saqmwwmqiwmkiwaa = null, $post = null, $egkeamycaysqsoma = true)
    {
        goto giuwumskimssakwo;
        giuwumskimssakwo:
        $post = self::get($post);
        goto mumcqcssasmyqmca;
        aocacgkcisiuosug:
        $ocogsiouoiuuguym = DecoratorHook::sscegwueamckwmcy("\147\x65\x74\x5f\164\150\145\x5f\x64\141\164\145", $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $post);
        goto csmwsuakqgukaqkm;
        iiugkqmswuikwcuo:
        if (!$post) {
            goto yaioeuewuagwmaym;
        }
        goto sweyywawiwkgsqkw;
        aikomgoeseyekwqa:
        if (!$egkeamycaysqsoma) {
            goto suuocycsksmcsqsm;
        }
        goto aocacgkcisiuosug;
        wycsycuaymkqqgce:
        $saqmwwmqiwmkiwaa = ManipulateSetting::uyomwmskouyyqyyq();
        goto ggwgiusgggqqckqw;
        sckagcuweuycciog:
        yaioeuewuagwmaym:
        goto yimcyeuemqyssysu;
        mumcqcssasmyqmca:
        $ocogsiouoiuuguym = null;
        goto iiugkqmswuikwcuo;
        ggwgiusgggqqckqw:
        ewqwyuuyegqukcmw:
        goto ioecigquiawyecis;
        csmwsuakqgukaqkm:
        suuocycsksmcsqsm:
        goto sckagcuweuycciog;
        ioecigquiawyecis:
        $ocogsiouoiuuguym = DecoratorPost::kugamkssceycoyaq($saqmwwmqiwmkiwaa, false, $post);
        goto aikomgoeseyekwqa;
        yimcyeuemqyssysu:
        return $ocogsiouoiuuguym;
        goto towiyceuykgmeooc;
        sweyywawiwkgsqkw:
        if ($saqmwwmqiwmkiwaa) {
            goto ewqwyuuyegqukcmw;
        }
        goto wycsycuaymkqqgce;
        towiyceuykgmeooc:
    }
    
    public static function get($post = null, $aqykuigiuwmmcieu = self::OBJECT, $cwwowqyuwccuykom = false)
    {
        goto iyeukmoycqcoeoww;
        cgmkwykqsuikugio:
        if (!$post && $cwwowqyuwccuykom) {
            goto agmoeimoggkkmamk;
        }
        goto quwawmyimwumqiik;
        kemyesuyqgygsgmc:
        goto kqgkgyyskmmomkuy;
        goto yuaeosigaqocaswy;
        iyeukmoycqcoeoww:
        if ($post instanceof WP_Post) {
            goto mkmcaqquqsycicwk;
        }
        goto cgmkwykqsuikugio;
        yuaeosigaqocaswy:
        agmoeimoggkkmamk:
        goto agwwockuoekeayoe;
        quwawmyimwumqiik:
        if ($post) {
            goto ciusceaiyqsgwesy;
        }
        goto aoasseeyymigiuqg;
        qqcagaaisccuygwq:
        kqgkgyyskmmomkuy:
        goto maimcygiikgukege;
        agwwockuoekeayoe:
        $post = null;
        goto qqcagaaisccuygwq;
        gasqiqwuuokswuak:
        ciusceaiyqsgwesy:
        goto ieiwqquomwgcgasg;
        cecqqywgssugeikg:
        return $post;
        goto ogoigckgkacomgsw;
        maimcygiikgukege:
        mkmcaqquqsycicwk:
        goto cecqqywgssugeikg;
        ieiwqquomwgcgasg:
        $post = DecoratorPost::get($post, $aqykuigiuwmmcieu);
        goto kemyesuyqgygsgmc;
        aoasseeyymigiuqg:
        $post = ManipulateServer::get(self::POST);
        goto gasqiqwuuokswuak;
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
        asecysweauowukym:
        $migiiksoiymissge = DecoratorPost::ycqquoiyyuesegsy($post, $eoocgqsqmwuegiae);
        goto igawggssmuyywoiw;
        ckamssoyigceqkqe:
        goto aqqaecewqeqyecge;
        goto oigskyaeyywyscoi;
        kyycgosayogwiose:
        aqqaecewqeqyecge:
        goto uikosuscmyagkucg;
        aceokuucoumoawei:
        if ($post) {
            goto ogcucyqcaawqsikk;
        }
        goto ioaiogagwmswaiyu;
        uikosuscmyagkucg:
        return trailingslashit($migiiksoiymissge);
        goto cucceeyaayakweic;
        omsmasoumqusgusq:
        pgkmykoemkssyciw:
        goto keoqugaesaeocwky;
        igawggssmuyywoiw:
        goto aqqaecewqeqyecge;
        goto omsmasoumqusgusq;
        oigskyaeyywyscoi:
        ogcucyqcaawqsikk:
        goto asecysweauowukym;
        eaesqqacyqsmmasw:
        $migiiksoiymissge = '';
        goto aceokuucoumoawei;
        ioaiogagwmswaiyu:
        if (is_string($ccamueccusigaaio) && ManipulateValidation::wmcwegoisyeeosqu($ccamueccusigaaio)) {
            goto pgkmykoemkssyciw;
        }
        goto ckamssoyigceqkqe;
        keoqugaesaeocwky:
        $migiiksoiymissge = $ccamueccusigaaio;
        goto kyycgosayogwiose;
        ycyukikioeesmosk:
        $post = self::mwikyscisascoeea($ccamueccusigaaio, $cwwowqyuwccuykom);
        goto eaesqqacyqsmmasw;
        cucceeyaayakweic:
    }
    
    public static function uswuayuaaosoksqg($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii["\160\157\163\164\x5f\x70\141\162\145\x6e\x74"] = 0;
        return self::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
    
    public static function oukqamgqowciwoum($saqmwwmqiwmkiwaa = null, $post = null, $egkeamycaysqsoma = true)
    {
        goto mwgogaswksgaiggw;
        mwgogaswksgaiggw:
        $post = self::get($post);
        goto imkcoqicusaaieiq;
        imkcoqicusaaieiq:
        $ocogsiouoiuuguym = null;
        goto eiugaasyaiggaoem;
        eiugaasyaiggaoem:
        if (!$post) {
            goto uawiiskiyascymig;
        }
        goto oigewwwkwggioeom;
        iewuoiiumywkmwwi:
        $ocogsiouoiuuguym = DecoratorPost::kkkiiqssauymiqsk($saqmwwmqiwmkiwaa, false, $post);
        goto yiooaygkcosiouiq;
        gwciqqammeugmyic:
        $saqmwwmqiwmkiwaa = ManipulateSetting::uyomwmskouyyqyyq();
        goto koywwayicykawmsw;
        yiooaygkcosiouiq:
        if (!$egkeamycaysqsoma) {
            goto sgsowgqykyceieqs;
        }
        goto ikiqwwyuwiqkgoqq;
        igcogeumkiyaiekm:
        return $ocogsiouoiuuguym;
        goto moaekmimicakwisg;
        waqguwsseiamucog:
        uawiiskiyascymig:
        goto igcogeumkiyaiekm;
        oigewwwkwggioeom:
        if ($saqmwwmqiwmkiwaa) {
            goto oqigaksscaygqcyg;
        }
        goto gwciqqammeugmyic;
        ikiqwwyuwiqkgoqq:
        $ocogsiouoiuuguym = DecoratorHook::sscegwueamckwmcy("\147\x65\164\x5f\x74\150\x65\137\155\x6f\144\x69\x66\151\x65\144\137\x64\141\164\145", $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $post);
        goto qqyeoguyyawwacyi;
        koywwayicykawmsw:
        oqigaksscaygqcyg:
        goto iewuoiiumywkmwwi;
        qqyeoguyyawwacyi:
        sgsowgqykyceieqs:
        goto waqguwsseiamucog;
        moaekmimicakwisg:
    }
    
    public static function uqwgsuysegkweago($sciomagaqmgggsiu = self::DEFAULT_POST_TYPES, $ccamueccusigaaio = "\142\157\164\150")
    {
        goto oogauyisucksqwgq;
        qycyyqyaseuqsoss:
        ucwqokwamqeiyauo:
        goto wsokcmgygywqyuki;
        woysagioiaegygiw:
        cmgkyyywsqscoeia:
        goto uciwcwkusqqwicyi;
        qaaeckkicouagsiq:
        global $pagenow;
        goto wiwcgyekioquskkg;
        oogauyisucksqwgq:
        $sogksuscggsicmac = false;
        goto usukgagsmcsgayiq;
        qeiygiiuygamegkq:
        if (!(is_array($sciomagaqmgggsiu) && in_array($useksmwkuswkwcqg, $sciomagaqmgggsiu) || $useksmwkuswkwcqg === $sciomagaqmgggsiu)) {
            goto wkgossscggiwwgqi;
        }
        goto kwyosousqcwgcaqq;
        mwqksegiysmkmase:
        $sciomagaqmgggsiu = ManipulatePost::mwoyqeeigwqoamiw();
        goto euuweiukuiuwcuym;
        uciwcwkusqqwicyi:
        wkgossscggiwwgqi:
        goto qycyyqyaseuqsoss;
        kwyosousqcwgcaqq:
        switch ($ccamueccusigaaio) {
            case "\145\x64\x69\164":
                $sogksuscggsicmac = in_array($pagenow, ["\160\x6f\x73\164\x2e\x70\150\160"]);
                goto cmgkyyywsqscoeia;
            case "\156\145\167":
                $sogksuscggsicmac = in_array($pagenow, ["\x70\x6f\x73\164\55\156\x65\x77\56\160\150\160"]);
                goto cmgkyyywsqscoeia;
            default:
                $sogksuscggsicmac = in_array($pagenow, ["\160\157\163\164\56\160\150\160", "\160\157\x73\164\x2d\156\x65\x77\x2e\160\x68\160"]);
        }
        goto asayowukiisowcoo;
        euuweiukuiuwcuym:
        ouwsgqaiqguiomym:
        goto imscuiceoqcqeuec;
        imscuiceoqcqeuec:
        if (!(is_admin() && $sciomagaqmgggsiu)) {
            goto ucwqokwamqeiyauo;
        }
        goto qaaeckkicouagsiq;
        wsokcmgygywqyuki:
        return $sogksuscggsicmac;
        goto smaemsgsuyckcasg;
        asayowukiisowcoo:
        cwukciqgyiykkmme:
        goto woysagioiaegygiw;
        usukgagsmcsgayiq:
        if ($sciomagaqmgggsiu) {
            goto ouwsgqaiqguiomym;
        }
        goto mwqksegiysmkmase;
        wiwcgyekioquskkg:
        $useksmwkuswkwcqg = self::cwucesiiikgqsgui();
        goto qeiygiiuygamegkq;
        smaemsgsuyckcasg:
    }
    
    public static function qgisekcaywsmigga(string $useksmwkuswkwcqg, string $gwiwsycaaqgwmewg, $aucgaecqisksougg = null, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc(["\155\x65\164\141\137\x6b\x65\x79" => $gwiwsycaaqgwmewg, "\155\145\164\x61\x5f\x76\x61\x6c\165\145" => $aucgaecqisksougg, "\x70\x6f\x73\164\137\163\x74\x61\164\x75\163" => "\x61\156\171"], $ywmkwiwkosakssii);
        return self::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
}
