<?php
class ControllerCommonHeader extends Controller {
	public function index() {
		// Analytics
		$this->load->model('setting/extension');

		$data['analytics'] = array();

		$analytics = $this->model_setting_extension->getExtensions('analytics');

		foreach ($analytics as $analytic) {
			if ($this->config->get('analytics_' . $analytic['code'] . '_status')) {
				$data['analytics'][] = $this->load->controller('extension/analytics/' . $analytic['code'], $this->config->get('analytics_' . $analytic['code'] . '_status'));
			}
		}

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
		}

		$data['title'] = $this->document->getTitle();

		$data['base'] = $server;
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();

				$data['robots'] = '';
				$extendedseo = $this->config->get('extendedseo');
				if (isset($extendedseo['robots'])) {
					$data['robots'] = '<meta name="robots" content="index">';
					}

				foreach ($data['links'] as $link) {
					if ($link['rel']=='canonical') {$hasCanonical = true;
					if (isset($_SERVER['HTTP_USER_AGENT']) && preg_match('/bot|crawl|slurp|spider/i', $_SERVER['HTTP_USER_AGENT'])) {
					$this->db->query("insert into " . DB_PREFIX . "bots_report (link, bot, ip, `date`) values ('".$link['href']."','".$_SERVER['HTTP_USER_AGENT']."','".$_SERVER['REMOTE_ADDR']."',now());");
					}
					}
				}

				if (isset($this->request->get['route']) && !isset($hasCanonical) && (strpos($this->request->get['route'], 'error') === false)) {
					if (isset($_SERVER['HTTP_USER_AGENT']) && preg_match('/bot|crawl|slurp|spider/i', $_SERVER['HTTP_USER_AGENT'])) {
					$this->db->query("insert into " . DB_PREFIX . "bots_report (link, bot, ip, `date`) values ('".$this->url->link($this->request->get['route'])."','".$_SERVER['HTTP_USER_AGENT']."','".$_SERVER['REMOTE_ADDR']."',now());");
					}
				}

				$data['canonical_link'] = '';
				$canonicals = $this->config->get('canonicals');
				if (!isset($hasCanonical) && isset($this->request->get['route']) && (isset($canonicals['canonicals_extended']))) {
					$data['canonical_link'] = $this->url->link($this->request->get['route']);
					}

				
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts('header');
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		$data['name'] = $this->config->get('config_name');

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}

		$this->load->language('common/header');

		// Wishlist
		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');

			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
		} else {
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
		}

		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->url->link('account/account', '', true), $this->customer->getFirstName(), $this->url->link('account/logout', '', true));
		

			$extendedseo = $this->config->get('extendedseo');
			if ((isset($extendedseo['trim_descriptions'])) && ($data['description']) && (strlen($data['description']) > 160)) {
				$pos=strpos($data['description'], ' ', 156);
				$data['description'] = substr($data['description'],0,$pos). ' ...';
			}
			if ((isset($extendedseo['trim_titles'])) && ($data['title']) && (strlen($data['title']) > 60)) {
				$pos=strpos($data['title'], ' ', 56);
				$data['title'] = substr($data['title'],0,$pos). ' ...';
			}
			

				$data['richsnippets'] = $this->config->get('richsnippets');
				$richsnippets = $this->config->get('richsnippets');
				if (isset($richsnippets['googlepublisher']) && isset($richsnippets['googleid'])) {
					array_push($data['links'], array('href'=>'https://plus.google.com/'.$richsnippets['googleid'],'rel'=>'publisher'));
					}
				$data['socialseo'] = '';
				if (isset($richsnippets['ogsite']) & (!isset($this->request->get['route']) || ($this->request->get['route'] == 'common/home'))) {
					$data['socialseo'] .= '
<meta property="og:type" content="website"/>
<meta property="og:title" content="'.$data['title'].'"/>
<meta property="og:image" content="'.$data['logo'].'"/>
<meta property="og:site_name" content="'.$data['name'].'"/>
<meta property="og:url" content="'.$server.'"/>
<meta property="og:description" content="'.$data['description'].'"/>';
					}
				if (isset($richsnippets['twittersite']) & (!isset($this->request->get['route']) || ($this->request->get['route'] == 'common/home'))) {
					$data['socialseo'] .= '
<meta name="twitter:card" content="summary" />';
if (isset($richsnippets['twitteruser'])) {
	$data['socialseo'] .= '
<meta name="twitter:site" content="'.$richsnippets['twitteruser'].'" />';
	}
$data['socialseo'] .= '
<meta name="twitter:title" content="'.$data['title'].'" />
<meta name="twitter:description" content="'.$data['description'].'" />
<meta name="twitter:image" content="'.$data['logo'].'" />';
}
				if (isset($this->request->get['route']) && ($this->request->get['route'] == 'product/product')) {
					$data['socialseo'] .=  $this->document->getSocialSeo();
					}

			
		$data['home'] = $this->url->link('common/home');
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['logged'] = $this->customer->isLogged();
		$data['account'] = $this->url->link('account/account', '', true);
		$data['register'] = $this->url->link('account/register', '', true);
		$data['login'] = $this->url->link('account/login', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['logout'] = $this->url->link('account/logout', '', true);
		$data['shopping_cart'] = $this->url->link('checkout/cart');
		$data['checkout'] = $this->url->link('checkout/checkout', '', true);
		$data['contact'] = $this->url->link('information/contact');
		$data['telephone'] = $this->config->get('config_telephone');

				$data['text_email'] = $this->language->get('text_email');
				$data['email'] = $this->config->get('config_email');
				$data['text_oder'] = $this->language->get('text_oder');
				$data['text_setting'] = $this->language->get('text_setting');
			
		
		$data['language'] = $this->load->controller('common/language');
		$data['currency'] = $this->load->controller('common/currency');
		
				/* Edit for Search Category Module by OCMod */
				$module_status = $this->config->get('module_ocsearchcategory_status');
				if($module_status) {
					$data['search'] = $this->load->controller('extension/module/ocsearchcategory');
				} else {
					$data['search'] = $this->load->controller('common/search');
				}
				/* End Code */
			
		$data['cart'] = $this->load->controller('common/cart');
		$data['menu'] = $this->load->controller('common/menu');


				$data['block1'] = $this->load->controller('common/block1');
				$data['block2'] = $this->load->controller('common/block2');
				$data['block0'] = $this->load->controller('common/block0');
				if($this->config->get('module_ocajaxlogin_status')){
					$data['use_ajax_login'] = true;
				}else{
					$data['use_ajax_login'] = false;
				}
				
				// For page specific css
				if (isset($this->request->get['route'])) {
					if (isset($this->request->get['product_id'])) {
						$class = '-' . $this->request->get['product_id'];
					} elseif (isset($this->request->get['path'])) {
						$class = '-' . $this->request->get['path'];
					} elseif (isset($this->request->get['manufacturer_id'])) {
						$class = '-' . $this->request->get['manufacturer_id'];
					} elseif (isset($this->request->get['information_id'])) {
						$class = '-' . $this->request->get['information_id'];
					} else {
						$class = '';
					}

					$data['class'] = str_replace('/', '-', $this->request->get['route']) . $class;
				} else {
					$data['class'] = 'common-home';
				}
			

        $data['store_id'] = $this->config->get('config_store_id');
        $data['theme_option_status'] = $this->config->get('module_octhemeoption_status');
        $data['a_tag'] = $this->config->get('module_octhemeoption_a_tag');
        $data['header_tag'] = $this->config->get('module_octhemeoption_header_tag');
        $data['body_css'] = $this->config->get('module_octhemeoption_body');
        
        if(isset($this->config->get('module_octhemeoption_quickview')[$data['store_id']])) {
            $module_quickview = (int) $this->config->get('module_octhemeoption_quickview')[$data['store_id']];
        } else {
            $module_quickview = 0;
        }

        if(isset($this->config->get('module_octhemeoption_use_cate_quickview')[$data['store_id']])) {
            $category_quickview = (int) $this->config->get('module_octhemeoption_use_cate_quickview')[$data['store_id']];
        } else {
            $category_quickview = 0;
        }

        if($module_quickview || $category_quickview) {
        	$data['use_quick_view'] = true;
        } else {
			$data['use_quick_view'] = false;
        }
        	
		return $this->load->view('common/header', $data);
	}
}
