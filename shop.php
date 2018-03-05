<?php 

/*
 Template Name: Shop
*/

wp_head(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Shop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href=<?php get_bloginfo( 'url' ); ?>"/wp-content/themes/TeaTradeCafe/style.css">
</head>
<body>
	<header>
		<div class="stripe-pattern" height="100px">&nbsp;</div><div class="clearfix"></div>
		<hr><hr>
		<a href=<?php get_bloginfo( 'url' ); ?>"/home"><img id="logo" src=<?php get_bloginfo( 'url' ); ?>"/wp-content/themes/TeaTradeCafe/assets/logo.png"></a>
		<div class="nav">
			<ul>
<<<<<<< HEAD:shop.html
				<li><a href="./assets/menu.pdf" target="_blank">menu</a></li>
				<li><a href="index.html?#loc-hrs-bar">Location</a></li>
				<li id="nav-loc"><a href="shop.html">shop</a></li>
=======
				<li><a href=<?php get_bloginfo( 'url' ); ?>"/wp-content/themes/TeaTradeCafe/assets/menu.pdf" target="_blank">menu</a></li>
				<li><a href=<?php get_bloginfo( 'url' ); ?>"/home#loc-hrs-bar">Location</a></li>
				<li id="nav-loc"><a href="shop.php">shop</a></li>
>>>>>>> 057791c2993467c98571938f9afc0e947e47233a:shop.php
			</ul>
		</div>
		<hr><hr>
	</header>
<<<<<<< HEAD:shop.html
	<div class="clearfix">&nbsp;</div>
	<div style="height: 100px;">&nbsp;</div>
	<section style="padding: 25px;">
		<div id='collection-component-06743840a6b'></div>
	</section>
	<hr>
  	<footer class="stripe-pattern">
    <img id="footerlogo" src="./assets/logo.png">
=======
  <h1 id="hero-title" style="color: #444; margin-top: 75px;">Shop with a Purpose</h1>
  <p style="text-align: center;color:#999; font-size: .9rem;">Checkout will redirect you to our Warchest Boutique site</p>
	<div id='collection-component-06743840a6b'></div>
	<hr>
  <footer class="stripe-pattern">
    <img id="footerlogo" src=<?php get_bloginfo( 'url' ); ?>"/wp-content/themes/TeaTradeCafe/assets/logo.png">
>>>>>>> 057791c2993467c98571938f9afc0e947e47233a:shop.php

    <div id="lets-connect">
      <img src=<?php get_bloginfo( 'url' ); ?>"/wp-content/themes/TeaTradeCafe/assets/lets-connect.png">
      <div class="white-box" style="margin-top: 20px;">
        <p style="font-style: italic; text-align: center;font-size: 1.15rem;">Follow us for the latest news,<br>specials, and fun</p>
        <div id="social-media">
          <a id="fb-icon" href="http://www.facebook.com/TeaTradeCafe/"><img src=<?php get_bloginfo( 'url' ); ?>"/wp-content/themes/TeaTradeCafe/assets/fb-icon.png"></a>
          <a href="http://www.instagram.com/teatradecafe/"><img src=<?php get_bloginfo( 'url' ); ?>"/wp-content/themes/TeaTradeCafe/assets/ig-icon.png"></a>
        </div>
      </div>
    </div>

    <div id="message-us">
      <img src=<?php get_bloginfo( 'url' ); ?>"/wp-content/themes/TeaTradeCafe/assets/message.png">
      <form method="post" action=<?php get_bloginfo( 'url' ); ?>"/wp-content/themes/TeaTradeCafe/contact-submit.php" id="message-form"> 
        <input type="email" name="Email" placeholder="Email">
        <textarea name="Message" form="message-form" placeholder="Write Your Message to Us Here" rows="4"></textarea>
        <input type="submit" name="submit" value="Submit">
      </form>
    </div>

  </footer>
</body>
<script type="text/javascript">
/*<![CDATA[*/

(function () {
  var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
  if (window.ShopifyBuy) {
    if (window.ShopifyBuy.UI) {
      ShopifyBuyInit();
    } else {
      loadScript();
    }
  } else {
    loadScript();
  }

  function loadScript() {
    var script = document.createElement('script');
    script.async = true;
    script.src = scriptURL;
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
    script.onload = ShopifyBuyInit;
  }

  function ShopifyBuyInit() {
    var client = ShopifyBuy.buildClient({
      domain: 'wardev.myshopify.com',
      apiKey: '008a7b8987ec535ece1b5a90679d0eb6',
      appId: '6',
    });

    ShopifyBuy.UI.onReady(client).then(function (ui) {
      ui.createComponent('collection', {
        id: 298896195,
        node: document.getElementById('collection-component-06743840a6b'),
        moneyFormat: '%24%7B%7Bamount%7D%7D',
        options: {
  "product": {
    "variantId": "all",
    "contents": {
      "imgWithCarousel": false,
      "variantTitle": false,
      "description": false,
      "buttonWithQuantity": false,
      "quantity": false
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "calc(25% - 20px)",
          "margin-left": "20px",
          "margin-bottom": "50px"
        }
      },
      "button": {
        "background-color": "#b1a441",
        "font-family": "Raleway, sans-serif",
        ":hover": {
          "background-color": "#9f943b"
        },
        "font-weight": "normal",
        ":focus": {
          "background-color": "#9f943b"
        }
      },
      "variantTitle": {
        "font-family": "Raleway, sans-serif",
        "font-weight": "normal"
      },
      "title": {
        "font-family": "Raleway, sans-serif",
        "font-weight": "normal"
      },
      "description": {
        "font-family": "Raleway, sans-serif",
        "font-weight": "normal"
      },
      "price": {
        "font-family": "Raleway, sans-serif",
        "font-weight": "normal"
      },
      "compareAt": {
        "font-family": "Raleway, sans-serif",
        "font-weight": "normal"
      }
    },
    "googleFonts": [
      "Raleway",
      "Raleway",
      "Raleway",
      "Raleway",
      "Raleway",
      "Raleway"
    ]
  },
  "cart": {
    "contents": {
      "button": true
    },
    "styles": {
      "button": {
        "background-color": "#b1a441",
        "font-family": "Raleway, sans-serif",
        ":hover": {
          "background-color": "#9f943b"
        },
        "font-weight": "normal",
        ":focus": {
          "background-color": "#9f943b"
        }
      },
      "footer": {
        "background-color": "#ffffff"
      }
    },
    "googleFonts": [
      "Raleway"
    ]
  },
  "modalProduct": {
    "contents": {
      "img": false,
      "imgWithCarousel": true,
      "variantTitle": false,
      "buttonWithQuantity": true,
      "button": false,
      "quantity": false
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0px",
          "margin-bottom": "0px"
        }
      },
      "button": {
        "background-color": "#b1a441",
        "font-family": "Raleway, sans-serif",
        ":hover": {
          "background-color": "#9f943b"
        },
        "font-weight": "normal",
        ":focus": {
          "background-color": "#9f943b"
        }
      },
      "variantTitle": {
        "font-family": "Raleway, sans-serif",
        "font-weight": "normal"
      },
      "title": {
        "font-family": "Raleway, sans-serif",
        "font-weight": "normal"
      },
      "description": {
        "font-family": "Raleway, sans-serif",
        "font-weight": "normal"
      },
      "price": {
        "font-family": "Raleway, sans-serif",
        "font-weight": "normal"
      },
      "compareAt": {
        "font-family": "Raleway, sans-serif",
        "font-weight": "normal"
      }
    },
    "googleFonts": [
      "Raleway",
      "Raleway",
      "Raleway",
      "Raleway",
      "Raleway",
      "Raleway"
    ]
  },
  "toggle": {
    "styles": {
      "toggle": {
        "font-family": "Raleway, sans-serif",
        "background-color": "#b1a441",
        ":hover": {
          "background-color": "#9f943b"
        },
        "font-weight": "normal",
        ":focus": {
          "background-color": "#9f943b"
        }
      }
    },
    "googleFonts": [
      "Raleway"
    ]
  },
  "option": {
    "styles": {
      "label": {
        "font-family": "Raleway, sans-serif"
      },
      "select": {
        "font-family": "Raleway, sans-serif"
      }
    },
    "googleFonts": [
      "Raleway",
      "Raleway"
    ]
  },
  "productSet": {
    "styles": {
      "products": {
        "@media (min-width: 601px)": {
          "margin-left": "-20px"
        }
      }
    }
  }
}
      });
    });
  }
})();
/*]]>*/
</script>
</html>