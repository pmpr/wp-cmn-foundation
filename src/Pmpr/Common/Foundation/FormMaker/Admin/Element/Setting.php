<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        goto woociiywkukyomca;
        imqgamcocykmuweu:
        $this->parentMenu = "\157\x70\164\151\157\x6e\x73\55\147\145\156\x65\x72\141\154\56\x70\150\160";
        goto ggumyqmosmckemum;
        tgousgyiiaiaeack:
        parent::__construct();
        goto kuiqawwoeaeuemcy;
        woociiywkukyomca:
        $this->type = "\x73\x65\x74\x74\x69\156\x67\x73";
        goto oigimmkyumckwick;
        oigimmkyumckwick:
        if ($this->cgugaaoykcyiomuk()) {
            goto yqciowyyaucoysgy;
        }
        goto imqgamcocykmuweu;
        ggumyqmosmckemum:
        yqciowyyaucoysgy:
        goto tgousgyiiaiaeack;
        kuiqawwoeaeuemcy:
    }
    
    public function cosqcmekuiigqywc(MetaTab $uqcooyiiyysckskk) : MetaTab
    {
        $uqcooyiiyysckskk->kkigeuaeguyueaem('')->ceiqwucmgawwmawo(__("\x53\141\166\x65\40\x43\x68\141\156\x67\145\x73", PR__CMN__FOUNDATION));
        return parent::cosqcmekuiigqywc($uqcooyiiyysckskk);
    }
    
    public function mwikyscisascoeea() : ?string
    {
        goto wcsiocqmcgkyueoc;
        msmmwgagckyuccii:
        $aokagokqyuysuksm = "{$this->aakmagwggmkoiiyu()}\137{$this->gueasuouwqysmomu()}";
        goto yuuokwoimsawcwwq;
        euamqcukmwkycmcs:
        return $aokagokqyuysuksm;
        goto ssqmoeeuysgacwme;
        yuuokwoimsawcwwq:
        uoiawymwqmyiiosk:
        goto euamqcukmwkycmcs;
        qoueskwwsaywasai:
        if ($aokagokqyuysuksm) {
            goto uoiawymwqmyiiosk;
        }
        goto msmmwgagckyuccii;
        wcsiocqmcgkyueoc:
        $aokagokqyuysuksm = parent::mwikyscisascoeea();
        goto qoueskwwsaywasai;
        ssqmoeeuysgacwme:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\165\x70\x64\x61\164\x65\137\x6f\160\x74\151\157\x6e\137{$this->cisyiemkeykgkomc()}", [$this, "\157\143\161\x61\x71\163\x77\x6f\x65\171\x73\x63\x75\157\x61\157"])->qcsmikeggeemccuu("\x75\x70\x64\x61\x74\x65\137\157\160\x74\x69\x6f\156\137{$this->cisyiemkeykgkomc()}", [$this, "\163\143\155\155\171\x6d\x71\153\157\171\143\153\x67\153\141\155"], 10, 2)->qcsmikeggeemccuu("\x75\160\x64\x61\x74\145\x5f\163\145\x74\x74\x69\x6e\x67\x5f{$this->cisyiemkeykgkomc()}", [$this, "\x65\x69\141\141\x63\x65\x67\x6b\151\147\x71\151\167\x61\x77\x67"], 10, 2);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x67\x65\164\137{$this->cisyiemkeykgkomc()}", [$this, "\155\x79\167\x77\171\145\x67\x6b\x75\171\155\x6f\157\x6b\x65\147"], 10, 2)->cecaguuoecmccuse("\x67\145\x74\137{$this->aakmagwggmkoiiyu()}\137\x73\x65\164\x74\151\156\x67", [$this, "\x65\151\x77\x63\x75\x71\151\147\141\171\151\147\151\x6d\141\153"], 10, 2)->cecaguuoecmccuse("\x70\x72\x65\x5f\165\160\x64\x61\164\x65\x5f\x6f\160\164\151\157\x6e\x5f{$this->cisyiemkeykgkomc()}", [$this, "\x63\151\x61\147\143\x6f\151\171\x65\x69\157\141\147\x67\x73\157"], 50, 3)->cecaguuoecmccuse("\143\x6d\x62\62\x5f\157\166\x65\162\x72\x69\144\x65\137\x6f\160\164\151\157\156\x5f\x67\145\164\137{$this->cisyiemkeykgkomc()}", [$this, "\155\155\x65\x71\x73\165\x61\161\x61\x63\167\x75\x6f\147\171\x61"], 2, 1);
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
        goto ygcicamkgawkwygs;
        qsgikaecsueeawcg:
        DecoratorOption::add($uusmaiomayssaecw, $ggauoeuaesiymgee);
        goto wgqaaiuiaegacqug;
        smusacowuccegeqc:
        $ggauoeuaesiymgee = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x64\x65\146\141\x75\154\164\x5f\x73\145\164\164\x69\x6e\x67\x73", false), $ggauoeuaesiymgee, $this->cisyiemkeykgkomc());
        goto qkouugqimqywiiag;
        kiuemcsmyusiamwy:
        aokwwkysaawymggq:
        goto kummicswwkwwkyys;
        wgqaaiuiaegacqug:
        yckwoyawyoyskqea:
        goto kiuemcsmyusiamwy;
        uqscqwswiqsgsygk:
        
        $uusmaiomayssaecw = $this->cisyiemkeykgkomc();
        goto smusacowuccegeqc;
        qkouugqimqywiiag:
        if (!($ggauoeuaesiymgee && is_array($ggauoeuaesiymgee))) {
            goto yckwoyawyoyskqea;
        }
        goto qsgikaecsueeawcg;
        ygcicamkgawkwygs:
        $ggauoeuaesiymgee = $this->gecwckciuqqukcko();
        goto ywmqqmgacioekiim;
        ywmqqmgacioekiim:
        if (!($ggauoeuaesiymgee && !self::mywwyegkuymookeg())) {
            goto aokwwkysaawymggq;
        }
        goto uqscqwswiqsgsygk;
        kummicswwkwwkyys:
    }
    
    public function ciagcoiyeioaggso($eqgoocgaqwqcimie, $msqkueqksqwmskak, $omkysikckkcieckq)
    {
        goto aoeqqmeqcaeksamm;
        koeamciygeeqewcy:
        return $eqgoocgaqwqcimie;
        goto mukioeqsayqwycgu;
        qougaquyiyoekgme:
        $eqgoocgaqwqcimie = $this->iasywwkguyauiywu($eqgoocgaqwqcimie, $msqkueqksqwmskak);
        goto akgccuiekaowwmeq;
        ywamicmegakyokoq:
        wwkqmuawuugoiwey:
        goto koeamciygeeqewcy;
        aoeqqmeqcaeksamm:
        if (!($eqgoocgaqwqcimie !== $msqkueqksqwmskak && maybe_serialize($eqgoocgaqwqcimie) !== maybe_serialize($msqkueqksqwmskak))) {
            goto wwkqmuawuugoiwey;
        }
        goto qougaquyiyoekgme;
        akgccuiekaowwmeq:
        $eqgoocgaqwqcimie = $this->sscegwueamckwmcy("\142\145\146\157\x72\x65\137\165\160\x64\141\x74\145\x5f{$this->cisyiemkeykgkomc()}", $eqgoocgaqwqcimie, $msqkueqksqwmskak);
        goto ywamicmegakyokoq;
        mukioeqsayqwycgu:
    }
    
    public function iasywwkguyauiywu($eqgoocgaqwqcimie, $msqkueqksqwmskak)
    {
        return $eqgoocgaqwqcimie;
    }
    
    public function scmmymqkoyckgkam($msqkueqksqwmskak, $uwomkgseoiegeume)
    {
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\163\141\166\x65\144", false), $msqkueqksqwmskak, $uwomkgseoiegeume);
    }
    public function ocqaqswoeyscuoao()
    {
        goto cyiukscucygcyiow;
        gkqycsqguoaycowm:
        wiuiqmkuuuscscoi:
        goto myigiaaggwcoyqmo;
        cyiukscucygcyiow:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\142\145\x66\x6f\162\x65\x5f\x72\145\x6d\x6f\166\x65\x5f\x63\141\x63\x68\145\137\x70\x61\164\150"));
        goto keguueuuiqyowgge;
        keguueuuiqyowgge:
        if (!($skacuygeqykiwiwy = ManipulateSetting::cmaecekuqkwmemms(self::PR__CACHE__PATH))) {
            goto wiuiqmkuuuscscoi;
        }
        goto iggmoakswausicmq;
        emqaiyugeiukyqiw:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x61\146\x74\145\162\137\x72\145\x6d\x6f\x76\x65\137\143\141\x63\150\145\x5f\x70\x61\x74\x68"));
        goto gkqycsqguoaycowm;
        iggmoakswausicmq:
        $this->kcciqwskewsuaemk()->remove($skacuygeqykiwiwy);
        goto emqaiyugeiukyqiw;
        myigiaaggwcoyqmo:
    }
    
    public static function mywwyegkuymookeg()
    {
        goto oakqwukqiowuwgse;
        amicgsowmwecywga:
        $ksaameoqigiaoigg = $usymaaaeawgmyqig;
        goto kcgsqowasqeuaoyo;
        wciqgiyuqauosqsm:
        if ($usymaaaeawgmyqig !== false) {
            goto ciaocyoemcwmgays;
        }
        goto kkwciycuekqewqak;
        scywagkqaaqkqyuq:
        return $ksaameoqigiaoigg;
        goto aeoskcqgogoeieqq;
        oakqwukqiowuwgse:
        $eiockasigaaayoem = self::symcgieuakksimmu()->cisyiemkeykgkomc();
        goto makqoouaaoyeckwu;
        yuakcmiumkmoseoy:
        ciaocyoemcwmgays:
        goto amicgsowmwecywga;
        kkwciycuekqewqak:
        
        $ksaameoqigiaoigg = DecoratorOption::get($eiockasigaaayoem);
        goto ywqgaoiyisukooog;
        uicakiyqmsqkkeiq:
        goto kaaosukiekmqcuas;
        goto yuakcmiumkmoseoy;
        makqoouaaoyeckwu:
        $usymaaaeawgmyqig = wp_cache_get($eiockasigaaayoem);
        goto wciqgiyuqauosqsm;
        kcgsqowasqeuaoyo:
        kaaosukiekmqcuas:
        goto scywagkqaaqkqyuq;
        ywqgaoiyisukooog:
        wp_cache_set($eiockasigaaayoem, $ksaameoqigiaoigg);
        goto uicakiyqmsqkkeiq;
        aeoskcqgogoeieqq:
    }
    
    public static function eiaacegkigqiwawg($uusmaiomayssaecw, $eqgoocgaqwqcimie, $qeqooyuoiasweuck = null)
    {
        goto oumgmywcokuyaaky;
        uyomoigikmsymiku:
        return $eqgoocgaqwqcimie;
        goto ykcsckmiswouwaim;
        uuowysiecmaqiskc:
        mqomgaeswiquiasi:
        goto tiqqwmquwowcwsko;
        macwgscmecoymagu:
        $qeqooyuoiasweuck = self::mywwyegkuymookeg();
        goto uuowysiecmaqiskc;
        oyiakwoikeckycqe:
        self::oqyuwccsuskiwgew($qeqooyuoiasweuck);
        goto uyomoigikmsymiku;
        tiqqwmquwowcwsko:
        $qeqooyuoiasweuck[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        goto oyiakwoikeckycqe;
        oumgmywcokuyaaky:
        if ($qeqooyuoiasweuck) {
            goto mqomgaeswiquiasi;
        }
        goto macwgscmecoymagu;
        ykcsckmiswouwaim:
    }
    
    public static function oqyuwccsuskiwgew($qeqooyuoiasweuck = null)
    {
        goto umsiwskkkuuqygqe;
        qowqygggoieokiiw:
        wp_cache_delete($uusmaiomayssaecw);
        goto qsyssqesmcoyuewk;
        ycgoekuqouciwkom:
        DecoratorOption::update($uusmaiomayssaecw, $qeqooyuoiasweuck);
        goto qowqygggoieokiiw;
        umsiwskkkuuqygqe:
        $uusmaiomayssaecw = self::symcgieuakksimmu()->cisyiemkeykgkomc();
        goto ycgoekuqouciwkom;
        qsyssqesmcoyuewk:
    }
    
    public static function myekoowckeqqeuyq($amakmumgguksgmum, $eqgoocgaqwqcimie, $qeqooyuoiasweuck = null) : bool
    {
        goto aauewmowygwgwusw;
        qmyeykyyqksyekuo:
        $qeqooyuoiasweuck = self::mywwyegkuymookeg();
        goto kkkoguowckoiqywi;
        quimoymcisyaqaug:
        if ($qeqooyuoiasweuck) {
            goto yqewkyqauqqcyoyy;
        }
        goto qgqgsigokaomqkqe;
        camycossgaakcsiw:
        $uusmaiomayssaecw = self::symcgieuakksimmu()->cisyiemkeykgkomc();
        goto uaikkeuicmuuwccc;
        uaikkeuicmuuwccc:
        wp_cache_delete($uusmaiomayssaecw);
        goto cgkoamymiwyauswk;
        aauewmowygwgwusw:
        if ($qeqooyuoiasweuck) {
            goto myyyikoweqcgoucw;
        }
        goto qmyeykyyqksyekuo;
        kkkoguowckoiqywi:
        myyyikoweqcgoucw:
        goto quimoymcisyaqaug;
        cewyikqkeycuswys:
        yqewkyqauqqcyoyy:
        goto qmkooikkcycouowk;
        cgkoamymiwyauswk:
        return DecoratorOption::update($uusmaiomayssaecw, $qeqooyuoiasweuck);
        goto awsgaesauouewgmi;
        qmkooikkcycouowk:
        $qeqooyuoiasweuck[$amakmumgguksgmum] = $eqgoocgaqwqcimie;
        goto camycossgaakcsiw;
        qgqgsigokaomqkqe:
        $qeqooyuoiasweuck = [];
        goto cewyikqkeycuswys;
        awsgaesauouewgmi:
    }
    
    public static function yceqggqwokesouww($uusmaiomayssaecw, $eqgoocgaqwqcimie, $qeqooyuoiasweuck = null)
    {
        goto omcwcawuuiowsyiy;
        oucegyaesucoaqcs:
        owooskgowayymosm:
        goto nsqquyqqqiceasgu;
        sewqywuuoqaqgake:
        self::myekoowckeqqeuyq($uusmaiomayssaecw, $eqgoocgaqwqcimie);
        goto oucegyaesucoaqcs;
        uyiqkeoaoeesewkm:
        if ($amakmumgguksgmum) {
            goto owooskgowayymosm;
        }
        goto qekoeuskqquikiqa;
        nsqquyqqqiceasgu:
        return $amakmumgguksgmum;
        goto eooqoiuqayocqmqi;
        qekoeuskqquikiqa:
        $amakmumgguksgmum = $eqgoocgaqwqcimie;
        goto sewqywuuoqaqgake;
        omcwcawuuiowsyiy:
        $amakmumgguksgmum = self::eiwcuqigayigimak($uusmaiomayssaecw, null, $qeqooyuoiasweuck);
        goto uyiqkeoaoeesewkm;
        eooqoiuqayocqmqi:
    }
    
    public static function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = false, $qeqooyuoiasweuck = null)
    {
        goto gqsemgkumwsooguq;
        osskoqmmegqyksau:
        gqmaowmomwymiiec:
        goto wuaysaycmsuciagi;
        aymokcegeqgeuqai:
        $eqgoocgaqwqcimie = $eqgoocgaqwqcimie === "\x6f\x6e" ? true : $eqgoocgaqwqcimie;
        goto caqyccimywimqwgw;
        caqyccimywimqwgw:
        oekmmkgkgsuawkis:
        goto ssammmsycciagimy;
        ugyeckwkgkiyiwqm:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto oykemeioosgeaqek;
        gqsemgkumwsooguq:
        if ($qeqooyuoiasweuck) {
            goto gqmaowmomwymiiec;
        }
        goto ocuoiqskoseeoski;
        smisquuawsuaggqc:
        $eqgoocgaqwqcimie = $qeqooyuoiasweuck[$uusmaiomayssaecw];
        goto aymokcegeqgeuqai;
        ocuoiqskoseeoski:
        $qeqooyuoiasweuck = self::mywwyegkuymookeg();
        goto osskoqmmegqyksau;
        qcyamgiikmwuwsyu:
        goto oekmmkgkgsuawkis;
        goto wsgseaeaeuemmick;
        oykemeioosgeaqek:
        goto yimkweiuueksywey;
        goto ewyywyaciesugmeu;
        wuaysaycmsuciagi:
        if (is_string($uusmaiomayssaecw)) {
            goto auuoqiusumqggosg;
        }
        goto ugyeckwkgkiyiwqm;
        soqckwiemegiyosg:
        return $eqgoocgaqwqcimie;
        goto ugyyuyequeekycsm;
        ewyywyaciesugmeu:
        auuoqiusumqggosg:
        goto qqiomqmmgsgygyes;
        wsgseaeaeuemmick:
        kywsgoqgqmmmmucg:
        goto smisquuawsuaggqc;
        ssammmsycciagimy:
        yimkweiuueksywey:
        goto soqckwiemegiyosg;
        qqiomqmmgsgygyes:
        if (isset($qeqooyuoiasweuck[$uusmaiomayssaecw])) {
            goto kywsgoqgqmmmmucg;
        }
        goto goicgikimugciika;
        goicgikimugciika:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto qcyamgiikmwuwsyu;
        ugyyuyequeekycsm:
    }
    
    public static function wcoqgwyekgsmiueo(array $qiouiwasaauyaaue, string $ymqmyyeuycgmigyo, int $gaeqamemwmwsyukm = 1) : array
    {
        goto gkmimeqyqisqsosw;
        gkmimeqyqisqsosw:
        $isksgswsmmqgeqmo = ManipulateArray::get($qiouiwasaauyaaue, $ymqmyyeuycgmigyo, []);
        goto ackussqqoyomekeg;
        iyekaawoaqcqsssa:
        return $qiouiwasaauyaaue;
        goto wywkeewykggksckc;
        ackussqqoyomekeg:
        if (!($qiouiwasaauyaaue && is_array($qiouiwasaauyaaue) && $isksgswsmmqgeqmo && is_array($isksgswsmmqgeqmo))) {
            goto ogooawuumwuweeos;
        }
        goto cmmckyaaioecwuse;
        ayqcwceyiiosgcka:
        cgwqkgmqqyaqaeos:
        goto oeuquoqswksgymuw;
        oeuquoqswksgymuw:
        ogooawuumwuweeos:
        goto iyekaawoaqcqsssa;
        cmmckyaaioecwuse:
        foreach ($isksgswsmmqgeqmo as $momcykaoccoymeig => $omkysikckkcieckq) {
            goto iucqiqsagamegsmc;
            uqgkoksouqicqiiy:
            if (count($omkysikckkcieckq) >= $gaeqamemwmwsyukm) {
                goto qiockgemuekykiuy;
            }
            goto esyaossmykieskyg;
            emoiiiemgaasikyg:
            if ($uusmaiomayssaecw) {
                goto qwacmyuwycyqmwkq;
            }
            goto kqkmsuoqweqqoiiq;
            umcgmioomggsuigo:
            qiockgemuekykiuy:
            goto secykwwqaoeuywim;
            iucqiqsagamegsmc:
            $omkysikckkcieckq = array_filter($omkysikckkcieckq);
            goto uqgkoksouqicqiiy;
            yguaqcewwsageswq:
            sweymqcmesceysqo:
            goto igwsysyakwoosysi;
            cwcsikiqeagwcocm:
            goto sweymqcmesceysqo;
            goto umcgmioomggsuigo;
            igwsysyakwoosysi:
            amaeeaeauswgoqic:
            goto eeimuiikicqykmwa;
            esyaossmykieskyg:
            unset($qiouiwasaauyaaue[$ymqmyyeuycgmigyo][$momcykaoccoymeig]);
            goto cwcsikiqeagwcocm;
            secykwwqaoeuywim:
            $uusmaiomayssaecw = ManipulateArray::get($omkysikckkcieckq, self::KEY);
            goto emoiiiemgaasikyg;
            uimggymiocacgyky:
            qwacmyuwycyqmwkq:
            goto yguaqcewwsageswq;
            kqkmsuoqweqqoiiq:
            $qiouiwasaauyaaue[$ymqmyyeuycgmigyo][$momcykaoccoymeig][self::KEY] = ManipulateString::uniqid();
            goto uimggymiocacgyky;
            eeimuiikicqykmwa:
        }
        goto ayqcwceyiiosgcka;
        wywkeewykggksckc:
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
        goto wekseqwmumkkcsoc;
        cwigquaouceygaas:
        return $uqcooyiiyysckskk->csaueuycewaiuaay();
        goto gykiuseauawoywsy;
        gaagiucqcsoauoye:
        return $this->cisyiemkeykgkomc() === ManipulateServer::get("\x70\141\147\x65");
        goto cmcmwummuiemewaw;
        cscoykmeocmcwkkc:
        if (!$uqcooyiiyysckskk) {
            goto yiksaemwukcmqoks;
        }
        goto cwigquaouceygaas;
        wekseqwmumkkcsoc:
        $uqcooyiiyysckskk = $this->aeqcqgsamsqomowm();
        goto cscoykmeocmcwkkc;
        gykiuseauawoywsy:
        yiksaemwukcmqoks:
        goto gaagiucqcsoauoye;
        cmcmwummuiemewaw:
    }
}
