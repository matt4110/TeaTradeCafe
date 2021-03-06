<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage TTC
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

	<section id="main-page-hero">
		<h1 id="hero-title">Coffee with a Cause</h1>
	</section>
	<section>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2923.462449003281!2d-85.7355346843737!3d42.88418890983237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8819b0e7aa9cebf1%3A0xdd3fcd7eb5fabba3!2sTea+Trade+Cafe!5e0!3m2!1sen!2sus!4v1507557930012" width="2000" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		<hr>
		<div id="loc-hrs-bar" class="stripe-pattern">

			<div id="loc" class="white-box">
				<h2 style="text-align: center;">Location</h2>
				<hr class="thin-hr">
				<p style="text-align: center; font-size: 1.5rem;">&nbsp;<br>2790 44th St SW<br>Wyoming, MI 49519<br>&nbsp;</p>
				<hr class="thin-hr">
			</div>
			
			<div id="hrs" class="white-box">
				<h2 style="text-align: center;">Hours</h2>
				<hr class="thin-hr">
				<p style="text-align: center; font-size: 1.5rem;">Monday - Friday<br>7am - 6pm<br>Saturdays<br>Open for Events Only</p>
				<hr class="thin-hr">
			</div>

		</div><div class="clearfix"></div>
		<hr>
	</section>
	<section id="mission-bar">
		<h3 id="mission-title">Your morning coffee can save lives</h3>
		<p id="mission-p">Each purchase at the Tea Trade Cafe supports at-risk and rescued women all around the world. This café also serves as a training ground for women who have been rescued from injustices like human trafficking, where barista and business skills are taught. Serving fair trade coffee and teas, each dining experience provides sustainable income for artisans all over the world, ensuring they work in safe environments.</p>
		<div class="clearfix">&nbsp;</div>
	</section>
	<section id="shop">
		<img id="brew-the-change" src=<?php get_bloginfo( 'url' ); ?>"/wp-content/themes/TeaTradeCafe/assets/brew-the-change.png">
		<div id='collection-component-fabf7715671'></div>
		<a href=<?php get_bloginfo( 'url' ); ?>"/shop" style="display: flex; justify-content: center;"><button>Shop Entire Collection</button></a>
	</section>

<?php get_footer(); ?>


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
        id: 23827054624,
        node: document.getElementById('collection-component-fabf7715671'),
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
        "font-family": "Garamond, serif",
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
        "font-family": "Garamond, serif",
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