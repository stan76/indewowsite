/**
 * All global and core class objects.
 *
 * @copyright   2010, Blizzard Entertainment, Inc
 * @class	   Core
 */

var Core = {

	/**
	 * Base context URL for the project.
	 */
	baseUrl: '/',

	/**
	 * The cached string for the browser.
	 */
	browser: null,

	/**
	 * Dynamic load queue.
	 */
	deferredLoadQueue: [],

	/**
	 * Current locale.
	 */
	locale: 'en-us',

	/**
	 * The current project.
	 */
	project: '',

	/**
	 * Path to static content.
	 */
	staticUrl: '/',
	/**
	 * Detect the browser type, based on feature detection and not user agent.
	 *
	 * @return string
	 */
	getBrowser: function() {
		if (Core.browser)
			return Core.browser;

		var s = $.support;

		if ((!s.boxModel) || (!s.hrefNormalized && !s.tbody && !s.style && !s.opacity)) {
			if ((typeof document.body.style.maxHeight != "undefined") || (window.XMLHttpRequest))
				Core.browser = 'ie7';
			else
				Core.browser = 'ie6';
		} else if (s.hrefNormalized && s.tbody && s.style && !s.opacity) {
			Core.browser = 'ie8';
		} else {
			Core.browser = 'other';
		}

		return Core.browser;
	},

	/**
	 * Return the language based off locale.
	 */
	getLanguage: function() {
		return Core.locale.split('-')[0];
	},

	/**
	 * Return the region based off locale.
	 */
	getRegion: function() {
		return Core.locale.split('-')[1];
	},

	/**
	 * Conveniently jump to a page.
	 *
	 * @param string url
	 */
	goTo: function(url, base) {
		base = base || false;
		location.href = (base ? Core.baseUrl : '') + url;
	},

	/**
	 * Format a locale to a specific structure.
	 *
	 * @param int format
	 * @param string divider
	 */
	formatLocale: function(format, divider) {
		divider = divider || '-';
		format = format || 1;

		switch (format) {
			case 1:
			default:
				return Core.locale.replace('-', divider);
			break;
			case 2:
				var parts = Core.locale.split('-');
				return parts[0] + divider + parts[1].toUpperCase();
			break;
			case 3:
				return Core.locale.toUpperCase().replace('-', divider);
			break;
		}
	},

	/**
	 * Convert a datetime string to a user’s local time zone and return as a string using the specified format.
	 *
	 * http://www.w3.org/TR/html5/common-microsyntaxes.html#valid-global-date-and-time-string
	 *
	 * @param string format
	 * @param string datetime (2010-07-22T07:41-07:00)
	 */
	formatDatetime: function(format, datetime) {
		if (datetime === undefined) {
			var localDate = new Date();
		} else {
			// gecko
			var localDate = new Date(datetime);
			// webkit
			if (isNaN(localDate.getTime())) { // 2010-07-22 07:41 GMT-0700
				datetime = datetime.substring(0,10) + ' ' + datetime.substring(11,16) + ':00 GMT' + datetime.substring(16,19) + datetime.substring(20,22);
				var localDate = new Date(datetime);
			}
			// trident
			if (isNaN(localDate.getTime())) { // 07-22 07:41 GMT-0700 2010
				datetime = datetime.substring(5,10) + ' ' + datetime.substring(11,16) + ' GMT' + datetime.substring(23,28) + ' ' + datetime.substring(0,4);
				var localDate = new Date(datetime);
			}
			if (isNaN(localDate.getTime())) {
				return false;
			}
		}

		if (format === undefined)
			format = 'yyyy-MM-ddThh:mmZ';

		var hr = localDate.getHours(),
			meridiem = 'AM';

		if (hr > 12) {
			hr -= 12;
			meridiem = 'PM'
		} else if (hr === 12) {
			meridiem = 'PM'
		} else if (hr === 0) {
			hr = 12;
		}

		var tz = parseInt(localDate.getTimezoneOffset() / 60 * -1, 10);

		if (tz < 0)
			tz = '-' + Core.zeroFill(Math.abs(tz), 2) + ':00';
		else
			tz = '+' + Core.zeroFill(Math.abs(tz), 2) + ':00';

		format = format.replace('yyyy', localDate.getFullYear());
		format = format.replace('MM', Core.zeroFill(localDate.getMonth() + 1,2));
		format = format.replace('dd', Core.zeroFill(localDate.getDate(),2));
		format = format.replace('HH', Core.zeroFill(localDate.getHours(),2));
		format = format.replace('hh', Core.zeroFill(hr,2));
		format = format.replace('mm', Core.zeroFill(localDate.getMinutes(),2));
		format = format.replace('a', meridiem);
		format = format.replace('Z', tz);

		return format;
	},

	/**
	 * Zero-fills a number to the specified length (works on floats and negatives, too).
	 *
	 * @param number number
	 * @param int width
	 * @param boolean includeDecimal
	 */
	zeroFill: function(number, width, includeDecimal) {
		if (includeDecimal === undefined)
			includeDecimal = false;

		var result = parseFloat(number),
			negative = false,
			length = width - result.toString().length,
			i = length - 1;

		if (result < 0) {
			result = Math.abs(result);
			negative = true;
			length++;
			i = length - 1;
		}

		if (width > 0) {
			if (result.toString().indexOf('.') > 0) {
				if (!includeDecimal)
					length += result.toString().split('.')[1].length;

				length++;
				i = length - 1;
			}

			if (i >= 0) {
				do {
					result = '0' + result;
				} while (i--);
			}
		}

		if (negative)
			return '-' + result;

		return result;
	},

	/**
	 * Include a JavaScript file via XHR.
	 *
	 * @param string url
	 * @param string success
	 * @param cache defaults to true
	 */
	include: function(url, success, cache) {
		$.ajax({
			url: url,
			dataType: 'script',
			success: success,
			cache: cache !== false
		});
	},

	/**
	 * Is the browser using IE?
	 *
	 * @param int version
	 * @return boolean
	 */
	isIE: function(version) {
		var browser = Core.getBrowser();

		if (version)
			return ('ie'+ version == browser);
		else
			return ((browser == 'ie6') || (browser == 'ie7') || (browser == 'ie8'));
	},

	/**
	 * Loads either a JavaScript or CSS file, by default deferring the load until after other
	 * content has loaded. The file type is determined by using the file extension.
	 *
	 * @param src
	 * @param deferred true by default
	 */
	load: function(path, deferred) {
		deferred = deferred !== false;

		if (!deferred || Page.loaded)
			Core.loadDeferred(path);
		else
			Core.deferredLoadQueue.push(path);
	},

	/**
	 * Open the link in a new window.
	 *
	 * @param object node
	 * @return false
	 */
	open: function(node) {
		if (node.href)
			window.open(node.href);

		return false;
	},

	/**
	 * Run on page load!
	 */
	processLoadQueue: function() {
		for (var i = 0, path; path = Core.deferredLoadQueue[i]; i++) {
			Core.load(path);
		}
	},

	/**
	 * Determine which type to load.
	 *
	 * @param string path
	 */
	loadDeferred: function(path) {
		var queryIndex = path.indexOf("?");
		var extIndex = path.lastIndexOf(".") + 1;
		var ext = path.substring(extIndex, queryIndex == -1 ? path.length : queryIndex);

		switch (ext) {
			case 'js':
				Core.loadDeferredScript(path);
			break;
			case "css":
				Core.loadDeferredStyle(path);
			break;
		}
	},

	/**
	 * Include JS file.
	 *
	 * @param string path
	 */
	loadDeferredScript: function(path) {
		$("<script/>", {
			type: "text/javascript",
			src: path
		}).appendTo("head");
	},

	/**
	 * Include CSS file.
	 *
	 * @param string path
	 * @param string media
	 */
	loadDeferredStyle: function(path, media) {
		/*$("<link/>", {
			rel: "stylesheet",
			type: "text/css",
			href: path,
			media: media || "all"
		}).appendTo("head");*/

		$('head').append('<link rel="stylesheet" href="'+ path +'" type="text/css" media="'+ (media || "all") +'" />');
	},

	/**
	 * Apply global functionality to certain UI elements.
	 */
	ui: function(context) {
		context = context || document;

		if (Core.isIE(6)) {
			$('button.ui-button', context).hover(
				function() {
					var that = $(this);

					if ((that.attr('disabled') != 'disabled') || (that.attr('disabled') != false))
						that.addClass('hover');
				}, function() {
					$(this).removeClass('hover');
				}
			);
		}

		if (Core.project != 'bam') {
			$('button.ui-button', context).click(function(e) {
				var that = $(this);
				var alt = that.attr('alt');

				if (alt == undefined)
					alt = "";

				if (this.tagName.toLowerCase() == 'button' && alt != "") {
					if (that.attr('type') == 'submit') {
						e.preventDefault();
						e.stopPropagation();

						that.find('span span').html(alt);
						that.removeClass('hover')
							.addClass('processing')
							.attr('disabled', 'disabled');

						// Manually submit
						that.parents('form').submit();
					}
				}

				return true;
			});
		}
	}

};

/**
 * Application related functionality.
 */
var App = {

	/**
	 * Hide the service bar warnings.
	 *
	 * @param string target
	 * @param string cookie
	 */
	closeWarning: function(target, cookie) {

        $(target).hide();

		if (cookie) {
			Cookie.create('serviceBar.'+ cookie, 1, {
				expires: 8760, // 1 year of hours
				path: '/'
			});
		}
	},

	/**
	 * Open and close the breaking news.
	 *
	 * @param boolean saveState
	 */
	breakingNews: function(saveState) {
		var node = $("#breaking-news");
		var news = $("#announcement-warning");

		if (news.is(':visible')) {
			news.hide();
			node.removeClass('opened');
		} else {
			news.show();
			node.addClass('opened');
		}

		if (saveState)
			Cookie.create('serviceBar.breakingNews', 1);
	},

	/**
	 * Hide service bar elements depending on cookies.
	 */
	serviceBar: function() {
		var browser = Cookie.read('serviceBar.browserWarning');
		var locale = Cookie.read('serviceBar.localeWarning');

		if (browser == 1)
			$('#browser-warning').hide();

		if (locale == 1)
			$('#i18n-warning').hide();
	},

	/**
	 * Dynamically load more than one sidebar module at a time.
	 *
	 * @param string baseUrl
	 * @param array modules
	 */
	sidebar: function(modules) {
		if (modules) {
			for (var i = 0; i <= (modules.length - 1); ++i) {
				App.loadModule(modules[i]);
			}
		}
	},

	/**
	 * Load the content of a sidebar module through AJAX.
	 *
	 * @param string key
	 */
	loadModule: function(key) {
		var module = $('#sidebar-'+ key);

		if (module.length > 0) {
			var content = module.find('.sidebar-content');
			content.addClass('loading');

			$.ajax({
				url: Core.baseUrl +'/sidebar/'+ key,
				type: 'GET',
				dataType: 'html',
				success: function(data) {
					if (data) {
						content.removeClass('loading');
						content[0].innerHTML = data;
					} else {
						content.hide();
						module.find('.sidebar-error').show();
					}
				},
				error: function() {
					content.hide();
					module.find('.sidebar-error').show();
				}
			});
		}
	}
};

/**
 * Methods for creating, reading, and deleting cookies.
 */
var Cookie = {

	/**
	 * Create a cookie. Can accept a third parameter as a literal object of options.
	 *
	 * @param string key
	 * @param mixed value
	 * @param object options
	 */
	create: function(key, value, options) {
		options = $.extend({}, options);
		options.expires = options.expires || 1; // 1 hour

		if (typeof options.expires == 'number') {
			var hours = options.expires;
			options.expires = new Date();
			options.expires.setTime(options.expires.getTime() + (hours * 3600000));
		}

		var cookie = [
			encodeURIComponent(key) +'=',
			options.escape ? encodeURIComponent(value) : value,
			options.expires ? '; expires=' + options.expires.toUTCString() : '',
			options.path ? '; path=' + options.path : '',
			options.domain ? '; domain=' + options.domain : '',
			options.secure ? '; secure' : ''
		];

		document.cookie = cookie.join('');
	},

	/**
	 * Read a cookie.
	 *
	 * @param string key
	 */
	read: function(key) {
		var name = key +'=';
		var cookies = document.cookie.split(';');

		if (cookies.length > 0) {
			for (var i = 0; i < cookies.length; i++) {
				var value = $.trim(cookies[i]);

				if (value.indexOf(name) == 0)
					return value.substring(name.length, value.length);
			}
		}

		return null;
	},

	/**
	 * Delete a cookie.
	 *
	 * @param string key
	 */
	erase: function(key) {
		Cookie.create(key, true, {
			expires: -1
		});
	}
};

/**
 * Input field helper. Shows default text on blur and hides on focus.
 */
var Input = {

	/**
	 * Initialize binds for search form.
	 */
	initialize: function() {
		$('#search-form')
			.attr('autocomplete', 'off')
			.submit(function() {
				return Input.submit('#search-field');
			});

		$('#search-field')
			.focus(function() {
				Input.activate(this);
			})
			.blur(function() {
				Input.reset(this);
			});
	},

	/**
	 * Save the current placeholder to the cache and remove.
	 *
	 * @param object node
	 */
	activate: function(node) {
		node = $(node);

		if (node.val() == node.attr('alt'))
			node.val("");

		node.addClass("active");
	},

	/**
	 * Display placeholder if value is empty.
	 *
	 * @param object node
	 */
	reset: function(node) {
		node = $(node);

		if (node.val() == "")
			node.removeClass("active").val(node.attr('alt'));
	},

	/**
	 * Clear field when submitting.
	 *
	 * @param string node
	 */
	submit: function(node) {
		node = $(node);

		if (node.val() == node.attr('alt'))
			node.val("");

		return true;
	}
};

/**
 * Utility to record window scroll / dimensions.
 */
var Page = {

	/**
	 * Window object.
	 */
	object: null,

	/**
	 * Initialized?
	 */
	loaded: false,

	/**
	 * Window dimensions.
	 */
	dimensions: {
		width: 0,
		height: 0
	},

	/**
	 * Window scroll.
	 */
	scroll: {
		top: 0,
		width: 0
	},

	/**
	 * Initialized and grab window properties.
	 *
	 * @constructor
	 */
	initialize: function() {
		if (Page.loaded)
			return;

		if (!Page.object)
			Page.object = $(window);

		Page.object
			.resize(Page.getDimensions)
			.scroll(Page.getScrollValues);

		Page.getScrollValues();
		Page.getDimensions();
		Page.loaded = true;
	},

	/**
	 * Get window scroll values.
	 */
	getScrollValues: function() {
		Page.scroll.top = Page.object.scrollTop();
		Page.scroll.left = Page.object.scrollLeft();
	},

	/**
	 * Get window dimensions.
	 */
	getDimensions: function() {
		Page.dimensions.width = Page.object.width();
		Page.dimensions.height = Page.object.height();
	}
};

/*
 * Simple open/hide toggle system.
 */
var Toggle = {

	/**
	 * Node cache.
	 */
	cache: {},

	/**
	 * Custom defined callback function.
	 */
	callback: null,

	/**
	 * Timeout to close the menu automatically.
	 */
	timeout: 800,

	/**
	 * Determines whether or not to persist menu open.
	 */
	keepOpen: false,

	/**
	 * Opens a menu / dropdown element.
	 *
	 * @param object triggerNode
	 * @param string activeClass
	 * @param string targetPath
	 * @param int delay
	 */
	open: function(triggerNode, activeClass, targetPath, delay) {
		if (delay)
			Toggle.timeout = delay;

		//keep menu open
		Toggle.keepOpen = true;

		//make sure any other menus that could be open are closed
		for (var id in Toggle.cache) {
			if (id != targetPath) {
				var currentID = Toggle.cache[id];
				$(currentID.trigger).removeClass(currentID.activeClass);
				$(id).hide();
			}
		}

		//bind events and cache
		if (!Toggle.cache[targetPath]) {
			//bind events and toggle the class
			$(triggerNode)
				.mouseleave(function() {
					Toggle.close(triggerNode, activeClass, targetPath, Toggle.timeout);
				})
				.mouseenter(function() {
					Toggle.keepOpen = true;
					window.clearTimeout(Toggle.cache[targetPath].timer);
				});

			//bind events and toggle display of the target
			$(targetPath)
				.mouseleave(function() {
					Toggle.close(triggerNode, activeClass, targetPath, Toggle.timeout);
				})
				.mouseenter(function() {
					Toggle.keepOpen = true;
					window.clearTimeout(Toggle.cache[targetPath].timer);
				});

			//cache properties
			Toggle.cache[targetPath] = {
				trigger:	 triggerNode,
				activeClass: activeClass,
				timer:	   null
			};

			//allow clicking anywhere off the dropdown to close it
			$("body").click(function() {
				if (!Toggle.keepOpen) {
					Toggle.triggerCallback();

					$(targetPath).hide();
					$(triggerNode).removeClass(activeClass);
					window.clearTimeout(Toggle.cache[targetPath].timer);
				}
			});
		}

		//toggle class/display
		$(triggerNode).toggleClass(activeClass);
		$(targetPath).toggle();

		window.clearTimeout(Toggle.cache[targetPath].timer);
	},

	/**
	 * Close the menu and clear any cached timers.
	 *
	 * @param object triggerNode
	 * @param string activeClass
	 * @param string targetPath
	 * @param int delay
	 */
	close: function(triggerNode, activeClass, targetPath, delay) {
		//allow clicking off the menu to close it
		Toggle.keepOpen = false;

		window.clearTimeout(Toggle.cache[targetPath].timer);

		Toggle.cache[targetPath].timer = setTimeout(function() {
			$(targetPath).hide();
			$(triggerNode).removeClass(activeClass);
			Toggle.triggerCallback();
		}, delay);
	},

	/*
	 * Trigger a callback if defined
	 */
	triggerCallback: function() {
		if ((Toggle.callback) && (typeof Toggle.callback === 'function'))
			Toggle.callback();
	}
};

/**
 * Google Analytics Related Functions
 */
var Tracking = {

	trackView: function(targetUrl, targetHref, newWin){
		if (typeof pageTracker != 'undefined')
			pageTracker._trackPageview(targetUrl);

		if (newWin)
			window.open(targetHref);
		else
			location.href = targetHref;

		if (typeof event != "undefined")
			event.returnValue = false;
	}

}

/**
 * Creates a full page blackout.
 */
var Blackout = {
    initialized: false,
    element: null,

	/**
	 * Create the div to be used.
	 *
	 * @constructor
	 */
    initialize: function() {
        Blackout.element = $('<div/>', { id: 'blackout' });

        $("body").append(Blackout.element);

        Blackout.initialized = true;
    },

    /*
     * Shows the blackout
     *
     * @param function callback (optional) - function that gets called after blackout shows
     * @param function onClick  (optional) - function binds onclick functionality to blackout
     */
    show: function(callback, onClick) {
        if (!Blackout.initialized)
            Blackout.initialize();

        // Ie fix
        if (Core.isIE()) {
            Blackout.element
                .css("width", Page.dimensions.width)
                .css("height", $(document).height());
        }

        // Show blackout
        Blackout.element.show();

        // Call optional functions

        if (callback && (typeof callback === 'function'))
            callback();

        if (onClick && typeof onClick == "function")
            Blackout.element.click(onClick);
    },

    /*
     * Hides blackout
     *
     * @param function callback (optional) - function that gets called after blackout hides
     *
     */
    hide: function(callback) {
		Blackout.element.hide();

        if (callback && typeof callback == "function")
            callback();
    }
}

/**
 * Prototype overwrites.
 */
String.prototype.trim = function() {
	return $.trim(this);
}

// Initialize all objects
$(function() {
	Page.initialize();
	Input.initialize();
	Core.processLoadQueue();
	Core.ui();
});