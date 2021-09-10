<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Woocommerce;

use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Group;
use Pmpr\Common\Foundation\FormMaker\Front\MultiStepForm;
use Pmpr\Common\Foundation\FormMaker\Front\Step;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface;
use WC_Product;
use WC_Product_Simple;
use WC_Product_Variable;

abstract class MultiStepSingleProduct extends Common
{
    const NEXT_STEP_BUTTON = "\156\145\x78\x74\137\163\164\x65\x70\x5f\x62\165\x74\x74\157\x6e";
    const PRODUCT_SINGLE_STEPS = "\160\162\157\x64\165\143\x74\137\163\151\x6e\x67\154\x65\x5f\x73\x74\x65\x70\163";
    
    protected array $steps = [];
    
    protected ?int $product = null;
    
    protected ?MultiStepForm $form = null;
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\151\156\x69\164", [$this, "\151\x6e\151\x74"])->qcsmikeggeemccuu("\x77\160", [$this, "\145\x6b\147\145\145\x63\157\141\x63\x77\155\163\165\143\x69\145"])->qcsmikeggeemccuu("\167\x6f\x6f\143\157\155\x6d\x65\x72\x63\145\137\163\151\156\x67\154\x65\x5f\x70\x72\x6f\144\165\143\164\137\x73\165\x6d\155\x61\x72\171", [$this, "\x69\x69\x77\151\151\171\153\163\x65\x61\x75\x71\x71\x63\171\161"], 9)->qcsmikeggeemccuu("\x77\157\157\143\x6f\155\x6d\x65\x72\143\145\137\163\151\156\147\154\145\x5f\160\x72\x6f\x64\x75\x63\x74\137\x73\x75\155\155\x61\162\171", [$this, "\151\163\163\161\145\167\x65\x73\147\145\x63\145\x71\147\161\153"], 501);
        parent::wigskegsqequoeks();
    }
    public function ekgeecoacwmsucie()
    {
        goto oykmqmogcwumacqq;
        icmgwewmusucsooy:
        $asuggasaseaacmqu = ManipulatePost::igawqaomowicuayw(self::PRODUCT_SINGLE_STEPS, $this->aqasygcsqysmmyke());
        goto myyuyqequamqekoc;
        myyuyqequamqekoc:
        if (!($asuggasaseaacmqu && is_array($asuggasaseaacmqu))) {
            goto aiqskweckwoegquq;
        }
        goto swcqqiyagauaogiy;
        psqooaaoocusoyag:
        faeciyigcmyieesm:
        goto mseiksmausoaqecy;
        swcqqiyagauaogiy:
        foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) {
            goto eyiigmyweugmgckw;
            eyiigmyweugmgckw:
            if (!(ManipulateArray::get($wyeyeaaekyoyimqu, self::TITLE) && ManipulateArray::get($wyeyeaaekyoyimqu, self::TEMPLATE))) {
                goto qguqeweisuimgyqk;
            }
            goto mgkgeuqasqcaimou;
            syycscyugcgsquwm:
            qguqeweisuimgyqk:
            goto wcsicmaoskwcaqou;
            mgkgeuqasqcaimou:
            $this->mgqggiyywoageqmo($wyeyeaaekyoyimqu);
            goto syycscyugcgsquwm;
            wcsicmaoskwcaqou:
            qakcamuiqmiscugu:
            goto qmgwqgkuucwysswc;
            qmgwqgkuucwysswc:
        }
        goto psqooaaoocusoyag;
        oykmqmogcwumacqq:
        if (!$this->cyeywmmccyoumgku()) {
            goto acyuamggaiuqmsoa;
        }
        goto icmgwewmusucsooy;
        mmyckscscsmqsqwo:
        aiqskweckwoegquq:
        goto aaoueeomccwsoycq;
        aaoueeomccwsoycq:
        acyuamggaiuqmsoa:
        goto wggkwquawceyksmk;
        mseiksmausoaqecy:
        $this->enqueue();
        goto mmyckscscsmqsqwo;
        wggkwquawceyksmk:
    }
    public function init()
    {
        goto gciymsqoaosekywi;
        caawoosasoogaiwa:
        MetaBox::cgygmuguceeosoey(self::PRODUCT_SINGLE_STEPS . "\x5f\x66\157\162\x6d", __("\x41\144\144\40\124\157\x20\x43\x61\162\164\40\x53\164\x65\160\x73", PR__CMN__FOUNDATION), true)->ewweaossowcqywaw($this->qegwqkeqkmgeyouk())->mgieiwsmcswmmiim(self::PRODUCT)->maosyyqsuygkawma()->saemoowcasogykak(IconFontawesomeInterface::ICON_FORWARD_STEP);
        goto ikqqueokumaakwmk;
        ikqqueokumaakwmk:
        ggscugaoyeccwaoq:
        goto ikuyuccwmwasokmy;
        gciymsqoaosekywi:
        if (!$this->oiomuqiuyskqewke()) {
            goto ggscugaoyeccwaoq;
        }
        goto caawoosasoogaiwa;
        ikuyuccwmwasokmy:
    }
    
    public function yyoqecggyacaseko() : ?MultiStepForm
    {
        goto aiegomwmomwugkaa;
        ycwkcyukyieusyce:
        $this->form = $eaoumsseceiowgsk;
        goto ywskqocaomieoeuo;
        yqysoqweammswcea:
        return $this->form;
        goto oesieyemekcikmuo;
        aiegomwmomwugkaa:
        if ($this->form) {
            goto gmwcswqmcyogosia;
        }
        goto oysgkcoiouaikyys;
        oysgkcoiouaikyys:
        $eaoumsseceiowgsk = new MultiStepForm(ManipulateString::uniqid(5));
        goto gikmiimsmmugmewi;
        ywskqocaomieoeuo:
        gmwcswqmcyogosia:
        goto yqysoqweammswcea;
        gikmiimsmmugmewi:
        $eaoumsseceiowgsk->iiqoooqcakkaeyiw();
        goto ycwkcyukyieusyce;
        oesieyemekcikmuo:
    }
    
    public function aqasygcsqysmmyke() : ?int
    {
        return $this->product;
    }
    
    public function yiagkoqoiemmqssu() : ?WC_Product
    {
        return ManipulateWoocommerce::aqasygcsqysmmyke($this->aqasygcsqysmmyke());
    }
    public function iiwiiykseauqqcyq()
    {
        goto ymygyumokgcugqco;
        ymygyumokgcugqco:
        if (!$this->cyeywmmccyoumgku()) {
            goto okcicyakakceigwe;
        }
        goto cukkwcqimawsesga;
        cukkwcqimawsesga:
        ob_start();
        goto cumkyeqakeicycqy;
        cumkyeqakeicycqy:
        okcicyakakceigwe:
        goto smecgcsaskaiyqwg;
        smecgcsaskaiyqwg:
    }
    public function issqewesgeceqgqk()
    {
        goto yeyuwakqagwqqmuc;
        yeyuwakqagwqqmuc:
        if (!$this->cyeywmmccyoumgku()) {
            goto iwcqqisaagoyaoyq;
        }
        goto ouakugqyqismmmwq;
        ouakugqyqismmmwq:
        ob_clean();
        goto eseyuoaaskemwycm;
        eseyuoaaskemwycm:
        $this->esoeigiuggwycwiq();
        goto akccmuykyisokmqm;
        akccmuykyisokmqm:
        if (!$this->yyoqecggyacaseko()->wmoeeiseqeecugmu()) {
            goto kwqqookuogugoeoc;
        }
        goto qmeuekyqssiomcyy;
        eaeowkksqokeigsq:
        iwcqqisaagoyaoyq:
        goto qcmiieemioisoyyi;
        eyimcucoicmimiao:
        kwqqookuogugoeoc:
        goto eaeowkksqokeigsq;
        qmeuekyqssiomcyy:
        $this->yyoqecggyacaseko()->render(["\145\x63\150\157" => true]);
        goto eyimcucoicmimiao;
        qcmiieemioisoyyi:
    }
    
    public function oiomuqiuyskqewke() : bool
    {
        $ccamueccusigaaio = $this->aqasygcsqysmmyke();
        return $ccamueccusigaaio && is_admin() && (ManipulateServer::get("\x61\x63\164\151\157\156") == "\x65\144\x69\x74" && ManipulateServer::get(self::POST) == $ccamueccusigaaio || ManipulateServer::ayueggmoqeeukqmq("\141\x63\164\151\x6f\x6e") == "\x65\144\x69\x74\160\x6f\163\164");
    }
    
    public function syguimaaeugakesm() : Group
    {
        return MetaBox::iseogkiymousogom(self::PRODUCT_SINGLE_STEPS, __("\x53\164\x65\x70", PR__CMN__FOUNDATION))->mkksewyosgeumwsa(MetaBox::wcwmusaouiqaqeww(self::ENABLE, __("\x45\156\x61\142\154\145", PR__CMN__FOUNDATION)))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::TITLE, __("\124\151\x74\154\x65", PR__CMN__FOUNDATION)))->mkksewyosgeumwsa(MetaBox::uouyygwcgsmygaee(self::DESCRIPTION, __("\x44\145\163\x63\x72\x69\160\164\151\x6f\x6e", PR__CMN__FOUNDATION))->qsecygiycssgacqs(3))->mkksewyosgeumwsa(MetaBox::scgissgkcwaumgky(self::ICON))->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::TEMPLATE, __("\x54\145\x6d\160\154\141\x74\x65", PR__CMN__FOUNDATION), $this->swocoigyikkommyq()))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::NEXT_STEP_BUTTON, __("\x4e\145\x78\164\x20\x53\x74\145\x70\x20\x42\165\164\x74\x6f\156\x20\x54\151\164\154\x65", PR__CMN__FOUNDATION))->eyygsasuqmommkua(__("\x4e\145\170\164\x20\x53\x74\x65\160", PR__CMN__FOUNDATION)))->usosgsaaimqcysyk()->awaeegwoiqoisoam([self::TEMPLATE]);
    }
    
    public function cyeywmmccyoumgku() : bool
    {
        goto swuomeuwkcgwekss;
        owqiausosmeaugay:
        mkskmcusskkouyyi:
        goto kqueakeekumokwoe;
        ccwwqiosmasqqqwu:
        if (!DecoratorQuery::cukiusasccucgwqc(self::PRODUCT)) {
            goto mkskmcusskkouyyi;
        }
        goto scmkeeaewmeqguac;
        swuomeuwkcgwekss:
        $ksaameoqigiaoigg = false;
        goto ccwwqiosmasqqqwu;
        qqeiuucaguymmsws:
        $ksaameoqigiaoigg = $ccamueccusigaaio && ManipulatePost::mwikyscisascoeea() === $ccamueccusigaaio;
        goto owqiausosmeaugay;
        scmkeeaewmeqguac:
        $ccamueccusigaaio = $this->aqasygcsqysmmyke();
        goto qqeiuucaguymmsws;
        kqueakeekumokwoe:
        return $ksaameoqigiaoigg;
        goto okgweyikqgcceggq;
        okgweyikqgcceggq:
    }
    
    public function qegwqkeqkmgeyouk() : array
    {
        return [$this->syguimaaeugakesm()];
    }
    
    public function wmoeeiseqeecugmu() : bool
    {
        return !empty($this->guiyusikssumecwk());
    }
    
    public function mgqggiyywoageqmo($wyeyeaaekyoyimqu) : self
    {
        $this->steps[] = $wyeyeaaekyoyimqu;
        return $this;
    }
    
    public function guiyusikssumecwk() : array
    {
        return $this->steps;
    }
    
    public function maoomkygegkowemi(array $asuggasaseaacmqu) : self
    {
        goto kquqieqqiieakmoa;
        usakoyequcyysywo:
        csisksagguuywuia:
        goto kwmgoowcwggsyokw;
        kwmgoowcwggsyokw:
        return $this;
        goto okamgiuocakyggwo;
        kquqieqqiieakmoa:
        foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) {
            $this->mgqggiyywoageqmo($wyeyeaaekyoyimqu);
            ycucsikocgkiesgi:
        }
        goto usakoyequcyysywo;
        okamgiuocakyggwo:
    }
    public function esoeigiuggwycwiq()
    {
        goto mweoqymwyuimuakm;
        kuwecmygikeyisuq:
        gcywqkqkwkcmoawo:
        goto augwgqgcukgkywiw;
        swwmkisacmieqiae:
        if (!$asuggasaseaacmqu) {
            goto iuikeaqqcukamyqm;
        }
        goto imqeimsscmwgasys;
        augwgqgcukgkywiw:
        iuikeaqqcukamyqm:
        goto kmkoiwuimosekikq;
        mweoqymwyuimuakm:
        $asuggasaseaacmqu = $this->guiyusikssumecwk();
        goto swwmkisacmieqiae;
        imqeimsscmwgasys:
        foreach ($asuggasaseaacmqu as $momcykaoccoymeig => $wyeyeaaekyoyimqu) {
            goto kyaiywcwwmeqwyaw;
            sskkiisoqmmsocic:
            if (!$mkemseqwyqgsgsek) {
                goto gmoykcyssieuqueu;
            }
            goto siuuokwymeygcosy;
            ceyygoicaeoqwwio:
            $this->yyoqecggyacaseko()->mgqggiyywoageqmo($oyoqqgcsgigcmqqu);
            goto eyaesumwwwgisaym;
            miyggyguyamiggcm:
            $oyoqqgcsgigcmqqu = new Step($momcykaoccoymeig + 1);
            goto gwucakcwqkiiqyyg;
            siuuokwymeygcosy:
            $oyoqqgcsgigcmqqu->gwwmcykumqueaosa($mkemseqwyqgsgsek);
            goto icksskeigsiugace;
            icksskeigsiugace:
            gmoykcyssieuqueu:
            goto ceyygoicaeoqwwio;
            kyaiywcwwmeqwyaw:
            $qqswgiawgeaeoecu = ManipulateArray::gucyquqwoimkiiaq($wyeyeaaekyoyimqu, [self::ENABLE, self::TITLE, self::ICON, self::DESCRIPTION, self::TEMPLATE, self::NEXT_STEP_BUTTON]);
            goto maswyugssquqqggq;
            eyaesumwwwgisaym:
            iywiyewymemgqacq:
            goto swuquosuguoomaeq;
            mcyamakgwewogwqi:
            $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $this->rsysgcucogueguuk($qqscaoyqikuyeoaw));
            goto aqamaqggiseeioqq;
            aqamaqggiseeioqq:
            $oyoqqgcsgigcmqqu->saemoowcasogykak($wkaqekwwgqsqwcoi)->gswweykyogmsyawy($meqocwsecsywiiqs)->oguessuismosauuu($mkqqqewsokcswckc . $ewgwqamkygiqaawc)->gucwmccyimoagwcm($mkqqqewsokcswckc);
            goto sskkiisoqmmsocic;
            swuquosuguoomaeq:
            cmcwskwgaiauugws:
            goto occaiwsgmaykoqey;
            maswyugssquqqggq:
            [$oqkgomucoyswikgk, $meqocwsecsywiiqs, $wkaqekwwgqsqwcoi, $mkqqqewsokcswckc, $qqscaoyqikuyeoaw, $mkemseqwyqgsgsek] = array_values($qqswgiawgeaeoecu);
            goto egcycueumoemiuai;
            gwucakcwqkiiqyyg:
            $mkqqqewsokcswckc = ManipulateHTML::uuccukgasskgimsq("\160", ["\143\x6c\x61\x73\163" => "\x66\x6f\x6e\x74\55\167\x65\151\x67\x68\164\x2d\x62\157\154\144\x20\146\x6f\x6e\164\55\61\67\x20\164\145\x78\164\x2d\x6d\165\164\x65\144"], $mkqqqewsokcswckc);
            goto mcyamakgwewogwqi;
            egcycueumoemiuai:
            if (!($oqkgomucoyswikgk && $meqocwsecsywiiqs && $qqscaoyqikuyeoaw)) {
                goto iywiyewymemgqacq;
            }
            goto miyggyguyamiggcm;
            occaiwsgmaykoqey:
        }
        goto kuwecmygikeyisuq;
        kmkoiwuimosekikq:
    }
    public function enqueue()
    {
        $this->yyoqecggyacaseko()->enqueue();
    }
    
    public function rsysgcucogueguuk($qqscaoyqikuyeoaw) : array
    {
        return [];
    }
    
    public abstract function swocoigyikkommyq() : array;
}
