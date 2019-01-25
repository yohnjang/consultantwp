var featured = new Glide('.featured-glide', {
  type: 'carousel',
  perView: 3,
  startAt : 1,
  autoplay: false,
  gap: 20,
  peek: {
    before: 100,
    after: 100
  },
  breakpoints: {

    1200: {
      perView: 3,
    },
    768: {
      perView: 2,
    },
    500: {
      perView: 1,
      peek: {
        before: 40,
        after: 40
      },
    }
    
  }
})
featured.mount()
