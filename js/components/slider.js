import Swiper, { Navigation } from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';

const defaultOptions = {
    modules: [Navigation],
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
}

/**
 * Swiper.js instance
 * @param {string} target target class name
 * @param {Object} options additional opions
 * @return {void} 
 */
export const slider = (target, options = {}) => {
    if(!document.querySelector(target)) return;
    
    new Swiper(target, {
        ...defaultOptions,
        ...options
    });
}