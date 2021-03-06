// Generated by CoffeeScript 1.9.3
var magellan, redDot, scrollUtil, serverData, swipe, tabUtil;

serverData = {};

$('#server-data').children('input').each(function() {
  var $this;
  $this = $(this);
  serverData[$this.attr('name')] = $this.val();
});

redDot = (function() {
  var addRedDot, bindEvent, that;
  addRedDot = function() {
    var hasNew, hasNewNews, hasNewNotice, i, len, newsList, noticeList, recentReadNews, recentReadNotice;
    newsList = serverData.newslist;
    noticeList = serverData.noticelist;
    newsList = newsList ? newsList.split(',') : [];
    noticeList = noticeList ? noticeList.split(',') : [];
    recentReadNews = localStorage.getItem('recentReadNews');
    recentReadNotice = localStorage.getItem('recentReadNotice');
    recentReadNews = recentReadNews ? recentReadNews.split(',') : [];
    recentReadNotice = recentReadNotice ? recentReadNotice.split(',') : [];
    hasNew = false;
    hasNewNews = false;
    hasNewNotice = false;
    i = 0;
    len = newsList.length;
    while (i < len) {
      if (recentReadNews.indexOf(newsList[i]) === -1) {
        hasNew = true;
        hasNewNews = true;
        break;
      }
      i++;
    }
    i = 0;
    len = noticeList.length;
    while (i < len) {
      if (recentReadNotice.indexOf(noticeList[i]) === -1) {
        hasNew = true;
        hasNewNotice = true;
        break;
      }
      i++;
    }
    if (hasNew) {
      $('.fixed-footer .news span').addClass('red-dot');
    }
    if (hasNewNews) {
      $('#tab-title-news').find('span').addClass('red-dot');
    }
    if (hasNewNotice) {
      return $('#tab-title-notice').find('span').addClass('red-dot');
    }
  };
  bindEvent = function() {
    var buildStr;
    buildStr = function(str, id) {
      var arr;
      if (str == null) {
        str = '';
      }
      arr = str.trim().split(',');
      arr = arr.map(function(single) {
        return parseInt(single) || '';
      });
      if (arr.indexOf(id) === -1) {
        arr.push(id);
      }
      return arr.join(',');
    };
    $('.news-list a').click(function() {
      var $this, id;
      $this = $(this);
      id = $this.attr('href').match(/id\/(\d+)/);
      id = parseInt(id && id[1]) || 0;
      return localStorage.setItem('recentReadNews', buildStr(localStorage.getItem('recentReadNews'), id));
    });
    $('.notice-list a').click(function() {
      var $this, id;
      $this = $(this);
      id = $this.attr('href').match(/id\/(\d+)/);
      id = parseInt(id && id[1]) || 0;
      return localStorage.setItem('recentReadNotice', buildStr(localStorage.getItem('recentReadNotice'), id));
    });
    return localStorage.setItem('recentReadNews', serverData.newslist);
  };
  that = {};
  that.init = function() {
    bindEvent();
    return addRedDot();
  };
  return that;
})();

scrollUtil = (function() {
  var that, winScrollEvents;
  winScrollEvents = [];
  that = {};
  that.pushEvent = function(fn) {
    return winScrollEvents.push(fn);
  };
  that.init = function() {
    $('.banner-list').find('img').css('height', document.documentElement.clientWidth * 0.515625);
    return $(window).scroll(function() {
      var fn, j, len1, results, st;
      st = $(this).scrollTop();
      results = [];
      for (j = 0, len1 = winScrollEvents.length; j < len1; j++) {
        fn = winScrollEvents[j];
        results.push(fn(st));
      }
      return results;
    });
  };
  return that;
})();

swipe = (function() {
  var $box, buildIndicator, that;
  $box = $('.banner-box');
  buildIndicator = function() {
    var $wrappers, bannerNum;
    $wrappers = $box.children();
    bannerNum = $wrappers.eq(0).children().length;
    return $wrappers.eq(1).append(new Array(bannerNum).join('<li></li>'));
  };
  that = {};
  that.init = function() {
    buildIndicator();
    new Swipe($box.get(0), {
      speed: 500,
      auto: 4000,
      callback: function(idx, elm) {
        var lis;
        lis = $(elm).parent().next('ol').children();
        lis.removeClass('on').eq(idx).addClass('on');
      }
    });
  };
  return that;
})();

magellan = (function() {
  var $tabBox, $win, pushScrollEvent, that;
  that = {};
  $win = $(window);
  $tabBox = $('.tab-box').eq(0);
  pushScrollEvent = function() {
    that.initTop = $tabBox.offset().top;
    return scrollUtil.pushEvent(function(st) {
      if (st > that.initTop) {
        return $tabBox.addClass('fixed');
      } else {
        return $tabBox.removeClass('fixed');
      }
    });
  };
  that.init = function() {};
  that.scrollInit = function() {
    var frame, step, timer, y;
    y = scrollY;
    step = y / 20;
    timer = 0;
    frame = function() {
      scrollTo(0, y);
      y -= step;
      if (y <= that.initTop) {
        scrollTo(0, that.initTop);
        return cancelAnimationFrame(timer);
      } else {
        return timer = requestAnimationFrame(frame);
      }
    };
    if (y > that.initTop && requestAnimationFrame) {
      return timer = requestAnimationFrame(frame);
    }
  };
  return that;
})();

tabUtil = (function() {
  var $panelList, $panels, bindEvent, that;
  $panelList = $('.panel-list');
  $panels = $('.panel');
  that = {
    swipe: null
  };
  bindEvent = function() {
    return $('.tab-item').click(function() {
      var $this;
      magellan.scrollInit();
      $this = $(this);
      $this.addClass('active').siblings().removeClass('active');
      return that.swipe.slide($this.index());
    });
  };
  that.init = function() {
    bindEvent();
    return that.swipe = new Swipe($('.panel-box').get(0), {
      callback: function(index, element) {
        index = index % 2;
        $('.tab-list').children('.tab-item').removeClass('active').eq(index).addClass('active');
        return console.log(index);
      }
    });
  };
  return that;
})();

redDot.init();

scrollUtil.init();

tabUtil.init();

magellan.init();

swipe.init();
