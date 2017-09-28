<?php
//?sort=name&limit=18&path=template.social-media&skip=0
ini_set('memory_limit', '-1');
$path = $_GET['path'];
switch ($path) {
	case 'template.social-media':
		$skip = $_GET['skip'];
		$sort = $_GET['sort'];
		$limit = $_GET['limit'];
		$file = 'json_files/market_template_social_media.json';
		$json = json_decode(file_get_contents($file));
		$p = 0;
		$arr = array();
		foreach ($json as $item) {
			if($p >= $skip && $p < $skip + $limit) {
				$arr[] = $item;
			}
			if($p >= $skip + $limit) {
				break;
			}
			$p++;
		}

		echo json_encode($arr);
		break;
	
	case 'template.presentation':
		$skip = $_GET['skip'];
		$limit = $_GET['limit'];
		$file = 'json_files/market_template_present.json';
		$json = json_decode(file_get_contents($file));
		$p = 0;
		$arr = array();
		foreach ($json as $item) {
			if($p >= $skip && $p < $skip + $limit) {
				$arr[] = $item;
			}
			if($p >= $skip + $limit) {
				break;
			}
			$p++;
		}

		echo json_encode($arr);
		break;

	case 'template.poster':
		$skip = $_GET['skip'];
		$limit = $_GET['limit'];
		$file = 'json_files/market_template_poster.json';
		$json = json_decode(file_get_contents($file));
		$p = 0;
		$arr = array();
		foreach ($json as $item) {
			if($p >= $skip && $p < $skip + $limit) {
				$arr[] = $item;
			}
			if($p >= $skip + $limit) {
				break;
			}
			$p++;
		}

		echo json_encode($arr);
		break;

	case 'template.facebook-post':
		$skip = $_GET['skip'];
		$limit = $_GET['limit'];
		$file = 'json_files/market_template_facebook_post.json';
		$json = json_decode(file_get_contents($file));
		$p = 0;
		$arr = array();
		foreach ($json as $item) {
			if($p >= $skip && $p < $skip + $limit) {
				$arr[] = $item;
			}
			if($p >= $skip + $limit) {
				break;
			}
			$p++;
		}

		echo json_encode($arr);
		break;;

	case 'template.blog-graphic':
		$skip = $_GET['skip'];
		$limit = $_GET['limit'];
		$file = 'json_files/market_template_blog_graphic.json';
		$json = json_decode(file_get_contents($file));
		$p = 0;
		$arr = array();
		foreach ($json as $item) {
			if($p >= $skip && $p < $skip + $limit) {
				$arr[] = $item;
			}
			if($p >= $skip + $limit) {
				break;
			}
			$p++;
		}

		echo json_encode($arr);
		break;

	case 'template.a4':
		$skip = $_GET['skip'];
		$limit = $_GET['limit'];
		$file = 'json_files/market_template_a4.json';
		$json = json_decode(file_get_contents($file));
		$p = 0;
		$arr = array();
		foreach ($json as $item) {
			if($p >= $skip && $p < $skip + $limit) {
				$arr[] = $item;
			}
			if($p >= $skip + $limit) {
				break;
			}
			$p++;
		}

		echo json_encode($arr);
		break;



	case 'template.card':
		$skip = $_GET['skip'];
		$limit = $_GET['limit'];
		$file = 'json_files/market_template_card.json';
		$json = json_decode(file_get_contents($file));
		$p = 0;
		$arr = array();
		foreach ($json as $item) {
			if($p >= $skip && $p < $skip + $limit) {
				$arr[] = $item;
			}
			if($p >= $skip + $limit) {
				break;
			}
			$p++;
		}

		echo json_encode($arr);
		break;


	case 'image':
		$skip = $_GET['skip'];
		$limit = $_GET['limit'];
		$file = 'json_files/market_image.json';
		$json = json_decode(file_get_contents($file));
		$p = 0;
		$arr = array();
		foreach ($json as $item) {
			if($p >= $skip && $p < $skip + $limit) {
				$arr[] = $item;
			}
			if($p >= $skip + $limit) {
				break;
			}
			$p++;
		}

		echo json_encode($arr);
		break;

	case 'text':
		$skip = $_GET['skip'];
		$limit = $_GET['limit'];
		$file = 'json_files/market_text.json';
		$json = json_decode(file_get_contents($file));
		$p = 0;
		$arr = array();
		foreach ($json as $item) {
			if($p >= $skip && $p < $skip + $limit) {
				$arr[] = $item;
			}
			if($p >= $skip + $limit) {
				break;
			}
			$p++;
		}

		echo json_encode($arr);
		break;
	case 'image.pattern':
		$skip = $_GET['skip'];
		$limit = $_GET['limit'];
		$file = 'json_files/market_pattern.json';
		$json = json_decode(file_get_contents($file));
		$p = 0;
		$arr = array();
		foreach ($json as $item) {
			if($p >= $skip && $p < $skip + $limit) {
				$arr[] = $item;
			}
			if($p >= $skip + $limit) {
				break;
			}
			$p++;
		}

		echo json_encode($arr);
		break;
		
	
		
	case 'element.shape':
		$skip = $_GET['skip'];
		$limit = $_GET['limit'];
		$file = 'json_files/market_shape.json';
		$json = json_decode(file_get_contents($file));
		$p = 0;
		$arr = array();
		foreach ($json as $item) {
			if($p >= $skip && $p < $skip + $limit) {
				$arr[] = $item;
			}
			if($p >= $skip + $limit) {
				break;
			}
			$p++;
		}

		echo json_encode($arr);
		break;
	case 'element.illustration.':
		$skip = $_GET['skip'];
		$limit = $_GET['limit'];
		$file = 'json_files/market_illustration.json';
		$json = json_decode(file_get_contents($file));
		$p = 0;
		$arr = array();
		foreach ($json as $item) {
			if($p >= $skip && $p < $skip + $limit) {
				$arr[] = $item;
			}
			if($p >= $skip + $limit) {
				break;
			}
			$p++;
		}

		echo json_encode($arr);
		break;

	case 'element.illustration.realistic':
		$skip = $_GET['skip'];
		$limit = $_GET['limit'];
		$file = 'json_files/market_illustration_realistic.json';
		$json = json_decode(file_get_contents($file));
		$p = 0;
		$arr = array();
		foreach ($json as $item) {
			if($p >= $skip && $p < $skip + $limit) {
				$arr[] = $item;
			}
			if($p >= $skip + $limit) {
				break;
			}
			$p++;
		}

		echo json_encode($arr);
		break;
	case 'element.illustration.line':
		$skip = $_GET['skip'];
		$limit = $_GET['limit'];
		$file = 'json_files/market_illustration_line.json';
		$json = json_decode(file_get_contents($file));
		$p = 0;
		$arr = array();
		foreach ($json as $item) {
			if($p >= $skip && $p < $skip + $limit) {
				$arr[] = $item;
			}
			if($p >= $skip + $limit) {
				break;
			}
			$p++;
		}

		echo json_encode($arr);
		break;
	case 'element.illustration.color':
		$skip = $_GET['skip'];
		$limit = $_GET['limit'];
		$file = 'json_files/market_illustration_color.json';
		$json = json_decode(file_get_contents($file));
		$p = 0;
		$arr = array();
		foreach ($json as $item) {
			if($p >= $skip && $p < $skip + $limit) {
				$arr[] = $item;
			}
			if($p >= $skip + $limit) {
				break;
			}
			$p++;
		}

		echo json_encode($arr);
		break;


	case 'element.illustration.solid':
		$skip = $_GET['skip'];
		$limit = $_GET['limit'];
		$file = 'json_files/market_illustration_solid.json';
		$json = json_decode(file_get_contents($file));
		$p = 0;
		$arr = array();
		foreach ($json as $item) {
			if($p >= $skip && $p < $skip + $limit) {
				$arr[] = $item;
			}
			if($p >= $skip + $limit) {
				break;
			}
			$p++;
		}

		echo json_encode($arr);
		break;

	case 'element.illustration.x-ray':
		$skip = $_GET['skip'];
		$limit = $_GET['limit'];
		$file = 'json_files/market_illustration_xray.json';
		$json = json_decode(file_get_contents($file));
		$p = 0;
		$arr = array();
		foreach ($json as $item) {
			if($p >= $skip && $p < $skip + $limit) {
				$arr[] = $item;
			}
			if($p >= $skip + $limit) {
				break;
			}
			$p++;
		}

		echo json_encode($arr);
		break;
	case 'element.icons':
		$skip = $_GET['skip'];
		$limit = $_GET['limit'];
		$file = 'json_files/market_element_icon.json';
		$json = json_decode(file_get_contents($file));
		$p = 0;
		$arr = array();
		foreach ($json as $item) {
			if($p >= $skip && $p < $skip + $limit) {
				$arr[] = $item;
			}
			if($p >= $skip + $limit) {
				break;
			}
			$p++;
		}

		echo json_encode($arr);
		break;


	case 'element.emoji.':
		$skip = $_GET['skip'];
		$limit = $_GET['limit'];
		$file = 'json_files/market_element_emoji.json';
		$json = json_decode(file_get_contents($file));
		$p = 0;
		$arr = array();
		foreach ($json as $item) {
			if($p >= $skip && $p < $skip + $limit) {
				$arr[] = $item;
			}
			if($p >= $skip + $limit) {
				break;
			}
			$p++;
		}

		echo json_encode($arr);
		break;

	case 'element.emoji.klex':
		$skip = $_GET['skip'];
		$limit = $_GET['limit'];
		$file = 'json_files/market_element_emoji_klex.json';
		$json = json_decode(file_get_contents($file));
		$p = 0;
		$arr = array();
		foreach ($json as $item) {
			if($p >= $skip && $p < $skip + $limit) {
				$arr[] = $item;
			}
			if($p >= $skip + $limit) {
				break;
			}
			$p++;
		}

		echo json_encode($arr);
		break;

	case 'element.emoji.classic':
		$skip = $_GET['skip'];
		$limit = $_GET['limit'];
		$file = 'json_files/market_element_emoji_classic.json';
		$json = json_decode(file_get_contents($file));
		$p = 0;
		$arr = array();
		foreach ($json as $item) {
			if($p >= $skip && $p < $skip + $limit) {
				$arr[] = $item;
			}
			if($p >= $skip + $limit) {
				break;
			}
			$p++;
		}

		echo json_encode($arr);
		break;

	case 'element.emoji.cube':
		$skip = $_GET['skip'];
		$limit = $_GET['limit'];
		$file = 'json_files/market_element_emoji_cube.json';
		$json = json_decode(file_get_contents($file));
		$p = 0;
		$arr = array();
		foreach ($json as $item) {
			if($p >= $skip && $p < $skip + $limit) {
				$arr[] = $item;
			}
			if($p >= $skip + $limit) {
				break;
			}
			$p++;
		}

		echo json_encode($arr);
		break;

	case 'element.emoji.cone':
		$skip = $_GET['skip'];
		$limit = $_GET['limit'];
		$file = 'json_files/market_element_emoji_cone.json';
		$json = json_decode(file_get_contents($file));
		$p = 0;
		$arr = array();
		foreach ($json as $item) {
			if($p >= $skip && $p < $skip + $limit) {
				$arr[] = $item;
			}
			if($p >= $skip + $limit) {
				break;
			}
			$p++;
		}

		echo json_encode($arr);
		break;

	case 'element.sticker':
		$skip = $_GET['skip'];
		$limit = $_GET['limit'];
		$file = 'json_files/market_element_sticker.json';
		$json = json_decode(file_get_contents($file));
		$p = 0;
		$arr = array();
		foreach ($json as $item) {
			if($p >= $skip && $p < $skip + $limit) {
				$arr[] = $item;
			}
			if($p >= $skip + $limit) {
				break;
			}
			$p++;
		}

		echo json_encode($arr);
		break;
	case 'element.frame':
		$skip = $_GET['skip'];
		$limit = $_GET['limit'];
		$file = 'json_files/market_element_frame.json';
		$json = json_decode(file_get_contents($file));
		$p = 0;
		$arr = array();
		foreach ($json as $item) {
			if($p >= $skip && $p < $skip + $limit) {
				$arr[] = $item;
			}
			if($p >= $skip + $limit) {
				break;
			}
			$p++;
		}

		echo json_encode($arr);
		break;
	default:
		# code...
		break;
}

?>