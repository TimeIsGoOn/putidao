<?php
//示意
$content=<<<txt
譬如说我们现在常常去看医生，医生说：你这样不好，信了佛吃素没有营养，对不起，那不管，他除了这个以外，叫你用什么药，你一定听他的，怎样个吃法可以，可是假定你持了素，他叫你要吃肉，那你不听他，当然你还没有持斋之前，那没什么关系。这个要注意！所以这个地方的邪胜解障的内涵，凡是跟三宝不相应的，违背的所有这些东西，你自然而然信得过三宝的关系，你自然而然去把它拿掉，绝不成其为障碍。要不然你总归会这样的，这个东西等一下没有营养，不行，不行，所以你不要去；这个又是这样又不要去，那就错了。所以现在呢再这么一来的话，慢慢轻微，乃至于永远灭尽。

【谓由信解，归依恶师恶法恶友增上力故，造诸恶业，皆得轻微，当得清净。】

以前在没有正确认识之前，那你所信的以及你所了解的，都是什么？都是恶师、恶法、恶友。师现在转过来就是我们的大师－－佛；法就是旁边的人告诉我们方法，现在是正法；恶友就是由于前面这种力量，造的恶业，现在因为你归凭了三宝改过来了，渐渐轻微乃至于得清净。关于这一点这个地方我们要注意！我们现在在学习当中，所以随时要警惕自己，我们的的确确很多见解当中对三宝还并不认识，我们现在的起心动念仍旧是什么？仍旧这种恶法在脑筋里面，仍旧这种邪胜解。

我随便举一个例子，昨天有一位同修跑得来问我，他说他晚上吃牛奶要供养，应该不应该供养？这样，我说应该，可是说有人告诉他，他说那天我们不是刚讲过吗？这个随便吃什么，受用净水以上要去供养，他说他吃的时候旁边有人告诉他，你不要供养，为什么？他说晚上那个三宝不受供养。你们说对不对？他现在考考你们了，对呀！我们说我们是出家人僧团过了午以后不食的，你现在跑得去晚上喝牛奶，你去供养，是供好还是不供好，他说的对不对？这个让你们好好的想一想，明天告诉你们。

所以在很多地方，的的确确在这个概念当中，我们并没有弄清楚，所以没有弄清楚，你只有一个，随时随地警惕自己不要自己随便开口，不要说随便看了一点书，听见了一点，随便乱开口。最好的办法就是遇见这种情况，你应该思惟观察，到底应该怎么做，那个时候你肯去学，你能够慢慢慢慢的深进；要不然的话，我们虽然是自己在学佛，实察上弄了半天，始终在学我。所以真正皈依了以后，要学这个学处，要好好的学，要五年，要跟着一个非常精彩的老师努力勤学，为什么要这样去做？就是你一定弄得开遮持犯最细微的地方，行持怎么样行持？为什么原因？如果你弄不清楚的话，对不起，尽寿不离依止。我们现在是一窍不通，又到去的话，就随便这个乱盖一通，这个很危险，在这地方我随便一提。

【三得堕入正行正至善士数中，】

你一皈依了以后，你的行为就是从此以后正，因为你的行正，所以将来感的果一定美妙，然后呢你真正得到正至善士数中，的确所正确的依止的地方，真正的这些才是三世界当中对的、不错的。所以这个平常我们说诸上善人，那个时候，你从皈依开始就可以进入这个圈子。

【四为其大师同梵行者，及于圣教净信诸天，爱念欢喜者。】

皈依了以后为大师，大师就是佛，同梵行者就是僧，这个僧狭义的来说就是指四众，广义的来说如法行持者，乃至于其他及于圣教净信的诸天，那个都是护持佛法的，他会爱念欢喜。

【谓得趣入善士数中，为大师等之所喜乐，】

所以我常常说，平常我们常常说不要得罪人、不要得罪人，注意呀！当然你能不得罪千万不要得罪。可是万一，尤其是我们修学佛法，修学佛法了以后，很多概念、很多行为呀，跟世俗上面是有不一样的地方，碰见这种情况之下，两者当中，不能同时善巧处理的时候，你注意！你如果说顾全了不得罪人的话，那时候你得罪了佛菩萨跟诸天；反过来说，你如果不得罪佛菩萨诸天，你要得罪人，请问你们愿意取那一个？这个概念很重要，这个概念非常重要。再说一遍，当然最圆满的办法既上得诸佛菩萨诸天的欢喜，下面大家也欢喜，这个是最好，万一两者不可得兼的时候，你们要想一想，应该怎么办？这个地方顺便一提。
txt;
$content = strtr($content , array("\r"=>'',"\n"=>''));
$content_arr = array_map( function($str){
	$str = $str.'。';
	$str = <<<content
<p>
	<span style="color: rgb(63, 63, 63); font-family: 隶书, SimLi; font-size: 16px;"></span>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span style="color: rgb(38, 38, 38); font-family: 隶书, SimLi; font-size: 16px; text-indent: 28px;">
	$str
</p>
<p>
    <span style="font-family: 隶书, SimLi; font-size: 16px; color: rgb(38, 38, 38);">&nbsp;</span>
</p>
content;
 return $str;
} , array_filter( explode('。',$content) ));
$content = implode('',$content_arr);

$result=<<<html
<section class="wx96Diy" data-source="bj.96weixin.com">
    <section style="border-style: solid none; padding: 0.5em 0px; color: rgb(166, 166, 166); font-family: inherit; font-size: 1em; font-weight: inherit; text-decoration: inherit; margin-top: 2em; border-top-color: rgb(0, 187, 236); border-bottom-color: rgb(0, 187, 236); border-top-width: 1px; border-bottom-width: 1px; white-space: normal;" id="96weixin081698" class="96wx-bdtc 96wx-bdbc">
        <section style="padding: 0px; border: currentColor; text-align: center; color: inherit; line-height: 1.4; margin-top: -1.2em;">
            <span style="border-color: rgb(207, 210, 136); padding: 8px 23px; color: rgb(255, 255, 255); font-family: 隶书, SimLi; font-size: 16px; font-weight: inherit; text-decoration: inherit; background-color: rgb(0, 187, 236);">听闻</span>
        </section>
        <section style="margin: 0px; padding: 16px 16px 10px; color: rgb(32, 32, 32); line-height: 1.4; font-family: inherit; font-size: 1em; box-sizing: border-box;" class="96wx-bdtc" data-style="white-space: normal; text-align: left;font-size: 14px;line-height: 1.5em; color: rgb(12, 12, 12);">
            <p style="text-align: center; color: inherit; line-height: 1.5em;">
                <span style="color: rgb(12, 12, 12); font-size: 14px;">祈请您先按听闻轨理调整内心相续，然后开始如理听闻</span>
            </p>
        </section>
    </section>
</section>
<section class="wx96Diy" data-source="bj.96weixin.com">
    <section style="margin: 0px auto; width: 100%; overflow: hidden; clear: both; position: relative;" class="96wxDiy">
        <section style="margin: 0.5em auto;">
            <section style="margin: -5px 5px 0px 0px; width: 16px; height: auto !important; float: left;">
                <p style="letter-spacing: -1px; font-size: 24px; display: inline-block;">
                    听闻轨理
                </p>
            </section>
            <section style="margin: 2px 0px 0px 30px; padding: 0px 0px 0px 8px; width: auto; line-height: 1.3em; border-left-color: rgba(59, 163, 49, 0.952941); border-left-width: 2px; border-left-style: solid;" class="96wx-bdlc">
                <p style="clear: none;">
                    <strong style="color: rgb(62, 62, 62); line-height: 1.3em; white-space: pre-wrap; word-wrap: break-word !important; max-width: 100%; box-sizing: border-box !important;"><span style="font-family: 宋体; word-wrap: break-word !important; max-width: 100%; box-sizing: border-box !important; background-color: rgb(216, 216, 216);">祈求师长三宝加持，令我断除一切闻法障碍，具足如下诸心，进入如理听闻相续！</span></strong>
                </p>
                <p style="text-align: left; text-indent: 2em; clear: none;">
                    <span style="color: rgb(62, 62, 62); line-height: 24px; text-indent: 32px; font-family: 宋体; white-space: pre-wrap; word-wrap: break-word !important; max-width: 100%; box-sizing: border-box !important;">1、思惟闻法所有胜利，生欢喜心好乐心。须以五想听闻正法：作珍宝想，作眼目想，作光明想，作大胜利想，作无罪想。</span>
                </p>
                <p style="text-align: left; text-indent: 2em; clear: none;">
                    <span style="color: rgb(62, 62, 62); line-height: 24px; text-indent: 32px; font-family: 宋体; white-space: pre-wrap; word-wrap: break-word !important; max-width: 100%; box-sizing: border-box !important;">2、于法法师发起承事，专信恭敬听闻法，不应于彼起毁谤，于说法师供养者，谓于师起如佛想。</span>
                </p>
                <p style="text-align: left; text-indent: 2em; clear: none;">
                    <span style="color: rgb(62, 62, 62); line-height: 24px; text-indent: 32px; font-family: 宋体; white-space: pre-wrap; word-wrap: break-word !important; max-width: 100%; box-sizing: border-box !important;">3、断器三过：断覆器，断污器，断漏器。</span>
                </p>
                <p style="text-align: left; text-indent: 2em; clear: none;">
                    <span style="color: rgb(62, 62, 62); line-height: 24px; text-indent: 32px; font-family: 宋体; white-space: pre-wrap; word-wrap: break-word !important; max-width: 100%; box-sizing: border-box !important;">4、依六种想：于自安住如病想；于说法师住如医想；于所教诫起药品想；于殷重修起疗病想；于如来所住善士想；于正法理起久住想。</span>
                </p>
                <p style="clear: none;">
                    &nbsp;
                </p>
            </section>
        </section>
    </section>
</section>
<section class="wx96Diy" data-source="bj.96weixin.com">
    <section style="border-style: solid none; padding: 0.5em 0px; color: rgb(166, 166, 166); font-family: inherit; font-size: 1em; font-weight: inherit; text-decoration: inherit; margin-top: 2em; border-top-color: rgb(0, 187, 236); border-bottom-color: rgb(0, 187, 236); border-top-width: 1px; border-bottom-width: 1px; white-space: normal;" id="96weixin081698" class="96wx-bdtc 96wx-bdbc">
        <section style="padding: 0px; border: currentColor; text-align: center; color: inherit; line-height: 1.4; margin-top: -1.2em;">
            <span style="border-color: rgb(207, 210, 136); padding: 8px 23px; color: rgb(255, 255, 255); font-family: 隶书, SimLi; font-size: 16px; font-weight: inherit; text-decoration: inherit; background-color: rgb(0, 187, 236);">缘念</span>
        </section>
        <section style="margin: 0px; padding: 16px 16px 10px; color: rgb(32, 32, 32); line-height: 1.4; font-family: inherit; font-size: 1em; box-sizing: border-box;" class="96wx-bdtc" data-style="white-space: normal; text-align: left;font-size: 14px;line-height: 1.5em; color: rgb(12, 12, 12);">
            <p style="color: inherit; line-height: 1.5em;">
                <span style="font-family: 隶书, SimLi; font-size: 16px;">南无本师释迦牟尼佛！</span>
            </p>
            <p>
                <span style="font-family: 隶书, SimLi; font-size: 16px;">南无本师释迦牟尼佛！</span>
            </p>
            <p>
                <span style="font-family: 隶书, SimLi; font-size: 16px;">南无本师释迦牟尼佛！</span>
            </p>
            <p>
                <span style="font-family: 隶书, SimLi; font-size: 16px;">诸佛正法众中尊</span>
            </p>
            <p>
                <span style="font-family: 隶书, SimLi; font-size: 16px;">直至菩提我皈依</span>
            </p>
            <p>
                <span style="font-family: 隶书, SimLi; font-size: 16px;">我以所行施等善</span>
            </p>
            <p>
                <span style="font-family: 隶书, SimLi; font-size: 16px;">为利众生愿成佛</span>
            </p>
            <p>
                <span style="font-family: 隶书, SimLi; font-size: 16px;">（三遍）</span>
            </p>
        </section>
    </section>
</section>
<p>
    &nbsp;
</p>
<section class="wx96Diy" data-source="bj.96weixin.com">
    <section style="margin: 1.8em 0px 0.5em; border: 0px rgb(0, 187, 236);" id="96weixinzw081639" class="96wx-bdtc">
        <section style="padding: 10px; border: 2px solid rgb(0, 187, 236); text-align: inherit; font-family: inherit; font-size: 1em; font-weight: inherit; text-decoration: inherit; margin-left: 1.3em;" class="96wx-bdc">
            <section style="margin: -1.3em 0px 0px -1.3em; padding: 0px 5px; border: 2px solid rgb(0, 187, 236); text-align: inherit; color: rgb(255, 255, 255); font-family: inherit; font-size: 1.5em; font-weight: inherit; text-decoration: inherit; vertical-align: top; float: left; display: inline-block; background-color: rgb(0, 187, 236);" class="96wx-bdc 96wx-bgc">
                <section style="color: inherit;">
                    音频
                </section>
            </section>
            <section style="color: inherit;">
                <p>
                    &nbsp;听闻参考:10B23:04-32:20
                </p>
            </section>
        </section>
    </section>
</section>
<section class="wx96Diy" data-source="bj.96weixin.com">
    <section style="margin: 0px auto; width: 100%; overflow: hidden; clear: both; position: relative;" class="96wxDiy">
        <section style="margin: 0.5em 0px; text-align: center;">
            <section style="margin: 2px; padding: 3px; border: 3px solid rgb(94, 173, 217); width: 53px; display: inline-block;" class="96wx-bdc">
                <section style="padding: 5px; border: 1px solid rgb(94, 173, 217); width: 41px;" class="96wx-bdc">
                    <p style="color: inherit; line-height: 1.6em;">
                        <span style="font-size: 28px; font-weight: bold;">听</span>
                    </p>
                </section>
            </section>
            <section style="margin: 2px; padding: 3px; border: 3px solid rgb(94, 173, 217); width: 53px; display: inline-block;" class="96wx-bdc">
                <section style="padding: 5px; border: 1px solid rgb(94, 173, 217); width: 41px;" class="96wx-bdc">
                    <p style="color: inherit; line-height: 1.6em;">
                        <span style="font-size: 28px; font-weight: bold;">闻</span>
                    </p>
                </section>
            </section>
            <section style="margin: 2px; padding: 3px; border: 3px solid rgb(94, 173, 217); width: 53px; display: inline-block;" class="96wx-bdc">
                <section style="padding: 5px; border: 1px solid rgb(94, 173, 217); width: 41px;" class="96wx-bdc">
                    <p style="color: inherit; line-height: 1.6em;">
                        <span style="font-size: 28px; font-weight: bold;">正</span>
                    </p>
                </section>
            </section>
            <section style="margin: 2px; padding: 3px; border: 3px solid rgb(94, 173, 217); width: 53px; display: inline-block;" class="96wx-bdc">
                <section style="padding: 5px; border: 1px solid rgb(94, 173, 217); width: 41px;" class="96wx-bdc">
                    <p style="color: inherit; line-height: 1.6em;">
                        <span style="font-size: 28px; font-weight: bold;">文</span>
                    </p>
                </section>
            </section>
        </section>
    </section>
</section>
$content
<p style="text-indent:28px">
    <span style="font-family: 隶书, SimLi; font-size: 16px;"><br/></span><br/>
</p>
<p>
    <section class="wx96Diy" data-source="bj.96weixin.com" style="margin: 0px; padding-right: 0px; padding-left: 0px; font-family: &#39;Helvetica Neue&#39;, Helvetica, &#39;Hiragino Sans GB&#39;, &#39;Microsoft YaHei&#39;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; white-space: normal;">
        <section class="wx96Diy" data-source="bj.96weixin.com" style="margin: 0px; border-image-source: none;">
            <section class="wx96Diy" data-source="bj.96weixin.com" style="margin: 0px; border-image-source: none;">
                <p style="padding: 0px; clear: both;">
                    <img src="https://mmbiz.qlogo.cn/mmbiz/rAjaC6GJNEp5GCKRDUKibyibVBx6rcCS2jYRYqSbyFmCpl2K90vYf5no2yyvZZu4g7jrcXuiaQRMoeZVhoT6C6iaow/0?wx_fmt=png" data-ratio="0.02443609022556391" data-w="532" data-type="png" data-s="300,640" style="margin: 0px; padding: 0px; height: auto !important;"/><br style="margin: 0px; padding: 0px;"/>
                </p>
            </section>
        </section>
        <section class="wx96Diy" data-source="bj.96weixin.com" style="margin: 0px; border-image-source: none;">
            <section class="96wxDiy" style="margin: 0px auto; padding: 0px; width: 490px; overflow: hidden; clear: both;">
                <section style="margin: 0.5em auto; padding: 0px;">
                    <section style="margin: -5px 5px 0px 0px; padding: 0px; width: 16px; float: left; height: auto !important;">
                        <p style="padding: 0px; clear: both; letter-spacing: -1px; font-size: 24px; display: inline-block;">
                            回向
                        </p>
                    </section>
                    <section class="96wx-bdlc" style="margin: 2px 0px 0px 30px; padding: 0px 0px 0px 8px; width: auto; line-height: 1.3em; border-left-color: rgba(59, 163, 49, 0.952941); border-left-width: 2px; border-left-style: solid;">
                        <p style="padding: 0px; clear: none;">
                            愿此殊胜功德
                        </p>
                        <p style="padding: 0px; clear: none;">
                            回向法界有情
                        </p>
                        <p style="padding: 0px; clear: none;">
                            净除一切罪障
                        </p>
                        <p style="padding: 0px; clear: none;">
                            共成无上菩提
                        </p>
                    </section>
                </section>
            </section>
        </section>
    </section>
</p>
<p>
    <section class="wx96Diy" data-source="bj.96weixin.com" style="margin: 0px; padding-right: 0px; padding-left: 0px; line-height: 25.6px; white-space: normal;">
        <section class="wx96Diy" data-source="bj.96weixin.com" style="margin: 0px; border-image-source: none;">
            <section class="wx96Diy" data-ele="" style="margin: 0px; padding-right: 0px; padding-left: 0px; border: 0px currentcolor; border-image-source: none;">
                <section style="margin: 10px 0px; padding: 0px; box-sizing: border-box;">
                    <section style="margin: 0px; padding: 0px; width: 50px; box-sizing: border-box;">
                        <img src="https://mmbiz.qlogo.cn/mmbiz/rAjaC6GJNEp5GCKRDUKibyibVBx6rcCS2j9RrBjuNnudskgq0wFfEDBQ0HRqQuzXkXJx2pGDCVZfI6FEQbKZYZAA/0?wx_fmt=png" data-ratio="1.06" data-w="50" data-type="png" data-s="300,640" style="margin: 0px; padding: 0px; width: auto; text-align: justify; color: inherit; line-height: 1.5em; text-indent: 2em; height: auto !important;"/>
                    </section>
                    <section style="margin: -30px 0px 0px 25px; padding: 20px; border-radius: 15px; border: 1px solid rgb(0, 0, 0); border-image-source: none; color: rgb(30, 136, 225); box-sizing: border-box !important;">
                        <p style="padding: 0px; clear: both; text-align: justify; color: inherit; line-height: 1.5em; text-indent: 2em;">
                            现在，请继续单击“写留言”进行一句话听闻分享吧。
                        </p>
                    </section>
                </section>
            </section>
        </section>
    </section>
</p>

html;
echo $result;
