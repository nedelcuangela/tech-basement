$(document).ready(function () {
    endpoint = 'live'
    access_key = '5a38e853b2fad378555f8e382553756d';
    $.ajax({
        url: 'http://api.coinlayer.com/api/' + endpoint + '?access_key=' + access_key,
        dataType: 'jsonp',
        success: function (json) {
            $(".btc-in-usdt").append(json.rates.BTC);
            $(".dodge-in-usdt").append(json.rates.DOGE);
            $(".eth-to-usdt").append(json.rates.ETH);
            $(".rev-to-usdt").append(json.rates.REV);
        }
    });
});