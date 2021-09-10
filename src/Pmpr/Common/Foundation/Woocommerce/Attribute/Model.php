<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Woocommerce\Attribute;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\ORM\DB\Model as BaseClass;
use stdClass;

class Model extends BaseClass
{
    const ATTRIBUTE_ID = "\x61\164\x74\x72\x69\142\165\164\x65\137\x69\144";
    public $timestamps = false;
    public function ckgmycmaukqgkosk()
    {
        goto ywswgoesmiwgckcu;
        myikgqcgseikimwa:
        parent::ckgmycmaukqgkosk();
        goto ooyyuaswogikyggu;
        ummiwuqqisqgwoco:
        $this->oyeskqayoscwciem()->usuqmwksoeaayaig("\x61\164\x74\162\151\x62\x75\164\x65\x5f\x6d\x65\164\x61")->muuwuqssqkaieqge(__("\101\164\x74\162\151\x62\165\164\x65\40\115\145\164\141\x73", PR__CMN__FOUNDATION))->guiaswksukmgageq(__("\101\164\164\x72\151\x62\165\164\x65\x20\115\x65\x74\x61", PR__CMN__FOUNDATION))->myysgyqcumekoueo()->okgmqaeuaeymaocm($quowyokcwswmuois);
        goto myikgqcgseikimwa;
        ywswgoesmiwgckcu:
        $quowyokcwswmuois = self::akuociswqmoigkas();
        goto ummiwuqqisqgwoco;
        ooyyuaswogikyggu:
    }
    
    public function eucukwckumgiyyww($oyuikeusicgqgwak = []) : array
    {
        return [$this->mekgiwmysqksocmy(self::ATTRIBUTE_ID)->gswweykyogmsyawy(__("\101\x74\x74\162\151\142\165\164\145", PR__CMN__FOUNDATION)), $this->ymuegqgyuagyucws(self::META_KEY)->gswweykyogmsyawy(__("\x4d\145\x74\x61\x20\113\x65\x79", PR__CMN__FOUNDATION)), $this->ymuegqgyuagyucws(self::META_VALUE)->gswweykyogmsyawy(__("\115\145\x74\141\x20\x56\x61\154\x75\145", PR__CMN__FOUNDATION))];
    }
    
    public function aawsuyueaaimeqsm($ymkomoccmymcoiea, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        goto ugwqwcgoswkkwcee;
        ugwqwcgoswkkwcee:
        if (!($ymkomoccmymcoiea && $uusmaiomayssaecw)) {
            goto cigcsyiesymkuywu;
        }
        goto kgigsakiwsqqioim;
        swmkkiiauusieuqw:
        if (!(ManipulateArray::get($icwicymcioeyeyek, self::META_VALUE) === $eqgoocgaqwqcimie)) {
            goto keigessgsgawiyyo;
        }
        goto sgqaaocqgayiigos;
        wmyagwwmquqeyyok:
        keigessgsgawiyyo:
        goto mocauoaugmiuacuu;
        ycomuqussgiacuom:
        cigcsyiesymkuywu:
        goto yuuyqoyguaqsswey;
        kgigsakiwsqqioim:
        $icwicymcioeyeyek = $this->ggckwgeqwseoemwg($ymkomoccmymcoiea, $uusmaiomayssaecw);
        goto aosmakasyommmioc;
        eoawekcguswgyykc:
        saueosiwcgqsmgmk:
        goto wwiasiiquqqmmqay;
        wwiasiiquqqmmqay:
        $icwicymcioeyeyek = [self::META_KEY => $uusmaiomayssaecw, self::META_VALUE => $eqgoocgaqwqcimie, self::ATTRIBUTE_ID => $ymkomoccmymcoiea];
        goto iwkwesmeiywuuugk;
        sgqaaocqgayiigos:
        
        return;
        goto wmyagwwmquqeyyok;
        iwkwesmeiywuuugk:
        kgmwmmiemqggaqeq:
        goto akymcmmokgskeqiu;
        vgggsmmgmwumikmc:
        $this->gscuuyuyauokoyuo((array) $icwicymcioeyeyek);
        goto ycomuqussgiacuom;
        mocauoaugmiuacuu:
        goto kgmwmmiemqggaqeq;
        goto eoawekcguswgyykc;
        akymcmmokgskeqiu:
        ManipulateArray::set($icwicymcioeyeyek, [self::META_VALUE => maybe_serialize($eqgoocgaqwqcimie)]);
        goto vgggsmmgmwumikmc;
        aosmakasyommmioc:
        if (!$icwicymcioeyeyek) {
            goto saueosiwcgqsmgmk;
        }
        goto swmkkiiauusieuqw;
        yuuyqoyguaqsswey:
    }
    
    public function ggckwgeqwseoemwg($ymkomoccmymcoiea, $uusmaiomayssaecw)
    {
        goto iwigaaoiqyugwacm;
        yiuwqcqesuysmegs:
        return $mksyucucyswaukig;
        goto mauoymckskucuemc;
        yqismiumwaaeqgwu:
        if (!$mksyucucyswaukig) {
            goto uqekawymqmyaqaao;
        }
        goto wusuosaiqosakcqq;
        iwigaaoiqyugwacm:
        $mksyucucyswaukig = $this->oqomcmyuuakigusk([self::META_KEY => $uusmaiomayssaecw, self::ATTRIBUTE_ID => $ymkomoccmymcoiea]);
        goto yqismiumwaaeqgwu;
        iieykwekyukgsias:
        uqekawymqmyaqaao:
        goto yiuwqcqesuysmegs;
        kaueiekkeciiaswy:
        $mksyucucyswaukig = ManipulateArray::set($mksyucucyswaukig, [self::META_VALUE => $eqgoocgaqwqcimie]);
        goto iieykwekyukgsias;
        wusuosaiqosakcqq:
        $eqgoocgaqwqcimie = maybe_unserialize(ManipulateArray::get($mksyucucyswaukig, self::META_VALUE));
        goto kaueiekkeciiaswy;
        mauoymckskucuemc:
    }
    
    public function eukesgmuogimqwaa($ymkomoccmymcoiea, $uusmaiomayssaecw)
    {
        $mksyucucyswaukig = $this->ggckwgeqwseoemwg($ymkomoccmymcoiea, $uusmaiomayssaecw);
        return ManipulateArray::get($mksyucucyswaukig, self::META_VALUE);
    }
}
