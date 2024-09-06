import domReady from '@roots/sage/client/dom-ready';
// import 'bootstrap/js/src/offcanvas.js'
import header from './global/header';

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
  header();
  console.log('here');
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
