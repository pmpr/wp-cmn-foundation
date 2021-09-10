<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Media\Icon;

use DirectoryIterator;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use Pmpr\Common\Foundation\Manipulate\ManipulateFile;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\Media\Common;
use WP_Post;

class Icon extends Common
{
    const IS_ICON = "\151\163\x5f\151\x63\x6f\156";
    const ICONS_PATH = "\151\155\x67\x2f\163\166\x67\57\151\143\157\156";
    
    protected ?string $root = null;
    
    public function ikeqsmumgwwuqmkw() : ?string
    {
        return $this->root;
    }
    
    public function __construct()
    {
        $this->root = self::cmewgsgomuwkkoou();
        parent::__construct();
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x69\x6e\x69\x74", [$this, "\x75\143\x71\143\x79\171\x69\x75\151\x77\145\x77\163\165\147\153"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\151\x63\x6f\156\137\150\164\x6d\154\137\162\145\x6e\x64\145\x72"), [$this, "\x72\145\156\x64\145\x72"], 10, 3);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\145\144\151\x74\137\x61\x74\x74\141\143\150\x6d\145\156\164", [$this, "\143\161\x6f\167\165\151\x67\155\167\143\161\161\143\x63\x75\x73"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\151\143\157\156\137\163\166\x67\x32\x62\141\163\x65\x36\x34"), [$this, "\x6f\x61\x75\x65\163\x61\x69\157\141\x79\x63\167\171\171\147\x79"])->cecaguuoecmccuse("\145\x73\x63\x61\x70\x65\x64\x5f\151\x63\x6f\x6e\163\137\x64\162\157\160\x64\x6f\x77\156", [$this, "\167\143\163\x79\x63\157\163\157\157\x73\141\x77\143\155\143\x75"], 10, 2)->cecaguuoecmccuse("\x61\164\x74\x61\143\x68\155\145\x6e\x74\x5f\x66\151\x65\154\144\163\x5f\164\x6f\137\145\144\151\164", [$this, "\167\165\167\157\143\141\157\151\x69\145\x69\x77\145\x79\171\157"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\151\x63\157\156\x5f\x68\164\x6d\x6c\137\x66\151\154\164\x65\162"), [$this, "\167\x63\163\151\167\153\143\x79\145\x6f\x6b\x61\155\x69\153\145"], 10, 3);
        parent::kgquecmsgcouyaya();
    }
    
    public function kwagkemgawuoacwy($ywmkwiwkosakssii = [])
    {
        return ManipulatePost::qgisekcaywsmigga("\x61\164\x74\141\x63\150\155\145\156\x74", self::IS_ICON, 1, $ywmkwiwkosakssii);
    }
    
    public function umqsskakomkwuamy($aiooqyausygaasqm) : bool
    {
        return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\141\x74\x74\x61\x63\x68\x6d\145\156\x74\x5f\x69\x73\137\x73\166\147"), false, $aiooqyausygaasqm);
    }
    
    public function wcsycosoosawcmcu($ykiyyumywksqcisg, $gskuwmeemyeuwogc)
    {
        goto wqmokemugmgoomik;
        mogkgqmmcowsmsoc:
        ecsaymiksecmoomi:
        goto bgoqumcuqmceeigi;
        kmmyeqikyciayaoc:
        foreach ($aieaqakyuyewkkwe as $aiooqyausygaasqm) {
            goto qcgowmuiwyiesuqq;
            syucweceooaayiqm:
            $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($aiooqyausygaasqm);
            goto oeyikqyiqqqsiaog;
            xiyuyqywsaaaeuuk:
            $ykiyyumywksqcisg[$aokagokqyuysuksm] = sprintf($gskuwmeemyeuwogc, ManipulatePost::qcgakseyaikigqco($aiooqyausygaasqm), $wkaqekwwgqsqwcoi);
            goto wyeoumiuesqiuuaa;
            lwwuwssgsqccisgk:
            eywccamccqiwmygw:
            goto yumawusgeuasmweo;
            oeyikqyiqqqsiaog:
            $wkaqekwwgqsqwcoi = ManipulateAttachment::qaeeusqkgwagwaqc($aokagokqyuysuksm, "\164\167\151\164\x74\x65\162", ["\x63\x6c\x61\x73\x73" => "\160\x72\55\x69\143\157\x6e\40\151\143\157\x6e\x2d\x78\163"], true);
            goto xiyuyqywsaaaeuuk;
            qcgowmuiwyiesuqq:
            if (!$aiooqyausygaasqm instanceof WP_Post) {
                goto yqcsakyqkiowyigs;
            }
            goto syucweceooaayiqm;
            wyeoumiuesqiuuaa:
            yqcsakyqkiowyigs:
            goto lwwuwssgsqccisgk;
            yumawusgeuasmweo:
        }
        goto mogkgqmmcowsmsoc;
        bgoqumcuqmceeigi:
        return $ykiyyumywksqcisg;
        goto aisygkoacuuqeymm;
        wqmokemugmgoomik:
        $aieaqakyuyewkkwe = $this->kwagkemgawuoacwy();
        goto kmmyeqikyciayaoc;
        aisygkoacuuqeymm:
    }
    
    public function wuwocaoiieiweyyo($ikgwqyuyckaewsow, $post)
    {
        goto qgiokeecugwacuka;
        uscugymouummumyy:
        $amwuugigousqwmey = ManipulatePost::igawqaomowicuayw(self::IS_ICON, $post, true);
        goto aqwccmsqgqgumymq;
        imeaooemieqcmgag:
        qwaaukoseakigsgy:
        goto soeawcescakswowc;
        qgiokeecugwacuka:
        if (!$this->umqsskakomkwuamy($post)) {
            goto qwaaukoseakigsgy;
        }
        goto uscugymouummumyy;
        soeawcescakswowc:
        return $ikgwqyuyckaewsow;
        goto qmiseemyqgoaemmo;
        aqwccmsqgqgumymq:
        $ikgwqyuyckaewsow[self::IS_ICON] = ["\x6c\141\142\145\x6c" => __("\x55\163\x65\40\x46\157\162\40\x49\x63\157\156", PR__THM__FOUNDATION), "\x69\156\x70\x75\x74" => "\x68\x74\x6d\x6c", "\150\x74\155\154" => MetaBox::wcwmusaouiqaqeww(self::IS_ICON)->iygyugseyaqwywyg($amwuugigousqwmey ? $amwuugigousqwmey : "\x6f\x66\x66")->render(), "\x68\145\154\x70\x73" => __("\103\x68\x65\x63\153\x20\x69\x66\x20\x79\157\x75\x20\x77\141\156\164\x20\x73\150\157\x77\40\x74\x68\x69\163\40\141\164\164\141\x63\150\x6d\145\x6e\x74\x20\x69\x6e\40\151\143\x6f\156\40\x6c\x69\163\x74\56", PR__CMN__FOUNDATION)];
        goto imeaooemieqcmgag;
        qmiseemyqgoaemmo:
    }
    
    public function render($wkaqekwwgqsqwcoi, array $wwgucssaecqekuek = [], string $oiegiwogmwmawkeo = "\164\x68\x75\x6d\142\x6e\x61\151\x6c")
    {
        echo $this->wcsiwkcyeokamike($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, $oiegiwogmwmawkeo);
    }
    
    public function cqowuigmwcqqccus($post)
    {
        goto cswuqoaewiyacqse;
        xkqkamoamikwyksk:
        return $post;
        goto skmcgcigmsyaguwq;
        scuugaikcycgagqs:
        asugqqyocowiuecu:
        goto oysiqukyogokmmmm;
        gaewyowqcmmuwwyw:
        if ($amwuugigousqwmey === "\157\156") {
            goto bgkoceiksggsqacw;
        }
        goto yimwwgqgoykeoyss;
        uecykquakwkkwwqe:
        bgkoceiksggsqacw:
        goto wuqecuowsgggioiw;
        sgeemcsaaywgusaq:
        if (!$this->umqsskakomkwuamy($post)) {
            goto kcwygygoyasciaia;
        }
        goto eieqmiiuoigqcqko;
        yimwwgqgoykeoyss:
        ManipulatePost::smqukgcyacswysqa(self::IS_ICON, $post);
        goto ykuwegiykkscuwsy;
        cswuqoaewiyacqse:
        $post = ManipulatePost::mwikyscisascoeea($post);
        goto sgeemcsaaywgusaq;
        oysiqukyogokmmmm:
        kcwygygoyasciaia:
        goto xkqkamoamikwyksk;
        ykuwegiykkscuwsy:
        goto asugqqyocowiuecu;
        goto uecykquakwkkwwqe;
        eieqmiiuoigqcqko:
        $amwuugigousqwmey = ManipulateServer::ayueggmoqeeukqmq(self::IS_ICON);
        goto gaewyowqcmmuwwyw;
        wuqecuowsgggioiw:
        ManipulatePost::ksmqawcowkmegigw(self::IS_ICON, $amwuugigousqwmey, $post);
        goto scuugaikcycgagqs;
        skmcgcigmsyaguwq:
    }
    
    public function wcsiwkcyeokamike($wkaqekwwgqsqwcoi, array $wwgucssaecqekuek = [], string $oiegiwogmwmawkeo = "\164\150\165\155\142\156\x61\x69\x6c") : string
    {
        goto kuysqaocycusiooc;
        eakcouagumsyocki:
        emscmyekmeyuwqwm:
        goto uqcuiuamymcyqiis;
        kimegcsekgymucck:
        $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\x61\x73\x73", "\x70\x72\55\151\143\157\156\40\x69\x63\x6f\x6e\x2d{$oiegiwogmwmawkeo}");
        goto omeckagooayaagig;
        omeckagooayaagig:
        if ($post) {
            goto rogsumkasqmoigce;
        }
        goto sucmuewciigceyei;
        wkgikmeuqucgkywg:
        goto emscmyekmeyuwqwm;
        goto aowqwmeaismiiwca;
        kuysqaocycusiooc:
        $post = ManipulatePost::mwikyscisascoeea($wkaqekwwgqsqwcoi, true);
        goto kimegcsekgymucck;
        ceowmegksgcgwuug:
        $nsmgceoqaqogqmuw = ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek);
        goto wkgikmeuqucgkywg;
        umgswqiiqagckcoa:
        $nsmgceoqaqogqmuw = ManipulateAttachment::qaeeusqkgwagwaqc($post, $oiegiwogmwmawkeo, $wwgucssaecqekuek);
        goto eakcouagumsyocki;
        uqcuiuamymcyqiis:
        return $nsmgceoqaqogqmuw;
        goto wswskaaocwgkamyc;
        aowqwmeaismiiwca:
        rogsumkasqmoigce:
        goto umgswqiiqagckcoa;
        sucmuewciigceyei:
        $wwgucssaecqekuek = $this->sscegwueamckwmcy("\x77\x70\x5f\x67\145\164\x5f\141\164\164\x61\143\x68\155\145\156\164\137\x69\155\141\147\145\x5f\x61\164\x74\x72\151\x62\x75\164\145\x73", $wwgucssaecqekuek, $wkaqekwwgqsqwcoi, $oiegiwogmwmawkeo);
        goto ceowmegksgcgwuug;
        wswskaaocwgkamyc:
    }
    
    public function compress($waoisqguweoociwe)
    {
        goto eckcaeocwsesemcu;
        gigyoewaqgumsusc:
        $waoisqguweoociwe = preg_replace("\x2f\134\x73\134\x73\x2b\x2f", "\40", $waoisqguweoociwe);
        goto iwqmyeyaqsuqmsoe;
        ouomswygcqoswiou:
        return $waoisqguweoociwe;
        goto eewqaciiuesekwgg;
        gaemigskmucygamw:
        $waoisqguweoociwe = preg_replace("\x2f\x5c\x6e\x2f", "\40", $waoisqguweoociwe);
        goto iegwsoeawuoiooiw;
        wskswcqwsiamcmgk:
        $waoisqguweoociwe = str_replace("\x3b\x22", "\42", $waoisqguweoociwe);
        goto ouomswygcqoswiou;
        giocswyqqaimkoki:
        $waoisqguweoociwe = preg_replace("\x2f\x3c\147\x3e\x5b\x5c\x6e\x5c\x72\x5c\163\x5d\52\x3c\134\x2f\147\76\57", '', $waoisqguweoociwe);
        goto gaemigskmucygamw;
        iegwsoeawuoiooiw:
        $waoisqguweoociwe = preg_replace("\57\x5c\x74\x2f", "\40", $waoisqguweoociwe);
        goto gigyoewaqgumsusc;
        iwqmyeyaqsuqmsoe:
        $waoisqguweoociwe = str_replace("\76\x20\x3c", "\x3e\x3c", $waoisqguweoociwe);
        goto wskswcqwsiamcmgk;
        eckcaeocwsesemcu:
        $waoisqguweoociwe = preg_replace("\x2f\74\41\55\55\56\x2a\55\x2d\x3e\57", '', $waoisqguweoociwe);
        goto giocswyqqaimkoki;
        eewqaciiuesekwgg:
    }
    
    public function smemegymuqekcaui($ycskuuyucyuqisaq) : string
    {
        goto yyqckcwiwgegocsu;
        wwqkoggocqusyqum:
        goto euysiqmgeyskkooq;
        goto oiekiiuowauqmceu;
        cksesgscmiccmigi:
        oeoagqkakyekmycs:
        goto guwcsuucwigkukmu;
        essygikwcggsgcec:
        if ($ycskuuyucyuqisaq[$ciyackuwsqkoqese] == "\x25" && $ycskuuyucyuqisaq[$ciyackuwsqkoqese + 1] == "\x75") {
            goto iwoauisiuicommck;
        }
        goto wmmyckaiiwyokuuq;
        qcqikccascwsikim:
        uuaiuucquuomguyi:
        goto oomsemgiwqioyoqy;
        csquacyaqsgwkoui:
        iwoauisiuicommck:
        goto cyqkscsqmaaisquy;
        oomsemgiwqioyoqy:
        $wayeqowwwmqyscea .= urldecode(substr($ycskuuyucyuqisaq, $ciyackuwsqkoqese, 3));
        goto yyesyssasgoyqaas;
        eguiciymwgcukgcw:
        $ciyackuwsqkoqese++;
        goto ukggwygocweoasce;
        cyqkscsqmaaisquy:
        $uiymkeeaukcyqqik = hexdec(substr($ycskuuyucyuqisaq, $ciyackuwsqkoqese + 2, 4));
        goto uwuawieeaomscowi;
        gcoyyuwaycukiaey:
        $wayeqowwwmqyscea .= chr(0xe0 | $uiymkeeaukcyqqik >> 12) . chr(0x80 | $uiymkeeaukcyqqik >> 6 & 0x3f) . chr(0x80 | $uiymkeeaukcyqqik & 0x3f);
        goto wwqkoggocqusyqum;
        joukoqeseemqaiww:
        $wayeqowwwmqyscea .= chr($uiymkeeaukcyqqik);
        goto meqcckcokmqigmcs;
        icsgwagqaioccsgg:
        goto wqsmcycoysssooew;
        goto qcqikccascwsikim;
        wsqucoqquuoimgoi:
        wqsmcycoysssooew:
        goto waiwusckekwoeasa;
        msekqmawsimogskg:
        $wayeqowwwmqyscea .= $ycskuuyucyuqisaq[$ciyackuwsqkoqese];
        goto ugmqyekuwwuaoeya;
        wmmyckaiiwyokuuq:
        if ($ycskuuyucyuqisaq[$ciyackuwsqkoqese] == "\45") {
            goto uuaiuucquuomguyi;
        }
        goto msekqmawsimogskg;
        qmuawywgqcaqwoqg:
        owmywoiysicswqys:
        goto owigmucmmkisusqa;
        ieoosusioiaaicgo:
        if (!($ciyackuwsqkoqese < $eomsgokgyssmwmai)) {
            goto oeoagqkakyekmycs;
        }
        goto essygikwcggsgcec;
        waiwusckekwoeasa:
        eowegcwycwiwkukk:
        goto eguiciymwgcukgcw;
        uwuawieeaomscowi:
        if ($uiymkeeaukcyqqik < 0x7f) {
            goto geieogywagiqyaou;
        }
        goto woumcuokuoeqyaaq;
        ecuicaaoiwckckqu:
        uikgsuwekyomyqea:
        goto ieoosusioiaaicgo;
        yyesyssasgoyqaas:
        $ciyackuwsqkoqese += 2;
        goto wsqucoqquuoimgoi;
        kyqcykkugmceeoeo:
        $ciyackuwsqkoqese = 0;
        goto ecuicaaoiwckckqu;
        yyqckcwiwgegocsu:
        $wayeqowwwmqyscea = '';
        goto wuysmaasqoqeeauk;
        woumcuokuoeqyaaq:
        if ($uiymkeeaukcyqqik < 0x800) {
            goto owmywoiysicswqys;
        }
        goto gcoyyuwaycukiaey;
        ukggwygocweoasce:
        goto uikgsuwekyomyqea;
        goto cksesgscmiccmigi;
        oiekiiuowauqmceu:
        geieogywagiqyaou:
        goto joukoqeseemqaiww;
        owkicamwkyumewim:
        euysiqmgeyskkooq:
        goto sqsykywuswmcsuys;
        ugmqyekuwwuaoeya:
        goto wqsmcycoysssooew;
        goto csquacyaqsgwkoui;
        meqcckcokmqigmcs:
        goto euysiqmgeyskkooq;
        goto qmuawywgqcaqwoqg;
        sqsykywuswmcsuys:
        $ciyackuwsqkoqese += 5;
        goto icsgwagqaioccsgg;
        owigmucmmkisusqa:
        $wayeqowwwmqyscea .= chr(0xc0 | $uiymkeeaukcyqqik >> 6) . chr(0x80 | $uiymkeeaukcyqqik & 0x3f);
        goto owkicamwkyumewim;
        wuysmaasqoqeeauk:
        $eomsgokgyssmwmai = strlen($ycskuuyucyuqisaq);
        goto kyqcykkugmceeoeo;
        guwcsuucwigkukmu:
        return $wayeqowwwmqyscea;
        goto kygiwieeewgocwgs;
        kygiwieeewgocwgs:
    }
    
    public function oauesaioaycwyygy($waoisqguweoociwe) : string
    {
        goto uawqiywkcgeowkye;
        igesyssomuuqqoky:
        $owyiccmocukoumyy = base64_encode($this->smemegymuqekcaui(rawurlencode($waoisqguweoociwe)));
        goto yimsysqkmmuaskge;
        uawqiywkcgeowkye:
        $waoisqguweoociwe = $this->miocmcoykayoyyau()->eyamqkqiykagecsw($waoisqguweoociwe, true);
        goto igesyssomuuqqoky;
        yimsysqkmmuaskge:
        return "\144\x61\x74\141\x3a\151\155\x61\x67\145\57\163\166\147\53\170\155\x6c\x3b\x62\x61\x73\x65\66\x34\54{$owyiccmocukoumyy}";
        goto yoqmekyaqscyywgw;
        yoqmekyaqscyywgw:
    }
    public function ucqcyyiuiwewsugk()
    {
        goto momssmiweesyaiqm;
        imsioswwqucagyiq:
        foreach ($owuckwsseckgeweg as $ymqmyyeuycgmigyo => $ykiyyumywksqcisg) {
            goto aqwiceqiawoaykoo;
            ksowgysucgksmeiu:
            iewagmumgcysgkiw:
            goto aeuwgwcuycgqgmcm;
            aeuwgwcuycgqgmcm:
            ukwecsumaqaceoke:
            goto ewyccsuswogsksoq;
            uwwsqewmquccsqkc:
            $oouysqigwayiqgkk = "\111\x63\x6f\x6e" . ucfirst($ymqmyyeuycgmigyo) . "\x49\156\164\145\162\x66\141\143\145";
            goto wkemaqyiomkkescs;
            aqwiceqiawoaykoo:
            if (!(is_array($ykiyyumywksqcisg) && $ykiyyumywksqcisg)) {
                goto iewagmumgcysgkiw;
            }
            goto uwwsqewmquccsqkc;
            wkemaqyiomkkescs:
            $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
            goto wqiwicgmusisugqc;
            wqiwicgmusisugqc:
            $ymqmyyeuycgmigyo = ManipulateString::mkwcwqkqeqkqyggc($egkyssmuqcwaciya);
            goto iigwkuykiykukwky;
            iigwkuykiykukwky:
            $aiieyweysaukqemc = str_replace("{$ymqmyyeuycgmigyo}\134", '', $egkyssmuqcwaciya) . "\x5c\x49\x6e\x74\145\x72\x66\141\x63\x65\x73";
            goto ocmckmgisuwsyuwc;
            qkowogwggmgksqce:
            $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($gwgkqsyaesmocmsk, "{$oouysqigwayiqgkk}\56\160\150\x70", $ewgwqamkygiqaawc);
            goto ksowgysucgksmeiu;
            ocmckmgisuwsyuwc:
            $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\151\x6e\x74\145\x72\146\141\x63\145\x2e\x70\x68\x70", ["\156\141\x6d\145\x73\160\x61\143\145" => $aiieyweysaukqemc, "\151\x6e\164\x65\162\146\141\x63\145" => $oouysqigwayiqgkk, "\x69\x63\157\156\x73" => $ykiyyumywksqcisg]);
            goto qkowogwggmgksqce;
            ewyccsuswogsksoq:
        }
        goto scwyoqesmseysyca;
        wgusqquuucyeigcw:
        waiqksgggkmmgkms:
        goto ecaiosueicqamwwc;
        gauiaqeaegyowuyg:
        $mkomwsiykqigmqca = $this->ikeqsmumgwwuqmkw() . "\x2f\141\163\x73\145\164\x2f" . self::ICONS_PATH;
        goto gkuwksowwuqsosye;
        eiykgwsymemeaowg:
        if (!$iiaumsgauuyeqksw->uuegkqwagymmusiy($gwgkqsyaesmocmsk, 3)) {
            goto qiqsuscoooigcqiu;
        }
        goto ciwsqasmaysciuiq;
        gkuwksowwuqsosye:
        $gwgkqsyaesmocmsk = __DIR__ . "\57\111\156\x74\145\x72\146\141\x63\145\x73";
        goto mwmkykmeugewswss;
        ciwsqasmaysciuiq:
        $owuckwsseckgeweg = $this->guyeewccesqeokww($mkomwsiykqigmqca);
        goto eiweyioigakomama;
        momssmiweesyaiqm:
        if (!(!ManipulateAjax::mcgoysmkqsqooceq() && ManipulateSetting::esoowymaimwcuecq())) {
            goto yeuauqgwkmycsuss;
        }
        goto gauiaqeaegyowuyg;
        eiweyioigakomama:
        if (!(is_array($owuckwsseckgeweg) && $owuckwsseckgeweg)) {
            goto waiqksgggkmmgkms;
        }
        goto imsioswwqucagyiq;
        owykgucmwkqsmcsg:
        yeuauqgwkmycsuss:
        goto ecgaykgwooyuawqk;
        ecaiosueicqamwwc:
        qiqsuscoooigcqiu:
        goto owykgucmwkqsmcsg;
        mwmkykmeugewswss:
        $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk();
        goto eiykgwsymemeaowg;
        scwyoqesmseysyca:
        uiicuwmmeceaccge:
        goto wgusqquuucyeigcw;
        ecgaykgwooyuawqk:
    }
    
    public function guyeewccesqeokww($mkomwsiykqigmqca, $yuwymayicwwqiske = null) : array
    {
        goto cgkemewmecusmuqy;
        skemsssgesqwqkyg:
        foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) {
            goto bsicsscqymyycqcs;
            miocyowiooqceoku:
            awwiymymcoewykws:
            goto ikioiaguwaqkmmyc;
            wmqgsukikoasweka:
            $ymqmyyeuycgmigyo = ManipulateFile::mawoacksgosuccme($qogsmwakwacwqogk);
            goto mkaquyqyuwcaeeqe;
            bsicsscqymyycqcs:
            if (!($qogsmwakwacwqogk instanceof DirectoryIterator && !ManipulateFile::qkuqsuugayciskek($qogsmwakwacwqogk))) {
                goto sgiqkgawyeuymoks;
            }
            goto oiiwycewowouacmm;
            oiiwycewowouacmm:
            $mkomwsiykqigmqca = ManipulateFile::scikcaaaiwcsqowm($qogsmwakwacwqogk);
            goto wmqgsukikoasweka;
            ycgikgowwaioqugw:
            $ykiyyumywksqcisg = array_merge($ykiyyumywksqcisg, $this->guyeewccesqeokww($mkomwsiykqigmqca, $ymqmyyeuycgmigyo));
            goto yemwoomcwaoeyoag;
            zwukyqcioqysimss:
            
            $ymqmyyeuycgmigyo = preg_replace("\x2f\x5c\x2e\133\136\x2e\134\x73\x5d\173\63\54\x34\x7d\44\57", '', $ymqmyyeuycgmigyo);
            goto ggcmyqsqocygmqck;
            mkaquyqyuwcaeeqe:
            if (ManipulateFile::oagwcgcemwwykokc($qogsmwakwacwqogk)) {
                goto yacqaemukikwauew;
            }
            goto zwukyqcioqysimss;
            yemwoomcwaoeyoag:
            usmwsquyeukawsmo:
            goto agumgemyuquqacsi;
            agumgemyuquqacsi:
            sgiqkgawyeuymoks:
            goto miocyowiooqceoku;
            kaoaegkkmmqwwcqg:
            goto usmwsquyeukawsmo;
            goto ceyuiecmmywyymqe;
            ggcmyqsqocygmqck:
            $ykiyyumywksqcisg[$yuwymayicwwqiske][$ymqmyyeuycgmigyo] = "{$yuwymayicwwqiske}\x2f{$ymqmyyeuycgmigyo}";
            goto kaoaegkkmmqwwcqg;
            ceyuiecmmywyymqe:
            yacqaemukikwauew:
            goto ycgikgowwaioqugw;
            ikioiaguwaqkmmyc:
        }
        goto geuawgeawaosgskq;
        qkqkgkyyoogmisko:
        $ucasskoyoewwmmii = ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca);
        goto skemsssgesqwqkyg;
        geuawgeawaosgskq:
        yagqeyemyasuakyq:
        goto ieccammaemyeuucg;
        cgkemewmecusmuqy:
        $ykiyyumywksqcisg = [];
        goto qkqkgkyyoogmisko;
        ieccammaemyeuucg:
        return $ykiyyumywksqcisg;
        goto oeisoogqeyacokug;
        oeisoogqeyacokug:
    }
}
