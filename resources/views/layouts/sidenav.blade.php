<!-- BEGIN: Left Aside -->
			
<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

	<!-- BEGIN: Aside Menu -->
	<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
		<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
			@if(auth()->user()->isAdmin == 1)
			<li class="m-menu__item  m-menu__item--active" aria-haspopup="true">
				<a href="/charts" class="m-menu__link "><i class="m-menu__link-icon flaticon-line-graph"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">
				Dashboard
		</span>
							<span class="m-menu__link-badge"><span class="m-badge m-badge--danger"></span></span> </span></span></a></li>
			<li class="m-menu__section ">
				<h4 class="m-menu__section-text"></h4>
			</li>
			@endif
			<li class="m-menu__item  m-menu__item--submenu">
				<a href="/" class="m-menu__link m-menu__toggle">
					<i class="m-menu__link-icon flaticon-layers"></i>
					<span class="m-menu__link-text">Tickets</span>
				</a>
			</li>
			@if(auth()->user()->isAdmin == 1)
			<li class="m-menu__item  m-menu__item--submenu">
				<a href="/ticket/closed" class="m-menu__link m-menu__toggle">
					<i class="m-menu__link-icon flaticon-layers"></i>
					<span class="m-menu__link-text">Completed Tickets</span>
				</a>
			</li>
			
			<li class="m-menu__item  m-menu__item--submenu">
				<a href="/user/list" class="m-menu__link m-menu__toggle">
					<i class="m-menu__link-icon flaticon-user"></i>
					<span class="m-menu__link-text">Users Related</span>
				</a>
			</li>
			@endif
			
		</ul>
	</div>

	<!-- END: Aside Menu -->
</div>

<!-- END: Left Aside -->