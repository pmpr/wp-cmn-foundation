<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
    const IS_ICON = "\x69\163\137\151\143\x6f\x6e";
    const ICONS_PATH = "\x69\x6d\147\57\163\166\147\x2f\151\143\157\x6e";
    
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
        $this->qcsmikeggeemccuu("\151\156\151\x74", [$this, "\165\x63\x71\143\171\171\151\x75\151\x77\x65\x77\163\165\147\x6b"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\151\143\x6f\156\137\x68\164\x6d\154\137\x72\x65\x6e\144\145\x72"), [$this, "\x72\145\x6e\144\x65\162"], 10, 3);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x65\144\151\164\x5f\141\164\x74\x61\143\x68\x6d\145\156\x74", [$this, "\x63\161\157\x77\x75\151\147\x6d\167\143\161\x71\x63\x63\165\163"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x69\x63\157\x6e\137\x73\166\x67\x32\142\x61\163\x65\66\x34"), [$this, "\157\x61\165\145\163\141\151\x6f\x61\171\x63\x77\x79\x79\147\171"])->cecaguuoecmccuse("\x65\x73\x63\x61\x70\145\x64\137\151\x63\x6f\x6e\x73\x5f\144\162\x6f\x70\144\157\x77\156", [$this, "\167\x63\x73\x79\143\157\x73\x6f\157\163\141\167\143\x6d\143\x75"], 10, 2)->cecaguuoecmccuse("\x61\164\164\141\143\x68\x6d\145\156\164\137\x66\151\145\x6c\144\x73\x5f\164\157\137\145\x64\x69\x74", [$this, "\x77\x75\x77\x6f\x63\141\x6f\151\x69\x65\151\167\x65\171\171\157"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x69\143\157\156\x5f\150\164\x6d\154\137\146\x69\x6c\164\145\162"), [$this, "\167\x63\163\x69\x77\x6b\x63\171\145\x6f\x6b\141\155\x69\x6b\x65"], 10, 3);
        parent::kgquecmsgcouyaya();
    }
    
    public function kwagkemgawuoacwy($ywmkwiwkosakssii = [])
    {
        return ManipulatePost::qgisekcaywsmigga("\141\164\x74\141\143\x68\x6d\x65\x6e\x74", self::IS_ICON, 1, $ywmkwiwkosakssii);
    }
    
    public function umqsskakomkwuamy($aiooqyausygaasqm) : bool
    {
        return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\141\164\x74\x61\x63\150\155\145\156\x74\137\x69\163\137\163\x76\147"), false, $aiooqyausygaasqm);
    }
    
    public function wcsycosoosawcmcu($ykiyyumywksqcisg, $gskuwmeemyeuwogc)
    {
        goto wqmokemugmgoomik;
        bgoqumcuqmceeigi:
        return $ykiyyumywksqcisg;
        goto aisygkoacuuqeymm;
        mogkgqmmcowsmsoc:
        ecsaymiksecmoomi:
        goto bgoqumcuqmceeigi;
        kmmyeqikyciayaoc:
        foreach ($aieaqakyuyewkkwe as $aiooqyausygaasqm) {
            goto qcgowmuiwyiesuqq;
            oeyikqyiqqqsiaog:
            $wkaqekwwgqsqwcoi = ManipulateAttachment::qaeeusqkgwagwaqc($aokagokqyuysuksm, "\164\167\151\164\x74\145\x72", ["\143\154\141\x73\x73" => "\x70\x72\x2d\x69\143\157\x6e\x20\x69\x63\x6f\x6e\55\170\x73"], true);
            goto xiyuyqywsaaaeuuk;
            lwwuwssgsqccisgk:
            eywccamccqiwmygw:
            goto yumawusgeuasmweo;
            wyeoumiuesqiuuaa:
            yqcsakyqkiowyigs:
            goto lwwuwssgsqccisgk;
            xiyuyqywsaaaeuuk:
            $ykiyyumywksqcisg[$aokagokqyuysuksm] = sprintf($gskuwmeemyeuwogc, ManipulatePost::qcgakseyaikigqco($aiooqyausygaasqm), $wkaqekwwgqsqwcoi);
            goto wyeoumiuesqiuuaa;
            syucweceooaayiqm:
            $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($aiooqyausygaasqm);
            goto oeyikqyiqqqsiaog;
            qcgowmuiwyiesuqq:
            if (!$aiooqyausygaasqm instanceof WP_Post) {
                goto yqcsakyqkiowyigs;
            }
            goto syucweceooaayiqm;
            yumawusgeuasmweo:
        }
        goto mogkgqmmcowsmsoc;
        wqmokemugmgoomik:
        $aieaqakyuyewkkwe = $this->kwagkemgawuoacwy();
        goto kmmyeqikyciayaoc;
        aisygkoacuuqeymm:
    }
    
    public function wuwocaoiieiweyyo($ikgwqyuyckaewsow, $post)
    {
        goto qgiokeecugwacuka;
        soeawcescakswowc:
        return $ikgwqyuyckaewsow;
        goto qmiseemyqgoaemmo;
        qgiokeecugwacuka:
        if (!$this->umqsskakomkwuamy($post)) {
            goto qwaaukoseakigsgy;
        }
        goto uscugymouummumyy;
        uscugymouummumyy:
        $amwuugigousqwmey = ManipulatePost::igawqaomowicuayw(self::IS_ICON, $post, true);
        goto aqwccmsqgqgumymq;
        aqwccmsqgqgumymq:
        $ikgwqyuyckaewsow[self::IS_ICON] = ["\x6c\x61\142\x65\154" => __("\125\163\x65\40\x46\157\x72\40\x49\143\x6f\x6e", PR__THM__FOUNDATION), "\151\x6e\x70\165\x74" => "\x68\164\x6d\154", "\x68\x74\155\154" => MetaBox::wcwmusaouiqaqeww(self::IS_ICON)->iygyugseyaqwywyg($amwuugigousqwmey ? $amwuugigousqwmey : "\157\146\x66")->render(), "\150\145\x6c\160\x73" => __("\x43\150\145\x63\153\40\151\146\40\171\157\x75\40\167\x61\156\164\40\163\150\x6f\x77\x20\x74\x68\151\x73\40\141\164\164\141\143\x68\x6d\x65\156\x74\x20\151\156\40\151\x63\x6f\x6e\40\x6c\151\163\x74\x2e", PR__CMN__FOUNDATION)];
        goto imeaooemieqcmgag;
        imeaooemieqcmgag:
        qwaaukoseakigsgy:
        goto soeawcescakswowc;
        qmiseemyqgoaemmo:
    }
    
    public function render($wkaqekwwgqsqwcoi, array $wwgucssaecqekuek = [], string $oiegiwogmwmawkeo = "\x74\x68\165\155\142\156\x61\151\x6c")
    {
        echo $this->wcsiwkcyeokamike($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, $oiegiwogmwmawkeo);
    }
    
    public function cqowuigmwcqqccus($post)
    {
        goto cswuqoaewiyacqse;
        eieqmiiuoigqcqko:
        $amwuugigousqwmey = ManipulateServer::ayueggmoqeeukqmq(self::IS_ICON);
        goto gaewyowqcmmuwwyw;
        wuqecuowsgggioiw:
        ManipulatePost::ksmqawcowkmegigw(self::IS_ICON, $amwuugigousqwmey, $post);
        goto scuugaikcycgagqs;
        xkqkamoamikwyksk:
        return $post;
        goto skmcgcigmsyaguwq;
        yimwwgqgoykeoyss:
        ManipulatePost::smqukgcyacswysqa(self::IS_ICON, $post);
        goto ykuwegiykkscuwsy;
        oysiqukyogokmmmm:
        kcwygygoyasciaia:
        goto xkqkamoamikwyksk;
        uecykquakwkkwwqe:
        bgkoceiksggsqacw:
        goto wuqecuowsgggioiw;
        sgeemcsaaywgusaq:
        if (!$this->umqsskakomkwuamy($post)) {
            goto kcwygygoyasciaia;
        }
        goto eieqmiiuoigqcqko;
        scuugaikcycgagqs:
        asugqqyocowiuecu:
        goto oysiqukyogokmmmm;
        gaewyowqcmmuwwyw:
        if ($amwuugigousqwmey === "\157\x6e") {
            goto bgkoceiksggsqacw;
        }
        goto yimwwgqgoykeoyss;
        ykuwegiykkscuwsy:
        goto asugqqyocowiuecu;
        goto uecykquakwkkwwqe;
        cswuqoaewiyacqse:
        $post = ManipulatePost::mwikyscisascoeea($post);
        goto sgeemcsaaywgusaq;
        skmcgcigmsyaguwq:
    }
    
    public function wcsiwkcyeokamike($wkaqekwwgqsqwcoi, array $wwgucssaecqekuek = [], string $oiegiwogmwmawkeo = "\164\x68\165\155\x62\x6e\x61\151\x6c") : string
    {
        goto kuysqaocycusiooc;
        sucmuewciigceyei:
        $wwgucssaecqekuek = $this->sscegwueamckwmcy("\167\x70\x5f\147\145\x74\137\141\164\164\x61\x63\x68\x6d\145\x6e\x74\137\x69\x6d\x61\x67\145\137\141\164\164\x72\151\x62\165\164\x65\x73", $wwgucssaecqekuek, $wkaqekwwgqsqwcoi, $oiegiwogmwmawkeo);
        goto ceowmegksgcgwuug;
        aowqwmeaismiiwca:
        rogsumkasqmoigce:
        goto umgswqiiqagckcoa;
        umgswqiiqagckcoa:
        $nsmgceoqaqogqmuw = ManipulateAttachment::qaeeusqkgwagwaqc($post, $oiegiwogmwmawkeo, $wwgucssaecqekuek);
        goto eakcouagumsyocki;
        omeckagooayaagig:
        if ($post) {
            goto rogsumkasqmoigce;
        }
        goto sucmuewciigceyei;
        kimegcsekgymucck:
        $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\154\141\163\163", "\160\162\55\x69\x63\157\156\40\x69\x63\157\156\55{$oiegiwogmwmawkeo}");
        goto omeckagooayaagig;
        kuysqaocycusiooc:
        $post = ManipulatePost::mwikyscisascoeea($wkaqekwwgqsqwcoi, true);
        goto kimegcsekgymucck;
        ceowmegksgcgwuug:
        $nsmgceoqaqogqmuw = ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek);
        goto wkgikmeuqucgkywg;
        eakcouagumsyocki:
        emscmyekmeyuwqwm:
        goto uqcuiuamymcyqiis;
        wkgikmeuqucgkywg:
        goto emscmyekmeyuwqwm;
        goto aowqwmeaismiiwca;
        uqcuiuamymcyqiis:
        return $nsmgceoqaqogqmuw;
        goto wswskaaocwgkamyc;
        wswskaaocwgkamyc:
    }
    
    public function compress($waoisqguweoociwe)
    {
        goto eckcaeocwsesemcu;
        eckcaeocwsesemcu:
        $waoisqguweoociwe = preg_replace("\x2f\74\41\x2d\55\x2e\52\x2d\55\76\57", '', $waoisqguweoociwe);
        goto giocswyqqaimkoki;
        gaemigskmucygamw:
        $waoisqguweoociwe = preg_replace("\x2f\x5c\x6e\x2f", "\40", $waoisqguweoociwe);
        goto iegwsoeawuoiooiw;
        gigyoewaqgumsusc:
        $waoisqguweoociwe = preg_replace("\x2f\x5c\163\x5c\x73\53\x2f", "\40", $waoisqguweoociwe);
        goto iwqmyeyaqsuqmsoe;
        ouomswygcqoswiou:
        return $waoisqguweoociwe;
        goto eewqaciiuesekwgg;
        giocswyqqaimkoki:
        $waoisqguweoociwe = preg_replace("\x2f\74\x67\x3e\133\x5c\156\134\x72\x5c\x73\x5d\52\74\x5c\x2f\147\x3e\x2f", '', $waoisqguweoociwe);
        goto gaemigskmucygamw;
        iegwsoeawuoiooiw:
        $waoisqguweoociwe = preg_replace("\x2f\x5c\164\x2f", "\40", $waoisqguweoociwe);
        goto gigyoewaqgumsusc;
        wskswcqwsiamcmgk:
        $waoisqguweoociwe = str_replace("\x3b\42", "\x22", $waoisqguweoociwe);
        goto ouomswygcqoswiou;
        iwqmyeyaqsuqmsoe:
        $waoisqguweoociwe = str_replace("\76\x20\x3c", "\x3e\x3c", $waoisqguweoociwe);
        goto wskswcqwsiamcmgk;
        eewqaciiuesekwgg:
    }
    
    public function smemegymuqekcaui($ycskuuyucyuqisaq) : string
    {
        goto yyqckcwiwgegocsu;
        essygikwcggsgcec:
        if ($ycskuuyucyuqisaq[$ciyackuwsqkoqese] == "\45" && $ycskuuyucyuqisaq[$ciyackuwsqkoqese + 1] == "\x75") {
            goto iwoauisiuicommck;
        }
        goto wmmyckaiiwyokuuq;
        wuysmaasqoqeeauk:
        $eomsgokgyssmwmai = strlen($ycskuuyucyuqisaq);
        goto kyqcykkugmceeoeo;
        oiekiiuowauqmceu:
        geieogywagiqyaou:
        goto joukoqeseemqaiww;
        ukggwygocweoasce:
        goto uikgsuwekyomyqea;
        goto cksesgscmiccmigi;
        meqcckcokmqigmcs:
        goto euysiqmgeyskkooq;
        goto qmuawywgqcaqwoqg;
        cksesgscmiccmigi:
        oeoagqkakyekmycs:
        goto guwcsuucwigkukmu;
        yyqckcwiwgegocsu:
        $wayeqowwwmqyscea = '';
        goto wuysmaasqoqeeauk;
        wmmyckaiiwyokuuq:
        if ($ycskuuyucyuqisaq[$ciyackuwsqkoqese] == "\x25") {
            goto uuaiuucquuomguyi;
        }
        goto msekqmawsimogskg;
        owkicamwkyumewim:
        euysiqmgeyskkooq:
        goto sqsykywuswmcsuys;
        cyqkscsqmaaisquy:
        $uiymkeeaukcyqqik = hexdec(substr($ycskuuyucyuqisaq, $ciyackuwsqkoqese + 2, 4));
        goto uwuawieeaomscowi;
        csquacyaqsgwkoui:
        iwoauisiuicommck:
        goto cyqkscsqmaaisquy;
        qmuawywgqcaqwoqg:
        owmywoiysicswqys:
        goto owigmucmmkisusqa;
        ugmqyekuwwuaoeya:
        goto wqsmcycoysssooew;
        goto csquacyaqsgwkoui;
        woumcuokuoeqyaaq:
        if ($uiymkeeaukcyqqik < 0x800) {
            goto owmywoiysicswqys;
        }
        goto gcoyyuwaycukiaey;
        oomsemgiwqioyoqy:
        $wayeqowwwmqyscea .= urldecode(substr($ycskuuyucyuqisaq, $ciyackuwsqkoqese, 3));
        goto yyesyssasgoyqaas;
        wsqucoqquuoimgoi:
        wqsmcycoysssooew:
        goto waiwusckekwoeasa;
        waiwusckekwoeasa:
        eowegcwycwiwkukk:
        goto eguiciymwgcukgcw;
        msekqmawsimogskg:
        $wayeqowwwmqyscea .= $ycskuuyucyuqisaq[$ciyackuwsqkoqese];
        goto ugmqyekuwwuaoeya;
        owigmucmmkisusqa:
        $wayeqowwwmqyscea .= chr(0xc0 | $uiymkeeaukcyqqik >> 6) . chr(0x80 | $uiymkeeaukcyqqik & 0x3f);
        goto owkicamwkyumewim;
        eguiciymwgcukgcw:
        $ciyackuwsqkoqese++;
        goto ukggwygocweoasce;
        ecuicaaoiwckckqu:
        uikgsuwekyomyqea:
        goto ieoosusioiaaicgo;
        joukoqeseemqaiww:
        $wayeqowwwmqyscea .= chr($uiymkeeaukcyqqik);
        goto meqcckcokmqigmcs;
        gcoyyuwaycukiaey:
        $wayeqowwwmqyscea .= chr(0xe0 | $uiymkeeaukcyqqik >> 12) . chr(0x80 | $uiymkeeaukcyqqik >> 6 & 0x3f) . chr(0x80 | $uiymkeeaukcyqqik & 0x3f);
        goto wwqkoggocqusyqum;
        icsgwagqaioccsgg:
        goto wqsmcycoysssooew;
        goto qcqikccascwsikim;
        qcqikccascwsikim:
        uuaiuucquuomguyi:
        goto oomsemgiwqioyoqy;
        guwcsuucwigkukmu:
        return $wayeqowwwmqyscea;
        goto kygiwieeewgocwgs;
        wwqkoggocqusyqum:
        goto euysiqmgeyskkooq;
        goto oiekiiuowauqmceu;
        ieoosusioiaaicgo:
        if (!($ciyackuwsqkoqese < $eomsgokgyssmwmai)) {
            goto oeoagqkakyekmycs;
        }
        goto essygikwcggsgcec;
        kyqcykkugmceeoeo:
        $ciyackuwsqkoqese = 0;
        goto ecuicaaoiwckckqu;
        yyesyssasgoyqaas:
        $ciyackuwsqkoqese += 2;
        goto wsqucoqquuoimgoi;
        uwuawieeaomscowi:
        if ($uiymkeeaukcyqqik < 0x7f) {
            goto geieogywagiqyaou;
        }
        goto woumcuokuoeqyaaq;
        sqsykywuswmcsuys:
        $ciyackuwsqkoqese += 5;
        goto icsgwagqaioccsgg;
        kygiwieeewgocwgs:
    }
    
    public function oauesaioaycwyygy($waoisqguweoociwe) : string
    {
        goto uawqiywkcgeowkye;
        yimsysqkmmuaskge:
        return "\x64\141\164\141\x3a\x69\x6d\141\147\145\57\163\166\147\53\x78\155\154\73\x62\141\163\145\x36\x34\x2c{$owyiccmocukoumyy}";
        goto yoqmekyaqscyywgw;
        uawqiywkcgeowkye:
        $waoisqguweoociwe = $this->miocmcoykayoyyau()->eyamqkqiykagecsw($waoisqguweoociwe, true);
        goto igesyssomuuqqoky;
        igesyssomuuqqoky:
        $owyiccmocukoumyy = base64_encode($this->smemegymuqekcaui(rawurlencode($waoisqguweoociwe)));
        goto yimsysqkmmuaskge;
        yoqmekyaqscyywgw:
    }
    public function ucqcyyiuiwewsugk()
    {
        goto momssmiweesyaiqm;
        owykgucmwkqsmcsg:
        yeuauqgwkmycsuss:
        goto ecgaykgwooyuawqk;
        eiweyioigakomama:
        if (!(is_array($owuckwsseckgeweg) && $owuckwsseckgeweg)) {
            goto waiqksgggkmmgkms;
        }
        goto imsioswwqucagyiq;
        ecaiosueicqamwwc:
        qiqsuscoooigcqiu:
        goto owykgucmwkqsmcsg;
        ciwsqasmaysciuiq:
        $owuckwsseckgeweg = $this->guyeewccesqeokww($mkomwsiykqigmqca);
        goto eiweyioigakomama;
        imsioswwqucagyiq:
        foreach ($owuckwsseckgeweg as $ymqmyyeuycgmigyo => $ykiyyumywksqcisg) {
            goto aqwiceqiawoaykoo;
            aqwiceqiawoaykoo:
            if (!(is_array($ykiyyumywksqcisg) && $ykiyyumywksqcisg)) {
                goto iewagmumgcysgkiw;
            }
            goto uwwsqewmquccsqkc;
            wqiwicgmusisugqc:
            $ymqmyyeuycgmigyo = ManipulateString::mkwcwqkqeqkqyggc($egkyssmuqcwaciya);
            goto iigwkuykiykukwky;
            qkowogwggmgksqce:
            $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($gwgkqsyaesmocmsk, "{$oouysqigwayiqgkk}\56\x70\150\160", $ewgwqamkygiqaawc);
            goto ksowgysucgksmeiu;
            wkemaqyiomkkescs:
            $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
            goto wqiwicgmusisugqc;
            ksowgysucgksmeiu:
            iewagmumgcysgkiw:
            goto aeuwgwcuycgqgmcm;
            uwwsqewmquccsqkc:
            $oouysqigwayiqgkk = "\x49\143\x6f\156" . ucfirst($ymqmyyeuycgmigyo) . "\x49\156\x74\145\162\x66\141\x63\145";
            goto wkemaqyiomkkescs;
            aeuwgwcuycgqgmcm:
            ukwecsumaqaceoke:
            goto ewyccsuswogsksoq;
            iigwkuykiykukwky:
            $aiieyweysaukqemc = str_replace("{$ymqmyyeuycgmigyo}\x5c", '', $egkyssmuqcwaciya) . "\134\x49\x6e\164\x65\162\146\x61\x63\x65\163";
            goto ocmckmgisuwsyuwc;
            ocmckmgisuwsyuwc:
            $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x69\x6e\x74\145\x72\x66\x61\x63\x65\x2e\x70\150\160", ["\x6e\141\155\145\163\x70\x61\143\x65" => $aiieyweysaukqemc, "\x69\156\164\145\x72\146\x61\143\x65" => $oouysqigwayiqgkk, "\x69\143\x6f\x6e\163" => $ykiyyumywksqcisg]);
            goto qkowogwggmgksqce;
            ewyccsuswogsksoq:
        }
        goto scwyoqesmseysyca;
        scwyoqesmseysyca:
        uiicuwmmeceaccge:
        goto wgusqquuucyeigcw;
        eiykgwsymemeaowg:
        if (!$iiaumsgauuyeqksw->uuegkqwagymmusiy($gwgkqsyaesmocmsk, 3)) {
            goto qiqsuscoooigcqiu;
        }
        goto ciwsqasmaysciuiq;
        gauiaqeaegyowuyg:
        $mkomwsiykqigmqca = $this->ikeqsmumgwwuqmkw() . "\57\141\163\163\145\x74\x2f" . self::ICONS_PATH;
        goto gkuwksowwuqsosye;
        mwmkykmeugewswss:
        $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk();
        goto eiykgwsymemeaowg;
        momssmiweesyaiqm:
        if (!(!ManipulateAjax::mcgoysmkqsqooceq() && ManipulateSetting::esoowymaimwcuecq())) {
            goto yeuauqgwkmycsuss;
        }
        goto gauiaqeaegyowuyg;
        gkuwksowwuqsosye:
        $gwgkqsyaesmocmsk = __DIR__ . "\57\111\x6e\x74\x65\x72\146\x61\143\x65\x73";
        goto mwmkykmeugewswss;
        wgusqquuucyeigcw:
        waiqksgggkmmgkms:
        goto ecaiosueicqamwwc;
        ecgaykgwooyuawqk:
    }
    
    public function guyeewccesqeokww($mkomwsiykqigmqca, $yuwymayicwwqiske = null) : array
    {
        goto cgkemewmecusmuqy;
        geuawgeawaosgskq:
        yagqeyemyasuakyq:
        goto ieccammaemyeuucg;
        qkqkgkyyoogmisko:
        $ucasskoyoewwmmii = ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca);
        goto skemsssgesqwqkyg;
        ieccammaemyeuucg:
        return $ykiyyumywksqcisg;
        goto oeisoogqeyacokug;
        cgkemewmecusmuqy:
        $ykiyyumywksqcisg = [];
        goto qkqkgkyyoogmisko;
        skemsssgesqwqkyg:
        foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) {
            goto bsicsscqymyycqcs;
            agumgemyuquqacsi:
            sgiqkgawyeuymoks:
            goto miocyowiooqceoku;
            wmqgsukikoasweka:
            $ymqmyyeuycgmigyo = ManipulateFile::mawoacksgosuccme($qogsmwakwacwqogk);
            goto mkaquyqyuwcaeeqe;
            ycgikgowwaioqugw:
            $ykiyyumywksqcisg = array_merge($ykiyyumywksqcisg, $this->guyeewccesqeokww($mkomwsiykqigmqca, $ymqmyyeuycgmigyo));
            goto yemwoomcwaoeyoag;
            bsicsscqymyycqcs:
            if (!($qogsmwakwacwqogk instanceof DirectoryIterator && !ManipulateFile::qkuqsuugayciskek($qogsmwakwacwqogk))) {
                goto sgiqkgawyeuymoks;
            }
            goto oiiwycewowouacmm;
            ggcmyqsqocygmqck:
            $ykiyyumywksqcisg[$yuwymayicwwqiske][$ymqmyyeuycgmigyo] = "{$yuwymayicwwqiske}\57{$ymqmyyeuycgmigyo}";
            goto kaoaegkkmmqwwcqg;
            kaoaegkkmmqwwcqg:
            goto usmwsquyeukawsmo;
            goto ceyuiecmmywyymqe;
            yemwoomcwaoeyoag:
            usmwsquyeukawsmo:
            goto agumgemyuquqacsi;
            miocyowiooqceoku:
            awwiymymcoewykws:
            goto ikioiaguwaqkmmyc;
            mkaquyqyuwcaeeqe:
            if (ManipulateFile::oagwcgcemwwykokc($qogsmwakwacwqogk)) {
                goto yacqaemukikwauew;
            }
            goto zwukyqcioqysimss;
            oiiwycewowouacmm:
            $mkomwsiykqigmqca = ManipulateFile::scikcaaaiwcsqowm($qogsmwakwacwqogk);
            goto wmqgsukikoasweka;
            ceyuiecmmywyymqe:
            yacqaemukikwauew:
            goto ycgikgowwaioqugw;
            zwukyqcioqysimss:
            
            $ymqmyyeuycgmigyo = preg_replace("\57\x5c\x2e\133\x5e\56\134\x73\135\x7b\x33\x2c\x34\175\44\x2f", '', $ymqmyyeuycgmigyo);
            goto ggcmyqsqocygmqck;
            ikioiaguwaqkmmyc:
        }
        goto geuawgeawaosgskq;
        oeisoogqeyacokug:
    }
}
