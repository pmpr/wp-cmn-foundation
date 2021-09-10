<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\DB;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\ORM\DB\Traits\FieldTrait;
use Closure;
use Exception;
use Generator;
use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\ConnectionInterface;
use Illuminate\Database\Query\Expression;
use Illuminate\Database\Query\Grammars\Grammar;
use Illuminate\Database\Query\Processors\Processor;
use Illuminate\Database\QueryException;

class Database extends Common implements ConnectionInterface
{
    use FieldTrait;
    
    protected $db = null;
    
    protected array $configs = [];
    
    protected ?Manager $manager = null;
    
    protected ?int $transactionCount = 0;
    
    public function __construct()
    {
        goto uckusgwkoycmkeam;
        mieoguuqiwqioeqa:
        parent::__construct();
        goto qosswumywsaeyqus;
        uckusgwkoycmkeam:
        global $wpdb;
        goto gscyiqmmegqmqcoe;
        gscyiqmmegqmqcoe:
        $this->db = $wpdb;
        goto mieoguuqiwqioeqa;
        qosswumywsaeyqus:
    }
    
    public function wwiwswsasquukoqs()
    {
        return $this->db;
    }
    
    public function amosaeggmeksgwea() : ?Manager
    {
        return $this->manager;
    }
    public function cymcyywycwkawmsi()
    {
        goto swicauyqusmgeccu;
        swicauyqusmgeccu:
        $ooggeikkseeqyyek = $this->wwiwswsasquukoqs();
        goto maguoggkqamaiuag;
        kocaieyauyiqmyiy:
        
        $eygsasmqycagyayw->addConnection($uiewakwqscemywuo);
        goto gcqssckowmywoesw;
        icoiqskygugkgmkm:
        $uiewakwqscemywuo = ["\x64\x72\x69\x76\145\x72" => "\155\171\x73\x71\154", "\x68\157\163\x74" => $ooggeikkseeqyyek->__get("\144\x62\x68\157\163\x74"), "\144\141\x74\141\142\141\x73\145" => $ooggeikkseeqyyek->__get("\144\142\x6e\141\155\x65"), "\x75\x73\x65\x72\x6e\141\x6d\x65" => $ooggeikkseeqyyek->__get("\144\142\x75\x73\x65\162"), "\160\141\163\x73\x77\x6f\x72\144" => $ooggeikkseeqyyek->__get("\x64\142\x70\x61\x73\x73\167\157\162\x64"), "\160\157\162\164" => $ooggeikkseeqyyek->options, "\x63\150\x61\162\x73\x65\x74" => $ooggeikkseeqyyek->charset, "\143\157\154\x6c\141\164\x69\157\x6e" => $ooggeikkseeqyyek->collate, "\x70\x72\x65\x66\151\x78" => $ooggeikkseeqyyek->prefix];
        goto kocaieyauyiqmyiy;
        cuayqmasemsqsume:
        $this->manager = $eygsasmqycagyayw;
        goto igmawmwssyskqqag;
        gcqssckowmywoesw:
        
        $eygsasmqycagyayw->bootEloquent();
        goto eekkcooqswqouoei;
        eekkcooqswqouoei:
        
        $eygsasmqycagyayw->setAsGlobal();
        goto cuayqmasemsqsume;
        maguoggkqamaiuag:
        $eygsasmqycagyayw = new Manager();
        goto icoiqskygugkgmkm;
        igmawmwssyskqqag:
    }
    
    public function query() : Builder
    {
        goto iomwkkieqcswkkaw;
        iomwkkieqcswkkaw:
        $kooimksequwgsyqc = $this->aqoymmcygkssqmmy();
        goto eussqkkimciywios;
        eussqkkimciywios:
        $wgqamiqkugoqsmes = $this->yokcoiaqqaquwecc();
        goto ewsigoeswimiueqe;
        ewsigoeswimiueqe:
        return new Builder($this, $kooimksequwgsyqc, $wgqamiqkugoqsmes);
        goto gaskcgoeywuyukke;
        gaskcgoeywuyukke:
    }
    
    public function aakmagwggmkoiiyu() : ?string
    {
        return $this->aceaeommyuooiqge("\x6e\x61\x6d\145");
    }
    
    public function aqoymmcygkssqmmy() : Grammar
    {
        return new Grammar();
    }
    
    public function yokcoiaqqaquwecc() : Processor
    {
        return new Processor();
    }
    
    public function xoiwkmeymocuuwcq($ywmkwiwkosakssii)
    {
        return $this->wwiwswsasquukoqs()->insert_id;
    }
    
    public function tkgawykgecmsaeis() : ?array
    {
        return $this->configs;
    }
    
    public function aceaeommyuooiqge($omkysikckkcieckq = null)
    {
        return ManipulateArray::get($this->tkgawykgecmsaeis(), $omkysikckkcieckq);
    }
    
    public function uawwgkimmooamyay() : ?int
    {
        return $this->transactionCount;
    }
    
    public function iqekeywwkoksagke($gqgemcmoicmgaqie, $iykmscciaowcagqu = []) : array
    {
        goto gqaqamewqeaqwcia;
        ksiwgckusukisueg:
        $this->quauggogguqkokkk($sogksuscggsicmac, $gmyoogwqukkgwiwk, $iykmscciaowcagqu);
        goto sgkqgucguyccaaki;
        sgkqgucguyccaaki:
        return (array) $sogksuscggsicmac;
        goto omuemegmkesqgwys;
        okuqsqaiwwiigmyu:
        $sogksuscggsicmac = $this->wwiwswsasquukoqs()->query($gmyoogwqukkgwiwk);
        goto ksiwgckusukisueg;
        gqaqamewqeaqwcia:
        $gmyoogwqukkgwiwk = $this->qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu);
        goto okuqsqaiwwiigmyu;
        omuemegmkesqgwys:
    }
    
    private function quauggogguqkokkk($sogksuscggsicmac, $asiqcaccsgscgcyq, $iykmscciaowcagqu)
    {
        goto cmsiuimsiycomyay;
        cmsiuimsiycomyay:
        if (!($sogksuscggsicmac === false || $this->wwiwswsasquukoqs()->last_error)) {
            goto geyiosucqswaeasw;
        }
        goto qmqmskywcgiqgygm;
        ccgsycueagwegqeu:
        geyiosucqswaeasw:
        goto gmeiuoeewucukque;
        qmqmskywcgiqgygm:
        throw new QueryException($asiqcaccsgscgcyq, $iykmscciaowcagqu, new Exception($this->wwiwswsasquukoqs()->last_error));
        goto ccgsycueagwegqeu;
        gmeiuoeewucukque:
    }
    
    public function wcweamocuicuusky(string $uusmaiomayssaecw, $omkysikckkcieckq = null) : self
    {
        $this->configs[$uusmaiomayssaecw] = $omkysikckkcieckq;
        return $this;
    }
    
    private function qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu, $suckquwcuiuyiogc = false)
    {
        goto yqqseqskcqeqkacm;
        kwasqmcyiswoaiuu:
        return $gqgemcmoicmgaqie;
        goto kiskwawumeiiieuk;
        sockocsycmkaeosg:
        $iykmscciaowcagqu = array_map(function ($moyaaaascoeowegu) {
            goto ceaamccscgcmqgka;
            wqwmuuicoqigqwyc:
            return $moyaaaascoeowegu;
            goto oqgymyiwckkwueuw;
            omumkeywqqogwwue:
            if (!($moyaaaascoeowegu === null)) {
                goto sayqggaieocmskko;
            }
            goto igyesgemqesackws;
            wiaymoucakyaikii:
            sayqggaieocmskko:
            goto ociesuicgmkekcue;
            qiikwossequwiuom:
            $moyaaaascoeowegu = "\x27" . esc_sql($moyaaaascoeowegu) . "\x27";
            goto gaouaiemokqqgssw;
            gaouaiemokqqgssw:
            ycecaauekkiqacuu:
            goto wqwmuuicoqigqwyc;
            igyesgemqesackws:
            $moyaaaascoeowegu = "\156\165\x6c\154";
            goto wiaymoucakyaikii;
            ociesuicgmkekcue:
            goto ycecaauekkiqacuu;
            goto ymucaguacemwsgsi;
            ymucaguacemwsgsi:
            qmguoqeawegcoeoa:
            goto qiikwossequwiuom;
            ceaamccscgcmqgka:
            if (is_string($moyaaaascoeowegu)) {
                goto qmguoqeawegcoeoa;
            }
            goto omumkeywqqogwwue;
            oqgymyiwckkwueuw:
        }, $iykmscciaowcagqu);
        goto ugkwqaywmwqucoeo;
        asoecuscmsyusmkg:
        qywkykqkeeuccoui:
        goto kwasqmcyiswoaiuu;
        ywokggauuiosegog:
        $iykmscciaowcagqu = $this->uooqikqsgykeymok($iykmscciaowcagqu);
        goto uoewiggumomegksg;
        ugkwqaywmwqucoeo:
        $gqgemcmoicmgaqie = str_replace(["\x25", "\77"], ["\x25\x25", "\45\163"], $gqgemcmoicmgaqie);
        goto syisomgawcsqeemk;
        syisomgawcsqeemk:
        $gqgemcmoicmgaqie = vsprintf($gqgemcmoicmgaqie, $iykmscciaowcagqu);
        goto asoecuscmsyusmkg;
        yqqseqskcqeqkacm:
        $gqgemcmoicmgaqie = str_replace("\42", "\x60", $gqgemcmoicmgaqie);
        goto ywokggauuiosegog;
        uoewiggumomegksg:
        if (!$iykmscciaowcagqu) {
            goto qywkykqkeeuccoui;
        }
        goto sockocsycmkaeosg;
        kiskwawumeiiieuk:
    }
    
    public function cokoiaeeomgssqgy(?string $aasascamegmwqmqk = null, $yuwymayicwwqiske = true) : ?string
    {
        goto awuwuuuagqysukku;
        maggecymmmesqmqs:
        $syeseoiyagmgumcy = $syeseoiyagmgumcy . ManipulateString::gumqicgiosoqweoy($aasascamegmwqmqk);
        goto csaksaisgawusswg;
        emeeocqaisksyioq:
        oaqeoqsksuyyggmg:
        goto maggecymmmesqmqs;
        awuwuuuagqysukku:
        $syeseoiyagmgumcy = '';
        goto miugmimciywcgswm;
        ecgwgamiseokmise:
        return $syeseoiyagmgumcy;
        goto qkiyyywwuiuackao;
        miugmimciywcgswm:
        if (!$aasascamegmwqmqk) {
            goto kkmuuoscccmokkiw;
        }
        goto aqekkeqmmewoyawu;
        aqekkeqmmewoyawu:
        if (!$yuwymayicwwqiske) {
            goto oaqeoqsksuyyggmg;
        }
        goto mcqwuawosciucemq;
        mcqwuawosciucemq:
        $syeseoiyagmgumcy = $this->wwiwswsasquukoqs()->prefix;
        goto emeeocqaisksyioq;
        csaksaisgawusswg:
        kkmuuoscccmokkiw:
        goto ecgwgamiseokmise;
        qkiyyywwuiuackao:
    }
    
    public function getPdo() : self
    {
        return $this;
    }
    
    public function raw($eqgoocgaqwqcimie) : Expression
    {
        return new Expression($eqgoocgaqwqcimie);
    }
    
    public function table($aasascamegmwqmqk, $aikcyecgesuiaacw = null) : Builder
    {
        $aasascamegmwqmqk = $this->cokoiaeeomgssqgy($aasascamegmwqmqk);
        
        return $this->query()->from($aasascamegmwqmqk);
    }
    
    public function insert($gqgemcmoicmgaqie, $iykmscciaowcagqu = []) : bool
    {
        
        return $this->statement($gqgemcmoicmgaqie, $iykmscciaowcagqu);
    }
    
    public function update($gqgemcmoicmgaqie, $iykmscciaowcagqu = []) : int
    {
        return $this->niiwccguwykyacek($gqgemcmoicmgaqie, $iykmscciaowcagqu);
    }
    
    public function delete($gqgemcmoicmgaqie, $iykmscciaowcagqu = []) : int
    {
        return $this->niiwccguwykyacek($gqgemcmoicmgaqie, $iykmscciaowcagqu);
    }
    
    public function statement($gqgemcmoicmgaqie, $iykmscciaowcagqu = []) : bool
    {
        $gmyoogwqukkgwiwk = $this->qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu, true);
        
        return $this->unprepared($gmyoogwqukkgwiwk);
    }
    
    public function affectingStatement($gqgemcmoicmgaqie, $iykmscciaowcagqu = []) : int
    {
        goto gyskcwykkyakeims;
        gyskcwykkyakeims:
        $gmyoogwqukkgwiwk = $this->qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu, true);
        goto ossakckwskyqusmm;
        aamgqoqyyooimqkm:
        return intval($sogksuscggsicmac);
        goto cimascmiesomqgqs;
        ossakckwskyqusmm:
        
        $sogksuscggsicmac = $this->wwiwswsasquukoqs()->query($gmyoogwqukkgwiwk);
        goto mcagemacuqyskogs;
        mcagemacuqyskogs:
        $this->quauggogguqkokkk($sogksuscggsicmac, $gmyoogwqukkgwiwk, $iykmscciaowcagqu);
        goto aamgqoqyyooimqkm;
        cimascmiesomqgqs:
    }
    
    public function select($gqgemcmoicmgaqie, $iykmscciaowcagqu = [], $ykwkqeocyaeasoqy = true) : array
    {
        goto easuiqiooiwgswmm;
        kwocaqggwcksesce:
        return $sogksuscggsicmac;
        goto momuweiasiwskekw;
        easuiqiooiwgswmm:
        $gqgemcmoicmgaqie = $this->qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu);
        goto saiuoomgskwgyeya;
        saiuoomgskwgyeya:
        $sogksuscggsicmac = $this->wwiwswsasquukoqs()->get_results($gqgemcmoicmgaqie);
        goto kuuawiosmkgqsscy;
        kuuawiosmkgqsscy:
        $this->quauggogguqkokkk($sogksuscggsicmac, $gqgemcmoicmgaqie, $iykmscciaowcagqu);
        goto kwocaqggwcksesce;
        momuweiasiwskekw:
    }
    
    public function cursor($gqgemcmoicmgaqie, $iykmscciaowcagqu = [], $ykwkqeocyaeasoqy = true)
    {
    }
    
    public function selectOne($gqgemcmoicmgaqie, $iykmscciaowcagqu = [], $ykwkqeocyaeasoqy = true)
    {
        goto qaewauyekqucciyc;
        agyooskogigyayws:
        return $sogksuscggsicmac;
        goto iiiwsgameuomumgw;
        aucwccaiqwsmyuaq:
        $this->quauggogguqkokkk($sogksuscggsicmac, $gqgemcmoicmgaqie, $iykmscciaowcagqu);
        goto agyooskogigyayws;
        qaewauyekqucciyc:
        $gqgemcmoicmgaqie = $this->qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu);
        goto bgakaasgwwygosyi;
        bgakaasgwwygosyi:
        $sogksuscggsicmac = $this->wwiwswsasquukoqs()->get_row($gqgemcmoicmgaqie);
        goto aucwccaiqwsmyuaq;
        iiiwsgameuomumgw:
    }
    
    public function unprepared($gqgemcmoicmgaqie) : bool
    {
        
        $sogksuscggsicmac = $this->wwiwswsasquukoqs()->query($gqgemcmoicmgaqie);
        return $sogksuscggsicmac === false || $this->wwiwswsasquukoqs()->last_error;
    }
    
    public function prepareBindings(array $iykmscciaowcagqu) : array
    {
        goto mmcikqikqecaeswu;
        yaumwqeommqigswq:
        return $iykmscciaowcagqu;
        goto wiiqigwgyuiuksia;
        mmcikqikqecaeswu:
        $kooimksequwgsyqc = $this->aqoymmcygkssqmmy();
        goto ywsywoumuaykkeaa;
        wsqiqkiucakewgou:
        mcukocaaoyuugoeu:
        goto yaumwqeommqigswq;
        ywsywoumuaykkeaa:
        foreach ($iykmscciaowcagqu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto mciumqyyossyiuyk;
            aeuosggumiiwoesm:
            goto uwusswwekqcsisus;
            goto wyqmeyoaggwuioak;
            acaeigkmigikeuyu:
            if (is_scalar($eqgoocgaqwqcimie)) {
                goto cgwokqwakqcmiieo;
            }
            goto kqyeukywmgismyaq;
            omgcsmsikaggaooc:
            okycquokqoamsquy:
            goto wykuosegisygosiq;
            sqmqwqeoygcmqcim:
            uwusswwekqcsisus:
            goto syykqmkiyoekqsek;
            gsgyayuaekgyoumc:
            goto scockmiqikwwkqse;
            goto omemqagskckoeoog;
            wyqmeyoaggwuioak:
            kssuqmsgmaaeqigw:
            goto uyksacasqywyessc;
            cqeoguiqiymkyweo:
            
            $iykmscciaowcagqu[$uusmaiomayssaecw] = $eqgoocgaqwqcimie->format($ocogsiouoiuuguym);
            goto omgcsmsikaggaooc;
            mciumqyyossyiuyk:
            
            if (is_bool($eqgoocgaqwqcimie)) {
                goto kssuqmsgmaaeqigw;
            }
            goto acaeigkmigikeuyu;
            kqyeukywmgismyaq:
            if (!$eqgoocgaqwqcimie instanceof \DateTime) {
                goto okycquokqoamsquy;
            }
            goto mukwsuuuqcgesmwc;
            wykuosegisygosiq:
            goto egwgyekaiqomyeaa;
            goto ugikgkwuwmgymgus;
            uyksacasqywyessc:
            $iykmscciaowcagqu[$uusmaiomayssaecw] = intval($eqgoocgaqwqcimie);
            goto sqmqwqeoygcmqcim;
            omemqagskckoeoog:
            egwgyekaiqomyeaa:
            goto aeuosggumiiwoesm;
            mukwsuuuqcgesmwc:
            
            
            
            
            $ocogsiouoiuuguym = $kooimksequwgsyqc->getDateFormat();
            goto cqeoguiqiymkyweo;
            syykqmkiyoekqsek:
            scockmiqikwwkqse:
            goto aiqekkyauwswayyq;
            ugikgkwuwmgymgus:
            cgwokqwakqcmiieo:
            goto gsgyayuaekgyoumc;
            aiqekkyauwswayyq:
        }
        goto wsqiqkiucakewgou;
        wiiqigwgyuiuksia:
    }
    
    public function transaction(Closure $ekiuyucoiagmscgy, $mogwwoaswuuykekc = 1)
    {
        
        $this->beginTransaction();
        try {
            goto mqoygcuqwacgycek;
            mqoygcuqwacgycek:
            $icwicymcioeyeyek = $ekiuyucoiagmscgy();
            goto agyycikucwgmysee;
            aiukiwqmikscoswm:
            return $icwicymcioeyeyek;
            goto mcmkqgkwyqoiikcq;
            agyycikucwgmysee:
            
            $this->commit();
            goto aiukiwqmikscoswm;
            mcmkqgkwyqoiikcq:
        } catch (Exception $iewosgggaueeyymg) {
            
            $this->rollBack();
            throw $iewosgggaueeyymg;
        }
    }
    
    public function beginTransaction()
    {
        goto gskacikgkwcuauko;
        qmegcmqemmywoqas:
        ssyukuseoymackeo:
        goto giooasyeqwaaocea;
        yyieomeeqycmikqw:
        if (!(false !== $ammuiskickemgqgc)) {
            goto ssyukuseoymackeo;
        }
        goto kwiuqqwamsimqgme;
        gskacikgkwcuauko:
        
        $ammuiskickemgqgc = $this->unprepared("\123\x54\101\122\124\40\124\x52\101\116\123\101\103\124\111\x4f\116\73");
        goto yyieomeeqycmikqw;
        kwiuqqwamsimqgme:
        $this->transactionCount++;
        goto qmegcmqemmywoqas;
        giooasyeqwaaocea:
    }
    
    public function commit()
    {
        goto qgyoesyiasqimcoe;
        ascogkesqmuuaesq:
        $this->transactionCount--;
        goto askukaucmocewkgg;
        askukaucmocewkgg:
        uueywyysiicuauem:
        goto kiemqsgcmouqscao;
        kkwqmewaksmokuqy:
        
        $ammuiskickemgqgc = $this->unprepared("\x43\117\x4d\115\x49\x54\x3b");
        goto gsgkayokisiesciy;
        kiemqsgcmouqscao:
        seieguyaaiqismgo:
        goto wssaaemscmmiomee;
        qgyoesyiasqimcoe:
        if (!($this->transactionCount >= 1)) {
            goto seieguyaaiqismgo;
        }
        goto kkwqmewaksmokuqy;
        gsgkayokisiesciy:
        if (!(false !== $ammuiskickemgqgc)) {
            goto uueywyysiicuauem;
        }
        goto ascogkesqmuuaesq;
        wssaaemscmmiomee:
    }
    
    public function rollBack()
    {
        goto iusaeoimukymskgs;
        eaggoasiwogmquwc:
        if (!(false !== $ammuiskickemgqgc)) {
            goto meqmcgmksqiqcoyq;
        }
        goto meoweqcaaosoomeu;
        asciaakaoygususy:
        
        $ammuiskickemgqgc = $this->unprepared("\x52\117\x4c\114\102\x41\103\113\x3b");
        goto eaggoasiwogmquwc;
        meoweqcaaosoomeu:
        $this->transactionCount--;
        goto ywmoieqkigsykequ;
        ywmoieqkigsykequ:
        meqmcgmksqiqcoyq:
        goto iaousaauoawkqkkg;
        iaousaauoawkqkkg:
        euskosgaksmimgug:
        goto kkwucaoumyayagcq;
        iusaeoimukymskgs:
        if (!($this->transactionCount >= 1)) {
            goto euskosgaksmimgug;
        }
        goto asciaakaoygususy;
        kkwucaoumyayagcq:
    }
    
    public function transactionLevel() : ?int
    {
        return $this->transactionCount;
    }
    
    public function pretend(Closure $ekiuyucoiagmscgy) : array
    {
        return [];
    }
    
    public function getDatabaseName()
    {
        return $this->wwiwswsasquukoqs()->__get("\x64\142\x6e\141\155\x65");
    }
}
