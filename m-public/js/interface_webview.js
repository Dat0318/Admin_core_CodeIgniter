function toastMess(content) {
	if (typeof window.ReactNativeWebView !== 'undefined') {
		var jsonData = '{"act":"toast","content":"' + content + '"}';
		window.ReactNativeWebView.postMessage(jsonData);
	} else {
		alert(content);
	}
}

function buttonBack() {
	if (typeof window.ReactNativeWebView !== 'undefined') {
		var jsonData = '{"act": "back"}';
		window.ReactNativeWebView.postMessage(jsonData);
	} else {
		window.history.go(-1);
	}
}

function customHeader(option) {
	if (typeof window.ReactNativeWebView !== 'undefined') {
		var jsonData = JSON.stringify(option);
		window.ReactNativeWebView.postMessage(jsonData);
	}
}
function shareWebview(link, title) {
	var data = {
		link: link,
		act: 'share',
		title: title,
	};
	customHeader(data);
}

function openMap(long, lat, place) {
	var data = {
		long: long,
		lat: lat,
		place: place,
		act: 'map',
	};
	customHeader(data);
}
