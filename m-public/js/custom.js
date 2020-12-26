var win = $(window),
	doc = $(document),
	body = $(body);
var csrfToken = $('meta[name="csrf-token"]');
var csrfName = csrfToken.attr('data-name');
var csrfValue = csrfToken.attr('content');
var is_loadding = false;
var is_load_finish = false;
$(function () {
	API.init();
	FORMAT.init();
	FORM.init();
	MODAL_EVENT.init();
});

var success_func = function (data) { };

var MODAL_EVENT = {
	status: function () {
		var status = 0;
		$('#regis-join input').each(function (index, element) {
			if ($(this).is(':focus')) {
				status = 1;
			}
		});
		if (status === 1) {
			$('#regis-join .modal-dialog-centered').css({
				'align-items': 'flex-start',
			});
			$('#regis-join .regis-member').css({
				'max-height': '40vh',
				overflow: 'auto',
			});
		} else {
			$('#regis-join .modal-dialog-centered').css({
				'align-items': 'center',
			});
			$('#regis-join .regis-member').css({
				'max-height': 'none',
			});
		}
	},
	init: function () {
		$('#regis-join input')
			.focus(function (e) {
				MODAL_EVENT.status();
			})
			.blur(function (e) {
				MODAL_EVENT.status();
			});
	},
};
var FORM = {
	init: function () {
		this.send();
	},
	send: function () {
		var _self = this;
		$('.form_contact').submit(function (e) {
			e.preventDefault();
			var _this = $(this);
			if (is_loadding === true) return;
			is_loadding = false;
			dataPost = FORM.get_data_form(_this);
			API.call(_this.attr('action'));
			success_func = function (data) {
				_this.find('.text-danger').remove();
				var type = 'warning';
				if (data.code == 200) {
					_this[0].reset();
					$('.modal').modal('hide');
				} else {
					_self.show_validate(_this, data.validation);
				}
				toastMess(data.message);
				is_loadding = false;
				_this.find('button[type="submit"]').removeClass('is_sending');
			};
		});
	},
	get_data_form: function (_this) {
		let form_data = _this.serializeArray();
		var data = {};
		$.each(form_data, function (index, val) {
			data[val.name] = val.value;
		});
		return data;
	},
	show_validate: function (_this, validation) {
		$.each(validation, function (key, val) {
			_this
				.find($('[name="' + key + '"]'))
				.parent()
				.append('<p class="text-danger">' + val + '</p>');
		});
	},
};
var FORMAT = {
	toggle_active: function () {
		$('[toggle-active]').click(function (e) {
			e.preventDefault();
			let _this = $(this);
			let element = _this.attr('toggle-active');
			$(element)
				.not(_this)
				.removeClass('active');
			_this.addClass('active');
		});
	},
	init: function () {
		this.toggle_active();
	},
};
var HTML_ITEM = {
	news: function (data) {
		return `<div class="row  item_news m-b-20">
          <a class="overlay" onClick="redirectWebview('${base_url +
			'webview/news/detail/' +
			data.id}')" href="javascript:void(0)" />
            <div class="col-4">
                <a onClick="redirectWebview(${base_url +
			'webview/news/detail/' +
			data.id})" href="javascript:void(0)" title="${data.title}"  class="c-img">
                    <img src="${media_path + data.thumbnail}" alt="${data.title}">
                </a>
            </div>
            <div class="col-8">
                <h2 class="title">
                    <a onClick="redirectWebview(${base_url +
			'webview/news/detail/' +
			data.id})" href="javascript:void(0)" title="${data.title}" class="smooth hv-blue">${
			data.title
			}</a>
                </h2>
                <p class="desc">${data.description}</p>
            </div>
        </div>`;
	},
	news_related: function (data) {
		return `
				<div class="item_news_related item_slide_horizon position-relative">
				<a class="overlay" onClick="redirectWebview('${base_url +
			'webview/news/detail/' +
			data.id}',0)" href="javascript:void(0)" />
            <a onClick="redirectWebview('${base_url +
			'webview/news/detail/' +
			data.id}',0)" href="javascript:void(0)"  title="${data.title}" class="img">
                <img src="${media_path + data.thumbnail}" alt="${data.title}">
            </a>
            <div class="text">
                <h3 class="title"><a onClick="redirectWebview('${base_url +
			'webview/news/detail/' +
			data.id}',0)" href="javascript:void(0)"  title="${data.title}" class="smooth hv-blue">${
			data.title
			}</a></h3>
            </div>
        </div>
        `;
	},
	parseDate: function (input, format) {
		format = format || 'yyyy-mm-dd'; // default format
		var parts = input.match(/(\d+)/g),
			i = 0,
			fmt = {};
		// extract date-part indexes from the format
		format.replace(/(yyyy|dd|mm)/g, function (part) {
			fmt[part] = i++;
		});

		return new Date(parts[fmt['yyyy']], parts[fmt['mm']] - 1, parts[fmt['dd']]);
	},

	event_featured: function (item, category) {
		var date = moment(item.day_event);
		var day = date.format('DD');
		if (lang_code == 'vi') {
			var month = 'Th' + date.format('MM');
		} else {
			var month = date.format('MMM');
		}
		var html_category = '';
		if (category[item.category_id]) {
			html_category = `<p class="category">${category[item.category_id].title}</p>`;
		}
		return `
        <div class="item_slide_horizon item_event_featured position-relative">
            <a class="overlay" onClick="redirectWebview('${base_url +
			'webview/event/detail/' +
			item.id}',0)" href="javascript:void(0)" />
            <a onClick="redirectWebview('${base_url +
			'webview/event/detail/' +
			item.id}',0)" href="javascript:void(0)"  title="${item.title}" class="img">
                <img src="${media_path + item.thumbnail}" alt="${item.title}">
            </a>
            <div class="text">
                <div class="time">
                    <span class="day">${day}</span>
                    <span class="month">${month}</span>
                </div>
                <div class="info">
                    <h3 class="title"><a onClick="redirectWebview('${base_url +
			'webview/event/detail/' +
			item.id}',0)" href="javascript:void(0)"  title="${item.title}" class="smooth hv-blue">${
			item.title
			}</a></h3>
                    ${html_category}
                    <p class="address"><i class="fal fa-map-marker-alt"></i>${item.place + ' ' + item.city} </p>
                </div>
            </div>
        </div>
        `;
	},
};

var API = {
	init: function () {
		this.list_news();
		this.list_news_related();
		this.change_cate_news();
		this.list_event_featured();
		this.autoFillInfo();
	},
	autoFillInfo: function () {
		if (typeof url_get_profle === 'undefined' || $('#regis-join').length == 0) return;
		$.ajax({
			type: 'post',
			url: url_get_profle,
			data: JSON.stringify(dataPost),
			dataType: 'json',
			headers: { 'x-token': access_token, 'lang-code': lang_code },
			processData: false,
			contentType: 'application/json',
			success: function (data) {
				if (data.code === 200) {
					$.each(data.data, function (name, value) {
						if (name == 'title') {
							name = 'fullname';
						}
						$('[name="' + name + '"]').val(value);
					});
				}
			},
		});
	},
	list_event_featured: function () {
		if (typeof api_list_event_featured == 'undefined') return;
		API.call(api_list_event_featured);
		success_func = function (data) {
			let html = '';
			$.each(data.data, function (key, item) {
				html += HTML_ITEM.event_featured(item, data.category);
			});
			$('#result_ajax').html(html);
		};
	},
	change_cate_news: function () {
		$('.item_category_post').click(function () {
			try {
				dataPost.category_id = JSON.parse($(this).attr('data-category'));
				API.list_news();
			} catch (error) { }
		});
	},
	list_news: function () {
		if (typeof api_list_news == 'undefined' || is_loadding === true || is_load_finish === true) return;
		is_loadding = true;
		API.call(api_list_news);
		success_func = function (data) {
			if (data.data) {
				if (data.data.length > 0) {
					$.each(data.data, function (key, item) {
						$('#result_ajax').append(HTML_ITEM.news(item));
					});
					if (dataPost.page == 1) {
						API.load_more('list_news');
					}
				} else {
					is_load_finish = true;
				}
			}
			is_loadding = false;
		};
	},
	load_more: function (callback_func) {
		var last_scrolltop = 0;
		$(window).scroll(function () {
			if (is_loadding === true || is_load_finish === true) return;
			var win_scrolltop = win.scrollTop();
			if (win_scrolltop > last_scrolltop && window.innerHeight + win_scrolltop >= win.height() - 100) {
				dataPost.page++;
				API[callback_func]();
			}
			last_scrolltop = win_scrolltop;
		});
	},
	list_news_related: function () {
		if (typeof api_list_related == 'undefined') return;
		API.call(api_list_related);
		success_func = function (data) {
			let html = '';
			$.each(data.data, function (key, item) {
				html += HTML_ITEM.news_related(item);
			});
			$('#result_ajax').html(html);
		};
	},
	call: function (url) {
		dataPost[csrfName] = csrfValue;
		$.ajax({
			type: 'post',
			url: url,
			data: JSON.stringify(dataPost),
			dataType: 'json',
			headers: { 'x-token': access_token, 'lang-code': lang_code },
			processData: false,
			contentType: 'application/json',
			success: function (data) {
				success_func(data);
			},
		});
	},
};
function redirectWebview(link, is_show_header = 0) {
	if (typeof window.ReactNativeWebView != 'undefined') {
		var option_custom_header = {
			link: link,
			act: 'cusHead',
			show_header: is_show_header,
		};

		customHeader(option_custom_header);
	} else {
		window.location.href = link;
	}
}
