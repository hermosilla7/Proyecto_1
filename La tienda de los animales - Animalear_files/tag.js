// VDED11389 at 10/09/2015 03:13:13
'use strict';
if (typeof veTagData === 'undefined') {
    var veTagData = (function () {
        var b,
            tag = document.getElementById('veConnect'),
            d = {
                journeycode: '0BDE76C6-DF3C-4A60-9386-F883F61E3468',
                captureConfigUrl: 'drs2.veinteractive.com/CaptureConfigService.asmx/CaptureConfig',
                appsServicesUrl: 'appsapi.veinteractive.com',
                veHostDomain: '//config1.veinteractive.com',
                promoteLanding: 'promotelanding.veinteractive.local',

                captureConfig: {
  CaptureUrl: "rcs.veinteractive.com/CaptureConfigService.asmx/CaptureConfig",
  customerid: 9872,
  datareceiverurl: "drs2.veinteractive.com/DataReceiverService.asmx/DataReceiver",
  Forms: [
    {
      ChatAgentId: null,
      EmailOptOut: false,
      FormFields: [],
      FormId: 40701,
      FormTypeId: 1,
      FormURLs: [
        "animalear.com/"
      ],
      IdentifyAbandonmentOr: true,
      NumberIdentifiedFields: 0,
      Name: null,
      OptOuts: [],
      Paremeter: []
    },
    {
      ChatAgentId: null,
      EmailOptOut: false,
      FormFields: [
        {
          ClientFieldName: ".product-img-box .product-image img",
          DomEvent: "OnLoad",
          FieldTypeName: "Raw",
          FormMappingId: 97567,
          HtmlAttributeTag: "src",
          HtmlType: "img",
          IdentifyAbandonment: false,
          isEmail: false,
          FormMappingTypeId: 13
        },
        {
          ClientFieldName: ".product-name h1",
          DomEvent: "OnLoad",
          FieldTypeName: "Raw",
          FormMappingId: 97568,
          HtmlAttributeTag: "Value",
          HtmlType: "h1",
          IdentifyAbandonment: false,
          isEmail: false,
          FormMappingTypeId: 11
        },
        {
          ClientFieldName: ".price-wrapper span:last",
          DomEvent: "OnLoad",
          FieldTypeName: "Raw",
          FormMappingId: 97650,
          HtmlAttributeTag: "Value",
          HtmlType: "span",
          IdentifyAbandonment: false,
          isEmail: false,
          FormMappingTypeId: 16
        },
        {
          ClientFieldName: "window.location.href",
          DomEvent: "OnLoad",
          FieldTypeName: "Raw",
          FormMappingId: 97689,
          HtmlAttributeTag: "href",
          HtmlType: "a",
          IdentifyAbandonment: false,
          isEmail: false,
          FormMappingTypeId: 29
        },
        {
          ClientFieldName: ".std",
          DomEvent: "OnLoad",
          FieldTypeName: "Raw",
          FormMappingId: 97691,
          HtmlAttributeTag: "Value",
          HtmlType: "div",
          IdentifyAbandonment: false,
          isEmail: false,
          FormMappingTypeId: 12
        },
        {
          ClientFieldName: ".product_category",
          DomEvent: "OnLoad",
          FieldTypeName: "Raw",
          FormMappingId: 97697,
          HtmlAttributeTag: "Value",
          HtmlType: "span",
          IdentifyAbandonment: false,
          isEmail: false,
          FormMappingTypeId: 18
        },
        {
          ClientFieldName: ".product-name h1",
          DomEvent: "OnLoad",
          FieldTypeName: "Raw",
          FormMappingId: 97699,
          HtmlAttributeTag: "Value",
          HtmlType: "h1",
          IdentifyAbandonment: false,
          isEmail: false,
          FormMappingTypeId: 10
        },
        {
          ClientFieldName: ".top-price .price",
          DomEvent: "OnLoad",
          FieldTypeName: "Raw",
          FormMappingId: 100332,
          HtmlAttributeTag: "Value",
          HtmlType: "span",
          IdentifyAbandonment: false,
          isEmail: false,
          FormMappingTypeId: 16
        }
      ],
      FormId: 40702,
      FormTypeId: 4,
      FormURLs: [
        "animalear.com/*.html"
      ],
      IdentifyAbandonmentOr: true,
      NumberIdentifiedFields: 0,
      Name: null,
      OptOuts: [],
      Paremeter: []
    },
    {
      ChatAgentId: null,
      EmailOptOut: false,
      FormFields: [
        {
          ClientFieldName: ".product-image img:visible",
          DomEvent: "OnLoad",
          FieldTypeName: "RawSeries",
          FormMappingId: 97711,
          HtmlAttributeTag: "src",
          HtmlType: "img",
          IdentifyAbandonment: false,
          isEmail: false,
          FormMappingTypeId: 13
        },
        {
          ClientFieldName: ".product-name:visible",
          DomEvent: "OnLoad",
          FieldTypeName: "RawSeries",
          FormMappingId: 97715,
          HtmlAttributeTag: "Value",
          HtmlType: "a",
          IdentifyAbandonment: false,
          isEmail: false,
          FormMappingTypeId: 11
        },
        {
          ClientFieldName: ".product-info:visible",
          DomEvent: "OnLoad",
          FieldTypeName: "RawSeries",
          FormMappingId: 97721,
          HtmlAttributeTag: "Value",
          HtmlType: "span",
          IdentifyAbandonment: false,
          isEmail: false,
          FormMappingTypeId: 12
        },
        {
          ClientFieldName: ".cart-price .price:even",
          DomEvent: "OnLoad",
          FieldTypeName: "RawSeries",
          FormMappingId: 97729,
          HtmlAttributeTag: "Value",
          HtmlType: "span",
          IdentifyAbandonment: false,
          isEmail: false,
          FormMappingTypeId: 16
        },
        {
          ClientFieldName: ".input-text.qty.add-units",
          DomEvent: "OnloadOnChange",
          FieldTypeName: "RawSeries",
          FormMappingId: 97734,
          HtmlAttributeTag: "Value",
          HtmlType: ":text",
          IdentifyAbandonment: false,
          isEmail: false,
          FormMappingTypeId: 1
        },
        {
          ClientFieldName: ".cart-price .price:odd",
          DomEvent: "OnLoad",
          FieldTypeName: "RawSeries",
          FormMappingId: 97736,
          HtmlAttributeTag: "Value",
          HtmlType: "span",
          IdentifyAbandonment: false,
          isEmail: false,
          FormMappingTypeId: 1
        },
        {
          ClientFieldName: ".cart-summary .price:first",
          DomEvent: "OnloadOnChange",
          FieldTypeName: "Raw",
          FormMappingId: 97738,
          HtmlAttributeTag: "Value",
          HtmlType: "span",
          IdentifyAbandonment: false,
          isEmail: false,
          FormMappingTypeId: 8
        },
        {
          ClientFieldName: ".top-price .price",
          DomEvent: "OnLoad",
          FieldTypeName: "Raw",
          FormMappingId: 179237,
          HtmlAttributeTag: "Value",
          HtmlType: "span",
          IdentifyAbandonment: false,
          isEmail: false,
          FormMappingTypeId: 16
        }
      ],
      FormId: 41008,
      FormTypeId: 1,
      FormURLs: [
        "animalear.com/checkout/cart/"
      ],
      IdentifyAbandonmentOr: true,
      NumberIdentifiedFields: 0,
      Name: null,
      OptOuts: [],
      Paremeter: []
    },
    {
      ChatAgentId: null,
      EmailOptOut: false,
      FormFields: [
        {
          ClientFieldName: "#id_onestepcheckout_username",
          DomEvent: "DynamicActivity",
          FieldTypeName: "Raw",
          FormMappingId: 97743,
          HtmlAttributeTag: "Value",
          HtmlType: ":text",
          IdentifyAbandonment: false,
          isEmail: true,
          FormMappingTypeId: 2
        },
        {
          ClientFieldName: "[id='billing:firstname']",
          DomEvent: "OnChange",
          FieldTypeName: "Raw",
          FormMappingId: 97744,
          HtmlAttributeTag: "Value",
          HtmlType: ":text",
          IdentifyAbandonment: false,
          isEmail: false,
          FormMappingTypeId: 1
        },
        {
          ClientFieldName: "[id='billing:email']",
          DomEvent: "OnChange",
          FieldTypeName: "Raw",
          FormMappingId: 97746,
          HtmlAttributeTag: "Value",
          HtmlType: ":text",
          IdentifyAbandonment: false,
          isEmail: true,
          FormMappingTypeId: 2
        },
        {
          ClientFieldName: ".review-totals .price:last",
          DomEvent: "OnLoad",
          FieldTypeName: "Raw",
          FormMappingId: 177957,
          HtmlAttributeTag: "Value",
          HtmlType: "span",
          IdentifyAbandonment: false,
          isEmail: false,
          FormMappingTypeId: 16
        }
      ],
      FormId: 41011,
      FormTypeId: 1,
      FormURLs: [
        "animalear.com/onestepcheckout/"
      ],
      IdentifyAbandonmentOr: true,
      NumberIdentifiedFields: 0,
      Name: null,
      OptOuts: [],
      Paremeter: []
    },
    {
      ChatAgentId: null,
      EmailOptOut: false,
      FormFields: [
        {
          ClientFieldName: ".order-identifier span",
          DomEvent: "OnLoad",
          FieldTypeName: "Raw",
          FormMappingId: 97750,
          HtmlAttributeTag: "Value",
          HtmlType: "span",
          IdentifyAbandonment: false,
          isEmail: false,
          FormMappingTypeId: 9
        }
      ],
      FormId: 41018,
      FormTypeId: 2,
      FormURLs: [
        "animalear.com/checkout/onepage/success/"
      ],
      IdentifyAbandonmentOr: true,
      NumberIdentifiedFields: 0,
      Name: null,
      OptOuts: [],
      Paremeter: []
    }
  ],
  IdentifyAbandonmentOr: true,
  JourneyCode: "0BDE76C6-DF3C-4A60-9386-F883F61E3468",
  JourneyId: 12517,
  JourneyTimeOut: 1800,
  NumberIdentifiedFields: 0,
  OptOutField: 0
},
                /*
                 * The custom settings are based on the standard defined on Settings.js.
                 */
                settings: { domainsToIgnore: ['animalear.com' ], consoleMessagesEnabled: true,
 
 cookies: { enabled: true, timeToLive: 60},

appsForms:[{
	appName: 'chat',
	appAgents: ['3497','3499','3501','3502','3504','4262'],
	priority: 2,
	blackListUseRegex: false,
	whiteListUseRegex: false,
	FormBlackListURLs: [],
	FormId: 123456,
	FormTypeId: 6,
	FormURLs: [
'animalear.com/checkout/cart/',
'animalear.com/*.html',
'animalear.com/onestepcheckout/'],
	Paremeter: []
}],

promocodeSelector: 'input[name=coupon_code]'
}
,

                /*
                 * Custom events that allow custom behavior per journey. The standard is defined on CustomEvents.js.
                 */
                customEvents: {

checkUrlParameter: function (param) {
    var value,
    query = window.location.search.substring(1),
    params = query.split('&'),
    ii, pair;

    for (ii = 0; ii < params.length; ii++) {
        pair = params[ii].split('=');
        if (pair.length === 2 && pair[0].toLowerCase() === param.toLowerCase()) {
            value = pair[1];
        }
    }
    return value;
},

  /*
  No click handler is needed just redirect the user to a page with ?vepromo=PROMOCODE
  The code will find the promocode from the parameters using th above function.
  Only works for clients where ammending the redirect url is okay -
  *** Mainly French Accounts ***
  */

  promoCodeAnimation: function (promoCode, selector) {
  // use VeAPI.Chat.convertClick(clickref, url + '?vepromo=PROMOCODE');
    promoCode = promoCode || veTagData.customEvents.checkUrlParameter('vepromo');
    selector = selector || veTagData.settings.promocodeSelector;
    var $el = VEjQuery(selector),
      fontSize;

    if (!$el.length || !promoCode || $el.val().length) return;
    $el.val(promoCode);
    fontSize = $el.css('fontSize');
    $el.animate({
      fontSize: '+=20',
      opacity: 0.5
    }, 600).animate({
      fontSize: fontSize,
      opacity: 1
    }, 600, function () {
      $el.removeAttr('style'); // *If the site uses inline-styles you may need to remove this line.
    });
  },

onGetCaptureValue : function (formMappingId, value, controls) {
 if (formMappingId === 100333 || formMappingId === 100335 || formMappingId === 97738) {
 VEjQuery('.discount-form').css('display', 'block'); VEjQuery('.setcoupon span').addClass('active');

 veTagData.customEvents.promoCodeAnimation();

}
 return value;
}

},

                /*
                 * Criteria filters that are setup by tech team. The types of Criteria filters possible are:
                 *       * Personality - The matching of this criteria filters will defined the personality that the chat will have
                 *       * Variation
                 */
                criteriaFilters: {
  chat: [
    {
      value: "3504",
      criteria: [
        {
          formMappingId: 100332,
          value: "200",
          operator: ">=",
          typeName: "Number",
          innerGrouping: []
        },
        {
          formMappingId: 177957,
          value: "200",
          operator: ">=",
          typeName: "Number",
          innerGrouping: []
        },
        {
          formMappingId: 179237,
          value: "200",
          operator: ">=",
          typeName: "Number",
          innerGrouping: []
        }
      ]
    },
    {
      value: "3502",
      criteria: [
        {
          formMappingId: 100332,
          value: "150",
          operator: ">=",
          typeName: "Number",
          innerGrouping: []
        },
        {
          formMappingId: 177957,
          value: "150",
          operator: ">=",
          typeName: "Number",
          innerGrouping: []
        },
        {
          formMappingId: 179237,
          value: "150",
          operator: ">=",
          typeName: "Number",
          innerGrouping: []
        }
      ]
    },
    {
      value: "3501",
      criteria: [
        {
          formMappingId: 100332,
          value: "100",
          operator: ">=",
          typeName: "Number",
          innerGrouping: []
        },
        {
          formMappingId: 177957,
          value: "100",
          operator: ">=",
          typeName: "Number",
          innerGrouping: []
        },
        {
          formMappingId: 179237,
          value: "100",
          operator: ">=",
          typeName: "Number",
          innerGrouping: []
        }
      ]
    },
    {
      value: "3499",
      criteria: [
        {
          formMappingId: 100332,
          value: "80",
          operator: ">=",
          typeName: "Number",
          innerGrouping: []
        },
        {
          formMappingId: 177957,
          value: "80",
          operator: ">=",
          typeName: "Number",
          innerGrouping: []
        },
        {
          formMappingId: 179237,
          value: "80",
          operator: ">=",
          typeName: "Number",
          innerGrouping: []
        }
      ]
    },
    {
      value: "3497",
      criteria: [
        {
          formMappingId: 100332,
          value: "60",
          operator: ">=",
          typeName: "Number",
          innerGrouping: []
        },
        {
          formMappingId: 177957,
          value: "60",
          operator: ">=",
          typeName: "Number",
          innerGrouping: []
        },
        {
          formMappingId: 179237,
          value: "60",
          operator: ">=",
          typeName: "Number",
          innerGrouping: []
        }
      ]
    },
    {
      value: "4262",
      criteria: [
        {
          formMappingId: 100332,
          value: "1",
          operator: ">=",
          typeName: "Number",
          innerGrouping: []
        },
        {
          formMappingId: 177957,
          value: "1",
          operator: ">=",
          typeName: "Number",
          innerGrouping: []
        },
        {
          formMappingId: 179237,
          value: "1",
          operator: ">=",
          typeName: "Number",
          innerGrouping: []
        }
      ]
    }
  ],
  assist: [],
  promote: []
},

                /*
                 * All the apps that Ve Interactive has with the events
                 */
                appsMappings: {},

                /*
                 * All the apps that Ve Interactive has with the events
                 */
                apps: [
  {
    name: "Chat",
    exit: true,
    inactivity: true,
    backButton: true,
    load: false,
    enabled: true,
    maxActivationsPerSession: 1,
    activateOnlyOnLastTab: false,
    minTimeBetweenActivations: null,
    exitIntent: false
  }
]
            };

        if (!tag) {

            // Adding the Capture-apps file to the DOM
            tag = document.createElement('script');
            tag.type = 'text/javascript';
            tag.id = 'veConnect';
            tag.async = true;
            tag.src = window.location.protocol + d.veHostDomain + '/scripts/4.5/capture-apps-4.5.0.js';
            b = document.getElementsByTagName('script')[0];
            b.parentNode.insertBefore(tag, b);
        }
        return d;
    })();
};
