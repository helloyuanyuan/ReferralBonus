<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><?php $APP->tpl->p("head","","0");?>
<section class="main animated fadeInDown">
	<div class="main-box">
		<h1 class="jjr-register"></h1>
		<p class="rb-row"><input type="text" id="username" placeholder="姓名" class="input" /></p>
		<p class="rb-row"><input type="tel" id="phone" placeholder="手机" class="input" /></p>
		<p class="rb-row"><input type="password" pattern="[0-9]*" id="password" placeholder="密码" class="input" /></p>
		<p class="rb-row rb-select">
			<select id="job" class="select">
				<option value="">选择您的身份类型</option>
				<option value="GSYG">公司员工</option>
				<option value="WXFS">大众经纪人</option>
				<option value="ZJGS">中介公司</option>
				<option value="DLGS">代理公司</option>
				<option value="HZHB">合作伙伴</option>
			</select>
			<i class="icon-down-open-big"></i>
		</p>
		<p class="rb-row company-name"><input type="text" id="company" placeholder="公司名称" class="input" /></p>
		<p class="rb-row registerRuleCheck"><input type="checkbox" checked="checked" id="agree" />&nbsp;<a href="<?php echo site_url('msg','id=1');?>">我同意以上注册协议</a></p>
		<div class="recommend-tips">
			<h6>提示</h6>
			<p>请输入正确的姓名以及电话，否则可能无法结佣。</p>
		</div>
		<p class="rb-submit"><input type="button" value="注册" class="btn" id="J_submitReg" /></p>
		<p class="register-tips">置业顾问、案场经理请勿注册为经纪人</p>
	</div>
</section>
<?php $APP->tpl->p("foot","","0");?>