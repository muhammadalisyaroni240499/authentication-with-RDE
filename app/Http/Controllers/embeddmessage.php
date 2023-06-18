<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use SplPriorityQueue;

class embeddmessage extends Controller
{
    //
    public function index(){
        global $bitstream, $original_set, $h_reduksi, $capacity;
        $img = imagecreatefrompng("storage/coverdata/_bactery.png");
        $width = imagesx($img);
        $height = imagesy($img);
        $message = "pvjalh dygyel flbhbd gxejea tduroe ygtztm koouvw uyvvje lnuabx myigcy ytpcje eiioev ihhxef rcdgrm eyxpsb ejxstx rmjkox ywxzns gatqsu rrhsty idiidw hpoass pwomuv lhjczl sskjxc qmmqha cbqikb cycqnl feqdjn yxsmnw aangxa jltinv xpwmpv cvbneh vnvlay nciffk oxibht duqtcu uvgqnc fcjnyl tmqflu mjcuzw lfelnr gpxtni xdbjmt mrgzty nfmaek exbckt mxfkbg ioaghi pmxilx whorau gvvpzr olzdpd dyyqyt tmawwy iqfvwo ntjlpo fxmbpa vcpchz ramuge gfdmwk vtjqah sanxgj qriqaa mrtgnl gfopcx spvgdc uznlji nfsgpx dccluq xyrbtb usbzcu megjnh lwjdbd dhjppj dbycov nxkmik bdnqwk runbff bdlipt tskvrx pphzup luzwmi wbyxfu vohosu tjmjjo qkkxxb irkczo neajml nisvlp ebckpe vgobxh zvsgql ikkkut urngmp syxlcc iuxgfz jbqgul zfkydo rhqoxm pletmh bjcjtf bitzil fzplgt nfmwtf efthcd qxnlos cjymrh wmwrtn puaids zrhbmq lakyzm gimexq wbqvam pdanbx plafnv qwaljm psecdq lbhxvy fiimhb cocwzs wapxtu pxmiuu quhqfj zqlcrh jszziv raadji yhhlyg lpeytn zyytip mijzri tkdyux oufeec nzzsrn qgdlvr iwrrrt ywcwmm qogxhm jknmjl vfazeh oqhzya iwsjyv tbqlxi ikxsae cxplwz pdpgvy drrasu xdlptm tssfxg nmzeal irydzd kjrzno xbmdva aqlgvt yhymzt wmrixp hsfcyd ffbhny uvlpkd lrjqly tomflf reeygz ywqgra elfpsj gwvmlc tiopkr eyotgg dgrfhi orlqfx zgxfea efpnsp xllkcs ldmgrf ntvctd wwxtwz smoher ljqpzn jlonox rzcvgu lqlnzr jnxkzq mtimdb ftdbmi gpqvpq qgqkce anvkss xiveah lseuhh ikqubj kjgbzb zpjmxy moeedo diqail nypyqm tfnfpn cgtjgc lnjdgg vtxqke nemzci qsnenp sfsdea phjmnm vjvmol ehhdes ptwjdm fflqfu ngxpug yercum xeuzck uyloal aihhkx uvksad hkhsgx tzwunz bshuro plahmy ydajgj bzjied hisgkr rthknt xwrolp uvujqe dyzbax hllfdp wtseif qbrtrg ifhzjc perttl emtqwh abmpva tckekr qbtblh nhwmls cncdmv vioayl wakjcq sjkayt kansca rmcifi ccaeyk itxouk huqagz hxuhwa mcgxnp slutts hcrnkc lfbgsh fdpucp jubovc zlxrnd zafmqp odieyn dosfou qomfky dhdrno nbwnjn ugrurl gcqhfa bodmyu kueibv nmxtay ypzwbh sbyzhj yesxfx hpyqnd zoxqev jopaqu bwefpp fktjgf kxsckm biudca qqkcoy hopvyf udcman mistnp izdflx ezojup csxgkl turltp ohhvbo mjezba iyzkhn jibyux ydfgmg tawjpn xhdpjl kdopyo nmlmgi sjsecw xawcvc ddhvpt rqsyww dpgqbd oqtbmr dyunfe xbvrxr qwbbpa qdwqcx gtqncg bzcfcz gduabg chjmss wsevgp urafvf lmeced jndscg taryxz bfjmpn nmjfxq budrnb mngjvk bwqpdq bnpuqp vlvysy eeebqj wbtyho huedpo mmwkya nuyczk krzyjy hgmldm qhdgkx kymspx gcngfs rwrhxq eiibqk liexdr phoxsu rhtbrg zwansc sjqswb rwyzcg moiyrc cbbtil mwpycw txjtti uvjsrn ereojs jsqaqq qqskwf bbeluo vvenkd mcyahy fdnbft newwju xwpypz nghvzd pbsvag saqkoy bwiolk txprwj dxrhic idyham egfvhi kqraaz nscnab lkheet shoxlm fmdyii ozpjbj sidlip sqnmwk fkulmk rrefjw paihrf tsagyz khgksd okexzt ylqgbi wsmmly edclvd woupxt jzrwyt qgsczq dyouws wgccgm qhpjpk onhogj vwfyrr lzjzla duexjb rdemvt wetaue enyolz djcaio ivxvzr vdjejg ewalwj hrinsv mergtt qrxsqc ircwif ezrmag ntyqfg bwljkq xznuoz nwqhxy ghrkug tqrepj ewrcwz qqkecm ebcvfc uyvupn lgsecn tgecka oxdhqu curyxg ysxtjg lnvueb gsldgy rehirw tnvdxa rzwype cjodpd dheutq ethelr gxmnex vanhqj kdmadq bnyxww dwyeia zlusks gzastt cmfipr pmuuvs yjuiex ctpkdk wwycod xykuuk yuxisk seorcq emosko pxueuh rlopqb ezpvwm tovijf xifbvx xigxrm rafgbs ldixwv voomke hlexyu fgpvsw jueouv oyodpr jncdqf vqdeqn mvfare aidizq jynjdx xlmnzp libeuq arrhis ztntwa lmyfkn aoxtgh jclnym ukfhxd ydvzkj xdvcbf xaurcz pbkmla picajb kacblp qhohkv kmpntq afmaan mzbavy xnplwv rygfez tzeety jejoqo aqufpv dceqfz eqznhv etbrhi xlonio hdskpr dbaily oyqwlj bcqznv cgxsre yznhuq dxbjoi dgutic lwlcip gggedi czfxnw skcukr zerdtd bipoer xszhnf zwsivu gghmsb vgxbhh xqogae xxrxqn hqrley xfzbli wvwcyd hrrrym prqmpc dnhcsf pidjii bgidsy cncfrn qdzzzl ccawog nmkmqm lvhqtn rrbubp ibrbmv zdwgas rlziac asaivd dkzxyz kicsee yddwom askiaq futpcy bodred gdfjzo irgvya rpymgf axqtok fnleyo jevpzm twjfta juhvlj lfqsrw ifwntm dtuhou sbrizi nquwfi imreyv vlgyrc hneisd vubdxi pslhgk uwjmyt xaqkso ciproq ccrjte ysasbf xhneru cdxsfv rpuxhk aktxhh pbywei dcwxcp ajgaqt fmcqdi tswstx ojgnqz yltvcy mieevt iqhyfz mumypq cadili ljxijs khcdil nbkebm urvqvp deybjk ellpfi wgggnv kwtkhc mhrnsl khxiyj oshkaw xetkgo ppbpdw pcnfpk ybayid iuxvuh zalzeu dmdydn iqeblm xxhzoo ahsgtz uezwfc yedxtk ivlacf snrpck rgxsda llbbmm skyiuc lbhtyw wzbcgc avpypo cywrhw zixhus txzhmu yhryqs pncxub htkfrs ysrfwy srunil ipeyca iupmix luyavm xhsoiy lioqua ufyaac melezt ntmihe yqvolk oezjxh ubljnl ltdsfv eqxfkq idomon ftifat yubsei vzpxem quhytn zbwtvl phdivg dctxag qqystr hmnyaj ruuayj dqiesz skqclz voigmc huoyjw txknhm jqmebb giioim fmtnpv qsrdqa qkslzt vwhvqd ubkmpx xkcvlv sghrke btogbb msgdhe rbszie kribbw wnxjwa hiphri jjkntz uqslqp iouksg lnqgwd sgkqix qcbvqo miqvov fypqcr ygsief vezddj dipnwx pywuii njmgnx dklonl jvypam kfcxyg tgedkr insrin xcseui ehotuu esrrxs inqcqg jkpqwt blnqkk gywksa nvwatj jgstdj cmduka dhvhzc ssexkm cczxks jssnoe zszpcz hsamlr nrcjku alihqo scnqhk avjamt zyjern eohrfv vaddev cjuryb jvlrml cezbxk dowbip rcxchc kfjslt bjiryw sgylwb ypozkq uscjbp odewim kgfsjs ylxtlo qognte oqchzo bpzaje otpeyk nszfsr niorkl fgpzzz hgyzjk ddrrvn ifahww bdomoq vsqzzf omrczp rrsajk wkevrk eelmjd fhhqjf nhwywb isbyuu tddzxv xzumes xzkzhu vugjxk ougakv cumspm fzlkcl plophw ztuzac uvdynh ikbtql bqtmbj dtdfzd xqhtcr rmgpll wgjxaf lzzlqc lfdhcw rsnwoe btchcf cjvbht izxijn omkvxd qvjavk orwgty hkdytq danoyp herkce apzpbm gqdeqa lhaazb ekyiko sfflbd addqpj yrltwn avntss ekvvrf wrkpxs vskpql khjozx yngoir xlpwsc eeohcp nfjkyk eynjvr eombuc lgqrns srwval zrjuql qwfobh itmwxz vsjhzo vwcdgg luyosv balovv rmddbo frjbqy gqawsy pgiott clfcfs tpersr wfdcik lglnvp ifnrzn vojqqg xafsvh napusv wmyohp bysclo ewmqpg yvgtfy tsjiwm fykgnu mtcttj hxpdnh ybqlmz gnynep rfwrxc zwerfp fdunyd nckcmi runphm naviww qgvbnq efuomi hssvgd zkzleh cwwtwc wddhzb eucqzl lgbxjr yfcmsr cgtsdh hdvuzr xonvtl jdbcqz wyipnf xhegnw qmtrxf qtlrga zmqtyd txrbad dyalhw xtfklr yrudkm tlumyc lioqgz mqvdok cvsoir hcemrc jqljpa kuqijs knwibd qftiti upvoho vqbikv dmujpc vawoca hgkxyl hqenyu mllinf fskgct kfhtoe uoickg pwlngn gwpldy kfdtbz dpgssk gbfftv eibell xufjms vpvler psjcop twjknb oqikbz iinngg eeilln nokcfw nseumq jzrfom vbkrwk tzzdze wqqdpp ygbtpa qrfdop osgzfy lydjxf ofvwtr bycpad iqzory svbgma mbisas fzxmhl vlbcco qxekxy wdcyej pgpeik zftzjo jpymef thjeox oanmvu uobitx mcizcf grjmmj jyimxf uagdtz rsgpfp jewyfn kkdwoe saoase nuvpso zeerxh ccanfe kbzsnv sqdjsm xiwigq khsawg wnpcsh ipamqf exonmn tdssgm mmvhnq mmuskp lzwbpk uhcpbl qjleso wxwhbj fqapuo sdjhvm kfwamb ewqfuu iqojyw cmbxcc ucglcp jkyfej depsaz uirmbk zslcrs gsmjek yqqjnd rvfbou nejnye jvnjrk ugnulo fxsnmu lbyymk miwlcp vygrzw yxdvcz lgoece hrvzgz lxtwer xcnmpw oxqour pwkbmv xntyqf bezlux hilwre yfbobd arbygu tkfdwn jgjehj uzoqcf zfdxem mejmdz bzkggk bunrje npfddb wjsufw gungbc fnffjr mijwwu xdnwjb cshvyo rywmes zyeyhj rnzeql tkrrka exztuz nmwoax woqfbp dccayc sgvrbm vihnkt rfrmiq sjboyf ssxver oopjcq aotech btvsyo vhjgha sbgskv fclaah vmvnxd eqdkzq diofmm jjgnpr cdhwif oadyzl aqojeg qwtliv cafcom gzniwb ghfgqg mefvri qwnitd galkzm aiexak hhpfyc wkdczw bpnoow zsihka veubkw dewfga pkpgpm itppaq kskmzj xxlujj xiwwvo pehscf chhhqi egiwyo slmmjo jlznjo zpskqp sosveb ipprtg bomdnj oikxsb dwinxr xivamy qtacdq txukgy hduweb crkhkx cyyown uqxrlv xdiduz cijouu jdkzuq hgsiqi omgenf kitphp hqoves tbtfha wkzrfg nkkows pgmibc zkryfg ksrhie wbmqai jmflcs qjkitz lgkocp tvjjej tovylo lbshaj pzgefx hiamzx nfopwg nchscb nzjoqh nfituu euwhwf rsrsbc yorihp volnku adfsjh sscuat myiken vjthyj foqecl suawyj icwdgt nqwyxo imngrd wkabry ilutox yrravg lorfib sbqtnc csyjvk enkzkc sihugb kpckkd czutfp qoshyu ezatec mvbjgx saqmvu omyyyj unxkpi zasscz rnficu hsvpmi rfcrph dmujkv uqsdpm qqdmiq edeoqp tsmcsl grfdmx odejkn mrmuck ckbkzh yjmszw bxjykg mqotyo wvopxa eeuwpw htlrbc dacfrj gofddz ojtqik giyyaz obdsrt dtocut jtqukg grfhcp bwswnv lyrunw kjqilj lkcbte cmulzg banmvd pymccg qtqdua augoru vtdxzs reiesg adqruu bjhptw duworb cocqrb dqtdmy fmcmsy osfbos zmtwke hnymyz ovdfsv lakeau lngzck rbavho ixakwo sfasqs bvigwg lbyoto enynxv ufphxo kzmyob vkwbkk aijkrs equihi membqn qvqsev cclmqe ehckuu wfzddl jicnwk jizgpw gttqjv pwxavw vowujs nspqzl zepuef fxlgif ojgovn vxqyuc dnmhvk gdxcoh srrvgd ryssof iyshqm zsdbbi biiujn xocyny xwysuz jwoazl zmpipm wmhxxr lhxdxf ryjgbh hxnfyu mobzaj pljmjv htxxtg icmxbz nuhcoh luihhn pdgwwo booigh bbtetq xxbemu gcbmil cwusri dviels aqhbfw uawukd vgopww giergb vxtwmw ndirsq wvwfhe pqkwgx cdfzha ymprvo chlhfb nntkav uddekr wpfznj gzcher miinia bibhhp fqqcxw lxhubw yohpyi garsqm rwxdlr bxeyjg tmqtig yzsyhb klajvh cpeoxq acohto acwzqb enzjjx hedqzf oabszd hcqcju ezguwj ylbvpm lvkvua zjyrft ahowqc jsuhiz rvqgix pjjnpm pupfzh mttxmp ppflui asxfpj bpcumh iwmjiq uywhun iqnowr txnzut bqwctj xdgjgj iwzhma rfjphm ahpmfa ebxsor xmofxl rltzra acdzyb jyecxx skpuiw nzrput jaukra uopzhe itpfnl nxrxai guwpwu mnmybu owhpou ppxjqm umyvtn zckorb vexlcq xhqdfm kvyqrp ecudor oeqsga kjepfj diaryd giomdm bfduba lvalmy xyenum euzvjy uaxpsy kdluvh avhpka hroudn htmafr qdymrc sjqtnx zmiogm uyrhca riutzw gekipt jwicyq ymikih euoinq ehgtyp ykjeck pakmos rmhasi qhrtgq getjrz wkljci ooktdj oimawm glpvef bcypoo yxjngu kiuemt zvlnnm gwurpz buswtr svsxez vfhxlm wpmlce skxerb kqyqwo cmrinz xjkheh pzupqn lmbpte evpocs hjjeuf jbhfio zytsuw vhxmdx tbzacm zjpbqx uhlgwg uycgmt jmufhz jzgtsx fzqabz rfzrib pauyds efynig jqdzji ifsght ujfrpr ukytbo tzbseu zprbfj kzfjzu rbohaf vyqyci udjlzd gqvetg ffedsj vdcriw sdmuim cejzpr ceutzp fiibsq qkuyxs cknjjw mebepi wwdtrp zkidan dhwbun zfwfse hgtiki frkfhr lizezq hwtpmx gylsri pisbhl fhixou nlzpld onigcg psbyiq rxjiip etevoz cmsxcz vwfbme uhmfbt nfzjzr piwfdt zfvopj qsikcv sdeiog yohnvc fnjgyj wkfiij vczsqj rsherj weggsc tbsube baabie vwrhni pnogsj ehhwdf sithok ujztwx abaznn kakhhk yarbbn xgpnnd btcglh ptwxtt fokslx aectjy zzmbhg ycdmrd pthvdd fukkze aydnkm cntvmc zqnehb crgygk oisulj yfntmo rbuifs ubcxrl mcweii acppxr oixhjq dhdheo ylckwd ruodkb amdoaq sywpxy rrkirt xcskvn gmlxfw uvrant pvxakx uheyln dvbseh wekdvv ricfct eyjptk eqoktf qbclix maqleu mdqylu iuduix idigkr tkqivm pkncvf bviuvg xuoqvv xlswik jjncft hlvowp epiker fcllzh acodpo ipfghr qaswbp xwziwo cqdqat qpfhzy nvxvjm odsfsl suveqh bktchu jjypmw cojnsq hwfxsi dqpboa tognkn cusmlg eaomyc wejgni fdkcfy yehzqe ifospo hyitmd kqhimn jnewwv pnilkz mvhhjw efgktj sarrkf wknlso mylcmx tarzri cevpax cmylww adhuee mmbohh ivnbcl buxnft giaqtc sgvary kdqwif nyfhkg kfwwpp kogwdw hjerwe klcphb jqqfbt nrsqfi frocny tmgryo bbuanx wyizsu mmzhry qzlmsa nurblf ebtbcj bdwzeh znvhfz akxngz ppiwel qolyjl jdaabx hgjslv oeijfh nzwhck ogauah xnpolz gwvnzt ijtsvk obrstk vfbnog adfxyu wbwybz gzwibo kijava pcdrzr diovqq ecrlmj ksbipt gxdibl eowdtx nkwrhs fyejau jdalcj fzrcpf cluzsm vscynw edkmmk dpbjel cnpcwu xhuoop criuzp regbed ectlth dxevnk xqmdxp gbwfdk crmhns wvvnli xdlqlg cwrnmh kxfcfh vanqfv piwyce duzuok jzcjvr nforev mvtiks dlzwsc tfcnxc tbyorw ofepph orxbrg suczap arldbw isjvut kvanjq stggxn tmqdsz jcdvnh eqvxks pwityo mywyso wussox viwhtk gdprfd twkhhk ubombc avfgsg fbmxrn eloizn liufjh uttkge vpmuqu wsyric bsjlez ogmtfs pqjxcj holgfc hwvsma idxmka vcloue dtmmtp fvujlr tvwriv nvydvz sngucu cezhmh bcctlc fjgcdq tsdzkh lskxst edrmvp gvnnov zjzqle tnzuxs kvedjf tuzqtw opando cfbspo emojyo gqcfgu dadtaz mfjsbt nchvkb okawzh fhocrg hfrxqh kdcaiu mskiys rovyqs bvwwhg coxait jbyitb zpvxkb ooekfh fdyygw vkpujn odnecq jewtha tbcojn bjlvdo puuwwn xkeynf csjyoa gubhbq czpulx wohste hpljyy hczxbp iuglzu hpwjmf awhsio hrflsq vyewnh jsvzma zddghv hlnkez favdlz qpbpot oglwwe ezjziu xonbpl mqlcvn ujjvje geacqs bqxbcv noyuwv tydzto yfmhpj mymbuk vmzlti qmgtrz hkqmiy rfwbcj asmwvo yauyyd fojotc lbtedf tjxkvf cjfkau znoaqt srydax gnafcj tzeani rhtrzo aeavkj uiddym dkqyrc kuzcvq zptaun ssoxwj dfmdqs kbbyaq vmlsxl eflvwa ffjzjk dmertq uvbidi uuzskf ctrods hoaifx dtzqdi vqqjzb ozihyg izcqiy ecwjdz phjbsa gryuee sakusz uahevs ixcytf iuswpf beyayn ogvijx aetcrt ykkbjj gzbsje xsggfe lgaqde sxdeua kmkvku samnkf qmrkmj cojhxj pmmylj hlmvhv sgktxd yghfyp uegnvw vbojba dtrqgn wuyygh adsctz ajlykr minkla rhugbf koyrxg todwgu ccooby xwsnzy ofwrre gyqgzc kkmwms yiubla wwukca zivvnw dyoybj jshpbw kabgcr feymsi pdofpk lewagh grbwvk nkefpn oxrvrl ehubjm puirrc imksnm eoenyb toyvim ctewwd qcsjpj uiwgky wtvmcg kwisit uuurmw hxjqzd awripl mkujjj vsqovq mjgcen vmkbtq qfurrg qoeubt jnhsbu qscpvw zzlyam oquuhi rltxtw uocwwg tuaxos rmqcve gipqqw rkfpfx hjnyxz zpuvys idmirs mtzzpy tbixgq oplrqs dmukcu ycjswp kyqwdq weymgn mtopum pyefpq antqsa ghskqa fmjvbe akccar bqvndw mokrma kgvqkf zmzuhl khkndh coxyws chvrmw brfxki ekbefq uhpewc cyqzje zcecdm synvhg zqfixy oedngd ebmghx pxgqto aqpglk pfckpi dolfin fnfsus lceuqv rvzlrs msarmg qvqlzz ftsswj tulfyb blzudr cjxoep ietjla poffyl ubzujf mzdveg joufxa gqsvxk pxftci mvrwkv hwfkav pyfjkj fzulyq egnuyg gsyvve umunez oogazt myvmxs duyvtn joawqi efyxvb ctjqes tcuyky blnvqj pnlboq plgtri lgmixf kebent tgmwjb jzywpy jkrpgq hbtddm juiwev fuqfri qvzote unqmie pzqvei kubdld jzzkwb vrdvhf yfqqow ufgsgi xunovj edqmfx ilrnra biveil lalvsu atbcze bmxfir kqfwwb nulriu qlmqao dcmemu chfuax xvsvty gokzhm iqwzzo sznzdt erzyjy rqcpag dmenkk zcvtba jplysa dzwhwr pujadf klibvv jnuicb llayda sssvyn qkxpng fyaqzv uozvwq mkftrn dddpbi btzily jujncd qrrkiq lsxhje pfnsvv zrehgp migxwg fnkixs wrsufs fmztam cubbww iighkz yxrrus sqkeol wpdjfn qyxizs awcdtl xwqhex lifshe pcmfci sujzew wntauw ohnfqb wgekxs welshk xsechf xgvgli gxsqwx dtvhjw otlbca ppjlsq sbkrxg tganib dalwyu dtphfr umcvuw quwcyq kztibf bpahcb aitdol llboox etxvtw rrmkcq qydrdc fjqqjx nxtevd rdeeqi uxhddw fladbt swdbke rexnvz dmbqtf itylrc eexlkq ljldhj dmdjmw waaatu itdwmw ojqvoz pxrpth vqfxfb edhaem drotvg fgflsn ufxmmk iyrddw jnvrno epwftg rtcndj cefyqs fpsdfm cfnapu lihmtx ixnprx sndsyq qqdyqs qndkrs qfgbzf fkqvvt upoiod zehiuo urezsg ysoefr zwtdnm lsbtgj agbptd umeftn bqniji xnqocx ddxhyi kczciw ntgcka wizdpo jlplrl rbkzih lkfbfd akmsjp mfdqev fatiia kvytmw rxcfqd sbvqrx cgqgvj xvhtlk zgrgsr buttlv ejckzj uvwbur eqjtsy fisllx kucdyr mpvceo cfiyhl okamqm xbqqxf ycoste pntdbh qarwaf fsfubk elebci xwxtls sctwmb lvixpv azqcpk btuokg qbuqdc inkhbp clvksq fvdocs yoljbm vxugym awqjkt fvdptg fliwxi lmayyl rqartc lyzxtq fzoxdo tsjlea wxltor mkkjuk klyqol brgivg oikqjp iwkzkr zrvgtd spolrl ldrnei qctxxb ilgsde ydqalt xvdzzv jtbeon fizpxa szesfn akvzri zobvdi yswjjn jpzgwh gvmnil qoawuz axmaxm nikvan cqspxv junevz xlmmmg elcbha nxqgwt ponfyx wzlcve fnyjmq yivmom hojhad qvkvda ektgvq tmjmvy qcosdh pxjrwn epcaxc ygbysk ukexjz bokmci wwuxme pkqlgp gtebve eaykut ufnoox kdabyy eehtwx cfbylg kcwubv quqdcl sricqn iknyrg lvfbpl apthsu lunasj tihdfk heeevb otddnx wnlsnw aeyrlm hltknz lgkjnh fuzctc bbqrgs oiayip sjzsjh vwtmig wgphxr siqtzk eapkpx wfrhjs rzglnh yezxao mtqhmg qbtklb rfprcf bexprt fbssry ytmbjb pgzqgu twyzqr adlufi spkvsg aocfgr bbeqlp gwjbhf iihiod yhztpj yivzli rylyab pvtgmp dqtqot ljgghs pdkcqm szvlgx lpzpyy irnvzm hwkaqx sbpzta layvif burrgo gybrnr xucmth araksf mjxnab lmonkf stdezx fnxazz rghhci ydtdqb sntmcb rogetu cjraqy xlyzcq zckomx bduwoi wynvcr nrmymc kodhjy wvpmvi difpib bdgvdf fshksm oqqoje mvgjzz ygmzme ccfwcz cnxtpx qupiwp mtwail rcxesz tgvooq fcmuqw vbektt vdhidq lvghbo hukkpa nigllb seizgx wermst btvfsx hpetcq ebrlqn wqdfef vkulsy yugsxm rgsbhy kijlvt jpwlhm ctarfw hliutu gfzfzf jsqagw edqioe ptkfcu ckyruo tyqhio poxapr rtdtzi fenivx pnelhs memnfs bxfgdr nhvqbs xkpkrz jcurgn cerayh nxcmup mejxvp ncjyju fwcrml ignyxq cudfuf zzaryr umnaaf owjadr bhivrs jxrcyu ewztiv qgyuuq iriuuq bjptno vqpkmw qwqjod xlrkgt fuljyx bzqwnh xzxbzf oaayxp laemyq sdmtgr nymqrq eixeuj hajpqq elgprc ujylxv radfoa nzrafw icctgb vpyclu grwjho rlhpkt ncdnyq exlzni erkrde xhaeak mldsvn fzlyic kutxpt dkyabu zvyawg jvukuu rghvis sgwkic vauqus zfugor qzfjqp mfrmci sxsvjy hkjrld mymign nmswjf xicvma grvvsw ybosdq cncmsv mggfig mgworp qvhoxo uewava zwtzgm tcbmta wgxela nbblbf fkmnzi ensyec ctwfni lfnnyz vychfo kkpacz uiwczc yyskde kwplra jyvwyw uafpob wogbzg pumpna lrnwac cyelov nesxcf swntug ixgrey gzodvj kdccyv nkpwas vpplci rzcoqs giddmb fgwamg cagfdb zuwkmd gdvygd gefcky wnleqj bygckw xiqkgs slqgmz kcgoto hffyeh eevdwu fngfss uceivj xegjhw btjaia jvzglj pxxgng ecrclg sssqta dqbpgh tvwceq bmtcqg lhyspr cilped zudcai ycoxrk lhkxme mzekjq menqkc kefojy opgrgt vexgrm xyyuac teosdm lqlgiv vnyzvr ujebpv miinny jecmcn jxkafw ditkkm mhftwv wqgaew agxvnp tzgzlh drytgc omeces crfrtm osrulb ikdrgy mgvtyq xrmjry zoccic ooyrst ldiovv pytrhq netesc ojkeql vlkojr nvxzug fjwkya erthcr bcrsej bmnchp lltymc sxhizq zomtej vwpyjt ymclod wnvvis ejdkvv okbmxb ctugtb qellfl vkitbt obadwv rxbnbr utdhtg pvepyp rxnlve tsafts ntcdgx zwsfmg gisplk mchphg cvmkex nxonkz mqgiad calhbr rgznnj ckteyr eoamgk gkemrx qiwxts zurkoe yqienl phqlfk gmpwap etnlaz npstzp topkcc aqkbhz nrakqn vgzmjl pyvhcy bzsvkq cgxayb gfucby wikgpq gpfvan eemmuz wceqbf fyxjuo vuxagj lrydpq gjuzfe xmlday axfemc cmlkia khacjq bahqlv jjtmfo woklvz eyfhct wpueup pmdckl ehktal yybxde bgskqy jmyhuu fqmkbp akldxl gqeuvl vgdpbn oavmoo gykmgm krphyq ssnapj zqeoqb saipnj abtxbq cjnwnb lafffk utjqsh solvto qtvbzp fmwnac ufujsp tvfcyx jpgzjj pzanym pwhexp ekbven pudvuw gslnqa mwjawb aixeve fujqco zonqza atoslc ubltro wegkmn vqwxgq vvcvrx xqbuxp zmdrvn caqqrx twrzhx fxzqyn cxaugi jepnpp clpdij wegwmk uvyeaq nphjjv nneblq zzzhee chrjgj cawdac yhisus pzvzku mnqggr iuvkna upwljy ajtknf anyzby krdxod defidk lzxwbp rioydh veqnqj ebsycd snfdii rrgtdq gffikp ixpazb wznzax yyvbjv fqxiuk vtodxf alqpol tgidpc gwpaqb crxlbf riivoj ynpezp cfdwgb gefnfz jbizma puicud dyoqba riytyt drcdpd gozhss nevyxn tkwejk dwypnp pcgeez fhetha nhpeki cmptnj udmgbj vwenmv mzrrcd knogfe iyseqz cbgjic sthfiw qrcaln odkwyq pzzgqc brtaes rqhybm gonper xhgity ktozjh lhluzu qhbgzp";
        $P = $this->texttobinary($message);
        $T = 0;
        
        $coverdata = $this->getpixelimage($height, $width, $img);
        $h = $this->get_h($height, $width, $coverdata);
        $l = $this->get_l($height, $width, $coverdata);

        // ddd($width . " | " . $height);

        // $l_reduksi = $this->reduce_difference_expansion($img,$width,$height,$message,$P,$T,$coverdata,$h,$l);
        // $P .= $l_reduksi; 
        $this->difference_expansion($img,$width,$height,$P,$T,$coverdata,$h,$l);
    }
    
    public function index_(){
        global $bitstream, $original_set, $h_reduksi, $capacity;
        $img = imagecreatefrompng("storage/coverdata/About_Screen.png");
        $width = imagesx($img);
        $height = imagesy($img);
        $message = "muhammadalisyaroni240499@gmail.com+123456789";
        $P = $this->texttobinary($message);
        $T = 0;
        
        $coverdata = $this->getpixelimage($height, $width, $img);
        $h = $this->get_h($height, $width, $coverdata);
        $l = $this->get_l($height, $width, $coverdata);
        // // Mendapatkan h_reduksi
        // for ($i=0; $i < count($h); $i++) {
        //     for ($j=0; $j < count($h[$i]); $j++) { 
        //         if ($h[$i][$j] < 2) {
        //             $h_reduksi[$i][$j] = $h[$i][$j];
        //         }else{
        //             $h_reduksi[$i][$j] = $h[$i][$j] - pow(2, floor(log10($h[$i][$j])/log10(2)) - 1);
        //         }
        //     }
        // }
        
        // // Mendapatkan locmap_reduksi
        // for ($i=0; $i < count($h_reduksi) ; $i++) { 
        //     for ($j=0; $j < count($h_reduksi[$i]) ; $j++) { 
        //         if ($h[$i][$j] == $h_reduksi[$i][$j]) {
        //             $location_map_reduksi[$i][$j] = 0;
        //         } else {
        //             $location_map_reduksi[$i][$j] = 1;
        //         }
        //     }
        // }
        // do{ 
        //     // Mendapatkan original set
        //     for ($i=0; $i < count($h); $i++) { 
        //         for ($j=0; $j < count($h[$i]) ; $j++) { 
        //             $exp0 = 2 * $h[$i][$j] + 0;
        //             $exp1 = 2 * $h[$i][$j] + 1;
        //             $qualified = min(2 * (255 - $l[$i][$j]) , 2 * $l[$i][$j] + 1);
        //             $chg0 = 2 * floor($h[$i][$j] / 2) + 0;
        //             $chg1 = 2 * floor($h[$i][$j] / 2) + 1;
        //             if (abs($exp0) <= $qualified && abs($exp1) <= $qualified) {
        //                 if ($h[$i][$j] == 0 || $h[$i][$j] == (-1)) {
        //                     $original_set[$i][$j] = "EZ";
        //                 }elseif (abs($h[$i][$j]) <= $T ) {
        //                     $original_set[$i][$j] = "EN1";
        //                 }else{
        //                     $original_set[$i][$j] = "EN2";
        //                 }
        //             } elseif(abs($chg0) <= $qualified && abs($chg1) <= $qualified){
        //                 $original_set[$i][$j] = "CN";
        //             } else{
        //                 $original_set[$i][$j] = "NC";
        //             }
        //         }
        //     }
            
        //     // Mendapatkan kapasitas
        //     $EZ = 0;
        //     $EN1 = 0;
        //     $EN2 = 0;
        //     $CN = 0;
        //     for ($i=0; $i < count($original_set); $i++) { 
        //         for ($j=0; $j < count($original_set[$i]) ; $j++) { 
        //             if ($original_set[$i][$j] == "EZ") {
        //                 $EZ++;
        //             } elseif ($original_set[$i][$j] == "EN1") {
        //                 $EN1++;
        //             } elseif ($original_set[$i][$j] == "EN2") {
        //                 $EN2++;
        //             } elseif ($original_set[$i][$j] == "CN") {
        //                 $CN++;
        //             }
        //         }
        //     }
        //     $capacity = $EZ + $EN1 + $EN2 + $CN;
            
        //     // Mendapatkan locmap
        //     for ($i=0; $i < count($original_set); $i++) { 
        //         for ($j=0; $j < count($original_set[$i]); $j++) { 
        //             if ($original_set[$i][$j] == "EZ" || $original_set[$i][$j] == "EN1") {
        //                 $location_map[$i][$j] = 1;
        //             } else{
        //                 $location_map[$i][$j] = 0;
        //             }
        //         }
        //     }
            
        //     // Mendapatkan LSB
        //     $LSB = null;
        //     for ($i=0; $i < count($original_set); $i++) { 
        //         for ($j=0; $j < count($original_set[$i]); $j++) { 
        //             if ($original_set[$i][$j] == "EN2" || $original_set[$i][$j] == "CN") {
        //                 if ($h[$i][$j] != 1 && $h[$i][$j] != -2) {
        //                     $binary_h = decbin($h[$i][$j]);
        //                     $LSB .= substr($binary_h, strlen($binary_h) - 1, 1);
        //                 }
        //             }
        //         }
        //     }
            
        //     // kompresi locmap reduksi
        //     $strlocmap_red = null;
        //     for ($i=0; $i < count($location_map); $i++) { 
        //         $strlocmap_red .= implode('', $location_map_reduksi[$i]);
        //     }
        //     $RLE_locmap_reduksi = $this->RLE($strlocmap_red);
        //     $L_reduksi= $this->huffman_compress($RLE_locmap_reduksi);
        //     $length_L_reduksi = $this->texttobinary(strlen($L_reduksi));
            
        //     // kompresi locmap
        //     $strlocmap = null;
        //     for ($i=0; $i < count($location_map); $i++) { 
        //         $strlocmap .= implode('', $location_map[$i]);
        //     }
        //     $RLE_locmap = $this->RLE($strlocmap);
        //     $L= $this->huffman_compress($RLE_locmap);
        //     $length_L = $this->texttobinary(strlen($L));
            
        //     // kompresi LSB
        //     $RLE_C = $this->RLE($LSB);
        //     $C = $this->huffman_compress($RLE_C);
        //     $length_C = $this->texttobinary(strlen($C));
            
        //     // menghitung panjang P
        //     $length_P = $this->texttobinary(strlen($P));
            
        //     // // mendapatkan nilai Bitstream
        //     $konjungsi = $this->texttobinary("&");
        //     $limitheader = $this->texttobinary("&&");
        //     $bitstream = $length_L_reduksi.$konjungsi.$length_L.$konjungsi.$length_C.$konjungsi.$length_P.$limitheader.$L_reduksi.$L.$C.$P;
            
        //     if ($T > 255) {
        //         if (strlen($bitstream) > $capacity) {
        //             echo(strlen($bitstream)." ". $capacity);
        //             exit();
        //         }
        //     }
        //     $T+=51;
            
        // }while (strlen($bitstream) > $capacity);
        $this->reduce_difference_expansion($img,$width,$height,$message,$P,$T,$coverdata,$h,$l);
        $h_expanded = $this->get_h_expanded($bitstream, $height, $width, $original_set, $h_reduksi);
        $stegodata = imagecreatetruecolor($width, $height);
        $stegodata = $this->get_stegodata($height, $width, $coverdata, $l, $h_expanded, $stegodata);
        
        $this->export_png($stegodata, "storage/muhammadalisyaroni".".png");
        
    }
    
    public function reduce_difference_expansion($img,$width,$height,$P,$T,$coverdata,$h,$l){
        global $h_reduksi;
        $h_reduksi = $this->get_h_reduksi($h);     
        $location_map_reduksi = $this->get_location_map_reduksi($h, $h_reduksi);
        do{
            global $bitstream, $original_set;   
            $original_set = $this->get_original_set($h_reduksi, $l, $T);
            $capacity = $this->get_capacity($original_set);
            $location_map = $this->get_location_map($original_set);
            $LSB = $this->get_LSB($original_set, $h_reduksi);
            
            // kompresi locmap reduksi
            $strlocmap_red = null;
            for ($i=0; $i < count($location_map); $i++) { 
                $strlocmap_red .= implode('', $location_map_reduksi[$i]);
            }
            $RLE_locmap_reduksi = $this->RLE($strlocmap_red);
            $L_reduksi= $this->huffman_compress($RLE_locmap_reduksi);
            $length_L_reduksi = $this->texttobinary(strlen($L_reduksi));
            
            // kompresi locmap
            $strlocmap = null;
            for ($i=0; $i < count($location_map); $i++) { 
                $strlocmap .= implode('', $location_map[$i]);
            }
            $RLE_locmap = $this->RLE($strlocmap);
            $L= $this->huffman_compress($RLE_locmap);
            $length_L = $this->texttobinary(strlen($L));
            
            // kompresi LSB
            $RLE_C = $this->RLE($LSB);
            $C = $this->huffman_compress($RLE_C);
            $length_C = $this->texttobinary(strlen($C));
            
            // menghitung panjang P
            $length_P = $this->texttobinary(strlen($P));
            
            // // mendapatkan nilai Bitstream
            $konjungsi = $this->texttobinary("&");
            $limitheader = $this->texttobinary("&&");
            $bitstream = $length_L_reduksi.$konjungsi.$length_L.$konjungsi.$length_C.$konjungsi.$length_P.$limitheader.$L_reduksi.$L.$C.$P;
            
            if ($T > 255) {
                if (strlen($bitstream) > $capacity) {
                    echo(strlen($bitstream)." ". $capacity);
                    exit();
                }
            }
            $T+=51;
        }while (strlen($bitstream) > $capacity);

        $count_NC = (count($h) * count($h[0])) - $capacity;
        // ddd($count_NC);
        $h_expanded = $this->get_h_expanded($bitstream, $height, $width, $original_set, $h_reduksi);
        $stegodata = imagecreatetruecolor($width, $height);
        $stegodata = $this->get_stegodata($height, $width, $coverdata, $l, $h_expanded, $stegodata);
        
        $this->export_png($stegodata, "storage/fullembedd/beFree_RDE".".png");
        return $L_reduksi;
        
    }
    public function difference_expansion($img,$width,$height,$P,$T,$coverdata,$h,$l){
        global $bitstream2, $original_set2;
        do{
            $original_set2 = $this->get_original_set($h, $l, $T);
            $capacity = $this->get_capacity($original_set2);
            $location_map = $this->get_location_map($original_set2);
            $LSB = $this->get_LSB($original_set2, $h);
            
            // kompresi locmap
            $strlocmap = null;
            for ($i=0; $i < count($location_map); $i++) { 
                $strlocmap .= implode('', $location_map[$i]);
            }
            $RLE_locmap = $this->RLE($strlocmap);
            $L= $this->huffman_compress($RLE_locmap);
            $length_L = $this->texttobinary(strlen($L));
            
            // kompresi LSB
            $RLE_C = $this->RLE($LSB);
            $C = $this->huffman_compress($RLE_C);
            $length_C = $this->texttobinary(strlen($C));
            
            // menghitung panjang P
            $length_P = $this->texttobinary(strlen($P));
            
            // // mendapatkan nilai Bitstream
            $konjungsi = $this->texttobinary("&");
            $limitheader = $this->texttobinary("&&");
            $bitstream2 = $length_L.$konjungsi.$length_C.$konjungsi.$length_P.$limitheader.$L.$C.$P;
            
            if ($T > 255) {
                if (strlen($bitstream2) > $capacity) {
                    break;
                }
            }
            $T+=51;
        }while (strlen($bitstream2) > $capacity);
        $count_NC = (count($h) * count($h[0])) - $capacity;
        // ddd($count_NC);
        $h_expanded = $this->get_h_expanded($bitstream2, $height, $width, $original_set2, $h);
        $stegodata = imagecreatetruecolor($width, $height);
        $stegodata = $this->get_stegodata($height, $width, $coverdata, $l, $h_expanded, $stegodata);
        $this->export_png($stegodata, "storage/fullembedd/beFree_DE".".png");
    }
    
    // mendapatkan pixel image
    public function getpixelimage($height, $width, $image){
        for ($i=0; $i < $height; $i++) { 
            for ($j=0; $j <$width ; $j++) { 
                $coverdata[$i][$j] = imagecolorat($image, $j, $i); 
            }
        }
        return $coverdata;
    }
    
    // mendapatkan nilai selisih
    public function get_h($height, $width, $coverdata){
        for ($i=0; $i < $height; $i++) { 
            $x_virtual = 0;
            for ($j=0; $j + 1 < $width; $j+=2) { 
                $x = ($coverdata[$i][$j] >> 16) &0xFF;
                $y = ($coverdata[$i][$j + 1] >> 16) &0xFF;
                $h[$i][$x_virtual] = $x - $y;
                $x_virtual++;
            }
        }
        return $h;
    }
    
    // mendapatkan nilai rata rata
    public function get_l($height, $width, $coverdata){
        for ($i=0; $i < $height; $i++) { 
            $x_virtual = 0;
            for ($j=0; $j + 1 < $width; $j+=2) { 
                $x = ($coverdata[$i][$j] >> 16) &0xFF;
                $y = ($coverdata[$i][$j + 1] >> 16) &0xFF;
                $l[$i][$x_virtual] = floor(($x + $y)/2);
                $x_virtual++;
            }
        }
        return $l;
    }
    
    // melakukan reduksi pada selisih
    public function get_h_reduksi($h){
        for ($i=0; $i < count($h); $i++) {
            for ($j=0; $j < count($h[$i]); $j++) { 
                if ($h[$i][$j] < 2) {
                    $h_reduksi[$i][$j] = $h[$i][$j];
                }else{
                    $h_reduksi[$i][$j] = $h[$i][$j] - pow(2, floor(log10($h[$i][$j])/log10(2)) - 1);
                }
            }
        }
        return $h_reduksi;
    }
    
    // menentukan location map selisih yang tereduksi
    public function get_location_map_reduksi($h, $h_reduksi){
        for ($i=0; $i < count($h_reduksi) ; $i++) { 
            for ($j=0; $j < count($h_reduksi[$i]) ; $j++) { 
                $criteria1 = pow(2, floor(log10($h_reduksi[$i][$j]) / log10(2)));
                $criteria2 = pow(2, floor(log10($h[$i][$j]) / log10(2)));
                if ($h[$i][$j] == $h_reduksi[$i][$j]) {
                    $location_map_reduksi[$i][$j] = 0;
                } else {
                    $location_map_reduksi[$i][$j] = 1;
                }
            }
        }
        return $location_map_reduksi;
    }
    
    // menentukan original set
    public function get_original_set($h, $l, $T){
         for ($i=0; $i < count($h); $i++) { 
            for ($j=0; $j < count($h[$i]) ; $j++) { 
                $exp0 = 2 * $h[$i][$j] + 0;
                $exp1 = 2 * $h[$i][$j] + 1;
                $qualified = min(2 * (255 - $l[$i][$j]) , 2 * $l[$i][$j] + 1);
                $chg0 = 2 * floor($h[$i][$j] / 2) + 0;
                $chg1 = 2 * floor($h[$i][$j] / 2) + 1;
                if (abs($exp0) <= $qualified && abs($exp1) <= $qualified) {
                    if ($h[$i][$j] == 0 || $h[$i][$j] == (-1)) {
                        $original_set[$i][$j] = "EZ";
                    }elseif (abs($h[$i][$j]) <= $T ) {
                        $original_set[$i][$j] = "EN1";
                    }else{
                        $original_set[$i][$j] = "EN2";
                    }
                } elseif(abs($chg0) <= $qualified && abs($chg1) <= $qualified){
                    $original_set[$i][$j] = "CN";
                } else{
                    $original_set[$i][$j] = "NC";
                }
            }
        }
        return $original_set;
    }
    
    // mendapatkan kapasitas gambar dalam menampung pesan rahasia
    public function get_capacity($original_set){
        $EZ = 0;
        $EN1 = 0;
        $EN2 = 0;
        $CN = 0;
        for ($i=0; $i < count($original_set); $i++) { 
            for ($j=0; $j < count($original_set[$i]) ; $j++) { 
                if ($original_set[$i][$j] == "EZ") {
                    $EZ++;
                } elseif ($original_set[$i][$j] == "EN1") {
                    $EN1++;
                } elseif ($original_set[$i][$j] == "EN2") {
                    $EN2++;
                } elseif ($original_set[$i][$j] == "CN") {
                    $CN++;
                }
            }
        }
        $capacity = $EZ + $EN1 + $EN2 + $CN;
        return $capacity;
    }
    
    // menentukan location map selisih yang dapat disisipi pesan
    public function get_location_map($original_set){
        for ($i=0; $i < count($original_set); $i++) { 
            for ($j=0; $j < count($original_set[$i]); $j++) { 
                if ($original_set[$i][$j] == "EZ" || $original_set[$i][$j] == "EN1") {
                    $location_map[$i][$j] = 1;
                } else{
                    $location_map[$i][$j] = 0;
                }
            }
        }
        return $location_map;
    }
    
    // mendapatkan LSB dari selisih EN2 dan CN
    public function get_LSB($original_set, $h){
        $LSB = null;
        for ($i=0; $i < count($original_set); $i++) { 
            for ($j=0; $j < count($original_set[$i]); $j++) { 
                if ($original_set[$i][$j] == "EN2" || $original_set[$i][$j] == "CN") {
                    if ($h[$i][$j] != 1 && $h[$i][$j] != -2) {
                        $binary_h = decbin($h[$i][$j]);
                        $LSB .= substr($binary_h, strlen($binary_h) - 1, 1);
                    }
                }
            }
        }
        return $LSB;
    }
    
    // konversi biner ke ASCII
    public function binarytotext($binary){
        $returntext = null;
        
        // mengubah biner menjadi teks
        for ($i=0; $i + 6 < strlen($binary) ; $i+=7) { 
            
            $returntext .= pack('H*', dechex(bindec(substr($binary, $i, 7))));
        }
        return $returntext;
    }
    
    // konversi ASCII ke biner
    public function texttobinary($text){
        // membagi teks menjadi array
        $characters = str_split($text);
        
        // mengubah array teks menjadi biner
        $binaryText = [];
        foreach ($characters as $character){
            $data = unpack('H*', $character);
            $binaryText[] = str_pad(base_convert($data[1], 16, 2), 7, "0", STR_PAD_LEFT);;
        }
        
        // menggabungkan semua biner menjadi satu variabel
        $binaryTextImplode = implode('', $binaryText);
        
        return $binaryTextImplode;
    }
    
    // kompresi Run Length Encoding
    public function RLE($teks){
        $n = strlen($teks);
        $returntext = null;
        for ($i=0; $i < $n ; $i++) { 
            $count = 1;
            while ($i < ($n - 1) && substr($teks, $i, 1) == substr($teks, $i + 1, 1)) {
                $count++;
                $i++;
            }
            $returntext .= substr($teks, $i, 1).$count."|"; 
        }
        return $returntext;
    }
    
    // extraksi Run Length Encoding
    public function decode_RLE($strRLE){
        $explodeRLE = explode("|", $strRLE);
        $decodeRLE = null;
        for ($i=0; $i < count($explodeRLE); $i++) { 
            $biner = substr($explodeRLE[$i], 0, 1);
            $count = substr($explodeRLE[$i], 1, (strlen($explodeRLE[$i]) - 1));
            for ($j=0; $j < $count; $j++) { 
                $decodeRLE .= $biner;
            }
        }
        return $decodeRLE;
    }
    
    // ekspansi pesan rahasia pada selisih
    public function get_h_expanded($bitstream, $height, $width, $original_set, $h){
        $secretIndex = 0;
        $bitstream_length = strlen($bitstream);
        for ($i=0; $i < $height; $i++) { 
            for ($j=0; $j < count($h[$i]); $j++) {
                $subs = substr($bitstream, $secretIndex, 1);
                $int = ($subs);
                if ($original_set[$i][$j] == "EZ" || $original_set[$i][$j] == "EN1") {
                    if ($secretIndex < $bitstream_length) {
                        $h_expanded[$i][$j] = 2 * $h[$i][$j] + $int;
                        $secretIndex++;
                    } else{
                        $h_expanded[$i][$j] = 2 * $h[$i][$j] + 0;
                    }
                } elseif($original_set[$i][$j] == "EN2" || $original_set[$i][$j] == "CN"){
                    if ($secretIndex < $bitstream_length) {
                        $h_expanded[$i][$j] = 2 * floor($h[$i][$j]/2) + $int;
                        $secretIndex++;
                    } else{
                        $h_expanded[$i][$j] = 2 * floor($h[$i][$j]/2) + 0;
                    }
                } else{
                    $h_expanded[$i][$j] = $h[$i][$j];
                }
            }
        }
        return $h_expanded;
    }
    
    // mendapatkan stegodata
    public function get_stegodata($height, $width, $coverdata, $l, $h_expanded, $stegodata){
        for ($i=0; $i < $height ; $i++) { 
            $x_virtual = 0;
            for ($j=0; $j + 1 < $width ; $j+=2) { 
                $x_exp = ($l[$i][$x_virtual] + floor(($h_expanded[$i][$x_virtual] + 1) / 2));
                $y_exp = ($l[$i][$x_virtual] - floor($h_expanded[$i][$x_virtual] / 2));
                $color = imagecolorallocate($stegodata, $x_exp, ($coverdata[$i][$j] >> 8) & 0xFF,  ($coverdata[$i][$j]) & 0xFF);
                imagesetpixel($stegodata, $j, $i, $color);
                $color = imagecolorallocate($stegodata,  $y_exp, ($coverdata[$i][$j + 1] >> 8) & 0xFF, ($coverdata[$i][$j + 1]) & 0xFF);
                imagesetpixel($stegodata, $j + 1, $i, $color);
                $x_virtual++;
            }
        }
        // ddd(($stegodata[54][1046]>>16) &0xFF);
        return $stegodata;
    }
    
    // Eksport gambar menjadi png
    public function export_png($image, $url){
        header('Content-type:image/png');
        imagepng($image, $url);
        imagedestroy($image);
    }
    
    
    
    function huffman_encode($symb2freq) {
        $heap = new SplPriorityQueue;
        $heap->setExtractFlags(SplPriorityQueue::EXTR_BOTH);
        foreach ($symb2freq as $sym => $wt)
        $heap->insert(array($sym => ''), -$wt);
        
        while ($heap->count() > 1) {
            $lo = $heap->extract();
            $hi = $heap->extract();
            foreach ($lo['data'] as &$x)
            $x = '1'.$x;
            foreach ($hi['data'] as &$x)
            $x = '0'.$x;
            $heap->insert($lo['data'] + $hi['data'],
            $lo['priority'] + $hi['priority']);
        }
        $result = $heap->extract();
        return $result['data'];
    }
    
    function huffman_compress($txt){
        $arr_text = str_split($txt);
        $symb2freq = array_count_values(str_split($txt));
        $huff = $this->huffman_encode($symb2freq);
        $code = null;
        for($i=0;$i<count($arr_text);$i++){
            $code .= $huff[$arr_text[$i]]; 
        }
        $sym = null;
        foreach ($symb2freq as $key => $value) {
            $sym .= ($key." ".$symb2freq[$key]." ");
        }
        
        $sym = $this->texttobinary($sym."--");
        $result = $sym.$code;
        $length_result = $this->texttobinary(strlen($code)."--");
        // echo(strlen($code));
        $result = $length_result.$result;
        return $result;
    }
    
    function huffman_decompress($encode) {
        $sym = $this->binarytotext($encode);
        $arr_sym = explode("--", $sym);
        $length_code = $arr_sym[0];
        $sym = $arr_sym[1];
        $length_start = strlen($this->texttobinary($length_code."--".$sym."--"));
        $arr_sym = explode(" ", $sym);
        $symb2freq=array();
        for ($i=0; $i+1 < count($arr_sym); $i+=2) { 
            $symb2freq += [$arr_sym[$i]=>(int)($arr_sym[$i+1])];
        }
        $huff = $this->huffman_encode($symb2freq);
        $code = substr($encode, $length_start,$length_code);
        $subs_code = null;
        $txt = null;
        $indexhuff = array();
        foreach ($huff as $key => $value) {
            array_push($indexhuff, $key);
        }
        for ($i=0; $i < strlen($code) ; $i++) { 
            $subs_code .= substr($code, $i, 1);
            for ($j=0; $j < count($indexhuff); $j++) { 
                if ($subs_code===$huff[$indexhuff[$j]]) {
                    $txt.=$indexhuff[$j];
                    $subs_code = null;
                }
            }
        }
        return $txt;
    }
    
}
