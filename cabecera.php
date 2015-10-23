<script type="text/javascript">
	// Choosen
	jQuery(document).ready(function () {
		jQuery('select').each(function () {
            if (typeof jQuery(this).chosen !== 'function') return;
            jQuery(this).chosen({
                disable_search: true
            });
        });
		jQuery('.chzn-container').css('min-width', '75px');
	});
	// Messages
	jQuery(document).ready(function () {
		jQuery('.messages .close').click(function() {
			jQuery(this).parent().fadeOut();
		});
	});
</script>
<!-- Google Tag Manager -->
<script>dataLayer = [{"visitorType":"No Logado","tipoDePagina":"home"}];</script>

<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MSHMBX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MSHMBX');</script>
<!-- End Google Tag Manager -->
            <div id="toploginwrapper">
            <span id="topborder"></span>
            <div id="toplogin">
                                <div class="toploginbox">
                    <span class="registerbutton">
                        <a href="http://animalear.com/animalear/account/create/">Regístrate y gana un 5% de descuento</a>
                    </span>
                    <span class="loginbutton">
                        <span class="icon"></span><span class="txt">Acceso a área usuarios</span>
                    </span>
                    <div class="loginform">
                        <div class="block block-login">
	<span class="closetab">cerrar</span>
    <div class="block-title">
        <h2>Inicia sesión en Animalear</h2>
    </div>
    <form id="login-form-flotant" action="http://animalear.com/customer/account/loginPost/" method="post">
        <ul class="form-list">
            <li>
                <label for="mini-login">Email:</label>
                <div class="input-box">
                	<input type="text" name="login[username]" id="mini-login" class="input-text" />
                </div>
            </li>
            <li>
                <label for="mini-password">Contraseña:</label>
                <div class="input-box">
                	<input type="password" name="login[password]" id="mini-password" class="input-text" />
                </div>
            </li>

			<li>
				<a href="http://animalear.com/customer/account/forgotpassword/" class="forgot">¿Has olvidado tu contraseña?</a>
	            <div class="buttons-set">
		            <button type="submit" title="Iniciar sesión" class="button"><span><span>Iniciar sesión</span></span></button>
		        </div>

	            <span class="full-line"></span>
	            <div class="signin">¿Todavía no formas parte de Animalear? <a href="http://animalear.com/customer/account/create/">Regístrate ahora</a></div>
	            <span class="full-line"></span>
	        </li>
        </ul>
    </form>
    <div class="fb-seprate"></div>
<div class="account-login">
        <div class="fb-login">
            <div class="content">
                <div id="form-loginfb">
                	                    	No te encuentras conectado a Facebook.<br/>Haz clic en el siguiente botón para conectarte a Animalear con Facebook.                                    </div>
            </div>
        </div>
        <div class="new-users">
            <div class="buttons-set">
                					<!--<fb:login-button perms="email">Iniciar sesión</fb:login-button>-->
                    <a class="fb_button fb_button_medium" onclick="login();return false;" href="#">
                        <span class="fb-icon"></span><span class="fb_button_text">Iniciar sesión</span>
                    </a>

            </div>
        </div>
</div>

<script src="http://connect.facebook.net/es_ES/all.js"></script>
<script type="text/javascript">
var newwindow;
var intId;
function login(){
	var  screenX    = typeof window.screenX != 'undefined' ? window.screenX : window.screenLeft;
	var	 screenY    = typeof window.screenY != 'undefined' ? window.screenY : window.screenTop;
	var	 outerWidth = typeof window.outerWidth != 'undefined' ? window.outerWidth : document.body.clientWidth;
	var	 outerHeight = typeof window.outerHeight != 'undefined' ? window.outerHeight : (document.body.clientHeight - 22);
	var	 width    = 500;
	var	 height   = 270;
	var	 left     = parseInt(screenX + ((outerWidth - width) / 2), 10);
	var	 top      = parseInt(screenY + ((outerHeight - height) / 2.5), 10);
	var	 features = (
			'width=' + width +
			',height=' + height +
			',left=' + left +
			',top=' + top
		  );

	newwindow=window.open('https://www.facebook.com/dialog/oauth?client_id=498120310297606&redirect_uri=http%3A%2F%2Fanimalear.com%2Ffblogin%2Findex%2Findex%2Fauth%2F1%2F&state=79ed2c02d12bc3c23113fbacf767b98c&display=popup&scope=email','Login_by_facebook',features);

	if (window.focus) {
		newwindow.focus()
	}
	return false;
}
</script></div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
        //<![CDATA[
        jQuery('#toplogin .loginbutton span').click(function () {
            jQuery(this).parent().parent().find('.loginform').toggle();
        });

        jQuery('#toplogin .closetab').click(function () {
            jQuery(this).parent().parent().hide();
        });
        //]]>
    </script>
<div class="wrapper">
        <noscript>
        <div class="global-site-notice noscript">
            <div class="notice-inner">
                <p>
                    <strong>Javascript parece estar deshabilitado de tu navegador.</strong><br />
                    Debes de tener Javascript habilitado en tu navegador para poder utilizar todas las funcionalidades de este sitio web.                </p>
            </div>
        </div>
    </noscript>
        <div class="header-wrapper">
        <div class="header-container">
    <div class="header" role="banner">
        	        <h1 class="logo"><a href="http://animalear.com/" itemscope itemtype="http://schema.org/Organization" title="Animalear.com" class="logo"><img src="http://media.animalear.com/skin/frontend/default/animalear/images/logo.jpg" itemprop="name" alt="Animalear.com – La tienda de los animales" /></a></h1>
	            	        <div class="quick-access">
                <span id="free-shipping-header">
                    <span class="free-shipping-header"><span class="truck"></span>Envíos GRATIS a partir de 39€</span>
                </span>
	            <div class="cart-container">
	<div class="block block-cart-button">
		<div class="block-title">
	        <span class="cart-icon"></span>
	        <span class="block-cart-num-products">0 Items</span>
	        <span>-</span>
	        <span class="top-price"><span class="price">0,00€</span></span>
	    </div>
	</div>
	<script type="text/javascript">
		jQuery(document).ready(function () {
			jQuery(".block-cart-button").click(function() {
				jQuery(".block-cart").fadeIn();
			});
		});
	</script>
		<div class="block block-cart">
	    	    <div class="block-title">
	        <span class="cart-icon"></span>
	        <span class="button-close">close</span>
	    </div>
	    <div class="block-content">
	    	    	        <p class="empty">No tienes artículos en tu cesta de la compra.</p>

	    	            	<span class="free-shipping-small"><span>Sólo te falta <span class="price">39,00€</span> para tener envío gratis</span></span>
				<div class="full-line"></div>
	    	    	    </div>
	</div>
	<script type="text/javascript">
		jQuery(document).ready(function () {
			jQuery(".block-cart .button-close").click(function() {
				jQuery(".block-cart").fadeOut();
			});
		});

		minicartProductRemove = function(button, url) {
			url = url + 'isAjax/1/';
			jQuery(button).hide();
			jQuery(button).next().show();
			try {
                jQuery.ajax({
                    url: url,
                    dataType: 'json',
                    type : 'get',
                    success: function(data)
                    {
                        if (data.sidebar && jQuery('.quick-access .cart-container')){
                        	jQuery('.quick-access .cart-container').remove();
                            jQuery('.quick-access').prepend(data.sidebar);
                            jQuery('.block-cart').show();
                        } else {
                            alert(data.message);
                        }
                    }
				});
            } catch (e) {
            }
		}
	</script>
	</div>	            <form id="search_mini_form" action="http://animalear.com/catalogsearch/result/" method="get">
    <div class="form-search">
        <input id="search" type="text" name="q" value="" class="input-text" maxlength="128" />
        <button type="submit" title="Buscar" class="button"><span><span>Buscar</span></span></button>
        <div id="search_autocomplete" class="search-autocomplete" style="z-index:9999; background-color:#FFF;"></div>
        <script type="text/javascript">
        //<![CDATA[
            var searchForm = new Varien.searchForm('search_mini_form', 'search', 'Buscador de productos');
            //searchForm.initAutocomplete('http://animalear.com/catalogsearch/ajax/suggest/', 'search_autocomplete');
        //]]>
        </script>
    </div>
</form>
	        </div>
	        	        </div>
</div>
	<div class="btn-responsive-menu">
    <div class="responsive-menu-lines"><span></span><span></span><span></span></div>
    <label>Menu</label>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('.btn-responsive-menu').click(function() {
                jQuery('.nav-container').toggle();
                if(jQuery('.btn-responsive-menu').hasClass('active')) {
                    jQuery('.btn-responsive-menu').removeClass("active");
                }else {
                    jQuery('.btn-responsive-menu').addClass("active");
                }
            });
        });
    </script>
</div>

<div class="nav-container">
    <ul id="navigator" class="nav" role="navigation">
						        			                                                                                                                <li class="parent first">
                    <a href="http://animalear.com/perros.html">
                        <span>Perros</span>
                        <span class="icon"></span>
                    </a>
                    <div class="menu-layer">
                                                <div class="top-categories">
                            <h4 class="title">Top categorías <span class="name">Perros</span></h4>
                            <ul class="categories">
                                                                                                                                                                            <li class="subcategory">
                                            <a href="http://animalear.com/perros/comida/pienso-para-perros.html" title="Pienso para perros">
                                                Pienso para perros                                            </a>
                                        </li>
                                                                                                                                                                                        <li class="subcategory">
                                            <a href="http://animalear.com/perros/comida/dieta-veterinaria.html" title="Dieta Veterinaria perros">
                                                Dieta Veterinaria perros                                            </a>
                                        </li>
                                                                                                                                                                                                                                                            <li class="subcategory">
                                            <a href="http://animalear.com/perros/snacks-y-huesos.html" title="Snacks y huesos">
                                                Snacks y huesos                                            </a>
                                        </li>
                                                                                                                                                                                        <li class="subcategory">
                                            <a href="http://animalear.com/perros/accesorios-para-viajes.html" title="Accesorios para viajes">
                                                Accesorios para viajes                                            </a>
                                        </li>
                                                                                                                                                                                        <li class="subcategory">
                                            <a href="http://animalear.com/perros/transportines.html" title="Transportines">
                                                Transportines                                            </a>
                                        </li>
                                                                                                                                                                                        <li class="subcategory">
                                            <a href="http://animalear.com/perros/casetas-para-perros.html" title="Casetas para perros">
                                                Casetas para perros                                            </a>
                                        </li>
                                        		                	</ul>
			                <a href="http://animalear.com/perros.html">
			                    <span>Todas las categorías para <span class="name">Perros</span> &gt;</span>
			                </a>
	                	</div>
	                		                	<div class="top-brands">
	                		<h4 class="title">Top marcas <span class="name">Perros</span></h4>
	                		<ul class="brands">
                                                                                                        <li class="">
                    <a href="http://animalear.com/pienso-royal-canin.html" title="Royal Canin">
                    Royal Canin                    </a>
            </li>
    <li class="">
                    <a href="http://animalear.com/hills-perros.html" title="Hills">
                    Hills                    </a>
            </li>
    <li class="">
                    <a href="http://animalear.com/pienso-affinity-advance.html" title="Advance">
                    Advance                    </a>
            </li>
    <li class="">
                    <a href="http://animalear.com/pienso-eukanuba.html" title="Eukanuba">
                    Eukanuba                    </a>
            </li>
    <li class="">
                    <a href="http://animalear.com/pienso-acana.html" title="Acana">
                    Acana                    </a>
            </li>
    <li class="">
                    <a href="http://animalear.com/pienso-orijen.html" title="Orijen">
                    Orijen                    </a>
            </li>
                                	                		</ul>
	                	</div>
	                		                		                							<div class="featured">
			<h4 class="title">También destacamos</h4>
			<a href="http://animalear.com/promo-nutro-adult.html" title="" class="product-image">
				<div class="featured-item">
					<div class="overflowh">
						<div class="image">
							<img src="http://media.animalear.com/media/catalog/product/cache/1/small_image/138x/9df78eab33525d08d6e5fb8d27136e95/n/u/nutro_3_greenies.jpg" width="138" height="138" alt="" />
				        </div>
				        <div class="information">
					    	<div class="title">Promo: Nutro Adult Pollo Razas Grandes 12 kg +3kg +Greenies regular</div>
					    	<div class="brand">
                                                                                                    <h4 class="product-brand">Nutro</h4>
                                                            </div>
                            <div class="price">
                                                                                                                                    <span class="special-price">66,06€</span>
                                                                <span class="old-price">48,10€</span>
                            </div>
					    </div>
					</div>
				</div>
			</a>
	    </div>
		                </div>
	            </li>
	                                                                                                                <li class="parent">
                    <a href="http://animalear.com/gatos.html">
                        <span>Gatos</span>
                        <span class="icon"></span>
                    </a>
                    <div class="menu-layer">
                                                <div class="top-categories">
                            <h4 class="title">Top categorías <span class="name">Gatos</span></h4>
                            <ul class="categories">
                                                                                                                                                                                                                                                                                                                    <li class="subcategory">
                                            <a href="http://animalear.com/gatos/comida/dieta-veterinaria.html" title="Dieta Veterinaria gatos">
                                                Dieta Veterinaria gatos                                            </a>
                                        </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <li class="subcategory">
                                            <a href="http://animalear.com/gatos/higiene.html" title="Higiene para gatos">
                                                Higiene para gatos                                            </a>
                                        </li>
                                                                                                                                                                                        <li class="subcategory">
                                            <a href="http://animalear.com/gatos/comida/pienso-para-gatos.html" title="Pienso para gatos">
                                                Pienso para gatos                                            </a>
                                        </li>
                                                                                                                                                                                        <li class="subcategory">
                                            <a href="http://animalear.com/gatos/comida/humeda-latas.html" title="Húmeda latas gatos">
                                                Húmeda latas gatos                                            </a>
                                        </li>
                                                                                                                                                                                        <li class="subcategory">
                                            <a href="http://animalear.com/gatos/rascadores-para-gatos.html" title="Rascadores para gatos">
                                                Rascadores para gatos                                            </a>
                                        </li>
                                                                                                                                                                                        <li class="subcategory">
                                            <a href="http://animalear.com/gatos/arena-para-gatos.html" title="Arena para gatos">
                                                Arena para gatos                                            </a>
                                        </li>
                                        		                	</ul>
			                <a href="http://animalear.com/gatos.html">
			                    <span>Todas las categorías para <span class="name">Gatos</span> &gt;</span>
			                </a>
	                	</div>
	                		                	<div class="top-brands">
	                		<h4 class="title">Top marcas <span class="name">Gatos</span></h4>
	                		<ul class="brands">
                                                                                                        <li class="">
                    <a href="http://animalear.com/royal-canin-gatos.html" title="Royal Canin">
                    Royal Canin                    </a>
            </li>
    <li class="">
                    <a href="http://animalear.com/gourmet.html" title="Gourmet">
                    Gourmet                    </a>
            </li>
    <li class="">
                    <a href="http://animalear.com/affinity-advance-gatos.html" title="Advance">
                    Advance                    </a>
            </li>
    <li class="">
                    <a href="http://animalear.com/hills-gatos.html" title="Hills">
                    Hills                    </a>
            </li>
    <li class="">
                    <a href="http://animalear.com/whiskas.html" title="Whiskas">
                    Whiskas                    </a>
            </li>
    <li class="">
                    <a href="http://animalear.com/orijen-gatos.html" title="Orijen">
                    Orijen                    </a>
            </li>
                                	                		</ul>
	                	</div>
	                		                		                							<div class="featured">
			<h4 class="title">También destacamos</h4>
			<a href="http://animalear.com/collar-preventef-gato.html" title="" class="product-image">
				<div class="featured-item">
					<div class="overflowh">
						<div class="image">
							<img src="http://media.animalear.com/media/catalog/product/cache/1/small_image/138x/9df78eab33525d08d6e5fb8d27136e95/c/o/collar-preventef-para-gato.jpg" width="138" height="138" alt="" />
				        </div>
				        <div class="information">
					    	<div class="title">Collar Preventef gato</div>
					    	<div class="brand">
                                                                                                    <h4 class="product-brand">Virbac</h4>
                                                            </div>
                            <div class="price">
                                                                                                                                    <span class="special-price">12,39€</span>
                                                                <span class="old-price">8,60€</span>
                            </div>
					    </div>
					</div>
				</div>
			</a>
	    </div>
		                </div>
	            </li>
	                                                                                                                <li class="parent">
                    <a href="http://animalear.com/roedores.html">
                        <span>Roedores</span>
                        <span class="icon"></span>
                    </a>
                    <div class="menu-layer">
                                                <div class="top-categories">
                            <h4 class="title">Top categorías <span class="name">Roedores</span></h4>
                            <ul class="categories">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <li class="subcategory">
                                            <a href="http://animalear.com/roedores/juguetes-para-roedores.html" title="Juguetes para roedores">
                                                Juguetes para roedores                                            </a>
                                        </li>
                                                                                                                                                                                        <li class="subcategory">
                                            <a href="http://animalear.com/roedores/barritas-y-snacks.html" title="Barritas y snacks">
                                                Barritas y snacks                                            </a>
                                        </li>
                                                                                                                                                                                        <li class="subcategory">
                                            <a href="http://animalear.com/roedores/jaulas-para-roedores.html" title="Jaulas para roedores">
                                                Jaulas para roedores                                            </a>
                                        </li>
                                                                                                                                                                                        <li class="subcategory">
                                            <a href="http://animalear.com/roedores/henos-y-bases.html" title="Henos y bases">
                                                Henos y bases                                            </a>
                                        </li>
                                                                                                                                                                                        <li class="subcategory">
                                            <a href="http://animalear.com/roedores/higiene-y-belleza.html" title="Higiene para roedores">
                                                Higiene para roedores                                            </a>
                                        </li>
                                                                                                                                                                                        <li class="subcategory">
                                            <a href="http://animalear.com/roedores/comida-para-roedores.html" title="Comida para roedores">
                                                Comida para roedores                                            </a>
                                        </li>
                                        		                	</ul>
			                <a href="http://animalear.com/roedores.html">
			                    <span>Todas las categorías para <span class="name">Roedores</span> &gt;</span>
			                </a>
	                	</div>
	                		                	<div class="top-brands">
	                		<h4 class="title">Top marcas <span class="name">Roedores</span></h4>
	                		<ul class="brands">
                                                                                                        <li class="">
                    <a href="http://animalear.com/cunipic.html" title="Cunipic">
                    Cunipic                    </a>
            </li>
    <li class="">
                    <a href="http://animalear.com/vitakraft.html" title="Vitakraft">
                    Vitakraft                    </a>
            </li>
    <li class="">
                    <a href="http://animalear.com/cominter.html" title="Cominter">
                    Cominter                    </a>
            </li>
    <li class="">
                    <a href="http://animalear.com/voltrega.html" title="Voltrega">
                    Voltrega                    </a>
            </li>
    <li class="">
                    <a href="http://animalear.com/nayeco.html" title="Nayeco">
                    Nayeco                    </a>
            </li>
    <li class="">
                    <a href="http://animalear.com/axis-biozoo.html" title="Axis-Biozoo">
                    Axis-Biozoo                    </a>
            </li>
                                	                		</ul>
	                	</div>
	                		                		                							<div class="featured">
			<h4 class="title">También destacamos</h4>
			<a href="http://animalear.com/vitakraft-vegetal-clean-corn.html" title="" class="product-image">
				<div class="featured-item">
					<div class="overflowh">
						<div class="image">
							<img src="http://media.animalear.com/media/catalog/product/cache/1/small_image/138x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft-vegetal-clean-corn.jpg" width="138" height="138" alt="" />
				        </div>
				        <div class="information">
					    	<div class="title">Vitakraft Vegetal Clean Corn </div>
					    	<div class="brand">
                                                                                                    <h4 class="product-brand">Vitakraft</h4>
                                                            </div>
                            <div class="price">
                                                                                                                                    <span class="special-price">5,80€</span>
                                                                <span class="old-price">4,05€</span>
                            </div>
					    </div>
					</div>
				</div>
			</a>
	    </div>
		                </div>
	            </li>
	                                                                                                                <li class="parent">
                    <a href="http://animalear.com/peces.html">
                        <span>Peces</span>
                        <span class="icon"></span>
                    </a>
                    <div class="menu-layer">
                                                <div class="top-categories">
                            <h4 class="title">Top categorías <span class="name">Peces</span></h4>
                            <ul class="categories">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <li class="subcategory">
                                            <a href="http://animalear.com/peces/accesorios-para-acuarios.html" title="Accesorios para acuarios">
                                                Accesorios para acuarios                                            </a>
                                        </li>
                                                                                                                                                                                        <li class="subcategory">
                                            <a href="http://animalear.com/peces/filtros.html" title="Filtros para acuarios">
                                                Filtros para acuarios                                            </a>
                                        </li>
                                                                                                                                                                                        <li class="subcategory">
                                            <a href="http://animalear.com/peces/iluminacion-para-acuarios.html" title="Iluminación para acuarios">
                                                Iluminación para acuarios                                            </a>
                                        </li>
                                                                                                                                                                                        <li class="subcategory">
                                            <a href="http://animalear.com/peces/acuarios-para-peces.html" title="Acuarios para peces">
                                                Acuarios para peces                                            </a>
                                        </li>
                                                                                                                                                                                        <li class="subcategory">
                                            <a href="http://animalear.com/peces/comida-para-peces-tropicales.html" title="Comida para peces tropicales">
                                                Comida para peces tropicales                                            </a>
                                        </li>
                                                                                                                                                                                        <li class="subcategory">
                                            <a href="http://animalear.com/peces/comida-para-peces-de-agua-fria.html" title="Comida para peces de agua fria">
                                                Comida para peces de agua fria                                            </a>
                                        </li>
                                        		                	</ul>
			                <a href="http://animalear.com/peces.html">
			                    <span>Todas las categorías para <span class="name">Peces</span> &gt;</span>
			                </a>
	                	</div>
	                		                	<div class="top-brands">
	                		<h4 class="title">Top marcas <span class="name">Peces</span></h4>
	                		<ul class="brands">
                                                                                                        <li class="">
                    <a href="http://animalear.com/tetra.html" title="Tetra">
                    Tetra                    </a>
            </li>
    <li class=" no-link">
                    <span>
                    Wave                    </span>
            </li>
    <li class="">
                    <a href="http://animalear.com/san-dimas.html" title="SanDimas">
                    SanDimas                    </a>
            </li>
    <li class=" no-link">
                    <span>
                    Ocean Nutrition                    </span>
            </li>
    <li class=" no-link">
                    <span>
                    Hydor                    </span>
            </li>
    <li class="">
                    <a href="http://animalear.com/rena.html" title="Rena">
                    Rena                    </a>
            </li>
                                	                		</ul>
	                	</div>
	                		                		                							<div class="featured">
			<h4 class="title">También destacamos</h4>
			<a href="http://animalear.com/tetra-limpiafondos-gc30.html" title="" class="product-image">
				<div class="featured-item">
					<div class="overflowh">
						<div class="image">
							<img src="http://media.animalear.com/media/catalog/product/cache/1/small_image/138x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra-limpiafondos-gc30.jpg" width="138" height="138" alt="" />
				        </div>
				        <div class="information">
					    	<div class="title">Tetra Limpiafondos GC30</div>
					    	<div class="brand">
                                                                                                    <h4 class="product-brand">Tetra</h4>
                                                            </div>
                            <div class="price">
                                                                                                                                    <span class="special-price">17,30€</span>
                                                                <span class="old-price">10,20€</span>
                            </div>
					    </div>
					</div>
				</div>
			</a>
	    </div>
		                </div>
	            </li>
	                                                                                                                <li class="parent">
                    <a href="http://animalear.com/pajaros.html">
                        <span>Pájaros</span>
                        <span class="icon"></span>
                    </a>
                    <div class="menu-layer">
                                                <div class="top-categories">
                            <h4 class="title">Top categorías <span class="name">Pájaros</span></h4>
                            <ul class="categories">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <li class="subcategory">
                                            <a href="http://animalear.com/pajaros/jaulas-para-pajaros.html" title="Jaulas para pájaros">
                                                Jaulas para pájaros                                            </a>
                                        </li>
                                                                                                                                                                                        <li class="subcategory">
                                            <a href="http://animalear.com/pajaros/juguetes-para-pajaros.html" title="Juguetes para pájaros">
                                                Juguetes para pájaros                                            </a>
                                        </li>
                                                                                                                                                                                        <li class="subcategory">
                                            <a href="http://animalear.com/pajaros/vitaminas-para-pajaros.html" title="Vitaminas para pájaros">
                                                Vitaminas para pájaros                                            </a>
                                        </li>
                                                                                                                                                                                        <li class="subcategory">
                                            <a href="http://animalear.com/pajaros/arenas-e-higiene.html" title="Arenas e higiene">
                                                Arenas e higiene                                            </a>
                                        </li>
                                                                                                                                                                                        <li class="subcategory">
                                            <a href="http://animalear.com/pajaros/comida-para-pajaros.html" title="Comida para pájaros">
                                                Comida para pájaros                                            </a>
                                        </li>
                                                                                                                                                                                        <li class="subcategory">
                                            <a href="http://animalear.com/pajaros/barritas-y-snacks.html" title="Barritas y snacks">
                                                Barritas y snacks                                            </a>
                                        </li>
                                        		                	</ul>
			                <a href="http://animalear.com/pajaros.html">
			                    <span>Todas las categorías para <span class="name">Pájaros</span> &gt;</span>
			                </a>
	                	</div>
	                		                	<div class="top-brands">
	                		<h4 class="title">Top marcas <span class="name">Pájaros</span></h4>
	                		<ul class="brands">
                                                                                                        <li class="">
                    <a href="http://animalear.com/voltrega.html" title="Voltrega">
                    Voltrega                    </a>
            </li>
    <li class="">
                    <a href="http://animalear.com/axis-biozoo.html" title="Axis-Biozoo">
                    Axis-Biozoo                    </a>
            </li>
    <li class=" no-link">
                    <span>
                    Pio-Pa                    </span>
            </li>
    <li class="">
                    <a href="http://animalear.com/psittacus.html" title="Psittacus">
                    Psittacus                    </a>
            </li>
    <li class="">
                    <a href="http://animalear.com/nayeco.html" title="Nayeco">
                    Nayeco                    </a>
            </li>
    <li class=" no-link">
                    <span>
                    Sanibird                    </span>
            </li>
                                	                		</ul>
	                	</div>
	                		                		                							<div class="featured">
			<h4 class="title">También destacamos</h4>
			<a href="http://animalear.com/juguete-natural-stick-20-cm.html" title="" class="product-image">
				<div class="featured-item">
					<div class="overflowh">
						<div class="image">
							<img src="http://media.animalear.com/media/catalog/product/cache/1/small_image/138x/9df78eab33525d08d6e5fb8d27136e95/j/u/juguete-natural-stick-20-cm.jpg" width="138" height="138" alt="" />
				        </div>
				        <div class="information">
					    	<div class="title">Juguete Natural Stick 20 cm.</div>
					    	<div class="brand">
                                                                                                    <h4 class="product-brand">Nayeco</h4>
                                                            </div>
                            <div class="price">
                                                                                                                                    <span class="special-price">2,12€</span>
                                                                <span class="old-price">2,00€</span>
                            </div>
					    </div>
					</div>
				</div>
			</a>
	    </div>
		                </div>
	            </li>
	                                                                                                                <li class="parent">
                    <a href="http://animalear.com/reptiles.html">
                        <span>Reptiles</span>
                        <span class="icon"></span>
                    </a>
                    <div class="menu-layer">
                                                <div class="top-categories">
                            <h4 class="title">Top categorías <span class="name">Reptiles</span></h4>
                            <ul class="categories">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <li class="subcategory">
                                            <a href="http://animalear.com/reptiles/sustratos-y-arenas.html" title="Sustratos y arenas">
                                                Sustratos y arenas                                            </a>
                                        </li>
                                                                                                                                                                                        <li class="subcategory">
                                            <a href="http://animalear.com/reptiles/comederos.html" title="Comederos para reptiles">
                                                Comederos para reptiles                                            </a>
                                        </li>
                                                                                                                                                                                        <li class="subcategory">
                                            <a href="http://animalear.com/reptiles/accesorios-terrarios.html" title="Accesorios terrarios">
                                                Accesorios terrarios                                            </a>
                                        </li>
                                                                                                                                                                                        <li class="subcategory">
                                            <a href="http://animalear.com/reptiles/luz-y-calefaccion.html" title="Luz y calefacción">
                                                Luz y calefacción                                            </a>
                                        </li>
                                                                                                                                                                                        <li class="subcategory">
                                            <a href="http://animalear.com/reptiles/terrarios.html" title="Terrarios">
                                                Terrarios                                            </a>
                                        </li>
                                                                                                                                                                                        <li class="subcategory">
                                            <a href="http://animalear.com/reptiles/higiene-y-salud.html" title="Higiene y salud">
                                                Higiene y salud                                            </a>
                                        </li>
                                        		                	</ul>
			                <a href="http://animalear.com/reptiles.html">
			                    <span>Todas las categorías para <span class="name">Reptiles</span> &gt;</span>
			                </a>
	                	</div>
	                		                	<div class="top-brands">
	                		<h4 class="title">Top marcas <span class="name">Reptiles</span></h4>
	                		<ul class="brands">
                                                                                                        <li class="">
                    <a href="http://animalear.com/tetra.html" title="Tetra">
                    Tetra                    </a>
            </li>
    <li class="">
                    <a href="http://animalear.com/zoomed.html" title="Zoomed">
                    Zoomed                    </a>
            </li>
    <li class="">
                    <a href="http://animalear.com/nayeco.html" title="Nayeco">
                    Nayeco                    </a>
            </li>
    <li class="">
                    <a href="http://animalear.com/san-dimas.html" title="SanDimas">
                    SanDimas                    </a>
            </li>
    <li class="">
                    <a href="http://animalear.com/sanytol.html" title="Sanytol">
                    Sanytol                    </a>
            </li>
    <li class=" no-link">
                    <span>
                    Rena                    </span>
            </li>
                                	                		</ul>
	                	</div>

									<!--PARTE DEL PROYECTO-->

									<li class="name">
										<a href="busqueda.php">
<div class="cart-container1">
<div class="block block-cart-button1" style="margin-top: 0px;">
<div class="block-title1">
<center><span id="perd"><img src="img/iconoBusqueda.png";> &nbsp;Perdidos/Encontrados</span></center>
<span class="icon1"></span>
</a>
</div>
              	  <!--PARTE DEL PROYECTO-->

	        			    <li class="parent your-pets">
	<a href="http://animalear.com/animalear/">
		<span class="pet-icon"></span><span>Mis mascotas</span><span class="icon"></span>
	</a>
	<div class="menu-layer">
														<img src="http://media.animalear.com/skin/frontend/default/animalear/images/all_animals.png" alt="Me encanta Animalear" title="Me encanta Animalear" class="all-animals" />
			<span class="title">¿Todavía no has configurado tu mascota?</span>
			<span class="subtitle">Configura tu mascota ahora y TE REGALAMOS un 5% de DESCUENTO en tu próxima compra</span>
			<div class="buttons-set">
	            <button type="submit" onclick="location.href='http://animalear.com/animalear/account/create/';"	title="Dinos cómo es tu mascota" class="button"><span><span>Dinos como es tu mascota</span></span></button>
	        </div>

	</div>
</li>
    </ul>
</div>
<script type="text/javascript">
	// To do a function for this seems to be necessary
	function delayHover (element) {
    	timer = setTimeout ( function () {
        	if (jQuery(element).is(':hover')) {
            	jQuery(element).addClass("activex");
			}
		}, 300);
	};

    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        jQuery("#navigator li.parent a").click(function () {
            if(jQuery(this).parent().hasClass('activex')) {
                jQuery(this).parent().removeClass("activex");
            }else {
                jQuery('#navigator li.parent').removeClass('activex');
                jQuery(this).parent().addClass('activex');
            }
        });

    }else {
        jQuery("#navigator li.parent").hover(function () {
            delayHover(jQuery(this));
        }, function () {
            jQuery(this).removeClass('activex');
        });
    }


    jQuery('#navigator .parent > a').each(function () {
        if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            jQuery(this).removeAttr('href');
        }
    });


</script>    	</div>

																				<!--PARTE DEL PROYECTO-->
	    <div class="page-wrapper1">
		<div class="home-banner-carousel-wrapper1">
<span class="wave-white-minus-top1"></span>
<img src="img/slider.jpg" style='width:100%;' border="0" alt="Null">
<!--<ul class="home-banner-carousel multiple-slider">
                                            <li class="home-banner no-pets-banner twenty-five">
    <div class="home-banner-box">
        <div class="content">
            <div class="left-block"></div>
            <div class="right-block"></div>
        </div>
    </div>
</li>                </ul>
<div class="buttons">
    <div id="home-banner-prev"></div>
    <div id="home-banner-next"></div>
</div>

</div>-->

																			<!--PARTE DEL PROYECTO-->

<div class="banner-menu-pet-wrapper" style="display:none;">
						<div class="banner-menu-no-pet">
			<div class="favourite">
				<span class="title">Lo que más nos piden:</span>
				<span class="decoration"></span>
				<ul>
																	<li><a href="http://animalear.com/perros/comida/pienso-para-perros.html">Pienso para perros</a></li>
																	<li><a href="http://animalear.com/perros/snacks-y-huesos.html">Snacks y huesos</a></li>
																	<li><a href="http://animalear.com/gatos/comida/pienso-para-gatos.html">Pienso para gatos</a></li>
																	<li><a href="http://animalear.com/gatos/comida/humeda-latas.html">Húmeda latas gatos</a></li>
																	<li><a href="http://animalear.com/roedores/comida-para-roedores.html">Comida para roedores</a></li>
																	<li><a href="http://animalear.com/pajaros/comida-para-pajaros.html">Comida para pájaros</a></li>
									</ul>
			</div>
		</div>
	</div>

<div class="carousel-wave-white"></div>
<script type="text/javascript">
    //jQuery(document).ready(function () { //Si fem el ready llavors els sliders surten un instant descol·locats al principi
    jQuery('.home-banner-carousel').carouFredSel({
        /*items: {
         width: 1250
         },*/
        auto: true,
        width: "auto",
        height: 400,
        responsive: true,
        scroll: {
            fx: "scroll",
            duration:2000
        },
        prev : {
            button: jQuery("#home-banner-prev"),
            key: 'left',
            onBefore: (function() {
                jQuery("#home-banner-prev").hide();
                jQuery("#home-banner-next").hide();
            }),
            onAfter: (function() {
                jQuery("#home-banner-prev").show();
                jQuery("#home-banner-next").show();
            })
        },
        next : {
            button: jQuery("#home-banner-next"),
            key: 'right',
            onBefore: (function() {
                jQuery("#home-banner-prev").hide();
                jQuery("#home-banner-next").hide();
            }),
            onAfter: (function() {
                jQuery("#home-banner-prev").show();
                jQuery("#home-banner-next").show();
            })
        },
        onCreate: function () {
            jQuery('.home-banner-carousel-wrapper .caroufredsel_wrapper').css('position', 'absolute');
        }
    });
    //});

        <script type="text/javascript">decorateGeneric($$('ul.products-grid'), ['odd','even','first','last'])</script>
        <script type="text/javascript">
            //<![CDATA[
            productAddToCartList = function(button, url) {
                url += 'isAjax/1/';
                jQuery('.ajax_loader', button).show();
                try {
                    jQuery.ajax({
                        url: url,
                        dataType: 'json',
                        type : 'get',
                        success: function(data)
                        {
                            jQuery('html, body').animate({ scrollTop: 0 }, 'fast');
                            jQuery('.ajax_loader', button).hide();
                            if (data.sidebar && jQuery('.quick-access .cart-container')){
                                jQuery('.quick-access .cart-container').remove();
                                jQuery('.quick-access').prepend(data.sidebar);
                                jQuery('.block-cart').show();
                            } else {
                                alert(data.message);
                            }
                        }
                    });
                } catch (e) {
                }
            }
            //]]>
        </script>
        <!--<div class="toolbar-bottom">
                    </div>-->
    </div>
        <div id="outstanding-prev"></div>
    <div id="outstanding-next"></div>
    <script type="text/javascript">
        jQuery("#home-outstanding-products-mini .products-grid").carouFredSel({
            auto: false,
            scroll: 1,
            prev: "#outstanding-prev",
            next: "#outstanding-next",
        });
        if (jQuery("#home-outstanding-products-mini .products-grid").length == 0) {
            jQuery("#outstanding-prev").hide();
            jQuery("#outstanding-next").hide();
        }
    </script>
</div>
