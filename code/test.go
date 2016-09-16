package main

import (
	"fmt"
	"io/ioutil"
	"os"
	"strings"
)

func main() {
	contents := ""
	filename := os.Args[1]
	data, err := ioutil.ReadFile(filename)
	if err != nil {
		fmt.Fprintf(os.Stderr, "test: %v\n", err)
	}
	for _, line := range strings.Split(string(data), "。") { //ReadFile函数返回一个字节切片
		contents += `
<p>
<span style="color: rgb(63, 63, 63); font-family: 隶书, SimLi; font-size: 16px;"></span>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span style="color: rgb(38, 38, 38); font-family: 隶书, SimLi; font-size: 16px; text-indent: 28px;">` + line + `。
</p>
<p>
<span style="font-family: 隶书, SimLi; font-size: 16px; color: rgb(38, 38, 38);">&nbsp;</span>
</p>`
	}
	result := `
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
</section>` + contents + `<p style="text-indent:28px">
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
`
	fmt.Println(result)
}
