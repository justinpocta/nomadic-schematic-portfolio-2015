$(function() {
  $('#carousel').carouFredSel({
    width: '100%',
    items: {
      visible: 3,
      start: -1
    },
    scroll: {
      items: 1,
      duration: 1000,
      timeoutDuration: 8000
    },
    prev: '#prever',
    next: '#nexter',
    pagination: {
      container: '#pager',
      deviation: 1
    }
  });
});
