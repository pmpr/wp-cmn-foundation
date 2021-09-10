<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Woocommerce\Attribute;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\ORM\DB\Model as BaseClass;
use stdClass;

class Model extends BaseClass
{
    const ATTRIBUTE_ID = "\x61\x74\164\x72\151\142\x75\x74\145\x5f\151\144";
    public $timestamps = false;
    public function ckgmycmaukqgkosk()
    {
        goto ywswgoesmiwgckcu;
        ummiwuqqisqgwoco:
        $this->oyeskqayoscwciem()->usuqmwksoeaayaig("\141\164\x74\162\151\x62\x75\x74\x65\137\155\145\x74\x61")->muuwuqssqkaieqge(__("\101\x74\164\162\x69\142\x75\x74\145\x20\115\145\164\x61\163", PR__CMN__FOUNDATION))->guiaswksukmgageq(__("\x41\164\x74\x72\x69\142\165\164\145\40\x4d\x65\x74\x61", PR__CMN__FOUNDATION))->myysgyqcumekoueo()->okgmqaeuaeymaocm($quowyokcwswmuois);
        goto myikgqcgseikimwa;
        myikgqcgseikimwa:
        parent::ckgmycmaukqgkosk();
        goto ooyyuaswogikyggu;
        ywswgoesmiwgckcu:
        $quowyokcwswmuois = self::akuociswqmoigkas();
        goto ummiwuqqisqgwoco;
        ooyyuaswogikyggu:
    }
    
    public function eucukwckumgiyyww($oyuikeusicgqgwak = []) : array
    {
        return [$this->mekgiwmysqksocmy(self::ATTRIBUTE_ID)->gswweykyogmsyawy(__("\x41\x74\164\162\151\x62\165\x74\145", PR__CMN__FOUNDATION)), $this->ymuegqgyuagyucws(self::META_KEY)->gswweykyogmsyawy(__("\115\x65\x74\x61\x20\113\x65\171", PR__CMN__FOUNDATION)), $this->ymuegqgyuagyucws(self::META_VALUE)->gswweykyogmsyawy(__("\x4d\145\x74\x61\x20\x56\x61\154\x75\145", PR__CMN__FOUNDATION))];
    }
    
    public function aawsuyueaaimeqsm($ymkomoccmymcoiea, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        goto ugwqwcgoswkkwcee;
        eoawekcguswgyykc:
        saueosiwcgqsmgmk:
        goto wwiasiiquqqmmqay;
        vgggsmmgmwumikmc:
        $this->gscuuyuyauokoyuo((array) $icwicymcioeyeyek);
        goto ycomuqussgiacuom;
        aosmakasyommmioc:
        if (!$icwicymcioeyeyek) {
            goto saueosiwcgqsmgmk;
        }
        goto swmkkiiauusieuqw;
        wmyagwwmquqeyyok:
        keigessgsgawiyyo:
        goto mocauoaugmiuacuu;
        kgigsakiwsqqioim:
        $icwicymcioeyeyek = $this->ggckwgeqwseoemwg($ymkomoccmymcoiea, $uusmaiomayssaecw);
        goto aosmakasyommmioc;
        wwiasiiquqqmmqay:
        $icwicymcioeyeyek = [self::META_KEY => $uusmaiomayssaecw, self::META_VALUE => $eqgoocgaqwqcimie, self::ATTRIBUTE_ID => $ymkomoccmymcoiea];
        goto iwkwesmeiywuuugk;
        sgqaaocqgayiigos:
        
        return;
        goto wmyagwwmquqeyyok;
        akymcmmokgskeqiu:
        ManipulateArray::set($icwicymcioeyeyek, [self::META_VALUE => maybe_serialize($eqgoocgaqwqcimie)]);
        goto vgggsmmgmwumikmc;
        ycomuqussgiacuom:
        cigcsyiesymkuywu:
        goto yuuyqoyguaqsswey;
        swmkkiiauusieuqw:
        if (!(ManipulateArray::get($icwicymcioeyeyek, self::META_VALUE) === $eqgoocgaqwqcimie)) {
            goto keigessgsgawiyyo;
        }
        goto sgqaaocqgayiigos;
        mocauoaugmiuacuu:
        goto kgmwmmiemqggaqeq;
        goto eoawekcguswgyykc;
        ugwqwcgoswkkwcee:
        if (!($ymkomoccmymcoiea && $uusmaiomayssaecw)) {
            goto cigcsyiesymkuywu;
        }
        goto kgigsakiwsqqioim;
        iwkwesmeiywuuugk:
        kgmwmmiemqggaqeq:
        goto akymcmmokgskeqiu;
        yuuyqoyguaqsswey:
    }
    
    public function ggckwgeqwseoemwg($ymkomoccmymcoiea, $uusmaiomayssaecw)
    {
        goto iwigaaoiqyugwacm;
        kaueiekkeciiaswy:
        $mksyucucyswaukig = ManipulateArray::set($mksyucucyswaukig, [self::META_VALUE => $eqgoocgaqwqcimie]);
        goto iieykwekyukgsias;
        iwigaaoiqyugwacm:
        $mksyucucyswaukig = $this->oqomcmyuuakigusk([self::META_KEY => $uusmaiomayssaecw, self::ATTRIBUTE_ID => $ymkomoccmymcoiea]);
        goto yqismiumwaaeqgwu;
        yiuwqcqesuysmegs:
        return $mksyucucyswaukig;
        goto mauoymckskucuemc;
        wusuosaiqosakcqq:
        $eqgoocgaqwqcimie = maybe_unserialize(ManipulateArray::get($mksyucucyswaukig, self::META_VALUE));
        goto kaueiekkeciiaswy;
        iieykwekyukgsias:
        uqekawymqmyaqaao:
        goto yiuwqcqesuysmegs;
        yqismiumwaaeqgwu:
        if (!$mksyucucyswaukig) {
            goto uqekawymqmyaqaao;
        }
        goto wusuosaiqosakcqq;
        mauoymckskucuemc:
    }
    
    public function eukesgmuogimqwaa($ymkomoccmymcoiea, $uusmaiomayssaecw)
    {
        $mksyucucyswaukig = $this->ggckwgeqwseoemwg($ymkomoccmymcoiea, $uusmaiomayssaecw);
        return ManipulateArray::get($mksyucucyswaukig, self::META_VALUE);
    }
}
