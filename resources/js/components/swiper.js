import Swiper from "swiper";
import { Autoplay } from "swiper/modules";
import "swiper/css";

new Swiper(".js-swiper-login", {
    modules: [Autoplay],
    loop: true,
    allowTouchMove: false,

    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
});
