import { popper } from "@popperjs/core";
import { Dropdown } from "bootstrap";

import { navbarToggle, handleNavbarDropdown } from "./components/navbar";
import { slider } from "./components/slider";

(() => {
    navbarToggle();
    handleNavbarDropdown();
    slider('.site-header__slider');
})();