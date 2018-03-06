<div id="top">
	<div class="topMain">
		<div class="topMainLeft cf">
			<a href="" class="topMainLeftLogin">亲，请登录</a> <a href="">免费注册</a> <a href="">手机逛淘宝</a>
		</div>
		<ul class="topMainRight cf">
			<li class="topMainRight1 topMainRightLiList">
				<div class="topMainRightHd">
					<a href="">我的淘宝 <span class="icon iconfont">&#xe664;</span></a> 
				</div>
				<div class="topMainRightBd">
					<?php 
						for($i=0;$i<sizeof($data['index']['topMainRight1']);$i++){
							echo '<a href="javascript:;">' . $data['index']['topMainRight1'][$i] . '</a>';
						}
					?>
				</div>
			</li>
			<li class="topMainRight2">
				<div class="topMainRightHd">
					<a href=""><span class="icon iconfont &#xe6d4;">&#xe6d4;</span>购物车<span class="icon iconfont">&#xe664;</span></a>
				</div>
			</li>
			<li class="topMainRight3 topMainRightLiList">
				<div class="topMainRightHd">
					<a href=""><span class="icon iconfont">&#x3432;</span>收藏夹<span class="icon iconfont">&#xe664;</span></a>
				</div>
				<div class="topMainRightBd">
					<a href="">收藏的宝贝</a>
					<a href="">收藏的店铺</a>
				</div>
			</li>
			<li class="topMainRight4">
				<div class="topMainRightHd">
					<a href="">商品分类</a>
				</div>
			</li>
			<li class="topMainRight5">|</li>
			<li class="topMainRight6 topMainRightLiList">
				<div class="topMainRightHd">
					<a href="">卖家中心<span class="icon iconfont">&#xe664;</span></a>
				</div>
				<div class="topMainRightBd">
					<a href="">免费开店</a>
					<a href="">已卖出的宝贝</a>
					<a href="">出售中的宝贝</a>
					<a href="">卖家服务市场</a>
					<a href="">卖家培训中心</a>
				</div>
			</li>
			<li class="topMainRight7 topMainRightLiList">
				<div class="topMainRightHd">
					<a href="">联系客服<span class="icon iconfont">&#xe664;</span></a>
				</div>
				<div class="topMainRightBd">
					<a href="">消费者客服</a>
					<a href="">卖家客服</a>
				</div>
			</li>
			<li class="topMainRight8 topMainRightLiList">
				<div class="topMainRightHd">
					<a href="">网站导航<span class="icon iconfont">&#xe664;</span></a>
				</div>
				<div class="topMainRightBd">
					<ul>
						<li>
							<table class="topMainRightBdTable1">
								<tr><th colspan="4">主题市场</th></tr>
								<?php 
									for($i=0;$i<sizeof($data['index']['topMainRightBdTable1']);$i++){
										echo "<tr>";
										for($j=0;$j<sizeof($data['index']['topMainRightBdTable1'][$i]);$j++){
											echo "<td><a href='javascript:;'>" . $data['index']['topMainRightBdTable1'][$i][$j] . "</a></td>";
										}
										echo "</tr>";
									}
								?>
							</table>
						</li>
						<li>
							<table class="topMainRightBdTable2">
								<tr><th colspan="3">特色购物</th></tr>
								<?php 
									for($i=0;$i<sizeof($data['index']['topMainRightBdTable2']);$i++){
										echo "<tr>";
										for($j=0;$j<sizeof($data['index']['topMainRightBdTable2'][$i]);$j++){
											echo "<td><a href='javascript:;'>" . $data['index']['topMainRightBdTable2'][$i][$j] . "</a></td>";
										}
										echo "</tr>";
									}
								?>
							</table>
						</li>
						<li>
							<table class="topMainRightBdTable3">
								<tr><th colspan="3">当前热点</th></tr>
								<?php 
									for($i=0;$i<sizeof($data['index']['topMainRightBdTable3']);$i++){
										echo "<tr>";
										for($j=0;$j<sizeof($data['index']['topMainRightBdTable3'][$i]);$j++){
											echo "<td><a href='javascript:;'>" . $data['index']['topMainRightBdTable3'][$i][$j] . "</a></td>";
										}
										echo "</tr>";
									}
								?>
							</table>
						</li>
						<li>
							<table class="topMainRightBdTable4">
								<tr><th colspan="3">更多精彩</th></tr>
								<?php 
									for($i=0;$i<sizeof($data['index']['topMainRightBdTable4']);$i++){
										echo "<tr>";
										for($j=0;$j<sizeof($data['index']['topMainRightBdTable4'][$i]);$j++){
											echo "<td><a href='javascript:;'>" . $data['index']['topMainRightBdTable4'][$i][$j] . "</a></td>";
										}
										echo "</tr>";
									}
								?>
							</table>
						</li>
					</ul>
				</div>
			</li>
		</ul>
	</div>
</div>
<div id="banner">
	<div class="bannerMain">
		<img src=<?php echo $baseurl . "/rcms/images/banner.png" ?> width="1190" height="90" alt="" />
	</div>
</div>
<div id="header">
	<div class="logo">
		<a href="">淘宝网logo</a>
	</div>
	<div class="head cf">
		<div class="headLeft">
			<ul class="headLeftHd cf">
				<li class="headLeftHdOn">宝贝</li>
				<li>天猫</li>
				<li>店铺</li>
			</ul>
			<ul class="headLeftBd cf">
				<li class="on">
					<div class="headLeftBdSearch cf">
						<div class="headLeftBdSearchMain">
							<input type="text" name="" class="headLeftBdSearchInput" placeholder="     当下热门电影：小黄人大眼萌">
						</div>
						<input type="submit" value="搜索" class="headLeftBdSearchButton">
					</div>
					<a class="headLeftBdHighSearch">高级搜索</a>
					<div class="headLeftBdTips">
						<a href="" class="h">肉松饼</a>
						<a href="">蛋糕</a>
						<a href="" class="h">糕点</a>
						<a href="">时尚连衣裙</a>
						<a href="">夏日女鞋</a>
						<a href="" class="h">男鞋</a>
						<a href="">月饼</a>
						<a href="">秋装连衣裙</a>
						<a href="">牛仔裤男</a>
						<a href="">长袖女士T</a>
						<a href="">运动鞋男</a>
						<a href="">夹克男</a>
						<a href="">男士长袖T</a>
					</div>
					<a href="" class="headLeftBdTipsMore">更多</a>
				</li>
				<li class="headLeftBdLi2">
					<div class="headLeftBdSearch cf">
						<div class="headLeftBdSearchMain">
							<input type="text" name="" class="headLeftBdSearchInput" placeholder="     苹果新品手机 天猫首发！">
						</div>
						<input type="submit" value="搜索" class="headLeftBdSearchButton">
					</div>
					<a class="headLeftBdHighSearch">高级搜索</a>
					<div class="headLeftBdTips">
						<a href="" class="TM">连衣裙</a>
						<a href="">运动鞋</a>
						<a href="" class="TM">iphone6s</a>
						<a href="">智能手机</a>
						<a href="">bb霜</a>
						<a href="">笔记本电脑</a>
						<a href="">沙发</a>
						<a href="" class="TM">铁皮枫斗</a>
						<a href="">女包</a>
						<a href="">男士手表</a>
						<a href="" class="TM">文具</a>
						<a href="">婚庆床品</a>
						<a href="">冰箱</a>
						<a href="">奶粉</a>
					</div>
				</li>
				<li class="headLeftBdLi3">
					<div class="headLeftBdSearch cf">
						<div class="headLeftBdSearchMain">
							<input type="text" name="" class="headLeftBdSearchInput" placeholder="">
						</div>
						<input type="submit" value="搜索" class="headLeftBdSearchButton">
					</div>
					<a class="headLeftBdHighSearch">高级搜索</a>
					<div class="headLeftBdTips cf">
						<a href="" class="h">肉松饼</a>
						<a href="">蛋糕</a>
						<a href="" class="h">糕点</a>
						<a href="">时尚连衣裙</a>
						<a href="">夏日女鞋</a>
						<a href="" class="h">男鞋</a>
						<a href="">月饼</a>
						<a href="">秋装连衣裙</a>
						<a href="">牛仔裤男</a>
						<a href="">长袖女士T</a>
						<a href="">运动鞋男</a>
						<a href="">夹克男</a>
						<a href="">男士长袖T</a>
					</div>
					<a href="" class="headLeftBdTipsMore">更多</a>
				</li>
			</ul>
		</div>
		<div class="headRight cf">
			<a href="javascript:;" class="headRightClose"><span class="icon iconfont">&#xe616;</span></a>
			<div class="headRightMain">
				<div class="headRightMainTop">
					<a href="">手机逛淘宝</a>
				</div>
				<div class="headRightMainBottom">
					<a href=""><img src=<?php echo $baseurl . "/rcms/images/bCode.png" ?> width="80" height="80" alt="" /></a>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="nav">
	<div class="navLeft"></div>
	<div class="navRight cf">
		<ul class="navRightUl1">
			<li><a href="">天猫</a></li>
			<li><a href="">聚划算</a></li>
			<li><a href="">超市</a></li>
			<li><a href="">头条</a></li>
			<li class="navRightUl1Last">|</li>
		</ul>
		<ul class="navRightUl2">
			<li><a href="">阿里旅行</a></li>
			<li><a href="">淘抢购</a></li>
			<li><a href="">司法拍卖</a></li>
			<li><a href="">一淘</a></li>
			<li><a href="">电器城</a></li>
			<li><a href="">美妆闪购</a></li>
			<li><a href="">阿里小智</a></li>
			<li><a href="">特色中国</a></li>
		</ul>
	</div>
</div>