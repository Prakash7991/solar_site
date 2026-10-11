(function () {
    'use strict';

    var cardSelectors = [
        '.hero-points > div',
        '.solution-card',
        '.feature-card',
        '.process-card',
        '.benefit-card',
        '.trust-grid > div'
    ];
    var directions = [
        'card-reveal--up',
        'card-reveal--down',
        'card-reveal--left',
        'card-reveal--right'
    ];
    var iconSelectors = [
        '.hero-points > div > span',
        '.card-icon',
        '.feature-card > span',
        '.process-card > b',
        '.process-card > span',
        '.benefit-card > span',
        '.trust-grid > div > span',
        '.solar-cta__icon',
        '.solar-cta__arrow'
    ];
    var iconDirections = [
        'icon-reveal--up',
        'icon-reveal--down',
        'icon-reveal--left',
        'icon-reveal--right',
        'icon-reveal--zoom-in',
        'icon-reveal--zoom-out'
    ];
    var cards = document.querySelectorAll(cardSelectors.join(','));
    var headings = document.querySelectorAll('main h1, main h2, main h3');
    var icons = document.querySelectorAll(iconSelectors.join(','));
    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    cards.forEach(function (card, index) {
        card.classList.add('card-reveal', directions[index % directions.length]);
    });

    headings.forEach(function (heading) {
        heading.classList.add('heading-reveal');
    });

    icons.forEach(function (icon, index) {
        icon.classList.add('icon-reveal', iconDirections[index % iconDirections.length]);
    });

    var animatedItems = document.querySelectorAll('.card-reveal, .heading-reveal, .icon-reveal');

    if (reduceMotion || !('IntersectionObserver' in window)) {
        animatedItems.forEach(function (item) {
            item.classList.add('is-visible');
        });
        return;
    }

    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            entry.target.classList.toggle('is-visible', entry.isIntersecting);
        });
    }, {
        threshold: 0.08,
        rootMargin: '0px 0px -3% 0px'
    });

    animatedItems.forEach(function (item) {
        observer.observe(item);
    });
})();
