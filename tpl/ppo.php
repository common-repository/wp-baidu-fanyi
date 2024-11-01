<?php
/**
 * 翻译弹出面板
 */
if ( ! defined( 'ABSPATH' ) ) exit;

?>

<div class="wb-ppo-editor wbp-bfy" id="wb-bdf-pop" style="display:none;">
	<div class="wbppo-hd">
		<div class="wb-dropdown-mod" id="J_selectOriginalLan">
			<a class="wb-selected-btn">
				<span class="wb-selected-val" data-val="auto">自动检测</span>
				<svg xmlns="http://www.w3.org/2000/svg" width="10" height="6"><path fill="none" fill-rule="evenodd" stroke="#666" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1L5 5 1 1"/></svg>
			</a>

			<div class="selector-language from-language-list">
				<div class="language-data">
					<ul class="language-often">
						<li>
							<a href="javascript:void(0);" value="auto" class="data-lang lang-auto lang-selected">自动检测</a>
						</li>
						<li><a href="javascript:void(0);" value="en" class="data-lang support-ocr">英语</a></li>
						<li><a href="javascript:void(0);" value="zh" class="data-lang support-ocr">中文</a></li>
					</ul>

					<div class="language-list">
						<ul>
							<li class="language-class">
								ABC
							</li>
							<li>
								<a href="javascript:void(0);" value="ara" class="data-lang">
									阿拉伯语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="est" class="data-lang">
									爱沙尼亚语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="bul" class="data-lang">
									保加利亚语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="pl" class="data-lang">
									波兰语
								</a>
							</li>
						</ul>
						<ul>
							<li class="language-class">
								DEFG
							</li>
							<li>
								<a href="javascript:void(0);" value="dan" class="data-lang">
									丹麦语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="de" class="data-lang support-ocr">
									德语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="ru" class="data-lang support-ocr">
									俄语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="fra" class="data-lang support-ocr">
									法语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="fin" class="data-lang">
									芬兰语
								</a>
							</li>
						</ul>
						<ul>
							<li class="language-class">
								HIJKLMN
							</li>
							<li>
								<a href="javascript:void(0);" value="kor" class="data-lang support-ocr">
									韩语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="nl" class="data-lang">
									荷兰语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="cs" class="data-lang">
									捷克语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="rom" class="data-lang">
									罗马尼亚语
								</a>
							</li>
						</ul>
						<ul>
							<li class="language-class">
								OPQRST
							</li>
							<li>
								<a href="javascript:void(0);" value="pt" class="data-lang support-ocr">
									葡萄牙语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="jp" class="data-lang support-ocr">
									日语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="swe" class="data-lang">
									瑞典语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="slo" class="data-lang">
									斯洛文尼亚语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="th" class="data-lang">
									泰语
								</a>
							</li>
						</ul>
						<ul>
							<li class="language-class">
								UVWX
							</li>
							<li>
								<a href="javascript:void(0);" value="wyw" class="data-lang">
									文言文
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="spa" class="data-lang support-ocr">
									西班牙语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="el" class="data-lang">
									希腊语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="hu" class="data-lang">
									匈牙利语
								</a>
							</li>
						</ul>
						<ul>
							<li class="language-class">
								YZ
							</li>
							<li>
								<a href="javascript:void(0);" value="zh" class="data-lang support-ocr">
									中文
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="en" class="data-lang support-ocr">
									英语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="it" class="data-lang support-ocr">
									意大利语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="vie" class="data-lang">
									越南语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="yue" class="data-lang">
									粤语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="cht" class="data-lang">
									中文繁体
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="switch-btn">
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><g fill="#999" fill-rule="evenodd"><path d="M2 5h10.6l-1.3 1.3a1 1 0 0 0 0 1.4c.2.2.4.3.7.3.3 0 .5-.1.7-.3l3-3c.4-.4.4-1 0-1.4l-3-3a1 1 0 0 0-1.4 0 1 1 0 0 0 0 1.4L12.6 3H1c-.6 0-1 .4-1 1v3h2V5zM14 11H3.4l1.3-1.3c.4-.4.4-1 0-1.4a1 1 0 0 0-1.4 0l-3 3a1 1 0 0 0 0 1.4l3 3c.2.2.4.3.7.3.3 0 .5-.1.7-.3.4-.4.4-1 0-1.4L3.4 13H15c.6 0 1-.4 1-1V9h-2v2z"/></g></svg>
		</div>
		<div class="wb-dropdown-mod" id="J_selectTraTo">
			<a class="wb-selected-btn">
				<span class="wb-selected-val" data-val="zh">简体中文</span>
				<svg xmlns="http://www.w3.org/2000/svg" width="10" height="6"><path fill="none" fill-rule="evenodd" stroke="#666" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1L5 5 1 1"/></svg>
			</a>

			<div class="selector-language from-language-list">
				<div class="language-data">
					<ul class="language-often">
						<li><a href="javascript:void(0);" value="en" class="data-lang support-ocr">英语</a></li>
						<li><a href="javascript:void(0);" value="zh" class="data-lang support-ocr">中文</a></li>
					</ul>

					<div class="language-list">
						<ul>
							<li class="language-class">
								ABC
							</li>
							<li>
								<a href="javascript:void(0);" value="ara" class="data-lang">
									阿拉伯语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="est" class="data-lang">
									爱沙尼亚语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="bul" class="data-lang">
									保加利亚语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="pl" class="data-lang">
									波兰语
								</a>
							</li>
						</ul>
						<ul>
							<li class="language-class">
								DEFG
							</li>
							<li>
								<a href="javascript:void(0);" value="dan" class="data-lang">
									丹麦语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="de" class="data-lang support-ocr">
									德语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="ru" class="data-lang support-ocr">
									俄语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="fra" class="data-lang support-ocr">
									法语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="fin" class="data-lang">
									芬兰语
								</a>
							</li>
						</ul>
						<ul>
							<li class="language-class">
								HIJKLMN
							</li>
							<li>
								<a href="javascript:void(0);" value="kor" class="data-lang support-ocr">
									韩语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="nl" class="data-lang">
									荷兰语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="cs" class="data-lang">
									捷克语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="rom" class="data-lang">
									罗马尼亚语
								</a>
							</li>
						</ul>
						<ul>
							<li class="language-class">
								OPQRST
							</li>
							<li>
								<a href="javascript:void(0);" value="pt" class="data-lang support-ocr">
									葡萄牙语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="jp" class="data-lang support-ocr">
									日语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="swe" class="data-lang">
									瑞典语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="slo" class="data-lang">
									斯洛文尼亚语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="th" class="data-lang">
									泰语
								</a>
							</li>
						</ul>
						<ul>
							<li class="language-class">
								UVWX
							</li>
							<li>
								<a href="javascript:void(0);" value="wyw" class="data-lang">
									文言文
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="spa" class="data-lang support-ocr">
									西班牙语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="el" class="data-lang">
									希腊语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="hu" class="data-lang">
									匈牙利语
								</a>
							</li>
						</ul>
						<ul>
							<li class="language-class">
								YZ
							</li>
							<li>
								<a href="javascript:void(0);" value="zh" class="data-lang support-ocr">
									中文
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="en" class="data-lang support-ocr">
									英语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="it" class="data-lang support-ocr">
									意大利语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="vie" class="data-lang">
									越南语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="yue" class="data-lang">
									粤语
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" value="cht" class="data-lang">
									中文繁体
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="primary">
			<button class="wb-btn btn-primary" type="button">翻译</button>
		</div>
	</div>
	<div class="wbppo-ft">
		<a class="wb-setting-btn">
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="#666" fill-rule="evenodd" d="M8 11a3 3 0 0 1-3-3 3 3 0 0 1 3-3 3 3 0 0 1 3 3 3 3 0 0 1-3 3m5.3-5.8l1.1-2.1L13 1.7l-2.1 1.1-1.1-.4L9 0H7l-.8 2.3-1 .4-2.1-1.1-1.5 1.5 1.1 2.1-.4 1L0 7v2l2.3.8.4 1.1L1.6 13 3 14.4l2.1-1.1 1.1.4L7 16h2l.8-2.3 1.1-.4 2.1 1.1 1.4-1.4-1.1-2.1.4-1.1L16 9V7l-2.3-.8-.4-1"/></svg>
		</a>
		<div class="wb-more-panel" id="J_WBBFY_setting">
			<div class="wb-items">
				<label class="wb-item">
					<span>标题翻译</span>
					<input class="wb-switch" name="title" type="checkbox" value="1">
				</label>
				<label class="wb-item">
					<span>正文翻译</span>
					<input class="wb-switch" name="content" type="checkbox" value="1">
				</label>
				<label class="wb-item">
					<span>保留原文</span>
					<input class="wb-switch" name="keep" type="checkbox" value="1">
				</label>
			</div>
		</div>
	</div>
</div>
