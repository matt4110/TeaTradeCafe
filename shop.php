<?php 

/*
 Template Name: Shop
*/

get_header(); ?>

  <h1 id="hero-title" style="color: #444; margin-top: 75px;">Shop with a Purpose</h1>
  <p style="text-align: center;color:#999; font-size: .9rem;">Checkout will redirect you to our Warchest Boutique site</p>
	<div id='collection-component-06743840a6b'></div>
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