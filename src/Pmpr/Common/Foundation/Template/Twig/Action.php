<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Template\Twig;

use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\Decorator\DecoratorUser;
use Pmpr\Common\Foundation\Decorator\DecoratorWidget;
use Pmpr\Common\Foundation\Decorator\Post\DecoratorAttachment;
use Pmpr\Common\Foundation\Decorator\Post\DecoratorAuthor;
use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost;
use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use Pmpr\Common\Foundation\Manipulate\ManipulateFile;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\ManipulateUser;
use Pmpr\Common\Foundation\Manipulate\ManipulateValidation;
use Pmpr\Common\Foundation\Manipulate\ManipulateWidget;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateTemplate;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\WPSetting;
use WP_Post;
use WP_Term;

class Action extends Callback
{
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\164\167\x69\147\137\x72\x65\x6e\144\145\x72\x5f\146\x69\x6c\x65\156\x61\x6d\145"), [$this, "\x6f\157\161\x65\153\155\x67\163\161\x6f\x6d\x73\x61\153\x69\x6f"]);
        parent::kgquecmsgcouyaya();
    }
    public function aqiicausqkomqkqy()
    {
        goto igyikaemwiwqyeqq;
        aumygwwssywsogem:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x75\156\151\x71\151\144", function () {
            return uniqid();
        });
        goto gsaiaaeooukaeygk;
        kokqmecseosgceak:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\163\x5f\156\x75\155\x62\x65\162", function ($eqgoocgaqwqcimie) {
            return is_numeric($eqgoocgaqwqcimie);
        });
        goto swmkwwkoguyyoogq;
        uwkuaykqqqkwgcey:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x62\141\163\145\156\x61\155\x65", function ($mkomwsiykqigmqca) {
            return basename($mkomwsiykqigmqca);
        });
        goto ceyyuykckoayuosu;
        gsaiaaeooukaeygk:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\145\x63\x68\157", function ($sociqikgoyemqaac) {
            echo $sociqikgoyemqaac;
        });
        goto kokqmecseosgceak;
        ceyyuykckoayuosu:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x63\x61\x6c\154\x5f\x75\x73\145\x72\x5f\146\x75\x6e\x63", function ($akemggqscawwikim, ...$qookweymeqawmcwo) {
            return call_user_func($akemggqscawwikim, ...$qookweymeqawmcwo);
        });
        goto aumygwwssywsogem;
        igyikaemwiwqyeqq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x65\170\x74\162\x61\143\164", function (&$mgkceomocowocqyo, $uomewyckeuqoqocu) {
            foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
                $mgkceomocowocqyo[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
                suaiaeakuwkeaggc:
            }
            caqisoicuegsemyy:
        }, ["\x6e\145\x65\x64\x73\137\143\x6f\x6e\x74\x65\170\164" => true]);
        goto uwkuaykqqqkwgcey;
        swmkwwkoguyyoogq:
    }
    public function sqmuqsscmimwqoki()
    {
        goto aumiwewkmkcyqsic;
        osgggiswqmmcauic:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\163\137\x70\x6f\163\x74", function ($post = null, $cwwowqyuwccuykom = false) {
            return ManipulatePost::get($post, self::OBJECT, $cwwowqyuwccuykom) instanceof WP_Post;
        });
        goto kycuyyawyykwayum;
        emwgmewoyckawiaa:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\x5f\164\150\x65\137\164\151\x74\x6c\x65", function ($post = 0) {
            return ManipulatePost::qcgakseyaikigqco($post);
        });
        goto ouiwcwgymiycmesy;
        woimcikoqmikiiuo:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\x74\x5f\160\x65\162\155\141\x6c\151\156\153", function ($post, $cwwowqyuwccuykom = false) {
            return ManipulatePost::ycqquoiyyuesegsy($post, $cwwowqyuwccuykom);
        });
        goto yygiyieeyuuqucke;
        yoikmmqgsuecwqse:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\x5f\164\150\x65\x5f\x64\141\x74\x65", function ($saqmwwmqiwmkiwaa = '', $post = null) {
            return ManipulatePost::squyiyimquqicqke($saqmwwmqiwmkiwaa, $post);
        });
        goto emwgmewoyckawiaa;
        aimoueqqomiogmwe:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x69\x73\x5f\x69\x6d\141\x67\x65", function ($post = null) {
            return ManipulateAttachment::qecqsmowoqmwgagu($post);
        });
        goto osgggiswqmmcauic;
        yygiyieeyuuqucke:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\164\137\160\x61\x67\151\x6e\141\164\x69\157\x6e\x5f\154\x69\155\151\x74", function () {
            return ManipulateSetting::omkaowmygoqwsywq();
        });
        goto ksaoceiosgkgkeua;
        uwcgosckamuosimw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\164\x5f\x69\144", function ($mksyucucyswaukig) {
            goto mkcqgkuwwkekeyea;
            kwocuyyugaqsicqy:
            wecwoieqkcmgyemy:
            goto ckcsasciyamuyeak;
            ckcsasciyamuyeak:
            return $aokagokqyuysuksm;
            goto rayeowssukccumsa;
            egkscycmsoysyukk:
            ugkuauswwusmgeak:
            goto cwogqueiqawomkuc;
            ymuwkueqksmiucek:
            if ($mksyucucyswaukig instanceof WP_Post) {
                goto aoquaueqscawcquu;
            }
            goto askmmowgaoaeucmg;
            mkcqgkuwwkekeyea:
            $aokagokqyuysuksm = '';
            goto ymuwkueqksmiucek;
            qyauskeceyuommay:
            qsiiueeogkusyayq:
            goto skuiqymemkkmcasa;
            cwogqueiqawomkuc:
            goto qsiiueeogkusyayq;
            goto waekkoqkywowucqm;
            mgqoggoasugsqoqm:
            aoquaueqscawcquu:
            goto gquwcimccausouey;
            caeuciiioaqyuyug:
            $aokagokqyuysuksm = $mksyucucyswaukig;
            goto egkscycmsoysyukk;
            skuiqymemkkmcasa:
            goto wecwoieqkcmgyemy;
            goto mgqoggoasugsqoqm;
            iyyoksuqkyayycyo:
            $aokagokqyuysuksm = ManipulateTerm::mwikyscisascoeea($mksyucucyswaukig);
            goto qyauskeceyuommay;
            waekkoqkywowucqm:
            mkuuaucmumoqmogc:
            goto iyyoksuqkyayycyo;
            mcamcymgukiawmca:
            if (!is_numeric($mksyucucyswaukig)) {
                goto ugkuauswwusmgeak;
            }
            goto caeuciiioaqyuyug;
            gquwcimccausouey:
            $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($mksyucucyswaukig);
            goto kwocuyyugaqsicqy;
            askmmowgaoaeucmg:
            if ($mksyucucyswaukig instanceof WP_Term) {
                goto mkuuaucmumoqmogc;
            }
            goto mcamcymgukiawmca;
            rayeowssukccumsa:
        });
        goto quycsusswssyiqek;
        gsscqquysycuswow:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\x74\137\x74\x69\164\154\x65", function ($mksyucucyswaukig) {
            return ManipulatePost::qcgakseyaikigqco($mksyucucyswaukig);
        });
        goto uwcgosckamuosimw;
        ksaoceiosgkgkeua:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\150\x61\166\x65\x5f\160\x6f\163\x74\x73", function () {
            return ManipulatePost::ekwkywuguceaogsk();
        });
        goto wesmogqcyeemwqaq;
        eisoouawyymkasou:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\164\x5f\x65\x64\x69\164\x5f\x6c\x69\x6e\153", function ($mksyucucyswaukig) {
            goto mkuwumgwoyasswam;
            cwsmkieawokgkqso:
            oesewmcmiyceckae:
            goto skaswwgougcyyewo;
            iauiowaaqsooooco:
            $iwywmkygwewiamwm = DecoratorPost::yyykkcyiksewsoqy($mksyucucyswaukig);
            goto cwsmkieawokgkqso;
            aakueiomkcyiiows:
            ioymoeauqmugekqw:
            goto iauiowaaqsooooco;
            cmqcmgwesykwwosy:
            $iwywmkygwewiamwm = ManipulateTerm::yyykkcyiksewsoqy($mksyucucyswaukig);
            goto ygqwqqiowseokqyy;
            cckaqseuwsokgqky:
            goto oesewmcmiyceckae;
            goto aakueiomkcyiiows;
            skaswwgougcyyewo:
            return $iwywmkygwewiamwm;
            goto gqyooycgsagyyeia;
            eeuyyauaomyugqso:
            if (!$mksyucucyswaukig instanceof WP_Term) {
                goto acaseyakoigmukmc;
            }
            goto cmqcmgwesykwwosy;
            ygqwqqiowseokqyy:
            acaseyakoigmukmc:
            goto cckaqseuwsokgqky;
            mrocimywqwigwumc:
            if ($mksyucucyswaukig instanceof WP_Post) {
                goto ioymoeauqmugekqw;
            }
            goto eeuyyauaomyugqso;
            mkuwumgwoyasswam:
            $iwywmkygwewiamwm = "\43";
            goto mrocimywqwigwumc;
            gqyooycgsagyyeia:
        });
        goto gsscqquysycuswow;
        meacamomoigoocks:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\150\x61\163\x5f\160\157\x73\x74\137\164\150\165\x6d\142\156\x61\x69\154", function ($post) {
            return DecoratorPost::oaqimsyggeyyceig($post);
        });
        goto wmgmwseuygieasiq;
        ieaumiwogamciyeq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\164\137\164\x68\145\137\x63\157\x6e\x74\x65\156\x74", function ($post) {
            return ManipulatePost::souwykwwmyygqyqi($post);
        });
        goto wycaemkqgqoqamga;
        ukwaqucywiqsqcmw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\164\137\160\x6f\x73\164\137\x6d\145\x74\141", function ($uusmaiomayssaecw, $post, $cuyooiakswegosog = true) {
            return ManipulatePost::igawqaomowicuayw($uusmaiomayssaecw, $post, $cuyooiakswegosog);
        });
        goto waqwicwqkgsgaosm;
        waqwicwqkgsgaosm:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x77\160\137\x67\x65\164\x5f\x61\x74\164\141\x63\150\x6d\x65\156\x74\x5f\151\x6d\141\x67\x65\137\x75\x72\154", function ($qssimkkaqkwceqqs, $oiegiwogmwmawkeo = '') {
            goto iuaauoycciukeqaw;
            emcskqgacoswgmog:
            goto iiyuccyiiyoguicm;
            goto guouwiieuysyiewm;
            amegcwiaikcwyuws:
            $eeamcawaiqocomwy = DecoratorAttachment::oiucukewkckkwiqc($qssimkkaqkwceqqs);
            goto emcskqgacoswgmog;
            soooekmauiwsaemc:
            return $eeamcawaiqocomwy;
            goto msokmumgqigwgwwc;
            ycsgumakqqweigca:
            $eeamcawaiqocomwy = DecoratorAttachment::iaykyouimqoikagg($qssimkkaqkwceqqs, $oiegiwogmwmawkeo);
            goto uismokoooeicygyy;
            iuaauoycciukeqaw:
            if ($oiegiwogmwmawkeo) {
                goto oggqgmiqwuceekqm;
            }
            goto amegcwiaikcwyuws;
            uismokoooeicygyy:
            iiyuccyiiyoguicm:
            goto soooekmauiwsaemc;
            guouwiieuysyiewm:
            oggqgmiqwuceekqm:
            goto ycsgumakqqweigca;
            msokmumgqigwgwwc:
        });
        goto kmgimueiaqoamoiq;
        ycuksimueyoeugmi:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x70\157\163\x74\137\x63\x6c\x61\x73\163", function ($egkyssmuqcwaciya, $post = null) {
            post_class($egkyssmuqcwaciya, $post);
        });
        goto iayqwwsmsuwaykyw;
        quycsusswssyiqek:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\164\137\x74\x68\145\137\x70\157\x73\x74\137\164\x68\x75\x6d\x62\x6e\141\x69\x6c", function ($post, $oiegiwogmwmawkeo, $wisgiwskwawciiee = []) {
            return DecoratorPost::smwweookeqkiiygs($post, $oiegiwogmwmawkeo, $wisgiwskwawciiee);
        });
        goto cmogamoiwugoaaoo;
        osuwwuwykkyioics:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\x73\x5f\x63\165\163\x74\x6f\155\137\x70\157\x73\x74\137\164\171\x70\x65\137\163\x69\x6e\147\154\x65", function () {
            return is_singular(ManipulatePost::mwoyqeeigwqoamiw());
        });
        goto aimoueqqomiogmwe;
        wmgmwseuygieasiq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\150\x61\x73\x5f\x65\x78\x63\x65\x72\160\164", function ($post) {
            return DecoratorPost::seewsasmyoyciiee($post);
        });
        goto woimcikoqmikiiuo;
        wycaemkqgqoqamga:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x74\150\145\x5f\143\157\156\x74\x65\x6e\164", function ($yauwwygqkmsmamik = '', $ecckicuukiesgaig = false) {
            return the_content($yauwwygqkmsmamik, $ecckicuukiesgaig);
        });
        goto osuwwuwykkyioics;
        yamoqmeywqamiyee:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\164\137\x74\x68\x65\137\145\x78\x63\x65\x72\160\x74", function ($post = null) {
            return ManipulatePost::masoymaamekuykso($post);
        });
        goto eisoouawyymkasou;
        uyesmwqkkaeqyqsw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\x74\x5f\x70\157\163\164\137\x74\171\x70\x65", function ($post) {
            return ManipulatePost::gueasuouwqysmomu($post);
        });
        goto meacamomoigoocks;
        yumwmakewcuceeeq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\164\137\x63\141\x74\x65\x67\x6f\x72\171\x5f\x6c\x69\x6e\153", function ($guwumyyyakswawas) {
            return get_category_link($guwumyyyakswawas);
        });
        goto iksqmycekaokseuk;
        ymaiyayeueqekkqu:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\164\137\160\x6f\x73\164\x5f\x73\164\x61\x74\165\163", function ($post = null) {
            return get_post_status($post);
        });
        goto yumwmakewcuceeeq;
        qayscesoyiskoeko:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\x73\x5f\x70\x61\x67\x65", function ($suaemuyiacqyugsm = null) {
            return is_page($suaemuyiacqyugsm);
        });
        goto ymaiyayeueqekkqu;
        wesmogqcyeemwqaq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\164\x68\145\x5f\160\x6f\163\x74", "\x74\x68\145\137\160\157\x73\164");
        goto ieaumiwogamciyeq;
        cmogamoiwugoaaoo:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\164\x5f\164\x68\x65\137\x70\157\163\164\137\164\x68\165\155\x62\x6e\x61\151\154\x5f\165\x72\x6c", function ($post, $oiegiwogmwmawkeo = "\160\157\163\x74\x2d\x74\150\x75\x6d\142\156\141\151\x6c") {
            return ManipulatePost::uamasysiccecccmw($oiegiwogmwmawkeo, $post);
        });
        goto ycuksimueyoeugmi;
        iksqmycekaokseuk:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\164\137\160\x6f\163\x74", function ($post = null) {
            return ManipulatePost::get($post);
        });
        goto yoikmmqgsuecwqse;
        aumiwewkmkcyqsic:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\167\160\x5f\x67\145\x74\137\141\x74\x74\141\143\x68\x6d\145\x6e\x74\137\x75\x72\154", function ($qssimkkaqkwceqqs) {
            return DecoratorAttachment::oiucukewkckkwiqc($qssimkkaqkwceqqs);
        });
        goto ukwaqucywiqsqcmw;
        kmgimueiaqoamoiq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\x74\x5f\160\x6f\163\x74\137\x74\x79\160\145\137\x6f\x62\x6a\x65\x63\164", function ($post) {
            return ManipulatePost::waaisqccqacqeium(ManipulatePost::gueasuouwqysmomu($post));
        });
        goto uyesmwqkkaeqyqsw;
        kycuyyawyykwayum:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\163\137\x61\164\164\x61\143\150\x6d\x65\156\x74", function ($post = null) {
            return ManipulateAttachment::aauyuieeeaakygki($post);
        });
        goto qayscesoyiskoeko;
        ouiwcwgymiycmesy:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\164\x68\145\137\x74\151\164\x6c\145", function () {
            return the_title();
        });
        goto yamoqmeywqamiyee;
        iayqwwsmsuwaykyw:
    }
    public function ugugagoguiycqeys()
    {
        goto osksqmgkikamgaui;
        ziqysygmaasemyem:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x61\x64\144\137\x6c\x6f\143\141\164\x69\157\156", function ($qqscaoyqikuyeoaw = '', $skikiykssoocmmik = false, $ymqmyyeuycgmigyo = null, $post = null) {
            ManipulateTemplate::kikcumcscysmmuos($qqscaoyqikuyeoaw, $skikiykssoocmmik, $ymqmyyeuycgmigyo, $post);
        });
        goto ocwegqcikuwygcos;
        kakwaaemoyyusiek:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\x74\137\x69\x63\157\x6e", function ($wkaqekwwgqsqwcoi, $wwgucssaecqekuek = [], $gskuwmeemyeuwogc = false) {
            return ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, $gskuwmeemyeuwogc);
        });
        goto usqgeieewckcwumm;
        usqgeieewckcwumm:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\x5f\x73\160\x69\x6e\x6e\x65\x72", function ($ywmkwiwkosakssii = []) {
            return ManipulateHTML::kqmkicmuscsgqeoi($ywmkwiwkosakssii);
        });
        goto qyggcimqgyscmcci;
        wagqsecuquyukiwc:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\165\156\163\x65\164", function ($uomewyckeuqoqocu, $uusmaiomayssaecw) {
            ManipulateArray::unset($uomewyckeuqoqocu, $uusmaiomayssaecw);
            return $uomewyckeuqoqocu;
        });
        goto ziqysygmaasemyem;
        osksqmgkikamgaui:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\143\x61\x6e\x5f\163\x68\157\167\x5f\x6f\156\x5f\x67\162\151\x64", function ($momcykaoccoymeig = 1, $ywmkwiwkosakssii = []) {
            goto aweayueuaeoasyms;
            yoosmuokogseueas:
            qkueegaowuyiimgw:
            goto moeqauuausuqygiq;
            cgsuikiqggkikaae:
            gaqweioagqyciyaw:
            goto yoosmuokogseueas;
            cecomsiewwckuwqy:
            foreach ($uasyiiacieyekiia as $ycuyiqagsmgikago) {
                goto gmskkukiiwweocwi;
                cskesgswygwiqoim:
                $aqykuigiuwmmcieu .= "\x20\x64\55{$ycuyiqagsmgikago}\142\154\x6f\143\153";
                goto guyeaeiscmgksacs;
                syqysaawasmesiqs:
                uyaweoaaqsagsqyi:
                goto yeiwocswikqkwyew;
                uyqsoayeaaumkace:
                swuwwcumqwckimwy:
                goto ooayswecmkkqgskg;
                gmskkukiiwweocwi:
                $uuyoeicyoayimaoa = ManipulateArray::get($ywmkwiwkosakssii, $ycuyiqagsmgikago, false);
                goto uqamuckwuksquqia;
                ooayswecmkkqgskg:
                if (is_numeric($uuyoeicyoayimaoa) && $momcykaoccoymeig > $uuyoeicyoayimaoa) {
                    goto qsqwywcesyquykqq;
                }
                goto cskesgswygwiqoim;
                kskqckgmygiwqucm:
                kqscgsuaugsiwiwi:
                goto sucgyiymguwououy;
                ieacisiumswqewsq:
                $aqykuigiuwmmcieu .= "\40\144\x2d{$ycuyiqagsmgikago}\x6e\x6f\x6e\145";
                goto kskqckgmygiwqucm;
                gukawqgamokyceki:
                $ycuyiqagsmgikago .= "\55";
                goto mckkqgseimcgkcgu;
                mckkqgseimcgkcgu:
                goto swuwwcumqwckimwy;
                goto syqysaawasmesiqs;
                uqamuckwuksquqia:
                if ($ycuyiqagsmgikago == "\x78\163") {
                    goto uyaweoaaqsagsqyi;
                }
                goto gukawqgamokyceki;
                yeiwocswikqkwyew:
                $ycuyiqagsmgikago = '';
                goto uyqsoayeaaumkace;
                guyeaeiscmgksacs:
                goto kqscgsuaugsiwiwi;
                goto keaaqaugoyquwsos;
                keaaqaugoyquwsos:
                qsqwywcesyquykqq:
                goto ieacisiumswqewsq;
                sucgyiymguwououy:
                scioecswaikeacmy:
                goto kcqewweqqqmekuwi;
                kcqewweqqqmekuwi:
            }
            goto cgsuikiqggkikaae;
            wyokakscicekiums:
            if (!(is_array($ywmkwiwkosakssii) && $ywmkwiwkosakssii)) {
                goto qkueegaowuyiimgw;
            }
            goto ygywqwksoumccysq;
            ygywqwksoumccysq:
            $uasyiiacieyekiia = ["\x78\163", "\x73\x6d", "\x6d\x64", "\x6c\147", "\170\154"];
            goto cecomsiewwckuwqy;
            moeqauuausuqygiq:
            return rtrim($aqykuigiuwmmcieu);
            goto kmmwmccqeuasieoy;
            aweayueuaeoasyms:
            $aqykuigiuwmmcieu = '';
            goto wyokakscicekiums;
            kmmwmccqeuasieoy:
        });
        goto wagqsecuquyukiwc;
        igcusescocaiyqki:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\x73\x5f\165\x72\x6c", function ($eeamcawaiqocomwy) {
            return ManipulateValidation::wmcwegoisyeeosqu($eeamcawaiqocomwy);
        });
        goto kakwaaemoyyusiek;
        qmesaeogykqacemy:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x63\141\156\137\x6c\x61\172\x79\x5f\x6c\157\141\x64", function () {
            return $this->sscegwueamckwmcy("\x63\x61\156\x5f\x6c\141\x7a\171\137\154\157\141\144", true);
        });
        goto cycukssoyewuiyyw;
        ocwegqcikuwygcos:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\143\162\145\x61\164\x65", function ($kqywgoqsmuswammk, $wwgucssaecqekuek = [], $muiegiugiocacqkm = true, $ewgwqamkygiqaawc = '') {
            return ManipulateHTML::qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, $muiegiugiocacqkm, $ewgwqamkygiqaawc);
        });
        goto qmesaeogykqacemy;
        oaogeakeuqgouywe:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\167\160\x5f\163\145\x74\x74\151\156\x67", function ($uusmaiomayssaecw, $ggauoeuaesiymgee = false) {
            return WPSetting::eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee);
        });
        goto igcusescocaiyqki;
        qyggcimqgyscmcci:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\137\x74\145\155\x70\154\141\164\145", [$this, "\171\151\171\161\x65\143\x61\x77\x69\x6f\171\x6f\x73\x6f\x61\167"]);
        goto mwsogcaisqkoyoyo;
        cycukssoyewuiyyw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x63\x61\162\144\x5f\142\157\164\x74\x6f\155\137\155\x61\162\x67\x69\x6e", function ($qgqgaykggoemycsk, $qgoqiacsiccwoawi, $giwamsoicooomueg = 6) {
            $giwamsoicooomueg = ManipulateHTML::sywwiggceceaqmko($qgqgaykggoemycsk, $qgoqiacsiccwoawi, $giwamsoicooomueg);
            return $giwamsoicooomueg;
        });
        goto oaogeakeuqgouywe;
        mwsogcaisqkoyoyo:
    }
    public function render()
    {
        goto mqckeqywkyewukku;
        mqaemqqgquyscwgg:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x72\x65\156\x64\x65\x72\x5f\160\157\x73\164\x5f\144\141\x74\x61", function ($aiowsaccomcoikus = "\164\x69\x74\x6c\145", $ccamueccusigaaio = null, $ywmkwiwkosakssii = []) {
            goto qiagugckeckokcas;
            swoiuaaoaceaaeou:
            imyyokaecggauwca:
            goto eqewaacwikyoaswc;
            semsywguyogigssk:
            $ccamueccusigaaio = $post;
            goto scmyekuemcoeeggy;
            gkkywuycqkawqiuq:
            $cwwowqyuwccuykom = true;
            goto swoiuaaoaceaaeou;
            kcsegweogmaqiwco:
            aiouimmkquyuwagk:
            goto sqigasuoiqyqqokc;
            mqkmsmceakcwuykg:
            if (!$post) {
                goto iiieosoykaeycaks;
            }
            goto semsywguyogigssk;
            aaksksikokoywwqw:
            switch ($aiowsaccomcoikus) {
                case self::IMAGE:
                    goto iwcyguueicgkqmiq;
                    qiygeqkamwuomgie:
                    $icwicymcioeyeyek = DecoratorPost::smwweookeqkiiygs($ccamueccusigaaio, $oiegiwogmwmawkeo, $wwgucssaecqekuek);
                    goto aysgkuigyuqqcuae;
                    wyaiukacimqqkwso:
                    $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\x6c\141\163\163", "\x69\155\147\x2d\163\x69\x7a\145\x20\x73\x69\x7a\x65\x2d{$oiegiwogmwmawkeo}");
                    goto aiqouoismmsiakak;
                    ykyauiwkesygwwyq:
                    msmyywuowokwiswe:
                    goto kwacykquqegccocg;
                    qswoesemmkuisiak:
                    $wwgucssaecqekuek = ManipulateArray::get($ywmkwiwkosakssii, "\x61\x74\164\162\x73", []);
                    goto wyaiukacimqqkwso;
                    kwacykquqegccocg:
                    $icwicymcioeyeyek = ManipulateAttachment::qaeeusqkgwagwaqc($ccamueccusigaaio, $oiegiwogmwmawkeo, $wwgucssaecqekuek);
                    goto qaiqkuwcooimcsyc;
                    aysgkuigyuqqcuae:
                    goto uaewuiuogmissaks;
                    goto ykyauiwkesygwwyq;
                    aiqouoismmsiakak:
                    if (ManipulateAttachment::aauyuieeeaakygki($ccamueccusigaaio)) {
                        goto msmyywuowokwiswe;
                    }
                    goto qiygeqkamwuomgie;
                    qaiqkuwcooimcsyc:
                    uaewuiuogmissaks:
                    goto wgcwoaukyqokqegs;
                    iwcyguueicgkqmiq:
                    $oiegiwogmwmawkeo = ManipulateArray::get($ywmkwiwkosakssii, "\x73\151\x7a\145", "\164\x68\x75\155\x62\x6e\x61\x69\x6c");
                    goto qswoesemmkuisiak;
                    wgcwoaukyqokqegs:
                    goto ciuaqmasmqyeioiy;
                    goto agwuqimeueqcgeig;
                    agwuqimeueqcgeig:
                case "\x69\155\x61\147\x65\x5f\x75\162\154":
                case "\151\x6d\x61\147\145\x5f\x73\x72\143":
                    goto ywgasekuusqmywou;
                    ywgasekuusqmywou:
                    $oiegiwogmwmawkeo = ManipulateArray::get($ywmkwiwkosakssii, "\163\151\172\x65", "\x74\150\x75\155\x62\x6e\x61\151\x6c");
                    goto uumsakwagcmcusai;
                    ccuiyiguswiossui:
                    eeemieuggkqicmcm:
                    goto kouykoaqsyamwkow;
                    wcgeeoqqamawayyk:
                    $icwicymcioeyeyek = DecoratorPost::uamasysiccecccmw($ccamueccusigaaio, $oiegiwogmwmawkeo);
                    goto ewmswgookyygmeck;
                    uumsakwagcmcusai:
                    if (ManipulateAttachment::aauyuieeeaakygki($ccamueccusigaaio)) {
                        goto ioawqeykaygmcusq;
                    }
                    goto wcgeeoqqamawayyk;
                    ewmswgookyygmeck:
                    goto eeemieuggkqicmcm;
                    goto kmoguoggeuugwcuk;
                    kmoguoggeuugwcuk:
                    ioawqeykaygmcusq:
                    goto iussoiiiygmaqoey;
                    kouykoaqsyamwkow:
                    goto ciuaqmasmqyeioiy;
                    goto miigyyocoaqouyws;
                    iussoiiiygmaqoey:
                    $icwicymcioeyeyek = DecoratorAttachment::iaykyouimqoikagg($ccamueccusigaaio, $oiegiwogmwmawkeo);
                    goto ccuiyiguswiossui;
                    miigyyocoaqouyws:
                case self::NAME:
                case self::TITLE:
                    $icwicymcioeyeyek = ManipulatePost::qcgakseyaikigqco($ccamueccusigaaio);
                    goto ciuaqmasmqyeioiy;
                case "\144\141\164\x65":
                case "\x74\x69\x6d\145":
                case "\144\x61\x74\145\164\x69\155\145":
                    goto yymmsiqcoeikoges;
                    iiymmyommkikmyqa:
                    $icwicymcioeyeyek = $this->eciukqcoqmyacwow(ManipulatePost::squyiyimquqicqke($saqmwwmqiwmkiwaa, $ccamueccusigaaio, false), $saqmwwmqiwmkiwaa, $somiuasmmwkuceag);
                    goto oicqseawwmwcgsua;
                    wosiwcgiequysoiq:
                    oyiogyamekukoqce:
                    goto ecicsgkwsukqmquo;
                    ecicsgkwsukqmquo:
                    $somiuasmmwkuceag = ManipulateArray::get($ywmkwiwkosakssii, "\x6c\157\x63\141\x6c\145", "\x66\141");
                    goto cqkkmgicucyoeqca;
                    yymmsiqcoeikoges:
                    switch ($aiowsaccomcoikus) {
                        case "\x64\x61\164\145\x74\x69\x6d\x65":
                            $ggauoeuaesiymgee = ManipulateSetting::yoaaussmackoisuw();
                            goto oyiogyamekukoqce;
                        case "\x74\151\155\x65":
                            $ggauoeuaesiymgee = ManipulateSetting::isiuiegyqiomccsw();
                            goto oyiogyamekukoqce;
                        case "\144\141\164\x65":
                        default:
                            $ggauoeuaesiymgee = ManipulateSetting::uyomwmskouyyqyyq();
                            goto oyiogyamekukoqce;
                    }
                    goto mycaymeeoakigqwk;
                    mycaymeeoakigqwk:
                    cwaksqcggwcaucmo:
                    goto wosiwcgiequysoiq;
                    oicqseawwmwcgsua:
                    goto ciuaqmasmqyeioiy;
                    goto mqkkmgeccukekuus;
                    cqkkmgicucyoeqca:
                    $saqmwwmqiwmkiwaa = ManipulateArray::get($ywmkwiwkosakssii, "\146\157\162\155\x61\x74", $ggauoeuaesiymgee);
                    goto iiymmyommkikmyqa;
                    mqkkmgeccukekuus:
                case self::URL:
                case self::PERMALINK:
                    $icwicymcioeyeyek = ManipulatePost::ycqquoiyyuesegsy($ccamueccusigaaio);
                    goto ciuaqmasmqyeioiy;
                case "\144\x65\163\143":
                case self::DESCRIPTION:
                    goto agosuskgagmqkcqq;
                    oqsgqmmoqoyoicia:
                    goto ciuaqmasmqyeioiy;
                    goto mqycugoiuasmyycy;
                    agosuskgagmqkcqq:
                    $gioggcykgoikcwiy = ManipulateArray::get($ywmkwiwkosakssii, "\143\150\x65\x63\153", true);
                    goto cwuiegmgmaoasqys;
                    cwuiegmgmaoasqys:
                    $icwicymcioeyeyek = ManipulatePost::masoymaamekuykso($ccamueccusigaaio, $gioggcykgoikcwiy);
                    goto oqsgqmmoqoyoicia;
                    mqycugoiuasmyycy:
            }
            goto kcsegweogmaqiwco;
            sqigasuoiqyqqokc:
            ciuaqmasmqyeioiy:
            goto aosyiicmoiuswsce;
            scmyekuemcoeeggy:
            iiieosoykaeycaks:
            goto ykocaswauweieysc;
            coomeqeooeuaagwm:
            if (!$ccamueccusigaaio) {
                goto imyyokaecggauwca;
            }
            goto gkkywuycqkawqiuq;
            qiagugckeckokcas:
            $cwwowqyuwccuykom = false;
            goto coomeqeooeuaagwm;
            ykocaswauweieysc:
            $icwicymcioeyeyek = null;
            goto aaksksikokoywwqw;
            eqewaacwikyoaswc:
            $post = ManipulatePost::get($ccamueccusigaaio, self::OBJECT, $cwwowqyuwccuykom);
            goto mqkmsmceakcwuykg;
            aosyiicmoiuswsce:
            return rawurldecode($icwicymcioeyeyek);
            goto eisakkewoaeqqeqi;
            eisakkewoaeqqeqi:
        });
        goto aisciyiooggegcwa;
        koyswyqcemwusuku:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x72\145\x6e\144\145\162\137\141\165\x74\x68\157\162\x5f\144\141\x74\141", [$this, "\x6f\x65\x61\151\147\143\x69\163\153\x65\167\x73\x69\x69\x65\x63"]);
        goto mqaemqqgquyscwgg;
        mqckeqywkyewukku:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\162\x65\156\144\x65\x72\x5f\165\x73\x65\162\x5f\144\x61\x74\141", [$this, "\157\145\x61\151\147\143\151\x73\x6b\145\167\x73\x69\151\145\x63"]);
        goto koyswyqcemwusuku;
        aisciyiooggegcwa:
    }
    public function comment()
    {
        goto cymkyayecqkecsso;
        moicgacciggecuie:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\164\x5f\x63\x6f\155\155\145\x6e\164\x5f\x64\141\164\x65", function ($saqmwwmqiwmkiwaa = '', $aokagokqyuysuksm = null, $egkeamycaysqsoma = true) {
            return ManipulateComment::squyiyimquqicqke($aokagokqyuysuksm, $saqmwwmqiwmkiwaa, $egkeamycaysqsoma);
        });
        goto qqsiesyooukcuege;
        goiywqywgesicwsm:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\137\x63\157\155\x6d\145\156\x74\137\x74\x65\170\164", function ($aokagokqyuysuksm = null, $ywmkwiwkosakssii = []) {
            return get_comment_text($aokagokqyuysuksm, $ywmkwiwkosakssii);
        });
        goto iuamoyacomwmyswu;
        kssaskooygaesyuq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\164\x5f\156\145\x78\164\137\143\157\155\x6d\145\x6e\164\x73\x5f\x6c\x69\x6e\x6b", function ($pkyyagewkiyckmwy = '', $kmsquaeucgusuyio = 0) {
            return get_next_comments_link($pkyyagewkiyckmwy, $kmsquaeucgusuyio);
        });
        goto somoaammcamiswiq;
        iuamoyacomwmyswu:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x63\157\x6d\155\x65\x6e\164\x5f\162\145\160\154\x79\137\154\151\x6e\x6b", function ($ywmkwiwkosakssii = [], $aqqmosqmsuueyaes = null, $post = null) {
            return get_comment_reply_link($ywmkwiwkosakssii, $aqqmosqmsuueyaes, $post);
        });
        goto oosoeecugcecmoqu;
        somoaammcamiswiq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\x74\137\x63\157\x6d\x6d\145\x6e\164\137\141\x75\x74\x68\x6f\162\x5f\154\151\156\x6b", function ($aqqmosqmsuueyaes = 0) {
            return get_comment_author_link($aqqmosqmsuueyaes);
        });
        goto muiiokquumgiyaas;
        qqsiesyooukcuege:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\x74\137\x63\x6f\x6d\155\x65\x6e\x74", function ($aokagokqyuysuksm = null) {
            return ManipulateComment::get($aokagokqyuysuksm);
        });
        goto goiywqywgesicwsm;
        gueqcauquesmkqym:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\x74\x5f\143\x6f\x6d\x6d\x65\156\164\137\x6c\x69\156\153", function ($aqqmosqmsuueyaes = null, $ywmkwiwkosakssii = []) {
            return get_comment_link($aqqmosqmsuueyaes, $ywmkwiwkosakssii);
        });
        goto wwiiieggesogkwky;
        wwiiieggesogkwky:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\164\137\143\x6f\155\155\x65\x6e\164\137\164\x69\x6d\145", function ($saqmwwmqiwmkiwaa = '', $eqwyacwmcqusmwoq = false, $mcmaiqckgiuqayau = true) {
            return get_comment_time($saqmwwmqiwmkiwaa, $eqwyacwmcqusmwoq, $mcmaiqckgiuqayau);
        });
        goto moicgacciggecuie;
        esiuqyuiuagocqce:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\x74\x5f\143\157\x6d\x6d\145\x6e\164\163\x5f\x6e\165\x6d\142\145\162\x5f\164\145\170\x74", function ($ykmummwiwyeuawei, $uaggkeiqgiccaumk, $syieqkkqkeeuakku) {
            return get_comments_number_text($ykmummwiwyeuawei, $uaggkeiqgiccaumk, $syieqkkqkeeuakku);
        });
        goto syicggsyayqwywma;
        cymkyayecqkecsso:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\143\157\155\155\x65\x6e\x74\137\151\144\137\146\x69\145\x6c\x64\163", function ($aokagokqyuysuksm = 0) {
            return comment_id_fields($aokagokqyuysuksm);
        });
        goto gueqcauquesmkqym;
        muiiokquumgiyaas:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\x74\137\143\157\155\155\145\x6e\164\x5f\x61\165\x74\150\x6f\x72", function ($aqqmosqmsuueyaes = 0) {
            return ManipulateComment::mguqscccckuywsya($aqqmosqmsuueyaes);
        });
        goto esiuqyuiuagocqce;
        oosoeecugcecmoqu:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\145\x64\151\x74\137\143\157\x6d\155\145\x6e\164\x5f\x6c\151\x6e\153", function ($cmwygeyygwqaemaq = null, $caacssaumiqeaoaw = '', $miisqgccsqqcscia = '') {
            return edit_comment_link($cmwygeyygwqaemaq, $caacssaumiqeaoaw, $miisqgccsqqcscia);
        });
        goto kssaskooygaesyuq;
        ykmiqawqiommeyic:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x63\x6f\155\x6d\x65\156\x74\137\x63\x6c\141\163\x73", function ($cmkqisoeyioisqaw, $aqqmosqmsuueyaes) {
            return comment_class($cmkqisoeyioisqaw, $aqqmosqmsuueyaes);
        });
        goto esaoimegkqmoakoo;
        syicggsyayqwywma:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\x74\137\160\162\x65\x76\x69\x6f\165\x73\x5f\x63\x6f\155\x6d\x65\156\164\163\137\154\151\x6e\x6b", function ($pkyyagewkiyckmwy = '') {
            return get_previous_comments_link($pkyyagewkiyckmwy);
        });
        goto ykmiqawqiommeyic;
        esaoimegkqmoakoo:
    }
    public function mkukcsqosmkeeask()
    {
        goto yyicwymeasmimggy;
        oyoiceikawwqskai:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\167\160\x5f\x6c\157\x67\157\x75\164\137\x75\162\154", function ($gwqgmkqcgwwmweom = '') {
            return wp_logout_url($gwqgmkqcgwwmweom);
        });
        goto ekkswyasyksokemg;
        yyicwymeasmimggy:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x61\144\x6d\151\x6e\137\x75\x72\x6c", function ($mkomwsiykqigmqca, $aaceqemaqqeckueq = "\x61\144\155\151\156") {
            return admin_url($mkomwsiykqigmqca, $aaceqemaqqeckueq);
        });
        goto oyoiceikawwqskai;
        muoeugawocmikiua:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\143\165\162\x72\145\x6e\x74\x5f\165\x73\145\x72\137\143\x61\156", function ($gkswkiicccswksiq) {
            return current_user_can($gkswkiicccswksiq);
        });
        goto bgwomyaccmauskgm;
        ekkswyasyksokemg:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x77\x70\x5f\x6e\157\x6e\x63\x65\137\x66\x69\x65\x6c\x64", function ($aiamqeawckcsuaou, $ymqmyyeuycgmigyo, $emaumsqyoyqcimcm = true) {
            return wp_nonce_field($aiamqeawckcsuaou, $ymqmyyeuycgmigyo, $emaumsqyoyqcimcm, false);
        });
        goto mqsoccawiacgogca;
        mqsoccawiacgogca:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x73\x61\156\x69\x74\x69\x7a\145\137\x74\151\x74\x6c\x65", function ($cmwygeyygwqaemaq) {
            return sanitize_title($cmwygeyygwqaemaq);
        });
        goto muoeugawocmikiua;
        bgwomyaccmauskgm:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\163\137\165\163\x65\162\137\154\x6f\147\x67\x65\144\137\151\156", function () {
            return DecoratorUser::ksgkoukcicwkkaum();
        });
        goto cmsgsoqiskwwqywg;
        cmsgsoqiskwwqywg:
    }
    public function eeoeyakoiycwiuoa()
    {
        goto mkiiuusasqaucucm;
        cgcymuikeqwuqaks:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x69\x73\x5f\146\x72\157\x6e\164\137\x70\141\x67\x65", function () {
            return DecoratorQuery::takycgcamoacksqw();
        });
        goto ykaymqwyewgaouaw;
        ommomcekkekaceme:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x77\160\x5f\147\x65\x74\x5f\x61\x74\164\141\143\150\155\x65\156\164\137\x69\x6d\141\147\x65", function ($qssimkkaqkwceqqs, $oiegiwogmwmawkeo = "\x74\150\165\x6d\x62\x6e\x61\x69\x6c", $wisgiwskwawciiee = []) {
            return ManipulateAttachment::qaeeusqkgwagwaqc($qssimkkaqkwceqqs, $oiegiwogmwmawkeo, $wisgiwskwawciiee);
        });
        goto ugguwkkgqoyseuma;
        auguaocagomuuqqk:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\143\157\155\x6d\x65\156\x74\x73\x5f\x74\x65\155\x70\154\141\x74\x65", "\143\157\155\x6d\x65\156\164\163\137\164\x65\155\x70\x6c\141\x74\x65");
        goto mggqockcmokwiwuq;
        scoaiameyouasusa:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x77\160\x5f\146\x6f\x6f\164\145\162", "\167\160\x5f\146\x6f\157\x74\x65\162");
        goto qcykwgwoyuuqiicc;
        igygkagcaiiiumqo:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\145\144\151\164\x6f\162", function ($ewgwqamkygiqaawc, $bgyceomakyumggeu, $qeqooyuoiasweuck = []) {
            return wp_editor($ewgwqamkygiqaawc, $bgyceomakyumggeu, $qeqooyuoiasweuck);
        });
        goto qicikuqekgkawwqo;
        qicikuqekgkawwqo:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\164\137\x66\x6f\162\x6d\x61\x74\x5f\146\x72\x6f\x6d\137\x6d\151\155\145\x5f\164\x79\x70\145", function ($qiwqkoiamayyqase) {
            goto ymcqmgsqsggscmsi;
            wcowkmqskaouuqsm:
            $sqeykgyoooqysmca = "\x69\x6d\141\147\x65";
            goto gcmiayguaqqeiese;
            qawgegcsiawquqcm:
            if (strpos($qiwqkoiamayyqase, "\151\x6d\x61\147\x65") !== false) {
                goto uqimycsoiocokgyi;
            }
            goto geakuimqwgsiaask;
            ymcqmgsqsggscmsi:
            $sqeykgyoooqysmca = '';
            goto qawgegcsiawquqcm;
            ekeokeoweycsyqos:
            uqimycsoiocokgyi:
            goto wcowkmqskaouuqsm;
            goyyumqwuiywaimq:
            return $sqeykgyoooqysmca;
            goto oqycocwaiqmyaeow;
            aoqycegeggwwkwya:
            $sqeykgyoooqysmca = "\160\144\146";
            goto ukgsemksqoiukgoc;
            wkigieqkikmiqqgw:
            goto oggiokiewaqggaoc;
            goto ekeokeoweycsyqos;
            gcmiayguaqqeiese:
            oggiokiewaqggaoc:
            goto goyyumqwuiywaimq;
            geakuimqwgsiaask:
            if (!(strpos($qiwqkoiamayyqase, "\x70\144\x66") !== false)) {
                goto ocwqeygqmqgawqqy;
            }
            goto aoqycegeggwwkwya;
            ukgsemksqoiukgoc:
            ocwqeygqmqgawqqy:
            goto wkigieqkikmiqqgw;
            oqycocwaiqmyaeow:
        });
        goto ommomcekkekaceme;
        ygiycusyssyegauq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x74\x68\x65\x5f\167\x69\x64\x67\x65\164", function ($assameyusgwogmce, $owgumcsyqsamiemg = [], $ywmkwiwkosakssii = []) {
            DecoratorWidget::assameyusgwogmce($assameyusgwogmce, $owgumcsyqsamiemg, $ywmkwiwkosakssii);
        });
        goto qoceommegsyqswsi;
        wwwsqwyegoowkmik:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x61\x70\x70\154\171\x5f\146\151\x6c\164\x65\x72\x73", function ($scwiymciagumsuiw, ...$qookweymeqawmcwo) {
            return $this->sscegwueamckwmcy($scwiymciagumsuiw, ...$qookweymeqawmcwo);
        });
        goto igygkagcaiiiumqo;
        eeusamaykaysmgoq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\x74\x5f\x74\145\x72\x6d\137\x6c\x69\156\153", function ($iwewcwusemqaiggk, $kesssewsiegssiya = '') {
            return ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya);
        });
        goto wqgmqkugcksgscke;
        qmiugaqisqiwooio:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x74\150\145\x5f\x61\x75\x74\150\x6f\162\x5f\x6d\x65\164\141", function ($aiowsaccomcoikus, $mkucggyaiaukqoce = false) {
            return DecoratorAuthor::igawqaomowicuayw($aiowsaccomcoikus, ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce));
        });
        goto usgcuuuscucqesug;
        cgckkkoaumakemuc:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\x73\137\x61\x64\x6d\151\156", function () {
            return is_admin();
        });
        goto qiuouckkycciwuyo;
        mggqockcmokwiwuq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\144\x79\x6e\141\155\x69\x63\x5f\x73\x69\144\145\x62\x61\162", function ($momcykaoccoymeig) {
            DecoratorWidget::esuiacmywcmmsmao($momcykaoccoymeig);
        });
        goto egyksgscyqmieque;
        gsyagiygoyamakyu:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\141\x64\144\137\x74\150\151\143\x6b\142\x6f\x78", function () {
            add_thickbox();
        });
        goto ucgagqogckeuiewi;
        qcykwgwoyuuqiicc:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\142\157\x64\x79\137\x63\154\x61\x73\x73", "\x62\157\x64\171\x5f\x63\x6c\x61\163\x73");
        goto iwosowoeugcumagm;
        coegigeuyugiwuou:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\164\137\x74\145\162\155\137\x74\151\164\x6c\145", function ($iwewcwusemqaiggk) {
            return ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk);
        });
        goto ecikykuqgeaqamwk;
        qiuouckkycciwuyo:
        $this->sqmuqsscmimwqoki();
        goto gyuiwqyyauwqokmc;
        swowyqmmmawuumkq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x64\x6f\137\x6d\x65\x74\x61\x5f\142\157\170\x65\163", function ($gcgsqcoqciockquc, $mgkceomocowocqyo, $mksyucucyswaukig = null) {
            do_meta_boxes($gcgsqcoqciockquc, $mgkceomocowocqyo, $mksyucucyswaukig);
        });
        goto ygiycusyssyegauq;
        ugguwkkgqoyseuma:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\164\x5f\x61\166\x61\164\141\162", function ($mkucggyaiaukqoce, $oiegiwogmwmawkeo = 96, $ywmkwiwkosakssii = [], $gkykacccamuwowwc = '', $ggauoeuaesiymgee = '') {
            return ManipulateUser::ogcwgigqwycqswms($mkucggyaiaukqoce, $oiegiwogmwmawkeo, $ywmkwiwkosakssii, $gkykacccamuwowwc, $ggauoeuaesiymgee);
        });
        goto qmiugaqisqiwooio;
        egyksgscyqmieque:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\163\137\x61\143\164\x69\166\145\137\x73\x69\x64\x65\x62\141\x72", function ($momcykaoccoymeig) {
            return DecoratorWidget::ooksqgokuwcmoqcu($momcykaoccoymeig);
        });
        goto cgcymuikeqwuqaks;
        usgcuuuscucqesug:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\137\x61\165\164\150\x6f\x72\x5f\160\x6f\x73\164\163\137\x75\x72\x6c", function ($wwumyikyegkqweeo, $wsaeqskqmwoamkum = '') {
            return DecoratorAuthor::mkaiaewoyaimieqg($wwumyikyegkqweeo, $wsaeqskqmwoamkum);
        });
        goto omoayecymwmcysyw;
        qoceommegsyqswsi:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x69\x73\137\x70\x61\x67\145\144", function () {
            return DecoratorQuery::sgeaogakoscmysgc();
        });
        goto agukockguesiwmim;
        eusygaeoggqeuuki:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\x5f\x6f\160\x74\151\x6f\156", function ($omkysikckkcieckq, $ggauoeuaesiymgee = false) {
            return DecoratorOption::get($omkysikckkcieckq, $ggauoeuaesiymgee);
        });
        goto skqiqqeyqokasmeg;
        gyuiwqyyauwqokmc:
        $this->comment();
        goto oeqaiwecuckgoyky;
        gekkisqyegwkwcmg:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x73\165\x62\155\151\164\x5f\x62\x75\x74\x74\157\156", function () {
            return submit_button();
        });
        goto caicmucqkokaecsg;
        omoayecymwmcysyw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x77\x70\x5f\x64\162\157\160\x64\x6f\x77\156\x5f\x63\x61\164\145\147\157\x72\151\145\x73", function ($ywmkwiwkosakssii) {
            wp_dropdown_categories($ywmkwiwkosakssii);
        });
        goto weyegmawkwggekgi;
        weecgesamaiayuqo:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x64\157\137\141\x63\x74\x69\157\156", function ($aiamqeawckcsuaou, ...$qookweymeqawmcwo) {
            $this->cqscqicucmeamkyq($aiamqeawckcsuaou, ...$qookweymeqawmcwo);
        });
        goto eusygaeoggqeuuki;
        ykaymqwyewgaouaw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x5f\141\x64\x6d\x69\x6e\137\x73\x65\141\162\143\x68\x5f\x71\165\145\162\171", function () {
            _admin_search_query();
        });
        goto sceeeykswowqeqyi;
        weyegmawkwggekgi:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\164\x5f\x74\145\162\x6d", function ($post = null, $kesssewsiegssiya = '', $qqgsimqiqyaugceg = true) {
            return ManipulatePost::kckogqkiycqeumoa($post, $kesssewsiegssiya, $qqgsimqiqyaugceg);
        });
        goto eeusamaykaysmgoq;
        mcegmykimgwocisg:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x63\150\145\143\153\x65\x64", function ($gmeoaiyogiokeeau, $yeacayasgueouoqc = true) {
            goto ucewekmmuygqecqk;
            ycogsiaoceaiaosi:
            goto qyeiyecmaomycoks;
            goto kqeemeukmoukyeiw;
            asqimcomuseoqiue:
            qyeiyecmaomycoks:
            goto qkkocwikmsocekwq;
            kqeemeukmoukyeiw:
            iqmymqqskgsgsiku:
            goto quikiokiqwkqsqys;
            ucewekmmuygqecqk:
            if (!is_array($yeacayasgueouoqc)) {
                goto qcqyawqiwksyicok;
            }
            goto ayymceqgcuqkqkmo;
            qkkocwikmsocekwq:
            qcqyawqiwksyicok:
            goto oqikauiqoeuyoeyc;
            oqikauiqoeuyoeyc:
            return checked($gmeoaiyogiokeeau, $yeacayasgueouoqc, false);
            goto cseseucmsoywsecu;
            quikiokiqwkqsqys:
            $yeacayasgueouoqc = $gmeoaiyogiokeeau;
            goto asqimcomuseoqiue;
            ayymceqgcuqkqkmo:
            if (in_array($gmeoaiyogiokeeau, $yeacayasgueouoqc)) {
                goto iqmymqqskgsgsiku;
            }
            goto gkskumckoocyioge;
            gkskumckoocyioge:
            $yeacayasgueouoqc = null;
            goto ycogsiaoceaiaosi;
            cseseucmsoywsecu:
        });
        goto wwwsqwyegoowkmik;
        kcyaqgaosmmscquy:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\163\x65\x6c\x65\x63\x74\x65\144", function ($ymmmmaiuoocagigk, $yeacayasgueouoqc = true) {
            goto msqiamqqoiceauwy;
            eakgamsscsuususi:
            goto kascwigwmyyywwom;
            goto coskskmacukoewgo;
            qwyuoiycqcaaakcq:
            return selected($ymmmmaiuoocagigk, $yeacayasgueouoqc, false);
            goto ukswuuooigiykaso;
            msqiamqqoiceauwy:
            if (!is_array($yeacayasgueouoqc)) {
                goto soewwyoqiysyqsmm;
            }
            goto iawimoagycsccyqw;
            iawimoagycsccyqw:
            if (in_array($ymmmmaiuoocagigk, $yeacayasgueouoqc)) {
                goto aamogomsaksgcsig;
            }
            goto pmmcyycmwceweqck;
            coskskmacukoewgo:
            aamogomsaksgcsig:
            goto imuyoescowgckyyc;
            imuyoescowgckyyc:
            $yeacayasgueouoqc = $ymmmmaiuoocagigk;
            goto uiookuuakyqyuagw;
            yeqcqmakwyuoaayk:
            soewwyoqiysyqsmm:
            goto qwyuoiycqcaaakcq;
            pmmcyycmwceweqck:
            $yeacayasgueouoqc = null;
            goto eakgamsscsuususi;
            uiookuuakyqyuagw:
            kascwigwmyyywwom:
            goto yeqcqmakwyuoaayk;
            ukswuuooigiykaso:
        });
        goto mcegmykimgwocisg;
        uwsmweegoueoawau:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\x74\137\160\x6f\163\164\137\x74\x79\160\145\x5f\141\162\143\x68\151\166\145\x5f\x6c\x69\156\x6b", function ($useksmwkuswkwcqg) {
            return ManipulatePost::mqgeysameoesmuqw($useksmwkuswkwcqg);
        });
        goto uaysaomocomaomaw;
        agukockguesiwmim:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\x73\137\x74\141\x78", function ($kesssewsiegssiya = null) {
            return DecoratorTaxonomy::qmssqeyayicowkgy($kesssewsiegssiya);
        });
        goto iaawmomcqiokucac;
        auuqmasiciwyueek:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x68\141\163\137\x6e\141\x76\137\155\145\156\x75", "\x68\141\x73\x5f\156\141\166\x5f\x6d\145\x6e\165");
        goto ykeaeieyycoeqccm;
        mkiiuusasqaucucm:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x77\160\x5f\150\145\x61\144", "\x77\x70\137\150\145\x61\x64");
        goto scoaiameyouasusa;
        skqiqqeyqokasmeg:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\x74\x5f\160\141\x67\x65\137\x62\x79\x5f\160\141\x74\x68", function ($mkomwsiykqigmqca) {
            return ManipulatePage::ssacaeeassumyuws($mkomwsiykqigmqca);
        });
        goto cgckkkoaumakemuc;
        wqgmqkugcksgscke:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x74\x65\162\155\137\144\145\x73\143\162\151\x70\x74\151\x6f\x6e", function ($iwewcwusemqaiggk = 0) {
            return term_description($iwewcwusemqaiggk);
        });
        goto mgykqueoqmyucwky;
        uaysaomocomaomaw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x68\157\155\145\137\x75\x72\154", function ($mkomwsiykqigmqca = '', $aaqqkgyougeiueyq = null) {
            return ManipulateServer::gmigwwwmwemyaayy($mkomwsiykqigmqca, $aaqqkgyougeiueyq);
        });
        goto kcyaqgaosmmscquy;
        oeqaiwecuckgoyky:
        $this->mkukcsqosmkeeask();
        goto ywiwqkssuiiukwuk;
        ykeaeieyycoeqccm:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\x74\137\163\x65\141\162\x63\x68\x5f\x66\x6f\162\x6d", "\x67\x65\x74\x5f\x73\145\x61\162\143\150\137\x66\157\x72\x6d");
        goto auguaocagomuuqqk;
        ucgagqogckeuiewi:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\164\x5f\163\x65\141\x72\143\150\x5f\161\165\145\x72\x79", function ($sekkmwqwqwcayiwg = true) {
            return get_search_query($sekkmwqwqwcayiwg);
        });
        goto weecgesamaiayuqo;
        sceeeykswowqeqyi:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\163\x5f\x61\162\x63\150\151\x76\x65", function () {
            return DecoratorQuery::migkyseymeomymmy() || ManipulatePage::okiaumcqquyioqcy();
        });
        goto swowyqmmmawuumkq;
        iaawmomcqiokucac:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\142\154\157\147\151\x6e\x66\x6f", function ($ekcswiguywieeeoc) {
            return get_bloginfo($ekcswiguywieeeoc);
        });
        goto uwsmweegoueoawau;
        iwosowoeugcumagm:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x77\x70\137\x6e\x61\166\137\155\145\x6e\165", "\x77\x70\x5f\156\x61\166\137\155\x65\156\x75");
        goto auuqmasiciwyueek;
        ecikykuqgeaqamwk:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x5f\x5f", function ($cmwygeyygwqaemaq, $mokawwccycoiqeka = "\x64\145\146\141\x75\x6c\x74") {
            return __($cmwygeyygwqaemaq, $mokawwccycoiqeka);
        });
        goto gekkisqyegwkwcmg;
        caicmucqkokaecsg:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x64\157\137\x73\x65\164\164\151\156\x67\x73\x5f\x73\x65\x63\164\x69\157\x6e\163", function ($awcmekyiwwkeyisq) {
            return do_settings_sections($awcmekyiwwkeyisq);
        });
        goto gsyagiygoyamakyu;
        mgykqueoqmyucwky:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\x74\137\x74\145\162\x6d\x5f\143\150\151\x6c\x64\162\145\x6e", function ($iwewcwusemqaiggk, $ywmkwiwkosakssii = []) {
            return ManipulateTerm::mmoaikqueyiwcesm($iwewcwusemqaiggk, $ywmkwiwkosakssii);
        });
        goto coegigeuyugiwuou;
        ywiwqkssuiiukwuk:
    }
    public function iemaakgqgqosiecm()
    {
        goto imucwaggwqomwwki;
        yiuwiekcyyquyuak:
        $this->aqiicausqkomqkqy();
        goto sgmqeqeuscaaegqk;
        wuaokqmoyoikkkyu:
        $this->eeoeyakoiycwiuoa();
        goto sgguiaisyueoswkk;
        imucwaggwqomwwki:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x61\x64\x64\x5f\x74\x77\x69\x67\137\x66\165\x6e\143\164\151\157\x6e\163"), $this->yyyewgugioamwckw());
        goto yiuwiekcyyquyuak;
        sgmqeqeuscaaegqk:
        $this->render();
        goto wawmuaweemsioqms;
        wawmuaweemsioqms:
        $this->ugugagoguiycqeys();
        goto wuaokqmoyoikkkyu;
        sgguiaisyueoswkk:
    }
    
    public function ooqekmgsqomsakio($wkcwykowmmmwioqs)
    {
        goto kqsyesawkomqwaqy;
        ggyieuweamgwmwem:
        $wksoawcgagcgoask = self::mqucqomkmisceawy(str_replace(self::AT_SYMBOL, '', $yeacayasgueouoqc));
        goto wiiuaaemwsioueik;
        uoykoouwyqwskyqs:
        wymawskeqaagkwuo:
        goto umquossmsyaiciag;
        wiiuaaemwsioueik:
        if (!$wksoawcgagcgoask) {
            goto cmsgueemsueayawi;
        }
        goto cqkgaiiysokkuwsm;
        kgquoqwyggyuiggk:
        $wkcwykowmmmwioqs = ManipulateFile::cgwcgscqeqauaagi($wkcwykowmmmwioqs);
        goto kuyiowwueugqewic;
        uikweusiocekgoey:
        $yeacayasgueouoqc = ManipulateArray::get($uomewyckeuqoqocu, 0);
        goto ggyieuweamgwmwem;
        cqkgaiiysokkuwsm:
        $mumucmmgemqwqiia = wp_get_theme();
        goto swekyeqkosmecgsk;
        ueqmgcsqwciauqes:
        if (!$this->yyyewgugioamwckw()->exists($cqygeiuceemyuywc)) {
            goto mueeqqskseeiykwg;
        }
        goto wqyygmuggeegmuua;
        awqycuuoeeoioskq:
        mueeqqskseeiykwg:
        goto uoykoouwyqwskyqs;
        sgyickkqymqecksi:
        aqkukemyueoyscqi:
        goto aqiiysigquiqsgeg;
        gegweammscwsquwi:
        if (!is_string($ymqmyyeuycgmigyo)) {
            goto wymawskeqaagkwuo;
        }
        goto mmmcsikmcyocmgiw;
        ggooeiyqcockogcy:
        iumuosccokuokwiw:
        goto acuusyssiosuysmg;
        mmmcsikmcyocmgiw:
        $cqygeiuceemyuywc = ManipulateString::wiecmkiugmyyqiqc($yeacayasgueouoqc, "{$woqmauweeqyeyymc->aqkmwawoaaigkoyq()}\57{$wksoawcgagcgoask->gueasuouwqysmomu()}\57{$ymqmyyeuycgmigyo}", $wkcwykowmmmwioqs);
        goto ueqmgcsqwciauqes;
        yguemqosugisymku:
        if (!($yeacayasgueouoqc && $yeacayasgueouoqc !== $woqmauweeqyeyymc->aqkmwawoaaigkoyq())) {
            goto wmiakgoosqcoaeki;
        }
        goto osmmmeymmeueymog;
        ykemuogoaemeuaoy:
        if (!$woqmauweeqyeyymc) {
            goto iumuosccokuokwiw;
        }
        goto yguemqosugisymku;
        aqiiysigquiqsgeg:
        return $wkcwykowmmmwioqs;
        goto kiqaiwiwmeesaagy;
        kqsyesawkomqwaqy:
        if (!(!is_admin() || ManipulateAjax::mcgoysmkqsqooceq())) {
            goto aqkukemyueoyscqi;
        }
        goto kgquoqwyggyuiggk;
        swekyeqkosmecgsk:
        $woqmauweeqyeyymc = self::qmkyymgaecsmakqq("{$mumucmmgemqwqiia->get_theme_root()}\57{$mumucmmgemqwqiia->get_stylesheet()}");
        goto ykemuogoaemeuaoy;
        kuyiowwueugqewic:
        $uomewyckeuqoqocu = explode(DIRECTORY_SEPARATOR, $wkcwykowmmmwioqs);
        goto uikweusiocekgoey;
        osmmmeymmeueymog:
        $ymqmyyeuycgmigyo = ManipulateArray::get(explode("\x5f\137", $yeacayasgueouoqc), 2, $yeacayasgueouoqc);
        goto gegweammscwsquwi;
        umquossmsyaiciag:
        wmiakgoosqcoaeki:
        goto ggooeiyqcockogcy;
        acuusyssiosuysmg:
        cmsgueemsueayawi:
        goto sgyickkqymqecksi;
        wqyygmuggeegmuua:
        $wkcwykowmmmwioqs = $cqygeiuceemyuywc;
        goto awqycuuoeeoioskq;
        kiqaiwiwmeesaagy:
    }
    public function oeaigciskewsiiec($aiowsaccomcoikus = "\x6e\x61\155\145", $mkucggyaiaukqoce = null, $ywmkwiwkosakssii = [])
    {
        goto uukskyequmqsieuk;
        yemciswoecayuoga:
        eygwumawcmyaisee:
        goto mumegakqsumekgcs;
        iqcwoosugwmkmcas:
        if (!$mkucggyaiaukqoce) {
            goto sckwuwwueomkksag;
        }
        goto uaymiioykwgkmoeo;
        ckicaukcwwiukieg:
        $mkucggyaiaukqoce = ManipulatePost::mguqscccckuywsya($mkucggyaiaukqoce);
        goto ooeaciyoeskuouqi;
        eaqoyysesmoykmqa:
        if ($mkucggyaiaukqoce) {
            goto euosgyacescsiqgc;
        }
        goto ckicaukcwwiukieg;
        mumegakqsumekgcs:
        eickyskkcemimcqy:
        goto iqgqagswgiwgksco;
        eqkakgkyqqaewqiu:
        $icwicymcioeyeyek = null;
        goto iqcwoosugwmkmcas;
        uukskyequmqsieuk:
        $mkucggyaiaukqoce = ManipulateUser::get($mkucggyaiaukqoce, true);
        goto eaqoyysesmoykmqa;
        iqgqagswgiwgksco:
        sckwuwwueomkksag:
        goto swcmoacumikkuwma;
        uaymiioykwgkmoeo:
        switch ($aiowsaccomcoikus) {
            case "\x75\162\154":
                $icwicymcioeyeyek = DecoratorAuthor::mkaiaewoyaimieqg($mkucggyaiaukqoce);
                goto eickyskkcemimcqy;
            case "\x6e\x61\x6d\145":
                $icwicymcioeyeyek = ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce, "\144\151\163\160\x6c\x61\x79\x5f\x6e\141\x6d\145");
                goto eickyskkcemimcqy;
            case "\x61\x76\141\x74\141\x72":
                goto ikusickyaccgogwg;
                qqcciieyaqwkcasi:
                goto eickyskkcemimcqy;
                goto oyskccqkmomukcoi;
                ikusickyaccgogwg:
                $oiegiwogmwmawkeo = ManipulateArray::get($ywmkwiwkosakssii, "\163\x69\x7a\145", 64);
                goto icageksksqqgmqom;
                icageksksqqgmqom:
                $icwicymcioeyeyek = ManipulateUser::ogcwgigqwycqswms($mkucggyaiaukqoce, $oiegiwogmwmawkeo, $ywmkwiwkosakssii, __("\x55\163\x65\162\x20\x41\x76\141\x74\141\x72", PR__THM__PMPR));
                goto qqcciieyaqwkcasi;
                oyskccqkmomukcoi:
        }
        goto yemciswoecayuoga;
        ooeaciyoeskuouqi:
        euosgyacescsiqgc:
        goto eqkakgkyqqaewqiu;
        swcmoacumikkuwma:
        return $icwicymcioeyeyek;
        goto agugmwweyecagkue;
        agugmwweyecagkue:
    }
    
    public function yiyqecawioyosoaw($qqscaoyqikuyeoaw, $yeacayasgueouoqc = null, $ccamueccusigaaio = null, $cwwowqyuwccuykom = false)
    {
        goto wassuqquwikiawos;
        scowusmowqywueme:
        goto kaeuoeawkcwsycoe;
        goto hosygawmqsywcsuu;
        wgaqwowmmwgqcgio:
        $ekwsasieesaqcsiw .= "\164\167\x69\147";
        goto ycmmugqamooccaoe;
        qawsuswmossykiuo:
        $aqykuigiuwmmcieu = $this->ooqekmgsqomsakio($aqykuigiuwmmcieu);
        goto iqumoawsgyyywwsq;
        eewacyseykeqcsgi:
        $aqykuigiuwmmcieu = $qqscaoyqikuyeoaw;
        goto iekkoiwkmagacmui;
        aeeoymcoceusaems:
        if (!$aqykuigiuwmmcieu) {
            goto iyseosekyuousmcs;
        }
        goto ycqcgecgwiaioguy;
        qaioiokqgaomscqo:
        makewcmuowqeuqqo:
        goto iiqwwquosouwiqma;
        wqwogycsmygawouy:
        if ($qqscaoyqikuyeoaw !== "\151\x6e\x64\x65\170" && !$cwwowqyuwccuykom) {
            goto makewcmuowqeuqqo;
        }
        goto auiosgoysmeuswoi;
        oiiiwwmwokesyqwo:
        $yeacayasgueouoqc = $eyoesceegakeygsi->yyewsaiwmyggmumg();
        goto wcoywkwsguoyysay;
        ekkyqawesagkmqwi:
        yimaquocemaqgkew:
        goto souoecscwyauueko;
        uaqawigsyseeuymm:
        if (!$aqykuigiuwmmcieu) {
            goto quumaygcyqkgwyaq;
        }
        goto qawsuswmossykiuo;
        ykassqsuwccwksyg:
        $ymqmyyeuycgmigyo = substr($ymqmyyeuycgmigyo, 0, strpos($ymqmyyeuycgmigyo, $ekwsasieesaqcsiw));
        goto wsycuswmoucikqam;
        esyeigyikuqioumu:
        if (!($ymqmyyeuycgmigyo && !$aqykuigiuwmmcieu)) {
            goto yimaquocemaqgkew;
        }
        goto qwuqiimucosmgmei;
        comoagswmewckyoi:
        if (!preg_match("\57\134\56\133\60\55\71\141\x2d\172\135\53\44\57\x69", $qqscaoyqikuyeoaw)) {
            goto weiwkwaagqqcwkoq;
        }
        goto wgaqwowmmwgqcgio;
        egqeaugqciqqaais:
        sqmwqsayaqygocqo:
        goto qumgeeowggyeimes;
        souoecscwyauueko:
        yckakqcyqksckiwg:
        goto kaukomgswmysiuus;
        kaukomgswmysiuus:
        if (!(!$aqykuigiuwmmcieu || !$eyoesceegakeygsi->exists($aqykuigiuwmmcieu))) {
            goto owawwqcgcwwygkcy;
        }
        goto wqwogycsmygawouy;
        gguiykqamegqmqki:
        ocqcqsmmqaiiayis:
        goto igyukcioksgyuumo;
        mueuscommwusykqi:
        return $aqykuigiuwmmcieu;
        goto eiyiymqwqgyqcgkw;
        ugqqumgemgqkgowm:
        tguuykuocgscwigs:
        goto woeskwkwwgwgmowo;
        wsycuswmoucikqam:
        $aqykuigiuwmmcieu = preg_replace("\57\x28{$ymqmyyeuycgmigyo}\x28\x3f\41\56\x2a{$ymqmyyeuycgmigyo}\51\x29\57", $qqscaoyqikuyeoaw, $yeacayasgueouoqc);
        goto ekkyqawesagkmqwi;
        yuqwoywsqguaiooq:
        goto egkyuaemcsesciio;
        goto qaioiokqgaomscqo;
        woeskwkwwgwgmowo:
        $ymqmyyeuycgmigyo = basename($yeacayasgueouoqc);
        goto esyeigyikuqioumu;
        wcoywkwsguoyysay:
        eyyqgqyikeoiuusw:
        goto yweawggqmecqgaqe;
        igyukcioksgyuumo:
        foreach ($ccamueccusigaaio as $igqsaukqcqscimok) {
            goto icguisyymukwkoac;
            ioqaysioauoiookm:
            ccaecemqggkcesym:
            goto caeywemyokumoaki;
            icguisyymukwkoac:
            if (!($aqykuigiuwmmcieu = $this->yiyqecawioyosoaw($qqscaoyqikuyeoaw, $yeacayasgueouoqc, $igqsaukqcqscimok, true))) {
                goto ccaecemqggkcesym;
            }
            goto wwcyucesakwqmigu;
            caeywemyokumoaki:
            queqqoyiueiikgus:
            goto eeaeuuuiukckywcg;
            wwcyucesakwqmigu:
            goto sqmwqsayaqygocqo;
            goto ioqaysioauoiookm;
            eeaeuuuiukckywcg:
        }
        goto egqeaugqciqqaais;
        kegqauaaamqicscy:
        iyseosekyuousmcs:
        goto scowusmowqywueme;
        auiosgoysmeuswoi:
        $aqykuigiuwmmcieu = null;
        goto yuqwoywsqguaiooq;
        mgcieuiwescwqymy:
        if (is_array($ccamueccusigaaio)) {
            goto ocqcqsmmqaiiayis;
        }
        goto uyyomesiccsqemog;
        uwqqmumicaygiukc:
        if ($yeacayasgueouoqc) {
            goto eyyqgqyikeoiuusw;
        }
        goto oiiiwwmwokesyqwo;
        ycmmugqamooccaoe:
        weiwkwaagqqcwkoq:
        goto ykassqsuwccwksyg;
        qgqckcyimogeucws:
        egkyuaemcsesciio:
        goto wyqumeogqqakouyw;
        hosygawmqsywcsuu:
        kmqyoeosqckuaqsi:
        goto eewacyseykeqcsgi;
        cecwiqciigmgyoem:
        if ($eyoesceegakeygsi->exists($qqscaoyqikuyeoaw)) {
            goto kmqyoeosqckuaqsi;
        }
        goto uwqqmumicaygiukc;
        qumgeeowggyeimes:
        saugoksiwmswowqy:
        goto ugqqumgemgqkgowm;
        uyyomesiccsqemog:
        $qqscaoyqikuyeoaw = untrailingslashit($qqscaoyqikuyeoaw) . "\x2f{$ccamueccusigaaio}";
        goto ekswgqyowkoaksqi;
        ekswgqyowkoaksqi:
        goto saugoksiwmswowqy;
        goto gguiykqamegqmqki;
        mmukumekuuysequy:
        $eyoesceegakeygsi = $this->yyyewgugioamwckw();
        goto cecwiqciigmgyoem;
        yweawggqmecqgaqe:
        $yeacayasgueouoqc = str_replace("\57\x2f", "\x2f", $yeacayasgueouoqc);
        goto mwomsussaikumyme;
        wyqumeogqqakouyw:
        owawwqcgcwwygkcy:
        goto aeeoymcoceusaems;
        iqumoawsgyyywwsq:
        quumaygcyqkgwyaq:
        goto mueuscommwusykqi;
        qwuqiimucosmgmei:
        $ekwsasieesaqcsiw = "\56";
        goto comoagswmewckyoi;
        myskascmmkymmmgm:
        if (!$ccamueccusigaaio) {
            goto tguuykuocgscwigs;
        }
        goto mgcieuiwescwqymy;
        iekkoiwkmagacmui:
        kaeuoeawkcwsycoe:
        goto uaqawigsyseeuymm;
        iiqwwquosouwiqma:
        $aqykuigiuwmmcieu = $this->yiyqecawioyosoaw("\x69\x6e\x64\145\170", $aqykuigiuwmmcieu);
        goto qgqckcyimogeucws;
        mwomsussaikumyme:
        if (!$yeacayasgueouoqc) {
            goto yckakqcyqksckiwg;
        }
        goto myskascmmkymmmgm;
        ycqcgecgwiaioguy:
        $aqykuigiuwmmcieu = $this->sscegwueamckwmcy("\164\150\x65\155\145\137\164\145\x6d\x70\154\x61\x74\x65\137\162\x65\161\x75\151\162\145\x6d\x65\156\164\x73", $aqykuigiuwmmcieu);
        goto kegqauaaamqicscy;
        wassuqquwikiawos:
        $aqykuigiuwmmcieu = null;
        goto mmukumekuuysequy;
        eiyiymqwqgyqcgkw:
    }
}
