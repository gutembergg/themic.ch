import domReady from '@roots/sage/client/dom-ready';

import './src/ui-components/Swiper';
import './src/ui-components/theMobileNavigation';

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
