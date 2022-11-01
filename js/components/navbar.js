import { debounce } from "../helpers";

const button = document.querySelector('.site-navbar__toggler');
const menu = document.querySelector('.site-navbar .navbar');

const handleToggle = () => {
    button.classList.toggle('is-active');
    menu.classList.toggle('navbar--is-active');
    document.querySelector('html').classList.toggle('navbar-opened');
}

export const navbarToggle = () => {
    button.addEventListener('click', handleToggle);
}

/**
 * Remove dropdown click from desktop devices and back it to normal behaviour on mobile
 */
export const handleNavbarDropdown = () => {
    const dropdown = document.querySelector('.site-navbar .dropdown-toggle');
    const desktopBreakpoint = 992;

    if(!dropdown.getAttribute('data-bs-toggle') && window.innerWidth < desktopBreakpoint) {
        dropdown.setAttribute('data-bs-toggle', 'dropdown');
    }

    if(window.innerWidth >= desktopBreakpoint && dropdown.getAttribute('data-bs-toggle')) {
        dropdown.removeAttribute('data-bs-toggle');
    }

    window.addEventListener( 'resize', () => debounce(handleNavbarDropdown) );
}