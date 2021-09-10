<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
    const NEXT_STEP_BUTTON = "\156\145\x78\164\x5f\163\x74\145\x70\137\142\165\x74\x74\x6f\156";
    const PRODUCT_SINGLE_STEPS = "\160\x72\157\144\x75\143\x74\x5f\x73\x69\156\x67\x6c\x65\137\163\x74\145\160\163";
    
    protected array $steps = [];
    
    protected ?int $product = null;
    
    protected ?MultiStepForm $form = null;
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\151\x6e\x69\x74", [$this, "\x69\x6e\x69\x74"])->qcsmikeggeemccuu("\x77\x70", [$this, "\x65\x6b\x67\145\145\x63\x6f\x61\x63\x77\155\x73\165\143\x69\145"])->qcsmikeggeemccuu("\167\x6f\157\x63\157\x6d\155\x65\162\143\x65\x5f\163\x69\156\x67\154\145\x5f\160\162\157\144\x75\x63\164\x5f\163\x75\x6d\x6d\141\x72\171", [$this, "\151\x69\x77\151\x69\171\x6b\x73\145\141\165\161\161\x63\x79\x71"], 9)->qcsmikeggeemccuu("\167\x6f\x6f\x63\157\x6d\x6d\145\x72\143\145\x5f\163\151\x6e\147\x6c\145\137\160\162\x6f\x64\165\x63\x74\x5f\x73\165\155\155\141\162\171", [$this, "\151\x73\x73\x71\x65\167\145\163\147\x65\x63\145\161\x67\161\153"], 501);
        parent::wigskegsqequoeks();
    }
    public function ekgeecoacwmsucie()
    {
        goto oykmqmogcwumacqq;
        oykmqmogcwumacqq:
        if (!$this->cyeywmmccyoumgku()) {
            goto acyuamggaiuqmsoa;
        }
        goto icmgwewmusucsooy;
        myyuyqequamqekoc:
        if (!($asuggasaseaacmqu && is_array($asuggasaseaacmqu))) {
            goto aiqskweckwoegquq;
        }
        goto swcqqiyagauaogiy;
        mmyckscscsmqsqwo:
        aiqskweckwoegquq:
        goto aaoueeomccwsoycq;
        psqooaaoocusoyag:
        faeciyigcmyieesm:
        goto mseiksmausoaqecy;
        icmgwewmusucsooy:
        $asuggasaseaacmqu = ManipulatePost::igawqaomowicuayw(self::PRODUCT_SINGLE_STEPS, $this->aqasygcsqysmmyke());
        goto myyuyqequamqekoc;
        mseiksmausoaqecy:
        $this->enqueue();
        goto mmyckscscsmqsqwo;
        aaoueeomccwsoycq:
        acyuamggaiuqmsoa:
        goto wggkwquawceyksmk;
        swcqqiyagauaogiy:
        foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) {
            goto eyiigmyweugmgckw;
            syycscyugcgsquwm:
            qguqeweisuimgyqk:
            goto wcsicmaoskwcaqou;
            eyiigmyweugmgckw:
            if (!(ManipulateArray::get($wyeyeaaekyoyimqu, self::TITLE) && ManipulateArray::get($wyeyeaaekyoyimqu, self::TEMPLATE))) {
                goto qguqeweisuimgyqk;
            }
            goto mgkgeuqasqcaimou;
            wcsicmaoskwcaqou:
            qakcamuiqmiscugu:
            goto qmgwqgkuucwysswc;
            mgkgeuqasqcaimou:
            $this->mgqggiyywoageqmo($wyeyeaaekyoyimqu);
            goto syycscyugcgsquwm;
            qmgwqgkuucwysswc:
        }
        goto psqooaaoocusoyag;
        wggkwquawceyksmk:
    }
    public function init()
    {
        goto gciymsqoaosekywi;
        ikqqueokumaakwmk:
        ggscugaoyeccwaoq:
        goto ikuyuccwmwasokmy;
        caawoosasoogaiwa:
        MetaBox::cgygmuguceeosoey(self::PRODUCT_SINGLE_STEPS . "\137\x66\157\x72\x6d", __("\101\x64\x64\x20\124\157\40\x43\x61\162\x74\40\123\164\x65\x70\163", PR__CMN__FOUNDATION), true)->ewweaossowcqywaw($this->qegwqkeqkmgeyouk())->mgieiwsmcswmmiim(self::PRODUCT)->maosyyqsuygkawma()->saemoowcasogykak(IconFontawesomeInterface::ICON_FORWARD_STEP);
        goto ikqqueokumaakwmk;
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
        oysgkcoiouaikyys:
        $eaoumsseceiowgsk = new MultiStepForm(ManipulateString::uniqid(5));
        goto gikmiimsmmugmewi;
        ycwkcyukyieusyce:
        $this->form = $eaoumsseceiowgsk;
        goto ywskqocaomieoeuo;
        gikmiimsmmugmewi:
        $eaoumsseceiowgsk->iiqoooqcakkaeyiw();
        goto ycwkcyukyieusyce;
        yqysoqweammswcea:
        return $this->form;
        goto oesieyemekcikmuo;
        ywskqocaomieoeuo:
        gmwcswqmcyogosia:
        goto yqysoqweammswcea;
        aiegomwmomwugkaa:
        if ($this->form) {
            goto gmwcswqmcyogosia;
        }
        goto oysgkcoiouaikyys;
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
        cumkyeqakeicycqy:
        okcicyakakceigwe:
        goto smecgcsaskaiyqwg;
        cukkwcqimawsesga:
        ob_start();
        goto cumkyeqakeicycqy;
        smecgcsaskaiyqwg:
    }
    public function issqewesgeceqgqk()
    {
        goto yeyuwakqagwqqmuc;
        eaeowkksqokeigsq:
        iwcqqisaagoyaoyq:
        goto qcmiieemioisoyyi;
        eyimcucoicmimiao:
        kwqqookuogugoeoc:
        goto eaeowkksqokeigsq;
        eseyuoaaskemwycm:
        $this->esoeigiuggwycwiq();
        goto akccmuykyisokmqm;
        akccmuykyisokmqm:
        if (!$this->yyoqecggyacaseko()->wmoeeiseqeecugmu()) {
            goto kwqqookuogugoeoc;
        }
        goto qmeuekyqssiomcyy;
        ouakugqyqismmmwq:
        ob_clean();
        goto eseyuoaaskemwycm;
        qmeuekyqssiomcyy:
        $this->yyoqecggyacaseko()->render(["\145\143\x68\x6f" => true]);
        goto eyimcucoicmimiao;
        yeyuwakqagwqqmuc:
        if (!$this->cyeywmmccyoumgku()) {
            goto iwcqqisaagoyaoyq;
        }
        goto ouakugqyqismmmwq;
        qcmiieemioisoyyi:
    }
    
    public function oiomuqiuyskqewke() : bool
    {
        $ccamueccusigaaio = $this->aqasygcsqysmmyke();
        return $ccamueccusigaaio && is_admin() && (ManipulateServer::get("\141\x63\164\x69\157\156") == "\145\x64\151\x74" && ManipulateServer::get(self::POST) == $ccamueccusigaaio || ManipulateServer::ayueggmoqeeukqmq("\x61\x63\164\x69\x6f\x6e") == "\145\144\x69\x74\160\157\x73\x74");
    }
    
    public function syguimaaeugakesm() : Group
    {
        return MetaBox::iseogkiymousogom(self::PRODUCT_SINGLE_STEPS, __("\123\164\145\x70", PR__CMN__FOUNDATION))->mkksewyosgeumwsa(MetaBox::wcwmusaouiqaqeww(self::ENABLE, __("\105\156\141\x62\x6c\145", PR__CMN__FOUNDATION)))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::TITLE, __("\x54\151\x74\154\x65", PR__CMN__FOUNDATION)))->mkksewyosgeumwsa(MetaBox::uouyygwcgsmygaee(self::DESCRIPTION, __("\104\145\163\x63\162\151\x70\164\x69\157\x6e", PR__CMN__FOUNDATION))->qsecygiycssgacqs(3))->mkksewyosgeumwsa(MetaBox::scgissgkcwaumgky(self::ICON))->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::TEMPLATE, __("\x54\x65\x6d\x70\154\141\164\145", PR__CMN__FOUNDATION), $this->swocoigyikkommyq()))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::NEXT_STEP_BUTTON, __("\116\x65\x78\x74\x20\123\x74\x65\160\x20\102\165\164\x74\157\x6e\x20\x54\x69\x74\154\x65", PR__CMN__FOUNDATION))->eyygsasuqmommkua(__("\116\x65\x78\164\x20\x53\164\145\x70", PR__CMN__FOUNDATION)))->usosgsaaimqcysyk()->awaeegwoiqoisoam([self::TEMPLATE]);
    }
    
    public function cyeywmmccyoumgku() : bool
    {
        goto swuomeuwkcgwekss;
        scmkeeaewmeqguac:
        $ccamueccusigaaio = $this->aqasygcsqysmmyke();
        goto qqeiuucaguymmsws;
        kqueakeekumokwoe:
        return $ksaameoqigiaoigg;
        goto okgweyikqgcceggq;
        qqeiuucaguymmsws:
        $ksaameoqigiaoigg = $ccamueccusigaaio && ManipulatePost::mwikyscisascoeea() === $ccamueccusigaaio;
        goto owqiausosmeaugay;
        swuomeuwkcgwekss:
        $ksaameoqigiaoigg = false;
        goto ccwwqiosmasqqqwu;
        owqiausosmeaugay:
        mkskmcusskkouyyi:
        goto kqueakeekumokwoe;
        ccwwqiosmasqqqwu:
        if (!DecoratorQuery::cukiusasccucgwqc(self::PRODUCT)) {
            goto mkskmcusskkouyyi;
        }
        goto scmkeeaewmeqguac;
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
        kquqieqqiieakmoa:
        foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) {
            $this->mgqggiyywoageqmo($wyeyeaaekyoyimqu);
            ycucsikocgkiesgi:
        }
        goto usakoyequcyysywo;
        kwmgoowcwggsyokw:
        return $this;
        goto okamgiuocakyggwo;
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
        mweoqymwyuimuakm:
        $asuggasaseaacmqu = $this->guiyusikssumecwk();
        goto swwmkisacmieqiae;
        augwgqgcukgkywiw:
        iuikeaqqcukamyqm:
        goto kmkoiwuimosekikq;
        imqeimsscmwgasys:
        foreach ($asuggasaseaacmqu as $momcykaoccoymeig => $wyeyeaaekyoyimqu) {
            goto kyaiywcwwmeqwyaw;
            kyaiywcwwmeqwyaw:
            $qqswgiawgeaeoecu = ManipulateArray::gucyquqwoimkiiaq($wyeyeaaekyoyimqu, [self::ENABLE, self::TITLE, self::ICON, self::DESCRIPTION, self::TEMPLATE, self::NEXT_STEP_BUTTON]);
            goto maswyugssquqqggq;
            icksskeigsiugace:
            gmoykcyssieuqueu:
            goto ceyygoicaeoqwwio;
            ceyygoicaeoqwwio:
            $this->yyoqecggyacaseko()->mgqggiyywoageqmo($oyoqqgcsgigcmqqu);
            goto eyaesumwwwgisaym;
            maswyugssquqqggq:
            [$oqkgomucoyswikgk, $meqocwsecsywiiqs, $wkaqekwwgqsqwcoi, $mkqqqewsokcswckc, $qqscaoyqikuyeoaw, $mkemseqwyqgsgsek] = array_values($qqswgiawgeaeoecu);
            goto egcycueumoemiuai;
            sskkiisoqmmsocic:
            if (!$mkemseqwyqgsgsek) {
                goto gmoykcyssieuqueu;
            }
            goto siuuokwymeygcosy;
            mcyamakgwewogwqi:
            $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $this->rsysgcucogueguuk($qqscaoyqikuyeoaw));
            goto aqamaqggiseeioqq;
            siuuokwymeygcosy:
            $oyoqqgcsgigcmqqu->gwwmcykumqueaosa($mkemseqwyqgsgsek);
            goto icksskeigsiugace;
            eyaesumwwwgisaym:
            iywiyewymemgqacq:
            goto swuquosuguoomaeq;
            miyggyguyamiggcm:
            $oyoqqgcsgigcmqqu = new Step($momcykaoccoymeig + 1);
            goto gwucakcwqkiiqyyg;
            gwucakcwqkiiqyyg:
            $mkqqqewsokcswckc = ManipulateHTML::uuccukgasskgimsq("\160", ["\x63\154\x61\x73\x73" => "\x66\x6f\156\164\55\167\x65\x69\147\150\x74\x2d\x62\x6f\154\x64\x20\x66\x6f\x6e\164\x2d\x31\x37\x20\x74\x65\170\x74\x2d\155\165\164\145\x64"], $mkqqqewsokcswckc);
            goto mcyamakgwewogwqi;
            egcycueumoemiuai:
            if (!($oqkgomucoyswikgk && $meqocwsecsywiiqs && $qqscaoyqikuyeoaw)) {
                goto iywiyewymemgqacq;
            }
            goto miyggyguyamiggcm;
            swuquosuguoomaeq:
            cmcwskwgaiauugws:
            goto occaiwsgmaykoqey;
            aqamaqggiseeioqq:
            $oyoqqgcsgigcmqqu->saemoowcasogykak($wkaqekwwgqsqwcoi)->gswweykyogmsyawy($meqocwsecsywiiqs)->oguessuismosauuu($mkqqqewsokcswckc . $ewgwqamkygiqaawc)->gucwmccyimoagwcm($mkqqqewsokcswckc);
            goto sskkiisoqmmsocic;
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
