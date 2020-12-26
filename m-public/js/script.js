function redirectLinkAddAbsent(id_post) {
    var link = base_url + 'webview/news/detail/' + id_post;

    if (typeof window.ReactNativeWebView != 'undefined') {

        var option_custom_header = {
            "link": link,
            "act": "cusHead",
            "show_header": false
        };

        customHeader(option_custom_header);

    } else {
        window.location.href = link;
    }
}
