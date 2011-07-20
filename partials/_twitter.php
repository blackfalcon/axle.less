<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'search',
  search: 'anotheruiguy',
  interval: 3000,
  title: 'What the kids are saying',
  subject: 'Axle.LESS',
  width: 'auto',
  height: 200,
  theme: {
    shell: {
      background: '#ff8409',
      color: '#ffffff'
    },
    tweets: {
      background: '#ffffff',
      color: '#3f3f3f',
      links: '#3160b0'
    }
  },
  features: {
    scrollbar: false,
    loop: true,
    live: true,
    hashtags: true,
    timestamp: true,
    avatars: true,
    toptweets: true,
    behavior: 'default'
  }
}).render().start();
</script>