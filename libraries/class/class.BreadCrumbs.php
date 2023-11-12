<?php
	class BreadCrumbs
	{
		private $d;
		private $data = array();

		function __construct($d)
		{
			$this->d = $d;
		}

		public function setBreadCrumbs($slug='', $name='')
		{
			if($name != '')
			{
				$this->data[] = array('slug' => $slug, 'name' => $name);
			}
		}
	
		public function getBreadCrumbs()
		{
			global $config_base;
			
			$json = array();
			$breadcumb = '';

			if($this->data)
			{
				$breadcumb .= '';
				$breadcumb .= '<a class="mybreadcrumb__step mybreadcrumb__step--active" href="'.$config_base.'"><span>'.trangchu.'</span></a>';
				$k = 1;
				foreach($this->data as $key => $value)
				{
					if($value['name'] != '')
					{
						$slug = ($value['slug']) ? $config_base.$value['slug'] : '';
						$name = $value['name'];
						$active = ($key == count($this->data) - 1) ? "active" : "";
						$breadcumb .= '<a class="mybreadcrumb__step" href="'.$slug.'"><span>'.$name.'</span></a>';
						$json[] = array("@type"=>"ListItem","position"=>$k,"name"=>$name,"item"=>$slug);
						$k++;
					}
				}
			    $breadcumb .= '';
			    $breadcumb .= '<script type="application/ld+json">{"@context": "https://schema.org","@type": "BreadcrumbList","itemListElement": '.((json_encode($json))).'}</script>';
			}

		    return $breadcumb;
		}
	}
?>