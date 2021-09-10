<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        kiaeuogcagqymoia:
        return $sqeykgyoooqysmca;
        goto ekieuqyaekgaekem;
        mgsqaweekeiqgcys:
        $sqeykgyoooqysmca = $typenow;
        goto ccyskouwcaewmmuq;
        swekqcymmemsckim:
        cwaaqwgckkmmuayw:
        goto mgsqaweekeiqgcys;
        ayocomqsygokygku:
        if ($sqeykgyoooqysmca) {
            goto yswsuyqqsygkqcgi;
        }
        goto cyweqwceuyeuqwiq;
        ccyskouwcaewmmuq:
        goto ooweqiekgaaqweig;
        goto kmgmsagugycgguso;
        qoukygmscqwwmeci:
        $sqeykgyoooqysmca = ManipulateArray::get($current_screen, self::POST_TYPE);
        goto cyoqykquycmuksqu;
        gokeooqgmyisigwu:
        yswsuyqqsygkqcgi:
        goto kiaeuogcagqymoia;
        owcyysasyeaaowwk:
        if ($sqeykgyoooqysmca) {
            goto eegacceeuuycmssm;
        }
        goto eiqwmksumaugsiue;
        cyweqwceuyeuqwiq:
        global $typenow, $current_screen;
        goto okwcqgkysyueokie;
        kmgmsagugycgguso:
        yemeacuywsiqecgm:
        goto qoukygmscqwwmeci;
        cyoqykquycmuksqu:
        ooweqiekgaaqweig:
        goto owcyysasyeaaowwk;
        maaqgkcmqkcguscg:
        $sqeykgyoooqysmca = self::gueasuouwqysmomu($post);
        goto mwkyqwwyuoquwycw;
        cagckkqacmeaemik:
        eegacceeuuycmssm:
        goto gokeooqgmyisigwu;
        qkccmuekscemyiqi:
        if (!(!$sqeykgyoooqysmca && $post)) {
            goto saaqoyeqicykmmuu;
        }
        goto maaqgkcmqkcguscg;
        imgcoqgqsgmwussc:
        $sqeykgyoooqysmca = ManipulateArray::get(self::get(), self::POST_TYPE);
        goto ayocomqsygokygku;
        ksewmguscaqkiiso:
        $post = ManipulateServer::ayueggmoqeeukqmq(self::POST);
        goto qkccmuekscemyiqi;
        qaugoawikwesmkqo:
        goto ooweqiekgaaqweig;
        goto swekqcymmemsckim;
        okwcqgkysyueokie:
        if ($typenow) {
            goto cwaaqwgckkmmuayw;
        }
        goto skgmwkqigcucecks;
        eiqwmksumaugsiue:
        $sqeykgyoooqysmca = ManipulateServer::ayueggmoqeeukqmq(self::POST_TYPE);
        goto ksewmguscaqkiiso;
        mwkyqwwyuoquwycw:
        saaqoyeqicykmmuu:
        goto cagckkqacmeaemik;
        ekieuqyaekgaekem:
    }
    
    public static function ygqycmmkoiuocoia($post)
    {
        return ManipulateArray::get(self::get($post), "\160\157\163\x74\x5f\160\141\x72\x65\156\x74");
    }
    
    public static function ekwkywuguceaogsk()
    {
        goto yuqyccgsmegiicoc;
        weuicwuusquqioeo:
        the_post();
        goto mswiyiyqqqqqmccc;
        yaggoqgeaucmkmsi:
        if (!have_posts()) {
            goto uycmykimwqoyykmo;
        }
        goto weuicwuusquqioeo;
        mswiyiyqqqqqmccc:
        $wyoiwuqokyeeuguk[] = self::get();
        goto ousuggsuweyeqyuo;
        akeeousiaemumwqy:
        sgiswsoiyoowcqsw:
        goto ymmkmyqiigmskumu;
        ousuggsuweyeqyuo:
        goto gyakkgyocuygkkwi;
        goto kmeqemccwyaskwqk;
        scmqkqwakowggkmu:
        gyakkgyocuygkkwi:
        goto yaggoqgeaucmkmsi;
        yuqyccgsmegiicoc:
        $wyoiwuqokyeeuguk = [];
        goto igommeoookeycwmc;
        igommeoookeycwmc:
        if (!have_posts()) {
            goto sgiswsoiyoowcqsw;
        }
        goto scmqkqwakowggkmu;
        kmeqemccwyaskwqk:
        uycmykimwqoyykmo:
        goto akeeousiaemumwqy;
        ymmkmyqiigmskumu:
        return $wyoiwuqokyeeuguk;
        goto cumcsgcamqomeygk;
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
        
        $ewgwqamkygiqaawc = preg_replace("\x2f\133\133\x3a\x73\160\x61\143\145\72\135\x5d\57", "\40", $ewgwqamkygiqaawc);
        goto oekkqiisaauoowkm;
        oekkqiisaauoowkm:
        
        
        $emeuskyoeemoywwi = preg_split("\x2f\x5b\xa\15\11\40\x5d\53\57", $ewgwqamkygiqaawc, 0, PREG_SPLIT_NO_EMPTY);
        goto iuqesqwcmseaoouo;
        kikyqwgykkiskoik:
        $post = self::get($post);
        goto kusaguaukqyawgck;
        kusaguaukqyawgck:
        $ewgwqamkygiqaawc = self::souwykwwmyygqyqi($post);
        goto iwuiyecakwogaqos;
        iwuiyecakwogaqos:
        
        $ewgwqamkygiqaawc = preg_replace("\57\133\133\x3a\160\165\x6e\143\164\72\135\133\72\x64\x69\147\x69\x74\72\x5d\135\x2f", '', $ewgwqamkygiqaawc);
        goto eceyessoaayaagci;
        iuqesqwcmseaoouo:
        
        return count($emeuskyoeemoywwi);
        goto gyqeokswmeikygki;
        gyqeokswmeikygki:
    }
    
    public static function mwoyqeeigwqoamiw($ywmkwiwkosakssii = [])
    {
        goto yskwigcmaicqamqy;
        ogekauwggisguwkq:
        akkuiemqaogigaqa:
        goto uwyuiwkkeuwsykys;
        cuockkkkmamkuygc:
        if (!$ooiewiwkegguusum) {
            goto gcqmmuowwaseagoa;
        }
        goto cquyikuyaiskayos;
        wccuioiewmeamewo:
        mcyiwawwcsquwiqq:
        goto ucwuomcmcoqmyqwm;
        seqgigumouyguowy:
        $aqykuigiuwmmcieu = self::OBJECT;
        goto ueocsmuykwyoywui;
        suqaqoaowamkiymi:
        goto esggoysyykycecyq;
        goto wccuioiewmeamewo;
        kwsusuqioqiaokmk:
        goto qsocqumaigsayksm;
        goto mwsmaceeuacaoeas;
        acmoiyiogowkkesw:
        esggoysyykycecyq:
        goto ocsyqkkqkwekgakm;
        oouaueaaciqmoaek:
        cqycwggykmmyacuk:
        goto eqooqiomasygymwk;
        ueoygowuiugooicc:
        $ggauoeuaesiymgee = self::DEFAULT_POST_TYPES;
        goto cuockkkkmamkuygc;
        aqgmwywwecioauqg:
        $gqgemcmoicmgaqie = ManipulateArray::get($ywmkwiwkosakssii, "\161\165\x65\162\x79");
        goto sqgkqqoeksyicmoa;
        eemuaaqoyiqiyyoe:
        $ksaameoqigiaoigg = $oammesyieqmwuwyi;
        goto gmwqisoikakuqicc;
        ikuuqaoiwigcmwyu:
        return $ksaameoqigiaoigg;
        goto amaoecqeywkkmyoi;
        sqgkqqoeksyicmoa:
        $sogksuscggsicmac = ManipulateArray::get($ywmkwiwkosakssii, self::OUTPUT);
        goto mmgissacqioqksmk;
        ugiegewmsumyuqmq:
        qsocqumaigsayksm:
        goto geiwkqgwawsmyeiw;
        mmgissacqioqksmk:
        $ooiewiwkegguusum = ManipulateArray::get($ywmkwiwkosakssii, self::INCLUDE);
        goto wceiwqiccssqgcuw;
        kwqoqgccuqgigkoc:
        ugkgqeugmkumauos:
        goto ikuuqaoiwigcmwyu;
        wuucmmcggqqsmakc:
        if (in_array($sogksuscggsicmac, [self::OBJECT, self::LABELS, self::SLUGS])) {
            goto cqycwggykmmyacuk;
        }
        goto eemuaaqoyiqiyyoe;
        mwsmaceeuacaoeas:
        gcqmmuowwaseagoa:
        goto wwkgimsumqsaicoy;
        ocsyqkkqkwekgakm:
        $ksaameoqigiaoigg = [];
        goto wuucmmcggqqsmakc;
        eqooqiomasygymwk:
        foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) {
            goto kgqqosqskwaaogyu;
            qyyosiukaswscmuu:
            $ksaameoqigiaoigg[$ymqmyyeuycgmigyo] = $igqsaukqcqscimok;
            goto gqeeomoukqkowycw;
            oeewoegiqgywwmos:
            ccgsasimykggyess:
            goto ekaasiygiigkuasg;
            qokggikksgqmecam:
            if (!$igqsaukqcqscimok) {
                goto eueuyagcqqwwsick;
            }
            goto smiwewgysqykaqee;
            kgqqosqskwaaogyu:
            $igqsaukqcqscimok = self::waaisqccqacqeium($igqsaukqcqscimok);
            goto qokggikksgqmecam;
            ekaasiygiigkuasg:
            $igqsaukqcqscimok = $igqsaukqcqscimok->label;
            goto aaqiykkkmossycmw;
            ywimgeoyusmceogc:
            $igqsaukqcqscimok = ManipulateArray::get($igqsaukqcqscimok->rewrite, self::SLUG, $ymqmyyeuycgmigyo);
            goto aswkmiocmcogokyy;
            saigoogiqigowuqo:
            goto agwoisgcwqooygsg;
            goto oeewoegiqgywwmos;
            uussagskoysuoeiw:
            emmkqsuswgssikec:
            goto rkasqqqgemowweeg;
            ycygwiuuauuwwmyc:
            kkicowiukwoykmms:
            goto ywimgeoyusmceogc;
            gkwycwegcuicsgas:
            if ($sogksuscggsicmac === self::SLUGS) {
                goto kkicowiukwoykmms;
            }
            goto saigoogiqigowuqo;
            aswkmiocmcogokyy:
            agwoisgcwqooygsg:
            goto qyyosiukaswscmuu;
            uumasiqguewuwcaa:
            if ($sogksuscggsicmac === self::LABELS) {
                goto ccgsasimykggyess;
            }
            goto gkwycwegcuicsgas;
            gqeeomoukqkowycw:
            eueuyagcqqwwsick:
            goto uussagskoysuoeiw;
            aaqiykkkmossycmw:
            goto agwoisgcwqooygsg;
            goto ycygwiuuauuwwmyc;
            smiwewgysqykaqee:
            $ymqmyyeuycgmigyo = $igqsaukqcqscimok->name;
            goto uumasiqguewuwcaa;
            rkasqqqgemowweeg:
        }
        goto kcaciomiguuugugi;
        ueocsmuykwyoywui:
        eywcgcyicisgcumk:
        goto kawkoccmuqqeamms;
        ucwuomcmcoqmyqwm:
        $oammesyieqmwuwyi = array_intersect_key($ooiewiwkegguusum, $oammesyieqmwuwyi);
        goto iomigqssyeeaqgsg;
        uqoowswseqmmisei:
        if ($ooiewiwkegguusum) {
            goto mcyiwawwcsquwiqq;
        }
        goto aeamameocikekces;
        uwyuiwkkeuwsykys:
        $oammesyieqmwuwyi = array_diff_key($oammesyieqmwuwyi, array_flip($yemgmmgogcwccuky));
        goto acmoiyiogowkkesw;
        geiwkqgwawsmyeiw:
        $aqykuigiuwmmcieu = $sogksuscggsicmac;
        goto aesusogymakeuios;
        wwkgimsumqsaicoy:
        $gqgemcmoicmgaqie = ManipulateFormat::omaawkkwwyesqwcc($gqgemcmoicmgaqie, ["\160\x75\x62\x6c\151\x63" => true, "\x5f\142\165\151\154\164\151\156" => false, "\160\165\142\x6c\151\143\154\171\137\161\x75\x65\162\x79\141\x62\154\145" => true]);
        goto ugiegewmsumyuqmq;
        kcaciomiguuugugi:
        csciwewamgcguguc:
        goto kwqoqgccuqgigkoc;
        gmwqisoikakuqicc:
        goto ugkgqeugmkumauos;
        goto oouaueaaciqmoaek;
        yskwigcmaicqamqy:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x71\165\145\x72\x79" => [], self::OUTPUT => self::NAMES, self::EXCLUDE => [], self::INCLUDE => []]);
        goto aqgmwywwecioauqg;
        wceiwqiccssqgcuw:
        $yemgmmgogcwccuky = ManipulateArray::get($ywmkwiwkosakssii, self::EXCLUDE);
        goto ueoygowuiugooicc;
        iomigqssyeeaqgsg:
        goto esggoysyykycecyq;
        goto ogekauwggisguwkq;
        cquyikuyaiskayos:
        $gqgemcmoicmgaqie = [];
        goto kwsusuqioqiaokmk;
        aesusogymakeuios:
        if (in_array($sogksuscggsicmac, [self::OBJECT, self::NAMES])) {
            goto eywcgcyicisgcumk;
        }
        goto seqgigumouyguowy;
        kawkoccmuqqeamms:
        $oammesyieqmwuwyi = ManipulateFormat::omaawkkwwyesqwcc($ggauoeuaesiymgee, DecoratorPost::mwoyqeeigwqoamiw($gqgemcmoicmgaqie, $aqykuigiuwmmcieu));
        goto uqoowswseqmmisei;
        aeamameocikekces:
        if ($yemgmmgogcwccuky) {
            goto akkuiemqaogigaqa;
        }
        goto suqaqoaowamkiymi;
        amaoecqeywkkmyoi:
    }
    
    public static function qcgakseyaikigqco($post = null)
    {
        return DecoratorPost::qcgakseyaikigqco(self::get($post));
    }
    
    public static function cekqoisoaceaqiam($post)
    {
        goto oyqsaukeioykugmm;
        gkweycueymqasawm:
        oymoaaossqyocmue:
        goto euceooqmeegmumya;
        ieyqmiueyikwcwso:
        skyscuweykackoci:
        goto eqooeogyogusoyci;
        eqooeogyogusoyci:
        
        if (!(self::ucwmcwqmqwaymkkc($post) == "\164\162\141\163\150")) {
            goto kyouiqwywyqgkuso;
        }
        goto awcgaimyecemucay;
        uesmmkgaqoqmaiik:
        
        array_push($auwuoyyagaiegwae, self::ycqquoiyyuesegsy($post));
        goto wequuyiayswgoosg;
        cymkauiwaemgisae:
        $gwiqqkoakiiquksg = str_replace("\x5f\137\164\162\x61\163\x68\x65\x64", '', $gwiqqkoakiiquksg);
        goto wwuyacuysiocqcwq;
        isawkmamaukaekcg:
        $ucsmiamgwmayyoco = ManipulatePage::symuoymymumgwkaw();
        goto keqweiemkiakogck;
        kwigmoscuksaeaik:
        array_push($auwuoyyagaiegwae, $myyccyuumcscsagc, get_post_type_archive_feed_link($sqeykgyoooqysmca));
        goto ieyqmiueyikwcwso;
        wequuyiayswgoosg:
        
        $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas($sqeykgyoooqysmca);
        goto iyqaossmgeskkcgg;
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
        keqweiemkiakogck:
        if (!(is_string($ucsmiamgwmayyoco) && !empty($ucsmiamgwmayyoco) && DecoratorOption::get("\x73\150\x6f\x77\x5f\157\x6e\x5f\146\x72\157\x6e\164") == "\160\x61\147\145")) {
            goto smqgoowsgakckqse;
        }
        goto sqigokysuqqoyoqq;
        sqigokysuqqoyoqq:
        array_push($auwuoyyagaiegwae, $ucsmiamgwmayyoco);
        goto qacmciyceoyqmims;
        qacmciyceoyqmims:
        smqgoowsgakckqse:
        goto ksycyguoaoakaasa;
        iyqaossmgeskkcgg:
        foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) {
            goto weeeiiqqgqoymeke;
            uwkaawaqoswkcuye:
            eyuickmcmiiwcgss:
            goto ocykayyqumgsymkk;
            ocykayyqumgsymkk:
            cscciumkmikyqica:
            goto eguuyyiaceyocoge;
            uwkcasugwwwwmmqu:
            foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
                goto muisqceosooggyoy;
                wyuyokmygemgqsmk:
                if (!$voccgqswsiwauyow) {
                    goto acoociuqgmymeggw;
                }
                goto ycimqmmmgskimkgi;
                kcgismqksoywmcea:
                $gaeqamemwmwsyukm = $iwewcwusemqaiggk->count;
                goto msyksokkggaqasey;
                wgwsicukewmsscec:
                $ciyackuwsqkoqese = 2;
                goto gcywkgcegesysuoy;
                wgceoaueoiiwwuum:
                $oaeeeywcmcskwwgy = $voccgqswsiwauyow . "\x70\141\x67\145\x2f" . user_trailingslashit($ciyackuwsqkoqese);
                goto imyoymgguyuiksia;
                asmoomkuqyqqywkk:
                goto scywsowkeyyssgqo;
                goto suusasmyiceigsyk;
                suusasmyiceigsyk:
                ksmsiiaeokcggegc:
                goto ousiykwqkgeokoqs;
                ycuamgwmgueemuaq:
                ugqqciuuwaioyowe:
                goto aigiscsuosewiuus;
                qcimcgcggicewoug:
                acoociuqgmymeggw:
                goto iqeuoqeeceiikmse;
                iqeuoqeeceiikmse:
                qqewuuoigkoeeocq:
                goto ksukaiqewqogiqwu;
                agqsiuycgsaoescw:
                if (!($ciyackuwsqkoqese <= $giqggecqqikcysgq)) {
                    goto ksmsiiaeokcggegc;
                }
                goto wgceoaueoiiwwuum;
                amgecmwokwwiiuac:
                $giqggecqqikcysgq = min($ocqawgquwsqioses, 10);
                goto wgwsicukewmsscec;
                imyoymgguyuiksia:
                array_push($auwuoyyagaiegwae, $oaeeeywcmcskwwgy);
                goto ycuamgwmgueemuaq;
                gcywkgcegesysuoy:
                scywsowkeyyssgqo:
                goto agqsiuycgsaoescw;
                ycimqmmmgskimkgi:
                array_push($auwuoyyagaiegwae, $voccgqswsiwauyow);
                goto wmssywakgoiswqey;
                aigiscsuosewiuus:
                $ciyackuwsqkoqese++;
                goto asmoomkuqyqqywkk;
                msyksokkggaqasey:
                $ocqawgquwsqioses = ceil($gaeqamemwmwsyukm / $weyoqgcesqgeusiu);
                goto amgecmwokwwiiuac;
                siymkkcgeegouiuq:
                if (!$weyoqgcesqgeusiu) {
                    goto woaewkuksuiogeoo;
                }
                goto kcgismqksoywmcea;
                wmssywakgoiswqey:
                $weyoqgcesqgeusiu = ManipulateSetting::omkaowmygoqwsywq();
                goto siymkkcgeegouiuq;
                ousiykwqkgeokoqs:
                woaewkuksuiogeoo:
                goto qcimcgcggicewoug;
                muisqceosooggyoy:
                $voccgqswsiwauyow = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk);
                goto wyuyokmygemgqsmk;
                ksukaiqewqogiqwu:
            }
            goto sigseymecgiowiii;
            sigseymecgiowiii:
            imsmuoawuiemiisk:
            goto uwkaawaqoswkcuye;
            weeeiiqqgqoymeke:
            $uyuaosigqymaqsaa = self::weescwwgqgiyumyw($post, $kesssewsiegssiya);
            goto omaqoumkmmmuuwkq;
            omaqoumkmmmuuwkq:
            if (!$uyuaosigqymaqsaa) {
                goto eyuickmcmiiwcgss;
            }
            goto uwkcasugwwwwmmqu;
            eguuyyiaceyocoge:
        }
        goto gkweycueymqasawm;
        awcgaimyecemucay:
        $gwiqqkoakiiquksg = self::ycqquoiyyuesegsy($post);
        goto cymkauiwaemgisae;
        meeceoqcuuasiiio:
        $post = self::get($post);
        goto iayksyuawioekakq;
        igkuwcieaaaimceu:
        
        array_push($auwuoyyagaiegwae, DecoratorAuthor::mkaiaewoyaimieqg($qscaoekmoooeuyqg), get_author_feed_link($qscaoekmoooeuyqg));
        goto imgkgmwywoyggiiy;
        euceooqmeegmumya:
        $qscaoekmoooeuyqg = self::mguqscccckuywsya($post);
        goto igkuwcieaaaimceu;
        wwuyacuysiocqcwq:
        array_push($auwuoyyagaiegwae, $gwiqqkoakiiquksg, $gwiqqkoakiiquksg . "\x66\145\x65\x64\x2f");
        goto cgwwckgiugakqowu;
        imgkgmwywoyggiiy:
        
        $myyccyuumcscsagc = self::mqgeysameoesmuqw($sqeykgyoooqysmca);
        goto qsqgsggawskeqauc;
        oyqsaukeioykugmm:
        $auwuoyyagaiegwae = [];
        goto meeceoqcuuasiiio;
        iayksyuawioekakq:
        $sqeykgyoooqysmca = self::gueasuouwqysmomu($post);
        goto uesmmkgaqoqmaiik;
        cgwwckgiugakqowu:
        kyouiqwywyqgkuso:
        goto aookismekyuisiqy;
        eqgewqgayssmyqyi:
    }
    
    public static function keeogscqcgsequyc($useksmwkuswkwcqg)
    {
        goto qeeiayaggickmsem;
        ouuuiwcmacckekgw:
        $wkaqekwwgqsqwcoi = $mksyucucyswaukig->menu_icon;
        goto siikoyaookakcsya;
        mygoemwmmmmeswoy:
        if ($wkaqekwwgqsqwcoi) {
            goto uogugagqqgaumeui;
        }
        goto wsocqyukguoqmoou;
        siikoyaookakcsya:
        $useksmwkuswkwcqg = $mksyucucyswaukig->name;
        goto akiaoyqwwgyogmwa;
        emwuosqcciqgwuec:
        uogugagqqgaumeui:
        goto daaaoeseaeakowis;
        qeeiayaggickmsem:
        $wkaqekwwgqsqwcoi = '';
        goto ygyikqcaweccikoy;
        oaquckygauqeycue:
        if (!$mksyucucyswaukig) {
            goto ikggeywmqciukyuy;
        }
        goto ouuuiwcmacckekgw;
        daaaoeseaeakowis:
        return $wkaqekwwgqsqwcoi;
        goto mqqqskweuccusqsg;
        wsocqyukguoqmoou:
        $wkaqekwwgqsqwcoi = "\141\144\x6d\151\156\x2d{$useksmwkuswkwcqg}";
        goto emwuosqcciqgwuec;
        ygyikqcaweccikoy:
        $mksyucucyswaukig = self::waaisqccqacqeium($useksmwkuswkwcqg);
        goto oaquckygauqeycue;
        akiaoyqwwgyogmwa:
        ikggeywmqciukyuy:
        goto mygoemwmmmmeswoy;
        mqqqskweuccusqsg:
    }
    
    public static function uikgwcuascgeissw($post = null)
    {
        goto usymiywgyuqgsmgo;
        wqsikiwycqwksiwy:
        return sprintf("\45\x73\x20\x2d\40\45\x73", $meqocwsecsywiiqs, $useksmwkuswkwcqg);
        goto asqikgqmeqysakky;
        mweuowgyuuomycug:
        $meqocwsecsywiiqs = DecoratorPost::qcgakseyaikigqco($post);
        goto iuagymwagckgasgy;
        gogeigmcqokqqiwc:
        if (!$useksmwkuswkwcqg) {
            goto egssagkqigycaowo;
        }
        goto yieyamwmiyceaysm;
        yieyamwmiyceaysm:
        $useksmwkuswkwcqg = ManipulateArray::qamwegcyimgcqksw($useksmwkuswkwcqg, "\154\x61\142\145\154\163\x2e\x73\x69\x6e\147\x75\x6c\x61\162\x5f\x6e\x61\x6d\x65");
        goto qqsoyoesgkwakcwc;
        usymiywgyuqgsmgo:
        $post = self::get($post);
        goto mweuowgyuuomycug;
        iuagymwagckgasgy:
        $useksmwkuswkwcqg = self::gueasuouwqysmomu($post, true);
        goto gogeigmcqokqqiwc;
        qqsoyoesgkwakcwc:
        egssagkqigycaowo:
        goto wqsikiwycqwksiwy;
        asqikgqmeqysakky:
    }
    
    public static function wieguyuwywywksac($ywmkwiwkosakssii = [])
    {
        return wp_get_archives(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x65\143\x68\x6f" => false, self::TYPE => "\155\x6f\x6e\x74\x68\x6c\171", self::ORDER => "\x44\105\x53\x43"]));
    }
    
    public static function ccwssmqgyasqqcoc($post, $sqeykgyoooqysmca) : bool
    {
        $post = self::get($post, self::OBJECT, true);
        return $post && self::gueasuouwqysmomu($post) == $sqeykgyoooqysmca;
    }
    
    public static function qeosassuekcieuuy($sqeykgyoooqysmca = null) : bool
    {
        goto fgacmumaqamuggaw;
        umugkkiiiakomyae:
        $sqeykgyoooqysmca = self::waaisqccqacqeium($sqeykgyoooqysmca);
        goto ssseiiwsmacscqkk;
        wsagsuekaoamamwq:
        $cekoogweeooasayu = $sqeykgyoooqysmca->public === true;
        goto gqkckwmwucyicaom;
        ssseiiwsmacscqkk:
        if (!$sqeykgyoooqysmca) {
            goto yyckkkysceayoacc;
        }
        goto wsagsuekaoamamwq;
        gqkckwmwucyicaom:
        yyckkkysceayoacc:
        goto ywkowqwiseoaosue;
        fgacmumaqamuggaw:
        $cekoogweeooasayu = false;
        goto umugkkiiiakomyae;
        ywkowqwiseoaosue:
        return $cekoogweeooasayu;
        goto giismoqygwoeiucm;
        giismoqygwoeiucm:
    }
    
    public static function qkweigiqsaaigqau($post = null) : ?string
    {
        goto sgwggiwoawyysamo;
        zoeammwiceimsmea:
        $qscaoekmoooeuyqg = self::mguqscccckuywsya($post);
        goto gawoykaumugqiiiw;
        oeiyuauoweasyegq:
        $eeamcawaiqocomwy = DecoratorAuthor::mkaiaewoyaimieqg($qscaoekmoooeuyqg);
        goto oeyaaksqsgmecwmm;
        sgwggiwoawyysamo:
        $eeamcawaiqocomwy = null;
        goto zoeammwiceimsmea;
        qyowaswasswaayey:
        return $eeamcawaiqocomwy;
        goto iqayckmwkoaoyusg;
        oeyaaksqsgmecwmm:
        usayuwaoekoyeigw:
        goto qyowaswasswaayey;
        gawoykaumugqiiiw:
        if (!$qscaoekmoooeuyqg) {
            goto usayuwaoekoyeigw;
        }
        goto oeiyuauoweasyegq;
        iqayckmwkoaoyusg:
    }
    
    public static function wsiiswmaagmyiaiw($post = null)
    {
        return DecoratorPost::wsiiswmaagmyiaiw(self::mwikyscisascoeea($post));
    }
    
    public static function mqgeysameoesmuqw($useksmwkuswkwcqg) : string
    {
        goto qckuswayaoymsksk;
        iwgymiqeamaeqqom:
        return trailingslashit(DecoratorPost::mqgeysameoesmuqw($useksmwkuswkwcqg));
        goto aamackwoccmccyks;
        egoyusisgekiqoye:
        $useksmwkuswkwcqg = $useksmwkuswkwcqg->name;
        goto eukasuwuekwugokm;
        qckuswayaoymsksk:
        if (!$useksmwkuswkwcqg instanceof WP_Post_Type) {
            goto cusamwcumoyaccig;
        }
        goto egoyusisgekiqoye;
        eukasuwuekwugokm:
        cusamwcumoyaccig:
        goto iwgymiqeamaeqqom;
        aamackwoccmccyks:
    }
    
    public static function insert($useksmwkuswkwcqg, $ywmkwiwkosakssii = []) : ?int
    {
        goto uaequckaaeewaqiy;
        sysqgmqceqakymga:
        $ywmkwiwkosakssii["\x70\x6f\163\x74\x5f\x61\165\x74\150\157\x72"] = ManipulateUser::mwikyscisascoeea();
        goto ckoqcgskyowkgwqc;
        kegkgqcaoogqqwuy:
        return $sogksuscggsicmac;
        goto ueyscskqyqmwgyqq;
        uaequckaaeewaqiy:
        $sogksuscggsicmac = null;
        goto eqyccakwmkgmsyik;
        ckoqcgskyowkgwqc:
        $sogksuscggsicmac = DecoratorPost::insert($ywmkwiwkosakssii);
        goto imkggwewaoaeaaaa;
        imkggwewaoaeaaaa:
        meamgyseweakcwms:
        goto kegkgqcaoogqqwuy;
        eqyccakwmkgmsyik:
        $ywmkwiwkosakssii[self::POST_TYPE] = $useksmwkuswkwcqg;
        goto mmmaqiceqwswaica;
        mmmaqiceqwswaica:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\157\163\x74\x5f\164\151\x74\x6c\x65" => '', "\x70\x6f\163\164\137\x6e\141\155\x65" => '', "\x70\x6f\163\164\137\143\x6f\156\164\x65\156\x74" => '', "\x70\x6f\163\x74\137\163\164\x61\x74\x75\163" => '']);
        goto ukamoqcwkkacmkuo;
        ukamoqcwkkacmkuo:
        $wyoiwuqokyeeuguk = self::ciugwooasaqcywas($useksmwkuswkwcqg, [self::NAME => $ywmkwiwkosakssii["\160\157\x73\164\137\156\141\x6d\x65"], self::POSTS_PER_PAGE => 1]);
        goto osisauycomkeaisq;
        osisauycomkeaisq:
        if ($wyoiwuqokyeeuguk) {
            goto meamgyseweakcwms;
        }
        goto sysqgmqceqakymga;
        ueyscskqyqmwgyqq:
    }
    
    public static function sqyyemqmmgmyiaam($sciomagaqmgggsiu = [])
    {
        return DecoratorQuery::moegwqkekcawsggs($sciomagaqmgggsiu);
    }
    
    public static function waoeigwigksoikgu($post, $ywmkwiwkosakssii = [])
    {
        $ywmkwiwkosakssii["\x70\x6f\x73\164\x5f\x69\144"] = self::mwikyscisascoeea($post);
        return ManipulateComment::ciugwooasaqcywas($ywmkwiwkosakssii);
    }
    
    public static function iuaacwwygkmcoeiy($qwcmueausqgiwigy, $gqgemcmoicmgaqie)
    {
        goto xeeuigemugoamqao;
        youwoggqmcuggmyy:
        $qwcmueausqgiwigy = [];
        goto gmycyuqoscismuig;
        ameoiemwymmeomqq:
        if (!($uyuaosigqymaqsaa && $qwcmueausqgiwigy)) {
            goto wcykiuessuoeagki;
        }
        goto uwmckciqcuwoyemm;
        ekayucummqeqmwgc:
        sccqosiycoaosikm:
        goto suicyusecackqaii;
        xeeuigemugoamqao:
        $uyuaosigqymaqsaa = ManipulateArray::get($gqgemcmoicmgaqie->query_vars, "\163\145\x61\162\143\150\x5f\164\x65\162\155\x73");
        goto ameoiemwymmeomqq;
        uwmckciqcuwoyemm:
        global $wpdb;
        goto easusuoaqiwgcuui;
        suicyusecackqaii:
        $qwcmueausqgiwigy = "\40\101\116\x44\40" . implode("\x20\101\116\104\40", $qwcmueausqgiwigy);
        goto gacwuumiuewqgeim;
        eewcoeiokouymaic:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto sccqosiycoaosikm;
        }
        goto ocuocqiyuecksmsi;
        iecocimeqmmockam:
        return $qwcmueausqgiwigy;
        goto ceogiuqcsqkmysga;
        ocuocqiyuecksmsi:
        $qwcmueausqgiwigy[] = "{$wpdb->posts}\56\x70\157\x73\x74\x5f\x70\141\x73\163\167\x6f\162\144\x20\x3d\x20\47\47";
        goto ekayucummqeqmwgc;
        qqmeumqiyqkoycww:
        qgsqycogyicuiioq:
        goto eewcoeiokouymaic;
        easusuoaqiwgcuui:
        $qqmmggwcsmymegca = $uyuaosigqymaqsaa;
        goto sqmqymmecmqykiqs;
        gmycyuqoscismuig:
        foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
            $qwcmueausqgiwigy[] = $wpdb->prepare("{$wpdb->posts}\x2e\x70\x6f\x73\164\x5f\164\x69\x74\154\x65\40\114\x49\x4b\x45\x20\45\x73", $aaycmcgqqqsysccs . $wpdb->esc_like($iwewcwusemqaiggk) . $aaycmcgqqqsysccs);
            eycmewmysuymswuk:
        }
        goto qqmeumqiyqkoycww;
        gacwuumiuewqgeim:
        wcykiuessuoeagki:
        goto iecocimeqmmockam;
        sqmqymmecmqykiqs:
        $aaycmcgqqqsysccs = !empty($qqmmggwcsmymegca["\x65\x78\141\143\164"]) ? '' : "\45";
        goto youwoggqmcuggmyy;
        ceogiuqcsqkmysga:
    }
    
    public static function waaisqccqacqeium($useksmwkuswkwcqg = null) : ?WP_Post_Type
    {
        goto syuoooyaackuoues;
        ukaocimwskuqgqso:
        return $useksmwkuswkwcqg;
        goto quwqksyoiigamkys;
        gqkuecyoaomqacgk:
        $useksmwkuswkwcqg = DecoratorPost::waaisqccqacqeium($useksmwkuswkwcqg);
        goto asgkgomkmykaqeac;
        kusoiyymwykqsgue:
        if ($useksmwkuswkwcqg) {
            goto iaqwyagqyokkmeoo;
        }
        goto agksaoiusscawcwc;
        asgkgomkmykaqeac:
        uqowsoiyaummsyoy:
        goto ukaocimwskuqgqso;
        agksaoiusscawcwc:
        $useksmwkuswkwcqg = self::gueasuouwqysmomu();
        goto oayuucaeciioiwqw;
        oayuucaeciioiwqw:
        iaqwyagqyokkmeoo:
        goto gqkuecyoaomqacgk;
        syuoooyaackuoues:
        if ($useksmwkuswkwcqg instanceof WP_Post_Type) {
            goto uqowsoiyaummsyoy;
        }
        goto kusoiyymwykqsgue;
        quwqksyoiigamkys:
    }
    
    public static function mwikyscisascoeea($post = null, $cwwowqyuwccuykom = false)
    {
        goto wwcimuywiwqwagoq;
        wakcuqwemksmyeos:
        kyicaqywsmawwwuo:
        goto eqyykccckaqyikas;
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
        eqyykccckaqyikas:
        ikqwwkscesmugsuq:
        goto uwscoaaycokmqegk;
        kswkocesygkuqiiy:
        eqwmoigeokkskwuy:
        goto kwiuwccmuwwwwcak;
        oksiwycekgweuyoc:
        if (DecoratorQuery::seokosgecygsmqau()) {
            goto eqwmoigeokkskwuy;
        }
        goto kwugcgwmcsoswees;
        qycekaqowowqaosm:
        $post = ManipulateArray::get($post, "\x49\104");
        goto iuaikkckoskwuwyw;
        uwscoaaycokmqegk:
        mioiyawikawqyaay:
        goto swqycaokmkkykkea;
        kwugcgwmcsoswees:
        $post = get_the_ID();
        goto gwimqwmmuacwkmou;
        kwiuwccmuwwwwcak:
        $post = DecoratorQuery::keeuqgyooycqoygw();
        goto wakcuqwemksmyeos;
        aoycieuggikeomis:
    }
    
    public static function emcckouwaoassquc(array $sciomagaqmgggsiu = [])
    {
        goto oqcgimyqwmqgyygw;
        imsqyecesygwiwkk:
        return self::ciugwooasaqcywas($sciomagaqmgggsiu, ["\160\x6f\x73\x74\x5f\x73\164\141\x74\165\x73" => "\x70\x75\x62\x6c\x69\x73\150", "\x66\x69\x65\154\x64\163" => self::IDS]);
        goto yysqgqeoyckgmcsa;
        oqcgimyqwmqgyygw:
        if ($sciomagaqmgggsiu) {
            goto uwgksqcakaieyscy;
        }
        goto oeegykgsgkscwcio;
        oeegykgsgkscwcio:
        $sciomagaqmgggsiu = self::mwoyqeeigwqoamiw();
        goto qmgqguiisgckwocw;
        qmgqguiisgckwocw:
        uwgksqcakaieyscy:
        goto imsqyecesygwiwkk;
        yysqgqeoyckgmcsa:
    }
    
    public static function aqcogscycyycgkuq($post = null, $mgkceomocowocqyo = [])
    {
        return self::ygwimyogyaqgumam("\160\157\163\x74\x5f\x6e\141\x6d\145", $post, $mgkceomocowocqyo);
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
            $gaeqamemwmwsyukm = (int) $wpdb->get_var("\123\105\114\105\103\124\40\103\117\x55\x4e\x54\50\143\x6f\155\155\x65\x6e\164\x5f\x49\x44\x29\12\11\x9\11\11\x9\x46\x52\x4f\115\x20{$wpdb->comments}\x20\127\110\105\x52\x45\40\x63\157\155\155\x65\156\x74\x5f\160\x6f\163\164\137\x49\104\x20\151\x6e\40\50\12\x9\11\11\x9\x9\123\105\114\x45\x43\124\x20\x49\104\40\106\122\117\x4d\x20{$wpdb->posts}\40\127\x48\105\122\105\40\x70\x6f\x73\x74\137\164\171\x70\145\40\x3d\40\47{$useksmwkuswkwcqg}\47\xa\11\11\11\x9\x9\101\x4e\104\40\x70\157\163\x74\137\163\x74\x61\x74\165\x73\40\x3d\40\x27\x70\x75\142\154\151\x73\x68\x27\x29\x20\101\x4e\x44\x20\143\x6f\155\x6d\145\x6e\164\x5f\x61\x70\x70\x72\157\x76\x65\x64\x20\75\40\x27\61\47");
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
        return self::ygwimyogyaqgumam("\160\x6f\x73\164\x5f\163\x74\x61\x74\x75\x73", $post, $mgkceomocowocqyo);
    }
    
    public static function mguqscccckuywsya($post = null, $cwwowqyuwccuykom = false)
    {
        return self::ygwimyogyaqgumam("\x70\157\163\164\x5f\x61\x75\x74\150\157\x72", self::mwikyscisascoeea($post, $cwwowqyuwccuykom));
    }
    
    public static function uiuwugwykqocmiec($post = null) : ?int
    {
        return DecoratorHook::sscegwueamckwmcy("\147\x65\164\x5f\x70\157\163\x74\x5f\x77\157\x72\x64\137\x63\x6f\165\x6e\164", 0, self::get($post));
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
        $ywmkwiwkosakssii["\x6e\x61\x6d\145"] = $ymqmyyeuycgmigyo;
        goto ceqcqskmksiuosuy;
        wgyqskiikcoamceq:
    }
    
    public static function owicscwgeuqcqaig($useksmwkuswkwcqg = "\x70\157\163\164", $ywmkwiwkosakssii = [])
    {
        goto uockmkmeymgyqsqi;
        osgkqqqqimmwsmsi:
        goto qeyuquwgysuucygo;
        goto megauiwcsiuuiquk;
        qsaagygqqsmgiesk:
        goto qeyuquwgysuucygo;
        goto qymkekiqwouwaoos;
        uaeyogsicwkuwcak:
        if (!(!empty($yiasugywggckywoa["\156\165\x6d\x62\145\162\x70\157\163\164\163"]) && empty($yiasugywggckywoa["\160\x6f\x73\x74\x73\x5f\x70\145\162\137\x70\141\x67\x65"]))) {
            goto xeyusieocqgkowca;
        }
        goto ikwwiueqmmkayyce;
        kocoameeyqygkwok:
        if (!empty($yiasugywggckywoa["\145\x78\x63\x6c\165\x64\x65"])) {
            goto wimqsusyesasaism;
        }
        goto osgkqqqqimmwsmsi;
        siiyycmowckwsemw:
        if (!empty($yiasugywggckywoa["\x70\x6f\163\x74\137\163\164\x61\164\165\163"])) {
            goto yoceycuiiwwmscci;
        }
        goto aecweaquqmiiimsc;
        okeewwyoqawamsoa:
        $yiasugywggckywoa["\156\x6f\x5f\146\x6f\165\x6e\x64\x5f\162\157\167\163"] = true;
        goto sgguaokgyweasccc;
        aecweaquqmiiimsc:
        $yiasugywggckywoa["\160\x6f\x73\x74\x5f\163\164\x61\x74\x75\163"] = "\141\164\x74\x61\x63\x68\x6d\145\156\164" === $yiasugywggckywoa["\x70\157\163\x74\137\x74\171\x70\145"] ? "\151\x6e\x68\145\162\x69\x74" : "\160\165\142\x6c\151\163\150";
        goto wkkwgyuaqwiygawe;
        iimqqykwwmqeukai:
        $yiasugywggckywoa["\160\157\163\x74\137\x5f\x69\156"] = $egekuwigiusmwiek;
        goto qsaagygqqsmgiesk;
        sgguaokgyweasccc:
        return new WP_Query($yiasugywggckywoa);
        goto gyuioyyowaiqcywy;
        eceowukgiumqosom:
        $yiasugywggckywoa["\x70\157\163\x74\137\x5f\x6e\157\164\137\x69\x6e"] = wp_parse_id_list($yiasugywggckywoa["\145\x78\x63\154\x75\x64\x65"]);
        goto wywyyuawikmwceym;
        ckqgkowqkggscuoi:
        $yiasugywggckywoa["\143\x61\x74"] = $yiasugywggckywoa["\143\x61\x74\145\147\x6f\x72\x79"];
        goto qowqokqkiweosuwa;
        qymkekiqwouwaoos:
        wimqsusyesasaism:
        goto eceowukgiumqosom;
        kymkyymiquekuscq:
        if (empty($yiasugywggckywoa["\143\141\164\145\147\x6f\162\x79"])) {
            goto mmgsqoiukqkyiayw;
        }
        goto ckqgkowqkggscuoi;
        qowqokqkiweosuwa:
        mmgsqoiukqkyiayw:
        goto qucmewyuwkkwsseo;
        uockmkmeymgyqsqi:
        $ycmguuqqaiisymgg = ["\156\x75\155\x62\x65\162\160\157\163\x74\x73" => 5, "\x63\141\164\x65\x67\157\162\x79" => 0, "\157\x72\x64\145\x72\x62\171" => "\x64\141\164\x65", "\157\x72\144\x65\162" => "\104\x45\123\103", "\x69\156\143\x6c\165\x64\x65" => [], "\145\x78\143\x6c\165\x64\x65" => [], "\x6d\145\x74\x61\x5f\x6b\x65\171" => '', "\x6d\145\x74\141\137\166\x61\154\165\145" => '', "\x70\x6f\163\164\x5f\164\171\x70\145" => $useksmwkuswkwcqg, "\x73\165\160\160\162\x65\x73\163\x5f\146\x69\x6c\x74\x65\162\163" => true];
        goto sigisgiqiuiuqemc;
        wkkwgyuaqwiygawe:
        yoceycuiiwwmscci:
        goto uaeyogsicwkuwcak;
        zkuyggayyoqeeqek:
        $egekuwigiusmwiek = wp_parse_id_list($yiasugywggckywoa["\151\156\143\x6c\x75\x64\x65"]);
        goto omcseuaowsucussk;
        wywyyuawikmwceym:
        qeyuquwgysuucygo:
        goto eomwsawiqyuyiiiw;
        iwcwuugoguscgqye:
        xeyusieocqgkowca:
        goto kymkyymiquekuscq;
        ikwwiueqmmkayyce:
        $yiasugywggckywoa["\x70\157\163\x74\163\x5f\x70\145\x72\x5f\x70\x61\x67\145"] = $yiasugywggckywoa["\156\165\x6d\x62\145\162\160\x6f\163\x74\163"];
        goto iwcwuugoguscgqye;
        megauiwcsiuuiquk:
        kmocumwwsgkgeqay:
        goto zkuyggayyoqeeqek;
        qucmewyuwkkwsseo:
        if (!empty($yiasugywggckywoa["\x69\156\x63\x6c\165\x64\x65"])) {
            goto kmocumwwsgkgeqay;
        }
        goto kocoameeyqygkwok;
        sigisgiqiuiuqemc:
        $yiasugywggckywoa = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg);
        goto siiyycmowckwsemw;
        omcseuaowsucussk:
        $yiasugywggckywoa["\160\157\163\x74\x73\137\160\x65\x72\137\160\141\147\x65"] = count($egekuwigiusmwiek);
        goto iimqqykwwmqeukai;
        eomwsawiqyuyiiiw:
        $yiasugywggckywoa["\x69\147\156\157\x72\145\137\x73\164\x69\x63\153\171\x5f\x70\x6f\x73\x74\x73"] = true;
        goto okeewwyoqawamsoa;
        gyuioyyowaiqcywy:
    }
    
    public static function weescwwgqgiyumyw($post, $seyqqsmuaiegkeeq, $ywmkwiwkosakssii = [])
    {
        goto cyamaucweckqmscc;
        cyamaucweckqmscc:
        $uyuaosigqymaqsaa = DecoratorPost::weescwwgqgiyumyw(self::mwikyscisascoeea($post), $seyqqsmuaiegkeeq, $ywmkwiwkosakssii);
        goto ssiwoquqiiuysuma;
        yucmskwuguqgqimc:
        gcaaimgqweguwksg:
        goto eeieegmqysegumei;
        ssiwoquqiiuysuma:
        if (!(!is_array($uyuaosigqymaqsaa) || is_wp_error($uyuaosigqymaqsaa))) {
            goto gcaaimgqweguwksg;
        }
        goto iiukckigywisaego;
        iiukckigywisaego:
        $uyuaosigqymaqsaa = [];
        goto yucmskwuguqgqimc;
        eeieegmqysegumei:
        return $uyuaosigqymaqsaa;
        goto usyyyguieaqqyswa;
        usyyyguieaqqyswa:
    }
    
    public static function ekauksssqmmykouq($post = null, $wwgucssaecqekuek = [])
    {
        goto smsymmwykgkakeqk;
        agauowggkqsoyqiq:
        $qscaoekmoooeuyqg = ManipulateHTML::uuccukgasskgimsq("\141", $wwgucssaecqekuek, $ymqmyyeuycgmigyo);
        goto okyuswywywsaeias;
        okyuswywywsaeias:
        ousiqsmccumayaes:
        goto aeaqgqqqowqykgcc;
        mqkwmkuieegmucmg:
        $wwgucssaecqekuek["\x68\162\x65\146"] = $qscaoekmoooeuyqg;
        goto ugaowwakggeccsic;
        mgywqmgswkeyucaq:
        if (!$qscaoekmoooeuyqg) {
            goto ousiqsmccumayaes;
        }
        goto mqkwmkuieegmucmg;
        ugaowwakggeccsic:
        $ymqmyyeuycgmigyo = DecoratorAuthor::igawqaomowicuayw("\x64\x69\x73\x70\154\141\x79\x5f\x6e\141\x6d\x65", self::mguqscccckuywsya($post));
        goto agauowggkqsoyqiq;
        aeaqgqqqowqykgcc:
        return $qscaoekmoooeuyqg;
        goto iycimwiaauksigiw;
        smsymmwykgkakeqk:
        $qscaoekmoooeuyqg = self::qkweigiqsaaigqau($post);
        goto mgywqmgswkeyucaq;
        iycimwiaauksigiw:
    }
    
    public static function gueasuouwqysmomu($post = null, $awqscowmskeuymeu = false)
    {
        goto aiaiswgwmcguoues;
        iimwiesgggauwcqk:
        if (!(is_array($post) || $post instanceof WP_Post)) {
            goto cyomqwmieugiasem;
        }
        goto gomiiockquaqsyuo;
        iiysucwqgweammss:
        yuycmoyawueickya:
        goto gaqccucuqyssqkmy;
        aiaiswgwmcguoues:
        $useksmwkuswkwcqg = get_post_type();
        goto mwuisiuasugcaywu;
        mwuisiuasugcaywu:
        if (!is_numeric($post)) {
            goto cccgemwsykwgemeg;
        }
        goto asckqiuugiguuiwe;
        gomiiockquaqsyuo:
        $useksmwkuswkwcqg = ManipulateArray::get($post, "\160\x6f\x73\164\137\164\171\x70\x65");
        goto ciqqeouuygcaiiiq;
        asckqiuugiguuiwe:
        $post = self::get($post);
        goto wcuuyecsiamsaqqy;
        gaqccucuqyssqkmy:
        if (!$awqscowmskeuymeu) {
            goto oieoyiowucgkouoq;
        }
        goto gioogyikawiiiyqq;
        qgyqamakooyqciyo:
        if ($useksmwkuswkwcqg) {
            goto yuycmoyawueickya;
        }
        goto wioicqyeyqmsckwg;
        wioicqyeyqmsckwg:
        $useksmwkuswkwcqg = ManipulateServer::get("\x70\157\x73\x74\137\164\x79\160\x65");
        goto iiysucwqgweammss;
        ciqqeouuygcaiiiq:
        cyomqwmieugiasem:
        goto qgyqamakooyqciyo;
        seggcuqcuiaegeya:
        oieoyiowucgkouoq:
        goto ucouymumcuosygii;
        ucouymumcuosygii:
        return $useksmwkuswkwcqg;
        goto woquimckgiecokuo;
        gioogyikawiiiyqq:
        $useksmwkuswkwcqg = self::waaisqccqacqeium($useksmwkuswkwcqg);
        goto seggcuqcuiaegeya;
        wcuuyecsiamsaqqy:
        cccgemwsykwgemeg:
        goto iimwiesgggauwcqk;
        woquimckgiecokuo:
    }
    
    public static function gamoemyysmgugccu($post = null, $iueymcwwscwqkiyq = "\x61\154\154")
    {
        return self::ymgsgecsiqeegseg($post, $iueymcwwscwqkiyq) > 0;
    }
    
    public static function wsqeykgqiemswysa($sqeykgyoooqysmca, $iueymcwwscwqkiyq = "\160\x75\142\154\151\163\150", $yiyimoacecwoqeko = '')
    {
        return ManipulateArray::get(wp_count_posts($sqeykgyoooqysmca, $yiyimoacecwoqeko), $iueymcwwscwqkiyq);
    }
    
    public static function igkcwemyysqkwuuy($meqocwsecsywiiqs, $useksmwkuswkwcqg, $ywmkwiwkosakssii = [])
    {
        goto cqmkeyweesgwycgy;
        gsoskqieucsesaks:
        if (!(strlen($meqocwsecsywiiqs) > 1)) {
            goto gggayasokuomgeus;
        }
        goto guoyescsqcuuymku;
        yeuqcwawkauowkgu:
        gggayasokuomgeus:
        goto euuaeuyegkksasge;
        guoyescsqcuuymku:
        $ywmkwiwkosakssii["\x73"] = $meqocwsecsywiiqs;
        goto emkqygwcsiyiykiw;
        euuaeuyegkksasge:
        DecoratorHook::cecaguuoecmccuse("\x70\157\x73\164\x73\137\163\x65\141\x72\x63\150", [__CLASS__, "\x69\165\x61\x61\143\167\167\171\147\x6b\x6d\x63\157\x65\x69\x79"], 10, 2);
        goto akuskaiiaswmksko;
        equokkeomguewmua:
        return $wyoiwuqokyeeuguk;
        goto cigaaqeauwccoiqa;
        emkqygwcsiyiykiw:
        $ywmkwiwkosakssii["\163\165\160\x70\x72\x65\x73\x73\x5f\146\151\x6c\x74\x65\162\163"] = false;
        goto yeuqcwawkauowkgu;
        cqmkeyweesgwycgy:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x6f\x72\x64\145\x72" => "\101\x53\103", "\x70\x6f\x73\164\163\x5f\x70\145\162\137\x70\x61\x67\145" => 10]);
        goto gsoskqieucsesaks;
        wmsigkymceakwywo:
        DecoratorHook::ggmgmqswqkgecosg("\x70\157\x73\x74\x73\137\x73\145\x61\x72\143\150", [__CLASS__, "\x69\165\141\141\143\167\x77\171\x67\153\x6d\143\157\145\x69\x79"], 10);
        goto equokkeomguewmua;
        akuskaiiaswmksko:
        $wyoiwuqokyeeuguk = self::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii);
        goto wmsigkymceakwywo;
        cigaaqeauwccoiqa:
    }
    
    public static function ygwimyogyaqgumam($aiowsaccomcoikus, $post = null, $mgkceomocowocqyo = [])
    {
        return DecoratorPost::ygwimyogyaqgumam($aiowsaccomcoikus, self::mwikyscisascoeea($post), $mgkceomocowocqyo);
    }
    
    public static function kckogqkiycqeumoa($post, $kesssewsiegssiya, $qqgsimqiqyaugceg = true)
    {
        goto gacasmwcscckymwc;
        xocaameouysockim:
        seqwmeeoiicciigo:
        goto sycecywsiomgcuiq;
        gacasmwcscckymwc:
        $uyuaosigqymaqsaa = self::weescwwgqgiyumyw($post, $kesssewsiegssiya);
        goto koiimcuoyakqsuam;
        iccqsmwsmisaayam:
        $uyuaosigqymaqsaa = isset($uyuaosigqymaqsaa[0]) ? $uyuaosigqymaqsaa[0] : null;
        goto sqecccyugmaiuwsq;
        eskmkqowoyogaoko:
        $uyuaosigqymaqsaa = null;
        goto keygywkiwuoagqsw;
        sycecywsiomgcuiq:
        return $uyuaosigqymaqsaa;
        goto yaswwoqemsqmawse;
        sqecccyugmaiuwsq:
        qwkoeagysgskmuyq:
        goto xocaameouysockim;
        iwmassqyauymkwaa:
        if (!$qqgsimqiqyaugceg) {
            goto qwkoeagysgskmuyq;
        }
        goto iccqsmwsmisaayam;
        keygywkiwuoagqsw:
        goto seqwmeeoiicciigo;
        goto hwiqmsqyyiscmeiu;
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
        weyumyqgceqsimmq:
        return $iayakwckycsumkqa;
        goto mkiyekcyyukamwck;
        ogisaykaiaeuiika:
        if (!(!$gioggcykgoikcwiy || DecoratorPost::seewsasmyoyciiee($post))) {
            goto icwuocgiukckmyyu;
        }
        goto vseyiyomcwkayoio;
        kwgwkkkaagkkesik:
        icwuocgiukckmyyu:
        goto weyumyqgceqsimmq;
        cioomiusgwycykag:
        $post = self::get($post);
        goto aeesuccguagwomqw;
        mkiyekcyyukamwck:
    }
    
    public static function cagmcswsqkwuasiy($sciomagaqmgggsiu = self::DEFAULT_POST_TYPES)
    {
        goto domskgkmquiwwqcg;
        domskgkmquiwwqcg:
        global $pagenow;
        goto seousiqwmmcaygac;
        qqecycksisecgwiw:
        if (!(is_array($sciomagaqmgggsiu) && in_array($useksmwkuswkwcqg, $sciomagaqmgggsiu) || is_string($useksmwkuswkwcqg) && $useksmwkuswkwcqg == $sciomagaqmgggsiu)) {
            goto guwikcacqsmwkyya;
        }
        goto ueeowwusmsueouao;
        cqoeiqeeukaiioia:
        $useksmwkuswkwcqg = self::gueasuouwqysmomu();
        goto qqecycksisecgwiw;
        wgcewuoaksusicyi:
        return $sogksuscggsicmac;
        goto oeqsgusqqgoioqwu;
        uuauuoykcoseecuu:
        guwikcacqsmwkyya:
        goto okwgeicyaawqyoye;
        ueeowwusmsueouao:
        $sogksuscggsicmac = true;
        goto uuauuoykcoseecuu;
        ukqomyqaykkiygwu:
        if (!($pagenow == "\x65\144\151\164\56\x70\150\160" && is_admin())) {
            goto ueiqomqieicasmsi;
        }
        goto cqoeiqeeukaiioia;
        seousiqwmmcaygac:
        $sogksuscggsicmac = false;
        goto ukqomyqaykkiygwu;
        okwgeicyaawqyoye:
        ueiqomqieicasmsi:
        goto wgcewuoaksusicyi;
        oeqsgusqqgoioqwu:
    }
    
    public static function ymgsgecsiqeegseg($post = null, $iueymcwwscwqkiyq = "\x61\160\160\162\x6f\x76\x65\x64")
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
        igegouiwyasqgwwc:
        wmwkgawmkmciaeoi:
        goto mamieseosscguoye;
        yagoqwkegiyqceoe:
        ssqieyoogiwsyksk:
        goto oywouymwcigkauye;
        siceqsgwyswyguog:
        $post = self::get($post);
        goto qmsmcsoqgumsigme;
        mamieseosscguoye:
        $ewgwqamkygiqaawc = DecoratorPost::souwykwwmyygqyqi($post);
        goto gqcsicosskykmgiu;
        oywouymwcigkauye:
        $ewgwqamkygiqaawc = ManipulateArray::get($post, "\x70\157\x73\164\x5f\143\x6f\156\x74\145\x6e\164");
        goto iaekkeskykqsyiim;
        kaaweieegskiqqgm:
        if ($post) {
            goto ssqieyoogiwsyksk;
        }
        goto kgkweawaqmqomkuc;
        skuwwwayeyemggoe:
        return $ewgwqamkygiqaawc;
        goto ieywgqsawwkgiamc;
        kgkweawaqmqomkuc:
        goto bgsaeeicmsikiwgm;
        goto igegouiwyasqgwwc;
        gqcsicosskykmgiu:
        goto bgsaeeicmsikiwgm;
        goto yagoqwkegiyqceoe;
        qmsmcsoqgumsigme:
        $ewgwqamkygiqaawc = '';
        goto uucqywaoqssqggug;
        iaekkeskykqsyiim:
        bgsaeeicmsikiwgm:
        goto skuwwwayeyemggoe;
        uucqywaoqssqggug:
        if ($egkeamycaysqsoma) {
            goto wmwkgawmkmciaeoi;
        }
        goto kaaweieegskiqqgm;
        ieywgqsawwkgiamc:
    }
    
    public static function ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $post = null, $oyuqkqayqyqysyse = '')
    {
        return DecoratorPost::ksmqawcowkmegigw(self::mwikyscisascoeea($post), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $oyuqkqayqyqysyse);
    }
    
    public static function mmoaikqueyiwcesm($post, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii["\x70\x6f\163\164\x5f\x70\141\x72\x65\156\164"] = self::mwikyscisascoeea($post);
        return self::ciugwooasaqcywas(DecoratorPost::gueasuouwqysmomu($post), $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
    
    public static function qmmimiesyoyuqeqo($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        goto iswuimkowigsiwmi;
        iswuimkowigsiwmi:
        $eyagosskwwmgwmog = self::uswuayuaaosoksqg($useksmwkuswkwcqg, $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
        goto yysqwceyageaeieo;
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
        ceoicyukguaouuwa:
    }
    
    public static function ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        goto eoqgquwgcgkugouq;
        iqkgeamgsuwqkckg:
        foreach ($wyoiwuqokyeeuguk as $uusmaiomayssaecw => $post) {
            goto wecuakwyikeqwyac;
            ukmmkgmcooowqksi:
            if (!$meqocwsecsywiiqs) {
                goto wmgqacaeeuokysey;
            }
            goto sisumqgocskwyago;
            sisumqgocskwyago:
            $sogksuscggsicmac[self::mwikyscisascoeea($post)] = $meqocwsecsywiiqs;
            goto miyyiuaokyesyygy;
            miyyiuaokyesyygy:
            wmgqacaeeuokysey:
            goto iocmmwiqausgmkcu;
            iocmmwiqausgmkcu:
            ymgyewqwqmcukmyu:
            goto usuwmkwcsukckuee;
            wecuakwyikeqwyac:
            $meqocwsecsywiiqs = get_the_title($post);
            goto ukmmkgmcooowqksi;
            usuwmkwcsukckuee:
        }
        goto wgiakoeckyswemak;
        faiesskquaeiqqom:
        if ($aqykuigiuwmmcieu == self::LABELS) {
            goto ewmmuusmqgceimky;
        }
        goto wayoumqqasqeowsk;
        qaewuekauiwkuwoa:
        $ycmguuqqaiisymgg = [self::POST_TYPE => $useksmwkuswkwcqg, self::POSTS_PER_PAGE => -1];
        goto qgumkmmmeaoskamq;
        qgumkmmmeaoskamq:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg);
        goto makigymuacqucieo;
        syauycikyosiscgs:
        goto eoiysyeyuwwugsee;
        goto iqiwskswayisages;
        suqyiooacuiiqcuk:
        return $sogksuscggsicmac;
        goto iygakaaakekgyeqy;
        makigymuacqucieo:
        $ywmkwiwkosakssii = DecoratorHook::sscegwueamckwmcy("\x67\x65\164\x5f\x70\157\x73\164\x73\x5f\x61\162\147\163", $ywmkwiwkosakssii);
        goto yygauekecaiessss;
        uiyuycigkskokcco:
        eoiysyeyuwwugsee:
        goto suqyiooacuiiqcuk;
        iqiwskswayisages:
        ewmmuusmqgceimky:
        goto iqkgeamgsuwqkckg;
        wgiakoeckyswemak:
        ygeaissawcacmmyu:
        goto uiyuycigkskokcco;
        yygauekecaiessss:
        $wyoiwuqokyeeuguk = DecoratorPost::ciugwooasaqcywas($ywmkwiwkosakssii);
        goto faiesskquaeiqqom;
        wayoumqqasqeowsk:
        $sogksuscggsicmac = $wyoiwuqokyeeuguk;
        goto syauycikyosiscgs;
        eoqgquwgcgkugouq:
        $sogksuscggsicmac = [];
        goto qaewuekauiwkuwoa;
        iygakaaakekgyeqy:
    }
    
    public static function uamasysiccecccmw($oiegiwogmwmawkeo = "\160\157\x73\x74\x2d\x74\x68\165\x6d\x62\156\x61\151\x6c", $post = null)
    {
        $eeamcawaiqocomwy = DecoratorPost::uamasysiccecccmw(self::mwikyscisascoeea($post), $oiegiwogmwmawkeo);
        return (string) DecoratorHook::sscegwueamckwmcy("\x70\157\x73\x74\137\x74\x68\x75\x6d\x62\156\141\x69\154\x5f\165\x72\154", $eeamcawaiqocomwy, $post, $oiegiwogmwmawkeo);
    }
    
    public static function ymuqsscwmcumcama($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::POST_TYPE => $useksmwkuswkwcqg, "\160\157\163\x74\x5f\x73\164\x61\x74\165\x73" => "\x70\x75\142\x6c\151\163\x68"]);
        return DecoratorPost::ymuqsscwmcumcama($ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
    
    public static function squyiyimquqicqke($saqmwwmqiwmkiwaa = null, $post = null, $egkeamycaysqsoma = true)
    {
        goto giuwumskimssakwo;
        ioecigquiawyecis:
        $ocogsiouoiuuguym = DecoratorPost::kugamkssceycoyaq($saqmwwmqiwmkiwaa, false, $post);
        goto aikomgoeseyekwqa;
        aikomgoeseyekwqa:
        if (!$egkeamycaysqsoma) {
            goto suuocycsksmcsqsm;
        }
        goto aocacgkcisiuosug;
        csmwsuakqgukaqkm:
        suuocycsksmcsqsm:
        goto sckagcuweuycciog;
        iiugkqmswuikwcuo:
        if (!$post) {
            goto yaioeuewuagwmaym;
        }
        goto sweyywawiwkgsqkw;
        yimcyeuemqyssysu:
        return $ocogsiouoiuuguym;
        goto towiyceuykgmeooc;
        wycsycuaymkqqgce:
        $saqmwwmqiwmkiwaa = ManipulateSetting::uyomwmskouyyqyyq();
        goto ggwgiusgggqqckqw;
        mumcqcssasmyqmca:
        $ocogsiouoiuuguym = null;
        goto iiugkqmswuikwcuo;
        giuwumskimssakwo:
        $post = self::get($post);
        goto mumcqcssasmyqmca;
        aocacgkcisiuosug:
        $ocogsiouoiuuguym = DecoratorHook::sscegwueamckwmcy("\x67\145\x74\137\x74\150\x65\x5f\x64\141\x74\x65", $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $post);
        goto csmwsuakqgukaqkm;
        sckagcuweuycciog:
        yaioeuewuagwmaym:
        goto yimcyeuemqyssysu;
        ggwgiusgggqqckqw:
        ewqwyuuyegqukcmw:
        goto ioecigquiawyecis;
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
        cecqqywgssugeikg:
        return $post;
        goto ogoigckgkacomgsw;
        qqcagaaisccuygwq:
        kqgkgyyskmmomkuy:
        goto maimcygiikgukege;
        quwawmyimwumqiik:
        if ($post) {
            goto ciusceaiyqsgwesy;
        }
        goto aoasseeyymigiuqg;
        kemyesuyqgygsgmc:
        goto kqgkgyyskmmomkuy;
        goto yuaeosigaqocaswy;
        agwwockuoekeayoe:
        $post = null;
        goto qqcagaaisccuygwq;
        cgmkwykqsuikugio:
        if (!$post && $cwwowqyuwccuykom) {
            goto agmoeimoggkkmamk;
        }
        goto quwawmyimwumqiik;
        aoasseeyymigiuqg:
        $post = ManipulateServer::get(self::POST);
        goto gasqiqwuuokswuak;
        yuaeosigaqocaswy:
        agmoeimoggkkmamk:
        goto agwwockuoekeayoe;
        ieiwqquomwgcgasg:
        $post = DecoratorPost::get($post, $aqykuigiuwmmcieu);
        goto kemyesuyqgygsgmc;
        maimcygiikgukege:
        mkmcaqquqsycicwk:
        goto cecqqywgssugeikg;
        iyeukmoycqcoeoww:
        if ($post instanceof WP_Post) {
            goto mkmcaqquqsycicwk;
        }
        goto cgmkwykqsuikugio;
        gasqiqwuuokswuak:
        ciusceaiyqsgwesy:
        goto ieiwqquomwgcgasg;
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
        igawggssmuyywoiw:
        goto aqqaecewqeqyecge;
        goto omsmasoumqusgusq;
        kyycgosayogwiose:
        aqqaecewqeqyecge:
        goto uikosuscmyagkucg;
        uikosuscmyagkucg:
        return trailingslashit($migiiksoiymissge);
        goto cucceeyaayakweic;
        keoqugaesaeocwky:
        $migiiksoiymissge = $ccamueccusigaaio;
        goto kyycgosayogwiose;
        eaesqqacyqsmmasw:
        $migiiksoiymissge = '';
        goto aceokuucoumoawei;
        omsmasoumqusgusq:
        pgkmykoemkssyciw:
        goto keoqugaesaeocwky;
        ckamssoyigceqkqe:
        goto aqqaecewqeqyecge;
        goto oigskyaeyywyscoi;
        oigskyaeyywyscoi:
        ogcucyqcaawqsikk:
        goto asecysweauowukym;
        asecysweauowukym:
        $migiiksoiymissge = DecoratorPost::ycqquoiyyuesegsy($post, $eoocgqsqmwuegiae);
        goto igawggssmuyywoiw;
        aceokuucoumoawei:
        if ($post) {
            goto ogcucyqcaawqsikk;
        }
        goto ioaiogagwmswaiyu;
        ycyukikioeesmosk:
        $post = self::mwikyscisascoeea($ccamueccusigaaio, $cwwowqyuwccuykom);
        goto eaesqqacyqsmmasw;
        ioaiogagwmswaiyu:
        if (is_string($ccamueccusigaaio) && ManipulateValidation::wmcwegoisyeeosqu($ccamueccusigaaio)) {
            goto pgkmykoemkssyciw;
        }
        goto ckamssoyigceqkqe;
        cucceeyaayakweic:
    }
    
    public static function uswuayuaaosoksqg($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii["\x70\x6f\x73\x74\137\x70\x61\x72\x65\x6e\164"] = 0;
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
        iewuoiiumywkmwwi:
        $ocogsiouoiuuguym = DecoratorPost::kkkiiqssauymiqsk($saqmwwmqiwmkiwaa, false, $post);
        goto yiooaygkcosiouiq;
        ikiqwwyuwiqkgoqq:
        $ocogsiouoiuuguym = DecoratorHook::sscegwueamckwmcy("\x67\x65\164\x5f\x74\150\x65\x5f\x6d\x6f\x64\x69\146\151\x65\144\137\144\141\x74\145", $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $post);
        goto qqyeoguyyawwacyi;
        koywwayicykawmsw:
        oqigaksscaygqcyg:
        goto iewuoiiumywkmwwi;
        waqguwsseiamucog:
        uawiiskiyascymig:
        goto igcogeumkiyaiekm;
        imkcoqicusaaieiq:
        $ocogsiouoiuuguym = null;
        goto eiugaasyaiggaoem;
        eiugaasyaiggaoem:
        if (!$post) {
            goto uawiiskiyascymig;
        }
        goto oigewwwkwggioeom;
        mwgogaswksgaiggw:
        $post = self::get($post);
        goto imkcoqicusaaieiq;
        oigewwwkwggioeom:
        if ($saqmwwmqiwmkiwaa) {
            goto oqigaksscaygqcyg;
        }
        goto gwciqqammeugmyic;
        igcogeumkiyaiekm:
        return $ocogsiouoiuuguym;
        goto moaekmimicakwisg;
        gwciqqammeugmyic:
        $saqmwwmqiwmkiwaa = ManipulateSetting::uyomwmskouyyqyyq();
        goto koywwayicykawmsw;
        moaekmimicakwisg:
    }
    
    public static function uqwgsuysegkweago($sciomagaqmgggsiu = self::DEFAULT_POST_TYPES, $ccamueccusigaaio = "\142\x6f\x74\150")
    {
        goto oogauyisucksqwgq;
        qeiygiiuygamegkq:
        if (!(is_array($sciomagaqmgggsiu) && in_array($useksmwkuswkwcqg, $sciomagaqmgggsiu) || $useksmwkuswkwcqg === $sciomagaqmgggsiu)) {
            goto wkgossscggiwwgqi;
        }
        goto kwyosousqcwgcaqq;
        uciwcwkusqqwicyi:
        wkgossscggiwwgqi:
        goto qycyyqyaseuqsoss;
        euuweiukuiuwcuym:
        ouwsgqaiqguiomym:
        goto imscuiceoqcqeuec;
        imscuiceoqcqeuec:
        if (!(is_admin() && $sciomagaqmgggsiu)) {
            goto ucwqokwamqeiyauo;
        }
        goto qaaeckkicouagsiq;
        usukgagsmcsgayiq:
        if ($sciomagaqmgggsiu) {
            goto ouwsgqaiqguiomym;
        }
        goto mwqksegiysmkmase;
        kwyosousqcwgcaqq:
        switch ($ccamueccusigaaio) {
            case "\x65\144\151\x74":
                $sogksuscggsicmac = in_array($pagenow, ["\x70\x6f\163\164\x2e\160\150\160"]);
                goto cmgkyyywsqscoeia;
            case "\x6e\x65\x77":
                $sogksuscggsicmac = in_array($pagenow, ["\160\x6f\163\x74\55\x6e\x65\167\x2e\160\150\160"]);
                goto cmgkyyywsqscoeia;
            default:
                $sogksuscggsicmac = in_array($pagenow, ["\160\x6f\163\x74\56\160\150\x70", "\160\157\x73\x74\55\156\x65\167\56\160\x68\160"]);
        }
        goto asayowukiisowcoo;
        mwqksegiysmkmase:
        $sciomagaqmgggsiu = ManipulatePost::mwoyqeeigwqoamiw();
        goto euuweiukuiuwcuym;
        oogauyisucksqwgq:
        $sogksuscggsicmac = false;
        goto usukgagsmcsgayiq;
        qaaeckkicouagsiq:
        global $pagenow;
        goto wiwcgyekioquskkg;
        wsokcmgygywqyuki:
        return $sogksuscggsicmac;
        goto smaemsgsuyckcasg;
        woysagioiaegygiw:
        cmgkyyywsqscoeia:
        goto uciwcwkusqqwicyi;
        wiwcgyekioquskkg:
        $useksmwkuswkwcqg = self::cwucesiiikgqsgui();
        goto qeiygiiuygamegkq;
        qycyyqyaseuqsoss:
        ucwqokwamqeiyauo:
        goto wsokcmgygywqyuki;
        asayowukiisowcoo:
        cwukciqgyiykkmme:
        goto woysagioiaegygiw;
        smaemsgsuyckcasg:
    }
    
    public static function qgisekcaywsmigga(string $useksmwkuswkwcqg, string $gwiwsycaaqgwmewg, $aucgaecqisksougg = null, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc(["\x6d\145\x74\x61\x5f\x6b\145\x79" => $gwiwsycaaqgwmewg, "\155\x65\164\141\x5f\166\141\x6c\x75\x65" => $aucgaecqisksougg, "\x70\157\x73\164\137\x73\x74\x61\164\x75\163" => "\141\x6e\171"], $ywmkwiwkosakssii);
        return self::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
}
