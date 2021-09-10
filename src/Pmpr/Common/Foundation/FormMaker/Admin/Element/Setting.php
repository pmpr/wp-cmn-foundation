<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Element;

use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\FormMaker\Admin\MetaTab;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;

class Setting extends Page
{
    
    protected array $defaults = [];
    
    public function __construct()
    {
        goto oigimmkyumckwick;
        ggumyqmosmckemum:
        $this->parentMenu = "\157\x70\164\151\x6f\x6e\163\x2d\x67\145\x6e\x65\162\x61\x6c\56\160\150\x70";
        goto tgousgyiiaiaeack;
        kuiqawwoeaeuemcy:
        parent::__construct();
        goto uoiawymwqmyiiosk;
        imqgamcocykmuweu:
        if ($this->cgugaaoykcyiomuk()) {
            goto woociiywkukyomca;
        }
        goto ggumyqmosmckemum;
        oigimmkyumckwick:
        $this->type = "\163\x65\x74\164\151\x6e\147\x73";
        goto imqgamcocykmuweu;
        tgousgyiiaiaeack:
        woociiywkukyomca:
        goto kuiqawwoeaeuemcy;
        uoiawymwqmyiiosk:
    }
    
    public function cosqcmekuiigqywc(MetaTab $uqcooyiiyysckskk) : MetaTab
    {
        $uqcooyiiyysckskk->kkigeuaeguyueaem('')->ceiqwucmgawwmawo(__("\x53\x61\166\x65\x20\103\x68\141\x6e\x67\145\x73", PR__CMN__FOUNDATION));
        return parent::cosqcmekuiigqywc($uqcooyiiyysckskk);
    }
    
    public function mwikyscisascoeea() : ?string
    {
        goto qoueskwwsaywasai;
        yuuokwoimsawcwwq:
        $aokagokqyuysuksm = "{$this->aakmagwggmkoiiyu()}\137{$this->gueasuouwqysmomu()}";
        goto euamqcukmwkycmcs;
        euamqcukmwkycmcs:
        wcsiocqmcgkyueoc:
        goto ssqmoeeuysgacwme;
        msmmwgagckyuccii:
        if ($aokagokqyuysuksm) {
            goto wcsiocqmcgkyueoc;
        }
        goto yuuokwoimsawcwwq;
        qoueskwwsaywasai:
        $aokagokqyuysuksm = parent::mwikyscisascoeea();
        goto msmmwgagckyuccii;
        ssqmoeeuysgacwme:
        return $aokagokqyuysuksm;
        goto yckwoyawyoyskqea;
        yckwoyawyoyskqea:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\165\x70\144\141\164\x65\137\157\160\x74\151\x6f\156\137{$this->cisyiemkeykgkomc()}", [$this, "\x6f\x63\161\141\161\x73\167\x6f\145\171\x73\143\165\157\x61\x6f"])->qcsmikeggeemccuu("\x75\160\144\x61\x74\145\137\157\160\164\151\157\x6e\137{$this->cisyiemkeykgkomc()}", [$this, "\x73\143\155\x6d\171\155\161\153\157\x79\143\153\x67\153\141\x6d"], 10, 2)->qcsmikeggeemccuu("\x75\x70\x64\141\x74\145\x5f\x73\x65\x74\x74\151\156\x67\137{$this->cisyiemkeykgkomc()}", [$this, "\x65\151\141\141\143\145\x67\x6b\x69\147\x71\151\x77\141\167\147"], 10, 2);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\147\x65\x74\x5f{$this->cisyiemkeykgkomc()}", [$this, "\155\171\x77\x77\171\x65\x67\153\x75\171\155\157\x6f\x6b\145\x67"], 10, 2)->cecaguuoecmccuse("\147\145\x74\137{$this->aakmagwggmkoiiyu()}\137\163\x65\164\164\x69\x6e\147", [$this, "\145\151\x77\143\x75\x71\151\x67\141\x79\151\x67\x69\x6d\141\x6b"], 10, 2)->cecaguuoecmccuse("\160\x72\145\137\x75\160\144\x61\164\145\x5f\157\160\x74\x69\x6f\x6e\137{$this->cisyiemkeykgkomc()}", [$this, "\143\x69\141\147\143\x6f\151\171\x65\x69\157\141\x67\x67\163\157"], 50, 3)->cecaguuoecmccuse("\143\x6d\x62\x32\137\x6f\166\145\x72\x72\151\x64\145\x5f\x6f\x70\164\151\x6f\156\137\147\145\164\x5f{$this->cisyiemkeykgkomc()}", [$this, "\155\155\x65\x71\x73\165\x61\161\x61\143\167\165\157\147\171\x61"], 2, 1);
        parent::kgquecmsgcouyaya();
    }
    
    public function gecwckciuqqukcko() : array
    {
        return $this->defaults;
    }
    
    public function syuyisqgcskmaymc($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        $this->defaults[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        return $eqgoocgaqwqcimie;
    }
    private function wascmggskiyiaogs()
    {
        goto ywmqqmgacioekiim;
        uqscqwswiqsgsygk:
        if (!($ggauoeuaesiymgee && !self::mywwyegkuymookeg())) {
            goto ygcicamkgawkwygs;
        }
        goto smusacowuccegeqc;
        kummicswwkwwkyys:
        ygcicamkgawkwygs:
        goto wwkqmuawuugoiwey;
        smusacowuccegeqc:
        
        $uusmaiomayssaecw = $this->cisyiemkeykgkomc();
        goto qkouugqimqywiiag;
        qkouugqimqywiiag:
        $ggauoeuaesiymgee = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x64\145\x66\x61\x75\154\164\x5f\x73\x65\x74\x74\151\156\147\x73", false), $ggauoeuaesiymgee, $this->cisyiemkeykgkomc());
        goto qsgikaecsueeawcg;
        qsgikaecsueeawcg:
        if (!($ggauoeuaesiymgee && is_array($ggauoeuaesiymgee))) {
            goto aokwwkysaawymggq;
        }
        goto wgqaaiuiaegacqug;
        kiuemcsmyusiamwy:
        aokwwkysaawymggq:
        goto kummicswwkwwkyys;
        wgqaaiuiaegacqug:
        DecoratorOption::add($uusmaiomayssaecw, $ggauoeuaesiymgee);
        goto kiuemcsmyusiamwy;
        ywmqqmgacioekiim:
        $ggauoeuaesiymgee = $this->gecwckciuqqukcko();
        goto uqscqwswiqsgsygk;
        wwkqmuawuugoiwey:
    }
    
    public function ciagcoiyeioaggso($eqgoocgaqwqcimie, $msqkueqksqwmskak, $omkysikckkcieckq)
    {
        goto qougaquyiyoekgme;
        ywamicmegakyokoq:
        $eqgoocgaqwqcimie = $this->sscegwueamckwmcy("\142\145\146\x6f\162\145\137\165\x70\x64\141\x74\145\x5f{$this->cisyiemkeykgkomc()}", $eqgoocgaqwqcimie, $msqkueqksqwmskak);
        goto koeamciygeeqewcy;
        koeamciygeeqewcy:
        aoeqqmeqcaeksamm:
        goto mukioeqsayqwycgu;
        mukioeqsayqwycgu:
        return $eqgoocgaqwqcimie;
        goto wiuiqmkuuuscscoi;
        akgccuiekaowwmeq:
        $eqgoocgaqwqcimie = $this->iasywwkguyauiywu($eqgoocgaqwqcimie, $msqkueqksqwmskak);
        goto ywamicmegakyokoq;
        qougaquyiyoekgme:
        if (!($eqgoocgaqwqcimie !== $msqkueqksqwmskak && maybe_serialize($eqgoocgaqwqcimie) !== maybe_serialize($msqkueqksqwmskak))) {
            goto aoeqqmeqcaeksamm;
        }
        goto akgccuiekaowwmeq;
        wiuiqmkuuuscscoi:
    }
    
    public function iasywwkguyauiywu($eqgoocgaqwqcimie, $msqkueqksqwmskak)
    {
        return $eqgoocgaqwqcimie;
    }
    
    public function scmmymqkoyckgkam($msqkueqksqwmskak, $uwomkgseoiegeume)
    {
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\163\141\x76\x65\144", false), $msqkueqksqwmskak, $uwomkgseoiegeume);
    }
    public function ocqaqswoeyscuoao()
    {
        goto keguueuuiqyowgge;
        emqaiyugeiukyqiw:
        $this->kcciqwskewsuaemk()->remove($skacuygeqykiwiwy);
        goto gkqycsqguoaycowm;
        iggmoakswausicmq:
        if (!($skacuygeqykiwiwy = ManipulateSetting::cmaecekuqkwmemms(self::PR__CACHE__PATH))) {
            goto cyiukscucygcyiow;
        }
        goto emqaiyugeiukyqiw;
        keguueuuiqyowgge:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x62\145\146\157\162\145\137\162\145\155\x6f\x76\145\137\x63\x61\143\150\x65\x5f\160\141\x74\150"));
        goto iggmoakswausicmq;
        myigiaaggwcoyqmo:
        cyiukscucygcyiow:
        goto ciaocyoemcwmgays;
        gkqycsqguoaycowm:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x61\146\x74\145\x72\137\x72\x65\155\157\166\145\137\x63\141\x63\x68\145\x5f\160\x61\x74\x68"));
        goto myigiaaggwcoyqmo;
        ciaocyoemcwmgays:
    }
    
    public static function mywwyegkuymookeg()
    {
        goto makqoouaaoyeckwu;
        aeoskcqgogoeieqq:
        return $ksaameoqigiaoigg;
        goto mqomgaeswiquiasi;
        kkwciycuekqewqak:
        if ($usymaaaeawgmyqig !== false) {
            goto kaaosukiekmqcuas;
        }
        goto ywqgaoiyisukooog;
        yuakcmiumkmoseoy:
        goto oakqwukqiowuwgse;
        goto amicgsowmwecywga;
        kcgsqowasqeuaoyo:
        $ksaameoqigiaoigg = $usymaaaeawgmyqig;
        goto scywagkqaaqkqyuq;
        scywagkqaaqkqyuq:
        oakqwukqiowuwgse:
        goto aeoskcqgogoeieqq;
        makqoouaaoyeckwu:
        $eiockasigaaayoem = self::symcgieuakksimmu()->cisyiemkeykgkomc();
        goto wciqgiyuqauosqsm;
        uicakiyqmsqkkeiq:
        wp_cache_set($eiockasigaaayoem, $ksaameoqigiaoigg);
        goto yuakcmiumkmoseoy;
        amicgsowmwecywga:
        kaaosukiekmqcuas:
        goto kcgsqowasqeuaoyo;
        ywqgaoiyisukooog:
        
        $ksaameoqigiaoigg = DecoratorOption::get($eiockasigaaayoem);
        goto uicakiyqmsqkkeiq;
        wciqgiyuqauosqsm:
        $usymaaaeawgmyqig = wp_cache_get($eiockasigaaayoem);
        goto kkwciycuekqewqak;
        mqomgaeswiquiasi:
    }
    
    public static function eiaacegkigqiwawg($uusmaiomayssaecw, $eqgoocgaqwqcimie, $qeqooyuoiasweuck = null)
    {
        goto macwgscmecoymagu;
        tiqqwmquwowcwsko:
        oumgmywcokuyaaky:
        goto oyiakwoikeckycqe;
        uuowysiecmaqiskc:
        $qeqooyuoiasweuck = self::mywwyegkuymookeg();
        goto tiqqwmquwowcwsko;
        oyiakwoikeckycqe:
        $qeqooyuoiasweuck[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        goto uyomoigikmsymiku;
        uyomoigikmsymiku:
        self::oqyuwccsuskiwgew($qeqooyuoiasweuck);
        goto ykcsckmiswouwaim;
        macwgscmecoymagu:
        if ($qeqooyuoiasweuck) {
            goto oumgmywcokuyaaky;
        }
        goto uuowysiecmaqiskc;
        ykcsckmiswouwaim:
        return $eqgoocgaqwqcimie;
        goto umsiwskkkuuqygqe;
        umsiwskkkuuqygqe:
    }
    
    public static function oqyuwccsuskiwgew($qeqooyuoiasweuck = null)
    {
        goto ycgoekuqouciwkom;
        ycgoekuqouciwkom:
        $uusmaiomayssaecw = self::symcgieuakksimmu()->cisyiemkeykgkomc();
        goto qowqygggoieokiiw;
        qowqygggoieokiiw:
        DecoratorOption::update($uusmaiomayssaecw, $qeqooyuoiasweuck);
        goto qsyssqesmcoyuewk;
        qsyssqesmcoyuewk:
        wp_cache_delete($uusmaiomayssaecw);
        goto myyyikoweqcgoucw;
        myyyikoweqcgoucw:
    }
    
    public static function myekoowckeqqeuyq($amakmumgguksgmum, $eqgoocgaqwqcimie, $qeqooyuoiasweuck = null) : bool
    {
        goto qmyeykyyqksyekuo;
        cgkoamymiwyauswk:
        wp_cache_delete($uusmaiomayssaecw);
        goto awsgaesauouewgmi;
        uaikkeuicmuuwccc:
        $uusmaiomayssaecw = self::symcgieuakksimmu()->cisyiemkeykgkomc();
        goto cgkoamymiwyauswk;
        camycossgaakcsiw:
        $qeqooyuoiasweuck[$amakmumgguksgmum] = $eqgoocgaqwqcimie;
        goto uaikkeuicmuuwccc;
        cewyikqkeycuswys:
        $qeqooyuoiasweuck = [];
        goto qmkooikkcycouowk;
        qgqgsigokaomqkqe:
        if ($qeqooyuoiasweuck) {
            goto aauewmowygwgwusw;
        }
        goto cewyikqkeycuswys;
        awsgaesauouewgmi:
        return DecoratorOption::update($uusmaiomayssaecw, $qeqooyuoiasweuck);
        goto owooskgowayymosm;
        quimoymcisyaqaug:
        yqewkyqauqqcyoyy:
        goto qgqgsigokaomqkqe;
        qmyeykyyqksyekuo:
        if ($qeqooyuoiasweuck) {
            goto yqewkyqauqqcyoyy;
        }
        goto kkkoguowckoiqywi;
        kkkoguowckoiqywi:
        $qeqooyuoiasweuck = self::mywwyegkuymookeg();
        goto quimoymcisyaqaug;
        qmkooikkcycouowk:
        aauewmowygwgwusw:
        goto camycossgaakcsiw;
        owooskgowayymosm:
    }
    
    public static function yceqggqwokesouww($uusmaiomayssaecw, $eqgoocgaqwqcimie, $qeqooyuoiasweuck = null)
    {
        goto uyiqkeoaoeesewkm;
        uyiqkeoaoeesewkm:
        $amakmumgguksgmum = self::eiwcuqigayigimak($uusmaiomayssaecw, null, $qeqooyuoiasweuck);
        goto qekoeuskqquikiqa;
        oucegyaesucoaqcs:
        self::myekoowckeqqeuyq($uusmaiomayssaecw, $eqgoocgaqwqcimie);
        goto nsqquyqqqiceasgu;
        sewqywuuoqaqgake:
        $amakmumgguksgmum = $eqgoocgaqwqcimie;
        goto oucegyaesucoaqcs;
        nsqquyqqqiceasgu:
        omcwcawuuiowsyiy:
        goto eooqoiuqayocqmqi;
        qekoeuskqquikiqa:
        if ($amakmumgguksgmum) {
            goto omcwcawuuiowsyiy;
        }
        goto sewqywuuoqaqgake;
        eooqoiuqayocqmqi:
        return $amakmumgguksgmum;
        goto gqmaowmomwymiiec;
        gqmaowmomwymiiec:
    }
    
    public static function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = false, $qeqooyuoiasweuck = null)
    {
        goto ocuoiqskoseeoski;
        ugyeckwkgkiyiwqm:
        if (is_string($uusmaiomayssaecw)) {
            goto yimkweiuueksywey;
        }
        goto oykemeioosgeaqek;
        caqyccimywimqwgw:
        $eqgoocgaqwqcimie = $eqgoocgaqwqcimie === "\x6f\156" ? true : $eqgoocgaqwqcimie;
        goto ssammmsycciagimy;
        goicgikimugciika:
        if (isset($qeqooyuoiasweuck[$uusmaiomayssaecw])) {
            goto oekmmkgkgsuawkis;
        }
        goto qcyamgiikmwuwsyu;
        soqckwiemegiyosg:
        gqsemgkumwsooguq:
        goto ugyyuyequeekycsm;
        ssammmsycciagimy:
        auuoqiusumqggosg:
        goto soqckwiemegiyosg;
        qqiomqmmgsgygyes:
        yimkweiuueksywey:
        goto goicgikimugciika;
        smisquuawsuaggqc:
        oekmmkgkgsuawkis:
        goto aymokcegeqgeuqai;
        wuaysaycmsuciagi:
        kywsgoqgqmmmmucg:
        goto ugyeckwkgkiyiwqm;
        ugyyuyequeekycsm:
        return $eqgoocgaqwqcimie;
        goto cgwqkgmqqyaqaeos;
        aymokcegeqgeuqai:
        $eqgoocgaqwqcimie = $qeqooyuoiasweuck[$uusmaiomayssaecw];
        goto caqyccimywimqwgw;
        ocuoiqskoseeoski:
        if ($qeqooyuoiasweuck) {
            goto kywsgoqgqmmmmucg;
        }
        goto osskoqmmegqyksau;
        wsgseaeaeuemmick:
        goto auuoqiusumqggosg;
        goto smisquuawsuaggqc;
        qcyamgiikmwuwsyu:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto wsgseaeaeuemmick;
        ewyywyaciesugmeu:
        goto gqsemgkumwsooguq;
        goto qqiomqmmgsgygyes;
        osskoqmmegqyksau:
        $qeqooyuoiasweuck = self::mywwyegkuymookeg();
        goto wuaysaycmsuciagi;
        oykemeioosgeaqek:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto ewyywyaciesugmeu;
        cgwqkgmqqyaqaeos:
    }
    
    public static function wcoqgwyekgsmiueo(array $qiouiwasaauyaaue, string $ymqmyyeuycgmigyo, int $gaeqamemwmwsyukm = 1) : array
    {
        goto ackussqqoyomekeg;
        cmmckyaaioecwuse:
        if (!($qiouiwasaauyaaue && is_array($qiouiwasaauyaaue) && $isksgswsmmqgeqmo && is_array($isksgswsmmqgeqmo))) {
            goto gkmimeqyqisqsosw;
        }
        goto ayqcwceyiiosgcka;
        wywkeewykggksckc:
        return $qiouiwasaauyaaue;
        goto yiksaemwukcmqoks;
        iyekaawoaqcqsssa:
        gkmimeqyqisqsosw:
        goto wywkeewykggksckc;
        ayqcwceyiiosgcka:
        foreach ($isksgswsmmqgeqmo as $momcykaoccoymeig => $omkysikckkcieckq) {
            goto uqgkoksouqicqiiy;
            emoiiiemgaasikyg:
            $uusmaiomayssaecw = ManipulateArray::get($omkysikckkcieckq, self::KEY);
            goto kqkmsuoqweqqoiiq;
            yguaqcewwsageswq:
            qiockgemuekykiuy:
            goto igwsysyakwoosysi;
            umcgmioomggsuigo:
            goto iucqiqsagamegsmc;
            goto secykwwqaoeuywim;
            igwsysyakwoosysi:
            iucqiqsagamegsmc:
            goto eeimuiikicqykmwa;
            secykwwqaoeuywim:
            sweymqcmesceysqo:
            goto emoiiiemgaasikyg;
            kqkmsuoqweqqoiiq:
            if ($uusmaiomayssaecw) {
                goto qiockgemuekykiuy;
            }
            goto uimggymiocacgyky;
            esyaossmykieskyg:
            if (count($omkysikckkcieckq) >= $gaeqamemwmwsyukm) {
                goto sweymqcmesceysqo;
            }
            goto cwcsikiqeagwcocm;
            cwcsikiqeagwcocm:
            unset($qiouiwasaauyaaue[$ymqmyyeuycgmigyo][$momcykaoccoymeig]);
            goto umcgmioomggsuigo;
            uimggymiocacgyky:
            $qiouiwasaauyaaue[$ymqmyyeuycgmigyo][$momcykaoccoymeig][self::KEY] = ManipulateString::uniqid();
            goto yguaqcewwsageswq;
            eeimuiikicqykmwa:
            qwacmyuwycyqmwkq:
            goto ogooawuumwuweeos;
            uqgkoksouqicqiiy:
            $omkysikckkcieckq = array_filter($omkysikckkcieckq);
            goto esyaossmykieskyg;
            ogooawuumwuweeos:
        }
        goto oeuquoqswksgymuw;
        ackussqqoyomekeg:
        $isksgswsmmqgeqmo = ManipulateArray::get($qiouiwasaauyaaue, $ymqmyyeuycgmigyo, []);
        goto cmmckyaaioecwuse;
        oeuquoqswksgymuw:
        amaeeaeauswgoqic:
        goto iyekaawoaqcqsssa;
        yiksaemwukcmqoks:
    }
    
    public function mmeqsuaqacwuogya($gcaqwmmqioouwccc)
    {
        return $gcaqwmmqioouwccc;
    }
    
    public function gcmaamyeggyiugae() : bool
    {
        $uqcooyiiyysckskk = $this->aeqcqgsamsqomowm();
        return $uqcooyiiyysckskk && $uqcooyiiyysckskk->imyagkswqcsocsoi();
    }
    
    public function eaiyegoagkgeowae() : bool
    {
        goto cscoykmeocmcwkkc;
        cwigquaouceygaas:
        if (!$uqcooyiiyysckskk) {
            goto wekseqwmumkkcsoc;
        }
        goto gykiuseauawoywsy;
        gykiuseauawoywsy:
        return $uqcooyiiyysckskk->csaueuycewaiuaay();
        goto gaagiucqcsoauoye;
        cmcmwummuiemewaw:
        return $this->cisyiemkeykgkomc() === ManipulateServer::get("\160\141\147\145");
        goto meqocakwgoyugmso;
        cscoykmeocmcwkkc:
        $uqcooyiiyysckskk = $this->aeqcqgsamsqomowm();
        goto cwigquaouceygaas;
        gaagiucqcsoauoye:
        wekseqwmumkkcsoc:
        goto cmcmwummuiemewaw;
        meqocakwgoyugmso:
    }
}
