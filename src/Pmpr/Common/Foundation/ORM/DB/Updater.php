<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\DB;

use Illuminate\Database\Connection;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\ORM\DB\Field\Field;
use Pmpr\Common\Foundation\ORM\DB\Field\Foreign;
use Exception;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Builder as SchemaBuilder;
use Illuminate\Database\Schema\ColumnDefinition;
use Pmpr\Common\Foundation\ORM\DB\Traits\FieldTrait;
use Pmpr\Common\Foundation\ORM\Register;

class Updater extends Common
{
    use FieldTrait;
    
    protected array $schema = [];
    
    protected ?Database $database = null;
    
    protected ?Register $register = null;
    
    protected ?SchemaBuilder $builder = null;
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x61\x64\155\x69\x6e\x5f\x69\156\151\x74", [$this, "\143\x75\143\161\147\167\x6d\157\163\145\161\x61\x6b\147\157\x65"]);
        parent::wigskegsqequoeks();
    }
    
    public function ysgiswuowuciwqaq() : ?Connection
    {
        goto uecycmeaoqgqcomm;
        uecycmeaoqgqcomm:
        $mgcmmwqwguicsews = null;
        goto siiwoymcomqegmya;
        cgqmyikikqgmksgg:
        gquyeowwseuycuoq:
        goto qioeuukaqkcsiiwk;
        wkokasiqoeycyukq:
        
        $mgcmmwqwguicsews = $this->skckwsgymkimyuwo()->amosaeggmeksgwea()->getConnection();
        goto cgqmyikikqgmksgg;
        qioeuukaqkcsiiwk:
        return $mgcmmwqwguicsews;
        goto cycwiouaowuswkmk;
        siiwoymcomqegmya:
        if (!($this->skckwsgymkimyuwo() && $this->skckwsgymkimyuwo()->amosaeggmeksgwea())) {
            goto gquyeowwseuycuoq;
        }
        goto wkokasiqoeycyukq;
        cycwiouaowuswkmk:
    }
    
    public function cokoiaeeomgssqgy() : ?string
    {
        return $this->skckwsgymkimyuwo()->cokoiaeeomgssqgy($this->oyeskqayoscwciem()->aakmagwggmkoiiyu(), false);
    }
    
    public function gqaysymikgeawkqa() : ?SchemaBuilder
    {
        goto sguosuigwgwkikgs;
        ycyueqmkqyycmaus:
        
        $this->builder = $this->ysgiswuowuciwqaq()->getSchemaBuilder();
        goto wgkamcmqescgqcyw;
        amkeeqecmwsmwqma:
        return $this->builder;
        goto vkmscascaoysaqoc;
        wgkamcmqescgqcyw:
        aoiwocgacociakoy:
        goto amkeeqecmwsmwqma;
        sguosuigwgwkikgs:
        if (!(!$this->builder && $this->ysgiswuowuciwqaq())) {
            goto aoiwocgacociakoy;
        }
        goto ycyueqmkqyycmaus;
        vkmscascaoysaqoc:
    }
    
    public function skckwsgymkimyuwo() : ?Database
    {
        return $this->database;
    }
    
    public function uwyqgmcuomgeccgy(?Database $wyeookkecoymuauy) : self
    {
        $this->database = $wyeookkecoymuauy;
        return $this;
    }
    
    public function oyeskqayoscwciem() : ?Register
    {
        return $this->register;
    }
    
    public function yuaecocyyyqqgsyw(Register $yyksucsgisomecgg) : self
    {
        $this->register = $yyksucsgisomecgg;
        return $this;
    }
    
    public function aceaeommyuooiqge($omkysikckkcieckq) : ?string
    {
        goto ioqmgaeuiicymgky;
        ioqmgaeuiicymgky:
        $uiewakwqscemywuo = null;
        goto ywmcuouqguawueqm;
        ywmcuouqguawueqm:
        if (!($omkysikckkcieckq && $this->ysgiswuowuciwqaq())) {
            goto soskeqqausokwugo;
        }
        goto gkoaywyuyqemyiqw;
        aswikmsouwkequca:
        return $uiewakwqscemywuo;
        goto ycgsmkkioyqqawyk;
        gcgsyyiismkwoyck:
        soskeqqausokwugo:
        goto aswikmsouwkequca;
        gkoaywyuyqemyiqw:
        
        $uiewakwqscemywuo = $this->ysgiswuowuciwqaq()->getConfig($omkysikckkcieckq);
        goto gcgsyyiismkwoyck;
        ycgsmkkioyqqawyk:
    }
    public function cucqgwmoseqakgoe()
    {
        try {
            goto qywueycgouwamkso;
            qaykqsyoyscaqsce:
            $iygikoguosecwqgw ? $this->update($ikgwqyuyckaewsow, $aasascamegmwqmqk) : $this->create($ikgwqyuyckaewsow, $aasascamegmwqmqk);
            goto cuqwswgmwuwmgkwe;
            qywueycgouwamkso:
            $ikgwqyuyckaewsow = $this->oyeskqayoscwciem()->aeosueemgsygqese();
            goto wecgakiimqymkmiy;
            wecgakiimqymkmiy:
            $aasascamegmwqmqk = $this->cokoiaeeomgssqgy();
            goto uggisigeswwyqmqi;
            uggisigeswwyqmqi:
            
            $iygikoguosecwqgw = $this->gqaysymikgeawkqa()->hasTable($aasascamegmwqmqk);
            goto qaykqsyoyscaqsce;
            cuqwswgmwuwmgkwe:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
    }
    
    public function update($ikgwqyuyckaewsow, $cgomysauusagiwqu)
    {
        goto emyuskcwqyscewue;
        oguigickaoqigcoi:
        
        $this->gqaysymikgeawkqa()->table($aasascamegmwqmqk, $ekiuyucoiagmscgy);
        goto qmugciukukckmeiu;
        wygeysociiyqokyk:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            goto gcykaeaisuqiqyqi;
            cyssqgqaoaasmogc:
            okacwwwygceucqsg:
            goto geqwascicmuguaom;
            gcykaeaisuqiqyqi:
            if (!($aiowsaccomcoikus instanceof Field && !in_array($aiowsaccomcoikus->mwikyscisascoeea(), $wkkweuacukumqmya))) {
                goto igosooeimygcmois;
            }
            goto swkeqqkqioecmgia;
            swkeqqkqioecmgia:
            
            $uwqmqcmssaeieiqa[] = ["\x61\x63\x74\x69\x6f\156" => "\101\104\x44", "\143\157\154\x75\x6d\x6e" => $aokagokqyuysuksm];
            goto yomuicigicmugscy;
            yomuicigicmugscy:
            igosooeimygcmois:
            goto cyssqgqaoaasmogc;
            geqwascicmuguaom:
        }
        goto qyguqmkmyqeyqaac;
        qoqgokiaagioccqg:
        foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $aiowsaccomcoikus) {
            goto mwmwmswiueocaeug;
            mwmwmswiueocaeug:
            if (!($aiowsaccomcoikus instanceof Foreign && $aiowsaccomcoikus->iueigwuckeaswyuu())) {
                goto oaimckymswkqoysq;
            }
            goto ukugqakgsqqmgege;
            gcgwqksqskumiumq:
            ysykemiscamquoce:
            goto emiugswuagoacakq;
            ukugqakgsqqmgege:
            ManipulateArray::unset($ikgwqyuyckaewsow, $ymqmyyeuycgmigyo);
            goto awcgiyqmoemqumeg;
            awcgiyqmoemqumeg:
            oaimckymswkqoysq:
            goto gcgwqksqskumiumq;
            emiugswuagoacakq:
        }
        goto oeukmyymqaaakksa;
        oeukmyymqaaakksa:
        twusqqkmqgswisei:
        goto ookeyiumgkqqucia;
        alomqucgmacieuoa:
        if (!$cgomysauusagiwqu) {
            goto eugisyswkecacase;
        }
        goto yiskaoskyyiswkki;
        ioocowswsiqoyaai:
        sort($uwomkgseoiegeume);
        goto csuwemcoeyqemwks;
        qckqeqqcoawmwwqw:
        foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi) {
            goto kcesecosoiwocymi;
            ckyamgmuoswcaiak:
            $uwqmqcmssaeieiqa[] = ["\x61\x63\x74\x69\157\x6e" => "\x44\122\117\120", "\x63\x6f\154\165\155\x6e" => $qgoqiacsiccwoawi];
            goto umosyyqqcuqiscco;
            umosyyqqcuqiscco:
            omagsowousaeaiou:
            goto qauuogkoosmuggas;
            kcesecosoiwocymi:
            if (in_array($qgoqiacsiccwoawi, $uwomkgseoiegeume)) {
                goto omagsowousaeaiou;
            }
            goto ckyamgmuoswcaiak;
            qauuogkoosmuggas:
            qkygewgkycsuawgm:
            goto wwcougcmsuqogqyc;
            wwcougcmsuqogqyc:
        }
        goto yqywgkymmowyggqa;
        csuwemcoeyqemwks:
        sort($wkkweuacukumqmya);
        goto wcmsamoqaogoouey;
        akieyasekuwqeugc:
        eugisyswkecacase:
        goto gqwcuusyiggisuok;
        ccqagygkoaagksyw:
        $aasascamegmwqmqk = $this->cokoiaeeomgssqgy();
        goto oguigickaoqigcoi;
        wcmsamoqaogoouey:
        if (!(json_encode($uwomkgseoiegeume) != json_encode($wkkweuacukumqmya))) {
            goto iceuoqgyqsmywqqq;
        }
        goto oyciiqiqoqkgoqec;
        akieywkiweasukyw:
        ManipulateArray::gyciysooayoqiisg($wkkweuacukumqmya, ["\x69\x64"]);
        goto qoqgokiaagioccqg;
        qmugciukukckmeiu:
        iceuoqgyqsmywqqq:
        goto akieyasekuwqeugc;
        igeoagaweewiscas:
        $ekiuyucoiagmscgy = function (Blueprint &$aasascamegmwqmqk) use($uwqmqcmssaeieiqa, $ikgwqyuyckaewsow) {
            foreach ($uwqmqcmssaeieiqa as $ocyscigwmouqaiia) {
                goto emuckswusmmeuwma;
                sswmkkcyawawqwwg:
                switch ($aiamqeawckcsuaou) {
                    case "\101\x44\x44":
                    case "\x4d\117\x44\x49\106\131":
                        goto mumeawggkmqsowae;
                        kyiewmuguyyccsca:
                        ckaggwgwsyowuuem:
                        goto ecimugmwcawqmyaa;
                        isqokqgukyemmqcg:
                        if (!$aiowsaccomcoikus instanceof Field) {
                            goto eecyiiwsqomoggmq;
                        }
                        goto gemuuqmegqkkgeua;
                        gemuuqmegqkkgeua:
                        $aasascamegmwqmqk = $this->gqeeyaqcuukysmes($aasascamegmwqmqk, $aiowsaccomcoikus, $aiamqeawckcsuaou === "\x4d\117\x44\111\106\x59");
                        goto yeiawaisoceoysau;
                        yeiawaisoceoysau:
                        eecyiiwsqomoggmq:
                        goto kyiewmuguyyccsca;
                        ecimugmwcawqmyaa:
                        goto okaiokeeaqccisaq;
                        goto msieagoikksumcwa;
                        mumeawggkmqsowae:
                        if (!isset($ikgwqyuyckaewsow[$qgoqiacsiccwoawi])) {
                            goto ckaggwgwsyowuuem;
                        }
                        goto kwcyggeukmgacqsy;
                        kwcyggeukmgacqsy:
                        $aiowsaccomcoikus = $ikgwqyuyckaewsow[$qgoqiacsiccwoawi];
                        goto isqokqgukyemmqcg;
                        msieagoikksumcwa:
                    case "\101\x44\x44\40\x49\x4e\104\105\x58":
                    case "\104\122\x4f\x50\40\111\116\x44\105\130":
                        goto imwcikaiagkakiic;
                        ymkoykouaqiusygo:
                        
                        $aasascamegmwqmqk->index($qgoqiacsiccwoawi);
                        goto eeoiyiuccooeigmk;
                        eeoiyiuccooeigmk:
                        ygywowuyoygiiqaq:
                        goto owkyiywsooiwewgw;
                        imwcikaiagkakiic:
                        
                        $aasascamegmwqmqk->dropIndex($qgoqiacsiccwoawi);
                        goto uooisauooikkciom;
                        uooisauooikkciom:
                        if (!($aiamqeawckcsuaou == "\x41\x44\x44\x20\x49\116\x44\x45\x58")) {
                            goto ygywowuyoygiiqaq;
                        }
                        goto ymkoykouaqiusygo;
                        owkyiywsooiwewgw:
                        goto okaiokeeaqccisaq;
                        goto wqyymgoekecmskmm;
                        wqyymgoekecmskmm:
                    case "\104\x52\117\120":
                        
                        $aasascamegmwqmqk->dropColumn($qgoqiacsiccwoawi);
                        goto okaiokeeaqccisaq;
                }
                goto kaocmesokyiikyci;
                emuckswusmmeuwma:
                $qgoqiacsiccwoawi = $ocyscigwmouqaiia["\143\x6f\x6c\165\x6d\156"];
                goto cgyikucmysgcmweu;
                cgyikucmysgcmweu:
                $aiamqeawckcsuaou = $ocyscigwmouqaiia["\x61\x63\x74\x69\x6f\156"];
                goto sswmkkcyawawqwwg;
                kaocmesokyiikyci:
                ugseakwywkuwgyug:
                goto yikyagqossasyqcu;
                agwsusimqmoesgck:
                yoeqaicysswwgkmm:
                goto kqiakyymyiosoeia;
                yikyagqossasyqcu:
                okaiokeeaqccisaq:
                goto agwsusimqmoesgck;
                kqiakyymyiosoeia:
            }
            qgyeyyagaeyoequw:
        };
        goto ccqagygkoaagksyw;
        qyguqmkmyqeyqaac:
        qgoaooycwyiyycoa:
        goto igeoagaweewiscas;
        emyuskcwqyscewue:
        $uwqmqcmssaeieiqa = [];
        goto alomqucgmacieuoa;
        yqywgkymmowyggqa:
        cywmgwogisiyymoi:
        goto oogmmeccymcuwwac;
        ookeyiumgkqqucia:
        $uwomkgseoiegeume = array_keys($ikgwqyuyckaewsow);
        goto ioocowswsiqoyaai;
        yiskaoskyyiswkki:
        
        $wkkweuacukumqmya = $this->gqaysymikgeawkqa()->getColumnListing($cgomysauusagiwqu);
        goto akieywkiweasukyw;
        oyciiqiqoqkgoqec:
        if (!ManipulateSetting::esoowymaimwcuecq()) {
            goto mcguyegywqyasmii;
        }
        goto qckqeqqcoawmwwqw;
        oogmmeccymcuwwac:
        mcguyegywqyasmii:
        goto wygeysociiyqokyk;
        gqwcuusyiggisuok:
    }
    
    public function create($ikgwqyuyckaewsow, $ymqmyyeuycgmigyo)
    {
        $this->gqaysymikgeawkqa()->create($ymqmyyeuycgmigyo, function (Blueprint &$aasascamegmwqmqk) use($ikgwqyuyckaewsow) {
            goto qogyssukouuesqis;
            qogyssukouuesqis:
            
            $aasascamegmwqmqk->bigIncrements(self::ID);
            goto kkoukeoyauekomau;
            agwyiymkkwmywcsw:
            $aasascamegmwqmqk->charset = $this->aceaeommyuooiqge("\143\x68\141\162\163\145\164");
            goto qkeyoeyiuqeyicqa;
            ukcoymqsgmcwokoq:
            sqkmkmcmocigewua:
            goto degewusuggmqqeso;
            ogaqcigmoyoqcsws:
            ikoaokuwokyiigsu:
            goto egmauuemqqqqsgic;
            mgkaweokcicgiegg:
            foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
                $aasascamegmwqmqk = $this->gqeeyaqcuukysmes($aasascamegmwqmqk, $aiowsaccomcoikus);
                kquqgyygaeiwkeko:
            }
            goto ukcoymqsgmcwokoq;
            kkoukeoyauekomau:
            if ($aasascamegmwqmqk->collation) {
                goto ikoaokuwokyiigsu;
            }
            goto wgeqwaisweikegck;
            qkeyoeyiuqeyicqa:
            aouauysuwimgygie:
            goto mgkaweokcicgiegg;
            wgeqwaisweikegck:
            $aasascamegmwqmqk->collation = $this->aceaeommyuooiqge("\143\157\154\x6c\x61\x74\x69\157\x6e");
            goto ogaqcigmoyoqcsws;
            egmauuemqqqqsgic:
            if ($aasascamegmwqmqk->charset) {
                goto aouauysuwimgygie;
            }
            goto agwyiymkkwmywcsw;
            degewusuggmqqeso:
        });
    }
    
    public function gqeeyaqcuukysmes(Blueprint $aasascamegmwqmqk, Field $aiowsaccomcoikus, $vkgsqsqqqgyaqkog = false) : Blueprint
    {
        goto quowmcomwmsmugqe;
        meueuqeagkwkoiuk:
        if (!($kokmwkcqkgkewiuw = $aiowsaccomcoikus->yuwwmewqqauckiky())) {
            goto uokwiwsewewgcocy;
        }
        goto cseucimaukwaskwk;
        qcgekwgksmkoamik:
        osamucgweicwoiqy:
        goto ekykiumoyeyamsew;
        kimwcesmkuqqyamq:
        oeoyiakocyacqsys:
        goto cegokyqcmuuwyoey;
        ogwmeoaswuqwamim:
        
        $keuuiqywyuiuegkq->nullable(true);
        goto kimwcesmkuqqyamq;
        sgqackwokosksyua:
        aywsyyewoswacqqy:
        goto kiwacoqesuqmyiiu;
        aqyweyyyygygswmy:
        
        $keuuiqywyuiuegkq->unsigned();
        goto awwyuikkmaaomkqc;
        imcseqowgomyokwi:
        if (!(($ggauoeuaesiymgee = $aiowsaccomcoikus->oiswysuiioecsaae()) !== false)) {
            goto uckqwisqmyeuegei;
        }
        goto semwcosqeukmgoey;
        yayicayasmkmsemm:
        
        $keuuiqywyuiuegkq->change();
        goto qcgekwgksmkoamik;
        cseucimaukwaskwk:
        
        $keuuiqywyuiuegkq->collation($kokmwkcqkgkewiuw);
        goto kucymsiiugmiooyo;
        qwsmwwskogygagea:
        $qgciuiagkkguykgs = ManipulateString::snake2camel($sqeykgyoooqysmca);
        goto saoickmcegceesyw;
        caeiwemymyceqqei:
        qyeomiwmooookysu:
        goto ogwmeoaswuqwamim;
        kiwacoqesuqmyiiu:
        mogweaaaqocouiug:
        goto aimwoikqsqkyicsu;
        qiggceewmyagkisq:
        if (!$aiowsaccomcoikus->oikqausqaykqkmqi()) {
            goto qcgyuksgqucyquwi;
        }
        goto yaieemqskkgmcqou;
        igsweakykqomoqgi:
        
        $keuuiqywyuiuegkq->nullable(false);
        goto kqkcowkuqsuemmmc;
        imquocywcscomayo:
        if (!$aiowsaccomcoikus->kweqqkiwiugikyam()) {
            goto ywyceqcyssuuyauc;
        }
        goto gammkicacakosigu;
        qkusmocauegwwqwy:
        
        $aasascamegmwqmqk->unique($ymqmyyeuycgmigyo);
        goto qwwmqqkoeuywmqys;
        owkgksuymewqqiwu:
        if (!$aiowsaccomcoikus->qumigiaaeieaemgy()) {
            goto gesaagokeamiwuws;
        }
        goto aqyweyyyygygswmy;
        saoickmcegceesyw:
        $sqeykgyoooqysmca = strtoupper($sqeykgyoooqysmca);
        goto quumuskukkcuuciu;
        yaieemqskkgmcqou:
        
        $keuuiqywyuiuegkq->autoIncrement();
        goto cmqmcaowowcccgka;
        aimwoikqsqkyicsu:
        if (!$keuuiqywyuiuegkq instanceof ColumnDefinition) {
            goto goemggymkikoquwi;
        }
        goto qiggceewmyagkisq;
        oeyoiicmckkgoyqg:
        uckqwisqmyeuegei:
        goto owkgksuymewqqiwu;
        iiwuqoagoqgmwwiq:
        $keuuiqywyuiuegkq = null;
        goto esewmcieucesaqcw;
        gkaayykiiqqogeiw:
        $ykiwomimkkuiigoq = $aiowsaccomcoikus->qamkswcgsoeggmau();
        goto qwsmwwskogygagea;
        cegokyqcmuuwyoey:
        if (!$vkgsqsqqqgyaqkog) {
            goto osamucgweicwoiqy;
        }
        goto yayicayasmkmsemm;
        kucymsiiugmiooyo:
        uokwiwsewewgcocy:
        goto auakugikcequsiia;
        cmqmcaowowcccgka:
        qcgyuksgqucyquwi:
        goto imcseqowgomyokwi;
        awwyuikkmaaomkqc:
        gesaagokeamiwuws:
        goto imquocywcscomayo;
        quowmcomwmsmugqe:
        $ymqmyyeuycgmigyo = $aiowsaccomcoikus->mwikyscisascoeea();
        goto ycqcgaauyqmkwskc;
        kqkcowkuqsuemmmc:
        goto oeoyiakocyacqsys;
        goto caeiwemymyceqqei;
        auakugikcequsiia:
        if ($aiowsaccomcoikus->yseywyqacmugimme()) {
            goto qyeomiwmooookysu;
        }
        goto igsweakykqomoqgi;
        quumuskukkcuuciu:
        if (!method_exists($aasascamegmwqmqk, $qgciuiagkkguykgs)) {
            goto eosiakwgiemwwqwy;
        }
        goto iiwuqoagoqgmwwiq;
        gammkicacakosigu:
        
        $keuuiqywyuiuegkq->unique();
        goto qkusmocauegwwqwy;
        ciksycqiaaueqaaq:
        
        $keuuiqywyuiuegkq->charset($guuwoyaeoeeaauug);
        goto ecoygmauwycmweyq;
        caccouegecmukqci:
        eosiakwgiemwwqwy:
        goto osouwwksqimikqqo;
        osouwwksqimikqqo:
        return $aasascamegmwqmqk;
        goto icsukicuomwmqiyc;
        qwwmqqkoeuywmqys:
        ywyceqcyssuuyauc:
        goto soqakmcacqiqamku;
        soqakmcacqiqamku:
        if (!($guuwoyaeoeeaauug = $aiowsaccomcoikus->ogmguwgoqkqkkisa())) {
            goto gucokiskmccmsaac;
        }
        goto ciksycqiaaueqaaq;
        ekykiumoyeyamsew:
        goemggymkikoquwi:
        goto caccouegecmukqci;
        esewmcieucesaqcw:
        switch ($sqeykgyoooqysmca) {
            case "\x4a\123\117\116":
            case "\101\x52\122\101\131":
                
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->json($ymqmyyeuycgmigyo);
                goto mogweaaaqocouiug;
            case "\106\x4f\x52\105\x49\107\116":
                goto eseyciuwmwyauuio;
                qseiiaweiykcwacy:
                yqaqgsyaqomgoowq:
                goto kewsuqsoqkyikkis;
                ayeysmcoemkcsegm:
                if (!$aiowsaccomcoikus->ygswmewosceowmya()) {
                    goto wqiwmousomaigmgm;
                }
                goto cwccggguqewowygo;
                wgicusccasmuiosy:
                qmawgkeuyyqwcmok:
                goto oaqqykskqqqqsqem;
                yoeoiuuuqakicgam:
                
                $keuuiqywyuiuegkq->onUpdate($muegsmmicsqsgucm);
                goto yuyyeiiewiuogceo;
                uikqgasygyaeqcac:
                $this->create([self::geqyygqiwiqusekc($usymcioagieycusu . self::_ID)->qkwyekmiceaogwci(false), self::geqyygqiwiqusekc($wkwywcemusswkgwk . self::_ID)->qkwyekmiceaogwci(false)], $this->skckwsgymkimyuwo()->cokoiaeeomgssqgy("{$yuwymayicwwqiske}{$usymcioagieycusu}\x5f{$wkwywcemusswkgwk}", false));
                goto gsiegqomuuccaoos;
                qkeogqcekgawsgwe:
                
                $keuuiqywyuiuegkq->on($koegqoagisewcica);
                goto qseiiaweiykcwacy;
                aqakqumsuimkkkus:
                if (!($koegqoagisewcica = $aiowsaccomcoikus->miosasgcmguoamem())) {
                    goto yqaqgsyaqomgoowq;
                }
                goto qkeogqcekgawsgwe;
                ksiuacaiaiauywae:
                uemgoaamkymwuiko:
                goto mqcoyamukmaoqwmw;
                skeyqsaqsiwgiyog:
                goto mogweaaaqocouiug;
                goto awwgggeiaceyecco;
                eseyciuwmwyauuio:
                if (!$aiowsaccomcoikus instanceof Foreign) {
                    goto suycyuwkgakgikqw;
                }
                goto kkyumyewcymikswk;
                oqiqyekweaomiwgy:
                cyomeoyuoqywoysa:
                goto owssugkggmiascii;
                kkyumyewcymikswk:
                if (!$aiowsaccomcoikus->iueigwuckeaswyuu()) {
                    goto uemgoaamkymwuiko;
                }
                goto ayeysmcoemkcsegm;
                skeqeeuuemswqgwu:
                $yuwymayicwwqiske = $this->oyeskqayoscwciem()->ogqgmqymcwsqikme();
                goto uikqgasygyaeqcac;
                iyaawicgsuuoykiq:
                $usymcioagieycusu = $this->oyeskqayoscwciem()->aiqioscoyukqgsgw();
                goto ammqgccmiuwcaeuq;
                cwccggguqewowygo:
                $gsmssqouaueqkeui = $aiowsaccomcoikus->uecyuoauykiqqkey()::symcgieuakksimmu();
                goto csoecqymkecmuueu;
                oaqqykskqqqqsqem:
                if (!($muegsmmicsqsgucm = $aiowsaccomcoikus->ucqugkkuiooayqie())) {
                    goto mmgqsmogqmouuskw;
                }
                goto yoeoiuuuqakicgam;
                owssugkggmiascii:
                if (!($smgycasaqmgcaekq = $aiowsaccomcoikus->giqekaueqsgsmkgo())) {
                    goto qmawgkeuyyqwcmok;
                }
                goto mqcgsiaawwkqmksi;
                yuyyeiiewiuogceo:
                mmgqsmogqmouuskw:
                goto ugomsuwwuqsskuqc;
                kygqagmyyqysywkm:
                
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->foreign($ymqmyyeuycgmigyo);
                goto aqakqumsuimkkkus;
                mqcoyamukmaoqwmw:
                
                $aasascamegmwqmqk->bigInteger($ymqmyyeuycgmigyo)->unsigned();
                goto kygqagmyyqysywkm;
                ugomsuwwuqsskuqc:
                suycyuwkgakgikqw:
                goto skeyqsaqsiwgiyog;
                kcieymewycqwegis:
                wqiwmousomaigmgm:
                goto swqkecoseauacwio;
                csoecqymkecmuueu:
                if (!$gsmssqouaueqkeui instanceof Model) {
                    goto goaaoqkgsieiyuqm;
                }
                goto iyaawicgsuuoykiq;
                gsiegqomuuccaoos:
                goaaoqkgsieiyuqm:
                goto kcieymewycqwegis;
                ammqgccmiuwcaeuq:
                $wkwywcemusswkgwk = $gsmssqouaueqkeui->oyeskqayoscwciem()->aiqioscoyukqgsgw();
                goto skeqeeuuemswqgwu;
                kewsuqsoqkyikkis:
                if (!($ykqcceqiqygieeks = $aiowsaccomcoikus->syccewqoeggkkgke())) {
                    goto cyomeoyuoqywoysa;
                }
                goto yeecswicmoyiqssi;
                mqcgsiaawwkqmksi:
                
                $keuuiqywyuiuegkq->onDelete($smgycasaqmgcaekq);
                goto wgicusccasmuiosy;
                yeecswicmoyiqssi:
                
                $keuuiqywyuiuegkq->references($ykqcceqiqygieeks);
                goto oqiqyekweaomiwgy;
                swqkecoseauacwio:
                return $aasascamegmwqmqk;
                goto ksiuacaiaiauywae;
                awwgggeiaceyecco:
            case "\x53\x45\124":
            case "\105\x4e\125\115":
                goto oemkgkauqekgkumy;
                iuoayeiykmokiiys:
                if (!ManipulateArray::wuoqgcwmkicakygs($qiouiwasaauyaaue)) {
                    goto ayeqwsqywosymiwu;
                }
                goto mmmgeukkswewyuoa;
                ygegasgiwgmswaog:
                ayeqwsqywosymiwu:
                goto qiaaqckmooiayuae;
                oemkgkauqekgkumy:
                $qiouiwasaauyaaue = $aiowsaccomcoikus->gkwkqmwweiawigae();
                goto iuoayeiykmokiiys;
                mmmgeukkswewyuoa:
                $qiouiwasaauyaaue = array_keys($qiouiwasaauyaaue);
                goto ygegasgiwgmswaog;
                mswucuuigmosimuo:
                goto mogweaaaqocouiug;
                goto ayuwkwsuioumscca;
                qiaaqckmooiayuae:
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $qiouiwasaauyaaue);
                goto mswucuuigmosimuo;
                ayuwkwsuioumscca:
            case "\106\x4c\x4f\x41\124":
            case "\104\x4f\125\x42\114\x45":
            case "\104\x45\103\111\x4d\x41\x4c":
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq, $aiowsaccomcoikus->siamswkmsqckqgeu());
                goto mogweaaaqocouiug;
            case "\124\111\115\x45":
            case "\104\101\x54\105\124\111\115\105":
            case "\124\x49\115\105\x53\124\101\x4d\120":
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, 0);
                goto mogweaaaqocouiug;
            case "\103\110\x41\x52":
            case "\x53\124\122\111\116\x47":
            case "\x56\x41\x52\103\x48\101\x52":
                goto agicooogqyeyoyqi;
                wesooeakucoqmisw:
                goto ecomecoqggyssmsk;
                goto cmwaakkwwqameeec;
                cecoqgqcckqoouwy:
                ecomecoqggyssmsk:
                goto wcuqgoiokweuwycq;
                agicooogqyeyoyqi:
                if ($ykiwomimkkuiigoq && $ykiwomimkkuiigoq > 0) {
                    goto gswoagoguesomwyc;
                }
                goto osoukeawsoyqmwgo;
                wcuqgoiokweuwycq:
                goto mogweaaaqocouiug;
                goto caskecmuwociuumq;
                cmwaakkwwqameeec:
                gswoagoguesomwyc:
                goto ykgkuccgawoyquga;
                osoukeawsoyqmwgo:
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo);
                goto wesooeakucoqmisw;
                ykgkuccgawoyquga:
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq);
                goto cecoqgqcckqoouwy;
                caskecmuwociuumq:
            default:
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo);
                goto mogweaaaqocouiug;
        }
        goto sgqackwokosksyua;
        ecoygmauwycmweyq:
        gucokiskmccmsaac:
        goto meueuqeagkwkoiuk;
        semwcosqeukmgoey:
        
        $keuuiqywyuiuegkq->default($ggauoeuaesiymgee);
        goto oeyoiicmckkgoyqg;
        ycqcgaauyqmkwskc:
        $sqeykgyoooqysmca = $aiowsaccomcoikus->gueasuouwqysmomu();
        goto gkaayykiiqqogeiw;
        icsukicuomwmqiyc:
    }
}
