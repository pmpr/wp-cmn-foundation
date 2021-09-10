<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Media\Icon;

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
    const IS_ICON = "\x69\x73\137\x69\x63\x6f\156";
    const ICONS_PATH = "\x69\x6d\147\x2f\x73\166\147\57\151\x63\157\156";
    
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
        $this->qcsmikeggeemccuu("\x69\156\x69\x74", [$this, "\x75\143\x71\143\x79\171\x69\165\x69\x77\145\167\x73\x75\147\x6b"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\151\143\157\156\137\150\x74\x6d\154\137\162\145\156\144\x65\x72"), [$this, "\x72\145\156\x64\145\162"], 10, 3);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x65\144\x69\x74\137\141\x74\x74\141\143\150\155\x65\156\x74", [$this, "\x63\161\x6f\x77\x75\x69\x67\x6d\167\143\x71\161\143\x63\165\163"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x69\x63\x6f\x6e\x5f\163\x76\147\62\142\141\x73\145\66\64"), [$this, "\x6f\x61\165\145\x73\x61\151\x6f\141\171\143\x77\171\x79\x67\171"])->cecaguuoecmccuse("\145\x73\x63\141\x70\145\x64\x5f\x69\x63\157\156\x73\137\144\x72\x6f\x70\x64\x6f\x77\156", [$this, "\x77\x63\163\171\143\x6f\163\157\157\x73\141\x77\143\155\x63\x75"], 10, 2)->cecaguuoecmccuse("\x61\x74\164\141\143\x68\x6d\x65\x6e\x74\x5f\x66\151\x65\154\x64\x73\137\x74\157\137\145\144\x69\164", [$this, "\x77\x75\x77\x6f\x63\141\157\x69\x69\145\x69\x77\x65\x79\171\x6f"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x69\143\x6f\156\137\x68\164\x6d\x6c\137\146\151\154\164\145\x72"), [$this, "\x77\x63\163\x69\x77\x6b\143\171\x65\x6f\153\x61\x6d\x69\x6b\145"], 10, 3);
        parent::kgquecmsgcouyaya();
    }
    
    public function kwagkemgawuoacwy($ywmkwiwkosakssii = [])
    {
        return ManipulatePost::qgisekcaywsmigga("\x61\x74\164\x61\x63\x68\x6d\145\156\x74", self::IS_ICON, 1, $ywmkwiwkosakssii);
    }
    
    public function umqsskakomkwuamy($aiooqyausygaasqm) : bool
    {
        return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\141\164\x74\x61\x63\x68\x6d\145\156\164\x5f\151\163\137\x73\x76\x67"), false, $aiooqyausygaasqm);
    }
    
    public function wcsycosoosawcmcu($ykiyyumywksqcisg, $gskuwmeemyeuwogc)
    {
        goto wyeoumiuesqiuuaa;
        yumawusgeuasmweo:
        mycsqckiwmeoumcy:
        goto wqmokemugmgoomik;
        wqmokemugmgoomik:
        return $ykiyyumywksqcisg;
        goto kmmyeqikyciayaoc;
        wyeoumiuesqiuuaa:
        $aieaqakyuyewkkwe = $this->kwagkemgawuoacwy();
        goto lwwuwssgsqccisgk;
        lwwuwssgsqccisgk:
        foreach ($aieaqakyuyewkkwe as $aiooqyausygaasqm) {
            goto ecsaymiksecmoomi;
            yqcsakyqkiowyigs:
            $wkaqekwwgqsqwcoi = ManipulateAttachment::qaeeusqkgwagwaqc($aokagokqyuysuksm, "\164\x77\x69\x74\164\x65\162", ["\143\154\x61\x73\163" => "\x70\x72\x2d\151\x63\157\156\x20\151\x63\x6f\156\x2d\170\x73"], true);
            goto qcgowmuiwyiesuqq;
            syucweceooaayiqm:
            uusuygmocoeagwki:
            goto oeyikqyiqqqsiaog;
            eywccamccqiwmygw:
            $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($aiooqyausygaasqm);
            goto yqcsakyqkiowyigs;
            qcgowmuiwyiesuqq:
            $ykiyyumywksqcisg[$aokagokqyuysuksm] = sprintf($gskuwmeemyeuwogc, ManipulatePost::qcgakseyaikigqco($aiooqyausygaasqm), $wkaqekwwgqsqwcoi);
            goto syucweceooaayiqm;
            ecsaymiksecmoomi:
            if (!$aiooqyausygaasqm instanceof WP_Post) {
                goto uusuygmocoeagwki;
            }
            goto eywccamccqiwmygw;
            oeyikqyiqqqsiaog:
            skeyuaqouqqimqsu:
            goto xiyuyqywsaaaeuuk;
            xiyuyqywsaaaeuuk:
        }
        goto yumawusgeuasmweo;
        kmmyeqikyciayaoc:
    }
    
    public function wuwocaoiieiweyyo($ikgwqyuyckaewsow, $post)
    {
        goto bgoqumcuqmceeigi;
        aisygkoacuuqeymm:
        $amwuugigousqwmey = ManipulatePost::igawqaomowicuayw(self::IS_ICON, $post, true);
        goto qwaaukoseakigsgy;
        qgiokeecugwacuka:
        mogkgqmmcowsmsoc:
        goto uscugymouummumyy;
        uscugymouummumyy:
        return $ikgwqyuyckaewsow;
        goto aqwccmsqgqgumymq;
        qwaaukoseakigsgy:
        $ikgwqyuyckaewsow[self::IS_ICON] = ["\x6c\141\142\x65\x6c" => __("\x55\163\x65\40\106\x6f\x72\x20\111\143\x6f\x6e", PR__THM__FOUNDATION), "\x69\156\160\x75\x74" => "\150\164\155\x6c", "\150\164\155\154" => MetaBox::wcwmusaouiqaqeww(self::IS_ICON)->iygyugseyaqwywyg($amwuugigousqwmey ? $amwuugigousqwmey : "\157\x66\146")->render(), "\x68\x65\x6c\x70\x73" => __("\x43\150\x65\x63\153\x20\151\x66\x20\171\x6f\x75\40\167\141\156\x74\x20\163\150\x6f\167\40\x74\150\x69\163\40\141\164\x74\x61\x63\x68\x6d\145\156\x74\40\x69\156\40\x69\143\157\x6e\x20\154\151\x73\164\x2e", PR__CMN__FOUNDATION)];
        goto qgiokeecugwacuka;
        bgoqumcuqmceeigi:
        if (!$this->umqsskakomkwuamy($post)) {
            goto mogkgqmmcowsmsoc;
        }
        goto aisygkoacuuqeymm;
        aqwccmsqgqgumymq:
    }
    
    public function render($wkaqekwwgqsqwcoi, array $wwgucssaecqekuek = [], string $oiegiwogmwmawkeo = "\x74\x68\x75\155\x62\x6e\x61\x69\154")
    {
        echo $this->wcsiwkcyeokamike($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, $oiegiwogmwmawkeo);
    }
    
    public function cqowuigmwcqqccus($post)
    {
        goto bgkoceiksggsqacw;
        asugqqyocowiuecu:
        if (!$this->umqsskakomkwuamy($post)) {
            goto qmiseemyqgoaemmo;
        }
        goto kcwygygoyasciaia;
        cswuqoaewiyacqse:
        if ($amwuugigousqwmey === "\x6f\156") {
            goto imeaooemieqcmgag;
        }
        goto sgeemcsaaywgusaq;
        gaewyowqcmmuwwyw:
        imeaooemieqcmgag:
        goto yimwwgqgoykeoyss;
        ykuwegiykkscuwsy:
        soeawcescakswowc:
        goto uecykquakwkkwwqe;
        yimwwgqgoykeoyss:
        ManipulatePost::ksmqawcowkmegigw(self::IS_ICON, $amwuugigousqwmey, $post);
        goto ykuwegiykkscuwsy;
        eieqmiiuoigqcqko:
        goto soeawcescakswowc;
        goto gaewyowqcmmuwwyw;
        uecykquakwkkwwqe:
        qmiseemyqgoaemmo:
        goto wuqecuowsgggioiw;
        sgeemcsaaywgusaq:
        ManipulatePost::smqukgcyacswysqa(self::IS_ICON, $post);
        goto eieqmiiuoigqcqko;
        bgkoceiksggsqacw:
        $post = ManipulatePost::mwikyscisascoeea($post);
        goto asugqqyocowiuecu;
        kcwygygoyasciaia:
        $amwuugigousqwmey = ManipulateServer::ayueggmoqeeukqmq(self::IS_ICON);
        goto cswuqoaewiyacqse;
        wuqecuowsgggioiw:
        return $post;
        goto scuugaikcycgagqs;
        scuugaikcycgagqs:
    }
    
    public function wcsiwkcyeokamike($wkaqekwwgqsqwcoi, array $wwgucssaecqekuek = [], string $oiegiwogmwmawkeo = "\x74\150\165\155\x62\x6e\141\x69\x6c") : string
    {
        goto skmcgcigmsyaguwq;
        skmcgcigmsyaguwq:
        $post = ManipulatePost::mwikyscisascoeea($wkaqekwwgqsqwcoi, true);
        goto rogsumkasqmoigce;
        rogsumkasqmoigce:
        $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\141\x73\163", "\160\162\55\151\x63\x6f\156\40\x69\143\x6f\x6e\55{$oiegiwogmwmawkeo}");
        goto emscmyekmeyuwqwm;
        omeckagooayaagig:
        goto xkqkamoamikwyksk;
        goto sucmuewciigceyei;
        aowqwmeaismiiwca:
        return $nsmgceoqaqogqmuw;
        goto umgswqiiqagckcoa;
        wkgikmeuqucgkywg:
        xkqkamoamikwyksk:
        goto aowqwmeaismiiwca;
        ceowmegksgcgwuug:
        $nsmgceoqaqogqmuw = ManipulateAttachment::qaeeusqkgwagwaqc($post, $oiegiwogmwmawkeo, $wwgucssaecqekuek);
        goto wkgikmeuqucgkywg;
        emscmyekmeyuwqwm:
        if ($post) {
            goto oysiqukyogokmmmm;
        }
        goto kuysqaocycusiooc;
        kimegcsekgymucck:
        $nsmgceoqaqogqmuw = ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek);
        goto omeckagooayaagig;
        kuysqaocycusiooc:
        $wwgucssaecqekuek = $this->sscegwueamckwmcy("\167\x70\x5f\x67\145\164\x5f\141\164\x74\141\x63\150\x6d\145\156\164\137\x69\155\141\147\x65\137\141\x74\164\162\151\x62\165\164\x65\x73", $wwgucssaecqekuek, $wkaqekwwgqsqwcoi, $oiegiwogmwmawkeo);
        goto kimegcsekgymucck;
        sucmuewciigceyei:
        oysiqukyogokmmmm:
        goto ceowmegksgcgwuug;
        umgswqiiqagckcoa:
    }
    
    public function compress($waoisqguweoociwe)
    {
        goto eakcouagumsyocki;
        eakcouagumsyocki:
        $waoisqguweoociwe = preg_replace("\57\x3c\x21\55\55\56\x2a\55\55\76\x2f", '', $waoisqguweoociwe);
        goto uqcuiuamymcyqiis;
        gigyoewaqgumsusc:
        return $waoisqguweoociwe;
        goto iwqmyeyaqsuqmsoe;
        uqcuiuamymcyqiis:
        $waoisqguweoociwe = preg_replace("\x2f\x3c\x67\x3e\x5b\134\156\134\162\134\x73\x5d\52\74\134\57\147\x3e\57", '', $waoisqguweoociwe);
        goto wswskaaocwgkamyc;
        giocswyqqaimkoki:
        $waoisqguweoociwe = preg_replace("\57\134\x73\134\163\53\x2f", "\40", $waoisqguweoociwe);
        goto gaemigskmucygamw;
        gaemigskmucygamw:
        $waoisqguweoociwe = str_replace("\x3e\x20\74", "\x3e\74", $waoisqguweoociwe);
        goto iegwsoeawuoiooiw;
        iegwsoeawuoiooiw:
        $waoisqguweoociwe = str_replace("\x3b\x22", "\42", $waoisqguweoociwe);
        goto gigyoewaqgumsusc;
        wswskaaocwgkamyc:
        $waoisqguweoociwe = preg_replace("\x2f\x5c\x6e\57", "\x20", $waoisqguweoociwe);
        goto eckcaeocwsesemcu;
        eckcaeocwsesemcu:
        $waoisqguweoociwe = preg_replace("\x2f\x5c\164\57", "\40", $waoisqguweoociwe);
        goto giocswyqqaimkoki;
        iwqmyeyaqsuqmsoe:
    }
    
    public function smemegymuqekcaui($ycskuuyucyuqisaq) : string
    {
        goto iwoauisiuicommck;
        owigmucmmkisusqa:
        goto euysiqmgeyskkooq;
        goto owkicamwkyumewim;
        uikgsuwekyomyqea:
        $ciyackuwsqkoqese = 0;
        goto yyqckcwiwgegocsu;
        eguiciymwgcukgcw:
        return $wayeqowwwmqyscea;
        goto ukggwygocweoasce;
        wwqkoggocqusyqum:
        goto eewqaciiuesekwgg;
        goto oiekiiuowauqmceu;
        meqcckcokmqigmcs:
        eewqaciiuesekwgg:
        goto qmuawywgqcaqwoqg;
        waiwusckekwoeasa:
        wskswcqwsiamcmgk:
        goto eguiciymwgcukgcw;
        uuaiuucquuomguyi:
        $eomsgokgyssmwmai = strlen($ycskuuyucyuqisaq);
        goto uikgsuwekyomyqea;
        qmuawywgqcaqwoqg:
        $ciyackuwsqkoqese += 5;
        goto owigmucmmkisusqa;
        wuysmaasqoqeeauk:
        if (!($ciyackuwsqkoqese < $eomsgokgyssmwmai)) {
            goto wskswcqwsiamcmgk;
        }
        goto kyqcykkugmceeoeo;
        gcoyyuwaycukiaey:
        $wayeqowwwmqyscea .= chr($uiymkeeaukcyqqik);
        goto wwqkoggocqusyqum;
        qcqikccascwsikim:
        euysiqmgeyskkooq:
        goto oomsemgiwqioyoqy;
        cyqkscsqmaaisquy:
        $wayeqowwwmqyscea .= chr(0xe0 | $uiymkeeaukcyqqik >> 12) . chr(0x80 | $uiymkeeaukcyqqik >> 6 & 0x3f) . chr(0x80 | $uiymkeeaukcyqqik & 0x3f);
        goto uwuawieeaomscowi;
        csquacyaqsgwkoui:
        if ($uiymkeeaukcyqqik < 0x800) {
            goto eowegcwycwiwkukk;
        }
        goto cyqkscsqmaaisquy;
        icsgwagqaioccsgg:
        $ciyackuwsqkoqese += 2;
        goto qcqikccascwsikim;
        essygikwcggsgcec:
        goto euysiqmgeyskkooq;
        goto wmmyckaiiwyokuuq;
        ieoosusioiaaicgo:
        $wayeqowwwmqyscea .= $ycskuuyucyuqisaq[$ciyackuwsqkoqese];
        goto essygikwcggsgcec;
        iwoauisiuicommck:
        $wayeqowwwmqyscea = '';
        goto uuaiuucquuomguyi;
        kyqcykkugmceeoeo:
        if ($ycskuuyucyuqisaq[$ciyackuwsqkoqese] == "\x25" && $ycskuuyucyuqisaq[$ciyackuwsqkoqese + 1] == "\x75") {
            goto geieogywagiqyaou;
        }
        goto ecuicaaoiwckckqu;
        owkicamwkyumewim:
        owmywoiysicswqys:
        goto sqsykywuswmcsuys;
        ugmqyekuwwuaoeya:
        if ($uiymkeeaukcyqqik < 0x7f) {
            goto oeoagqkakyekmycs;
        }
        goto csquacyaqsgwkoui;
        oomsemgiwqioyoqy:
        ouomswygcqoswiou:
        goto yyesyssasgoyqaas;
        joukoqeseemqaiww:
        $wayeqowwwmqyscea .= chr(0xc0 | $uiymkeeaukcyqqik >> 6) . chr(0x80 | $uiymkeeaukcyqqik & 0x3f);
        goto meqcckcokmqigmcs;
        oiekiiuowauqmceu:
        eowegcwycwiwkukk:
        goto joukoqeseemqaiww;
        wmmyckaiiwyokuuq:
        geieogywagiqyaou:
        goto msekqmawsimogskg;
        sqsykywuswmcsuys:
        $wayeqowwwmqyscea .= urldecode(substr($ycskuuyucyuqisaq, $ciyackuwsqkoqese, 3));
        goto icsgwagqaioccsgg;
        ecuicaaoiwckckqu:
        if ($ycskuuyucyuqisaq[$ciyackuwsqkoqese] == "\45") {
            goto owmywoiysicswqys;
        }
        goto ieoosusioiaaicgo;
        wsqucoqquuoimgoi:
        goto wqsmcycoysssooew;
        goto waiwusckekwoeasa;
        msekqmawsimogskg:
        $uiymkeeaukcyqqik = hexdec(substr($ycskuuyucyuqisaq, $ciyackuwsqkoqese + 2, 4));
        goto ugmqyekuwwuaoeya;
        yyesyssasgoyqaas:
        $ciyackuwsqkoqese++;
        goto wsqucoqquuoimgoi;
        woumcuokuoeqyaaq:
        oeoagqkakyekmycs:
        goto gcoyyuwaycukiaey;
        uwuawieeaomscowi:
        goto eewqaciiuesekwgg;
        goto woumcuokuoeqyaaq;
        yyqckcwiwgegocsu:
        wqsmcycoysssooew:
        goto wuysmaasqoqeeauk;
        ukggwygocweoasce:
    }
    
    public function oauesaioaycwyygy($waoisqguweoociwe) : string
    {
        goto cksesgscmiccmigi;
        kygiwieeewgocwgs:
        return "\144\x61\x74\141\72\x69\155\x61\147\145\57\163\166\147\x2b\170\155\x6c\73\142\141\163\x65\66\64\x2c{$owyiccmocukoumyy}";
        goto uawqiywkcgeowkye;
        guwcsuucwigkukmu:
        $owyiccmocukoumyy = base64_encode($this->smemegymuqekcaui(rawurlencode($waoisqguweoociwe)));
        goto kygiwieeewgocwgs;
        cksesgscmiccmigi:
        $waoisqguweoociwe = $this->miocmcoykayoyyau()->eyamqkqiykagecsw($waoisqguweoociwe, true);
        goto guwcsuucwigkukmu;
        uawqiywkcgeowkye:
    }
    public function ucqcyyiuiwewsugk()
    {
        goto waiqksgggkmmgkms;
        scwyoqesmseysyca:
        ewyccsuswogsksoq:
        goto wgusqquuucyeigcw;
        gkuwksowwuqsosye:
        $owuckwsseckgeweg = $this->guyeewccesqeokww($mkomwsiykqigmqca);
        goto mwmkykmeugewswss;
        eiweyioigakomama:
        ksowgysucgksmeiu:
        goto imsioswwqucagyiq;
        mwmkykmeugewswss:
        if (!(is_array($owuckwsseckgeweg) && $owuckwsseckgeweg)) {
            goto ksowgysucgksmeiu;
        }
        goto eiykgwsymemeaowg;
        gauiaqeaegyowuyg:
        if (!$iiaumsgauuyeqksw->uuegkqwagymmusiy($gwgkqsyaesmocmsk, 3)) {
            goto aeuwgwcuycgqgmcm;
        }
        goto gkuwksowwuqsosye;
        ciwsqasmaysciuiq:
        igesyssomuuqqoky:
        goto eiweyioigakomama;
        momssmiweesyaiqm:
        $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk();
        goto gauiaqeaegyowuyg;
        yeuauqgwkmycsuss:
        $gwgkqsyaesmocmsk = __DIR__ . "\x2f\111\x6e\164\145\162\x66\x61\x63\145\163";
        goto momssmiweesyaiqm;
        eiykgwsymemeaowg:
        foreach ($owuckwsseckgeweg as $ymqmyyeuycgmigyo => $ykiyyumywksqcisg) {
            goto uiicuwmmeceaccge;
            wkemaqyiomkkescs:
            $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x69\x6e\164\145\162\146\141\143\x65\56\x70\x68\x70", ["\x6e\141\x6d\145\163\x70\141\143\x65" => $aiieyweysaukqemc, "\x69\x6e\x74\x65\x72\x66\141\143\145" => $oouysqigwayiqgkk, "\x69\143\157\x6e\163" => $ykiyyumywksqcisg]);
            goto wqiwicgmusisugqc;
            iewagmumgcysgkiw:
            $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
            goto aqwiceqiawoaykoo;
            iigwkuykiykukwky:
            yoqmekyaqscyywgw:
            goto ocmckmgisuwsyuwc;
            ukwecsumaqaceoke:
            $oouysqigwayiqgkk = "\111\143\x6f\156" . ucfirst($ymqmyyeuycgmigyo) . "\x49\156\x74\x65\x72\x66\x61\x63\145";
            goto iewagmumgcysgkiw;
            aqwiceqiawoaykoo:
            $ymqmyyeuycgmigyo = ManipulateString::mkwcwqkqeqkqyggc($egkyssmuqcwaciya);
            goto uwwsqewmquccsqkc;
            wqiwicgmusisugqc:
            $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($gwgkqsyaesmocmsk, "{$oouysqigwayiqgkk}\56\160\150\160", $ewgwqamkygiqaawc);
            goto iigwkuykiykukwky;
            uiicuwmmeceaccge:
            if (!(is_array($ykiyyumywksqcisg) && $ykiyyumywksqcisg)) {
                goto yoqmekyaqscyywgw;
            }
            goto ukwecsumaqaceoke;
            ocmckmgisuwsyuwc:
            yimsysqkmmuaskge:
            goto qkowogwggmgksqce;
            uwwsqewmquccsqkc:
            $aiieyweysaukqemc = str_replace("{$ymqmyyeuycgmigyo}\x5c", '', $egkyssmuqcwaciya) . "\134\111\156\164\145\162\x66\141\x63\x65\x73";
            goto wkemaqyiomkkescs;
            qkowogwggmgksqce:
        }
        goto ciwsqasmaysciuiq;
        waiqksgggkmmgkms:
        if (!(!ManipulateAjax::mcgoysmkqsqooceq() && ManipulateSetting::esoowymaimwcuecq())) {
            goto ewyccsuswogsksoq;
        }
        goto qiqsuscoooigcqiu;
        qiqsuscoooigcqiu:
        $mkomwsiykqigmqca = $this->ikeqsmumgwwuqmkw() . "\x2f\141\x73\x73\145\x74\x2f" . self::ICONS_PATH;
        goto yeuauqgwkmycsuss;
        imsioswwqucagyiq:
        aeuwgwcuycgqgmcm:
        goto scwyoqesmseysyca;
        wgusqquuucyeigcw:
    }
    
    public function guyeewccesqeokww($mkomwsiykqigmqca, $yuwymayicwwqiske = null)
    {
        goto agumgemyuquqacsi;
        qkqkgkyyoogmisko:
        return $ykiyyumywksqcisg;
        goto skemsssgesqwqkyg;
        miocyowiooqceoku:
        $ucasskoyoewwmmii = ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca);
        goto ikioiaguwaqkmmyc;
        ikioiaguwaqkmmyc:
        foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) {
            goto yacqaemukikwauew;
            ycgikgowwaioqugw:
            owykgucmwkqsmcsg:
            goto yemwoomcwaoeyoag;
            bsicsscqymyycqcs:
            if ($qogsmwakwacwqogk->oagwcgcemwwykokc()) {
                goto ecgaykgwooyuawqk;
            }
            goto oiiwycewowouacmm;
            oiiwycewowouacmm:
            
            $ymqmyyeuycgmigyo = preg_replace("\x2f\134\56\133\136\x2e\x5c\x73\x5d\x7b\x33\54\x34\x7d\x24\x2f", '', $ymqmyyeuycgmigyo);
            goto wmqgsukikoasweka;
            usmwsquyeukawsmo:
            $mkomwsiykqigmqca = $qogsmwakwacwqogk->scikcaaaiwcsqowm();
            goto sgiqkgawyeuymoks;
            sgiqkgawyeuymoks:
            $ymqmyyeuycgmigyo = $qogsmwakwacwqogk->mawoacksgosuccme();
            goto bsicsscqymyycqcs;
            ceyuiecmmywyymqe:
            awwiymymcoewykws:
            goto ycgikgowwaioqugw;
            ggcmyqsqocygmqck:
            $ykiyyumywksqcisg = array_merge($ykiyyumywksqcisg, $this->guyeewccesqeokww($mkomwsiykqigmqca, $ymqmyyeuycgmigyo));
            goto kaoaegkkmmqwwcqg;
            yacqaemukikwauew:
            if ($qogsmwakwacwqogk->qkuqsuugayciskek()) {
                goto awwiymymcoewykws;
            }
            goto usmwsquyeukawsmo;
            mkaquyqyuwcaeeqe:
            goto yagqeyemyasuakyq;
            goto zwukyqcioqysimss;
            zwukyqcioqysimss:
            ecgaykgwooyuawqk:
            goto ggcmyqsqocygmqck;
            kaoaegkkmmqwwcqg:
            yagqeyemyasuakyq:
            goto ceyuiecmmywyymqe;
            wmqgsukikoasweka:
            $ykiyyumywksqcisg[$yuwymayicwwqiske][$ymqmyyeuycgmigyo] = "{$yuwymayicwwqiske}\x2f{$ymqmyyeuycgmigyo}";
            goto mkaquyqyuwcaeeqe;
            yemwoomcwaoeyoag:
        }
        goto cgkemewmecusmuqy;
        agumgemyuquqacsi:
        $ykiyyumywksqcisg = [];
        goto miocyowiooqceoku;
        cgkemewmecusmuqy:
        ecaiosueicqamwwc:
        goto qkqkgkyyoogmisko;
        skemsssgesqwqkyg:
    }
}
